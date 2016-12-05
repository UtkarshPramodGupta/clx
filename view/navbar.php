<nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display --> 
                    <div class="navbar-header"> 
                        
                        <a class="navbar-brand" href="/"><img alt="Brand" class="Brand-image" src="/img/favicon.png"></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                        
                    <!-- Collapsable nav-bar for toggling on mobile -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/postad" class="btn">Sell Item</a></li>
                            <li><a href="/store" class="btn">Go to Store</a></li>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">    
                            <?php if(!isset($_SESSION['uid'])) {
                                echo '
                                        <li><a href="/login" type="submit" class="btn btn-nav">Log In</a></li>
                                        <li><a href="/register" type="submit" class="btn btn-nav">Register</a></li>
                                    ';
                            }
                            else{
                                echo '<li><a href="/logout" class="btn btn-nav">Logout</a></li>';
                            }?>
                        </ul>
                        
                    </div>
                    <!-- /.navbar-collapse -->
                    
                </div>
            </nav>