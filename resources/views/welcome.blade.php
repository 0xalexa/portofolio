<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Profesional</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0f172a;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --card-bg: #1e293b;
            --accent: #3b82f6;
            --accent-hover: #2563eb;
            --accent-glow: rgba(59, 130, 246, 0.4);
            --border-color: #334155;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            padding: 1.5rem 2rem;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            display: flex;
            justify-content: center;
        }

        .nav-container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-main);
            letter-spacing: -0.02em;
        }

        .btn-manage {
            display: inline-flex;
            align-items: center;
            padding: 0.6rem 1.25rem;
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 99px;
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 600;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .btn-manage:hover {
            background-color: var(--accent);
            border-color: var(--accent);
            box-shadow: 0 0 15px var(--accent-glow);
            transform: translateY(-2px);
        }

        .btn-manage svg {
            width: 1.1rem;
            height: 1.1rem;
            margin-right: 0.5rem;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 8rem 2rem 5rem 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
            animation: fadeInDown 1s ease-out;
        }

        .section-header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.02em;
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 1.125rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Carousel Layout */
        .carousel-wrapper {
            position: relative;
            width: 100%;
        }

        .carousel-container {
            display: flex;
            gap: 2.5rem;
            overflow-x: auto;
            padding-bottom: 2.5rem;
            padding-top: 1.5rem;
            padding-inline: 1rem;
            margin-inline: -1rem;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        /* Modern Scrollbar */
        .carousel-container::-webkit-scrollbar {
            height: 8px;
        }
        
        .carousel-container::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.02);
            border-radius: 10px;
            margin-inline: 1rem;
        }
        
        .carousel-container::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 10px;
            transition: background 0.3s;
        }
        
        .carousel-container::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
        }

        /* Card Styles */
        .card {
            flex: 0 0 calc(33.333% - 1.666rem);
            scroll-snap-align: start;
            background-color: var(--card-bg);
            border-radius: 1.25rem;
            overflow: hidden;
            border: 1px solid transparent;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            animation: fadeInUp 0.8s ease-out backwards;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        /* Delay iteratif untuk efek fade in bertahap */
        .card:nth-child(1) { animation-delay: 0.1s; }
        .card:nth-child(2) { animation-delay: 0.2s; }
        .card:nth-child(3) { animation-delay: 0.3s; }
        .card:nth-child(4) { animation-delay: 0.4s; }
        .card:nth-child(5) { animation-delay: 0.5s; }

        /* Luxurious Hover Effect */
        .card:hover {
            transform: translateY(-15px);
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 25px 0 var(--accent-glow);
        }

        .card-img-wrapper {
            position: relative;
            overflow: hidden;
            aspect-ratio: 16/10;
        }

        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card:hover .card-img {
            transform: scale(1.1);
        }

        .card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, var(--card-bg) 0%, transparent 100%);
            opacity: 0.8;
            transition: opacity 0.4s;
        }
        
        .card:hover .card-overlay {
            opacity: 0.4;
        }

        .card-body {
            padding: 1.75rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.35rem;
            font-weight: 700;
            margin: 0 0 0.75rem 0;
            color: #ffffff;
            transition: color 0.3s;
        }

        .card:hover .card-title {
            color: var(--accent);
        }

        .card-desc {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }

        .card-action {
            display: inline-flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
            background-color: var(--accent);
            padding: 0.6rem 1.25rem;
            border-radius: 99px;
            font-size: 0.875rem;
            font-weight: 600;
            transition: all 0.3s;
            align-self: flex-start;
        }

        .card-action:hover {
            background-color: var(--accent-hover);
            box-shadow: 0 4px 15px var(--accent-glow);
        }

        .card-action svg {
            width: 1rem;
            height: 1rem;
            margin-left: 0.5rem;
            transition: transform 0.3s;
        }

        .card-action:hover svg {
            transform: translateX(5px);
        }

        .empty-state {
            width: 100%;
            text-align: center;
            color: var(--text-muted);
            padding: 3rem;
            background-color: rgba(255,255,255,0.02);
            border-radius: 1rem;
            border: 1px dashed var(--border-color);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .card { flex: 0 0 calc(50% - 1.25rem); }
        }

        @media (max-width: 768px) {
            .section-header h1 { font-size: 2.5rem; }
            .container { padding: 6rem 1.5rem 3rem; }
            .card { flex: 0 0 calc(100% - 2rem); }
            .carousel-container { gap: 1.5rem; }
            .navbar { padding: 1rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <span class="logo">Portofolio.</span>
            <a href="{{ route('projects.index') }}" class="btn-manage">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Kelola Project
            </a>
        </div>
    </nav>

    <div class="container">
        <header class="section-header">
            <h1>Featured Projects</h1>
            <p>Eksplorasi portofolio proyek terbaru saya yang menonjolkan clean code, UI modern, dan solusi skalabel.</p>
        </header>

        <div class="carousel-wrapper">
            <main class="carousel-container">
                @forelse ($projects as $project)
                    <article class="card">
                        <div class="card-img-wrapper">
                            <img src="{{ $project->image ?? 'https://via.placeholder.com/800x500' }}" alt="{{ $project->title }}" class="card-img" loading="lazy">
                            <div class="card-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">{{ $project->title }}</h2>
                            <p class="card-desc">{{ $project->description }}</p>
                            
                            @if($project->link)
                                <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer" class="card-action">
                                    Lihat Proyek
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </article>
                @empty
                    <div class="empty-state">
                        <p>Belum ada project yang ditambahkan. Silakan masuk ke halaman Kelola Project untuk menambahkan data.</p>
                    </div>
                @endforelse
            </main>
        </div>
    </div>

</body>
</html>
