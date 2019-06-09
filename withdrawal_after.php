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
     <h3 style="text-align:center;margin-top:50px;">課程清單</h3>
     <div class="container" style="margin-top:-10px">
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
                          <th>退選</th>
                      </tr>
                  </thead>
                  <tbody>

                      <tr>
                          <td>1</td>
                          <td>資訊管理系所</td>
                          <td>經濟學</td>
                          <td>周靖秦</td>
                          <td>3</td>
						  <th>必02</th>
                          <td>Tue D2-D4</td>

                            <td data-name="del">
                           <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                       </td>

                      </tr>
                      <tr>
                          <td>2</td>
                          <td>資訊管理系所</td>
                          <td>系統分析與設計</td>
                          <td>吳濟聰</td>
                          <td>3</td>
						  <th>必00</th>
                          <td>Mon D2-D4</td>
                          <td>
 			                     <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>資訊管理系所</td>
                          <td>創意創新專題</td>
                          <td>林文修</td>
                          <td>2</td>
						  <th>必02</th>
                          <td>Thu D3-D4</td>
                          <td>
 			                   <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                          </td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>資訊管理系所</td>
                          <td>資料結構</td>
                          <td>蔡幸蓁</td>
                          <td>3</td>
						  <th>必00</th>
                          <td>Fri D2-D4</td>
                          <td>
 			                      <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
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
 			                      <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                          </td>
                      </tr>
                  </tbody>
              </table>

          </div>





		   </div>
     </div>



     <script>

     // add the new row
     $(td).appendTo($('#tab_logic'));

     $(td).find("td button.row-remove").on("click", function() {
          $(this).closest("tr").remove();
     });
});
     </script>
</body>

</html>
