#!/bin/bash

# Variables
FRONTEND_DIR="/var/www/analytechs/frontend"
BACKEND_DIR="/var/www/analytechs/backend"
GITHUB_REPO="votre_url_github"

# Création des répertoires
sudo mkdir -p $FRONTEND_DIR $BACKEND_DIR
sudo chown -R $USER:$USER /var/www/analytechs

# Clone du dépôt
git clone $GITHUB_REPO /tmp/analytechs

# Installation et build du frontend
cd /tmp/analytechs
npm install
npm run build
cp -r dist/* $FRONTEND_DIR/

# Configuration de la base de données
sudo -u postgres psql << EOF
CREATE USER analytechs WITH PASSWORD 'votre_mot_de_passe_securise';
CREATE DATABASE analytechs_prod;
GRANT ALL PRIVILEGES ON DATABASE analytechs_prod TO analytechs;
\q
EOF

# Installation et configuration de Strapi
cd $BACKEND_DIR
npm install
NODE_ENV=production npm run build
pm2 start "npm run start" --name analytechs-strapi

# Configuration de Nginx
sudo cp /tmp/analytechs/nginx.conf /etc/nginx/sites-available/analytechs
sudo ln -s /etc/nginx/sites-available/analytechs /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx

echo "Déploiement initial terminé !"