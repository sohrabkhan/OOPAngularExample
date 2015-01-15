/**
 * Created by Sohrab Khan on 14/01/2015.
 */
var app = angular.module("Sohrab", []);

app.controller("ItemController", function($scope, $http, $timeout) {
    $scope.items = [];

    $http.get('http://flubit-product-data.herokuapp.com/products.json').
        success(function(data, status, headers, config) {
            for(var i = 0; i < data.length; i++) {
                var date_str = data[i]['expires_at'];
                date_str = date_str.substring(0, 19);
                var unixTime = Date.parse(date_str);
                var unixNow = new Date();
                var dateDiff = unixTime - unixNow;
                var hours = Math.round((dateDiff % 86400000) / 3600000);
                var minutes = Math.round(((dateDiff % 86400000) % 3600000) / 60000);
                console.log(hours);
                console.log("minutes"+ minutes);

                $scope.items.push({title: data[i]['title'], image_url: data[i]['image_url'], hours: hours, minutes: minutes, date_diff: dateDiff, expires_at: unixTime, price: data[i]['price'], offer_price: data[i]['offer_price']});
            }
            console.log($scope.items);
        }).
        error(function(data, status, headers, config) {
            console.log("Error occured");
        });
});