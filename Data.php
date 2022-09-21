<!DOCTYPE html>
<html>
<head>
    <meta charset="UtF-8" />
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Vigor Fitness Academy </title>
    <meta name="Description" content="This is our fitness academy " />
    
    <style>
    </style>
    <script></script>
    <link rel="stylesheet " href="l.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title> Form</title>
</head>
<body>
<div class="container" id="main">

        <form onsubmit= "return validation()" method="Post" action="connect.php" name="regform" id="form"
            class="form-Register" >
           
            <h2 class="title"> Register </h2>
            <div class="input-field">
              <label for="username"> Username </label>
                <input type="text " name="username" placeholder="Username" id="username" required>
                <div class="error"> Error message  </div>
            </div>
            <div class="input-field">
             <label class="email">Email<label>
                <input type="email" name="email" placeholder="Email" id="Email" required>
            </div>
            <div class="input-field">
               <label class="password"> Password</label>
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>
            <div class="input-field">
               <label class="mobile">Mobile </label>
                <input type="text" name="mobile" placeholder="Mobile Number" required>
            </div>

            <input type="submit" value="Register" class="LB">

         
        </form>

        <form  method="Post" action="log.php" name="logform" id="lform" class="form-Login">
            <h2 class="title"> Login </h2>
            <div class="input-field">
              <label > Username </label>
                <input type="text " name="username" placeholder="Username" required>
            </div>
            <div class="input-field">
               <label> Password  </label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <p class="forgrt"> Forget Password ? </p>
            <input type="submit" value="Login" class="LB">
           
            <div class="social-media">
                
            </div>

        </form>

        <div class="overrelay-container">
            <div class="overrelay">
                <div class="over-right">
                    <button id="Register"> Register </button>
                </div>
                <div class="over-left">

                    <button id="Login"> Login </button>
                </div>


            </div>
        </div>



    </div>















    <script src="logval.js">

</script>

    
    <script src="log.js">

    </script>
</body>
</html>