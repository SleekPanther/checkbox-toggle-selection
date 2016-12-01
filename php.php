<!DOCTYPE html>
<html>
<head>
	<title>Invert Selection</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script>
		

	//http://stackoverflow.com/questions/18439468/why-is-jquery-is-not-checking-unchecking-checkbox
		function invert(nameToInvert){
			// alert(nameToInvert);
			var a=$( "input[name='"+nameToInvert+"']" );	//array of checkboxes with name=input parameter
			// console.log($(a[3]).val());
			$.each(a, function(i){	//iterate over each item in array (i somehow starts @ 0 & increments correctly)
				var item=$(a[i]);	//get element by name or something, returns html object
				// console.log($(a[i]).val());
				if(item.attr('checked') || item.is(':checked')){	//might not need the extra test
					console.log(item.val()+ ' new test');
					item.prop("checked", false);
					// item.removeAttr('checked');
				}
				// if(item.is(':checked')){	//if currently checked, remove attribute
				// 	console.log(item.val());
				// 	item.removeAttr('checked');
				// }
				else{	//else add attricute back (looks like duplicate for "('checked','checked')" but this yields checked="checked" in the final html. Adds attribute & adds value to attribute)
					console.log(item.val()+' not currently checked');
					item.prop("checked", true);
					// item.attr('checked','checked');
				}
			});
		}

		// function set(n) {
		// 	temp = document.form1.elements.length ;
		// 	alert(document.form1.elements.length);
		// 	for (i=0; i < temp; i++) {
		// 		document.form1.elements[i].checked=n;
		// 	}
		// }

		// function Invers(){
		// 	temp = document.form1.elements.length ;
		// 	for (i=0; i < temp; i++){
		// 		if(document.form1.elements[i].checked == 1){document.form1.elements[i].checked = 0;}
		// 		else {document.form1.elements[i].checked = 1}
		// 	}
		// }

	</script>
</head>
<body>

	<?php 
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	?>

	<form method="post" action='php.php'> 
		<input type='checkbox' name='chkBoxes[]' value='1'>
		<input type='checkbox' name='chkBoxes[]' value='2'>
		<input type='checkbox' name='chkBoxes[]' value='3'>
		<input type='checkbox' name='chkBoxes[]' value='4'>
		<input type="button" name="button" onclick="Invers()" value=" Invert original">
		<input type="button" name="button" onclick="set(0)" value=" Reset 0">
		
		<br>
		<input type="button" name="btnAll" onclick="all('chkBoxes[]')" value="All">
		<input type="button" name="btnNone" onclick="none('chkBoxes[]')" value="None">
		<input type="button" name="btnInvert" onclick="invert('chkBoxes[]')" value="Invert">

		<input type="submit" value='Submit' name='btnSubmit'>
	</form>
	<p>Click on this paragraph.</p>

</body>
</html>