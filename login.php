<?php
    require_once "config.php";

    if(isset($_SESSION['access_token'])){
        header('Location: index.php');
        exit();
    }

    $redirectURL = "http://localhost/facebookLogin/fb-callback.php";
    $permission = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL,$permission);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>

    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">

                <form>
                    <input type="button" onclick="window.location='<?php echo $loginURL;   ?>';" value="Login with facebook" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</body>
</html>