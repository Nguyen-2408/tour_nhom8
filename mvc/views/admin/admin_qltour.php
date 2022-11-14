<p class="txt-">Quản lí tour</p>
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
<!-- Danh sách -->
<p style="padding-top:100px;font-size: 24px;font-weight: 700;text-align:center">Danh sách tour</p>
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
        <th style="width: 20%;background-color: #eee;line-height: 30px;">Ảnh tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thời gian</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thông tin tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Giá người lớn</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Giá trẻ em</th>
        <th style="width: 12%;background-color: #eee;line-height: 30px;">Id địa điểm</th>
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
                        <td><?php echo $row['iddiadiem']?></td>
                        <td><a href="">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
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
                        <td><?php echo $row['iddiadiem']?></td>
                        <td><a href="">Sửa</a></td>
                        <td><a href="">Xóa</a></td>
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