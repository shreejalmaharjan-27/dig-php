<html lang="en">
<head>
<title>Execute Dig commands</title>
</head>
<body>
<form action="webdig.php" method="GET">
<input required name="domain" placeholder="enter domain name">
<select name="opt1">
<option value="" disabled selected>Choose connect method</option>
<option value="-4">IPV4</option>
<option value="-6">IPV6</option>
</select>
<select name="opt2">
<option value="" disabled selected>Choose records to get</option>
<option value="ANY +noall +answer">Get All records</option>
<option value="+nocomments +noquestion +noauthority +noadditional +nostats">Get Answer Only</option>
<option value="MX +noall +answer">Get MX records</option>
<option value="NS +noall +answer">Get NS records</option>
<option value="+nssearch">Get SOA records </option>
<option value="mx +short">Get Short MX records</option>
<option value="ns +short">Get Short NS records</option>
<option value="+short">Get Short Output</option>
</select>
<button type="submit">submit</button>
</form>
</body>
</html>