(function($){
$(document).ready(function(){
 // $("#siderbar>ul>li>a").click(function(){
 //    $('#siderbar li').removeClass('active');
 //    $(this).closest('li').addClass('active');
 //    var checkElement=$(this).next();
 //    if((checkElement.is('ul'))&&(checkElement.is(':visible'))){
 //      $(this).closest('li').removeClass('active');
 //      checkElement.slideUp('normal');
 //    }
 //    if((checkElement.is('ul'))&&(checkElement.is(':visible'))){
 //      $(this).closest('li').removeClass('active');
 //      checkElement.slideDown('normal');
 //    }

 //    if($(this).closest('li').find('ul').children().length==0){
 //      return true;
 //    }else{
 //      return false;
 //    }
 // })
  $('#siderbar>ul>li>ul').click(function(){
    $('#siderbar ul ul').slideUp();
    if(!$(this).next().is(':visible')){
      $(this).next().slideDown();
    }
  })

})(jQuery);
