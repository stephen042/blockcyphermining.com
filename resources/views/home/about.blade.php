<!doctype html>
<html class="no-js" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
{{-- start head --}}
@include('include.home_css')
{{-- end start head --}}
<body>


@include('include.home_nav')

<script>
$(".navbar-toggler").click( function(){
	$("#mySidebar").toggle({ direction: "left" }, 1000);
	$("#closeMenu").fadeToggle();
});
$("#closeMenu").click( function(){
	$("#mySidebar").toggle({ direction: "left" }, 1000);
  $("#closeMenu").fadeToggle();
});
</script>
<div class="hero-cover bg-primary text-light">
	<div class="container">
		<div class="hero-cover-container">
			<h1>About BlockCypherMinings</h1>
			<p>BlockCypherMinings is building solutions for the future, with the most significant technologies of the millennium.</p>
		</div>
	</div>
</div>
<section class="pb-5 preview-slider">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-4">
				<h1>What We Do:</h1>
			</div>
			<div class="col-md-8">
				<p>The BlockCypherMinings Group is the world’s leading emerging technologies company. Founded in 2016, our mission is to make the world more secure and trusted through the use of cutting-edge technologies such as artificial intelligence, blockchain, bitcoin and high-performance computing. Learn more about our bold leadership in bringing these new technologies to the world.</p>
			</div>
		</div>
	</div>
</section>
<section class="bg-light py-5 preview-slider">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-4">
				<h2 class="abel">Our Mission:</h2>
			</div>
			<div class="col-md-8">
				<p>Our mission is to make the world more trusted and secure.</p>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-8 py-4">
			<h2 class="m-0 abel">Want to join our team?</h2>
		</div>
		<div class="col-md-4 text-md-right py-4">
			<a href="contact" class="btn btn-outline-primary btn-lg">Contact us</a>
		</div>
	</div>
</div>
	{{-- footer --}}
	@include('include.home_footer')
	{{--End footer --}}

	{{-- script --}}
	@include('include.home_script')
	{{-- End script --}}
</body>

<!-- Mirrored from blockcypherminings.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:43 GMT -->
</html>