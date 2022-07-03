<?php include('header.php');?>
        <meta property="og:image" content="<?php echo $volleyball;?>" />
								<meta property="og:locale" content="en_US">
									<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> | <?php echo $meta_title;?>">
		<link rel="stylesheet" id="bootstrap-css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="jasny-css" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="simple-css" href="//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="google-font" href="//fonts.googleapis.com/css?family=Oswald|Open+Sans" type="text/css" media="all">
		<link rel="stylesheet" id="style-font" href="/css/style.min.css" media="all">
		<link rel="shortcut icon" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/images/icon.png';?>">




<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>

		</head>
		<body class=" movie single">
								<header>
									<div class="navbar navbar-default navbar-fixed-top">
<div class="container">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			<span class="icon-options-vertical"></span>
		</button>
		<a class="navbar-brand" href="<?php echo $url_web;?>"> <?php echo '' . htmlspecialchars($_GET["match"]) . ''; ?> </a>
	</div>
    <nav class="collapse navbar-collapse" id="main-navbar">

	                <ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Soccer</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
						  <li class="dropdown-submenu">
							<a class="submenu" href="premier-league.php?match=Premier+League LIVE&live="><span style="color: #a61111;">Premier League</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="premier-league.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="la-liga.php?match=La Liga LIVE&live="><span style="color: #a61111;">La Liga</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="la-liga.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="ligue-1.php?match=Ligue 1 LIVE&live="><span style="color: #a61111;">Ligue 1</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="ligue-1.php?match= LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="serie-a.php?match=Serie A LIVE&live="><span style="color: #a61111;">Serie A</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="serie-a.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="bundesliga.php?match=Bundesliga LIVE&live="><span style="color: #a61111;">Bundesliga</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="bundesliga.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="eredivisie.php?match=Eredivisie LIVE&live="><span style="color: #a61111;">Eredivisie</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="eredivisie.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="mls.php?match=MLS LIVE&live="><span style="color: #a61111;">MLS</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="mls.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="champions-league.php?match=Champions League LIVE&live="><span style="color: #a61111;">Champions League</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="champions-league.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="europa-league.php?match=Europa League LIVE&live="><span style="color: #a61111;">Europa League</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="europa-league.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="copa-america.php?match=Copa America LIVE&live="><span style="color: #a61111;">Copa America</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="copa-america.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="euro.php?match=EURO LIVE&live="><span style="color: #a61111;">EURO</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="euro.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						  <li class="dropdown-submenu"><a class="submenu" href="international.php?match=International Match LIVE&live="><span style="color: #a61111;">International Match</span> <b class="caret-right"></b></a>
							<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							  <li><a href="international.php?match="><span style="color: #a61111;">Live Match</span></a></li>
							  <li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
							</ul>
						  </li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NFL</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="nfl.php?match=NFL LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NHL</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="nhl.php?match=NHL LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NBA</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="nba.php?match=NBA LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Boxing</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="boxing.php?match=Boxing LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>UFC</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="ufc.php?match=UFC LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Formula 1</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="formula-1.php?match=Formula 1 LIVE&live="><span style="color: #a61111;">Live Race</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NCAAM</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="ncaam.php?match=NCAAM LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>MLB</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="mlb.php?match=MLB LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>NCAAF</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="ncaaf.php?match=NCAAF LIVE&live="><span style="color: #a61111;">Live Match</span></a></li>
							<li><a href="schedule_info.php?match="><span style="color: #a61111;">Schedule</span></a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>More</span> <b class="caret"></b></a>
						<ul class="dropdown-menu" style="background:rgba(0, 0, 0, 0.85);">
							<li><a href="baseball.php?match=Baseball LIVE&live="><span style="color: #a61111;" value="Baseball">Baseball</span></a></li>
							<li><a href="football.php?match=Football LIVE&live="><span style="color: #a61111;" value="Football">Football</span></a></li>
							<li><a href="gaa.php?match=GAA LIVE&live="><span style="color: #a61111;" value="Football">GAA</span></a></li>
							<li><a href="softball.php?match=Softball LIVE&live="><span style="color: #a61111;" value="Softball">Softball</span></a></li>
							<li><a href="tennis.php?match=Tennis LIVE&live="><span style="color: #a61111;" value="Tennis(B)">Tennis</span></a></li>
							<li><a href="moto-gp.php?match=MOTO GP LIVE&live="><span style="color: #a61111;" value="Moto GP">MotoGP</span></a></li>
							<li><a href="volleyball.php?match=Volleyball LIVE&live="><span style="color: #a61111;" value="Volleyball">Volleyball</span></a></li>
						</ul>
					</li>
					<li><a href="#" class="button" data-toggle="modal" data-target="#player-modal"><span class="icon fa fa-user-circle-o"></span>Login</a>
					</li>
                </ul>
				</nav>
			</div>
		</div>
	</header>
	<div id="main">
		<div id="player">
			<span class="player-cover"></span>
			<div class="container">
