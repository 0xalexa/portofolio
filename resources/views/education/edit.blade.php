<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Edit Education History</title> 
    <style> 
        .form-group { margin-bottom: 15px; } 
        .text-danger { color: red; font-size: 0.9em; } 
    </style> 
</head> 
<body> 
 
    <h1>Edit Riwayat Pendidikan</h1> 
     
    <p> 
        <a href="{{ route('education.index') }}">Kembali ke Daftar</a> 
    </p> 
 
    <!-- Form action mengarah ke route 'education.update' dengan menyertakan parameter ID. Metode default form HTML hanya mendukung GET dan POST. --> 
    <form action="{{ route('education.update', $education->id) }}" method="POST"> 
        @csrf 
         
        <!-- Directive @method('PUT') digunakan untuk memberitahu Laravel bahwa form ini dimaksudkan untuk melakukan HTTP PUT (Update data). --> 
        @method('PUT')  
         
        <div class="form-group"> 
            <label for="school_name">Nama Sekolah / Universitas:</label><br> 
            <!-- Gunakan fungsi old() dengan parameter kedua sebagai nilai default (data dari database) jika tidak ada data old yang tersimpan pada session. --> 
            <input type="text" id="school_name" name="school_name" value="{{ old('school_name', $education->school_name) }}" required> 
            @error('school_name') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <div class="form-group"> 
            <label for="degree">Gelar / Jenjang:</label><br> 
            <input type="text" id="degree" name="degree" value="{{ old('degree', $education->degree) }}" required> 
            @error('degree') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <div class="form-group"> 
            <label for="start_year">Tahun Mulai:</label><br> 
            <input type="number" id="start_year" name="start_year" value="{{ old('start_year', $education->start_year) }}" required> 
            @error('start_year') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <div class="form-group"> 
            <label for="end_year">Tahun Selesai:</label><br> 
            <input type="number" id="end_year" name="end_year" value="{{ old('end_year', $education->end_year) }}"> 
            <small><i>*Kosongkan jika masih aktif sekolah/kuliah</i></small> 
            @error('end_year') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror 
        </div> 
 
        <button type="submit">Update Data</button> 
    </form> 
 
</body> 
</html>
