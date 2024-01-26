 <!-- Content -->
 <?php if (is_array($hienThiBaiViet)) {
        extract($hienThiBaiViet);
    }
    ?>
 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span> Sửa bài viết</h4>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <form action="?url=sua-baiviet" method="post" enctype="multipart/form-data">
                     <label for="ID">ID bài viết: </label><br>
                     <input type="text" name="id_bai_dang" class="btn btn-primary" readonly value="<?= $id_bai_dang ?>"> <br> <br>
                     <label for="Name">Tiêu đề:</label>
                     <input type="text" name="tieu_de" class="form-control" value="<?= $tieu_de ?>"> <br><br>
                     <label>Nội dung:</label>
                     <input type="text" name="noi_dung" class="form-control" value="<?= $noi_dung ?>"> <br><br>
                     
                     
                     <label>Trạng thái:</label>
    
                     <select class="form-select" name="trangthai" id="">
                       
                        <?php
                            if($trangthai == 1){
                                $tt = 'Bài viết đang hiển thị';
                            }
                            elseif($trangthai == 2){
                                $tt = 'Bài viết đang ẩn';
                            }
                          
                            echo ' <option value="'. $trang_thai .'">'.$tt.'</option> <br><br>';
                        ?>
                     </select>
                     <label>Ảnh </label>
                     <br>
                     <input type="file" name="path" class="custom-file-input" id="exampleInputFile" value="">
                     <img src="uploads/<?= $path ?>" alt="" height="50px">
                     <br><br>
                     <div class="form-group">
                         <label>Người đăng</label>
                         <select class="form-select" name="username">
                             <?php foreach ($listusername as $pr) { ?>
                                 <option value="<?php echo $pr["username"] ?>"><?php echo $pr["username"] ?></option>
                             <?php } ?>
                         </select>
                     </div>

                     <input type="hidden" name="id_bai_dang" value="<?= $id_bai_dang ?>">

                     <input type="submit" name="list" class="btn btn-primary" value="Danh sách" onclick="goToList()">
                     <input type="submit" name="sua" class="btn btn-primary" value="Sửa">
                 </form>
             </div>
         </div>
     </div>
 </div>
 <script>
     function goToList(params) {
         event.preventDefault();
         window.location.href = "?url=list-baiviet";
     }
 </script>
 <!-- / Content -->