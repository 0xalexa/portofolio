<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Alexa Kusuma Wardana Portfolio — web projects, skills, and contact information."
    />
    <title>Alexa Kusuma Wardana — Software Engineering Student</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Syne:wght@500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="boot" id="boot" aria-hidden="true">
      <div class="boot__inner">
        <div class="boot__mark" aria-hidden="true">ALEXA</div>
        <div class="boot__line"><span class="boot__line-fill"></span></div>
        <p class="boot__label">Portofolio</p>
      </div>
    </div>

    <div
      class="scroll-progress"
      id="scroll-progress"
      role="presentation"
      aria-hidden="true"
    ></div>
    <div class="grain" aria-hidden="true"></div>
    <div class="cursor-glow" id="cursor-glow" aria-hidden="true"></div>

    <header class="site-header" id="top">
      <nav class="nav" aria-label="Primary">
        <a class="nav__brand" href="#top">
          <span class="nav__brand-dot"></span>
          Alexa Kusuma Wardana
        </a>
        <button
          class="nav__toggle"
          type="button"
          aria-expanded="false"
          aria-controls="nav-menu"
        >
          <span class="nav__toggle-bar"></span>
          <span class="nav__toggle-bar"></span>
          <span class="nav__toggle-bar"></span>
          <span class="visually-hidden">Menu</span>
        </button>
        <ul class="nav__list" id="nav-menu">
          <li><a class="nav__link" href="#about">About Me</a></li>
          <li><a class="nav__link" href="#skills">Skills</a></li>
          <li><a class="nav__link" href="#work">Portofolio</a></li>
          <li><a class="nav__link" href="#timeline">Experience</a></li>
          <li>
            <a class="nav__link" href="{{ asset('cv/CV.pdf') }}" download="CV.pdf">Download CV</a>
          </li>
          <li>
            <a class="nav__link nav__link--cta" href="#contact">Contact</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="hero" id="hero" aria-labelledby="hero-title">
        <div class="hero__mesh" aria-hidden="true"></div>
        <div class="hero__spotlight" aria-hidden="true"></div>
        <div class="hero__grid-lines" aria-hidden="true"></div>
        <div class="hero__bg" aria-hidden="true">
          <div class="hero__orb hero__orb--1"></div>
          <div class="hero__orb hero__orb--2"></div>
          <div class="hero__orb hero__orb--3"></div>
        </div>

        <div class="hero__layout">
          <div class="hero__content">
            <div class="hero__kicker reveal" data-reveal data-stagger="1">
              <span class="hero__kicker-line" aria-hidden="true"></span>
              <style>
                @keyframes eyebrowType {
                  0%, 15% { width: 0; }
                  35%, 85% { width: 34ch; }
                  100% { width: 0; }
                }
                .hero__eyebrow-animated {
                  display: inline-block;
                  overflow: hidden;
                  white-space: nowrap;
                  font-family: 'Courier New', Courier, monospace;
                  font-weight: bold;
                  border-right: 2px solid transparent;
                  width: 0;
                  background: linear-gradient(to right, #A855F7, #6366F1, #3B82F6);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                }
                .reveal.is-visible .hero__eyebrow-animated {
                  animation: eyebrowType 7s steps(33, end) infinite, blinkBorder 1s step-end infinite;
                }
              </style>
              <p class="hero__eyebrow" style="margin: 0; padding-top: 2px;">
                <span class="hero__eyebrow-animated">AVAILABLE FOR NEW PROJECTS - 2026</span>
              </p>
            </div>

            <h1 id="hero-title" class="hero__title">
              <span
                class="hero__title-line reveal hero__title-mask"
                data-reveal
                data-stagger="2"
              >
                <span class="hero__title-inner">Engineering</span>
              </span>
              <span
                class="hero__title-line hero__title-line--gradient reveal hero__title-mask"
                data-reveal
                data-stagger="3"
              >
                <span class="hero__title-inner">Seamless Digital Experiences</span>
              </span>
            </h1>

            <p class="hero__lead reveal" data-reveal data-stagger="4">
              A Software Engineering student experienced in building scalable web and mobile applications using Laravel, PHP, JavaScript, and Flutter.
            </p>

            <div class="hero__actions reveal" data-reveal data-stagger="5">
              <a
                class="btn btn--primary btn--shine magnetic"
                href="#work"
                data-magnetic
              >
                <span class="btn__glow" aria-hidden="true"></span>
                <span>View My Work</span>
              </a>
              <a
                class="btn btn--ghost btn--glass magnetic"
                href="#contact"
                data-magnetic
                >Start a Project Together</a
              >
            </div>

            <div class="hero__stats reveal" data-reveal data-stagger="6">
              <div class="stat stat--glass">
                <span class="stat__value" data-count="2">0</span>
                <span class="stat__suffix">+</span>
                <span class="stat__label">YEARS OF EXPERIENCE</span>
              </div>
              <div class="stat stat--glass">
                <span class="stat__value" data-count="{{ $repoCount ?? 5 }}">0</span>
                <span class="stat__suffix">+</span>
                <span class="stat__label">PORTFOLIO PROJECTS</span>
              </div>
              <div class="stat stat--glass">
                <span class="stat__value" data-count="3">0</span>
                <span class="stat__suffix">+</span>
                <span class="stat__label">TECHNICAL SKILLS</span>
              </div>
            </div>

            <div
              class="marquee-wrap reveal"
              data-reveal
              data-stagger="7"
              aria-hidden="true"
            >
              <div class="marquee">
                <div class="marquee__track">
                  <span>Laravel</span><span>PHP</span
                  ><span>JavaScript</span><span>Flutter</span
                  ><span>MySQL</span><span>HTML5 & CSS3</span><span>Bootstrap</span
                  ><span>Python</span> <span>Laravel</span
                  ><span>PHP</span><span>JavaScript</span
                  ><span>Flutter</span><span>MySQL</span
                  ><span>HTML5 & CSS3</span><span>Bootstrap</span
                  ><span>Python</span>
                </div>
              </div>
            </div>
          </div>

          <aside class="hero__visual reveal" data-reveal data-stagger="4" aria-hidden="true" style="align-self: flex-start; margin-top: 1.5rem; transform: translateY(30px);">
              <style>
                .profile-card-container {
                  position: relative;
                  width: 100%;
                  min-height: 400px;
                  border-radius: 32px;
                  padding: 1.5px;
                  overflow: hidden;
                  box-shadow: 0 30px 60px -15px rgba(0,0,0,0.5), 0 0 20px rgba(168,85,247,0.15);
                  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.6s cubic-bezier(0.16, 1, 0.3, 1);
                  z-index: 1;
                  display: flex;
                }
              
                .profile-card-container::before {
                  content: '';
                  position: absolute;
                  top: -50%;
                  left: -50%;
                  width: 200%;
                  height: 200%;
                  background: conic-gradient(
                    from 0deg, 
                    rgba(168, 85, 247, 0.8), 
                    rgba(99, 102, 241, 0.8), 
                    rgba(59, 130, 246, 0.8), 
                    rgba(168, 85, 247, 0.8)
                  );
                  animation: rotate-border 10s linear infinite;
                  z-index: 0;
                }
              
                .profile-card-inner {
                  width: 100%;
                  background-image: url('{{ asset('img/pp.png') }}');
                  background-size: cover;
                  background-position: center 5%;
                  border-radius: 31px;
                  background-color: #0f172a; 
                  z-index: 1;
                  position: relative;
                }
              
                .profile-glow {
                  position: absolute;
                  top: -15%;
                  left: -15%;
                  width: 130%;
                  height: 130%;
                  background: radial-gradient(circle at 30% 30%, rgba(168,85,247,0.12) 0%, transparent 50%), 
                              radial-gradient(circle at 70% 70%, rgba(59,130,246,0.12) 0%, transparent 50%);
                  z-index: 0;
                  filter: blur(40px);
                  pointer-events: none;
                  transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
                }
              
                .hero__bento:hover .profile-card-container {
                  transform: scale(1.02);
                  box-shadow: 0 40px 80px -10px rgba(0,0,0,0.7), 0 0 35px rgba(168,85,247,0.25);
                }
              
                .hero__bento:hover .profile-card-container::before {
                  animation: rotate-border 3s linear infinite;
                }
              
                .hero__bento:hover .profile-glow {
                  background: radial-gradient(circle at 30% 30%, rgba(168,85,247,0.15) 0%, transparent 50%), 
                              radial-gradient(circle at 70% 70%, rgba(59,130,246,0.15) 0%, transparent 50%);
                  transform: scale(1.05);
                }
              
                @keyframes rotate-border {
                  0% { transform: rotate(0deg); }
                  100% { transform: rotate(360deg); }
                }
              </style>
              
              <div class="hero__bento" style="position: relative;">
                <div class="profile-glow"></div>
                <div class="profile-card-container">
                  <div class="profile-card-inner"></div>
                </div>
                <div class="hero__ring" aria-hidden="true"></div>
              </div>
          </aside>


        </div>

        <a class="hero__scroll" href="#about">
          <span class="hero__scroll-text">Scroll</span>
          <span class="hero__scroll-line" aria-hidden="true"></span>
        </a>
      </section>

      <section class="section section--about" id="about">
        <div class="container section__wrap">
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">About Me</span>
            <h2 class="section__title" style="background: linear-gradient(105deg, #f8fafc 0%, #f8fafc 20%, #c084fc 45%, #818cf8 65%, #38bdf8 80%, #f8fafc 100%); background-size: 300% auto; -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; animation: section-title-flow 6s ease-in-out infinite; display: inline-block;">Blending Aesthetics with Code Logic</h2>
            <p class="section__intro">
            I connect the dots between engaging design and clean code. My goal is to engineer seamless digital experiences that users love to interact with.</p>
          </header>
          <div class="about__grid">
            <div class="about__visual reveal" data-reveal>
              <div class="about__frame tilt-wrap">
                <div class="about__photo tilt" data-tilt style="padding: 1.5rem; background: rgba(15,23,42,0.9); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; font-family: 'Courier New', Courier, monospace; color: #a1a1aa; font-size: 0.9rem; line-height: 1.6; text-align: left; display: flex; flex-direction: column; justify-content: center; box-shadow: 0 10px 30px rgba(0,0,0,0.5); overflow: hidden;">
                  <style>
                    @keyframes blink {
                      0%, 100% { opacity: 1; }
                      50% { opacity: 0; }
                    }
                    @keyframes blinkBorder {
                      0%, 100% { border-color: transparent; }
                      50% { border-color: #61afef; }
                    }
                    @keyframes badgeType {
                      0%, 15% { width: 0; }
                      35%, 85% { width: 26ch; }
                      100% { width: 0; }
                    }
                    @keyframes tl1 { 0%, 0.000% { clip-path: inset(0 100% 0 0); } 0.750%, 56.750% { clip-path: inset(0 0 0 0); } 57.500%, 64.250% { clip-path: inset(0 100% 0 0); } 65.000%, 85.000% { clip-path: inset(0 0 0 0); } 85.750%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl2 { 0%, 0.750% { clip-path: inset(0 100% 0 0); } 1.500%, 56.000% { clip-path: inset(0 0 0 0); } 56.750%, 63.500% { clip-path: inset(0 100% 0 0); } 64.250%, 85.750% { clip-path: inset(0 0 0 0); } 86.500%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl3 { 0%, 1.500% { clip-path: inset(0 100% 0 0); } 2.250%, 55.250% { clip-path: inset(0 0 0 0); } 56.000%, 62.750% { clip-path: inset(0 100% 0 0); } 63.500%, 86.500% { clip-path: inset(0 0 0 0); } 87.250%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl4 { 0%, 2.250% { clip-path: inset(0 100% 0 0); } 3.000%, 54.500% { clip-path: inset(0 0 0 0); } 55.250%, 62.000% { clip-path: inset(0 100% 0 0); } 62.750%, 87.250% { clip-path: inset(0 0 0 0); } 88.000%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl5 { 0%, 3.000% { clip-path: inset(0 100% 0 0); } 3.750%, 53.750% { clip-path: inset(0 0 0 0); } 54.500%, 61.250% { clip-path: inset(0 100% 0 0); } 62.000%, 88.000% { clip-path: inset(0 0 0 0); } 88.750%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl6 { 0%, 3.750% { clip-path: inset(0 100% 0 0); } 4.500%, 53.000% { clip-path: inset(0 0 0 0); } 53.750%, 60.500% { clip-path: inset(0 100% 0 0); } 61.250%, 88.750% { clip-path: inset(0 0 0 0); } 89.500%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl7 { 0%, 4.500% { clip-path: inset(0 100% 0 0); } 5.250%, 52.250% { clip-path: inset(0 0 0 0); } 53.000%, 59.750% { clip-path: inset(0 100% 0 0); } 60.500%, 89.500% { clip-path: inset(0 0 0 0); } 90.250%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl8 { 0%, 5.250% { clip-path: inset(0 100% 0 0); } 6.000%, 51.500% { clip-path: inset(0 0 0 0); } 52.250%, 59.000% { clip-path: inset(0 100% 0 0); } 59.750%, 90.250% { clip-path: inset(0 0 0 0); } 91.000%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl9 { 0%, 6.000% { clip-path: inset(0 100% 0 0); } 6.750%, 50.750% { clip-path: inset(0 0 0 0); } 51.500%, 58.250% { clip-path: inset(0 100% 0 0); } 59.000%, 91.000% { clip-path: inset(0 0 0 0); } 91.750%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl10 { 0%, 6.750% { clip-path: inset(0 100% 0 0); } 7.500%, 50.000% { clip-path: inset(0 0 0 0); } 50.750%, 57.500% { clip-path: inset(0 100% 0 0); } 58.250%, 91.750% { clip-path: inset(0 0 0 0); } 92.500%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl11 { 0%, 7.500% { clip-path: inset(0 100% 0 0); } 8.250%, 49.250% { clip-path: inset(0 0 0 0); } 50.000%, 56.750% { clip-path: inset(0 100% 0 0); } 57.500%, 92.500% { clip-path: inset(0 0 0 0); } 93.250%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl12 { 0%, 8.250% { clip-path: inset(0 100% 0 0); } 9.000%, 48.500% { clip-path: inset(0 0 0 0); } 49.250%, 56.000% { clip-path: inset(0 100% 0 0); } 56.750%, 93.250% { clip-path: inset(0 0 0 0); } 94.000%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl13 { 0%, 9.000% { clip-path: inset(0 100% 0 0); } 9.750%, 47.750% { clip-path: inset(0 0 0 0); } 48.500%, 55.250% { clip-path: inset(0 100% 0 0); } 56.000%, 94.000% { clip-path: inset(0 0 0 0); } 94.750%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl14 { 0%, 9.750% { clip-path: inset(0 100% 0 0); } 10.500%, 47.000% { clip-path: inset(0 0 0 0); } 47.750%, 54.500% { clip-path: inset(0 100% 0 0); } 55.250%, 94.750% { clip-path: inset(0 0 0 0); } 95.500%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl15 { 0%, 10.500% { clip-path: inset(0 100% 0 0); } 11.250%, 46.250% { clip-path: inset(0 0 0 0); } 47.000%, 53.750% { clip-path: inset(0 100% 0 0); } 54.500%, 95.500% { clip-path: inset(0 0 0 0); } 96.250%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl16 { 0%, 11.250% { clip-path: inset(0 100% 0 0); } 12.000%, 45.500% { clip-path: inset(0 0 0 0); } 46.250%, 53.000% { clip-path: inset(0 100% 0 0); } 53.750%, 96.250% { clip-path: inset(0 0 0 0); } 97.000%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl17 { 0%, 12.000% { clip-path: inset(0 100% 0 0); } 12.750%, 44.750% { clip-path: inset(0 0 0 0); } 45.500%, 52.250% { clip-path: inset(0 100% 0 0); } 53.000%, 97.000% { clip-path: inset(0 0 0 0); } 97.750%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl18 { 0%, 12.750% { clip-path: inset(0 100% 0 0); } 13.500%, 44.000% { clip-path: inset(0 0 0 0); } 44.750%, 51.500% { clip-path: inset(0 100% 0 0); } 52.250%, 97.750% { clip-path: inset(0 0 0 0); } 98.500%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl19 { 0%, 13.500% { clip-path: inset(0 100% 0 0); } 14.250%, 43.250% { clip-path: inset(0 0 0 0); } 44.000%, 50.750% { clip-path: inset(0 100% 0 0); } 51.500%, 98.500% { clip-path: inset(0 0 0 0); } 99.250%, 100% { clip-path: inset(0 100% 0 0); } }
                    @keyframes tl20 { 0%, 14.250% { clip-path: inset(0 100% 0 0); } 15.000%, 42.500% { clip-path: inset(0 0 0 0); } 43.250%, 50.000% { clip-path: inset(0 100% 0 0); } 50.750%, 99.250% { clip-path: inset(0 0 0 0); } 100.000%, 100% { clip-path: inset(0 100% 0 0); } }
                    .c-line { clip-path: inset(0 100% 0 0); white-space: pre; }
                    .reveal.is-visible .c-line { animation: var(--anim) 20s linear infinite; }
                    .c-cursor { display: inline-block; width: 8px; height: 15px; background: #61afef; animation: blink 1s step-end infinite; vertical-align: middle; margin-left: 4px; }
                    .marquee-container { overflow: hidden; display: flex; align-items: center; justify-content: flex-start; }
                    .ready-text { 
                      display: inline-block; 
                      overflow: hidden; 
                      white-space: nowrap; 
                      font-family: 'Courier New', Courier, monospace; 
                      font-weight: bold; 
                      color: #98c379; 
                      border-right: 2px solid transparent; 
                      width: 0; /* hidden by default until visible */
                    }
                    .reveal.is-visible .ready-text {
                      animation: badgeType 6s steps(26, end) infinite, blinkBorder 1s step-end infinite;
                    }
                  </style>
                  <div class="hero__mock-bar" style="margin-bottom: 1.5rem; display: flex;">
                    <span style="background: #ff5f56; width: 12px; height: 12px; display: inline-block; border-radius: 50%; margin-right: 6px;"></span>
                    <span style="background: #ffbd2e; width: 12px; height: 12px; display: inline-block; border-radius: 50%; margin-right: 6px;"></span>
                    <span style="background: #27c93f; width: 12px; height: 12px; display: inline-block; border-radius: 50%;"></span>
                  </div>
                  <div style="flex-grow: 1; overflow-x: auto;">
                    <div class="c-line" style="--anim: tl1;"><span style="color: #c678dd;">const</span> <span style="color: #e5c07b;">developer</span> <span style="color: #56b6c2;">=</span> {</div>
                    <div class="c-line" style="--anim: tl2;">  name: <span style="color: #98c379;">"Alexa Kusuma Wardana"</span>,</div>
                    <div class="c-line" style="--anim: tl3;">  role: <span style="color: #98c379;">"Software Engineer"</span>,</div>
                    <div class="c-line" style="--anim: tl4;">  education: <span style="color: #98c379;">"Politeknik Indonusa Surakarta"</span>,</div>
                    <div class="c-line" style="--anim: tl5;">  skills: [<span style="color: #98c379;">"Laravel"</span>, <span style="color: #98c379;">"Flutter"</span>, <span style="color: #98c379;">"MySQL"</span>, <span style="color: #98c379;">"PHP"</span>],</div>
                    <div class="c-line" style="--anim: tl6;">  passion: <span style="color: #98c379;">"Logic, Clean Code & Architecture"</span>,</div>
                    <div class="c-line" style="--anim: tl7;">  isAvailable: <span style="color: #d19a66;">true</span>,</div>
                    <div class="c-line" style="--anim: tl8;"></div>
                    <div class="c-line" style="--anim: tl9;">  <span style="color: #61afef;">buildFuture</span>() {</div>
                    <div class="c-line" style="--anim: tl10;">    <span style="color: #c678dd;">return</span> <span style="color: #d19a66;">this</span>.skills.join(<span style="color: #98c379;">' + '</span>);</div>
                    <div class="c-line" style="--anim: tl11;">  },</div>
                    <div class="c-line" style="--anim: tl12;"></div>
                    <div class="c-line" style="--anim: tl13;">  <span style="color: #61afef;">execute</span>() {</div>
                    <div class="c-line" style="--anim: tl14;">    <span style="color: #c678dd;">while</span>(<span style="color: #d19a66;">true</span>) {</div>
                    <div class="c-line" style="--anim: tl15;">      <span style="color: #d19a66;">this</span>.code(); <span style="color: #d19a66;">this</span>.learn();</div>
                    <div class="c-line" style="--anim: tl16;">    }</div>
                    <div class="c-line" style="--anim: tl17;">  }</div>
                    <div class="c-line" style="--anim: tl18;">};</div>
                    <div class="c-line" style="--anim: tl19;"></div>
                    <div class="c-line" style="--anim: tl20;"><span style="color: #e5c07b;">developer</span>.<span style="color: #61afef;">execute</span>();<span class="c-cursor"></span></div>
                  </div>
                </div>
                <div class="about__badge" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                  <span class="about__badge-dot" style="flex-shrink: 0; margin-left: 0.25rem; margin-right: 0.5rem;"></span>
                  <div class="marquee-container">
                    <span class="ready-text">Exploring New Technologies</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="about__copy reveal" data-reveal>
              <p>
                Based in Central Java, Indonesia, I am a Software Engineer currently pursuing my Applied Degree at Politeknik Indonusa Surakarta. I am passionate about applying core engineering principles to build robust web and mobile applications, handling everything from system architecture to database integration.
              </p>
              <ul class="about__pillars">
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Robust Web & Backend Development with Laravel and PHP</span>
                </li>
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Cross-Platform Mobile Development using Flutter & Dart</span>
                </li>
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Database Architecture (MySQL) & Systems Analysis</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section section--skills" id="skills">
        <div class="container section__wrap">
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">Skills</span>
            <h2 class="section__title" style="background: linear-gradient(105deg, #f8fafc 0%, #f8fafc 20%, #c084fc 45%, #818cf8 65%, #38bdf8 80%, #f8fafc 100%); background-size: 300% auto; -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; animation: section-title-flow 6s ease-in-out infinite; display: inline-block;">Core Technologies & Tools</h2>
          </header>
          <div class="skills">
            <article class="skill-card reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Programming Languages</h3>
              <div class="skill-bar" data-progress="90">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">PHP & JavaScript</span>
              </div>
              <div class="skill-bar" data-progress="95">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">HTML5 & CSS3</span>
              </div>
              <div class="skill-bar" data-progress="75">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Python & Dart</span>
              </div>
            </article>
            <article class="skill-card reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Framework & Tools</h3>
              <div class="skill-bar" data-progress="85">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Laravel & Bootstrap</span>
              </div>
              <div class="skill-bar" data-progress="80">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Flutter</span>
              </div>
              <div class="skill-bar" data-progress="90">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Git, GitHub & Composer</span>
              </div>
            </article>
            <article class="skill-tags reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Database & Others</h3>
              <div class="tags">
                <span class="tag">MySQL</span>
                <span class="tag">SQLite</span>
                <span class="tag">WordPress</span>
                <span class="tag">Responsive Web Design</span>
                <span class="tag">System Analysis</span>
                <span class="tag">Computer Networks</span>
                <span class="tag">VS Code</span>
                <span class="tag">Laragon</span>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section--work" id="work">
        <div class="container section__wrap">
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">SELECTED PROJECTS</span>
            <h2 class="section__title" style="background: linear-gradient(105deg, #f8fafc 0%, #f8fafc 20%, #c084fc 45%, #818cf8 65%, #38bdf8 80%, #f8fafc 100%); background-size: 300% auto; -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; animation: section-title-flow 6s ease-in-out infinite; display: inline-block;">Featured Projects</h2>
            <p class="section__intro">
            Explore a few of the projects I have created, reflecting my hands-on experience in building digital solutions.
            </p>
          </header>
          <div class="projects-wrapper">
            <button class="projects-nav projects-nav--prev magnetic" type="button" aria-label="Previous Project" data-magnetic>
              <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <div class="projects" id="projects-slider">
              @forelse ($projects as $index => $project)
              <article class="project-card reveal tilt-wrap" data-reveal>
                <a
                  class="project-card__link"
                  href="{{ route('projects.show', $project->id) }}"
                  aria-label="{{ $project->title }} — buka proyek"
                >
                  <div class="project-card__shine" aria-hidden="true"></div>
                  <div class="project-card__media project-card__media--{{ ($index % 3) + 1 }}" style="{{ $project->image_url ? 'background-image: url('.$project->image_url.'); background-size: cover; background-position: center;' : '' }}"></div>
                  <div class="project-card__body">
                    <span class="project-card__meta">Proyek · {{ $project->created_at->format('Y') }}</span>
                    <h3 class="project-card__title">{{ $project->title }}</h3>
                    <p class="project-card__desc">
                      {{ $project->description }}
                    </p>
                    <span class="project-card__arrow" aria-hidden="true">→</span>
                  </div>
                </a>
              </article>
              @empty
                <p style="grid-column: 1 / -1; text-align: center; color: #a1a1aa; padding: 2rem;">Belum ada proyek terbaru yang ditambahkan. Silakan kelola di Dashboard.</p>
              @endforelse
            </div>
            <button class="projects-nav projects-nav--next magnetic" type="button" aria-label="Proyek Selanjutnya" data-magnetic>
              <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
            </button>
          </div>
        </div>
      </section>

      <section class="section section--timeline" id="timeline">
        <div class="container section__wrap">
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">My Journey</span>
            <h2 class="section__title" style="background: linear-gradient(105deg, #f8fafc 0%, #f8fafc 20%, #c084fc 45%, #818cf8 65%, #38bdf8 80%, #f8fafc 100%); background-size: 300% auto; -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; animation: section-title-flow 6s ease-in-out infinite; display: inline-block;">Education & Experience</h2>
          </header>
          <ol class="timeline">
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2024 — Present</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Bachelor of Applied Software Engineering</h3>
                <p class="timeline__company">Politeknik Indonusa Surakarta</p>
                <p class="timeline__text">
                  Pursuing a Bachelor's degree in Applied Software Engineering with a strong focus on software development, web technologies, mobile applications, database systems, and software architecture. Continuously expanding technical expertise through academic coursework and hands-on development projects.
                </p>
              </div>
            </li>
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2025 — Present</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Committee Member</h3>
                <p class="timeline__company">Software Engineering Student Association</p>
                <p class="timeline__text">
                  Contributed to the planning and execution of academic and student activities while collaborating with committee members to improve coordination, communication, and organizational effectiveness.
                </p>
              </div>
            </li>
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2026 — Present</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Full Stack Developer</h3>
                <p class="timeline__company">Personal Projects · Politeknik Indonusa Surakarta</p>
                <p class="timeline__text">
                  Designing and developing full-stack web and mobile applications as part of academic and personal initiatives. Building modern software solutions using Laravel, Flutter, FastAPI, MySQL, REST APIs, and AI integration while applying software engineering best practices.
                </p>
              </div>
            </li>
          </ol>
        </div>
      </section>

      <section class="section section--contact" id="contact">
        <div class="container section__wrap">
          <div class="contact">
            <div class="contact__intro reveal" data-reveal>
              <span class="section__eyebrow">Contact</span>
              <h2 class="section__title" style="background: linear-gradient(105deg, #f8fafc 0%, #f8fafc 20%, #c084fc 45%, #818cf8 65%, #38bdf8 80%, #f8fafc 100%); background-size: 300% auto; -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; animation: section-title-flow 6s ease-in-out infinite; display: inline-block;">Let's Discuss Your Project</h2>
              <p class="section__intro contact__text">
                Tell us details about the project you want to create. I will reply to your message as soon as possible.
              </p>
            </div>
            <form
              class="contact__form form reveal tilt-wrap"
              data-reveal
              id="contact-form"
              action="/contact"
              method="POST"
              novalidate
            >
              @csrf
              <div class="form__row">
                <label class="form__field">
                  <span class="form__label">Name</span>
                  <input
                    class="form__input"
                    name="name"
                    type="text"
                    autocomplete="name"
                    required
                    placeholder="Your Full Name"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
                <label class="form__field">
                  <span class="form__label">Email</span>
                  <input
                    class="form__input"
                    name="email"
                    type="email"
                    autocomplete="email"
                    required
                    placeholder="example@email.com"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
              </div>
              <div class="form__row">
                <label class="form__field">
                  <span class="form__label">Phone Number</span>
                  <input
                    class="form__input"
                    name="phone"
                    type="tel"
                    autocomplete="tel"
                    placeholder="0812xxxxxx (Optional)"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
                <label class="form__field">
                  <span class="form__label">Subject</span>
                  <input
                    class="form__input"
                    name="subject"
                    type="text"
                    placeholder="Collaboration / Pricing Inquiry (Optional)"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
              </div>
              <label class="form__field">
                <span class="form__label">Message</span>
                <textarea
                  class="form__input form__textarea"
                  name="message"
                  rows="5"
                  required
                  placeholder="Tell us details about your project..."
                ></textarea>
                <span class="form__error" role="alert"></span>
              </label>
              <button
                class="btn btn--primary btn--shine form__submit magnetic"
                type="submit"
                data-magnetic
              >
                <span class="btn__glow" aria-hidden="true"></span>
                <span class="form__submit-spinner" aria-hidden="true">
                  <svg class="spinner-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <circle class="spinner-circle" cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                  </svg>
                  <span class="form__submit-loading-text">Sending...</span>
                </span>
                <span class="form__submit-text">Send Message</span>
                <span class="form__submit-done" hidden aria-hidden="true"
                  >Sent — Thank you!</span
                >
              </button>
              <p class="form__note" id="form-message">
                Your message will be securely stored in our database.
              </p>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container footer__inner">
        <p class="footer__copy">
          © <span id="year"></span> Alexa Kusuma Wardana.
        </p>
        <ul class="footer__social">
          <li><a href="#" aria-label="GitHub">GitHub</a></li>
          <li><a href="#" aria-label="LinkedIn">LinkedIn</a></li>
          <li><a href="#" aria-label="Dribbble">Dribbble</a></li>
        </ul>
      </div>
    </footer>

    <button
      class="back-top magnetic"
      type="button"
      aria-label="Back to top"
      data-magnetic
    >
      <span aria-hidden="true">↑</span>
    </button>

    <script src="js/main.js" defer></script>
  </body>
</html>
