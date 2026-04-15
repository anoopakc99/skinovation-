<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laser Hair Removal | Skinnovation</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/appt-form.css') }}">
<style>
  :root {
    --gold: #c8a090;
    --gold-light: #e8c4b4;
    --gold-dark: #a07060;
    --black: #1a1a1a;
    --dark: #111111;
    --dark2: #181818;
    --dark3: #1F1F1F;
    --text-light: #F5F0E8;
    --text-muted: #9A9080;
    --white: #FFFFFF;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }

  body {
    font-family: 'Jost', sans-serif;
    background: var(--black);
    color: var(--text-light);
    overflow-x: hidden;
  }

  /* ── NAVBAR ── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 2000;
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 60px; height: 72px;
    background: rgba(26, 26, 26, 0.96); backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(201, 169, 110, 0.15);
    transition: all 0.4s;
  }
  .nav-right { display: flex; align-items: center; gap: 24px; }
  .nav-logo {
    font-family: 'Cormorant Garamond', serif;
    font-size: 24px; font-weight: 600; letter-spacing: 4px;
    color: var(--white); text-transform: uppercase; text-decoration: none;
    cursor: pointer;
  }
  .nav-links { display: flex; gap: 36px; list-style: none; }
  .nav-links a {
    font-size: 11px; font-weight: 500; letter-spacing: 3px;
    text-transform: uppercase; color: #9A9080;
    text-decoration: none; transition: all 0.3s;
    cursor: pointer;
  }
  .nav-links a:hover, .nav-links a.active { color: #c8a090; }
  .nav-cta {
    background: transparent; border: 1px solid var(--gold);
    color: var(--gold); padding: 10px 28px;
    font-size: 12px; letter-spacing: 2px; text-transform: uppercase;
    font-family: 'Jost', sans-serif; cursor: pointer; text-decoration: none;
    transition: all 0.3s;
  }
  .nav-cta:hover { background: var(--gold); color: var(--white); }

  /* ── HERO ── */
  .hero {
    height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
    width: 100%;
    max-width: none;
    margin: 0;
    padding: 0;
  }
  .hero-bg {
    position: absolute;
    inset: 0;
    background: url('https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=1200&q=80') 78% center/cover no-repeat;
    filter: brightness(0.35);
  }
  .hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(17, 17, 17, 0.7) 0%, rgba(17, 17, 17, 0.2) 60%, transparent 100%);
  }
  .hero-content {
    position: relative;
    z-index: 2;
    padding: 0 60px;
    max-width: 700px;
  }
  .hero-tag {
    display: inline-block;
    font-size: 11px; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); border: 1px solid rgba(201,169,110,0.4);
    padding: 8px 20px; margin-bottom: 32px;
  }
  .hero h1 {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(52px, 7vw, 92px);
    font-weight: 300; line-height: 1.05;
    color: var(--text-light); max-width: 620px;
    margin-bottom: 24px;
  }
  .hero h1 em { color: var(--gold); font-style: italic; }
  .hero-sub {
    font-size: 15px; color: var(--text-muted); letter-spacing: 1px;
    max-width: 460px; line-height: 1.8; margin-bottom: 44px; font-weight: 300;
  }
  .hero-btns { display: flex; gap: 16px; flex-wrap: wrap; }
  .btn-primary {
    background: var(--gold); color: var(--white);
    padding: 16px 40px; font-size: 12px; letter-spacing: 3px;
    text-transform: uppercase; font-family: 'Jost', sans-serif;
    font-weight: 600; border: none; cursor: pointer; transition: all 0.3s;
    text-decoration: none; display: inline-block;
  }
  .btn-primary:hover { background: var(--gold-light); }
  .btn-outline {
    background: transparent; color: var(--text-light);
    border: 1px solid rgba(245,240,232,0.3);
    padding: 16px 40px; font-size: 12px; letter-spacing: 3px;
    text-transform: uppercase; font-family: 'Jost', sans-serif;
    cursor: pointer; transition: all 0.3s; text-decoration: none; display: inline-block;
  }
  .btn-outline:hover { border-color: var(--gold); color: var(--gold); }
  .hero-stats {
    position: absolute; bottom: 60px; left: 60px; right: 60px;
    display: flex; gap: 0;
    border: 1px solid rgba(201,169,110,0.2);
    background: rgba(10,10,10,0.7);
    backdrop-filter: blur(8px);
    max-width: 700px;
  }
  .hero-stat {
    flex: 1; padding: 28px 36px;
    border-right: 1px solid rgba(201,169,110,0.15);
  }
  .hero-stat:last-child { border-right: none; }
  .hero-stat-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 36px; font-weight: 300; color: var(--gold);
    line-height: 1;
  }
  .hero-stat-label {
    font-size: 11px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--text-muted); margin-top: 6px;
  }

  /* ── SECTION COMMON ── */
  /* Keep consistent section widths, but let hero span full-bleed */
  section { padding: 100px 60px; max-width: 1300px; margin: 0 auto; }
  section.hero { padding: 0; max-width: none; margin: 0; }
  .section-tag {
    font-size: 11px; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 16px; display: block;
  }
  .section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(36px, 4.5vw, 58px); font-weight: 300;
    line-height: 1.15; color: var(--text-light);
  }
  .section-title em { color: var(--gold); font-style: italic; }

  /* Slightly smaller for long LHR science heading */
  .lhr-science-title { font-size: clamp(26px, 3.1vw, 42px); }
  .section-line {
    width: 60px; height: 1px; background: var(--gold);
    margin: 24px 0 36px;
  }
  .section-desc {
    font-size: 15px; color: var(--text-muted); line-height: 1.9;
    max-width: 560px; font-weight: 300;
  }

  /* ── WHY LHR ── */
  .why-section {
    padding: 0px 0; background: var(--dark2);
    border-top: 1px solid rgba(201,169,110,0.1);
    border-bottom: 1px solid rgba(201,169,110,0.1);
  }
  .why-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .why-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: center; margin-top: 60px;
  }
  .why-image-wrap { position: relative; }
  .why-image-wrap img {
    width: 100%; height: 520px; object-fit: cover;
    filter: grayscale(20%);
  }
  .why-image-badge {
    position: absolute; bottom: -24px; right: -24px;
    background: var(--gold); color: var(--white);
    padding: 28px 32px; text-align: center;
  }
  .why-image-badge-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 48px; font-weight: 300; line-height: 1; display: block;
  }
  .why-image-badge-text {
    font-size: 10px; letter-spacing: 2px; text-transform: uppercase;
    font-weight: 600; display: block; margin-top: 4px;
  }
  .why-points { display: flex; flex-direction: column; gap: 28px; margin-top: 40px; }
  .why-point { display: flex; gap: 20px; align-items: flex-start; }
  .why-point-icon {
    width: 44px; height: 44px; flex-shrink: 0;
    border: 1px solid rgba(201,169,110,0.4);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold); font-size: 18px;
  }
  .why-point-title {
    font-size: 14px; letter-spacing: 1.5px; text-transform: uppercase;
    color: var(--text-light); font-weight: 500; margin-bottom: 6px;
  }
  .why-point-desc { font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; }

  /* ── BODY PARTS ── */
  .parts-section { padding:0px 0; background: var(--black); }
  .parts-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .parts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px; margin-top: 60px;
  }
  .part-card {
    position: relative; overflow: hidden; cursor: pointer;
    aspect-ratio: 3/4;
  }
  .part-card img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(30%) brightness(0.65);
    transition: transform 0.6s ease, filter 0.5s ease;
  }
  .part-card:hover img { transform: scale(1.06); filter: grayscale(0%) brightness(0.75); }
  .part-card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 55%);
  }
  .part-card-content {
    position: absolute; bottom: 0; left: 0; right: 0;
    padding: 28px 28px 32px;
  }
  .part-card-icon {
    width: 36px; height: 1px; background: var(--gold);
    margin-bottom: 12px;
  }
  .part-card-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 26px; font-weight: 300; color: var(--white);
    margin-bottom: 8px;
  }
  .part-card-sub {
    font-size: 11px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 16px;
  }
  .part-card-btn {
    display: inline-block; font-size: 10px; letter-spacing: 3px;
    text-transform: uppercase; color: var(--white);
    border: 1px solid rgba(255,255,255,0.3); padding: 8px 18px;
    transition: all 0.3s; text-decoration: none;
  }
  .part-card:hover .part-card-btn { border-color: var(--gold); color: var(--gold); }
  .part-card.wide { grid-column: span 2; aspect-ratio: unset; min-height: 380px; }

  /* ── PROCESS ── */
  .process-section { padding: 100px 0; background: var(--dark3); border-top: 1px solid rgba(201,169,110,0.1); }
  .process-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .process-steps {
    display: grid; grid-template-columns: repeat(4, 1fr);
    gap: 0; margin-top: 64px; border: 1px solid rgba(201,169,110,0.15);
  }
  .process-step {
    padding: 48px 36px;
    border-right: 1px solid rgba(201,169,110,0.15);
    position: relative;
    background: rgba(10,10,10,0.25);
    transition: transform 0.4s ease, background 0.35s ease, border-color 0.35s ease;
  }
  .process-step:last-child { border-right: none; }
  .process-step:hover{
    transform: translateY(-6px);
    background: rgba(10,10,10,0.40);
    border-right-color: rgba(201,169,110,0.28);
  }
  .process-step:last-child:hover { border-right-color: transparent; }

  .process-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 56px; font-weight: 300; color: rgba(201,169,110,0.18);
    line-height: 1; margin-bottom: 20px;
  }
  .process-step-icon {
    width: 48px; height: 48px;
    border: 1px solid rgba(201,169,110,0.4);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold); margin-bottom: 20px;
    background: rgba(201,169,110,0.06);
    transition: background 0.35s ease, color 0.35s ease, transform 0.4s ease, border-color 0.35s ease;
  }
  .process-step:hover .process-step-icon{
    background: var(--gold);
    color: #0a0a0a;
    border-color: rgba(255,255,255,0.08);
    transform: translateY(-1px);
  }
  .process-step-icon svg{
    width: 22px;
    height: 22px;
    display: block;
  }

  /* Hide step numbers (01/02/03/04) */
  .process-num { display: none; }
  .process-step-title {
    font-size: 13px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--text-light); font-weight: 500; margin-bottom: 12px;
  }
  .process-step-desc { font-size: 13px; color: var(--text-muted); line-height: 1.8; font-weight: 300; }

  /* ── BEFORE AFTER ── */
  .ba-section { padding: 100px 0; background: var(--black); }
  .ba-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .ba-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 3px; margin-top: 60px; }
  .ba-card { position: relative; overflow: hidden; }
  .ba-card img { width: 100%; height: 320px; object-fit: cover; display: block; filter: brightness(0.8); }
  .ba-label {
    position: absolute; top: 16px; left: 16px;
    background: rgba(10,10,10,0.8);
    border: 1px solid rgba(201,169,110,0.5);
    color: var(--gold); font-size: 9px; letter-spacing: 3px;
    text-transform: uppercase; padding: 5px 12px;
  }

  /* ── SKIN TYPES ── */
  .skin-section {
    padding: 100px 0; background: var(--dark2);
    border-top: 1px solid rgba(201,169,110,0.1);
  }
  .skin-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .skin-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 80px; align-items: center; margin-top: 60px;
  }
  .skin-types-visual {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 3px;
  }
  .skin-swatch {
    aspect-ratio: 1; overflow: hidden; position: relative;
  }
  .skin-swatch img { width: 100%; height: 100%; object-fit: cover; filter: brightness(0.85); }
  .skin-swatch-label {
    position: absolute; bottom: 8px; left: 0; right: 0; text-align: center;
    font-size: 9px; letter-spacing: 2px; text-transform: uppercase; color: var(--gold-light);
  }
  .skin-features { display: flex; flex-direction: column; gap: 24px; margin-top: 36px; }
  .skin-feature {
    display: flex; align-items: center; gap: 16px;
    padding: 20px 24px; background: rgba(201,169,110,0.05);
    border: 1px solid rgba(201,169,110,0.12);
  }
  .skin-feature-dot { width: 6px; height: 6px; background: var(--gold); flex-shrink: 0; }
  .skin-feature-text { font-size: 14px; color: var(--text-light); letter-spacing: 0.5px; }

  /* ── PRICING ── */
  .pricing-section { padding: 100px 0; background: var(--black); }
  .pricing-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; margin-top: 60px; }
  .pricing-card {
    padding: 48px 36px; background: var(--dark2);
    border: 1px solid rgba(201,169,110,0.1);
    position: relative; transition: border-color 0.3s;
  }
  .pricing-card:hover { border-color: rgba(201,169,110,0.4); }
  .pricing-card.featured {
    background: var(--dark3);
    border-color: rgba(201,169,110,0.5);
  }
  .pricing-badge {
    position: absolute; top: -1px; left: 50%; transform: translateX(-50%);
    background: var(--gold); color: var(--white);
    font-size: 9px; letter-spacing: 3px; text-transform: uppercase;
    padding: 5px 20px; font-weight: 600;
    white-space: nowrap;
  }
  .pricing-area {
    font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 12px;
  }
  .pricing-name {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px; font-weight: 300; color: var(--text-light);
    margin-bottom: 28px;
  }
  .pricing-divider { height: 1px; background: rgba(201,169,110,0.15); margin-bottom: 28px; }
  .pricing-price {
    font-family: 'Cormorant Garamond', serif;
    font-size: 48px; font-weight: 300; color: var(--gold); line-height: 1;
    margin-bottom: 6px;
  }
  .pricing-price sup { font-size: 20px; vertical-align: super; }
  .pricing-session { font-size: 11px; color: var(--text-muted); letter-spacing: 1px; margin-bottom: 32px; }
  .pricing-features { list-style: none; margin-bottom: 36px; }
  .pricing-features li {
    font-size: 13px; color: var(--text-muted); padding: 10px 0;
    border-bottom: 1px solid rgba(201,169,110,0.08);
    display: flex; align-items: center; gap: 12px; font-weight: 300;
  }
  .pricing-features li::before { content: ''; width: 12px; height: 1px; background: var(--gold); flex-shrink: 0; }
  .pricing-book {
    width: 100%; padding: 14px; font-size: 11px; letter-spacing: 3px;
    text-transform: uppercase; font-family: 'Jost', sans-serif;
    background: transparent; border: 1px solid rgba(201,169,110,0.4);
    color: var(--gold); cursor: pointer; transition: all 0.3s;
  }
  .pricing-book:hover { background: var(--gold); color: var(--white); }
  .pricing-card.featured .pricing-book { background: var(--gold); color: var(--white); }
  .pricing-card.featured .pricing-book:hover { background: var(--gold-light); }

  /* ── TESTIMONIALS ── */
  .testimonials-section {
    padding: 100px 0; background: var(--dark3);
    border-top: 1px solid rgba(201,169,110,0.1);
  }
  .testimonials-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .testimonials-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 60px; }
  .testimonial-card {
    padding: 40px 36px; background: var(--dark2);
    border: 1px solid rgba(201,169,110,0.12);
  }
  .testimonial-stars { color: var(--gold); font-size: 14px; letter-spacing: 3px; margin-bottom: 20px; }
  .testimonial-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 17px; font-weight: 300; font-style: italic;
    color: var(--text-light); line-height: 1.8; margin-bottom: 28px;
  }
  .testimonial-author {
    font-size: 11px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--gold);
  }
  .testimonial-role { font-size: 11px; color: var(--text-muted); margin-top: 4px; }
  .rating-bar {
    display: flex; align-items: center; gap: 20px; margin-top: 60px;
    padding: 36px 48px; background: rgba(201,169,110,0.06);
    border: 1px solid rgba(201,169,110,0.2);
  }
  .rating-score {
    font-family: 'Cormorant Garamond', serif;
    font-size: 64px; font-weight: 300; color: var(--gold); line-height: 1;
    flex-shrink: 0;
  }
  .rating-details { flex: 1; }
  .rating-stars { color: var(--gold); font-size: 20px; margin-bottom: 6px; }
  .rating-label { font-size: 12px; letter-spacing: 2px; text-transform: uppercase; color: var(--text-muted); }
  .google-badge { display: flex; align-items: center; gap: 12px; }
  .google-g {
    width: 48px; height: 48px;
    background: var(--dark3); border: 1px solid rgba(201,169,110,0.2);
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; font-weight: 700; color: var(--gold);
    font-family: 'Cormorant Garamond', serif;
  }
  .google-text { font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: var(--text-muted); }

  /* ── FAQ ── */
  .faq-section { padding: 100px 0; background: var(--black); }
  .faq-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 80px; margin-top: 60px; }
  .faq-item {
    border-bottom: 1px solid rgba(201,169,110,0.12);
    padding: 24px 0; cursor: pointer;
  }
  .faq-q {
    display: flex; justify-content: space-between; align-items: center;
    font-size: 14px; color: var(--text-light); letter-spacing: 0.5px; font-weight: 400;
  }
  .faq-toggle {
    width: 24px; height: 24px; flex-shrink: 0;
    border: 1px solid rgba(201,169,110,0.3);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold); font-size: 16px; font-weight: 300;
    transition: all 0.3s;
  }
  .faq-a {
    font-size: 13px; color: var(--text-muted); line-height: 1.8;
    margin-top: 16px; display: none; font-weight: 300;
  }
  .faq-item.open .faq-toggle { background: var(--gold); color: var(--white); }
  .faq-item.open .faq-a { display: block; }

  /* ── CTA ── */
  .cta-section {
    padding: 0; background: var(--dark2);
    border-top: 1px solid rgba(201,169,110,0.15);
    position: relative; overflow: hidden;
  }
  .cta-inner {
    max-width: 1300px; margin: 0 auto; padding: 100px 60px;
    display: grid; grid-template-columns: 1fr auto; gap: 60px; align-items: center;
    position: relative; z-index: 2;
  }
  .cta-inner::before {
    content: '';
    position: absolute; right: 200px; top: 50%; transform: translateY(-50%);
    width: 400px; height: 400px; border-radius: 50%;
    background: radial-gradient(circle, rgba(201,169,110,0.06) 0%, transparent 70%);
    pointer-events: none;
  }
  .cta-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(36px, 4vw, 54px); font-weight: 300; color: var(--text-light);
    line-height: 1.2; margin-bottom: 16px;
  }
  .cta-title em { color: var(--gold); font-style: italic; }
  .cta-sub { font-size: 14px; color: var(--text-muted); font-weight: 300; }
  .cta-actions { display: flex; flex-direction: column; gap: 12px; flex-shrink: 0; }
  .cta-phone {
    font-family: 'Cormorant Garamond', serif;
    font-size: 20px; color: var(--gold); letter-spacing: 1px; text-align: center;
  }
  .cta-phone-label { font-size: 9px; letter-spacing: 3px; text-transform: uppercase; color: var(--text-muted); text-align: center; margin-bottom: 8px; }

  /* ── FOOTER ── */
  /* ── FOOTER (Home Style) ── */
  .cnt { max-width: 1200px; margin: 0 auto; padding: 0 64px; }
  footer { background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px; }
  .foot-grid { display: grid; grid-template-columns: 1.8fr 1fr 1fr 1fr; gap: 56px; margin-bottom: 60px; }
  .foot-logo { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 400; color: var(--white); text-decoration: none; letter-spacing: 0.1em; display: block; margin-bottom: 0; cursor: pointer; }
  .foot-logo span { color: var(--gold); }
  .foot-p { font-size: 14px; color: rgba(255,255,255,0.4); line-height: 1.8; font-weight: 300; margin-bottom: 24px; }
  .fsoc { display: block; }
  .foot-insta-link { display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300; transition: all 0.3s; }
  .foot-insta-link:hover { color: var(--gold); }
  .fc h4 { font-size: 10px; letter-spacing: 0.25em; text-transform: uppercase; color: #ffffff; margin-bottom: 22px; font-weight: 500; }
  .fc ul { list-style: none; display: flex; flex-direction: column; gap: 12px; padding: 0; }
  .fc ul li { margin-bottom: 0; }
  .fc ul a { font-size: 13.5px; color: rgba(255,255,255,0.45); text-decoration: none; font-weight: 300; transition: all 0.3s; cursor: pointer; display: inline-block; }
  .fc ul a:hover { color: var(--gold); transform: translateX(5px); }
  .foot-bot { display: flex; justify-content: space-between; align-items: center; padding-top: 35px; border-top: 1px solid rgba(255,255,255,0.05); }
  .foot-bot span { font-size: 12px; color: rgba(255,255,255,0.3); font-weight: 300; letter-spacing: 0.02em; }



  /* ── CUSTOM SECTIONS (LHR) ── */
  .path-section { background: var(--black); padding: 100px 0; border-bottom: 1px solid rgba(201,169,110,0.1); }
  .path-inner { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  /* Center the section header; keep timeline readable */
  .path-section .section-line { margin: 24px auto 36px; }
  .path-section .section-desc { margin: 0 auto; text-align: center; max-width: 720px; }
  .path-section .path-inner { text-align: center; }
  /* Treatment-process timeline (use provided reference structure) */
  .path-section .tp-wrap{
    padding: 40px 0 80px;
    position: relative;
    max-width: 980px;
    margin: 0 auto;
  }
  /* tp-heading removed in markup */
  .path-section .tp-vline{
    position: absolute;
    left: 55%;
    top: 70px;
    bottom: 72px;
    width: 1px;
    background: rgba(201,169,110,0.28);
    transform: translateX(-50%);
  }
  .path-section .tp-vline::before,
  .path-section .tp-vline::after{
    content:'';
    position:absolute;
    left:50%;
    width:10px;
    height:10px;
    border-radius:50%;
    background: rgba(201,169,110,0.55);
    transform: translateX(-50%);
    box-shadow: 0 0 0 7px rgba(201,169,110,0.06);
  }
  .path-section .tp-vline::before{ top: -5px; }
  .path-section .tp-vline::after{ bottom: -5px; }
  .path-section .tp-step{
    position: relative;
    display: flex;
    align-items: flex-start;
    min-height: 130px;
  }
  .path-section .tp-dot{
    position: absolute;
    left: 55%;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--gold);
    transform: translateX(-50%);
    margin-top: 6px;
    z-index: 2;
    box-shadow: 0 0 0 7px rgba(201,169,110,0.08);
  }
  .path-section .tp-hline-right{
    position: absolute;
    left: calc(55% + 7px);
    height: 1px;
    background: rgba(201,169,110,0.28);
    width: 28px;
    top: 12px;
  }
  .path-section .tp-hline-left{
    position: absolute;
    right: calc(45% + 7px);
    height: 1px;
    background: rgba(201,169,110,0.28);
    width: 28px;
    top: 12px;
  }
  .path-section .tp-text-right{
    position: absolute;
    left: calc(55% + 35px);
    width: 40%;
    padding-top: 2px;
    text-align: left;
  }
  .path-section .tp-text-left{
    width: calc(55% - 35px);
    padding-right: 35px;
    text-align: right;
    padding-top: 2px;
  }
  .path-section .tp-title{
    font-family: 'Cormorant Garamond', serif;
    font-size: 18px;
    font-weight: 400;
    color: var(--white);
    margin-bottom: 6px;
  }
  .path-section .tp-sub{
    font-size: 13px;
    color: rgba(245,240,232,0.55);
    line-height: 1.6;
    font-family: 'Jost', sans-serif;
  }
  @media (max-width: 860px){
    .path-section .tp-wrap{ max-width: 760px; padding: 32px 0 64px; }
    .path-section .tp-vline{ left: 18px; transform: none; }
    .path-section .tp-dot{ left: 18px; transform: none; }
    .path-section .tp-hline-right,
    .path-section .tp-hline-left{ left: 24px; right: auto; width: 18px; }
    .path-section .tp-text-right,
    .path-section .tp-text-left{
      position: static;
      width: auto;
      padding: 0 0 0 52px;
      text-align: left;
    }
    .path-section .tp-step{ min-height: auto; padding-bottom: 16px; }
  }

  .ba-section-custom { padding: 100px 0; background: var(--black); text-align: center; }
  .ba-inner-custom { max-width: 1300px; margin: 0 auto; padding: 0 60px; }
  .ba-header-custom { font-family: 'Cormorant Garamond', serif; font-size: 42px; font-weight: 400; color: var(--gold); margin-bottom: 12px; }
  .ba-line-custom { width: 250px; height: 1px; border-bottom: 2px dotted #e83e8c; margin: 0 auto 50px; }
  .ba-grid-custom { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 50px; }
  .ba-card-custom { display: flex; height: 300px; border-radius: 10px; overflow: hidden; border: 1px solid rgba(201,169,110,0.2); position: relative; }
  .ba-card-inner { flex: 1; position: relative; }
  .ba-card-img { width: 100%; height: 100%; object-fit: cover; object-position: center top; transition: transform 0.3s; }
  .ba-card-divider { width: 2px; background: rgba(255,255,255,0.5); flex-shrink: 0; z-index: 1; }
  .ba-card-label { position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%); background: rgba(0,0,0,0.8); color: #fff; padding: 3px 12px; border-radius: 20px; font-size: 11px; white-space: nowrap; font-family: sans-serif; }

  @media (max-width: 900px) {
    nav { padding: 16px 24px; }
    .nav-links, .nav-cta { display: none; }
    
    section, 
    .path-section, .why-section, .parts-section, .process-section, 
    .ba-section-custom, .skin-section, .pricing-section, 
    .testimonials-section, .faq-section, .cta-section { padding: 40px 0; }

    .why-inner, .parts-inner, .process-inner, .ba-inner,
    .skin-inner, .pricing-inner, .testimonials-inner, .faq-inner,
    .path-inner, .ba-inner-custom { padding: 0 20px; }
    
    .hero { min-height: auto; padding-bottom: 60px; }
    .hero-content { padding: 60px 20px 20px; text-align: center; }
    .hero h1 { font-size: 38px; max-width: 100%; margin: 0 auto 20px; }
    .hero-sub { margin: 0 auto 30px; font-size: 14px; }
    .hero-btns { justify-content: center; }
    /* hero is background-only on mobile too */
    .hero { flex-direction: column; }
    
    .hero-stats { position: static; max-width: 100%; margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; }
    .hero-stat { padding: 15px; border-right: none; border-bottom: 1px solid rgba(201,169,110,0.1); }
    .hero-stat:nth-child(odd) { border-right: 1px solid rgba(201,169,110,0.1); }
    
    .why-grid, .skin-grid, .faq-grid, .cta-inner { grid-template-columns: 1fr; gap: 30px; }
    .why-inner { text-align: center; }
    .section-title { font-size: 30px; }
    .section-line { margin: 15px auto 25px; }
    .section-desc { margin-left: auto; margin-right: auto; font-size: 14px; }
    .why-image-wrap img { height: 300px; }
    .why-point { text-align: left; gap: 15px; }
    .why-points { gap: 20px; margin-top: 30px; }
    
    .parts-grid { grid-template-columns: 1fr; }
    .part-card.wide { grid-column: span 1; min-height: 280px; }
    .part-card { aspect-ratio: 4/5; }
    
    .process-steps { grid-template-columns: 1fr; margin-top: 40px; }
    .process-step { border-right: none; border-bottom: 1px solid rgba(201,169,110,0.1); padding: 30px 20px; }
    .process-step:last-child { border-bottom: none; }
    
    .timeline-container { padding-left: 20px; margin-top: 30px; }
    .timeline-line { left: 6px; }
    .timeline-dot { left: -21px; width: 10px; height: 10px; }
    .timeline-title { font-size: 20px; }
    .timeline-step { margin-bottom: 35px; }
    
    .ba-grid-custom { grid-template-columns: 1fr; gap: 20px; margin-top: 40px; }
    .ba-card-custom { height: 260px; }
    .ba-header-custom { font-size: 32px; }
    .ba-line-custom { width: 120px; margin-bottom: 30px; }
    
    .pricing-grid, .testimonials-grid { grid-template-columns: 1fr; gap: 20px; margin-top: 40px; }
    .pricing-card { padding: 35px 20px; }
    
    .rating-bar { flex-direction: column; padding: 30px 20px; text-align: center; margin-top: 40px; }
    .google-badge { justify-content: center; }
    
    .cta-inner { text-align: center; padding: 60px 20px; gap: 40px; }
    .cta-actions { width: 100%; }
    
    .foot-grid { grid-template-columns: 1fr; gap: 35px; }
    .foot-bot { flex-direction: column; gap: 15px; text-align: center; }
    footer { padding: 50px 20px; }
  }
</style>
</head>
<body>

<!-- Navbar -->
@include('partials.navbar')



<!-- Hero -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">

    <h1>Permanent Hair<br><em>Freedom.</em><br>Effortlessly.</h1>
    <p class="hero-sub">FDA-approved laser technology for all skin types. Safe, effective, and long-lasting — delivered by Lucknow's finest dermatologists.</p>
    <div class="hero-btns">
      <a href="https://wa.me/919140971129?text=I+want+to+book+a+free+LHR+consultation" target="_blank" class="btn-primary">Book Free Consultation</a>
    </div>
  </div>
</section>

<!-- Why LHR -->
<div class="why-section">
  <div class="why-inner">
    <div class="why-grid">
      <div class="why-image-wrap">
        <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=800&q=80" alt="Laser Treatment">

      </div>
      <div>

        <h2 class="section-title lhr-science-title">The Science of <em>Permanent Smoothness</em> With Our Laser Hair Removal Treatment</h2>
        <div class="section-line"></div>
        <p class="section-desc">Our FDA-approved diode laser technology targets hair follicles with precision — delivering permanent hair reduction that is safe for all skin tones and all body areas.</p>
        <div class="why-points">
          <div class="why-point">
            <div>
              <div class="why-point-title">Zero Downtime</div>
              <div class="why-point-desc">Walk in, walk out. No recovery needed. Resume your day immediately after every session.</div>
            </div>
          </div>
          <div class="why-point">
            <div>
              <div class="why-point-title">Pain-Free Procedure</div>
              <div class="why-point-desc">Advanced cooling technology ensures each session is comfortable — even in sensitive areas.</div>
            </div>
          </div>
          <div class="why-point">
            <div>
              <div class="why-point-title">No More Ingrowths</div>
              <div class="why-point-desc">Say goodbye to painful razor bumps, ingrown hairs, and irritation from waxing forever.</div>
            </div>
          </div>
          <div class="why-point">
            <div>
              <div class="why-point-title">Permanent Results</div>
              <div class="why-point-desc">Clinically proven 90%+ permanent hair reduction with our advanced diode laser system.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Structured Path -->
<div class="path-section">
  <div class="path-inner">
    <h2 class="section-title">A Structured Path to<br><em>Visible Transformation</em></h2>
    <div class="section-line"></div>
    <p class="section-desc">Your Laser Hair Reduction journey at Skinnovation is designed as a progressive, result-oriented experience.</p>
    
    <div class="tp-wrap">
      <div class="tp-vline"></div>

      <!-- Step 1: RIGHT -->
      <div class="tp-step" style="margin-top: 110px;">
        <div class="tp-dot"></div>
        <div class="tp-hline-right"></div>
        <div class="tp-text-right">
          <div class="tp-title">Consultation &amp; Skin Analysis</div>
          <div class="tp-sub">A detailed assessment is conducted to understand your skin type, hair growth pattern, and treatment suitability.</div>
        </div>
      </div>

      <!-- Step 2: LEFT -->
      <div class="tp-step" style="margin-top: 10px;">
        <div class="tp-dot"></div>
        <div class="tp-hline-left"></div>
        <div class="tp-text-left">
          <div class="tp-title">Patch Test &amp; Calibration</div>
          <div class="tp-sub">A patch test ensures optimal laser settings are selected for your skin, prioritizing both safety and effectiveness.</div>
        </div>
      </div>

      <!-- Step 3: RIGHT -->
      <div class="tp-step" style="margin-top: 10px;">
        <div class="tp-dot"></div>
        <div class="tp-hline-right"></div>
        <div class="tp-text-right">
          <div class="tp-title">Progressive Reduction Phase</div>
          <div class="tp-sub">With each session, hair regrowth becomes finer, lighter, and significantly reduced as different growth cycles are treated.</div>
        </div>
      </div>

      <!-- Step 4: LEFT -->
      <div class="tp-step" style="margin-top: 10px; padding-bottom: 20px;">
        <div class="tp-dot"></div>
        <div class="tp-hline-left"></div>
        <div class="tp-text-left">
          <div class="tp-title">Visible Results &amp; Skin Refinement</div>
          <div class="tp-sub">Clients experience smoother skin, reduced ingrowth, and improved texture over time.</div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Body Parts -->
<div class="parts-section">
  <div class="parts-inner">

    <h2 class="section-title">Precision Treatment<br><em>Across Every Zone</em></h2>
    <div class="section-line"></div>

    <div class="parts-grid">
      <div class="part-card">
        <img src="https://images.pexels.com/photos/3764016/pexels-photo-3764016.jpeg?auto=compress&cs=tinysrgb&w=800&q=95" alt="Face">
        <div class="part-card-overlay"></div>
        <div class="part-card-content">

          <div class="part-card-title">Face</div>

          <a href="https://wa.me/919140971129?text=I+want+to+book+LHR+for+Face" target="_blank" class="part-card-btn">Book Now</a>
        </div>
      </div>
      <div class="part-card">
        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=800&q=90&fit=crop" alt="Underarms">
        <div class="part-card-overlay"></div>
        <div class="part-card-content">

          <div class="part-card-title">Underarms</div>

          <a href="https://wa.me/919140971129?text=I+want+to+book+LHR+for+Underarms" target="_blank" class="part-card-btn">Book Now</a>
        </div>
      </div>
      <div class="part-card">
        <img src="https://images.pexels.com/photos/5938421/pexels-photo-5938421.jpeg?auto=compress&cs=tinysrgb&w=800&q=95" alt="Arms & Legs">
        <div class="part-card-overlay"></div>
        <div class="part-card-content">

          <div class="part-card-title">Arms & Legs</div>

          <a href="https://wa.me/919140971129?text=I+want+to+book+LHR+for+Arms+and+Legs" target="_blank" class="part-card-btn">Book Now</a>
        </div>
      </div>
      <div class="part-card">
        <img src="https://images.pexels.com/photos/3997987/pexels-photo-3997987.jpeg?auto=compress&cs=tinysrgb&w=800&q=95" alt="Full Body">
        <div class="part-card-overlay"></div>
        <div class="part-card-content">

          <div class="part-card-title">Full Body</div>

          <a href="https://wa.me/919140971129?text=I+want+to+book+Full+Body+LHR+Offer" target="_blank" class="part-card-btn">Get Best Offer</a>
        </div>
      </div>
      <div class="part-card">
        <img src="https://images.pexels.com/photos/6621462/pexels-photo-6621462.jpeg?auto=compress&cs=tinysrgb&w=800&q=95" alt="Bikini">
        <div class="part-card-overlay"></div>
        <div class="part-card-content">

          <div class="part-card-title">Bikini & Intimate</div>

          <a href="https://wa.me/919140971129?text=I+want+to+book+Bikini+LHR" target="_blank" class="part-card-btn">Book Now</a>
        </div>
      </div>
      <div class="part-card">
        <img src="https://images.pexels.com/photos/5938619/pexels-photo-5938619.jpeg?auto=compress&cs=tinysrgb&w=800&q=95" alt="Back & Chest">
        <div class="part-card-overlay"></div>
        <div class="part-card-content">

          <div class="part-card-title">Back & Chest</div>

          <a href="https://wa.me/919140971129?text=I+want+to+book+LHR+for+Back+and+Chest" target="_blank" class="part-card-btn">Book Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Process -->
<div class="process-section">
  <div class="process-inner">

    <h2 class="section-title">Your Path to<br><em>Silky, Hair-Free Skin</em></h2>
    <div class="section-line"></div>
    <div class="process-steps">
      <div class="process-step">
        <div class="process-step-title">Skin Analysis</div>
        <div class="process-step-desc">Our dermatologist assesses your skin tone, hair type, and creates a personalized treatment plan.</div>
      </div>
      <div class="process-step">
        <div class="process-step-title">Pre-Treatment</div>
        <div class="process-step-desc">Gentle cleansing and cooling gel is applied to protect and prepare your skin for laser energy.</div>
      </div>
      <div class="process-step">
        <div class="process-step-title">Laser Application</div>
        <div class="process-step-desc">FDA-approved diode laser precisely targets follicles. Most sessions take just 15–45 minutes.</div>
      </div>
      <div class="process-step">
        <div class="process-step-title">Aftercare & Follow-up</div>
        <div class="process-step-desc">Soothing aftercare, detailed home instructions, and scheduled follow-up for optimal results.</div>
      </div>
    </div>
  </div>
</div>




<!-- FAQ -->
<div class="faq-section">
  <div class="faq-inner">
    <h2 class="section-title">Frequently Asked<br><em>Questions</em></h2>
    <div class="section-line"></div>
    <div class="faq-grid">
      <div>
        <div class="faq-item open" onclick="toggleFaq(this)">
          <div class="faq-q">Is laser hair removal safe for all skin types? <span class="faq-toggle">−</span></div>
          <div class="faq-a" style="display:block;">Yes. Our advanced diode laser is calibrated specifically for Indian skin tones (Fitzpatrick type III–VI) and is FDA-approved for use on all skin types with proper dermatologist assessment.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">How many sessions are required? <span class="faq-toggle">+</span></div>
          <div class="faq-a">Most clients see 80–90% permanent reduction in 6–8 sessions. The exact number depends on hair type, body area, and individual hair growth cycles.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Does laser hair removal hurt? <span class="faq-toggle">+</span></div>
          <div class="faq-a">Modern diode laser with integrated cooling makes the treatment very comfortable. Most clients describe it as a mild warm sensation — far less painful than waxing.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">What should I do before and after the treatment? <span class="faq-toggle">+</span></div>
          <div class="faq-a">Avoid sun exposure, waxing, and threading for 2 weeks before. After treatment, avoid sun exposure and use SPF. Our care team provides detailed before/after instructions.</div>
        </div>
      </div>
      <div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">How long do results last? <span class="faq-toggle">+</span></div>
          <div class="faq-a">Results are permanent after completing the recommended sessions. Some clients may need annual maintenance sessions due to hormonal changes, which we provide at minimal cost.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">Is there any downtime after the session? <span class="faq-toggle">+</span></div>
          <div class="faq-a">There is zero downtime. You can resume normal activities immediately. Mild redness may occur for a few hours, which is completely normal and subsides quickly.</div>
        </div>
        <div class="faq-item" onclick="toggleFaq(this)">
          <div class="faq-q">What makes Skinnovation different? <span class="faq-toggle">+</span></div>
          <div class="faq-a">We combine state-of-the-art laser devices, experienced dermatologists, and a patient-first approach — resulting in thousands of satisfied clients in Lucknow.</div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.appointment-form', [
  'sectionId' => 'booking',
  'formId' => 'apptFormLhrPage',
  'context' => 'lhr',
  'variant' => 'dark',
])

