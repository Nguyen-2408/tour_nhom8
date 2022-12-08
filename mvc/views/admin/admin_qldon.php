<style>
    .form_search-don{
    margin-top: 30px;
    display: flex;
    justify-content: center;
    padding-top: 40px;
    align-items: center;
}

.input_search-don {
    padding: 5px 50px 5px 10px;
    height: 100%;
    font-size: 18px;
    font-weight: 600;
    outline: none;
    border-radius: 10px;
    border: 1px solid #333;
    background-color: #fff;
    transition: 0.35s linear;
}
.input_search-don:focus {
    background-color: #fff; 
}

.input_search-don:not(:placeholder-shown) + .txt_search,
.input_search-don:focus + .txt_search {
    top: 0px;
    font-size: 14px;
    background-color: #fff;
    padding: 0 5px;
    color: #000;
}

.btn_export-don{
    float: right;
    margin-right: 230px;
    font-size: 16px;
    padding: 10px 40px;
    font-weight: 600;
}



</style>

<p style="padding-top:100px;font-size: 24px;font-weight: 700;text-align:center">Danh sách đơn đặt tour</p>


<!-- Tìm kiếm user -->
<div class="form_search-don">
    <form action="<?php echo _WEB_ROOT;?>/admin/search_don" method ="POST">
        <div class="wrap_form-search">
            <input type="text" name="tentour" placeholder=" "  class="input_search-don" id="input_search-don" value="<?php if(isset($_POST['tentour'])) {echo $_POST['tentour'];} ?>">
            <label for="input_search-don" class="txt_search">Tên tour</label>
            <label for="btn_search-don" class="wrap_icon-search">
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </label>
        </div>
        <input type="submit" value="" name="btn_search-don" hidden id="btn_search-don">
    </form>
</div>
<form action="<?php echo _WEB_ROOT;?>/admin/export_excel_don" method ="POST" enctype="multipart/form-data">
    <input type="submit" name="btn_export_excel" value="Xuất excel" class="btn_export-don">
</form>

<div class="container" style="display: flex;align-item: center"> 
    <table class="table table-hover table-bordered" style=";
                                        margin-top: 20px;
                                        text-align: center;
                                        font-weight: 700;
                                        font-size: 16px;
                                        border-color: #ccc">
    <tr>
        <th style="width: 3%;background-color: #eee;line-height: 30px;">STT</th>
        <th style="width: 20%;background-color: #eee;line-height: 30px;">Tên tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thời gian</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Tên người đặt</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Số điện thoại</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">email</th>
        <th style="width: 12%;background-color: #eee;line-height: 30px;">Số người lớn</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Số trẻ em</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thành tiền</th>
        <th style="width: 4%;background-color: #eee;line-height: 30px;">Id user</th>
        <th style="width: 15%;background-color: #eee;line-height: 30px;">Thao tác</th>
    </tr>
    <?php 
        if(isset($data['qldon'])) {
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['qldon'])){
                ?>
                    <tr>
                        <td style="background-color: #eee;"><?php echo $stt ?></td>
                        <td><?php echo $row['tentour'] ?></td>
                        <td><?php echo $row['songay'] ?>(ngày)</td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['dienthoai'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['so_nguoi_lon'] ?>người</td>
                        <td><?php echo $row['so_tre_em'] ?>người</td>
                        <td><?php echo $row['gia_tien'] ?>đ</td>
                        <td><?php echo $row['id_user']?></td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/del_don/<?php echo $row['id']; ?>" onclick = "if (!confirm('Bạn chắc chắn muốn xóa?')) { return false; }">Xóa</a></td>
                    </tr>
                <?php
                $stt++;
            }
        }
    ?>

    <?php
        if(isset($data['don_tour'])){
            $stt = 1;
            while($row = mysqli_fetch_assoc($data['don_tour'])) {
                ?>
                    <tr>
                    <td style="background-color: #eee;"><?php echo $stt ?></td>
                        <td><?php echo $row['tentour'] ?></td>
                        <td><?php echo $row['songay'] ?>(ngày)</td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['dienthoai'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['so_nguoi_lon'] ?>người</td>
                        <td><?php echo $row['so_tre_em'] ?>người</td>
                        <td><?php echo $row['gia_tien'] ?>đ</td>
                        <td><?php echo $row['id_user']?></td>
                        <td><a href="<?php echo _WEB_ROOT;?>/admin/del_don/<?php echo $row['id']; ?>" onclick = "if (!confirm('Bạn chắc chắn muốn xóa?')) { return false; }">Xóa</a></td>
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