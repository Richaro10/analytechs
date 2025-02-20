<?php get_header(); ?>

<div class="overflow-hidden">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        <?php echo get_field('hero_title') ?: 'Transformez vos données en décisions stratégiques'; ?>
                    </h1>
                    <p class="text-xl mb-8 text-gray-100 leading-relaxed">
                        <?php echo get_field('hero_subtitle') ?: 'Analytechs vous accompagne dans votre transformation digitale avec des solutions sur mesure en Business Intelligence, Data Analytics et Conseil en Management.'; ?>
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo get_field('hero_cta_link') ?: '/contact'; ?>" 
                           class="group bg-accent text-white px-8 py-3 rounded-md font-medium hover:bg-[#D97706] transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-accent/20">
                            <?php echo get_field('hero_cta_text') ?: 'Commencer maintenant'; ?>
                            <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="/services" 
                           class="border-2 border-white/80 text-white px-8 py-3 rounded-md font-medium hover:bg-white hover:text-primary transition-all duration-300 text-center backdrop-blur-sm hover:shadow-lg flex items-center justify-center">
                            En savoir plus
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 transform lg:translate-y-8">
                    <div class="bg-white/10 backdrop-blur-lg p-6 rounded-lg hover:bg-white/15 transition-colors group">
                        <div class="text-accent mb-4 group-hover:scale-110 transition-transform">
                            <svg class="h-16 w-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 20h20M4 20V4m4 16V8m4 12V4m4 16v-8m4 8V8"/>
                            </svg>
                        </div>
                        <h3 class="text-white text-lg font-semibold mb-2">Business Intelligence</h3>
                        <p class="text-gray-100">Visualisez vos données pour une prise de décision éclairée</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg p-6 rounded-lg hover:bg-white/15 transition-colors group transform translate-y-4">
                        <div class="text-accent mb-4 group-hover:scale-110 transition-transform">
                            <svg class="h-16 w-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 8v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z"/>
                                <path d="M12 6v12M9 9v6M6 12v3M18 9v6M15 11v4"/>
                            </svg>
                        </div>
                        <h3 class="text-white text-lg font-semibold mb-2">Data Analytics</h3>
                        <p class="text-gray-100">Exploitez la puissance de vos données</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg p-6 rounded-lg col-span-2 hover:bg-white/15 transition-colors group transform translate-y-2">
                        <div class="text-accent mb-4 group-hover:scale-110 transition-transform">
                            <svg class="h-16 w-16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 3v18h18"/>
                                <path d="m19 9-5 5-4-4-3 3"/>
                            </svg>
                        </div>
                        <h3 class="text-white text-lg font-semibold mb-2">Conseil en Management</h3>
                        <p class="text-gray-100">Optimisez votre stratégie d'entreprise</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent via-white/50 to-white"></div>
    </div>

    <?php get_template_part('template-parts/content', 'solutions'); ?>
    <?php get_template_part('template-parts/content', 'clients'); ?>
</div>

<?php get_footer(); ?>