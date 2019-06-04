<html>
<head>
<title>Hello jQuery</title>

</head>
<script
  src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    
   <?php
session_start();
    if(isset($_SESSION['userid'])!="")
{
 header("Location:search_new.php");
}
?>

<body>

 <label for="email_address" class="col-md-4 col-form-label text-md-right">帳號：</label>
 
 <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
 
 <label for="password" class="col-md-4 col-form-label text-md-right">密碼：</label>
 
<div class="col-md-6">
 <input type="password" id="password" class="form-control" name="password" required>
 <tbody></tbody>
 </div>
 
 <button type="submit" class="btn btn-primary" onclick="Login()"> 登入</button>
    
</body>

</html>
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
                //window.location = "search_new.php"; // Redirecting to other page. 
                location.href ="search_new_after.php?id=" + id + "&name=" + name;
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
 
    