<?php
  include_once('views/main/navbar.php');
?>
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active" id="homepage-carousel-1" >
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Tại sao chọn KMS</h2>
          <!-- <h2 class="animate__animated animate__fadeInDown">Đây là các lí do vì sao Doanh nghiệp đối tác lựa chọn KMS</h2> -->
          <p class="animate__animated fanimate__adeInUp" >Đây là 02 lí do vì sao Doanh nghiệp đối tác lựa chọn KMS</p>
          <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Tìm hiểu thêm</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" id="homepage-carousel-2">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Chất lượng sản phẩm đã được chứng minh</h2>
          <p class="animate__animated animate__fadeInUp">Với kinh nghiệm cung cấp sản phẩm phần mềm cho hơn 200 khách hàng và tự xây dựng hàng loạt các dịch vụ của riêng mình, những điều ấy tạo nên khác biệt của riêng KMS.</p>
          <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Tìm hiểu thêm</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item"  id="homepage-carousel-3">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Không ngừng sáng tạo và đổi mới</h2>
          <p class="animate__animated animate__fadeInUp">KMS luôn chủ động thay đổi và ứng dụng các công nghệ mới để giúp cho mọi sản phẩm gửi tới khách hàng phải luôn là phiên bản sống động nhất.</p>
          <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto active">Tìm hiểu thêm</a>
        </div>
      </div>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->


  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
      <div class="container">
        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" id="short-about">
                <h3>KMS Technology là ai?</h3>
                <p class="fst-italic">
                KMS Technology, công ty dẫn đầu thị trường toàn cầu về phát triển phần mềm, dịch vụ thử nghiệm và tư vấn công nghệ hàng đầu cung cấp một bộ tích hợp các giải pháp tiên tiến giúp các doanh nghiệp đẩy nhanh tốc độ đưa sản phẩm ra thị trường
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Hợp tác thân thiện</li>
                  <li><i class="ri-check-double-line"></i> Độc lập tư duy</li>
                  <li><i class="ri-check-double-line"></i> Đảm bảo uy tín</li>
                  <li><i class="ri-check-double-line"></i> Tăng độ tin cậy</li>
                </ul>
                <a href="index.php?page=main&controller=about&action=index" class="btn-get-started animate__animated animate__fadeInUp scrollto" > Tìm hiểu thêm</a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t39.30808-6/278065156_2178552902308293_8357910151159284877_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=0debeb&_nc_ohc=fRlEU9KactEAX_3kY_Q&_nc_ht=scontent.fsgn2-3.fna&oh=00_AT-SGRrM15NSQHZujwbDkMqlAShFMjzQqu8975yR__DZ2g&oe=62A8E5B6" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

    <section id="features" class="features">
      <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <p>Các nhãn hàng thân thiết</p>
      </div>

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/C.png"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/leasequery.png"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/elemica-1.png"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/C7.png"></i>
          </a>
        </li>
        <br>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2021/05/conexiom-1.png"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/avetta.png"></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/clearwave.png "></i>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
            <i><img src="https://kms-technology.com/wp-content/uploads/2020/07/editshare.png"></i>
          </a>
        </li>
      </ul>
      </div>
    </section>
  
  <?php
include_once('views/main/footer.php');
?>


  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/assets/vendor/aos/aos.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="public/assets/js/main.js"></script>

</body>