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

  <title>เบอร์ลิขิต</title>

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


    h1 {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      /* ผสาน border ระหว่าง table กับ td  */
      border-collapse: collapse;
    }

    table,
    td {
      border: 1px solid #5D6D7E;
      text-align: center;
    }

    thead {
      background-color: #273746;
      color: #BDC3C7;
    }

    /* Striped Tables: ทำไฮไล์ในการแบ่ง row  */
    tr:nth-child(even) {
      background-color: #BDC3C7;
    }

    td {
      height: 30px;
      vertical-align: center;
    }

    .name {
      text-align: left;
      padding-left: 16px;
    }

    .card-background {
      background: rgb(160, 175, 246);
      background: linear-gradient(176deg, rgba(160, 175, 246, 1) 0%, rgba(225, 222, 238, 1) 100%);
      border-radius: 20px;
      box-shadow: 0 0 2px 0;
      /* width: 70%; */
      font-weight: bold;
      text-align: center;
      /* padding: 15px; */
      font-size: large;
      margin: 20px;
      transition: 0.5s ease-in;
    }

    .card-background:hover {
      background: rgb(160, 175, 246);
      background: linear-gradient(80deg, rgba(160, 175, 246, 1) 0%, rgba(225, 222, 238, 1) 100%);
      transition: 0.5s ease-in;
    }

    .btn-select {
      margin-top: 10px;
      border: black 1px solid;
      opacity: 10;
      background: rgb(160, 175, 246);
      background: linear-gradient(176deg, rgba(160, 175, 246, 1) 0%, rgba(225, 222, 238, 1) 100%);

      width: 53%;
      border-radius: 15px;
      padding: 7px;
      cursor: pointer;
    }

    .btn-select:hover {
      transition: 0.4s ease-in-out;
      box-shadow: 0 0 5px 0 purple;
      background: rgb(197, 167, 217);
      background: linear-gradient(180deg, rgba(197, 167, 217, 1) 35%, rgba(198, 213, 218, 1) 100%);
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

  <!-- ***** Header Area Start ***** -->
  <?php include "header.php"; ?>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h2>เบอร์ราคาไม่เกิน <?= number_format($_GET['id']); ?> บาท</h2> <br>
                <h4>เรา <em>ได้คัดเลือก</em> <span></span> เบอร์ที่ดีที่สุดเเละราคาไม่เกิน 1,000 บาท ทุกเบอร์เป็นเบอร์ที่ดี ไม่มีตำเเหน่งใดใดเป็นตำเเหน่งที่เสีย โดยสามารถกดที่เบอร์ที่ต้องการเพื่อดูความหมายของเบอร์ได้ </h4>
                <!--<form id="form1" action="process2.php" method="POST" >
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="กรุณากรอกเบอร์ของท่าน..." autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" form= "form1"class="main-button">ทำนายเบอร์มือถือ</button>
                  </fieldset>
                </form> -->


                <br>
                <!-- <button class="w3-button w3-purple" type="submit" form="form1" value="Submit"><h3>กดดูคำทำนาย</h3></button>-->
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-12 w-100">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <!--<img src="assets/images/banner-right-image.png" alt="team meeting"> -->
            </div>
            <center>

              <div class="box">

                <h3>เบอร์ราคาดี</h3>


                <div class="loding-text">
                  <p>เบอร์มงคล 100 %</p>
                </div>

              </div>
            </center> <br><br><br><br><br>

            <div class="row">
              <div class="col-lg-12 offset-lg-3">

                <h2>รายการเบอร์ ราคา ไม่เกิน <?= number_format($_GET['id']); ?></h2>
              </div>
            </div>
            <!-- <div class="col-lg-6 offset-lg-3"> -->


            <?php
            // Create connection
            include "connect.php";

            $sql = "SELECT * FROM tb_phone WHERE price <= '$_GET[id]' ORDER BY category_price DESC";
            $query = $conn->query($sql);
            ?>

            <div class="row"> 
            <?php while ($row = $query->fetch_assoc()) : ?>  
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 col-6">
              <div class="card card-background mb-5 py-4">
              <div class="card-body">
                <div class="col-12 col-sm-12 col-md-12 "><?php echo $row['number_phone']; ?></div>
                <div class="row">
                  <div class="col-6 col-sm-6 col-md-6"><?php echo $row['network']; ?></div>
                  <div class="col-6 col-sm-6 col-md-6"><?php echo number_format($row['price']); ?> -.</div>
                  <div align="center">
                    <form action="select_phone.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <input type="hidden" name="mobile_number" value="<?php echo $row['number_phone']; ?>">
                      <input type="submit" value="เลือกเบอร์" class="btn-select col-12 col-sm-12 col-md-12 text-dark">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile ?>
        </div>





      </div>

    </div>









    <?php
    if ($num6 == 74) {
      echo "<h2>เกรด : A </h2>";
    }
    ?>
  </div>
  <br><br><br>
  </div>








  </div>
  </div>
  </div>


  </div>
  </div>
  </div>




        <?php include "category_price.php";?>



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
          <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
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
          </div>
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