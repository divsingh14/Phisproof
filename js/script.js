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
});

