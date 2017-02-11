<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー管理画面</title>
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
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <!--<legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">-->
                <div class="userSelect">
                    <label>ユーザーを選択
                        <select name="select">
                            <option value="value1">user1</option>
                            <option value="value1">user2</option>
                        </select>
                    </label>
                    <input type="submit" value="選択"> </div>
                <div class="userAdd">
                    <label>ユーザーの新規追加
                        <input type="text" name="newUser">
                    </label>
                    <input type="submit" value="登録"> </div>
                <div class="del">
                    <label>削除するユーザーを選択
                        <select name="select">
                            <option value="value1">user1</option>
                            <option value="value1">user2</option>
                        </select>
                    </label>
                    <input type="submit" value="削除"> </div>
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>