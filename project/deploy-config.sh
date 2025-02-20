#!/bin/bash

# Configuration des variables
DOMAIN="analytechs.com"
DB_USER="analytechs"
DB_NAME="analytechs_prod"
DB_PASSWORD="votre_mot_de_passe_securise"
APP_DIR="/var/www/analytechs"
FRONTEND_DIR="$APP_DIR/frontend"
BACKEND_DIR="$APP_DIR/backend"

# Création des répertoires
echo "Création des répertoires..."
sudo mkdir -p $FRONTEND_DIR $BACKEND_DIR
sudo chown -R $USER:$USER $APP_DIR

# Installation des dépendances système
echo "Installation des dépendances..."
sudo apt update
sudo apt install -y curl git nginx postgresql postgresql-contrib

# Installation de Node.js via NVM
echo "Installation de Node.js..."
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"
nvm install 18
nvm use 18

# Installation de PM2
echo "Installation de PM2..."
npm install -g pm2

# Configuration de PostgreSQL
echo "Configuration de PostgreSQL..."
sudo -u postgres psql << EOF
CREATE USER $DB_USER WITH PASSWORD '$DB_PASSWORD';
CREATE DATABASE $DB_NAME;
GRANT ALL PRIVILEGES ON DATABASE $DB_NAME TO $DB_USER;
\q
EOF

# Configuration de base de Nginx
echo "Configuration de Nginx..."
sudo tee /etc/nginx/sites-available/$DOMAIN > /dev/null << EOF
server {
    listen 80;
    server_name $DOMAIN www.$DOMAIN;

    location / {
        root $FRONTEND_DIR/dist;
        try_files \$uri \$uri/ /index.html;
    }

    location /api/ {
        proxy_pass http://localhost:1337;
        proxy_http_version 1.1;
        proxy_set_header Upgrade \$http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_set_header Host \$host;
        proxy_cache_bypass \$http_upgrade;
    }

    location /admin {
        proxy_pass http://localhost:1337/admin;
        proxy_http_version 1.1;
        proxy_set_header Upgrade \$http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_set_header Host \$host;
        proxy_cache_bypass \$http_upgrade;
    }
}
EOF

sudo ln -sf /etc/nginx/sites-available/$DOMAIN /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx

# Configuration du pare-feu
echo "Configuration du pare-feu..."
sudo ufw allow ssh
sudo ufw allow http
sudo ufw allow https
sudo ufw allow 1337
echo "y" | sudo ufw enable

echo "Configuration terminée !"