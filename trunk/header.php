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
                      <li class="active"><a href="?page=content">Home</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saving<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						  <li class="nav-header">New Saving Account</li>
                          <li><a href="?page=newSavingAccount">Open Saving Account</a></li>
						  <li class="divider"></li>
						  <li class="nav-header">Saving Transaction</li>
                          <li><a href="?page=savingTransaction">Cash Transaction</a></li>
                        </ul>
                      </li>
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Loan<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						  <li class="nav-header">New Loan Application</li>
                          <li><a href="?page=newPersonLoan">Loan Application(Person)</a></li>
                          <li><a href="?page=newJewelLoan">Loan Application(Jewel)</a></li>
						  <li class="divider"></li>
						  <li class="nav-header">Loan Returns</li>
                          <li><a href="?page=loanDeposit">Loan Deposits</a></li>
                        </ul>
                      </li>
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						  <li class="nav-header">Reports</li>
                          <li><a href="?page=kambReport">KAMB Report</a></li>
						  <li class="divider"></li>
                          <li><a href="?page=loanReport">Loan Report</a></li>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $fgmembersite->UserFullName(); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Setting</a></li>
                          <li class="divider"></li>
						  <li><a href='?page=access-controlled'>members-only</a></li>
						  <li><a href='?page=change-pwd'>Change password</a></li>
                          <li><a href="?page=logout">Logout</a></li>
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
</div>