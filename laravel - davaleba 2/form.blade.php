<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('testpost') }}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="name">
		<input type="text" name="surn" placeholder="last name">
		<input type="text" name="address" placeholder="address">
		<input type="date" name="bdate">
		<input type="textarea" name="bio" placeholder="bio"><button>subbmit</button>



	</form>
</body>
</html>