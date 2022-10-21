<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Sarabun:wght@200&display=swap" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Mystery</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <script src="dist/circle-progress.min.js"></script>
  <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/main.css" />


  <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->


  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Kanit", Times, serif;
    }

    body.d {
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Kanit", Times, serif;
      min-height: 100vh;
      background-color: #00f3e7;
      animation: animations 9s linear;
    }

    .box {
      position: relative;
      font-family: "Kanit", Times, serif;
      width: 300px;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: #fff;
      border-radius: 23px;
      box-shadow: 0px 30px 60px rgba(0, 0, 0, 0.2);
    }


    .box .percent {
      position: relative;
      width: 150px;
      height: 150px;
      font-family: "Kanit", Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .box .percent svg {
      position: relative;
      width: 150px;
      height: 150px;
    }

    .box .percent svg circle {
      width: 150px;
      height: 150px;
      fill: none;
      stroke-width: 10;
      stroke-dasharray: 440;
      font-family: "Kanit", Times, serif;
      stroke-dashoffset: 440;
      transform: translate(5px, 5px);
      stroke-linecap: round;
    }

    .box .percent svg circle:nth-child(1) {
      stroke-dashoffset: 0;
      stroke: #f3f3f3;
    }

    .box .percent svg circle:nth-child(2) {
      stroke-dashoffset: calc(440);
      stroke: #f40303;
      transition: stroke-dashoffset 9s ease-in-out;
      animation: animations 9s linear;
    }

    @keyframes animations {
      0% {
        stroke: #03f4c8;
        background-color: #03a9f4;
      }

      20% {
        stroke: #03a9f4;
      }

      40% {
        stroke: #03ecf4;
      }

      60% {
        stroke: #a803f4;
      }

      80% {
        stroke: #f4c803;
      }

      100% {
        stroke: #f40303;
        background-color: #00f3e7;
      }
    }

    #number {
      position: absolute;
      font-size: 28px;
      font-family: cursive;
      font-weight: 600;
    }

    .button {
      display: inline-block;
      border-radius: 4px;
      background-color: #f4511e;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding: 20px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button2 span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button2 span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .button2:hover span {
      padding-right: 25px;
    }

    .button2:hover span:after {
      opacity: 1;
      right: 0;
    }

    #number1 {
      position: absolute;
      font-size: 28px;
      font-family: cursive;
      font-weight: 600;
    }

    .loding-text {
      margin-top: 23px;
      font-size: 28px;
      font-family: cursive;
      font-weight: 600;
    }

    .card-category {
      background-color: #88d2f7;
      border-radius: 30px;
      text-align: center;
      padding: 0;
      border: black solid 2px;
    }

    .card-category:hover {
      transition: 0.2s ease-in-out;
      background-color: #40b5ed;
    }

    .about-us {
      background-image: none;
    }

    /* CSS */
    .button-85 {
      padding: 1em 2em;
      border: none;
      outline: none;
      color: rgb(255, 255, 255);
      background: #03a9f4;
      cursor: pointer;
      position: relative;
      z-index: 0;
      border-radius: 10px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-85:before {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      -webkit-filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing-button-85 20s linear infinite;
      transition: opacity 0.3s ease-in-out;
      border-radius: 10px;
    }

    @keyframes glowing-button-85 {
      0% {
        background-position: 0 0;
      }

      50% {
        background-position: 400% 0;
      }

      100% {
        background-position: 0 0;
      }
    }

    .button-85:after {
      z-index: -1;
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: #03a9f4;
      left: 0;
      top: 0;
      border-radius: 10px;
    }
  </style>
</head>

<body>


  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>


  <!-- ***** Preloader End ***** -->
    <?php include "header.php"; ?>


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>CHECK YOUR NUMBER</h6>
                <h3>เช็คดวง <em>จากโทรศัพท์มือถือ</em> <span></span> </h3>

                <!--<form id="form1" action="process2.php" method="POST" >
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="กรุณากรอกเบอร์ของท่าน..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" form= "form1"class="main-button">ทำนายเบอร์มือถือ</button>
                  </fieldset>
                </form> -->

                <form class="w3-container"  action="newpro.php" method="POST" id="form1">

                  <input name="mobile_number"  class=" w3-border w3-round-large shadow-sm " style="width: 100%; padding: 5px 11px; transition: none 0s ease 0s; text-align: inherit; line-height: 35px; border-width: 1px; marg_in: 0px; letter-spacing: 0px; font-weight: 700; font-size: 20px;" type="text" maxlength="10" minlength="10" name="mobile_number" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;">
                  <?php
                  if(isset($_GET['mesg'])){
                    echo '<span class="text-danger">'.$_GET['mesg'].'</span>';
                  }
                    ?>
                </form>
                <br>
                <!-- <button class="w3-button w3-purple" type="submit" form="form1" value="Submit"><h3>กดดูคำทำนาย</h3></button>-->
                <!--  <button type="submit" class="w3-button w3-purple"form="form1" value="Submit">ทำนายเบอร์มือถือ</button>  -->
                <div class="main-blue-button">

                  <button type="submit" class="button-85" form="form1" value="Submit">ทำนายเบอร์</button>
                </div>
                </form>
              </div>
            </div>

            <div class="col-lg-6">
              <div id="carouselExampleFade" class="carousel slide carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">

                    </div>
                    <center>

                      <div class="box">
                        <div class="percent">
                          <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70" class="numb"></circle>
                          </svg>
                          <div id="number">
                            0%
                          </div>
                        </div>
                        <div class="loding-text">
                          <p>เบอร์มงคล 100 %</p>
                        </div>
                      </div>

                  </div>

                  <div class="carousel-item">
                    <table class="table table-bordered border-primary text-center mb-5">
                      <tr>
                        <th colspan="3" class="py-3">เกรดเบอร์ แบ่งตามคะแนนที่ใด้</th>
                      </tr>
                      <tr class="bg-primary text-white">
                        <th colspan="2">เกรด</th>
                        <th>คะแนน</th>
                      </tr>
                      <?php
                      $array = array('S+'=>'999/1,000','A'=>'930/1,000','B'=>'480/1,000','C'=>'30/1,000');
                      foreach($array as $key => $value) { 
                        ?>
                        <tr>
                          <td><?php echo $key;?></td>
                          <td><?= $key == "S+" ? "ดีมาก" : "ดี";?></td>
                          <td><?php echo $value;?></td>
                        </tr>
                      <?php } ?>
                    </table>
                    <br><br><br><br><br>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


              <br><br><br><br><br><br><br><br><br>




            </div>
            <hr>

            <!-- content -->
            <div class="container">
              <div class="section-heading  wow bounceIn text-center mb-4" data-wow-duration="1s" data-wow-delay="0.2s">
                <h2>หมวดหมู่ &nbsp;<em>เบอร์มงคล</em></h2>
              </div>
              <div class="row">
                <?php
                include "connect.php";
                $query = $conn->query("SELECT * FROM tb_category");
                while ($row = $query->fetch_assoc()) {
                ?>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6 mb-4">
                    <div class="card card-category">
                      <div class="card-body">
                        <a href="category.php?ct=<?php echo $row['category_name']; ?>" class="text-dark">
                          <h5><?php echo $row['category_name']; ?></h5>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>



  <div id="about" class="about-us section" style="margin-top: -90px;">
    <div class="container">
      <div class="section-heading  wow bounceIn text-center mb-4" data-wow-duration="1s" data-wow-delay="0.2s">
        <h2>ยินดีต้อนรับสู่<br><em>Luckymongkol.com</em></h2>
      </div>

      <div class="col-lg-12 align-self-center">
        <div class="services">
          <p style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ทุกเบอร์ในเว็บไซต์เบอร์เทพ ผ่านการคัดเลือกมาอย่างถี่ถ้วนตามหลัก ศาสตร์พลังตัวเลข โดยผู้เชี่ยวชาญด้านพลังตัวเลขในเบอร์มือถือ ท่านสามารถเลือกเบอร์มือถือเองได้ โดยเลือกให้เหมาะสมกับอาชีพของท่าน และสิ่งที่ท่านต้องการเปลี่ยนแปลงชีวิต (ค้นหาเบอร์มงคลที่ท่านต้องการที่นี่) เมื่อเลือกเบอร์ที่ต้องการได้แล้ว ก็กดที่ตัวเลขเบอร์มือถือ เพื่ออ่านความหมาย คำทำนายเบอร์ ซึ่งเราก็ได้ทำระบบวิเคราะห์เบอร์มือถือไว้ให้ท่านอ่านความหมายของเบอร์เองได้อย่างละเอียดและแม่นยำ ซึ่งขอย้ำว่าผลรวมในเบอร์มือถือจะไม่ส่งผลกับตัวเรา ทั้งนี้การเลือกเบอร์มงคลให้เห็นผลและตรงจุดที่สุด ท่านควรเลือกตามอาชีพและเรื่องที่ท่านต้องการเปลี่ยนแปลงชีวิตจริงๆ เลือกเบอร์ให้เหมาะสมกับสิ่งที่แต่ละคนต้องการ เท่านี้ท่านก็จะสมปรารถนาดังที่หวัง ให้เบอร์มือถือมาช่วยเสริมพลังชีวิตของท่านในสิ่งที่ท่านขาด แล้วท่านก็จะพบกับความน่าอัศจรรย์ของศาสตร์พลังตัวเลข เมื่อท่านได้ลองเปลี่ยนเบอร์มือถือแล้วจริงๆ</p>
        </div>
      </div>
    </div>
  </div>
  </div>



      <!-- category price -->
      <?php include "category_price.php";?>



  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>บทความ <em>เทคนิค</em> ที่ไม่มีใคร <span>บอก</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>

          <?php include "news.php"; ?>

    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>เบอร์ดีๆเเละถูกๆมีอยู่จริง</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved.

            <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
  <script>

    

    const numb = document.querySelector(".numb");
    let conturs = 440;
    setInterval(() => {
      if (conturs == 0) {
        clearInterval();
      } else {
        const numbss = document.querySelector(".numb").style.strokeDashoffset = "calc(0 + 1)";
        numb.textContent = numbss + "%";
      }
    }, 80);
  </script>

  <script>
    const numbs = document.querySelector("#number");
    let conter = 0;
    setInterval(() => {
      if (conter == 100) {
        clearInterval();
      } else {
        conter += 1;
        numbs.textContent = conter + "%";
      }
    }, 80);
  </script>

</body>

</html>