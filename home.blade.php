<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
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
		margin: 100px;
	}
	.main .row{
		display: flex;
		flex-direction: column;
	}
	.main button{
		line-height: 30px;
		margin-top: 20px;
		padding: 10px;
	}
	.btn1{
		background-color: #2c73de;
		color: #fff;
		border: none;
	}
	.btn2{
		background-color:greenyellow;
		color: #fff;
		border: none;
	}
	.btn3{
		background-color:orangered;
		color: #fff;
		border: none;
	}
	.btn4{
		background-color: green;
		color: #fff;
		border: none;
	}
	a{
		color: #fff;
		text-decoration: none;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(".btn1").on('click',function(){
			window.location.href = "{{ route('present') }}";
		});
		$(".btn2").on('click',function(){
			window.location.href = "{{ route('permission') }}";
		})
		$(".btn3").on('click',function(){
			window.location.href = "{{ route('leave') }}";
		})
		$(".btn4").on('click',function(){
			window.location.href = "{{ route('report') }}";
		})
	})
</script>

<body>
	<header><h1>Veera Education</h1></header>
	<div class="container">
		<div class="back"><button><a href="">back</a></button></div>
		<h2>Welcome to Veera education</h2>
		<div class="header">
			<h3>Attendance HomePage</h3>
		</div>
		<hr style="border-bottom:1px solid #fff;">
		<div class="content">
			<p>Hello Anand</p>
			<p> Date: {{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
		</div>
		<hr style="border-bottom: 1px solid #fff;">
		<div class="main">
			<div class="row">
				<button class="btn1">Present</button>
			<button class="btn2">Permission</button>
			</div>
			<div class="row">
				<button class="btn3">Leave</button>
			<button class="btn4">Report</button>
			</div>
		</div>
	</div>

</body>
</html>