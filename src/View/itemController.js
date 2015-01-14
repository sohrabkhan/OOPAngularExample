/**
 * Created by Sohrab Khan on 14/01/2015.
 */
var app = angular.module("Sohrab", []);

app.controller("PostsCtrl", function($scope, $http) {
    $http.get('data/posts.json').
        success(function(data, status, headers, config) {
            $scope.posts = data;
        }).
        error(function(data, status, headers, config) {
            // log error
        });
});