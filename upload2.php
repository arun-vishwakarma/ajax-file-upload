<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){		
		 /*$('form').on('submit', function(e){			
			  e.preventDefault();			
		  });*/		
		$("#upload").click(function(e){
			e.preventDefault();
			$("#avatar").click();
			
		});	
	});
	
	$(document).on("change", "#avatar", function() {
		
		console.log($('#frm'));
		
		//return false;
		
		var form_data = new FormData($('#frm')[0]);    
		
		console.log(form_data);
		
		$.ajax({
			url: "upload_avatar.php",
			//dataType: 'script',
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         //Setting the data attribute of ajax with file_data
			type: 'post',
			success:function(resp){
				alert(resp);
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
<form method="post" id="frm" name="myform">
	<div id="show-img"></div>
	<input id="uname" type="test" value="akv" name="uname"/>
	<input id="avatar" type="file" name="avatar"/>
	<button id="upload">Upload</button>
</form>
</body>
</html> 