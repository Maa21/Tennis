<?php require_once('config.php');?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | <?php echo $meta_title;?></title>
	<link rel="shortcut icon" href="/images/icon.png">
	<style>
    body{
	margin: 0;
	padding: 0;
	background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)), url("http://www.jacaranda.com.au/wp-content/uploads/2016/12/studyon_header_20161.jpg");
	background-size: cover;
	font-family: sans-serif;
  background-attachment:fixed;
}

.box{
	width: 328px;
	height: 420px;
	background: rgba(0, 0, 0, 0.34);
	color: white;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	border-radius: 20px;
	padding:80px 30px;

	
}
.logo{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 35%;
}
h1{
	margin: 0;
	padding:0 0 20px;
	text-align: center;
	font-size: 22px;
}
.box p{
	margin: 0;
	padding:0;
	font-weight: bold;
}
.box input{
	width: 100%;
	margin-bottom: 20px;
	
}
.box input[type="text"],input[type="password"]{
	border:none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;
}
.box input[type="submit"]
{
	border:none;
	outline: none;
	height: 40px;
	background:#fb2525;
	color: white;
	font-size: 18px;
	border-radius: 20px;
}
.box input[type=submit]:hover{
	cursor: pointer;
	background:green;
	color: white;
	
}
.box a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}
.box a:hover{
	color:yellow; 
}
</style>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
</head>
<body>
	<div class="box">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYcv-0ewt7HOXii0rH2Z7Ct6dBzLiL6q7ErolktZQmTVFB77W3" class="logo" >
		<h1>Login Here</h1>
		<form>
			<p>Username</p>
			<input type="text" name="" value="" placeholder="Enter the Username">
			<p>Password</p>
			<input type="password" name="" value="" placeholder="Enter your password">
			<input type="submit" name="" value="Login">
			<a href="#">Forget Password</a><br>
			<a href="/continue.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>">Don't have Account</a><br>
			<center><a href="/">Back to home.</a></center>
		</form>
	</div>
</body>
<script type='text/javascript'>var _Hasync=_Hasync|| [];_Hasync.push(['Histats.start', '1,<?php echo $id_histats;?>,4,0,0,0,00010000']);_Hasync.push(['Histats.fasi', '1']);_Hasync.push(['Histats.track_hits', '']);(function(){var hs=document.createElement('script'); hs.type='text/javascript'; hs.async=true;hs.src=('https://s10.histats.com/js15_as.js');(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);})();</script><noscript><a href='https://www.histats.com' target='_blank'><img src='https://sstatic1.histats.com/0.gif?<?php echo $id_histats;?>&101' alt='advanced web statistics' border='0'></a></noscript>
</html>