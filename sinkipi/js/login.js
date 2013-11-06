$(document).ready(function(){
	$('#loginButton').click(function(){
		
		var url = 'login_control.php';
		var email = $('#email').val();
		var user_password = $('#user_password').val();
		
		if(email == ''){
			alert('用户名不能为空！');
			return;
		}
		
		if(user_password == ''){
			alert('密码不能为空！');
			return;
		}
		
		var response = $.ajax({
			url:url,
			type:"POST",
			data:{
				email:email,
				user_password:user_password,
			},
			error:function(){
				alert('通信故障～！');
			},
			success:function(){
				
				var data = response.responseText;
				alert(data);
				window.location.assign('index.php');
			}
		});
	});
});