(function () {
var interval;

$(function () {
    console.log( $('.selected.boy img') );
    start_running(0, 500)
    
});


function start_running(index, time) {
    var i = time > 400 ? 10 : 0;
    interval = setInterval(function () {
        console.log(index, time);
        switch(index%9) {
            case 0: $('.selected.boy img').eq(1).fadeOut(time);
                $('.selected.boy img').eq(2).fadeIn(time); break;
            case 1: $('.selected.boy img').eq(2).fadeOut(time);
                $('.selected.boy img').eq(3).fadeIn(time); break;
            case 2: $('.selected.boy img').eq(3).fadeOut(time);
                $('.selected.boy img').eq(4).fadeIn(time); break;
            case 3: $('.selected.boy img').eq(4).fadeOut(time);
                $('.selected.boy img').eq(5).fadeIn(time); break;
            case 4: $('.selected.boy img').eq(5).fadeOut(time);
                $('.selected.boy img').eq(6).fadeIn(time); break;
            case 5: $('.selected.boy img').eq(6).fadeOut(time);
                $('.selected.boy img').eq(7).fadeIn(time); break;
            case 6: $('.selected.boy img').eq(7).fadeOut(time);
                $('.selected.boy img').eq(8).fadeIn(time); break;
            case 7: $('.selected.boy img').eq(8).fadeOut(time);
                $('.selected.boy img').eq(9).fadeIn(time); break;
            case 8: $('.selected.boy img').eq(9).fadeOut(time);
                $('.selected.boy img').eq(1).fadeIn(time); break;
        } i++, index++;
        if(i>20) {
            clearInterval(interval);
            if( time>10 )
                start_running(index, time/2);
            else
                start_running(index, time);
        }
    }, time);
}

$(document).keydown(function () {
    clearInterval(interval);
});

})();