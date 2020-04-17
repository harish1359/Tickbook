<!DOCTYPE html>
<html>
<head>
<title>trial for Booking</title>
<style>
.seat{
height: 15px;
width: 15px;
text-align: center;
font-size: 10px;
border-radius: 3px;
background-color: lightgray;}
.seat:hover{
background-color: green;
color: white;}
.sel
{
display: none;
background-color: rgb(0,0,0,0.4);
position: absolute;
padding-top: 200px;
width: 100%;
height: 100%;
}
.payment{
display: none;
background-color: rgb(0,0,0,0.4);
position: absolute;
width: 100%;
height: 100%;
padding-top: 200px;
}
.payment-content{
background-color: white;
border:1px solid black;
width: 500px;
margin-left: 300px;
}
.content{
background-color: white;
border:1px solid black;}
.setnum{
float: left;
width: 20px;
height: 20px;
text-align: center;
border:1px solid black;
background-color: lightblue;
padding:5px;
margin:10px;
margin-top: 2px;
}


</style>


</head>

<body onload="disp()">
<div class="sel">
<div class="content">
<p>Select the no of seats </p>
<div class="setnum" id="Num1" onclick="count(this.id)">1</div>
<div class="setnum" id="Num2" onclick="count(this.id)">2</div>
<div class="setnum" id="Num3" onclick="count(this.id)">3</div>
<div class="setnum" id="Num4" onclick="count(this.id)">4</div>
<div class="setnum" id="Num5" onclick="count(this.id)">5</div>
<br><br><br>
<button onclick="closer()">Select no of seats</button>
</div>
</div>
<div class="payment">
<div class="payment-content">
<p>No.of seats booked:<span id="noofseats">3</span></p>
<p>Cost per seat:<span id="cost">100</span></p><br><br><br style="width: 1px;">
<p>Total:<span id="totalcost">3</span></p>
<button onclick="loadtickets()">Pay now</button>
</div>
</div>
<div>
<p style="float: right;" onclick="refresh()">Tickets:<span>
<select id="tickets">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</span></p>
</div>
<table>
<tr>
<td>A</td>  <td></td>  <td></td>
<td><div class="seat" id="A01" onclick="book(this.id)" >1</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="A02" onclick="book(this.id)" >2</div></td>  <td></td>  <td></td>
<td><div class="seat" id="A03" onclick="book(this.id)" >3</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="A04" onclick="book(this.id)" >4</div></td>  <td></td>  <td></td>
<td><div class="seat" id="A05" onclick="book(this.id)" >5</div></td> <td></td>  <td></td> <td></td>  <td></td> <td></td>  <td></td>  
<td><div class="seat" id="A06" onclick="book(this.id)">6</div></td>  <td></td>  <td></td>
<td><div class="seat" id="A07" onclick="book(this.id)">7</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="A08" onclick="book(this.id)">8</div></td>  <td></td>  <td></td>
<td><div class="seat" id="A09" onclick="book(this.id)">9</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="A10" onclick="book(this.id)">10</div></td>  <td></td>  <td></td>
</tr>
<tr>
<td>B</td>  <td></td>  <td></td>
<td><div class="seat" id="B01" onclick="book(this.id)" >1</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="B02" onclick="book(this.id)" >2</div></td>  <td></td>  <td></td>
<td><div class="seat" id="B03" onclick="book(this.id)" >3</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="B04" onclick="book(this.id)" >4</div></td>  <td></td>  <td></td>
<td><div class="seat" id="B05" onclick="book(this.id)" >5</div></td> <td></td>  <td></td> <td></td>  <td></td> <td></td>  <td></td>  
<td><div class="seat" id="B06" onclick="book(this.id)">6</div></td>  <td></td>  <td></td>
<td><div class="seat" id="B07" onclick="book(this.id)">7</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="B08" onclick="book(this.id)">8</div></td>  <td></td>  <td></td>
<td><div class="seat" id="B09" onclick="book(this.id)">9</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="B10" onclick="book(this.id)">10</div></td>  <td></td>  <td></td>
</tr>
<tr>
<td>C</td>  <td></td>  <td></td>
<td><div class="seat" id="C01" onclick="book(this.id)" >1</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="C02" onclick="book(this.id)" >2</div></td>  <td></td>  <td></td>
<td><div class="seat" id="C03" onclick="book(this.id)" >3</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="C04" onclick="book(this.id)" >4</div></td>  <td></td>  <td></td>
<td><div class="seat" id="C05" onclick="book(this.id)" >5</div></td> <td></td>  <td></td> <td></td>  <td></td> <td></td>  <td></td>  
<td><div class="seat" id="C06" onclick="book(this.id)">6</div></td>  <td></td>  <td></td>
<td><div class="seat" id="C07" onclick="book(this.id)">7</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="C08" onclick="book(this.id)">8</div></td>  <td></td>  <td></td>
<td><div class="seat" id="C09" onclick="book(this.id)">9</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="C10" onclick="book(this.id)">10</div></td>  <td></td>  <td></td>
</tr>
<tr>
<td>D</td>  <td></td>  <td></td>
<td><div class="seat" id="D01" onclick="book(this.id)" >1</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="D02" onclick="book(this.id)" >2</div></td>  <td></td>  <td></td>
<td><div class="seat" id="D03" onclick="book(this.id)" >3</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="D04" onclick="book(this.id)" >4</div></td>  <td></td>  <td></td>
<td><div class="seat" id="D05" onclick="book(this.id)" >5</div></td> <td></td>  <td></td> <td></td>  <td></td> <td></td>  <td></td>  
<td><div class="seat" id="D06" onclick="book(this.id)">6</div></td>  <td></td>  <td></td>
<td><div class="seat" id="D07" onclick="book(this.id)">7</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="D08" onclick="book(this.id)">8</div></td>  <td></td>  <td></td>
<td><div class="seat" id="D09" onclick="book(this.id)">9</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="D10" onclick="book(this.id)">10</div></td>  <td></td>  <td></td>
</tr>
<tr>
<td>E</td>  <td></td>  <td></td>
<td><div class="seat" id="E01" onclick="book(this.id)" >1</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="E02" onclick="book(this.id)" >2</div></td>  <td></td>  <td></td>
<td><div class="seat" id="E03" onclick="book(this.id)" >3</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="E04" onclick="book(this.id)" >4</div></td>  <td></td>  <td></td>
<td><div class="seat" id="E05" onclick="book(this.id)" >5</div></td> <td></td>  <td></td> <td></td>  <td></td> <td></td>  <td></td>  
<td><div class="seat" id="E06" onclick="book(this.id)">6</div></td>  <td></td>  <td></td>
<td><div class="seat" id="E07" onclick="book(this.id)">7</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="E08" onclick="book(this.id)">8</div></td>  <td></td>  <td></td>
<td><div class="seat" id="E09" onclick="book(this.id)">9</div></td>  <td></td>  <td></td>  
<td><div class="seat" id="E10" onclick="book(this.id)">10</div></td>  <td></td>  <td></td>
</tr>
</table>
<?php
	$conn=mysqli_connect("localhost","root","","login");
	$sql="select seatno from ticketbooking";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "seatno: " . $row["seatno"]. "<br>";
        ?>
        
        <script>
        function booker(b){
			var a=document.getElementById(b);
			a.style.backgroundColor="red";        
        }
        booker("<?php echo($row["seatno"])?>");
        </script>
        <?php
    }
	}
	?>
