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
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Sdt</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lienhe as $key => $lh):
                            $lienHe = "?url=lh&id_lienhe=".$lh['id_lienhe'];
                            ?>
                            
                        <tr>
                            <td><?= $lh['id_lienhe']?></td>
                            
                            <td><?= $lh['ten_khach_hang']?></td>
                            <td><?= $lh['email']?></td>
                            <td><?= $lh['dien_thoai']?></td>
                            <td>
                                <textarea readonly name="" id="" cols="25" rows="2"><?= $lh['noi_dung']?></textarea> 
                            </td>
                            <td>
                                <?= $lh['trang_thai']?>
                                <!-- <?php 
                        
                            if ($lh['trang_thai'] == 'Chưa Liên Hệ' && $lh['trang_thai'] != 'Đã Liên Hệ' && $lh['trang_thai'] != 'Đã Liên Hệ Lần 1' && $lh['trang_thai'] != 'Đã Liên Hệ Lần 2') {?>
                                <input name="daLienHe"   type="submit" value="Đã Liên Hệ" style="height: 30px;min-width: 120px;background-color: cadetblue;border: 0;">
                                <input name="daLienHeL1" type="submit" value="Đã Liên Hệ Lần 1" style="height: 30px;min-width: 120px;background-color: chocolate;border: 0;margin-top: 8px;">
                                <input name="daLienHeL2" type="submit" value="Đã Liên Hệ Lần 2" style="height: 30px;min-width: 120px;background-color: chocolate;border: 0;margin-top: 8px;">
                            <?php }
                                else if ($lh['trang_thai'] == 'Đã Liên Hệ') {?>
                                <button name=""   type="submit" value="" style="height: 30px;min-width: 120px;background-color: darkgreen;border: 0;margin-top: 8px; color: white;">Check_In</button>
                            <?php }?>  
                            </td> -->
                            
                            <?php endforeach ?> 
                        </tr>
                        
                    </tbody>
                </table>

             </div>
         </div>
     </div>
 </div>
 <!-- / Content -->