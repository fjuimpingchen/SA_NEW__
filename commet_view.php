<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="star_rating.css" />

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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





<!-- 評論表格 -->
<div style="margin-top:100px;margin-right:200px;margin-bottom:100px;margin-left:200px;">

<form>
<fieldset>
<h3 style="text-align:center;">評論</h3>


<div style="margin-top:30px">
    <img src="183748.svg" width="100" height="100" style="margin-top:0px"><br>
  <div style="position:relative;left:120px;top:-90px">
    <p style="font-size:16px ">
      &nbsp;&nbsp;&nbsp;&nbsp;<? echo $_GET['CourseYear'];?>學年度&nbsp;&nbsp;&nbsp;&nbsp;第<? echo $_GET['section'];?>學期<br>
    </p>
    <p style="font-size:16px ">
      &nbsp;&nbsp;&nbsp;&nbsp;課程名稱：<? echo $_GET['Coursename'];?><br>
    </p>
    <p style="font-size:16px ">
      &nbsp;&nbsp;&nbsp;&nbsp;授課教師：<? echo $_GET['teachername'];?>
    </p>
  </div>
</div>

    <div class="form-check" style="margin-top:-80px;font-size:16px;">
      <p class="form-check-p" style="margin-top:30px">
        <!-- <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked=""> 公開&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
        <img src="666201.png" width="30" height="30">
        <label>系級：<? echo $_GET['studentdepartment'],$_GET['studentYear']?>年級&nbsp;&nbsp;&nbsp;姓名：<? echo $_GET['studentname']?></label>
      </p>
    </div>

<!-- 星級評論（推薦度） -->
    <div class="form-group" style="margin-top:20px">
      <p style="font-size:16px ">課程推薦度：</p>
      <div class="page__group">
        <div class="rating">

          <input type="radio" name="rating-star" class="rating__control" id="rc">
          <input type="radio" name="rating-star" class="rating__control" id="rc" >
            <input type="radio" name="rating-star" class="rating__control" id="rc" >
            <input type="radio" name="rating-star" class="rating__control" id="rc" >
            <input type="radio" name="rating-star" class="rating__control" id="rc" checked >
            
            <?
    for($i=1;$i<=$_GET['Lesson_level'];$i++){
        echo "<label for=rc1_2 class=rating__item>
            <svg class=rating__star>
              <use xlink:href=#star></use>
            </svg>
            <span class=rating__label>1</span>
          </label>";
    }
            ?>
         
        </div>

      </div>


    <!-- 星級評論（及格難度） -->
          <div class="form-group" style="margin-top:20px">
            <p style="font-size:16px ">課程及格難度：</p>
    <div class="page__group">
      <div class="rating">
        <input type="radio" name="rating-star2" class="rating__control" id="rc6">
        <input type="radio" name="rating-star2" class="rating__control" id="rc7">
        <input type="radio" name="rating-star2" class="rating__control" id="rc8">
        <input type="radio" name="rating-star2" class="rating__control" id="rc9" >
        <input type="radio" name="rating-star2" class="rating__control" id="rc10" checked>
       <? for($i=1;$i<=$_GET['Suggestion_rate'];$i++){
        echo "<label for=rc1_2 class=rating__item>
            <svg class=rating__star>
              <use xlink:href=#star></use>
            </svg>
            <span class=rating__label>1</span>
          </label>";
    }
            ?>
      </div>

    </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
  <symbol id="star" viewBox="0 0 26 28">
    <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"/>
  </symbol>
</svg>
    <p for="exampleTextarea" style="font-size:16px ">評論內容（文字不得少於10字）：</p>
    <textarea class="form-control" id="exampleTextarea" rows="5"><? echo $_GET['Comments'];?></textarea>
  </div>



  <input type="button" class="button" value="上一頁" style="position:relative;
  left: 1150px;top: -95px" onclick="window.location='commet_search.php'">

  </fieldset>
</form>




</body>
</html>
