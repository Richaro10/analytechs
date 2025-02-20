FRONTEND_DIR="/var/www/analytechs/frontend"
BACKEND_DIR="/var/www/analytechs/backend"

# Création des répertoires
echo "Création des répertoires..."
sudo mkdir -p $FRONTEND_DIR $BACKEND_DIR
sudo chown -R $USER:$USER /var/www/analytechs

# Installation et build du frontend
echo "Configuration du frontend..."
cd $FRONTEND_DIR
npm install
npm run build

# Installation et configuration de Strapi
echo "Configuration du backend..."
cd $BACKEND_DIR
npm install
NODE_ENV=production npm run build

# Démarrage de Strapi avec PM2
echo "Démarrage de Strapi..."
pm2 delete analytechs-strapi 2>/dev/null || true
pm2 start ecosystem.config.js

# Configuration de Nginx
echo "Configuration de Nginx..."
sudo cp nginx.conf /etc/nginx/sites-available/analytechs
sudo ln -sf /etc/nginx/sites-available/analytechs /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx

echo "Déploiement initial terminé !"