 <!-- Content -->
 <?php if(is_array($hienThiSanPham)) {
    extract($hienThiSanPham); 
}
 ?>
 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span> Sửa sản phẩm</h4>
     <div class="row">
         <div class="col-md-12">
            <div class="card">
                <form action="?url=sua-product"  method="post" enctype="multipart/form-data" style="padding: 15px;">
                    <label for="ID">ID sản phẩm </label><br>
                    <input type="text" name="id_san_pham" class="btn btn-primary" readonly value="<?= $id_san_pham ?>"> <br> <br>
                    
                    <label for="Name">Tên sản phẩm </label>
                    <input type="text" name="ten_san_pham" class="form-control" value="<?= $ten_san_pham ?>"> <br><br>
                   
                    <div class="form-group">
                        <label for="prodPrice">Giá </label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="gia_san_pham"  class="form-control"  value="<?= $gia_san_pham ?>">
                        </div>
                    </div>
                    <br><br>

                    <label >Ảnh </label>
                    <br>
                    <input type="file" name="img_path_default" class="custom-file-input" id="exampleInputFile" value="">
                    <img src="uploads/<?= $img_path_default?>" alt="" height="50px">
                    <br><br>

                    <label >Mô tả </label>
                    <input type="text" name="mo_ta_san_pham" class="form-control" value="<?= $mo_ta_san_pham?>"> <br><br>

                    <label >Mã sản phẩm </label>
                    <input type="text" name="ma_san_pham" class="form-control" value="<?= $ma_san_pham?>"> <br><br>

                    <div class="form-group">
                        <label>Id danh mục</label>
                        <select class="form-select"  name="id_danh_muc">
                            <?php foreach ($danhmuc as $dm) { ?>
                                <option value="<?php echo $dm["id_danh_muc"] ?>"><?php echo $dm["mo_ta"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <input type="hidden" name="id_san_pham" value="<?= $id_san_pham ?>">

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
                    window.location.href = "?url=list-product";
                }
            </script>
 <!-- / Content -->