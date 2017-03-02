<?php
session_start();
include("functions.php");
ssidCheck();

//1.POSTでParamを取得
$id     = $_POST["id"];
$title   = $_POST["title"];
$article  = $_POST["article"];

if(isset($_FILES['filename']) && $_FILES['filename']['error']==0){
    
    //2. アップロード先とファイル名を作成
    $upload_file = "./upload/".$_FILES["filename"]["name"];
    
    // アップロードしたファイルを指定のパスへ移動
    //move_uploaded_file("一時保存場所","成功後に正しい場所に移動");
    if (move_uploaded_file($_FILES["filename"]['tmp_name'],$upload_file)){
        
        //パーミッションを変更（ファイルの読み込み権限を付けてあげる）
        chmod($upload_file,0644);//権限を変更する　change modify
        
        //アップロード成功したら文字と画像を表示
        echo 'アップロード成功';
        echo '<img src="'.$upload_file.'">';
        
    }else{
        echo "fileuploadOK...Failed";
    }
}else{
    echo "fileupload失敗";
}
//2.DB接続など
$pdo = db_con();

//3.UPDATE gs_cms_table SET ....; で更新(bindValue)
$stmt = $pdo->prepare("UPDATE gs_cms_table SET title=:title,article=:article, upfile=:upfile  WHERE id=:id");
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);
$stmt->bindValue(':article', $article, PDO::PARAM_STR);
$stmt->bindValue(':id',      $id,      PDO::PARAM_INT);
$stmt->bindValue(':upfile',  $upfile,      PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  header("Location: select.php");
  exit;
}

?>
