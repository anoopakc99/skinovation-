@extends('layouts.app')

@section('content')
  <!-- ===============================================================
         HOME PAGE
    =============================================================== -->
  <div id="page-home" class="page active">

    <!-- CIRCULAR SPLIT HERO -->
    <section id="hero-slider">
      <!-- Split Backgrounds -->
      <div class="hero-bg hero-bg-clinic"></div>
      <div class="hero-bg hero-bg-salon"></div>
      <div class="hero-overlay"></div>

      <div class="hero-circle-container">

        <!-- LEFT: CLINIC (White) -->
        <div class="circle-half circle-clinic" onclick="showPage('clinic')">
          <h1 class="ch-heading">Explore<br>Clinic</h1>
        </div>

        <!-- RIGHT: SALON (Black) -->
        <div class="circle-half circle-salon" onclick="showPage('salon')">
          <h1 class="ch-heading">Explore<br>Salon</h1>
        </div>

      </div>

      <!-- Scroll hint -->
      <div class="hero-scroll">
        <div class="scroll-bar"></div>

      </div>
    </section>

    <!-- TICKER -->
    <!--<div id="ticker-strip">-->
    <!--  <div class="ticker-inner">-->
    <!--    <span>✦</span> Laser Hair Reduction &nbsp;<span>✦</span>&nbsp; Korean Head Spa &nbsp;<span>✦</span>&nbsp; Medi Facials &nbsp;<span>✦</span>&nbsp; Skin Boosters &nbsp;<span>✦</span>&nbsp; IV Nutrient Therapy &nbsp;<span>✦</span>&nbsp; Microneedling &nbsp;<span>✦</span>&nbsp; Hair Treatments &nbsp;<span>✦</span>&nbsp; Lucknow · U.P. &nbsp;&nbsp;&nbsp;-->
    <!--    <span>✦</span> Laser Hair Reduction &nbsp;<span>✦</span>&nbsp; Korean Head Spa &nbsp;<span>✦</span>&nbsp; Medi Facials &nbsp;<span>✦</span>&nbsp; Skin Boosters &nbsp;<span>✦</span>&nbsp; IV Nutrient Therapy &nbsp;<span>✦</span>&nbsp; Microneedling &nbsp;<span>✦</span>&nbsp; Hair Treatments &nbsp;<span>✦</span>&nbsp; Lucknow · U.P. &nbsp;&nbsp;&nbsp;-->
    <!--  </div>-->
    <!--</div>-->

    <!-- SKIN TREATMENTS SECTION (Moved to top) -->
    <section id="skin-treatments-home">
      <div class="cnt">
        <div class="sth-grid rv">
          <div class="sth-left">
            {{-- <span class="sth-tag">✦ Clinic Signature</span> --}}
            <h2 class="sth-h">Best Skin Treatments<br><em>&amp; Medifacials</em></h2>
            <p class="sth-sub-line">for Every Concern</p>
            <div class="sth-line"></div>
            <p class="sth-p">From pigmentation to acne, ageing to dullness — our clinically proven medifacials and
              advanced treatments are tailored to your unique skin concern. Science-backed. Dermatologist-curated.</p>
            <div class="sth-pills">
              <span class="sth-pill">Pigmentation Laser</span>
              <span class="sth-pill">Medi Facials</span>
              <span class="sth-pill">Skin Boosters</span>
              <span class="sth-pill">Microneedling</span>
              <span class="sth-pill">IV Nutrient Therapy</span>
              <span class="sth-pill">Anti-Ageing</span>
            </div>
            <a class="btn-skin sth-btn" onclick="showPage('clinic')" style="cursor:pointer">Visit Explore Clinic</a>
          </div>
          <div class="sth-right rv d2">
            <div class="sth-visual">
              <div class="sth-img sth-img-1">
                <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=900&q=95&fit=crop"
                  alt="Skin Treatment"
                  onerror="this.src='https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=700&q=90&fit=crop'">
              </div>
              <div class="sth-img sth-img-2">
                <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&q=90&fit=crop"
                  alt="Medi Facial">
              </div>
              <div class="sth-img sth-img-3">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=500&q=90&fit=crop"
                  alt="Skin Booster">
              </div>
              <div class="sth-accent-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LHR HOME SECTION -->
    <section id="lhr-home">
      <div class="lhr-home-grid">
        <div class="lhr-img-col rv" style="--lhrHomeImg: url('{{ asset('images/lhr-home.png') }}');">
          <img src="{{ asset('images/lhr-home.png') }}" alt="Laser Hair Reduction Treatment">
          <div class="lhr-img-grad"></div>
        </div>
        <div class="lhr-txt rv d2">
          {{-- <div class="lhr-live">
            <div class="dot"></div><span>Clinic Signature Treatment</span>
          </div> --}}
          <h2 class="lhr-h">Laser Hair<br><em>Reduction</em></h2>
          <p class="lhr-p" style="margin-bottom: 24px;">Laser Hair Reduction is a scientifically proven solution for
            long-term reduction of unwanted hair. The treatment uses controlled laser energy to target hair follicles,
            gradually reducing hair growth while maintaining skin safety and comfort.</p>
          <p class="lhr-p">Powered by state-of-the-art FDA-approved technology, we ensure pain-free sessions that are
            proven safe and highly effective for all Indian skin types, delivering permanent results with zero downtime.
          </p>
          <div class="lhr-btns">
            <a class="btn-skin" onclick="openLHR()">Explore LHR in Detail →</a>
            <a href="https://wa.me/919140971129?text=I+want+to+book+an+LHR+session" target="_blank" class="btn-ghost">Book
              Session</a>
          </div>
        </div>
      </div>
    </section>


    <!-- KHS STRIP (LAST ON HOMEPAGE) -->
    <section id="khs-strip">
      <div class="cnt">
        <div class="khs-box rv">
          <div class="khs-img">
            <img src="{{ asset('images/korean-head-spa.jpg') }}" alt="Korean Head Spa" loading="lazy">
          </div>
          <div class="khs-txt">
            <span class="khs-sub">Salon ·</span>
            <h2 class="khs-h">Korean<br><em>Head Spa</em></h2>
            <p class="khs-p">Our Korean Head Spa is a multi-step journey that deeply detoxifies the scalp, boosts blood
              circulation, relieves stress, and nourishes every strand.</p>
            <div class="khs-feats" style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px;">
              <div class="kf" style="font-size:12.5px;">1. Scalp consultation & diagnosis</div>
              <div class="kf" style="font-size:12.5px;">2. Brushing & scalp exfoliation</div>
              <div class="kf" style="font-size:12.5px;">3. Scalp cleansing shampoo</div>
              <div class="kf" style="font-size:12.5px;">4. Water therapy (jet or flow rinse)</div>
              <div class="kf" style="font-size:12.5px;">5. Detox scalp mask or clay</div>
            </div>
            <p
              style="font-size: 13px; line-height: 1.6; color: rgba(0,0,0,0.55); margin-bottom: 28px; font-style: italic;">
              "This treatment isn’t just about hair — it’s about self-care, relaxation, and glowing confidence from scalp
              to soul."</p>
            <a onclick="showPage('salon')" class="btn-bd" style="cursor:pointer">Explore More</a>
          </div>
        </div>
      </div>
    </section>

    {{-- HOME BOOKING FORM — exact copy of salon page form --}}
    <section id="booking" style="padding: 80px 20px; background: #1a1a1a;">
      <div style="max-width: 640px; margin: 0 auto;">
        <div style="
          position: relative; text-align: center; margin: 0 auto; max-width: 640px;
          padding: 56px 48px 52px;
          background: rgba(255,255,255,0.05);
          border: 1px solid rgba(255,255,255,0.1);
          border-radius: 16px;
          backdrop-filter: blur(10px);
          box-shadow: 0 28px 60px rgba(0,0,0,0.12);
        ">
          {{-- Decoration rings --}}
          <div style="display:flex; justify-content:center; margin: 0 auto 28px; pointer-events:none; opacity:0.9;">
            <div style="width:70px;height:70px;border:1px solid rgba(212,181,160,0.22);border-radius:50%;display:flex;align-items:center;justify-content:center;">
              <div style="width:50px;height:50px;border:1px solid rgba(212,181,160,0.4);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                <div style="width:30px;height:30px;border:1.5px solid rgba(212,181,160,0.78);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M3 3V21L9 15L11 20L13 19L11 14L18 14L3 3Z" fill="#d4b5a0" stroke="#1a1a1a" stroke-width="0.4"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          {{-- Heading --}}
          <div style="margin-bottom:36px;">
            <h2 style="font-family:'Cormorant Garamond','Playfair Display',serif; font-size:clamp(32px,4vw,42px); font-weight:300; color:#ffffff; line-height:1.1; margin:0 0 6px;">Begin Your</h2>
            <h2 style="font-family:'Cormorant Garamond','Playfair Display',serif; font-size:clamp(32px,4vw,42px); font-weight:300; line-height:1.1; margin:0 0 18px;"><em style="font-style:italic; color:#d4ba95;">Transformation</em></h2>
            <p style="font-family:'Jost','Inter',sans-serif; font-size:13px; line-height:1.75; color:rgba(255,255,255,0.55); max-width:460px; margin:0 auto; font-weight:300;">
              Our expert team will confirm your appointment and guide you to the best treatment for your unique needs.
            </p>
          </div>

          {{-- Form --}}
          <form id="apptFormHome" data-context="general" style="text-align:left;"
            onsubmit="(function(e){e.preventDefault();var f=document.getElementById('apptFormHome');var n=f.querySelector('input[name=name]').value;var p=f.querySelector('input[name=phone]').value;var msg='Hello, I want to book an appointment.%0AName: '+encodeURIComponent(n)+'%0APhone: '+encodeURIComponent(p);window.open('https://wa.me/919140971129?text='+msg,'_blank');})(event);">
            <p style="color:#c9a87c; font-size:11px; letter-spacing:0.2em; text-transform:uppercase; margin-bottom:22px; font-family:'Jost','Inter',sans-serif; font-weight:500;">Request Appointment</p>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px 20px; margin-bottom:24px;">
              <div>
                <label for="apptFormHome_name" style="color:rgba(255,255,255,0.45); font-size:10px; letter-spacing:0.12em; text-transform:uppercase; display:block; margin-bottom:8px; font-family:'Jost','Inter',sans-serif;">Full Name</label>
                <input id="apptFormHome_name" name="name" type="text" autocomplete="name" placeholder="Your Name" required
                  style="width:100%; background:transparent; border:none; border-bottom:1px solid rgba(255,255,255,0.22); color:#fff; font-size:14px; padding:12px 4px; outline:none; font-family:'Jost','Inter',sans-serif; font-weight:300;"
                  onfocus="this.style.borderBottomColor='#c9a87c'" onblur="this.style.borderBottomColor='rgba(255,255,255,0.22)'">
              </div>
              <div>
                <label for="apptFormHome_phone" style="color:rgba(255,255,255,0.45); font-size:10px; letter-spacing:0.12em; text-transform:uppercase; display:block; margin-bottom:8px; font-family:'Jost','Inter',sans-serif;">Phone</label>
                <input id="apptFormHome_phone" name="phone" type="tel" autocomplete="tel" placeholder="+91 00000 00000" required
                  style="width:100%; background:transparent; border:none; border-bottom:1px solid rgba(255,255,255,0.22); color:#fff; font-size:14px; padding:12px 4px; outline:none; font-family:'Jost','Inter',sans-serif; font-weight:300;"
                  onfocus="this.style.borderBottomColor='#c9a87c'" onblur="this.style.borderBottomColor='rgba(255,255,255,0.22)'">
              </div>
            </div>
            <button type="submit" style="
              width:100%; background:#c9a87c; color:#ffffff; border:none;
              padding:16px 20px; cursor:pointer; font-size:11px; letter-spacing:0.25em;
              text-transform:uppercase; font-family:'Jost','Inter',sans-serif; font-weight:500;
              display:flex; align-items:center; justify-content:center; gap:8px;
              transition:background 0.25s, transform 0.2s; border-radius:2px;
            " onmouseover="this.style.background='#b89572'" onmouseout="this.style.background='#c9a87c'">
              Book Appointment <span aria-hidden="true">→</span>
            </button>
          </form>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer style="background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
      <div class="cnt">
        <div class="foot-grid">
          <div style="padding-right: 40px;">
            <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;"
              onclick="showPage('home')">
              <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnovation</div>
            </div>
            <p class="foot-p"
              style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">
              Skinnovation premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
            <div class="fsoc">
              <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link"
                style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
                <div
                  style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                  </svg>
                </div>
                <span>Follow on Instagram</span>
              </a>
            </div>
          </div>
          <div class="fc">
            <h4>Clinic</h4>
            <ul>
              <li><a onclick="openLHR()">Laser Hair Reduction</a></li>
              <li><a onclick="showPage('clinic')">Medi Facials</a></li>
              <li><a onclick="showPage('clinic')">Skin Boosters</a></li>
              <li><a onclick="showPage('clinic')">IV Therapy</a></li>
              <li><a onclick="showPage('clinic')">Microneedling</a></li>
            </ul>
          </div>
          <div class="fc">
            <h4>Salon</h4>
            <ul>
              <li><a onclick="showPage('salon')">Korean Head Spa</a></li>
              <li><a onclick="showPage('salon')">Hair Spa</a></li>
              <li><a onclick="showPage('salon')">Smoothening</a></li>
              <li><a onclick="showPage('salon')">Styling & Cuts</a></li>
              <li><a onclick="showPage('salon')">Color & Balayage</a></li>
            </ul>
          </div>
        </div>
        <div class="foot-bot">
          <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
          <span>Designed & Developed By <a href="http://trivoraconsultancy.com/" target="_blank"
              style="color:var(--skin-lt); text-decoration:none; font-weight: 500; transition: opacity 0.2s;"
              onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
        </div>
      </div>
    </footer>
  </div><!-- /page-home -->


  <!-- ===============================================================
         LHR SECTION
    =============================================================== -->
  <div id="lhr-section">
    <div class="lhr-big-hero">
      <div class="lhr-big-bg"></div>
      <div class="lhr-big-ov"></div>
      <div class="lhr-big-cnt">
        <button class="sp-back" onclick="closeLHR()">Back</button>

        <h1 class="sp-title">Laser<br><em>Hair</em><br>Reduction</h1>
        <p class="sp-desc">The gold-standard in permanent hair reduction. FDA-grade technology, zero downtime, clinically
          proven results for all Indian skin types.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="https://wa.me/919140971129?text=I+want+to+book+an+LHR+session" target="_blank" class="btn-skin">Book
            LHR Session</a>
          <a href="tel:+919140971129" class="btn-ghost">Call Us</a>
        </div>
      </div>
      <div class="sp-pgnum">LHR</div>
    </div>

    <div style="background:var(--black);">
      <div class="lhr-details">
        <div class="lhr-2col">
          <div class="lhr-block rv">
            <h3>Why Choose <em>Skinnovation</em> for LHR?</h3>
            <div class="lhr-list">
              <div class="lhr-li">
                <div class="lhr-li-ic">✦</div>
                <p><strong style="color:rgba(255,255,255,0.82)">FDA-Grade Diode & Nd:YAG Lasers</strong> — Medical-class
                  technology trusted by dermatology clinics worldwide.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">✦</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Safe for All Indian Skin Tones</strong> — Calibrated for
                  Fitzpatrick III–VI skin types common in Lucknow.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">✦</div>
                <p><strong style="color:rgba(255,255,255,0.82)">90% Permanent Reduction</strong> — Clinically documented
                  permanent results in 6–8 sessions.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">✦</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Zero Downtime Protocol</strong> — Resume your daily
                  routine immediately after every session.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">✦</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Certified Aesthetic Practitioners</strong> — Every session
                  supervised by trained clinical professionals.</p>
              </div>
            </div>
          </div>
          <div class="lhr-block rv d2">
            <h3>What to <em>Expect</em> at Each Session</h3>
            <div class="lhr-list">
              <div class="lhr-li">
                <div class="lhr-li-ic">1</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Skin Assessment</strong> — Fitzpatrick grading and hair
                  density analysis before each session.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">2</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Cooling Gel Application</strong> — Medical-grade cooling
                  for comfort and skin protection.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">3</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Laser Pass</strong> — Precise pulses targeting hair
                  follicles with controlled fluence settings.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">4</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Post-Cooling & Soothing</strong> — Immediate post-care
                  with aloe and calming agents.</p>
              </div>
              <div class="lhr-li">
                <div class="lhr-li-ic">5</div>
                <p><strong style="color:rgba(255,255,255,0.82)">Homecare Kit</strong> — Personalized aftercare
                  instructions and SPF guidance.</p>
              </div>
            </div>
          </div>
        </div>

        <h2 class="lhr-zones-h rv">Treatment <em>Zones</em></h2>

        <!-- Visual image strip -->
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-bottom:52px;" class="rv">
          <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=500&q=90&fit=crop"
            style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="LHR treatment">
          <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=500&q=90&fit=crop"
            style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="Skin clinic">
          <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&q=90&fit=crop"
            style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="Aesthetic clinic">
          <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=500&q=90&fit=crop"
            style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="Laser treatment">
        </div>

        <div class="lhr-zones rv">
          <div class="lhr-zone">
            <div class="lhr-zone-ic">💪</div>
            <h4>Full Arms</h4>
            <p>Upper & lower arms</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">🦵</div>
            <h4>Full Legs</h4>
            <p>Thighs, shins & ankles</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">👙</div>
            <h4>Bikini Line</h4>
            <p>Precision zone</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">🧖</div>
            <h4>Underarms</h4>
            <p>Fast & effective</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">😊</div>
            <h4>Face & Chin</h4>
            <p>Upper lip, sideburns</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">🔙</div>
            <h4>Back & Chest</h4>
            <p>Full area treatment</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">🤲</div>
            <h4>Hands & Feet</h4>
            <p>Fingers & toes</p>
          </div>
          <div class="lhr-zone">
            <div class="lhr-zone-ic">✨</div>
            <h4>Full Body</h4>
            <p>Complete packages</p>
          </div>
        </div>

        <h2 class="lhr-proc-title rv">Your <em>LHR Journey</em></h2>
        <div class="lhr-proc rv">
          <div class="lhr-ps">
            <div class="lhr-psn">1</div>
            <h4>Consultation</h4>
            <p>Free skin & hair assessment</p>
          </div>
          <div class="lhr-ps">
            <div class="lhr-psn">2</div>
            <h4>Patch Test</h4>
            <p>Safety test on skin type</p>
          </div>
          <div class="lhr-ps">
            <div class="lhr-psn">3</div>
            <h4>Sessions</h4>
            <p>6–8 sessions, 4–6 wks apart</p>
          </div>
          <div class="lhr-ps">
            <div class="lhr-psn">4</div>
            <h4>Review</h4>
            <p>Progress monitored each visit</p>
          </div>
          <div class="lhr-ps">
            <div class="lhr-psn">5</div>
            <h4>Maintenance</h4>
            <p>Yearly top-up if needed</p>
          </div>
        </div>
      </div><!-- /lhr-details -->
    </div><!-- /black wrapper -->

    @include('partials.appointment-form', [
        'sectionId' => 'booking-lhr',
        'formId' => 'apptFormLhrHome',
        'context' => 'lhr',
        'variant' => 'ink',
    ])

    <div class="skin-cta rv" style="background:#1a1a1a; border-top: 1px solid rgba(255,255,255,0.05);">
      <h3>Ready for <em>Permanent</em> Hair Freedom?</h3>
      <div class="cta-btns">
        <a href="https://wa.me/919140971129?text=I+want+to+book+an+LHR+session" target="_blank" class="btn-wh">Book LHR
          Session</a>
        <button class="btn-ow" onclick="closeLHR()">← Back to Home</button>
      </div>
    </div>
  </div><!-- /lhr-section -->


  <!-- ===============================================================
         SALON PAGE
    =============================================================== -->
  <div id="page-salon" class="page">
    <div class="salon-wrapper">
      <!-- HERO -->
      <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content container">
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
              <a href="#booking-salon" class="btn-rosegold">Explore More <span>→</span></a>
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
          <div class="section-cta"><a href="#booking-salon" class="btn-outline">Book Appointment <span>›</span></a></div>
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
          <div class="section-cta"><a href="#booking-salon" class="btn-outline">Book Appointment <span>›</span></a></div>
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
          <div class="section-cta"><a href="#booking-salon" class="btn-outline">Book Appointment <span>›</span></a></div>
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
          <div class="section-cta"><a href="#booking-salon" class="btn-outline">Book Appointment <span>›</span></a></div>
        </div>
      </section>

      @include('partials.appointment-form', [
          'sectionId' => 'booking-salon',
          'formId' => 'apptFormSalonHome',
          'context' => 'salon',
          'variant' => 'dark',
      ])

    </div>


    <script>
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

    <!-- FOOTER -->
    <footer style="background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
      <div class="cnt">
        <div class="foot-grid">
          <div style="padding-right: 40px;">
            <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;"
              onclick="showPage('home')">
              <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnovation</div>
            </div>
            <p class="foot-p"
              style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">
              Skinnovation premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
            <div class="fsoc">
              <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link"
                style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
                <div
                  style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                  </svg>
                </div>
                <span>Follow on Instagram</span>
              </a>
            </div>
          </div>
          <div class="fc">
            <h4>Clinic</h4>
            <ul>
              <li><a onclick="openLHR()">Laser Hair Reduction</a></li>
              <li><a onclick="showPage('clinic')">Medi Facials</a></li>
              <li><a onclick="showPage('clinic')">Skin Boosters</a></li>
              <li><a onclick="showPage('clinic')">IV Therapy</a></li>
              <li><a onclick="showPage('clinic')">Microneedling</a></li>
            </ul>
          </div>
          <div class="fc">
            <h4>Salon</h4>
            <ul>
              <li><a onclick="showPage('salon')">Korean Head Spa</a></li>
              <li><a onclick="showPage('salon')">Hair Spa</a></li>
              <li><a onclick="showPage('salon')">Smoothening</a></li>
              <li><a onclick="showPage('salon')">Styling & Cuts</a></li>
              <li><a onclick="showPage('salon')">Color & Balayage</a></li>
            </ul>
          </div>
        </div>
        <div class="foot-bot">
          <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
          <span>Designed & Developed By <a href="http://trivoraconsultancy.com/" target="_blank"
              style="color:var(--skin-lt); text-decoration:none; font-weight: 500; transition: opacity 0.2s;"
              onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
        </div>
      </div>
    </footer>
  </div><!-- /page-salon -->


  <!-- ===============================================================
         CLINIC PAGE
    =============================================================== -->
  <div id="page-clinic" class="page">

    <div class="sp-hero">
      <div class="sp-hero-bg"
        style="background-image:url('https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=1920&q=95&fit=crop'),linear-gradient(#0a0a0a,#1a1a1a);">
      </div>
      <div class="sp-hero-ov"></div>
      <div class="sp-hero-cnt">
        <button class="sp-back" onclick="showPage('home')">Home</button>
        <span class="sp-etag">Our Clinic Services</span>
        <h1 class="sp-title">Our Clinic<br><em>Services</em></h1>
        <p class="sp-desc">Medical-grade aesthetic treatments backed by dermatological science. FDA lasers, clinical
          facials, skin boosters — all tailored for Lucknow's skin.</p>
        <a class="btn-skin" onclick="openLHR()" style="cursor:pointer">Our #1 Treatment: LHR →</a>
      </div>
      <div class="sp-pgnum">02</div>
    </div>

    <!-- LHR Highlight -->
    <div class="lhr-highlight sp-white">
      <div class="sp-cnt">
        <div class="lhr-hl-grid rv">
          <div class="lhr-hl-img">
            <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=1000&q=95&fit=crop"
              alt="LHR Treatment"
              onerror="this.src='https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800&q=90&fit=crop'">
          </div>
          <div class="lhr-hl-txt">

            <h2 class="section-heading-dark">Laser Hair<br><em>Reduction</em></h2>
            <p class="section-p-dark">Most-requested treatment at Skinnovation — a rare blend of medical precision and
              artistic care. FDA-grade, permanent results for all skin types.</p>
            <a class="btn-bd" onclick="openLHR()" style="cursor:pointer;width:fit-content">Explore Full LHR Details →</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Clinic Services -->
    <section class="sp-sec sp-dark">
      <div class="sp-cnt">
        <div class="sp-sec-head rv">
          <div><span class="sp-sec-lbl">Our Clinic Services</span>
            <h2 class="sp-sec-h" style="color:var(--white)">Our Clinic<br><em>Services</em></h2>
          </div>
          <div>
            <p class="sp-sec-note">Science-backed treatments for lasting skin transformation.</p><a
              href="https://wa.me/919140971129?text=I+want+to+book+a+clinic+consultation" target="_blank" class="btn-skin"
              style="margin-top:16px;display:inline-block">Free Consultation</a>
          </div>
        </div>
        <div class="grid-3 grid-3-d rv">
          <div class="scard scard-d" onclick="openLHR()">
            <div class="scard-num">01</div>
            <h3 class="scard-h scard-hd">Laser Hair Reduction</h3>
            <p class="scard-p scard-pd">FDA-grade permanent hair reduction. Safe for all Indian skin types. 90% reduction
              in 6–8 sessions.</p>
            <div class="tag-row"><span class="ctag">Most Popular</span><span class="ctag">Permanent</span></div>
          </div>
          <div class="scard scard-d">
            <div class="scard-num">02</div>
            <h3 class="scard-h scard-hd">Advanced Medi Facials</h3>
            <p class="scard-p scard-pd">Medical-grade facials targeting pigmentation, acne, texture and skin quality.</p>
            <div class="tag-row"><span class="ctag">Clinical</span><span class="ctag">All Skin</span></div>
          </div>
          <div class="scard scard-d">
            <div class="scard-num">03</div>
            <h3 class="scard-h scard-hd">Skin Boosters</h3>
            <p class="scard-p scard-pd">Hyaluronic acid delivery for deep hydration, elasticity and lasting luminosity.
            </p>
            <div class="tag-row"><span class="ctag">Hydration</span><span class="ctag">Anti-Aging</span></div>
          </div>
          <div class="scard scard-d">
            <div class="scard-num">04</div>
            <h3 class="scard-h scard-hd">IV Nutrient Therapy</h3>
            <p class="scard-p scard-pd">Intravenous vitamin and antioxidant drips for radiant skin and total wellness.</p>
            <div class="tag-row"><span class="ctag">Wellness</span><span class="ctag">Glow</span></div>
          </div>
          <div class="scard scard-d">
            <div class="scard-num">05</div>
            <h3 class="scard-h scard-hd">Pigmentation Laser</h3>
            <p class="scard-p scard-pd">Precision laser for melasma, sunspots, post-acne marks and uneven skin tone.</p>
            <div class="tag-row"><span class="ctag">Laser</span><span class="ctag">Even Tone</span></div>
          </div>
          <div class="scard scard-d">
            <div class="scard-num">06</div>
            <h3 class="scard-h scard-hd">Microneedling & Scars</h3>
            <p class="scard-p scard-pd">Collagen-induction for acne scars, pores, fine lines and skin rejuvenation.</p>
            <div class="tag-row"><span class="ctag">Collagen</span><span class="ctag">Anti-Scar</span></div>
          </div>
        </div>
      </div>
    </section>

    @include('partials.appointment-form', [
        'sectionId' => 'booking-clinic',
        'formId' => 'apptFormClinicHome',
        'context' => 'clinic',
        'variant' => 'ink',
        'extras' => '<a class="skin-appt-back bk-back-btn" onclick="showPage(\'home\')">← Back to Home</a>',
    ])
    <!-- CLINIC FOOTER -->
    <footer style="background: #1a1a1a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
      <div class="cnt">
        <div class="foot-grid">
          <div style="padding-right: 40px;">
            <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;"
              onclick="showPage('home')">
              <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnovation</div>
            </div>
            <p class="foot-p"
              style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">
              Skinnovation premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
            <div class="fsoc">
              <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link"
                style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
                <div
                  style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                  </svg>
                </div>
                <span>Follow on Instagram</span>
              </a>
            </div>
          </div>
          <div class="fc">
            <h4>Clinic</h4>
            <ul>
              <li><a onclick="openLHR()">Laser Hair Reduction</a></li>
              <li><a onclick="showPage('clinic')">Medi Facials</a></li>
              <li><a onclick="showPage('clinic')">Skin Boosters</a></li>
              <li><a onclick="showPage('clinic')">IV Therapy</a></li>
              <li><a onclick="showPage('clinic')">Microneedling</a></li>
            </ul>
          </div>
          <div class="fc">
            <h4>Salon</h4>
            <ul>
              <li><a onclick="showPage('salon')">Korean Head Spa</a></li>
              <li><a onclick="showPage('salon')">Hair Spa</a></li>
              <li><a onclick="showPage('salon')">Smoothening</a></li>
              <li><a onclick="showPage('salon')">Styling & Cuts</a></li>
              <li><a onclick="showPage('salon')">Color & Balayage</a></li>
            </ul>
          </div>
        </div>
        <div class="foot-bot">
          <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
          <span>Designed & Developed By <a href="http://trivoraconsultancy.com/" target="_blank"
              style="color:var(--skin-lt); text-decoration:none; font-weight: 500; transition: opacity 0.2s;"
              onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
        </div>
      </div>
    </footer>
  </div><!-- /page-clinic -->
@endsection