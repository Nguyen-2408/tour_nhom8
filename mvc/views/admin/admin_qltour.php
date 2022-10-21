
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
        <th style="width: 40%;background-color: #eee;line-height: 30px;">Ảnh tour</th>
        <th style="width: 10%;background-color: #eee;line-height: 30px;">Thời gian</th>
        <th style="width: 12%;background-color: #eee;line-height: 30px;">Id địa điểm</th>
        <th style="width: 15%;background-color: #eee;line-height: 30px;" colspan ="2">Thao tác</th>
    </tr>
    <?php 
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
                        <td><?php echo $row['iddiadiem']?></td>
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