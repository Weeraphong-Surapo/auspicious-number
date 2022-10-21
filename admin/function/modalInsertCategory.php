<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../');
}
?>
    <!-- Modal -->
    <div class="modal fade" id="modalInsertCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card card-body">
                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">+ เพิ่มข้อมูล</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="formInsertCategory">
                        <input type="hidden" name="action" id="action" value="insertPhone">
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">ประเภท</label>
                            <input type="text" class="form-control" placeholder="ประเภท" name="category_name" id="category_name">
                        </div>
            
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>