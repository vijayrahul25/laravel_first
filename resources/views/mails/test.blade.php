<!DOCTYPE html>

<html>

<head>
    <title>Testing Email Service</title>
</head>
<body>
	<p> Hi {{ $mailData["to_username"] }}, </p>
  	<p>{{ $mailData["body"] }}</p>
  	<p>Thank you</p>
</body>
</html>