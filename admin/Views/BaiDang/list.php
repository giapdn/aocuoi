 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span> Danh sách bài viết</h4>
     <div class="d-flex justify-content-between">
         <a href="?url=add-baiviet"><input class="btn btn-primary" type="submit" name="them" value="Thêm"></a>
         <form method="post" action="?url=search-baiviet">
             <div class="d-flex justify-content-end" style="margin-bottom: 10px;">
                 <input class="p o v" type="text" name="noidung" placeholder="nhập tên tiêu đề" style="border-radius: 5px;">
                 <input class="btn btn-primary p o v" type="submit" name="timkiem" value="Tìm kiếm">
             </div>
         </form>
     </div>
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
                         <?php foreach ($baidang as $key => $bai) :
                                $trangthai = "";
                                if ($bai['trangthai'] == 1) {
                                    $trangthai = "Bài viết đang hiển thị";
                                } elseif ($bai['trangthai'] == 2) {
                                    $trangthai = " Bài viết đang ẩn";
                                }
                                $xoa = "?url=xoa-baiviet&id=" . $bai['id_bai_dang'];
                                $sua = "?url=sua-baiviet&id=" . $bai['id_bai_dang']; ?>
                             <tr>
                                 <td><?= $bai['id_bai_dang'] ?></td>
                                 <td><?= $bai['tieu_de'] ?></td>
                                 <td>
                                     <textarea readonly name="" id="" cols="25" rows="2"><?= $bai['noi_dung'] ?></textarea>
                                 </td>
                                 <td><?= $bai['ngay_dang'] ?></td>
                                 <td> <img style="width: 50px;height: auto;" src="uploads/<?= $bai['path'] ?>" alt=""></td>
                                 <td><?= $bai['username'] ?></td>
                                 <td>
                                     <?= $trangthai ?>
                                 </td>
                                 <td>
                                     <div class="change" style="display: flex; ">
                                         <form action="<?= $sua ?>" method="post">
                                             <input class="btn btn-warning" type="submit" name="sua" value="sửa">
                                         </form>
                                         <form action="<?= $xoa ?>" method="post">
                                             <input class="btn btn-danger" type="submit" name="" value="xóa">
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