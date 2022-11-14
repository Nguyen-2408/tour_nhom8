<p style="padding-top:100px;font-size: 24px;font-weight: 700;text-align:center">Danh sách đơn đặt tour</p>
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
        <th style="width: 12%;background-color: #eee;line-height: 30px;">Số trẻ em</th>
        <th style="width: 12%;background-color: #eee;line-height: 30px;">Id user</th>
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
                        <td><?php echo $row['songay'] ?>(Ngày)</td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['dienthoai'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['so_nguoi_lon'] ?>người</td>
                        <td><?php echo $row['so_tre_em'] ?>người</td>
                        <td><?php echo $row['id_user']?></td>
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