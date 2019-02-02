<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8"?
		<title>Ajax Post-Get</title>

		<!-- Link Stylesheets -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body>
	<div class="container" style="margin-top:50px;">
		<form>
			<div class="form-group">
				<input type="text" id="name" class="form-control" placeholder="Enter Name...">
			</div>
				<button type="button" class="btn btn-success" id="btn">Enter</button>	
		</form>

		<div class="msg"></div>

	</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
// Load Jquery Function onLoad
$(document).ready(function(){
	$("#btn").click(function(){
		var name = $("#name").val();
		//Ajax Post/Get Format -- $.post/get("[request url]", {[data]} , function(){},

		//post -> $.post("ajax.php", {ajax_name:name}, function(response) {
		/*$.get("ajax.php", {ajax_name:name}, function(response) {
		$(".msg").html(response);
	})
		.fail(function(error) {
			alert(error.statusText);
		}) */

		$.ajax({
			type : 'POST',
			url : 'ajax.php',
			data : {ajax_name:name},
			success: function(response){
				$(".msg").html(response);
			}
		})
		.fail(function(error){
			alert(error.statusText)
		})
	})
})


</script>	
</body>
</html>