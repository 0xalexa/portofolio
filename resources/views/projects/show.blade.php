<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} — Project Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Syne:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-base: #050505;
            --bg-surface: rgba(20, 20, 20, 0.6);
            --text-main: #ffffff;
            --text-muted: #a1a1aa;
            --border-glass: rgba(255, 255, 255, 0.1);
            --accent: #3b82f6;
            --accent-glow: rgba(59, 130, 246, 0.5);
            --font-heading: 'Syne', sans-serif;
            --font-body: 'DM Sans', sans-serif;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        body {
            font-family: var(--font-body);
            background-color: var(--bg-base);
            color: var(--text-main);
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Ambient Glow Background */
        .ambient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            overflow: hidden;
            background: var(--bg-base);
        }
        .ambient-bg::before, .ambient-bg::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.15;
            animation: float 20s infinite ease-in-out alternate;
        }
        .ambient-bg::before {
            background: #4f46e5;
            top: -200px;
            left: -100px;
        }
        .ambient-bg::after {
            background: #0ea5e9;
            bottom: -200px;
            right: -100px;
            animation-delay: -10s;
        }

        @keyframes float {
            0% { transform: translate(0, 0); }
            100% { transform: translate(100px, 100px); }
        }

        /* Container */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        /* Header Navigation */
        .header-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            animation: fadeDown 0.8s ease backwards;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: var(--transition);
        }

        .back-link:hover {
            color: var(--text-main);
            transform: translateX(-5px);
        }



        /* Dashboard Card */
        .dashboard-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-glass);
            border-radius: 1.5rem;
            padding: 3rem;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeUp 1s ease 0.2s backwards;
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        @media (min-width: 900px) {
            .dashboard-card {
                grid-template-columns: 1.2fr 1fr;
            }
        }

        /* Left Side: Visuals */
        .project-visuals {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .image-wrapper {
            border-radius: 1rem;
            overflow: hidden;
            border: 1px solid var(--border-glass);
            position: relative;
            aspect-ratio: 16/10;
            background: rgba(0,0,0,0.3);
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            transition: transform 0.7s ease;
        }

        .image-wrapper:hover img {
            transform: scale(1.05);
        }

        .no-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        /* Right Side: Info */
        .project-info {
            display: flex;
            flex-direction: column;
        }

        .project-title {
            font-family: var(--font-heading);
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.1;
            margin: 0 0 1.5rem 0;
            background: linear-gradient(to right, #ffffff, #a1a1aa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .project-desc {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            white-space: pre-wrap;
        }

        /* Meta Data Grid */
        .meta-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-glass);
        }

        .meta-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .meta-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
            font-weight: 600;
        }

        .meta-value {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-main);
        }

        /* Action Buttons */
        .action-links {
            display: flex;
            gap: 1rem;
            margin-top: auto;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            flex: 1;
            min-width: 140px;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
            box-shadow: 0 0 20px var(--accent-glow);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 25px rgba(59, 130, 246, 0.7);
            background: #2563eb;
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-main);
            border: 1px solid var(--border-glass);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Carousel Styles */
        .carousel-container {
            position: relative;
            width: 100%;
            border-radius: 1rem;
            overflow: hidden;
            border: 1px solid var(--border-glass);
            aspect-ratio: 16/10;
            background: rgba(0,0,0,0.3);
        }
        
        .carousel-track {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 0.4s ease-in-out;
        }

        .carousel-slide {
            min-width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: background 0.2s;
        }

        .carousel-btn:hover {
            background: rgba(0,0,0,0.8);
        }

        .carousel-btn.prev {
            left: 10px;
        }

        .carousel-btn.next {
            right: 10px;
        }

        .carousel-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .carousel-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            cursor: pointer;
            border: none;
            padding: 0;
            transition: background 0.3s;
        }

        .carousel-dot.active {
            background: rgba(255,255,255,0.9);
        }


    </style>
