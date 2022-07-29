<?php
class Landing_Page extends CI_Controller {

	function __construct()	
	{
		parent::__construct();
        $this->load->model("AdminModel");
		$this->load->model("UserModel");
	}

	public function index() 
	{
		$this->load->view('landingPage');
	}

	public function register()
	{
		$this->load->view('admin/register');
	}

	public function login()
	{
		$this->load->view('user/login');
	}

	public function insert_account() 
    {
		$name = $this->input->post("name");
		$username = $this->input->post("username");
		$password = password_hash($this->input->post("password"), PASSWORD_DEFAULT);

        $user = $this->AdminModel->findOne("username", $username);
		if($user != null)
		{
			echo"
 			<script>
 				alert('Username telah terdaftar, pilih username lain');
 				document.location.href = '../register';
 			</script>";
		}
        else {

            $data = array(
                "name" => $name,
                "username" => $username,
                "password" => $password,
            );

            $this->AdminModel->input($data,'user');
			// echo "<pre>";
            // print_r($user->name);
            // echo "</pre>";
            
            if($user=='User')
            {
                redirect(base_url('Landing_Page'));
            }
            else
            {
                redirect(base_url('Landing_Page'));
            }
        }
    }
}