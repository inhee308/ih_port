$(function () {

    //동영상 탭기능
    $('.video_right ul li').eq(0).show();



    $('.video_left .swiper-slide').click(function () {
        var i = $(this).index();

        $('.video_right ul li').hide();
        $('.video_right ul li').eq(i).show();
        $('.vi_play iframe').each(function () {
            $(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
            /* 다른비디오로 넘어갔을때 중지시키려면 iframe ? 뒤에 기재하고 윗줄 추가 */
        });


        $('.video_left .swiper-slide a img').css({ 'box-shadow': 'none' });
        $('.video_left .swiper-slide a p').css({ 'color': '#676666', 'font-weight': 'normal' });
        $(this).find('a').find('img').css({ 'box-shadow': '5px 5px 5px rgba(0, 0, 0, 0.8)' });
        $(this).find('a').find('p').css({ 'color': '#346094', 'font-weight': '500' });

        return false;
    });


}); //JQuery 종료