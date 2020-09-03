


'use strict';
document.addEventListener('DOMContentLoaded',function(){
 const g = document.getElementById('hide')
 
 g.addEventListener('mouseenter',() => {
   g.textContent.toggle = 'aaaaa';
   g.classList.toggle('jsTest');
  // // window.alert('ヘイ');
  });
});
