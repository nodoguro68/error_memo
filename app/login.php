<?php  
$page_title = 'ログイン';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <form method="post" class="form">
            <div class="form__header">
                <h2 class="form__title">ログイン</h2>
                <span class="err-msg"></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="email" class="form__label">メールアドレス</label>
                    <input type="text" name="email" class="form__input" id="email" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">パスワード<span class="form__note">半角英数字8文字以上</span></label>
                    <input type="password" name="password" class="form__input" id="password" value="">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <label>
                    <input type="checkbox" name="pass_save">自動でログイン
                </label>
                <div class="btn-wrap">
                    <input type="submit" value="ログイン" class="btn">
                </div>
                <div class="link-wrap">
                    <a href="pass_reissue_send.php" class="form__link">パスワードを忘れた場合はこちら</a>
                    <a href="signup.php" class="form__link">新規登録はこちら</a>
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>