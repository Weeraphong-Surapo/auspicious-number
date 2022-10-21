<div class="row">

<?php
include "connect.php";
$query = $conn->query("SELECT * FROM tb_news");
while ($row = $query->fetch_assoc()) {
?>
  <div class="col-lg-3 p-3 col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
    <div class="card">
      <div class="card-body">
        <a href="show_news.php"><img src="admin/function/upload/<?php echo $row['img']; ?>" class="card-img-top" style="height: 210px; object-fit: contain;" alt="Workspace Desktop"></a>
        <div class="info">
          <div class="inner-content">
            <ul>
              <li><i class="fa fa-calendar" class="ms-3" ></i><span style="margin-left: 15px;"><?php echo $row['created_at']; ?></span></li>
            </ul>
            <a href="#">
              <h4><?php echo $row['head']; ?></h4>
            </a>
            <p><?= strlen($row['description']) < 20 ? $row['description'] : mb_substr($row['description'], 0, 65) . '...'; ?></p>
            <div class="main-blue-button" >
              <a href="show_news.php?title=<?= $row['head'];?>">อ่าน</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

</div>