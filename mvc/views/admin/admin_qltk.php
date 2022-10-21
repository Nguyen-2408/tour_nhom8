<!-- Quản lí tài khoản khách hàng -->
<form action="">

</form>



<p style="padding-top:100px;font-size: 24px;font-weight: 700;text-align:center">Danh sách tài khoản</p>
<div class="container" style="display: flex;align-item: center"> 
<table class="table table-hover table-bordered" style="w;
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
        <th style="width: 45%;background-color: #eee">Email</th>
        <th style="width: 20%;background-color: #eee">Số điện thoại</th>
        <th style="width: 15%;background-color: #eee" colspan ="2">Thao tác</th>
    </tr>
    <?php 
        if(isset($data['qltk'])) {
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
                        <td><a href="">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
                    </tr>
                <?php
                $stt++;
            }
        }
    ?>
</table>
</div>
<div style="width: 100%;height: 200px"></div>