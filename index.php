<title>Execute Dig commands</title>
<form method="post" enctype="multipart/form-data" action="webdig.php" name="form">  
<input required name="domain" placeholder="enter domain name">
<select name="ipversion1">
    <option value="" disabled selected>Choose if trace records</option>
    <option value="trace">Trace</option>
 </select>
<select name="ipversion2">
    <option value="" disabled selected>Choose Protocol to connect using</option>
    <option value="v4">IPV4</option>
    <option value="v6">IPV6</option>
 </select>
 <select name="ipversion">
 <option value="" disabled selected>Choose records to get</option>
    <option value="getall">Get all records</option>
    <option value="getansonly">Get Anwers only</option>
    <option value="getmx">Get MX records</option>
    <option value="getns">Get NS records</option>
    <option value="getsoa">Get SOA records</option>
    <option value="getsmx">Get SHORT MX records</option>
    <option value="getsns">Get SHORT NS records</option>
    <option value="getshort">Get SHORT records</option>
 </select>
 <input name="submit" type="submit">
</form>