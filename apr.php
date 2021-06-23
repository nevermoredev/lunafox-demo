 <!DOCTYPE html>
 <html>
 <head> 	
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" href="style/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="style/index2.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
 	<link rel="stylesheet" type="text/css" href="style/index.css">
 	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
 	    <script type="text/javascript">var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);</script>
 	<title></title>
   <style type="text/css">
#hellopreloader>
p{display:none;}
#hellopreloader_preload{
  display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 10px;background:#e62e00 url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:41px;
}
#img_preload{
  text-align: center;
  width: 200px;
  height: auto;
  margin:30px auto;
}
</style>
 </head>
 <body>
  <div id="hellopreloader">
  <div id="hellopreloader_preload">
    <div id="img_preload"> <img src="images/def/logo.png" width="100%" height="auto"></div>
</div><p>
</p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
 	<div id="gradient">
 			<div class="logo">
 				<img src="/images/def/logo.png">
 			</div>
 			<div class="navigation">
        <buttom class="hide-menu"><img src="images/def/menu_mobile.png"></buttom>
 				<ul class="menu">
 					<li><a  href="/">Главная</a></li>
 					<li><a href="lak.php">Гель-лаки</a></li>
 					<li><a  id="selected" href="apr.php">Апаратура</a></li>
 					<li><a href="about.php">О нас</a></li>
 				</ul>
 			</div>
 	</div>
 		<div class="content">
 			
 		</div>
 		<footer>
 		</footer>
 		<script type="text/javascript">
 			$('.hide-menu').on('click', function(){
  $('.menu').fadeToggle();
})
// Если разрешение больше 800px и меню скрыто он автоматом открвается 
$(window).resize(function(){
  if($(this).width() > 800) {
    $('.menu').css('display', 'block');
  }
})
 		</script>
 </body>
 </html>