<?php
session_start();
if(isset($_SESSION['da_dang_nhap']) && $_SESSION['da_dang_nhap']!=NULL){
	unset($_SESSION['da_dang_nhap']);
	echo"
			<script type='text/javascript'>
                window.alert('Bạn đã đăng xuất thành công');
                window.location.href='login.php';
            </script>
        ";
}
;?>