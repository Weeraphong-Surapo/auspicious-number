<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:../');
}
?>
    <!-- Modal -->
    <div class="modal fade" id="modalEditNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content card card-body">
                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">+ เพิ่มข้อมูล</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="formEditNews" enctype="multipart/form-data">
                        <input type="hidden" name="action" id="action" value="updateNews">
                        <input type="hidden" name="idNewsEdit" id="idNewsEdit">
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">รูปภาพ</label>
                            <input type="file" name="img_new" id="img_new" class="form-control">
                            <input type="hidden" name="old_img" id="old_img">
                        </div>
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">หัวข้อเรื่อง</label>
                            <input type="text" name="headedit" id="headedit" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" style="font-size: 12px;">รายละเอียด</label>
                            <textarea name="descriptionedit" id="descriptionedit" class="form-control"  cols="10" rows="5"></textarea>
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