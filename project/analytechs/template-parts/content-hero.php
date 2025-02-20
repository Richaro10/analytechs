<?php
$hero_title = get_field('hero_title') ?: 'Transformez vos données en décisions stratégiques';
$hero_subtitle = get_field('hero_subtitle') ?: 'Analytechs vous accompagne dans votre transformation digitale';
$hero_cta_text = get_field('hero_cta_text') ?: 'Commencer maintenant';
$hero_cta_link = get_field('hero_cta_link') ?: '/contact';
?>

<div class="relative bg-gradient-to-r from-[#1E3A8A] to-[#3B82F6] pt-24">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -inset-[10px] bg-[linear-gradient(45deg,transparent_25%,rgba(68,107,158,0.2)_50%,transparent_75%,transparent_100%)] bg-[length:60px_60px] animate-[gradient_3s_linear_infinite]"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="text-xl mb-8 text-gray-100 leading-relaxed">
                    <?php echo esc_html($hero_subtitle); ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo esc_url($hero_cta_link); ?>" 
                       class="group bg-accent text-white px-8 py-3 rounded-md font-medium hover:bg-[#D97706] transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-accent/20">
                        <?php echo esc_html($hero_cta_text); ?>
                        <svg class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>