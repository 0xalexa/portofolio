<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EducationHistoryController;

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

// ========================================== 
// ROUTE CRUD EDUCATION HISTORY 
// ========================================== 
 
// 1. Menampilkan daftar data (READ) 
Route::get('/education', [EducationHistoryController::class, 'index'])->name('education.index'); 
 
// 2. Menampilkan form tambah data (CREATE) 
Route::get('/education/create', [EducationHistoryController::class, 'create'])->name('education.create'); 
 
// 3. Memproses penyimpanan data baru (STORE) 
Route::post('/education', [EducationHistoryController::class, 'store'])->name('education.store'); 
 
// 4. Menampilkan form edit data spesifik berdasarkan ID (EDIT) 
Route::get('/education/{id}/edit', [EducationHistoryController::class, 'edit'])->name('education.edit'); 
 
// 5. Memproses pembaruan data (UPDATE) 
Route::put('/education/{id}', [EducationHistoryController::class, 'update'])->name('education.update'); 
 
// 6. Memproses penghapusan data (DELETE) 
Route::delete('/education/{id}', [EducationHistoryController::class, 'destroy'])->name('education.destroy');
