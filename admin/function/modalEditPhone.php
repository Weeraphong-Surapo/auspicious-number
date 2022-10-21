<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../');
}
?>
    <!-- Modal -->
    <div class="modal fade" id="modalEditPhone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card card-body">
                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="modal-title fs-5" id="textPhone">+ เพิ่มข้อมูล</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="formEditPhone">
                        <input type="hidden" name="idPhone" id="idPhone">
                        <input type="hidden" name="action" id="action" value="updatePhone">
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">เบอร์โทร</label>
                            <input type="text" class="form-control" placeholder="เบอร์มือถือ" name="number_phoneedit" id="number_phoneedit">
                        </div>
                        <div class="mb-3">
                            <label for="">เครือข่าย</label>
                            <select name="networkedit" id="networkedit" class="form-control">
                                <option value="" selected disabled>เลือกเครือข่าย</option>
                                <?php 
                                $network = array('AIS','TRUE','DTAC');
                                for($i=0;$i<count($network);$i++){
                                ?>
                                <option value="<?php echo $network[$i];?>"><?php echo $network[$i];?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">ราคา</label>
                            <input type="text" class="form-control" placeholder="ราคา" name="priceedit" id="priceedit">
                        </div>

                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">ประเภท</label>
                            <select name="categor_phoneedit" id="categor_phoneedit" class="form-control">
                            <option value="" selected disabled>เลือกประเภท</option>
                                <?php 
                                $query = $conn->query("SELECT * FROM tb_category"); 
                                while($row = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">ประเภทราคา</label>
                            <select name="categor_phoneedit" id="categor_phoneedit" class="form-control">
                            <option value="" selected disabled>เลือกประเภท</option>
                                <?php 
                                $query = $conn->query("SELECT * FROM tb_category"); 
                                while($row = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
                                <?php }?>
                            </select>
                        </div>
            
                        <div class="d-flex justify-contyent-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-primary" id="updatephone">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>