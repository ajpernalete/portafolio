$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {  
    var url = new String(e.target);
    var pieces = url.split('#');
    
    if (pieces[1] == '1'){
        $('#1').css('left','-'+$(window).width()+'px');    
        var left = $('#1').offset().left;
        $("#1").css({left:left}).animate({"left":"0px"}, "30");
    }
    
    if (pieces[1] == '2'){
        $('#2').css('right','-'+$(window).width()+'px');    
        var right = $('#2').offset().right;
        $("#2").css({right:right}).animate({"right":"0px"}, "30");
    }
    
    if (pieces[1] == '3'){
        $('#3').css('top','-'+$(window).height()+'px');            
        var top = $('#3').offset().top;
        $("#4").css({top:top}).animate({"top":"0px"}, "30");
    }
    
    if (pieces[1] == '4'){
        $('#settings').css('bottom','-'+$(window).height()+'px');            
        var bottom = $('#4').offset().bottom;
        $("#5").css({bottom:bottom}).animate({"bottom":"0px"}, "30");
    }
})
