<!-- Quản lí tài khoản khách hàng -->
    <h1>Quản lí tài khoản</h1>
<!-- Tìm kiếm user -->
<div class="form_search-user">
    <form action="<?php echo _WEB_ROOT;?>/admin/search_user" method ="POST">
        <div class="wrap_form-search">
            <input type="text" name="username" placeholder=" "  class="input_search-user" id="input_search-user" value="<?php if(isset($_POST['username'])) {echo $_POST['username'];} ?>">
            <label for="input_search-user" class="txt_search">Username</label>
            <label for="btn_search-user" class="wrap_icon-search">
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </label>
        </div>
        <input type="submit" value="" name="btn_search-user" hidden id="btn_search-user">
    </form>
</div>

<!-- Sửa user -->
<?php
    if(isset($data['edit_user'])) {
        if(isset($data['user_info'])){
            while($row = mysqli_fetch_assoc($data['user_info'])){
                ?>
       <div style=" text-align: center;
                    margin-top: 25px;
                    position: relative;
                    margin-bottom: 330px;">
           <p style="font-size: 18px; font-weight: 600">Sửa thông tin khách hàng</p>
            <form action="<?php echo _WEB_ROOT;?>/admin/update_user/<?php echo $row['id'] ?>" method="POST" class="form_edit-user"> 
                <div class="wrap_input-edit"><label for="" class="lb_form-edit">Username</label><input type="text" name="username_ud" value="<?php echo $row['username'] ?>" required class="input_form-edit"></div>
                <div class="wrap_input-edit"><label for="" class="lb_form-edit">Email</label><input type="text" name="email_ud" value="<?php echo $row['email'] ?>" required class="input_form-edit"></div>
                <div class="wrap_input-edit"><label for="" class="lb_form-edit">Số điện thoại</label><input type="text" name="sdt_ud" value="<?php echo $row['dienthoai'] ?>" class="input_form-edit"></div>
                <div class="wrap_input-edit"><label for="" class="lb_form-edit">Địa chỉ</label><input type="text" name="diachi_ud" value="<?php echo $row['diachi'] ?>" class="input_form-edit"></div>
                <input type="submit" value="Lưu" name="btn_edit-user" class="btn_edit-user">
                <a href="<?php echo _WEB_ROOT;?>/admin">
                        <input type="button" value="Hủy" class="btn_edit-user" onclick = "if (!confirm('Bạn có muốn hủy?')) { return false; }">
                    </a>
            </form>
        </div> 
    <?php
            }
        }
    }
?>

<!-- Danh sách user -->
<p style="padding-top:50px;
        font-size: 24px;
        font-weight: 700;
        text-align:center">Danh sách tài khoản</p>
<div class="container" style="display: flex;
                            align-item: center"> 
<table class="table table-hover table-bordered" style="position:relative;
                                                    margin-top: 20px;
                                                    text-align: center;
                                                    font-weight: 500;
                                                    font-size: 16px;
                                                    line-height: 50px;
                                                    border-color: #ccc">
    <tr>
        <th style="width: 3%;background-color: #eee;">STT</th>
        <th style="width: 5%;background-color: #eee;">Avatar</th>
        <th style="width: 12%;background-color: #eee">Username</th>
        <th style="width: 30%;background-color: #eee">Email</th>
        <th style="width: 10%;background-color: #eee">Số điện thoại</th>
        <th style="width: 30%;background-color: #eee">Địa chỉ</th>
        <th style="width: 10%;background-color: #eee" colspan ="2">Thao tác</th>
    </tr>
    <?php 
        if(isset($data['qltk']) ) {
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['qltk'])){
                ?>
                    <tr>
                        <td style="background-color: #eee;"><?php echo $stt ?></td>
                        <td>
                            <img src="<?php 
                                if($row['avatar'] != ""){
                                    ?>
                                    <?php echo _WEB_ROOT;?>/public/images/avatars/<?php echo $row['avatar'] ?>
                                    <?php
                                } else {
                                    ?>
                                    <?php echo _WEB_ROOT;?>/public/images/avatars/default_avatar.png
                                    <?php
                                }
                            ?>" alt="" style="width: 45px; border-radius: 50%;">
                        </td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['dienthoai'] ?></td>
                        <td><?php echo $row['diachi'] ?></td>
                        <?php
                            if($row['username'] == 'admin'){
                                ?>
                                <td colspan='2'>ADMIN </td>
                                <?php
                            }else{
                                ?>
                                    <td><a href="<?php echo _WEB_ROOT;?>/admin/edit_user/<?php echo $row['id'] ?>">Sửa</a></td>
                                    <td><a href="<?php echo _WEB_ROOT;?>/admin/del_user/<?php echo $row['id'] ?>" class="delete-user" onclick = "if (!confirm('Bạn chắc chắn muốn xóa?')) { return false; }">Xóa</a></td>
                                <?php
                            }
                        ?>
                    </tr>
                <?php
                $stt++;
            }
        }
    ?>

    <?php
        if(isset($data['kq'])) {
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['kq'])){
                ?>
                    <tr>
                    <td style="background-color: #eee;"><?php echo $stt ?></td>
                    <td>
                            <img src="<?php 
                                if($row['avatar'] != ""){
                                    ?>
                                    <?php echo _WEB_ROOT;?>/public/images/avatars/<?php echo $row['avatar'] ?>
                                    <?php
                                } else {
                                    ?>
                                    <?php echo _WEB_ROOT;?>/public/images/avatars/default_avatar.png
                                    <?php
                                }
                            ?>" alt="" style="width: 45px; border-radius: 50%;">
                        </td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['dienthoai'] ?></td>
                        <td><?php echo $row['diachi'] ?></td>
                        <?php
                            if($row['username'] == 'admin'){
                                ?>
                                <td colspan='2'>ADMIN</td>
                                <?php
                            }else{
                                ?>
                                    <td><a href="<?php echo _WEB_ROOT;?>/admin/edit_user/<?php echo $row['id'] ?>">Sửa</a></td>
                                    <td><a href="<?php echo _WEB_ROOT;?>/admin/del_user/<?php echo $row['id'] ?>">Xóa</a></td>
                                <?php
                            }
                        ?>
                    </tr>
                <?php
                $stt++;
            }
        }else {
        if(isset($data['no-result'])) {
            ?>
                <img src="https://medplus.vn/images/404.png" alt="" class="no_result-img">
            <?php
        }
        }
    ?>
</table>
</div>
<div style="width: 100%;height: 200px"></div>