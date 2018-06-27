var li = document.querySelectorAll('.theNav li a');

for (var i = 0; i < li.length; i++) {
  li[i].addEventListener('click', function(){
    for (var j = 0; j < li.length; j++) {
      li[j].style.color  = 'black';
      li[j].style.border  = 'none';
    }
    this.style.color = '#2651F5';
    this.style.borderBottom = 'solid 2px #2651F5';
    this.style.transition = '0.2s';
  })
}

var a = document.querySelectorAll('.header_connection a');

for (var i = 0; i < a.length; i++) {
  a[i].addEventListener('click', function(){
    for (var j = 0; j < a.length; j++) {
      a[j].style.color  = 'black';
      a[j].style.border  = 'none';
    }
    this.style.color = '#2651F5';
    a[0].style.color = 'black';
    a[2].style.color = 'black';
  })
}

var logo_bg = document.querySelector('.header_bg');
var menu_bg = document.querySelector('.bg_menu');
var nav = document.querySelector('.theNav');
var close = document.querySelector('.close');


logo_bg.addEventListener('click', function(){
  menu_bg.style.display = 'block';
  document.body.style.overflow = 'hidden';
})

close.addEventListener('click', function(){
  menu_bg.style.display = 'none';
  document.body.style.overflow = 'scroll';
})
