 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liên hệ /</span> Danh sách liên hệ</h4>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nội dung</th>
                            <th>username</th>
                            <th>Email</th>
                            <th>Sdt</th>
                            <th>Tên khách hàng</th>
                            <th>Mã sản phẩm</th>
                            <th>Loại dịch vụ</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lienhe as $key => $lh):?>
                        <tr>
                            <td><?= $lh['id_lienhe']?></td>
                            <td>
                                <textarea readonly name="" id="" cols="25" rows="2"><?= $lh['noi_dung']?></textarea> 
                            </td>
                            <td><?= $lh['username']?></td>
                            <td><?= $lh['email']?></td>
                            <td><?= $lh['dien_thoai']?></td>
                            <td><?= $lh['ten_khach_hang']?></td>
                            <td><?= $lh['id_san_pham']?></td>
                            <td><?= $lh['loai_dich_vu']?></td>
                            <td>
                                <select name="" id="">
                                    <option value="">
                                        <?= $lh['trang_thai']?>
                                    </option>
                                </select>
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