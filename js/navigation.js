// menu nav at top. This is not responsively hidden: we want it to be a button all the time and only expand on click/tap

// toggle hidden and visible
jQuery(document).ready(function($){
	$(".menu-toggle").click(function(){
		$(".menu").toggle();
	})
});