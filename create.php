<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Actum - Create an App</title>
        <link rel="shortcut icon" href="logo.ico" />
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="bg-img">
        <button class="nav-collapse" onclick="reveal();">
            <!-- material icon menu -->
            <img src="svg/nav.svg">
        </button>
        <ul class="nav hidden nav-nice">
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./downloads">Downloads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./develop">Develop an Actum App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./tokens">List of Actum Tokens</a>
            </li>
        </ul>
        <div class="jumbotron jumbotron-fluid pad pad-top">
            <img src="logo.png">
            <h1 class="display-4 bigger"><b>Create an Actum App</b></h1>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">Issue a Token</h1>
            <p class="lead wid">If you're here, you probably know why you might want to create a token. If not, click <a href="./develop">here</a>. If you do know, follow these steps:</p>
            <p class="lead wid steps">1. Decide on a name and symbol for your token. These must be unique, so check <a href="./tokens">the list of Actum tokens</a>.</p>
            <p class="lead wid steps">2. Decide on an initial value (in ActumCoin) and initial quantity. You can have a fixed quantity, or one that increases, decreases, or fluctuates based on outside factors. You do not need to decide if the quantity will change now.</p>
            <p class="lead wid steps">3. Apply to create a token <a href="./apply/token">here</a>.</p>
            <p class="lead wid steps">4. Write your apps using the token with our APIs. To accept your token or ActumCoin payments, use our <a href="./docs#payments">payments API</a>, or to use smart contracts, use our <a href="./docs#contracts">smart contracts API</a>.</p>
        </div>
        <div class="jumbotron jumbotron-fluid pad">
            <h1 class="display-4 wid">Use Smart Contracts and ActumCoin</h1>
            <p class="lead wid">Want to use smart contracts or accept ActumCoin payments, but not create a token? Follow these steps:</p>
            <p class="lead wid steps">1. To accept ActumCoin payments, use our <a href="./docs#payments">payments API</a>, or to use smart contracts, use our <a href="./docs#contracts">smart contracts API</a>.</p>
            <p class="lead wid steps">2. If you accept ActumCoin payments, apply to get on our <a href="./vendors">list of vendors who accept ActumCoin</a> <a href="./apply/list">here</a>.</p>
        </div>
        <!-- JQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>
            var hidden = true;
            function reveal() {
                if (hidden) {
                    $(".hidden").attr("class", "nav reveal nav-nice");
                } else {
                    $(".reveal").attr("class", "nav hidden nav-nice");
                }
                hidden = !hidden;
            }
        </script>
    </body>
</html>
