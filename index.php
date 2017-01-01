
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quantox Technology</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Validator" />
<meta name="Nikola Tomic" content="nzmtom@yahoo.com" />


<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<script src="js/jquery.min.js"></script>
	

</head>

<script>
$(document).ready(function() {
	
	//if submit button is clicked
	$('#submit').click(function () {		
		
		//Get the data from all the fields
		var name = $('input[name=name]');
		var email = $('input[name=email]');

		//Simple validation to make sure user entered something
		//If error found, add hightlight class to the text field
		if (name.val()=='') {
			name.addClass('hightlight');
			return false;
		} else name.removeClass('hightlight');
		
		if (email.val()=='') {
			email.addClass('hightlight');
			return false;
		} else email.removeClass('hightlight');
		
	
		
		//organize the data properly
		var data = 'name=' + name.val() + '&email=' + email.val();
		
		//keep all the answers
		$('.text').attr('disabled','field');
		
		//show the loading sign
		//	window.open("file:///D:/ZADATAKQU/zadatak3.php","_self");
		window.open("file:///D:/ZADATAKQU/zadatak2.php","_self");
		//start the ajax
		$.ajax({
			// processes the data and send mail
			url: "survey.quantox.tech/frontend",	
			
			//GET method 
			type: "GET",

			//pass the data			
			data: data,		
			
			// cache the page
			cache: true,
			
			//success
			success: function (html) {				
				//if index.php returned 1/true (send mail success)
				if (html==1) {					
					window.open("file:///D:/ZADATAKQU/zadatak4.php","_self");
					
				//if index.php returned 0/false (send mail failed)
				} else 
                    window.open("file:///D:/ZADATAKQU/zadatak5.php","_self");					
			}		
		});
		
		//cancel the submit button default behaviours
		return false;
	});	
});	
</script>

<section>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
	        <div class="container">
			    <div class="col-lg-4 col-md-4 col-sm-4">
	            <div class="">
			        <img class="img-responsive" alt="left" src="file:///D:/ZADATAKQU/img/leftimg.jpg"> </img>
		        </div>
	        </div>
			<br>
	        <div class="container">
		        <div class="row">
			        <div class="col-lg-8 col-md-8 col-sm-8">
                        <form  class="form" method="post" action="file:///D:/ZADATAKQU/zadatak2.php">
					        <div class="row">
						        <div class="col-lg-7">
							        <div class="element">
						
								<label>FIRST NAME</label>
								<input type="text" name="name"  class="form-control input-md">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="element">
								 <label>LAST NAME</label>
								<input type="text" name="last_name"  class="form-control input-md">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="element">
							   
								<label>TITLE</label>
								<input type="text" name="last_name"  class="form-control input-md">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="element">
							   
								<label>Email</label>
								<input type="text" name="email"  class="form-control input-md" >
							</div>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
							    <p>Pick your skills level</p>
				
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<input type="submit" name="submit" value="NEXT" id="submit" class="btn btn-theme btn-block btn-md" tabindex="7">
								
						</div>
					</div>
			
	</div>

			</div>
		</div>
	</div>
</div>
		</div>
	</div>	
</section>

</html>