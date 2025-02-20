import AdmZip from 'adm-zip';

const zip = new AdmZip();

// Ajouter les fichiers du thème
const files = [
    'style.css',
    'functions.php',
    'header.php',
    'footer.php',
    'index.php',
    'page.php',
    'single.php',
    'front-page.php',
    'page-mentions-legales.php',
    'page-politique-confidentialite.php',
    'page-about.php',
    'page-contact.php',
    'page-services.php',
    'template-parts/content-hero.php',
    'template-parts/content-solutions.php',
    'template-parts/content-clients.php',
    'inc/acf-fields.php',
    'assets/css/tailwind.min.css',
    'assets/js/navigation.js',
    'src/tailwind.css',
    'tailwind.config.js',
    'postcss.config.js',
    'package.json'
];

// Ajouter chaque fichier à l'archive
files.forEach(file => {
    zip.addLocalFile(`analytechs/${file}`, file.includes('/') ? file.substring(0, file.lastIndexOf('/')) : '');
});

// Générer le fichier zip
zip.writeZip('analytechs.zip');

console.log('Le fichier analytechs.zip a été mis à jour avec succès!');