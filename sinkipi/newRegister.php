<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>星期八</title>
<link rel="shortcut icon" href="img/favicon.png"/>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/styleNew.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/myapp.css" rel="stylesheet"/>
<link href='css/base.css' rel='stylesheet'/>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-tab.js"  ></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-modal.js"></script>
<script>
function chkinput(form){
   if(form.email.valus=="")
   {
   
      alert("请输入email&nbsp地址");
      return(false); 
   }
    if(form.user_password.value=="")
	{
   
      alert("请输入管理员密码!");
      return(false); 
   }
       if(form.confirm_userpassword.value=="")
	{
   
      alert("请输入确认管理员密码!");
      return(false); 
   }
       if(form.user_name.value=="")
	{
   
      alert("请输入用户昵称!");
      return(false); 
   }
       if(form.school.value=="")
	{
   
      alert("请输入学校!");
      return(false); 
   }
       if(form.user_password.value!=form.confirm_userpassword.value)
	{
   
      alert("两次输入密码不一致!");
      return(false); 
   }
   return(true);
 
 }
</script>
</head>
<body>
<?php include 'header.php';?>
</br>
</br>
<div class="section">
   
    <div class="appwrapper">
    <div style='border-bottom: #dddddd 1px solid;margin-bottom:20px;padding-top:10px;'>
  	  	<p style='margin-left:40px;font-size:15px'><strong>用户注册</strong></p> 
    </div>
		
	  		
	  		<form name="input" action="index.php" method="post" onSubmit="return chkinput(this)">
	  		<div  class="form-horizontal" >
	     		 
	 		
	 			<div class="control-group">
			    	<label class="control-label" >登陆邮箱</label>
			    	<div class="controls">
			      <input type="text" name = 'email' id = 'email'/>
			   	</div>
		 		</div>
	 		
	 		
	 			<div class="control-group">
		    		<label class="control-label" >密码</label>
		    		<div class="controls">
		        	<input type="password" name='user_password' id='password'/>
		   		</div>
	 			</div>
	
		 		<div class="control-group">
		    		<label class="control-label" >确认密码</label>
		    		<div class="controls">
		        	<input type="password" name='confirm_userpassword' id = 'confirm_password' />
		   			</div>
		 		</div> 
		
		 		
				<div class="control-group">
		    		<label class="control-label"  >昵称</label>
		    		<div class="controls">
		        	<input type="text" name='user_name' id = 'username' />
	   		 	</div>
	 			 </div>
	  		
	 		
	 		
	 			<div class="control-group">
			    	<label class="control-label" >性别</label>
			    	<div class="controls">
			         <select name = 'gender' id = 'gender'>
						  <option value = '男' >男</option>
						  <option value = '女'>女</option>
						</select>
			   	</div>
		 		</div>
		  
		 				
		 		 
		 		<div class="control-group">
			    	<label class="control-label" >学校</label>
			    	<div class="controls">
			      <input type="text" name = 'school' id = 'school'/>
			   	</div>
		 		</div>
		 		 
		 		<div class="control-group">
			    	<label class="control-label" >年级</label>
			    	<div class="controls">
			      	<select name = 'grade' id = 'grade'>
						  <option value = '2006届'>2006届</option>
						  <option value = '2007届'>2007届</option>
						  <option value = '2008届'>2008届</option>
						  <option value = '2009届'>2009届</option>
						  <option value = '2010届'>2010届</option>
						  <option value = '2011届'>2011届</option>
						  <option value = '2012届'>2012届</option>
						  <option value = '2013届'>2013届</option>
						  <option value = '其他'>其他</option>
						</select>
						
					<select name = 'title' id = 'title'>
						  <option value = '本科生'>本科生</option>
						  <option value = '硕士生'>硕士生</option>
						  <option value = '博士生'>博士生</option>
						  <option value = '已工作'>已工作</option>
						</select>
			   	</div>
		 		</div>
		 		 
		 		
		 		
		 		<div class="controls">
		 		<button  type="submit" class="btn btn-primary" id ="registerButton">提交</button>
		 		</div>
		 		
		 	</div>
		 	<br></br>			
	  		</div>
	  		</form>		    
			
   </div>	
</div>

</body>
</html>
