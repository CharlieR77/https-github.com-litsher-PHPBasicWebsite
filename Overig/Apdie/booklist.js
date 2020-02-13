$(document).ready(function()
	{
		$( ".button" ).click(function() {
		$( "div#left" ).hide( "slide", { direction: "left" }, 1000 );
		$( "div#right" ).hide( "slide", { direction: "right" }, 1000 );
		$(".button").remove();
		});
	});

