<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h3>Login</h3>
	<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Tài khoản</label>
    <input name="name" type="name" class="form-control"  aria-describedby=nameHelp>
    <div id="nameHelp" class="form-text">Chúng tôi sẽ không chia sẻ tài khoản của bạn cho bất kì ai.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" >
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button name="login" type="submit" class="btn btn-primary">Dang Nhap</button>
  <p>Nếu bạn chưa có tài khoản thì đăng ký <a href="index.php?task=pageregister">Tại đây </a>!</p>
</form>	
	</div>
	
</body>
</html>