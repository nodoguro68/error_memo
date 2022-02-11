(function() {
    
    var text = document.getElementById('description');
    var countNum = document.getElementById('count');
    var countArea = document.getElementById('countArea');

    text.addEventListener('keyup', function() {
        
        var textCount = text.value.length;

        if (textCount > 200) {
            text.classList.add('form__textarea--error');
            countArea.classList.add('form__err-msg');
        } else {
            text.classList.remove('form__textarea--error');
            countArea.classList.remove('form__err-msg');
        }

        countNum.textContent = textCount;

    });

})();