  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  /*border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;*/
   transition: 0.3s;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
  cursor:pointer;
}

/* Main content */
/*.main {
  margin-left: 200px; /* Same as the width of the sidenav 
  font-size: 20px; /* Increased text to enable scrolling 
  padding: 0px 10px;
}*/


#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

.dropdown-container-web{
	display:none;
	background-color:#262626;
	padding-left:8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}
</style>
</head>
<body>

<div id="mySidebar" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#about">About</a>
  <a id="web1"  class="dropdown-btnWeb">Web
   <i class="fa fa-caret-down"></i>
  </a>
    <div class="dropdown-container-web">
    <a onclick="tabboots()" href="#">Table Bootstrap</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <a id="drop" class="dropdown-btn">Dropdown 
    <i class="fa fa-caret-down"></i>
  </a>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div>

<div id="main">
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container-fluid">
	  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button> 
	  
	
  </div>
  </nav>
    <div class="container-fluid">
    <div id="tab1" style="display:none;">
	  <h2>Collapsed Sidebar</h2>
	  <p>Click on the hamburger menu/bar icon to open the sidebar, and push this content to the right.</p>
	  </div>
	  <div id="tab2" style="display:none;">
		 <h2>Tab 2</h2>
	
	  </div>
  </div>
 <!-- <h2>Sidebar Dropdown</h2>
  <p>Click on the dropdown button to open the dropdown menu inside the side navigation.</p>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Some random text..</p>-->
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */

	var dropdown = document.getElementsByClassName("dropdown-btnWeb");
	var i;
	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}	
	
	
	var dropdown1 = document.getElementsByClassName("dropdown-btn");	
	var i;
	for (i = 0; i < dropdown1.length; i++) {
	  dropdown1[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}	
	
	
	function tabboots(){
		   document.getElementById("tab1").style.display="block";
           document.getElementById("tab2").style.display="none";
	}
/*function functdrop(parm){
		

switch(parm){
		case 'web1':
		var dropdown = document.getElementsByClassName("dropdown-btnWeb")
		//	alert('block1');
		break;
		case 'drop':
		var dropdown = document.getElementsByClassName("dropdown-btn")
		 //   alert('block2');
		break;
	}

		var i;
	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}	
	
}*/




function btntab2(){
    document.getElementById("tab1").style.display="none";
    document.getElementById("tab2").style.display="block";
}

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html> 