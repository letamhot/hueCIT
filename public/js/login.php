<?php  
$('#submit_signin').on('click', function() {
    // Gán các giá trị trong form đăng nhập vào các biến
    $user_signin = $('#user_signin').val();
    $pass_signin = $('#pass_signin').val();
 
    // Nếu một trong các biến này rỗng
    if ($user_signin == '' || $pass_signin == '')
    {
        // Hiển thị thông báo lỗi
        $('#formSignin .alert').removeClass('hidden');
        $('#formSignin .alert').html('Vui lòng điền đầy đủ thông tin bên trên.');
    }
    // Ngược lại
    else
    {
        // Thực thi gửi dữ liệu bằng Ajax
        $.ajax({
            url : 'signin.php', // Đường dẫn file nhận dữ liệu
            type : 'POST', // Phương thức gửi dữ liệu
            // Các dữ liệu
            data : {
                user_signin : $user_signin,
                pass_signin : $pass_signin
            // Thực thi khi gửi dữ liệu thành công
            }, success : function(data) {
                $('#formSignin .alert').html(data);
            }
        });
    }
});
 
// Include database, session, general info
require_once 'core/init.php';
 
// Nếu tồn tại $user
if ($user)
{
    header('Location: index.php'); // Di chuyển đến trang chủ
}
 
// Nhận dữ liệu và gán vào các biến đồng thời xử lý chuỗi
$user_signin = $db->real_escape_string(@$_POST['user_signin']);
$pass_signin = @md5($_POST['pass_signin']);
 
// Các biến chứa code JS về thông báo
$show_alert = "<script>$('#formSignin .alert').removeClass('hidden');</script>";
$hide_alert = "<script>$('#formSignin .alert').addClass('hidden');</script>";
$success_alert = "<script>$('#formSignin .alert').attr('class', 'alert alert-success');</script>";
 
// Lệnh SQL kiểm tra sự tồn tại của username
$sql_check_user_exist = "SELECT username FROM users WHERE username = '$user_signin'";
 
// Nếu tồn tại username
if ($db->num_rows($sql_check_user_exist))
{
    // Lệnh SQL kiểm tra password tương ứng với username trên
    $sql_check_login = "SELECT username FROM users WHERE username = '$user_signin' AND password = '$pass_signin'";
 
    // Nếu đúng
    if ($db->num_rows($sql_check_login))
    {
        // Gửi dữ liệu để lưu session
        $session->send($user_signin);
        // Giải phóng kết nối
        $db->close();
 
        // Hiển thị thông báo và tải lại trang
        echo $show_alert.$success_alert." Đăng nhập thành công.
            <script>
                location.reload();
            </script>
        ";
    }
    // Ngược lại nếu sai
    else
    {
        echo $show_alert.'Mật khẩu không chính xác, đảm bảo đã tắt caps lock.';
    }
}
// Ngược lại không tồn tại username
else
{
    echo $show_alert.'Tên đăng nhập không thuộc bất cứ tài khoản nào.';
}
 
?>
