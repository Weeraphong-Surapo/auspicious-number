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
        .bg-input{
            background-color: #c5d7d9;
        }
        .btn-by{
            background: rgb(237,19,185);
            background: linear-gradient(263deg, rgba(237,19,185,1) 35%, rgba(103,13,238,1) 100%);
            padding: 9px 10px;
            margin-top: 25px;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .bg-card{
            background: rgb(160,175,246);
    background: linear-gradient(176deg, rgba(160,175,246,1) 0%, rgba(225,222,238,1) 100%);
    border-radius: 10px;
    margin-bottom: 10px;
        }
        .circle{
		border: 10px solid transparent;
		  background: linear-gradient(80deg,#fc4903,#fcdb03) border-box;
		  -webkit-mask:
		linear-gradient(#fff 0 0);
		  -webkit-mask-composite: destination-out;
		  mask-composite: exclude;
		background-color: white;
		border-radius: 50%;
		height: 120px;
		max-width: 120px;
		position: relative;
		text-align: center;
		color: darkblue;
		display: flex;
		color: white;
		align-items: center;
		justify-content: center;
		width: 230px;
		background-color: white;
	}
    
	#my_div {
		width: 600px;
		position: relative;
		overflow: hidden;

	}

	#my_div img {
		max-width: 40%;
		height: 40%;
		border-radius: 50%;
		display: flex;
		justify-content: center;

	}

	#my_div h1 {
		font-size: 30px;
	}

	.card-box {
		min-width: 100%;
		margin-top: 8px;
		border-radius: 40px;
		position: relative;
		background-color: #d93223;
		display: flex;
		justify-content: center;
		align-items: center;
		/* height: 100%; */
	}

	.card-box h1 {
		margin-top: 17px;
		display: flex;
		justify-content: center;
		align-items: center;
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
    <?php include "header.php";?>
    <!-- ***** Header Area End ***** -->


    <div class="col-lg-6 w-100">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <!--<img src="assets/images/banner-right-image.png" alt="team meeting"> -->
              </div>
            
              <br><br><br><br><br>
                  
            </div>
        </div>
        
        <?php 
        include "connect.php";
        $query = $conn->query("SELECT * FROM tb_phone WHERE id = '$_POST[id]'");
        $row = mysqli_fetch_array($query);
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">  
                    <h1 class="text-center">เบอร์ที่ท่านเลือก</h2>
                    <div align="center">
                        <div class="card w-50 bg-card">
                            <div class="card-body ">
                            <div class="col-12 col-sm-12 col-md-12 "><?php echo $row['number_phone'];?></div>
                            </div>
                        </div>
                    </div>
                    <p>ราคา</p>
                    <input type="text" name="" disabled class="form-control rounded bg-input" id="" value="<?= number_format($row['price']);?>">
                    <p>ผลรวม</p>
                    <input type="text" disabled name="" class="form-control bg-input" id="" value="<?php echo $row['category']?>"><span class="badge bg-warning float-end">เบอร์มงคล</span>
                    <p>เครือข่าย</p>
                    <input type="text" disabled name="" class="form-control bg-input" id="" value="<?= $row['network'];?>">
                   <div align="center"><button class="btn-by" onclick="url()" >ยืนยันการสั่งจอง</button></div> 
                   <hr>
                   <?php

// รับค่าตัวเลขมาจาก form ไฟล์ index.html


$mobile_number = $_POST['mobile_number'];


    if (isset($mobile_number)) {

              //  mysqli_query($conn, "INSERT INTO number (number) VALUES ('$mobile_number')")


                            $str = $mobile_number;
                            $str = str_split($mobile_number);
                            $arr1 = $str[0].$str[1].$str[2].$str[4].$str[5].$str[6].$str[8].$str[9].$str[10].$str[11];

                            $num1 = $arr1[3].$arr1[4];
                            $num2 = $arr1[4].$arr1[5];
                            $num3 = $arr1[5].$arr1[6];
                            $num4 = $arr1[6].$arr1[7];
                            $num5 = $arr1[7].$arr1[8];
                            $num6 = $arr1[8].$arr1[9];
                            $num7 = $arr1[0]+$arr1[1]+$arr1[2]+$arr1[3]+$arr1[4]+$arr1[5]+$arr1[6]+$arr1[7]+$arr1[8]+$arr1[9];

							echo "<div class='container'>";
							
							
							
							
							// echo "<h2 class='alert alert-secondary text-center'>เบอร์มือถือ $mobile_number</h2>"; 
							$nums1 = $arr1[3].$arr1[4];
                            $nums2 = $arr1[4].$arr1[5];
                            $nums3 = $arr1[5].$arr1[6];
                            $nums4 = $arr1[6].$arr1[7];
                            $nums5 = $arr1[7].$arr1[8];
                            $nums6 = $arr1[8].$arr1[9];
							

							$numa1 = $arr1[2].$arr1[3].$arr1[4];
							$numa2 = $arr1[3].$arr1[4].$arr1[5];
							$numa3 = $arr1[4].$arr1[5].$arr1[6];
							$numa4 = $arr1[5].$arr1[6].$arr1[7];
							$numa5 = $arr1[6].$arr1[7].$arr1[8];
							$numa6 = $arr1[7].$arr1[8].$arr1[9];


							//if (($numa1 == '289') || ($numa2 == '289') || ($numa3 == '289') || ($numa4 == '289') || ($numa5 == '289') || ($numa6 == '289'))   {
							   // echo 'เบอร์มังกร' ;
							//} else {
								//echo 'none';
							//}
							//echo "<br/>";



                            $element = '';
                            $element_img = '';
                            if (($numa1 == '289') || ($numa1 == '287') || ($numa1 == '282') || ($numa1 == '828') || ($numa1 == '829') || ($numa1 == '289') || ($numa2 == '289') || ($numa2 == '287') || ($numa2 == '282') || ($numa2 == '828') || ($numa2 == '829') || ($numa3 == '289') || ($numa3 == '287') || ($numa3 == '282') || ($numa3 == '828') || ($numa3 == '829') || ($numa4 == '289') || ($numa4 == '287') || ($numa4 == '282') || ($numa4 == '828') || ($numa4 == '829') || ($numa5 == '289') || ($numa5 == '287') || ($numa5 == '282') || ($numa5 == '828') || ($numa6 == '829' || ($numa6 == '289') || ($numa6 == '287') || ($numa6 == '282') || ($numa3 == '828') || ($numa3 == '829'))) {
                                $element = 'เบอร์หงส์';
                                $element_img = 'assets/element/หงษ์ทอง.jpeg';
                            } else if (($numa1 == '789') || ($numa1 == '782') || ($numa1 == '879') || ($numa1 == '878') || ($numa1 == '987') || ($numa1 == '978') || ($numa2 == '789') || ($numa2 == '782') || ($numa2 == '879') || ($numa2 == '878') || ($numa2 == '987') || ($numa2 == '978') || ($numa3 == '789') || ($numa3 == '782') || ($numa3 == '879') || ($numa3 == '878') || ($numa3 == '987') || ($numa3 == '978') || ($numa4 == '789') || ($numa4 == '782') || ($numa4 == '879') || ($numa4 == '878') || ($numa4 == '987') || ($numa4 == '978') || ($numa5 == '789') || ($numa5 == '782') || ($numa5 == '879') || ($numa5 == '878') || ($numa5 == '987')  || ($numa6 == '789') || ($numa6 == '782') || ($numa6 == '879') || ($numa6 == '878') || ($numa6 == '987') || ($numa6 == '978')) {
                                $element = 'เบอร์มังกร';
                                $element_img = 'assets/element/มังกร.png';
                            } else if (($numa1 == '639') || ($numa1 == '936') || ($numa2 == '936') || ($numa2 == '639') || ($numa3 == '639') || ($numa3 == '936') || ($numa4 == '639') || ($numa4 == '936') ||  ($numa5 == '639') || ($numa5 == '936') || ($numa6 == '639') || ($numa6 == '936')) {
                                $element = 'เบอร์เทพเจ้ากวนอู';
                                $element_img = 'assets/element/กวนอู.jpeg';
                            } else {
                
                                $element = '';
                            }
                            echo "<br/>";
                
                
                
                
                
                
                
                
                
                            $gradea = array(25, 52, 47, 74, 71, 17);
                            $gradeb = array(90, 58, 68, 77, 85, 86, '09');
                            $gradec = array(00, 01, 02, 11, 12, 13, 18, 20, 21, 27, 30, 31, 33, 34, 37, 38, 40, 43, 48, 50, 57, 58, 60, 67, 70, 72, 73, 75, 76, 80, 81, 83, 84);
                            $grad = '';
                            $txt_grad = '';
                            $score = '';
                            if (in_array("$nums1", $gradec)) {
                                $grad = "เกรด : C ";
                                $txt_grad = "ควรเปลี่ยน<br>เกรด C";
                                $score = '30/1000';
                            } elseif (in_array("$nums2", $gradec)) {
                                $grad = "เกรด : C ";
                                $score = '30/1000';
                                $txt_grad = "ควรเปลี่ยน<br>เกรด C";
                            } elseif (in_array("$nums3", $gradec)) {
                                $grad = "เกรด : C ";
                                $txt_grad = "ควรเปลี่ยน<br>เกรด C";
                                $score = '30/1000';
                            } elseif (in_array("$nums4", $gradec)) {
                                $grad = "เกรด : C ";
                                $score = '30/1000';
                                $txt_grad = "ควรเปลี่ยน<br>เกรด C";
                            } elseif (in_array("$nums5", $gradec)) {
                                $grad = "เกรด : C ";
                                $score = '30/1000';
                                $txt_grad = "ควรเปลี่ยน<br>เกรด C";
                            } elseif (in_array("$nums6", $gradec)) {
                                $grad = "เกรด : C ";
                                $score = '30/1000';
                                $txt_grad = "ควรเปลี่ยน<br>เกรด C";
                            } elseif (in_array("$nums2", $gradea)) {
                                $grad = "เกรด : A ";
                                $score = '930/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด A";
                            } elseif (in_array("$nums3", $gradea)) {
                                $grad = "เกรด : A ";
                                $score = '930/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด A";
                            } elseif (in_array("$nums4", $gradea)) {
                                $grad = "เกรด : A ";
                                $score = '930/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด A";
                            } elseif (in_array("$nums5", $gradea)) {
                                $grad = "เกรด : A ";
                                $score = '930/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด A";
                            } elseif (in_array("$nums6", $gradea)) {
                                $grad = "เกรด : A ";
                                $score = '930/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด A";
                            } elseif (in_array("$nums2", $gradeb)) {
                                $grad = "เกรด : B ";
                                $score = '480/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด B";
                            } elseif (in_array("$nums3", $gradeb)) {
                                $grad = "เกรด : B ";
                                $score = '480/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด B";
                            } elseif (in_array("$nums4", $gradeb)) {
                                $grad = "เกรด : B ";
                                $score = '480/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด B";
                            } elseif (in_array("$nums5", $gradeb)) {
                                $grad = "เกรด : B ";
                                $score = '480/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด B";
                            } elseif (in_array("$nums6", $gradeb)) {
                                $grad = "เกรด : B ";
                                $score = '480/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด B";
                            } else {
                                $grad = "เกรด : S+ ";
                                $score = '999/1000';
                                $txt_grad = "เบอร์ดีมาก<br>เกรด S+";
                            }
                
                            // ;
                
                
                
                
                
                
                            // echo "<b>เบอร์ ".$str." </b><br>";
                            //echo "ผลรวมเลขเบอร์นี้คือ :  <b>".$num7 ."</b>";
                            echo "<hr>";
                
                
                            $tat = $num7;
                            $arr2 = str_split($tat);
                
                            $total = $arr2[0] + $arr2[1];
                
                            echo "<br/>";
                
                            $energy = '';
                            $img_energy = '';
                            switch ($total) {
                                case "1":
                                    $energy = "ธาตุไฟเสริมอำนาจ!";
                                    $img_energy = 'assets/element/fire.jpeg';
                                    break;
                                case "2":
                                    $energy = "ธาตุสายน้ำ เสริม เสน่ห์!";
                                    $img_energy = 'assets/element/น้ำ.jpeg';
                                    break;
                                case "3":
                                    $energy = "ธาตุไฟเพลิง เสริมเเข็งเเกร่ง!";
                                    $img_energy = 'assets/element/ไฟ.jpeg';
                                    break;
                                case "4":
                                    $energy = "ธาตุต้นไม้ เสริมพลังบวก!";
                                    $img_energy = 'assets/element/ต้นไม้.jpeg';
                                    break;
                                case "5":
                                    $energy = "ธาตุดินเสริมความสูรณ์!";
                                    $img_energy = 'assets/element/ดิน.png';
                                    break;
                                case "6":
                                    $energy = "ธาตุน้ำลำธาร เสริมความสุข";
                                    $img_energy = 'assets/element/ลำ.jpeg';
                                    break;
                                case "7":
                                    $energy = "ธาตุ ดินภูผา เสริม ความมุ่งมั่น!";
                                    $img_energy = 'assets/element/ดิน.jpeg';
                                    break;
                                case "8":
                                    $energy = "ธาตุทอง เสริมบารมี!";
                                    $img_energy = 'assets/element/ทอง.jpeg';
                                    break;
                                case "9":
                                    $energy = "ธาตุ ทองสว่าง เสริมสิ่งศักดิ์สิทธิ์!";
                                    $img_energy = 'assets/element/ทองสว่าง.png';
                                    break;
                                default:
                                    $energy = "ไม่มีธาตุ";
                                    $img_energy = 'assets/element/sorry.jpeg';
                            }
                
                            // echo "<center>";
                            // echo "<h2 class='alert alert-dark'>".$energy."</h2>";
                            // echo '<img src="'.$img_energy.'" alt="" class="img-fluid w-25 h-25">';
                            // echo "</center>";
                            echo "<h2 class='alert alert-secondary text-center'>เบอร์มือถือ $mobile_number</h2>";
                            echo "
                                      <div class='row'>
                                          <div class='col-lg-12 col-md-12 col-sm-12 col-12  d-flex justify-content-center'>
                                          <center>
                                          <div id='my_div'>";
                                          if($element_img != ''){
                                            echo "<img src='$element_img'>";
                                          }
                                          echo "<h1>$element</h1>
                                      </div>
                                      </center>	
                                      </div>
                                      </div>
                                      <div class='row'>
                                          <div class='col-lg-6 col-md-12 col-sm-12 col-6  d-flex justify-content-center'>
                                              <div class='circle'>" . "$score" . "</div>
                                          </div>
                                          <div class='col-lg-6 col-md-12 col-sm-12 col-6 d-flex justify-content-center'>
                                              <div class='circle'" . "$txt_grad" . "</div>
                                          </div>
                                      </div>
                                      <div class='row'>
                                          <div class='col-lg-6 col-md-12 col-sm-12 col-6  d-flex justify-content-center'>
                                        <div class='card card-box'>
                                        <b class='text-white'>คะแนน $score</b>
                                        </div>	  
                                          </div>
                                          <div class='col-lg-6 col-md-12 col-sm-12 col-6 d-flex justify-content-center'>
                                          <div class='card card-box'>
                                          <b class='text-white'>$txt_grad</b>
                                          </div>
                                          </div>
                
                                      </div>";
                
                            echo "<br/>";
                            echo "<hr>";
                            echo "<br/>";
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                            // เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 1     
                            $sql = "SELECT * FROM `num-meaning` WHERE number='$num1'";
                            $result = $conn->query($sql);
                
                
                
                
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<br><center><b class='alert alert-secondary'>ความหมายเลขคู่ที่ 1 คือ: " . $row["number"] . "</b></center><p style='margin-top:30px;'>" . $row["meaning"] . "</p><br>";
                                }
                            } else {
                                echo "0 results";
                            }
                
                
                            // เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 2    
                            $sql = "SELECT * FROM `num-meaning` WHERE number='$num2'";
                            $result = $conn->query($sql);
                
                
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 2 คือ: " . $row["number"] . "</b> </center><p style='margin-top:30px;'>" . $row["meaning"] . "</p><br>";
                                }
                            } else {
                                echo "0 results";
                            }
                
                            // เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 3
                            $sql = "SELECT * FROM `num-meaning` WHERE number='$num3'";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 3 คือ " . $row["number"] . "</b></center><p style='margin-top:30px;'> " . $row["meaning"] . "</p><br>";
                                }
                            } else {
                                echo "0 results";
                            }
                
                            // เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 4
                            $sql = "SELECT * FROM `num-meaning` WHERE number='$num4'";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 4 คือ " . $row["number"] . "</b></center><p style='margin-top:30px;'> " . $row["meaning"] . "<p><br>";
                                }
                            } else {
                                echo "0 results";
                            }
                
                            // เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 5
                            $sql = "SELECT * FROM `num-meaning` WHERE number='$num5'";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 5 คือ " . $row["number"] . "</b></center><p style='margin-top:30px;'> " . $row["meaning"] . "</p><br>";
                                }
                            } else {
                                echo "0 results";
                            }
                
                            // เข้าถึงฐานข้อมูลตัวเลขและดึงมาตรวจสอบกับชุดเลขคู่ชุดที่ 6
                            $sql = "SELECT * FROM `num-meaning` WHERE number='$num6'";
                            $result = $conn->query($sql);
                
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<br><center><b class='alert alert-secondary'> ความหมายเลขคู่ที่ 6 คือ " . $row["number"] . "</b></center> <p style='margin-top:30px;'>" . $row["meaning"] . "</p><br>";
                                }
                            } else {
                                echo "0 results";
                            }
                
                
                
                            $conn->close();
                
                
                
                
                
                
                
                
                            // เข้าเงื่อนไขทำนายแบบผลรวมของเบอร์มือถือ swith case
                            echo "<center><b class='alert alert-secondary' >เบอร์ " . $arr1 . " </b></center><br>";
                            echo "<u>ผลรวมเลขเบอร์นี้คือ :  <b>" . $num7 . "</u></b>";
                
                            echo "<br>";
                            //ตรวจสอบผลรวมของเลขว่า ตรงกับเลขใดและแสดงความหมายผลรวมเลขนั้น
                            switch ($num7) {
                                case 1:
                                    echo "<p>ดาวอาทิตย์ดาวพลังความเชื่อมั่น
                                          เลข 1 เป็นดาวที่ทรงพลังมีอานุภาพมาก มีปฏิภาณกล้าหาญ มีความคิดดี มีชื่อเสียงด้านผู้นำ มุมานะ ทะยาน ชอบเที่ยวไปทุกที่ ชอบผจญภัย มีคนนับถือมาก</p>";
                                    break;
                
                                case 2:
                                    echo "<p>ดาวจันทร์ดาวพลังแห่งจินตนาการ
                                          เลข 2 เป็นช่างฝัน มีอารมณ์ศิลปิน มองโลกในแง่ดี แก้ไขปัญหาได้ดี เป็นคนเอื้ออาทรต่อผู้อื่น</p>";
                                    break;
                
                                case 3:
                                    echo "<p>ดาวอังคารดาวพลังแห่งความกล้าหาญชาญชัย
                                          เลข 3 รักอิสระแบบไม่มีแก่นสาร ชอบใฝ่หาความรู้ ชอบเรียนสูงๆ คนพูดจาแบบขวานผ่าซาก รักความยุติธรรม ใจกว้าง ระวังเรื่องเจ็บป่วยจากระบบประสาท ทำงานหนักมากเกินไป</p>";
                                    break;
                
                                case 4:
                                    echo "<p>ดาวพุธพลังแห่งดาวสติปัญญา
                                          เลข 4 เป็นคนฉลาดมีสติปัญญาไหวพริบดีมาก รู้ทันคน ฉลาดในการวางตัวในที่ทุกสถาน ชอบเดินทางไกล บางครั้งเหมือนขาดเพื่อนแท้ แต่เพราะความฉลาดของตนเองจึงประสบความสำเร็จในชีวิตได้</p>";
                                    break;
                
                                case 5:
                                    echo "<p>ดาวพลังแห่งปัญญาปัญญาทางธรรมะ
                                          เลข 5 มีความรู้ดี มีปัญญา เป็นคนน่าเชื่อถือและน่าเลื่อมใสศรัทธาของคนที่พบเห็น ทำการงานใดๆ มักราบรื่น มีคุณธรรม จิตใจดีมีเมตตาใฝ่ไปในทางธรรม</p>";
                                    break;
                
                                case 6:
                                    echo "<p>ดาวแห่งศิลปะวิทยาการ
                                          เลข 6 มีความสุขสบาย มีจินตนาการ ชอบศิลปะ ชอบอิสระ มีโลกส่วนตัว ไม่เบียดเบียนใคร จิตใจดีมีเมตตา ผู้คนรักใคร่ มีเสน่ห์ มีตำแหน่งหน้าที่การงานดี ร่ำรวยด้วยทรัพย์สินเงินทอง</p>";
                                    break;
                
                                case 7:
                                    echo "<p>ดาวเสาร์ดาวพลังแห่งทุกข์โศก
                                          เลข 7 เป็นคนรักอิสระและมีความคิดเป็นของตนเองอย่างเด่นชัด ไม่ชอบตามแบบใคร เป็นคนรักงานศิลปะ นักเขียน นักวาด นักกวี มีความพิเศษในการแก้ไขปัญหา เป็นคนใจบุญศุลทาน
                                          </p>";
                                    break;
                
                                case 8:
                                    echo "<p>ดาวราหูพลังแห่งความลุ่มหลงมัวเมา
                                          เลข 8 เป็นคนพูดน้อย ขี้อาย ชอบปลีกตัวอยู่ตามลำพัง ไม่ใคร่คบค้าสมาคมกับใครง่าย ตอนเป็นเด็กสุขภาพไม่แข็งแรง ป่วยบ่อย โตขึ้นร่างกายจะแข็งแรง อายุยืน เป็นคนมีอารมณ์ขันแบบลึก ไม่ค่อยมีอารมณ์ขัน มาดขรึมๆ ชอบเอาความคิดของคนอื่นมาลบล้างความคิดของตนเอง มีระเบียบวินัย เฉลียวฉลาด แต่ภายในจิตใจแล้วจะเดียวดาย ต้องการความรัก ความอบอุ่น ไม่ต่างอะไรกับเด็ก สุขภาพ มักมีปัญหาในเรื่องตับ ถุงน้ำดี ระบบขับถ่าย มักมีอาการปวดศรีษะ โลหิตเป็นพิษ โรคเจ็บปวดตามข้อ</p>";
                                    break;
                
                                case 9:
                                    echo "<p>พลังดาวเกตุพลังแห่งความลึกลับ
                                          เลข 9 คล้ายเป็นคนหยิ่งยโส แต่ลึกเป็นคนขาดความเชื่อมั่นในตนเองมากๆ เป็นคนที่มีความตั้งใจจริง มักตัดสินใจอะไรด้วยอารมณ์ชั่ววูบและต้องมานั่งเสียใจกับการตัดสินใจในภายหลัง เป็นคนปากกับใจตรงกัน อารมณ์ร้อน โกรธง่ายหายเร็ว ทำคุณคนไม่ขึ้น ปิดทองหลังพระ มักพบกับความตรงกันข้าม ความไม่จริงใจ ความหลอกลวง</p>";
                                    break;
                
                                case 10:
                                    echo "<p>พลังแห่งอุปสรรค
                                          เลข 10 เป็นคนมีความมั่นใจในตัวเองสูง มีความทะเยอทะยานดี ชอบของแปลกใหม่ ไม่ชอบซ้ำแบบใคร เป็นคนถือเกียรติ ไม่ชอบอยู่ใต้บังคับบัญชาของใคร ไม่ค่อยนุ่มนวล กล้าได้กล้าเสีย ชีวิตมักมีอุปสรรค จับงานอะไรมักจะเจอคู่แข่ง มีคนปองร้าย บริวารมักให้โทษ เป็นคนอาภัพ มีศัตรูรอบด้าน ชีวิตมักจะมีเรื่องระทมขมขื่นแอบแฝงอยู่ มีโรคภัยไข้เจ็บเบียดเบียนอย่างเรื้อรัง ระวังโรคหัวใจ มีภาระหนี้สิน มีศัตรูคอยกลั่นแกล้ง ชีวิตก็มีประสบความสำเร็จอยู่บ้าง คือสำเร็จอย่างแหวกแนวไม่เหมือนใคร แต่ถ้าเวลาดวงตกก็จะสูญสิ้นในพริบตา</p>";
                                    break;
                
                                case 11:
                                    echo "<p>พลังแห่งความขัดแย้งในตัวเอง
                                          เลข 11 เป็นคนหลงตัวเองเป็นหลักชอบอวดอ้าง ทำอะไรชอบเข้าข้างตัวเอง มักถือพวกพ้องเป็นคนดื้อรั้นมาก จิตใจรวนเร เชื่อคนง่าย ระวังจะโดนทรยศหักหลังจากคนที่เราไว้ใจ</p>";
                                    break;
                
                                case 12:
                                    echo "<p>พลังแห่ง 2 บุคลิกในคนเดียว
                                          เลข 12 หยิ่ง,ลุ่มหลงมัวเมาหูเบา,เจ็บไม่จำ เป็นคนเชื่อใจคนง่ายจึงมักถูกยุยงได้ง่าย ชีวิตเกิดอุบัติเหตุได้ง่าย มีโรคภัยไข้เจ็บเบียดเบียนอย่างเรื้อรัง หากหลงใครแล้วมักจะหลงอย่างไม่ลืมหูลืมตา
                                          </p>";
                                    break;
                
                                case 13:
                                    echo "<p>การเปลี่ยนแปลงทั้งดีและร้าย
                                          เลข 13 ชีวิตมักเจอเรื่องทั้งเรื่องดี เรื่องร้ายอย่างฉับพลัน มีโชคอย่างไม่คาดคิดมาก่อนแต่ในขณะเดียวกันก็จะมีเหตุร้ายเกิดขึ้นอย่างไม่คาดฝันเช่นกัน ไม่ชอบให้ใครมาท้าทาย ไม่ชอบเดินตามร้อยเท้าใคร กล้าแบบไม่กลัวใคร จึงมักส่งผลให้เกิดอันตรายและล้าเหลวในบั้นปลาย เป็นคนตัดสินใจผิดพลาดทั้ง ๆ ที่รู้ ต้องระวังอุบัติเหตุทุกรูปแบบ ผ่าตัด ช่องท้อง รถคว่ำ ถูกอาวุธ ถูกคนลอบทำร้าย ครอบครัวมีปัญหาแตกร้าว ชีวิตคู่ไม่ปกติสุข ผู้ใหญ่ให้โทษ เรื่องชู้สาว และสายตามีปัญหา ผู้ใหญ่กดดัน</p>";
                                    break;
                
                                case 14:
                                    echo "<p>พลังแห่งมีสติปัญญาไหวพริบและมงคล
                                          เลข 14 มีความรู้ ความสามารถดี ฉลาดมีไหวพริบ ตำแหน่งหน้าที่การงานก้าวไกล ผู้คนยอมรับ มีศีลธรรมอันดี รักความถูกต้องเที่ยงธรรม มีส่วนน้อยที่มีอุปสรรคบ้างซึ่งเป็นเรื่องธรรมดา แต่ส่วนมากดี มีความรุ่งเรื่องเจริญก้าวหน้ามาก</p>";
                                    break;
                
                                case 15:
                                    echo "<p>พลังแห่งเสน่ห์
                                          เลข 15 เป็นตัวเลขที่ดี มีเพื่อนมาก คนรักใคร่มากมาย อารมณ์ดี จิตใจดี เข้าได้กับทุกคน มีศิลปะในการพูด ทำให้คนรักใคร่เกื้อหนุน ดวงชะตามีเกียรติยศชื่อเสียง มีโชคลาภ</p>";
                                    break;
                
                                case 16:
                                    echo "<p>พลังชีวิตที่ต้องฝ่าฟัน
                                          เลข 16 มีความทุกข์ อุปสรรค ปัญหา อับโชค วิตมักจะประสบกับโชคร้ายมากกว่าความสำเร็จ แม้จะมีวาสนาสูง เกิดเป็นลูกเศรษฐี ลูกคนรวย ชีวิตก็ต้องมีอุปสรรค มีศัตรูมาก มักจะแพ้ภัยจากศัตรู หากมีความสำเร็จของชีวิตที่ยิ่งใหญ่ ต้องระวังจะพบจุดจบอย่างไม่คาดคิด ถูกคนปองร้าย ถูกอำนาจมืดคุกคาม จะตกต่ำในบั้นปลายของชีวิต เลขนี้ไม่เหมาะกับสุภาพสตรี จะทำให้ผิดหวังในเรื่องความรักทุกรูปแบบ เช่น แต่งงานช้า ไม่ได้แต่งงาน แต่งแล้วต้องเลิก ได้พ่อหม้าย เป็นสามี เป็นเมียน้อย กินน้ำใต้ศอกคนอื่น หรือเป็นหม้ายก่อนวัยอันควร</p>";
                                    break;
                
                                case 17:
                                    echo "<p>พลังแห่งความไม่แน่นอน
                                          เลข 17 มีสติปัญญาแตกฉาน เข้าใจอะไรได้ง่าย ชีวิตมักจะพบกับอุปสรรคและความยุ่งยาก ในชีวิตอยู่บ่อย ๆ มักจะถูกผู้ใหญ่กดดัน ผู้ใหญ่มักจะให้โทษ ชีวิตขึ้น ๆ ลง ๆ ไม่แน่นอน ชีวิตสมรถไม่สมหวัง เป็นคนหูเบาเชื่อคนง่าย ค่อนข้างจะดื้อรั้นเอาแต่ใจตัวเอง</p>";
                                    break;
                
                                case 18:
                                    echo "<p>พลังชีวิตแห่งการเปลี่ยนแปลง
                                          เลข 18 อยู่ไม่ติดที่ มีการโยกย้ายเปลี่ยนแปลงบ่อยๆ ไม่สมหวังในเรื่องคู่ครอง เลขนี้ไม่เหมาะสำหรับสุภาพสตรี ให้ระวังการทรยศหักหลังการถูกหลอกลวง</p>";
                                    break;
                
                                case 19:
                                    echo "<p>พลังแห่งความสำเร็จจากผู้อุปถัมภ์
                                          เลข 19 ดวงค่อนข้างดี มีความสำเร็จและดีเด่นทางด้านการศึกษาและหน้าที่การงานสูงส่ง ไม่มีวันอับจนและตกอับ หมายเลขนี้ดีต่อชายร้ายต่อหญิง คือไม่เหมาะสำหรับผู้หญิง เพราะเป็นหญิงจะถูกกลั่นแกล้ง อาภัพรัก ชีวิตรักมักผิดหวัง หากเป็นชายจะมีความรุ่งโรจน์มาก</p>";
                                    break;
                
                                case 20:
                                    echo "<p>พลังแห่งความสำเร็จที่ต้องอาศัยผู้อื่นช่วยหนุนนำ
                                          เลข 20 ไม่ชอบอยู่นิ่งอยู่กับที่ มีความทะเยอทะยาน เพ้อฝัน เลขนี้ไม่เหมาะกับสุภาพสตรี ชีวิตมักจะมีปัญหาเรื่องคู่ กดดันจนทำให้ต้องเป็นคนไร้คู่หรือไม่ก็เป็นเมียน้อย กินน้ำใต้ศอกผู้อื่น</p>";
                                    break;
                
                                case 21:
                                    echo "<p>พลังแห่งการพลิกผัน
                                          เลข 21 เป็นคนมีเสน่ห์ เอาแต่ใจตัวเอง เป็นคนเด็ดเดี่ยวกล้าตัดสินใจ โดยที่ผู้อื่นคาดคิดไม่ถึง ชีวิตไม่ค่อยสมหวัง ชีวิตหาความแน่นอนไม่ได้เลย</p>";
                                    break;
                
                                case 22:
                                    echo "<p>พลังแห่งการเพ้อฝัน
                                          เลข 22 เป็นคนเพ้อฝัน อารมณ์อ่อนไหว หูเบาเชื่อใจคนง่าย ถูกหลอกอยู่เสมอ
                                          </p>";
                                    break;
                
                                case 23:
                                    echo "<p>พลังเสน่ห์เมตตามหานิยม
                                          เลข 23 เป็นคนมีอารมณ์แข็งกร้าวโทสะจริต ไม่ยอมแพ้คน เป็นคนเจ้าชู้ หากเป็นชายมักมีเรื่องอื้อฉาวเกี่ยวกับเรื่องความรัก เป็นหญิงดี เพราะจะมีผู้ใหญ่ที่มีอิทธิพลคอยให้การช่วยเหลือสนับสนุนส่งเสริมให้ชีวิตประสบความสำเร็จเป็นอย่างดี</p>";
                                    break;
                
                                case 24:
                                    echo "<p>พลังแห่งมหามงคลความสำเร็จ
                                          เลข 24 สมบูรณ์พูนผล ชีวิตไม่ยุ่งยาก เป็นคนฉลาดมีปฏิภาณไหวพริบ ไม่ถือตัว มีเพื่อนมากมาย เป็นคนดีมีเมตตา เอื้อเฟื้อช่วยเหลือผู้อื่น หากมุ่งมั่นที่จะเป็นดารา นักร้อง ศิลปินจะประสบความสำเร็จ มีชื่อเสียงโด่งดัง แต่อย่าประมาทกับการดำรงชีวิตให้ทำบุญบ้างดีเสริมดวงชะตาได้ดีมากๆ
                                          </p>";
                                    break;
                
                                case 25:
                                    echo "<p>พลังร้ายและพลังดี
                                          เลข 25 ชีวิตมีอุปสรรคมาก กว่าจะประสบความสำเร็จต้องเจออุปสรรคมากมาย ถูกศัตรูปองร้าย ถูกกลั่นแกล้ง ถูกอำนาจมืดคุกคาม ถูกปล้น ถูกจี้ ชีวิตจะพบกับความผันผวนอย่างรุนแรง อาจถูกปองร้ายจนถึงแก่ชีวิต ต้องประสบกับการเปลี่ยนแปลง ทำให้ชีวิตขึ้น ๆ ลง ๆ หาความแน่นอนไม่ได้</p>";
                                    break;
                
                                case 26:
                                    echo "<p>พลังแห่งความไม่มั่นคง
                                          เลข 26 มีความสำเร็จแต่ไม่ยั่งยืนถาวร ระวังเรื่องโลกีย์ไว้ให้มากๆ ระวังการผิดศีลธรรมเรื่องโลกีย์</p>";
                                    break;
                
                                case 27:
                                    echo "<p>พลังแห่งความมุ่งมั่น
                                          เลข 27 ชีวิตประสบความสำเร็จอย่างงดงาม แต่ชีวิตมักจะมีความกดดันอย่างรุนแรง ทำให้เหมือนคนอมทุกข์ มีโรคภัยไข้เจ็บแทรกประจำตัว ถ้าเป็นชายมักผิดหวังเรื่องความรักบ่อยๆ ระวังมักจะมีโรคภัยไข้เจ็บอย่างเรื้อรัง</p>";
                                    break;
                
                                case 28:
                                    echo "<p>พลังแห่งความแปรปรวน
                                          เลข 28 เสียมากกว่าดี เป็นคนไม่รอบคอบ เป็นคนเบื่อง่าย ไม่ไว้ใจผู้อื่น มักมีเรื่องทุกข์ใจ ไม่มีความสุขในชีวิตสมรส ต้องพลัดพรากจากกันอยู่กันคนละทิศละทาง</p>";
                                    break;
                
                                case 29:
                                    echo "<p>พลังความรุนแรง
                                          เลข 29 ชีวิตมักจะหักกลาง ถูกปองร้ายจากศัตรู ระวังเรื่องอุบัติเหตุ ชีวิตอมทุกข์ ไม่ยอมคน มั่นใจในตนเอง เผด็จการ ภายนอกสดใส แต่ภายในอมทุกข์ ให้ระวังเพื่อนที่ไม่ซื่อ และเพศตรงข้าม
                                          </p>";
                                    break;
                
                                case 30:
                                    echo "<p>พลังแห่งอุบัติเหตุ
                                          เลข 30 ชีวิตไม่หยุดนิ่งอยู่กับที่ แต่ะทำอะไรต้องระวังมีสติให้มาก ชีวิตมีอุปสรรคบ้าง แต่ไม่มาก เป็นคนมีเพื่อนน้อย ค่อนข้างเงียบขรึม ไม่ชอบแสดงตัว ชอบใช้ชีวิตอยู่ตามลำพัง
                                          </p>";
                                    break;
                
                                case 31:
                                    echo "<p>พลังแห่งความไม่แน่นอนของโชคชะตา
                                          เลข 31 ชีวิตในเบื้องต้นจะลำบาก แต่จะประสบความสำเร็จในบั้นปลาย แต่ระวังชีวิตมักจะหักกลาง ความรักหักกลางคัน ชีวิตสมรสไม่แน่นอน ระวังเรื่องอุบัติเหตุรถคว่ำ ถูกอาวุธ ถูกคนลอบทำร้าย การผ่าตัด และการถูกแย่งชิงตำแหน่งหน้าที่การงาน
                                          </p>";
                                    break;
                
                                case 32:
                                    echo "<p>พลังแห่งเจ้าชู้มีเสน่ห์
                                          เลข 32 เป็นคนเจ้าชู้ มีเสน่ห์ มักต้นร้ายปลายดี ต้องระวัง ชีวิตมักจะมีอุบัติเหตุ มีโรคภัยไขเจ็บเบียดเบียนอย่างเรื้อรัง มีคนอุปถัมภ์</p>";
                                    break;
                
                                case 33:
                                    echo "<p>พลังความฉุนเฉียวเร้าร้อน
                                          เลข 33 มีอารมณ์ฉุนเฉียว เร่าร้อน รุนแรง ทำอะไรชอบเอาแต่ใจตนเอง ระวังอันตรายแบบฉับพลัน มักจะประสบอุบัติเหตุอย่างร้ายแรง มักจะมีอันตรายเกี่ยวกับความเร็ว เช่น อุบัติเหตุทางรถยนต์ การทะเลาะวิวาท
                                          </p>";
                                    break;
                
                                case 34:
                                    echo "<p>พลังแห่งความรอบรู้ครุ่นคิด
                                          เลข 34 เป็นคนมีสติปัญญาแตกฉาน ว่องไว มีปฏิภาณดีเป็นคนกล้าหาญ กล้าพูดกล้าทำ แต่ชีวิตมีอุปสรรคมาก เหน็ดเหนื่อยมาก ลำบากอยู่กับปัญหาตลอด แต่ก็เอาตัวรอดได้ ให้ระวังเรื่องอุบัติเหตุหรือการพลัดตกหกล้ม ถึงขั้นทำให้เป็นอัมพาตได้</p>";
                                    break;
                
                                case 35:
                                    echo "<p>พลังแห่งคุณและโทษ
                                          เลข 35 ไม่ค่อยดีนัก ชีวิตมักอาภัพ กำพร้า ชีวิตบั้นปลายมีความสำเร็จดี มีผู้อุปถัมภ์ แต่ต้องระวังการหลงผิด มักหูเบาเชื่อใจคนง่าย จะมีคนชั่วร้ายเข้ามาสู่ชีวิต</p>";
                                    break;
                
                                case 36:
                                    echo "<p>พลังแห่งความรักความอบอุ่น
                                          เลข 36 เลข 36 เป็นเลขที่หมายถึงความรัก ความสดชื่นของชีวิต ชีวิตจะประสบความสำเร็จเป็นอย่างดี มีมิตรสหาย มาก สติปัญญามีหัวทางประดิษฐ์คิดค้น ถ้าเป็นเด็กจะฉลาดเรียนเก่ง เป็นคนมีเสน่ห์ดึงดูดใจเพศตรงข้าม และเพศตรงข้ามมักให้ความอบอุ่นเป็นอย่างดี โชคดีมีการงานดีตำแหน่งสูง เด่นในด้านความรัก มีเสน่ห์ คู่ครองดีมีความรู้ ดาวศุกร์กับดาวอังคารเป็นดาวคู่มิตรกัน รวมกันได้ 9 ดีมาก</p>";
                                    break;
                
                                case 37:
                                    echo "<p>พลังความวิบัติ
                                          เลข 37 ไม่ดีเลย ชีวิตมีแต่เรื่องขัดแย้ง ทะเลาะวิวาท โชคร้าย ผ่าตัด อุบัติเหตุ คู่ครองมีเหตุให้เป็นไป พรัดพราก ชีวิตมีมุมหักเหตลอดเวลาขึ้น ๆ ลง ๆ ไม่ราบรื่นนัก</p>";
                                    break;
                
                                case 38:
                                    echo "<p>พลังแห่งโมหะจริต
                                          เลข 38 เป็นเลขร้าย ส่งผลในทางไม่ดี หมกมุ่นอยู่กับกามคุณ ทางทางผิด ติดเหล้ายา ติดการพนัน และอบายมุขทุกอย่าง เชื่อตัวเองมากเกินไป หมกมุ่นอยู่กับไสยศาสตร์ เวทมนต์คาถา ส่งผลร้ายต่อชีวิต ผิดทำนองคลองธรรม โกรธง่าย อารมณ์ฉุนเฉียว เป็นคนเจ้าอารมณ์</p>";
                                    break;
                
                                case 39:
                                    echo "<p>พลังแห่งความกดดัน
                                          เลข 39 ชีวิตพบเจอเรื่องยุ่งยากบ่อยๆ แต่ก็มีมิตรสหายให้ความเกื้อกูลช่วยเหลือเป็นอย่างดี</p>";
                                    break;
                
                                case 40:
                                    echo "<p>พลังอำนาจมหัศจรรย์
                                          เลข 40 ไม่เดือดร้อนอะไร เป็นคนใฝ่รู้ชอบค้นคว้าหาความรู้ ชอบสนุกสนาน สุขสบาย ชอบเดินทางไกลท่องเที่ยว ชอบสิ่งใหม่ๆ และแปลกๆ ไม่ชอบอยู่ติดที่ เป็นคนอ่อนไหวง่าย ดวงชะตาจัดว่าดี
                                          </p>";
                                    break;
                
                                case 41:
                                    echo "<p>พลังมหาจักรวาล
                                          เลข 41 นี้เป็นเลขที่ดีมาก เป็นพลังมหาจักรวาล มีความรุ่งโรจน์ สุขสบาย เป็นคนฉลาด ชีวิตไม่ตกต่ำ มีคนคอยช่วยเหลือมากมาย มีคนอุปถัมภ์ เพื่อนมิตรสหายมาก บ่งถึงความสำเร็จในชีวิตเป็นอย่างดี ผู้ใหญ่มักจะให้การอุปถัมภ์ ปัญญาว่องไว มีสมองปราดเปรื่อง ตั้งแต่วัยเด็กเป็นคนเข้ากับมิตรสหายได้อย่างสนิท ควรเสริมชะตาด้วยการทำบุญ</p>";
                                    break;
                
                                case 42:
                                    echo "<p>พลังโรแมนติค
                                          เลข 42 เป็นเลขมงคลยิ่ง 4 ดาวพุธ รวมกับ 2 ดาวจันทร์ รวมกันได้ 6 ดาวศุกร์ เป็นคนใจเย็น มีจินตนาการกว้างไกล อารมณ์ศิลปะ ชอบกวีนิพนธ์ มีจิตใจละเอียดอ่อน โรแมนติก มีความละมุนละไม ในสายเลือด มีหัวทางประดิษฐ์คิดค้น สมองแจ่มใสมาก สู้ชีวิต เรื่องรักและการงานสำเร็จดังใจ มีเงินทองไม่ขาดมือ ชีวิตประสบความสำเร็จเป็นอย่างดี มีมิตรสหายมาก มักเป็นที่รักแก่คนทั้งมวล
                                          </p>";
                                    break;
                
                                case 43:
                                    echo "<p>พลังวิปริต
                                          เลข 43 มีศัตรูคอยกลั่นแกล้งอยู่เบื้องหลังตลอดเวลา มีอุปสรรค ความทุกข์ ความผิดหวังล้มเหลว</p>";
                                    break;
                
                                case 44:
                                    echo "<p>พลังส่งเสริมความสำเร็จ
                                          เลข 44 เลข ๔๔ เป็นเลขที่ส่งเสริมทุกด้านทั้งหน้าที่การงาน การเรียน ความรัก ส่งเสริมความสำเร็จทุกด้าน ไม่ลำบาก มีผู้ใหญ่คอยเกื้อหนุน แต่เลข ๔๔ นี้รวมกันได้ ๘ ทำให้หลงระเริง ระวังอย่าประมาทในการดำรงชีวิต ดวงชะตาถือว่าดี มีเพียงจุดเสียเล็กน้อยเท่านั้น จุดเสียคือคุณเป็นคุณใจน้อย เอาแต่ใจตัวเอง ถ้าแก้จุดนี้ได้จะดีมาก</p>";
                                    break;
                
                                case 45:
                                    echo "<p>พลังการสู้อีกครั้ง
                                          เลข 45 ดวงดีมาก ดาว 4 (พุธ) กับดาว 5 (พฤหัส) รวมกันได้ 9 (ดาวเกตุ) การงานก้าวหน้า ปัญญาดีฉลาดหลักแหลม ใจสู้ไม่ถอย ก้าวหน้าตลอดเวลา มีคนคอยช่วยเหลือ โชคดีมีลาภ เจริญรุ่งเรือง ชีวิตมักจะมีโชคอยู่เนืองๆ มักจะประสบโชคอันไม่คาดหวังอยู่บ่อยๆ สติปัญญาแจ่มใสดีมาก และจะได้รับความร่วมมือจากทุกวงการเป็นอย่างดี</p>";
                                    break;
                
                                case 46:
                                    echo "<p>พลังแห่งโชค
                                          เลข 46 มีความสุข มีความสำเร็จ มีเพื่อนมาก เสียอยู่นิดตรงที่เป็นคนใจอ่อน มักตกอยู่ใต้อิทธิพลคนอื่นได้ง่าย</p>";
                                    break;
                
                                case 47:
                                    echo "<p>พลังแห่งความเพียร
                                          เลข 47 มักจะใจอ่อนเชื่อคนง่าย แต่ถ้าดื้อรั้นขึ้นมาก็ยากที่จะหยุดได้ ต้องระวังการหลงผิด ชีวิตกว่าจะประสบความสำเร็จต้องเหนื่อยและต้องใช้ความพยายามและอดทนสูง</p>";
                                    break;
                
                                case 48:
                                    echo "<p>พลังการหลง
                                          เลข 48 ไม่ดีเลย ควรระวังอย่าเชื่อใจใครง่ายๆ จะถูกจูงหว่านล้อม หลงผิด ระวังจะประสบอุบัติเหตุ มักมีโรคภัยไข้เจ็บเบียดเบียน</p>";
                                    break;
                
                                case 49:
                                    echo "<p>พลังความยุ่งยาก
                                          เลข 49 ไม่ค่อยดี มีความอับโชค ชีวิตมีอุปสรรค มักถูกอำนาจมืดคุกคาม ถ้าเป็นสุภาพสตรีจะถูกญาติสามีกดดันกลั่นแกล้ง</p>";
                                    break;
                
                                case 50:
                                    echo "<p>พลังแห่งปัญญาและความสามารถ
                                          เลข 50 ดวงดีมาก โดยเฉพาะเรื่องปัญญา มีความสามารถ ดีเด่นทางทำงานต่างประเทศ มักพบคู่รักต่างแดน เป็นคนมีญาณพิเศษ มีบุญ ถ้าทำธุรกิจติดต่อกับชาวต่างชาติ เช่น ธุรกิจส่งออกเป็นต้นจะประสบความสำเร็จอย่างดี</p>";
                                    break;
                
                
                                case 51:
                                    echo "<p>พลังความสมบูรณ์
                                          เลข 51 บวกกันได้ 6 ดาวศุกร์ ถือว่าเป็นเลขดีเลขหนึ่งเพราะเป็นดาวศุภเคราะห์ บ่งถึงความสำเร็จ มีมิตรสหายมาก มีรสนิยมในทางศิลป์ ฝีมือละเอียดอ่อนปราณีต เลข 5 ดาวพฤหัส เลข 1 ดาวอาทิตย์ ธาตุไฟทั้งคู่ จึงส่งเสริมให้มีอำนาจ สติปัญญาแตกฉาน อำนวยความสำเร็จให้กับชีวิตเป็นอย่างดี เป็นเลขที่ดีมีมงคล มีความเจริญด้านการงาน ธุรกิจ การเงิน การเรียน เรื่องความรัก สารพัด ไม่ติดขัด มีผู้ใหญ่คอยช่วยเหลือ มีพรสวรรค์ทางสร้างสรรค์ ศิลปะ ดนตรี การพูด มีเสน่ห์ เป็นเลขที่สมบูรณ์ดียิ่ง</p>";
                                    break;
                
                                case 52:
                                    echo "<p>พลังการสนับสนุนค้ำจุน
                                          เลข 52 มีความสำเร็จด้านการงานและความรักดี หากเป็นชายจะมีคุณสนับสนุนจากผู้หญิง หรือเจ้านายคนใกล้ชิด จะก้าวไกลทุกด้าน แต่ต้องอดทนฟันฝ่าอุปสรรคบ้าง หากเป็นหญิงจะมีอุปสรรคเพราะกรรมเก่า
                                          </p>";
                                    break;
                
                                case 53:
                                    echo "<p>พลังการหักเห
                                          เลข 53 ชีวิตมีทั้งดีและร้ายปะปนกันไป ไม่มากไม่น้อย อย่าหูเบาเชื่อคนง่าย ให้ดำเนินชีวิตด้วยความไม่ประมาท ทำอะไรให้รอบคอบ จะเกิดผลดีและชีวิตจะประสบความสำเร็จ</p>";
                                    break;
                
                                case 54:
                                    echo "<p>พลังมหาราชาโชคความสำเร็จ
                                          เลข 54 เป็นมงคลแก่ชีวิตยิ่งที่ได้ชื่อนี้ เพราะรวมกันได้ ๙ พอดี เรื่องงาน ความรัก และอื่นๆ สำเร็จสมปรารถนา จะมีตำแหน่งสูง คนเคารพนับถือ ปัญญาดี เรียนอะไรก็แตกฉาน มีคนคอยค้ำจุนหนุนส่ง ไม่มีทางตกต่ำหรือขาดแคลน สิ่งศักดิ์สิทธิ์คุ้มครอง</p>";
                                    break;
                
                                case 55:
                                    echo "<p>พลังความสุขสมหวัง
                                          เลข 55 นี้บ่งบอกถึงความสมบูรณ์พูนผล มีสุขสำเร็จดังใจหวัง การงานก็ตำแหน่งสูง ความรักดี มีแฟนฉลาดและดวงดี มีหลักฐาน ทำธุรกิจการค้าขายก็จะได้กำไรเพิ่มพูนยิ่ง คุณเป็นคนมีศีลธรรม ชอบความยุติธรรม คนรักมากมาย มีเสน่ห์ มีศีลธรรม จิตใจดีมีเมตตา ผู้คนรักใคร่ มีสติปัญญาเฉลียวฉลาด เป็นเลขที่มีความสุขสมบูรณ์มาก</p>";
                                    break;
                
                                case 56:
                                    echo "<p>พลังศิลป์และปัญญา
                                          เลข 56 ดวงชะตาอยู่ในเกณฑ์ดีมาก เพราะมีดาวศุกร์กับพฤหัสบดี มีความโดดเด่นด้านปฏิภาณไหวพริบ อารมณ์ศิลป์ ทำอะไรมีความรอบคอบดี ประสบความสำเร็จทุกด้าน เช่น การเรียน การงาน การเงิน มองโลกในแง่ดี สู้อย่างไม่ถอย นำชีวิตไปสู่จุดหมายคือความสำเร็จได้ อีกอย่างเป็นคนมีเสน่ห์ มีน้ำใจ ผู้คนรักใคร่มากมาย
                                          </p>";
                                    break;
                
                                case 57:
                                    echo "<p>พลังความมั่นใจในตัวเองสูง
                                          เลข 57 เป็นคนค่อนข้างจะดื้อรั้น ชีวิตไม่ค่อยแน่นอน ทำอะไรไม่ค่อยประสบความสำเร็จเพราะยกเลิกกลางครัน</p>";
                                    break;
                
                                case 58:
                                    echo "<p>พลังความลุ่มหลงงมงาย
                                          เลข 58 ไม่ดีเลย หลงผิด เห็นกงจักรเป็นดอกบัว ออกนอกลู่นอกทางอยู่เสมอ</p>";
                                    break;
                
                                case 59:
                                    echo "<p>พลังแห่งขนบธรรมเนียมประเพณี
                                          เลข 59 จิตใจดีมีเมตตาสูง มีศีลธรรม ดวงด้านความรักดี มีคนคอยช่วยเหลือ เจริญรุ่งเรือง</p>";
                                    break;
                
                                case 60:
                                    echo "<p>พลังความเพ้อฝันและจินตนาการ
                                          เลข 60 เป็นคนรักสวยรักงาม ชอบความเป็นอยู่อย่างโอ่อ่าและเพ้อฝัน ทำอะไรมักเกินตัว ดีสำหรับหญิง แต่ไม่ดีสำหรับชาย เด็กผู้ชายทำให้จิตใจเบี่ยงเบนเป็นตุ๊ด (กระเทย) ได้งาย</p>";
                                    break;
                
                                case 61:
                                    echo "<p>พลังบุคลิกซ้อน
                                          เลข 61 ไม่ค่อยดีนัก มีความขัดแย้งในตัวเอง เป็นเลขแห่งความทุกข์ อุปสรรค และปัญหาบั้นปลายชีวิต จะตกต่ำและเหน็ดเหนื่อย</p>";
                                    break;
                
                                case 62:
                                    echo "<p>พลังการเกื้อกูลและพลิกผัน
                                          เลข 62 ไม่ดีเลย หลงผิดได้่ง่าย เพราะปล่อยตัวปล่อยใจเกินไป ดีตรงที่มีคนคอยช่วยเหลืออุปถัมภ์ เป็นชายมีเสน่ห์ต่อเพศตรงข้าม</p>";
                                    break;
                
                                case 63:
                                    echo "<p>พลังความรักไม่มีสิ้นสุด
                                          เลข 63 ดีมาก ไม่มีอุปสรรคและเรื่องยุ่งยาก ก้าวหน้าด้านการงาน การเรียนดี ดีเด่นเรื่องความรัก มีเพื่อนมาก ควรทำบุญเสริมดวงจะดีมากๆ และจะโชคดีตลอด</p>";
                                    break;
                
                                case 64:
                                    echo "<p>พลังความอ่อนไหวและการเปลี่ยนแปลง
                                          เลข 64 เป็นคนมีรสนิยมสูง มีเสน่ห์ แต่ระวังจะถูกผู้อื่นหลอกลวง ชีวิตพบความสำเร็จ มีความสุข ความสะดวกของชีวิตพอสมควร</p>";
                                    break;
                
                                case 65:
                                    echo "<p>พลังความก้าวหน้าและเสน่ห์
                                          เลข 65 เป็นเลขที่อยู่ในเกณฑ์ดี หากชื่อของคุณบวกรวมกับสกุลแล้วได้เลขนี้ พยากรณ์ได้เลยว่าเจ้าของชื่อเป็นคนฉลาดไหวพริบดี รักความก้าวหน้า จะได้รับความช่วยเหลือจากผู้ใหญ่หรือมีผู้คอยช่วยเหลืออยู่ตลอด กิจการและการงานราบรื่น เลขนี้จะดีเด่นเรื่องความก้าวหน้าและเรื่องของความรักมีเสน่ห์แก่เพศตรงข้ามมากเป็นพิเศษ</p>";
                                    break;
                
                                case 66:
                                    echo "<p>พลังแห่งอารมณ์และความรู้สึก
                                          เลข 66 ไม่ดีเลย มอมเมา ลุ่มหลง ไม่พิจารณาไตร่ตรอง เป็นเลขอันตราย</p>";
                                    break;
                
                                case 67:
                                    echo "<p>พลังแห่งความผิดหวัง ทุกข์เศร้า
                                          เลข 67 ชีวิตมีอุปสรรค ผิดหวัง ขัดแย้ง ครอบครัวแตกร้าว ตกต่ำในบั้นปลายของชีวิต</p>";
                                    break;
                
                                case 68:
                                    echo "<p>พลังแห่งอบายมุข
                                          เลข 68 ไม่ดีเลย ลุ่มหลง มัวเมา หลงไหล ขาดสติในการพิจารณา อาจถูกชักจูงหรือถูกหลอกได้ง่าย
                                          </p>";
                                    break;
                
                                case 69:
                                    echo "<p>พลังความอ่อนไหว
                                          เลข 69 เป็นคนใจอ่อน ชอบเพ้อฝัน ทำให้ตกอยู่ใต้อิทธิพลผู้อื่นได้ง่าย แต่ยังดีที่มีผู้ใหญ่คอยให้การอุปถัมภ์ค้ำชู จึงพอทำให้ชีวิตไปรอด</p>";
                                    break;
                
                                case 70:
                                    echo "<p>พลังแห่งเคราะห์กรรม
                                          เลข 70 ไม่ดีเลย ให้ระวังความคิด อย่าหลงผิด ควรดำเนินชีวิตด้วยความรอบคอบไม่มาท เพราะเลขนี้ร้ายมาก บั้นปลายในชีวิตจะมีการฆ่าตัวตาย อาจจะเกิดขึ้นจากอารมณ์ชั่ววูบ ความกดดัน</p>";
                                    break;
                
                                case 71:
                                    echo "<p>พลังแห่งการถูกโจมตี
                                          เลข 71 ไม่ดีเลย เป็นเลขบ่งบอกถึงความตกต่ำ ถูกใส่ร้าย คดีความ วิบัติ ฉิบหาย การหลงมัวเมา เรื่องความรักก็ไม่สมหวังทั้งสตรีและบุรุษ</p>";
                                    break;
                
                                case 72:
                                    echo "<p>พลังชะตาแข็ง
                                          เลข 72 ชีวิตเจริญรุ่งเรืองดี แต่มักวุ่นวาย มักจะได้รับทุกข์อันเกิดจากเพศตรงข้าม มีเคราะห์บ่อยๆ และให้ระวังเรื่องโรคภัยไข้เจ็บ</p>";
                                    break;
                
                                case 73:
                                    echo "<p>พลังดาวบาปเคราะห์ที่ร้ายแรง
                                          เลข 73 ไม่ดีเลย ระวังเรื่องที่เกิดขึ้นโดยฉับพลันอย่างไม่ทันตั้งตัว เช่น อุบัติเหตุ ผ่าตัด ล้มละลาย ชีวิตไม่ค่อยประสบความสำเร็จ วิธีแก้ควรปล่อยวางกับชีวิตบ้าง</p>";
                                    break;
                
                                case 74:
                                    echo "<p>พลังอารมณ์ที่อ่อนไหว
                                          เลข 74 มีความสำเร็จดี ถึงไม่ก้าวหน้าสูงสุด ก็ประสบความสำเร็จในระดับหนึ่ง ระวังอย่าหูเบาเชื่อคนง่าย</p>";
                                    break;
                
                                case 75:
                                    echo "<p>พลังต้นร้ายปลายดี
                                          เลข 75 ต้นร้ายปลายดี คือเบื้องต้นไม่ประสบความสำเร็จ แต่บั้นปลายชีวิตจะรุ่งโรจน์มาก ชีวิตมีความวุ่นวาย มักถูกตำหนิจากผู้ใหญ่ ผู้ใหญ่ให้โทษ เลขนี้ไม่เหมาะกับนักธุรกิจ</p>";
                                    break;
                
                                case 76:
                                    echo "<p>พลังความยากลำบาก
                                          เลข 76 ไม่ดีเลย ชีวิตมักจะอับเฉา บ้านแตกสาแหรกขาด ไม่มีความสุขในชีวิตสมรสมักร้างคู่</p>";
                                    break;
                
                                case 77:
                                    echo "<p>พลังแห่งความกดดัน
                                          เลข 77 ไม่ดีเลย บ่งถึงความทุกข์สองเท่า มีแต่ความโชคร้าย มักมีโรคภัยไข้เจ็บ ชีวิตเหน็ดเหนื่อยมาก แต่ดีตรงที่มีคนยำเกรง มีอำนาจบารมี</p>";
                                    break;
                
                                case 78:
                                    echo "<p>พลังแห่ง ความเดือดร้อน
                                          เลข 78 ไม่ค่อยดีนัก เจอเรื่องร้ายๆ บ่อย ให้ระวังเรื่องอุบัติเหตุและคดีความ อย่าใจอ่อนเชื่อคนง่าย</p>";
                                    break;
                
                                case 79:
                                    echo "<p>พลังทรัพย์และสุขภาพ
                                          เลข 79 จัดอยู่ในเกณฑ์ดี มีฐานะมั่นคง บรรพบุรุษเป็นคนดี สร้างฐานะไว้ดี คุณจะได้รับทรัพย์มรดก หรือสิ่งที่ท่านสร้างไว้ให้ ไม่เดือดร้อนเรื่องการเงิน ลงทุนทำธุรกิจอะไรก็จะประสบความสำเร็จ แต่อย่าหักโหมจนลืมรักษาสุขภาพตัวเอง สุขภาพดีมาก ไม่มีโรคภัยไข้เจ็บ แต่หากมีก็หายในไม่ช้า ชีวิตมีอุปสรรคบ้างแต่ไม่ค่อยมาก ต้องลำบากก่อนจึงจะได้ดี</p>";
                                    break;
                
                                case 80:
                                    echo "<p>พลังอัปมงคล
                                          เลข 80 ไม่ดีมากๆ เลย ถูกครอบงำ ถูกข่มเหงรังแกจากคนไม่ดี (คนพาล) ถูกข่มขี่ ถูกปล้นจี้ ชิงทรัพย์ ผู้หญิงระวังการถูกฆ่าข่มขืน</p>";
                                    break;
                
                                case 81:
                                    echo "<p>พลังการพลัดพราก
                                          เลข 81 ไม่ดีเลย กำพร้า อาภัพ พลัดพรากจากบุพการี อยู่ไม่เป็นที่ โยกย้ายบ่อย แต่ชะตาชีวิตก็รุ่งเรืองดี</p>";
                                    break;
                
                                case 82:
                                    echo "<p>พลังที่ไม่มั่นคง
                                          เลข 82 ชีวิตมักจะหว้าเหว่หงอยเหงา ถ้าเป็นชายมีโอกาสไร่คู่ หรืออาภัพคู่ ถ้าเป็นหญิงจะมีพ่อหม้ายเข้ามาพัวพัน</p>";
                                    break;
                
                                case 83:
                                    echo "<p>พลังความผิดพลาด
                                          เลข 83 ไม่ดี มักมีเหตุให้แตกหักเสียหายเสมอ ระวังภัยคุกคามจากคนไม่ดี (คนพาล) ระวังอย่าเชื่อคนง่าย</p>";
                                    break;
                
                                case 84:
                                    echo "<p>พลังเลขร้าย
                                          เลข 84 เป็นเลขไม่ดีเลย มักประสบชะตากรรมไม่ดี (โชคร้าย) ระวังเรื่องอุบัติเหตุ คดีความ</p>";
                                    break;
                
                                case 85:
                                    echo "<p>พลังความหลงผิด
                                          เลข 85 อาจหลงผิดได้ง่าย ลืมตัว เอาแต่ใจตัวเอง มักกำพร้าและขาดที่พึ่ง</p>";
                                    break;
                
                                case 86:
                                    echo "<p>พลังสำเร็จที่ต้องตั้งใจ
                                          เลข 86 ชีวิตทางโลกจะประสบความสำเร็จ แต่พ่ายแพ้ทางโลกีย์ ชีวิตจะลุ่มหลงมัวเมา ระวังจิตใจที่ใฝ่ไปในทางไม่ดี</p>";
                                    break;
                
                                case 87:
                                    echo "<p>พลังรักลวง
                                          เลข 87 เป็นคนมีเสน่ห์ แต่จิตใจอ่อนไหวง่าย เจ้าอารมณ์ อมทุกข์ มักหลงผิด หูเบา เชื่อใจคนง่าย ชีวิตบั้นปลายจึงมักตกต่ำ</p>";
                                    break;
                
                                case 88:
                                    echo "<p>พลังความสำเร็จที่แฝงความความร้ายแรง
                                          เลข 88 ชีวิตประสบความสำเร็จอย่างรวดเร็ว แต่ระวังเรื่องอุบัติเหตุ หรือสิ่งที่ไม่คาดคิดอย่างฉับพลัน</p>";
                                    break;
                
                                case 89:
                                    echo "<p>พลังแห่งความเชื่อ
                                          เลข 89 เป็นคนหัวไว ฉลาด เข้าสังคมได้ดีทุกระดับ แต่ข้อเสียต้้องระวังการลุ่มหลง</p>";
                                    break;
                
                                case 90:
                                    echo "<p>พลังสิ่งศักดิ์สิทธิ์คุ้มครอง
                                          เลข 90 เชื่อเรื่องโชคลาง ดวงดีมีสิ่งศักดิ์สิทธิ์คุ้มครอง มักแคล้วคลาดจากอันตรายต่างๆ ตกน้ำไม่ไหลตกไฟไม่ไหม้ มีปาฏิหารย์บ่อยๆ เลขนี้ดีมีความปลอดภัยในชีวิต ดีมาก มีเทวดารักษาคุ้มครอง เรื่องหน้าที่การงานการเงินการดำเนินชีวิตถือว่าก้าวหน้าได้มาก</p>";
                                    break;
                
                                case 91:
                                    echo "<p>พลังความการแสวงหา
                                      เลข 91 เป็นคนใฝ่หาความก้าวหน้า มีความพยายาม ขยันขันแข็ง แต่ชอบสันโดษ ชีวิตบางครั้งเหมือนอมทุกข์ ด้านการงานดีมาก แต่เสียด้านสุขภาพ ระวังจะมีโรคภัยเบียดเบียน</p>";
                                    break;
                
                                case 92:
                                    echo "<p>พลังอนุรักษ์นิยม
                                      เลข 92 ค่อนข้างหัวอนุรักษ์นิยม ชื่นชอบและสะสมของเก่า ชอบเรื่องในอดีต รักการค้นคว้า มีความอ่อนโยน มีเพื่อนฝูงมาก</p>";
                                    break;
                
                                case 93:
                                    echo "<p>ความสำเร็จที่รุ่มร้อน
                                      เลข 93 เป็นคนแข็งกร้าว เอาแต่ใจตัวเอง ชีวิตมักจะประสบอุบัติเหตุอยู่เสมอ</p>";
                                    break;
                
                                case 94:
                                    echo "<p>พลังหลงงมงาย
                                          เลข 94 ไม่ค่อยดี มีความสำเร็จแต่ชีวิตมีอุปสรรคมาก ต้องผ่าฟันอุปสรรคอยู่เสมอ</p>";
                                    break;
                
                                case 95:
                                    echo "<p>พลังความสำเร็จบารมี
                                          เลข 95 เป็นมงคลและมีผลดีมากๆ เป็นผู้โชคดีอยู่เสมอ มีคนคอยช่วยเหลือและคุ้มครอง มีเกียติยศชื่อเสียง มีคนนับถือมาก อยู่ในศีลธรรมอันดี หยั่งรู้เหตุการณ์ล่วงหน้า คู่ครองดีรักคุณมาก เกื้อกูลกันตลอดไป ตกน้ำไม่ไหลตกไฟไม่ไหม้</p>";
                                    break;
                
                                case 96:
                                    echo "<p>พลังที่อ่อนแอ
                                          เลข 96 เป็นคนใจอ่อน ระวังการหลงผิด ถ้าคบคนดีก็ดีไป ถ้าคบคนชั่ว ก็จะชั่วตามเขาไปด้วย</p>";
                                    break;
                
                                case 97:
                                    echo "<p>พลังความรุ่งโรจน์
                                          เลข 97 เป็นเลขดีชีวิตมีความรุ่งโรจน์ เหมือนฟ้าประทาน ประสบความสำเร็จในตำแหน่งหน้าที่การงาน ค้าขายได้กำไร ร่ำรวยด้วยทรัพย์สินเงินทอง มีคนเคารพนับถือ มีเกียรติในสังคม มีเพื่อนมากมาย แต่ควรระวังเรื่องอุบัติเหตุ อย่าประมาท ควรทำบุญสะเดาะเคราะห์จะเสริมดวงชะตาได้มาก</p>";
                                    break;
                
                                case 98:
                                    echo "<p>พลังลาภลอย
                                          เลข 98 ชีวิตประสบความสำเร็จดี มีพวกพ้องมาก ระวังเรื่องการคบคน</p>";
                                    break;
                
                                case 99:
                                    echo "<p>พลังการหยั่งรู้
                                          เลข 99 มีอำนาจพิเศษ มีญาณหยั่งรู้เหตุการณ์ล่วงหน้าได้อย่างแม่นยำ มีประสาทสัมผัสพิเศษ มีพลังทางจิต ทำอะไรพระคุ้มครอง มีความเจริญและมีความสุข</p>";
                                    break;
                
                                case 100:
                                    echo "<p>พลังแห่งสมดุลจักรวาล
                                          เลข 100 เป็นเลขมงคลมาก โชคดีมีลาภ ชีวิตจะรุ่งเรืองเฟื่องฟูมาก มีการงานตำแหน่งสูง หน้าที่การงาน การเงินก้าวหน้าก้าวไกล เกียติยศปรากฎไกล มีเกียรติในสังคม สมบูรณ์ทุกอย่าง สุขภาพดี ไม่มีโรคภัยไข้เจ็บ ด้านความรักก็ดี คนรักฉลาด มีรูปสมบัติพร้อมทรัพย์สินมากมาย รักกันดี พึ่งพากันและกันดวงชะตาเป็นคู่กันตลอดไป เลขกำลัง 100 นี้ดีนักไม่มีจุดเสียเลย มีแต่ความรุ่งโรจน์และสมบูรณ์ทุกอย่าง</p>";
                                    break;
                
                
                                default:
                                    echo "ไม่มีเลขนี้ให้ทำนาย มีเฉพาะเลข 1 - 100 เท่านั้น";
                            }
                        } else {
                            echo "<br><center>ยังไม่ได้ใส่เลข..โปรดใส่เลขมือถือ!!</center>";
                        }

                
                
                
                
                    ?>
                  </div>
              </div>

        </div>

</div>
</div>
</div>






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
            <?php require "news.php"; ?>
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
        function url(){
            window.location="https://line.me/R/ti/p/@377kjzsz";
        }

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