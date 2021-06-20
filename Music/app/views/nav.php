
<div class="top">
	<div class="logo">
		<div class="sub-container">
	<ul>
  <li style="width:200px;height:100%;"><a href="index.php">
	  <i class="fa fa-soundcloud"></i>Home</a></li>
 		<li style="padding-left:50px;margin-top:10px;">
			<form action="index.php?controller=search&act=search" method="post" enctype="multipart/form-data">
  		<input type="search" name="search" placeholder="Search">
			</form>
		</li>
		</ul>
	</div>
		</div>
		
	<div class ="navigate">
	<div class="sub-container">
	<ul>
  	<li>
	    <a href="index.php?controller=song/moi">Mới phát hành</a>
	</li>
		<li>
			 <div class="dropdown">
		
    <button>Chủ đề 
    </button>
		
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
		<h4 style="color:grey"><b>Đề xuất</b></h4>  
		<?php
		$data1 = $this->Model->fetch("select * from chude where loaiCD='Đề xuất'");
		foreach($data1 as $value){
		?>
          <a href="index.php?controller=chude/list&id=<?php echo $value["maCD"] ?>"><?php echo $value["tenCD"] ?></a>
		<?php } ?>
        </div>
		
        <div class="column ">
          <h4 style="color:grey"><b>Thể loại</b></h4>
          <?php
		$data2 = $this->Model->fetch("select * from chude where loaiCD='Thể loại'");
		foreach($data2 as $value){
		?>
          <a href="index.php?controller=chude/list&id=<?php echo $value["maCD"] ?>""><?php echo $value["tenCD"] ?></a>
		<?php } ?>
       		 </div>
		  <div class="column">
          <h4 style="color:grey"><b>Tâm trạng</b></h4>
          <?php
		$data3 = $this->Model->fetch("select * from chude where loaiCD='Tâm trạng'");
		foreach($data3 as $value){
		?>
          <a href="index.php?controller=chude/list&id=<?php echo $value["maCD"] ?>""><?php echo $value["tenCD"] ?></a>
		<?php } ?>
       		 </div>
	
		  </div>
      </div>
    </div>
		</li>
    	<li>
		<div class="dropdown">
    <button>MV 
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h4 style="color:grey"><b>Việt Nam</b></h4>
			<?php
		$data4 = $this->Model->fetch("select * from loaimv where Quocgia='Việt Nam'");
		foreach($data4 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maLMV"] ?>"><?php echo $value["tenLMV"] ?></a>
		<?php } ?>
          

        </div>
        <div class="column">
          <h4 style="color:grey"><b>Âu Mỹ</b></h4>
          <?php
		$data5 = $this->Model->fetch("select * from loaimv where Quocgia='Âu Mỹ'");
		foreach($data5 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maLMV"] ?>"><?php echo $value["tenLMV"] ?></a>
		<?php } ?>
       		 </div>
		  <div class="column">
          <h4 style="color:grey"><b>Châu Á</b></h4>
         <?php
		$data6 = $this->Model->fetch("select * from loaimv where Quocgia='Châu Á'");
		foreach($data6 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maLMV"] ?>"><?php echo $value["tenLMV"] ?></a>
		<?php } ?>
		  </div>
		  </div>
      </div>
    </div>
	</li>
		<li>
			<div class="dropdown">
    <button>Album 
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h4 style="color:grey"><b>Việt Nam</b></h4>
			<?php
		$data4 = $this->Model->fetch("select * from album where Quocgia='Việt Nam'");
		foreach($data4 as $value){
		?>
          <a href="index.php?controller=album/list&id=<?php echo $value["maAB"] ?>"><?php echo $value["tenAB"] ?></a>
		<?php } ?>
          

        </div>
        <div class="column">
          <h4 style="color:grey"><b>Âu Mỹ</b></h4>
          <?php
		$data5 = $this->Model->fetch("select * from album where Quocgia='Âu Mỹ'");
		foreach($data5 as $value){
		?>
          <a href="index.php?controller=album/list&id=<?php echo $value["maAB"] ?>"><?php echo $value["tenAB"] ?></a>
		<?php } ?>
       		 </div>
		  <div class="column">
          <h4 style="color:grey"><b>Châu Á</b></h4>
         <?php
		$data6 = $this->Model->fetch("select * from album where Quocgia='Châu Á'");
		foreach($data6 as $value){
		?>
          <a href="index.php?controller=mv/list&id=<?php echo $value["maAB"] ?>"><?php echo $value["tenAB"] ?></a>
		<?php } ?>
		  </div>
		  </div>
      </div>
    </div>
		</li>
		<li>
			<div class="dropdown">
  		<button>Nghệ sĩ</button>
	  <div class="dropdown-content">
      <div class="row">
        <div class="column">
      <a href="index.php?controller=nghesi/list&quocgia=Việt Nam" >Việt Nam</a>
      <a href="index.php?controller=nghesi/list&quocgia=Âu Mỹ" >Âu Mỹ</a>
      <a href="index.php?controller=nghesi/list&quocgia=Châu Á">Châu Á</a>
			
    </div>
    </div>
    </div>
	</div>
		</li>
	</ul>
	</div>
</div>
</div>
