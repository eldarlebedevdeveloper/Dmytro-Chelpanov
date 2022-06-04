$(window).on("scroll", function() {
    // $('.header').toggleClass("active_header", $(this).scrollTop() > $(window).height());
    $('.header').toggleClass("active_header", $(this).scrollTop() > 50);
});

showBlog()
function showBlog(){
let d = 2
$('#blogHome_hide').slideUp(0);
    $('.blogHome_button .button').on('click', () => {
        $('#blogHome_hide').slideToggle()

        d++
        console.log(d)
        if(d % 2){
            $('.blogHome_button .button a ').text('show less')
        }else{
            $('.blogHome_button .button a ').text('show more')
        }
    })
}

// $(function(){
//     $('a[href^="#"]').click(function(){
//        var target = $(this).attr('href');
//        $('html, body').animate({scrollTop: $(target).offset().top - 100}, 1000);
//        return false;
//     });
//  });

$(".scroll").click(function() {
    var target = $(this).attr('href')
    jQuery('html, body').animate({
      scrollTop: $(target).offset().top - 100
    }, 1000, 'swing');
  });


toPutItemsBlogInShadowBlock()
function toPutItemsBlogInShadowBlock(){
    document.querySelectorAll('#blogHome_footer .blog_item').forEach((post, index) => {
        if(index > 2){
            document.querySelector('#blogHome_hide').appendChild(post)
        }
    });

}
