<?php
mb_internal_encoding("utf8");

if (empty($_POST['from_mypage'])) {
    header("Location:login_error.php");
}

session_start();
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ編集</title>
        <link rel = "stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

<body>
    <header>
        <img src ="4eachblog_logo.jpg">
    </header>

    <main>
        <div class ="confirm">
            <div class="form_contents">
                <h2>会員情報</h2>
                <div class = "hello">
                    <?php echo "こんにちは！　".$_SESSION['name']."さん！"?>
                    <br>
                </div>
            
                <form action="mypage_update.php" method="post">
                    <div class="profile_pic">
                        <img src = "<?php echo $_SESSION['picture']; ?>">
                    </div>

                    <div class = "basic_info"> 
                        <p>氏名：<input type = "text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                        <p>メール：<input type = "text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                        <p>パスワード：<input type = "text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
                    </div>


                    <div class="comments">
                        <textarea rows="3" cols="70" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
            
                    <div class="hensyu">
                        <input type ="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
    © 2018 InterNous.inc.All rights reserved
    </footer>

</body>
</html>