<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Demo Website</title>
</head>
<style type="text/css">

    body{
        margin: 0px;
        padding: 0px;
        font-family: 'Carattere', cursive;
    }

    #navbar{
        background-color: lightgray;
        height: 80px;

    }

    h2{
        display: inline-block ;
        color: darkblue;
        font-size: 23px;
        margin-left: 10px;
        margin-top: 2px;
      }

    ul{
        display: inline;
        color: black;
        font-size: 20px;
        margin-top: -1px;
        float: right;

      }


    li{
        display: inline;
        color: black;
        font-size: 20px;
        margin-right: 20px;
        margin-top: -1px;
      }

    #bg{
        height: 300px;
        background-color: #e2e2e2;
        background-image: url(websiteimage.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-position: center;
       }




    body{
     	background-color: #76B6C9 ;
     	
        }
    h1{
    	font-size: 50px;
    }

    h3{
    	font-size: 30px;
    }

    body{
    	margin: 0px;
    	padding: 0px;
    	font-family: 'Carattere', cursive;
    }

    #text{
        font-family:Verdana ;
        margin: 20px;
        padding: 10px;
        color: black;
    }
    
    #container{
        background-color: darkgray;
        max-width: 700px;
        margin: auto;
        margin-bottom: 100px;
    }



    input[type=reset]{
        background-color: lightgreen;
        font-size: 20px;
        color: black;
        height: 30px;
        cursor: pointer;

    }

    #size{
        font-size: 20px;
        max-height: 50px;
        background-color: floralwhite;
    }

    input{
        width: 100%;
        height: 25px;
        margin-top: 5px;
        margin-bottom: 20px;
    }
    input[type=submit]{
        background-color: lightseagreen;
        font-size: 20px;
        color: black;
        height: 30px;
        cursor: pointer;




	
</style>
<body>
    <div id="navbar">
        
        <h2>TATA Consultancy Services</h2>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
     </div>

     <div id="bg">
        
     </div>


	<h1 style="text-align: center;color:black;font-family:Times ;">Demo Website</h1>

    <div id="text">
        <p><b>Tata Consultancy Services</b> is an Indian multinational information technology services and consulting company headquartered in Mumbai, Maharashtra, India with its largest campus located in Chennai, Tamil Nadu, India. As of February 2021, TCS is the largest IT services company in the world by market capitalisation.</p>
    </div>


	<h3 style="text-align: center;color: darkblue;">Candidate Credentials</h3>

    <div id="container">


      <form action="candidate_registration.php" method="POST">
      	<fieldset>
      		<legend>Candidate Details</legend>
      		<label>Names of Employee</label><br>
           <select name="user_name" id="user_name">
           	<option>select</option> 
           	<option>Amit Kumar</option>
           	<option>Rohit Pal</option>
           	<option>Rima Ghosh</option>
           	<option>Rahul Sen</option>
           	<option>Anup Das</option>
           	<option>Shreya Sen</option>
           	<option>Ankita Roy</option>
           	<option>Ishan Sen</option>
           	<option>Sohini Ghosh</option>
           	<option>Sruti Dutta</option>
           	<option>Rohan Singh</option>
           	<option>Soham Kumar</option>
           	<option>Madhu Roy</option>
           </select><br><br><br>

	        <label>Gender</label><br>
	        <input type="radio" name="user_gender" id="user_gender">Male<br>
	        <input type="radio" name="user_gender" id="user_gender">Female<br>
	        <input type="radio" name="user_gender" id="user_gender">Others<br><br>

	        <label>Age</label><br>
            <input type="number" name="user_age" id="user_age"><br><br>

            <label>DOB</label><br>
            <input type="date" name="user_dob" id="user_dob"><br><br>

            <label>E-mail Id</label><br>
            <input type="email" name="user_email" id="user_email"><br><br>

      	</fieldset>


    </div>
    <h3 style="text-align: center;color: darkblue;">Work Details for Candidates</h3> 

    <div id="container"> 	   


        <fieldset>
           	   <legend>Work-Details</legend>
           	   <label>Choose your Workfield</label><br>
               <input type="text" name="user_work"><br><br>
               <input type="submit" name="Submit" id="Submit" value="   Click here for candidate registration"><br>
               

        </fieldset>

          <p id="size">
          	<a href="submission.php">Click Here</a> to go to <b>Next Page</b> for file submission
          </p><br>
           
           <input type="reset" name="" value="Reset Here"><br>
      </form>

    </div>
   
</body>
</html>