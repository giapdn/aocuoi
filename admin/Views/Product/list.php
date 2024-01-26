<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span> Danh sách sản phẩm</h4>
    <div class="a d-flex justify-content-between">
        <a href="?url=add-product"><input class="btn btn-primary" type="submit" name="them" value="Thêm"></a>
        <form method="post" action="?url=search-product">
            <div class="d-flex justify-content-end">
                <input class="p o v l" type="text" name="noidung" placeholder="Nhập áo cưới cần tìm" style="border-radius: 5px;">
                <input class="btn btn-primary p o v" type="submit" name="timkiem" value="Tìm kiếm">
            </div>
        </form>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <table class="table text-center">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Tên Sp </th>
                            <th>Giá Sp</th>
                            <th>Ảnh Sp</th>
                            <th>Mô tả</th>
                            <th>Mã Sp</th>
                            <th>Id danh mục</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sanpham as $key => $sp) :
                            $xoa = "?url=xoa-product&id=" . $sp['id_san_pham'];
                            $xoa_sort = "?url=sort-delete-product&id=" . $sp['id_san_pham'];
                            $sua = "?url=sua-product&id=" . $sp['id_san_pham']; ?>
                            <tr>
                                <td><?= $sp['id_san_pham'] ?></td>
                                <td><?= $sp['ten_san_pham'] ?></td>
                                <td><?= $sp['gia_san_pham'] ?></td>
                                <td> <img style="width: 50px;height: auto;" src="uploads/<?= $sp['img_path_default'] ?>" alt=""></td>
                                <td>
                                    <textarea readonly name="" id="" cols="25" rows="2"><?= $sp['mo_ta_san_pham'] ?></textarea>
                                </td>
                                <td><?= $sp['ma_san_pham'] ?></td>
                                <td><?= $sp['id_danh_muc'] ?></td>
                                <td>
                                    <div class="change" style="display: flex; ">
                                        <form action="<?= $sua ?>" method="post">
                                            <input class="btn btn-success" type="submit" name="sua" value="Sửa">
                                        </form>
                                        <form class="d-flex flex-column-reverse" action="<?= $xoa_sort ?>" method="post">
                                            <input class="btn btn-warning" type="submit" name="xoa" value="Ẩn" onclick="return confirm('Bạn chắc chắn ẩn sản phẩm không?')">
                                        </form>
                                        <form class="d-flex flex-column-reverse" action="<?= $xoa ?>" method="post">
                                            <input class="btn btn-danger" type="submit" name="xoa" value="Xóa " onclick="return confirm('Bạn chắc chắn xóa không?')">
                                        </form>
                                    </div>
                                </td>
                            <?php endforeach ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>