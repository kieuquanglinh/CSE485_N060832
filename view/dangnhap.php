<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/ico.jpg">
  <title>Hệ Thống Quản Lý Đồ Án Tốt Nghiệp</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
  <div class=" py-5 text-center" style="background-image: url(public/body-bg.jpg); background-size: cover; display: flex; align-items: center; justify-content: center; height: 100vh">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 p-5" style="background-color: rgba(0,0,0,.6); color: white; border-radius: 10px; box-shadow: 0 2px 3px rgba(0,0,0,.3);">
          <small class="form-text text-muted text-left">
              <a href="index.php">Trở về trang chủ</a>
          </small>
          <h1 class="mb-4">Đăng Nhập</h1>
          <form action="" method="post">
            <div class="form-group"> 
              <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" id="tenDangNhap"
                name="tenDangNhap"> 
              </div>
            <div class="form-group mb-3">
              <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="matKhau" name="matKhau" style="opacity: 0.5;">
              <small class="form-text text-muted text-right">
                <a href="#"> Quên mật khẩu</a>
              </small>
            </div>
            <button type="submit" class="btn btn-primary" name="btnDangnhap">Đăng nhập</button>
            <small class="form-text text-muted text-right"> Bạn chưa là thành viên?
              <a href="dang-ky.php">Đăng Ký</a>
            </small>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>