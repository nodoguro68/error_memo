<?php

$page_title = 'ユーザー登録';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <form method="post" class="form">
            <div class="form__header">
                <h2 class="form__title">ユーザー登録</h2>
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
                <div class="form__item">
                    <label for="password_re" class="form__label">パスワード（確認）</label>
                    <input type="password" name="password_re" class="form__input" id="password_re" value="">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="登録" class="btn">
                </div>
                <div class="link-container">
                    <a href="login.php" class="form__link">ログインはこちら</a>
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>