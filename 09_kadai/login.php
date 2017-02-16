<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">LOGIN</nav>
</header>
<div class="col1">
    <p><a href="select_all.php" class="btn btn-success">データリストはこちらから</a></p>
    
    
</div>
<div class="col2">
<p class="info">アカウントをお持ちの方はこちら</p>
<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid" />
PW:<input type="password" name="lpw" />
<input type="submit" value="LOGIN" />
</form>
<p class="mgn3per"><a href="rec_index.php" class="btn btn-warning">新規登録はこちら</a></p>
</div>


</body>
</html>