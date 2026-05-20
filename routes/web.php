<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    // Mengambil jumlah repository publik dari GitHub dan menyimpannya di Cache selama 1 jam
    $repoCount = Cache::remember('github_repo_count', 3600, function () {
        $response = Http::get('https://api.github.com/users/0xalexa');
        
        if ($response->successful()) {
            return $response->json()['public_repos'] ?? 5;
        }
        
        return 5; // Angka default jika gagal mengambil data
    });

    return view('index', ['repoCount' => $repoCount]);
});

Route::get('/index', function () {
    return redirect('/');
});
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
