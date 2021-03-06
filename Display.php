<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="local-fonts/Orbitron/Orbitron.css" rel="stylesheet">   
	<link href="local-fonts/Open-Sans/Open-Sans.css" rel="stylesheet"></head>
    
    <style>
        body{
            background: #344e35 ;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;

        }
        
                
        .navbar-nav{
            margin-left: 450px;
            font-family: 'open_sans_condensedlight', sans-serif;
            font-size: 20px;
          
        
        }
        
        .navbar-nav *{
	        box-sizing: border-box; 
	        transition: all 0.35s ease;
	        
	     }
	     
	     .navbar-nav li {
		     display: inline-block
		     list-style: outside none none;
		     margin: .5em 1em;
		     padding: 0;
		     
		 
		 }
		 
		 .navbar-nav a{
		 	padding: .5em 0.8em;
		 	color: rgba(255,255,255,0.5);
		 	position: relative;
		 	text-decoration: none;
		 }
		 
		 .navbar-nav a:before,
		 .navbar-nav a:after{
			 height: 14px;
			 width: 14px;
			 position: absolute;
			 content: '';
			 transition: all 0.35s ease;
			 opacity: 0;
			 
		}
		
		.navbar-nav a:before{
			right: 0;
			top: 0;
			border-right: 3px solid #087830;
			border-top: 3px solid white;
			transform: translate(-100%,50%);
			}
			
		.navbar-nav a:after{
			left: 0;
			bottom: 0;
			border-left: 3px solid #087830;
			border-bottom: 3px solid white;
			transform: translate(100%,-50%)
		}
	    a:hover:before,    
	    a:hover:after{
		    transform: translate(0%,0%);
		    opacity: 1;
		    }
        
        
        li{
            padding-left: 70px;
        }
        
        .ServiceTitle{
	        width: 1290px;
	        height: 30px;
	        background-color: #151815;
			color: white
        }
        
        .Header{
	        width: 1425px;
	        height: 190px;
	        background: #151815;
	        color: white;
	        top: 90px; 
	        
        }
        
        .Title{
			font-family: 'orbitronlight', sans-serif;
	        font-size: 200%;
	        position: absolute;
	        left: 590px;
	        top: 108px
        }
        
        .SubTitle{
	        position: absolute;
	        font-size: 20px;
	        font-family: 'open_sans_condensedlight', sans-serif;
	        left: 670px;
	        top: 155px
        }

        
        .logo{
	        position: absolute;
	        left: 668px;
	        top: 10px;
        }
        
        .main-body{
	        width: 1300px;
	        height: 1100px;
	        border-style: solid;
	        border-width: 5px;
	        border-color: #333;
	        background: #f2f2f2;
	        margin-top: 20px;
	        
        }
        
        footer{
	        width: 100%;
	        height: 320px;
	        background-color: #21282E; 
	        border-style: solid;
	        border-width: 2px;
	        border-color: #444;
	        color: white;
	        font-family: 'open_sans_condensedlight', sans-serif;
        }
        
        .footer-info{
	        margin-left: 50px;
	        margin-top: 0px;
	        font-size: 80%;
        }
                

    </style>
    
<body>
	
	<div class="Header">
		
		<center ><img src="images/DLSL-logo.png" class="logo" width="100px" height="100px"></center>
		
		<center > <div class="Title">ICTC ONLINE </div> </center>
		<center > <div class="SubTitle">De La Salle Lipa </div> </center>
		
	</div>

   



	</div>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1B1F1B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
     
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span></span><span></span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="about.php">ICTC Overview</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="faq.php">View FAQ</a>
      </li>
     
 
      
    </ul>
  </div>
</nav><center>







<center>


<div class="main-body">
	
	<div class="ServiceTitle">
	
	<center> Inventory of Tools and Equipment
	
</div>
	<br>










<a style="color:green;" href="home.php"><p style="font-family:Agency FB;color:black;font-size:50px;line-height:120%;text-align:center"> << </a>



V I E W&emsp; I N V E N T O R Y </p></br>



<form method="POST" action="search.php">
<p style="font-family:Agency FB;color:black;font-size:20px;line-height:120%;text-align:center">Search Item
<input style="color:green; border-color:green;margin-left:10px" type="text" name="search">


<input style="font-family:Agency FB;font-size:20px;color:white; background-color:green;border-color:green;margin-left:5px" type="submit" class="button" value="  Search  ">
	
</form>

</br>
















<?php



include 'dbconnect.inc';


$perpage = 8;

$start = (isset($_GET['id'])) ? $_GET['id'] : 0;

$TotalRec = mysql_result(mysql_query("SELECT COUNT(*) FROM tools"), 0);

$select = "SELECT * FROM tools LIMIT $start, $perpage";
$result = mysql_query($select) or die(mysql_error());




$header=array('Tools ','Onhand ','Deployed','Retired','Damaged','Missing', 'ForExchange', 'Total');
for ($a=0;$a<1;$a++)
{



$total=0;
echo "<table>";

for($b=0;$b<8;$b++)
{
echo "<td>";
echo $header[$b];
}
echo "</td>";


}



while($row = mysql_fetch_array($result))
{
for ($a=0;$a<1;$a++){

echo "<table>";
echo "<td>";


echo "<a href=\"about.php?Tools={$row['Tools']}\">";


echo $row['Tools'];
echo "</a>";
echo "<td>";
echo $row['Onhand'];
echo "<td>";
echo $row['Deployed'];
echo "<td>";
echo $row['Retired'];

echo "<td>";
echo $row['Damaged'];
echo "<td>";
echo $row['Missing'];
echo "<td>";
echo $row['ForExchange'];

$total=$row['Onhand']+$row['Deployed']+$row['Damaged'];


echo "<td>";
echo $total;

echo "<tr>";

echo "</table>";
}}



echo "</br>";

if($start == 0)
{
  echo "Previous";
}
else
{
  echo '<a href='."./Display.php?id=" . ($start - $perpage) . '>'."Previous".'</a>';
}?>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<?php

if($start + $perpage >= $TotalRec)
{
  echo "Next";
}
else
{
  echo '<a href='."./Display.php?id=" . ($start + $perpage) . '>'."Next".'</a>';
}
?>




<style>

#container{
	background-color: #FFE4E1;
	border-radius:0px;
	width:208px;
	height:50px;
	box-shadow:4px 4px 4px 4px;
	float:right;
	font-size:150%;
	text-align: center;
	text-decoration: none;
	padding:0px;
	margin-left:150px;
	margin-right:150px;
}
#container2{

	background-color: none;
	border-radius:0px;
	width:9em;
	height:5em;
	
   border-collapse: collapse;
	float:right;
	font-size:100%;
	vertical-align: center;
   text-align: center;
	text-decoration: none;
	padding:0px;
	margin-top:5px;
	margin-right:0px;
	margin-left:50px;
}

</style>


<style>
table {

margin-left: 40px;
   border: 3px solid black;
   padding: 5px;
   border-collapse: collapse;
   font-family: Georgia, Times, serif;
   }
   tr {
   border: 3px solid #00BFFF;
   font-size: 75%;
   text-transform: uppercase;
   }
   td {
   border: 3px solid black;
   height: 5em;
   width:9em;
   padding: 5px;
color: black;
   vertical-align: center;
   text-align: center;
   }


</style>





