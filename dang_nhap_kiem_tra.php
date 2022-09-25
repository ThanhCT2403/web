<?php 
    // 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn lấy, thêm, sửa, xóa DỮ LIỆU
    require_once "../db.php";     

    // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
    $email = $_POST["txtEmail"];
    $mat_khau = $_POST["txtMatKhau"];

    $sql = "
            SELECT * 
            FROM tbl_admin
            WHERE email='".$email."' AND mat_khau = '".$mat_khau."'
    ";

    // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
    $noi_dung_admin = mysqli_query($ket_noi, $sql);

    // 4. Lấy số lượng người dùng thỏa mãn
    $so_luong_admin = mysqli_num_rows($noi_dung_admin);

    // 5. Khẳng định, người dùng có quyền truy cập hay không
    if ($so_luong_admin==1) {
        session_start();
        $_SESSION['da_dang_nhap']=1;

        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đăng nhập thành công');
                window.location.href='index.php';
            </script>
        ";
    } else {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='login.php';
            </script>
        ";
    }
    
;?>