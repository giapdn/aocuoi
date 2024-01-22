 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span> Danh sách bài viết</h4>
     <a href="?url=add-baiviet"><input type="submit" name="them" value="Thêm"></a>
     <form method="post">
        <div class="d-flex justify-content-end" style="margin-bottom: 10px;">
            <input class="p o v" type="text" name="noidung" placeholder="nhập tên tiêu đề" style="border-radius: 5px;">
            <input class="btn btn-primary p o v" type="submit" name="btn" value="Tìm kiếm">
        </div>
    </form>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Ngày đăng</th>
                            <th>Ảnh</th>
                            <th>Người đăng</th>
                            <th>Trạng thái</th>
                            <th>thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($baidang as $key => $bai):
                        $xoa = "?url=xoa-baiviet&id=".$bai['id_bai_dang'];
                        $sua = "?url=sua-baiviet&id=".$bai['id_bai_dang'];?>
                        <tr>
                            <td><?= $bai['id_bai_dang']?></td>
                            <td><?= $bai['tieu_de']?></td>
                            <td>
                                <textarea readonly name="" id="" cols="25" rows="2"><?= $bai['noi_dung']?></textarea> 
                            </td>
                            <td><?= $bai['ngay_dang']?></td>
                            <td> <img style="width: 50px;height: auto;" src="uploads/<?= $bai['path']?>" alt=""></td>
                            <td><?= $bai['username']?></td>
                            <td>
                                <select name="" id="">
                                    <option value="">
                                        <?= $bai['trangthai']?>
                                    </option>
                                </select>
                            </td>
                            <td>
                                <div class="change" style="display: flex; " >
                                    <form action="<?= $xoa?>" method="post">
                                        <input type="submit" name="" value="xóa">
                                    </form>
                                    <form action="<?= $sua?>" method="post">
                                        <input type="submit" name="sua" value="sửa">
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
 <!-- / Content -->