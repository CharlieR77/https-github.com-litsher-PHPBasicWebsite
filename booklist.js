$(document).ready(function()
	{
	$("#contentArea").hide();
		$( ".button" ).click(function() {
		$( "div#left" ).hide( "slide", { direction: "left" }, 2500 );
		$( "div#right" ).hide( "slide", { direction: "right" }, 2500 );
		$(".button").hide("slide", { direction: "down" }, 2500,function(){
		$("#contentArea").show("slide", { direction: "down" }, 2500 );
		});
		
		
		});
	});

