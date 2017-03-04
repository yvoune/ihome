$(function(){
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true // 100% fit in a container
    });
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });


    var menu_ul = $('.menu > li > ul'),
        menu_a = $('.menu > li > a');
    menu_ul.hide();
    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true, true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true, true).slideUp('normal');
        }
    });

    // 推荐房源轮播
    $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3
            }
        }
    });

    // 搜索短期房源
    $('#searchShortRoom').click(function(){
        var rentDay = $('#rentDay').val();
        var topPrice = $('#topPrice').val();
        var lowPrice = $('#lowPrice').val();
        var rentPeople = $('#rentPeople').val();
        var place = $('#place');
        console.log(rentDay,",",topPrice,",",lowPrice,",",rentPeople,",",place);
        if(!place.isEmptyString()){
            // console.log(place.isEmptyString());
            alert("请确认是否已正确输入要搜索的地址！");
            return false;
        }else{
            alert("搜索中...");
        }
    })
    // 搜索长期房源
    $('#searchLongRoom').click(function(){
        var rentMonth = $('#rentMonth').val();
        var topPrice = $('#topPrice').val();
        var lowPrice = $('#lowPrice').val();
        var rentPeople = $('#rentPeople').val();
        var place = $('#place');
        console.log(rentMonth,",",topPrice,",",lowPrice,",",rentPeople,",",place);
        if(!place.isEmptyString()){
            // console.log(place.isEmptyString());
            alert("请确认是否已正确输入要搜索的地址！");
            return false;
        }else{
            alert("长期房源搜索中...");
        }
    })
})