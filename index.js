$(document).ready(function() {
    
    // Banner Owl Carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots : true,
        items : 1
    });

    // Top Sale Owl Carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav : true,
        dots : false,
        responsive : {
            0 : {
                items : 1
            },
            600 : {
                items : 3
            },
            1000 : {
                items : 5
            }
        }
    });

    // Isotop
    let $grid = $(".grid").isotope({
        itemSelecter : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function() {
        let filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    })

    // New Phones Owl Carouesel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav : false,
        dots : false,
        responsive : {
            0 : {
                items : 1
            },
            600 : {
                items : 3
            },
            1000 : {
                items : 5
            }
        }
    });

    // Blogs Owl Carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav : false,
        dots : false,
        responsive : {
            0 : {
                items : 1
            },
            600 : {
                items : 3
            }
        }
    });

    // produt qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click event on qty up button
    $qty_up.click(function(e) {
        let $input = $(`.qty_input[data-id='${$(this).data('id')}']`);
        if($input.val() >= 1 && $input.val() <= 9 ) {
            $input.val(function(i,oldval) {
                return ++oldval;
            });
        }
    });
    
    // click event on qty down button
    $qty_down.click(function(e) {
        let $input = $(`.qty_input[data-id='${$(this).data('id')}']`);
        if($input.val() > 1 && $input.val() <= 10 ) {
            $input.val(function(i,oldval) {
                return --oldval;
            });
        }
    });

})