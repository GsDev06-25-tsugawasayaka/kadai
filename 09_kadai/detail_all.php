<?php

$id = $_GET["id"];

//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT); //STR or INT
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  $res = $stmt->fetch(); //1レコード取得
}
?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>POSTデータ登録</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->
        <!-- Main[Start] -->
        <form method="post" action="update.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>フリーアンケート</legend>
                    <label><span>名前：</span>
                        <input type="text" name="name" value="<?= $res['name']?>">
                    </label>
                    <br>
                    <label><span>ログインID：</span>
                        <input type="text" name="lid" value="<?= $res["lid"]?>">
                    </label>
                    <br>
                    <label><span>ログインパスワード：</span>
                        <input type="text" name="lpw" value="<?= $res["lpw"]?>">
                    </label>
                    <label><span>管理者フラグ：</span>
<!--
                    <select name="kanri_flg">
                        <option <?php if($res["kanri_flg"] == 0){echo "selected";}?> value="0">一般者</option>
                        <option <?php if($res["kanri_flg"] == 0){echo "selected";}?> value="1"> 管理者 </option>
                    </select>
-->
<p><?php if($res["kanri_flg"] == 0){echo "一般者";}else{echo "管理者";}?> </p>


                    </label>
                    <label><span>使用フラグ：</span>
                        <input type="text" name="life_flg" value="<?= $res["life_flg"]?>">
                    </label>
                    <!-- <input type="hidden" name="id" value="<?=$id?>"> -->

                    <select name="life_flg">
                        <option<?php if($res["life_flg"] == 0){echo "selected";}?>  value="0">使用中</option>
                        <option<?php if($res["life_flg"] == 0){echo "selected";}?> value="1">使用しなくなった </option>
                    </select>
                    <input type="submit" value="送信"> </fieldset>
            </div>
        </form>
        <!-- Main[End] -->
    </body>

    </html>