<script>
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
</script>