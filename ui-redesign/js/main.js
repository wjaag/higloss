const header=document.querySelector('[data-header]');
const toggle=document.querySelector('.menu-toggle');
const mobile=document.querySelector('#mobile-nav');
const reducedMotion=window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const onScroll=()=>header?.classList.toggle('scrolled',window.scrollY>30);
window.addEventListener('scroll',onScroll,{passive:true}); onScroll();

toggle?.addEventListener('click',()=>{
  const open=toggle.getAttribute('aria-expanded')==='true';
  toggle.setAttribute('aria-expanded',String(!open));
  mobile.hidden=open;
  document.body.classList.toggle('menu-open',!open);
});
mobile?.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{
  toggle?.setAttribute('aria-expanded','false');
  if(mobile) mobile.hidden=true;
  document.body.classList.remove('menu-open');
}));

const observer=new IntersectionObserver(entries=>entries.forEach(entry=>{
  if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target)}
}),{threshold:.12});
if(!reducedMotion) document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));
else document.querySelectorAll('.reveal').forEach(el=>el.classList.add('visible'));

document.querySelectorAll('summary').forEach(summary=>summary.addEventListener('click',()=>{
  const details=summary.parentElement;
  setTimeout(()=>document.querySelectorAll('.faq-list details[open]').forEach(other=>{
    if(other!==details) other.removeAttribute('open');
  }),0);
}));

// Portfolio filters: progressive enhancement for static prototype and future WP taxonomy output.
const filters=document.querySelectorAll('[data-filter]');
const cards=document.querySelectorAll('[data-category]');
filters.forEach(filter=>filter.addEventListener('click',()=>{
  const value=filter.dataset.filter;
  filters.forEach(item=>{
    const active=item===filter;
    item.classList.toggle('active',active);
    item.setAttribute('aria-pressed',String(active));
  });
  cards.forEach(card=>{
    const match=value==='all'||card.dataset.category===value;
    card.hidden=!match;
  });
}));

// Lightweight gallery lightbox. It is deliberately dependency-free so the approved UI can be ported to WP cleanly.
const galleryLinks=document.querySelectorAll('[data-lightbox]');
if(galleryLinks.length){
  const dialog=document.createElement('dialog');
  dialog.className='lightbox';
  dialog.innerHTML='<button class="lightbox-close" type="button" aria-label="Zamknij">×</button><button class="lightbox-prev" type="button" aria-label="Poprzednie zdjęcie">‹</button><figure><img alt=""><figcaption></figcaption></figure><button class="lightbox-next" type="button" aria-label="Następne zdjęcie">›</button>';
  document.body.appendChild(dialog);
  const image=dialog.querySelector('img');
  const caption=dialog.querySelector('figcaption');
  let index=0;
  const openAt=(nextIndex)=>{
    index=(nextIndex+galleryLinks.length)%galleryLinks.length;
    const link=galleryLinks[index];
    image.src=link.dataset.lightbox||link.href;
    image.alt=link.dataset.alt||link.querySelector('img')?.alt||'';
    caption.textContent=link.dataset.caption||'';
    if(!dialog.open) dialog.showModal();
  };
  galleryLinks.forEach((link,i)=>link.addEventListener('click',e=>{e.preventDefault();openAt(i)}));
  dialog.querySelector('.lightbox-close').addEventListener('click',()=>dialog.close());
  dialog.querySelector('.lightbox-prev').addEventListener('click',()=>openAt(index-1));
  dialog.querySelector('.lightbox-next').addEventListener('click',()=>openAt(index+1));
  dialog.addEventListener('click',e=>{if(e.target===dialog) dialog.close()});
  dialog.addEventListener('keydown',e=>{
    if(e.key==='ArrowLeft') openAt(index-1);
    if(e.key==='ArrowRight') openAt(index+1);
  });
}