<!-- Footer -->
<footer style="background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
  <div class="cnt">
    <div class="foot-grid">
      <div style="padding-right: 40px;">
        <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="location.href='/'">

          <div class="foot-logo" style="margin-bottom:0; font-size:24px; color: white;">Skinnovation</div>
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
      <div class="fc"><h4>Clinic</h4><ul><li><a href="/lhr">Laser Hair Reduction</a></li><li><a href="/clinic">Medi Facials</a></li><li><a href="/clinic">Skin Boosters</a></li><li><a href="/clinic">IV Therapy</a></li><li><a href="/clinic">Microneedling</a></li></ul></div>
      <div class="fc"><h4>Salon</h4><ul><li><a href="/?page=salon">Korean Head Spa</a></li><li><a href="/?page=salon">Hair Spa</a></li><li><a href="/?page=salon">Smoothening</a></li><li><a href="/?page=salon">Styling & Cuts</a></li><li><a href="/?page=salon">Color & Balayage</a></li></ul></div>

    </div>
    <div class="foot-bot">
      <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
      <span>Designed & Developed By <a href="http://trivoraconsultancy.com/" target="_blank" style="color:#e8c4b4; text-decoration:none; font-weight: 500; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
    </div>
  </div>
</footer>

<script>
function toggleFaq(el) {
  const wasOpen = el.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(f => {
    f.classList.remove('open');
    f.querySelector('.faq-toggle').textContent = '+';
    f.querySelector('.faq-a').style.display = 'none';
  });
  if (!wasOpen) {
    el.classList.add('open');
    el.querySelector('.faq-toggle').textContent = '−';
    el.querySelector('.faq-a').style.display = 'block';
  }
}
</script>

