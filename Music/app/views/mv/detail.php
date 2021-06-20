<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="public/css/mv.css" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="https://tainhacmp3.biz/images/logo.png"/>
	<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
	<script src="public/js/audioPlayer.js"></script>
	<link rel="stylesheet" href="public/css/swiper.min.css">
		<script src="public/js/swiper.min.js"></script>
<body>
	<?php
	include "app/controllers/nav.php"
	?>
<div class="w3-main">
	<div class="mv-container">
	 	<div class="mv">
		 <video controls>
 			 <source src="<?php echo $value["Link"]?>" type="video/mp4">
  				Your browser does not support HTML5 video.
		</video>

		</div>
		<br>
		<?php  $data8 = $this->Model->fetch("select * from nghesi where maCS =".$value["maCS"]);
		foreach($data8 as $key){?>
		<h2> <?php echo $value["tenMV"]?> -<a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"] ?>"><?php echo $key["tenCS"]?></a></h2>
		<p>Tên ca sĩ:<a href="index.php?controller=nghesi/detail&id=<?php echo $key["maCS"] ?>"><?php echo $key["tenCS"]?></a></p><?php }?>
		<?php $data8 = $this->Model->fetch("select * from loaimv where maLMV =".$value["maLMV"]);
		foreach($data8 as $key){?>
		<p>Thể loại:<a href="index.php?controller=mv/list&id=<?php echo $key["maLMV"] ?>"><?php echo $key["tenLMV"]?></a></p><?php }?>
	</div>
	<hr>
	<div class ="sub-container">
		<h2>MV cùng ca sĩ</h2>
		<div class="swiper-container">
    	<div class="swiper-wrapper">
	 <?php
	  $data8 = $this->Model->fetch("select * from mv where maCS =".$value["maCS"]." and maMV !=".$value["maMV"]." limit 10");
		foreach($data8 as $key){
	?>
       <div class="swiper-slide">
            <div class="single-square">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
			    </div>
					  </a>
            </div>
				<p><?php echo $key["tenMV"] ?></p>
			</div>
		     </div>
		  <?php }?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
		<hr>
		<h2>MV cùng thể loại</h2>
		<div class="swiper-container">
    	<div class="swiper-wrapper">
	 <?php
	  $data8 = $this->Model->fetch("select * from mv where maLMV =".$value["maLMV"]." and maMV !=".$value["maMV"]." limit 10");
		foreach($data8 as $key){
	?>
       <div class="swiper-slide">
            <div class="single-square">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
			    </div>
					  </a>
            </div>
				<p><?php echo $key["tenMV"] ?></p>
			</div>
		     </div>
		  <?php }?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
	</div>
</div>
	<footer class="w3-container w3-padding-20 w3-theme  w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-blue w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by Vũ </p>
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-blue w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
<script>
        // loads the audio player
        audioPlayer();
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
};
    </script>
		
	 <script>
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 20,
      slidesPerGroup: 4,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
     	
</body>
</html>