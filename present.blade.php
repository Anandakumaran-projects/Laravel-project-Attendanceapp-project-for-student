<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance</title>
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
	.main{
		margin: 100px;
		display: flex;
		flex-direction: column;
	}
	.main button{
		margin-top: 30px;
		line-height: 60px;
		border: none;
	}
	.btn1{
		background-color: green;
		color: #fff;
		width: 100%;
	}
	.btn2{
		background-color: orangered;
		color: #fff;
		width: 100%;
	}
</style>
<body>
	<header><h1>Veera Education</h1></header>
	<div class="container">
		<div class="back"><button><a href="">back</a></button></div>
		<h2>Welcome to Veera education</h2>
		<div class="header">
			<h3>CheckIn/CheckOut</h3>
		</div>
		<hr style="border-bottom:1px solid #fff;">
		<div class="content">
			<p>Hello Anand</p>
			<p> Date:{{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
		</div>
		<hr style="border-bottom: 1px solid #fff;">
		<div class="main">
			<form action="{{ route('attendance.checkIn') }}" method="POST">
				@csrf
			<button class="btn1" type="submit">CheckIn</button>
		</form>
		<form action="{{ route('attendance.checkOut') }}" method="POST">
			@csrf
			<button class="btn2" type="submit">CheckOut</button>
		</form>
			
		</div>

</body>
</html>