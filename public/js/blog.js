(function() {
	"use strict";

	var app = angular.module("blog", []);

    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");

    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller("ManagePostsController", ['$scope', '$http', '$log', function($scope, $http, $log) {

        $scope.posts = [];

        // An Ajax get request to load some data from the server
        $http.get("/posts").then(function(response) {
            $log.info("Ajax request completed successfully!");
            $log.debug(response);
            $scope.posts = response.data;
        }, function(response) {
            $log.error("Ajax request failed for some reason!");

            $log.debug(response);
        });

        $scope.deletePost = function(index) {
            var id = $scope.posts[index].id;
            $http.delete("/posts/" + id).then(function(response) {
                $log.info("Ajax request deleted record successfully!");
                $log.debug(response);
                $scope.posts.splice(index, 1);
            }, function(response) {
                $log.error("Ajax request failed for some reason!");
                $log.debug(response);
            });
        };

    }]);

})();