<!DOCTYPE html>
<html>
<title>Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="public/css/Trangchu.css" type="text/css">
<link rel="stylesheet" href="public/css/swiper.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="https://tainhacmp3.biz/images/logo.png"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="public/js/swiper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<div class="w3-main">
<?php 
include "app/controllers/nav.php";
 ?>

<div class="w3-container" style="padding:32px;margin-top:70px;" id="myDIV">
	<div class="sub-container">
<button class="button">
<a href="index.php?controller=song/moi" id="moi">
<h2>Nhạc mới <span class="fa fa-chevron-right"></span></h2>
</a>
</button>	

<br>
	
<div class="w3-content w3-display-container">
<?php
	  $data7 = $this->Model->fetch("select * from song where moi !=0 order by maBH asc");
		$Stt=0;
		foreach($data7 as $value){
			$Stt++;
	?>
<div class="w3-display-container mySlides">
	 <a href="index.php?controller=song/detail&id=<?php echo $value["maBH"] ?>">
  <img src="<?php echo $value["Anh"]?>" alt="<?php echo $value["tenBH"]?>" style="width:100%">
  <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-text-white w3-black">
	  <h4><?php echo $value["tenBH"]?></h4>
  </div></a>
</div>
<?php }?>
<button class="prev" onclick="plusDivs(-1)">&#10094;</button>
<button class="next" onclick="plusDivs(1)">&#10095;</button>
</div>

<hr>
	<?php
	foreach($data as $value){
	?>
<button class="button">
  <a href="index.php?controller=album/detail&id=<?php echo $value["maList"] ?>">
<h2 ><?php echo $value["tenList"] ?> <span class="fa fa-chevron-right"></span>
</h2>
	</a>
</button>
	<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php
	  $data8 = $this->Model->fetch("select * from song where maList=".$value["maList"]." order by maBH asc");
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
    <!-- Add Pagination -->
  
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div><?php }?>
<hr>
		<h3>MV hay</h3>
		<div class="container">
        <?php
		$data8 = $this->Model->fetch("select * from mv limit 20");
		foreach($data8 as $key){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"]?>">
                <img src="<?php echo $key["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
				</a>
            </div>
				<a href="index.php?controller=mv/detail&id=<?php echo $key["maMV"] ?>"><?php echo $key["tenMV"]?></a>
				</div><?php } ?>
      </div>
	
	<hr>
		
		<h3>Album trong tuần</h3>
		<div class="container">
        <?php
		$data8 = $this->Model->fetch("select * from listbh limit 20");
		foreach($data8 as $list){
			?>
            <div class="mv">
			  <div class="profile-pic">
				  <a href="index.php?controller=album/detail&id=<?php echo $list["maList"]?>">
                <img src="<?php echo $list["Anh"]?>">
                <div class="img-btn">
					 <a href="index.php?controller=album/detail&id=<?php echo $list["maList"]?>">
                    <i class="fa fa-play-circle fa-3x"></i>
					</a>
				 </div>
				</a>
            </div>
				 <a href="index.php?controller=album/detail&id=<?php echo $list["maList"] ?>"><?php echo $list["tenList"]?></a>
				</div><?php } ?>
      </div>
		
		<hr>
<h3>Nghệ sĩ nổi bật</h3>
	<div class="swiper-container">
    <div class="swiper-wrapper">
		<?php
	  $data8 = $this->Model->fetch("select * from nghesi limit 10");
		foreach($data8 as $casi){
	?>
      <div class="swiper-slide">
		 <div class="single-square">
           	<div class="profile-pic">
				<a href="index.php?controller=nghesi/detail&id=<?php echo $casi["maCS"] ?>">
				  <img src="<?php echo $casi["Anh"] ?>" alt="<?php echo $casi["tenCS"]?>">
				  <div class="img-btn">
				  <a href="index.php?controller=nghesi/detail&id=<?php echo $casi["maCS"] ?>">
                    <i class="fa fa-play-circle fa-3x"></i>
				  </a>
				  </div></a>
	  		  </div>
				 <a href="index.php?controller=nghesi/detail&id=<?php echo $casi["maCS"] ?>"><?php echo $casi["tenCS"]?></a>
			  </div>
	  </div>
		<?php }?>
    </div>
    <!-- Add Pagination -->
  
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
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
    <a class="w3-button w3-theme" href="#"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
     

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
    document.getElementById("myIntro").classList.add("w3-show-inline-block");
  } else {
    document.getElementById("myIntro").classList.remove("w3-show-inline-block");
    document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
  }
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDIV");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
// Accordions
	
function myAccordion(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme", "");
  }
}
</script>
	 <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 20,
      slidesPerGroup: 5,
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
	
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500); // Change image every 2 seconds
}
</script>
     
</body>
</html> 
	