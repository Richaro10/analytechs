#!/bin/bash

# Mise à jour du système
echo "Mise à jour du système..."
sudo apt update && sudo apt upgrade -y

# Installation des dépendances
echo "Installation des dépendances..."
sudo apt install -y nginx postgresql postgresql-contrib nodejs npm git

# Installation de PM2 globalement
echo "Installation de PM2..."
sudo npm install -g pm2

# Configuration de Nginx
echo "Configuration de Nginx..."
sudo mkdir -p /var/www/analytechs/{frontend,backend}
sudo chown -R $USER:$USER /var/www/analytechs

# Configuration du pare-feu
echo "Configuration du pare-feu..."
sudo ufw allow 'Nginx Full'
sudo ufw allow ssh
sudo ufw allow 1337
sudo ufw enable

echo "Configuration du VPS terminée !"