<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/view.css">
	<title>Просмотр Гель-лака:  <?php
	echo $_POST['id'];
?></title>
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
    <div id="img_preload"> <img src="../images/def/logo.png" width="100%" height="auto"></div>
</div><p>
</p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>

	<div class="item_box">
		<div class="left_colum">
			<div class="img_container">
				<div class="set_img">
					<img src="../images/item_img/set/defa.jpg">
				</div>
			</div>
		</div>
		<div class="right_colum">
			<div class="nogti_img">
					<img src="../images/item_img/nogti/nog.jpg">
				</div>
			<div class="about">
				<p>Цена:250Rub</p>
				<p>Тип: хамелион</p>
				<p>Состав:Красители,аерозоль и тд </p>

			</div>
		</div>
	</div>
</body>
</html>