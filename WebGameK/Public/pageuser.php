<!DOCTYPE html>
<html lang="en">
  <link href="bootstrap/bootstrap.css" rel="stylesheet" />
  <script src="bootstrap/bootstrap.bundle.js"></script>
  <script src="bootstrap/bootstrap.js"></script>
  <link rel="stylesheet" href="Templates/css/css.css" />
  <link rel="stylesheet" href="fontawesome/css/all.css" />
  <link rel="stylesheet" href="slick/slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="slick/slick-1.8.1/slick/slick-theme.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
  />
  <head> </head>
  <body>
    <div class="bg-light">
      <div class="container">
        <div class="row mt-3" style="min-height: 300px">
          <div class="col-lg-3">
            <h1>Quản lý</h1>
            <div class="list-group">
              <a class="list-group-item" href="">Quản lý thành viên</a>
              <a class="list-group-item" href="">Quản lý sản phẩm</a>
              <a class="list-group-item" href="">Quản lý đơn hàng</a>
            </div>
          </div>
          <div class="col-lg-9">
            <div>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#listuser"
                    >Danh sách thành viên</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#addmember"
                    >Thêm thành viên</a
                  >
                </li>
              </ul>
            </div>
            <div class="tab-content">
              <div id="listuser" class="container tab-pane active">
                <!--Danh sach thanh vien-->
                <h3 class="text-center">Danh sách thành viên</h3>
                <div class="text-center">
                  <table class="table text-center w-100">
                    <tr>
                      <th>ID</th>
                      <th>Họ tên</th>                    
                      <th>Mật khẩu</th>
                      <th>Xóa</th>
                      <th>Sửa</th>
                    </tr>
                   <?php
                                while ($row = mysqli_fetch_assoc($listUser)){ ?>
                                    <tr>
                                        <td><?php echo $row['id_user'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><a class="text-danger" href="index.php?task=deleteUser&id_user=<?php echo $row['id_user'] ?>"><i class="bi bi-trash"></i></a>Xoa</td>
                                        <td><a class="text-danger" href="index.php?task=deleteuser&iduser=<?php echo $row['id_user'] ?>"><i class="bi bi-pencil"></i></a>Sua</td>
  
                                    </tr>
                                <?php }; ?>
                  </table>
                </div>
              </div>
              <a class="text-danger" href="index.php/task=addUser">Them</a>
              <div id="addmember" class="container tab-pane fade">
                <!--Them thanh vien-->
                <h3 class="text-center">Thêm thành viên</h3>
                <form method="POST" action="">
                  <div class="form-group">
                    <label for="">Tên Người Dùng</label>
                    <input
                      class="form-control"
                      type="text"
                      name="name"
                      placeholder="Tên người dùng"
                    />
                  </div>                
                  <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input
                      class="form-control"
                      type="password"
                      name="password"
                      placeholder="Mật khẩu"
                    />
                  </div>
                  <div class="form-group">
                    <label for="">Nhập Lại Mật khẩu</label>
                    <input
                      class="form-control"
                      type="password"
                      name="repassword"
                      placeholder="Nhập lại mật khẩu"
                    />
                  </div>
                  <div>
                    <input
                      type="submit"
                      class="btn btn-primary"
                      name="register"
                      value="Thêm thành viên"
                    />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <!-- <?php include_once "Templates/Partials/Footer.php";?> -->
    </footer>
    <script src="bootstrap/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
  </body>
</html>
