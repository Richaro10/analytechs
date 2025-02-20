<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
                Ils nous font confiance
            </h2>
            <p class="text-xl text-gray-600">
                Des entreprises leaders qui transforment leurs données en succès
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
            <?php
            $clients = array(
                array(
                    'name' => "Société Générale",
                    'logo' => "https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1480&q=80"
                ),
                array(
                    'name' => "BNP Paribas",
                    'logo' => "https://images.unsplash.com/photo-1560179707-f14e90ef3623?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2148&q=80"
                ),
                array(
                    'name' => "Orange",
                    'logo' => "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                ),
                array(
                    'name' => "Crédit Agricole",
                    'logo' => "https://images.unsplash.com/photo-1554774853-719586f82d77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                )
            );

            foreach ($clients as $client) : ?>
                <div class="group relative bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img
                            src="<?php echo esc_url($client['logo']); ?>"
                            alt="<?php echo esc_attr($client['name']); ?>"
                            class="object-contain w-full h-full filter grayscale group-hover:grayscale-0 transition-all duration-300"
                        />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>