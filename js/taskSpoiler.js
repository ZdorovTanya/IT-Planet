$(document).ready(function(){
    $('.taskHelp-row').click(function(event){
        $(this).toggleClass('active').next().slideToggle(300);
    })
});