{{-- ═══════════════════════════════════════════════════════
     SALON-STYLE DOM HIGHLIGHT — applies salon page's visual
     treatment to LHR sections without changing content/layout
     ═══════════════════════════════════════════════════════ --}}
{{-- Playfair Display font for salon-style headings on LHR page --}}
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">

<style>
  /* ── Salon-style section highlight variables ── */
  :root {
    --salon-rosegold: #C9A87C;
    --salon-rosegold-lt: #d4ba95;
    --salon-cream: #FFF8F0;
    --salon-beige: #FAF4EE;
    --salon-charcoal: #1a1a1a;
    --salon-border: rgba(201,168,124,0.18);
  }

  /* ── Section tag decorator (like salon's "Salon ·" tag) ── */
  .lhr-sal-tag {
    display: inline-block;
    font-family: 'Jost', sans-serif;
    font-size: 10px;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: var(--salon-rosegold);
    margin-bottom: 14px;
    padding: 6px 0;
    border-bottom: 1px solid rgba(201,168,124,0.35);
  }

  /* ── Section heading — Playfair like salon ── */
  .lhr-sal-heading {
    font-family: 'Playfair Display', serif !important;
    font-weight: 600 !important;
  }
  .lhr-sal-heading em {
    color: var(--salon-rosegold) !important;
    font-style: italic !important;
  }



  /* ── Alternating section background highlights ── */
  .lhr-sal-bg-cream  { background: var(--salon-cream)  !important; }
  .lhr-sal-bg-beige  { background: var(--salon-beige)  !important; }
  .lhr-sal-bg-dark   { background: var(--salon-charcoal) !important; }
  .lhr-sal-bg-mid    { background: #111111 !important; }

  /* ── On cream/beige sections: flip text colours for readability ── */
  .lhr-sal-light-sec .section-title,
  .lhr-sal-light-sec .lhr-sal-heading,
  .lhr-sal-light-sec .process-step-title {
    color: #1a1a1a !important;
  }
  .lhr-sal-light-sec .section-desc,
  .lhr-sal-light-sec .why-point-desc,
  .lhr-sal-light-sec .process-step-desc,
  .lhr-sal-light-sec .faq-q,
  .lhr-sal-light-sec .faq-a {
    color: #5a5a5a !important;
  }
  .lhr-sal-light-sec .why-point-title {
    color: #222 !important;
  }
  .lhr-sal-light-sec .section-line { background: var(--salon-rosegold) !important; }


  /* ── Highlight card containers on dark sections — salon card style ── */
  .lhr-sal-card-wrap .process-step {
    background: rgba(201,168,124,0.04) !important;
    border: 1px solid var(--salon-border) !important;
    border-radius: 10px !important;
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s !important;
  }
  .lhr-sal-card-wrap .process-step:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 18px 40px rgba(0,0,0,0.18) !important;
    border-color: rgba(201,168,124,0.4) !important;
  }



  /* ── FAQ items on light bg ── */
  .lhr-sal-light-sec .faq-item {
    border-bottom-color: rgba(201,168,124,0.25) !important;
  }
  .lhr-sal-light-sec .faq-toggle {
    border-color: rgba(201,168,124,0.4) !important;
    color: var(--salon-rosegold) !important;
  }
  .lhr-sal-light-sec .faq-item.open .faq-toggle {
    background: var(--salon-rosegold) !important;
    color: #fff !important;
  }

  /* ── Part cards — gold border on hover (same as salon) ── */
  .part-card {
    transition: transform 0.4s ease !important;
  }
  .part-card:hover {
    transform: scale(1.02) !important;
  }
  .part-card-btn {
    border-radius: 2px !important;
  }

  /* ── Section divider line (between sections) ── */
  .lhr-sal-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(201,168,124,0.3), transparent);
    margin: 0;
  }



  /* ── Smooth padding on inner wrappers ── */
  .why-inner, .process-inner, .path-inner, .faq-inner, .parts-inner {
    padding-top: 72px !important;
    padding-bottom: 72px !important;
  }
