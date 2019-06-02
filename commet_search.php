<!DOCTYPE html>
<html>
<head>
  <title>搜尋評論</title>
  <meta charset="UTF-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!--JQuery-->
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <!--Select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



</head>
<body>

  <!-- 上方導覽列 -->
    <?php
    include('navbar.php');
     ?>


    <script type="text/javascript">
  $(document).ready(function(){
  	$('[data-toggle="tooltip"]').tooltip();
  });
  </script>
  </head>



<!-- 搜尋評論 -->
  <div class="container" style="margin-top:100px">
      <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
  		    <div class="input-group">
            <div>

                      <select class="js-example-basic-single" name="state" style="width: 15%">
                             <option value="AL">依關鍵字</option>
                             <option value="WY">依作者</option>
                      </select>



                      <script>
                       $(document).ready(function() {
                           $('.js-example-basic-single').select2();
                       });
                    </script>
                  </div>

                  <input type="hidden" name="search_param" value="all" id="search_param">
                  <input type="text" class="form-control" name="x" placeholder="搜尋">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button" style="margin-top:28px"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
              </div>
          </div>
  	</div>
  </div>

  <script>
  $(document).ready(function(e){
  $('.search-panel .dropdown-menu').find('a').click(function(e) {
  e.preventDefault();
  var param = $(this).attr("href").replace("#","");
  var concept = $(this).text();
  $('.search-panel span#search_concept').text(concept);
  $('.input-group #search_param').val(param);
});
});
  </script>


<!-- 最新評論 -->
      <div class="container" style="margin-top:40px">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-15" style="text-align:center"><h2><b>最新評論</b></h2></div>
                      <!-- <div class="col-sm-4">
                          <div class="search-box">
                              <i class="material-icons">&#xE8B6;</i>
                              <input type="text" class="form-control" placeholder="Search&hellip;">
                          </div>
                      </div> -->
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered" style="margin-top:30px">
                  <thead>
                      <tr>
                          <th></th>
                          <th>課程名稱</i></th>
                          <th>授課老師</th>
                          <th>發布者</i></th>
                          <th>發布時間</th>
                          <th>評論</th>
                          <!-- <th>Country <i class="fa fa-sort"></i></th> -->
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>系統分析與設計</td>
                          <td>吳濟聰</td>
                          <td>王小美</td>
                          <td>2019-11-11</td>
                          <td>
  							              <a href="#" class="view" title="view" data-toggle="tooltip" onclick="window.location='commet_view.php'"><i class="material-icons">&#xE417;</i></a>
                              <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>經濟學</td>
                          <td>周靜琴</td>
                          <td>王小明</td>
                          <td>2019-12-03</td>
                          <td>
  							              <a href="#" class="view" title="view" data-toggle="tooltip" onclick="window.location='commet_view.php'"><i class="material-icons">&#xE417;</i></a>
                              <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>統計學</td>
                          <td>李俊民</td>
                          <td></td>
                          <td>2019-03-24</td>
                          <td>
  							               <a href="#" class="view" title="view" data-toggle="tooltip" onclick="window.location='commet_view.php'"><i class="material-icons">&#xE417;</i></a>
                              <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                          </td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>資料結構</td>
                          <td>蔡姓真</td>
                          <td>吳丁丁</td>
                          <td>2019-09-23</td>
                          <td>
  							                <a href="#" class="view" title="view" data-toggle="tooltip" onclick="window.location='commet_view.php'"><i class="material-icons">&#xE417;</i></a>
                              <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                          </td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>電子商務</td>
                          <td>廖建祥</td>
                          <td>李曉萱</td>
                          <td>2019-08-07</td>
                          <td>
  							               <a href="#" class="view" title="view" data-toggle="tooltip" onclick="window.location='commet_view.php'"><i class="material-icons">&#xE417;</i></a>
                              <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                          </td>
                      </tr>
                  </tbody>
              </table>
              <div class="clearfix">
                  <!-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> -->
                  <ul class="pagination">
                      <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item" ><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link">5</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>





</body>
</html>
