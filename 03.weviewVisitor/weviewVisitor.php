
<!DOCTYPE html>
<html lang="en">
<head>
<title>Weview</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #c08989;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  background-color: #ffe1e1;
  padding: 10px;
  height: 500px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
  background-color: #ffe1e1;
  padding: 10px;
  height: 100px;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="../main.html">WEVIEW</a>
	HELLO
  <a href="../01.weviewLogin/weviewLogin.html">로그인</a>
  <!-- 효진이 만드세유 -->
  <a href="../02.weviewReview/weviewReview.html">리뷰</a>
  <!-- 수연 만드세유 -->
  <a href="weviewVisitor.php">방명록</a>
  <!-- 승기 만드세유-->
</div>

<div class="content">
  <h2>방명록</h2>
  <p></p>
  <form action="createReview.php" method="post">
    <p> ID : <input type="text" name = "id"></p>
    <p> 제목 : <input type="text" name = "title"></p>
    <p> 방명록 : <textarea name = "description"></textarea></p>
    <input type="submit">

  </form>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>
