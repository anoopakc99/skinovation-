<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salon Services | Skinnovation</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet">
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
      background: #0a0a0a;
      color: var(--cream);
      font-family: 'Jost', sans-serif;
      font-weight: 300;
      overflow-x: hidden;
    }

    /* ===== NAVBAR ===== */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 2000;
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 60px; height: 72px;
      background: rgba(10, 10, 10, 0.96); backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(201, 169, 110, 0.15);
      transition: all 0.4s;
    }
    .nav-logo {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px; font-weight: 600; letter-spacing: 4px;
      color: var(--white); text-transform: uppercase; text-decoration: none;
      cursor: pointer;
    }
    .nav-logo span { color: var(--white); }
    .nav-links { display: flex; gap: 36px; list-style: none; }
    .nav-links a {
      font-size: 11px; font-weight: 500; letter-spacing: 3px;
      text-transform: uppercase; color: #9A9080;
      text-decoration: none; transition: all 0.3s;
      cursor: pointer;
    }
    .nav-links a:hover, .nav-links a.active { color: #c8a090; }

    .nav-cta {
      padding: 10px 28px; background: transparent;
      color: #c8a090; border: 1px solid #c8a090;
      font-size: 12px; font-weight: 500; letter-spacing: 2px;
      text-transform: uppercase; font-family: 'Jost', sans-serif;
      cursor: pointer; transition: all 0.3s; text-decoration: none;
    }
    .nav-cta:hover { background: #c8a090; color: #ffffff; }
    .nav-right { min-width: 200px; display: flex; align-items: center; justify-content: flex-end; }

    /* ===== HERO ===== */
    .hero {
      height: 60vh;
      position: relative;
      display: flex;
      align-items: center;
      overflow: hidden;
      margin-top: 80px;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      background: url('https://images.unsplash.com/photo-1552820728-8ac41f1ce891?w=1920&q=80') center/cover no-repeat;
      transform: scale(1.1);
      animation: heroZoom 8s ease forwards;
      filter: brightness(0.4);
    }

    @keyframes heroZoom {
      to {
        transform: scale(1);
      }
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(17, 17, 17, 0.8) 0%, rgba(17, 17, 17, 0.3) 60%, transparent 100%);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 0 60px;
      max-width: 600px;
      opacity: 0;
      animation: fadeUp 1.2s 0.5s ease forwards;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero-tag {
      display: inline-block;
      font-size: 11px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--rose);
      border: 1px solid var(--rose);
      padding: 6px 16px;
      margin-bottom: 30px;
      animation: fadeUp 1.2s 0.3s ease forwards;
      opacity: 0;
    }

    .hero h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(42px, 6vw, 72px);
      font-weight: 300;
      line-height: 1.1;
      margin-bottom: 24px;
      color: var(--white);
    }

    .hero h1 em {
      font-style: italic;
      color: var(--rose-light);
    }

    .hero p {
      font-size: 15px;
      line-height: 1.8;
      color: rgba(245, 240, 235, 0.75);
      max-width: 420px;
      margin-bottom: 40px;
    }

    .hero-btns {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: var(--gold);
      color: #ffffff;
      padding: 14px 36px;
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-decoration: none;
      font-family: 'Jost', sans-serif;
      font-weight: 500;
      transition: all 0.3s;
      display: inline-block;
      position: relative;
      overflow: hidden;
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      inset: 0;
      background: var(--gold);
      transform: translateX(-100%);
      transition: transform 0.3s;
    }

    .btn-primary:hover::before {
      transform: translateX(0);
    }

    .btn-primary span {
      position: relative;
      z-index: 1;
    }

    .btn-outline {
      border: 1px solid rgba(201, 169, 110, 0.4);
      color: var(--cream);
      padding: 14px 36px;
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-decoration: none;
      font-family: 'Jost', sans-serif;
      transition: all 0.3s;
    }

    .btn-outline:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    /* ===== SERVICES GRID ===== */
    .services-section {
      padding: 120px 60px;
      background: var(--dark);
    }

    .section-header {
      text-align: center;
      margin-bottom: 80px;
    }

    .section-tag {
      font-size: 11px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--rose);
      display: block;
      margin-bottom: 16px;
    }

    .section-header h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(36px, 4vw, 54px);
      font-weight: 300;
      color: var(--white);
      line-height: 1.2;
      max-width: 700px;
      margin: 0 auto;
    }

    .section-header h2 em {
      font-style: italic;
      color: var(--rose-light);
    }

    .services-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      margin-top: 60px;
    }

    .service-card {
      background: var(--charcoal);
      border: 1px solid var(--border);
      padding: 48px;
      position: relative;
      overflow: hidden;
      transition: all 0.4s;
      cursor: pointer;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--rose);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s;
    }

    .service-card:hover {
      background: #222;
      border-color: var(--rose);
    }

    .service-card:hover::before {
      transform: scaleX(1);
    }

    .service-card h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 32px;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 20px;
    }

    .service-list {
      list-style: none;
      margin-bottom: 28px;
    }

    .service-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      color: rgba(245, 240, 235, 0.7);
      padding: 10px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .service-list li::before {
      content: '✓';
      color: var(--rose);
      font-weight: bold;
      flex-shrink: 0;
    }

    .service-list li:last-child {
      border-bottom: none;
    }

    .service-cta {
      display: inline-block;
      color: var(--rose);
      text-decoration: none;
      font-size: 12px;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-top: 20px;
      font-weight: 500;
      transition: all 0.3s;
    }

    .service-cta:hover {
      color: var(--rose-light);
      letter-spacing: 3px;
    }

    /* ===== CTA SECTION ===== */
    .cta-section {
      padding: 0 60px 120px;
      background: var(--dark);
    }

    .cta-inner {
      background: var(--rose);
      padding: 80px;
      display: grid;
      grid-template-columns: 1fr auto;
      align-items: center;
      gap: 60px;
      position: relative;
      overflow: hidden;
    }

    .cta-inner::before {
      content: '';
      position: absolute;
      top: -60px;
      right: -60px;
      width: 260px;
      height: 260px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 50%;
    }

    .cta-inner::after {
      content: '';
      position: absolute;
      top: -20px;
      right: -20px;
      width: 180px;
      height: 180px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .cta-inner h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(32px, 3.5vw, 50px);
      font-weight: 300;
      color: var(--white);
      line-height: 1.2;
    }

    .cta-inner h2 em {
      font-style: italic;
    }

    .cta-inner p {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.75);
      margin-top: 12px;
      line-height: 1.7;
    }

    .cta-btn {
      background: var(--white);
      color: var(--rose);
      padding: 16px 44px;
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-decoration: none;
      font-family: 'Jost', sans-serif;
      font-weight: 500;
      white-space: nowrap;
      transition: all 0.3s;
      position: relative;
      z-index: 1;
    }

    .cta-btn:hover {
      background: var(--dark);
      color: var(--white);
    }

    /* ===== FOOTER ===== */
    /* MASTER FOOTER CLASSES */
    .cnt { max-width: 1200px; margin: 0 auto; padding: 0 64px; }
    .foot-grid { display: grid; grid-template-columns: 1.8fr 1fr 1fr 1fr; gap: 56px; margin-bottom: 60px; }
    .foot-logo { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 400; color: var(--white); text-decoration: none; letter-spacing: 0.1em; display: block; margin-bottom: 0; cursor: pointer; }
    .foot-logo span { color: var(--rose); }
    .foot-p { font-size: 14px; color: rgba(255, 255, 255, 0.4); line-height: 1.8; font-weight: 300; margin-bottom: 24px; }
    .fsoc { display: block; }
    .foot-insta-link { display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300; transition: all 0.3s; }
    .foot-insta-link:hover { color: var(--rose); }
    .fc h4 { font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; color: #ffffff; margin-bottom: 22px; font-weight: 500; }
    .fc ul { list-style: none; display: flex; flex-direction: column; gap: 12px; }
    .fc ul a { font-size: 13.5px; color: rgba(255, 255, 255, 0.45); text-decoration: none; font-weight: 300; transition: color 0.3s; cursor: pointer; display: inline-block; }
    .fc ul a:hover { color: var(--rose); transform: translateX(5px); }
    .fc ul a { transition: transform 0.3s, color 0.3s; }
    .foot-bot { display: flex; justify-content: space-between; align-items: center; padding-top: 35px; border-top: 1px solid rgba(255, 255, 255, 0.05); }
    .foot-bot span { font-size: 12px; color: rgba(255, 255, 255, 0.3); font-weight: 300; letter-spacing: 0.02em; }
    .foot-bot a { color: var(--rose-light); text-decoration: none; transition: opacity 0.2s; }
    .foot-bot a:hover { opacity: 0.7; }

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
  <nav>
    <a href="/" class="nav-logo">Skinnovation</a>
    <ul class="nav-links">
      <li><a href="/">Home</a></li>
      <li><a href="/?page=salon" class="active">Salon</a></li>
      <li><a href="/clinic">Clinic</a></li>
      <li><a href="/lhr">LHR</a></li>
    </ul>
    <div class="nav-right"></div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Our Salon <em>Services</em></h1>
      <p>Indulge in our complete range of professional salon and grooming treatments. From luxurious hair care to elegant nail art and personalized grooming.</p>
      <div class="hero-btns">
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services-section" id="services">
    <div class="section-header reveal" style="text-align:center; margin-bottom:60px;">
      <span class="section-tag" style="font-size:11px; letter-spacing:4px; text-transform:uppercase; color:var(--rose); display:block; margin-bottom:16px;">Professional Hair & Beauty Care</span>
      <h2 style="font-family:'Cormorant Garamond', serif; font-size:clamp(36px, 4vw, 54px); font-weight:300; color:var(--white); line-height:1.2;">Premium Salon <em>Services</em></h2>
      <div style="max-width:800px; margin: 24px auto 0; font-size:14px; line-height:1.8; color:rgba(245,240,235,0.65);">
        <p style="margin-bottom:16px;">In addition to aesthetic treatments, Skinnovation offers a range of premium salon services designed to maintain healthy hair, enhance personal style, and support overall grooming.</p>
        <p><strong>Hair Treatments:</strong> Our restorative hair therapies are designed to repair damage, strengthen hair fibers, and improve scalp health. These treatments help restore hydration, smoothness, and shine while addressing concerns such as dryness, breakage, and hair fall.</p>
      </div>
    </div>

    <div class="services-grid reveal">
      <!-- HAIR SERVICES -->
      <div class="service-card">
        <h3>💇 Hair</h3>
        <ul class="service-list">
          <li>Hair Spa & Deep Conditioning</li>
          <li>Smoothing & Keratin Treatment</li>
          <li>Professional Hair Styling</li>
          <li>Expert Hair Cutting</li>
          <li>Color & Highlights</li>
          <li>Hair Treatments & Care</li>
        </ul>
        <a href="#booking" class="service-cta">Book Hair Service →</a>
      </div>

      <!-- BODY SERVICES -->
      <div class="service-card">
        <h3>✨ Body</h3>
        <ul class="service-list">
          <li>Full Body Massage</li>
          <li>Thai Massage</li>
          <li>Body Scrubs & Polishing</li>
          <li>Spa Treatments</li>
          <li>Aromatherapy</li>
          <li>Relaxation & Wellness</li>
        </ul>
        <a href="#booking" class="service-cta">Book Body Service →</a>
      </div>

      <!-- NAIL SERVICES -->
      <div class="service-card">
        <h3>💅 Nails</h3>
        <ul class="service-list">
          <li>Gel paints</li>
          <li>Acrylic Extension</li>
          <li>Extension Gel</li>
          <li>Nails Extension</li>
        </ul>
        <a href="#booking" class="service-cta">Book Nail Service →</a>
      </div>

      <!-- PERSONAL GROOMING SERVICES -->
      <div class="service-card">
        <h3>🪮 Personal Grooming</h3>
        <ul class="service-list">
          <li>Manicure</li>
          <li>Pedicure</li>
        <li>Threading</li>
          <li>Foot Therapy</li>
        </ul>
        <a href="#booking" class="service-cta">Book Grooming Service →</a>
      </div>
    </div>
  </section>

  <!-- BOOKING SECTION -->
  <section id="booking" style="padding: 100px 20px; background: #0a0a0a;">
    <div style="max-width: 650px; margin: 0 auto; background: #111; border-radius: 8px; overflow: hidden; box-shadow: 0 40px 80px rgba(0,0,0,0.2); color: #fff; padding: 60px 50px; position: relative;">

      <!-- Decor Graphic (Matches User Screenshot) -->
      <div style="position: absolute; top: 15px; left: 15px; opacity: 0.4; pointer-events: none;">
        <div style="width: 70px; height: 70px; border: 1px solid rgba(212,181,160,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
          <div style="width: 50px; height: 50px; border: 1px solid rgba(212,181,160,0.4); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <div style="width: 30px; height: 30px; border: 1.5px solid rgba(212,181,160,0.7); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
               <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M3 3V21L9 15L11 20L13 19L11 14L18 14L3 3Z" fill="#d4b5a0" stroke="black" stroke-width="0.5"/></svg>
            </div>
          </div>
        </div>
      </div>

      <!-- TOP PART: Info -->
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: #d4b5a0; display: block; margin-bottom: 16px;">Get In Touch</span>
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(34px, 4vw, 42px); font-weight: 300; line-height: 1.1; margin-bottom: 20px;">Begin Your<br><em style="font-style: italic;">Transformation</em></h2>
        <p style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.6); max-width: 450px; margin: 0 auto;">Our expert team will confirm your appointment and guide you to the best treatment for your unique needs.</p>
      </div>

      <!-- BOTTOM PART: Form -->
      <div style="border-top: 1px solid rgba(255,255,255,0.05); padding-top: 30px;">
        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 300; color: #fff; margin-bottom: 24px;">Request Appointment</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 20px;">
          <div style="text-align: left;">
            <label style="font-size: 10px; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.5); display: block; margin-bottom: 8px;">Full Name</label>
            <input type="text" placeholder="Your name" style="width: 100%; padding: 14px 16px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; outline: none; font-family: 'Jost', sans-serif; font-size: 14px; color: #fff;">
          </div>
          <div style="text-align: left;">
            <label style="font-size: 10px; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.5); display: block; margin-bottom: 8px;">Phone</label>
            <input type="tel" placeholder="+91 00000 00000" style="width: 100%; padding: 14px 16px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 4px; outline: none; font-family: 'Jost', sans-serif; font-size: 14px; color: #fff;">
          </div>
        </div>

        <button onclick="submitForm(this)" style="width: 100%; background: #d4b5a0; color: #111; font-weight: 500; padding: 16px; border: none; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; border-radius: 4px; cursor: pointer; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
          Book Appointment &rarr;
        </button>
      </div>

    </div>

    <style>
      @media (max-width: 600px) {
        #booking > div > div:last-child > div {
          grid-template-columns: 1fr !important;
        }
        #booking > div {
          padding: 40px 24px !important;
        }
      }
    </style>
  </section>

  <!-- FOOTER -->
  <!-- FOOTER -->
  <footer style="background: #0a0a0a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
    <div class="cnt">
      <div class="foot-grid">
        <div style="padding-right: 40px;">
          <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="location.href='/'">

            <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnov<span>a</span>tion</div>
          </div>
          <p class="foot-p" style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">Skinnovation premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
          <div class="fsoc">
            <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link" style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
              <div style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </div>
              <span>Follow on Instagram</span>
            </a>
          </div>
        </div>
        <div class="fc"><h4>Clinic</h4><ul><li><a href="/clinic">Laser Hair Reduction</a></li><li><a href="/clinic">Medi Facials</a></li><li><a href="/clinic">Skin Boosters</a></li><li><a href="/clinic">IV Therapy</a></li><li><a href="/clinic">Microneedling</a></li></ul></div>
        <div class="fc"><h4>Salon</h4><ul><li><a href="/?page=salon">Korean Head Spa</a></li><li><a href="/?page=salon">Hair Spa</a></li><li><a href="/?page=salon">Smoothening</a></li><li><a href="/?page=salon">Styling & Cuts</a></li><li><a href="/?page=salon">Color & Balayage</a></li></ul></div>

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
  </script>
</body>

</html>
