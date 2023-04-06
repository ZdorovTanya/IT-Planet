$(document).ready(function(){
    $('.block_title').click(function(event){
        $(this).toggleClass('active').next().slideToggle(300);
    })
});