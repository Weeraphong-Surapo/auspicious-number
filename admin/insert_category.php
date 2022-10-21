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
    .insert_category{
        background: #872BE4;
    }
</style>


<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">ประเภทเบอร์</h4>

    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#modalInsertCategory">
        + เพิ่ม
    </button>

</div>


<div class="card">

    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th style="font-size: 12px;">ประเภท</th>
                <th style="font-size: 12px;">จัดการ</th>
            </tr>
            <?php
            $query = $conn->query("SELECT * FROM tb_category");
            while($row = $query->fetch_assoc()){
            ?>
                <tr>
                    <td style="font-size: 14px;"><?php echo $row['category_name'];?></td>
                    <td>
                        <div class="btn-group">
                        <button class="btn btn-warning py-1 editCategory" id="<?= $row['id'];?>"  style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe254;</i>แก้ไข</span></button>
                        <button class="btn btn-danger py-1 delCategory" id="<?= $row['id'];?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe872;</i>ลบ</span></button>
                        </div>
                    </td>
                </tr>
                <?php }?>
    
        </table>

    </div>

</div>






<?php include "function/modalInsertCategory.php";?>
<?php include "function/modalEditCategory.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
<script>
    $(function(){
        $('#formInsertCategory').submit(function(e){
            e.preventDefault();
            var category = $('#category_name').val();
            if(!isNaN(category)){
                Swal('warning','กรุณาใส่ตัวอักษร','');
            }else{
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{category:category,action:'insertcategory'},
                    success:function(data){
                        Swal('success','เพิ่มข้อมูลสำเร็จ','');
                        setTimeout(function(){ location.reload(); },1000);
                    }
                })
            }
        });

        $('#formEditCategory').submit(function(e){
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
                    setTimeout(function(){ location.reload(); },1000);
                }
            })
        })

        $('.delCategory').click(function(){
            var id = $(this).attr('id');
            var status = confirm('ต้องการลบใช่ไหม?');
            if(status){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{id:id,action:'delCategory'},
                    success:function(data){
                        Swal('success','ลบข้อมูลเรียบร้อย','');
                        setTimeout(function(){ location.reload(); },1000);
                    }
                });
            }
        });

        $('.editCategory').click(function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{id:id,action:'editCategory'},
                dataType:'json',
                success:function(data){
                    $('#edittxt').text('อัพเดต');
                    $('#idcategoryedit').val(data.id);
                    $('#categoryedit').val(data.category_name);
                    $('#modalEditCategory').modal('show');
                }
            })
        })
    });
</script>