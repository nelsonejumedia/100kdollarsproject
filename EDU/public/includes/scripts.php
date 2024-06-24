<script src="<?= ROOT ?>/assets/js/script.js"></script>

<!-- js -->
<script type="text/javascript" src="<?= ROOT ?>/assets/js/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script type="text/javascript" src="<?= ROOT ?>/assets/js/bootstrap.js"></script>
<script src="<?= ROOT ?>/assets/aos-master/dist/aos.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<!-- search-bar -->
<script src="<?= ROOT ?>/assets/js/main.js"></script>
<!-- //search-bar -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="<?= ROOT ?>/assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

<!-- stats -->
<script src="<?= ROOT ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?= ROOT ?>/assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->

<!-- Countdown-Timer-JavaScript -->
<script src="<?= ROOT ?>/assets/js/simplyCountdown.js"></script>
<!-- easy to customize -->

<script>
	$('#simply-countdown-losange').simplyCountdown({
		year: 2024,
		month: 5,
		day: 12
	});
</script>
<!-- //Countdown-Timer-JavaScript -->

<!-- start-smoth-scrolling -->
<script src="<?= ROOT ?>/assets/js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="<?= ROOT ?>/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?= ROOT ?>/assets/js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

	<script>
		AOS.init();
	</script>
</body>

</html>