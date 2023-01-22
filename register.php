<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="loginregister.css">
    </head>
    <body>
        <div class="login-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 login-right">
                    <h2>Register Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>

                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>