<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục /</span> Danh sách danh mục</h4>
    <a href="?url=add-category"><input type="submit" name="them" value="Thêm"></a>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>mô tả</th>
                            <th>ảnh</th>
                            <th>thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($danhmuc as $key => $ca) :
                            $xoa = "?url=xoa-category&id=" . $ca['id_danh_muc'];
                            $sua = "?url=sua-category&id=" . $ca['id_danh_muc']; ?>
                            <tr>
                                <td><?= $ca['id_danh_muc'] ?></td>
                                <td><?= $ca['mo_ta'] ?></td>
                                <td> <img style="width: 50px;height: auto;" src="uploads/<?= $ca['path'] ?>" alt=""></td>
                                <td>
                                    <div class="change" style="display: flex; ">
                                        <form action="<?= $xoa ?>" method="post">

                                            <input type="submit" name="" value="xóa">
                                        </form>
                                        <form action="<?= $sua ?>" method="post">
                                            <input type="submit" name="sua-category" value="sửa">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>