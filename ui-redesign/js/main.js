const header=document.querySelector('[data-header]');
const toggle=document.querySelector('.menu-toggle');
const mobile=document.querySelector('#mobile-nav');
const onScroll=()=>header?.classList.toggle('scrolled',window.scrollY>30);
window.addEventListener('scroll',onScroll,{passive:true}); onScroll();

toggle?.addEventListener('click',()=>{
  const open=toggle.getAttribute('aria-expanded')==='true';
  toggle.setAttribute('aria-expanded',String(!open));
  mobile.hidden=open;
  document.body.classList.toggle('menu-open',!open);
});
mobile?.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{
  toggle.setAttribute('aria-expanded','false'); mobile.hidden=true; document.body.classList.remove('menu-open');
}));

const observer=new IntersectionObserver(entries=>entries.forEach(entry=>{
  if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target)}
}),{threshold:.12});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

document.querySelectorAll('summary').forEach(summary=>summary.addEventListener('click',()=>{
  const details=summary.parentElement;
  setTimeout(()=>document.querySelectorAll('.faq-list details[open]').forEach(other=>{
    if(other!==details) other.removeAttribute('open');
  }),0);
}));
