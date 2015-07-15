/**
 * Created by Josh on 7/14/2015.
 */
angular.module('app',['ngRoute'])
    .config(function ($routeProvider,$locationProvider) {
        $routeProvider.
            when('/',{
                templateUrl:'/expenselists.html',
                controller:'joshCtrl'
            });
        //$locationProvider.html5Mode(true);
    });

