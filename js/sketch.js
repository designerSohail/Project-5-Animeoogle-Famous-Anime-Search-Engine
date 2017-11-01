const input = document.querySelector('.search');
const box   = document.querySelector('.box');

input.addEventListener('focus', ()=> {
  box.style.boxShadow = '0px 5px 10px 1px rgba(168,168,168,.5)';
});
input.addEventListener('blur', ()=> {
  box.style.boxShadow = '0px 0px 0px 0px rgba(168,168,168,.5)';
});
