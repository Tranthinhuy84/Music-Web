<?php
	
	class AddMV extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$loaimv = $_POST["loaimv"];
					$casi = $_POST["casi"];
					$metaTitle = RemoveString($name);
					$quocgia = $_POST["quocgia"];
					
					if($_FILES["image"]["name"]){
						$image = "public/images/Bài hát-MV/".$_FILES["image"]["name"];
					}
					if($_FILES["mv"]["name"]){
						$link = "public/mv/".$_FILES["mv"]["name"];
					}

					$this->Model->execute("insert into mv(Anh, tenMV, maLMV, maCS, Quocgia, Link) values('$image','$name', '$loaimv','$casi', '$quocgia','$link')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=mv/list'>";
					break;
			}

			include "views/mv/addView.php";
		}
	}
	new AddMV();

?>