<!DOCTYPE html>
<html>
<head>
  <title>輔大選課系統</title>
  <meta charset="UTF-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">

<!-- FontAwesome_CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</head>
<body>

  <!-- 上方導覽列 -->
    <?php
    include('navbar.php');
     ?>


     <br><br><br><br>

     <div class="container" >

         <div class="table-wrapper" style="height:1000px">
             <div class="table-title">
                 <div class="row">
                    <h3 style="text-align:center;">課程查詢</h3>

   <div class="container" style="margin-top:30px" >
   <div class="row">
       <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
               <div class="input-group-btn search-panel">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                     <span id="search_concept">依系所</span> <span class="caret"></span>
                   </button>
                   <ul class="dropdown-menu" role="menu">
                     <li><a href="#A">依系所</a></li>
                     <li><a href="#B">依一般學程</a></li>
                     <li><a href="#C">依通識涵養課程</a></li>
                     <li><a href="#D">依學院/校課程</a></li>
                     <li><a href="#E">依體育課程</a></li>
                     <li><a href="#F">依外國語文查詢</a></li>
                   </ul>
               </div>
               <input type="hidden" name="search_param" value="all" id="search_param">
               <input type="text" class="form-control" name="x" placeholder="輸入名稱...">

           </div>
       </div>
 </div>
</div>
                 </div>
             </div>
           <form>
<div class="form-group col-md-4" style="margin-top:30px">
     <label for="inputState">開課部別</label>
     <select id="inputState" class="form-control">
       <option selected>選擇...</option>
       <option>...</option>
     </select>
   </div>
 <div class="form-group col-md-4" style="margin-top:30px">
     <label for="inputState">開課學院</label>
     <select id="inputState" class="form-control">
       <option selected>選擇...</option>
       <option>...</option>
     </select>
   </div>
    <div class="form-group col-md-4" style="margin-top:30px">
     <label for="inputState">開課系所</label>
     <select id="inputState" class="form-control">
       <option selected>選擇...</option>
       <option>...</option>
     </select>
   </div>


   <div class="form-group row">
         <div class="col-sm-2" style="left: 15px ;margin-top:30px" ><b>上課時間</b></div>
   <div class="col-sm-10" style="margin-top:-20px;margin-left:200px">
     <div class="form-check"  style="display:inline;margin-top:30px" >
       <input class="form-check-input" type="checkbox" id="gridCheck1">
       <label class="form-check-label" for="gridCheck1" style="margin-top:30px">
         星期一
       </label>
     </div>
        <div class="form-check"  style="display:inline">
       <input class="form-check-input" type="checkbox" id="gridCheck1">
       <label class="form-check-label" for="gridCheck1">
         星期二
       </label>
     </div>
       <div class="form-check"  style="display:inline">
       <input class="form-check-input" type="checkbox" id="gridCheck1">
       <label class="form-check-label" for="gridCheck1">
         星期三
       </label>
     </div>
       <div class="form-check"  style="display:inline">
       <input class="form-check-input" type="checkbox" id="gridCheck1">
       <label class="form-check-label" for="gridCheck1">
         星期四
       </label>
     </div>
       <div class="form-check"  style="display:inline">
       <input class="form-check-input" type="checkbox" id="gridCheck1">
       <label class="form-check-label" for="gridCheck1">
         星期五
       </label>
     </div>
       <div class="form-check"  style="display:inline">
       <input class="form-check-input" type="checkbox" id="gridCheck1">
       <label class="form-check-label" for="gridCheck1">
         不限制
       </label>
     </div>
     <div class="form-group col-md-2">
     <label for="inputState">起始節次</label>
     <select id="inputState" class="form-control">
       <option selected>D1</option>
         <option>D2</option>
     <option>D3</option>
     <option>D4</option>
     <option>D5</option>
     <option>D6</option>
     <option>D7</option>
     <option>D8</option>
     <option>D9</option>
     </select>
   </div>
     <div class="form-group col-md-2">
     <label for="inputState">結束節次</label>
     <select id="inputState" class="form-control">
         <option selected>D1</option>
         <option>D2</option>
     <option>D3</option>
     <option>D4</option>
     <option>D5</option>
     <option>D6</option>
     <option>D7</option>
     <option>D8</option>
     <option>D9</option>
     </select>
   </div>
     </div>

   </div>
       <span class="input-group-btn" style="left: 1050px" >
                   <button class="btn btn-default" type="button"  onclick="location.href='search%20_new_after.php'" style="position:relative; " ><span class="glyphicon glyphicon-search"></span></button>
               </span>






</form>

          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">


                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>序號</th>
                          <th>開課單位 </th>
                          <th>課程名稱</th>
                          <th>老師 </th>
                          <th>學分</th>
						              <th>開課選別/期次</th>
                          <th>上課時間 </th>
                          <th>預選</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>資訊管理系所</td>
                          <td>統計學</td>
                          <td>李俊民</td>
                          <td>3</td>
						  <th>必02</th>
                          <td>Wed D2-D4</td>
                          <td>
  							<button type="button" class="btn btn-link"><i class="fas fa-plus material-icons" data-toggle="modal" data-target="#exampleModal"></i></button>
							     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">預選</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        已成功選取
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='search_prev_new_afterAdd.php'">確定</button>
      </div>
    </div>
  </div>
</div>


                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>資訊管理系所</td>
                          <td>經濟學</td>
                          <td>周靖秦</td>
                          <td>3</td>
						  <th>必02</th>
                          <td>Tue D2-D4</td>
                          <td>
  							<button type="button" class="btn btn-link"><i class="fas fa-plus material-icons" data-toggle="modal" data-target="#exampleModal"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>資訊管理系所</td>
                          <td>系統分析與設計</td>
                          <td>吳濟聰</td>
                          <td>3</td>
						  <th>必00</th>
                          <td>Mon D2-D4</td>
                          <td>
  							<button type="button" class="btn btn-link"><i class="fas fa-plus material-icons" data-toggle="modal" data-target="#exampleModal"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>資訊管理系所</td>
                          <td>創意創新專題</td>
                          <td>林文修</td>
                          <td>2</td>
						  <th>必02</th>
                          <td>Thu D3-D4</td>
                          <td>
  							<button type="button" class="btn btn-link"><i class="fas fa-plus material-icons" data-toggle="modal" data-target="#exampleModal"></i></button>
                          </td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>資訊管理系所</td>
                          <td>資料結構</td>
                          <td>蔡幸蓁</td>
                          <td>3</td>
						  <th>必00</th>
                          <td>Fri D2-D4</td>
                          <td>
  							<button type="button" class="btn btn-link"><i class="fas fa-plus material-icons" data-toggle="modal" data-target="#exampleModal"></i></button>
                          </td>
                      </tr>
                  </tbody>
              </table>
              <div class="clearfix">
                  <ul class="pagination">
                      <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                      <li class="page-item active"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">4</a></li>
                      <li class="page-item"><a href="#" class="page-link">5</a></li>
                      <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
              </div>
          </div>
          </div>

      </div>

	<script>

$(document).ready(function() {
    $('body').bootstrapMaterialDesign();

    // Activate Popovers
    $('[data-toggle="popover"]').popover();
});
	</script>


    <script>$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});</script>
</body>

</html>
