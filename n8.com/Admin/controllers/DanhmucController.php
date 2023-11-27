	<?php
require_once("Models/danhmuc.php");
class DanhmucController
{
	var $danhmuc_model;
	function __construct()
	{
		$this->danhmuc_model = new Danhmuc();
	}

	public function list()
	{
		$data = array();
		$data = $this->danhmuc_model->All(); 
		require_once("Views/Admin/index.php");
		//require_once('views/categories/list.php');
	}

	public function add()
	{
		require_once("Views/Admin/index.php");
		//require_once('views/categories/add.php');
	}
	
	public function store()
	{
		$target_dir = "../public/images/products/";  // thư mục chứa file upload

        $AnhLogo = "";
        $target_file = $target_dir . basename($_FILES["AnhLogo"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["AnhLogo"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $AnhLogo =  basename($_FILES["AnhLogo"]["name"]);
		}

		$data = array(
			'MaDM' => $_POST['MaDM'],
			'AnhLogo' => $AnhLogo,
			'TenDM' => $_POST['TenDM'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->danhmuc_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once("Views/Admin/index.php");
		//require_once('views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->danhmuc_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once("Views/Admin/index.php");
		//require_once('views/categories/edit.php');
	}

	public function update()
	{
		$target_dir = "../public/images/products/";  // thư mục chứa file upload

        $AnhLogo = "";
        $target_file = $target_dir . basename($_FILES["AnhLogo"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["AnhLogo"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $AnhLogo =  basename($_FILES["AnhLogo"]["name"]);
		}
		$data = array(
			'MaDM' => $_POST['MaDM'],
			'TenDM' => $_POST['TenDM'],
			'AnhLogo' => $AnhLogo,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		if ($AnhLogo == "") {
            unset($data['AnhLogo']);
        }
		$this->danhmuc_model->update($data);
	}
}
