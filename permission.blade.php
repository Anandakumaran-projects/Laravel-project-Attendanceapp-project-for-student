<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Permission</title>
</head>
<style type="text/css">
	header{
		background:linear-gradient(to right,#2c73de,#fff);
		box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
		width: 100%;
	}
	h1{
		text-align: center;
	}
	.back{
		float: right;
	}
	.back a{
		text-decoration: none;
		color: #fff;
	}
	.back button{
		background-color: blue;
		border: none;
	}
	.header{
		background-color: #2c73de;
		color: #fff;
		line-height: 60px;
	}
	.header h3{
		text-align: center;
	}
	.content{
		display: flex;
		justify-content: space-between;
	}
	.main h4{
		text-align: center;
	}
	.row{
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.row input{
		padding: 10px;
	}
	.btn1
	{
		color: #fff;
		background-color: green;
		padding: 10px;
	}
</style>
<body>
	<header><h1>Veera Education</h1></header>
	<div class="container">
		<div class="back"><button><a href="">back</a></button></div>
		<h2>Welcome to Veera education</h2>
		<div class="header">
			<h3>Permission</h3>
		</div>
		<hr style="border-bottom:1px solid #fff;">
		<div class="content">
			<p>Hello Anand</p>
			<p> Date:{{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
		</div>
		<hr style="border-bottom: 1px solid #fff;">
		<div class="main">
			<h4>why do you want a permission?<br>please enter reason below box</h4>
			<div class="row">
				<label>Enter Reason:</label><br>
			<input type="text" name="reason" id="reason" required><br>
			<button class="btn1">Submit</button>
			</div>
			
		</div>

</body>
</html>