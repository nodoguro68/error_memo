<?php

$editFlag = false;
$page_title = ($editFlag) ? 'メモ編集' : 'メモ新規登録';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="link-wrap">
            <a href="" class="link">＞ 戻る</a>
        </div>

        <form method="post" class="memo-form">
            <div class="memo-form__inner">
                <div class="memo-form__header">
                    <h2 class="memo-form__title"><?= ($editFlag) ? 'メモ編集' : 'メモ新規登録'; ?></h2>
                    <div class="err-msg__area">
                        <span class="err-msg"></span>
                    </div>

                    <div class="memo-form__item--2column">
                        <!-- カテゴリー -->
                        <div class="memo-form__selectbox-wrap">
                            <select name="category_id" id="category" class="memo-form__selectbox">
                                <option value="0">未分類</option>
                                <option value="0">PHP</option>
                                <option value="0">PHP</option>
                            </select>
                            <span class="err-msg"></span>
                        </div>
                        <div class="memo-form__radio-group">
                            <!-- 公開するかどうか -->
                            <div class="memo-form__radio">
                                <label for="private" class="memo-form__label">非公開</label><input type="radio" name="is_published" value="0" class="memo-form__radio-btn" id="private">
                                <label for="public" class="memo-form__label">公開</label><input type="radio" name="is_published" value="1" class="memo-form__radio-btn" id="public">
                            </div>
                            <!-- 解決済みかどうか -->
                            <div class="memo-form__radio">
                                <label for="unsolved" class="memo-form__label">未解決</label><input type="radio" name="is_solved" value="0" class="memo-form__radio-btn" id="unsolved">
                                <label for="solved" class="memo-form__label">解決済み</label><input type="radio" name="is_solved" value="1" class="memo-form__radio-btn" id="solved">
                            </div>
                        </div>
                    </div>
                    <!-- エラータイトル -->
                    <div class="memo-form__item">
                        <label for="title" class="memo-form__label">エラータイトル</label>
                        <span class="memo-form__require-label">必須</span>
                        <input type="text" name="title" class="memo-form__input" id="title" value="">
                        <span class="err-msg"></span>
                    </div>
                </div>

                <div class="memo-form__body">
                    <!-- エラー内容 -->
                    <div class="memo-form__item">
                        <label for="content" class="memo-form__label">エラー内容</label>
                        <textarea name="content" id="content" class="memo-form__textarea"></textarea>
                        <span class="err-msg"></span>
                    </div>
                    <!-- やりたいこと -->
                    <div class="memo-form__item">
                        <label for="ideal" class="memo-form__label">やりたいこと</label>
                        <textarea name="ideal" id="ideal" class="memo-form__textarea"></textarea>
                        <span class="err-msg"></span>
                    </div>
                    <!-- 試したこと -->
                    <div class="memo-form__item">
                        <label for="attempt" class="memo-form__label">試したこと</label>
                        <ul class="form-list js-textarea-list">
                            <li class="form-list__item js-form-item">
                                <textarea name="attempt[]" class="memo-form__textarea memo-form__textarea--dynamic"></textarea>
                                <button type="button" class="form-list__delete-btn js-delete-form-btn"><i class="far fa-times-circle"></i></button>
                            </li>
                        </ul>
                        <span class="err-msg"></span>
                        <div class="btn-wrap">
                            <button type="button" class="add-input-btn js-add-textarea-btn">＋</button>
                        </div>
                    </div>
                    <!-- 解決方法 -->
                    <div class="memo-form__item">
                        <label for="solution" class="memo-form__label">解決方法</label>
                        <textarea name="solution" id="solution" class="memo-form__textarea"></textarea>
                        <span class="err-msg"></span>
                    </div>
                    <!-- 原因 -->
                    <div class="memo-form__item">
                        <label for="cause" class="memo-form__label">原因</label>
                        <textarea name="cause" id="cause" class="memo-form__textarea"></textarea>
                        <span class="err-msg"></span>
                    </div>
                    <!-- 参考 -->
                    <div class="memo-form__item">
                        <label for="reference" class="memo-form__label">参考</label>
                        <ul class="form-list js-input-list">
                            <li class="form-list__item js-form-item">
                                <input type="text" name="reference[]" class="memo-form__input js-form-input" value="">
                                <button type="button" class="form-list__delete-btn js-delete-form-btn"><i class="far fa-times-circle"></i></button>
                            </li>
                        </ul>
                        <span class="err-msg"></span>
                        <div class="btn-wrap">
                            <button type="button" class="add-input-btn js-add-input-btn">＋</button>
                        </div>
                    </div>
                    <!-- その他 -->
                    <div class="memo-form__item">
                        <label for="etc" class="memo-form__label">その他</label>
                        <textarea name="etc" id="etc" class="memo-form__textarea"></textarea>
                        <span class="err-msg"></span>
                    </div>
                </div>

                <div class="memo-form__footer">
                    <div class="btn-wrap">
                        <input type="submit" name="<?= ($editFlag) ? 'edit_memo' : 'create_memo'; ?>" value="<?= ($editFlag) ? '編集' : '保存'; ?>" class="submit-btn">
                    </div>
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>
<script src="../resource/js/input.js"></script>

</body>

</html>