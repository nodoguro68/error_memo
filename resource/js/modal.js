(function() {
    
    var openModalBtn = document.querySelector('.js-open-modal-btn') || document.getElementById('openModalBtn');
    var closeModalBtn = document.getElementById('closeModalBtn');
    var cancelBtn = document.getElementById('cancelBtn');
    var modal = document.getElementById('modal');
    var modalBg = document.getElementById('modalBg');

    openModalBtn.addEventListener('click', function() {
        
        modal.style.display = 'block';
        modalBg.style.display = 'block';
    });

    cancelBtn.addEventListener('click', function() {
        
        modal.style.display = 'none';
        modalBg.style.display = 'none';
    });

    modalBg.addEventListener('click', function() {
        modal.style.display = 'none';
        modalBg.style.display = 'none';
    });

    closeModalBtn.addEventListener('click', function() {
        modal.style.display = 'none';
        modalBg.style.display = 'none';
    });

})();