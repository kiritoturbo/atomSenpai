//ANIMATION ON SCROLL
$(document).ready(function() {
    $(window).scroll(function() {
        var animTrigger = $('.anim');
        $(animTrigger).each(function() {
            var scroll = $(window).scrollTop(),
                elemTop = $(this).offset().top,
                windowHeight = $(window).height(),
                elemHeight = $(this).height();
            if (scroll > elemTop - windowHeight + 200) {
                $(this).addClass('is-animated');
            }
        });
    });
    $(window).trigger('scroll');
});
$(document).ready(function() {
    if(window.innerHeight > window.innerWidth){
        if(!$('.box-day-off.anim').hasClass('is-animated')){
            $('.box-day-off.anim').addClass('is-animated');
        }
    }
});
$(document).ready(function() {
    jQuery('.svg-img').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
            $svg.find('linearGradient').after('<linearGradient id="hovergradient" x1="0" y1="62" x2="124" y2="62" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#ffffff"></stop></linearGradient>');
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
});
$(document).ready(function() {
   if(localStorage.getItem('togglecheck') == 'true'){
    if($('body').hasClass('single-post') && !$('body').hasClass('toggle-open')){
        $('body').addClass('toggle-open');
        setTimeout(function() {
            $('.single-contact-form .toggle-hd').trigger('click');
        }, 500);
    }
   }
   if($('body').hasClass('subdir') && !$('body').hasClass('thanks-page')){
    localStorage.setItem('togglecheck', 'true');
   }
   if($('body').hasClass('subdir') && $('body').hasClass('thanks-page')){
    localStorage.setItem('togglecheck', 'false');
   }
});