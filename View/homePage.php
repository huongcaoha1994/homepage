<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="homePage.css">
</head>

<body>
    <?php 
    include("header.html") ;
    ?>
   <div id="carouselExample" class="carousel slide py-30" style="margin-top: -10%;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../image/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../image/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../image/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div id="content1">
        <div id="slogan">

            <h1 class="content-h1" style="margin-right:2%">KIẾN TRÚC </h1>
            <h1 class="content-h1" style="color:red"> AVAHOME</h1>
        </div>
        <h3 style="margin-bottom:1%">ĐƠN VỊ THIẾT KẾ KIẾN TRÚC VÀ XÂY DỰNG HÀNG ĐẦU CỦA XU HƯỚNG KIẾN TRÚC HIỆN ĐẠI</h3>
        <button type="button" class="btn btn-outline-danger">XEM THÊM</button>
    </div>

    <div class="image-container">
        <img src="../image/category1.jpg" alt="Image 1">
        <img src="../image/category2.jpg" alt="Image 2">
        <img src="../image/category3.jpg" alt="Image 3">
    </div>

    <div id="slogan">

        <h1 class="content-h1" style="margin-right:2%">DỰ ÁN </h1>
        <h1 class="content-h1" style="color:red">BIỆT THỰ HIỆN ĐẠI</h1>
    </div>

    <?php 
    include("show_product_bietthu.php");
    ?>

    <div id="slogan">

        <h1 class="content-h1" style="margin-right:2%">KIẾN TRÚC | </h1>
        <h1 class="content-h1" style="color:red">NHÀ PHỐ</h1>
    </div>

    <?php 
    include("show_product_nhapho.php");
    ?>

    <div id="slogan">

        <h1 class="content-h1" style="margin-right:2%"></h1>
        <h1 class="content-h1" style="color:red">NỘI THẤT</h1>
    </div>

    <?php 
    include("show_product_noithat.php");
    ?>

    <div id="container-employee">
        <img src="../image/employee1.jpg" alt="Image 1" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee2.jpg" alt="Image 2" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee3.jpg" alt="Image 3" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee4.jpg" alt="Image 4" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee5.jpg" alt="Image 5" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee6.jpg" alt="Image 6" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee7.jpg" alt="Image 7" class="img-fluid" width="12.5%" height="20vh">
        <img src="../image/employee8.jpg" alt="Image 8" class="img-fluid" width="12.5%" height="20vh">
    </div>

    <div class="container">
            <h1 class="text-center py-3">Bảng Giá Thiết Kế</h1>
                <div class="row" style="margin-top:10px">
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-price">
                                    <h5>NỘI THẤT VND/M2</h5>
                                </div>
                                <h1>150.000Đ</h1>
                                <p style="color:red">_____________________</p>
                                <h5>NỘI THẤT NHÀ PHỐ</h5>
                                <H6>HIỆN ĐẠI</H6>
                                <h6>150.000Đ</h6>
                                <h5>NỘI THẤT BIỆT THỰ</h5>
                                <h6>HIỆN ĐẠI</h6>
                                <h6>150.000Đ-200.000Đ</h6>
                                <p>---------------------------------</p>
                                <h6>Phối cảnh 3D nội thất</h6>
                                <h6>Hồ sơ chi tiết đồ nội thất</h6>
                                <h6>Hồ sơ chi tiết đồ nội thất</h6>
                                <h6>Bản vẽ điện chiếu sáng</h6>
                                <h6>Và các chi tiết liên quan</h6>
                                <h6>.....</h6>
                                <h6>.....</h6>

                                <div class="title-price">
                                    <h5 class="h5">CHOOSE PLAN</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-price">
                                    <h5>NHÀ PHỐ VNĐ/M²</h5>
                                </div>
                                <h1>150.000Đ</h1>
                                <p style="color:red">_____________________</p>
                                <h5>NHÀ PHỐ</h5>
                                <H6>HIỆN ĐẠI</H6>
                                <h6>150.000Đ</h6>
                                <h5>NHÀ PHỐ</h5>
                                <h6>TÂN CỔ ĐIỂN</h6>
                                <h6>150.000Đ-200.000Đ</h6>
                                <p>---------------------------------</p>
                                <h6>Phối cảnh 3D nội thất</h6>
                                <h6>Hồ Sơ xin CPXD</h6>
                                <h6>Bản vẽ chi tiết kiến trúc</h6>
                                <h6>Bản vẽ chi tiết kết cấu</h6>
                                <h6>Bản vẽ chi tiết điện</h6>
                                <h6>Bản vẽ chi tiết nước</h6>
                                <h6>Bản vẽ các chi tiết liên quan</h6>
                                <div class="title-price">
                                    <h5 class="h5">CHOOSE PLAN</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-price">
                                    <h5>BIỆT THỰ VNĐ/M²</h5>
                                </div>
                                <h1>200.000Đ</h1>
                                <p style="color:red">_____________________</p>
                                <h5>BIỆT THỰ</h5>
                                <H6>HIỆN ĐẠI</H6>
                                <h6>200.000Đ</h6>
                                <h5>BIỆT THỰ</h5>
                                <h6>TÂN CỔ ĐIỂN</h6>
                                <h6>200.000Đ-300.000Đ</h6>
                                <p>---------------------------------</p>
                                <h6>Phối cảnh 3D nội thất</h6>
                                <h6>Phối cảnh 3D tổng thể</h6>
                                <h6>Hồ sơ xin CPXD</h6>
                                <h6>Bản vẽ chi tiết kiến trúc</h6>
                                <h6>Bản vẽ chi tiết kết cấu</h6>
                                <h6>Bản vẽ chi tiết điện, nước</h6>
                                <h6>Bản vẽ các chi tiết liên quan</h6>
                                <div class="title-price">
                                    <h5 class="h5">CHOOSE PLAN</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-price">
                                    <h5>TK CẢI TẠO VNĐ/M²</h5>
                                </div>
                                <h1>100.000Đ</h1>
                                <p style="color:red">_____________________</p>
                                <h5>NHÀ PHỐ</h5>
                                <H6>HIỆN ĐẠI</H6>
                                <h6>150.000Đ</h6>
                                <h5>BIỆT THỰ</h5>
                                <h6>HIỆN ĐẠI</h6>
                                <h6>150.000Đ-200.000Đ</h6>
                                <p>---------------------------------</p>
                                <h6>Phối cảnh 3D cải tạo</h6>
                                <h6>Bản vẽ chi tiết phá dỡ cải tạo</h6>
                                <h6>Bản vẽ chi tiết kiến trúc</h6>
                                <h6>Bản vẽ chi tiết kết cấu</h6>
                                <h6>Bản vẽ chi tiết điện</h6>
                                <h6>Bản vẽ chi tiết nước</h6>
                                <h6>Bản vẽ các chi tiết liên quan</h6>
                                <div class="title-price">
                                    <h5 class="h5">CHOOSE PLAN</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <div id="working-process">
        <h1>QUY TRÌNH LÀM VIỆC</h1>
    </div>

    <?php 
    include("footer.php") ;
    ?>
   



















    <script>
    var slides = document.getElementsByClassName("slide");
    var currentIndex = 0;

    function showSlide() {
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        currentIndex++;
        if (currentIndex > slides.length) {
            currentIndex = 1;
        }
        slides[currentIndex - 1].style.display = "block";
        setTimeout(showSlide, 3000);
    }

    showSlide();
    </script>


</body>

</html>
