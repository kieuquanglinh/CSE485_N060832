<?php  
include 'connection.php';
/**
 * 
 */
class M_thanhvien extends Database
{
	public function them_thanhvien($hoTen,$tenDangNhap, $email, $matKhau, $maKichHoat)
	{
   		$sql = 'INSERT INTO thanhvien(hoTen, tenDangNhap, email, matKhau, maKichHoat) 
   				VALUES (?,?,?,?,?)';		
   		$this->setQuery($sql);
	    $param=array($hoTen,$tenDangNhap, $email, $matKhau, $maKichHoat);
	    return $this->execute($param);
	}

	public function tim_theo_tdn($tenDangNhap)
	{

		$sql="SELECT * FROM thanhvien WHERE tenDangNhap=?";
		$this->setQuery($sql);
		return $this->loadRow(array($tenDangNhap));
	}
}
?>