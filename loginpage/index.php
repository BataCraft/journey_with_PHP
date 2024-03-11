<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form Using PHP</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="warpper">
       <form action="#" method="POST">
        <div class="field">
            <label for="fullname">
                Full Name:
            </label>
            <input type="text" name="fullname" id="fullname">
        </div>
        <div class="field">
            <label for="email">
                Email
            </label>
            <input type="email" name="email" id="email">
        </div>
        <div class="field">
            <label for="password">
                Password:
            </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="field">
            <label for="confirmpassword">
                Comfirm Password:
            </label>
            <input type="password" name="confirmpassword" id="confirmpassword">
        </div>
        <div gender>
            <input type="radio" name="gender" id="male" value=""><span>Male</span>
            <input type="radio" name="gender" id="female" value=""><span>Female</span>
        </div>

        <div>
            <button type="submit" name="submit">Register Now!</button>
        </div>
       </form>

    </div>
</body>
</html>