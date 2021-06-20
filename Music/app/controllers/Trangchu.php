<?php
	
	class homeClient extends Controller{
		public function __construct(){
			parent::__construct();
			$data = $this->Model->fetch("select * from listbh order by maList asc limit 3");
			include "app/views/Trangchu.php";
		}
	}
	new homeClient();

?>