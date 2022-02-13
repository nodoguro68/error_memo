(function() {
    
    var tabs = document.getElementsByClassName('tab__item');
    var tabMenus = document.getElementsByClassName('tab-menu');


    window.addEventListener('DOMContentLoaded', function() {

        // tabに指定されているactiveクラスを削除
        for(var i = 0; i < tabs.length; i++) {
            if(tabs[i].classList.contains('tab__item--active')) {
                tabs[i].classList.remove('tab__item--active');
            }
        }

        // tab-menuに指定されているactiveクラスを削除
        for(var i = 0; i < tabMenus.length; i++) {
            if(tabMenus[i].classList.contains('tab-menu--active')) {
                tabMenus[i].classList.remove('tab-menu--active');
            }
        }

        // ローカルストレージに保存されているtabの番号を取得（画面遷移する直前に開いていたtabの番号）
        var tabNum = localStorage.getItem('tab');

        // 取得した番号のtabをactiveにする
        tabs[tabNum].classList.add('tab__item--active');
        tabMenus[tabNum].classList.add('tab-menu--active');
    });

    var checkTab = function(e) {
        var num;

        // クリックしたtabがactiveでなければ
        if(!e.target.classList.contains('tab__item--active')) {
            for(var i = 0; i < tabs.length; i++) {
                // activeなtabがあれば
                if(tabs[i].classList.contains('tab__item--active')) {
                    // activeクラスを削除
                    tabs[i].classList.remove('tab__item--active');
                }
            }

            // クリックしたtabにactiveクラスをつける
            e.target.classList.add('tab__item--active');

            for(var i = 0; i < tabs.length; i++) {
                // activeクラスをもつtabがあれば
                if(tabs[i].classList.contains('tab__item--active')){
                    // そのtabの番号を格納する
                    num = i;
                    localStorage.setItem('tab', num);
                }
            }
            checkTabMenu(num);
        }
    };

    var checkTabMenu = function(num) {
        // tabMenuのactiveクラスを削除する
        for(var i = 0; i < tabMenus.length; i++) {
            if(tabMenus[i].classList.contains('tab-menu--active')) {
                tabMenus[i].classList.remove('tab-menu--active');
            }
        }

        // tabと紐づくtabMenuにactiveクラスをつける
        tabMenus[num].classList.add('tab-menu--active');
    }

    for(var i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', checkTab, false);
    }


    // タブメニュー保持
    // tabをクリックした時に、Cookieにkeyとvalueの形でデータを保存する
    // 画面が読み込まれた時にCookieのデータと同じtabを表示する

})();