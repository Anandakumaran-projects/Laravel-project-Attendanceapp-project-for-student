<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Permission</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
		display: flex;
		flex-direction: column;
	}
	.main button{
		margin-top: 30px;
		line-height: 60px;
	}
	.btn1
	{
		background-color:limegreen;
		color:#fff;
		border: none;
		font-size: 15px;
	}
	.btn2
	{
		background-color:greenyellow;
		color:#fff;
		border: none;
		font-size: 15px;
	}
	.btn3
	{
		background-color:orangered;
		color:#fff;
		border: none;
		font-size: 15px;
	}
	
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(".btn1").on('click',function(){
			window.location.href = "{{ route('presenttable') }}";
		});
		$(".btn2").on('click',function(){
			window.location.href = "{{ route('permissiontable') }}";
		})
		$(".btn3").on('click',function(){
			window.location.href = "{{ route('leavetable') }}";
		})
		
	})
</script>
<body>
	<header><h1>Veera Education</h1></header>
	<div class="container">
		<div class="back"><button><a href="">back</a></button></div>
		<h2>Welcome to Veera education</h2>
		<div class="header">
			<h3>Attendance Report</h3>
		</div>
		<hr style="border-bottom:1px solid #fff;">
		<div class="content">
			<p>Hello Anand</p>
			<p> Date:{{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
		</div>
		<hr style="border-bottom: 1px solid #fff;">
		<div class="main">
			<button class="btn1">Total Present Days</button>
			<button class="btn2">Total Permission Days</button>
			<button class="btn3">Total Leave Days</button>
		</div>
			
		</div>

</body>
</html>