(function() {

    // ボタン
    var addInputBtn = document.getElementsByClassName('js-add-input-btn');
    var addTextareaBtn = document.getElementsByClassName('js-add-textarea-btn');

    var deleteFormBtn = document.getElementsByClassName('js-delete-form-btn');
    var deleteFormBtn = document.getElementsByClassName('js-delete-form-btn');

    var inputList = document.querySelector('.js-input-list');
    var textareaList = document.querySelector('.js-textarea-list');

    var formItem = document.querySelectorAll('.js-form-item');
    
    var createButton = function() {
        var button = document.createElement('button');
        button.setAttribute('type', 'button');
        button.classList.add('form-list__delete-btn', 'js-delete-input-btn');
        button.addEventListener('click', function() {
            this.parentNode.remove();
        });
        
        return button;
    }

    var createLi = function() {
        var li = document.createElement('li');
        li.classList.add('form-list__item');
        return li;
    }

    var createIcon = function() {
        var icon = document.createElement('i');
        icon.classList.add('far', 'fa-times-circle');
        return icon;
    }

    // フォーム追加
    for(var i = 0; i < addInputBtn.length; i++) {
        
        addInputBtn[i].addEventListener('click', function() {

            if(inputList.lastElementChild.firstElementChild.value != 0) {
                var li = createLi();
                var button = createButton();
                var icon = createIcon();
                
                var input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('name', 'references[]');
                input.setAttribute('value', '');
                input.classList.add('memo-form__input');

                button.appendChild(icon);
        
                li.appendChild(input);
                li.appendChild(button);
                li.addEventListener('mouseover', function() {
                    this.lastElementChild.classList.add('form-list__delete-btn--active');
                });
                li.addEventListener('mouseout', function() {
                    this.lastElementChild.classList.remove('form-list__delete-btn--active');
                });
                inputList.appendChild(li);
            }

        });
    }

    for(var i = 0; i < addTextareaBtn.length; i++) {
    
        addTextareaBtn[i].addEventListener('click', function() {

            if(textareaList.lastElementChild.firstElementChild.value != 0) {

                var li = createLi();
                var button = createButton();
                var icon = createIcon();

                var textarea = document.createElement('textarea');
                textarea.setAttribute('name', 'attempt[]');
                textarea.classList.add('memo-form__textarea', 'memo-form__textarea--dynamic');
        
                button.appendChild(icon);
        
                li.appendChild(textarea);
                li.appendChild(button);
                
                li.addEventListener('mouseover', function() {
                    this.lastElementChild.classList.add('form-list__delete-btn--active');
                });
                li.addEventListener('mouseout', function() {
                    this.lastElementChild.classList.remove('form-list__delete-btn--active');
                });
                textareaList.appendChild(li);
            }
        });
    }
})();