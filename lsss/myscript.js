// JavaScript Document

	
	/*//ウェルカムテキスト
	window.onload=function(){
	$("#home").css("display","none");
	$("#welcome").fadeOut(2000);
	$("#home").delay(2000).fadeIn(1500);
	}*/

$(function(){
		
		
	//グローバルメニュー打ち消し線
	var url = $(location).attr('href');
	$('#menu li a').each(function(){
		var link = $(this).attr('href');
        if(link == url){
            $(this).addClass('on');
        }
	});	
		

	//スムーズスクロール
	var topBtn=$('#page_top');
		topBtn.click(function(){
		$('body,html').animate({
		scrollTop: 0},600);
		return false;
    });


	//ブランドページトップナビ
    var $win = $(window);

    $(function(){
            $(".toggle").click(function(){
            $(this).next().slideToggle();
            });
    });


	
});
