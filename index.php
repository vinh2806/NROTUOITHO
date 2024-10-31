<?php
include ('head.php');
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ngọc Rồng Tuổi Thơ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/images/icon/icon.ico">


  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- mycss -->
  <link rel="stylesheet" href="/css/main.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- myjs -->
  <!--<script src="js/tet.js"></script>-->

  <!-- bootstrap -->
  <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</head>
<script>
  function confirmLogout() {
    Swal.fire({
      title: 'Bạn có chắc chắn muốn đăng xuất?',
      text: "",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Đồng ý',
      cancelButtonText: 'Đóng'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Thành công',
          text: '',
          icon: 'success',
          timer: 1000,
          showConfirmButton: false
        }
        ).then(() => {
          window.location = 'out.php'
        });
      }
    })
  }
</script>
<div class="alert alert-warning" style="background-color: #FFCCCC;">
  <!--màu chi tiết sv-->
  <div class="topic_name">
    <div class="text-center mb-1">
      <small style="color: #661A24; font-size: 1.5em;"><b>Thông Báo Mới</b></small>
      <br><br>
    </div>
    <div class="notification-item" onclick="window.location.href='/update.php'">
      <div class="avatar-container">
        <img class="avatar" src="/image/20970.png">
      </div>
      <div class="content">
        <div class="alert-frame">
          <a class="alert-link link" href="/update.php" title="">
            Chi Tiết ngày 10 tháng 11
            <img class="gif-icon" src="/image/new.gif" style="vertical-align: middle;">
          </a>
          <div class="author" style="color: blue;"> bởi admin <b class="author" style="color: red;"> <b>Ngọc Rồng Tuổi Thơ ♥
                ♥ ♥</b>
          </div>
        </div>
      </div>
    </div>
    <div class="notification-item" onclick="window.location.href='/cochegame.php'">
      <div class="avatar-container">
        <img class="avatar" src="/image/20970.png">
      </div>
      <div class="content">
        <div class="alert-frame">
          <a class="alert-link link" href="/cochegame.php" title="">
            Cơ Chế Game Ngọc Rồng Tuổi Thơ
            <img class="gif-icon" src="/image/new.gif" style="vertical-align: middle;">
          </a>
          <div class="author" style="color: blue;"> bởi admin <b class="author" style="color: red;"> <b>Ngọc Rồng Tuổi Thơ  ♥
                ♥ ♥</b>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>


  <div class="content-banner-slide">
    <div class="slider">
      <div class="row position-relative">
        <div class="col-12 slider_in">
          <div class="swiper-container mySwiper slider_detail swiper-container-horizontal">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="javascript:void(0)">
                  <img src="/image/traidatne.png" alt="" class="img-fluid swiper-lazy w-100 loading_lazy"
                    data-ignore="true">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="javascript:void(0)">
                  <img src="/image/namecne.png" alt="" class="img-fluid swiper-lazy w-100 loading_lazy"
                    data-ignore="true">
                </a>
              </div>
              <div class="swiper-slide">
                <a href="javascript:void(0)">
                  <img src="/image/saiyanne.png" alt="" class="img-fluid swiper-lazy w-100 loading_lazy"
                    data-ignore="true">
                </a>
              </div>
            </div>
            <img class="swiper-button-prev" src="/image/mui_ten_2.png">
            <img class="swiper-button-next" src="/image/mui_ten_1.png">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Swiper JS -->
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var mySwiper = new Swiper('.mySwiper', {
        loop: true,
        centeredSlides: true, // Centered slide mode
        slidesPerView: 1, // Number of slides per view
        spaceBetween: 10, // Space between slides
        autoplay: {
          delay: 2000, // Auto play interval in milliseconds
          disableOnInteraction: false, // Enable/disable interaction to stop autoplay
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          768: {
            slidesPerView: 1, // Number of slides per view for larger screens
          },
        },
      });
    });
  </script>



  <div class="col">
    <div class="text text-dark text-left mt-2">
      <h4 class="ml-2 text-left">GIỚI THIỆU NGỌC RỒNG Tuổi Thơ,</h4>
      <!--</div>-->
      <!--<hr>-->
    </div>
    <div class="text text-dark p-2">
      <p style="">
      </p>
      <div class="">


        </b>
        <br>
        <h5><strong>Sơ lược về game</strong></h5>
        <hr>
        <p>Ngọc Rồng Tuổi Thơ, &ndash; game nhập vai trực tuyến với cốt truyện v&agrave; nh&acirc;n vật dựa tr&ecirc;n bộ
          truyện tranh nổi tiếng Nhật Bản Dragon Ball đ&atilde; từng l&agrave;m say l&ograve;ng bao nhi&ecirc;u
          thế hệ độc giả Việt Nam. Bạn sẽ chọn tiếp nhận h&agrave;nh tinh n&agrave;o, Tr&aacute;i Đất, Namếc hay
          Xayda? Cuộc h&agrave;nh tr&igrave;nh t&igrave;m kiếm ngọc rồng v&agrave; chống lại thế lực hung
          &aacute;c sẽ do bạn quyết định, vận mệnh lu&ocirc;n nằm trong tay người được chọn.</p>
        <p>C&ugrave;ng với sự hướng dẫn của c&aacute;c bậc tiền bối v&agrave; sự nỗ lực của bản th&acirc;n, bạn
          c&oacute; thể đạt đến sức mạnh vượt trội trở th&agrave;nh những chiến binh si&ecirc;u hạng. Ngo&agrave;i
          ra, bạn sẽ kh&ocirc;ng phải chiến đấu đơn độc khi xung quanh bạn l&agrave; bạn b&egrave; v&agrave; những
          chiến binh c&ugrave;ng ch&iacute; hướng, c&ugrave;ng hỗ trợ lẫn nhau đối đầu với c&aacute;c thế lực hắc
          &aacute;m.</p>
        <p>Ngọc Rồng Tuổi Thơ, l&agrave; tr&ograve; chơi trực tuyến đa nền tảng. Bạn c&oacute; thể chơi được tr&ecirc;n
          mọi nền tảng từ m&aacute;y t&iacute;nh PC Windows, iPhone, c&aacute;c d&ograve;ng m&aacute;y chạy hệ
          điều h&agrave;nh Android, Windows Phone đến c&aacute;c cả bản Java chạy tr&ecirc;n S40, S60 cũ của
          Nokia. Với chất lượng cao v&agrave; tốc độ mượt m&agrave; tr&ecirc;n c&aacute;c loại đường truyền mạng
          ADSL, 3G, GPRS.</p>
        <p>Tr&ograve; chơi th&iacute;ch hợp với mọi lứa tuổi. Điều khiển trực tiếp nh&acirc;n vật rất dễ
          d&agrave;ng tr&ecirc;n m&agrave;n h&igrave;nh cảm ứng. Khi chơi tr&ecirc;n PC bạn chỉ cần d&ugrave;ng
          chuột, hoặc linh hoạt điều khiển nh&acirc;n vật với b&agrave;n ph&iacute;m cứng điện thoại Nokia S40,
          S60.</p>
        <br>
        <h5><strong>Giới thiệu chung</strong></h5>
        <h6><strong>1. Class nh&acirc;n vật</strong></h6>
        <p>Game được l&agrave;m dựa tr&ecirc;n cốt truyện của bộ truyện tranh nổi tiếng Dragon Ball. Khi tham gia
          v&agrave;o thế giới Ngọc Rồng Tuổi Thơ, bạn c&oacute; thể chọn tham gia v&agrave;o 1 trong 3 h&agrave;nh tinh:
          Tr&aacute;i Đất, Namếc, Xayda với h&igrave;nh dạng v&agrave; những khả năng ri&ecirc;ng biệt.</p>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/zaOcDxM.png" alt="image 0" width="100%" height="auto">
        </div>
        <p class="text-center">Người Tr&aacute;i Đất: Với những kỹ năng đặc biệt kh&oacute; chịu đang chờ bạn
          kh&aacute;m ph&aacute; v&agrave; lựa chọn (Ch&uacute; &yacute;: sức mạnh của người Tr&aacute;i Đất sẽ
          ph&aacute;t huy tối đa khi đi theo nh&oacute;m). Đại diện: Gohan, Krillin, Yamcha,...</p>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/HXm7OMZ.png" alt="image 1" width="100%" height="auto">
        </div>
        <p class="text-center">Người Namếc: Sở hữu khả năng t&aacute;i tạo v&agrave; hỗ trợ đồng đội đ&aacute;ng
          kinh ngạc trong mọi cuộc chiến. Với khả năng của người Namếc c&oacute; thể gi&uacute;p trận chiến trở
          n&ecirc;n dễ d&agrave;ng với phe đồng minh. Đại diện: Ốc ti&ecirc;u, Pocollo v&agrave; Kami.</p>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/r35CVMP.png" alt="image 2" width="100%" height="auto">
        </div>
        <p class="text-center">Chiến binh Xayda: Sở hữu sức mạnh vượt trội, c&aacute;c chiến binh Xayda c&oacute;
          thể đơn độc qu&eacute;t sạch qu&acirc;n địch, trở th&agrave;nh cơn &aacute;c mộng với phe đối địch
          (Ch&uacute; &yacute;: Sức mạnh khủng khiếp của chiến binh Xayda c&oacute; thể kh&ocirc;ng ph&aacute;t
          huy hết khi hoạt động theo nh&oacute;m). Đại diện: Cađic, Rađic v&agrave; Kakalot.</p>
        <br>
        <h6><strong>2. Hệ thống nh&agrave;</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/BkERKsp.png" alt="image 3" width="100%" height="auto">
        </div>
        <p>- Nguồn hồi phục KI v&agrave; HP của c&aacute;c chiến binh ch&iacute;nh l&agrave; bằng đậu thần.
          C&aacute;c chiến binh c&oacute; thể d&ugrave;ng v&agrave;ng để n&acirc;ng cấp đậu thần, gia tăng khả
          năng hồi phục của đậu thần - v&agrave;ng n&agrave;o của nấy - Đậu cấp c&agrave;ng cao th&igrave; khả
          năng hồi phục c&agrave;ng nhiều.</p>
        <p>- Rương đồ d&ugrave;ng để cất giữ, bảo vệ những t&agrave;i sản qu&yacute; gi&aacute; của c&aacute;c
          chiến binh.</p>
        <br>
        <h6><strong>3. Bản đồ v&agrave; NPC</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            style="display: block; margin-left: auto; margin-right: auto;"
            src="https://ngocrongiron.com/frontend/images/info/q12bYu5.jpg" alt="image 4" width="400" height="352">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            style="display: block; margin-left: auto; margin-right: auto;"
            src="https://ngocrongiron.com/frontend/images/info/TGNZ8Dk.jpg" alt="image 5" width="400" height="352">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            style="display: block; margin-left: auto; margin-right: auto;"
            src="https://ngocrongiron.com/frontend/images/info/3iz3P7J.jpg" alt="image 6" width="400" height="352">
        </div>
        <p class="text-center">Hệ thống bản đồ phong ph&uacute;, đặc trưng của từng h&agrave;nh tinh.</p>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/Pn29BMO.png" alt="image 7" width="100%" height="auto">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/Asukhaq.png" alt="image 8" width="100%" height="auto">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/zR4FsMm.png" alt="image 9" width="100%" height="auto">
        </div>
        <p>- Những NPC nổi tiếng v&agrave; gắn liền với cốt truyện của Dragon Ball. Th&ocirc;ng qua c&aacute;c NPC
          đặc biệt như Thượng Đế, Thần M&egrave;o, bạn c&oacute; khả năng tăng sức mạnh v&agrave; tiềm năng của
          nh&acirc;n vật.</p>
        <br>
        <h6><strong>4. Hệ thống chi&ecirc;u thức, chiến đấu v&agrave; khả năng nh&acirc;n vật</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/sfsDnVB.png" alt="image 10" width="100%" height="auto">
        </div>
        <p>Mỗi h&agrave;nh tinh c&oacute; những hệ thống chi&ecirc;u thức kh&aacute;c nhau, t&ugrave;y v&agrave;o
          sở th&iacute;ch v&agrave; khả năng bản th&acirc;n, bạn c&oacute; thể n&acirc;ng cấp chi&ecirc;u thức,
          cũng như tiềm năng bản th&acirc;n để đạt sức mạnh cao nhất. C&acirc;n bằng h&agrave;i h&ograve;a giữa
          chỉ số bản th&acirc;n v&agrave; chi&ecirc;u thức c&oacute; thể gi&uacute;p bạn rất nhiều trong con đường
          trở th&agrave;nh chiến binh huyền thoại.</p>
        <br>
        <h6><strong>5. Nhiệm vụ ch&iacute;nh tuyến v&agrave; nhiệm vụ th&agrave;nh t&iacute;ch</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/FCa5rEG.png" alt="image 11" width="100%" height="auto">
        </div>
        <p>- Game c&oacute; hệ thống nhiệm vụ ch&iacute;nh tuyến phong ph&uacute;, đi theo cốt truyện. Th&ocirc;ng
          qua những nhiệm vụ n&agrave;y, bạn c&oacute; thể r&egrave;n luyện bản th&acirc;n v&agrave; đối đầu với
          những nh&acirc;n vật nổi tiếng như T&agrave;u Pảy Pảy, Akkuman, Thượng Đế&hellip;</p>
        <br>
        <h6><strong>6. Vật phẩm</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/PHjVuFp.png" alt="image 12" width="100%" height="auto">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/nBcrUMz.png" alt="image 13" width="100%" height="auto">
        </div>
        <p>- Bạn c&oacute; thể kiếm vật phẩm trang bị cho nh&acirc;n vật của m&igrave;nh bằng c&aacute;ch
          t&iacute;ch lũy v&agrave;ng trong game hoặc đ&aacute;nh qu&aacute;i rớt ra. Ngo&agrave;i ra bạn
          c&oacute; thể mua c&aacute;c s&aacute;ch kỹ năng để n&acirc;ng cấp chi&ecirc;u thức, cũng như avatar để
          biến h&oacute;a h&igrave;nh dạng khu&ocirc;n mặt, tạo sự độc nhất cho nh&acirc;n vật của m&igrave;nh.
        </p>
        <br>
        <h6><strong>7. Hệ thống hỗ trợ bay</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            style="display: block; margin-left: auto; margin-right: auto;"
            src="https://ngocrongiron.com/frontend/images/info/lupEyn7.png" alt="image 14" width="250" height="auto">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            style="display: block; margin-left: auto; margin-right: auto;"
            src="https://ngocrongiron.com/frontend/images/info/Go2lstg.png" alt="image 15" width="250" height="auto">
        </div>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            style="display: block; margin-left: auto; margin-right: auto;"
            src="https://ngocrongiron.com/frontend/images/info/u5xASfI.png" alt="image 16" width="250" height="auto">
        </div>
        <p>Với th&uacute; cưỡi , c&aacute;c bạn sẽ được phục hồi KI trong khi bay . H&atilde;y nhanh ch&oacute;ng
          t&igrave;m mua vật phẩm y&ecirc;u th&iacute;ch v&agrave; hữu &iacute;ch tr&ecirc;n trong cửa h&agrave;ng
          nh&eacute;</p>
        <br>
        <h6><strong>8. Đệ tử</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/plb0Dsp.png" alt="image 17" width="100%" height="auto">
        </div>
        <p>- Ngọc Rồng Tuổi Thơ sẽ xuất hiện 1 boss mới với t&ecirc;n gọi Broly ban đầu mới xuất hiện sẽ rất yếu.
          Nhưng khi đ&aacute;nh hắn, hắn sẽ mạnh dần l&ecirc;n đến khi hắn biến h&igrave;nh th&agrave;nh
          si&ecirc;u xayda t&oacute;c v&agrave;ng v&agrave; sẽ dắt theo 1 đệ tử. Nếu bạn đ&aacute;nh thắng Broly
          bạn sẽ nhận được t&ecirc;n đệ tử ấy.</p>
        <br>
        <h6><strong>9. Chi&ecirc;u thức Lưỡng Long Nhất Thể</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/UwfVcgk.png" alt="image 18" width="100%" height="auto">
        </div>
        <p>Bao gồm 4 loại: - Lưỡng long nhất thể: giữ trạng th&aacute;i biến h&igrave;nh 10 ph&uacute;t, sau khi
          t&aacute;ch ra phải chờ 10 ph&uacute;t sau mới d&ugrave;ng lại được. (d&agrave;nh cho d&acirc;n
          Tr&aacute;i Đất v&agrave; Xayda) - D&ugrave;ng b&ocirc;ng tai Porata: ( c&oacute; b&aacute;n tại npc
          Ur&ocirc;n) d&ugrave;ng b&ocirc;ng tai th&igrave; bất cứ l&uacute;c n&agrave;o cũng hợp thể được
          v&agrave; chủ d&ugrave;ng t&aacute;ch ra khi sử dụng lại b&ocirc;ng tai, b&ocirc;ng tai d&ugrave;ng vĩnh
          viễn.(d&agrave;nh cho d&acirc;n Tr&aacute;i Đất v&agrave; Xayda) - Hợp thể của người Namek.(d&agrave;nh
          cho d&acirc;n Namek) - Hợp thể vĩnh viễn của người Namek: l&agrave; đệ tử sẽ m&atilde;i m&atilde;i mất
          đi, khi đ&oacute; to&agrave;n bộ sức mạnh của đệ tử sẽ biến th&agrave;nh tiềm năng của sư
          phụ.(d&agrave;nh cho d&acirc;n Namek)</p>
        <br>
        <h6><strong>10. Trang bị Pha L&ecirc;</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/zvWbhaB.png" alt="image 19" width="100%" height="auto">
        </div>
        <p>Với m&oacute;n đồ bạn ưng &yacute; (vải th&ocirc;, lưỡng long, jean, zealot v.v..), h&atilde;y đem tới
          đảo Kame gặp b&agrave; hạt m&iacute;t để được ph&ugrave; ph&eacute;p pha l&ecirc; h&oacute;a cho trang
          bị của bạn. Những trang bị n&agrave;y sẽ trở n&ecirc;n vip hơn, mạnh hơn khi đ&atilde; được ph&ugrave;
          ph&eacute;p. Khi đ&aacute;nh qu&aacute;i sẽ c&oacute; cơ hội nhận được trang bị pha l&ecirc; c&oacute;
          thể &eacute;p pha l&ecirc; v&agrave;o. C&oacute; 7 loại pha l&ecirc;, 7 m&agrave;u sắc v&agrave;
          t&aacute;c dụng kh&aacute;c nhau. Bạn h&atilde;y đến gặp b&agrave; hạt m&iacute;t tại đảo kame để
          &eacute;p pha l&ecirc; v&agrave;o trang bị pha l&ecirc;. H&atilde;y nhớ trước khi &eacute;p ngọc NPC
          b&agrave; Hạt M&iacute;t sẽ cho biết trước th&ocirc;ng tin nh&eacute;.</p>
        <h6><strong>11. Gi&agrave;nh ngọc rồng sao đen</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/HC1NIoa.png" alt="image 20" width="100%" height="auto">
        </div>
        <p>Đ&acirc;y l&agrave; một chức năng hay d&agrave;nh cho bang hội. Chi tiết về sự kiện xem tại diễn
          đ&agrave;n.</p>
        <br>
        <h6><strong>11. Doanh trại độc nh&atilde;n</strong></h6>
        <div class="text-center"><img class="img-gk mb-3 swiper-lazy loading_lazy"
            src="https://ngocrongiron.com/frontend/images/info/sIpZ0yM.png" alt="image 22" width="100%" height="auto">
        </div>
        <p>- Để tham gia c&aacute;c bạn đến gặp L&iacute;nh canh rừng Bambo tr&aacute;i đất. C&oacute; 10 cửa ải :
          Từ tường th&agrave;nh đến Trại độc nh&atilde;n v&agrave; cuối c&ugrave;ng l&agrave; Tầng 1 , Tầng 2 ,
          Tầng 3 , Tầng 4</p>
        <br>
        <h6><strong>12. Những cập nhật hấp dẫn kh&aacute;c</strong></h6>
        <p>...</p>

        <div class="text text-dark text-left mt-2">
          <h4 class="ml-2 text-left">Đặc điểm nổi bật</h4>
          <p><img src=../image/hot.gif style="max-width:100%"></p>
        </div>
        <div class="text text-dark text-left" style="padding: 20px">

          <p></p>
        </div>
        <div class="modal right fade" id="Noti_Home" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
          <div class="modal-dialog modal-side modal-bottom-right">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #FFCCCC; color: #FFF; text-align: center;">
                <img src="../image/hot.gif"
                  style="display: block; margin-left: auto; margin-right: auto; max-width: 250px;">
              </div>
              <div class="modal-body">
                <p style="padding: 10px">
                  <b style="color: red; text-align: center;">THÔNG BÁO: </b><br />
                  <b style="color: blue;">- Phiên bản IOS hiện tại đã có mặt trên nền tảng
                    TestFlight !!!!</b><br />
                  <b style="color: blue;">- Chính thức khai mở sever Ngọc Rồng Tuổi Thơ !!!!</b><br />
                  <b style="color: blue;">- Hàng Tuần Update sự kiện Tại Npc Ở Nhà, các
                    sự kiện quanh đảo đảo kame và các làng !!!!</b><br />
                  <b style="color: blue;">- Cơ chế SKH nâng từng bậc </b><br />
                  <small>
                    <center>
                      <b>Chi tiết xem tại thêm bên dưới.</b><br />
                    </center>
                  </small>
                </p>

               <div
                    style="display: flex; justify-content: center; align-items: center; gap: 25px; margin-bottom: 10;">
                    <a href="https://drive.google.com/file/d/1eQp3dtHSG4tGzdyERc7RDua6x77BNYH-/view?usp=drive_link" style="border-radius: 20px; width: 100px; text-decoration: none;">
                      <img src="../image/apk.png" style="max-width: 120px; display: block; margin: auto;">
                    </a>

                    <a href="https://drive.google.com/file/d/1PKLtozn0Fv8MuwomyUl892vtk03kiLv1/view?usp=drive_link" style="border-radius: 20px; width: 100px; text-decoration: none;">
                      <img src="../image/pc.png" style="max-width: 120px; display: block; margin: auto;">
                    </a>

                    <a href="https://drive.google.com/file/d/1GWRNh2spifpkgtiVxPBAjfa21kqDOgE5/view?usp=drive_link"
                      
                      style="border-radius: 20px; width: 100px; text-decoration: none;">
                      <img src="../image/ios.png" style="max-width: 120px; display: block; margin: auto;">
                    </a>
                  </div>

                <div style="display: flex; justify-content: center; align-items: center; gap: 0px; margin-bottom: 0px;">
                  <a href="https://zalo.me/g/vrjvff914"
                    style="border-radius: 120px; width: 120px; text-decoration: none;">
                    <img src="../image/zalo.png" style="max-width: 120px; display: block; margin: auto;">
                  </a>

                  <a href="https://zalo.me/g/vrjvff914"
                    style="border-radius: 20px; width: 125px; text-decoration: none;">
                    <img src="../image/face.png" style="max-width: 120px; display: block; margin: auto;">
                  </a>

                  <a href="../bxh.php" style="border-radius: 20px; width: 125px; text-decoration: none;">
                    <img src="../image/bxh.png" style="max-width: 120px; display: block; margin: auto;">
                  </a>
                </div>

                <div class="modal-footer">
                  <b>Thân ái,
                    <span style="color: purple;">Admin !</span>
                    <!--<img src="../an_remake/images/icon/admin.png" width="35" height="35" />-->
                    <span style="color: red;"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  </b>
                </div>
              </div>
            </div>
          </div>
        </div>


        <script type="text/javascript">
          $(document).ready(function () {
            $('#Noti_Home').modal('show');
          })
        </script>
        <!-- footer -->
        <footer class="mt-1">
          <br>
          <div class="text-center text-black">
            <script>
              function getYear() {
                var date = new Date();
                var year = date.getFullYear();
                document.getElementById("currentYear").innerHTML = year;
              }
            </script>

            <body onload="getYear()">
              <small>
                <b>NGỌC RỒNG TUỔI THƠ</b>
              </small>
              <br>
              <small>
                <span id="currentYear"></span> © Được Vận Hành Bởi <b>
                  <u>Nro Tuổi Thơ</u>
                </b>
              </small>
            </body>
          </div>
        </footer>
      </div>
      </body>

</html>