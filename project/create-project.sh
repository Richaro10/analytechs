#!/bin/bash

# Configuration
APP_DIR="/var/www/analytechs"
FRONTEND_DIR="$APP_DIR/frontend"
BACKEND_DIR="$APP_DIR/backend"

# Création des répertoires principaux
echo "Création de la structure du projet..."
sudo mkdir -p $FRONTEND_DIR $BACKEND_DIR
sudo chown -R $USER:$USER $APP_DIR

# Frontend (React + Vite)
echo "Configuration du frontend..."
cd $FRONTEND_DIR
npm create vite@latest . -- --template react-ts
npm install
npm install axios lucide-react react-router-dom @types/react-router-dom

# Backend (Strapi)
echo "Configuration du backend..."
cd $BACKEND_DIR
npx create-strapi-app@latest . --quickstart --no-run

# Configuration de la base de données Strapi
cd $BACKEND_DIR
npm install pg

# Création des fichiers de configuration
echo "Création des fichiers de configuration..."

# Frontend .env
cat > $FRONTEND_DIR/.env << EOF
VITE_STRAPI_URL=http://localhost:1337/api
VITE_STRAPI_TOKEN=your_strapi_token_here
EOF

# Backend .env
cat > $BACKEND_DIR/.env << EOF
HOST=0.0.0.0
PORT=1337
APP_KEYS=your_app_keys_here
API_TOKEN_SALT=your_token_salt_here
ADMIN_JWT_SECRET=your_admin_jwt_secret_here
JWT_SECRET=your_jwt_secret_here

# Database Configuration
DATABASE_HOST=localhost
DATABASE_PORT=5432
DATABASE_NAME=analytechs_prod
DATABASE_USERNAME=analytechs
DATABASE_PASSWORD=your_secure_password_here
EOF

# Configuration de la base de données Strapi
cat > $BACKEND_DIR/config/database.js << EOF
module.exports = ({ env }) => ({
  connection: {
    client: 'postgres',
    connection: {
      host: env('DATABASE_HOST', 'localhost'),
      port: env.int('DATABASE_PORT', 5432),
      database: env('DATABASE_NAME', 'analytechs_prod'),
      user: env('DATABASE_USERNAME', 'analytechs'),
      password: env('DATABASE_PASSWORD', 'your_secure_password_here'),
      ssl: env.bool('DATABASE_SSL', false),
    },
  },
});
EOF

echo "Structure du projet créée avec succès !"