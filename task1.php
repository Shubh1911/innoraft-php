<!DOCTYPE html>
<html>

<body>
<form action="hello.php" method="post">
FirstName: <input class ="firstname" type="text" name="firstname" pattern="[a-zA-Z]{1,}" required><br>
LastName: <input class="lastname" type="text" name="lastname" pattern="[a-zA-Z]{1,}" required><br>
FullName: <input class="fullname" type="text" readonly name="fullname"><br>
<input id="button" type="submit">
</form>
</body>
</html>