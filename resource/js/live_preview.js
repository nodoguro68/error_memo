(function() {
    
    var preview = document.getElementById('preview');
    var previewFile = document.getElementById('previewFile');

    preview.addEventListener('dragover', function(e) {
        e.stopPropagation();
        e.preventDefault();
        this.style('border', '3px #ccc dashed');
    });

    preview.addEventListener('dragleave', function(e) {
        e.stopPropagation();
        e.preventDefault();
        this.style('border', 'none');
    });

    previewFile.addEventListener('change', function() {
        var file = this.files[0];
        var img = this.nextElementSibling;
        var fileReader = new FileReader();

        fileReader.addEventListener('load', function(e) {
            img.setAttribute('src', e.target.result);
        });

        fileReader.readAsDataURL(file);
    });
})();