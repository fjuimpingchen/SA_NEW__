<!-- 上方導覽列 -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a target="_blank" class="navbar-brand" onclick="location.herf='search_new.php'">輔仁大學選課系統</a>
      </div>
      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">選課
                 <span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu">
                     <li><a href="#" onclick="window.location='search_prev.php'">預選</a></li>
                     <li><a href="#" onclick="window.location='search_new.php'">加選</a></li>
                     <li><a href="#" onclick="window.location='withdrawal.php'">退選</a></li>
                 </ul>
              </li>
              <li><a href="#" onclick="window.location='list_order.php'">排序志願</a></li>
              <!-- <li class="active"><a href="http://bootsnipp.com/snippets/featured/nav-account-manager" target="_blank">Inspirado en este ejemplo</a></li> -->
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">評論
                  <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="#" onclick="window.location='commet_search.php'" style="cursor:pointer">查看評論</a></li>
                      <li><a href="#" onclick="window.location='list_edit_delete.php'">我的評論</a></li>
                      <li><a href="#" onclick="window.location='list_commet.php'">新增評論</a></li>
                  </ul>
               </li>
           </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span> 
                      <strong>王小美</strong>
                      <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <div class="navbar-login">
                              <div class="row">
                                  <div class="col-lg-4">
                                      <p class="text-center">
                                          <span class="glyphicon glyphicon-user icon-size"></span>
                                      </p>
                                  </div>
                                  <div class="col-lg-8">
                                      <p class="text-left"><strong>王小美</strong></p>
                                      <p class="text-left small">406402323</p>
                                      <p class="text-left">
                                          <a href="#" class="btn btn-primary btn-block btn-sm">編輯帳戶</a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <div class="navbar-login navbar-login-session">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <p>
                                          <a href="#" class="btn btn-danger btn-block" onclick="window.location='login.php'">登出</a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
</div>
