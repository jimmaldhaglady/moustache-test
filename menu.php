<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item dropdown">
	        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	          My Cart({{cartCount}}) <span class="caret"></span>
	        </a>

	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <div ng-repeat="ct in cart" class="row">
		          <div class="col-6">
		          	<img src="images/classic-tee.jpg" class="img-fluid" alt="Responsive image">
		          </div>
		          <div class="col-6">
		          	<div>{{ct[0][0].name}}</div>
		          	<div>{{ct[1]}} * <b>$ {{ct[0][0].price}}</b></div>
		          	<p>Size:{{ct[0][0].size}}</p>
		          </div>
	          </div>
	        </div>
	    </li>
	    </ul>
	  </div>
	</div>
</nav>