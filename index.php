<html lang="en">
<head>
<title>Execute Dig commands</title>
</head>
<body>
<form action="webdig.php" method="GET">
<input required name="domain" placeholder="enter domain name">
<select name="opt">
<option value="" disabled selected>Choose option</option>
<option value="+nocomments +noquestion +noauthority +noadditional +nostats">Answer Only</option>
</select>
<button type="submit">submit</button>
</form>
</body>
</html>