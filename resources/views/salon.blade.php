<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salon Services | Skinnovation</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600&display=swap"
    rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/appt-form.css') }}">
  <style>
    :root {
      --charcoal: #1a1a1a;
      --dark: #111111;
      --cream: #f5f0eb;
      --beige: #e8ddd4;
      --rose: #c8a090;
      --rose-light: #E8D5B0;
      --gold: #c8a090;
      --white: #ffffff;
      --text-muted: #8a8a8a;
      --card-bg: #1e1e1e;
      --border: rgba(201, 169, 110, 0.2);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      background: #1a1a1a;
      color: var(--cream);
      font-family: 'Jost', sans-serif;
      font-weight: 300;
      overflow-x: hidden;
    }

    /* ===== NAVBAR ===== */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 2000;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 60px;
      height: 72px;
      background: rgba(26, 26, 26, 0.96);
      backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(201, 169, 110, 0.15);
      transition: all 0.4s;
    }

    .nav-logo {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      font-weight: 600;
      letter-spacing: 4px;
      color: var(--white);
      text-transform: uppercase;
      text-decoration: none;
      cursor: pointer;
    }

    .nav-logo span {
      color: var(--white);
    }

    .nav-links {
      display: flex;
      gap: 36px;
      list-style: none;
    }

    .nav-links a {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: #9A9080;
      text-decoration: none;
      transition: all 0.3s;
      cursor: pointer;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: #c8a090;
    }

    .nav-cta {
      padding: 10px 28px;
      background: transparent;
      color: #c8a090;
      border: 1px solid #c8a090;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-family: 'Jost', sans-serif;
      cursor: pointer;
      transition: all 0.3s;
      text-decoration: none;
    }

    .nav-cta:hover {
      background: #c8a090;
      color: #ffffff;
    }

    .nav-right {
      min-width: 200px;
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }


    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --dark: #1a1a1a;
      --cream: #FFF5EB;
      --beige: #FAF5F0;
      --white: #ffffff;
      --rosegold: #C9A87C;
      --rosegold-light: #d4ba95;
      --text: #1a1a1a;
      --text-muted: #777;
      --text-light: rgba(255, 255, 255, 0.4);
    }

    .salon-wrapper {
      font-family: "Inter", sans-serif;
      color: var(--text);
      background: var(--beige);
      line-height: 1.6;
    }

    .salon-wrapper h1,
    .salon-wrapper h2,
    .salon-wrapper h3,
    .salon-wrapper h4,
    .salon-wrapper h5,
    .salon-wrapper h6 {
      font-family: 'Playfair Display', serif;
      font-weight: 600;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style: none;
    }

    img {
      max-width: 100%;
      display: block;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ─── HERO ─── */
    .hero {
      margin-top: 72px;
      position: relative;
      min-height: 70vh;
      display: flex;
      align-items: flex-end;
      background: var(--dark);
      padding-top: 80px;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      background: url('https://images.unsplash.com/photo-1560066984-138dadb4c035?w=1920&q=80') center/cover;
      opacity: 0.3;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(26, 26, 26, 0.4), rgba(26, 26, 26, 0.6), var(--dark));
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding-bottom: 64px;
      width: 100%;
    }

    .hero-tag {
      color: var(--rosegold);
      font-size: 11px;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .hero-title {
      color: #fff;
      font-size: 56px;
      line-height: 1.1;
    }

    .hero-title em {
      color: var(--rosegold);
      font-style: italic;
    }

    .hero-desc {
      color: rgba(255, 255, 255, 0.6);
      font-size: 14px;
      margin-top: 16px;
      max-width: 420px;
    }

    /* ─── KOREAN HEAD SPA ─── */
    .head-spa {
      background: var(--cream);
      padding: 80px 0;
    }

    .head-spa-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
      align-items: center;
    }

    .head-spa-img-wrap {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .head-spa-img-wrap img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      transition: transform 0.7s;
    }

    .head-spa-img-wrap:hover img {
      transform: scale(1.05);
    }

    .head-spa-img-glow {
      position: absolute;
      bottom: -16px;
      right: -16px;
      width: 96px;
      height: 96px;
      background: rgba(201, 168, 124, 0.2);
      border-radius: 50%;
      filter: blur(32px);
    }

    .spa-tag {
      color: var(--rosegold);
      font-size: 11px;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      margin-bottom: 8px;
    }

    .spa-title {
      font-size: 40px;
      margin-bottom: 4px;
    }

    .spa-title-accent {
      font-size: 40px;
      margin-bottom: 24px;
    }

    .spa-title-accent em {
      color: var(--rosegold);
      font-style: italic;
    }

    .spa-desc {
      color: var(--text-muted);
      font-size: 13px;
      margin-bottom: 32px;
      max-width: 420px;
    }

    .features-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px 24px;
      margin-bottom: 32px;
    }

    .feature-item {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .feature-check {
      color: var(--rosegold);
      font-size: 14px;
      flex-shrink: 0;
    }

    .feature-item span {
      font-size: 12px;
      color: rgba(26, 26, 26, 0.8);
    }

    .spa-quote {
      color: var(--text-muted);
      font-size: 12px;
      font-style: italic;
      margin-bottom: 24px;
    }

    .btn-rosegold {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--rosegold);
      color: #fff;
      padding: 12px 32px;
      font-size: 11px;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      border: none;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-rosegold:hover {
      background: var(--rosegold-light);
    }

    .btn-outline {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: 1px solid var(--rosegold);
      color: var(--rosegold);
      padding: 12px 32px;
      font-size: 11px;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      background: none;
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn-outline:hover {
      background: var(--rosegold);
      color: #fff;
    }

    /* ─── SERVICE SECTIONS ─── */
    .section {
      padding: 80px 0;
    }

    .section-header {
      margin-bottom: 56px;
    }

    .section-title {
      font-size: 40px;
    }

    .section-title em {
      color: var(--rosegold);
      font-style: italic;
    }

    .section-subtitle {
      color: var(--text-muted);
      font-size: 13px;
      margin-top: 12px;
      max-width: 500px;
    }

    .cards-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }

    .card {
      background: #fff;
      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 12px;
      padding: 24px;
      transition: all 0.3s;
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
      border-color: rgba(201, 168, 124, 0.2);
    }

    .card h4 {
      font-size: 18px;
      margin-bottom: 12px;
    }

    .card p {
      color: var(--text-muted);
      font-size: 12px;
      line-height: 1.7;
    }

    .section-cta {
      text-align: center;
      margin-top: 48px;
    }

    .bg-white-sec {
      background: var(--white);
    }

    .bg-cream {
      background: var(--cream);
    }

    .bg-beige {
      background: var(--beige);
    }

    /* ─── SVG ICONS ─── */
    /* ─── RESPONSIVE ─── */
    @media (max-width: 768px) {
      .nav {
        display: none;
      }

      .hamburger {
        display: block;
      }

      .hero-title {
        font-size: 36px;
      }

      .head-spa-grid {
        grid-template-columns: 1fr;
      }

      .cards-grid {
        grid-template-columns: 1fr 1fr;
      }

      .section-title,
      .spa-title,
      .spa-title-accent,
      .skin-appt-title,
      .skin-appt-title-acc {
        font-size: 32px;
      }

      .footer-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 480px) {
      .cards-grid {
        grid-template-columns: 1fr;
      }

      .features-grid {
        grid-template-columns: 1fr;
      }

      .footer-grid {
        grid-template-columns: 1fr;
      }

      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
    }


    /* ===== FOOTER ===== */
    /* MASTER FOOTER CLASSES */
    .cnt {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 64px;
    }

    .foot-grid {
      display: grid;
      grid-template-columns: 1.8fr 1fr 1fr 1fr;
      gap: 56px;
      margin-bottom: 60px;
    }

    .foot-logo {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      font-weight: 400;
      color: var(--white);
      text-decoration: none;
      letter-spacing: 0.1em;
      display: block;
      margin-bottom: 0;
      cursor: pointer;
    }

    .foot-logo span {
      color: var(--rose);
    }

    .foot-p {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.4);
      line-height: 1.8;
      font-weight: 300;
      margin-bottom: 24px;
    }

    .fsoc {
      display: block;
    }

    .foot-insta-link {
      display: flex;
      align-items: center;
      gap: 12px;
      color: #fff;
      text-decoration: none;
      font-size: 13px;
      font-weight: 300;
      transition: all 0.3s;
    }

    .foot-insta-link:hover {
      color: var(--rose);
    }

    .fc h4 {
      font-size: 10px;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: #ffffff;
      margin-bottom: 22px;
      font-weight: 500;
    }

    .fc ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .fc ul a {
      font-size: 13.5px;
      color: rgba(255, 255, 255, 0.45);
      text-decoration: none;
      font-weight: 300;
      transition: color 0.3s;
      cursor: pointer;
      display: inline-block;
    }

    .fc ul a:hover {
      color: var(--rose);
      transform: translateX(5px);
    }

    .fc ul a {
      transition: transform 0.3s, color 0.3s;
    }

    .foot-bot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 35px;
      border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .foot-bot span {
      font-size: 12px;
      color: rgba(255, 255, 255, 0.3);
      font-weight: 300;
      letter-spacing: 0.02em;
    }

    .foot-bot a {
      color: var(--rose-light);
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .foot-bot a:hover {
      opacity: 0.7;
    }

    /* ===== ANIMATIONS ===== */
    .reveal {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .reveal-left {
      opacity: 0;
      transform: translateX(-40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal-left.visible {
      opacity: 1;
      transform: translateX(0);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
      nav {
        padding: 16px 30px;
      }

      .services-section {
        padding: 80px 30px;
      }

      .services-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      .service-card {
        padding: 40px;
      }

      footer {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        padding: 40px 30px;
      }

      .hero-content {
        padding: 0 30px;
      }

      .cta-inner {
        padding: 50px 40px;
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        gap: 15px;
        padding: 16px 20px;
      }

      .nav-links {
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
      }

      .nav-logo {
        position: relative;
        left: 0;
        transform: none;
      }

      .nav-cta {
        display: none;
      }

      .hero {
        margin-top: 120px;
        height: 50vh;
      }

      .hero h1 {
        font-size: clamp(32px, 8vw, 48px);
      }

      .hero p {
        font-size: 14px;
        margin-bottom: 24px;
      }

      .hero-content {
        padding: 0 20px;
        text-align: center;
      }

      .hero-tag {
        margin: 0 auto 20px auto;
        display: inline-block;
      }

      .hero-btns {
        justify-content: center;
        flex-direction: column;
        gap: 12px;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
      }

      .btn-primary,
      .btn-outline {
        width: 100%;
        text-align: center;
      }

      .services-section {
        padding: 60px 20px;
      }

      .section-header h2 {
        font-size: 28px;
      }

      .services-grid {
        grid-template-columns: 1fr;
      }

      .service-card {
        padding: 32px;
      }

      .service-card h3 {
        font-size: 24px;
      }

      .cta-section {
        padding: 0 20px 60px;
      }

      .cta-inner {
        padding: 40px 24px;
        text-align: center;
      }

      .cta-inner h2 {
        font-size: 28px;
      }

      .cta-btn {
        width: 100%;
        display: block;
        padding: 16px 0;
      }

      footer {
        grid-template-columns: 1fr;
        gap: 40px;
        padding: 60px 20px;
        text-align: center;
      }

      .footer-brand p {
        margin: 0 auto;
      }

      .footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 15px;
        padding: 20px;
      }
    }
  </style>
</head>

<body>


  <!-- NAVBAR -->
  @include('partials.navbar')

  <div class="salon-wrapper">
    <!-- HERO -->
    <section class="hero">
      <div class="hero-bg"></div>
      <div class="hero-overlay"></div>
      <div class="hero-content container">
        <p class="hero-tag">Premium Beauty & Wellness</p>
        <h1 class="hero-title">Our Salon<br><em>Services</em></h1>
        <p class="hero-desc">Indulge in our curated collection of luxury salon services, designed to rejuvenate your
          body, mind, and spirit.</p>
      </div>
    </section>

    <!-- KOREAN HEAD SPA -->
    <section class="head-spa">
      <div class="container">
        <div class="head-spa-grid">
          <div class="head-spa-img-wrap">
            <img src="{{ asset('images/korean-head-spa.jpg') }}" alt="Korean Head Spa treatment" loading="lazy" />
            <div class="head-spa-img-glow"></div>
          </div>
          <div>
            <p class="spa-tag">Salon</p>
            <h2 class="spa-title">Korean</h2>
            <h2 class="spa-title-accent"><em>Head Spa</em></h2>
            <p class="spa-desc">Our Korean Head Spa is a must-have pampering treat that deeply detoxifies the scalp,
              boosts blood circulation, relieves stress, and nourishes every strand.</p>
            <div class="features-grid" id="spaFeatures"></div>
            <p class="spa-quote">"This treatment isn't just about hair — it's about self-care, relaxation, and glowing
              confidence from scalp to soul."</p>
            <a href="#booking" class="btn-rosegold">Explore More <span>→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- HAIR STUDIO -->
    <section class="section bg-white-sec" id="hairStudio">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Hair <em>Studio</em></h2>
          <p class="section-subtitle">From cuts and colors to transformations — our hair artists will craft a look that
            speaks your personality and matches your lifestyle.</p>
        </div>
        <div class="cards-grid" id="hairCards"></div>
        <div class="section-cta"><a href="#booking" class="btn-outline">Book Appointment <span>›</span></a></div>
      </div>
    </section>

    <!-- BODY WELLNESS -->
    <section class="section bg-cream" id="bodyWellness">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Body <em>Wellness</em></h2>
          <p class="section-subtitle">Surrender to tranquility with our holistic body treatments, mindful relaxation,
            and revitalizing rituals.</p>
        </div>
        <div class="cards-grid" id="bodyCards"></div>
        <div class="section-cta"><a href="#booking" class="btn-outline">Book Appointment <span>›</span></a></div>
      </div>
    </section>

    <!-- NAIL ARTISTRY -->
    <section class="section bg-white-sec" id="nailArtistry">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Nail <em>Artistry</em></h2>
          <p class="section-subtitle">Precision manicures, creative nail art, and long-lasting finishes — express your
            style right to your fingertips.</p>
        </div>
        <div class="cards-grid" id="nailCards"></div>
        <div class="section-cta"><a href="#booking" class="btn-outline">Book Appointment <span>›</span></a></div>
      </div>
    </section>

    <!-- PERSONAL GROOMING -->
    <section class="section bg-beige" id="personalGrooming">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Personal <em>Grooming</em></h2>
          <p class="section-subtitle">Self-care rituals designed for relaxation. Manicures, pedicures, threading,
            waxing, and facial reflexology.</p>
        </div>
        <div class="cards-grid" id="groomingCards"></div>
        <div class="section-cta"><a href="#booking" class="btn-outline">Book Appointment <span>›</span></a></div>
      </div>
    </section>

    @include('partials.appointment-form', [
      'sectionId' => 'booking',
      'formId' => 'apptFormSalonPage',
      'context' => 'salon',
      'variant' => 'dark',
    ])

  </div>

<!-- FOOTER -->

             <footer style="background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
    <div class="cnt">
      <div class="foot-grid">
        <div style="padding
-           right: 40px;">

                      <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="location.href='/'">


                         <div c
               lass="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnov<span>a</span>tion</div>
          </div>

                  
                    
                          <p class="foot-p" style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">Skinnovation premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
          <div class="fsoc">
            <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link" style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
              <div style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </div>

        
          
          
            
            
          
            
            
                          <span>Foll
          ow on Instagra
          m</s
            pan>

            
            
        
            
            
                      </a>
          </div>
        </div>
        <div class="fc"><h4>Clinic</h4><ul><li><a href="/lhr">Laser Hair Reduction</a></li><li><a href="/medifacials">Medi Facials</a></li><li><a href="/clinic">Skin Boosters</a></li><li><a href="/clinic">IV Therapy</a></li><li><a href="/clinic">Microneedling</a></li></ul></div>
        <div class="fc"><h4>Salon</h4><ul><li><a href="/?page=salon">Korean Head Spa</a></li><li><a hr
           ef="/?page=salon">Hair Spa</a></li><li><a href="/?page=salon">Smoothening</a></li><li><a href="/?page=salon">Styling & Cuts</a></li><li><a href="/?page=salon">Color & Balayage</a></li></ul></div>

      </div>
      <div class="foot-bot">
        <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
        <span>Designed & Developed By <a href="http://trivoraconsultancy.com/" target="_blank">Trivora Consultancy</a></span>
      </div>
    </div>
  </footer>

  <script>
    // ===== SCROLL REVEAL =====
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
      observer.observe(el);
    });

    // ===== NAVBAR SCROLL =====
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      if (window.scrollY > 50) {
      nav.style.borderBottomColor = 'rgba(201,160,138,0.3)';
      } else {
        nav.style.borderBottomColor = 'rgba(201,160,138,0.2)';
      }
    });
  

    // ─── Spa Features ───
    const spaFeatures = [
      "Scalp consultation & distress", "Purifying & scalp relaxation",
      "Scalp cleansing shampoo", "Warm therapy jet or flow rinse",
      "Detox scalp mask or oils", "Gentle exfoliation",
      "Aroma therapy", "Lymph drainage",
      "Scalp massage", "Hair & Scalp serum",
      "Head & shoulder massage", "Healthy style & finish"
    ];
    const featuresEl = document.getElementById('spaFeatures');
    spaFeatures.forEach(f => {
      featuresEl.innerHTML += `<div class="feature-item"><span class="feature-check">✓</span><span>${f}</span></div>`;
    });

    // ─── Service Cards Generator ───
    function createCard(title, desc) {
      return `<div class="card">
        <h4>${title}</h4>
        <p>${desc}</p>
      </div>`;
    }

    // Hair Studio
    document.getElementById('hairCards').innerHTML = [
      createCard('Hair Spa & Recovery', 'Revitalize dull, damaged hair with deep conditioning treatments, keratin infusions, and intensive hydration therapy.'),
      createCard('Straightening & Texture', 'Professional straightening, smoothening, and texture transformation using salon-grade products for lasting results.'),
      createCard('Styling & Blowouts', 'Expert styling for any occasion — from sleek blowouts to glamorous updos, designed to turn heads.'),
      createCard('Consultation Care', 'Personalized hair consultations with our stylists to find the perfect cut, color, and treatment for your hair type.')
    ].join('');

    // Body Wellness
    document.getElementById('bodyCards').innerHTML = [
      createCard('Relaxation Massage', 'Full-body relaxation with soothing strokes, gentle pressure, and calming aromatherapy for total stress relief.'),
      createCard('Aromatherapy Spa', 'A blissful mix of essential oils, warm towels, and targeted massage for mind and body rejuvenation.'),
      createCard('Body Polishing', 'Exfoliate and nourish your skin with premium body scrubs, leaving it silky smooth and radiant.'),
      createCard('Detox Rituals', 'Deep cleansing body wraps that detoxify, hydrate, and restore your skin\'s natural glow and vitality.')
    ].join('');

    // Nail Artistry
    document.getElementById('nailCards').innerHTML = [
      createCard('Gel Paint & Art', 'Long-lasting gel polish with intricate nail art designs, from minimalist elegance to bold statement nails.'),
      createCard('Acrylic Extensions', 'Durable acrylic nail extensions crafted to perfection, giving you the length and shape you desire.'),
      createCard('Builder Gel', 'Natural-looking builder gel overlays for added strength, flexibility, and a flawless glossy finish.'),
      createCard('Custom Designs', 'Bespoke nail designs tailored to your imagination — crystals, chrome, ombre, and trending styles.')
    ].join('');

    // Personal Grooming
    document.getElementById('groomingCards').innerHTML = [
      createCard('Luxury Manicure', 'Detailed nail care with cuticle grooming, hand massage, hydration therapy, and the perfect polish.'),
      createCard('Spa Pedicure', 'Rejuvenating foot spa, gentle exfoliation, callus care, massage, and a flawless finish for happy feet.'),
      createCard('Threading & Waxing', 'Precise, gentle hair removal — professional threading, face and body waxing for smooth, clean skin.'),
      createCard('Face Reflexology', 'Targeted facial massage combining acupressure, lymph drainage, and relaxation techniques for radiant skin.')
    ].join('');

  </script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
