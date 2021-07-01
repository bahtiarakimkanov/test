$(function(){


    var header = $('.header'),
	scrollPrev = 0;
    let headerCont = $('.header__cont')
    let headerNav = $('.header__nav_ul')

$(window).on('scroll', function() {
	var scrolled = $(window).scrollTop();

    if(scrolled > 150){
        header.addClass('header__size_mid')
        headerCont.addClass('header__size_mid').addClass('header__cont_jutsify')
        headerNav.addClass('header__nav_ul_nav_disp_none')
    }else{
        header.removeClass('header__size_mid')
        headerCont.removeClass('header__size_mid').removeClass('header__cont_jutsify')
        headerNav.removeClass('header__nav_ul_nav_disp_none')
    }
 
	if ( scrolled > 0 && scrolled > scrollPrev ) {
		header.css( "transform", `translateY(-${scrolled}px)`)
	} else {
        header.css( "transform", `translateY(0px)`)
	}
	scrollPrev = scrolled;
});





});