<button onclick="payment()">Book Now</button>
<p id="demo">Hello </p><br><br>
<?php
$a="demo";
//$seats=echo '?><script>document.getElementById("demo").innerHTML</script><?php';
echo $a;
?>
<script>
var counter=0;
function refresh() {
	window.open("booking.php",'_self');
}
function book(a) {
	var b=document.getElementById(a);
	if(counter>=document.getElementById("tickets").value)
	{
	alert("Limit for no of tickets exceeded");
	}
	else{
	if(b.style.backgroundColor!="red")//for the seats already booked
	{
	if(b.style.backgroundColor=="blue")//selectng seats
	{
	b.style.backgroundColor="lightgray";
	b.style.color="black";
	counter--;	
	}
	else
	{
	b.style.backgroundColor="blue";
	b.style.color="white";
	counter++;	
	}
	}
	}
	/*
	else {
	b.style.backgroundColor="blue";
	b.style.color="white";
	counter++;
	}	
	*/
	
}
function disp() {
	var a=document.getElementsByClassName("sel")[0];
	a.style.display="block";
}
function payment() {
	var bc=document.getElementById("tickets").value;
	document.getElementById("noofseats").innerHTML=bc;
	document.getElementById("totalcost").innerHTML=100*bc;
	var a=document.getElementsByClassName("payment")[0];
	a.style.display="block";
}
function count(a) {
	for(i=1;i<6;i++)
	{
		var mn=document.getElementById("Num"+i+"");
		mn.style.backgroundColor="lightblue";	
	}
	var b=document.getElementById(a);
	b.style.backgroundColor="red";
	var c=document.getElementById("tickets");
	c.value=Number(a[3]);	
}
function closer() {
	var a=document.getElementsByClassName("sel")[0];
	a.style.display="none";
}
function loadtickets(){
	var abc=document.getElementById("tickets").value;
	var count=0,i,a,b,c,d,e;
	for(i=1;i<10;i++)
	{
			if(document.getElementById("A0"+i).style.backgroundColor=="blue")
			{
				var textnode=document.createTextNode("A0"+i+",");
				var p=document.getElementById("demo");
				p.appendChild(textnode);			
			}
			if(document.getElementById("B0"+i).style.backgroundColor=="blue")
			{
				var textnode=document.createTextNode("B0"+i+",");
				var p=document.getElementById("demo");
				p.appendChild(textnode);			
			}
			if(document.getElementById("C0"+i).style.backgroundColor=="blue")
			{
				var textnode=document.createTextNode("C0"+i+",");
				var p=document.getElementById("demo");
				p.appendChild(textnode);			
			}
			if(document.getElementById("D0"+i).style.backgroundColor=="blue")
			{
				var textnode=document.createTextNode("D0"+i+",");
				var p=document.getElementById("demo");
				p.appendChild(textnode);			
			}
			if(document.getElementById("E0"+i).style.backgroundColor=="blue")
			{
				var textnode=document.createTextNode("E0"+i+",");
				var p=document.getElementById("demo");
				p.appendChild(textnode);			
			}
	}
	if(document.getElementById("A10").style.backgroundColor=="blue")
	{
		var textnode=document.createTextNode("A10"+",");
		var p=document.getElementById("demo");
		p.appendChild(textnode);			
	}
	if(document.getElementById("B10").style.backgroundColor=="blue")
	{
		var textnode=document.createTextNode("B10"+",");
		var p=document.getElementById("demo");
		p.appendChild(textnode);			
	}
	if(document.getElementById("C10").style.backgroundColor=="blue")
	{
		var textnode=document.createTextNode("C10"+",");
		var p=document.getElementById("demo");
		p.appendChild(textnode);			
	}
	if(document.getElementById("D10").style.backgroundColor=="blue")
	{
		var textnode=document.createTextNode("D10"+",");
		var p=document.getElementById("demo");
		p.appendChild(textnode);			
	}
	if(document.getElementById("E10").style.backgroundColor=="blue")
	{
		var textnode=document.createTextNode("E10"+",");
		var p=document.getElementById("demo");
		p.appendChild(textnode);			
	}
	<?php
	$conn=mysqli_connect("localhost","root","","login");
	$sqluser="select username from activa";
	$resuser=mysqli_query($conn,$sqluser);
	$a="demo";
	$seats="<script>document.getElementById($a).innerHTML</script>";
	$sql="insert into ticketbooking values('$resuser','Prasads Imax','Sarinodu','09:15PM','$seats','Apr 06 2020')";
	$result=mysqli_query($conn,$sql);
	?>

}
</script>
</body>
</html>