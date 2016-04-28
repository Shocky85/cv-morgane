<?php
include_once './header.php';

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
<style type="text/css">
	*,*::before,*::after
  box-sizing: border-box
  outline: none

$pink: #f26060
$green: #1bcc87
$lightblue: #9ab7c2
$darkblue: #3e454d
$orange: #ff8071
$primary-color: $pink
$font: 'Nunito', sans-serif
$sub-font: 'Ubuntu', sans-serif

%transition-normal
  transition: all 1s cubic-bezier(1.000, -0.565, 0.075, 1.495)
%transition-slow
  transition: all .5s ease-in-out


h1,h2,p,button
  margin: 10px 0
  opacity: 0

h2
  font-size: 65px
  
p
  font-size: 24px
  font-family: $sub-font
  font-weight: 300

body
  text-align: center
  background: $primary-color
  color: #fff
  font-family: $font

.intro
  width: 100vw
  height: 100vh
  overflow: hidden
  position: relative
  
  
  > div
    width: 100%
    height: 100%
    display: flex
    align-items: center
    justify-content: center
    position: absolute
    top: 0
    left: 0
    transform-origin: top left
    padding: 20px
    
    .slide-content
      display: inline-block
  
  
.slide-a
  background: $pink
  h1
    font-size: 70px

.slide-b
  background: $green
  @extend %transition-slow
  h2
    transform: translateY(-200px)
    @extend %transition-normal
  p
    transform: translateY(200px)
    @extend %transition-normal
    
.slide-c
  background: $darkblue
  @extend %transition-slow
  
  h2,p
    transform: scale(.4)
    @extend %transition-normal
  p
    display: inline-block
    &::after
      content: ""
      display: inline-block
      width: 6px
      height: 6px
      border-radius: 50%
      background: #fff
      margin: 0 10px
    &:last-of-type::after
      display: none
    
.slide-d
  background: $orange
  h2,p
    @extend %transition-slow
  p
    display: inline-block
  
  a
    color: #CC584C
    display: inline-block
    text-decoration: none
    &:hover::after
      width: 100%
    &::after
      content: ""
      display: block
      width: 0
      height: 1px
      background: #CC584C
      transition: all .3s
  button
    width: 100px
    height: 100px
    line-height: 100px
    border: none
    color: #fff
    border-radius: 50%
    text-align: center
    background: #CC584C
    margin-top: 20px
    border: 2px solid transparent
    transition: all .3s ease-in-out
    transform: scale(.7)
    &:hover
      background: none
      border: 2px solid #CC584C
      color: #CC584C
      
    
    
@media screen and (max-width: 768px)
  .slide-a h1
    font-size: 30px
  h2
    font-size: 30px
  p
    font-size: 17px
    display: block !important
    &::after
      display: none !important
    
  .slide-d button
    width: 70px
    height: 70px
    line-height: 70px
    margin-top: 0
    font-size: 14px
    

</style>
<div class="intro">
  
  <div class="slide slide-d">
    <div class="slide-content">
      <h2>Thanks for watching </h2>
      <p>Please check me on</p>      
      <p><a href="http://mohamdhasan.tk/" target="_blank">Mohamdhasan.tk</a></p>
      <br/><button>Replay</button>
    </div>
  </div>
  
  <div class="slide slide-c">
    <div class="slide-content">
      <h2>What I use</h2>
      <p>Adobe Photoshop CS6</p> 
      <p>HTML5 / CSS3</p>      
      <p>jQuery library</p>              
    </div>
  </div>
  
  <div class="slide slide-b">
    <div class="slide-content">
      <h2>what I do</h2>
      <p>I design modern, clean and creative websites</p>
      <p>And make them alive on the internet</p>
    </div>
  </div>
  
  <div class="slide slide-a">
    <div class="slide-content">
      <h1>Hi There!</h1>
      <p>My name is Mohamed</p>
      <p>I'm a Front End web developer</p>
    </div>
  </div>
  
</div>
	<?php
	include_once './footer.php';
	?>
	<script type="text/javascript">
		$(document).ready(function () {
  
  'use strict';
  
  var slideA = $('.slide-a'),
      slideB = $('.slide-b'),
      slideC = $('.slide-c'),
      slideD = $('.slide-d'),
      slide  = $('.slide'),
      replay = $('button')
  
  slide.hide();
  
  // Slide A
  function showSlideA() {
    slideA.fadeIn().delay(2500).fadeOut();
    $('.slide-a h1').animate({'opacity': '1'});
    $('.slide-a p:first').delay(500).animate({'opacity': '1'});
    $('.slide-a p:last').delay(1000).animate({'opacity': '1'});
  };
  
  // Slide B
  function showSlideB() {
    slideB.fadeIn().delay(6600).queue(function (next) {
      $(this).css({'opacity': '0','transform': 'scaleX(0)'});
      next();
    });
    $('.slide-b h2')
    .delay(3300)
    .queue(function (next) {
      $(this).css({'opacity': '1', 'transform': 'translateY(0)'});
      next();
    });
    $('.slide-b p:first')
    .delay(3600)
    .queue(function (next) {
      $(this).css({'opacity': '1', 'transform': 'translateY(0)'});
      next();
    });$('.slide-b p:last')
    .delay(3800)
    .queue(function (next) {
      $(this).css({'opacity': '1', 'transform': 'translateY(10px)'});
      next();
    });
  };
  
  // Slide C
  function showSlideC() {
    slideC.fadeIn().delay(8800).fadeOut();
    $('.slide-c h2')
    .delay(7000)
    .queue(function next() {
      $(this).css({'transform': 'scale(1)', 'opacity': '1'});
      next();
    });
    $('.slide-c p:first')
    .delay(7100)
    .queue(function next() {
      $(this).css({'transform': 'scale(1)', 'opacity': '1'});
      next();
    });
    $('.slide-c p:nth-of-type(2)')
    .delay(7200)
    .queue(function next() {
      $(this).css({'transform': 'scale(1)', 'opacity': '1'});
      next();
    });
    $('.slide-c p:last')
    .delay(7300)
    .queue(function next() {
      $(this).css({'transform': 'scale(1)', 'opacity': '1'});
      next();
    });
  }
  
  // Slide D  
  function showSlideD() {
    slideD.fadeIn();
    $('.slide-d h2')
    .delay(9600)
    .queue(function next() {
      $(this).css({'opacity': '1'});
      next();
    });
    $('.slide-d p:first')
    .delay(9900)
    .queue(function next() {
      $(this).css({'opacity': '1'});
      next();
    });
    $('.slide-d p:last')
    .delay(10100)
    .queue(function next() {
      $(this).css({'opacity': '1'});
      next();
    });
    replay
    .delay(10300)
    .queue(function next() {
      $(this).css({'transform': 'scale(1)', 'opacity': '1'});
      next();
    });
  }
  
 $(window).load(function () {
   showSlideA(showSlideB(showSlideC(showSlideD())));
 });
  
  // replay 
  replay.on('click', function () {
    location.reload(true);
  });

  
  
  
});
	</script>