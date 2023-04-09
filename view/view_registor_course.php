<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>regitor course</title>
        <link href="/dist/output.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">

      <a class="navbar-brand " href="../view_course.php"><i class="fas fa-angle-left"></i> หลักสูตรระยะสั้น</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item "><a class="nav-link " aria-current="page"
              href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
          <li class="nav-item "><a class="nav-link " href="https://forms.gle/Gd6Yzdffsb83qpZw7"
              target="_blank">ยืนยันการชำระเงิน</a></li>
          <!-- <li class="nav-item bg-or-3 rounded"><a class="nav-link text-light ms-2 ms-md-auto" href="../">หลักสูตรทั้งหมด</a></li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
  <header class="bg-or-5 py-1 bg-header-img">
    <div class="container-fluid px-4 px-lg-5 my-5">
      <div class="text-center orange-theme-4">
        <h1 class="display-4 fw-bolder">ลงทะเบียนหลักสูตรระยะสั้น</h1>
        <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
      </div>
    </div>
  </header>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                        <div class="w-full h-screen flex justify-center mt-2">
            <form action="../controller/con_registor_course.php" method="post">
                <div class="flex flex-col my-4 w-80">
                    <label for="email">อีเมล์</label>
                    <input type="email" class="form-control" name="re_email" id="email">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="title_name">คำนำหน้า</label>
                    <input type="text" class="form-control" name="re_title" id="re_title">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="name">ชื่อ</label>
                    <input type="text" class="form-control" name="re_name" id="name">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="phone">เบอร์ติดต่อ</label>
                    <input type="text" class="form-control" name="re_phonenumber" id="phone">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="id_number">เลขบัตรประจำตัว</label>
                    <input type="text" class="form-control" name="re_IDuser" id="id_number">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="hq">การศึกษาสูงสุด</label>
                    <input type="text" class="form-control" name="re_educational" id="hq">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="image">หลักฐานการโอน</label>
                    <input type="text" class="form-control" name="re_image_URL" id="image">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <center>
                        <button type="submit" value="สมัคร" class="btn btn-success">สมัคร</button>
                    </center>
                </div>
            </form>
        </div>
            </div>
            <div class="col"></div>
        </div>
    </body>
</html>