<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Conceptart</a>
                </div>
            
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav navbar-left">
                         <li><a class="{{ Request::is('picturies') ? 'active' : '' }} navbar-link" href="/picturies"><i class="fa fa-picture-o"></i> Бүтээлүүд</a></li>
                         <li><a class="{{ Request::is('categories') ? 'active' : '' }} navbar-link" href="/categories"><i class="fa fa-th-large"></i> Ангилал</a></li>
                          <!--<li><a class="navbar-link" href="#"><i class="fa fa-connectdevelop"></i>Форум</a></li>-->
                        
                    </ul>
                      <ul class="nav navbar-nav navbar-right">
                                      <li class=""><a href="https://laracasts.com/login?return=https://laracasts.com/newsletters/2015/july" class="navbar-link">Нэвтрэх</a>
                      </li>
  
                      <li>
                          <a href="/auth/register" class="navbar-link btn btn-default btn-join">Эхлэн суралцагч</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>