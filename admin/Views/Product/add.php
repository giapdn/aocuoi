<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span>Thêm sản phẩm</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="?url=add-product" method="post" enctype="multipart/form-data" style="padding: 15px;">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên cho sản phẩm">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="prodPrice">Giá </label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="gia_san_pham" class="form-control" placeholder="Nhập giá sản phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prodImg">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="img_path_default" class="custom-file-input">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" name="mo_ta_san_pham" placeholder="Nhập mô tả">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Mã sản phẩm</label>
                        <input type="text" class="form-control" name="ma_san_pham" placeholder="Nhập mã của sản phẩm">
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Id danh mục</label>
                        <select class="form-select" name="id_danh_muc">
                            <?php foreach ($id_dm as $dm) { ?>
                                <option value="<?php echo $dm["id_danh_muc"] ?>"><?php echo $dm["mo_ta"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="list" class="btn btn-primary" onclick="goToList()">Danh sách</button>
                        <button type="submit" name="them" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
                <form action="?url=import-product" method="post" enctype="multipart/form-data">
                    <input required type="file" name="excelFile">
                    <input type="submit" value="Tải lên">
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function goToList() {
        event.preventDefault();
        window.location.href = "?url=list-product";
    }
</script>