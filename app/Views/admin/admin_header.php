<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - <?php echo ucfirst($content_); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link href="<?= base_url(); ?>/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
.modal-content {
    display: inherit;
    border: 0px;
    box-shadow: 0 5px 10px 0 rgb(0 0 0 / 9%);
}
.modal-header, .modal-body{
    margin: 0 !important;
}
.table thead tr th {
    border-bottom: 3px solid #d0d0d04a!important;
}
.table div {
    margin: 0 !important;
}
</style>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: Open Sans;
}

body {
    background-color: #F8F8F8
}

.wrapper {
    display: flex;
    position: relative
}

.wrapper .sidebar {
    /* atur saat nav di klik */
    width: 250px;
    height: 100%;
    background: #FFFFFF;
    position: fixed;
    overflow: hidden;
    transition: width 1s;
}

.wrapper .sidebar h2 {
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px
}

.wrapper .sidebar ul {
    padding: 0;
}

.wrapper .sidebar ul li {
    padding: 10px 15px;
    border-left: 5px ;
    border-left: 5px solid transparent;
}
.wrapper .sidebar ul li.active {
    border-left: 5px solid #CA10B7;
    font-weight: 700;
}
.wrapper .sidebar ul li.active a {
    color: #000000
}

.wrapper .sidebar ul li a {
    color: #bdb8d7;
    display: block;
    text-decoration: none;
}

.wrapper .sidebar ul li a .fa {
    width: 25px
}

.wrapper .sidebar ul li:hover {
    
}

.wrapper .sidebar ul li:hover a {
    color: #000000
}

.wrapper .sidebar .social_media {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex
}

.wrapper .sidebar .social_media a {
    display: block;
    width: 40px;
    height: 40px;
    background: transparent;
    line-height: 45px;
    text-align: center;
    margin: 0 5px;
    color: #bdb8d7;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px
}

.wrapper .main_content {
    width: 100%;
    /* atur saat nav di klik */
    margin-left: 250px;
    transition: margin 1s;
}

.wrapper .main_content .header {
    padding: 10px;
    background: #8832D7;
    color: #fff;
    border-bottom: 1px solid #e0e4e8
}

.wrapper .main_content .info {
    margin: 20px;
    color: #717171;
    line-height: 25px
}

.wrapper .main_content .info div {
    margin-bottom: 20px
}

.card {
    box-shadow: 0 3px 10px 0 rgb(0 0 0 / 2%);
    border: 1px solid rgb(0 0 0 / 0%);
}
.card-header {
    background-color: rgb(255 255 255);
    border-bottom: 1px solid rgb(0 0 0 / 7%);
}


body::-webkit-scrollbar       {background-color:#fff;width:16px}
body::-webkit-scrollbar-track {background-color:#fff}
body::-webkit-scrollbar-thumb {background-color:#babac0;border-radius:16px;border:4px solid #fff}

    </style>

</head>
<body class="overflow-hidden">