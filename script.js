var app=angular.module('single-page-app',['ngRoute']);


app.config(function($routeProvider){


      $routeProvider
          .when('/',{
                templateUrl: 'viewme/expenselist.html'
          })
          .when('/about',{
                templateUrl: 'viewme/about.html'
          }).when('/edit-customer/0',{
              templateUrl: 'viewme/edit-expenses.html'
          });


});


app.controller('cfgController',function($scope){

      $scope.message="Hello world";

});
