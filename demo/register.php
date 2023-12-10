Invalid request
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="post" action="/~jemust/demo/register.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <br>

        <label>Radio Button:</label>
        <input type="radio" id="radio-1" name="radio_group" value="option1" checked>
        <label for="radio-1">Option 1</label>
        <input type="radio" id="radio-2" name="radio_group" value="option2">
        <label for="radio-2">Option 2</label>
        <br>

        <label>Checkbox:</label>
        <input type="checkbox" id="checkbox-1" name="checkbox_field[]" value="checkbox1">
        <label for="checkbox-1">Checkbox 1</label>
        <input type="checkbox" id="checkbox-2" name="checkbox_field[]" value="checkbox2">
        <label for="checkbox-2">Checkbox 2</label>

        <br>

        <label for="dropdown">Dropdown List:</label>
        <select id="dropdown" name="dropdown_field">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>

        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

