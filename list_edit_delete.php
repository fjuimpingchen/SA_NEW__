<!DOCTYPE html>
<html>
<head>
  <title>我的評論</title>
  <meta charset="UTF-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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


</head>
<body>
<?php
    include('session_start.php');
     ?>
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
    <script>
        var plus_test= " <thead>                    <tr><th></th><th>課程名稱</th>               <th>授課老師</th>               <th>學年</th>               <th>學期</th><th>評論</th>   </tr>       </thead>";
          var StudentidArray = [];
          var TeacheridArray = [];
          var CourseidArray = [];
          var CommentidArray = [];
    fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Student',{
    headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
  }
  ).then(response => response.json())
    .then(function(Student){
        $.each(Student.records,function(i,Student){
            StudentidArray.push(Student.id);
        })
     fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Teacher',{
    headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
  }
  ).then(response => response.json())
     .then(function(Teacher){
         $.each(Teacher.records,function(i,Teacher){
             TeacheridArray.push(Teacher.id);
         })
        fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Course',{
    headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
  }
  )
  .then(response => response.json())
  .then(function(Course){
            $.each(Course.records,function(i,Course){
                CourseidArray.push(Course.id);
            })
       fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Comment',{
    headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
  }
  )
  .then(response => response.json())
  .then(function(Comment){
           $.each(Comment.records,function(i,Comment1){
                CommentidArray.push(Comment1.id);
            })
           console.log(CommentidArray);

           $.each(Student.records,function(i,item){
               if(item.fields.Student_ID == "<? echo $_SESSION['userid']?>"){
                   $.each(item.fields.Comment ,function(i,item1){
                       num = i+1;
                       Comment_index = CommentidArray.indexOf(item1);//找到comment表中的位置
                       Course_index =CourseidArray.indexOf(Comment.records[Comment_index].fields.Course_ID[0]);//找到course中的位置
                       Coursename = Course.records[Course_index].fields.Course_name;
                       Year = Course.records[Course_index].fields.Year;
                       section = Course.records[Course_index].fields.section;
                       teacher_index = TeacheridArray.indexOf(Course.records[Course_index].fields.Teacher_ID[0])
                       teachername = Teacher.records[teacher_index].fields.Teacher_name;
                       console.log(Coursename,teachername,Year,section);
                       plus_test = plus_test+ "<tr><td>"+num+"</td><td>"+Coursename+"</td><td>"+teachername+"</td><td>"+Year+"</td><td>第"+section+"學期</td><td>"+
                       "<a href=# class=view title=view data-toggle=tooltip onclick=window.location='commet.php'><i class=material-icons>&#xE417;</i></a>"+
                       "<a href=# class=edit title=Edit data-toggle=tooltip onclick=window.location='commet.php'><i class=material-icons>&#xE254;</i></a>"+
                        "<a href=# class=delete title=Delete data-toggle=tooltip onclick=window.location='list_delete.php'><i class=material-icons>&#xE872;</i></a></td></tr>"
               
                       
                       
                   })
               }
               
           })
            
            x=document.getElementById("demo"); // 找到元素
            x.innerHTML= plus_test ; // 改变内容
       })
        })
        })
     })
</script>





<!-- 已修過之清單 -->
      <div class="container" style="margin-top:100px">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-7" style="text-align:right"><h2><b>我的評論</b></h2></div>
                      <!-- <div class="col-sm-4">
                          <div class="search-box">
                              <i class="material-icons">&#xE8B6;</i>
                              <input type="text" class="form-control" placeholder="Search&hellip;">
                          </div>
                      </div> -->
                  </div>
              </div>
              <table class="table table-striped table-hover table-bordered" style="margin-top:30px" id=demo>
                  <thead>
                      <tr>
                          <th></th>
                          <th>課程名稱</th>
                          <th>授課老師</th>
                          <th>學年</th>
                          <th>學期</th>
                          <th>評論</th>

                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>系統分析與設計</td>
                          <td>吳濟聰</td>
                          <td>107</td>
                          <td>第2學期</td>
                          <td>
  							              <a href="#" class="view" title="view" data-toggle="tooltip" onclick="window.location='commet.php'"><i class="material-icons">&#xE417;</i></a>
                              <a href="#" class="edit" title="Edit" data-toggle="tooltip" onclick="window.location='commet.php'"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip" onclick="window.location='list_delete.php'"><i class="material-icons">&#xE872;</i></a>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>經濟學</td>
                          <td>周靜琴</td>
                          <td>107</td>
                          <td>第2學期</td>
                          <td>
  							              <a href="#" class="view" title="view" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                              <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>統計學</td>
                          <td>李俊民</td>
                          <td>107</td>
                          <td>第2學期</td>
                          <td>
  							               <a href="#" class="view" title="view" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                              <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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



</html>



