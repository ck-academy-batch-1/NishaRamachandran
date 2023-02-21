<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<title>Auto-Suggest Dropdown</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#district").change(function(){
				var district = $(this).val();
				
				$.ajax({
					type: "POST",
					url: "get_villages.php",
					data: { district: district },
					dataType: "json",
					success: function(data){
						
						$("#Taluk").empty();
						
						$.each(data, function(index, Taluk){
							$("#Taluk").append('<option value="' + Taluk + '">' + Taluk + '</option>');
						});
					}
				});
			});

		
			$("#villages").change(function(){
				var village = $(this).val();
				alert("You selected" + village);
			});
		});
	</script>
</head>
<body style="background-color:grey;background-position:center cente">
	<center>
	<h3>Select your District And Taluk </h3>
	<div class="form-group form-check col-sm-3" >
	<label class="form-check-label" for="district" >Select District:</label>
	<select id="district" class="form-control">
		<option value="madurai">Madurai</option>
		<option value="ramanadhapuram">Ramanadhapuram</option>
	</select>
	<br><br>
	<label class="form-check-label" for="Taluk" >Select Taluk:</label>
	<select id="Taluk" class="form-control">
		<option>Select a district first</option>
	</select>
	</div>
	</center>
</body>
</html>
