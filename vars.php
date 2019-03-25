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

    $indexContent = '
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="card mt-5">
                        <div class="card-header">
                            Welcome to the Index Page
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">This is the index poage of the Note Taking App</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Go somewhere =)
                        </a>
                        </p>
                        <div class="collapse" id="collapse">

                        <div class="card card-body">
                        <nav class="nav">
                            <a class="nav-link" href="login.php">Home</a>
                            <a class="nav-link" href="database.php">Database</a>
                        </nav>
                        </div>
                      </div>
                    </div>           
                </div>
            </div>
        </div>
    ';
 
   
?>


 