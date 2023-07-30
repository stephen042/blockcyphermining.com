<!doctype html>
<html class="no-js" lang="en-US">
<!-- Mirrored from blockcypherminings.com/faqs by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
<script language="JavaScript" type="text/javascript">
function del(id)
{
  if (confirm("Are you sure you want to delete this FAQ"))
  {
      window.location.href='https://blockcypherminings.com/faqs?set=del&del=' + id;
  }
}
</script>
<script language="JavaScript" type="text/javascript">
function del(id)
{
  if (confirm("Are you sure you want to delete this FAQ"))
  {
      window.location.href='https://blockcypherminings.com/admin?n=faq&set=del&del=' + id;
  }
}
</script>
<div class="hero-cover pb-0">
	<div class="container">
		<div class="hero-cover-container">
			<h1>Frequently asked questions</h1>
			<p>General Questions.</p>
		</div>
	</div>
</div>
<div class="container pb-5">

<div id="accordion"> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-1">
		   what is bitcoin ?
		   </a>
		   </div>
		   <div id="collapse-1" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>Bitcoin is a form of digital currency which is based on an open source code that was created and is held electronically. Bitcoin is a decentralized form of currency, meaning that it does not belong to any form of government and is not controlled by anyone.</p>
		   </div>
		   </div>
	   </div> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-2">
		   Who Developed Bitcoin?
		   </a>
		   </div>
		   <div id="collapse-2" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>The original Bitcoin code was designed by Satoshi Nakamoto under MIT open source credentials. In 2008 Nakamoto outlined the idea behind Bitcoin in his White Paper, which scientifically described how the cryptocurrency would function. Bitcoin is the first successful digital currency designed with trust in cryptography over central authorities. Satoshi left the Bitcoin code in the hands of developers and the community in 2010. Thus far hundreds of developers have added to the core code throughout the years.</p>
		   </div>
		   </div>
	   </div> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-3">
		   What is Bitcoin Mining?
		   </a>
		   </div>
		   <div id="collapse-3" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>Bitcoin mining is analogous to the mining of gold, but its digital form. The process involves specialized computers solving algorithmic equations or hash functions. These problems help miners to confirm blocks of transactions held within the network. Bitcoin mining provides a reward for miners by paying out in Bitcoin in turn the miners confirm transactions on the blockchain. Miners introduce new Bitcoin into the network and also secure the system with transaction confirmation. They are also rewarded network fees for when they harvest new coin and a time when the last bitcoin is found mining will continue.</p>
		   </div>
		   </div>
	   </div> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-4">
		   Is Bitcoin Used For Illegal Activities?
		   </a>
		   </div>
		   <div id="collapse-4" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>This is a yet another controversial topic. Because of the freedom and the degree of anonymity that the use of Bitcoin offers, many users who were seeking to purchase or solicit illegal goods or services initially turned to the use of Bitcoin as a method of payment.</p>
		   </div>
		   </div>
	   </div> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-5">
		   Can Bitcoin Be Regulated In Any Way?
		   </a>
		   </div>
		   <div id="collapse-5" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>Again, when a user decides to use a specific type of software for their Bitcoin wallet, they are deciding what direction the Bitcoin network is heading towards. In other words, you need the cooperation of nearly every single user in order to modify any aspect of the Bitcoin protocol.</p>
		   </div>
		   </div>
	   </div> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-6">
		   Is Bitcoin anonymous?
		   </a>
		   </div>
		   <div id="collapse-6" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>Participants in Bitcoin transactions are identified by public addresses â€“ those are the long strings of around 30 characters you see in a personâ€™s Bitcoin address, usually starting with the numerals â€˜1â€™ or â€˜3â€™. For every transaction, the sending and receiving addresses are publicly-viewable.</p>
		   </div>
		   </div>
	   </div> 
	   <div class="card mb-2">
		   <div class="card-header" style="border-left: 6px solid #f4be18">
		   <a class="card-link text-dark" data-toggle="collapse" href="#collapse-7">
		   How Can I Sell Bitcoins?
		   </a>
		   </div>
		   <div id="collapse-7" class="collapse" data-parent="#accordion">
		   <div class="card-body">
			   <p>Bitcoins can be sold locally using LocalBitcoins, on Bitcoin brokerages / exchanges, using two-way Bitcoin Teller Machines (BTMâ€™s) or you can pay for a good or service with them. Bitcoins can be sold to just about anyone as long as they have a Bitcoin address, and can be sold for any fiat currency in the world or traded for a physical good. Feel free to check out our recommended list of exchanges and brokerage services to sell your bitcoins online.</p>
		   </div>
		   </div>
	   </div></div></div>

{{-- footer --}}
@include('include.home_footer')
{{--End footer --}}

{{-- script --}}
@include('include.home_script')
{{-- End script --}}

</body>

<!-- Mirrored from blockcypherminings.com/faqs by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:56 GMT -->
</html>