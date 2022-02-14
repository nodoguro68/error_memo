(function() {
    
    var menuItem = document.getElementById('menuItem');
    var dropdown = document.getElementById('dropdownMenu');

    menuItem.addEventListener('click', function() {
        dropdown.classList.toggle('header__sub-menu--active');
    });

})();