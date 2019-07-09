<?php

	Class UserModel extends CI_Model
	{
		public function construct()
		{
			parent:: __construct();
		}
		public function modelDialogue()
		{
			echo "This is how we get to a function inside a model.";
			echo " We can use methods presented in other models by first loading the Model(\$this)";
		}


	}

?>