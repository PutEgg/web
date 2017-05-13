  <!DOCTYPE html>
  <html>
    <head>
	<title>TestPage</title>
	<style>
	body {
	background-image:url(/img/bacl.jpg);
	}

	main {
	margin-top:5%;
	}
	</style>
	
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/js/materialize.min.js"></script>
      <script>                                                                                                <script>  $(document).ready(function() {                                
    $('input#phone').characterCounter();
  });
</script>

<?php
var $x=10;
echo $x;
?>

<main><div class="container">
  <div class="row center">

    <div class="col s6 offset-s3 m6 offset-m3">


		<h2 class="headera white-text">添加玩家</h2>
		<div class="row section">
		<div class="card-panel z-depth-5">
			<div class="row">
				<form action="test.php" method="POST" class="col s12">
					<div class="row">
						<div class="input-field col s6">
						<input placeholder="游戏昵称" id="pname" name="pname" type="text" class="validate">
						<label for="name" class="active">名字</label>
						</div>

                                                <div class="input-field col s6">
                                                <input placeholder="登陆密码" id="ppass" name="ppass" type="password" class="validate">
                                                <label for="name" class="active">密码</label>
                                                </div>

					</div>

						                                        <div class="row">
                                                <div class="input-field col s6">
                                                <input id="pemail" type="text" name="pemail" class="validate">
                                                <label for="name" class="active">邮箱地址</label>
                                                </div>
                                                <div class="input-field col s6">
                                                <input id="pphone" type="text" name="pphone" class="validate">
                                                <label for="name" class="active">手机号码</label> 
                                                </div>
                                        </div>
						<input id="pregdate" type="text" name="pregdate" class="hide">
							<script>
							function getNowFormatDate() {
    var date = new Date();
    var seperator1 = "-";
    var seperator2 = ":";
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
            + " " + date.getHours() + seperator2 + date.getMinutes()
            + seperator2 + date.getSeconds();
    return currentdate;
}
							</script>
                                                <button type="submit" class="btn waves-effect waves-light btn tooltipped" onclick="document.getElementById('pregdate').value=getNowFormatDate();"  data-position="right" data-delay="50" data-tooltip="写入你的数据！">提交<i class="material-icons right">send</i></button>

					</div>
				</form>
			</div>
		</div>
		</div>
	
	
	</div>
	
</div>
</main>


</body>
  </html>
