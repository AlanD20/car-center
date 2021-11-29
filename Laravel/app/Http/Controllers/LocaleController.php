<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    private $status = [];
    public function english()
    {
        App::setLocale('en');
        $this->isLocaleSet('en');
        return back()->with($this->status);
    }
    public function kurdish()
    {
        App::setLocale('ku');
        $this->isLocaleSet('ku');
        return back()->with($this->status);
    }
    public function arabic()
    {
        App::setLocale('ar');
        $this->isLocaleSet('ar');
        return back()->with($this->status);
    }

    function isLocaleSet(string $locale)
    {
        if (App::isLocale($locale)) {
            $this->status['success'] = __('index.admin.messages.language.success');
            $this->status['refresh'] = 'Loading contents...';
            session()->put('locale', $locale);
            return;
        } else
            $this->status['fail'] = __('index.admin.messages.language.fail');
    }
}
