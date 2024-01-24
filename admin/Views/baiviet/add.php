 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span>Thêm bài viết</h4>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
             <form action="?url=add-baiviet" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="tieu_de" id="name" placeholder="Nhập tiêu đề cho bài viết">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input type="text" class="form-control" name="noi_dung" id="name" placeholder="Nhập nội dung cho bài viết">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="prodImg">Ảnh bài viết</label>
                        <div class="custom-file">
                            <input type="file" name="path" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Người đăng</label>
                        <select class="form-select"  name="username">
                            <?php foreach ($listusername as $pr) { ?>
                                <option value="<?php echo $pr["username"] ?>"><?php echo $pr["username"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <input type="text" name="trangthai" class="custom-file-input" readonly value="<?= $hien_baidang ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="list" class="btn btn-primary" onclick="goToList()">Danh sách</button>
                        <button type="submit" name="them" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
             </div>
         </div>
     </div>
 </div>
 <script>
    function goToList() {
        event.preventDefault();
        window.location.href = "?url=list-baiviet";
    }
</script>
 <!-- / Content -->