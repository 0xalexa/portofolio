<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Projects</title>
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
            --danger-hover: #dc2626;
            --success: #10b981;
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
            max-width: 1200px;
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
            padding: 0.5rem 1rem;
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

        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }

        .btn-danger {
            background-color: transparent;
            color: var(--danger);
            border: 1px solid var(--danger);
        }

        .btn-danger:hover {
            background-color: var(--danger);
            color: white;
        }

        .btn-outline {
            background-color: transparent;
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }

        .btn-outline:hover {
            background-color: var(--border-color);
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success);
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            border: 1px solid var(--border-color);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 1rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        .table th {
            font-weight: 600;
            color: var(--text-muted);
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            background-color: rgba(0,0,0,0.2);
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        .table tr:hover td {
            background-color: rgba(255,255,255,0.02);
        }

        .project-img {
            width: 48px;
            height: 48px;
            border-radius: 0.5rem;
            object-fit: cover;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .empty-state {
            padding: 3rem;
            text-align: center;
            color: var(--text-muted);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Projects Dashboard</h1>
            <div>
                <a href="{{ url('/') }}" class="btn btn-outline" style="margin-right: 0.5rem;">Lihat Web</a>
                <a href="{{ route('projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>
                                <img src="{{ $project->image ?? 'https://via.placeholder.com/48' }}" alt="{{ $project->title }}" class="project-img">
                            </td>
                            <td>
                                <div style="font-weight: 500;">{{ $project->title }}</div>
                                <div style="font-size: 0.875rem; color: var(--text-muted); margin-top: 0.25rem; max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $project->description }}
                                </div>
                            </td>
                            <td>
                                @if($project->link)
                                    <a href="{{ $project->link }}" target="_blank" style="color: var(--accent); text-decoration: none;">Link</a>
                                @else
                                    <span style="color: var(--text-muted)">-</span>
                                @endif
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline">Detail</a>
                                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-outline">Edit</a>
                                    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="empty-state">
                                    Belum ada project. Klik "Tambah Project" untuk memulai.
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
