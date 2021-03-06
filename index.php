<!DOCTYPE html>
<html>
<head>
	<title>Toggle/Invert Selection Checkboxes/Radio Buttons</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<!-- This script can easily be moved to its own file. I left it here for simplicity -->
	<script>
		//All 3 functions take in the HTML name attribute of a certain group of input elements & performs the action (select all, none, invert) ONLY ON THAT GROUP

		//Select all items in a group when given the HTML name attribute of some input elements in a group
		function selectAll(nameGroupToToggle){
			var inputs=$("input[name='"+nameGroupToToggle+"']");	//array of inputs with the "name" attribute matching "nameGroupToToggle", the argument passed in
			$.each(inputs, function(index){			//iterate over each item in "inputs" array
				var element=$(inputs[index]);		//get HTML object of each input element in the array
				element.prop("checked", true);		//Adds the property to all inputs. Doesn't matter if it's already true, changes the value to true anyway (redundant but not harmful)
			});
		}

		//Same structure as "selectAll()" but it changes the "checked" property to "false" to unselect each item
		function selectNone(nameGroupToToggle){
			var inputs=$("input[name='"+nameGroupToToggle+"']");
			$.each(inputs, function(index){	
				var element=$(inputs[index]);	
				element.prop("checked", false);		//deselect the item
			});
		}

		//iterate through an array of input elements & negate the "checked" property
		function invert(nameGroupToToggle){
			var inputs=$("input[name='"+nameGroupToToggle+"']");		//array of inputs with the "name" attribute matching "nameGroupToToggle", the argument passed in
			$.each(inputs, function(index){		//iterate over each item in "inputs" array
				var element=$(inputs[index]);	//get HTML object of each input element in the array

				var currentlySelected=element.prop("checked");	//get true/false if it's currently selected or not
				//MOST IMPORTANT LINE
				element.prop("checked", !currentlySelected);	//set the new property to be the NEGATION of its previous state (true==>false & false==>true)
			});
		}
	</script>
</head>
<body>
	<h1><a href='https://github.com/SleekPanther/checkbox-toggle-selection'>Checkbox Toggle Selection PHP</a></h1>
	<p>Demo of invert(), selectAll() & selectNone() functions for checkboxes & radio buttons</p>

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