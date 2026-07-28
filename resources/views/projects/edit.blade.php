<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
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
            <h1>Edit Project</h1>
        </div>

        <div class="card">
            <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label class="form-label" for="title">Judul Project *</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Deskripsi *</label>
                    <textarea id="description" name="description" class="form-control" required>{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="image_upload">Ganti Gambar Utama Project (Thumbnail)</label>
                    @if($project->image_url)
                        <div style="margin-bottom: 1rem;">
                            <img src="{{ $project->image_url }}" alt="Current Image" style="max-height: 150px; border-radius: 0.5rem;">
                        </div>
                    @endif
                    <input type="file" id="image_upload" name="image_upload" class="form-control" accept="image/*">
                    <small style="color: var(--text-muted); display: block; margin-top: 0.5rem;">Biarkan kosong jika tidak ingin mengubah gambar utama.</small>
                    @error('image_upload')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="screenshots">Tambah/Ganti Screenshots (Multiple)</label>
                    @if($project->screenshots && count($project->screenshots) > 0)
                        <div style="margin-bottom: 1rem; display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            @foreach($project->screenshots as $screenshot)
                                <img src="{{ $screenshot }}" alt="Screenshot" style="max-height: 100px; border-radius: 0.5rem;">
                            @endforeach
                        </div>
                    @endif
                    <input type="file" id="screenshots" name="screenshots[]" class="form-control" accept="image/*" multiple>
                    <small style="color: var(--text-muted); display: block; margin-top: 0.5rem;">Pilih foto baru untuk ditambahkan ke carousel. Foto baru akan ditambahkan (appended).</small>
                    @error('screenshots.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="demo_url">Link Demo Project</label>
                    <input type="url" id="demo_url" name="demo_url" class="form-control" value="{{ old('demo_url', $project->demo_url) }}" placeholder="https://contoh.com">
                    @error('demo_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="repo_url">Link Repository (Opsional)</label>
                    <input type="url" id="repo_url" name="repo_url" class="form-control" value="{{ old('repo_url', $project->repo_url) }}" placeholder="https://github.com/...">
                    @error('repo_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update Project</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-outline">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
