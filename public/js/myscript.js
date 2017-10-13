// JavaScript Document

	
	/*//ウェルカムテキスト
	window.onload=function(){
	$("#home").css("display","none");
	$("#welcome").fadeOut(2000);
	$("#home").delay(2000).fadeIn(1500);
	}*/

$(function(){
		
	//グローバルメニュー打ち消し線
	/*var url = $(location).attr('href');
	$('#menu li a').each(function(){
		var link = $(this).attr('href');
        if(link == url){
            $(this).addClass('on');
        }
	});*/
    
    //SVGリンク
     $(".svg_jp_map svg").click(function(){
        if($(this).find("a").attr("target")=="_blank"){
             window.open($(this).find("a").attr("href"), '_blank');
         }else{
             window.location=$(this).find("a").attr("href");
         }
        return false;
     });
    
 
	//スムーズスクロール
	var topBtn=$('.page_top_svg');
		topBtn.click(function(){
		$('body,html').animate({
		scrollTop: 0},600);
		return false;
    });
    
    
    //スマホナビ表示
    $(".hamburger").on("click",function(){
        $("#sp_navArea").show();
        $(".navOpen_hideArea").css("display","none");
    });
    
    $(".x_mark").on("click",function(){
        $("#sp_navArea").hide();
        $(".navOpen_hideArea").css("display","block");
    });
    
    
    
    //検索フォーム開閉
    $("#pc_searchform #searchsubmit").hover(function(){
        $("#searchform input#s").show("slow");
        $("nav#menu").hide("slow");
        $("#searchform input#s").focus();
    });

    $("#pc_searchform input#s").blur(function(){
        $("#searchform input#s").hide("slow");
        $("nav#menu").show("slow");
    });

    
    
    //地方エリアカテゴリートグル  
      $('#pref_tabMenu li').on('click', function(){
        if($(this).not('active')){
          // タブメニュー
          $(this).addClass('active').siblings('li').removeClass('active');
          // タブの中身
          var index = $('#pref_tabMenu li').index(this);
          $('#pref_tabBoxes div').eq(index).addClass('active').siblings('div').removeClass('active');
        }
      });


	
});
