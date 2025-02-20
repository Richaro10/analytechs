#!/bin/bash

# Variables
APP_DIR="/var/www/analytechs"
FRONTEND_DIR="$APP_DIR/frontend"
BACKEND_DIR="$APP_DIR/backend"
BACKUP_DIR="/var/backups/analytechs"

# Création du répertoire de backup
sudo mkdir -p $BACKUP_DIR

# Backup de la base de données
echo "Création d'une sauvegarde de la base de données..."
BACKUP_FILE="$BACKUP_DIR/analytechs_$(date +%Y%m%d_%H%M%S).sql"
sudo -u postgres pg_dump analytechs_prod > $BACKUP_FILE

# Déploiement du frontend
echo "Déploiement du frontend..."
cd $FRONTEND_DIR
git pull origin main
npm ci
npm run build

# Déploiement du backend
echo "Déploiement du backend..."
cd $BACKEND_DIR
git pull origin main
npm ci
NODE_ENV=production npm run build

# Redémarrage des services avec la nouvelle configuration PM2
echo "Redémarrage des services..."
pm2 delete analytechs-strapi 2>/dev/null || true
pm2 start ecosystem.config.js
sudo systemctl reload nginx

echo "Déploiement terminé avec succès !"