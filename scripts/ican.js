 /*漢堡選單開跟關Sidebar/On/Off*/
(function(){   
    var bodyEl = $('body');
    $(".toggle-btn").on('click', function(e) {
        bodyEl.toggleClass('active-nav');
        e.preventDefault();
    });
    $(".closebtn").on('click', function(e) {
        bodyEl.toggleClass('active-nav');
        e.preventDefault();
    });

    $('#BackTop').click(function(){ 
        $('html,body').animate({scrollTop:0}, 333);
    });

    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300 ){
            $('#BackTop').fadeIn(222);
            $('.header-menu').addClass('scrolldown');
        } else {
            $('#BackTop').stop().fadeOut(222);
            $('.header-menu').removeClass('scrolldown');
        }
    }).scroll();
})();
 /*漢堡選單開跟關Sidebar/On/Off*/