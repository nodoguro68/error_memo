<?php 
$page_title = 'パスワード再発行';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="link-wrap"><a href="login.php" class="link">＞ 戻る</a></div>

        <form method="post" class="form">
            <div class="form__header">
                <h2 class="form__title">パスワード再発行</h2>
                <p class="form__description">入力されたメールアドレス宛にパスワード再発行用のURLと認証キーが送信されます</p>
                <span class="err-msg"></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="email" class="form__label">メールアドレス</label>
                    <input type="text" name="email" class="form__input" id="email" value="">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-wrap">
                    <input type="submit" value="送信" class="btn">
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>