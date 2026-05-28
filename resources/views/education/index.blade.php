<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Education History</title> 
</head> 
<body> 
 
    <h1>Riwayat Pendidikan (Education History)</h1> 
 
    <!-- Tombol Navigasi ke Halaman Tambah Data --> 
    <p> 
        <a href="{{ route('education.create') }}"> 
            <button>+ Tambah Riwayat Pendidikan</button> 
        </a> 
    </p> 
 
    <!-- Menampilkan Notifikasi Flash Session jika sukses melakukan aksi --> 
    @if(session('success')) 
        <div style="color: green; margin-bottom: 15px; padding: 10px; border: 1px solid green;"> 
            <strong>Sukses!</strong> {{ session('success') }} 
        </div> 
    @endif 
 
    <!-- Tabel Data --> 
    <table border="1" cellpadding="10" cellspacing="0" width="100%"> 
        <thead> 
            <tr> 
                <th>No</th> 
                <th>Nama Sekolah / Universitas</th> 
                <th>Gelar / Jenjang</th> 
                <th>Tahun Mulai</th> 
                <th>Tahun Selesai</th> 
                <th>Aksi</th> 
            </tr> 
        </thead> 
        <tbody> 
            <!-- Melakukan looping data dari Controller --> 
            @forelse ($educations as $index => $edu) 
                <tr> 
                    <td>{{ $index + 1 }}</td> 
 
                    <td>{{ $edu->school_name }}</td> 
                    <td>{{ $edu->degree }}</td> 
                    <td>{{ $edu->start_year }}</td> 
                    <td>{{ $edu->end_year ?? 'Masih Berlangsung' }}</td> <!-- Menampilkan teks jika null --> 
                    <td> 
                        <!-- Tombol Edit --> 
                        <a href="{{ route('education.edit', $edu->id) }}">Edit</a> |  
                         
                        <!-- Form untuk Hapus Data --> 
                        <form action="{{ route('education.destroy', $edu->id) }}" method="POST" style="display:inline;"> 
                            @csrf 
                            @method('DELETE') 
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button> 
                        </form> 
                    </td> 
                </tr> 
            @empty 
                <!-- Tampilan jika tabel di database masih kosong --> 
                <tr> 
                    <td colspan="6" style="text-align: center;">Belum ada data riwayat pendidikan.</td> 
                </tr> 
            @endforelse 
        </tbody> 
    </table> 
 
</body> 
</html>
