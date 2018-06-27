var li = document.querySelectorAll('.theNav li');

for (var i = 0; i < li.length; i++) {
  li[i].addEventListener('click', function(){
    for (var j = 0; j < li.length; j++) {
      li[j].style.color  = 'black';
      li[j].style.border  = 'none';
    }
    this.style.color = '#2651F5';
    this.style.borderBottom = 'solid 2px #2651F5';
    this.style.transition = '0.2s';
    li[5].style.borderBottom = 'none';
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

setInterval(function(){
  console.log(scrollY);
})
