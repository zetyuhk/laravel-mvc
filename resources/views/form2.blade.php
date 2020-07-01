<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <form action="{{action('AuthController#welcome2')}}" method="POST">
        @csrf
		<h1>Buat Account Baru!</h1>
		<fieldset>
			<legend><h3>Sign Up Form</h3></legend>

			<p>First Name:</p>
			<input type="text" name="first_name" size="30">
			
			<p>Last Name:</p>
			<input type="text" name="last_name" size="30">
			
			<p>Gender:</p>
			<input type="radio" name="gender" value="male"> Male <br>
			<input type="radio" name="gender" value="female"> Female <br>
			<input type="radio" name="gender" value="other"> Other
			
			<p>Nationality:</p>
			<select>
				<option value="indonesian">Indonesian</option>
				<option value="singaporean">Singaporean</option>
				<option value="malaysian">Malaysian</option>
				<option value="australian">Australian</option>
			</select>

			<p>Language Spoken:</p>
			<input type="checkbox" name="language" value="bahasa indonesia"> Bahasa Indonesia <br>
			<input type="checkbox" name="language" value="english"> English <br>
			<input type="checkbox" name="language" value="other"> Other
			
			<p>Bio:</p>
			<textarea  cols="30" rows="7"></textarea>

			<p>
			<input type="submit" name="submit" value="Sign Up">
		</p>

		</fieldset>
		
	</form>
</body>
</html>