<script>
		function checkUserName()
		{
			var unameboxElement = document.getElementById("username");
			var username = unameboxElement.value;
			var pattern = new RegExp(/[~`@!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?1234567890]/);
			if (pattern.test(username) || username.length < 1)
			{	
				unameboxElement.style.borderBottom =  "2px #D12E7D solid";
				unameboxElement.style.borderRight = "2px #D12E7D solid";
				return false;
			}
			else
			{
				unameboxElement.style.borderBottom =  "2px dodgerblue solid";
				unameboxElement.style.borderRight = "2px dodgerblue solid";
				return true;
			}
		}

		function checkEmail()
		{
			var emailboxElement = document.getElementById("email");
			var email = emailboxElement.value;
			var pattern = new RegExp(/.+@.+/);
			if (pattern.test(email) && email.length > 5)
			{
				emailboxElement.style.borderBottom =  "2px dodgerblue solid";
				emailboxElement.style.borderRight = "2px dodgerblue solid";
				return true;

			}
			else
			{
				emailboxElement.style.borderBottom =  "2px #D12E7D solid";
				emailboxElement.style.borderRight = "2px #D12E7D solid";
				return false;
			}
		}

		function checkPassword(x)
		{
			var passElement = document.getElementById('password');
			var lenCheckElement = document.getElementById('length');
			var scCheckElement = document.getElementById('sc');
			var pass = passElement.value;
			var plen = pass.length;
			var more = 6-plen;
			var specChar = false;
			var confPass = false;
			var pattern = new RegExp(/[~`@!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?1234567890]/);
			if (x == true)
			{
				lenCheckElement.style.visibility='visible';
				scCheckElement.style.visibility='visible';
			}
			if (more < 0)
				more = 0;
			if (more == 0)
			{
				lenCheckElement.style.color = "dodgerblue";
				passElement.style.borderBottom =  "2px dodgerblue solid";
				passElement.style.borderRight = "2px dodgerblue solid";
			}
			else
			{
				lenCheckElement.style.color = "#D12E7D";
				passElement.style.borderBottom =  "2px #D12E7D solid";
				passElement.style.borderRight = "2px #D12E7D solid";
			}
			lenCheckElement.innerHTML = 'Length: '+more+' more';
			if (pattern.test(pass))
				specChar = true;
			if (specChar)
			{
				scCheckElement.style.color = "dodgerblue";
				passElement.style.borderBottom =  "2px dodgerblue solid";
				passElement.style.borderRight = "2px dodgerblue solid";
			}
			else
			{
				scCheckElement.style.color = "#D12E7D";
				passElement.style.borderBottom =  "2px #D12E7D solid";
				passElement.style.borderRight = "2px #D12E7D solid";
			}
			if (more == 0 && specChar)
				return true;
			else
				return false;
		}

		function confAll()
		{
			var passElement = document.getElementById('password');
			var passcElement = document.getElementById('password_c');
			var lenCheckElement = document.getElementById('length');
			var scCheckElement = document.getElementById('sc');
			var confElement = document.getElementById('conf');
			var regButElement = document.getElementById('register');
			var pass = passElement.value;
			var passc = passcElement.value;
			lenCheckElement.style.visibility='hidden';
			scCheckElement.style.visibility='hidden';
			confElement.style.visibility='visible';
			var a = checkPassword(false);
			var b = checkUserName();
			var c = checkEmail();
			if (pass == passc && a && b && c)
			{
				regButElement.disabled=false;
				confElement.style.color = "dodgerblue";
				passcElement.style.borderBottom =  "2px dodgerblue solid";
				passcElement.style.borderRight = "2px dodgerblue solid";
			}
			else
			{
				regButElement.disabled=true;
				confElement.style.color = "#D12E7D";
				passcElement.style.borderBottom =  "2px #D12E7D solid";
				passcElement.style.borderRight = "2px #D12E7D solid";
			}
		}
	</script>