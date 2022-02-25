<!Doctype html>
<html lang="en">
<head>
  <meta charseta="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Bloodbank</title>
</head>
        <body>
        <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="https://www.vumc.org/pmi/sites/vumc.org.pmi/files/public_files/Files/Blood%20Bank%20Transfusion%20Medicine.JPG" height="50"width="50">
            <span class="ml-3 text-xl" style="font-size: 200%">Aman Bloodbank centre</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="website1.html" class="mr-5 hover:text-gray-900">Home</a>&nbsp &nbsp &nbsp 
            <a href="contact.html"><a class="mr-5 hover:text-gray-900">Contact</a>
          </nav>
            
          </button>
        </div>
      </header>
      <style>
        body {
            text-align: center;
        }
    </style>
    <br>
    <br>
    <br>
   </body>
</html>
<?php
	$sername="localhost";
  $uname="root";
  $pass="";
  $db="donator";
	// Database connection
	$conn =mysqli_connect($sername,$uname,$pass,$db);
	if(isset($_POST['Submit']))
    {
        if(!empty($_POST['email']) &&!empty($_POST['name']) && !empty($_POST['mobno']) && !empty($_POST['bloodgroup']))
        { 
          $email = $_POST['email'];
	        $name = $_POST['name'];
	        $mobno = $_POST['mobno'];
	        $bloodgroup = $_POST['bloodgroup'];
            
          $query="insert into donate(email, name, mobno, bloodgroup) values('$email','$name','$mobno','$bloodgroup')";
		      $run=mysqli_query($conn,$query);
        
            if($run)
            {
                echo "Form Submitted";
            }
            else
            {
                echo"not submitted";
            }
        }
    }     
    else
    {
        echo "all fields required";
	}
?>

     

