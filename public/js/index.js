$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            if($(window).width() > 991){
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                $(this).toggleClass('open');        
            }
        },
        function() {
            if($(window).width() > 991){
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                $(this).toggleClass('open');       
            }
        }
    );
    $(".dropdown").click(           
        function() {
            if($(window).width() < 992){
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideToggle("400");
                $(this).toggleClass('open');        
            }
        }       
    );
});