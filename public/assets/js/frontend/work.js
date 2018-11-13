$(document).ready(function() {
    $('.work-container ul li').click(function() {
        var index = $(this).index();
        $(this).parent().children().removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().siblings().children().children().hide();
        $(this).parent().parent().siblings().children().children().eq(index).fadeIn();
    })
})

