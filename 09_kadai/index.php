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
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ユーザー管理</legend>
                <label><span>名前：</span>
                    <input type="text" name="name">
                </label>
                <br>
                <label><span>ログインID：</span>
                    <input type="text" name="lid">
                </label>
                <br>
                <label><span>ログインパスワード：</span>
                    <input type="text" name="lpw">
                </label>
                <br>
                <label><span>管理者フラグ：</span>
                    <select name="kanri_flg">
                        <option value="0">一般者</option>
                        <option value="1">管理者 </option>
                    </select>
                    <br>
                </label>
                <label><span>使用フラグ：</span>
                    <select name="life_flg">
                        <option value="0">使用中</option>
                        <option value="1">使用しなくなった </option>
                    </select>
                    <br>
                </label>
                <br>
                <input type="submit" value="送信"></fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>