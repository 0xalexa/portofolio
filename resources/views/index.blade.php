<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portofolio Alexa Kusuma Wardana — proyek web, keahlian, dan kontak."
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
          <li><a class="nav__link" href="#about">Tentang Saya</a></li>
          <li><a class="nav__link" href="#skills">Keahlian</a></li>
          <li><a class="nav__link" href="#work">Portofolio</a></li>
          <li><a class="nav__link" href="#timeline">Perjalanan</a></li>
          <li>
            <a class="nav__link" href="{{ asset('cv/Alex_Kusuma_Wardana_CV.pdf') }}" download="Alexa_Kusuma_Wardana_CV.pdf">Unduh CV</a>
          </li>
          <li>
            <a class="nav__link nav__link--cta" href="#contact">Kontak</a>
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
              <p class="hero__eyebrow">Tersedia untuk proyek baru · 2026</p>
            </div>

            <h1 id="hero-title" class="hero__title">
              <span
                class="hero__title-line reveal hero__title-mask"
                data-reveal
                data-stagger="2"
              >
                <span class="hero__title-inner">Menciptakan</span>
              </span>
              <span
                class="hero__title-line hero__title-line--gradient reveal hero__title-mask"
                data-reveal
                data-stagger="3"
              >
                <span class="hero__title-inner">Karya Digital Memukau</span>
              </span>
            </h1>

            <p class="hero__lead reveal" data-reveal data-stagger="4">
              Mahasiswa Teknologi Rekayasa Perangkat Lunak (Software Engineering) dengan pengalaman mengembangkan aplikasi web dan mobile menggunakan Laravel, PHP, JavaScript, dan Flutter.
            </p>

            <div class="hero__actions reveal" data-reveal data-stagger="5">
              <a
                class="btn btn--primary btn--shine magnetic"
                href="#work"
                data-magnetic
              >
                <span class="btn__glow" aria-hidden="true"></span>
                <span>Lihat Karya Saya</span>
              </a>
              <a
                class="btn btn--ghost btn--glass magnetic"
                href="#contact"
                data-magnetic
                >Mulai Proyek Bersama</a
              >
            </div>

            <div class="hero__stats reveal" data-reveal data-stagger="6">
              <div class="stat stat--glass">
                <span class="stat__value" data-count="1">0</span>
                <span class="stat__suffix">+</span>
                <span class="stat__label">Tahun Pengalaman</span>
              </div>
              <div class="stat stat--glass">
                <span class="stat__value" data-count="{{ $repoCount ?? 5 }}">0</span>
                <span class="stat__suffix">+</span>
                <span class="stat__label">Proyek Portofolio</span>
              </div>
              <div class="stat stat--glass">
                <span class="stat__value" data-count="3">0</span>
                <span class="stat__suffix">+</span>
                <span class="stat__label">Teknologi Dikuasai</span>
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

          <aside class="hero__visual reveal" data-reveal data-stagger="4" aria-hidden="true" style="align-self: flex-start; margin-top: 1.5rem;">
            <div class="hero__bento" style="position: relative;">
              <!-- Decorative background glow -->
              <div style="position: absolute; top: -10%; left: -10%; width: 120%; height: 120%; background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, rgba(0,0,0,0) 70%); z-index: 0; filter: blur(30px); pointer-events: none;"></div>
              
              <div class="hero__mock" style="padding: 0; border: 1px solid rgba(255,255,255,0.15); border-radius: 1.5rem; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7), 0 0 50px rgba(59,130,246,0.25); background-image: url('{{ asset('img/pp.png') }}'); background-size: cover; background-position: center 5%; width: 100%; height: 100%; min-height: 400px; position: relative; z-index: 1;">
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
            <span class="section__eyebrow">Tentang Saya</span>
            <h2 class="section__title">Memadukan Estetika dan Logika Kode</h2>
            <p class="section__intro">
              Saya menjembatani kesenjangan antara desain visual yang menawan dan implementasi teknis yang efisien. Fokus saya adalah menciptakan pengalaman digital yang mulus dan terasa natural bagi setiap pengguna.
            </p>
          </header>
          <div class="about__grid">
            <div class="about__visual reveal" data-reveal>
              <div class="about__frame tilt-wrap">
                <div class="about__photo tilt" data-tilt style="padding: 1.5rem; background: rgba(15,23,42,0.9); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; font-family: 'Courier New', Courier, monospace; color: #a1a1aa; font-size: 0.9rem; line-height: 1.6; text-align: left; display: flex; flex-direction: column; justify-content: center; box-shadow: 0 10px 30px rgba(0,0,0,0.5); overflow: hidden;">
                  <style>
                    @keyframes typeFade {
                      from { opacity: 0; transform: translateX(-10px); }
                      to { opacity: 1; transform: translateX(0); }
                    }
                    @keyframes blink {
                      0%, 100% { opacity: 1; }
                      50% { opacity: 0; }
                    }
                    .c-line { opacity: 0; animation: typeFade 0.4s ease-out forwards; white-space: pre; }
                    .c-cursor { display: inline-block; width: 8px; height: 15px; background: #61afef; animation: blink 1s step-end infinite; vertical-align: middle; margin-left: 4px; }
                  </style>
                  <div class="hero__mock-bar" style="margin-bottom: 1.5rem; display: flex;">
                    <span style="background: #ff5f56; width: 12px; height: 12px; display: inline-block; border-radius: 50%; margin-right: 6px;"></span>
                    <span style="background: #ffbd2e; width: 12px; height: 12px; display: inline-block; border-radius: 50%; margin-right: 6px;"></span>
                    <span style="background: #27c93f; width: 12px; height: 12px; display: inline-block; border-radius: 50%;"></span>
                  </div>
                  <div style="flex-grow: 1; overflow-x: auto;">
                    <div class="c-line" style="animation-delay: 0.2s"><span style="color: #c678dd;">const</span> <span style="color: #e5c07b;">developer</span> <span style="color: #56b6c2;">=</span> {</div>
                    <div class="c-line" style="animation-delay: 0.4s">  name: <span style="color: #98c379;">"Alexa Kusuma Wardana"</span>,</div>
                    <div class="c-line" style="animation-delay: 0.6s">  role: <span style="color: #98c379;">"Software Engineer"</span>,</div>
                    <div class="c-line" style="animation-delay: 0.8s">  education: <span style="color: #98c379;">"Politeknik Indonusa Surakarta"</span>,</div>
                    <div class="c-line" style="animation-delay: 1.0s">  skills: [<span style="color: #98c379;">"Laravel"</span>, <span style="color: #98c379;">"Flutter"</span>, <span style="color: #98c379;">"MySQL"</span>, <span style="color: #98c379;">"PHP"</span>],</div>
                    <div class="c-line" style="animation-delay: 1.2s">  passion: <span style="color: #98c379;">"Logic, Clean Code & Architecture"</span>,</div>
                    <div class="c-line" style="animation-delay: 1.4s">  isAvailable: <span style="color: #d19a66;">true</span>,</div>
                    <div class="c-line" style="animation-delay: 1.6s"></div>
                    <div class="c-line" style="animation-delay: 1.8s">  <span style="color: #61afef;">buildFuture</span>() {</div>
                    <div class="c-line" style="animation-delay: 2.0s">    <span style="color: #c678dd;">return</span> <span style="color: #d19a66;">this</span>.skills.join(<span style="color: #98c379;">' + '</span>);</div>
                    <div class="c-line" style="animation-delay: 2.2s">  },</div>
                    <div class="c-line" style="animation-delay: 2.4s"></div>
                    <div class="c-line" style="animation-delay: 2.6s">  <span style="color: #61afef;">execute</span>() {</div>
                    <div class="c-line" style="animation-delay: 2.8s">    <span style="color: #c678dd;">while</span>(<span style="color: #d19a66;">true</span>) {</div>
                    <div class="c-line" style="animation-delay: 3.0s">      <span style="color: #d19a66;">this</span>.code(); <span style="color: #d19a66;">this</span>.learn();</div>
                    <div class="c-line" style="animation-delay: 3.2s">    }</div>
                    <div class="c-line" style="animation-delay: 3.4s">  }</div>
                    <div class="c-line" style="animation-delay: 3.6s">};</div>
                    <div class="c-line" style="animation-delay: 3.8s"></div>
                    <div class="c-line" style="animation-delay: 4.0s"><span style="color: #e5c07b;">developer</span>.<span style="color: #61afef;">execute</span>();<span class="c-cursor"></span></div>
                  </div>
                </div>
                <div class="about__badge">
                  <span class="about__badge-dot"></span>
                  Siap Berkolaborasi
                </div>
              </div>
            </div>
            <div class="about__copy reveal" data-reveal>
              <p>
                Berbasis di Boyolali, Jawa Tengah, saya adalah mahasiswa Sarjana Terapan Teknologi Rekayasa Perangkat Lunak di Politeknik Indonusa Surakarta. Saya berdedikasi untuk terus belajar dan menerapkan prinsip rekayasa perangkat lunak dalam pengembangan web dan aplikasi mobile, mulai dari perancangan sistem hingga integrasi database.
              </p>
              <ul class="about__pillars">
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Pengembangan Web & Backend dengan Laravel dan PHP</span>
                </li>
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Pengembangan Aplikasi Mobile dengan Flutter & Dart</span>
                </li>
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Perancangan Database Relasional (MySQL) dan Analisis Sistem</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section section--skills" id="skills">
        <div class="container section__wrap">
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">Keahlian</span>
            <h2 class="section__title">Teknologi & Tools Utama</h2>
          </header>
          <div class="skills">
            <article class="skill-card reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Bahasa Pemrograman</h3>
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
              <h3 class="skill-card__title">Basis Data & Lainnya</h3>
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
            <span class="section__eyebrow">Karya Pilihan</span>
            <h2 class="section__title">Proyek Terkini</h2>
            <p class="section__intro">
              Beberapa hasil karya terbaik saya, mencakup situs e-commerce, dashboard perusahaan, hingga sistem manajemen cerdas.
            </p>
          </header>
          <div class="projects-wrapper">
            <button class="projects-nav projects-nav--prev magnetic" type="button" aria-label="Proyek Sebelumnya" data-magnetic>
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
            <span class="section__eyebrow">Perjalanan Saya</span>
            <h2 class="section__title">Pendidikan & Pengalaman</h2>
          </header>
          <ol class="timeline">
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2024 — Present</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Sarjana Terapan Teknologi Rekayasa Perangkat Lunak</h3>
                <p class="timeline__company">Politeknik Indonusa Surakarta</p>
                <p class="timeline__text">
                  Mempelajari Rekayasa Perangkat Lunak, Pengembangan Web, Sistem Basis Data, Aplikasi Mobile, Jaringan Komputer, serta Analisis & Desain Sistem.
                </p>
              </div>
            </li>
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2025 — Present</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Committee Member</h3>
                <p class="timeline__company">Himpunan Mahasiswa Teknologi Rekayasa Perangkat Lunak</p>
                <p class="timeline__text">
                  Berpartisipasi dalam mengorganisir acara akademik dan kegiatan mahasiswa, serta berkoordinasi dengan anggota panitia lainnya untuk mendukung persiapan dan pelaksanaan acara.
                </p>
              </div>
            </li>
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2025</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Volunteer</h3>
                <p class="timeline__company">Solo Anggrek Festival</p>
                <p class="timeline__text">
                  Membantu persiapan acara selama 2 bulan dan mendukung layanan pengunjung sepanjang 7 hari pelaksanaan festival, memfasilitasi aktivitas harian dan bantuan untuk pengunjung.
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
              <span class="section__eyebrow">Kontak</span>
              <h2 class="section__title">Mari Diskusikan Proyek Anda</h2>
              <p class="section__intro contact__text">
                Ceritakan detail mengenai proyek yang ingin Anda buat. Saya akan membalas pesan Anda sesegera mungkin.
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
                  <span class="form__label">Nama</span>
                  <input
                    class="form__input"
                    name="name"
                    type="text"
                    autocomplete="name"
                    required
                    placeholder="Nama Lengkap Anda"
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
                    placeholder="email@contoh.com"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
              </div>
              <div class="form__row">
                <label class="form__field">
                  <span class="form__label">Nomor Telepon</span>
                  <input
                    class="form__input"
                    name="phone"
                    type="tel"
                    autocomplete="tel"
                    placeholder="0812xxxxxx (Opsional)"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
                <label class="form__field">
                  <span class="form__label">Subjek</span>
                  <input
                    class="form__input"
                    name="subject"
                    type="text"
                    placeholder="Kerjasama / Tanya Harga (Opsional)"
                  />
                  <span class="form__error" role="alert"></span>
                </label>
              </div>
              <label class="form__field">
                <span class="form__label">Pesan</span>
                <textarea
                  class="form__input form__textarea"
                  name="message"
                  rows="5"
                  required
                  placeholder="Ceritakan detail proyek Anda..."
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
                  <span class="form__submit-loading-text">Mengirim...</span>
                </span>
                <span class="form__submit-text">Kirim Pesan</span>
                <span class="form__submit-done" hidden aria-hidden="true"
                  >Terkirim — Terima Kasih!</span
                >
              </button>
              <p class="form__note" id="form-message">
                Pesan Anda akan disimpan dengan aman di database kami.
              </p>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container footer__inner">
        <p class="footer__copy">
          © <span id="year"></span> Alexa Kusuma Wardana. Crafted with HTML, CSS &amp;
          JS.
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
