  	$(document).ready(function(){
  		$(".slide").slick({
          slidesToShow: 1,
	  autoplay:true
          

  		});
	  	$("#reg").click(function(){
		console.log("work");
		$(".mod-1").hide();
		$(".mod-2").show();
		})
		$("#log").click(function(){
		console.log("work");
		$(".mod-2").hide();
		$(".mod-1").show();
		})
    });

