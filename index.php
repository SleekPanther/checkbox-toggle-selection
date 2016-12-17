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
	<h1><a href='https://github.com/SleekPanther/checkbox-toggle-selection'>Checkbox Toggle Selection</a></h1>
	<p>PHP demo of invert, select all & none methods for checkboxes & radio buttons <br><a href='html.html'>View plain html version</a></p>

	<?php
	//display form data submitted to itself
	//remove these lines when done testing
	echo '<pre>$_POST Array form data (for debugging)'."<br>";
	print_r($_POST);
	echo "</pre>";
	?>

	<form method="post" action='index.php'>
		<h3>Checkboxes</h3>
		<?php
		//use a loop to print checkboxes in the same group
		//data for the "value" attribute could come from a database & iterate for as many records exist
		//If the value needs to be different from the label, then create a separate array for labels, or use a 2D array hold both label & value
		$valuesArray=array(1,2,3,4);
		foreach($valuesArray as $value){
			echo "\t\t<label for='chk".$value."'>".$value."</label>\n";
			echo "\t\t<input type='checkbox' id='chk".$value."' name='chkBoxes[]' value='".$value."'>\n";
		}
		?>
		
		<br>
		<input type="button" name="btnAll" onclick="selectAll('chkBoxes[]')" value="Select All">
		<input type="button" name="btnNone" onclick="selectNone('chkBoxes[]')" value="None">
		<input type="button" name="btnInvert" onclick="invert('chkBoxes[]')" value="Invert">

		
		<br><br>
		<h3>Radio Buttons</h3>
		<input type='radio' name='radRadios' id='radRadiosYes' value='Yes'>
		<label for='radRadiosYes'>Yes</label><br>
		<input type='radio' name='radRadios' id='radRadiosNo' value='No'>
		<label for='radRadiosNo'>No</label><br>
		<input type='radio' name='radRadios' id='radRadiosMaybe' value='Maybe'>
		<label for='radRadiosMaybe'>Maybe</label><br>
		<input type="button" name="btnNoneRad" onclick="selectNone('radRadios')" value="Deselect">

		<br><br><br>
		<input type="submit" value='Submit Form' name='btnSubmit'>
	</form>
</body>
</html>