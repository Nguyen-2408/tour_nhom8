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
    </style>
<p style="margin-top:80px;
        padding: 10px 0;
        font-size: 24px;
        font-weight: 700;
        text-align:center">Quản lí tour</p>

<!-- Tìm kiếm -->
<div class="form_search-tour">
    <form action="<?php echo _WEB_ROOT;?>/admin/search_tour" method ="POST">
        <div class="wrap_form-search">
            <input type="text" name="tourname" placeholder=" "  class="input_search-tour" id="input_search-tour" value="<?php if(isset($_POST['tourname'])) {echo $_POST['tourname'];} ?>">
            <label for="input_search-tour" class="txt_search">Tên tour</label>
            <label for="btn_search-tour" class="wrap_icon-search">
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </label>
        </div>
        <input type="submit" name="btn_search-tour" hidden id="btn_search-tour">
    </form>
</div>

<!-- Thêm tour -->


<?php
    if(isset($data['form_add_tour'])) {
        ?>
    <p style="font-size: 24px;
            font-weight:600;
            text-align: center;">Thêm tour</p>
    <div class="form_add-tour">
        <form action="<?php echo _WEB_ROOT;?>/admin/add_tour" method="POST" enctype="multipart/form-data">
            <div class="add_anh-tour">
                <p>Ảnh tour</p>
                <label for="anh_tour">
                    <div style="position: relative">
                        <img src="https://visualpharm.com/assets/135/Add%20Image-595b40b85ba036ed117dbead.svg" alt="ảnh tour" class="img_tour_descr">
                    </div>
                </label>
                <input type="file" name="anhtour" id="anh_tour" onchange="load_anh_tour(event)" style="opacity: 0; position: absolute;top: 50%;left: 0;" required>
            </div>
            <div class="wrap_add-tour">
                <label for="">Tên tour</label>
                <input type="text" name="tourname" required class="input_add-tour">
            </div>
            <div class="wrap_add-tour">
                <label for="">Thời gian</label>
                <input type="text" name="songay" required class="input_add-tour">
            </div>
            <div class="wrap_add-tour">
                <label for="">Mô tả về tour</label>
                <textarea name="info_tour" id="" class="input_add-tour"></textarea>
            </div>
            <div class="wrap_add-tour">
                <label for="">Giá người lớn</label>
                <input type="text" name="gianguoilon" required class="input_add-tour">
            </div>
            <div class="wrap_add-tour">
                <label for="">Giá trẻ em</label>
                <input type="text" name="giatreem" required class="input_add-tour">
            </div>
            <input type="submit" value="Thêm mới" name="btn_add-tour" class="btn_add-tour" >
            <a href="<?php echo _WEB_ROOT;?>/admin/qltour">
                <input type="button" value="Hủy" class="btn_add-tour btn_cancel" onclick = "if (!confirm('Bạn có muốn hủy?')) { return false; }">
            </a>
        </form>
    </div>  
<?php
    }else{
        ?>
        <a href="<?php echo _WEB_ROOT;?>/admin/form_add_tour">
            <button class="btn_form_addtour">Thêm tour mới</button>
        </a>
        <?php
    }
?>

<!-- Sửa tt tour-->

        <?php
if(isset($data['edit-tour'])){
    if(isset($data['tour_info'])){
        while($row = mysqli_fetch_assoc($data['tour_info'])){
            $_SESSION['img_tour'] = $row['anhtour'];
            ?>
            <p style="font-size: 24px;
        font-weight:600;
        text-align: center;">Sửa tour</p>
            <div class="form_edit-tour">
                <form action="<?php echo _WEB_ROOT;?>/admin/update_tour/<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="edit_anh-tour">
                        <p>Ảnh tour</p>
                        <label for="anh_tour">
                            <div style="position: relative">
                                <i class="fa-solid fa-repeat icon_switch"></i>
                                <img src="<?php echo _WEB_ROOT;?>/public/images/img_web/<?php echo $row['anhtour'];?>" alt="ảnh tour" class="img_tour_descr">
                            </div>
                        </label>
                        <input type="file" name="anhtour_ud" id="anh_tour" onchange="load_anh_tour(event)" hidden>
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Tên tour</label>
                        <input type="text" name="tourname_ud" required class="input_edit-tour" value="<?php echo $row['tentour']; ?>">
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Thời gian</label>
                        <input type="text" name="songay_ud" required class="input_edit-tour" value="<?php echo $row['songay']; ?>">
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Mô tả về tour</label>
                        <textarea name="info_tour_ud" id="" class="input_edit-tour"><?php echo $row['info_tour'];?></textarea>
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Giá người lớn</label>
                        <input type="text" name="gianguoilon_ud" required class="input_edit-tour" value="<?php echo $row['gia_nguoi_lon']; ?>">
                    </div>
                    <div class="wrap_edit-tour">
                        <label for="">Giá trẻ em</label>
                        <input type="text" name="giatreem_ud" required class="input_edit-tour" value="<?php echo $row['gia_tre_em']; ?>">
                    </div>
                    <input type="submit" value="Lưu lại" name="btn_edit-tour" class="btn_edit-tour" >
                    <a href="<?php echo _WEB_ROOT;?>/admin/qltour">
                        <input type="button" value="Hủy" class="btn_edit-tour btn_cancel" onclick = "if (!confirm('Bạn có muốn hủy?')) { return false; }">
                    </a>
                </form>
            </div>
<?php
        }
    }
}
?>

<!-- Danh sách -->
<p style="padding-top:100px;
        font-size: 24px;
        font-weight: 700;
        text-align:center">Danh sách tour</p>
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
        <th style="width: 20%;background-color: #eee;line-height: 30px;">Tên tour</th>
        <th style="width: 20%;background-color: #eee;line-height: 30px;">Ảnh tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thời gian</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thông tin tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Giá người lớn</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Giá trẻ em</th>
        <th style="width: 15%;background-color: #eee;line-height: 30px;" colspan ="2">Thao tác</th>
    </tr>
    <?php 
    /* Hiển thị ds tour */
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
                        <td><?php echo $row['songay'] ?>(Ngày)</td>
                        <td><?php echo $row['info_tour'] ?></td>
                        <td><?php echo $row['gia_nguoi_lon'] ?>đ</td>
                        <td><?php echo $row['gia_tre_em'] ?>đ</td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/edit_tour/<?php echo $row['id']; ?>">Sửa</a></td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/del_tour/<?php echo $row['id']; ?>" onclick = "if (!confirm('Bạn chắc chắn muốn xóa?')) { return false; }">Xóa</a></td>
                    </tr>
                <?php
                $stt++;
            }
        }
    ?>
    <?php
    /* Hiển thị ds tìm kiếm tour */
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
                        <td><?php echo $row['songay'] ?>(Ngày)</td>
                        <td><?php echo $row['info_tour'] ?></td>
                        <td><?php echo $row['gia_nguoi_lon'] ?>đ</td>
                        <td><?php echo $row['gia_tre_em'] ?>đ</td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/edit_tour/<?php echo $row['id']; ?>">Sửa</a></td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/del_tour/<?php echo $row['id']; ?>" onclick = "if (!confirm('Bạn chắc chắn muốn xóa?')) { return false; }">Xóa</a></td>
                    </tr>
                    
                <?php
                $stt++;
            }
        }else {
            /* Hiển thị ảnh không có dữ liệu tìm kiếm */
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