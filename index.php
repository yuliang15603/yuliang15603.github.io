<!DOCTYPE HTML>

<html>

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="軟體工程學程,中正大學,CCU,SE" />
	<title>軟體工程學程</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./index.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

<body>


	<script type="text/javascript">
		$(function() {
			$("#gotop").click(function() {
				jQuery("html,body").animate({
					scrollTop: 0
				}, 1000);
			});
			$(window).scroll(function() {
				if ($(this).scrollTop() > 300) {
					$('#gotop').fadeIn("fast");
				} else {
					$('#gotop').stop().fadeOut("fast");
				}
			});
			$("#item_introduction").click(function() {
				jQuery("html,body").animate({
					scrollTop: $("#introduction").offset().top
				}, 1000);
			})
			$("#item_promotional").click(function() {
				jQuery("html,body").animate({
					scrollTop: $("#promotional").offset().top
				}, 1000);
			})
			$("#item_teacher").click(function() {
				jQuery("html,body").animate({
					scrollTop: $("#teacher").offset().top
				}, 1000);
			})
			$("#item_document").click(function() {
				jQuery("html,body").animate({
					scrollTop: $("#document").offset().top
				}, 1000);
			})
			$("#item_footer").click(function() {
				jQuery("html,body").animate({
					scrollTop: $("#footer").offset().top
				}, 1000);
			})
		});

		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-71697771-1', 'auto');
		ga('send', 'pageview');
	</script>

	<div id="gotop">Top ˄</div>

	<div id="header">
		<div id="title">
			<!--img class="csie" src="./img/csie.jpg"-->
			<img class="logo" src="./img/ccu_logo.png">
			<h1>軟體工程學程</h1>
			<h3>主辦學系:資訊工程學系</h3>
		</div>
	</div>

	<div id="menu">
		<!--nav class="navbar navbar-inverse" role="navigation"-->
		<ul>
			<li><a id="item_introduction" href="#introduction.">學程介紹</a></li>
			<li><a id="item_promotional" href="#promotional.">學程辦法</a></li>
			<!--<li><a id="item_teacher" href="#teacher.">師資陣容</a></li>-->
			<li><a id="item_document" href="#document.">相關文件</a></li>
			<li><a id="item_footer" href="#footer.">聯絡我們</a></li>
		</ul>
		<!--/nav-->
	</div>

	<div id="main">
		<div id="introduction" class="content">
			<h1>學程介紹 Introduction</h1>
			<h3>一、成立之理由</h3>
			<p>我國軟體產業遠不如硬體產業，無法打入國際市場，反觀印度的軟體產業在國際上得到肯定。比起歐美軟體產業成熟的國家，我國業界對軟體的看法普遍停留在程式碼撰寫與套裝軟體使用，並非以系統化的產業看待。近年來，軟體工程聯盟在教育部顧問室支援下成立，促進我國大學校院資訊相關學系軟體工程教育品質之提昇，並與先進國家之軟體工程教育齊頭並進，以加速國內資訊領域科系之軟體工程整體素質提昇，改善學生學習效率及品質，並使課程充分配合軟體與系統工程研發界、國際發展趨勢及軟體產業界之需求。為了提昇本校資訊相關學系學生競爭力，本校資工系、資管系、會資系、電機系軟體工程相關師資，合作提供完整的學程。</p><br />
			<h3>二、提供之修業證明</h3>
			<p>學生修畢本學程所規定之課程與學分數後，可獲得中正大學軟體工程學程之修業證書。</p>
			<h3>三、修業規定</h3>
			<p>
				在中正大學軟體工程學程中，我們將如圖一所示之三個層面開設課程：
			</p>
			<ul>
				<li>初階層：基礎軟體工程與程式設計與開發。</li>
				<li>中階層：進階軟體系統開發方法與軟體品質管理方法。</li>
				<li>進階層：軟體產業管理與稽核方法與特殊軟體系統開發方法。</li>
			</ul>
			<p>
				<b>學分數需求共計7門課至少20學分(含初階至少三門課、中階至少一門課、進階至少一門課，軟體工程為必修課。)其中至少應有9學分屬跨院或系所課程，且不得計入畢業學分。</b>
			</p>
			<p>
				(一) 學程理念<br />
				為了提昇資訊相關學系學生能具有國際水準，本學程在基礎軟體開發外，加入管理面的課程，課程設計分為兩部分：其一為核心課程(初階至少選修三門課，其中一門必須是軟體工程)，目的在培養學生軟體系統開發之基礎學理與實做能力，課程包括程式設計、資料結構、系統分析、軟體工程;其二為專業選修，目的在於培養學生如何開發高品質軟體系統。<br />
				(二) 對象<br />
				本校一般科系之大學部學生，申請資格為已經修過程式設計類課目之學生。<br />
				(三) 報名<br />
				報名表與相關訊息可到<a href="https://se.cs.ccu.edu.tw">https://se.cs.ccu.edu.tw</a><br />
				<img class="flowchart" src="./img/flowchart-20250526.png">
		</div>

		<div id="promotional" class="content">
			<h1>學程辦法 Promotional</h1>
			<img class="flowchart" src="./img/promotional-20250526.png">
		</div>
		<!--
	<div id="teacher" class="content">
		<h1>師資陣容 Teacher</h1>
		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>熊博安</td>
				<td>教授 兼系主任</td>
				<td>資工系</td>				
				<td>國立台灣大學電機工程博士</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="4">
					<p>
						軟硬體共同設計、系統設計與正規驗證、即時嵌入式系統、晶片系統(SOC)、平行與分散式系統
					</p>
				</td>

			</tr>
		</table>
		
		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>劉立頌</td>
				<td>教授</td>
				<td>電機系</td>
				<td>Ph.D. in Electrical Engineering and Computer Science, Univ. of Illinois at Chicago</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="3">
					<p>
						人工智慧、軟體工程、智慧型代理人系統
					</p>
				</td>

			</tr>
		</table>
		
		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>黃士銘</td>
				<td>教授</td>
				<td>會資系/資管系</td>
				<td>英國桑德蘭大學電腦資訊系統博士</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="3">
					<p>
						資訊系統再造工程、資料庫系統、商業自動化、電子商務、企業資源規劃、軟體工程
					</p>
				</td>

			</tr>
		</table>
	
		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>阮金聲</td>
				<td>副教授兼教發中心主任</td>
				<td>資管系</td>
				<td>美國普度大學資訊管理博士</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="3">
					<p>
						分散式系統、會計資訊系統、資訊系統開發
					</p>
				</td>

			</tr>
		</table>
		
		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>林迺衛</td>
				<td>副教授</td>
				<td>資工系</td>
				<td>美國亞利桑納大學資訊科學博士</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="3">
					<p>
						程式語言、編譯器、軟體工具、中醫資訊化
					</p>
				</td>

			</tr>
		</table>
		
		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>吳  帆</td>
				<td>副教授</td>
				<td>資管系</td>
				<td>國立台灣大學資訊工程博士</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="3">
					<p>
						分散式資料庫系統、物件導向分析、醫療資訊系統設計、演算法
					</p>
				</td>

			</tr>
		</table>

		<table border="1" style="border-collapse:collapse;">
			<tr style="background-color:#112c7c;color: white;">
				<th width="200px" height="30px">授課老師</th>
				<th width="200px">職稱</th>
				<th width="200px">系所</th>
				<th width="1000px">學歷</th>
			</tr> 
			<tr>
				<td>莊詠婷</td>
				<td>助理教授</td>
				<td>資管系</td>
				<td>美國加州大學聖塔芭芭拉分校 電機與電腦工程博士</td>
			</tr>
			
			<tr>
				<td height="40" style="background-color:#112c7c;color: white;">學術專長</td>
				<td colspan="3">
					<p>
						資訊搜尋檢索及安全、電腦網路及分散式系統、網路會員管理、統計推斷與資料分析、網路醫療系統
					</p>
				</td>

			</tr>
		</table>		
	</div>
	-->



		<div id="document" class="content">
			<h1>相關文件 Document</h1>
			<p>
				<a href="./file/Application.doc">學程申請表.doc</a><br />
				<a href="./file/Application.odt">學程申請表.odt</a><br />
				<a href="./file/SE_Application.doc">軟體工程學程證書申請單.doc</a><br />
				<a href="./file/SE_Application.odt">軟體工程學程證書申請單.odt</a>
			</p>
		</div>
	</div>


	<div id="footer">
		<p>
			©2014國立中正大學 資訊工程學系系辦公室<br>
			05-2720411分機23101~23103<br>
			<a href=office@cs.ccu.edu.tw>office@cs.ccu.edu.tw</a>
		</p>
		<div />





</body>


</html>