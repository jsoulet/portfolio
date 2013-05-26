jQuery(document).ready(function() {
    /**
    * Replace all SVG images with inline SVG
    **/
    jQuery('img.svg').each(function(){
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

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);
        });

    });

    /**
    * Show/hide title on mouse hover in portfolio list
    **/
    $('.list_title').parent().mouseenter(function() {
                clearTimeout($.data(this, 'timer'));
                $(this).children('.list_title').stop(true, true).slideDown(200);
            });

    $('.list_title').parent().mouseleave(function () {
        $.data(this, 'timer', setTimeout($.proxy(function() {
            $(this).children('.list_title').stop(true, true).slideUp(200);
        }, this), 200));
    });

    /**
    * Show an arrow under nav element on mouse over
    **/
    $('.menu-item').mouseenter(function(){
        var triangle = $('<span>', {
            class: 'triangle',
            text: ' '
        });
        $(triangle).css('left', $(this).width()/2 - Math.sqrt(2)*triangle.width()/2);
        $(this).append(triangle);
    });
    $('.menu-item').mouseleave(function(){
        $(this).children('.triangle').remove();
        triangleOnActive();
    });

    triangleOnActive = function(){
        var triangle = $('<span>', {
            class: 'triangle',
            text: ' '
        });
        $('.current-menu-item').append(triangle);
        $(triangle).css('left', triangle.parent().width()/2 - Math.sqrt(2)*triangle.width()/2);
    };

    triangleOnActive();

});