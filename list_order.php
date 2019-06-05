<!DOCTYPE html>
<html>
<head>
  <title>志願清單</title>
  <meta charset="UTF-8">
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
  <link rel="stylesheet" href="style.css">


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

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




<!-- 志願清單 -->
      <div class="container" style="margin-top:100px">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-7" style="text-align:right"><h2><b>志願清單</b></h2></div>
                      <div class="col-sm-12" style="text-align:center"><h5>(tip:學生可以以拖拉式進行志願排序，一次排序上限為30個，也可直接從旁紅色按鈕刪除志願)</h5></div>


                  </div>
              </div>

              <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

              <div class="container">
                  <div class="row clearfix">
                  	<div class="col-md-12 table-responsive">
              			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
              				<thead>
              					<tr >
              						<th class="text-center">
              							志願序
              						</th>
              						<th class="text-center">
              							課程名稱
              						</th>
              						<th class="text-center">
              							授課教師
              						</th>
                          <th class="text-center">
                            星期
                          </th>
                          <th class="text-center">
                            節次
                          </th>
                  					<th class="text-center">
              							修課上限人數
              						</th>
                          <th class="text-center">
                          第一志願選擇人數
                        </th>
                          <th class="text-center">
                          第二志願選擇人數
                        </th>
                        <th class="text-center">
                        第三志願選擇人數
                      </th>

                      				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
              						</th>
              					</tr>


              				</thead>
              				<tbody>
                  				<tr id='addr0' data-id="0">
              						<td data-name="name">
              						    <p>1</p>
              						</td>
              						<td data-name="mail">
              						    <p>健康醫學與生活</p>
              						</td>
              						<td data-name="desc">
              						    <p>林盈宏</p>
              						</td>
                          <td data-name="desc">
                              <p>二</p>
                          </td>
                          <td data-name="desc">
                              <p>D5-D6</p>
                          </td>
                          <td data-name="desc">
                              <p>80</p>
                          </td>
                          <td data-name="desc">
                              <p>56</p>
                          </td>
                          <td data-name="desc">
                              <p>20</p>
                          </td>
                          <td data-name="desc">
                              <p>30</p>
                          </td>
                                      <td data-name="del">
                                          <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                                      </td>
              					</tr>

                        <tr id='addr0' data-id="0">
                        <td data-name="name">
                            <p>2</p>
                        </td>
                        <td data-name="mail">
                            <p>藥物濫用</p>
                        </td>
                        <td data-name="desc">
                            <p>田履黛</p>
                        </td>
                        <td data-name="desc">
                            <p>二</p>
                        </td>
                        <td data-name="desc">
                            <p>D5-D6</p>
                        </td>
                        <td data-name="desc">
                            <p>70</p>
                        </td>
                        <td data-name="desc">
                            <p>46</p>
                        </td>
                        <td data-name="desc">
                            <p>10</p>
                        </td>
                        <td data-name="desc">
                            <p>20</p>
                        </td>
                                    <td data-name="del">
                                        <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                                    </td>
                      </tr>

                      <tr id='addr0' data-id="0">
                      <td data-name="name">
                          <p>3</p>
                      </td>
                      <td data-name="mail">
                          <p>疾病檢查與診斷</p>
                      </td>
                      <td data-name="desc">
                          <p>莊志光</p>
                      </td>
                      <td data-name="desc">
                          <p>二</p>
                      </td>
                      <td data-name="desc">
                          <p>D5-D6</p>
                      </td>
                      <td data-name="desc">
                          <p>80</p>
                      </td>
                      <td data-name="desc">
                          <p>90</p>
                      </td>
                      <td data-name="desc">
                          <p>20</p>
                      </td>
                      <td data-name="desc">
                          <p>90</p>
                      </td>
                                  <td data-name="del">
                                      <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                                  </td>
                    </tr>

                    <tr id='addr0' data-id="0">
                    <td data-name="name">
                        <p>4</p>
                    </td>
                    <td data-name="mail">
                        <p>防身術</p>
                    </td>
                    <td data-name="desc">
                        <p>羅新明</p>
                    </td>
                    <td data-name="desc">
                        <p>二</p>
                    </td>
                    <td data-name="desc">
                        <p>D7-D8</p>
                    </td>
                    <td data-name="desc">
                        <p>60</p>
                    </td>
                    <td data-name="desc">
                        <p>120</p>
                    </td>
                    <td data-name="desc">
                        <p>80</p>
                    </td>
                    <td data-name="desc">
                        <p>95</p>
                    </td>
                                <td data-name="del">
                                    <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true"></span></button>
                                </td>
                  </tr>


              				</tbody>
              			</table>
              		</div>
              	</div>
              	<a id="add_row" class="btn btn-primary float-right">儲存清單</a>
              </div>


<script>

$(document).ready(function() {
    $("#add_row").on("click", function() {
        // Dynamic Rows Code

        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;

        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });

        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);

            var children = cur_td.children();

            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });

                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });

        // add delete button and td
        /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */

        // add the new row
        $(tr).appendTo($('#tab_logic'));

        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});




    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();

        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });

        return $helper;
    };

    $(".table-sortable tbody").sortable({
        helper: fixHelperModified
    }).disableSelection();

    $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");
});

</script>


</body>
</html>
