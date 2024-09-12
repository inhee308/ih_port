var $ = jQuery ;

$(function () {


    $('#reason .reason_text p:first-child').eq(0).css('visibility', 'visible');
    $('#navi, #navi_bg').mouseenter(function () {
        $('#navi .sub_navi, #navi_bg').stop().slideDown('fast');

    }).mouseleave(function () {
        $('#navi .sub_navi, #navi_bg').stop().slideUp('fast');

    });


    //모바일 메뉴 복제
    var naviClon = $('#navi').contents().clone();
    $('.mb_navi_wrap').append(naviClon);


    //모바일 햄버거 버튼 클릭시 메뉴 나옴
    $('#mb_btn').click(function () {
        $('#mb_navi_bg,#mb_navi').stop().animate({
            right: 0
        }, 300);

        //모달 배경에 스크롤 없애기
        $('body').css('overflow','hidden');  
    });

    //닫기버튼 클릭시 모바일 메뉴 우측으로 들어감
    $('#mb_navi_bg').click(function () {
        $('#mb_navi_bg, #mb_navi').stop().animate({
            right: '-100%'
        }, 300);

        $('body').css('overflow','auto');   

        //열려있는 서브 초기화
        $('.mb_navi_wrap .main_navi > li > a').removeClass('selected');
        $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');


    });

    //메뉴 클릭시 서브메뉴 닫히고 열림
    $('.mb_navi_wrap .main_navi > li > a').click(function () {
        $(this).toggleClass('selected');
        $('.mb_navi_wrap .main_navi > li > a').not(this).removeClass('selected');

        $(this).find('+.sub_navi').slideToggle('fast');
        $('.mb_navi_wrap .main_navi > li > a').not(this).find('+.sub_navi').slideUp('fast');
    });


    //pc화면에서 모바일 메뉴 초기화
    $(window).resize(function () {
        if ($(this).outerWidth() > 768) {
            $('body').css('overflow','auto');
            $('.mb_navi_wrap .main_navi > li > a').removeClass('selected');
            $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');
            $('#mb_navi_bg, #mb_navi').css({ right: '-100%' });
        }
    })

   

}); //JQuery 종료