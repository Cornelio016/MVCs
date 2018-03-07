<?php 
	
	require 'libs/Controller.php';

	class Index extends Controller
	{
		public function IndexAction($id)
		{
			$this->view->message = 'Hello World from Index Controller index action!';
		}
	}

?>