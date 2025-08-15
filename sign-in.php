<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Go Trip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- favicon link -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- css link -->
    <link rel="stylesheet" href="sign-in.css">
</head>

<body>

    <div class="container form-container">
        <div class="card signup-card">
            <h2 class="text-center">Create Your Account</h2>
            <form action="CRUD/add.php" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3 form-group">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                        <span class="err" id="fnameErr"></span>
                    </div>
                    <div class="col-md-6 mb-3 form-group">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                        <span class="err" id="lnameErr"></span>
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <span class="err" id="emailErr"></span>
                </div>
                <div class="mb-3 form-group">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age">
                    <span class="err" id="ageErr"></span>
                </div>
                <div class="mb-3 form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <span class="err" id="passwordErr"></span>
                </div>
                <div class="submit-button">
                    <input type="submit" value="Sign up" name="submit">
                </div>
            </form>
            <!-- Login Link -->
            <p class="text-center text-muted mt-4 mb-0">
                Already have an account? <a href="login.php" class="fw-bold text-decoration-none">Click here</a>
            </p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script>

        const form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const age = document.getElementById('age').value;
            const password = document.getElementById('password').value;

            let fnameErr = document.getElementById('fnameErr');
            let lnameErr = document.getElementById('lnameErr');
            let emailErr = document.getElementById('emailErr');
            let ageErr = document.getElementById('ageErr');
            let passwdErr = document.getElementById('passwordErr');


            fnameErr.innerText = "";
            lnameErr.innerText = "";
            emailErr.innerText = "";
            ageErr.innerText = "";
            passwdErr.innerText = "";


            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }
            

            if (age <= 0) {
                alert("age must be valid")
                return false;
            }

            else if (age < 18 || age > 100) {
                alert("Age must be above 18 and below 100!!");
                return false;
            }

            else if (password.length < 5) {
                alert("Password must be at least 5 characters long!!");
                return false;
            }

            else if (firstName === '' || lastName === '' || email === '' || age === '' || password === '') {
                alert("all field must be filled!!")
                return false;
            }
            else {
                alert('Form submitted successfully!');
                firstName = '';
                lastName = '';
                email = '';
                age = '';
                password = '';
                return true;
                
            }
        });
    </script> -->
</body>

</html>