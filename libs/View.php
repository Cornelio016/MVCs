<?php 

	class View
	{
		public function __construct()
		{
			# code...
		}

		public function render($viewScript)
		{
			require ($viewScript);
		}
	}

?>