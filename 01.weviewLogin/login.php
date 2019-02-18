<!DOCTYPE html>
<html>
<head>
	<title>WE Login</title>
	<style>
		#login{
			font-size:200%;
			font-style: italic;
			color:darkorange;
			border-bottom: 3px solid gray;
			}
	</style>
	<script>
		function Welcome() {
  		//alert("Welcome");
			var value = document.getElementById('id').value;
			if(value<1 || ){
				alert('Put Id');
			}
			value = document.getElementById('pass').value;
			if(value<1){
				alert('Put Password');
			}
			else{
				alert("Welcome");
			}
		}
</script>
</head>
<body>
	<h3 align = 'center' id="login">'WE' 로그인 <h3>
	<form align = 'center' name="fo" method="get">
		<label style="padding-left:12px">
			User ID : <input id="id" type="text" size="15" value=""></label>
    <br>
		<label for="pass">
			Password: </label>
		<input id="pass" type="password" size="15" value="">
		<br>
		<button type="button" name="button" onclick="Welcome()">Login</button>
	</form>

  <form align = 'center' action="signUp.php" method="post">
    <h3>Not our member?</h3>
    <input type="submit" name="Sing Up" value="Sign Up">
  </form>
</html>
