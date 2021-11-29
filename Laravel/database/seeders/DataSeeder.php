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
            'en_title' => 'Engine Oil Change',
            'ku_title' => 'ڕۆن گۆڕین',
            'ar_title' => 'تغيير زيت المحرك',
            'en_description' => "With us, changing engine oil is an ease. Our team can provide a highest quality to change your car's engine oil.",
            'ku_description' => "لەگەڵ ئێمەدا بە باشترین شێواز دەتوانین ڕۆنی ئۆتۆمۆبیل بگۆرین.",
            'ar_description' => "معنا ، تغيير زيت المحرك سهل. يمكن لفريقنا توفير أعلى مستويات الجودة لتغيير زيت محرك سيارتك.",
            'image' => 'uploads/images/services/engine.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'en_title' => 'ATF Change',
            'ku_title' => 'گۆرێنی ڕۆنی مەکینە',
            'ar_title' => 'تغيير ATF',
            'en_description' => "Changing ATF (Automatic Transmission Fluid).",
            'ku_description' => "گۆڕینی ڕۆنی مەکینە...",
            'ar_description' => "تغيير ATF (سائل ناقل الحركة الأوتوماتيكي).",
            'image' => 'uploads/images/services/atf.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'en_title' => 'Changing/Balancing Tires',
            'ku_title' => 'گۆڕینی تایە',
            'ar_title' => 'تغيير / موازنة الإطارات',
            'en_description' => "Our team is managed by professional workers who can check and verify the safety of your tires on your car with the highest technology.",
            'ku_description' => "تایەی سەیارە دەتوانین بگۆرین",
            'ar_description' => "يدير فريقنا عمال محترفون يمكنهم التحقق والتحقق من سلامة إطارات سيارتك بأعلى التقنيات.",
            'image' => 'uploads/images/services/tires.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'en_title' => 'Brake Pads Change',
            'ku_title' => 'گۆڕینی کلاج',
            'ar_title' => 'تغيير تيل الفرامل',
            'en_description' => "Changing brake pads.",
            'ku_description' => "کلاجی ئۆتۆمۆبیل ئەگۆرین",
            'ar_description' => "تغيير تيل الفرامل.",
            'image' => 'uploads/images/services/brake_pads.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'en_title' => 'Engine Oil Change',
            'ku_title' => 'گۆرێنی ڕۆنی مەکینە',
            'ar_title' => 'تغيير زيت المحرك',
            'en_description' => "WitBrake Rotor Resurfacing.",
            'ku_description' => "گۆڕینی ڕۆنی مەکینە...",
            'ar_description' => "خفة دم دوار الفرامل.",
            'image' => 'uploads/images/services/brake_rotor.png',
        ]);
        \App\Models\Service::create([
            'user_id' => 1,
            'en_title' => 'Many More Services...',
            'ku_title' => 'چەندەها کاری تر...',
            'ar_title' => 'العديد من الخدمات...',
            'en_description' => "We are capable of doing many more services. Contact us to get to know more about our services.",
            'ku_description' => "تکایە پەیوەندیمان پێوە بکەن بۆ زانینی هەموو کارەکانمان...",
            'ar_description' => "نحن قادرون على القيام بالعديد من الخدمات. اتصل بنا لمعرفة المزيد عن خدماتنا.",
            'image' => 'uploads/images/services/more_services.png',
        ]);
        \App\Models\Team::create([
            'user_id' => 1,
            'en_name' => 'Kay Garland',
            'ku_name' => 'کەی گارلەند',
            'ar_name' => 'كاي كارلند',
            'en_position' => 'Lead Designer',
            'ku_position' => 'بەڕێوبەری دیزاین',
            'ar_position' => 'المصمم الرئيسي',
            'image' => 'uploads/images/teams/kay_garland.jpg',
            'socials' => [
                'instagram' => 'https://instagram.com/',
            ]
        ]);
        \App\Models\Team::create([
            'user_id' => 1,
            'en_name' => 'Larry Parker',
            'ku_name' => 'لاری پارکەر',
            'ar_name' => 'لاری باركر',
            'en_position' => 'Lead Marketer',
            'ku_position' => 'بەڕێوبەری مارکێتین',
            'ar_position' => 'يؤدي المسوق',
            'image' => 'uploads/images/teams/larry_parker.jpg',
            'socials' => [
                'facebook' => 'https://facebook.com/',
                'twitter' => 'https://twitter.com/',
                'instagram' => 'https://instagram.com/',
            ]
        ]);
        \App\Models\Team::create([
            'user_id' => 1,
            'en_name' => 'Diana Pertersen',
            'ku_name' => 'دیانا پێرتەرسن',
            'ar_name' => 'دیانا بيرترسن',
            'en_position' => 'Lead Developer',
            'ku_position' => 'بەڕێوبەری گەشەپێدەر',
            'ar_position' => 'المطور الرئيسي',
            'image' => 'uploads/images/teams/diana_pertersen.jpg',
            'socials' => []
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => '1password',
            'ku_name' => 'وەن پاسۆرد',
            'en_description' => '1password brand',
            'ku_description' => 'براندی وەن پاسۆرد',
            'image' => 'uploads/images/partners/1password.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => '3m',
            'ku_name' => 'سری ئێم',
            'en_description' => '3m brand',
            'ku_description' => 'براندی سری ئێم',
            'image' => 'uploads/images/partners/3m.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => 'angularjs',
            'ku_name' => 'ئەنگولەر',
            'en_description' => 'angularjs brand',
            'ku_description' => 'براندی ئەنگولەر',
            'image' => 'uploads/images/partners/angularjs.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => 'apachekafka',
            'ku_name' => 'کافکا',
            'en_description' => 'apachekafka brand',
            'ku_description' => 'براندی کافکا',
            'image' => 'uploads/images/partners/apachekafka.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => 'auth0',
            'ku_name' => 'ئۆس',
            'en_description' => 'auth0 brand',
            'ku_description' => 'براندی ئۆس',
            'image' => 'uploads/images/partners/auth0.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => 'michelin',
            'ku_name' => 'میشێلن',
            'en_description' => 'michelin brand',
            'ku_description' => 'براندی میشێلن',
            'image' => 'uploads/images/partners/michelin.png',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => 'shell',
            'ku_name' => 'شێڵ',
            'en_description' => 'shell brand',
            'ku_description' => 'براندی شێڵ',
            'image' => 'uploads/images/partners/shell.svg',
        ]);
        \App\Models\Partner::create([
            'user_id' => 1,
            'en_name' => 'dotnet',
            'ku_name' => 'dotnet',
            'en_description' => 'dotnet brand',
            'ku_description' => 'براندی دۆتنێت',
            'image' => 'uploads/images/partners/dotnet.svg',
        ]);
    }
}
