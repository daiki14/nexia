//member__slider
$('.member__slider ul').slick({
  dots: true,
});



//user__slider
$('.user__slider ul').slick({
});







$(function () {
  $('.ac__parent').on('click', function () {
  $(this).next().slideToggle();
});
});