<br><div class="row cont_design" style="background: #0808089e;">
   <div class="col-md-8 col-md-offset-2">
      <h1 style="text-align:center;color: #dcdcdc;margin-top:0px;"><?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?></h1>
   </div>
</div><br>
				<div id="video">
					<div id="video-player" class="embed-responsive embed-responsive-16by9 video pointer nocontext">
						<video id="videoPlayer" class="embed-responsive-item" preload="none" poster="<?php echo $volleyball;?>">
							<p>Your browser doesn't support HTML5 video</p>
						</video>
						<span class="spinner-wrapper">
							<span class="vam">
								<span class="spinner loading"></span>
							</span>
						</span>
						<span class="play-wrapper ease">
							<span class="vam">
								<span id="play" class="play-btn-border ease">
									<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
								</span>
							</span>
							<div class="media-controls ease">
								<div id="leftControls" class="pull-left">
									<button type="button" name="Play" class="btn icon-control-play" id="play_btn"></button>
									<button id="volumeInc_btn" name="Volume" class="btn icon-volume-2"></button>
									<button id="timeContainer" class="btn">0:00:00 |
									<img src="/images/live.gif" style="height: 15px;>
									</button>
								</div>
								<div id="progressContainer">
									<span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></span>
								</div>
								<div id="rightControls" class="pull-right">
									<div id="sliderContainer">
<div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
	<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;"></div>
	<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;"></span>
</div>
									</div>
									<div id="setting_btn" class="btn-group dropup">
<button name="Setting" class="btn icon-settings dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<span class="glyphicon glyphicon-hd-video"></span>
</button>
<ul class="dropdown-menu dropdown-menu-right">
	<li class="hq active">HD 1080p</li>
	<li class="hq">HD 720p</li>
</ul>
									</div>
									<button id="fullscreen_btn" name="Fullscreen" class="btn icon-size-fullscreen pull-right"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="button-offer">
				<div class="container">
					<div class="text-center">
					</div>
				</div>
			</div>
			<div class="text-center"><br>
				<h2>Watch Online <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> Live Streaming</h2><br>
				<center><p><img src="/images/available-formats-img.png" class="img-responsive"></p>
				<p><img src="/images/livenow.png" class="img-responsive" onclick="window.location.href='<?php echo $offer_boxing;?><?php echo '' . htmlspecialchars($_GET["sub_id"]) . ''; ?>'"></p></center>
				<div class="ft-title ease">You must create an account to watch the match.!</div>
				<p class="lead" itemprop="description">Create your account today, get a free 7 day trial. Cancel online Anytime, Anywhere</p>
					</div>
			</div>
<div id="player-modal" class="modal fade nocontext">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center"> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> LIVE STREAMING</div>
			<div class="modal-body">
				<img class="img-responsive" src="/images/pop.png" width="780" height="439" alt="Aquaman">
					<span class="img-cover"></span>
					<span class="offerlay ease"></span>
					<span class="modal-text ease">Join the network of satisfied members and try this service for 
						<strong>Free.</strong> Fill out the signup form and 
						<strong>start watching instantly.</strong>
					</span>
					<div class="modal-ft ease">
						<ul>
							<li>
								<span class="icon icon-film"></span> Unlimited Access
							</li>
							<li>
								<span class="icon icon-magnifier"></span> Search for Anything
							</li>
							<li>
								<span class="icon icon-ban"></span> Ads Free
							</li>
							<li>
								<span class="icon icon-screen-desktop"></span> All Platforms
							</li>
						</ul>
					</div>
				</div>
				<div class="modal-footer">
					<div class="text-center">
						<button class="btn btn-warning btn-lg btn-responsive" onclick="window.location.href='<?php echo $offer_volleyball;?><?php echo '' . htmlspecialchars($_GET["sub_id"]) . ''; ?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Sign In
						</button>
						<button class="btn btn-success btn-lg btn-responsive" onclick="window.location.href='<?php echo $offer_volleyball;?><?php echo '' . htmlspecialchars($_GET["sub_id"]) . ''; ?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Create Free Account
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>