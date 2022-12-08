<style>
    .wrap_price_tour {
        position: absolute;
        right: 50px;
        bottom: 50px;
        justify-content: ;
           
    }

    .wrap_price_tour p{
        font-size: 14px;
        font-weight: 600;
        color: #46ae3c;

    }

    .text_gianguoilon{
        color: #46ae3c;
    }

    .text_giatreem{
        color: #46ae3c;
    }

    

</style>

<div>
    <div>
        <form action="<?php echo _WEB_ROOT;?>/danhsachtour/tim_kiem_tour" method="POST">
            <div class="wrap_tb-dstour">
                <table class="tb-dstour">
                    <tr>
                        <th>Tìm kiếm</th>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Nhập vị trí" name="txt_search_tour" class="input-search input_diemden" required value="<?php if(isset($data['tentour'])){echo $data['tentour'];} ?>"></td>
                        <td >
                            <div class="btn-search-dstour">
                                <label for="search_dstour" style="cursor: pointer;padding: 13px">
                                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                </label>
                            </div>
                                <input type="submit" name="btn_tim_kiem_tour" id="search_dstour" value="" hidden>
                        </td>
                    </tr> 
                </table>
            </div>
        </form>
    </div>

    <div class="dstour" >
        <div class="menu_tour">
            <div class="menu_tour_sub">
                <p>Địa điểm trong nước</p>
                <div class="dd_tour">   
                    <ul class="dd_tour-list">
                        <?php
                            if(isset($data['dd_trongnuoc'])){
                                while($row = mysqli_fetch_assoc($data['dd_trongnuoc'])) { 
                                    ?>
                                        <a href="<?php echo _WEB_ROOT;?>/danhsachtour/get_tour/<?php echo $row['id'] ?>" class="dd_tour-link"><li><?php echo $row['tendiadiem'] ?></li>
                                        </a>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu_tour_sub">
                <p>Địa điểm nước ngoài</p>
                <div class="dd_tour">
                    <ul class="dd_tour-list">
                    <?php
                        if(isset($data['dd_nuocngoai'])){
                            while($row = mysqli_fetch_assoc($data['dd_nuocngoai'])){
                                ?>
                                    <a href="<?php echo _WEB_ROOT;?>/danhsachtour/get_tour/<?php echo $row['id'] ?>" class="dd_tour-link"><li><?php echo $row['tendiadiem'] ?></li></a>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tour_list">
            <?php if(isset($data['tentour'])){
                ?>
                <p class="txt_search">Kết quả tìm kiếm của "<b><?php echo $data['tentour'];?></b>"</p>
            <?php
            }else {
                ?>
                <?php echo ""; ?>
                <?php
            }
                ?>
            <?php
                if(isset($data['tour_first'])){
                    while($row = mysqli_fetch_assoc($data['tour_first'])){
                            ?>
                    <a href="<?php echo _WEB_ROOT;?>/dattour/get_tour/<?php echo $row['id'] ?>" class="tour_item-link">
                        <div class="tour_item">
                            <div class= "wrap_img_tour_item">
                                <img src="<?php echo _WEB_ROOT;?>/public/images/img_web/<?php echo $row['anhtour'];?>" alt="" class="img_tour_item">
                            </div>
                            <p class="tour_name"><?php echo $row['tentour'] ?></p>
                            <p class="tour_date">Thời gian: <?php echo $row['songay'] ?> ngày</p>
                            <div class="wrap_price_tour">
                                <p><span style="color:#333;">Giá người lớn:  </span><span class="text_gianguoilon"><?php echo $row['gia_nguoi_lon'];?></span>đ</p>
                                <p><span style="color:#333;">Giá trẻ em:  </span><span class="text_giatreem"><?php echo $row['gia_tre_em'];?></span>đ</p>
                            </div>
                        </div>
                    </a> 
                    <?php
                    }
                } else{
            ?>  
            <?php
                if(isset($data['dstour'])) {
                    while($row = mysqli_fetch_assoc($data['dstour'])){
                            ?>
                        <a href="<?php echo _WEB_ROOT;?>/dattour/get_tour/<?php echo $row['id'] ?>" class="tour_item-link">
                            <div class="tour_item">
                                <div class= "wrap_img_tour_item">
                                    <img src="<?php echo _WEB_ROOT;?>/public/images/img_web/<?php echo $row['anhtour'];?>" alt="" class="img_tour_item">
                                </div>
                                <p class="tour_name"><?php echo $row['tentour'];?></p>
                                <p class="tour_date">Thời gian: <?php echo $row['songay'];?> ngày</p>
                                <div class="wrap_price_tour">
                                    <p><span style="color:#333;">Giá người lớn:  </span><span class="text_gianguoilon"><?php echo $row['gia_nguoi_lon'];?></span>đ</p>
                                    <p><span style="color:#333;">Giá trẻ em:  </span><span class="text_giatreem"><?php echo $row['gia_tre_em'];?></span>đ</p>
                                </div>
                            </div>
                        </a> 
                        <?php
                    }
                }else {
                    ?>
                    <?php echo "<br><br><br><h2>Không có kết quả</h2>"; ?>
                    <?php
                }
            }
            ?>
        
        </div>
    </div>
</div>