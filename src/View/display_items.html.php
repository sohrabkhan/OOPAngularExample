<?php
/**
 * @author Sohrab Khan
 * @copyright 2014 Sohrab Khan
 * @version 0.1
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="src/Assets/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script src="src/Assets/ItemController.js"></script>
        <title>Press Easyon - Items Display</title>
    </head>
    <body ng-app="Sohrab">
        <div class="row top-heading">
            <div class="col-lg-12">
                <a href="#" class="logo-text">press easyon</a>
            </div>
        </div>
        <nav class="navbar nav-bar-custom-bg">
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="refine: lego or playmobile">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="continer">
            <div class="row" ng-controller="ItemController">
                <ul>
                    <li ng-repeat="item in items">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item-centered" >
                            <div class="each-item">
                                <img ng-src="{{ item.image_url }}" class="item-image" />
                                <span class="item-title-span">{{ item.title }}</span>
                                <div class="price-counter">
                                    <div class="price">
                                        <span class="div-price">£{{ item.price }}</span>
                                        <span class="countdown icon-clock">{{ item.hours }}h {{ item.minutes }}m</span>
                                    </div>
                                </div>
                                <div class="button-div">
                                    <button class="btn btn-success">View and steal this deal</button>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </body>
</html>