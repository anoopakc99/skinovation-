/* CURSOR (home layout only — optional on standalone pages) */
const cur=document.getElementById('cursor'),ring=document.getElementById('cursorRing');
let mx=0,my=0,rx=0,ry=0;
if(cur&&ring){
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cur.style.left=mx+'px';cur.style.top=my+'px';});
(function anim(){if(!cur||!ring)return;rx+=(mx-rx-15)*0.15;ry+=(my-ry-15)*0.15;ring.style.left=rx+'px';ring.style.top=ry+'px';requestAnimationFrame(anim);})();
document.querySelectorAll('a,button,.oval-half,.scard,.lhr-zone').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.transform='scale(2.5)';ring.style.transform='scale(1.6)';});
  el.addEventListener('mouseleave',()=>{cur.style.transform='scale(1)';ring.style.transform='scale(1)';});
});
}

/* PAGE NAV */
function showPage(id){
  // Handle redirects for standalone pages
  if (id === 'clinic') { window.location.href = '/clinic'; return; }
  if (id === 'lhr') { window.location.href = '/lhr'; return; }
  
  // Internal page switching
  document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
  document.getElementById('lhr-section')?.classList.remove('open');
  const pg=document.getElementById('page-'+id);
  if(!pg) return;
  
  pg.classList.add('active');
  
  // Highlight active link in navbar
  document.querySelectorAll('.nav-links a').forEach(a => a.classList.remove('active'));
  const activeLink = document.querySelector(`.nav-links a[data-page="${id}"]`);
  if(activeLink) activeLink.classList.add('active');

  window.scrollTo({top:0,behavior:'smooth'});
  setTimeout(()=>{pg.querySelectorAll('.rv').forEach(el=>el.classList.add('in'));initReveal();},120);
}
function openLHR(){
  window.location.href = '/lhr';
}
function closeLHR(){
  document.getElementById('lhr-section')?.classList.remove('open');
  const home=document.getElementById('page-home');
  home.classList.add('active');
  window.scrollTo({top:0,behavior:'smooth'});
  setTimeout(()=>{home.querySelectorAll('.rv').forEach(el=>el.classList.add('in'));initReveal();},120);
}
function goBooking(){
  showPage('home');
  setTimeout(()=>document.getElementById('booking').scrollIntoView({behavior:'smooth'}),350);
}

/* SCROLL REVEAL */
let ro;
function initReveal(){
  if(ro)ro.disconnect();
  ro=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting){x.target.classList.add('in');ro.unobserve(x.target);}});},{threshold:0.07,rootMargin:'0px 0px -20px 0px'});
  document.querySelectorAll('.rv:not(.in)').forEach(el=>ro.observe(el));
}
initReveal();
// Auto-reveal all visible elements on page load & page switch
window.addEventListener('load',()=>{
  const params = new URLSearchParams(window.location.search);
  if(params.get('page') === 'salon') {
    showPage('salon');
  } else {
    document.querySelectorAll('#page-home .rv').forEach(el=>el.classList.add('in'));
  }
  
  if(window.location.hash === '#booking') {
    setTimeout(()=>{
      const b = document.getElementById('booking');
      if(b) b.scrollIntoView({behavior:'smooth'});
    }, 400);
  }
});
window.addEventListener('scroll',()=>{const n=document.getElementById('navbar');if(n)n.style.boxShadow=window.scrollY>60?'0 4px 28px rgba(0,0,0,0.55)':'none';});

/* COUNTERS */
function animCount(el,t){let c=0;const s=t/55,tm=setInterval(()=>{c+=s;if(c>=t){c=t;clearInterval(tm);}el.textContent=Math.floor(c)+(t>=100?'+':'');},22);}
const co=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting){animCount(x.target,parseInt(x.target.dataset.count));co.unobserve(x.target);}});},{threshold:0.5});
document.querySelectorAll('[data-count]').forEach(el=>co.observe(el));

/* MOBILE MENU */
function toggleMenu(){
  if(window.innerWidth > 860) return;
  const links = document.getElementById('navLinks');
  const toggle = document.getElementById('menuToggle');
  if(!links||!toggle)return;
  links.classList.toggle('open');
  toggle.classList.toggle('active');
}

/* FORM — legacy fake submit (old buttons) */
function submitForm(btn){const o=btn.textContent;btn.textContent='Sending...';btn.style.background='var(--skin)';setTimeout(()=>{btn.textContent='✓ Booking Confirmed!';btn.style.background='#4a7c59';setTimeout(()=>{btn.textContent=o;btn.style.background='';},3500);},1600);}

/* Unified appointment forms → WhatsApp */
document.addEventListener('submit',function(e){
  const f=e.target;
  if(!f||!f.classList||!f.classList.contains('skin-appt-form'))return;
  e.preventDefault();
  const name=(f.querySelector('[name=name]')&&f.querySelector('[name=name]').value||'').trim();
  const phone=(f.querySelector('[name=phone]')&&f.querySelector('[name=phone]').value||'').trim();
  const ctx=f.getAttribute('data-context')||'general';
  let line;
  if(ctx==='salon')line="Hi, I'm "+name+". I'd like to book a salon appointment. Phone: "+phone;
  else if(ctx==='clinic')line="Hi, I'm "+name+". I'd like to book a clinic consultation. Phone: "+phone;
  else if(ctx==='lhr')line="Hi, I'm "+name+". I'd like to book an LHR consultation. Phone: "+phone;
  else line="Hi, I'm "+name+". I'd like to book an appointment at Skinnovation. Phone: "+phone;
  window.open('https://wa.me/919140971129?text='+encodeURIComponent(line),'_blank');
});
