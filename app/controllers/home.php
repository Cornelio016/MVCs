<?php 

class HOME extends Controller
{
	public function index($name = '')
	{
		$user = $this->model('User');
		$user->name = $name;
		
		$this->view('home/index', ['name' => $user->name]);
	}

}

?>