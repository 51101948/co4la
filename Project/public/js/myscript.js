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