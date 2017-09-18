<?php
$host='localhost';
$user='dew3737';
$pw='sls0318';
$dbName='dew3737';
$mysqli=new mysqli($host, $user, $pw, $dbName);

$id=$_POST['id'];
$password=$_POST['pwd'];

$sql="insert into member1(id,pwd)";
$sql=$sql."values('$id','$password')";
if($mysqli->query($sql)){
    echo 'success inserting<br/>';
    echo $id.'님 가입되었습니다.';
}else{
    echo 'fail to insert sql';
}
// mysql_close($mysqli);
?>
</br></br>
<a href="index.php">로그인하러가기</a>