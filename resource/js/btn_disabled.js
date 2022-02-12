var form = {
    input: {
        category: document.getElementById('categoryInput') || '',
        folder: document.getElementById('folderInput') || '',
    },
    btn: {
        category: document.getElementById('categorySubmitBtn') || '',
        folder: document.getElementById('folderSubmitBtn') || '',
    },
    disabledBtn(input, btn) {

    input.addEventListener('keyup', function() {

            if (input.value) {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        });
        
    }
};

form.disabledBtn(form.input.category || form.input.folder, form.btn.category || form.btn.folder);
