app.controller('UsersCtrl', ['$scope', '$http',
  function ($scope, $http) {
    $http.get('/api/users').then(function(response) {
      $scope.users = response.data;
    });
  }]);

