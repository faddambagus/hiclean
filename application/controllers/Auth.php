<?php
class Auth extends CI_Controller {

	function __construct()	
	{
		parent::__construct();
		$this->load->model("AdminModel");
		$this->load->model("UserModel");
	}

	public function post_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$user = $this->AdminModel->findOne("username", $username);
		if($user != null)
		{
			if(password_verify($password, $user->password))
			{
				$this->session->set_userdata(["login" => $user->id_user]);
				if($user->role == "admin")
				{
					$this->session->set_userdata(["admin" => true]);
					redirect(base_url('allReport'));
				}
				else
				{
                    // echo "<pre>";
                    // print_r($user->id_user);
                    // echo "</pre>";
					redirect(base_url('home_user'));
				}
			}
			else
			{
				echo"
 				<script>
 					alert('Password salah');
 					document.location.href = 'Landing_Page';
 				</script>";
			}
		}
		else{
			echo"
 			<script>
 				alert('Isikan Username yang sudah terdaftar! Jika belum mempunyai akun, silahkan daftar terlebih dahulu');
 				document.location.href = 'Landing_Page';
 			</script>";
		}
	}

    public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Landing_Page'));
	}

}