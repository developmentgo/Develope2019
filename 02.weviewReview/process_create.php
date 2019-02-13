<?php
$conn =  mysqli_connect(
'qhftkf1.cafe24.com',
'qhftkf1',
'tmdrl001!',
'qhftkf1');

$sql = "
INSERT INTO interest
  (id, interest)
  VALUES(
    '{$_POST['id']}',
    '{$_POST['interest']}'
    )
";

$result = mysqli_query($conn, $sql);
if($result === false){
echo '실패';
error_log(mysqli_error($conn));
} else{
  echo '성공 <a href="weviewReview.html">돌아가기</a>';
}


?>
