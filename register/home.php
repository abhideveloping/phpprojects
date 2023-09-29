<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css"/>
    <title>Register</title>
</head>
<body>
    <form action="reg.php" class="form" method="post">
        <table class="tbl">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name = 'name' class="txt" required/></td>
            </tr>

            <tr>
                <td><label for="name">Email:</label></td>
                <td><input type="email" name = 'email' class="txt" required/></td>
            </tr>

            <tr>
                <td><label for="name">Address:</label></td>
                <td><input type="text" name = 'address' class="txt" required/></td>
            </tr>

            <tr>
                <td><label for="name">Contact:</label></td>
                <td><input type="phone" name = 'contact' class="txt" required/></td>
            </tr>

        </table>

            
                <button class="btn">Submit</button>
    </form>
</body>
</html>