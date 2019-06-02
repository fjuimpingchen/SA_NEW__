<!DOCTYPE html>
<html>
<head>
  <title>輔大選課系統</title>
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





<!-- 課程介紹 -->

<div class="container" style="margin-top: 120px;margin-left:220px;">
    <!-- Sign up form -->
    <form>
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->
                <!-- <img id="img_sex" class="person-img" style=""
                    src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg"> -->
                <h3 id="" class="" style="margin-left:400px;">課程詳細資訊</h3>
                <!-- First row (on medium screen) -->
                <div class="row" style="margin-top: 50px;">
                    <div class="form-group col-md-2">
                      <label for="email" class="col-form-label">課程碼：</label>
                      <label type="email" class="form-control" required>D742202457</label>
                      </label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="email" class="col-form-label">開課單位：</label>
                      <label type="email" class="form-control" required>資管二乙</label>
                        </div>

                    <div class="form-group col-md-3">
                      <label for="email" class="col-form-label">科目名稱：</label>
                      <label type="email" class="form-control" required>經濟學Economics</label>
                        </div>

                        <div class="form-group col-md-3">
                          <label for="email" class="col-form-label">授課教師/專長：</label>
                          <label type="email" class="form-control" required>周靖秦 / 專長： 經濟學</label>
                            </div>

                        <br><br><br><br>
                        <div class="form-group col-md-1">
                          <label for="email" class="col-form-label">學分：</label>
                          <label type="email" class="form-control" required>3</label>
                            </div>
                        <div class="form-group col-md-1">
                          <label for="email" class="col-form-label">選別：</label>
                          <label type="email" class="form-control" required>必</label>
                            </div>
                        <div class="form-group col-md-1">
                          <label for="email" class="col-form-label">期次：</label>
                          <label type="email" class="form-control" required>學年</label>
                            </div>
                        <div class="form-group col-md-2">
                          <label for="email" class="col-form-label">授課語言：</label>
                          <label type="email" class="form-control" required>中文</label>
                            </div>
                        <div class="form-group col-md-2">
                          <label for="email" class="col-form-label">是否開放大四生上修：</label>
                          <label type="email" class="form-control" required>否</label>
                            </div>
                        <div class="form-group col-md-2">
                          <label for="email" class="col-form-label">是否開放選課條：</label>
                          <label type="email" class="form-control" required>否</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9" style="padding:10px;margin-left:150px;margin-right:20px;">
                <div class="card">
                    <div class="card-body">

  <div class="container" style="margin-left:90px;">
	<div class="row">
    <h5 class="card-title">上課時間：</h5>

		<div class="col-md-10" style="margin-left:-22px;">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>週別</th>
                            <th>星期</th>
                            <th>節次</th>
                            <th>教室</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>全</td>
                            <td>二(Tue)</td>
                            <td>D2-D4</td>
                            <td>LM503</td>
                        </tr>
                        <tr>
                          <td>全</td>
                          <td>二(Tue)</td>
                          <td>D1-D1</td>
                          <td>LM503</td>
                        </tr>
                    </tbody>
                </table>
		</div>
	</div>
</div>
<div class="form-group col-md-2" style="margin-left:75px;">
  <label for="email" class="col-form-label">備註：</label>
  <label type="email" class="form-control" required>實習課:週二D1</label>
    </div>
    <div class="form-group col-md-4">
      <label for="email" class="col-form-label">可選課年級：</label>
      <label type="email" class="form-control" required>最低年級：一年級 ; 最高年級： 四年級</label>
        </div>
        <div class="form-group col-md-4">
          <label for="email" class="col-form-label">分發優先順序：</label>
          <label type="email" class="form-control" required>1開課單位學生優先</label>
            </div>

    <br><br><br><br><br><br>
    <div class="form-group col-md-3" style="margin-left:75px;">
      <label for="email" class="col-form-label">課程人數：</label>
      <label type="email" class="form-control" required>開放：90 ; 外系：0 </label>
        </div>
        <div class="form-group col-md-3">
          <label for="email" class="col-form-label">屬性資料：</label>
          <label type="email" class="form-control" required>可退可加 ; 拒退年級：不設定</label>
            </div>
            <div class="form-group col-md-2">
              <label for="email" class="col-form-label">通識領域：</label>
              <label type="email" class="form-control" required>X</label>
                </div>
                <div class="form-group col-md-2">
                  <label for="email" class="col-form-label">學群：</label>
                  <label type="email" class="form-control" required>X</label>
                    </div>


                    </div>
                </div>
            </div>


        </div>

<div style="margin-top:30px">
            <button onclick="location.href='http://140.136.251.64/outlines/student/outline.aspx?dayngt=D%20&grono=MG%20&dptno=74&hy=107&ht=2&avano=D742202457%20&tchno=060185&isdone=True'" type="button" class="btn btn-primary btn-lg btn-block" style="width:10%;margin-left:550px">課程大綱</button>


            <button type="button" class="btn btn-primary btn-lg btn-block" style="width:10%;margin-left:730px;margin-top:-45px;margin-bottom:50px">查看評論</button>
      </div>


        </form>
      </div>

<script>


// On page loaded
$( document ).ready(function() {
    // Set the sex image
    set_sex_img();

    // Set the "who" message
    set_who_message();

    // On change sex input
    $("#input_sex").change(function() {
        // Set the sex image
        set_sex_img();
        set_who_message();
    });

    // On change fist name input
    $("#first_name").keyup(function() {
        // Set the "who" message
        set_who_message();

        if(validation_name($("#first_name").val()).code == 0) {
            $("#first_name").attr("class", "form-control is-invalid");
            $("#first_name_feedback").html(validation_name($("#first_name").val()).message);
        } else {
            $("#first_name").attr("class", "form-control");
        }
    });

    // On change last name input
    $("#last_name").keyup(function() {
        // Set the "who" message
        set_who_message();

        if(validation_name($("#last_name").val()).code == 0) {
            $("#last_name").attr("class", "form-control is-invalid");
            $("#last_name_feedback").html(validation_name($("#last_name").val()).message);
        } else {
            $("#last_name").attr("class", "form-control");
        }
    });
});

/**
*   Set image path (Mr. or Ms.)
*/
function set_sex_img() {
    var sex = $("#input_sex").val();
    if (sex == "Mr.") {
        // male
        $("#img_sex").attr("src", male_img);
    } else {
        // female
        $("#img_sex").attr("src", female_img);
    }
}

/**
*   Set "who" message
*/
function set_who_message() {
    var sex = $("#input_sex").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();

    if (validation_name(first_name).code == 0 ||
        validation_name(last_name).code == 0) {
        // Informations not completed
        $("#who_message").html("Who are you ?");
    } else {
        // Informations completed
        $("#who_message").html(sex+" "+first_name+" "+last_name);
    }
}

/**
*   Validation function for last name and first name
*/
function validation_name (val) {
    if (val.length < 2) {
        // is not valid : name length
        return {"code":0, "message":"The name is too short."};
    }
    if (!val.match("^[a-zA-Z\- ]+$")) {
        // is not valid : bad character
        return {"code":0, "message":"The name use non-alphabetics chars."};
    }

    // is valid
    return {"code": 1};
}

</script>


</body>
</html>
