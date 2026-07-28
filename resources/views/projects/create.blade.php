<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project Baru</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0f172a;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --card-bg: #1e293b;
            --border-color: #334155;
            --accent: #3b82f6;
            --accent-hover: #2563eb;
            --danger: #ef4444;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 1rem;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.6rem 1.25rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }

        .btn-outline:hover {
            background-color: var(--border-color);
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            border: 1px solid var(--border-color);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: var(--bg-color);
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            color: var(--text-main);
            font-family: inherit;
            font-size: 0.95rem;
            transition: border-color 0.2s;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .text-danger {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: block;
        }
        
        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Tambah Project Baru</h1>
        </div>

        <div class="card">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label class="form-label" for="title">Judul Project *</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Deskripsi *</label>
                    <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="image_upload">Upload Gambar Utama Project (Thumbnail)</label>
                    <input type="file" id="image_upload" name="image_upload" class="form-control" accept="image/*">
                    <small style="color: var(--text-muted); display: block; margin-top: 0.5rem;">Biarkan kosong jika tidak ingin menambahkan gambar utama.</small>
                    @error('image_upload')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="screenshots">Upload Screenshots (Multiple)</label>
                    <input type="file" id="screenshots" name="screenshots[]" class="form-control" accept="image/*" multiple>
                    <small style="color: var(--text-muted); display: block; margin-top: 0.5rem;">Pilih beberapa foto sekaligus untuk ditampilkan di carousel preview.</small>
                    @error('screenshots.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="demo_url">Link Demo Project</label>
                    <input type="url" id="demo_url" name="demo_url" class="form-control" value="{{ old('demo_url') }}" placeholder="https://contoh.com">
                    @error('demo_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="repo_url">Link Repository (Opsional)</label>
                    <input type="url" id="repo_url" name="repo_url" class="form-control" value="{{ old('repo_url') }}" placeholder="https://github.com/...">
                    @error('repo_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan Project</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-outline">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
