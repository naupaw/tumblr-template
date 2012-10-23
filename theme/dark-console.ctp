<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# blog: http://ogp.me/ns/blog#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="x-dns-prefetch-control" content="off"/>
	<meta charset="utf-8">
<!-- {block:Description} -->
    <meta name="description" content="{MetaDescription}" />
<!-- {/block:Description} -->
	<meta name="text:Home Name" content=""/>
	<meta name="text:Disqus Shortname" content="" />
	<meta name="text:Github" content="" />
	<meta name="text:Facebook Username" content="" />

	<meta name="color:color chat 1" content="#fbff51"/>
	<meta name="color:color chat 2" content="#51ff51"/>
    <link rel="shortcut icon" href="{Favicon}">
    <link rel="alternate" type="application/rss+xml" href="{RSS}">
	<title>{Title}{block:SearchPage} - {lang:Search results for SearchQuery}{/block:SearchPage}{block:PostSummary} - {PostSummary}{/block:PostSummary}</title>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<style type="text/css">
	/*
	 __  __          _        _          _   
	|  \/  |__ _ _ _| |_ __ _| |__  __ _| |__
	| |\/| / _` | '_|  _/ _` | '_ \/ _` | / /
	|_|  |_\__,_|_|  \__\__,_|_.__/\__,_|_\_\
											 
	itu Gosong 2012~> CSS Proudly by martabak
	
	*/
	body{background:#000;margin: 0;font-family: sans-serif;font-size: 12px;color: #D8D8D8;line-height: 1.7em;}
	a{color: #D8D8D8;text-decoration: underline;}
	a:hover{color: #282828;background: #D8D8D8;}
	small{font-size: smaller;}
	#wrapper{width: 960px;margin:0px auto;}
	#header{}
	#title{margin-top: 58px;margin-bottom: 20px;font-family:courier new;font-size:20px;font-weight:bold;float:left;}
	.quotes{font-family:courier new;font-size:20px;font-weight:bold;}
	.quotes a{text-decoration:none;}
	#menu{position: absolute;width: 950px;}
	#menu a{color: #D8D8D8;font-size: 12px;text-transform: uppercase;letter-spacing: 2px;font-weight: normal;text-decoration:none;}
	#menu a:hover{color: #282828;background: #D8D8D8;}
	#menu ul li{list-style: none;float: left;padding: 0 15px 0 0;}
	.search{float:right;margin-top:8px;border:1px solid #333 ;padding:3px;width:180px;}
	#blog-post{border-top: 1px solid #222;width: 590px;}
	#contex{border-right: 1px solid #222;float:left;padding-right: 70px;padding-top:30px;}
	.posts{padding-top:30;margin:30px 0px;}
	.posts h2{font-size: 12px;font-weight: bold;margin: 0;letter-spacing: 0;text-transform: none;}
	.posts .content{margin-left: 20px;margin-top:10px;}
	.tags-cmd a, .tags-cmd a:hover{opacity:0.5;background:url(http://static.tumblr.com/hxlsjal/QxYm6oxgy/asset-icon.png);width:27px;height:27px;display:block;position: absolute;margin-left: -40px;margin-top: 5px;background-position:0px 2px;}
	.tags-cmd a:hover{opacity:1;}
	.chat .item{font-family:courier new;font-weight:bold;font-size:13px;}
	.chat .item .odd{color:{color:color chat 1};}
	.chat .item .even{color:{color:color chat 2};}
	.images, img{border: 6px solid #282828;background:#fff;}#wrapper{display:none}
	#sidebar{width: 280px;float:right;min-height:300px;}
	#sidebar ul{margin:0px;padding:0px;}
	#sidebar ul li{list-style: none;padding: 0 15px 0 0;}
	#sidebar h2{letter-spacing: 2px;font-size: 12px;font-weight: bold;margin: 15px 0px;letter-spacing: 0;text-transform: uppercase;}
	#footer{margin-top:50px;border-top: 1px solid #222;margin-bottom:50px;font-size: 90%;text-align: center;padding-top:20px;}
	blockquote{border-left:5px solid #bcbcbc;margin:10px;padding-left:10px;color:#bcbcbc;font-family:courier new;}
	.tags-url{font-size:11px;margin-right:10px;color:#6E7173}
	.prefix{display:block;}
	a.comments{margin-left:10px;}
	.tweet{display:block;text-decoration:none;margin-bottom:5px;}
	ul.social li a{background: url(http://static.tumblr.com/hxlsjal/QxYm6oxgy/asset-icon.png) 0px -224px no-repeat;padding: 2px;padding-left: 33px;margin:10px 0px;display:block;} 
	
	@-webkit-keyframes fall{1%{opacity:1;}49%{opacity:1;}50%{opacity:0;}99%{opacity:0;}100%{opacity:1;}}
	@-moz-keyframes fall{1%{opacity:1;}49%{opacity:1;}50%{opacity:0;}99%{opacity:0;}100%{opacity:1;}}
	@-o-keyframes fall{1%{opacity:1;}49%{opacity:1;}50%{opacity:0;}99%{opacity:0;}100%{opacity:1;}}
	.ticker{-webkit-animation: fall 1s linear infinite;-moz-animation: fall 1s linear infinite;-o-animation: fall 1s linear infinite;}
	.tags-cmd p{position: absolute;margin-left: -55px;margin-top: 35px;font-size: 15px;font-weight: bold;padding: 5px;text-align: center;width: 45px;opacity:0.4}
	ol.notes{margin: 0px;padding: 5px 20px;border-left: 3px solid #EAEAEA;}
	ol.notes li{list-style: none;font-family: courier new;}
	ol.notes li a img{border:none; !important}
	{CustomCSS}
	</style>
	</head>
	<body>
		<div id="wrapper">

			<div id="header">
				{block:IfHomeName}
				<div id="title">[{Title}@{text:Home Name}]$~ <span class="ticker">_</span></div>
				{/block:IfHomeName}
				{block:IfNotHomeName}
				<div id="title">[{Title}@tumblr]$~ _</div>
				{/block:IfNotHomeName}

				<div id="menu">
				<form action="/search" method="get" style="float: right;">
				<input type="submit" value="Search" name="q" style="float:right;margin-top:9px;"/><input type="text" class="search" placeholder="search">
				</form>
				<ul style="float:right">
					<li>
						<a href="/">Home</a>
					</li>
					{block:HasPages}
					{block:Pages}
					<li>
						<a href="{URL}">{Label}</a>
					</li>
					{/block:Pages}
					{/block:HasPages}
					{block:AskEnabled}
					<li>
						<a href="/ask">{AskLabel}</a>
					</li>
					{/block:AskEnabled}
					<li>
						<a href="/archive">{lang:Archive}</a>
					</li>
					<li>
						<a href="{RSS}">{lang:RSS}</a>
					</li>
				</ul>
				</div>

				<div style="clear:both"></div>
			</div>
			
			<!-- end header -->
			<div id="contex">
				<div id="blog-post">
					
{block:NoSearchResults}
<h2>No result for {SearchQuery}</h2>
{/block:NoSearchResults}
{block:TagPage}
<h2>Posts tagged "{Tag}"</h2>
{/block:TagPage}

					{block:Posts}
					{block:Text}
					<div class="posts">
						<small class="tags-cmd"><a href="{Permalink}"></a> {block:NoteCount}{block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}{/block:NoteCount}</small>
						{block:Title}
							<h2><a href="{Permalink}">{Title}</a></h2>
						{/block:Title}
						{block:Date}
							<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
						{/block:Date}
						<div class="content">
							{Body}
						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/block:Text}

					{block:Quote}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position: 0px -57px;"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small>
						{block:Date}
							<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
						{/block:Date}
						<div class="quotes"><a href="{Permalink}">{Quote}</a></div>

						<div class="content">
						{block:Source}
							{Source}
						{/block:Source}

						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/block:Quote}

					{block:Link}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position: 0px -84px;"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small>
						{block:Date}
							<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
						{/block:Date}
						<div class="quotes"><a href="{URL}" {Target}>{Name}</a></div>
						<div class="content">
						{block:Description} <div>{Description}</div>{/block:Description}
						{block:Source}
							{Source}
						{/block:Source}

						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/block:Link}


					{block:Answer}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position: 0px -111px;"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small>
						<div class="quotes">{Asker} Ask : <a href="{Permalink}" {Target}>{Question}</a></div>
						{block:Date}
							<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
						{/block:Date}
						<div class="content">
						<div>{Answer}</div>
						{block:Source}
							{Source}
						{/block:Source}

						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/block:Answer}
					
					{Block:Photo}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position:0px -169px"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small>
						{block:Date}
							<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
						{/block:Date}
						{LinkOpenTag}<img class="images" src="{PhotoURL-500}" alt="{PhotoAlt}"/>{LinkCloseTag}<br/>
						<div class="content">
					    {block:Caption}
					        {Caption}
					    {/block:Caption}

						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/Block:Photo}

					{Block:Video}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position: 0px -141px;"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small>
						{block:Date}
							<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
						{/block:Date}
						{Video-500}<br/>

						<div class="content">
					    {block:Caption}
					        {Caption}
					    {/block:Caption}

						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/Block:Video}

					{block:Chat}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position: 0px -111px;"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small><br/>
							{block:Title}
							<h2><a href="{Permalink}">{Title}</a></h2>
							{block:Title}
							{block:Date}
								<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
							{/block:Date}
							<div class="chat">
								{block:Lines}
									<div class="item">{block:Label}<b class="{Alt}">{Label} </b>{/block:Label} {Line}</div>
								{/block:Lines}
							</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/block:Chat}

					{block:Audio}
					<div class="posts">
						<!-- <h2><a href="">Lorem Ipsum</a></h2> -->
						<small class="tags-cmd"><a href="{Permalink}" style="background-position: 0px -26px;"></a> {block:NoteCount}<p>+{NoteCount}</p>{/block:NoteCount}</small><br/>
							{block:Date}
								<small class="prefix">{DayOfWeek}, {Month} {DayOfMonth}{DayOfMonthSuffix}, {Year} 	{block:IfDisqusShortname}<a href="{Permalink}#disqus_thread" class="comments">{lang:View comments}</a>{/block:IfDisqusShortname}</small>
							{/block:Date}
							<div class="audio">
								{AudioPlayerBlack}
							</div>
						<div class="content">
                        {block:Caption}
                            <div class="caption">{Caption}</div>
                        {/block:Caption}

						</div>
						{block:HasTags}
							{block:Tags}<a href="{TagURL}" class="tags-url">#{Tag}</a> {/block:Tags}
						{/block:HasTags}
					</div>
					{/block:Audio}

				{block:PermalinkPage}
					{block:PostNotes}
						{PostNotes-16}
					{/block:PostNotes}
					{block:IfDisqusShortname}
						{block:Permalink}
						<div class="notecontainer" style="margin: 20px 0 0 0; padding: 1px 10px 10px 0px;">
							<div id="disqus_thread"></div>
							<script type="text/javascript" src="http://disqus.com/forums/{text:Disqus Shortname}/embed.js"></script>
							<noscript><a href="http://{text:Disqus Shortname}.disqus.com/?url=ref">{lang:View the discussion thread}</a></noscript>
						</div>
						<div style="text-align: right; margin-top: 5px">
							{lang:Blog comments powered by Disqus 2}
						</div>
						{/block:Permalink}
					{/block:IfDisqusShortname}
				{/block:PermalinkPage}

					{/block:Posts}
				</div>
			</div>
			<!-- end content -->

			<div id="sidebar">
				<h2>{Title}</h2>
				<img src="{PortraitURL-128}"/><br/>
				{Description}
				
				<h2>Links</h2>
				<ul class="social">
				{block:Twitter}
					<li>
						<a href="http://twitter.com/{TwitterUsername}">Follow On Twitter </a>
					</li>
				{/block:Twitter}
				{block:IfGithub}
					<li>
						<a href="http://github.com/{text:Github}" style="background-position:0px -328px">Frok on Github</a>
					</li>
				{/block:IfGithub}
					<li>
						<a href="http://www.facebook.com/{text:Facebook Username}" style="background-position:0px -250px">Find Facebook</a>
					</li>
				{/block:IfFacebookUsername}
				</ul>

{block:Following}
    <h2>Blogs I follow:</h2>
    <ul>
        {block:Followed}
            <li style="float:left">
                <a href="{FollowedURL}" description="{FollowedName}"><img src="{FollowedPortraitURL-48}"/></a>
                
            </li>
        {/block:Followed}
    </ul>
    <div style="clear:both"></div>
{/block:Following}

{block:Twitter}
    <div id="twitter" style="display:none;">
        <h2>Latest Tweets</h2>

        <div id="tweets"></div>
    </div>

    <script type="text/javascript">
        function recent_tweets(data) {
            for (i=0; i<data.length; i++) {
                document.getElementById("tweets").innerHTML =
                    document.getElementById("tweets").innerHTML +
                    '<a href="http://twitter.com/{TwitterUsername}/status/' +
                    (data[i].id_str ? data[i].id_str : data[i].id) +
                    '" class="tweet">' + data[i].text +
                    '</a>';
            }
            document.getElementById("twitter").style.display = 'block';
        }
    </script>
{/block:Twitter}


			</div>
		
		<div style="clear:both"></div>
        {block:Pagination}
            {block:PreviousPage}
                <a href="{PreviousPage}">Previous</a>
            {/block:PreviousPage}

            {block:JumpPagination length="5"}
                {block:CurrentPage}
                    <span class="current_page">{PageNumber}</span>
                {/block:CurrentPage}

                {block:JumpPage}
                    <a class="jump_page" href="{URL}">{PageNumber}</a>
                {/block:JumpPage}
            {/block:JumpPagination}

            {block:NextPage}
                <a href="{NextPage}">Next</a>
            {/block:NextPage}
        {/block:Pagination}
		<div id="footer">
		{Title} all rights revesed<br/>
		Theme <a href="http://github.com/pedox">Dark console</a> Proudly Powered by <a href="http://twitter.com/engga_enak">pedox</a><br/>
		Engine by Tumblr<br/>
		</div>
		</div>
{block:Twitter}
    <script type="text/javascript" src="/tweets.js"></script>
{/block:Twitter}
	{block:IfDisqusShortname}
		<script type="text/javascript">
			//<![CDATA[
			(function() {
				var links = document.getElementsByTagName('a');
				var query = '?';
				for(var i = 0; i < links.length; i++) {
					if(links[i].href.indexOf('#disqus_thread') >= 0) {
						query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
					}
				}
				document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/{text:Disqus Shortname}/get_num_replies.js' + query + '"></' + 'script>');
			})();
			eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('9 0=$(\'#1 a[c="2://3.4/5"], #1 a[d="2://3.4/5"]\').6();b(0=="8"){$(\'#7\').e()}f{$(\'#7\').6(\'\');g("h i\'j k l m 0 n o")}',25,25,'author|footer|http|twitter|com|engga_enak|html|wrapper|pedox|var||if|href|title|show|else|alert|Please|don|t|remove|the|template|without|permission'.split('|'),0,{}))
			//]]>
		</script>
	{/block:IfDisqusShortname}

	</body>
</html>
