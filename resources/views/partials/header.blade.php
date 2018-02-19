<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/shoppingcart">BOOKS</a>
    </div>


  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="/home1">Home  <!-- <span class="sr-only">(current)</span> --></a></li>
        <li ><a href="/contact">Contact </a></li>
        <li><a href="/about">About</a></li>

         <li><a href="/addbooks">Add Books</a></li>
        <!--  <li><a href="/checkout">Add bankdetails</a></li> -->
        </ul>
    <!-- Collect the nav links, forms, and other content for toggling -->
   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/dashboard"><i class="fas fa-shopping-cart"></i> shopping cart <span class="badge">
           {{Session::has('cart') ? Session::get('cart')->totalQty++: ''}}
        </span></a></li>
        <li class="dropdown">
          <a href="/login" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Usermanagent 
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">login</a></li>
            <li><a href="#">logout</a></li>
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

