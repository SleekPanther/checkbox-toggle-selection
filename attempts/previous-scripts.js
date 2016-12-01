//updates the html to always add & subtract the checked attribute
//needed so that inverse actually has something to remove or add
//turns out this works, but is kind of unnecessary

$(document).ready(function(){
	$("input[type='checkbox']").click(function(){
		//alert(0);
		if ( ($(this).is(':checked')) ) {
			console.log($(this).val() + ' is now checked');
			// alert('not');
			$(this).attr('checked','checked');
		} else {
			console.log($(this).val() + ' is now unchecked');
			$(this).removeAttr('checked');
		}
	});
});

//old examples NOT using jQuery. http://www.itechies.net/tutorials/jscript/jsexample.php-pid-check-invert.htm
function set(n) {
	temp = document.form1.elements.length ;
	alert(document.form1.elements.length);
	for (i=0; i < temp; i++) {
		document.form1.elements[i].checked=n;
	}
}

function Invers(){
	temp = document.form1.elements.length ;
	for (i=0; i < temp; i++){
		if(document.form1.elements[i].checked == 1){document.form1.elements[i].checked = 0;}
		else {document.form1.elements[i].checked = 1}
	}
}