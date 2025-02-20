<?php
/*
Template Name: Page Services
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
                    Des solutions complètes pour votre transformation digitale
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Business Intelligence -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-accent mb-6">
                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 20h20M4 20V4m4 16V8m4 12V4m4 16v-8m4 8V8"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-neutral mb-4">Business Intelligence</h3>
                <p class="text-gray-600 mb-6">Transformez vos données en insights actionnables avec nos solutions BI sur mesure.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Tableaux de bord interactifs
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Reporting automatisé
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        KPIs personnalisés
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Intégration multi-sources
                    </li>
                </ul>
            </div>

            <!-- Data Analytics -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-accent mb-6">
                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 8v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z"/>
                        <path d="M12 6v12M9 9v6M6 12v3M18 9v6M15 11v4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-neutral mb-4">Data Analytics</h3>
                <p class="text-gray-600 mb-6">Exploitez la puissance de vos données avec des analyses avancées.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Analyse prédictive
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Machine Learning
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Big Data
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Data Mining
                    </li>
                </ul>
            </div>

            <!-- Intelligence Artificielle -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-accent mb-6">
                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2a2 2 0 0 0-2 2c0 1.2.8 2.2 1.9 2.5C11.3 8.5 10 10.6 10 13a5 5 0 0 0 10 0c0-2.4-1.3-4.5-1.9-6.5 1.1-.3 1.9-1.3 1.9-2.5a2 2 0 0 0-2-2h-6z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-neutral mb-4">Intelligence Artificielle</h3>
                <p class="text-gray-600 mb-6">Optimisez vos processus avec des solutions d'IA innovantes.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Deep Learning
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        NLP
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Computer Vision
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Automatisation
                    </li>
                </ul>
            </div>

            <!-- Formation & Accompagnement -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-accent mb-6">
                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-neutral mb-4">Formation & Accompagnement</h3>
                <p class="text-gray-600 mb-6">Montez en compétence avec nos programmes de formation personnalisés.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Formations sur mesure
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Coaching
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Workshops
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Certification
                    </li>
                </ul>
            </div>

            <!-- Webmarketing -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-accent mb-6">
                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M2 12h20"/>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-neutral mb-4">Webmarketing</h3>
                <p class="text-gray-600 mb-6">Optimisez votre présence en ligne avec des stratégies data-driven.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        SEO
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Content Marketing
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Analytics
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Social Media
                    </li>
                </ul>
            </div>

            <!-- Marketing Digital -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow">
                <div class="text-accent mb-6">
                    <svg class="h-12 w-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-neutral mb-4">Marketing Digital</h3>
                <p class="text-gray-600 mb-6">Développez votre visibilité avec des stratégies performantes.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Stratégie digitale
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Campagnes
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        Conversion
                    </li>
                    <li class="flex items-center text-gray-600">
                        <span class="h-1.5 w-1.5 rounded-full bg-accent mr-2"></span>
                        ROI
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>