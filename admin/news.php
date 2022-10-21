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
    .news{
        background: #872BE4;
    }
</style>


<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">ข่าวสาร</h4>

    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#modalInsertNews">
        + เพิ่ม
    </button>

</div>


<div class="card">


    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th style="font-size: 12px;">รูปภาพ</th>
                <th style="font-size: 12px;">หัวข้อข่าว</th>
                <th style="font-size: 12px;">รายละอียด</th>
                <th style="font-size: 12px;">จัดการ</th>
            </tr>
            <?php
            $query = $conn->query("SELECT * FROM tb_news");
            while($row = $query->fetch_assoc()){
            ?>
                <tr>
                    <td class="align-middle" width="15%" style="font-size: 14px;"><img src="function/upload/<?php echo $row['img'];?>" class="img-fluid" alt=""></td>
                    <td class="align-middle" style="font-size: 14px;"><?php echo $row['head'];?></td>
                    <td class="align-middle" style="font-size: 14px;"><?= strlen($row['description']) < 20 ? $row['description']: mb_substr($row['description'], 0, 20).'...'; ?></td>
                    <td class="align-middle">
                        <div class="btn-group ">
                        <button class=" btn btn-warning py-1 editNews" id="<?= $row['id'];?>"  style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe254;</i>แก้ไข</span></button>
                        <button class="btn btn-danger py-1 delNews" id="<?= $row['id'];?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe872;</i>ลบ</span></button>
                        </div>
                    </td>
                </tr>
                <?php }?>
    
        </table>

    </div>

</div>






<?php include "function/modalInsertNews.php";?>
<?php include "function/modalEditNews.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
<script>
    $(function(){
        $('#formInsertNews').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:formData,
                async:false,
                contentType:false,
                processData:false,
                success:function(data){
                    Swal('success','เพิ่มข้ิมูลเรียบร้อย','');
                    setTimeout(function(){ location.reload(); },1000);
                }
            });
        });

        $('#formEditNews').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:formData,
                async:false,
                contentType:false,
                processData:false,
                success:function(data){
                    Swal('success','อัพเดตเรียบร้อย','');
                    setTimeout(function(){location.reload()},1000)
                }
            })
        })

        $('.delNews').click(function(){
            var id = $(this).attr('id');
            var status = confirm('ต้องการลบใช่ไหม?');
            if(status){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{id:id,action:'delNews'},
                    success:function(data){
                        Swal('success','ลบข้อมูลเรียบร้อย','');
                        setTimeout(function(){location.reload();},1000)
                    }
                });
            }
        });

        $('.editNews').click(function(){
            var id = $(this).attr('id');
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{id:id,action:'editNews'},
                dataType:'json',
                success:function(data){
                    $('#idNewsEdit').val(data.id);
                    $('#headedit').val(data.head);
                    $('#descriptionedit').val(data.description);
                    $('#old_img').val(data.img);
                    $('#modalEditNews').modal('show');
                }
            });
        });
    });
</script>