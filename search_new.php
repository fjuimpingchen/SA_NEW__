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
<?php
    include('session_start.php');
     ?>
      <?php
if(isset($_GET['id'])!=""){
    $_SESSION['userid']= $_GET['id'];
    $_SESSION['username']= $_GET['name'];
}

?>
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
                   <button class="btn btn-default" type="button"  onclick="location.href='search_new_after.php'" style="position:relative; " ><span class="glyphicon glyphicon-search"></span></button>
               </span>



    <script>
    $(document).ready(function(e){
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
