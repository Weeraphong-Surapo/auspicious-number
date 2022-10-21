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
    .category_price {
        background: #872BE4;
    }
</style>


<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">ประเภทเบอร์</h4>

    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#modalInsertPrice">
        + เพิ่ม
    </button>

</div>


<div class="card">

    <div class="table-responsive">
        <table class="table text-center" id="myTable">
            <tr>
                <th style="font-size: 12px;">ราคาไม่เกิน</th>
                <th style="font-size: 12px;">จัดการ</th>
            </tr>
            <?php
            $query = $conn->query("SELECT * FROM tb_category_price");
            while ($row = $query->fetch_assoc()) {
            ?>
                <tr>
                    <td style="font-size: 14px;"><?php echo number_format($row['category_price']); ?></td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-warning py-1 editprice" id="<?= $row['id']; ?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe254;</i>แก้ไข</span></button>
                            <button class="btn btn-danger py-1 delprice" id="<?= $row['id']; ?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe872;</i>ลบ</span></button>
                        </div>
                    </td>
                </tr>
            <?php } ?>

        </table>

    </div>

</div>






<?php include "function/modalInsertPrice.php"; ?>
<?php include "function/modalEditPrice.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
<script>
    $(function() {
        $('#formInsertPrice').submit(function(e) {
            e.preventDefault();
            var price = $('#category_price').val();
            $.ajax({
                url: 'function/action.php',
                type: 'post',
                data: {
                    price: price,
                    action: 'insertPrice'
                },
                success: function(data) {
                    Swal('success', 'เพิ่มข้อมูลสำเร็จ', '');
                    $('#formInsertPrice')[0].reset();
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            });
        });

        $('#formEditPrice').submit(function(e){
            e.preventDefault();
            var id = $('#idpriceedit').val();
            var price = $('#category_priceedit').val();
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{
                    id:id,
                    price:price,
                    action:'updateprice'
                },
                success:function(data){
                    Swal('success', 'อัพเดตข้อมูลเรียบร้อย', '');
                    setTimeout(function() {location.reload();}, 1000);
                }
            })
        })

        $('.delprice').click(function() {
            var id = $(this).attr('id');
            var status = confirm('คุณต้องการลบใช่ไหม?');
            if (status) {
                $.ajax({
                    url: 'function/action.php',
                    type: 'post',
                    data: {
                        id: id,
                        action: 'delprice'
                    },
                    success: function(data) {
                        Swal('success', 'ลบข้อมูลเรียบร้อย', '');
                        setTimeout(function() {location.reload();}, 1000);
                    }
                });
            }
        });

        $('.editprice').click(function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{id:id,action:'editprice'},
                dataType:'json',
                success:function(data){
                    $('#idpriceedit').val(data.id);
                    $('#category_priceedit').val(data.category_price);
                    $('#modalEditPrice').modal('show');
                }
            })
        })
    });
</script>