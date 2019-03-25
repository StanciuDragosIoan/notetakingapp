<?php
    // titles
    $page= '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <?php echo $bootstrapCSS ?>
        <title>Document</title>
    </head>
    <body>
     


     <!--Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
    ';

    $bootstrapCss = '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';

    $pageHeader = '
    <nav class="navbar bg-dark fixed-top mb-5">
        <a href="home.php" class="navbar-brand text-light m-auto">Welcome to the NoteTaking App</a>
    </nav>
    <br><br><br>
    ';

    $indexContent = '
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="card mt-5">
                        <div class="card-header">
                            Welcome to the Index Page
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">This is the index page of the Note Taking App</h5>
                        <p class="card-text">Click the button below to navigate.</p>
                        <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Go somewhere =)
                        </a>
                        </p>
                        <div class="collapse" id="collapse">

                        <div class="card card-body">
                        <nav class="nav">
                            <a class="nav-link" href="home.php">Home</a>
                            <a class="nav-link" href="database.php">Database</a>
                        </nav>
                        </div>
                      </div>
                    </div>           
                </div>
            </div>
        </div>
    ';

    $LogIn = ' <div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="card mt-5">
                <div class="card-header">
                    Welcome to the Log In Screen
                </div>
                <div class="card-body">
                <h5 class="card-title">This is the login page of the Note Taking App</h5>
                <p class="card-text">Please Authenticate before proceeding =).</p>
                <p>
                
                <form>
                    <div class="form-group">
                        <label for="emailAddress">Email address</label>
                        <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="text" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <p class="my-3">Not a registered user?</p>
                     <a href="signup.php" class="btn btn-secondary">Sign Up</a>
                </form>
            </div>           
        </div>
    </div>
</div>';

$SignUp = ' <div class="container">
<div class="row">
    <div class="col-sm-10">
        <div class="card mt-5">
            <div class="card-header">
                Welcome to the Sign Up Screen
            </div>
            <div class="card-body">
            <h5 class="card-title">This is the Sign Up Page of the Note Taking App</h5>
            <p class="card-text">Please Sign Up in order to proceed =).</p>
            <p>
            
            <form>
                <div class="form-group">
                    <label for="emailAddress">Email address</label>
                    <input type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="text" class="form-control" id="loginPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" id="signUp">Sign Up</button>
            </form>
        </div>           
    </div>
</div>
</div>';
 
   
?>


 