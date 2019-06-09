<!DOCTYPE html>
<html>
<head>
  <title>搜尋評論</title>
  <meta charset="UTF-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="style.css">
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
<?php
    include('session_start.php');
     ?>
  <!-- 上方導覽列 -->
    <?php
    include('navbar.php');
     ?>

<script>
        var plus_test= "<thead><tr><th></th><th>課程名稱</i></th><th>授課老師</th><th>發布者</i></th><th>發布時間</th><th>評論</th></tr></thead>";
    var timeArray = [];
            var plusArray = [];
          var StudentidArray = [];
          var TeacheridArray = [];
          var CourseidArray = [];
          var CommentidArray = [];
        var DepartmentidArray = [];
     fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Department',{
    headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
  }
  ).then(response => response.json())
    .then(function(Department){
         $.each(Department.records, function(i,Department){
             DepartmentidArray.push(Department.id);
         })
         
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
           var plus = "<thead><tr><th></th><th>課程名稱</i></th><th>授課老師</th><th>發布者</i></th><th>發布時間</th><th>評論</th></tr></thead>";
           var num = 0;
         $.each(Comment.records, function(i, Comment) {
             Commentpos = i; 
            index = CourseidArray.indexOf(Comment.fields.Course_ID[0]); //index為course的索引
             Suggestion_rate = Comment.fields.Suggestion_rate;
             Lesson_level = Comment.fields.Lesson_level;
             Comments = Comment.fields.Comments;
             private = Comment.fields.private;
               CourseYear = Course.records[index].fields.Year;
                section = Course.records[index].fields.section;
                Coursename = Course.records[index].fields.Course_name;
                 Courseid = Course.records[index].id;
                 CourseArray = Course.records[index].fields;
                 teacherid = Course.records[index].fields.Teacher_ID[0];
               tea_in = TeacheridArray.indexOf(teacherid);
               teachername = Teacher.records[tea_in].fields.Teacher_name;
                 studentid = Comment.fields.Student_ID[0];
               stu_in = StudentidArray.indexOf(studentid);
               studentname = Student.records[stu_in].fields.Student_name;
             studentYear = Student.records[stu_in].fields.grade;
             dep_in = DepartmentidArray.indexOf(Student.records[stu_in].fields.Department_ID[0])
             studentdepartment =Department.records[dep_in].fields.Department_name;
             Time = Comment.fields.modify_time;
                Timea = Time.split("T");
                Time = Timea[0];
             plusArray.push({Coursename:Coursename,teachername:teachername,studentname:studentname,Time:Time,
                Suggestion_rate:Suggestion_rate,Lesson_level:Lesson_level,CourseYear:CourseYear,section:section,studentYear:studentYear,studentdepartment:studentdepartment,Comments:Comments,private:private});
             plusArray = plusArray.sort(function(a,b){
                 return a.Time<b.Time ? 1:-1;
             })
    
    })
           console.log(plusArray);
    $.each(plusArray,function(i,item){
            num = i+1;
        if(item.private == "yes"){
            plus_test =plus_test+"<tr><td>" + num + "</td><td>" +item.Coursename+"</td><td>"+ item.teachername+"</td><td>" + "匿名"+"</td><td>"+item.Time+"</td><td>" +"  <a href='commet_view.php?CourseYear="+item.CourseYear+"&section="+item.section+"&Coursename="+item.Coursename+"&teachername="+item.teachername+"&studentdepartment="+"不可見"+"&studentYear="+""+"&studentname="+""+"&Suggestion_rate="+item.Suggestion_rate+"&Lesson_level="+item.Lesson_level+"&Comments="+item.Comments+"' class='view' title='view' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a></td></tr>";
             x=document.getElementById("demo") // 找到元素
            x.innerHTML= plus_test  // 改变内容         
        }else if(item.private =="no"){
            plus_test =plus_test+"<tr><td>" + num + "</td><td>" +item.Coursename+"</td><td>"+ item.teachername+"</td><td>" + item.studentname+"</td><td>"+item.Time+"</td><td>" +"  <a href='commet_view.php?CourseYear="+item.CourseYear+"&section="+item.section+"&Coursename="+item.Coursename+"&teachername="+item.teachername+"&studentdepartment="+item.studentdepartment+"&studentYear="+item.studentYear+"&studentname="+item.studentname+"&Suggestion_rate="+item.Suggestion_rate+"&Lesson_level="+item.Lesson_level+"&Comments="+item.Comments+"' class='view' title='view' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a></td></tr>";
             x=document.getElementById("demo") // 找到元素
            x.innerHTML= plus_test  // 改变内容
        }
           })
        
       
       })
        })
        })
     })})
