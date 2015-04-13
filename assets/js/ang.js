var app = angular.module('playground',[]);

app.controller ('frmControl', function ($scope,$http) {
    
        $scope.frmSubmit = function () {
            console.log ("Naam:" + $scope.firstname + " " + $scope.name + " E-mail: " + $scope.email);
            
            
            var request = $http({
                    method: "post",
                    url: window.location.href,
                    data: {
                        name:$scope.name,
                        firstname:$scope.firstname,
                        email: $scope.email
                    },
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
            
            request.success(function () {
                    console.log ('success');
                    $('#resultTable').append("<tr><td>Not set</td><td>" + $scope.name + "</td><td>" + $scope.firstname + "</td><td>" + $scope.email + "</td></tr>")
            });
      };
});