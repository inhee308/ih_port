$(function () {

    var totNum = 1;

    var maxCnt = 10;
    var minCnt = 0;


    $('.price .add').click(function () {

        let cntObj = $(this).siblings('.num_count');
        let currCnt = parseInt(cntObj.text()); 

        if (currCnt < maxCnt) {
           
            currCnt++;           
            cntObj.text(currCnt);
           
            updateTotalPrice(); 
        }

    });

    $('.price .minu').click(function () {
        let cntObj = $(this).siblings('.num_count');
        let currCnt = cntObj.text();
        
        if (currCnt > minCnt) {            
            currCnt--;
           
            cntObj.text(currCnt);

            updateTotalPrice();
        }

    });



}); //JQuery 종료


function updateTotalPrice() {
    var totalPrice = 0;
    var totNumCnt = 0;

    
    var arrPriceObj = $('.list_wrap li .pro_pri');
    var liIdx = $('.list_wrap li').length;


    for (var n = 0; n < liIdx; n++) {

        
        var priceObj = arrPriceObj[n];        
        var price = removeCommas($(priceObj).text());
        var numCnt = $(priceObj).siblings().find('.num_count').text();

        var subPri = price * numCnt;

        totalPrice = subPri + totalPrice;
        totNumCnt = totNumCnt + Number(numCnt);
    }

    $('#tot_box .totpri').text(numberWithCommas(totalPrice));
    $('.all_num').text(totNumCnt);

}

// 숫자를 천 단위마다 콤마를 추가하는 함수
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
//콤마를 제거하는 함수
function removeCommas(numberString) {
    return numberString.replace(/,/g, '');
}


