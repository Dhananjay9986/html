<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK SHOP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    
    <nav class="navbar">
        <ul class="nav">
            <li class="fa fa-home" style="font-size:30px;color:white" >
                Home
                <ul class="dropdown">
                
                </ul>
            </li>
            <li class="fa fa-address-book" style="font-size:30px;color:white">
                About us
                <ul class="dropdown">
                    <li class='fas fa-user-edit' style='font-size:20px;color:red;padding-top: 10px'>ADMIN</li>
                    <li class='fas fa-user-alt' style='font-size:20px;color:red;padding-right: 35px;padding-top: 10px'>USER</li>
                    
                    
                </ul>			
            </li>
            <li class='fas fa-book' style='font-size:30px;color:white'>
                BOOKS
                <ul class="dropdown">
                    <li class='fas fa-atom' style='font-size:20px;color:hsl(281, 0%, 0%)'>TECHNICAL</li>
                    <li class='fas fa-burn' style='font-size:20px;color:hsl(281, 0%, 0%);padding-right:30px;padding-top: 10px'>ETHICAL</li>
                    <li class='fas fa-dove' style='font-size:20px;color:hsl(281, 0%, 0%);padding-top: 10px;padding-right:19px'>RELIGIOUS</li>
                    <li class='fas fa-user-astronaut' style='font-size:20px;color:hsl(281, 0%, 0%);padding-top: 10px;padding-right: 50px'>COSMOS</li>
                    <li class='fas fa-biohazard' style='font-size:20px;color:hsl(281, 0%, 0%);padding-right: 50px;padding-top: 10px'>SCIENCE</li>
                </ul>			
            </li>
            <li class='fas fa-brain' style='font-size:30px;color:white'>
                ENRICHMENT 
                <ul class="dropdown">
                    <li class="fa fa-rupee" style="font-size:20px;color:red;padding-top: 10px">INDIAN</li>
                    <li class="fa fa-globe" style="font-size:20px;color:black;padding-top: 10px">GLOBAL</li>
                </ul>			
            </li>
            <li class='fas fa-assistive-listening-systems' style='font-size:30px; color:white'>
                Contact
                <ul class="dropdown">
                    <li class="fa fa-address-card" id="add" style="font-size:20px;color:brown;padding-top: 10px">address</li>

                    <li class="fa fa-mobile-phone" id="mob" style="font-size:20px;color:black;padding-right:70px;padding-top: 10px">Mob</li>

                    <li class="fa fa-envelope" id="email" style="font-size:20px;color:red;padding-right: 50px;padding-top: 10px">email</li>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <li class="fa fa-whatsapp" id="whatt" style="font-size:20px;color:green;padding-top: 10px">whattsup</li>
                    
                </ul>					
            </li>
        </ul>
    </nav>	
    

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
	
	// Loop through each nav item
	$('nav.navbar').children('ul.nav').children('li').each(function(indexCount){
		
		// loop through each dropdown, count children and apply a animation delay based on their index value
		$(this).children('ul.dropdown').children('li').each(function(index){
			
			// Turn the index value into a reasonable animation delay
			var delay = 0.1 + index*0.03;
			
			// Apply the animation delay
			$(this).css("animation-delay", delay + "s")			
		});
	});
});

</script>

<div class="abc">
    <div class="book1">
        <div class="cover">
            <h2> book<span>Mockup</span></h2>
            <span class="writer">Degined by<i>Dr.A.P.J Kalam</i></span>
        </div>

    </div>
</div>
<script>
    document.getElementById("add").addEventListener("click",xyz);
function xyz(){
    document.getElementById("add").innerHTML = "NOIDA sector -15 ,utterpradesh";
}
document.getElementById("mob").addEventListener("click",xyz1);
function xyz1(){
    document.getElementById("mob").innerHTML = "9918674766";
}
document.getElementById("email").addEventListener("click",xyz2);
function xyz2(){
    document.getElementById("email").innerHTML = "bb@gmail.com";
}
document.getElementById("whatt").addEventListener("click",xyz3);
function xyz3(){
    document.getElementById("whatt").innerHTML = "44646545";
}
    
</script>
</body>
</html>

<?php
include ("footer.php");
?>