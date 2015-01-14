/**
 * Created by Sohrab Khan on 14/01/2015.
 */
var app = angular.module("Sohrab", []);

app.controller("ItemController", function($scope, $http, $timeout) {
    $http.get('http://flubit-product-data.herokuapp.com/products.json').
        success(function(data, status, headers, config) {
            $scope.items = data;
        }).
        error(function(data, status, headers, config) {
            console.log("Error occured");
        });


    $scope.counter = 0;
    $scope.onTimeout = function(){
        $scope.counter++;
        mytimeout = $timeout($scope.onTimeout,1000);
    }
    var mytimeout = $timeout($scope.onTimeout,1000);

    $scope.stop = function(){
        $timeout.cancel(mytimeout);
    }
});