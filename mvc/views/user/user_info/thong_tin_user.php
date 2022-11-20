
    
    <div class="content">
        <div class="container">
        <form action="<?php echo _WEB_ROOT;?>/home/update_user" method="post" enctype="multipart/form-data" style="display: flex;
                                                                                                                    width:100%;
                                                                                                                    justify-content: space-between">
           <div style="position: relative">
               <label for="change_avatar" style="position: absolute;top:20px;left: 100px">
                   <?php
                if(isset($_SESSION['user_id'])){
                    if($_SESSION['avatar'] == '') {
                        ?>
                        <div class="wrap_avatar">
                            <img src="https://png.pngtree.com/png-vector/20191026/ourlarge/pngtree-camera-icon-png-image_1871609.jpg" alt=""  class="icon_camera">
                            <?php
                                echo '<img src="'._WEB_ROOT.'/public/images/avatars/default_avatar.png" alt="" class="avatar">';
                            ?>
                        </div>
                        <?php
                    }else {
                        ?>
                        <div class="wrap_avatar">
                            <img src="https://png.pngtree.com/png-vector/20191026/ourlarge/pngtree-camera-icon-png-image_1871609.jpg" alt=""  class="icon_camera">
                            <?php
                                echo '<img src="'._WEB_ROOT.'/public/images/avatars/'.$_SESSION['avatar'].'" alt="" class="avatar">';
                            ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </label>
        </div>
            <input type="file" name="change_avatar" id="change_avatar" onchange="loadFile(event)" hidden>
         
            <div class="information">
                <div class="information-input">
                    <input type="text" placeholder="UserName" class="form-control" value="<?php echo $_SESSION['username'] ?>" required style="pointer-events: none;background-color: #eee">
                </div>
                <div class="information-input">
                    <input type="text" name="ud_email" placeholder="Email" class="form-control" value="<?php echo $_SESSION['email'] ?>" required>
                </div>
                <div class="information-input">
                    <input type="text" name="ud_sdt" placeholder="Số điện thoại" class="form-control" value="<?php if(isset($_SESSION['sdt'])){echo $_SESSION['sdt']; } ?>">
                </div>
                <div class="information-input">
                    <input type="text" name="ud_diachi" placeholder="Địa chỉ" class="form-control" value="<?php if(isset($_SESSION['diachi'])){echo $_SESSION['diachi']; } ?>">
                </div>
                <div class="information-btn">
                    <input type="submit" value="Lưu lại" name="btn_update_user" class="btn-form">
                </div>
            </div>
            </form>
        </div>
    </div>
    