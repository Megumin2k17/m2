<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="/front/css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="/front/css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="/front/css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="/front/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/front/css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="/front/css/fa-regular.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-primary-gradient">
        <a class="navbar-brand d-flex align-items-center fw-500" href="users.html"><img alt="logo" class="d-inline-block align-top mr-2" src="/front/img/logo.png"> Учебный проект</a> <button aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarColor02" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="page_login.html">Войти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Выйти</a>
                </li>
            </ul>
        </div>
    </nav>
    <?= $this->section('content'); ?>


<script src="/front/js/vendors.bundle.js"></script>
<script src="/front/js/app.bundle.js"></script>
<script>

    $(document).ready(function()
    {

      
    });

</script>
</body>
</html>