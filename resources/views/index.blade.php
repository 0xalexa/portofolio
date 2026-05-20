<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portofolio Alex Kusuma Wardana — proyek web, keahlian, dan kontak."
    />
    <title>Alex Kusuma Wardana — Pengembang Web</title>
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
          Alex Kusuma Wardana
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
              Pengembang Web Profesional dengan fokus pada antarmuka yang intuitif, desain yang interaktif, dan performa tingkat tinggi.
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
                  <span>React</span><span>TypeScript</span
                  ><span>Design systems</span><span>WebGL-ready CSS</span
                  ><span>Motion</span><span>A11y</span><span>Performance</span
                  ><span>Storybook</span> <span>React</span
                  ><span>TypeScript</span><span>Design systems</span
                  ><span>WebGL-ready CSS</span><span>Motion</span
                  ><span>A11y</span><span>Performance</span
                  ><span>Storybook</span>
                </div>
              </div>
            </div>
          </div>

          <aside class="hero__visual" aria-hidden="true">
            <div class="hero__bento">
              <div class="hero__float hero__float--1">
                <span class="hero__float-label">Skor Performa</span>
                <strong class="hero__float-value">98</strong>
                <span class="hero__float-unit">/100</span>
              </div>
              <div class="hero__float hero__float--2">
                <span class="hero__pulse"></span>
                <span>Sistem Aktif</span>
              </div>
              <div class="hero__mock">
                <div class="hero__mock-bar">
                  <span></span><span></span><span></span>
                </div>
                <div class="hero__mock-body">
                  <div class="hero__mock-row"></div>
                  <div class="hero__mock-row hero__mock-row--short"></div>
                  <div class="hero__mock-blocks">
                    <span></span><span></span><span></span>
                  </div>
                </div>
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
          <span class="section__index" aria-hidden="true">01</span>
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
                <div class="about__photo tilt" data-tilt></div>
                <div class="about__badge">
                  <span class="about__badge-dot"></span>
                  Siap Berkolaborasi
                </div>
              </div>
            </div>
            <div class="about__copy reveal" data-reveal>
              <p>
                Berbasis di Indonesia, saya bekerja dengan berbagai klien untuk merancang dan membangun situs web pemasaran, dashboard analitik, dan sistem antarmuka kustom. Saya sangat memperhatikan detail tipografi, harmoni warna, dan animasi interaktif yang meningkatkan UX tanpa mengurangi kecepatan memuat halaman.
              </p>
              <ul class="about__pillars">
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Kode HTML & CSS yang bersih dan mudah dirawat</span>
                </li>
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Desain UI/UX yang responsif dan berstandar global</span>
                </li>
                <li>
                  <span class="about__pillar-icon" aria-hidden="true">◇</span>
                  <span>Integrasi sistem JavaScript modern & ekosistem React</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section section--skills" id="skills">
        <div class="container section__wrap">
          <span class="section__index" aria-hidden="true">02</span>
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">Keahlian</span>
            <h2 class="section__title">Teknologi & Tools Utama</h2>
          </header>
          <div class="skills">
            <article class="skill-card reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Pengembangan Web</h3>
              <div class="skill-bar" data-progress="95">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">HTML / CSS / JS Modern</span>
              </div>
              <div class="skill-bar" data-progress="90">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">React & Next.js</span>
              </div>
              <div class="skill-bar" data-progress="82">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">TypeScript & Node.js</span>
              </div>
            </article>
            <article class="skill-card reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Desain UI/UX & Animasi</h3>
              <div class="skill-bar" data-progress="85">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Figma</span>
              </div>
              <div class="skill-bar" data-progress="80">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Animation / GSAP</span>
              </div>
              <div class="skill-bar" data-progress="75">
                <div class="skill-bar__fill"></div>
                <span class="skill-bar__label">Aksesibilitas Web (A11y)</span>
              </div>
            </article>
            <article class="skill-tags reveal tilt-wrap" data-reveal>
              <h3 class="skill-card__title">Juga Familiar Dengan</h3>
              <div class="tags">
                <span class="tag">Git</span>
                <span class="tag">Vite</span>
                <span class="tag">Node basics</span>
                <span class="tag">REST APIs</span>
                <span class="tag">Storybook</span>
                <span class="tag">Cypress</span>
                <span class="tag">i18n</span>
                <span class="tag">Performance</span>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section--work" id="work">
        <div class="container section__wrap">
          <span class="section__index" aria-hidden="true">03</span>
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">Karya Pilihan</span>
            <h2 class="section__title">Proyek Terkini</h2>
            <p class="section__intro">
              Beberapa hasil karya terbaik saya, mencakup situs e-commerce, dashboard perusahaan, hingga sistem manajemen cerdas.
            </p>
          </header>
          <div class="projects">
            <article class="project-card reveal tilt-wrap" data-reveal>
              <a
                class="project-card__link"
                href="#"
                aria-label="Sistem E-Commerce Aura — buka proyek"
              >
                <div class="project-card__shine" aria-hidden="true"></div>
                <div class="project-card__media project-card__media--1"></div>
                <div class="project-card__body">
                  <span class="project-card__meta">E‑commerce · 2025</span>
                  <h3 class="project-card__title">Sistem E-Commerce Aura</h3>
                  <p class="project-card__desc">
                    Toko online headless dengan grid fluida dan pemuatan gambar super cepat.
                  </p>
                  <span class="project-card__arrow" aria-hidden="true">→</span>
                </div>
              </a>
            </article>
            <article class="project-card reveal tilt-wrap" data-reveal>
              <a
                class="project-card__link"
                href="#"
                aria-label="Northwind Analytics — buka proyek"
              >
                <div class="project-card__shine" aria-hidden="true"></div>
                <div class="project-card__media project-card__media--2"></div>
                <div class="project-card__body">
                  <span class="project-card__meta">Dashboard · 2024</span>
                  <h3 class="project-card__title">Northwind Analytics</h3>
                  <p class="project-card__desc">
                    Antarmuka padat data yang menenangkan mata dan ramah penggunaan keyboard.
                  </p>
                  <span class="project-card__arrow" aria-hidden="true">→</span>
                </div>
              </a>
            </article>
            <article class="project-card reveal tilt-wrap" data-reveal>
              <a
                class="project-card__link"
                href="#"
                aria-label="Jimpitan Digital Desa — buka proyek"
              >
                <div class="project-card__shine" aria-hidden="true"></div>
                <div class="project-card__media project-card__media--3"></div>
                <div class="project-card__body">
                  <span class="project-card__meta">Sistem Manajemen · 2024</span>
                  <h3 class="project-card__title">Jimpitan Digital Desa</h3>
                  <p class="project-card__desc">
                    Platform pencatatan keuangan warga desa secara digital yang transparan dan efisien.
                  </p>
                  <span class="project-card__arrow" aria-hidden="true">→</span>
                </div>
              </a>
            </article>
          </div>
        </div>
      </section>

      <section class="section section--timeline" id="timeline">
        <div class="container section__wrap">
          <span class="section__index" aria-hidden="true">04</span>
          <header class="section__head reveal" data-reveal>
            <span class="section__eyebrow">Perjalanan Saya</span>
            <h2 class="section__title">Pendidikan & Pengalaman</h2>
          </header>
          <ol class="timeline">
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2025 — Sekarang</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Personal Web Projects</h3>
                <p class="timeline__company">Eksplorasi Mandiri & Portofolio</p>
                <p class="timeline__text">
                  Merancang, membangun, dan mengoptimalkan proyek web fungsional guna mengimplementasikan logika pemrograman tingkat lanjut, integrasi basis data relasional, serta penerapan arsitektur web modern.
                </p>
              </div>
            </li>
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2024 — 2025</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Web Development Program</h3>
                <p class="timeline__company">Bootcamp & Pelatihan Intensif</p>
                <p class="timeline__text">
                  Membangun pemahaman komprehensif dan keterampilan praktis dalam perancangan antarmuka web responsif (HTML, CSS, JavaScript) serta pengelolaan data dinamis berbasis framework PHP dan Laravel.
                </p>
              </div>
            </li>
            <li class="timeline__item reveal" data-reveal>
              <span class="timeline__date">2024 — Sekarang</span>
              <div class="timeline__card">
                <h3 class="timeline__role">Mahasiswa Teknologi Rekayasa Perangkat Lunak</h3>
                <p class="timeline__company">Program Sarjana Terapan</p>
                <p class="timeline__text">
                  Mendalami fondasi rekayasa perangkat lunak, perancangan arsitektur basis data, serta penerapan praktis metodologi pengembangan aplikasi web modern secara sistematis dan terstruktur.
                </p>
              </div>
            </li>
          </ol>
        </div>
      </section>

      <section class="section section--contact" id="contact">
        <div class="container section__wrap">
          <span class="section__index" aria-hidden="true">05</span>
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
          © <span id="year"></span> Alex Kusuma Wardana. Crafted with HTML, CSS &amp;
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
