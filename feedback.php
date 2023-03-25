<!DOCTYPE html>
<html>
<head>
<title>Feedback Form</title>
</head>
<body>

<h1>Feedback Form</h1>
<form method="POST" action="thankyou.php">
Name: <input type="text" name="complete_name" /><br />
<br>
Email Address: <input type="email" name="email" /><br />
<br>
Type:
<select name="type">
<option value="inquiry">Inquiry</option>
<option value="feedback">Feedback</option>
<option value="other">Other/s</option>
</select>
<br />
<br>
Satisfaction (between 0 to 10): <input type="range" name="satisfaction_level" min="0" max="10"/><br />
<br>
<textarea rows="4" cols="50" name="message">
</textarea>
<br>
<br>
<button>Submit</button>
</form>

</body>
</html>