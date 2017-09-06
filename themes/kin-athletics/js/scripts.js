// $( document ).ready(function() {
//   $('.main-carousel').flickity({
//     cellAlign: 'left',
//     contain: true
//   });
// }); 

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  cellAlign: 'left',
  contain: true
}); 