</style>

<script>
(function applyLhrSalonStyle() {
  /* ── Map sections to their salon-style theme ──
     pattern: cream → dark → beige → dark → cream ...
     matching salon page's alternating light/dark rhythm        */
  const sectionMap = [
    { el: document.querySelector('.why-section'),      bgClass: 'lhr-sal-bg-cream',  light: true,  tag: 'LHR · Science'         },
    { el: document.querySelector('.path-section'),     bgClass: 'lhr-sal-bg-dark',   light: false, tag: 'LHR · Journey'         },
    { el: document.querySelector('.parts-section'),    bgClass: 'lhr-sal-bg-beige',  light: true,  tag: 'Treatment Zones'       },
    { el: document.querySelector('.process-section'),  bgClass: 'lhr-sal-bg-dark',   light: false, tag: 'Our Process'           },
    { el: document.querySelector('.faq-section'),      bgClass: 'lhr-sal-bg-cream',  light: true,  tag: 'FAQ'                   },
  ];

  sectionMap.forEach(function(item) {
    if (!item.el) return;

    /* 1. Apply background colour */
    item.el.classList.add(item.bgClass);
    if (item.light) item.el.classList.add('lhr-sal-light-sec');

    /* 2. Add divider above section */
    const divider = document.createElement('div');
    divider.className = 'lhr-sal-divider';
    item.el.parentNode.insertBefore(divider, item.el);

    /* 3. Apply Playfair Display to heading only (no bars, no tag labels) */
    const h2 = item.el.querySelector('h2.section-title');
    if (h2) {
      h2.classList.add('lhr-sal-heading');
    }
  });

  /* 4. Process section — add card-wrap class for card hover effect */
  const procSection = document.querySelector('.process-section');
  if (procSection) {
    const steps = procSection.querySelector('.process-steps');
    if (steps) steps.classList.add('lhr-sal-card-wrap');
  }

  /* 5. Hero section — add subtle salon-style bottom divider */
  const hero = document.querySelector('.hero');
  if (hero) {
    const heroDiv = document.createElement('div');
    heroDiv.className = 'lhr-sal-divider';
    hero.parentNode.insertBefore(heroDiv, hero.nextSibling);
  }

  /* 6. Apply Playfair Display to ALL section-title headings on page */
  document.querySelectorAll('h2.section-title, h1').forEach(function(el) {
    el.classList.add('lhr-sal-heading');
  });

})();
</script>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
