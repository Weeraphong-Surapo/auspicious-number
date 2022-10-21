<div id="categoryPrice" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2>หมดความ<em>กังวล</em> เมื่อไว้ใจ <span>ลัคกี้ มงคล</span></h2>
        </div>
      </div>
    </div>
    <div class="row">


      <?php
      include "connect.php";
      $query = $conn->query("SELECT * FROM tb_category_price");
      while ($row = $query->fetch_assoc()) {
      ?>
        <div class="col-lg-3 col-sm-6" action="newpro.php" method="POST" id="form2">
          <a href="phone_category.php?id=<?php echo $row['category_price']; ?>">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s" action="newpro.php" method="POST" id="form2">
              <div class="hidden-content">
                <h4>ราคาถูก คุณภาพดี</h4>
              </div>
              <div class="showed-content">
                <img src="number_phone.png" alt=""> <br>
                <br>
                <h4>เบอร์ราคาไม่เกิน</h4> <br>
                <h4><?= number_format($row['category_price']); ?></h4>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>

    </div>
  </div>
</div>