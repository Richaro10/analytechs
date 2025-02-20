<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
                Nos Solutions
            </h2>
            <p class="text-xl text-gray-600">
                Des solutions innovantes pour votre transformation digitale
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $solutions = array(
                array(
                    'icon' => '<path d="M18 20V10M12 20V4M6 20v-6"/>',
                    'title' => "Business Intelligence",
                    'description' => "Transformez vos données en insights actionnables avec nos solutions BI sur mesure."
                ),
                array(
                    'icon' => '<path d="M21 8v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z"/><path d="M12 6v12M9 9v6M6 12v3M18 9v6M15 11v4"/>',
                    'title' => "Data Engineering",
                    'description' => "Construisez des pipelines de données robustes et évolutifs pour alimenter vos analyses."
                ),
                array(
                    'icon' => '<path d="M12 2a2 2 0 0 0-2 2c0 1.2.8 2.2 1.9 2.5C11.3 8.5 10 10.6 10 13a5 5 0 0 0 10 0c0-2.4-1.3-4.5-1.9-6.5 1.1-.3 1.9-1.3 1.9-2.5a2 2 0 0 0-2-2h-6z"/>',
                    'title' => "Intelligence Artificielle",
                    'description' => "Exploitez la puissance du Machine Learning pour prédire les tendances et optimiser vos processus."
                ),
                array(
                    'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                    'title' => "Formation & Accompagnement",
                    'description' => "Montez en compétence avec nos programmes de formation personnalisés."
                ),
                array(
                    'icon' => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
                    'title' => "Webmarketing",
                    'description' => "Optimisez votre présence en ligne avec des stratégies data-driven et des campagnes performantes."
                ),
                array(
                    'icon' => '<path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/>',
                    'title' => "Marketing Digital",
                    'description' => "Développez votre visibilité avec du SEO, content marketing et des analyses de performance avancées."
                )
            );

            foreach ($solutions as $solution) : ?>
                <div class="group relative bg-gradient-to-br from-white to-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300"></div>
                    <div class="relative">
                        <div class="text-accent group-hover:text-primary transition-colors duration-300">
                            <div class="bg-primary/5 p-4 rounded-xl inline-block transform transition-transform duration-300 group-hover:scale-110">
                                <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <?php echo $solution['icon']; ?>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 mb-4 text-primary group-hover:text-accent transition-colors duration-300">
                            <?php echo $solution['title']; ?>
                        </h3>
                        <p class="text-gray-600">
                            <?php echo $solution['description']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>