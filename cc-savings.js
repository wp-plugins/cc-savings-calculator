var $J = jQuery.noConflict();


$J( document ).ready(function() {
	// runtime events
	
	$J("#deposit").keydown(function(event) {
		if(!(isIntegerKey(event))) event.preventDefault();
		
	});	

	$J("#term").keydown(function(event) {
		if(!(isIntegerKey(event))) event.preventDefault();
		
	});	

	$J("#rate").keydown(function(event) {
		//if(!(isIntegerKey(event))) event.preventDefault();
        if(!(isDecimalKey(event,$J('#rate').val()))) event.preventDefault();
		
	});	
	
	$J("#deposit").keyup(function( ) {
		calculate();
	});
	$J("#term").keyup(function( ) {
		calculate();
	});
	$J("#rate").keyup(function( ) {
		calculate();
	});

});

function calculate()
{
	var deposit = $J('#deposit').val(),
		term = $J('#term').val(),
		rate = $J('#rate').val();
	
	// if no data entered
	if (isNaN(deposit)) return;
	if (isNaN(term)) return;
	if (isNaN(rate)) return;
	
	var interestEarned = 0;
	interestEarned = round2TwoDecimals(deposit * rate/100 * term);
	$J('#interest').html('$' + interestEarned.toString());
	   
};


function isIntegerKey(evt)	  
      {
         var key = evt.which || evt.which || event.keyCode;
		 // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
		 var isInteger = (key == 8 || 
                key == 9 ||
                key == 46 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
		return isInteger;
				
      };
	  
function isDecimalKey(e, number)
      {
         var key = (e.which) ? e.which : e.keyCode;
		 // numbers (48-57 and 96-105), dot (110,190), comma (44,188), backspace(8), tab (9), navigation keys (35-40), DEL(46)
		 if ((key >= 48 && key <= 57) || (key >= 96 && key <= 105) || key == 110 || key == 190 || key == 8 || key == 9 || (35 <= key && key <= 40) || key == 46 )  
		 	{
			 		  if (key == 110 || key == 190)
					  {
					   	 // skip it if comma or decimal point already entered or it is empty field yet
						 if (number.indexOf(".") > -1 || number.indexOf(",") > -1 || number.length == 0) 
						 	return false; 
					  }
			          return true;
			}

         return false;
      };

function radioValue(element)	  
		 {
		    var returnValue = "";
            var radios = document.getElementsByName(element);
            
            for (var i = 0, length = radios.length; i < length; i++) {
                if (radios[i].checked) {
                    returnValue = radios[i].value;
                }
			}
			return returnValue;	
		 };	  	
function round2TwoDecimals(number)
		 {
 		    return Math.round(number*100)/100						 
		 };	
 
