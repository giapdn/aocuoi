 <!-- Content -->
 <?php if(is_array($hienthiCategory)) {
    extract($hienthiCategory); 
  
}
 ?>
 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục /</span> Sửa danh mục</h4>
     <div class="row">
         <div class="col-md-12">
            <div class="card">
                <form action="?url=sua-category"  method="post" enctype="multipart/form-data">
                    <label for="categoryID">ID: </label><br>
                    <input type="text" name="id_danh_muc" class="btn btn-primary" readonly value="<?= $id_danh_muc ?>"> <br> <br>
                    
                    <label for="categoryName">Mô tả danh mục:</label>
                    <input type="text" name="mo_ta" class="form-control" value="<?= $mo_ta?>"> <br><br>
                    
                    <label for="prodImg">Ảnh danh mục</label>
                    <br>
                    <input type="file" name="path" class="custom-file-input" id="exampleInputFile" value="">
                    <img src="uploads/<?= $path?>" alt="" height="50px">
                    <br><br>
                    <input type="hidden" name="id_danh_muc" value="<?= $id_danh_muc ?>">

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
                    window.location.href = "?url=list-category";
                }
            </script>
 <!-- / Content -->