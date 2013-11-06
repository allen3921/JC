$(document).ready(function(){
	$('#registerButton').click(function(){	
		var url = 'register_control.php';
		var email = $('#email').val();
		var user_password = $('#password').val();
		var confirm_password = $('#confirm_password').val();
		var user_name = $('#username').val();
		var gender = $('#gender').val();
		var school = $('#school').val();
		var title = $('#title').val();
		var grade = $('#grade').val();
		
		if(email == ''){
			alert(email);
			return;
		}
		
		if(user_password == ''){
			alert('密码不能为空！');
			return;
		}
		
		if(user_password.search(/^\w{6}/) == -1){
			alert('密码至少输入6位！');
			return;
		}
		
		if(confirm_password == ''){
			alert('确认密码不能为空！');
			return;
		}
		
		if(document.getElementById("password").value != document.getElementById("confirm_password").value){
			alert("两次密码输入不相同，请重新输入！");
			}
		
		if(user_name == ''){
			alert('用户名不能为空！');
			return;
		}
		
		
		if(gender == ''){
			alert('性别不能为空！');
			return;
		}
		
		if(email.search(/^([a-zA-Z0-9]+[_|_|.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_]?[.]+[a-zA-Z0-9]+)+$/) == -1){
			alert('邮箱格式错误！');
			return;
		}
		
		if(school == ''){
			alert('学校不能为空！');
			return;
		}
		
		if(title == ''){
			alert('级别不能为空！');
			return;
		}
		
		if(grade == ''){
			alert('年级不能为空！');
			return;
		}
		
	
		var response = $.ajax({
			url:url,
			type:"POST",
			data:{
				email:email,
				user_name:user_name,
				password:user_password,				
				gender:gender,
				school:school,
				title:title,
				grade:grade,
			},
			error:function(){
				alert('通信故障～！');
			},
			success:function(){
				
				var data = response.responseText;
				if(data = 0){
					alert('注册邮箱已存在，请重新输入！');
					return;
				}
				if(data = 1){
					alert ('注册成功');
					window.location.assign('index.php');
				}
			}
		});
		
	});
});