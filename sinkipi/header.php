




<div class="modal hide" id="myModal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"  >&times;</button>
        <h3>请输入用户名和密码</h3>
      </div>
  
      <div class="modal-body">
        <div class="control-group">
        <label class="control-label">登陆邮箱</label>
        <input  type="text" name="email" id = "email" />
        </div>
        <div class="control-group">
        <lable class="control-label">密码</lable>
        <input type="password" name="user_password" id = "user_password"/>
        </div>        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit" id = "loginButton">登录</button>
        <a href="#"  data-dismiss="modal" class="btn">关闭</a>        
      </div>
   
  </div>
  
  
<div class="header">
  <div class="header_menu">
    <div class="login">
    <?php 
    	$admin=false;
    	$online_time=mktime();
       session_start();
 		if (isset($_SESSION["admin"])&&$_SESSION["admin"]===true){	
			if ($online_time-$_SESSION[login_time]>600)	{
			unset($_SESSION['admin']);
			session_destroy();		
			?>
			<link href="css/bootstrap.css" rel="stylesheet">
			<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
			<script type="text/javascript" src="bootstrap/js/bootstrap-modal.js"></script>
			<style type="text/css">
			html, body {
				margin:0;
				padding:0
			}
			body {
				font-family: 微软雅黑;
			}
			.STYLE2 {font-size: 14px}
			.STYLE3 {
				color: #1d8bd8;
				font-size: 28px;
				font-weight: bold;
			}
			</style>
			<script type="text/javascript">
			alert("长时间未操作，您已退出登录");
			$('#myModal').modal();
			</script>
			<div class="bt"> <a class="bt" data-toggle="modal" data-target="#myModal" id = "loginButton">登陆</a></div>
      		<div class="bt"> <a class="bt" href="login.php">注册</a></div>
			<?php 
			}
			else{
			$_SESSION["login_time"]=mktime();
			?>
			<div>
			<div class = 'btsuccess'> <a >欢迎你 <?php echo $_SESSION['user_name'];?></a></div>
			<div class="bt"> <a class="bt" href="logout.php">注销</a></div>
			</div>
		<?php }
 		}
 		else{?>
      <div class="bt"> <a class="bt" data-toggle="modal" data-target="#myModal" id = "loginButton">登陆</a></div>
      <div class="bt"> <a class="bt" href="register.php">注册</a></div>
      <?php }?>
      
    </div>
  </div>
</div>
<div>
  <div class="menu">
    <div class="logo"><a href="index.php"></a>
  
    </div>
    <div class="nav clearfix">
      <ul>
        
      </ul>
    </div>
  </div>
</div>


  
 
