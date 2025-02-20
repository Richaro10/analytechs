#!/bin/bash

# Variables
FRONTEND_DIR="/var/www/analytechs/frontend"
BACKEND_DIR="/var/www/analytechs/backend"
TEMP_DIR="/tmp/analytechs"
GITHUB_REPO="https://github.com/Richaro10/analytechs"

# Création des répertoires
echo "Création des répertoires..."
sudo mkdir -p $FRONTEND_DIR $BACKEND_DIR $TEMP_DIR
sudo chown -R $USER:$USER /var/www/analytechs
sudo chown -R $USER:$USER $TEMP_DIR

# Clone du dépôt
echo "Clonage du dépôt..."
git clone $GITHUB_REPO $TEMP_DIR

# Installation et build du frontend
echo "Build du frontend..."
cd $TEMP_DIR
npm install
npm run build
cp -r dist/* $FRONTEND_DIR/

# Installation et configuration de Strapi
echo "Configuration de Strapi..."
cd $BACKEND_DIR
npm install
NODE_ENV=production npm run build

# Démarrage de Strapi avec PM2
echo "Démarrage de Strapi..."
pm2 delete analytechs-strapi 2>/dev/null || true
pm2 start ecosystem.config.js

# Configuration de Nginx
echo "Configuration de Nginx..."
sudo cp $TEMP_DIR/nginx.conf /etc/nginx/sites-available/analytechs
sudo ln -sf /etc/nginx/sites-available/analytechs /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx

# Nettoyage
echo "Nettoyage..."
rm -rf $TEMP_DIR

echo "Déploiement initial terminé !"