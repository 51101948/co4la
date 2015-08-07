function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
  return true;
}

function calTotal(){
	var Quan = parseInt($("#quantity").val());
	var itemPrice = parseInt($("#item-price").text());
	if (!jQuery.isNumeric(Quan)){
		$("#total").text("");
	}
	else {
		var total = Quan * itemPrice;
		$("#total").text(total);
	}
}

/*$(".show-message").show().delay(5000).fadeOut();*/

setTimeout(function() {
  $(".show-message").fadeOut().empty();
}, 2000);

/*$(".main").find('img').each(function(){
	$(this).height($(this).width()*1.5);
});*/

/*order-info*/

$(document).ready(function(){
	$(".main").find('.order-info-min').each(function(){
		$(this).css("background", "linear-gradient(rgba(188, 225, 188, 0.35), rgba(187, 225, 179, 1)/*, rgba(7, 59, 7, 0.8)*/)");
		$(this).css("color", "green");
		$(this).css("border-radius", "10px");
		$(this).css("box-shadow", "1px 2px 2px #ccccd7");
	});
	$(".main").find('.read').each(function(){
		$(this).css("background", "rgba(54, 168, 29, 0.1)");
		$(this).css("color", "green");
		$(this).css("border-radius", "10px");
		$(this).css("box-shadow", "1px 2px 2px #ccccd7");
	});
});

function minHeight(){
	var footer = $("body").find('.footer');
	var img = $("body").find('.img-cover');
	var nav = $("body").find('.nav-bar-content');
	var maxHeight = $(window).height();
	var subHeight = footer.height()+img.height()+nav.height();
	if ($(document).height() > maxHeight) {
		maxHeight = $(document).height();
		subHeight = subHeight*2;
	};
	var mainHeight = maxHeight-subHeight;
	return mainHeight;
}

$(document).ready(function(){
	$(".contents").find(".main").each(function(){
		var footer = $("body").find('.footer');
		var img = $("body").find('.img-cover');
		var nav = $("body").find('.nav-bar-content');
		var maxHeight = $(window).height();
		var subHeight = footer.height()+img.height()+nav.height();
		if ($(document).height() > maxHeight) {
			maxHeight = $(document).height();
			subHeight = subHeight*2;
		};
		var mainHeight = maxHeight-subHeight;
		var result = mainHeight.toString() + "px";
		$(this).css("min-height", result);
	});
	$(".main").find('.product-info').each(function(){
		$(this).css("background-color", "rgba(157, 240, 157, 0.5)");
		var img = $(this).find('img');
		img.css("width", "100%");
		var img_div = $(this).find('div.product-img');
		var info_span = $(this).find('span.one-line');
		info_span.each(function(){
			$(this).css("margin-bottom", "3px")
		});
		img.height(img.width());
		img_div.height(img.height());
		var height = img_div.height()+2*info_span.height()+8;
		var minH = height.toString() + "px";
		$(this).css("min-height", minH);
	});
	$(window).resize(function(){
		$(".contents").find(".main").each(function(){
			var footer = $("body").find('.footer');
			var img = $("body").find('.img-cover');
			var nav = $("body").find('.nav-bar-content');
			var maxHeight = $(window).height();
			var subHeight = footer.height()+img.height()+nav.height();
			if ($(document).height() > maxHeight) {
				maxHeight = $(document).height();
				subHeight = subHeight*2;
			};
			var mainHeight = maxHeight-subHeight;
			var result = mainHeight.toString() + "px";
			$(this).css("min-height", result);
		});
		$(".main").find('.product-info').each(function(){
			var img = $(this).find('img');
			img.css("width", "100%");
			var img_div = $(this).find('div.product-img');
			var info_span = $(this).find('span.one-line');
			info_span.each(function(){
				$(this).css("margin-bottom", "3px")
			});
			img.height(img.width());
			img_div.height(img.height());
			var height = img_div.height()+2*info_span.height()+8;
			var minH = height.toString() + "px";
			/*$(this).height(img_div.height()+2*info_span.height()+8);*/
			$(this).css("min-height", minH);
			$(this).css("background-color", "rgba(157, 240, 157, 0.5)");
			/*$(this).css("padding-bottom", "5px");*/
		});
	});
});

/*$(".main").find('.product-info').each(function(){
	var oldH = $(this).height();
	var img = $(this).find('img');
	var img_div = $(this).find('div.product-img');
	var info_div = $(this).find('span.one-line');
	img.height(img.width());
	img_div.height(img.height());
	$(this).height(img_div.height()+2*info_div.height());
	alert("oldH: "+oldH+" newH: "+$(this).height());
});*/