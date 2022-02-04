<?php

$editFlag = false;
$page_title = ($editFlag) ? 'メモ編集' : 'メモ新規登録';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <a href="mypage.php" class="">＜ フォルダ</a>

        <form method="post" class="memo-form">
            <div class="form__header">
                <h2 class="form__title"><?= ($editFlag) ? 'メモ編集' : 'メモ新規登録'; ?></h2>
                <div class="btn-wrap">
                    <button type="submit" name="delete_memo" value="" class="">削除</button>
                </div>
                <span class="err-msg"></span>
            </div>

            <div class="form__body">
                <!-- エラータイトル -->
                <div class="form__item">
                    <label for="title" class="form__label">エラータイトル</label>
                    <input type="text" name="title" class="form__input" id="title" value="" autofocus>
                    <span class="err-msg"></span>
                </div>
                <!-- 公開するかどうか -->
                <div class="form__item">
                    <label for="private" class="form__label">非公開</label><input type="radio" name="is_published" value="0" class="form__radio-btn" id="private">
                    <label for="public" class="form__label">公開</label><input type="radio" name="is_published" value="1" class="form__radio-btn" id="public">
                    <span class="err-msg"></span>
                </div>
                <!-- 解決済みかどうか -->
                <div class="form__item">
                    <label for="unsolved" class="form__label">未解決</label><input type="radio" name="is_solved" value="0" class="form__radio-btn" id="unsolved">
                    <label for="solved" class="form__label">解決済み</label><input type="radio" name="is_solved" value="1" class="form__radio-btn" id="solved">
                    <span class="err-msg"></span>
                </div>
                <!-- カテゴリー -->
                <div class="form__item">
                    <label for="category" class="form__label">カテゴリー</label>
                    <select name="category_id" id="category" class="form__selectbox">
                        <option value="0"></option>
                    </select>
                    <span class="err-msg"></span>
                </div>
                <!-- やりたいこと -->
                <div class="form__item">
                    <label for="ideal" class="form__label">やりたいこと</label>
                    <textarea name="ideal" id="ideal" class="form__textarea"></textarea>
                    <span class="err-msg"></span>
                </div>
                <!-- 試したこと -->
                <div class="form__item">
                    <label for="attempt" class="form__label">試したこと</label>
                    <textarea name="attempt" id="attempt" class="form__textarea"></textarea>
                    <span class="err-msg"></span>
                </div>
                <!-- 解決方法 -->
                <div class="form__item">
                    <label for="solution" class="form__label">解決方法</label>
                    <textarea name="solution" id="solution" class="form__textarea"></textarea>
                    <span class="err-msg"></span>
                </div>
                <!-- 原因 -->
                <div class="form__item">
                    <label for="cause" class="form__label">原因</label>
                    <textarea name="cause" id="cause" class="form__textarea"></textarea>
                    <span class="err-msg"></span>
                </div>
                <!-- 参考 -->
                <div class="form__item">
                    <label for="reference" class="form__label">参考</label>
                    <input type="text" name="reference" class="form__input" id="reference" value="">
                    <span class="err-msg"></span>
                </div>
                <!-- その他 -->
                <div class="form__item">
                    <label for="etc" class="form__label">その他</label>
                    <textarea name="etc" id="etc" class="form__textarea"></textarea>
                    <span class="err-msg"></span>
                </div>
                <div class="form__footer">
                    <div class="btn-container">
                        <input type="submit" name="<?= ($editFlag) ? 'edit_memo' : 'create_memo'; ?>" value="<?= ($editFlag) ? '編集' : '保存'; ?>" class="submit-btn">
                    </div>
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>