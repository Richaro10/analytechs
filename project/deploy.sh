#!/bin/bash

# Variables
FRONTEND_DIR="/var/www/analytechs/frontend"
BACKEND_DIR="/var/www/analytechs/backend"
REPO_URL="votre_url_github"
PM2_APP_NAME="analytechs-strapi"

# Backup de la base de données
echo "Creating database backup..."
BACKUP_FILE="/var/backups/analytechs_$(date +%Y%m%d_%H%M%S).sql"
sudo -u postgres pg_dump analytechs_prod > $BACKUP_FILE

# Pull latest changes
echo "Pulling latest changes..."
git pull origin main

# Frontend deployment
echo "Building and deploying frontend..."
npm ci
npm run build
rm -rf $FRONTEND_DIR/*
cp -r dist/* $FRONTEND_DIR/

# Backend deployment
echo "Deploying backend..."
cd $BACKEND_DIR
npm ci
NODE_ENV=production npm run build

# Database migrations
echo "Running database migrations..."
NODE_ENV=production npm run strapi database:migrate

# Restart Strapi
echo "Restarting Strapi..."
pm2 restart $PM2_APP_NAME || pm2 start "npm run start" --name $PM2_APP_NAME

# Reload Nginx
echo "Reloading Nginx..."
sudo systemctl reload nginx

echo "Deployment complete!"