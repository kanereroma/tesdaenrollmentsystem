<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Registration</title>
	<link rel="stylesheet" href="./stylesheets/style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
	<script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
	<script src="./javascript/jquery.ph-locations.js"></script>
	<script src="./javascript/jquery.min.js"></script>
</head> 
<body>

<nav>
                <div class="logo" >
                    <img src="./image/tesdalogo.png" alt="tesda logo" />
                    <h1>TESDA</h1>
                </div>
            <ul className="navbar-ul">
            
                    <li>Home</li>     
                    <li>NCII</li>       
                    <li>Heirarchy</li>          
                    <li>About us</li> 

            </ul>
        </nav>

	<div><h2>Registration Form.</h2></div>
	<form action='register.php' method='POST'>
		
		<input type='text' name='complete_name' id="complete_name" placeholder="complete name"  required/><br/>
       
		<input type='number' name='age' id="age" placeholder="age" required/><br/>
 

<!-- Trigger/Open The Modal -->
<button id="myBtn">Complete Address</button>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->

  <div class="modal-content">
    <span class="close">&times;</span>
  
	<div>
            <table>
                <tr>
                    <td>Region</td>
                    <td><select id="region"></select></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><select id="province"></select></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><select id="city"></select></td>
                </tr>
                <tr>
                    <td>Barangay</td>
                    <td><select id="barangay"></select></td>
                </tr>
            </table>
				<input type="submit" name="submit-adress" id="submit-adress">

        </div>

  </div>
	
</div>

<!-- modal -->
	<link rel="stylesheet" href="./stylesheets/modal-bootstrap.min.css">
	<script src="./javascript/modal-bootstrap.min.js"></script>
</body>
<script src="./javascript/address.js"></script>
            
			
			<br/>
		
		<!-- <input type='date' name='date_of_birth' id="date_of_birth" placeholder="birthdate" required/><br/> -->
		
		<input type='text' name='birthplace' id="birthplace" placeholder="birthplace" required/><br/>
		<input type='text' name='educational_attainment' id="educational_attainment" placeholder="educational attainment" required/><br/>	
		<input type='text' name='contact' id="contact" placeholder="contact no" required/><br/>
		<input type='text' name='course' id="course" placeholder="course" required/><br/>
		<input type='submit' name='sentForm' id="sentForm" />
	</form>

	
</div>
</body>


</html>
