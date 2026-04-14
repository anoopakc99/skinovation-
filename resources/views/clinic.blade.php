<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laser Hair Reduction | Skinnovation</title>
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
      background: var(--dark);
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

    .nav-right { display: flex; align-items: center; gap: 24px; }
    .nav-cta {
      padding: 10px 28px; background: transparent;
      color: #c8a090; border: 1px solid #c8a090;
      font-size: 12px; font-weight: 500; letter-spacing: 2px;
      text-transform: uppercase; font-family: 'Jost', sans-serif;
      cursor: pointer; transition: all 0.3s; text-decoration: none;
    }
    .nav-cta:hover { background: #c8a090; color: #ffffff; }
      text-transform: uppercase;
      text-decoration: none;
      font-family: 'Jost', sans-serif;
      font-weight: 400;
      transition: background 0.3s, transform 0.2s;
    }

    .nav-cta:hover {
      background: var(--gold);
      transform: translateY(-1px);
    }

    /* ===== HERO ===== */
    .hero {
      height: 100vh;
      position: relative;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      background: url('https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=1920&q=80') center/cover no-repeat;
      transform: scale(1.1);
      animation: heroZoom 8s ease forwards;
      filter: brightness(0.35);
    }

    @keyframes heroZoom {
      to {
        transform: scale(1);
      }
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
      font-size: clamp(52px, 7vw, 90px);
      font-weight: 300;
      line-height: 1.05;
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
      max-width: 480px;
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

    .hero-scroll {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      z-index: 2;
      animation: fadeIn 2s 2s ease forwards;
      opacity: 0;
    }

    .hero-scroll span {
      font-size: 10px;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--rose);
    }

    .scroll-line {
      width: 1px;
      height: 60px;
      background: linear-gradient(to bottom, var(--rose), transparent);
      animation: scrollPulse 2s ease infinite;
    }

    @keyframes scrollPulse {

      0%,
      100% {
        opacity: 1;
        transform: scaleY(1);
      }

      50% {
        opacity: 0.4;
        transform: scaleY(0.7);
      }
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    .hero-stats {
      position: absolute;
      bottom: 60px;
      right: 60px;
      display: flex;
      gap: 40px;
      z-index: 2;
      opacity: 0;
      animation: fadeUp 1.2s 1.2s ease forwards;
    }

    .stat-item {
      text-align: center;
    }

    .stat-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 36px;
      font-weight: 400;
      color: var(--rose-light);
      display: block;
    }

    .stat-label {
      font-size: 10px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(245, 240, 235, 0.5);
    }

    /* ===== INTRO STRIP ===== */
    .intro-strip {
      background: var(--rose);
      padding: 20px 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 60px;
      overflow: hidden;
    }

    .strip-item {
      display: flex;
      align-items: center;
      gap: 12px;
      white-space: nowrap;
    }

    .strip-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--white);
      opacity: 0.6;
    }

    .strip-item span {
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--white);
      font-weight: 400;
    }

    /* ===== WHAT IS LHR ===== */
    .what-lhr {
      padding: 120px 60px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .lhr-text .section-tag {
      font-size: 11px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--rose);
      display: block;
      margin-bottom: 20px;
    }

    .lhr-text h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(38px, 4vw, 58px);
      font-weight: 300;
      line-height: 1.15;
      margin-bottom: 28px;
      color: var(--white);
    }

    .lhr-text h2 em {
      font-style: italic;
      color: var(--rose-light);
    }

    .lhr-text p {
      font-size: 15px;
      line-height: 1.9;
      color: rgba(245, 240, 235, 0.65);
      margin-bottom: 20px;
    }

    .lhr-benefits {
      margin-top: 36px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .benefit-chip {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      letter-spacing: 0.5px;
      color: var(--cream);
    }

    .benefit-chip::before {
      content: '';
      width: 20px;
      height: 1px;
      background: var(--rose);
      flex-shrink: 0;
    }

    .lhr-image-wrap {
      position: relative;
    }

    .lhr-img-main {
      width: 100%;
      height: 560px;
      object-fit: cover;
      display: block;
    }

    .lhr-img-overlay {
      position: absolute;
      bottom: -30px;
      left: -30px;
      width: 200px;
      height: 200px;
      object-fit: cover;
      border: 4px solid var(--dark);
    }

    .lhr-badge {
      position: absolute;
      top: 30px;
      right: -20px;
      background: var(--rose);
      padding: 24px;
      text-align: center;
      width: 120px;
    }

    .lhr-badge .badge-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 32px;
      color: var(--white);
      display: block;
      font-weight: 400;
    }

    .lhr-badge .badge-text {
      font-size: 10px;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.8);
    }

    /* ===== HOW IT WORKS ===== */
    .how-it-works {
      background: var(--charcoal);
      padding: 120px 60px;
    }

    .section-header {
      text-align: center;
      margin-bottom: 70px;
    }

    .section-header .section-tag {
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
    }

    .section-header h2 em {
      font-style: italic;
      color: var(--rose-light);
    }

    .steps-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1px;
      background: var(--border);
      margin-top: 60px;
    }

    .step-card {
      background: var(--charcoal);
      padding: 48px 36px;
      position: relative;
      overflow: hidden;
      transition: background 0.4s;
    }

    .step-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(201, 160, 138, 0.05), transparent);
      opacity: 0;
      transition: opacity 0.4s;
    }

    .step-card:hover {
      background: #222;
    }

    .step-card:hover::before {
      opacity: 1;
    }

    .step-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 72px;
      font-weight: 300;
      color: rgba(201, 160, 138, 0.15);
      line-height: 1;
      position: absolute;
      top: 20px;
      right: 20px;
      transition: color 0.4s;
    }

    .step-card:hover .step-num {
      color: rgba(201, 160, 138, 0.25);
    }

    .step-icon {
      width: 48px;
      height: 48px;
      border: 1px solid var(--rose);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 24px;
      font-size: 22px;
      transition: background 0.3s;
    }

    .step-card:hover .step-icon {
      background: var(--rose);
    }

    .step-card h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 12px;
    }

    .step-card p {
      font-size: 13px;
      line-height: 1.8;
      color: rgba(245, 240, 235, 0.5);
    }

    /* ===== MACHINES / PRODUCTS ===== */
    .machines {
      padding: 120px 60px;
      background: var(--dark);
    }

    .machines-intro {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 60px;
    }

    .machines-intro h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(38px, 4vw, 56px);
      font-weight: 300;
      color: var(--white);
      max-width: 500px;
      line-height: 1.15;
    }

    .machines-intro h2 em {
      font-style: italic;
      color: var(--rose-light);
    }

    .machines-intro p {
      max-width: 340px;
      font-size: 14px;
      line-height: 1.8;
      color: rgba(245, 240, 235, 0.5);
      text-align: right;
    }

    .machines-scroll {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
    }

    .machine-card {
      background: var(--charcoal);
      position: relative;
      overflow: hidden;
      cursor: pointer;
      group: true;
    }

    .machine-img {
      width: 100%;
      height: 380px;
      object-fit: cover;
      display: block;
      transition: transform 0.6s ease;
      filter: grayscale(20%);
    }

    .machine-card:hover .machine-img {
      transform: scale(1.05);
      filter: grayscale(0%);
    }

    .machine-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(17, 17, 17, 0.95) 0%, rgba(17, 17, 17, 0.2) 50%, transparent 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 36px;
    }

    .machine-tag {
      font-size: 10px;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--rose);
      margin-bottom: 8px;
    }

    .machine-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 28px;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 10px;
    }

    .machine-desc {
      font-size: 12px;
      line-height: 1.6;
      color: rgba(245, 240, 235, 0.55);
      margin-bottom: 20px;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s;
    }

    .machine-card:hover .machine-desc {
      opacity: 1;
      transform: translateY(0);
    }

    .machine-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 11px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--rose);
      text-decoration: none;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s 0.05s;
    }

    .machine-card:hover .machine-link {
      opacity: 1;
      transform: translateY(0);
    }

    .machine-link::after {
      content: '→';
      transition: transform 0.3s;
    }

    .machine-link:hover::after {
      transform: translateX(4px);
    }

    /* ===== PRICE TABLE ===== */
    .pricing {
      background: var(--charcoal);
      padding: 120px 60px;
    }

    .price-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 60px;
    }

    .price-table thead tr {
      border-bottom: 1px solid var(--rose);
    }

    .price-table th {
      font-size: 10px;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--rose);
      padding: 16px 24px;
      text-align: left;
      font-weight: 400;
    }

    .price-table td {
      padding: 20px 24px;
      font-size: 14px;
      color: rgba(245, 240, 235, 0.7);
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      transition: all 0.3s;
    }

    .price-table tr:hover td {
      background: rgba(201, 160, 138, 0.05);
      color: var(--cream);
    }

    .price-table td:first-child {
      font-family: 'Cormorant Garamond', serif;
      font-size: 18px;
      color: var(--white);
      font-weight: 400;
    }

    .price-badge {
      display: inline-block;
      background: rgba(201, 160, 138, 0.15);
      color: var(--rose);
      font-size: 11px;
      letter-spacing: 1px;
      padding: 4px 12px;
      border: 1px solid var(--border);
    }

    .price-cta-btn {
      display: inline-block;
      background: transparent;
      border: 1px solid var(--rose);
      color: var(--rose);
      font-size: 10px;
      letter-spacing: 2px;
      text-transform: uppercase;
      padding: 8px 20px;
      text-decoration: none;
      transition: all 0.3s;
      font-family: 'Jost', sans-serif;
      cursor: pointer;
    }

    .price-cta-btn:hover {
      background: var(--rose);
      color: var(--white);
    }

    /* ===== ADVANCED TREATMENTS SECTION ===== */
    .adv-treatments {
      padding: 120px 60px;
      background: var(--charcoal);
    }

    .treatments-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1px;
      background: var(--border);
    }

    .treatment-box {
      background: var(--dark);
      padding: 40px;
      transition: background 0.3s;
      position: relative;
    }

    .treatment-box:hover {
      background: #1a1a1a;
    }

    .treatment-box h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      color: var(--rose-light);
      margin-bottom: 12px;
    }

    .treatment-box p {
      font-size: 13px;
      line-height: 1.8;
      color: rgba(245, 240, 235, 0.5);
    }

    /* ===== SKIN TYPES ===== */
    .skin-types {
      padding: 120px 60px;
      background: var(--dark);
    }

    .skin-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 2px;
      margin-top: 60px;
    }

    .skin-card {
      aspect-ratio: 2/3;
      position: relative;
      overflow: hidden;
      cursor: pointer;
    }

    .skin-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s;
      filter: grayscale(60%);
    }

    .skin-card:hover img {
      transform: scale(1.08);
      filter: grayscale(0%);
    }

    .skin-card-info {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(17, 17, 17, 0.9), transparent 60%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px 16px;
    }

    .skin-type-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 32px;
      color: var(--rose-light);
      font-weight: 300;
      line-height: 1;
      margin-bottom: 4px;
    }

    .skin-type-label {
      font-size: 10px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(245, 240, 235, 0.6);
    }

    /* ===== BEFORE AFTER ===== */
    .before-after {
      background: var(--charcoal);
      padding: 120px 60px;
    }

    .ba-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
      margin-top: 60px;
    }

    .ba-card {
      position: relative;
      overflow: hidden;
    }

    .ba-imgs {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2px;
    }

    .ba-img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s;
    }

    .ba-card:hover .ba-img {
      transform: scale(1.03);
    }

    .ba-labels {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2px;
    }

    .ba-label {
      background: var(--dark);
      text-align: center;
      padding: 10px;
      font-size: 10px;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(245, 240, 235, 0.5);
    }

    .ba-label.after {
      color: var(--rose);
    }

    .ba-body {
      background: #1e1e1e;
      padding: 24px;
    }

    .ba-area {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px;
      color: var(--white);
      font-weight: 400;
      margin-bottom: 6px;
    }

    .ba-sessions {
      font-size: 12px;
      color: rgba(245, 240, 235, 0.4);
      letter-spacing: 1px;
    }

    /* ===== WHY CHOOSE ===== */
    .why-choose {
      padding: 120px 60px;
      background: var(--dark);
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .why-image {
      position: relative;
    }

    .why-img-main {
      width: 100%;
      height: 620px;
      object-fit: cover;
      display: block;
    }

    .why-img-card {
      position: absolute;
      bottom: -20px;
      right: -20px;
      background: var(--rose);
      padding: 32px;
      width: 200px;
      text-align: center;
    }

    .why-img-card .card-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 42px;
      color: var(--white);
      font-weight: 300;
      display: block;
      line-height: 1;
    }

    .why-img-card .card-text {
      font-size: 11px;
      letter-spacing: 1.5px;
      color: rgba(255, 255, 255, 0.8);
      text-transform: uppercase;
      margin-top: 8px;
      display: block;
    }

    .why-content .section-tag {
      font-size: 11px;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--rose);
      display: block;
      margin-bottom: 20px;
    }

    .why-content h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(36px, 4vw, 52px);
      font-weight: 300;
      color: var(--white);
      line-height: 1.15;
      margin-bottom: 30px;
    }

    .why-content h2 em {
      font-style: italic;
      color: var(--rose-light);
    }

    .why-reasons {
      display: flex;
      flex-direction: column;
      gap: 24px;
      margin-top: 40px;
    }

    .reason-item {
      display: flex;
      gap: 20px;
      padding: 24px;
      background: var(--charcoal);
      border-left: 2px solid transparent;
      transition: all 0.3s;
    }

    .reason-item:hover {
      border-left-color: var(--rose);
      background: #222;
    }

    .reason-icon {
      font-size: 28px;
      flex-shrink: 0;
      width: 52px;
      height: 52px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .reason-text h4 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px;
      color: var(--white);
      font-weight: 400;
      margin-bottom: 6px;
    }

    .reason-text p {
      font-size: 13px;
      line-height: 1.7;
      color: rgba(245, 240, 235, 0.5);
    }

    /* ===== FAQ ===== */
    .faq {
      background: var(--charcoal);
      padding: 120px 60px;
    }

    .faq-list {
      max-width: 760px;
      margin: 60px auto 0;
    }

    .faq-item {
      border-bottom: 1px solid rgba(255, 255, 255, 0.07);
      overflow: hidden;
    }

    .faq-q {
      width: 100%;
      background: none;
      border: none;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 0;
      cursor: pointer;
      font-family: 'Cormorant Garamond', serif;
      font-size: 20px;
      font-weight: 400;
      color: var(--white);
      text-align: left;
      transition: color 0.3s;
    }

    .faq-q:hover {
      color: var(--rose-light);
    }

    .faq-icon {
      width: 28px;
      height: 28px;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 18px;
      color: var(--rose);
      transition: transform 0.4s;
    }

    .faq-item.open .faq-icon {
      transform: rotate(45deg);
    }

    .faq-a {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease, padding 0.3s;
      font-size: 14px;
      line-height: 1.9;
      color: rgba(245, 240, 235, 0.55);
    }

    .faq-item.open .faq-a {
      max-height: 200px;
      padding-bottom: 24px;
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

    .reveal-right {
      opacity: 0;
      transform: translateX(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal-right.visible {
      opacity: 1;
      transform: translateX(0);
    }

    /* ===== 3D FLOATING PARTICLES ===== */
    .particles-canvas {
      position: absolute;
      inset: 0;
      pointer-events: none;
      z-index: 1;
    }

    /* ===== COUNTER ANIMATION ===== */
    .count-up {
      display: inline;
    }

    /* ===== RESPONSIVE OVERHAUL (MOBILE & TABLET) ===== */
    @media (max-width: 900px) {
      nav { padding: 16px 24px; height: 64px; }
      .nav-links, .nav-cta { display: none; }
      
      section, 
      .what-lhr, .why-choose, .how-it-works, .machines, .skin-types, 
      .faq, .adv-treatments { padding: 50px 0; }

      .cnt, .hero-content, .intro-strip, .what-lhr, 
      .how-it-works, .machines, .skin-types, .why-choose, .faq, .cta-section { padding: 0 20px; }

      .hero { height: auto; min-height: 100vh; padding: 100px 0 60px; flex-direction: column; text-align: center; justify-content: flex-start; }
      .hero-content { padding: 20px; max-width: 100%; order: 1; }
      .hero h1 { font-size: 42px; line-height: 1.1; margin-bottom: 20px; }
      .hero p { margin: 0 auto 30px; font-size: 14px; }
      .hero-btns { justify-content: center; flex-direction: column; gap: 12px; }
      .btn-primary, .btn-outline { width: 100%; text-align: center; }
      
      .hero-stats { position: relative; inset: auto; margin-top: 40px; display: grid !important; grid-template-columns: 1fr 1fr; gap: 20px; width: 100%; padding: 0 20px; order: 2; }
      .stat-item { padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(201,138,160,0.1); }
      .stat-item:last-child { grid-column: span 2; }

      .intro-strip { flex-direction: column; gap: 15px; padding: 30px 20px; text-align: center; }
      
      .section-header { margin-bottom: 40px; }
      .section-header h2 { font-size: 32px; }
      
      .treatments-grid { grid-template-columns: 1fr; }
      .treatment-box { padding: 30px 20px; }
      
      .what-lhr { grid-template-columns: 1fr; text-align: center; gap: 40px; }
      .lhr-benefits { grid-template-columns: 1fr; text-align: left; }
      .lhr-img-main { height: 350px; }
      
      .steps-grid { grid-template-columns: 1fr; gap: 20px; }
      .step-card { padding: 40px 24px; }
      
      .machines-intro { flex-direction: column; text-align: center; align-items: center; gap: 15px; }
      .machines-intro p { text-align: center; }
      .machines-scroll { grid-template-columns: 1fr; gap: 20px; }
      .machine-img { height: 300px; }
      
      .skin-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
      
      .why-choose { grid-template-columns: 1fr; gap: 40px; }
      .why-img-main { height: 350px; }
      .why-content { text-align: center; }
      .reason-item { text-align: left; }
      
      .faq-list { margin-top: 30px; }
      .faq-q { font-size: 18px; padding: 20px 0; }
      
      /* Footer Enhancements */
      .foot-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
      .foot-logo { font-size: 28px; justify-content: center; }
      .foot-p { margin: 0 auto 24px; max-width: 100% !important; }
      .fsoc { justify-content: center; display: flex; }
      .fc h4 { font-size: 11px; margin-bottom: 20px; color: var(--rose); }
      .fc ul { gap: 10px; }
      .fc ul a { font-size: 14px; }
      .foot-bot { flex-direction: column; gap: 20px; padding: 40px 0; border-top: 1px solid rgba(255,255,255,0.05); }
      .foot-bot span { font-size: 11px; }

      /* Mobile Toggle & Menu */
      .mobile-toggle { display: block; font-size: 24px; color: var(--white); cursor: pointer; border: none; background: none; }
      .mobile-menu { 
        position: fixed; top: 0; right: -100%; width: 85%; height: 100%; 
        background: var(--dark); z-index: 3000; padding: 100px 40px; 
        transition: right 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
        box-shadow: -10px 0 30px rgba(0,0,0,0.5);
        display: flex; flex-direction: column; gap: 30px;
      }
      .mobile-menu.active { right: 0; }
      .mobile-menu a { 
        font-size: 20px; text-transform: uppercase; letter-spacing: 4px; 
        color: var(--white); text-decoration: none; font-family: 'Cormorant Garamond', serif;
      }
      .mobile-menu a.active { color: var(--rose); }
      .mobile-menu-close { position: absolute; top: 24px; right: 24px; font-size: 30px; color: var(--rose); cursor: pointer; }
      .mobile-overlay { 
        position: fixed; inset: 0; background: rgba(0,0,0,0.8); z-index: 2500; 
        opacity: 0; pointer-events: none; transition: opacity 0.4s; 
      }
      .mobile-overlay.active { opacity: 1; pointer-events: auto; }
    }
    
    .mobile-toggle { display: none; }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  @include('partials.navbar')

  <!-- MOBILE MENU -->
  <div class="mobile-overlay" id="menuOverlay"></div>
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-close" id="menuClose">✕</div>
    <a href="/">Home</a>
    <a href="/?page=salon">Salon</a>
    <a href="/clinic" class="active">Clinic</a>
    <a href="/lhr">LHR</a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <canvas class="particles-canvas" id="particles"></canvas>
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1>Our Clinic<br><em>Services</em></h1>
      <p>Clinically-proven, permanent hair reduction using the most advanced FDA-grade laser technology. Safe for all Indian skin types. Zero downtime.</p>
      <div class="hero-btns">
        <a href="#booking" class="btn-primary"><span>Book Free Consultation</span></a>
        <a href="#pricing" class="btn-outline">View Treatment Areas</a>
      </div>
    </div>
    <div class="hero-stats">
      <div class="stat-item">
        <span class="stat-num" data-target="95">0</span><span class="stat-num">%</span>
        <span class="stat-label">Hair Reduction</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="6">0</span>
        <span class="stat-label">Sessions Avg.</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="2000">0</span><span class="stat-num">+</span>
        <span class="stat-label">Happy Clients</span>
      </div>
    </div>

  </section>

  <!-- ADVANCED AESTHETIC TREATMENTS -->
  <section class="adv-treatments">
    <div class="section-header reveal">

      <h2>Advanced Aesthetic <em>Treatments</em></h2>
      <p>Our clinic provides clinically advanced aesthetic treatments performed with precision using medical-grade
        technologies. Each treatment is designed to target specific skin concerns while improving long-term skin health.
      </p>
    </div>

    <div class="treatments-grid reveal">

      <div class="treatment-box">
        <h3>Laser Hair Reduction</h3>
        <p>A scientifically proven solution for long-term reduction of unwanted hair. Uses controlled laser energy to
          target hair follicles safely and comfortably.</p>
      </div>

      <div class="treatment-box">
        <h3>Medi Facials</h3>
        <p>Medical-grade treatments formulated for dullness, acne, pigmentation, and early aging using clinical
          ingredients and dermatological protocols.</p>
      </div>

      <div class="treatment-box">
        <h3>IV Nutrient Therapy</h3>
        <p>Delivers essential vitamins, antioxidants, and hydration directly into the bloodstream to support skin glow,
          immunity, and overall wellness.</p>
      </div>

      <div class="treatment-box">
        <h3>Skin Boosters</h3>
        <p>Advanced injectable treatments that deeply hydrate, improve elasticity, and stimulate natural collagen
          production from within.</p>
      </div>

      <div class="treatment-box">
        <h3>Pigmentation Laser</h3>
        <p>Technology used to effectively reduce pigmentation concerns such as sun spots, uneven skin tone, and melasma
          while preserving healthy skin.</p>
      </div>

      <div class="treatment-box">
        <h3>Scar Treatment</h3>
        <p>Stimulates skin regeneration and collagen remodeling to help improve the appearance of acne scars, surgical
          scars, and texture irregularities.</p>
      </div>

      <div class="treatment-box">
        <h3>Microneedling</h3>
        <p>Collagen induction therapy using micro-precision needles to minimize pores, reduce scars, and enhance overall
          skin texture automatically.</p>
      </div>

      <div class="treatment-box">
        <h3>Anti-Ageing</h3>
        <p>Advanced non-surgical solutions including Botox and Dermal Fillers to restore facial volume, smooth out deep wrinkles, and refine natural contours.</p>
      </div>

    </div>
  </section>

  <!-- WHAT IS LHR -->
  <section class="what-lhr">
    <div class="lhr-text reveal-left">
      <h2>The Science of <em>Permanent</em> Smoothness</h2>
      <p>Our FDA-approved diode laser technology targets hair follicles with precision — delivering permanent hair reduction that is safe for all skin tones and all body areas.</p>
      <p>At Skinnovation, we use only internationally certified laser platforms proven safe and effective for Indian skin tones (Fitzpatrick III–VI). Advanced cooling technology ensures each session is comfortable — even in sensitive areas.</p>
      <div class="lhr-benefits">
        <div class="benefit-chip">Painless Technology</div>
        <div class="benefit-chip">All Skin Tones</div>
        <div class="benefit-chip">No Ingrowths</div>
        <div class="benefit-chip">Long-lasting Results</div>
        <div class="benefit-chip">Quick Sessions</div>
        <div class="benefit-chip">Medically Safe</div>
      </div>
    </div>
    <div class="lhr-image-wrap reveal-right">
      <img src="https://images.pexels.com/photos/3997987/pexels-photo-3997987.jpeg?auto=compress&cs=tinysrgb&w=800&q=95"
        alt="Laser Hair Reduction Technology" class="lhr-img-main">

    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="how-it-works">
    <div class="section-header reveal">
      <span class="section-tag">Our Process</span>
      <h2>Your Journey to <em>Silky Skin</em></h2>
    </div>
    <div class="steps-grid reveal">
      <div class="step-card">
        <div class="step-num">01</div>
        <div class="step-icon">🔍</div>
        <h3>Skin Analysis</h3>
        <p>Our certified dermatologist analyzes your Fitzpatrick skin type, hair texture, and density to customize a
          protocol.</p>
      </div>
      <div class="step-card">
        <div class="step-num">02</div>
        <div class="step-icon">🧴</div>
        <h3>Pre-Treatment Prep</h3>
        <p>Area is shaved, cleansed thoroughly, and a cooling gel is applied to protect the skin surface during the
          procedure.</p>
      </div>
      <div class="step-card">
        <div class="step-num">03</div>
        <div class="step-icon">⚡</div>
        <h3>Laser Application</h3>
        <p>FDA-grade laser pulses are delivered with built-in cooling. Each session targets follicles in the active
          growth phase.</p>
      </div>
      <div class="step-card">
        <div class="step-num">04</div>
        <div class="step-icon">✨</div>
        <h3>Post-Care & Follow-Up</h3>
        <p>Soothing treatment applied. We schedule your next session and guide you through a personalized aftercare
          routine.</p>
      </div>
    </div>
  </section>

  <!-- MACHINES / DEVICES -->
  <section class="machines">
    <div class="machines-intro reveal">
      <h2>Advanced <em>Laser</em> Devices</h2>
      <p>We invest in globally acclaimed technology platforms to deliver consistent, safe, and effective results for
        every skin type.</p>
    </div>
    <div class="machines-scroll reveal">
      <div class="machine-card">
        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=700&q=80" alt="Primelase HR"
          class="machine-img">
        <div class="machine-overlay">
        </div>
      </div>
      <div class="machine-card">
        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=700&q=80" alt="Clarity II"
          class="machine-img">
        <div class="machine-overlay">
        </div>
      </div>
      <div class="machine-card">
        <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=700&q=80" alt="Elysion Pro"
          class="machine-img">
        <div class="machine-overlay">
        </div>
      </div>
    </div>
  </section>



  <!-- SKIN TYPES -->
  <section class="skin-types">
    <div class="section-header reveal">

      <h2>Every Skin Tone, <em>Every Texture</em></h2>
    </div>
    <div class="skin-grid reveal">
      <div class="skin-card">
        <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=300&q=80" alt="Skin Type I">

      </div>
      <div class="skin-card">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?w=300&q=80" alt="Skin Type II">

      </div>
      <div class="skin-card">
        <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=300&q=80" alt="Skin Type III">

      </div>
      <div class="skin-card">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=300&q=80" alt="Skin Type IV">

      </div>
      <div class="skin-card">
        <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?w=300&q=80" alt="Skin Type V">

      </div>
      <div class="skin-card">
        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=300&q=80" alt="Skin Type VI">

      </div>
    </div>
  </section>



  <!-- WHY CHOOSE -->
  <section class="why-choose">
    <div class="why-image reveal-left">
      <img src="https://images.unsplash.com/photo-1614608682850-e0d6ed316d47?w=800&q=80" alt="Expert Dermatologist"
        class="why-img-main">

    </div>
    <div class="why-content reveal-right">
      <span class="section-tag">Why Skinnovation</span>
      <h2>Where <em>Science</em> Meets Beauty</h2>
      <div class="why-reasons">
        <div class="reason-item">
          <div class="reason-icon">🏥</div>
          <div class="reason-text">
            <h4>Board-Certified Dermatologists</h4>
            <p>Every session is supervised by certified skin specialists — not technicians. Your safety is our
              non-negotiable.</p>
          </div>
        </div>
        <div class="reason-item">
          <div class="reason-icon">⚡</div>
          <div class="reason-text">
            <h4>FDA-Approved Devices Only</h4>
            <p>We use only internationally certified laser platforms proven safe and effective for Indian skin tones
              (Fitzpatrick III–VI).</p>
          </div>
        </div>
        <div class="reason-item">
          <div class="reason-icon">🌡️</div>
          <div class="reason-text">
            <h4>Pain-Free with Cryo Cooling</h4>
            <p>Advanced cooling technology ensures a comfortable, painless experience — even in sensitive areas.</p>
          </div>
        </div>
        <div class="reason-item">
          <div class="reason-icon">📋</div>
          <div class="reason-text">
            <h4>Customized Protocols</h4>
            <p>No two skins are the same. We create a personalized treatment plan based on your unique skin analysis.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq">
    <div class="section-header reveal">
      <span class="section-tag">Have Questions?</span>
      <h2>Frequently Asked <em>Questions</em></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-q">Is laser hair reduction permanent? <div class="faq-icon">+</div></button>
        <div class="faq-a">Yes — with the recommended 6–8 sessions, you can achieve 90–95% permanent hair reduction. A
          few maintenance sessions per year may be needed for any regrowth, which will be finer and lighter.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Is it safe for Indian skin? <div class="faq-icon">+</div></button>
        <div class="faq-a">Absolutely. We use Nd:YAG and diode lasers specifically calibrated for Fitzpatrick skin types
          III–VI, which are predominant among Indian clients. Our dermatologists adjust parameters for each patient
          individually.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Does it hurt? <div class="faq-icon">+</div></button>
        <div class="faq-a">Most clients describe it as a slight warming sensation — like a rubber band snap. Our devices
          feature integrated cooling systems that minimize discomfort significantly, making sessions very comfortable.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">How many sessions will I need? <div class="faq-icon">+</div></button>
        <div class="faq-a">Most areas require 6–8 sessions spaced 4–6 weeks apart. Hair grows in cycles and each session
          targets follicles in the active (anagen) growth phase. Your doctor will advise based on your hair density.
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Is there any downtime? <div class="faq-icon">+</div></button>
        <div class="faq-a">Zero downtime. You can return to work and daily activities immediately after. Some temporary
        <div class="faq-item">
        <button class="faq-q">Can men get laser hair reduction? <div class="faq-icon">+</div></button>
        <div class="faq-a">Yes, absolutely. We treat men for beard shaping, chest, back, shoulders, and full-body hair
          reduction. The protocol is customized based on hair coarseness and desired outcomes.</div>
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
  <footer style="background: #0a0a0a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
    <div class="cnt">
      <div class="foot-grid">
        <div style="padding-right: 40px;">
          <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="location.href='/'">

            <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnovation</div>
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
    // ===== PARTICLES CANVAS =====
    const canvas = document.getElementById('particles');
    const ctx = canvas.getContext('2d');
    let particles = [];

    function resizeCanvas() {
      canvas.width = canvas.parentElement.offsetWidth;
      canvas.height = canvas.parentElement.offsetHeight;
    }

    class Particle {
      constructor() {
        this.reset();
      }
      reset() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = Math.random() * 2 + 0.5;
        this.speedX = (Math.random() - 0.5) * 0.4;
        this.speedY = -Math.random() * 0.5 - 0.2;
        this.opacity = Math.random() * 0.4 + 0.1;
        this.life = 0;
        this.maxLife = Math.random() * 200 + 100;
      }
      update() {
        this.x += this.speedX;
        this.y += this.speedY;
        this.life++;
        if (this.life > this.maxLife || this.y < 0) this.reset();
      }
      draw() {
        ctx.save();
        ctx.globalAlpha = this.opacity * (1 - this.life / this.maxLife);
        ctx.fillStyle = '#c9a08a';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();
      }
    }

    function initParticles() {
      particles = [];
      for (let i = 0; i < 60; i++) {
        const p = new Particle();
        p.life = Math.random() * p.maxLife;
        particles.push(p);
      }
    }

    function animateParticles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      particles.forEach(p => { p.update(); p.draw(); });
      requestAnimationFrame(animateParticles);
    }

    resizeCanvas();
    initParticles();
    animateParticles();
    window.addEventListener('resize', () => { resizeCanvas(); initParticles(); });

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

    // ===== FAQ ACCORDION =====
    document.querySelectorAll('.faq-q').forEach(btn => {
      btn.addEventListener('click', () => {
        const item = btn.parentElement;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
      });
    });

    // ===== COUNT UP ANIMATION =====
    function countUp(el, target, duration = 2000) {
      const start = performance.now();
      const update = (time) => {
        const elapsed = time - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.floor(eased * target);
        if (progress < 1) requestAnimationFrame(update);
        else el.textContent = target;
      };
      requestAnimationFrame(update);
    }

    const countObserver = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          const target = parseInt(e.target.dataset.target);
          countUp(e.target, target);
          countObserver.unobserve(e.target);
        }
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-target]').forEach(el => countObserver.observe(el));

    // ===== NAVBAR SCROLL =====
    window.addEventListener('scroll', () => {
      const nav = document.querySelector('nav');
      if (window.scrollY > 50) {
        nav.style.borderBottomColor = 'rgba(201,160,138,0.3)';
      } else {
        nav.style.borderBottomColor = 'rgba(201,160,138,0.2)';
      }
    });

    // ===== SMOOTH PARALLAX ON HERO BG =====
    window.addEventListener('scroll', () => {
      const heroBg = document.querySelector('.hero-bg');
      const scrolled = window.scrollY;
      if (heroBg && scrolled < window.innerHeight) {
        heroBg.style.transform = `scale(1) translateY(${scrolled * 0.3}px)`;
      }
    });
    // ===== MOBILE MENU TOGGLE =====
    const menuOpen = document.getElementById('menuOpen');
    const menuClose = document.getElementById('menuClose');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');

    if (menuOpen && menuClose && mobileMenu && menuOverlay) {
      function toggleMenu(show) {
        mobileMenu.classList.toggle('active', show);
        menuOverlay.classList.toggle('active', show);
        document.body.style.overflow = show ? 'hidden' : '';
      }

      menuOpen.addEventListener('click', () => toggleMenu(true));
      menuClose.addEventListener('click', () => toggleMenu(false));
      menuOverlay.addEventListener('click', () => toggleMenu(false));
    }
  </script>
</body>

</html>