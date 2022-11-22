<?php
    class Admin extends controller {
        public $admin;
       
        function index(){
            $this->admin = $this->model('home_model');
            $qltk = $this->admin->qltkAll();

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltk',
                'qltk' => $qltk
            ]);
        }

        /* Xử lí user */

        /* Tìm kiếm user */
        function search_user() {
            if(isset($_POST['btn_search-user'])){
                $username = $_POST['username'];
                $this->admin = $this->model('home_model');
                $kq = $this->admin->search_user($username);
               
                if(mysqli_num_rows($kq) > 0){
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltk',
                        'kq' => $kq
                    ]);
                } else {
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltk',
                        'no-result' => ''
                    ]);
                }
            }else {
                header('location: '._WEB_ROOT.'/admin');
            }
        }
        /* hiển thị form sửa */
        function edit_user($id_user=''){
            $this->admin = $this->model('home_model');
            $user_info = $this->admin->qltk_user($id_user);
            $qltk = $this->admin->qltkAll();
            
            $this->view('admin_layout',[
                'admin_view' => 'admin_qltk',
                'qltk' => $qltk,
                'user_info' => $user_info,
                'edit_user' => ''
            ]);
        }
        /* update sau khi sửa */
        function update_user($id_user='') {
            $this->admin = $this->model('home_model');

            if(isset($_POST['btn_edit-user'])){               
                $username_ud = $_POST['username_ud'];
                $email_ud = $_POST['email_ud'];
                $sdt_ud = $_POST['sdt_ud'];
                $diachi_ud = $_POST['diachi_ud'];
               
                $user_ud = $this->admin->edit_user($id_user, $username_ud, $email_ud, $sdt_ud, $diachi_ud);
                header('location: '._WEB_ROOT.'/admin');
                        
            }
        }
        /* Xóa user */
        function del_user($id_user) {
            $this->admin = $this->model('home_model');

            $this->admin->del_user($id_user);
            
            header('location: '._WEB_ROOT.'/admin');
        }

        /* Xử lí tour */

        /* -Lấy ra tất cả thông tin tour */

        function qltour() {
            $this->admin = $this->model('tourmodel');
            $qltour = $this->admin->db_qltour();
           
            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour
            ]);
        }

        /* Hiển thị form thêm tour */
        function form_add_tour(){
            $this->admin = $this->model('tourmodel');
            $qltour = $this->admin->db_qltour();

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour,
                'form_add_tour'=> ''
            ]);
        }


        /* Thêm tour */
        function add_tour() {
            $this->admin = $this->model('tourmodel');
            if(isset($_POST['btn_add-tour'])) {
                $tourname = $_POST['tourname'];
                $songay = $_POST['songay'];
                $info_tour = $_POST['info_tour'];
                $gianguoilon = $_POST['gianguoilon'];
                $giatreem = $_POST['giatreem'];
                $anhtour = basename($_FILES['anhtour']['name']);

                $target_dir = './public/images/img_web/';
                $target_file = $target_dir . $anhtour;
                $target_tmpName = $_FILES["anhtour"]["tmp_name"];
                move_uploaded_file($target_tmpName, $target_file );
                
                $this->admin->add_tour($tourname, $anhtour, $songay, $info_tour, $gianguoilon, $giatreem);
                header('location: '._WEB_ROOT.'/admin/qltour');
            }else {
                header('location: '._WEB_ROOT.'/admin/qltour');
            }
        }

        /* Tìm kiếm tour */
        function search_tour() {
            if(isset($_POST['btn_search-tour'])){
                $tourname = $_POST['tourname'];
                $this->admin = $this->model('home_model');
                $kq = $this->admin->search_tour($tourname);
               
                if(mysqli_num_rows($kq) > 0){
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltour',
                        'kq' => $kq
                    ]);
                } else {
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qltour',
                        'no-result' => ''
                    ]);
                }
            }else {
                header('location: '._WEB_ROOT.'/admin/qltour');
            }
        }
        /* Hiện form sửa tour */
        function edit_tour($id_tour=''){
            $this->admin = $this->model('tourmodel');
            $qltour = $this->admin->db_qltour();
            $tour_info = $this->admin->tour_info($id_tour);

            $this->view('admin_layout',[
                'admin_view' => 'admin_qltour',
                'qltour' => $qltour,
                'edit-tour'=> '',
                'tour_info' =>$tour_info
            ]);
        }

        /* Update tour */

        function update_tour($id_tour='') {
            $this->admin = $this->model('tourmodel');

            if(isset($_POST['btn_edit-tour'])){               
                $tourname_ud = $_POST['tourname_ud'];
                $songay_ud = $_POST['songay_ud'];
                $info_tour_ud = $_POST['info_tour_ud'];
                $gianguoilon_ud = $_POST['gianguoilon_ud'];
                $giatreem_ud = $_POST['giatreem_ud'];
                if(empty($_FILES['anhtour_ud']['name'])){
                    $anhtour_ud = $_SESSION['img_tour'];

                }else {
                    $anhtour_ud = basename($_FILES['anhtour_ud']['name']);
                }

                $target_dir = './public/images/img_web/';
                $target_file = $target_dir . $anhtour_ud;
                $target_tmpName = $_FILES["anhtour_ud"]["tmp_name"];
                move_uploaded_file($target_tmpName, $target_file );
                
                
                $tour_ud = $this->admin->edit_tour($id_tour, $tourname_ud, $anhtour_ud, $songay_ud, $info_tour_ud, $gianguoilon_ud, $giatreem_ud);
                header('location: '._WEB_ROOT.'/admin/qltour');
                        
            }
        }
        /* Xóa tour */
        function del_tour($id_tour) {
            $this->admin = $this->model('tourmodel');
            
            $this->admin->del_tour($id_tour);
            
            header('location: '._WEB_ROOT.'/admin/qltour');
        }


        /* Xử lí đơn */
        /* hiển thị tất cả đơn */
        function qldon() {
            $this->admin = $this-> model('don_dat_tour');
            $qldon = $this->admin->get_all_don();
            $this->view('admin_layout', [
                'admin_view' => 'admin_qldon',
                'qldon' => $qldon
            ]);
        }

        /* tìm kiếm đơn */
        function search_don(){
            if(isset($_POST['btn_search-don'])) {
                $tentour = $_POST['tentour'];
                $this->admin = $this->model('don_dat_tour');
                $don_tour = $this->admin->search_don($tentour);

                if(mysqli_num_rows($don_tour) > 0){
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qldon',
                        'don_tour' => $don_tour
                    ]);
                }else{
                    $this->view('admin_layout', [
                        'admin_view' => 'admin_qldon',
                        'no-result' =>  ''
                    ]);
                }
            }
        }


        /* Xóa đơn */
        function del_don($id_don) {
            $this->admin = $this->model('don_dat_tour');
            
            $this->admin->del_don($id_don);
            
            header('location: '._WEB_ROOT.'/admin/qldon');
        }


        /* Xuất excel user */
        function export_excel_user(){
            if(isset($_POST['btn_export_excel'])) {
                $objExcel = new PHPExcel;
                $objExcel->setActiveSheetIndex(0);
                $sheet = $objExcel->getActiveSheet()->setTitle('user');

                $rowCount = 1;
                $sheet->setCellValue('A'.$rowCount, 'ID'); 
                $sheet->setCellValue('B'.$rowCount, 'Tên tài khoản');
                $sheet->setCellValue('C'.$rowCount, 'Email');
                $sheet->setCellValue('D'.$rowCount, 'Số điện thoại');
                $sheet->setCellValue('E'.$rowCount, 'avatar');
                $sheet->setCellValue('F'.$rowCount, 'Địa chỉ');
                $sheet->setCellValue('G'.$rowCount, 'Role');

                $sheet->getColumnDimension('B')->setAutoSize(true);
                $sheet->getColumnDimension('C')->setAutoSize(true);
                $sheet->getColumnDimension('D')->setAutoSize(true);
                $sheet->getColumnDimension('E')->setAutoSize(true);
                $sheet->getColumnDimension('F')->setAutoSize(true);
                $sheet->getColumnDimension('G')->setAutoSize(true);
                $sheet->getStyle('A1:G1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FFFFCC');

                $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $styleArray=array(
                    'borders'=>array(
                        'allborders'=>array(
                            'style'=>PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                    );
                $sheet->getStyle('A1:'.'G'.($rowCount))->applyFromArray($styleArray);

                $this->admin = $this->model('home_model');
                $result = $this->admin->export_user();

                while($row = mysqli_fetch_assoc($result)){
                    $rowCount++;
                    $sheet->setCellValue('A'.$rowCount, $row['id']);   
                    $sheet->setCellValue('B'.$rowCount, $row['username']);
                    $sheet->setCellValue('C'.$rowCount, $row['email']);
                    $sheet->setCellValue('D'.$rowCount, $row['dienthoai']);
                    $sheet->setCellValue('E'.$rowCount, $row['avatar']);
                    $sheet->setCellValue('F'.$rowCount, $row['diachi']);
                    $sheet->setCellValue('G'.$rowCount, $row['role']);
                }



                $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
                $filename = 'file_excel_user.xlsx';
                $objWriter->save($filename);

                header('Content-Disposition: attachment; filename="'.$fileName.'"');
                header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
                header('Content-Length: '.filesize($fileName));
                header('Content-Transfer-Encoding:binary');
                header('Cache-Control: must-revalidate');
                header('Pragma: no-cache');
                readfile($fileName);
            }
        }



        /* Xuất excel tour */
        function export_excel_tour(){
            if(isset($_POST['btn_export_excel'])) {
                $objExcel = new PHPExcel;
                $objExcel->setActiveSheetIndex(0);
                $sheet = $objExcel->getActiveSheet()->setTitle('dstour');

                $rowCount = 1;
                $sheet->setCellValue('A'.$rowCount, 'ID'); 
                $sheet->setCellValue('B'.$rowCount, 'Tên tour');
                $sheet->setCellValue('C'.$rowCount, 'tên file ảnh');
                $sheet->setCellValue('D'.$rowCount, 'Số ngày');
                $sheet->setCellValue('E'.$rowCount, 'Thông tin mô tả');
                $sheet->setCellValue('F'.$rowCount, 'Giá người lớn');
                $sheet->setCellValue('G'.$rowCount, 'Giá trẻ em');

                $sheet->getColumnDimension('B')->setAutoSize(true);
                $sheet->getColumnDimension('C')->setAutoSize(true);
                $sheet->getColumnDimension('D')->setAutoSize(true);
                $sheet->getColumnDimension('E')->setAutoSize(true);
                $sheet->getColumnDimension('F')->setAutoSize(true);
                $sheet->getColumnDimension('G')->setAutoSize(true);
                $sheet->getStyle('A1:G1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FFFFCC');
 
                $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $styleArray=array(
                    'borders'=>array(
                        'allborders'=>array(
                            'style'=>PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                    );
                $sheet->getStyle('A1:'.'G'.($rowCount))->applyFromArray($styleArray);

                $this->admin = $this->model('tourmodel');
                $result = $this->admin->db_qltour();

                while($row = mysqli_fetch_assoc($result)){
                    $rowCount++;
                    $sheet->setCellValue('A'.$rowCount, $row['id']);   
                    $sheet->setCellValue('B'.$rowCount, $row['tentour']);
                    $sheet->setCellValue('C'.$rowCount, $row['anhtour']);
                    $sheet->setCellValue('D'.$rowCount, $row['songay']);
                    $sheet->setCellValue('E'.$rowCount, $row['info_tour']);
                    $sheet->setCellValue('F'.$rowCount, $row['gia_nguoi_lon']);
                    $sheet->setCellValue('G'.$rowCount, $row['gia_tre_em']);
                }

                $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
                $filename = 'file_excel_tour.xlsx';
                $objWriter->save($filename);

                header('Content-Disposition: attachment; filename="'.$fileName.'"');
                header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
                header('Content-Length: '.filesize($fileName));
                header('Content-Transfer-Encoding:binary');
                header('Cache-Control: must-revalidate');
                header('Pragma: no-cache');
                readfile($fileName);
            }
        }

        /* Nhập excel tour */
        function import_excel_tour(){
            if(isset($_POST['btn_import_excel'])) {
                $file = $_FILES['fileExcel']['tmp_name'];
                $objReader = PHPExcel_IOFactory::createReaderForFile($file);
                $objExcel = $objReader->load($file);

                $sheet = $objExcel->getSheet(0);
                $sheetData = $sheet->toArray(null,true,true,true);
                for($i = 2; $i <= count($sheetData); $i++){
                    $tentour = $sheetData[$i]["B"];
                    $anhtour = $sheetData[$i]["C"];  
                    $songay = $sheetData[$i]["D"];  
                    $info_tour = $sheetData[$i]["E"];  
                    $gianguoilon = $sheetData[$i]["F"];  
                    $giatreem = $sheetData[$i]["G"];  
                    $this->admin = $this->model('tourmodel');
                    $kq = $this->admin->add_tour($tentour, $anhtour, $songay, $info_tour, $gianguoilon, $giatreem);  
                    if($kq) {
                        echo "<script type='text/javascript'>alert('Import file thành công!');</script>";
                        header('location: '._WEB_ROOT.'/admin/qltour');
                    }else {
                        echo "<script type='text/javascript'>alert('Import file thất bại!');</script>";
                        header('location: '._WEB_ROOT.'/admin/qltour');
                    }
                }
        }
    }

        /* Xuất excel đơn đặt tour */
        function export_excel_don(){
            if(isset($_POST['btn_export_excel'])) {
                $objExcel = new PHPExcel;
                $objExcel->setActiveSheetIndex(0);
                $sheet = $objExcel->getActiveSheet()->setTitle('bill_tour');

                $rowCount = 1;
                $sheet->setCellValue('A'.$rowCount, 'ID'); 
                $sheet->setCellValue('B'.$rowCount, 'Tên tour');
                $sheet->setCellValue('C'.$rowCount, 'Số ngày');
                $sheet->setCellValue('D'.$rowCount, 'Tên người liên hệ');
                $sheet->setCellValue('E'.$rowCount, 'Số điện thoại');
                $sheet->setCellValue('F'.$rowCount, 'Email');
                $sheet->setCellValue('G'.$rowCount, 'Số lượng người lớn');
                $sheet->setCellValue('H'.$rowCount, 'Số lượng trẻ em');
                $sheet->setCellValue('I'.$rowCount, 'Tổng tiền');

                $sheet->getColumnDimension('B')->setAutoSize(true);
                $sheet->getColumnDimension('C')->setAutoSize(true);
                $sheet->getColumnDimension('D')->setAutoSize(true);
                $sheet->getColumnDimension('E')->setAutoSize(true);
                $sheet->getColumnDimension('F')->setAutoSize(true);
                $sheet->getColumnDimension('G')->setAutoSize(true);
                $sheet->getColumnDimension('H')->setAutoSize(true);
                $sheet->getColumnDimension('I')->setAutoSize(true);
                $sheet->getStyle('A1:I1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('FFFFCC');
 
                $sheet->getStyle('A1:I1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $styleArray=array(
                    'borders'=>array(
                        'allborders'=>array(
                            'style'=>PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                    );
                $sheet->getStyle('A1:'.'I'.($rowCount))->applyFromArray($styleArray);

                $this->admin = $this->model('don_dat_tour');
                $result = $this->admin->get_all_don();

                while($row = mysqli_fetch_assoc($result)){
                    $rowCount++;
                    $sheet->setCellValue('A'.$rowCount, $row['id']);   
                    $sheet->setCellValue('B'.$rowCount, $row['tentour']);
                    $sheet->setCellValue('C'.$rowCount, $row['songay']);
                    $sheet->setCellValue('D'.$rowCount, $row['username']);
                    $sheet->setCellValue('E'.$rowCount, $row['dienthoai']);
                    $sheet->setCellValue('F'.$rowCount, $row['email']);
                    $sheet->setCellValue('G'.$rowCount, $row['so_nguoi_lon']);
                    $sheet->setCellValue('H'.$rowCount, $row['so_tre_em']);
                    $sheet->setCellValue('I'.$rowCount, $row['gia_tien']);
                }

                $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
                $filename = 'file_excel_don.xlsx';
                $objWriter->save($filename);

                header('Content-Disposition: attachment; filename="'.$fileName.'"');
                header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
                header('Content-Length: '.filesize($fileName));
                header('Content-Transfer-Encoding:binary');
                header('Cache-Control: must-revalidate');
                header('Pragma: no-cache');
                readfile($fileName);
            }
        }
    }
?>