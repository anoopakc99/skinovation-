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
          <span class="ch-label">Medical Aesthetics</span>
          <h1 class="ch-heading">Explore<br>Clinic</h1>
        </div>

        <!-- RIGHT: SALON (Black) -->
        <div class="circle-half circle-salon" onclick="showPage('salon')">
          <span class="ch-label">Hair &amp; Beauty</span>
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
            <p class="sth-p">From pigmentation to acne, ageing to dullness — our clinically proven medifacials and advanced treatments are tailored to your unique skin concern. Science-backed. Dermatologist-curated.</p>
            <div class="sth-pills">
              <span class="sth-pill">Pigmentation Laser</span>
              <span class="sth-pill">Medi Facials</span>
              <span class="sth-pill">Skin Boosters</span>
              <span class="sth-pill">Microneedling</span>
              <span class="sth-pill">IV Nutrient Therapy</span>
              <span class="sth-pill">Anti-Ageing</span>
            </div>
            <a class="btn-skin sth-btn" onclick="showPage('clinic')" style="cursor:pointer">Learn More →</a>
          </div>
          <div class="sth-right rv d2">
            <div class="sth-visual">
              <div class="sth-img sth-img-1">
                <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=900&q=95&fit=crop" alt="Skin Treatment" onerror="this.src='https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=700&q=90&fit=crop'">
              </div>
              <div class="sth-img sth-img-2">
                <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&q=90&fit=crop" alt="Medi Facial">
              </div>
              <div class="sth-img sth-img-3">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=500&q=90&fit=crop" alt="Skin Booster">
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
        <div class="lhr-img-col rv">
          <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=1200&q=95&fit=crop" alt="Laser Hair Reduction Treatment" onerror="this.src='https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=900&q=90&fit=crop'">
          <div class="lhr-img-grad"></div>
        </div>
        <div class="lhr-txt rv d2">
          {{-- <div class="lhr-live"><div class="dot"></div><span>Clinic Signature Treatment</span></div> --}}
          <h2 class="lhr-h">Laser Hair<br><em>Reduction</em></h2>
          <p class="lhr-p" style="margin-bottom: 24px;">Laser Hair Reduction is a scientifically proven solution for long-term reduction of unwanted hair. The treatment uses controlled laser energy to target hair follicles, gradually reducing hair growth while maintaining skin safety and comfort.</p>
          <p class="lhr-p">Powered by state-of-the-art FDA-approved technology, we ensure pain-free sessions that are proven safe and highly effective for all Indian skin types, delivering permanent results with zero downtime.</p>
          <div class="lhr-why">
            <div class="lw"><h4>FDA-Grade Lasers</h4><p>Diode & Nd:YAG medical-class</p></div>
            <div class="lw"><h4>All Skin Types</h4><p>Safe for Fitzpatrick III–VI</p></div>
            <div class="lw"><h4>90% Reduction</h4><p>In 6–8 sessions</p></div>
            <div class="lw"><h4>Zero Downtime</h4><p>Resume routine same day</p></div>
          </div>
          <div class="lhr-btns">
            <a class="btn-skin" onclick="openLHR()">Explore LHR in Detail →</a>
            <a href="https://wa.me/919140971129?text=I+want+to+book+an+LHR+session" target="_blank" class="btn-ghost">Book Session</a>
          </div>
        </div>
      </div>
    </section>


    <!-- BOOKING -->
    <!-- BOOKING -->
    <section id="booking" style="padding: 100px 20px; background: var(--cream);">
      <div style="max-width: 650px; margin: 0 auto; background: #111; border-radius: 8px; overflow: hidden; box-shadow: 0 40px 80px rgba(0,0,0,0.2); color: #fff; padding: 60px 50px;">

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

    <!-- KHS STRIP (LAST ON HOMEPAGE) -->
    <section id="khs-strip">
      <div class="cnt">
        <div class="khs-box rv">
          <div class="khs-img">
            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=1000&q=95&fit=crop" alt="Korean Head Spa" onerror="this.src='https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=800&q=90&fit=crop'">
          </div>
          <div class="khs-txt">
            <span class="khs-sub">Salon ·</span>
            <h2 class="khs-h">Korean<br><em>Head Spa</em></h2>
            <p class="khs-p">A 90-minute scalp and hair wellness ritual inspired by K-beauty. Cleanse, massage, ampoule treatment, steam conditioning — the ultimate luxury hair experience.</p>
            <div class="khs-feats" style="max-height: 145px; overflow-y: auto; display: flex; flex-direction: column; gap: 10px; padding-right: 12px; margin-bottom: 20px;">
              <style>
                .khs-feats::-webkit-scrollbar { width: 3px; }
                .khs-feats::-webkit-scrollbar-track { background: rgba(0,0,0,0.03); }
                .khs-feats::-webkit-scrollbar-thumb { background: var(--rose); border-radius: 3px; }
              </style>
              <div class="kf" style="font-size:12.5px;">1. Scalp consultation & diagnosis</div>
              <div class="kf" style="font-size:12.5px;">2. Brushing & scalp exfoliation</div>
              <div class="kf" style="font-size:12.5px;">3. Scalp cleansing shampoo</div>
              <div class="kf" style="font-size:12.5px;">4. Water therapy (jet or flow rinse)</div>
              <div class="kf" style="font-size:12.5px;">5. Detox scalp mask or clay</div>
              <div class="kf" style="font-size:12.5px;">6. Vampire mask for face collagen</div>
              <div class="kf" style="font-size:12.5px;">7. Steam therapy</div>
              <div class="kf" style="font-size:12.5px;">8. Relaxing scalp massage</div>
              <div class="kf" style="font-size:12.5px;">9. Hair treatment ampoule</div>
              <div class="kf" style="font-size:12.5px;">10. Neck & shoulder massage</div>
              <div class="kf" style="font-size:12.5px;">11. Thick cream application</div>
              <div class="kf" style="font-size:12.5px;">12. Ultrasonic therapy on head/face</div>
              <div class="kf" style="font-size:12.5px;">13. Blow dry & styling</div>
              <div class="kf" style="font-size:12.5px;">14. Final serum + aftercare tips</div>
            </div>
            <p style="font-size: 13px; line-height: 1.6; color: rgba(0,0,0,0.55); margin-bottom: 28px; font-style: italic;">"This treatment isn’t just about hair — it’s about self-care, relaxation, and glowing confidence from scalp to soul."</p>
            <a onclick="showPage('salon')" class="btn-bd" style="cursor:pointer">Explore All Salon Services</a>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer style="background: #0a0a0a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
      <div class="cnt">
        <div class="foot-grid">
          <div style="padding-right: 40px;">
            <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="showPage('home')">
              <div style="width:24px; height:24px; border:1px solid #d4b5a0; border-radius:50%; position:relative;">
                <div style="width:4px; height:4px; background:#d4b5a0; border-radius:50%; position:absolute; top:2px; right:-1px;"></div>
              </div>
              <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnov<span>a</span>tion</div>
            </div>
            <p class="foot-p" style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">Lucknow's premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
            <div class="fsoc">
              <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link" style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
                <div style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </div>
                <span>Follow our story on Instagram</span>
              </a>
            </div>
          </div>
          <div class="fc"><h4>Clinic</h4><ul><li><a onclick="openLHR()">Laser Hair Reduction</a></li><li><a onclick="showPage('clinic')">Medi Facials</a></li><li><a onclick="showPage('clinic')">Skin Boosters</a></li><li><a onclick="showPage('clinic')">IV Therapy</a></li><li><a onclick="showPage('clinic')">Microneedling</a></li></ul></div>
          <div class="fc"><h4>Salon</h4><ul><li><a onclick="showPage('salon')">Korean Head Spa</a></li><li><a onclick="showPage('salon')">Hair Spa</a></li><li><a onclick="showPage('salon')">Smoothening</a></li><li><a onclick="showPage('salon')">Styling & Cuts</a></li><li><a onclick="showPage('salon')">Color & Balayage</a></li></ul></div>
          <div class="fc"><h4>Studio</h4><ul><li><a onclick="showPage('home')">About Us</a></li><li><a onclick="goBooking()">Book Appointment</a></li><li><a href="https://wa.me/919140971129" target="_blank">WhatsApp</a></li><li><a onclick="showPage('clinic')">Lucknow, U.P.</a></li></ul></div>
        </div>
        <div class="foot-bot">
          <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
          <span>Developed by <a href="http://trivoraconsultancy.com/" target="_blank" style="color:var(--skin-lt); text-decoration:none; font-weight: 500; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
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
        <p class="sp-desc">The gold-standard in permanent hair reduction. FDA-grade technology, zero downtime, clinically proven results for all Indian skin types.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="https://wa.me/919140971129?text=I+want+to+book+an+LHR+session" target="_blank" class="btn-skin">Book LHR Session</a>
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
            <div class="lhr-li"><div class="lhr-li-ic">✦</div><p><strong style="color:rgba(255,255,255,0.82)">FDA-Grade Diode & Nd:YAG Lasers</strong> — Medical-class technology trusted by dermatology clinics worldwide.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">✦</div><p><strong style="color:rgba(255,255,255,0.82)">Safe for All Indian Skin Tones</strong> — Calibrated for Fitzpatrick III–VI skin types common in Lucknow.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">✦</div><p><strong style="color:rgba(255,255,255,0.82)">90% Permanent Reduction</strong> — Clinically documented permanent results in 6–8 sessions.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">✦</div><p><strong style="color:rgba(255,255,255,0.82)">Zero Downtime Protocol</strong> — Resume your daily routine immediately after every session.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">✦</div><p><strong style="color:rgba(255,255,255,0.82)">Certified Aesthetic Practitioners</strong> — Every session supervised by trained clinical professionals.</p></div>
          </div>
        </div>
        <div class="lhr-block rv d2">
          <h3>What to <em>Expect</em> at Each Session</h3>
          <div class="lhr-list">
            <div class="lhr-li"><div class="lhr-li-ic">1</div><p><strong style="color:rgba(255,255,255,0.82)">Skin Assessment</strong> — Fitzpatrick grading and hair density analysis before each session.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">2</div><p><strong style="color:rgba(255,255,255,0.82)">Cooling Gel Application</strong> — Medical-grade cooling for comfort and skin protection.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">3</div><p><strong style="color:rgba(255,255,255,0.82)">Laser Pass</strong> — Precise pulses targeting hair follicles with controlled fluence settings.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">4</div><p><strong style="color:rgba(255,255,255,0.82)">Post-Cooling & Soothing</strong> — Immediate post-care with aloe and calming agents.</p></div>
            <div class="lhr-li"><div class="lhr-li-ic">5</div><p><strong style="color:rgba(255,255,255,0.82)">Homecare Kit</strong> — Personalized aftercare instructions and SPF guidance.</p></div>
          </div>
        </div>
      </div>

      <h2 class="lhr-zones-h rv">Treatment <em>Zones</em></h2>

      <!-- Visual image strip -->
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:8px;margin-bottom:52px;" class="rv">
        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=500&q=90&fit=crop" style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="LHR treatment">
        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=500&q=90&fit=crop" style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="Skin clinic">
        <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&q=90&fit=crop" style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="Aesthetic clinic">
        <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=500&q=90&fit=crop" style="width:100%;height:220px;object-fit:cover;filter:grayscale(100%);opacity:0.7;" alt="Laser treatment">
      </div>

      <div class="lhr-zones rv">
        <div class="lhr-zone"><div class="lhr-zone-ic">💪</div><h4>Full Arms</h4><p>Upper & lower arms</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">🦵</div><h4>Full Legs</h4><p>Thighs, shins & ankles</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">👙</div><h4>Bikini Line</h4><p>Precision zone</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">🧖</div><h4>Underarms</h4><p>Fast & effective</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">😊</div><h4>Face & Chin</h4><p>Upper lip, sideburns</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">🔙</div><h4>Back & Chest</h4><p>Full area treatment</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">🤲</div><h4>Hands & Feet</h4><p>Fingers & toes</p></div>
        <div class="lhr-zone"><div class="lhr-zone-ic">✨</div><h4>Full Body</h4><p>Complete packages</p></div>
      </div>

      <h2 class="lhr-proc-title rv">Your <em>LHR Journey</em></h2>
      <div class="lhr-proc rv">
        <div class="lhr-ps"><div class="lhr-psn">1</div><h4>Consultation</h4><p>Free skin & hair assessment</p></div>
        <div class="lhr-ps"><div class="lhr-psn">2</div><h4>Patch Test</h4><p>Safety test on skin type</p></div>
        <div class="lhr-ps"><div class="lhr-psn">3</div><h4>Sessions</h4><p>6–8 sessions, 4–6 wks apart</p></div>
        <div class="lhr-ps"><div class="lhr-psn">4</div><h4>Review</h4><p>Progress monitored each visit</p></div>
        <div class="lhr-ps"><div class="lhr-psn">5</div><h4>Maintenance</h4><p>Yearly top-up if needed</p></div>
      </div>
    </div><!-- /lhr-details -->
    </div><!-- /black wrapper -->

    <div class="skin-cta rv">
      <h3>Ready for <em>Permanent</em> Hair Freedom?</h3>
      <div class="cta-btns">
        <a href="https://wa.me/919140971129?text=I+want+to+book+an+LHR+session" target="_blank" class="btn-wh">Book LHR Session</a>
        <button class="btn-ow" onclick="closeLHR()">← Back to Home</button>
      </div>
    </div>
  </div><!-- /lhr-section -->


  <!-- ===============================================================
       SALON PAGE
  =============================================================== -->
  <div id="page-salon" class="page">

    <div class="sp-hero">
      <div class="sp-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1562322140-8baeececf3df?w=1920&q=95&fit=crop'),linear-gradient(#0a0a0a,#1a1a1a);"></div>
      <div class="sp-hero-ov"></div>
      <div class="sp-hero-cnt">
        <button class="sp-back" onclick="showPage('home')">Home</button>
        <span class="sp-etag">Our Salon Services</span>
        <h1 class="sp-title">Our Salon <em>Services</em></h1>
        <p class="sp-desc">A sanctuary of artistry. Korean Head Spa, precision cuts, creative colour, expert treatments — this is where hair becomes art.</p>
        <a href="#" onclick="return false;" class="btn-skin">View All Services ↓</a>
      </div>
      <div class="sp-pgnum">01</div>
    </div>

    <!-- KHS Feature -->
    <div class="khs-feature sp-dark">
      <div class="sp-cnt">
        <div class="khs-feature-grid">
          <div class="khs-fi rv">
            <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?w=1000&q=95&fit=crop" alt="Korean Head Spa" onerror="this.src='https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=800&q=90&fit=crop'">
          </div>
          <div class="rv d2">
            <span class="sp-etag">Our Salon Services</span>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(34px,4vw,54px);font-weight:300;color:var(--white);line-height:1.1;margin-bottom:18px;">Korean<br><em style="font-style:italic;color:var(--skin-lt)">Head Spa</em></h2>
            <div style="width:40px;height:1px;background:var(--skin);margin-bottom:18px;"></div>
            <p style="font-size:14px;line-height:1.8;color:rgba(255,255,255,0.5);font-weight:300;margin-bottom:24px;">Our Korean Head Spa is a multi-step journey that deeply detoxifies the scalp, boosts blood circulation, relieves stress, and nourishes every strand.</p>
            <div class="khs-steps" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:0px;margin-bottom:24px;">
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">1</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Scalp diagnosis</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">2</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Brushing & exfoliation</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">3</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Scalp cleansing</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">4</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Water therapy</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">5</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Detox scalp mask</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">6</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Vampire mask</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">7</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Steam therapy</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">8</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Scalp massage</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">9</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Hair treatment ampoule</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">10</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Neck & shoulder massage</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">11</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Thick cream application</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">12</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Ultrasonic therapy</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">13</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Blow dry & styling</h4></div></div>
              <div class="khs-step" style="align-items:center;margin-bottom:0;"><div class="khs-sn" style="width:22px;height:22px;font-size:11px;">14</div><div class="khs-stxt"><h4 style="margin:0;font-size:11.5px;">Final scalp serum</h4></div></div>
            </div>
            <p style="font-size:13.5px;line-height:1.7;color:rgba(255,255,255,0.7);font-weight:300;margin-bottom:28px;font-style:italic;">This treatment isn’t just about hair — it’s about self-care, relaxation, and glowing confidence from scalp to soul.</p>
            <a href="https://wa.me/919140971129?text=I+want+to+book+Korean+Head+Spa" target="_blank" class="btn-skin">Book Korean Head Spa</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Salon Departments Grid -->

    <!-- HAIR STUDIO -->
    <section class="s-dept rv">
      <div class="sp-cnt">
        <div class="s-dept-head">
          <div>
            <span class="s-dept-tag">Service Department</span>
            <h2 class="s-dept-h">Hair <em>Studio</em></h2>
            <p class="sp-sec-note-b" style="text-align:left; margin-top:12px; max-width:500px;">From classic cuts to bold colour transformations — our hair artists craft each look with precision, passion, and the finest products.</p>
          </div>
          <a href="https://wa.me/919140971129?text=I+want+to+book+a+hair+appointment" target="_blank" class="btn-bk">Book Hair Studio →</a>
        </div>
        <div class="s-cards">
          <div class="s-card">
            <div class="s-card-n">01</div>
            <div class="scc-icon">💇</div>
            <h3 class="s-card-h">Hair Spa &amp; Recovery</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Intense deep-conditioning and restorative rituals to bring life back to damaged or dry hair. Our advanced formula penetrates deep into the follicles for lasting health.</p>
            <span class="s-card-tag">Signature</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">02</div>
            <div class="scc-icon">✨</div>
            <h3 class="s-card-h">Smoothening &amp; Texture</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Professional chemical treatments for silkier, manageable hair with long-lasting frizz control. Ideal for those seeking a smooth finish that lasts for months with proper care.</p>
            <span class="s-card-tag">Long-Lasting</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">03</div>
            <div class="scc-icon">🌟</div>
            <h3 class="s-card-h">Styling &amp; Blowouts</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Expert styling for every occasion, from voluminous daily wear to high-glam evening looks. We use premium thermal protectants to ensure your hair stays healthy.</p>
            <span class="s-card-tag">Professional</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">04</div>
            <div class="scc-icon">✂️</div>
            <h3 class="s-card-h">Precision Cuts</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Technically superior cuts tailored to your face shape and hair type. Our stylists are trained in international cutting techniques to provide the perfect edge.</p>
            <span class="s-card-tag">Essential</span>
          </div>
        </div>
      </div>
    </section>

    <!-- BODY WELLNESS -->
    <section class="s-dept rv">
      <div class="sp-cnt">
        <div class="s-dept-head">
          <div>
            <span class="s-dept-tag">Wellness Department</span>
            <h2 class="s-dept-h">Body <em>Wellness</em></h2>
            <p class="sp-sec-note-b" style="text-align:left; margin-top:12px; max-width:500px;">Surrender to deeply restorative body rituals designed to melt stress, revive tired muscles, and awaken a radiant glow from within.</p>
          </div>
          <a href="https://wa.me/919140971129?text=I+want+to+book+a+body+therapy" target="_blank" class="btn-bk">Book Wellness →</a>
        </div>
        <div class="s-cards">
          <div class="s-card">
            <div class="s-card-n">01</div>
            <div class="scc-icon">🍃</div>
            <h3 class="s-card-h">Relaxation Massage</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Full-body therapy focused on de-stressing and easing tension with calming aromatherapy oils. Experience a profound sense of tranquility as our therapists melt away worries.</p>
            <span class="s-card-tag">Relaxation</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">02</div>
            <div class="scc-icon">🌸</div>
            <h3 class="s-card-h">Aromatherapy Spa</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Combining the therapeutic power of essential oils with advanced massage techniques for total bliss. Each scent is handpicked to promote healing and rejuvenation of mind.</p>
            <span class="s-card-tag">Wellness</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">03</div>
            <div class="scc-icon">🧖‍♀️</div>
            <h3 class="s-card-h">Body Polishing</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Luxury exfoliation and skin-softening treatments to reveal your most radiant, hydrated skin. Includes a nutrient-rich mask that infuses your skin with essential minerals.</p>
            <span class="s-card-tag">Glow</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">04</div>
            <div class="scc-icon">🌿</div>
            <h3 class="s-card-h">De-stress Rituals</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Targeted sessions for neck, back, and shoulders to melt away the pressures of daily life. A rapid yet deeply effective way to re-energize your body and focus.</p>
            <span class="s-card-tag">Therapy</span>
          </div>
        </div>
      </div>
    </section>

    <!-- NAIL ARTISTRY -->
    <section class="s-dept rv">
      <div class="sp-cnt">
        <div class="s-dept-head">
          <div>
            <span class="s-dept-tag">Artistry Department</span>
            <h2 class="s-dept-h">Nail <em>Artistry</em></h2>
            <p class="sp-sec-note-b" style="text-align:left; margin-top:12px; max-width:500px;">Expressive, long-lasting, and flawlessly finished. Our nail artists blend artistry with technique to give you hands and feet you'll love to show off.</p>
          </div>
          <a href="https://wa.me/919140971129?text=I+want+to+book+nail+art" target="_blank" class="btn-bk">Book Artistry →</a>
        </div>
        <div class="s-cards">
          <div class="s-card">
            <div class="s-card-n">01</div>
            <div class="scc-icon">💅</div>
            <h3 class="s-card-h">Gel Paints &amp; Art</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Long-lasting, high-shine gel colors and creative nail art to suit your personal style. Our UV-cured polishes ensure a chip-free finish that looks perfect for weeks.</p>
            <span class="s-card-tag">Artisan</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">02</div>
            <div class="scc-icon">✨</div>
            <h3 class="s-card-h">Acrylic Extensions</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Strong and beautifully sculpted nail extensions with a flawless, natural appearance. Perfect for those desiring extra length and a steady base for artistic designs.</p>
            <span class="s-card-tag">Precision</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">03</div>
            <div class="scc-icon">💎</div>
            <h3 class="s-card-h">Builder Gel</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Nail strengthening and sculpting using high-grade builder gel for enhanced durability. Provides a strong layer that protects your natural nails while adding structure.</p>
            <span class="s-card-tag">Premium</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">04</div>
            <div class="scc-icon">💅</div>
            <h3 class="s-card-h">Custom Designs</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">From French ombré to intricate hand-painted designs, our artists make your vision come alive. We use precision tools to create bespoke art that reflects your personality.</p>
            <span class="s-card-tag">Exotics</span>
          </div>
        </div>
      </div>
    </section>

    <!-- PERSONAL GROOMING -->
    <section class="s-dept rv">
      <div class="sp-cnt">
        <div class="s-dept-head">
          <div>
            <span class="s-dept-tag">Grooming Department</span>
            <h2 class="s-dept-h">Personal <em>Grooming</em></h2>
            <p class="sp-sec-note-b" style="text-align:left; margin-top:12px; max-width:500px;">The little rituals that make the biggest difference. Polished, precise, and deeply personal — every grooming service is crafted to bring out your best self.</p>
          </div>
          <a href="https://wa.me/919140971129?text=I+want+to+book+grooming" target="_blank" class="btn-bk">Book Grooming →</a>
        </div>
        <div class="s-cards">
          <div class="s-card">
            <div class="s-card-n">01</div>
            <div class="scc-icon">✋</div>
            <h3 class="s-card-h">Luxury Manicure</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Complete hand care inclusive of shaping and cuticle care. We use organic scrubs and hydrating creams to leave your hands feeling soft and thoroughly pampered.</p>
            <span class="s-card-tag">Hygiene</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">02</div>
            <div class="scc-icon">🦶</div>
            <h3 class="s-card-h">Spa Pedicure</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Deeply relaxing foot soak, exfoliation, and nail grooming for tired feet. Our signature foot massage stimulates pressure points to improve circulation and relaxation.</p>
            <span class="s-card-tag">Essential</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">03</div>
            <div class="scc-icon">🌿</div>
            <h3 class="s-card-h">Threading &amp; Waxing</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Precision eyebrow shaping and hair removal using high-quality wax variants. Our techniques are designed to minimize discomfort while providing smooth results.</p>
            <span class="s-card-tag">Precision</span>
          </div>
          <div class="s-card">
            <div class="s-card-n">04</div>
            <div class="scc-icon">🍃</div>
            <h3 class="s-card-h">Foot Reflexology</h3>
            <div class="s-divl"></div>
            <p class="s-card-p">Targeted pressure-point therapy to improve circulation and promote overall healing. A specialized treatment that balances energy flow and revitalizes your wellbeing.</p>
            <span class="s-card-tag">Therapy</span>
          </div>
        </div>
      </div>
    </section>



    <!-- Premium Booking Section -->
    <section class="sp-booking-sec">
      <div class="book-wrap">
        <h2 class="book-title">Book Your <em>Appointment</em></h2>
        <p class="book-subtitle">Book your appointment and experience premium hair and beauty services.</p>

        <div class="book-card rv" style="background:#000;border:1px solid rgba(255,255,255,0.12);">
          <div class="bk-row">
            <div class="bk-group"><label>Full Name</label><input type="text" class="bk-input" placeholder="Your name"></div>
            <div class="bk-group"><label>Phone</label><input type="tel" class="bk-input" placeholder="+91 00000 00000"></div>
          </div>
          <button class="bk-btn" onclick="submitForm(this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            Book Appointment
          </button>
        </div>

        <a class="bk-back-btn" onclick="showPage('home')">← Back to Home</a>
      </div>
    </section>
    <!-- SALON FOOTER -->
    <footer style="background: #0a0a0a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
      <div class="cnt">
        <div class="foot-grid">
          <div style="padding-right: 40px;">
            <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="showPage('home')">
              <div style="width:24px; height:24px; border:1px solid #d4b5a0; border-radius:50%; position:relative;">
                <div style="width:4px; height:4px; background:#d4b5a0; border-radius:50%; position:absolute; top:2px; right:-1px;"></div>
              </div>
              <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnov<span>a</span>tion</div>
            </div>
            <p class="foot-p" style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">Lucknow's premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
            <div class="fsoc">
              <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link" style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
                <div style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </div>
                <span>Follow our story on Instagram</span>
              </a>
            </div>
          </div>
          <div class="fc"><h4>Clinic</h4><ul><li><a onclick="openLHR()">Laser Hair Reduction</a></li><li><a onclick="showPage('clinic')">Medi Facials</a></li><li><a onclick="showPage('clinic')">Skin Boosters</a></li><li><a onclick="showPage('clinic')">IV Therapy</a></li><li><a onclick="showPage('clinic')">Microneedling</a></li></ul></div>
          <div class="fc"><h4>Salon</h4><ul><li><a onclick="showPage('salon')">Korean Head Spa</a></li><li><a onclick="showPage('salon')">Hair Spa</a></li><li><a onclick="showPage('salon')">Smoothening</a></li><li><a onclick="showPage('salon')">Styling & Cuts</a></li><li><a onclick="showPage('salon')">Color & Balayage</a></li></ul></div>
          <div class="fc"><h4>Studio</h4><ul><li><a onclick="showPage('home')">About Us</a></li><li><a onclick="goBooking()">Book Appointment</a></li><li><a href="https://wa.me/919140971129" target="_blank">WhatsApp</a></li><li><a onclick="showPage('clinic')">Lucknow, U.P.</a></li></ul></div>
        </div>
        <div class="foot-bot">
          <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
          <span>Developed by <a href="http://trivoraconsultancy.com/" target="_blank" style="color:var(--skin-lt); text-decoration:none; font-weight: 500; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
        </div>
      </div>
    </footer>
  </div><!-- /page-salon -->


  <!-- ===============================================================
       CLINIC PAGE
  =============================================================== -->
  <div id="page-clinic" class="page">

    <div class="sp-hero">
      <div class="sp-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=1920&q=95&fit=crop'),linear-gradient(#0a0a0a,#1a1a1a);"></div>
      <div class="sp-hero-ov"></div>
      <div class="sp-hero-cnt">
        <button class="sp-back" onclick="showPage('home')">Home</button>
        <span class="sp-etag">Our Clinic Services</span>
        <h1 class="sp-title">Our Clinic<br><em>Services</em></h1>
        <p class="sp-desc">Medical-grade aesthetic treatments backed by dermatological science. FDA lasers, clinical facials, skin boosters — all tailored for Lucknow's skin.</p>
        <a class="btn-skin" onclick="openLHR()" style="cursor:pointer">Our #1 Treatment: LHR →</a>
      </div>
      <div class="sp-pgnum">02</div>
    </div>

    <!-- LHR Highlight -->
    <div class="lhr-highlight sp-white">
      <div class="sp-cnt">
        <div class="lhr-hl-grid rv">
          <div class="lhr-hl-img">
            <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?w=1000&q=95&fit=crop" alt="LHR Treatment" onerror="this.src='https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800&q=90&fit=crop'">
          </div>
          <div class="lhr-hl-txt">

            <h2 class="section-heading-dark">Laser Hair<br><em>Reduction</em></h2>
            <p class="section-p-dark">Most-requested treatment at Skinnovation — a rare blend of medical precision and artistic care. FDA-grade, permanent results for all skin types.</p>
            <a class="btn-bd" onclick="openLHR()" style="cursor:pointer;width:fit-content">Explore Full LHR Details →</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Clinic Services -->
    <section class="sp-sec sp-dark">
      <div class="sp-cnt">
        <div class="sp-sec-head rv">
          <div><span class="sp-sec-lbl">Our Clinic Services</span><h2 class="sp-sec-h" style="color:var(--white)">Our Clinic<br><em>Services</em></h2></div>
          <div><p class="sp-sec-note">Science-backed treatments for lasting skin transformation.</p><a href="https://wa.me/919140971129?text=I+want+to+book+a+clinic+consultation" target="_blank" class="btn-skin" style="margin-top:16px;display:inline-block">Free Consultation</a></div>
        </div>
        <div class="grid-3 grid-3-d rv">
          <div class="scard scard-d" onclick="openLHR()"><div class="scard-num">01</div><h3 class="scard-h scard-hd">Laser Hair Reduction</h3><p class="scard-p scard-pd">FDA-grade permanent hair reduction. Safe for all Indian skin types. 90% reduction in 6–8 sessions.</p><div class="tag-row"><span class="ctag">Most Popular</span><span class="ctag">Permanent</span></div></div>
          <div class="scard scard-d"><div class="scard-num">02</div><h3 class="scard-h scard-hd">Advanced Medi Facials</h3><p class="scard-p scard-pd">Medical-grade facials targeting pigmentation, acne, texture and skin quality.</p><div class="tag-row"><span class="ctag">Clinical</span><span class="ctag">All Skin</span></div></div>
          <div class="scard scard-d"><div class="scard-num">03</div><h3 class="scard-h scard-hd">Skin Boosters</h3><p class="scard-p scard-pd">Hyaluronic acid delivery for deep hydration, elasticity and lasting luminosity.</p><div class="tag-row"><span class="ctag">Hydration</span><span class="ctag">Anti-Aging</span></div></div>
          <div class="scard scard-d"><div class="scard-num">04</div><h3 class="scard-h scard-hd">IV Nutrient Therapy</h3><p class="scard-p scard-pd">Intravenous vitamin and antioxidant drips for radiant skin and total wellness.</p><div class="tag-row"><span class="ctag">Wellness</span><span class="ctag">Glow</span></div></div>
          <div class="scard scard-d"><div class="scard-num">05</div><h3 class="scard-h scard-hd">Pigmentation Laser</h3><p class="scard-p scard-pd">Precision laser for melasma, sunspots, post-acne marks and uneven skin tone.</p><div class="tag-row"><span class="ctag">Laser</span><span class="ctag">Even Tone</span></div></div>
          <div class="scard scard-d"><div class="scard-num">06</div><h3 class="scard-h scard-hd">Microneedling & Scars</h3><p class="scard-p scard-pd">Collagen-induction for acne scars, pores, fine lines and skin rejuvenation.</p><div class="tag-row"><span class="ctag">Collagen</span><span class="ctag">Anti-Scar</span></div></div>
        </div>
      </div>
    </section>

    <!-- Premium Booking Section -->
    <section class="sp-booking-sec">
      <div class="book-wrap">
        <h2 class="book-title">Book Your <em>Appointment</em></h2>
        <p class="book-subtitle">Begin your journey to enhanced beauty and wellness with Lucknow's elite skin clinic.</p>

        <div class="book-card rv" style="background:#000;border:1px solid rgba(255,255,255,0.12);">
          <div class="bk-row">
            <div class="bk-group"><label>Full Name</label><input type="text" class="bk-input" placeholder="Your name"></div>
            <div class="bk-group"><label>Phone</label><input type="tel" class="bk-input" placeholder="+91 00000 00000"></div>
          </div>
          <button class="bk-btn" onclick="submitForm(this)">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            Book Appointment
          </button>
        </div>

        <a class="bk-back-btn" onclick="showPage('home')">← Back to Home</a>
      </div>
    </section>
    <!-- CLINIC FOOTER -->
    <footer style="background: #0a0a0a; border-top: 1px solid rgba(212,181,160,0.1); padding: 100px 0 50px;">
      <div class="cnt">
        <div class="foot-grid">
          <div style="padding-right: 40px;">
            <div style="display:flex; align-items:center; gap:10px; margin-bottom: 24px; cursor:pointer;" onclick="showPage('home')">
              <div style="width:24px; height:24px; border:1px solid #d4b5a0; border-radius:50%; position:relative;">
                <div style="width:4px; height:4px; background:#d4b5a0; border-radius:50%; position:absolute; top:2px; right:-1px;"></div>
              </div>
              <div class="foot-logo" style="margin-bottom:0; font-size:24px;">Skinnovation</div>
            </div>
            <p class="foot-p" style="font-size: 14px; line-height: 1.8; color: rgba(255,255,255,0.4); max-width: 320px; margin-bottom: 30px;">Lucknow's premier aesthetic studio where medical-grade skin science meets luxury salon artistry.</p>
            <div class="fsoc">
              <a href="https://www.instagram.com/skinnovation_lucknow" target="_blank" class="foot-insta-link" style="display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-size: 13px; font-weight: 300;">
                <div style="width: 34px; height: 34px; background: rgba(212,181,160,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4b5a0;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </div>
                <span>Follow our story on Instagram</span>
              </a>
            </div>
          </div>
          <div class="fc"><h4>Clinic</h4><ul><li><a onclick="openLHR()">Laser Hair Reduction</a></li><li><a onclick="showPage('clinic')">Medi Facials</a></li><li><a onclick="showPage('clinic')">Skin Boosters</a></li><li><a onclick="showPage('clinic')">IV Therapy</a></li><li><a onclick="showPage('clinic')">Microneedling</a></li></ul></div>
          <div class="fc"><h4>Salon</h4><ul><li><a onclick="showPage('salon')">Korean Head Spa</a></li><li><a onclick="showPage('salon')">Hair Spa</a></li><li><a onclick="showPage('salon')">Smoothening</a></li><li><a onclick="showPage('salon')">Styling & Cuts</a></li><li><a onclick="showPage('salon')">Color & Balayage</a></li></ul></div>
          <div class="fc"><h4>Studio</h4><ul><li><a onclick="showPage('home')">About Us</a></li><li><a onclick="goBooking()">Book Appointment</a></li><li><a href="https://wa.me/919140971129" target="_blank">WhatsApp</a></li><li><a onclick="showPage('clinic')">Lucknow, U.P.</a></li></ul></div>
        </div>
        <div class="foot-bot">
          <span>&copy; 2025 Skinnovation Aesthetic Studio &middot; Lucknow &middot; All rights reserved.</span>
          <span>Developed by <a href="http://trivoraconsultancy.com/" target="_blank" style="color:var(--skin-lt); text-decoration:none; font-weight: 500; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">Trivora Consultancy</a></span>
        </div>
      </div>
    </footer>
  </div><!-- /page-clinic -->
@endsection
