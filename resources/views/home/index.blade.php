<!doctype html>
<html class="no-js" lang="en-US">

{{-- start head --}}
 @include('include.home_css')
{{-- end start head --}}
<body>
	
@include('include.home_nav')

	<script>
		$(".navbar-toggler").click(function () {
			$("#mySidebar").toggle({ direction: "left" }, 1000);
			$("#closeMenu").fadeToggle();
		});
		$("#closeMenu").click(function () {
			$("#mySidebar").toggle({ direction: "left" }, 1000);
			$("#closeMenu").fadeToggle();
		});
	</script>
	<link rel="stylesheet" type="text/css" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

	<div class="hero-image text-center">
		<div class="hero-info">
			<div class="container">
				<h1>BlockCypherMinings</h1>
				<p class="my-4 my-md-5">We are the leading emerging technologies company.</p>
				<div style="max-width: 300px; margin: 0 auto;">
					<a href="login" class="btn rounded-0 mr-1 mr-md-3 mt-2">Sign In</a>
					<a href="register" class="btn rounded-0 mt-2">Register</a>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white" id="hardware">
		<div class="container py-5">
			<div class="d-flex align-content-center">
				<h1 class="my-0">Blockchain</h1>
				<div class="ml-auto">
					<a href="blockchain" class="btn btn-outline-secondary">View Blockchain</a>
				</div>
			</div>
			<div class="slider mt-4">
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 pt-md-4">
							<h2>Exonum</h2>
							<p>Exonum Enterprise is BlockCypherMinings’s premier blockchain-as-a-service solution,
								designed to help governments and companies integrate blockchain into their operations.
							</p>
						</div>
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/exonum_1116x928.svg') }}">
						</div>
					</div>
				</section>
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 pt-md-4">
							<h2>Crystal</h2>
							<p>Crystal is a web-based software tool that helps financial institutions and law
								enforcement manage blockchain investigations. </p>
						</div>
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/crystal_1116x928.svg') }}">
						</div>
					</div>
				</section>
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 pt-md-4">
							<h2>Surround</h2>
							<p>Surround is BlockCypherMinings’s music entertainment division that is working to improve
								the music industry through blockchain technology. </p>
						</div>
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/surround_1116x928-1.png') }}">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>


	<div class="bg-light">
		<div class="container py-5">
			<div class="d-flex align-content-center">
				<h1 class="my-0">High Performance Computing</h1>
				<div class="ml-auto">
					<a href="hpc" class="btn btn-outline-secondary">View HPC</a>
				</div>
			</div>
			<div class="slider mt-4">
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/immersion_cooling_grey_03_05.jpg') }}">
						</div>
						<div class="col-md-6 pt-md-4">
							<h2>Immersion Cooling</h2>
							<p>Data centers are increasingly used for everything from research over complex commercial
								computations and AI to securing the Bitcoin Blockchain. We partner with best-in-class
								immersion cooling innovator LiquidStack to make every data center and other
								high-performance computing application we work in, as energy and space efficient,
								sustainable and productive as possible.</p>
						</div>
					</div>
				</section>
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/industries_datatank_modular_key_features-700x514.png') }}">
						</div>
						<div class="col-md-6 pt-md-4">
							<h2>DataTank Container</h2>
							<p>Our DataTank container uses LiquidStack’s immersion cooling technology for
								cost-effective, energy-efficient and rapid cluster computing deployment. This
								containerized solution is our 3rd generation system and guarantees high-computing
								efficiency and operation in any climate conditions. Its “plug and play” turnkey design
								has the highest power density and lowest build cost per kW of any product on the market.
							</p>
						</div>
					</div>
				</section>
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/box_2_grey.jpg') }}">
						</div>
						<div class="col-md-6 pt-md-4">
							<h2>BlockBox AC Data center</h2>
							<p>BlockCypherMinings’s BlockBox AC data center is a fully featured containerized HPC
								solution that can be easily placed in nearly any location for optimized OPEX,
								performance and deployment. This is one of the most powerful and cost-effective bitcoin
								mining solutions available on the market, enabling bitcoin transaction processing at
								scale with peak efficiency and power.</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="bg-white">
		<div class="container py-5">
			<div class="d-flex align-content-center">
				<h1 class="my-0">Crypto-Infrastructure</h1>
				<div class="ml-auto">
					<a href="crypto-infrastructure" class="btn btn-outline-secondary">View
						Crypto-Infrastructure</a>
				</div>
			</div>
			<div class="slider mt-4">
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 pt-md-4">
							<h2>BlockCypherMinings TardisBlockCypherMinings Tardis</h2>
							<p>The BlockCypherMinings Tardis server is an efficient bitcoin mining server designed for
								small, medium and enterprise-grade investors.</p>
						</div>
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/tardis_pic.png') }}">
						</div>
					</div>
				</section>
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 pt-md-4">
							<h2>BlockBox AC</h2>
							<p>The BlockCypherMinings Group’s BlockBox AC is one of the most powerful bitcoin mining
								devices available on the market today.</p>
						</div>
						<div class="col-md-6 px-5">
							<img src="{{ asset('assets/images/box_2_white.jpg') }}">
						</div>
					</div>
				</section>
				<section>
					<div class="row px-md-5 my-5">
						<div class="col-md-6 pt-md-4">
							<h2>Data centers</h2>
							<p>We are committed to ensuring security and stability on the bitcoin blockchain through our
								state-of-the-art data centers.</p>
						</div>
						<div class="col-md-6">
							<img src="{{ asset('assets/images/datacenters_small.png') }}">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="bg-light preview-slider">
		<div class="container py-5">
			<div class="d-flex align-content-center">
				<h1 class="my-0">Artificial Intelligence</h1>
				<div class="ml-auto">
					<a href="ai" class="btn btn-outline-secondary">View Artificial Intelligence</a>
				</div>
			</div>
			<section class="mt-4">
				<div class="row px-md-5 my-5">
					<div class="col-md-6 text-center">
						<img src="{{ asset('assets/images/preview.svg') }}" style="max-width: 300px;">
					</div>
					<div class="col-md-6 pt-md-4">
						<h2>Artificial Intelligence</h2>
						<p>BlockCypherMinings’s artificial intelligence division uses the company’s world-class hardware
							and software technologies to build integrated product solutions at the edge, as well as
							cloud-to-edge enterprise solutions for corporations and governments. </p>
					</div>
				</div>
			</section>
		</div>
	</div>

	{{-- <script src="{{ URL('assets/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script> --}}
	<script src="{{ asset('assets/slick/slick-animation.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		// Init slick slider + animation
		$(document).ready(function () {

			$(".slider").slick({
				autoplay: true,
				autoplaySpeed: 10000,
				speed: 600,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: true,

				responsive: [{
					breakpoint: 680,
					settings: {
						arrows: false,
					}
				}],
				customPaging: function (slider, i) {
					return '<button class="tab"></button>';
				},
				prevArrow: '<button type="button" class="cus-prev b-prev text-black-50"><i class="fas fa-chevron-left"></i></button>',
				nextArrow: '<button type="button" class="cus-next b-next text-black-50"><i class="fas fa-chevron-right"></i></button>',
				adaptiveHeight: false
			});

		})
	</script>

	{{-- footer --}}
	@include('include.home_footer')
	{{--End footer --}}

	{{-- script --}}
	@include('include.home_script')
	{{-- End script --}}
</body>

<!-- Mirrored from blockcypherminings.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:22 GMT -->

</html>