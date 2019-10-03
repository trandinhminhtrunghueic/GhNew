<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
</head>
<body>
<form method='post'>
	@csrf
		<fieldset>
		<legend>Đăng nhập</legend>
		<div class="login">
			<table>
				<tr>
				<td>Tên đăng nhập: </td><td><input type="text" name="txt_taikhoan" size="35"></td>
				</tr>
				<tr>
					<td>Mật khẩu : </td><td> <input type="text" name="txt_matkhau" size="35"></td>
				</tr >
				<tr >
					<td colspan="1"><button type="submit" name="bntLogin">Đăng Nhập</button></td>
<!-- 					<td><a href="register.php" title="Đăng kí tài khoản">Đăng kí</a></td> -->
				</tr>
					
			</table>
		</div>
	</fieldset>
</form>
</body>
</html>