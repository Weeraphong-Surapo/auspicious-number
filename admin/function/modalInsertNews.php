<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../');
}
?>
    <!-- Modal -->
    <div class="modal fade" id="modalInsertNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card card-body">
                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">+ เพิ่มข้อมูล</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="formInsertNews" enctype="multipart/form-data">
                        <input type="hidden" name="action" id="action" value="insertNews">
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">รูปภาพ</label>
                            <input type="file" name="img" id="img" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">หัวข้อเรื่อง</label>
                            <input type="text" name="head" id="head" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">รายละเอียด</label>
                            <textarea name="description" id="description" class="form-control" cols="10" rows="5"></textarea>
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