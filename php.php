<!DOCTYPE html>
<html>
<head>
	<title>Invert Selection</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script>
		//add property to all inputs, doesn't care if it already exists
		function selectAll(nameToInvert){
			var inputs=$( "input[name='"+nameToInvert+"']" );	//array of inputs with name==(input parameter)
			$.each(inputs, function(index){		//iterate over each item in array
				var item=$(inputs[index]);		//get element by name or something, returns html object
				// console.log(item.val());
				item.prop("checked", true);
			});
		}

		function selectNone(nameToInvert){
			var inputs=$( "input[name='"+nameToInvert+"']" );	//array of inputs with name==(input parameter)
			$.each(inputs, function(index){		//iterate over each item in array
				var item=$(inputs[index]);		//get html object
				// console.log(item.val());
				item.prop("checked", false);
			});
		}

		function invert(nameToInvert){
			// alert(nameToInvert);
			var inputs=$( "input[name='"+nameToInvert+"']" );	//array of inputs with name==(input parameter)
			// console.log($(inputs[3]).val());
			$.each(inputs, function(index){	//iterate over each item in array (i somehow starts @ 0 & increments correctly)
				var item=$(inputs[index]);	//get element by name or something, returns html object
				// console.log($(inputs[index]).val());
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
	</script>
</head>
<body>

	<?php 
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	?>

	<form method="post" action='php.php'> 
		<p>Checkboxes</p>
		<input type='checkbox' name='chkBoxes[]' value='1'>
		<input type='checkbox' name='chkBoxes[]' value='2'>
		<input type='checkbox' name='chkBoxes[]' value='3'>
		<input type='checkbox' name='chkBoxes[]' value='4'>
		
		<br>
		<input type="button" name="btnAll" onclick="selectAll('chkBoxes[]')" value="All">
		<input type="button" name="btnNone" onclick="selectNone('chkBoxes[]')" value="None">
		<input type="button" name="btnInvert" onclick="invert('chkBoxes[]')" value="Invert">


		<p>Radio Buttons</p>
		<input type='radio' name='radRadios' value='1'>
		<input type='radio' name='radRadios' value='2'>
		<input type="button" name="btnNone" onclick="selectNone('radRadios')" value="None">

		<br>
		<input type="submit" value='Submit' name='btnSubmit'>
	</form>
	<p>Click on this paragraph.</p>

</body>
</html>