<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="<?= base_url(); ?>/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        body {
            background-color: #F8F8F8;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-input {
            border: 0px;
            box-shadow: 0 3px 10px 0 rgb(0 0 0 / 2%);
            border-radius: !important 6px;
            margin-bottom: 5;
            height: 39px;
        }
        .loginbox {
            max-width: 700px;
            width: 700px;
            padding:20px;
        }
    </style>

</head>

<body>
<div>
    <div class="container loginbox">
    <div class="row">
        <div class="col">
            <img src="/assets/logo.svg" />
        </div>
        <div class="col">
        <form action="/login/auth" method="post" style="width: 300px;margin-left: 50px;">
            <div class="mb-1">
                <input type="text" name="username" class="form-control login-input" id="exampleInputEmail1" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control login-input" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
    </div>
    </div>
</div>
</body>

</html>