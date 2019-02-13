<?php

$conn = mysqli_connect(
  'localhost',
  'root',
  'gjsqudqks1/',
  'opentutorials'
);

$sql = "
  INSERT INTO board
  (id, created, title, description)
  VALUES(
    '{$_POST['id']}',
    NOW(),
    '{$_POST['title']}',
    '{$_POST['description']}'
    )
";
$resu = mysqli_query($conn, $sql);
if($resu === false){
  echo "저장하는 과정에서 문제가 생겼습니다!";
}else{
  echo "성공하였습니다";
  echo '<a href = "weviewVisitor.php">돌아가기</a>';
}
?>
