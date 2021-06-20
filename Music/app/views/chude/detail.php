<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="public/css/chude.css" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="https://tainhacmp3.biz/images/logo.png"/>
	<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
	<script src="public/js/audioPlayer.js"></script>
	<link rel="stylesheet" href="public/css/swiper.min.css">
		<script src="public/js/swiper.min.js"></script>

<title>Chủ đề</title>
	<body id="myPage">
<?php 
	include "app/controllers/nav.php";
?>
		<div class="w3-container" style="margin-top:110px;">
	<div class="sub-container">
		<?php
		foreach($data as $value){
		?>
			<div class="slide-left">
			<div class="pic">
		<img class="w3-spin w3-circle" style=" animation-duration: 4.5s;" src="<?php echo $value["Anh"] ?>" alt="music-playlist">
			</div>
				<center><h2><?php echo $value["tenBH"]?></h2></center>
				<audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    		</audio>
				</div>
		<?php }?>
			<div class="slide-right">
				<h2>
<b><span style="color:#090F9B; font-size: x-large;;"><center>Danh sách nhạc</center></span></b></h2>
				
    <ol id="playlist">
		<?php
		foreach($data as $value){
		?>
        <li class="current-song"><a href="<?php echo $value["link"]?>"><button>
            <span><img src="<?php echo $value["Anh"]?>" style="width:40px; height:40px; margin-left:5px;"></span>
            <?php echo $value["tenBH"]?>
			 <span style="position: absolute; right:35%;">
				 <?php
			$nghesi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
				if(isset($nghesi["maCS"]))
					echo $nghesi["tenCS"];
				 ?>
			</span>
            <span style="position: absolute; right:15%;"><?php echo substr($value["dateTime"],0,10)?></span></button></a></li><?php }?>
    </ol>

		<hr>
<h2>Bài hát cùng chủ đề</h2>
	<div class="swiper-container">
    <div class="swiper-wrapper">
	 <?php
		  foreach($data as $value ){
	  $data8 = $this->Model->fetch("select * from song where maCD =".$value["maCD"]." and maBH !=".$value["maBH"]." limit 10");
		foreach($data8 as $key){
	?>
       <div class="swiper-slide">
            <div class="single-square">
			  <div class="profile-pic">
				  <a href="index.php?controller=song/detail&id=<?php echo $key["maBH"] ?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=song/detail&id=<?php echo $key["maBH"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
			    </div>
					  </a>
            </div>
				<p><?php echo $key["tenBH"] ?></p>
			</div>
		     </div>
		  <?php }}?>
		</div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
<hr>	
<div>
<h2>Nhạc mới phát hành</h2>
	<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php
	  $data8 = $this->Model->fetch("select * from song where moi != 0 limit 10");
		foreach($data8 as $listsong){
	?>
      <div class="swiper-slide">
		 <div class="single-square">
           	<div class="profile-pic">
				<a href="index.php?controller=song/detail&id=<?php echo $listsong["maBH"] ?>">
				  <img src="<?php echo $listsong["Anh"] ?>" alt="<?php echo $listsong["tenBH"]?>">
				  <div class="img-btn">
				  <a href="index.php?controller=song/detail&id=<?php echo $listsong["maBH"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
				  </a>
				  </div></a>
	  		  </div>
				 <a href="index.php?controller=song/detail&id=<?php echo $listsong["maBH"] ?>"><?php echo $listsong["tenBH"]?></a>
			  </div>
	  </div>
		<?php }?>
    </div>
		 <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>	
</div>
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
