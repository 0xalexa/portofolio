<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/', function () {
    // Mengambil jumlah repository publik dari GitHub dan menyimpannya di Cache selama 1 jam
    $repoCount = Cache::remember('github_repo_count', 3600, function () {
        $response = Http::get('https://api.github.com/users/0xalexa');
        
        if ($response->successful()) {
            return $response->json()['public_repos'] ?? 5;
        }
        
        return 5; // Angka default jika gagal mengambil data
    });

    $projects = \App\Models\Project::latest()->get();

    return view('index', ['repoCount' => $repoCount, 'projects' => $projects]);
});
Route::resource('projects', ProjectController::class);
Route::get('/index', function () {
    return redirect('/');
});
Route::get('/cv', function () {
    $path = public_path('cv/Alex_Kusuma_Wardana_CV.pdf');
    if (!file_exists($path)) {
        $pathDouble = public_path('cv/Alex_Kusuma_Wardana_CV.pdf.pdf');
        if (file_exists($pathDouble)) {
            $path = $pathDouble;
        }
    }
    return response()->download($path, 'Alex_Kusuma_Wardana_CV.pdf');
});
