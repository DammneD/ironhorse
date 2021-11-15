$(function () {

	 // плавное перемещение страницы к нужному блоку
	  $("a.go").click(function (e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 800);
    });

	// Prices

		$('.look_1').click(function(e) {
		e.preventDefault();
		$('.arrow').toggleClass('d-none');
		$('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_1').toggleClass('d-none');
	});
    $('.look_2').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_2').toggleClass('d-none');
    });
    $('.look_3').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_3').toggleClass('d-none');
    });
    $('.look_4').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_4').toggleClass('d-none');
    });
    $('.look_5').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_5').toggleClass('d-none');
    });
    $('.look_6').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_6').toggleClass('d-none');
    });
    $('.look_7').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_7').toggleClass('d-none');
    });
    $('.look_8').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_8').toggleClass('d-none');
    });
    $('.look_9').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_9').toggleClass('d-none');
    });
    $('.look_10').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_10').toggleClass('d-none');
    });
    $('.look_11').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_11').toggleClass('d-none');
    });
    $('.look_12').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_12').toggleClass('d-none');
    });
    $('.look_13').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_13').toggleClass('d-none');
    });
    $('.look_14').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_14').toggleClass('d-none');
    });
    $('.look_15').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_15').toggleClass('d-none');
    });
    $('.look_16').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_16').toggleClass('d-none');
    });
    $('.look_17').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_17').toggleClass('d-none');
    });
    $('.look_18').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_18').toggleClass('d-none');
    });
    $('.look_19').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_19').toggleClass('d-none');
    });
    $('.look_20').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_20').toggleClass('d-none');
    });
    $('.look_21').click(function(e) {
        e.preventDefault();
        $('.arrow').toggleClass('d-none');
        $('.arrow_down').toggleClass('d-block').css('color','#000');
        $('.price-opened_21').toggleClass('d-none');
    });
    $('.owl-next').click(function(e) {
        e.preventDefault();
        $('.price-opened').addClass('d-none');
    });
    $('.owl-prev').click(function(e) {
        e.preventDefault();
        $('.price-opened').addClass('d-none');
    });
    $('.price-opened').click(function(e) {
        e.preventDefault();
        $('.price-opened').addClass('d-none');
    });
    $('.price-opened__list').click(function(e) {
        e.preventDefault();
        $('.price-opened').addClass('d-none');
    });
    
	  // Всплывающее окно
	   setTimeout(function(){
        $('#ScrollModal').arcticmodal();
        }, 100000);

    $('.discounts, .action__slider_btn').click(function (e) {
        e.preventDefault();
        $('#exampleModal').arcticmodal();
    });

	$('.write__reviews').click(function (e) {
        e.preventDefault();
        $('#reviewsModal').arcticmodal();
    });

 	$('.call__but').click(function (e) {
         e.preventDefault();
        $('#callModal').arcticmodal();
     });

// 	var dlete = true;
//  	 $(window).scroll(function() {
//         if ($(this).scrollTop() > 4100 && dlete == true){  
//              $('#ScrollModal').arcticmodal();
//              dlete = false;
//         }

//     });
    
     // Гамбургер

     $('.menu-display').click(function() {
        $('.menu-collapse').toggleClass('d-block').css('position','absolute');
     });


});