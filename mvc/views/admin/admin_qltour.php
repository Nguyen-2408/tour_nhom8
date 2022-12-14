<style>
    .form_edit-tour {
        width: 500px;
        position: relative;
        left: 20%;
        border:1px solid #ccc;
        border-radius: 10px;
    }
    .form_edit-tour p{
        font-size: 20px;
        text-align: center;
    }
    .wrap_edit-tour {
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .input_edit-tour{
        width: 70%;
        padding: 5px 10px 5px 5px;
        font-size: 14px;
        border-radius: 10px;
        outline: none;
        border: 1px solid #333;
    }
    .wrap_edit-tour label {
        font-size: 16px;
        font-weight: 600;
    }
    .edit_anh-tour{
        position: absolute;
        right:0;
        transform: translateX(110%);
    }
    
    .edit_anh-tour:hover .icon_switch{
        opacity:1;
        cursor:pointer;
    }
    .edit_anh-tour:hover .img_tour_descr {
        opacity:0.75;
    }
    .icon_switch{
        font-size: 45px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        color: #000;
        opacity:0;
        transition:0.15s linear;
        z-index: 999;
    }
    .btn_edit-tour {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .btn_edit-tour:hover {
        background-color: #2cccff;
        color:#fff;
    }

    .btn_cancel:hover {
        background-color: #dc3545;
    }

    .img_tour_descr {
        height: 220px;
        transition:0.15s linear;
        cursor:pointer;
    }

    .form_add-tour{
        max-width: 500px;
        position: relative;
        left: 20%;
        border:1px solid #ccc;
        border-radius: 10px;
    }   
    .add_anh-tour{
        position: absolute;
        right:0;
        transform: translateX(110%);
    }
    .form_add-tour p{
        font-size: 20px;
        text-align: center;
    }
    .wrap_add-tour {
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .input_add-tour{
        width: 70%;
        padding: 5px 10px 5px 5px;
        font-size: 14px;
        border-radius: 10px;
        outline: none;
        border: 1px solid #333;
    }
    .wrap_add-tour label {
        font-size: 16px;
        font-weight: 600;
    }
    .btn_add-tour {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .btn_add-tour:hover {
        background-color: #2cccff;
        color:#fff;
    }
    .btn_add-tour.btn_cancel:hover {
        background-color: #dc3545;
    }
    .btn_form_addtour{
        width: 300px;
        height: 40px;
        margin-left: 30px;
        border-radius: 10px;
        border: 1px solid #333;
        font-size: 18px;
        font-weight: 600;
        transition: 0.15s linear;
    }
    .btn_form_addtour:hover{
        background-color: #0dcaf0;
        color: #fff;
    }
    .btn_export-tour{
        float: right;
        margin-right: 30px;
        font-size: 16px;
        padding: 10px 40px;
        font-weight: 600;
    }
    .btn_import-tour{
        font-size: 16px;
        padding: 10px 40px;
        font-weight: 600;
        border: 1px solid #ccc;
    }
    .input_file_excel{
        width: 120px;
        margin:0 10px;
        font-size: 12px;
    }
    .form_import {
        float: right;
        margin-right: 10px;
        border:1px solid #333;
    }
    .desr{
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    </style>
<p style="margin-top:80px;
        padding: 10px 0;
        font-size: 24px;
        font-weight: 700;
        text-align:center">Qu???n l?? tour</p>

<!-- T??m ki???m -->
<div class="form_search-tour">
    <form action="<?php echo _WEB_ROOT;?>/admin/search_tour" method ="POST">
        <div class="wrap_form-search">
            <input type="text" name="tourname" placeholder=" "  class="input_search-tour" id="input_search-tour" value="<?php if(isset($_POST['tourname'])) {echo $_POST['tourname'];} ?>">
            <label for="input_search-tour" class="txt_search">T??n tour</label>
            <label for="btn_search-tour" class="wrap_icon-search">
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </label>
        </div>
        <input type="submit" name="btn_search-tour" hidden id="btn_search-tour">
    </form>
</div>

<!-- Th??m tour -->

<?php
    if(isset($data['form_add_tour'])) {
        ?>
    <p style="font-size: 24px;
            font-weight:600;
            text-align: center;">Th??m tour</p>
    <div class="form_add-tour">
        <form action="<?php echo _WEB_ROOT;?>/admin/add_tour" method="POST" enctype="multipart/form-data">
            <div class="add_anh-tour">
                <p>???nh tour</p>
                <label for="anh_tour">
                    <div style="position: relative">
                        <img src="https://visualpharm.com/assets/135/Add%20Image-595b40b85ba036ed117dbead.svg" alt="???nh tour" class="img_tour_descr">
                    </div>
                </label>
                <input type="file" name="anhtour" id="anh_tour" onchange="load_anh_tour(event)" style="opacity: 0; position: absolute;top: 50%;left: 0;" required>
            </div>
            <div class="wrap_add-tour">
                <label for="">T??n tour</label>
                <input type="text" name="tourname" required class="input_add-tour">
            </div>
            <div class="wrap_add-tour">
                <label for="">Th???i gian</label>
                <input type="text" name="songay" required class="input_add-tour">
            </div>
            <div class="wrap_add-tour">
                <label for="">M?? t??? v??? tour</label>
                <textarea name="info_tour" id="" class="input_add-tour"></textarea>
            </div>
            <div class="wrap_add-tour">
                <label for="">Gi?? ng?????i l???n</label>
                <input type="text" name="gianguoilon" required class="input_add-tour">
            </div>
            <div class="wrap_add-tour">
                <label for="">Gi?? tr??? em</label>
                <input type="text" name="giatreem" required class="input_add-tour">
            </div>
            <input type="submit" value="Th??m m???i" name="btn_add-tour" class="btn_add-tour" >
            <a href="<?php echo _WEB_ROOT;?>/admin/qltour">
                <input type="button" value="H???y" class="btn_add-tour btn_cancel" onclick = "if (!confirm('B???n c?? mu???n h???y?')) { return false; }">
            </a>
        </form>
    </div>  
<?php
    }else{
        ?>
        <a href="<?php echo _WEB_ROOT;?>/admin/form_add_tour">
            <button class="btn_form_addtour">Th??m tour m???i</button>
        </a>
        <?php
    }
?>

<!-- S???a tt tour-->

        <?php
if(isset($data['edit-tour'])){
    if(isset($data['tour_info'])){
        while($row = mysqli_fetch_assoc($data['tour_info'])){
            $_SESSION['img_tour'] = $row['anhtour'];
            ?>
            <p style="font-size: 24px;
        font-weight:600;
        text-align: center;">S???a tour</p>
            <div class="form_edit-tour">
                <form action="<?php echo _WEB_ROOT;?>/admin/update_tour/<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="edit_anh-tour">
                        <p>???nh tour</p>
                        <label for="anh_tour">
                            <div style="position: relative">
                                <i class="fa-solid fa-repeat icon_switch"></i>
                                <img src="<?php echo _WEB_ROOT;?>/public/images/img_web/<?php echo $row['anhtour'];?>" alt="???nh tour" class="img_tour_descr">
                            </div>
                        </label>
                        <input type="file" name="anhtour_ud" id="anh_tour" onchange="load_anh_tour(event)" hidden>
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">T??n tour</label>
                        <input type="text" name="tourname_ud" required class="input_edit-tour" value="<?php echo $row['tentour']; ?>">
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Th???i gian</label>
                        <input type="text" name="songay_ud" required class="input_edit-tour" value="<?php echo $row['songay']; ?>">
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">M?? t??? v??? tour</label>
                        <textarea name="info_tour_ud" id="" class="input_edit-tour"><?php echo $row['info_tour'];?></textarea>
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Gi?? ng?????i l???n</label>
                        <input type="text" name="gianguoilon_ud" required class="input_edit-tour" value="<?php echo $row['gia_nguoi_lon']; ?>">
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Gi?? tr??? em</label>
                        <input type="text" name="giatreem_ud" required class="input_edit-tour" value="<?php echo $row['gia_tre_em']; ?>">
                    </div>
                    <input type="submit" value="L??u l???i" name="btn_edit-tour" class="btn_edit-tour" >
                    <a href="<?php echo _WEB_ROOT;?>/admin/qltour">
                        <input type="button" value="H???y" class="btn_edit-tour btn_cancel" onclick = "if (!confirm('B???n c?? mu???n h???y?')) { return false; }">
                    </a>
                </form>
            </div>
<?php
        }
    }
}
?>

<!-- Danh s??ch -->
<p style="padding-top:100px;
        font-size: 24px;
        font-weight: 700;
        text-align:center">Danh s??ch tour</p>
        <!-- Nh???p excel -->
        <div class="form_import">
            <form action="<?php echo _WEB_ROOT;?>/admin/import_excel_tour" method ="POST" enctype="multipart/form-data">
                <input type="file" name="fileExcel" id="" class="input_file_excel" required>
                
                <input type="submit" name="btn_import_excel" value="Nh???p excel" class="btn_import-tour">
            </form>
        </div>

    <!-- Xu???t excel -->
    <form action="<?php echo _WEB_ROOT;?>/admin/export_excel_tour" method ="POST" enctype="multipart/form-data">
        <input type="submit" name="btn_export_excel" value="Xu???t excel" class="btn_export-tour">
    </form>

<div class="container" style="display: flex;
                            align-item: center"> 
<table class="table table-hover table-bordered" style=";
                                        margin-top: 20px;
                                        text-align: center;
                                        font-weight: 700;
                                        font-size: 16px;
                                        border-color: #ccc">
    <tr>
        <th style="width: 3%;background-color: #eee;line-height: 30px;">STT</th>
        <th style="width: 20%;background-color: #eee;line-height: 30px;">T??n tour</th>
        <th style="width: 20%;background-color: #eee;line-height: 30px;">???nh tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Th???i gian</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Th??ng tin tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Gi?? ng?????i l???n</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Gi?? tr??? em</th>
        <th style="width: 15%;background-color: #eee;line-height: 30px;" colspan ="2">Thao t??c</th>
    </tr>
    <?php 
    /* Hi???n th??? ds tour */
        if(isset($data['qltour'])) {
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['qltour'])){
                ?>
                    <tr>
                        <td style="background-color: #eee;"><?php echo $stt ?></td>
                        <td><?php echo $row['tentour'] ?></td>
                        <td>
                            <img src="<?php echo _WEB_ROOT;?>/public/images/img_web/<?php echo $row['anhtour'] ?>" alt="" style="height: 200px;">
                        </td>
                        <td><?php echo $row['songay'] ?>(Ng??y)</td>
                        <td class="desr"><?php echo $row['info_tour'] ?></td>
                        <td><?php echo $row['gia_nguoi_lon'] ?>??</td>
                        <td><?php echo $row['gia_tre_em'] ?>??</td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/edit_tour/<?php echo $row['id']; ?>">S???a</a></td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/del_tour/<?php echo $row['id']; ?>" onclick = "if (!confirm('B???n ch???c ch???n mu???n x??a?')) { return false; }">X??a</a></td>
                    </tr>
                <?php
                $stt++;
            }
        }
    ?>
    <?php
    /* Hi???n th??? ds t??m ki???m tour */
        if(isset($data['kq'])) {
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['kq'])){
                ?>
                    <tr>
                        <td style="background-color: #eee;"><?php echo $stt ?></td>
                        <td><?php echo $row['tentour'] ?></td>
                        <td>
                            <img src="<?php echo _WEB_ROOT;?>/public/images/img_web/<?php echo $row['anhtour'] ?>" alt="" style="height: 200px;">
                        </td>
                        <td><?php echo $row['songay'] ?>(Ng??y)</td>
                        <td class="desr"><?php echo $row['info_tour'] ?></td>
                        <td><?php echo $row['gia_nguoi_lon'] ?>??</td>
                        <td><?php echo $row['gia_tre_em'] ?>??</td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/edit_tour/<?php echo $row['id']; ?>">S???a</a></td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/del_tour/<?php echo $row['id']; ?>" onclick = "if (!confirm('B???n ch???c ch???n mu???n x??a?')) { return false; }">X??a</a></td>
                    </tr>
                    
                <?php
                $stt++;
            }
        }else {
            /* Hi???n th??? ???nh kh??ng c?? d??? li???u t??m ki???m */
        if(isset($data['no-result'])) {
            ?>
                <img src="https://medplus.vn/images/404.png" alt="" class="no_result-img">
            <?php
        }
        }
    ?>
</table>
</div>
<div style="width: 100%;height: 300px"></div>