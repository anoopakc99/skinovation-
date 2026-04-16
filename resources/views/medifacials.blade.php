<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medifacials – Glow with Science | Skinnovation</title>
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
      --beige: #FAF5F0;
      --rose: #c8a090;
      --rose-light: #E8D5B0;
      --gold: #c8a090;
      --white: #ffffff;
      --text-muted: #8a8a8a;
      --text-dark: #1a1a1a;
      --border: rgba(201, 169, 110, 0.2);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { background: #1a1a1a; color: var(--cream); font-family: 'Jost', sans-serif; font-weight: 300; overflow-x: hidden; }

    /* ===== NAVBAR (Salon Styling) ===== */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 2000;
      display: flex; align-items: center; justify-content: space-between;
      padding: 0 60px; height: 72px;
      background: rgba(26, 26, 26, 0.96); backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(201, 169, 110, 0.15);
      transition: all 0.4s;
    }
    .nav-logo { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 600; letter-spacing: 4px; color: var(--white); text-transform: uppercase; text-decoration: none; cursor: pointer; }
    .nav-links { display: flex; gap: 32px; list-style: none; }
    .nav-links a { color: #9A9080; text-decoration: none; font-size: 11px; text-transform: uppercase; letter-spacing: 2px; font-weight: 500; transition: color .3s; }
    .nav-links a:hover { color: #c8a090; }
    .nav-cta { padding: 10px 28px; background: transparent; color: #c8a090; border: 1px solid #c8a090; font-size: 11px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; transition: all 0.3s; }
    .nav-cta:hover { background: #c8a090; color: #ffffff; }

    .salon-wrapper { font-family: 'Inter', sans-serif; }

    /* ===== HERO (Salon Styling) ===== */
    .hero { margin-top: 72px; position: relative; min-height: 80vh; display: flex; align-items: flex-end; background: var(--dark); padding-top: 80px; }
    .hero-bg { position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=1920&q=80') center/cover; opacity: 0.4; filter: brightness(0.7); }
    .hero-overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(26, 26, 26, 0.4), rgba(26, 26, 26, 0.6), var(--dark)); }
    .hero-content { position: relative; z-index: 2; padding-bottom: 80px; width: 100%; max-width: 1200px; margin: 0 auto; padding-left: 24px; padding-right: 24px;}
    .hero-tag { color: var(--gold); font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; margin-bottom: 16px; display: block;}
    .hero-title { color: #fff; font-size: 64px; line-height: 1.1; font-family: 'Playfair Display', serif; font-weight: 600; }
    .hero-title span { color: var(--gold); font-style: italic; display: block; font-size: 44px; margin-top: 5px;}
    .hero-desc { color: rgba(255, 255, 255, 0.6); font-size: 15px; margin-top: 24px; max-width: 500px; font-family: 'Jost', sans-serif; }

    /* ===== CUSTOM SECTIONS (Interior) ===== */
    .interior-wrapper { background: var(--beige); color: var(--text-dark); }
    section { padding: 120px 60px; }
    .container { max-width: 1200px; margin: 0 auto; }
    .label { font-size: 11px; text-transform: uppercase; letter-spacing: 3px; color: var(--gold); margin-bottom: 12px; font-weight: 600; }
    .title { font-family: 'Playfair Display', serif; font-size: 42px; font-weight: 600; margin-bottom: 24px; line-height: 1.2; color: var(--text-dark); }
    .title span { color: var(--gold); font-style: italic; }
    .desc { color: #6b6b6b; max-width: 700px; font-size: 15px; line-height: 1.8; margin-bottom: 30px;}

    /* Specialty / Feature */
    .feature { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    .feature-img { border-radius: 4px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
    .feature-img img { width: 100%; height: 550px; object-fit: cover; display: block; }
    .feature-list { display: grid; grid-template-columns: 1fr 1fr; gap: 15px 30px; margin: 32px 0; list-style: none; padding: 0; }
    .feature-list li { font-size: 14px; display: flex; align-items: center; gap: 12px; color: #444; font-family: 'Jost', sans-serif; }
    .feature-list li::before { content: '✓'; color: var(--gold); font-weight: 700; font-size: 16px; }

    /* Grids */
    .grid4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 60px; }
    .card { background: #fff; border-radius: 4px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.04); transition: all .4s; border: 1px solid rgba(201, 169, 110, 0.1); }
    .bg-white .card { background: var(--beige); }
    .card:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-color: var(--gold); }
    .card img { width: 100%; height: 240px; object-fit: cover; display: block; }
    .card-body { padding: 30px; text-align: center; }
    .card-body h3 { font-family: 'Playfair Display', serif; font-size: 20px; font-weight: 600; margin-bottom: 12px; color: var(--text-dark); }
    .card-body p { font-size: 13px; color: #777; line-height: 1.7; font-family: 'Jost', sans-serif; }

    /* Benefits */
    .benefits { display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px; margin-top: 60px; }
    .benefit { text-align: center; padding: 40px 20px; border-radius: 4px; background: #fff; transition: all .4s; border: 1px solid rgba(201, 169, 110, 0.1); }
    .benefit:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-color: var(--gold); }
    .benefit-icon { width: 56px; height: 56px; margin: 0 auto 20px; background: var(--gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #fff; }
    .benefit h4 { font-family: 'Playfair Display', serif; font-size: 16px; font-weight: 600; margin-bottom: 10px; color: var(--text-dark); }
    .benefit p { font-size: 12px; color: #888; line-height: 1.6; }

    /* Buttons */
    .btn-gold-salon { display: inline-flex; align-items: center; gap: 8px; background: var(--gold); color: #fff; padding: 14px 40px; font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; border: none; cursor: pointer; transition: all 0.3s; text-decoration: none; font-family: 'Jost', sans-serif; font-weight: 500; }
    .btn-gold-salon:hover { background: var(--rose-light); color: var(--text-dark); box-shadow: 0 10px 25px rgba(200,169,126,.2); }
    .btn-outline-salon { display: inline-flex; align-items: center; gap: 8px; border: 1px solid var(--gold); color: var(--gold); background: transparent; padding: 13px 38px; font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; cursor: pointer; transition: all 0.3s; text-decoration: none; font-family: 'Jost', sans-serif; font-weight: 500; }
    .btn-outline-salon:hover { background: var(--gold); color: #fff; }

    /* CTA */
    .cta-salon { background: var(--dark); text-align: center; padding: 100px 60px; color: var(--cream); position: relative; overflow: hidden; }
    .cta-salon h2 { font-family: 'Playfair Display', serif; font-size: 48px; color: #fff; margin-bottom: 16px; }
    .cta-salon h2 span { color: var(--gold); font-style: italic; }
    .cta-salon > p { color: rgba(255,255,255,.5); margin-bottom: 48px; font-size: 15px; max-width: 600px; margin-left: auto; margin-right: auto; }
    .cta-form { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; max-width: 800px; margin: 0 auto; }
    .cta-form input { padding: 18px 24px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,.03); color: #fff; font-size: 14px; font-family: 'Jost', sans-serif; min-width: 280px; outline: none; transition: all .3s; }
    .cta-form input:focus { border-color: var(--gold); background: rgba(255,255,255,0.06); }

    /* FOOTER (Salon Style) */
    .cnt { max-width: 1200px; margin: 0 auto; padding: 0 64px; }
    .foot-grid { display: grid; grid-template-columns: 1.8fr 1fr 1fr 1fr; gap: 56px; margin-bottom: 60px; }
    .foot-logo { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 400; color: var(--white); text-decoration: none; letter-spacing: 0.1em; display: block; margin-bottom: 24px; }
    .foot-logo span { color: var(--gold); }
    .foot-p { font-size: 14px; color: rgba(255, 255, 255, 0.4); line-height: 1.8; font-weight: 300; margin-bottom: 24px; }
    .fc h4 { font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; color: #ffffff; margin-bottom: 22px; font-weight: 500; }
    .fc ul { list-style: none; display: flex; flex-direction: column; gap: 12px; }
    .fc ul a { font-size: 13.5px; color: rgba(255, 255, 255, 0.45); text-decoration: none; font-weight: 300; transition: color 0.3s; }
    .fc ul a:hover { color: var(--gold); transform: translateX(5px); }
    .foot-bot { display: flex; justify-content: space-between; align-items: center; padding-top: 35px; border-top: 1px solid rgba(255, 255, 255, 0.05); }
    .foot-bot span { font-size: 12px; color: rgba(255, 255, 255, 0.3); font-weight: 300; }

    /* Utilities */
    .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    @media (max-width: 1024px) {
      section { padding: 80px 30px; }
      .grid4 { grid-template-columns: repeat(2, 1fr); }
      .benefits { grid-template-columns: repeat(3, 1fr); }
      .feature { grid-template-columns: 1fr; gap: 40px; }
      .footer-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      .hero-title { font-size: 42px; }
      .hero-title span { font-size: 28px; }
      .title { font-size: 32px; }
      .grid4 { grid-template-columns: 1fr; }
      .benefits { grid-template-columns: 1fr 1fr; }
      .cta-form input { width: 100%; min-width: auto; }
    }
  </style>
</head>

<body>

  @include('partials.navbar')

  <div class="salon-wrapper">

  <!-- HERO (Salon) -->
  <section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content container reveal">
      <p class="hero-tag">Clinical Skin Therapy</p>
      <h1 class="hero-title">Medifacials <span>Glow with Science</span></h1>
      <p class="hero-desc">Advanced skin treatments designed to deeply cleanse, hydrate, and rejuvenate your skin for a
        radiant, youthful glow.</p>
    </div>
  </section>

  <div class="interior-wrapper">

    <!-- ABOUT / SPECIALTY (Integrated User Content) -->
    <section class="bg-beige" id="about">
      <div class="container feature reveal">
        <div class="feature-img">
          <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=800&q=80"
            alt="Advanced Medifacial Treatment">
        </div>
        <div>
          <p class="label">Our Specialty</p>
          <h2 class="title">Advanced<br><span>Medifacials</span></h2>
          <p class="desc">Our Medifacials combine medical-grade actives with advanced techniques to target acne,
            dullness, pigmentation, and aging. Experience clinical-grade results with a luxurious, relaxing experience.
          </p>
          <ul class="feature-list">
            <li>Deep cleansing</li>
            <li>Hydration boost</li>
            <li>Acne control</li>
            <li>Instant glow</li>
            <li>Anti-aging</li>
            <li>No downtime</li>
          </ul>
          <a href="#treatments" class="btn-gold-salon">Explore Treatments &rarr;</a>
        </div>
      </div>
    </section>

    <!-- TREATMENTS (Integrated User Content) -->
    <section style="background: #fff;" id="treatments">
      <div class="container reveal">
        <h2 class="title">Medifacial <span>Types</span></h2>
        <p class="desc">Customized treatments tailored to your unique skin concerns and goals.</p>
        <div class="grid4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?w=600&q=80" alt="Hydrating Medifacial">
            <div class="card-body">
              <h3>Hydrating Medifacial</h3>
              <p>Infuses deep moisture into dehydrated skin using hyaluronic serums and advanced hydration techniques.
              </p>
            </div>
          </div>
          <div class="card">
            <img src="https://images.unsplash.com/photo-1512290923902-8a9f81cc236c?w=600&q=80" alt="Brightening Facial">
            <div class="card-body">
              <h3>Brightening Facial</h3>
              <p>Targets dullness and uneven skin tone using vitamin C, AHAs, and medical-grade brightening agents.</p>
            </div>
          </div>
          <div class="card">
            <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?w=600&q=80" alt="Anti-Aging Facial">
            <div class="card-body">
              <h3>Anti-Aging Facial</h3>
              <p>Firms and rejuvenates with collagen-boosting peptides, retinol, and advanced lifting technology.</p>
            </div>
          </div>
          <div class="card">
            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=600&q=80" alt="Acne Control Facial">
            <div class="card-body">
              <h3>Acne Control Facial</h3>
              <p>Deep cleanses pores and reduces breakouts with salicylic acid, niacinamide, and blue LED therapy.</p>
            </div>
          </div>
        </div>
        <div class="grid-center" style="text-align:center; margin-top:50px;"><a href="#booking" class="btn-outline-salon">Book Appointment &rarr;</a></div>
      </div>
    </section>

    <!-- SOLUTIONS (Integrated User Content) -->
    <section class="bg-beige">
      <div class="container reveal">
        <h2 class="title" style="text-align:right">Skin <span>Solutions</span></h2>
        <p class="desc" style="margin-left:auto; text-align:right">Targeted solutions for every skin concern, backed by dermatological science.</p>
        <div class="grid4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1519415510236-718bdfcd89c8?w=600&q=80"
              alt="Pigmentation Treatment">
            <div class="card-body">
              <h3>Pigmentation Treatment</h3>
              <p>Reduces dark spots, melasma, and hyperpigmentation with advanced peels and laser-assisted therapy.</p>
            </div>
          </div>
          <div class="card">
            <img src="https://images.unsplash.com/photo-1552693673-1bf958298935?w=600&q=80" alt="Skin Repair Therapy">
            <div class="card-body">
              <h3>Skin Repair Therapy</h3>
              <p>Restores damaged skin barrier with ceramides, growth factors, and healing LED light therapy.</p>
            </div>
          </div>
          <div class="card">
            <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=600&q=80" alt="Glow Boost Facial">
            <div class="card-body">
              <h3>Glow Boost Facial</h3>
              <p>Instant radiance with oxygen infusion, vitamin cocktails, and micro-exfoliation techniques.</p>
            </div>
          </div>
          <div class="card">
            <img src="https://images.unsplash.com/photo-1560750588-73207b1ef5b8?w=600&q=80" alt="Oxygen Therapy">
            <div class="card-body">
              <h3>Oxygen Therapy</h3>
              <p>Delivers pure oxygen and nutrients deep into skin cells for plump, hydrated, glowing skin.</p>
            </div>
          </div>
        </div>
        <div class="grid-center" style="text-align:center; margin-top:50px;"><a href="#booking" class="btn-outline-salon">Book Appointment &rarr;</a></div>
      </div>
    </section>

    <!-- BENEFITS (Integrated User Content) -->
    <section style="background:#fff" id="benefits">
      <div class="container reveal">
        <h2 class="title" style="text-align:center">Why Choose <span>Medifacials?</span></h2>
        <p class="desc" style="text-align:center;margin:0 auto 10px">Science-backed skincare that delivers visible,
          lasting results.</p>
        <div class="benefits">
          <div class="benefit">
            <div class="benefit-icon">&#10024;</div>
            <h4>Improves Texture</h4>
            <p>Smoothens and refines skin surface for a silky, even finish.</p>
          </div>
          <div class="benefit">
            <div class="benefit-icon">&#128167;</div>
            <h4>Deep Hydration</h4>
            <p>Penetrates deep layers to lock in long-lasting moisture.</p>
          </div>
          <div class="benefit">
            <div class="benefit-icon">&#127919;</div>
            <h4>Reduces Acne</h4>
            <p>Clears breakouts and minimizes pores for clearer skin.</p>
          </div>
          <div class="benefit">
            <div class="benefit-icon">&#127775;</div>
            <h4>Enhances Glow</h4>
            <p>Restores natural radiance and healthy luminosity.</p>
          </div>
          <div class="benefit">
            <div class="benefit-icon">&#129516;</div>
            <h4>Boosts Collagen</h4>
            <p>Stimulates collagen production for firmer, younger skin.</p>
          </div>
        </div>
      </div>
    </section>

  </div>

  @include('partials.appointment-form', [
    'sectionId' => 'booking',
    'formId' => 'apptFormSalonPage',
    'context' => 'medifacials',
  ])

  <!-- FOOTER (Salon Style) -->
  <footer style="background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
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
        <div class="fc"><h4>Clinic</h4><ul><li><a href="/lhr">Laser Hair Reduction</a></li><li><a href="/medifacials">Medi Facials</a></li><li><a href="/clinic">Skin Boosters</a></li><li><a href="/clinic">IV Therapy</a></li><li><a href="/clinic">Microneedling</a></li></ul></div>
        <div class="fc"><h4>Salon</h4><ul><li><a href="/?page=salon">Korean Head Spa</a></li><li><a href="/?page=salon">Hair Spa</a></li><li><a href="/?page=salon">Smoothening</a></li><li><a href="/?page=salon">Styling & Cuts</a></li><li><a href="/?page=salon">Color & Balayage</a></li></ul></div>
      </div>
      <div class="foot-bot">
        <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
        <span>Designed & Developed By <a href="http://trivoraconsultancy.com/" target="_blank">Trivora Consultancy</a></span>
      </div>
    </div>
  </footer>

  </div>

  <script>
    // Reveal Observer
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Navbar Scroll
    window.addEventListener('scroll', () => {
      document.getElementById('navbar').style.backdropFilter = window.scrollY > 50 ? 'blur(30px)' : 'blur(20px)';
      document.getElementById('navbar').style.background = window.scrollY > 50 ? 'rgba(26,26,26,0.98)' : 'rgba(26,26,26,0.96)';
    });
  </script>
</body>

</html>
