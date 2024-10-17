<form action="" method="POST" >
  <div class="container">
    <h1>Register</h1>
    <p>Yêu cầu điền thông tin đăng ký.</p>
    <hr>

    <label for="name"><b>ma_ct</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="password"><b>Mật khẩu</b></label>
    <input type="text" placeholder="Enter Password" name="password" id="password" required>

    <label for="repassword"><b>Nhập lại mật khẩu</b></label>
    <input type="text" placeholder="Repeat Password" name="repassword" id="repassword" required>
    <hr>

    <p>Bạn có đồng ý với điều khoản của chúng tôi <a href="#">Terms & Privacy</a>.</p>

    <button name="register" type="submit" class="registerbtn">Đăng ký</button>
  </div>

  <div class="small" >
    <p>Bạn đã có tài khoản? <a href="index.php?task=pagelogin">Đăng nhập</a>.</p>
  </div>
</form>