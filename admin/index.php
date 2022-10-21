<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../');
}
include('function/navbar.php');
include "../connect.php";
?>

<!-- ผู้ใช้งาน -->

<style>
    .home {
        background: #872BE4;
    }
    .card a{
        text-decoration: none;
    }
    .card:hover{
        opacity: 0.7;
    }
</style>

<div class="row">
    <h1>หน้าหลัก</h1>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow-sm">
            <a href="insert_phone.php">
                <div class="card-body">
                    <?php 
                    $query = $conn->query("SELECT * FROM tb_phone");
                    $row = mysqli_num_rows($query);
                    ?>
                    <p class="text-primary">รายการเบอร์ในระบบ </p>
                    <span class="text-dark"><?php echo $row;?> รายการ</span>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow-sm">
            <a href="insert_category.php">
                <div class="card-body">
                <?php 
                    $query = $conn->query("SELECT * FROM tb_category");
                    $row_ct = mysqli_num_rows($query);
                    ?>
                    <p class="text-primary">ประเภทในระบบ</p>
                    <span class="text-dark"><?php echo $row_ct;?> รายการ</span>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow-sm">
            <a href="category_price.php">
                <div class="card-body">
                <?php 
                    $query = $conn->query("SELECT * FROM tb_category_price");
                    $row_price = mysqli_num_rows($query);
                    ?>
                    <p class="text-primary">ช่วงราคา</p>
                    <span class="text-dark"><?php echo $row_price;?> รายการ</span>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card shadow-sm">
            <a href="news.php">
                <div class="card-body">
                <?php 
                    $query = $conn->query("SELECT * FROM tb_news");
                    $row_news = mysqli_num_rows($query);
                    ?>
                    <p class="text-primary">บทความในระบบ</p>
                    <span class="text-dark"><?php echo $row_news;?> รายการ</span>
                </div>
            </a>
        </div>
    </div>


</div>






<?php include "function/modalInsertPrice.php"; ?>
<?php include "function/modalEditPrice.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>

</script>