</head>
<body>
    <div class="ambient-bg"></div>

    <div class="container">
        <div class="header-nav">
            <a href="/#work" class="back-link">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Portfolio
            </a>
        </div>

        <div class="dashboard-card">
            <!-- Visuals Side -->
            <div class="project-visuals">
                @php
                    $images = [];
                    if ($project->image_url) {
                        $images[] = $project->image_url;
                    }
                    if ($project->screenshots && is_array($project->screenshots)) {
                        $images = array_merge($images, $project->screenshots);
                    }
                @endphp

                @if(count($images) > 0)
                    <div class="carousel-container" id="projectCarousel">
                        <div class="carousel-track" id="carouselTrack">
                            @foreach($images as $img)
                                <div class="carousel-slide">
                                    <img src="{{ $img }}" alt="Screenshot of {{ $project->title }}">
                                </div>
                            @endforeach
                        </div>
                        
                        @if(count($images) > 1)
                            <button class="carousel-btn prev" id="prevBtn" aria-label="Previous image">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            </button>
                            <button class="carousel-btn next" id="nextBtn" aria-label="Next image">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                            
                            <div class="carousel-dots" id="carouselDots">
                                @foreach($images as $index => $img)
                                    <button class="carousel-dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}" aria-label="Go to slide {{ $index + 1 }}"></button>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @else
                    <div class="carousel-container">
                        <div class="no-image">No image preview available</div>
                    </div>
                @endif
            </div>

            <!-- Information Side -->
            <div class="project-info">
                <h1 class="project-title">{{ $project->title }}</h1>
                <div class="project-desc">{{ $project->description }}</div>

                <div class="meta-grid">
                    <div class="meta-item">
                        <span class="meta-label">Release Date</span>
                        <span class="meta-value">{{ $project->created_at->format('d M Y') }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Status</span>
                        <span class="meta-value">Completed / Public</span>
                    </div>
                </div>

                <div class="action-links">
                    @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                            <span>Live Demo</span>
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    @endif

                    @if($project->repo_url)
                        <a href="{{ $project->repo_url }}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                            <span>Source Code</span>
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.379.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.416 22 12c0-5.523-4.477-10-10-10z"></path></svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.getElementById('carouselTrack');
            if (!track) return;
            
            const originalSlides = Array.from(track.children);
            if (originalSlides.length <= 1) return;

            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const dots = Array.from(document.querySelectorAll('.carousel-dot'));
            
            let currentIndex = 1;
            let isTransitioning = false;

            // Clone first and last slides for seamless infinite loop
            const firstClone = originalSlides[0].cloneNode(true);
            const lastClone = originalSlides[originalSlides.length - 1].cloneNode(true);
            
            track.appendChild(firstClone);
            track.insertBefore(lastClone, originalSlides[0]);
            
            const slides = Array.from(track.children);
            
            // Set initial position (hide the first clone)
            track.style.transition = 'none';
            track.style.transform = 'translateX(-100%)';

            const updateDots = (index) => {
                let dotIndex = index - 1;
                if (dotIndex < 0) dotIndex = dots.length - 1;
                if (dotIndex >= dots.length) dotIndex = 0;
                
                dots.forEach(dot => dot.classList.remove('active'));
                dots[dotIndex].classList.add('active');
            };

            const moveToSlide = (index) => {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex = index;
                
                track.style.transition = 'transform 0.4s ease-in-out';
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                updateDots(currentIndex);
            };

            track.addEventListener('transitionend', () => {
                isTransitioning = false;
                
                // Seamlessly jump back if at clone boundaries
                if (currentIndex === 0) {
                    track.style.transition = 'none';
                    currentIndex = slides.length - 2;
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;
                } else if (currentIndex === slides.length - 1) {
                    track.style.transition = 'none';
                    currentIndex = 1;
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;
                }
            });

            nextBtn.addEventListener('click', () => {
                if (isTransitioning) return;
                moveToSlide(currentIndex + 1);
            });

            prevBtn.addEventListener('click', () => {
                if (isTransitioning) return;
                moveToSlide(currentIndex - 1);
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    moveToSlide(index + 1);
                });
            });
            
            updateDots(currentIndex);
        });
    </script>
</body>
</html>
