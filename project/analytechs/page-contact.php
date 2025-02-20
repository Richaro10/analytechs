<?php
/*
Template Name: Page Contact
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
                    Nous sommes là pour répondre à vos questions et vous accompagner dans vos projets
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-b from-transparent to-white"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <div class="space-y-6">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-accent mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <path d="m22 6-10 7L2 6"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-neutral">Email</h3>
                            <p class="text-gray-600">contact@analytechs.fr</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-accent mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-neutral">Téléphone</h3>
                            <p class="text-gray-600">+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-accent mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-neutral">Adresse</h3>
                            <p class="text-gray-600">123 Avenue des Champs-Élysées, 75008 Paris</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-neutral mb-2">Nom complet</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-neutral mb-2">Sujet</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-transparent"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-accent hover:bg-[#D97706] text-white font-medium py-3 px-6 rounded-md transition-colors">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>