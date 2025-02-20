<?php
if (!defined('ABSPATH')) exit;
?>
<footer class="bg-[#1A1F2B] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Logo et description -->
            <div>
                <div class="flex items-center mb-4">
                    <div class="relative mr-2">
                        <svg class="h-6 w-6 text-white absolute -left-1.5 -top-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 6v6s0 3 4 3 4-3 4-3V6M4 9h8M12 6v6s0 3 4 3 4-3 4-3V6M12 9h8"/>
                        </svg>
                        <svg class="h-6 w-6 text-accent absolute -left-0.5 top-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 7h-3a2 2 0 0 1-2-2V2M10 2v3.343M14 2v3.343M4 2v3.343M14 8h.01M4 8h.01M20 8h.01M14 12h.01M4 12h.01M20 12h.01M14 16h.01M4 16h.01M20 16h.01M14 20h.01M4 20h.01M20 20h.01"/>
                        </svg>
                        <svg class="h-6 w-6 text-white relative left-0.5 top-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 20V10M12 20V4M6 20v-6"/>
                        </svg>
                    </div>
                    <div class="font-bold tracking-tight">
                        <span class="text-white text-xl">Analy</span>
                        <span class="text-accent text-xl">techs</span>
                        <span class="text-xs text-gray-400 block -mt-1 tracking-wider">DATA & DEV & MANAGEMENT</span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm mb-6">
                    Analytechs vous accompagne dans votre transformation digitale avec des solutions sur mesure en Business Intelligence, Data Analytics et Conseil en Management.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-accent transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Nos Services -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-6">Nos Services</h3>
                <ul class="space-y-4">
                    <li><a href="/services" class="text-gray-400 hover:text-accent transition-colors">Business Intelligence</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-accent transition-colors">Data Analytics</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-accent transition-colors">Intelligence Artificielle</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-accent transition-colors">Formation & Accompagnement</a></li>
                </ul>
            </div>

            <!-- Liens Utiles -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-6">Liens Utiles</h3>
                <ul class="space-y-4">
                    <li><a href="/about" class="text-gray-400 hover:text-accent transition-colors">À propos</a></li>
                    <li><a href="/blog" class="text-gray-400 hover:text-accent transition-colors">Blog</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-accent transition-colors">Contact</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-accent transition-colors">Services</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-6">Contact</h3>
                <ul class="space-y-4">
                    <li class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 text-accent mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <path d="m22 6-10 7L2 6"/>
                        </svg>
                        contact@analytechs.fr
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 text-accent mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        +33 1 23 45 67 89
                    </li>
                    <li class="flex items-start text-gray-400">
                        <svg class="h-5 w-5 text-accent mr-3 mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <div>
                            123 Avenue des Champs-Élysées<br>
                            75008 Paris
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Barre de copyright -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © <?php echo date('Y'); ?> Analytechs. Tous droits réservés.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="/mentions-legales" class="text-sm text-gray-400 hover:text-accent transition-colors">Mentions légales</a>
                    <a href="/politique-de-confidentialite" class="text-sm text-gray-400 hover:text-accent transition-colors">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>