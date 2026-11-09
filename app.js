(function(){
  const toggle=document.querySelector('.menu-toggle'),nav=document.querySelector('#mainNav');
  if(toggle&&nav){toggle.addEventListener('click',()=>{const open=nav.classList.toggle('open');toggle.classList.toggle('open',open);toggle.setAttribute('aria-expanded',open?'true':'false');});nav.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{nav.classList.remove('open');toggle.classList.remove('open');}));}
  const header=document.querySelector('.site-header');
  const onScroll=()=>{if(header)header.classList.toggle('scrolled',window.scrollY>20);const media=document.querySelector('.hero-media');if(media&&window.scrollY<window.innerHeight){media.style.transform='scale(1.05) translateY('+(window.scrollY*.05)+'px)';}};
  window.addEventListener('scroll',onScroll,{passive:true});onScroll();
  const reveals=document.querySelectorAll('.reveal');if('IntersectionObserver' in window){const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('is-visible');io.unobserve(e.target);}}),{threshold:.12});reveals.forEach(e=>io.observe(e));}else reveals.forEach(e=>e.classList.add('is-visible'));
  document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',e=>{const t=document.querySelector(a.getAttribute('href'));if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth'});}}));
  const quiz=document.getElementById('coffeeQuiz');
  if(quiz){let q=1,scores={arabica:0,robusta:0,smooth:0};const qs=[...quiz.querySelectorAll('.quiz-question')],progress=document.getElementById('quizProgress'),bar=document.getElementById('progressBar'),result=quiz.querySelector('.quiz-result'),title=document.getElementById('resultTitle'),text=document.getElementById('resultText'),link=document.getElementById('resultLink');
    function show(n){qs.forEach(x=>x.classList.toggle('active',Number(x.dataset.q)===n));progress.textContent=String(n).padStart(2,'0')+' / 03';bar.style.width=(n/3*100)+'%';}
    quiz.querySelectorAll('.quiz-question button').forEach(btn=>btn.addEventListener('click',()=>{scores[btn.dataset.score]++;if(q<3){q++;show(q);}else{qs.forEach(x=>x.classList.remove('active'));result.classList.add('show');let winner=Object.keys(scores).sort((a,b)=>scores[b]-scores[a])[0];if(winner==='robusta'){title.textContent='Robusta';text.textContent='Kamu cenderung menyukai kopi dengan karakter pahit, kuat, dan tegas.';link.href='produk.php?kategori=Robusta';}else if(winner==='smooth'){title.textContent='Original';text.textContent='Kamu cocok dengan pilihan yang lebih smooth dan easy untuk dinikmati.';link.href='produk.php';}else{title.textContent='Arabica';text.textContent='Kamu cenderung menyukai aroma fruity, karakter aromatic, dan eksplorasi rasa.';link.href='produk.php?kategori=Arabica';}}}));
    document.getElementById('quizReset').addEventListener('click',()=>{q=1;scores={arabica:0,robusta:0,smooth:0};result.classList.remove('show');show(1);});
  }
})();
