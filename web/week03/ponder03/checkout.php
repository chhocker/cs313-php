<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sol Syst LCC</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <div>
        <form action="confirmation.php" method="post">
            First name: <input type="text" name="firstname">
            <br />
            Last name: <input type="text" name="lastname">
            <br />
            <br />
            Email: <input type="text" name="email">
            <br />
            <br />
            Street address: <input type="text" name="address">
            City: <input type="text" name="city">
            State: <input type="text" name="state">
            Zipcode: <input type="text" name="zip">

            <input type="Submit" value="Confirm Purchase">
        </form>

        <br />
    </div>

    <img id="mercury" src="mercury.jpg" alt="Photo of Mercury" width="153" height="153" onmouseover="this.style='transform: scale(1.5);'" onmouseout="this.style='transform: scale(1);'">

</body>

</html>