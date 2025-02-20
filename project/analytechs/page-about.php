<?php
/*
Template Name: Page À propos
*/

get_header(); ?>

<div class="min-h-screen bg-white">
    <div class="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold text-white mb-4"><?php the_title(); ?></h1>
                <p class="text-xl text-gray-100">
                    Découvrez notre vision et nos valeurs pour la transformation digitale
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-16">
            <h2 class="text-3xl font-semibold text-primary mb-6">Notre Vision</h2>
            <div class="bg-gradient-to-r from-primary to-secondary p-8 rounded-lg text-white">
                <p class="text-xl leading-relaxed">
                    <?php echo get_field('vision') ?: 'Chez Analytechs, nous croyons en la puissance des données pour transformer les entreprises. Notre mission est d\'accompagner les organisations dans leur transformation digitale en leur fournissant des solutions innovantes et sur mesure qui créent une réelle valeur ajoutée.'; ?>
                </p>
            </div>
        </div>

        <div class="mb-16">
            <h2 class="text-3xl font-semibold text-primary mb-6">Nos Valeurs</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $valeurs = array(
                    array(
                        'icon' => '<path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>',
                        'titre' => 'Innovation',
                        'description' => 'Nous explorons constamment les nouvelles technologies et méthodologies pour offrir des solutions avant-gardistes à nos clients.'
                    ),
                    array(
                        'icon' => '<path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/>',
                        'titre' => 'Excellence',
                        'description' => 'Chaque projet est une opportunité de démontrer notre engagement envers la qualité et la performance exceptionnelle.'
                    ),
                    array(
                        'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>',
                        'titre' => 'Collaboration',
                        'description' => 'Nous croyons en la force du travail d\'équipe et construisons des partenariats durables avec nos clients.'
                    ),
                    array(
                        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                        'titre' => 'Intégrité',
                        'description' => 'La transparence et l\'éthique sont au cœur de toutes nos interactions professionnelles.'
                    ),
                    array(
                        'icon' => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>',
                        'titre' => 'Agilité',
                        'description' => 'Notre approche flexible nous permet de nous adapter rapidement aux besoins changeants du marché.'
                    ),
                    array(
                        'icon' => '<path d="M8.21 13.89L7 23l9-9-5-5-2.79 4.89zM15 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM3 3l18 18"/>',
                        'titre' => 'Expertise',
                        'description' => 'Notre équipe de professionnels qualifiés garantit des solutions optimales pour chaque défi.'
                    )
                );

                foreach ($valeurs as $valeur) : ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow border border-gray-100">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary/10 p-3 rounded-lg mr-4">
                                <svg class="h-8 w-8 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <?php echo $valeur['icon']; ?>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-primary"><?php echo $valeur['titre']; ?></h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo $valeur['description']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-semibold text-primary mb-6">Notre Expertise</h2>
            <div class="bg-gradient-to-r from-primary to-secondary rounded-lg p-8 text-white">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $expertises = array(
                        array(
                            'titre' => 'Business Intelligence',
                            'description' => 'Transformez vos données en insights actionnables pour prendre de meilleures décisions stratégiques.'
                        ),
                        array(
                            'titre' => 'Data Analytics',
                            'description' => 'Exploitez la puissance de vos données avec des analyses avancées et du machine learning.'
                        ),
                        array(
                            'titre' => 'Conseil en Management',
                            'description' => 'Optimisez votre stratégie d\'entreprise avec nos conseils experts et notre accompagnement personnalisé.'
                        )
                    );

                    foreach ($expertises as $expertise) : ?>
                        <div class="bg-white/10 backdrop-blur-lg p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-3"><?php echo $expertise['titre']; ?></h3>
                            <p class="text-gray-100">
                                <?php echo $expertise['description']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>