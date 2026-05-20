<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV — Alex Kusuma Wardana</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Syne:wght@500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --bg: #09090b;
        --surface: #18181b;
        --border: rgba(255, 255, 255, 0.08);
        --text: #f8fafc;
        --text-muted: #a1a1aa;
        --accent: #c084fc;
        --accent-deep: #8b5cf6;
        --font-sans: "DM Sans", system-ui, sans-serif;
        --font-display: "Syne", system-ui, sans-serif;
      }

      *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

      body {
        font-family: var(--font-sans);
        font-size: 15px;
        line-height: 1.65;
        color: var(--text);
        background: var(--bg);
      }

      /* ── Screen toolbar ── */
      .cv-toolbar {
        position: fixed;
        top: 0; left: 0; right: 0;
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.9rem 2rem;
        background: rgba(9,9,11,.82);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border-bottom: 1px solid var(--border);
      }
      .cv-toolbar__back {
        color: var(--text-muted);
        text-decoration: none;
        font-size: .88rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        transition: color .3s;
      }
      .cv-toolbar__back:hover { color: var(--text); }
      .cv-toolbar__actions { display: flex; gap: .75rem; }
      .cv-toolbar__btn {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        padding: .6rem 1.3rem;
        font-family: inherit;
        font-size: .85rem;
        font-weight: 600;
        border-radius: 999px;
        border: none;
        cursor: pointer;
        transition: transform .3s, box-shadow .3s;
        text-decoration: none;
      }
      .cv-toolbar__btn--print {
        background: linear-gradient(135deg, #7c3aed, #4f46e5);
        color: #fff;
        box-shadow: 0 6px 24px rgba(124,58,237,.35);
      }
      .cv-toolbar__btn--print:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 32px rgba(124,58,237,.45);
      }
      .cv-toolbar__btn--secondary {
        background: rgba(255,255,255,.06);
        color: var(--text);
        box-shadow: inset 0 0 0 1px rgba(255,255,255,.12);
      }
      .cv-toolbar__btn--secondary:hover {
        background: rgba(255,255,255,.1);
        transform: translateY(-2px);
      }

      /* ── CV Paper ── */
      .cv-page {
        max-width: 820px;
        margin: 100px auto 4rem;
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 24px 80px rgba(0,0,0,.45);
      }

      /* Header */
      .cv-header {
        position: relative;
        padding: 3rem 3rem 2.5rem;
        background:
          linear-gradient(135deg, rgba(139,92,246,.15), rgba(236,72,153,.08), rgba(14,165,233,.08)),
          var(--surface);
        border-bottom: 1px solid var(--border);
      }
      .cv-header::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--accent-deep), var(--accent), #38bdf8);
      }
      .cv-header__top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 2rem;
      }
      .cv-header__name {
        font-family: var(--font-display);
        font-weight: 800;
        font-size: 2rem;
        letter-spacing: -0.04em;
        line-height: 1.15;
      }
      .cv-header__name span {
        display: block;
        font-size: .85rem;
        font-weight: 500;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--accent);
        margin-top: .4rem;
      }
      .cv-header__contact {
        text-align: right;
        font-size: .82rem;
        color: var(--text-muted);
        line-height: 1.9;
        flex-shrink: 0;
      }
      .cv-header__contact a {
        color: var(--accent);
        text-decoration: none;
      }
      .cv-header__contact a:hover { text-decoration: underline; }
      .cv-header__summary {
        margin-top: 1.5rem;
        font-size: .92rem;
        color: var(--text-muted);
        line-height: 1.75;
        max-width: 600px;
      }

      /* Body */
      .cv-body {
        display: grid;
        grid-template-columns: 1fr 260px;
        min-height: 400px;
      }
      .cv-main { padding: 2.5rem 2.5rem 2.5rem 3rem; }
      .cv-aside {
        padding: 2.5rem 2.5rem 2.5rem 1.5rem;
        border-left: 1px solid var(--border);
        background: rgba(255,255,255,.015);
      }

      /* Section */
      .cv-section { margin-bottom: 2.2rem; }
      .cv-section:last-child { margin-bottom: 0; }
      .cv-section__title {
        font-family: var(--font-display);
        font-weight: 700;
        font-size: .72rem;
        letter-spacing: .2em;
        text-transform: uppercase;
        color: var(--accent);
        margin-bottom: 1.1rem;
        padding-bottom: .55rem;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: .6rem;
      }
      .cv-section__title::before {
        content: '';
        width: 8px; height: 8px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--accent), #ec4899);
        flex-shrink: 0;
      }

      /* Entry */
      .cv-entry { margin-bottom: 1.6rem; }
      .cv-entry:last-child { margin-bottom: 0; }
      .cv-entry__header {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        gap: 1rem;
        margin-bottom: .25rem;
      }
      .cv-entry__role {
        font-weight: 700;
        font-size: .95rem;
        color: var(--text);
      }
      .cv-entry__date {
        font-size: .78rem;
        color: var(--text-muted);
        white-space: nowrap;
        font-weight: 500;
      }
      .cv-entry__org {
        font-size: .82rem;
        color: var(--accent);
        margin-bottom: .35rem;
        font-weight: 500;
      }
      .cv-entry__desc {
        font-size: .85rem;
        color: var(--text-muted);
        line-height: 1.7;
      }
      .cv-entry__desc ul {
        padding-left: 1.1rem;
        margin-top: .35rem;
      }
      .cv-entry__desc li {
        margin-bottom: .25rem;
      }

      /* Skills */
      .cv-skill-group { margin-bottom: 1.3rem; }
      .cv-skill-group:last-child { margin-bottom: 0; }
      .cv-skill-group__label {
        font-weight: 600;
        font-size: .8rem;
        color: var(--text);
        margin-bottom: .45rem;
      }
      .cv-tags { display: flex; flex-wrap: wrap; gap: .35rem; }
      .cv-tag {
        font-size: .72rem;
        font-weight: 500;
        padding: .25rem .65rem;
        border-radius: 6px;
        background: rgba(192,132,252,.1);
        color: var(--accent);
        border: 1px solid rgba(192,132,252,.15);
      }

      /* Language / Info list */
      .cv-info-list { list-style: none; }
      .cv-info-list li {
        font-size: .84rem;
        color: var(--text-muted);
        padding: .4rem 0;
        border-bottom: 1px solid rgba(255,255,255,.04);
        display: flex;
        justify-content: space-between;
      }
      .cv-info-list li:last-child { border-bottom: none; }
      .cv-info-list li strong {
        color: var(--text);
        font-weight: 600;
      }

      /* Footer */
      .cv-footer {
        padding: 1.2rem 3rem;
        border-top: 1px solid var(--border);
        text-align: center;
        font-size: .75rem;
        color: var(--text-muted);
        letter-spacing: .04em;
      }

      /* ── Responsive ── */
      @media (max-width: 700px) {
        .cv-page { margin: 80px .75rem 2rem; border-radius: 14px; }
        .cv-header { padding: 2rem 1.5rem 1.8rem; }
        .cv-header__top { flex-direction: column; gap: .8rem; }
        .cv-header__contact { text-align: left; }
        .cv-body { grid-template-columns: 1fr; }
        .cv-main { padding: 1.5rem; }
        .cv-aside { border-left: none; border-top: 1px solid var(--border); padding: 1.5rem; }
        .cv-toolbar { padding: .7rem 1rem; }
        .cv-footer { padding: 1rem 1.5rem; }
      }

      /* ── Print ── */
      @media print {
        @page {
          size: A4;
          margin: 12mm 14mm;
        }
        body { background: #fff; color: #1a1a1a; font-size: 10pt; }
        .cv-toolbar { display: none !important; }
        .cv-page {
          margin: 0; max-width: 100%;
          border: none; border-radius: 0;
          box-shadow: none; background: #fff;
        }
        .cv-header {
          background: #fff;
          border-bottom: 2px solid #1a1a1a;
          padding: 0 0 1rem;
        }
        .cv-header::before { background: #1a1a1a; height: 3px; }
        .cv-header__name { color: #1a1a1a; font-size: 1.6rem; }
        .cv-header__name span { color: #555; }
        .cv-header__contact { color: #555; }
        .cv-header__contact a { color: #333; }
        .cv-header__summary { color: #444; }
        .cv-body { grid-template-columns: 1fr 220px; }
        .cv-main { padding: 1.2rem 1.2rem 1.2rem 0; }
        .cv-aside { padding: 1.2rem 0 1.2rem 1.2rem; border-left: 1px solid #ddd; background: transparent; }
        .cv-section__title { color: #333; border-bottom-color: #ddd; }
        .cv-section__title::before { background: #333; }
        .cv-entry__role { color: #1a1a1a; }
        .cv-entry__org { color: #555; }
        .cv-entry__date { color: #666; }
        .cv-entry__desc { color: #444; }
        .cv-tag { background: #f3f3f3; color: #333; border-color: #ddd; }
        .cv-skill-group__label { color: #1a1a1a; }
        .cv-info-list li { color: #444; border-bottom-color: #eee; }
        .cv-info-list li strong { color: #1a1a1a; }
        .cv-footer { border-top-color: #ddd; color: #999; }
      }
    </style>
  </head>
  <body>
    <!-- Toolbar (hidden on print) -->
    <div class="cv-toolbar">
      <a href="/" class="cv-toolbar__back">← Kembali ke Portofolio</a>
      <div class="cv-toolbar__actions">
        <a href="/" class="cv-toolbar__btn cv-toolbar__btn--secondary">Portofolio</a>
        <button class="cv-toolbar__btn cv-toolbar__btn--print" onclick="window.print()">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
          Cetak / Unduh PDF
        </button>
      </div>
    </div>

    <!-- CV Paper -->
    <div class="cv-page">
      <!-- Header -->
      <header class="cv-header">
        <div class="cv-header__top">
          <div>
            <h1 class="cv-header__name">
              Alex Kusuma Wardana
              <span>Web Developer</span>
            </h1>
          </div>
          <div class="cv-header__contact">
            Indonesia<br />
            <a href="https://github.com/0xalexa">github.com/0xalexa</a><br />
            <a href="mailto:alexkusumawardana@gmail.com">alexkusumawardana@gmail.com</a>
          </div>
        </div>
        <p class="cv-header__summary">
          Mahasiswa Teknologi Rekayasa Perangkat Lunak yang antusias dalam pengembangan web modern. Memiliki pemahaman praktis dalam membangun antarmuka responsif, mengelola data dinamis, serta menerapkan arsitektur web terstruktur melalui proyek-proyek personal yang fungsional.
        </p>
      </header>

      <div class="cv-body">
        <!-- Main Column -->
        <div class="cv-main">
          <!-- Pendidikan -->
          <section class="cv-section">
            <h2 class="cv-section__title">Pendidikan</h2>
            <div class="cv-entry">
              <div class="cv-entry__header">
                <div class="cv-entry__role">Teknologi Rekayasa Perangkat Lunak</div>
                <div class="cv-entry__date">2024 — Sekarang</div>
              </div>
              <div class="cv-entry__org">Program Sarjana Terapan</div>
              <div class="cv-entry__desc">
                Mendalami fondasi rekayasa perangkat lunak, perancangan arsitektur basis data, serta penerapan praktis metodologi pengembangan aplikasi web modern secara sistematis dan terstruktur.
              </div>
            </div>
          </section>

          <!-- Pelatihan -->
          <section class="cv-section">
            <h2 class="cv-section__title">Pelatihan & Sertifikasi</h2>
            <div class="cv-entry">
              <div class="cv-entry__header">
                <div class="cv-entry__role">Web Development Program</div>
                <div class="cv-entry__date">2024 — 2025</div>
              </div>
              <div class="cv-entry__org">Bootcamp & Pelatihan Intensif</div>
              <div class="cv-entry__desc">
                Membangun pemahaman komprehensif dan keterampilan praktis dalam perancangan antarmuka web responsif (HTML, CSS, JavaScript) serta pengelolaan data dinamis berbasis framework PHP dan Laravel.
              </div>
            </div>
          </section>

          <!-- Proyek -->
          <section class="cv-section">
            <h2 class="cv-section__title">Proyek</h2>
            <div class="cv-entry">
              <div class="cv-entry__header">
                <div class="cv-entry__role">Personal Web Projects</div>
                <div class="cv-entry__date">2025 — Sekarang</div>
              </div>
              <div class="cv-entry__org">Eksplorasi Mandiri & Portofolio</div>
              <div class="cv-entry__desc">
                <ul>
                  <li>Merancang dan mengembangkan situs portofolio personal dengan desain premium, animasi interaktif, dan arsitektur modern menggunakan Laravel.</li>
                  <li>Membangun sistem Jimpitan Digital Desa — platform pencatatan keuangan warga secara digital dengan dashboard admin, visualisasi data, dan manajemen transaksi real-time.</li>
                  <li>Mengimplementasikan integrasi basis data relasional, form handling, serta penerapan praktik keamanan web pada setiap proyek.</li>
                </ul>
              </div>
            </div>
          </section>
        </div>

        <!-- Sidebar -->
        <aside class="cv-aside">
          <!-- Keahlian Teknis -->
          <section class="cv-section">
            <h2 class="cv-section__title">Keahlian Teknis</h2>
            <div class="cv-skill-group">
              <div class="cv-skill-group__label">Front-End</div>
              <div class="cv-tags">
                <span class="cv-tag">HTML5</span>
                <span class="cv-tag">CSS3</span>
                <span class="cv-tag">JavaScript</span>
                <span class="cv-tag">Responsive Design</span>
              </div>
            </div>
            <div class="cv-skill-group">
              <div class="cv-skill-group__label">Back-End</div>
              <div class="cv-tags">
                <span class="cv-tag">PHP</span>
                <span class="cv-tag">Laravel</span>
                <span class="cv-tag">MySQL</span>
                <span class="cv-tag">REST API</span>
              </div>
            </div>
            <div class="cv-skill-group">
              <div class="cv-skill-group__label">Tools & Workflow</div>
              <div class="cv-tags">
                <span class="cv-tag">Git</span>
                <span class="cv-tag">GitHub</span>
                <span class="cv-tag">VS Code</span>
                <span class="cv-tag">Laragon</span>
                <span class="cv-tag">Figma</span>
              </div>
            </div>
          </section>

          <!-- Bahasa -->
          <section class="cv-section">
            <h2 class="cv-section__title">Bahasa</h2>
            <ul class="cv-info-list">
              <li><span>Indonesia</span> <strong>Native</strong></li>
              <li><span>English</span> <strong>Conversational</strong></li>
            </ul>
          </section>

          <!-- Soft Skills -->
          <section class="cv-section">
            <h2 class="cv-section__title">Soft Skills</h2>
            <div class="cv-tags">
              <span class="cv-tag">Problem Solving</span>
              <span class="cv-tag">Detail-Oriented</span>
              <span class="cv-tag">Fast Learner</span>
              <span class="cv-tag">Self-Motivated</span>
              <span class="cv-tag">Team Player</span>
            </div>
          </section>

          <!-- Minat -->
          <section class="cv-section">
            <h2 class="cv-section__title">Minat</h2>
            <div class="cv-tags">
              <span class="cv-tag">UI/UX Design</span>
              <span class="cv-tag">Open Source</span>
              <span class="cv-tag">Web Performance</span>
              <span class="cv-tag">Clean Code</span>
            </div>
          </section>
        </aside>
      </div>

      <footer class="cv-footer">
        Curriculum Vitae — Alex Kusuma Wardana · Diperbarui Mei 2026
      </footer>
    </div>
  </body>
</html>
