<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function migration()
    {
        Artisan::call('migrate', ["--force" => true]);
        return back()->with('success', 'Migration installation successful');
    }
    public function migrationReset()
    {
        Artisan::call('migrate:fresh', ["--force" => true]);
        Artisan::call('db:seed', ["--class" => 'AboutSeeder', "--force" => true]);
        return back()->with('success', 'Reset Migration successful');
    }
    public function storageLink()
    {
        Artisan::call('storage:link', ["--force" => true]);
        return back()->with('success', 'Storage link successful');
    }
    public function UserSeed()
    {
        Artisan::call('db:seed', ["--class" => 'UserSeeder', "--force" => true]);
        return back()->with('success', 'User database seed successful');
    }
    public function DataSeed()
    {
        Artisan::call('db:seed', ["--class" => 'DataSeeder', "--force" => true]);
        Artisan::call('db:seed', ["--class" => 'SlideSeeder', "--force" => true]);
        return back()->with('success', 'Data database seed successful');
    }
    public function generateKey()
    {
        Artisan::call('key:generate', ["--force" => true]);
        return back()->with('success', 'Application key generated');
    }
    public function clearCache()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('event:clear');
        return back()->with('success', 'Cache Cleared Successful');
    }
    public function makeCache()
    {
        Artisan::call('config:cache');
        Artisan::call('view:cache');
        Artisan::call('event:cache');
        Artisan::call('route:clear');
        return back()->with('success', 'Files cached Successful');
    }
    public function clearPwdResetTokens()
    {
        Artisan::call('auth:clear-resets');
        return back()->with('success', 'Reset Passwords table cleared');
    }
    public function appUp()
    {
        Artisan::call('up');
        return back()->with('success', 'Application mode is Up');
    }
    public function appDown()
    {
        Artisan::call('down');
        return back()->with('success', 'Application mode is Down');
    }
}
