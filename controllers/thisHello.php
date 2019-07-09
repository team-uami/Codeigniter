<?php
	class Hello extends CI_Controller//This is a controller name
	{
		public function __construct(){
			//First call the C.I.s default Constructor
			parent::__construct();

			//Then load the database library manually
			$this->load->database('');

			//Follow up with load Model
			$this->load->model('Hello_Model');
			}//End of function

		public function savedata(){
			//Load up the registration view form
			$this->load->view('registration');

			//A check submit button
			if($this->input->post('save')){
				//Pick up the form's data and store it in local var.
				$n=$this->input->post('name');
				$e=$this->input->post('email');
				$m=$this->input->post('mobile');

				//Call saveRecords method of Hello_model and pass the variables as parameters.
				$this->Hello_Model->saverecords($n,$e,$m);
				echo "Records have been registered successfully.";
			}//end of IF
		}//end of savedata
	}//end of class
?>