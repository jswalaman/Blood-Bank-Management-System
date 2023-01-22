<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/c6e4c39b22.js" crossorigin="anonymous"></script></head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form action="user_submit.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="user_name" placeholder="Name">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="user_email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="password" name="user_pass" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="phone" name="user_phone" placeholder="Phone">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="user_city" placeholder="City">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="user_bloodgroup" placeholder="Blood Group">
                    </div>
                    <p>Sign up as Hospital <a href="signup2.php">Register</a></p>
                    <p>Already have an account? <a href="signin.php">Login</a></p>
                </div>
                
                <div class="btn-field">
                    <button type="submit" value="submit" id="signupbtn">Login</button>
                    <!-- <button type="button" id="signinbtn" class="disable">Hospital</button> -->
                </div>
            </form>
        </div>
    </div>

    <!-- <script>
        let signupbtn = document.getElementById("signupbtn");
        let signinbtn = document.getElementById("signinbtn");
        let nameField = document.getElementById("nameField");
        let title = document.getElementById("title");

        signinbtn.onclick = function(){
            nameField.style.maxHeight = "0";
            title.innerHTML = "Sign In";
            signupbtn.classList.add("disable");
            signinbtn.classList.remove("disable");
        }

        signupbtn.onclick = function(){
            nameField.style.maxHeight = "60px";
            title.innerHTML = "Sign Up";
            signupbtn.classList.remove("disable");
            signinbtn.classList.add("disable");
        }
    </script> -->
</body>
</html>