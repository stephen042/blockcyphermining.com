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
</script><div class="hero-cover bg-primary text-light">
	<div class="container">
		<h1 class="mb-0">Support</h1>
		<div class="row">
			<div class="col-md-6 py-3">
				<p class="font-weight-light">Should you have any questions or need assistance, feel free to contact our all-star Client Support team</p>
			</div>
			<div class="col-md-6 py-3">
				<p class="font-weight-light">Find most of the answers in our FAQ section</p>
				<a href="faqs.html" class="btn btn-outline-light btn-lg" style="width: 180px">FAQ</a>
			</div>
		</div>
	</div>
</div>
<div class="container">
<div class="row">
	<div class="col-12 col-lg-8 p-4">
		<div class="alerter"></div> 
		<script type="text/javascript" src="js/mail.js"></script>
		<form method="" action="#" id="contactform">
					<select name="topic" class="custom-select mb-3">
						<option value="Trading Question">Trading Question</option>
						<option value="Finance Question">Finance Question</option>
						<option value="Technical Question">Technical Question</option>
					</select>
				
  <div class="input-group mb-3">
				<input type="text" name="name" placeholder="Name" required class="form-control" value="">
			
				<input type="text" name="email" placeholder="Email" required class="form-control" value="">
				</div>				 <div class="form-group">
					<textarea name="text" placeholder="Message" class="form-control" rows="5"></textarea>
				</div> 
				<div class="col-12" style="padding:5px 0">
					<button name="Submit" type="" onclick="window.alert('Thank you for contacting us!')" id="sendform" class="btn btn-primary">Send</button>
				</div>
		</form>
	</div>
	<div class="col-12 col-lg-4 p-4">
	<ul class="list-group">
		<li class="list-group-item">
			<div class="d-flex align-items-center">
				<i class="fa fa-home fa-2x text-primary"></i>
				<div class="pl-4">
					<h6 class="adel text-primary">ADDRESS:</h6>
					<p class="text-black-50 mb-0">Global Trade Centre<br />Units 305-307, 3/F<br />15 Wing Kin Road<br />Kwai Chung, N.T.</p>
				</div>
			</div>
		</li>
		<li class="list-group-item">
			<div class="d-flex align-items-center">
				<i class="fa fa-envelope fa-2x text-primary"></i>
				<div class="pl-4">
					<h6 class="adel text-primary">EMAIL ADDRESS:</h6>
					<a href="mailto://support@blockcypherminings.com" class="text-black-50">support@blockcypherminings.com</a>
				</div>
			</div>
		</li>
	</ul>
	</div>
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

<!-- Mirrored from blockcypherminings.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:45 GMT -->
</html>