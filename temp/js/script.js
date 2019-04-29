$(function(){

	$('#year').text(new Date().getFullYear());
	$("#element").typed({
	    strings: ["Don't get hooked by phishers! ", "Because we care for you"],
	    typeSpeed: 100,
	    loop: true
	})
    $("#write").typed({
	    strings: ["Welcome to xyz.com!", "Thanks for visit..."],
        typeSpeed: 100,
	    loop: true
	})
	$("#frontText").typed({
	    strings: ["Stay safe from Online world"],
        typeSpeed: 100,
	    loop: true
	});
	$('#displaySignup').click(function(){
		$('#signUp_box').removeClass("hide");
		$('#login_box').addClass("hide");
	});
	$('#displaySignin').click(function(){
		$('#login_box').removeClass("hide");
		$('#signUp_box').addClass("hide");
	});
	$('#payNow').click(function(){
		swal(
			"Good job!", 
			"I want to express my appreciation for your generosity in support of [name of cause here]. Your personal commitment was incredibly helpful and allowed us to reach our goal. Your assistance means so much to me but even more to [name of cause here]. Thank you from all of us.", 
			"success"
			);
	});
	$('#check').click(function(){
		swal(
			"Safe Link", 
			"You can visit this Page", 
			"success"
			);
	});
	$('#feedbackButton').click(function(){
		swal(
			"Thank You", 
			"For Your Valuable Feedback ", 
			"success"
			);
	});


});

