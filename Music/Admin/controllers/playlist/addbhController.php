<?php
	
	class AddListBH extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$name = $_POST["name"];
					$baihat = $_POST["baihat"];
					$id = $_POST["id"];
					$metaTitle = RemoveString($name);
				
					$this->Model->execute("update song set maList='$id' where maBH='$baihat'" );
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=playlist/detail&id=$id'>";
					break;
					
					
					
				
			}
				$id = isset($_GET["id"])?$_GET["id"]:"";
			$data = $this->Model->fetch("select * from listbh where maList='$id'");
			include "views/playlist/addbhView.php";
		}
	}
	new AddListBH();

?>