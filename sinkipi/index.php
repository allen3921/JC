<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta http-equiv="refresh" content="0;URL=https://192.168.2.71" /> -->
<title>星期八</title>
<link rel="shortcut icon" href="img/logo.jpg" />
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/styleNew.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/task.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/unslider.js"></script>
<script type="text/javascript" src="js/login.js"></script>
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
	.banner { position: relative; overflow: auto; }
    .banner li { list-style: none; }
        .banner ul li { float: left; }
</style>
</head>
<body>
<?php include 'header.php';?>


<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.banner').unslider();
		});
</script>

<div class="container">
	

	<ol class="breadcrumb">
	 <li><a href="index.php" style='font-size:18px'>首页    |</a></li>
        <li><a href="#" style='font-size:18px;color:#5B5B5B'>活动    |</a></li>
        <li><a href="#" style='font-size:18px;color:#5B5B5B'>话题    |</a></li>
        <li><a href="website/index.php" style='font-size:18px'>论坛    |</a> </li>
        <li><a href="#" style='font-size:18px;color:#5B5B5B'>资料    |</a></li>
        <li><a href="#" style='font-size:18px;color:#5B5B5B'>空间    |</a></li>
         <?php 
    	$admin=false;
        session_start();
//         start_session(60);
 		if (isset($_SESSION["admin"])&&$_SESSION["admin"]===true){
		?>
 		<li><a href="app.php">个人管理</a> </li>
 		<?php
}
 		?>    
	</ol>

	<div class="taskPanel panel panel-success">
	
		<div class = 'row-fluid'>
			<div class = 'span2' style = 'margin-top:35px;margin-bottom:35px' >	
			<div style='height: 50px;text-align:center; margin-top:18px;margin-bottom:18px;'><button class = "btn btn-success btn-large" style='width:112px;color:#5B5B5B' >大学时代</button></div>
			<div style='height: 50px;text-align:center; margin-top:18px;margin-bottom:18px;'><button class = "btn btn-success btn-large" style='width:112px;color:#5B5B5B'>精品社团</button></div>
			<div style='height: 50px;text-align:center; margin-top:18px;margin-bottom:18px;'><button class = "btn btn-success btn-large" style='width:112px;color:#5B5B5B'>百家讲座</button></div>
			<div style='height: 50px;text-align:center; margin-top:18px;margin-bottom:18px;'><button class = "btn btn-success btn-large" style='width:112px;color:#5B5B5B'>技能培训</button></div>
			<div style='height: 50px;text-align:center; margin-top:18px;margin-bottom:18px;'><button class = "btn btn-success btn-large" style='width:112px;color:#5B5B5B'>经验分享</button></div>
			</div>
			
			<div class = 'span10'>
				<div class="banner">
					<ul>
						<li><img src ='img/1.jpg'></img></li>
						<li><img src ='img/2.jpg'></img></li>
						<li><img src ='img/3.jpg'></img></li>
						<li><img src ='img/4.jpg'></img></li>
						<li><img src ='img/5.jpg'></img></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div><strong style='line-height:50px;padding-left:10px;padding-top:7px;display:block;margin-bottom:10px;height:50px;color:red;font-size:26px;'>推荐活动</strong></div>
	
		<div>
			<button class = "btn btn-success btn-large" style='width:112px; margin-bottom:-20px; margin-left:50px' >大学时代</button>
			<div style = 'border:green 1px solid; height:290px;border-radius:10px; '>			
				<div class = 'row-fluid' style='margin-left:40px;margin-right:40px'>
					<div class = 'span5' style='border-top:#E63F00 3px solid;border-left:#DDDDDD 1px solid;border-right:#DDDDDD 1px solid;border-bottom:#DDDDDD 1px solid;margin-top:30px;margin-bottom:30px;margin-left:20px;margin-right:20px;'>
						<div class = 'row-fluid' style='margin-top:20px;margin-bottom:20px;margin-left:10px;margin-right:10px;'>
							<div class = 'span3'><img src = 'img/fei.png'></img></div>
							<div class = 'span7' style='margin-left:30px;'>
								<a href="feichengwurao.php" style='color:green;font-size:18px; font: 微软雅黑;'>高校版非诚勿扰</a>
								</br>
								</br>
								<p><img src = 'img/guanzhu.png'></img>关注        <strong style='color:#DDDDDD'>|</strong> <img src = 'img/dongtai.png'></img>动态        <strong style='color:#DDDDDD'>|   </strong><img src = 'img/zhaopian.png'></img>照片</p>
								</br>
								<p><button class = 'btn' style='margin-right:15px; height:30px'>活动</button><button class = 'btn'  style='height:30px'>组织</button></p>						
							</div>
						</div>
						<div style='border-top:#DDDDDD 1px solid; padding-top:5px;'><p style='color:#FF5511;margin-left:20px'>活动进行中</p></div>
					</div>
					
					<div class = 'span5' style='border-top:#E63F00 3px solid;border-left:#DDDDDD 1px solid;border-right:#DDDDDD 1px solid;border-bottom:#DDDDDD 1px solid;margin-top:30px;margin-bottom:30px;margin-left:20px;margin-right:20px;'>
						<div class = 'row-fluid' style='margin-top:20px;margin-bottom:20px;margin-left:10px;margin-right:10px;'>
							<div class = 'span3'><img src = 'img/chu.png'></img></div>
							<div class = 'span7' style='margin-left:30px;'>
								<a href="chuhanzhengba.php" style='color:green;font-size:18px; font: 微软雅黑;'>楚汉争霸象棋大赛</a>
								</br>
								</br>
								<p><img src = 'img/guanzhu.png'></img>关注        <strong style='color:#DDDDDD'>|</strong> <img src = 'img/dongtai.png'></img>动态        <strong style='color:#DDDDDD'>|   </strong><img src = 'img/zhaopian.png'></img>照片</p>
								</br>
								<p><button class = 'btn' style='margin-right:15px; height:30px'>活动</button><button class = 'btn'  style='height:30px'>组织</button></p>						
							</div>
						</div>
						<div style='border-top:#DDDDDD 1px solid; padding-top:5px;'><p style='color:#FF5511;margin-left:20px'>活动预热中</p></div>
					</div>
				</div>
			
			</div>
<br/>
<br/>
<button class = "btn btn-success btn-large" style='width:260px;' "><a href="huojiang.php" style="font-size:18px;color:white">每日抢票观众获奖名单</a></button>
		</div>
		</br>
		</br>
		
		
		
		
	</div>
</div>	

</body>
</html>



