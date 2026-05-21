(function () {
  "use strict";

  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;
  const body = document.body;
  const boot = document.getElementById("boot");
  const scrollProgress = document.getElementById("scroll-progress");
  const hero = document.getElementById("hero");
  const cursorGlow = document.getElementById("cursor-glow");

  const yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = String(new Date().getFullYear());

  function headerHeight() {
    const h = document.querySelector(".site-header");
    return h ? h.offsetHeight : 76;
  }

  function finishBoot() {
    body.classList.remove("is-booting");
    body.classList.add("is-ready");
    if (boot) boot.classList.add("is-done");
    initAfterBoot();
  }

  body.classList.add("is-booting");

  if (prefersReducedMotion || !boot) {
    finishBoot();
  } else {
    window.setTimeout(finishBoot, 1100);
  }

  function initAfterBoot() {
    initRevealObserver();
    initHeroEffects();
    initTilt();
    initMagnetic();
  }

  const header = document.querySelector(".site-header");

  function onScroll() {
    const y = window.scrollY;
    if (header) {
      header.classList.toggle("is-scrolled", y > 40);
      if (hero) {
        const heroBottom = hero.offsetTop + hero.offsetHeight;
        header.classList.toggle("is-on-hero", y < heroBottom - 120);
      }
    }
    if (scrollProgress) {
      const max = document.documentElement.scrollHeight - window.innerHeight;
      const p = max > 0 ? (y / max) * 100 : 0;
      scrollProgress.style.width = Math.min(100, Math.max(0, p)) + "%";
    }
  }

  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();
  window.addEventListener("resize", onScroll, { passive: true });

  const navToggle = document.querySelector(".nav__toggle");
  const navMenu = document.getElementById("nav-menu");

  if (navToggle && navMenu) {
    navToggle.addEventListener("click", function () {
      const open = navToggle.getAttribute("aria-expanded") === "true";
      navToggle.setAttribute("aria-expanded", String(!open));
      navMenu.classList.toggle("is-open", !open);
    });

    navMenu.querySelectorAll(".nav__link").forEach(function (link) {
      link.addEventListener("click", function () {
        navToggle.setAttribute("aria-expanded", "false");
        navMenu.classList.remove("is-open");
      });
    });
  }

  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener("click", function (e) {
      const id = this.getAttribute("href");
      if (!id || id === "#") return;
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      const top =
        target.getBoundingClientRect().top +
        window.scrollY -
        headerHeight() -
        14;
      window.scrollTo({
        top: top,
        behavior: prefersReducedMotion ? "auto" : "smooth",
      });
    });
  });

  let revealObserver;

  function initRevealObserver() {
    const revealEls = document.querySelectorAll("[data-reveal]");
    if (!revealEls.length) return;

    if ("IntersectionObserver" in window) {
      revealObserver = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-visible");
              revealObserver.unobserve(entry.target);
            }
          });
        },
        { rootMargin: "0px 0px -6% 0px", threshold: 0.06 },
      );
      revealEls.forEach(function (el) {
        revealObserver.observe(el);
      });
    } else {
      revealEls.forEach(function (el) {
        el.classList.add("is-visible");
      });
    }
  }

  function initHeroEffects() {
    if (!hero) return;

    const orbs = hero.querySelectorAll(".hero__orb");
    let raf = 0;

    function paintSpotlight(clientX, clientY) {
      const rect = hero.getBoundingClientRect();
      const x = ((clientX - rect.left) / rect.width) * 100;
      const y = ((clientY - rect.top) / rect.height) * 100;
      hero.style.setProperty("--mx", Math.max(0, Math.min(100, x)) + "%");
      hero.style.setProperty("--my", Math.max(0, Math.min(100, y)) + "%");

      if (!prefersReducedMotion && orbs.length) {
        const dx = (clientX - rect.left - rect.width / 2) / rect.width;
        const dy = (clientY - rect.top - rect.height / 2) / rect.height;
        orbs.forEach(function (orb, i) {
          const m = (i + 1) * 10;
          orb.style.transform = "translate(" + dx * m + "px, " + dy * m + "px)";
        });
      }
    }

    hero.addEventListener(
      "mousemove",
      function (e) {
        if (prefersReducedMotion) return;
        cancelAnimationFrame(raf);
        raf = requestAnimationFrame(function () {
          paintSpotlight(e.clientX, e.clientY);
        });
      },
      { passive: true },
    );

    hero.addEventListener(
      "mouseleave",
      function () {
        hero.style.setProperty("--mx", "50%");
        hero.style.setProperty("--my", "42%");
        orbs.forEach(function (orb) {
          orb.style.transform = "";
        });
      },
      { passive: true },
    );
  }

  if (
    cursorGlow &&
    window.matchMedia("(pointer: fine)").matches &&
    !prefersReducedMotion
  ) {
    let cx = window.innerWidth / 2;
    let cy = window.innerHeight / 2;
    let gx = cx;
    let gy = cy;

    document.addEventListener(
      "mousemove",
      function (e) {
        cx = e.clientX;
        cy = e.clientY;
        if (body.classList.contains("is-ready"))
          cursorGlow.classList.add("is-on");
      },
      { passive: true },
    );

    function tickGlow() {
      if (body.classList.contains("is-ready")) {
        gx += (cx - gx) * 0.12;
        gy += (cy - gy) * 0.12;
        cursorGlow.style.transform = "translate(" + gx + "px, " + gy + "px)";
      }
      requestAnimationFrame(tickGlow);
    }

    requestAnimationFrame(tickGlow);
  }

  function initTilt() {
    if (prefersReducedMotion) return;

    document.querySelectorAll("[data-tilt]").forEach(function (el) {
      const wrap = el.closest(".tilt-wrap");
      if (!wrap) return;

      wrap.addEventListener("mousemove", function (e) {
        const r = wrap.getBoundingClientRect();
        const px = (e.clientX - r.left) / r.width - 0.5;
        const py = (e.clientY - r.top) / r.height - 0.5;
        el.style.transform =
          "rotateY(" +
          px * 8 +
          "deg) rotateX(" +
          -py * 8 +
          "deg) scale3d(1.01, 1.01, 1)";
      });

      wrap.addEventListener("mouseleave", function () {
        el.style.transform = "";
      });
    });
  }

  function initMagnetic() {
    if (prefersReducedMotion) return;

    document.querySelectorAll("[data-magnetic]").forEach(function (btn) {
      btn.addEventListener("mousemove", function (e) {
        const r = btn.getBoundingClientRect();
        const dx = e.clientX - (r.left + r.width / 2);
        const dy = e.clientY - (r.top + r.height / 2);
        btn.style.transform =
          "translate(" + dx * 0.12 + "px, " + dy * 0.12 + "px)";
      });
      btn.addEventListener("mouseleave", function () {
        btn.style.transform = "";
      });
    });
  }

  function animateCount(el, target, duration) {
    const start = performance.now();
    const from = 0;

    function frame(now) {
      const t = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - t, 3);
      el.textContent = String(Math.round(from + (target - from) * eased));
      if (t < 1) requestAnimationFrame(frame);
    }

    requestAnimationFrame(frame);
  }

  const statBlocks = document.querySelectorAll(".stat");
  if (
    statBlocks.length &&
    "IntersectionObserver" in window &&
    !prefersReducedMotion
  ) {
    const statObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          const stat = entry.target;
          const valueEl = stat.querySelector(".stat__value");
          const target = parseInt(valueEl.getAttribute("data-count"), 10);
          if (!Number.isNaN(target)) animateCount(valueEl, target, 1500);
          statObserver.unobserve(stat);
        });
      },
      { threshold: 0.35 },
    );
    statBlocks.forEach(function (stat) {
      statObserver.observe(stat);
    });
  } else {
    statBlocks.forEach(function (stat) {
      const valueEl = stat.querySelector(".stat__value");
      const target = parseInt(valueEl.getAttribute("data-count"), 10);
      if (!Number.isNaN(target)) valueEl.textContent = String(target);
    });
  }

  const skillBars = document.querySelectorAll(".skill-bar[data-progress]");
  if (skillBars.length && "IntersectionObserver" in window) {
    const barObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          const bar = entry.target;
          const p = bar.getAttribute("data-progress");
          bar.style.setProperty("--progress", p + "%");
          requestAnimationFrame(function () {
            bar.classList.add("is-animated");
          });
          barObserver.unobserve(bar);
        });
      },
      { threshold: 0.22 },
    );
    skillBars.forEach(function (bar) {
      barObserver.observe(bar);
    });
  }

  const backTop = document.querySelector(".back-top");
  if (backTop) {
    window.addEventListener(
      "scroll",
      function () {
        backTop.classList.toggle("is-visible", window.scrollY > 500);
      },
      { passive: true },
    );
    backTop.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: prefersReducedMotion ? "auto" : "smooth",
      });
    });
  }

  const form = document.getElementById("contact-form");
  if (form) {
    const submitBtn = form.querySelector(".form__submit");

    function setError(field, message) {
      const wrap = field.closest(".form__field");
      const err = wrap && wrap.querySelector(".form__error");
      field.classList.toggle("is-invalid", Boolean(message));
      if (err) err.textContent = message || "";
    }

    function validateField(field) {
      const name = field.name;
      const val = (field.value || "").trim();
      if (field.hasAttribute("required") && !val) {
        setError(field, "Kolom ini wajib diisi.");
        return false;
      }
      if (name === "email" && val) {
        const ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
        if (!ok) {
          setError(field, "Masukkan alamat email yang valid.");
          return false;
        }
      }
      setError(field, "");
      return true;
    }

    form.querySelectorAll(".form__input").forEach(function (input) {
      input.addEventListener("blur", function () {
        validateField(input);
      });
      input.addEventListener("input", function () {
        if (input.classList.contains("is-invalid")) validateField(input);
      });
    });

    form.addEventListener("submit", async function (e) {
      e.preventDefault();
      let ok = true;
      form.querySelectorAll(".form__input[required]").forEach(function (input) {
        if (!validateField(input)) ok = false;
      });
      if (!ok) return;

      // Ambil FormData sebelum input dinonaktifkan (karena input disabled tidak akan masuk ke FormData)
      const formData = new FormData(form);
      const csrfToken = form.querySelector('input[name="_token"]')?.value;

      // Show loading spinner
      submitBtn.classList.add("is-loading");
      submitBtn.disabled = true;
      form.querySelectorAll(".form__input").forEach(function (input) {
        input.disabled = true;
      });

      try {
        const response = await fetch(form.action, {
          method: form.method,
          body: formData,
          headers: {
            "Accept": "application/json",
            "X-CSRF-TOKEN": csrfToken
          }
        });

        // Remove loading, show result
        submitBtn.classList.remove("is-loading");

        const formMessage = document.getElementById("form-message");
        if (response.ok) {
            submitBtn.classList.add("is-success");
            const data = await response.json();
            if (formMessage) formMessage.textContent = data.message || "Pesan berhasil dikirim!";
        } else {
            console.error("Server merespon dengan status:", response.status);
            const errData = await response.json().catch(() => null);
            console.error("Detail error:", errData);
            if (formMessage) formMessage.textContent = "Terjadi kesalahan. Silakan coba lagi.";
            
            // Aktifkan kembali input jika gagal agar user bisa memperbaiki
            submitBtn.disabled = false;
            form.querySelectorAll(".form__input").forEach(function (input) {
              input.disabled = false;
            });
        }
      } catch (error) {
          console.error("Kesalahan fetch:", error);
          const formMessage = document.getElementById("form-message");
          if (formMessage) formMessage.textContent = "Terjadi kesalahan koneksi.";
          
          // Remove loading & re-enable on error
          submitBtn.classList.remove("is-loading");
          submitBtn.disabled = false;
          form.querySelectorAll(".form__input").forEach(function (input) {
            input.disabled = false;
          });
      }

      window.setTimeout(function () {
        submitBtn.classList.remove("is-success");
        submitBtn.classList.remove("is-loading");
        submitBtn.disabled = false;
        form.reset();
        form.querySelectorAll(".form__input").forEach(function (input) {
          input.disabled = false;
        });
        const formMessage = document.getElementById("form-message");
        if (formMessage) formMessage.textContent = "Pesan Anda akan disimpan dengan aman di database kami.";
      }, 3200);
    });
  }

  const sections = document.querySelectorAll("main section[id]");
  const navLinks = document.querySelectorAll(".nav__link[href^='#']");

  function setActiveLink() {
    const pos = window.scrollY + headerHeight() + 48;
    let current = "";
    sections.forEach(function (section) {
      const top = section.offsetTop;
      if (pos >= top) current = section.getAttribute("id") || "";
    });
    navLinks.forEach(function (link) {
      const href = link.getAttribute("href");
      const isActive = href === "#" + current;
      link.classList.toggle("is-active", Boolean(isActive && current));
    });
  }

  if (sections.length && navLinks.length) {
    window.addEventListener("scroll", setActiveLink, { passive: true });
    setActiveLink();
  }

  if (prefersReducedMotion) {
    document.querySelectorAll("[data-reveal]").forEach(function (el) {
      el.classList.add("is-visible");
    });
  }
})();
