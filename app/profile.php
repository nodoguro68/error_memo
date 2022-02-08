<?php
$page_title = 'プロフィール';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <form method="post" class="form" enctype="multipart/form-data">
            <div class="form__header">
                <h2 class="form__title">プロフィール</h2>
                <span class="err-msg"></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <div class="preview">
                        <input type="file" name="profile_img" class="preview__file">
                        <input type="hidden" name="MAX_FILE_SIZE" value="3145728">
                        <img src="../public/images/no-image.jpeg" alt="プロフィール画像" class="preview__img">
                    </div>
                </div>
                <div class="form__item">
                    <label for="user_name" class="form__label">ユーザーネーム</label>
                    <input type="text" name="user_name" class="form__input" id="user_name" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="description" class="form__label">自己紹介</label>
                    <textarea name="description" class="form__textarea" id="description"></textarea>
                    <div class="form__count-area"><span class="count">0</span>/200</div>
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="email" class="form__label">メールアドレス</label>
                    <input type="email" name="email" class="form__input" id="email" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="github" class="form__label">Github</label>
                    <input type="text" name="github" class="form__input" id="github" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="facebook" class="form__label">Facebook</label>
                    <input type="text" name="facebook" class="form__input" id="facebook" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="twitter" class="form__label">Twitter</label>
                    <input type="text" name="twitter" class="form__input" id="twitter" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="qiita" class="form__label">Qiita</label>
                    <input type="text" name="qiita" class="form__input" id="qiita" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="blog" class="form__label">Blog</label>
                    <input type="text" name="blog" class="form__input" id="blog" value="">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-wrap">
                    <input type="submit" value="保存" class="btn">
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>