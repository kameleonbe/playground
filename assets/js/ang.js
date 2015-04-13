var app = angular.module('playground',[]);

app.controller ('frmControl', function ($scope,$http) {
    
        $scope.frmSubmit = function () {
            console.log ("Naam:" + $scope.firstname + " " + $scope.name + " E-mail: " + $scope.email);
            
            
            var request = $http({
                    method: "post",
                    url: window.location.href + "index.php",
                    data: {
                        name:$scope.name,
                        firstname:$scope.firstname,
                        email: $scope.email
                    },
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            
            request.success(function () {
                    console.log ('success');
            });
      };
});