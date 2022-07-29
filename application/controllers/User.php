<?php
class User extends CI_Controller {

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

	public function home()
	{
		$this->load->view('user/homeUser');
	}
	public function services()
	{
		$this->load->view('user/services');
	}

	public function order()
	{

		$data = [
			"user" => $this->user,
			"user" => $this->UserModel->findAllByUser($this->user->id_user),
			"error" => " ",
		];

		$this->load->view('user/order', $data);
	}

	public function report()
	{
		$data['order'] = $this->UserModel->getOrderByUser($this->user->id_user);

		$this->load->view('user/report', $data);
	}

	public function profile()
	{
		$data = [
			"user" => $this->user,
			"user" => $this->UserModel->findAllByUser($this->user->id_user),
			"error" => " "
		];

		$this->load->view('user/profileUser', $data);
	}

	public function edit_profile()
	{
		$data = [
			"user" => $this->user,
			"user" => $this->UserModel->findAllByUser($this->user->id_user),
			"error" => " "
		];

		$this->load->view('edit_profile', $data);
	}

	public function insert_data() 
    {
        
        $id_user = $this->input->post("id_user");
        $id_order = $this->input->post("id_order");
		date_default_timezone_set('Asia/Jakarta');
		$order_date = date('Y-m-d');
		$jenis = $this->input->post("jenis");
        $pengirim = $this->input->post("pengirim");
        $alamat = $this->input->post("alamat");
        $jumlah = $this->input->post("jumlah");

		$data = array(
            "id_user" => $id_user,
            "id_order" => $id_order,
			"order_date" => $order_date,
			"jenis" => $jenis,
            "pengirim" => $pengirim,
            "alamat" => $alamat,
            "jumlah" => $jumlah,
        );

        $this->UserModel->input($data,'order');
        redirect('report');
	}

	public function change_profile()
	{
		$id_user = $this->input->post("id_user");
		$name = $this->input->post("name");
		$email = $this->input->post("email");
        $username = $this->input->post("username");

		$data = [
			"name" => $name,
            "email" => $email,
			"username" => $username,
		];
        
        if($this->UserModel->update($data, $id_user) == 1)
		{
            echo"
            <script>
                alert('Profile berhasil diubah');
                window.history.go(-2);
            </script>";
        }
        else {
            echo"
            <script>
                alert('Profile gagal diubah');
                window.history.go(-1);
            </script>";
        }
	}

}