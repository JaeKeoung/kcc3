<?php
require_once 'fileUploadConfig.php';
$title = $_POST['title'];
$content = $_POST['memo'];
$date = date("Y.n.j");
$file = $_FILES['upload']['name'];//자료구조 이차원 배열이다. 만약 파일들을 다중첨부를 할 때, 이차원 배열을 이용할 수 있다.
print_r($file);
echo ('<br/>');
//print_r([$_SERVER]);//를 띄우면 [DOCUMENT_ROOT]를 찾아 복사해둔다. 안그러면 경로를 c:\xampp~~해야하는데 경로가 바뀔 때마다 수정하기 번거롭기 때문.
$file_dir=$_SERVER['DOCUMENT_ROOT']."\\fup\\";//\\~~~\\는 escape(%d같은거)이다. ""는 인식이 안되서 \\를 사용하는 것.
print $file_dir;

print microtime();//md5는 암호화고, microtime은 파일명이 겹칠경우 업로드가 안될 수도 있어서 뭔가 추가를 해서 파일명이 겹치지 않게 하기위해 microtime()을 추가시킨 것이다.

//경로 완성
$file_path = $file_dir.md5(microtime()).$file;//$_FILES['upload']['name'];로 해도 되고.
print $file_path;

//이미지파일 경로
$img_dir = "upload/";
$img_path = $img_dir.$file;

//파일 이동, 파일 사이즈 제한
if($_FILES['upload']['size']<10000000){//1byte임.
    move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
    $sql="insert into board (Title, Content, Date, upload) values ('$title', '$content', '$date', :upload)";//table(bar)에 업로드한 이미지 경로를 넣는 코드
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(":upload", $img_path);
    $stmh->execute();
    echo "<script>location.href='./sub2.php'</script>";
}else{
    //용량이 초과되면 fileUpload페이지로 넘어가지 않고 머무르게한다.
    echo "<script>alert('용량초과')</script>";
    echo "<script>location.href='./sub2View.php'</script>";//history를 하면 파일명이 올라가있는 상태 그대로 돌아가게된다.
}

?>