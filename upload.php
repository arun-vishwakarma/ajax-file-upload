<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#upload").click(function(){
			$("#avatar").click();
		});	
	});
	
	$(document).on("change", "#avatar", function(e) {
		
		console.log('using event ',e.target.files[0]);  //i.e e.target.files[0] or $("#avatar").prop("files")[0] both are same		
		
		var file_data = $("#avatar").prop("files")[0];    // Getting the properties of file from file field
		console.log(file_data);
		var form_data = new FormData();                   // Creating object of FormData class
		form_data.append("filedata", file_data);              // Appending parameter named file with properties of file_field to form_data
		form_data.append("user_id", 123);                 // Adding extra parameters to form_data
		$.ajax({
			url: "upload_avatar.php",
			//dataType: 'script',
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         //Setting the data attribute of ajax with file_data
			type: 'post',
			success:function(resp){
				//alert(resp);
				//console.log(resp); 
				var showImg = '<img height="100" width="100" src="'+resp+'"/>';
				$('#show-img').html(showImg);
				
			}
	    });
	});
</script>
<style>
#avatar {
  /*opacity:0;
  position:absolute;
  left: 0;
  top: 0;*/
  display:none;
}
</style>
</head>
<body>
	<div id="show-img"></div>
	<input id="avatar" type="file" name="avatar"/>
	<button id="upload">Upload</button>
</body>
</html> 
