
function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {
	/*
	    Sidebar
	*/
	$('.dismiss, .overlay').on('click', function() {
        $('.sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('.open-menu').on('click', function(e) {
    	e.preventDefault();
        $('.sidebar').addClass('active');
        $('.overlay').addClass('active');
        // close opened sub-menus
        $('.collapse.show').toggleClass('show');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
    /* change sidebar style */
	$('a.btn-customized-dark').on('click', function(e) {
		e.preventDefault();
		$('.sidebar').removeClass('light');
	});
	$('a.btn-customized-light').on('click', function(e) {
		e.preventDefault();
		$('.sidebar').addClass('light');
	});
	/* replace the default browser scrollbar in the sidebar, in case the sidebar menu has a height that is bigger than the viewport */
	$('.sidebar').mCustomScrollbar({
		theme: "minimal-dark"
	});
	
	/*
	    Navigation
	*/
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), 0);
		//Oculta el Menu luego de dar Clic
		$('.sidebar').removeClass('active');
        $('.overlay').removeClass('active');
	});
	
	$('.to-top a').on('click', function(e) {
		e.preventDefault();
		if($(window).scrollTop() != 0) {
			$('html, body').stop().animate({scrollTop: 0}, 1000);
		}
	});
	/* make the active menu item change color as the page scrolls up and down */
	/* we add 2 waypoints for each direction "up/down" with different offsets, because the "up" direction doesn't work with only one waypoint */
	$('.section-container').waypoint(function(direction) {
		if (direction === 'down') {
			$('.menu-elements li').removeClass('active');
			$('.menu-elements a[href="#' + this.element.id + '"]').parents('li').addClass('active');
			//console.log(this.element.id + ' hit, direction ' + direction);
		}
	},
	{
		offset: '0'
	});
	$('.section-container').waypoint(function(direction) {
		if (direction === 'up') {
			$('.menu-elements li').removeClass('active');
			$('.menu-elements a[href="#' + this.element.id + '"]').parents('li').addClass('active');
			//console.log(this.element.id + ' hit, direction ' + direction);
		}
	},
	{
		offset: '-5'
	});

    /*
        Background slideshow
    */
	//$('.top-content').backstretch("assets/img/backgrounds/1.jpg");
    //$('.section-4-container').backstretch("assets/img/backgrounds/2.jpg");
    //$('.section-6-container').backstretch("assets/img/backgrounds/3.jpg");
    
    /*
	    Wow
	*/
	new WOW().init();
	
	/*
	    Contact form
	*/
       /* $("#submit").click(function() {
			var name 	= $("#Name").val();
			var country = $("#Country").val();			
			var email 	= $("#Email").val();
            var phone 	= $("#Phone").val();
			var subject = $("#Subject").val();
            var message = $("#Message").val();
			var dataString = "w3=" + 1 + "&param=" + 5 + "&name=" + name + "&country=" + country + "&email=" + email +  "&phone=" + phone + "&subject=" + subject + "&message=" + message;
            if ($.trim(name).length > 0 ) {
                $.ajax({
			    url: 'http://www.cultivandoelalma.com/API_Rest_EncuentroSV/index.php',
				data: dataString,
				type: 'POST',
				crossDomain: true,
				cache: false,
					success:function(data){
						if(!data.error) {
						$('#result').html(data);
						temp = setTimeout(redireccion, 9000);
						}
					}
                });	
            }
            return false;
        });
		// funcion encargada de la redireccion
		function redireccion() {
			window.location = "index.html";
		}*/
	
});
