<?php 
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
include('header.php');?>
        <meta property="og:image" content="<?php echo $demo;?>" />
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
																						<div class="container">
<div class="row">
	<section id="primary" class="col-md-12">
		<article>
			<header class="page-header">
				<h1 class="page-title">DMCA Policy</h1>
			</header>
	<div class="page-content">
			<p><?php echo $_SERVER['HTTP_HOST'];?> respects the intellectual property of others.</p>
			<p><?php echo $_SERVER['HTTP_HOST'];?> takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online.</p>
			<p>It should be noted that <?php echo $_SERVER['HTTP_HOST'];?> is a simple search engine of videos available at a wide variety websites.</p>
			<p>Any videos shown on websites are the responsibility of those sites and not movietvstream.com.</p>
			<p>We have no knowledge of whether content shown on websites is or is not authorized by the content owner as that is a matter between the host site and the content owner.</p>
			<p><?php echo $_SERVER['HTTP_HOST'];?> does not host any content on its servers or network.</p>
			<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA).</p>
			<p>For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement: A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address A statement that the complaining party "in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law" A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed" The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>
			<p>Attn: DMCA Office Contact Us : <a href="contact.php?match=Contact%20Us">Contact</a></p>
			<p>WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER'S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION.</p>
			<p>YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.</p>
			<p>This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).</p>
	</div>
			<footer class="page-footer"></footer>
		</article>
	</section>
</div>
																						</div>
																						<div id="dmca-modal" class="modal fade">
<div class="modal-dialog">
	<div class="modal-content">
		<form id="dmca-form" method="POST" action="/dmca/">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="text-center">
					<strong>DMCA Notice</strong>
				</h3>
			</div>
			<div class="modal-body">
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon1">
						<span class="icon-user"></span>
					</span>
					<input type="text" class="form-control required" name="dmca-name" placeholder="Real Name" aria-describedby="sizing-addon1" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">
							<span class="icon-envelope"></span>
						</span>
						<input type="text" class="form-control required" name="dmca-email" placeholder="Valid Email Address" aria-describedby="sizing-addon2" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3">
								<span class="icon-link"></span>
							</span>
							<input type="text" class="form-control required" name="dmca-url" placeholder="Infringing Material URL" aria-describedby="sizing-addon3" required>
							</div>
							<div class="input-group">
								<textarea class="form-control required" name="dmca-claim" rows="5" placeholder="Claim..." required></textarea>
							</div>
							<div class="input-group">
								<div class="checkbox">
									<label>
										<input class="required" type="checkbox" name="dmca-agree" required> I have read and agree with 
											<strong>Privacy</strong> and 
											<strong>DMCA Policy</strong>
										</label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="pull-right">
									<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
									<button class="btn btn-primary" name="dmca-submit" type="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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
						<button class="btn btn-warning btn-lg btn-responsive" onclick="window.location.href='/sign-in.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Sign In
						</button>
						<button class="btn btn-success btn-lg btn-responsive" onclick="window.location.href='<?php echo $offer_serie_a;?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Create Free Account
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>