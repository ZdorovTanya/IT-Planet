$(document).ready(function(){
    $('.block_row').click(function(event){
        $(this).toggleClass('active').next().slideToggle(300);
    })
});