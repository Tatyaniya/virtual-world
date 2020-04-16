$( () => {

    // Modal

    $('.rent-now').click( function (e) {
        e.preventDefault();
        $('#exampleModal').arcticmodal({
            overlay: {
                css: {
                    backgroundColor: 'rgba(62, 15, 46, .93)',
                    opacity: 1
                }
            }
        });
    });

    // Menu opener hamburger

    $('.hamburger').click( () => {
        $('.nav__list').toggleClass('nav-closed').toggleClass('nav-opened');
        $('.hamburger').toggleClass('hamburger-opened');
    });

    $('.nav__link').click( ()=> {
        $('.nav__list').removeClass('nav-opened').addClass('nav-closed');
        $('.hamburger').removeClass('hamburger-opened');
        $('.ham').removeClass('active');
    });

    // Scroll

    $('.nav__link').click( e => {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });

    $('.drop-down__link').click( e => {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });

    $('.up').click( e => {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 1000);
    });

    
    // Map

    if (document.getElementById('map')) {
        ymaps.ready(init); 

        function init(){ 
            let myMap = new ymaps.Map("map", {
                center: [44.5873241,33.4516643],
                zoom: 16
            });

            let myPlacemark = new ymaps.Placemark([44.5873241,33.4516643], {
                hintContent: 'Мы здесь',
            },
            {
                preset: 'islands#redDotIcon',
                iconColor: '#380b26'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
    };

});