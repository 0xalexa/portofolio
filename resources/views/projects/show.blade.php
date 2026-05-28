<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project</title>
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
            max-width: 900px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
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

        .btn-outline {
            background-color: transparent;
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }

        .btn-outline:hover {
            background-color: var(--border-color);
        }
        
        .btn-primary {
            background-color: var(--accent);
            color: white;
            border: 1px solid var(--accent);
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            border-color: var(--accent-hover);
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
            border: 1px solid var(--border-color);
        }

        .project-img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-bottom: 1px solid var(--border-color);
        }

        .card-body {
            padding: 2.5rem;
        }

        .project-title {
            font-size: 2rem;
            font-weight: 700;
            margin: 0 0 1rem 0;
            color: #ffffff;
        }

        .project-desc {
            color: var(--text-muted);
            font-size: 1.125rem;
            line-height: 1.75;
            margin-bottom: 2rem;
            white-space: pre-wrap;
        }

        .detail-meta {
            display: flex;
            gap: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        .meta-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .meta-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            font-weight: 600;
        }

        .meta-value {
            font-size: 0.95rem;
        }

        .meta-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
        }

        .meta-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Detail Project</h1>
            <div>
                <a href="{{ route('projects.index') }}" class="btn btn-outline" style="margin-right: 0.5rem;">Kembali</a>
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">Edit Project</a>
            </div>
        </div>

        <div class="card">
            @if($project->image)
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="project-img">
            @else
                <div style="width: 100%; height: 300px; background-color: var(--bg-color); display: flex; align-items: center; justify-content: center; color: var(--text-muted); border-bottom: 1px solid var(--border-color);">
                    Tidak ada gambar
                </div>
            @endif
            
            <div class="card-body">
                <h2 class="project-title">{{ $project->title }}</h2>
                <div class="project-desc">{{ $project->description }}</div>
                
                <div class="detail-meta">
                    <div class="meta-item">
                        <span class="meta-label">Tanggal Dibuat</span>
                        <span class="meta-value">{{ $project->created_at->format('d M Y, H:i') }}</span>
                    </div>
                    @if($project->link)
                    <div class="meta-item">
                        <span class="meta-label">Link Project</span>
                        <a href="{{ $project->link }}" target="_blank" class="meta-link">Kunjungi Link &rarr;</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
