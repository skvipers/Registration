<?php 

	namespace Controller;
	
	class Registration
	{
		
		public function actionIndex()
		{
			if(isset($_SESSION['id'])) {
				header('Location: /cabinet');
				return '';
			} 
			return (new \Raptor\Templater('registration'))->set('error', isset($_REQUEST['error']))->render();
		}
		
	}