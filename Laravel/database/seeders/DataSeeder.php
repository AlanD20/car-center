<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Service::create([
            'user_id' => 1,
            'title' => 'Engine Oil Change',
            'description' => "With us, changing engine oil is an ease. Our team can provide a highest quality to change your car's engine oil.",
            'image' => 'uploads/images/services/engine.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'title' => 'ATF Change',
            'description' => "Changing ATF (Automatic Transmission Fluid).",
            'image' => 'uploads/images/services/atf.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'title' => 'Changing/Balancing Tires',
            'description' => "Our team is managed by professional workers who can check and verify the safety of your tires on your car with the highest technology.",
            'image' => 'uploads/images/services/tires.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'title' => 'Brake Pads Change',
            'description' => "Changing brake pads.",
            'image' => 'uploads/images/services/brake_pads.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'title' => 'Engine Oil Change',
            'description' => "WitBrake Rotor Resurfacing.",
            'image' => 'uploads/images/services/brake_rotor.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'title' => 'Many More Services...',
            'description' => "We are capable of doing many more services. Contact us to get to know more about our services.",
            'image' => 'uploads/images/services/more_services.png',
        ]);
        \App\Models\Team::create([
            'user_id' => 1,
            'name' => 'Kay Garland',
            'position' => 'Lead Designer',
            'image' => 'uploads/images/team/kay_garland.jpg',
            'socials' => [
                'instagram' => 'https://instagram.com/',
            ]
        ]);
        \App\Models\Team::create([
            'user_id' => 1,
            'name' => 'Larry Parker',
            'position' => 'Lead Marketer',
            'image' => 'uploads/images/team/larry_parker.jpg',
            'socials' => [
                'facebook' => 'https://facebook.com/',
                'twitter' => 'https://twitter.com/',
                'instagram' => 'https://instagram.com/',
            ]
        ]);
        \App\Models\Team::create([
            'user_id' => 1,
            'name' => 'Diana Pertersen',
            'position' => 'Lead Developer',
            'image' => 'uploads/images/team/diana_pertersen.jpg',
            'socials' => []
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => 'shell',
            'description' => 'shell brand',
            'image' => 'uploads/images/partners/shell.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => 'dotnet',
            'description' => 'dotnet brand',
            'image' => 'uploads/images/partners/dotnet.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => '3m',
            'description' => '3m brand',
            'image' => 'uploads/images/partners/3m.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => '1password',
            'description' => '1password brand',
            'image' => 'uploads/images/partners/1password.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => 'angularjs',
            'description' => 'angularjs brand',
            'image' => 'uploads/images/partners/angularjs.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => 'apachekafka',
            'description' => 'apachekafka brand',
            'image' => 'uploads/images/partners/apachekafka.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'name' => 'auth0',
            'description' => 'auth0 brand',
            'image' => 'uploads/images/partners/auth0.svg',
        ]);
    }
}
