<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/Raos.css?ver=2.4') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/variable.css') ?>">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 17px;
            overflow: hidden; /* Prevent scrolling on the video background */
            background-color: white;
        }

        .base_img {
            margin-left: 10px;
            width: 100%;
            max-width: 600px;
            height: auto;
            /* transition: width 2s, height 2s; */
        }

        /* .base_img:hover {
            height: 520px;
            width: 620px;
        } */

        .sign_title {
            color: #007acc;
        }

        .sign_button {
            background-color: #5c7ae0;
            padding: 5px 20px;
            border-radius: 30px;
        }

        .input_field {
            border-radius: 10px;
            border: 2px solid #0086b3;
            padding: 10px;
            color: #0086b3;
            width: 100%;
        }

        .title_head {
            color: #0086b3;
            font-weight: bold;
        }

        .login_form {
            margin-top: 90px;
            margin-left:20px;
            width:400px;

        }
        .logos{
        width:90px;
        height:90px;
       }
    </style>
</head>
<body>
    <div class="wrapper_head" style="background-color: white;">
    <div class="logo_head ">
            <img class="logos " src="<?= base_url("images/loader.png")?>" alt="Logo Image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <img class="base_img " src="<?= base_url("images/image01.jpg")?>" alt="Logo Image">
                </div>
                <div class="col-md-6">
                    <div class="login_form">
                        <h1 class="title_head">ROBO LABS ERP!</h1>
                        <h4 class="sign_title">SIGN IN!</h4>
                        <form>
                            <input type="email" class="form-control input_field" placeholder="Email" /><br>
                            <input type="password" class="form-control input_field" placeholder="Password" /><br>
                            <button type="submit" class="btn btn-primary sign_button">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
