<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="logo" type="image/jpg" href="favicon.jpg">
    <title>log In</title>

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- onsubmit="event.preventDefault(); formSubmit();" -->
    <!-- id="myForm" -->
    <div class="form-container">
        <form action="login-process.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email">
                <span id="emaillll" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password">
                <span id="pass" class="error-message"></span>
            </div>
            <div class="submit-button">
                <input type="submit" value="Log in" name="login">
            </div>
        </form>
    </div>

    <!-- <script>
        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emaillll");
        const passwordInput = document.getElementById("password");
        const passwordError = document.getElementById("pass");

        function resetErrors() {
            document.querySelectorAll('.error-message').forEach(span => {
                span.innerText = "";
                span.classList.remove('visible');
            });
        }

        function formSubmit() {
            let isValid = true;
            resetErrors();
            if (emailInput.value.trim() === "") {
                emailError.innerText = "Please enter your email.";
                emailError.classList.add('visible');
                isValid = false;
            }

            if (passwordInput.value === "") {
                passwordError.innerText = "Please enter a password.";
                passwordError.classList.add('visible');
                isValid = false;
            } else if (passwordInput.value.length < 5) {
                passwordError.innerText = "Password must contain at least 5 characters.";
                passwordError.classList.add('visible');
                isValid = false;
            }
            if (isValid) {
                alert("Logged in successfully!");
                form.reset();
            }
        }
    </script> -->
    
    <!-- <script>
        let email = document.getElementById("email");
        let password = document.getElementById("password");

        function submit() {
            emaillll.innertext = "";
            pass.innertext = "";
        }

        //Checks if the input is empty
        if (email.value == "") {
            emaillll.innertext = "Please enter your email !!";
            emaillll.classlist.add('error-message');
            return false;
        }

        //checks if the input is empty
        else if (password.value == "") {
            pass.innerText = "Please enter your password !!"
            pass.classList.add('error-message');
            return false;
        }

        //Check if the password conatin 5 charecters
        else if (password.value.length !== 8) {
            pass.innerText = "Password must contain 8 charecters !!"
            pass.classList.add('error-message');
            return false;
        }
        return true;
    </script> -->
</body>

</html>

