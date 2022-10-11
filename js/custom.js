$(document).ready(function(){
    $('.up').hide();
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.up').fadeIn('500');
        }
        else{
            $('.up').fadeOut('1000');
        }
    });
    $('.up').click(function(){
        $('body, html').animate({
            scrollTop:0
        });
    });
});

window.addEventListener("load", function(){
    this.document.getElementById("loader").classList.toggle("loader2")
})
