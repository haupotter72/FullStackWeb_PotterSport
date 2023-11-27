<?php
require_once("Models/Wishlist.php");
class CartController
{
    var $wish_model;
    public function __construct()
    {
        $this->wish_model = new Wishlist();
    }
    function list_wish()
    {
        $data_danhmuc = $this->wish_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->wish_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/index.php');
    }
    function add_wish()
    {
        $id = $_GET['id'];
        $data = $this->wish_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
            $arr['SoLuong'] = $arr['soluong'] + 1;
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = 1;
            $arr['ThanhTien'] = $data['DonGia'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['sanpham'][$id] = $arr;
        }

        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
        }

        header('Location:?act=wish#dxd');
    }
    function update_wish()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['SoLuong'] = $arr['SoLuong'] + 1;
        $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location: ?act=wish#dxd');
    }
    function delete_wish()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if ($arr['SoLuong'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?act=wish#dxd');
    }
    function deleteall_wish()
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        header('Location: ?act=wish#dxd');
    }
}
