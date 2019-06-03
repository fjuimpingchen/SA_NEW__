<!DOCTYPE html>


<html lang="en">

<head>
    <script
  src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>

    <link rel="stylesheet" href="login.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>輔大選課系統登入</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">輔仁大學選課系統</a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
            <!--
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">登入</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>

        </div>
    </div> -->
        </div>
    </nav>

    <main class="login-form" style="margin-top:100px;">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">登入</div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">帳號：</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">密碼：</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" onclick="window.location='search_new.php'">
                                        登入
                                    </button>
                                    <!-- <a href="https://whoami.fju.edu.tw/pw_change.php" class="btn btn-link">
                                    忘記密碼？
                                </a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script>
      function Login(){                               
            var email_address = document.getElementById("email_address").value;
            var password = document.getElementById("password").value;
        
   $(document).ready(function() {
    
       var id;
       fetch('https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Student',
        {
        headers:{"Authorization": "Bearer keyX6caWycl8lSrpB"}
        }
        )
        .then(response => response.json())
        .then(function(Student) {
            console.log(Student);
        var len=Student.records.length;
        $.each(Student.records, function(i, item) {

            if(item.fields.Student_ID == email_address && item.fields.Password == password){
                // alert ("Login successfully");
                id=email_address;
                var name=item.fields.Student_name;
                window.location = "search_new.php"; // Redirecting to other page. 
                location.href ="search_new.php?id=" + id + "&name=" + name;
            }
//            else if(item.fields.Student_ID == email_address && item.fields.Password !== password){
//                alert ("password Invalid");
              // window.location = "logintest.php";
           // }
//         else if (i == len - 1) {
//             //this is the last one
//                alert ("account Invalid");
//              window.location = "logintest.php";
//            }
        })
        });    
        });
    };

</script>

</body>

</html>
