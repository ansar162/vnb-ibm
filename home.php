<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>


<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IBM - NextGen Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
    <!-- Le styles -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/bootstrap/ico/favicon.png">
  </head>

  <body>
<div class="container">
<div class="navbar">
  <div class="navbar-inner">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <span class="brand" href="#">IBM - NextGen</span>
	  
	  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saving<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						  <li class="nav-header">New Saving Account</li>
                          <li><a href="#">Open Saving Account</a></li>
						  <li class="divider"></li>
						  <li class="nav-header">Saving Transaction</li>
                          <li><a href="#">Cash Transaction</a></li>
                        </ul>
                      </li>
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Loan<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						  <li class="nav-header">New Loan Application</li>
                          <li><a href="#">Loan Application(Person)</a></li>
                          <li><a href="#">Loan Application(Jewel)</a></li>
						  <li class="divider"></li>
						  <li class="nav-header">Loan Returns</li>
                          <li><a href="#">Loan Deposits</a></li>
                        </ul>
                      </li>
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						  <li class="nav-header">Reports</li>
                          <li><a href="#">KAMB Report</a></li>
						  <li class="divider"></li>
                          <li><a href="#">Loan Report</a></li>
                        </ul>
                      </li>
					  <li><a href="#">Link1</a></li>
                      <li><a href="#">Link2</a></li>
                    </ul>
                    
                    <ul class="nav pull-right">
                      <li>
					  <form class="navbar-search pull-left" action="">
                      <input type="text" class="search-query span2" placeholder="Search">
					  </form>
					  </li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <?= $fgmembersite->UserFullName(); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Setting</a></li>
                          <li class="divider"></li>
						  <li><a href='access-controlled.php'>A sample 'members-only' page</a></li>
						  <li><a href='change-pwd.php'>Change password</a></li>
                          <li><a href="logout.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
  </div>
</div>
</div> <!-- /container -->

  </body>
</html>
