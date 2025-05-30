<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Create</title>
</head>
<body>
    <div class="metting">
    <form method="post" action="forminaction.php" enctype="multipart/form-data">
	Meeting Name:<input type="text" name="name"><br>
	Meeting Agenda:<textarea name="agenda"></textarea><br>
	Meeting Details: <textarea name="details"></textarea><br>
	Meeting Date:<input type="date" name="date"><br>
	Meeting Place:<input type="text" name="place"><br> 
	<input type="submit" name="submit" value="submit">
	
</form>
    </div>
</body>
</html>