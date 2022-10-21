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
    .insertPhone{
        background: #872BE4;
    }
</style>


<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="my-1">เบอร์มงคล</h4>

    <button type="button" class="btn btn-primary py-1 px-4" data-bs-toggle="modal" data-bs-target="#modalInsertPhone">
        + เพิ่ม
    </button>

</div>


<div class="card">


    <div class="table-responsive">
        <table class="table text-center">
            <tr>
                <th style="font-size: 12px;">เบอร์มือถือ</th>
                <th style="font-size: 12px;">เครือข่าย</th>
                <th style="font-size: 12px;">ราคา</th>
                <th style="font-size: 12px;">ประเภท</th>
                <th style="font-size: 12px;">ช่วงราคา</th>
                <th style="font-size: 12px;">จัดการ</th>
            </tr>
            <?php
            $query = $conn->query("SELECT * FROM tb_phone");
            while($row = $query->fetch_assoc()){
            ?>
                <tr>
                    <td style="font-size: 14px;"><?php echo $row['number_phone'];?></td>
                    <td style="font-size: 14px;"><?php echo $row['network'];?></td>
                    <td style="font-size: 14px;"><?php echo number_format($row['price']);?></td>
                    <td style="font-size: 14px;"><?php echo $row['category'];?></td>
                    <td style="font-size: 14px;"><?php echo number_format($row['category_price']);?></td>
                    <td>
                        <button class="btn btn-warning py-1 editPhone" id="<?= $row['id'];?>"  style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe254;</i>แก้ไข</span></button>
                        <button class="btn btn-danger py-1 delPhone" id="<?= $row['id'];?>" style="font-size: 14px; padding: 0 12px;"><span class="d-flex align-items-center"><i class="material-icons fs-6 me-1">&#xe872;</i>ลบ</span></button>
                    </td>
                </tr>
                <?php }?>
    
        </table>

    </div>

</div>






<?php include "function/modalInsertPhone.php";?>
<?php include "function/modalEditPhone.php"; ?>
<?php include('function/footer.php') ?>
<script src="function/sweet.js"></script>
<script>
    $(function(){
        $('#formInsertPhone').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            if($('#number_phone').val() == "" || $('#price').val() == "" || $('#category_phone').val() == "" || $('#network').val() == ""){
                Swal('warning','กรุณากรอกข้อมูลให้ครบถ้วน!','');
            }else{
                if(isNaN($('#price').val())){
                    Swal('warning','กรุณาใส่ราคาเป็นตัวเลข','');
                }else if (isNaN($('#number_phone').val())){
                    Swal('warning','กรุณาใส่เบอร์มือถือเป็นตัวเลข','');
                }else{
                    $.ajax({
                        url:'function/action.php',
                        type:'post',
                        data:formData,
                        async:false,
                        contentType:false,
                        processData:false,
                        success:function(data){
                            Swal('success','เพิ่มข้อมูลสำเร็จ','');
                            setTimeout(function(){ location.reload(); },1000);
                        }
                    });
                }
            }
        });

        $('#formEditPhone').submit(function(e){
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

        $('.delPhone').click(function(){
            var id = $(this).attr('id');
            var status = confirm('ต้องการลบใช่ไหม');
            if(status){
                $.ajax({
                    url:'function/action.php',
                    type:'post',
                    data:{id:id,action:'delPhone'},
                    success:function(data){
                            Swal('success','ลบข้แมูลเรียบร้อย','');
                            setTimeout(function(){ location.reload(); },1000);
                    }
                });
            }
        });

        $('.editPhone').click(function(){
            var id = $(this).attr('id');
            $.ajax({
                url:'function/action.php',
                type:'post',
                data:{id:id,action:'editPhone'},
                dataType:'json',
                success:function(data){
                    $('#idPhone').val(data.id);
                    $('#number_phoneedit').val(data.number_phone);
                    $('#networkedit').val(data.network);
                    $('#priceedit').val(data.price);
                    $('#categor_phoneedit').val(data.category);
                    $('#modalEditPhone').modal('show');
                    $('#textPhone').text('แก้ไข');
                    $('#updatephone').text('อัพเดต');
                }
            })
        })
    });
</script>