<?php
    header('Content-Type: text/html');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/main.inc.php');
    $GLOBALS['mobile'] = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RSMA LLC Services</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/static/css/styles.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function displayError(message) {
            if($('#warning-banner')) {
                $('#warning-banner').hide();
            }

            let $error = $('<div id="warning-banner" class="warning-banner" style="margin-bottom: 15px; margin-top: 15px;"></div>');
            $('<p class="warning-stripe" ></p>').appendTo($error);
            $('<p id="warning-text" class="warning-text"  style="font-size: 14px; color: black;"><strong>' + message + '</strong></p>').appendTo($error);

            $(document).ready(function() {
                $('#contactForm').before($error);
            });
        }

        function displayIdMessage(message) {
            let $id = $('<div id="id-banner" class="id-banner" style="margin-bottom: 15px; margin-top: 15px;"></div>');
            $('<p class="id-stripe" ></p>').appendTo($id);
            $('<p id="id-text" class="id-text" style="font-size: 14px; color: black;"><strong>' + message + '</strong></p>').appendTo($id);

            $(document).ready(function() {
                $('#id-banner').before($id);
            });
        }
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-primary container-fluid" style="background-color: slategrey; box-shadow: 0px 2px 4px rgba(0,0,0,0.2);">
    <?php if ($GLOBALS['mobile']) {?>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="linkDiv">
            <a href="http://<?php echo get_root_url() ?>" style="margin-right: 30px">Home</a>
        </div>
        <div class="linkDiv">
            <a href="/what-is-a-notary">What is a Notary?</a>
        </div>
        <div class="linkDiv">
            <a href="/services">Our Services</a>
        </div>
        <div class="linkDiv">
            <a href="/fees">Fees</a>
        </div>
        <div class="linkDiv">
            <a href="/contact">Contact Us</a>
        </div>
    </div>
    <?php } ?>

    <div class="navbar-brand" style="margin-left: 0px !important; padding-bottom: 0px !important; padding-top: 0px !important;">
        <?php if ($GLOBALS['mobile']) { ?>
        <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        <?php } ?>
        <a id="logo" href="http://<?php echo get_root_url() ?>" title="RSMA LLC Services">
            <img id="logo" alt src="/static/assets/logo.png">
        </a>
    </div>
    <?php if (!$GLOBALS['mobile']) {
        ?>
    <div class="topnav">
        <a href="http://<?php echo get_root_url() ?>">Home</a>
        <a href="/what-is-a-notary">What is a Notary?</a>
        <a href="/services">Our Services</a>
        <a href="/fees">Fees</a>
        <a href="/contact">Contact Us</a>
    </div>

    <div class="navbar-brand" style="padding-left: 32%; margin-left: 0px !important; padding-bottom: 0px !important; padding-top: 0px !important;">
        <a id="logo" href="#" title="Vets">
            <img style="width: 100px; height: 100px;" id="logo" alt src="/static/assets/notary.png">
        </a>
    </div>
    <?php
        }
    ?>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</nav>
<div id="container">
    <div id="mainDiv">
