//پنل مدیریت
$(document).ready(function() {
    $('.admin-menu > ul > li.product').click(function(){
        //$('ul.sub-admin',this).slideToggle();
        $("ul.sub-product").slideToggle();
        //$(".admin-menu  ul  li > ul.sub-admin").slideToggle();
    });
});
$(document).ready(function() {
    $('.admin-menu > ul > li.role').click(function(){
        $("ul.sub-role").slideToggle();
    });
});
$(document).ready(function() {
    $('.admin-menu > ul > li.category').click(function(){
        $("ul.sub-category").slideToggle();
    });
});
$(document).ready(function() {
    $('.admin-menu > ul > li.transcation').click(function(){
        $("ul.sub-transcation").slideToggle();
    });
});
$(document).ready(function() {
    $('.admin-menu > ul > li.factors').click(function(){
        $("ul.sub-factor").slideToggle();
    });
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    },
    navText:Array ('<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'),
    dots:true,
    autoplay:true,
});



