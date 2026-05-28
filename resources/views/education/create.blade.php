<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Tambah Education History</title> 
    <style> 
        .form-group { margin-bottom: 15px; } 
        .text-danger { color: red; font-size: 0.9em; } 
    </style> 
</head> 
<body> 
 
    <h1>Tambah Riwayat Pendidikan</h1> 
     
    <p> 
        <a href="{{ route('education.index') }}">Kembali ke Daftar</a> 
    </p> 
 
    <!-- Form action mengarah ke route 'education.store' dengan metode POST --> 
    <form action="{{ route('education.store') }}" method="POST"> 
        @csrf <!-- Directive ini WAJIB ada di setiap form Laravel untuk keamanan (Cross-Site Request Forgery) --> 
         
        <div class="form-group"> 
            <label for="school_name">Nama Sekolah / Universitas:</label><br> 
            <input type="text" id="school_name" name="school_name" value="{{ old('school_name') }}" required> 
            <!-- Menampilkan pesan error validasi jika ada --> 
            @error('school_name') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <div class="form-group"> 
            <label for="degree">Gelar / Jenjang (misal: SMA, S1, S2):</label><br> 
            <input type="text" id="degree" name="degree" value="{{ old('degree') }}" required> 
            @error('degree') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <div class="form-group"> 
            <label for="start_year">Tahun Mulai:</label><br> 
            <input type="number" id="start_year" name="start_year" placeholder="Contoh: 2020" value="{{ old('start_year') }}" required> 
            @error('start_year') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
 
        </div> 
 
        <div class="form-group"> 
            <label for="end_year">Tahun Selesai:</label><br> 
            <input type="number" id="end_year" name="end_year" placeholder="Contoh: 2024" value="{{ old('end_year') }}"> 
            <small><i>*Kosongkan jika masih aktif sekolah/kuliah</i></small> 
            @error('end_year') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <button type="submit">Simpan Data</button> 
    </form> 
 
</body> 
</html>
