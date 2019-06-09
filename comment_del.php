<script>
var a ='https://api.airtable.com/v0/appRqjrTfb3fuBuIc/Comment/<? echo $_GET['comment_ID']?>'
fetch(a,{
  headers:{"Authorization": "Bearer keyX6caWycl8lSrpB","Content-Type": "application/json; charset=utf-8" },
    method:'DELETE'
    
  })
alert("刪除成功");
history.go(-1);
</script>