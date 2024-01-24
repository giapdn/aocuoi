<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục /</span>Thêm danh mục</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="?url=add-category" method="post" enctype="multipart/form-data" style="padding: 20px;">
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" class="form-control" name="mo_ta" id="name" placeholder="Nhập tên danh mục">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="prodImg">Ảnh danh mục</label>
                        <div class="custom-file">
                            <input type="file" name="path" class="custom-file-input" id="exampleInputFile">
                        </div>
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
        window.location.href = "?url=list-category";
    }
</script>