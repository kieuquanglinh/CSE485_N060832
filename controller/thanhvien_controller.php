<?php 
/**
 * 
 */
session_start();
include 'model/thanhvien_model.php';
if(isset($_SESSION['sessionid'])){
	header('location: index.php');
}
class C_thanhvien
{	
	public function dangky()
	{
		
		$thanhvien = new M_thanhvien();
		if(isset($_POST['btnDangkyTV'])){
			$hoTen = $_POST['hoTen'];
			$tenDangNhap = $_POST['tenDangNhap'];
			$email = $_POST['email'];
			$matKhau = $_POST['matKhau'];
			$xn_matKhau = $_POST['xn_matKhau'];
			$maKichHoat = md5(rand());
			if($matKhau != $xn_matKhau){
				echo "<script>alert('Xác nhận mật khẩu không khớp không khớp')</script>";
			}
			else {
				$dangki = $thanhvien->them_thanhvien($hoTen, $tenDangNhap, $email,password_hash($matKhau, PASSWORD_BCRYPT), $maKichHoat);
				if($dangki){
					// $url = 'http://localhost/BaiTapLon/';
   					// $to = $email;
					// $subject = "Hệ Thống Quản Lí Đồ Án - Xác nhận email đăng ký thành viên";
					// $txt = "Mời bạn vào liên kết sau để xác nhận email:" . $url . 'email_xacthuc.php?makichhoat=' . $makichhoat;

					// $headers = "From: linhkq62@wru.vn";
					// if(mail($to,$subject,$txt,$headers)){
					// 	header('location: ');
					// } else {
					// 	header('location: ');					
					// }
					echo "<script>alert('Đăng ký thành công')</script>";
				}
			}
		}
	}
	public function dangnhap()
	{
		$thanhvien = new M_thanhvien();
		if(isset($_POST['btnDangnhap'])){
			$tenDangNhap = $_POST['tenDangNhap'];
			$matKhau = $_POST['matKhau'];
			$kq = $thanhvien->tim_theo_tdn($tenDangNhap);
			if($kq){
				$noidung = array('kq'=>$kq);
				$pass = $noidung['kq']->matKhau;
				if(password_verify($matKhau, $pass)){
					$_SESSION['sessionid'] =rand(); 
					$_SESSION['tenDangNhap'] = $tenDangNhap;
					header('location: index.php');
					
				}
				else{
					echo "<script>alert('Thông tin đăng nhập không chính xác')</script>";
				}
				
			} else {
				echo "<script>alert('Thông tin đăng nhập không chính xác')</script>";
			}
		}
	}
	public function dangxuat()
    {
        session_destroy();
        header('Location: index.php');
    }
	
}
?>