function goLogin(){
	var connect, form, response, result, user, pass, sesion;
	form = 'variable=contenido';
	user=__('user_login').value;
	pass=__('pass_login').value;
	connect = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject('Microsoft.XMLHTTP');
	connect.onreadystatechange = function()
	{
		if(connect.readyState == 4 && connect.status == 200)
		{
			if(connect.responseText==1)
			{
				result='<div class="alert alert-dismissible alert-success">';
	            result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
	            result+='<h4>Conectado!</h4>';
	            result+='<p><strong>Te estamos redireccionando..</strong></p></div>';
	            __('_AJAX_LOGIN_').innerHTML=result;
	            location.reload();
			}
			else
			{
				__('_AJAX_LOGIN_').innerHTML=connect.responseText;
			}
		}
		else if(connect.readyState !=4)
		{
			result='<div class="alert alert-dismissible alert-warning">';
            result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
            result+='<h4>Procesando...</h4>';
            result+='<p><strong>Estamos intentado logearte!</strong></p></div>';
			__('_AJAX_LOGIN_').innerHTML=result;
		}
	}
	connect.open('POST','ajax.php?mode=login',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
}

function runScriptLogin(e)
{
	if(e.keyCode==13)
	{
		goLogin();
	}
}