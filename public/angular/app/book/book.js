"use strict"

angular.module('myApp.book', [
    'ngRoute',
    'ui.materialize'
])
    .config(['$routeProvider', ($routeProvider) => {
        $routeProvider.when('/book', {
            templateUrl: 'book/book.html',
            controller: 'BookController'
        })
    }])

    .controller('BookController', ($scope, $http, $location) => {
        $scope.select_occupancy = [1, 2, 3, 4, 5]
        $scope.available_room_types
        $scope.search_param = {}

        $scope.search = () => {
            $http.post('/api/searchavailability', $scope.search_param).success((data) => {
                $scope.available_room_types = data
            })
        }
    })
