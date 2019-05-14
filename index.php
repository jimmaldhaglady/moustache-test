<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include('header.php')?>

    <title>Classic Tee</title>
  </head>
  <body>
    <div ng-app="myApp" ng-controller="myCtrl">
      <?php include('menu.php')?>
      <div class="container">
        <div class="col-12">
          <br />
        </div>
        <div class="row">
          <div class="col-md-5">
            <img src="images/classic-tee.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-md-7">
            <h3>Classic Tee</h3>
            <hr />
            <h4>$75.00</h4>
            <hr />
            <p>
              Dolor sit amet, consectetur adipiscing elit.Haec et tu ita posuisti, et verba vestra sunt. Quod autem ratione actum est, id officium appellamus dolorsit amet, consectetur adipiscing elit. Haec et tu ita posuisti, et verba vestra sunt.  Quod autem ratione actum est, id officium appellamus
            </p>
            <p>Size<span style="color: #FF0000">*</span> : <b>{{size}}</b></p>
            <p class="boxed">
              <input type="radio" id="s" ng-model="size" name="size" value="S">
              <label for="s">S</label>

              <input type="radio" id="m" ng-model="size" name="size" value="M">
              <label for="m">M</label>

              <input type="radio" id="l" ng-model="size" name="size" value="L">
              <label for="l">L</label>
            </p>
            <!-- ProductId 1 -->
            <button type="button" class="btn btn-dark" ng-disabled="size==undefined" ng-click="addToCart(1)">ADD TO CART</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include('footer.php')?>
    <script>
      var app = angular.module('myApp', []);
      app.controller('myCtrl', function($scope) {
        $scope.cart={};
        $scope.cartCount=0;
        $scope.addToCart = function(productId) {
          arrayIdex=productId+$scope.size;
          product=[{name:'Classic Tee', size: $scope.size, price: '75.00'}]
          if($scope.cart[arrayIdex]){
            $scope.cart[arrayIdex][1]++;
          }
          else{
            $scope.cart[arrayIdex]={}
            $scope.cart[arrayIdex][0]=product
            $scope.cart[arrayIdex][1]=1;
          }
          $scope.cartCount++;
        }
      });
    </script>
  </body>
</html>