</script>

    <script type="text/javascript">
  $(document).ready(function(){
  	$('[data-toggle="tooltip"]').tooltip();
  });
  </script>
  </head>



<!-- 搜尋評論 -->
     <form name="form_name" id="form_name">
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
                  <input type="text" class="form-control" name="x" placeholder="搜尋" id='x'>
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button" style="margin-top:28px" onclick=search()><span class="glyphicon glyphicon-search"></span></button>
                  </span>
              </div>
          </div>
  	</div>
  </div>
    </form>
  
    <script>
          function search(){
          var Courseid;
          var plusArray = [];
          var StudentidArray = [];
          var TeacheridArray = [];
          var CourseidArray = [];
          var CommentidArray = [];
         var form = document.getElementById("form_name");
        var search = form.state.value;
            var keyword = document.getElementById('x').value;
        if(keyword == ""){
            alert("搜尋欄位不能為空！");
            return;
        }var DepartmentidArray = [];
     fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Department',{
    headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
  }
  ).then(response => response.json())
    .then(function(Department){
         $.each(Department.records, function(i,Department){
             DepartmentidArray.push(Department.id);
         })
              
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
           var plus = "<thead><tr><th></th><th>課程名稱</i></th><th>授課老師</th><th>發布者</i></th><th>發布時間</th><th>評論</th></tr></thead>";
           var num = 0;
         $.each(Comment.records, function(i, Comment) {
             Commentpos = i;
        if(search =="AL" && keyword!=""){//依課程關鍵字
            index = CourseidArray.indexOf(Comment.fields.Course_ID[0]);
           if(Course.records[index].fields.Course_name.match(keyword)){
               Suggestion_rate = Comment.fields.Suggestion_rate;
             Lesson_level = Comment.fields.Lesson_level;
             Comments = Comment.fields.Comments;
             private = Comment.fields.private;
               CourseYear = Course.records[index].fields.Year;
                section = Course.records[index].fields.section;
                Coursename = Course.records[index].fields.Course_name;
                 Courseid = Course.records[index].id;
                 CourseArray = Course.records[index].fields;
                 teacherid = Course.records[index].fields.Teacher_ID[0];
               tea_in = TeacheridArray.indexOf(teacherid);
               teachername = Teacher.records[tea_in].fields.Teacher_name;
                 studentid = Comment.fields.Student_ID[0];
               stu_in = StudentidArray.indexOf(studentid);
               studentname = Student.records[stu_in].fields.Student_name;
             studentYear = Student.records[stu_in].fields.grade;
             dep_in = DepartmentidArray.indexOf(Student.records[stu_in].fields.Department_ID[0])
             studentdepartment =Department.records[dep_in].fields.Department_name;
             Time = Comment.fields.modify_time;
                Timea = Time.split("T");
                Time = Timea[0];
               
               
           } else{
         
             x=document.getElementById("demo");
            x.innerHTML=plus + "<tr><td  colspan=6><h1 align=center>查無相關課程！！！！！！</h1></td></tr>";    
            }}
          else if(search=="WY" && keyword!=""){// 依作者
                index = StudentidArray.indexOf(Comment.fields.Student_ID[0]);
                  if(Student.records[index].fields.Student_name==(keyword) &&Comment.fields.private=="no"){ //只查非匿名的
                      Comments = Comment.fields.Comments;
                       private = Comment.fields.private;
                   co_index = CourseidArray.indexOf(Comment.fields.Course_ID[0]);
                Coursename = Course.records[co_index].fields.Course_name;
                 Courseid = Course.records[co_index].id;
                 CourseArray = Course.records[co_index].fields;
                 teacherid = Course.records[co_index].fields.Teacher_ID[0];
                 studentid = Comment.fields.Student_ID[0];
                tea_in = TeacheridArray.indexOf(teacherid);
               teachername = Teacher.records[tea_in].fields.Teacher_name;
               stu_in = StudentidArray.indexOf(studentid);
               studentname = Student.records[stu_in].fields.Student_name;
                studentYear = Student.records[stu_in].fields.grade;
            Suggestion_rate = Comment.fields.Suggestion_rate;
                Lesson_level = Comment.fields.Lesson_level;
                CourseYear   = Course.records[co_index].fields.Year;
                section = Course.records[co_index].fields.section;
                 dep_in = DepartmentidArray.indexOf(Student.records[stu_in].fields.Department_ID[0])
             studentdepartment =Department.records[dep_in].fields.Department_name;     
                Time = Comment.fields.modify_time;
                Timea = Time.split("T");
                Time = Timea[0];
              
                 } else{
         
             x=document.getElementById("demo"); 
            x.innerHTML=plus + "<tr><td  colspan=6><h1 align=center>查無相關課程！！！！！！</h1></td></tr>";    
            }
                 
             }
            else{
         
             x=document.getElementById("demo");
            x.innerHTML=plus + "<tr><td  colspan=6><h1 align=center>查無相關課程！！！！！！</h1></td></tr>";   
            }
    
        if(Courseid==(Comment.fields.Course_ID[0])){ //依評論時間排序
           plusArray.push({Coursename:Coursename,teachername:teachername,studentname:studentname,Time:Time,
                Suggestion_rate:Suggestion_rate,Lesson_level:Lesson_level,CourseYear:CourseYear,section:section,studentYear:studentYear,studentdepartment:studentdepartment,Comments:Comments,private:private});
             plusArray = plusArray.sort(function(a,b){
                 return a.Time<b.Time ? 1:-1;})
        }  
    
    })
            $.each(plusArray,function(i,item){
            num = i+1;
        if(item.private == "yes"){
            plus =plus+"<tr><td>" + num + "</td><td>" +item.Coursename+"</td><td>"+ item.teachername+"</td><td>" + "匿名"+"</td><td>"+item.Time+"</td><td>" +"  <a href='commet_view.php?CourseYear="+item.CourseYear+"&section="+item.section+"&Coursename="+item.Coursename+"&teachername="+item.teachername+"&studentdepartment="+"不可見"+"&studentYear="+""+"&studentname="+""+"&Suggestion_rate="+item.Suggestion_rate+"&Lesson_level="+item.Lesson_level+"&Comments="+item.Comments+"' class='view' title='view' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a></td></tr>";
             x=document.getElementById("demo") // 找到元素
            x.innerHTML= plus  // 改变内容         
        }else if(item.private =="no"){
            plus =plus+"<tr><td>" + num + "</td><td>" +item.Coursename+"</td><td>"+ item.teachername+"</td><td>" + item.studentname+"</td><td>"+item.Time+"</td><td>" +"  <a href='commet_view.php?CourseYear="+item.CourseYear+"&section="+item.section+"&Coursename="+item.Coursename+"&teachername="+item.teachername+"&studentdepartment="+item.studentdepartment+"&studentYear="+item.studentYear+"&studentname="+item.studentname+"&Suggestion_rate="+item.Suggestion_rate+"&Lesson_level="+item.Lesson_level+"&Comments="+item.Comments+"' class='view' title='view' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a></td></tr>";
             x=document.getElementById("demo") // 找到元素
            x.innerHTML= plus  // 改变内容
        }
           })
        
       
       })
            
        })
        })
     })})
    }</script>

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
              <table class="table table-striped table-hover table-bordered" style="margin-top:30px" id='demo'>
                  <thead>
                      <tr>
                          <th></th>
                          <th>課程名稱</th>
                          <th>授課老師</th>
                          <th>發布者</th>
                          <th>發布時間</th>
                          <th>評論</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td colspan="6">請稍候......</td>
                          
                              <!-- <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                              <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
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
