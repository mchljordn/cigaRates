<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styleAuth.css">
    <title>Sign in</title>
  </head>
  <body>
    <div>
        <div>
            <div>
                <h1>Login</h1>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div>
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                        <p id="login-text">Don't have an account yet? <a href='/signup'>Register here</a></p>
                        <button id="back-button" type="button" onclick="location.href='/'">Back</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>     
                </form>
            </div>  
            <footer>
            <p>&copy; <?= date('Y') ?> cigaRates</p>
        </footer> 
        </div>
    </div>
  </body>
</html>