$(document).ready(function() {
    $('.tabs').tabs();
	$('#topbar').scrollSpy();
	$('#topbar').dropdown();
	$('#display_contact').click(function() {
	  $('#contact_form').slideToggle('slow', function() {
	    // Animation complete.
	  });
	});
	
});