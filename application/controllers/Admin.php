<?php
class Admin extends CI_Controller {

	function __construct()	
	{
		parent::__construct();
        $this->load->model("AdminModel");
		$this->load->model("UserModel");

		if($this->session->userdata("login") == null)
		{
			redirect(base_url('Landing_Page'));
		}
		$this->user = $this->AdminModel->findOne("id_user", $this->session->userdata("login"));
	}

	public function allReport()
	{
		$data['allOrder'] = $this->AdminModel->getAllOrder();
		
		$this->load->view('admin/allReport', $data);
	}
	
	public function profile()
	{
		$data = [
			"user" => $this->user,
			"user" => $this->UserModel->findAllByUser($this->user->id_user),
			"error" => " "
		];

		$this->load->view('admin/profileAdmin', $data);
	}

	public function delete_order($id_order)
	{
		if($this->AdminModel->delete($id_order) != 1)
		{
            echo"
            <script>
                alert('Data gagal dihapus');
				window.history.go(-1);
            </script>";
        }
        echo"
        <script>
            alert('Data berhasil dihapus');
			window.history.go(-1);
        </script>";
	}

}