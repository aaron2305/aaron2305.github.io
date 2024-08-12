<!DOCTYPE html>
<html>
    <head>
      <title>ABTV-Xem trực tiếp bóng đá của A6</title>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1"/>
      <link rel="stylesheet" href="css/trang-chu.css">
      <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <header>
        <div class="navbar">
          <ul>
			<li><a href="logout.php">Đăng xuất</a></li>
            <li><a href="gioi-thieu.html">Giới thiệu</a></li>
            <li><a href="index.html">Trang chủ</a></li>
            <li><h1 id="web-name">ABTV</h1></li>
          </ul>
        </div>
    </header>
    <body style="background-color: #000000;">
		<h1 class="hello">Xin chào, <?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?>!</h1>
    <div class="video-frame">
		  <iframe src="frame/index.html" frameborder="0" id="computer-frame"></iframe>
      <iframe src="frame/frame-2.html" frameborder="0" id="mobile-frame"></iframe>
	  </div>
        <div class="match-information">
        <!--Match information-->
        <div class="team-line">
          <div class="team-member">
            <h1>THÔNG TIN TRẬN ĐẤU</h1>
            <!--Home team-->
            <h2>Đội hình ra sân của 8A6:</h2>
            <p>Thủ môn: Chưa cập nhật</p>
            <p>Tiền đạo: Chưa cập nhật</p>
            <p>Tiền vệ: Chưa cập nhật</p>
            <!--Away team-->
            <h2>Đội hình ra sân của 8A7:</h2>
            <p>Thủ môn: Chưa cập nhật</p>
            <p>Tiền đạo: Chưa cập nhật</p>
            <p>Tiền vệ: Chưa cập nhật</p>
            <!--Ads 1-->
        </div>
        </div>
        </div>
        <div class="footer-blank"></div>
      <!--Script-->
    <script>

        /* Storing user's device details in a variable*/
        let details = navigator.userAgent; 
          
        /* Creating a regular expression  
        containing some mobile devices keywords  
        to search it in details string*/
        let regexp = /android|iphone|kindle|ipad/i; 
          
        /* Using test() method to search regexp in details 
        it returns boolean value*/
        let isMobileDevice = regexp.test(details); 
          
        if (isMobileDevice) { 
            document.getElementById('computer-frame').style.display = 'none';
        } else { 
            document.getElementById('mobile-frame').style.display = 'none';
        }

    </script>
    <script>
      document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    </script>
  
    </body>
        <footer id="footer">
            <div class="footer-container">
              <div class="contact-in4">
                <h1>Nhà đài ABui</h1>
                <h2>Email: <a href="mailto:lqd-8a6class@outlook.com">lqd-8a6class@outlook.com</a></h2>
                <h2>Số điện thoại: <a href="tel:+84766226679">0766226679</a></h2>
              </div>
            </div>
          </footer>


</html>