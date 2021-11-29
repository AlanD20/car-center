<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AboutSection::create([
            'en_content' => "Car center is professional, modern automotive service, with more than 30 years of experience in the automotive industry, we thrive to work on providing the best and highest quality service at the lowest price possible. We are located in a very easy to reach location at the center of the city. Our staff consists of many professionals, academic, and intelligent technicians that are supervised and managed by team of highly qualified mechanical and automotive engineers to get the best results. Our management department consists of highly trained, competent, ethical teams of accountants and data entry employees that work to provide the best customer experience that exceeds all expectations.",
            'ku_content' => "سەنتەری کار پڕۆفیشناڵە، خزمەتگوزاری مۆدێڕنی ئۆتۆمۆبیلە، لەگەڵ زیاتر لە 30 ساڵ شارەزایی لە پیشەسازی ئۆتۆمۆبیل، ئێمە گەشە دەکەین بۆ کارکردن لەسەر دابینکردنی باشترین و باشترین خزمەتگوزاری کوالیتی بە کەمترین نرخ ئێمە لە شوێنێکی زۆر ئاسانداین بۆ گەیشتن بە شوێنی ناوەڕاستی شارەکە. ستافەکەمان پێکدێت لەچەندین پسپۆڕ و ئەکادیمی و تەکنیکی زیرەک کە لەلایەن تیمی ئەندازیاری میکانیکی و ئۆتۆمۆبیلی بەتواناوە سەرپەرشتی دەکرێن و بەڕێوەدەبرێن بۆ بەدەستهێنانی باشترین ئەنجام بەشی بەڕێوەبردنی ئێمە پێکهاتووە لە تیمە زۆر ڕاهێنراوەکان، لێهاتووەکان، ئەخلاقەکانی ژمێریارەکان و کارمەندانی چوونەژوورەوەی داتا کە کار دەکەن بۆ دابینکردنی باشترین ئەزموونی کڕیار کە لە هەموو پێشبینیەکان تێدەپەڕێت.",
            'ar_content' => "مركز کار هو خدمة سيارات احترافية وحديثة ، مع أكثر من 30 عامًا من الخبرة في صناعة السيارات ، نحن نزدهر للعمل على تقديم أفضل وأعلى جودة خدمة بأقل سعر ممكن. نحن موجودون في مكان يسهل الوصول إليه في وسط المدينة. يتكون فريق العمل لدينا من العديد من المهنيين والأكاديميين والفنيين الأذكياء الذين يشرف عليهم ويديرهم فريق من المهندسين الميكانيكيين والسيارات المؤهلين تأهيلا عاليا للحصول على أفضل النتائج. يتكون قسم الإدارة لدينا من فرق مدربة تدريباً عالياً ومختصة وأخلاقية من المحاسبين وموظفي إدخال البيانات الذين يعملون على توفير أفضل تجربة للعملاء تفوق كل التوقعات.",
            'image' => 'uploads/images/about/about.jpg',
        ]);
    }
}
