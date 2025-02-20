#!/bin/bash

# Installation de PostgreSQL
echo "Installation de PostgreSQL..."
sudo apt update
sudo apt install -y postgresql postgresql-contrib

# Création de l'utilisateur et de la base de données
echo "Configuration de la base de données..."
sudo -u postgres psql << EOF
CREATE USER analytechs WITH PASSWORD 'votre_mot_de_passe_securise';
CREATE DATABASE analytechs_prod;
GRANT ALL PRIVILEGES ON DATABASE analytechs_prod TO analytechs;
\q
EOF

# Autoriser les connexions depuis localhost
echo "Configuration des accès..."
sudo sed -i "s/#listen_addresses = 'localhost'/listen_addresses = 'localhost'/g" /etc/postgresql/*/main/postgresql.conf

echo "Configuration de la base de données terminée !"