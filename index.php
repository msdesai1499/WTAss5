<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

		<title>Coding Infinity</title>
	</head>
	<body>
	<div class="header">
		<div class="inner_header">
		<div class="logo_container">
			<h1>Coding Infinity<span> ∞</span></h1>
		</div>
		<div class="navigation">
			<button id="1" onclick="disp(this.id)">Home</button>
			<button id="2" onclick="disp(this.id)">Registration</button>
			<button id="3" onclick="disp(this.id)">View Participants</button>
		</div>
		</div>
	</div>	
	<div id="home">
		<h3>Competitive Coding Community</h3>
		<br>
		<div id="content">
		<h4>Any Fool can write a code that computer can understand.Good programmers write code that humans can understand.Be the one to conquer 
			this coding world.<br>
			We are bringing you opportunity to compete with best.Participate and show your coding skills.

		</h4>
		</div>
	</div>
	
	<div id="registeration">
		<h2>Register Here</h2>
		
			<input type="text" placeholder="First Name.." id="fname" >
			<input type="text" placeholder="Last Name.." id="lname" >
			<input type="text" placeholder="User Name.." id="username" >
			<input type="password" placeholder="Password.." id="password" >
			<input type="text" placeholder="Email.." id="email" >
			<input type="text" placeholder="Mobile Number.." id="mobno" >
			<input type="text" placeholder="College Name.." id="clg" >
			<select id="dept" required>
				<option>Department</option>
				<option>Computer</option>
				<option>IT</option>
				<option>Mechanical</option>
				<option>Civil</option>
				<option>Chemical</option>
				<option>ENTC</option>
				<option>ETX</option>
			</select>
			<select id="lang" required>
				<option>Preferred Language</option>
				<option>C/C++</option>
				<option>Java</option>
				<option>Python</option>
				<option>Scala</option>
				<option>Ruby</option>
			</select>
			<input type="submit" value="Submit" id="submit">
			</div>
			
			
	<br><br>
	<div id="details" >
	<h1>Registration Details</h1>
	<br>	
	<br><br>
	
	<button style="background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"  onclick="loadData()">Load</button>
	<br>	
	<br><br>
		<table id="display">
			<tr>
				<th>Time</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>User_Name</th>
				<th>Email_id</th>
				<th>Mobile_no</th>
				<th>College Name</th>
				<th>Department</th>
				<th>Preferred Language</th>
				
			</tr>
		</table>
		
	
	
	</div>  
	


		

	</div>

	<script src="javascript/index.js"></script>
	
	<script src="javascript/jquery-3.5.1.min.js"></script>
	
	</body>

</html>