
<?php
session_start();

if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

    <header>
        <img src="4eachblog_logo.jpg">
        <div class="register"><a href ="register.php">会員登録</a></div>
    </header>
    <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
            <h2>ログイン</h2>
                <div class="error">メールアドレスまたはパスワードが間違っています。</div>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="67" value="" name="mail">
                </div>
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="67" value="" name="password">
                </div>

                <div class="login_check">
                    <label>
                        <input type="checkbox" class="checkbox" size="40" name="login_keep" value="login_keep"
                        <?php 
                            if (isset($_COOKIE['login_keep'])) {
                                echo "checked='checked'";
                            }
                        ?>>ログイン状態を保持する
                    </label>
                </div>
                
                <div class="loginbutton">
                  <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </main>
    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>
</body>
</html>
