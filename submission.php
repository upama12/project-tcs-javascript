<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Work Submission</title>
	<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</head>

<script type="text/javascript">

	
$(document).ready(function(){

        var submission ;


		// detect the click of the button
        $('#btn').click(function(){

        	submission = $('#user_input').val();

        	if(submission !=0){
        		alert('File submission successful');
        	}else{
        		alert('Some error occured');
        	}
        	
        })
		
	});

	

</script>

<style type="text/css">

    #navbar{
        background-color: floralwhite;
        height: 70px;
    }

    h2{
        display: inline-block ;
        color: darkblue;
        font-size: 23px;
        margin-left: 10px;
        margin-top: 2px;
      }
	
	body{
		background-color: #B0C4E9 ;
		
	}

	.container{
		background-color: white;
		max-width: 300px;
		margin: auto;
		margin-top: 80px;
		margin-bottom: 100px;
		padding: 10px;

	}

	input{
		width: 100%;
		height: 25px;
		margin-top: 5px;
		margin-bottom: 20px;
	}

	#size{
    	font-size: 25px;
    }

    input[type=submit]{
        background-color: lightblue;
        color: black;
        height: 30px;
        cursor:pointer ;

    }

</style>
<body>

	 <div id="navbar">
        
        <h2>TATA Consultancy Services</h2>
        
     </div>
	<div class="container">
		  
			<form>

				<h2>Submit Your File Here</h2><br>
				<label>Name of Candidate</label><br>
				<input type="text" name=""><br><br>

				<label>File Submission</label><br>
                <input type="file" name="" id="user_input"><br><br>

			
				<input type="submit" name="" value="Submit" id="btn" >
			</form>
		</div>
	</div>


	<p id="size">
		<a href="index.php">Click here<a/> to go home page
	</p>   

</body>
</html>
