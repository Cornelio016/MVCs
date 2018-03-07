<?php 
	require_once 'libs/Controller.php';

	class Errors extends Controller
	{
		public function IndexAction()
		{
			$this->view->message = "Thw Controller does not exist";
			$this->view->render('views/error/index.phtml');
		}
	}

?>