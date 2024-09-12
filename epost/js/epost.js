
$(function () {


    /* 네비게이션  */

    $('#navi .main_navi > li').mouseenter(function () {
        $(this).find('.sub_navi').addClass('active');
    }).mouseleave(function () {
        $(this).find('.sub_navi').removeClass('active');
    });


    //모바일 메뉴 복제
    var naviClon = $('#navi').contents().clone();
    $('.mb_navi_wrap').append(naviClon);

    //모바일 햄버거 버튼 클릭시 메뉴 나옴
    $('.menu_trigger').click(function () {
        $(this).toggleClass('no-after-before');
        $(this).toggleClass('cross');

        if ($(this).hasClass('cross')) {

            $('#mb_navi_bg,#mb_navi').stop().animate({
                right: 0
            }, 300);
 

            //모달 배경에 스크롤 없애기
            $('body').css('overflow', 'hidden');
        } else {

            $('#mb_navi_bg, #mb_navi').stop().animate({
                right: '-100%'
            }, 300);

            $('body').css('overflow', 'auto');

            //열려있는 서브 초기화
            $('.mb_navi_wrap .main_navi > li > a').removeClass('selected');
            $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');

        }
    });


    //메뉴 클릭시 서브메뉴 닫히고 열림
    $('.mb_navi_wrap .main_navi > li > a').click(function () {
        $(this).toggleClass('selected');
        $('.mb_navi_wrap .main_navi > li > a').not(this).removeClass('selected');

        $(this).find('+.sub_navi').slideToggle('fast');
        $('.mb_navi_wrap .main_navi > li > a').not(this).find('+.sub_navi').slideUp('fast');
    });


    // pc화면에서 모바일 메뉴 초기화
    $(window).resize(function () {
        if ($(this).outerWidth() > 1000) {
            $('body').css('overflow','auto');
            $('.mb_navi_wrap .main_navi > li > a').removeClass('selected');
            $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');
            $('#mb_navi_bg, #mb_navi').css({ right: '-100%' }); 
            //$('.menu_trigger').css({ 'display': 'none' });

        }
    })


    /* sec_02 탭메뉴 */


    $('.tab_btn li').eq(0).addClass('on');
    $('.tab_body > div').eq(0).show();
    $('.tab_body > div').not(':eq(0)').hide();

    $('.tab_btn li').click(function () {

        //내가 클릭한 li의 순서를 i에 넣음 .index()
        var i = $(this).index();
        $('.tab_btn li').removeClass('on');
        $(this).addClass('on');

        $('.tab_body > div').hide();
        $('.tab_body > div').eq(i).show();

        return false;
    });


}); //JQuery 종료