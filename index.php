<?php
	if(strpos($_SERVER['HTTP_HOST'], 'portfolio')===false){
		header('Location http://portfolio.itpcc.net/lite/');
		exit;
	}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Portfolio (One-page version) | ITPCC</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="./assets/css/cs-prakas.css" type="text/css" rel="stylesheet"/>
	<link href="./assets/css/bangna.css" type="text/css" rel="stylesheet"/>
	<link href="./assets/css/font-itpcc.css" type="text/css" rel="stylesheet"/>
	<link href="./assets/css/animsition.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	<link href="./assets/css/slick.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./assets/css/slick-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./assets/css/magic.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="./assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	<script src="./assets/js/modernizr.custom.24621.js"></script>
</head>
<body>
	<div class="animsition">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo"><span class="icon icon-ITPCC" style="vertical-align: baseline"><span class="path1"></span><span class="path2"></span></span> ITPCC</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#" data-langname="home-page">หน้าหลัก</a></li>
					<li><a href="#about-me" data-langname="about-me">เกี่ยวกับผม</a></li>
					<li><a href="#computer-archivement" data-langname="computer-archivement">ผลงานคอมพิวเตอร์</a></li>
					<li><a href="#other-archivement" data-langname="other-archivement">ผลงานอื่น</a></li>
					<li><a href="#project" data-langname="project">โครงงาน</a></li>
					<li><a href="#แนืะฟแะ" data-langname="contact">ติดต่อ</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#" data-langname="home-page"><span class="material-icons">home</span> หน้าหลัก</a></li>
					<li><a href="#about-me" data-langname="about-me"><span class="material-icons">account_box</span> เกี่ยวกับผม</a></li>
					<li><a href="#computer-archivement" data-langname="computer-archivement"><span class="material-icons">dvr</span> ผลงานคอมพิวเตอร์</a></li>
					<li><a href="#other-archivement" data-langname="other-archivement"><span class="icon icon-book"></span> ผลงานอื่น</a></li>
					<li><a href="#project" data-langname="project"><span class="icon icon-books"></span> โครงงาน</a></li>
					<li><a href="#แนืะฟแะ" data-langname="contact"><span class="material-icons">contacts</span> ติดต่อ</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			</div>
		</nav>

		<div id="main-section" class="parallax-container">
			<div class="section">
				<div class="container">
					<div class="row left">
						<div class="col m9 section-content-wrapper">
							<h1 class="header left teal-text text-darken-2">Hi, I'm Rachasak</h1>					
							<h5 class="header light black-text">
								ผมเชื่อว่าประสบการณ์ที่ดีที่สุดไม่ได้เกิดจากการทำไปตามคำสั่ง แต่เกิดจากการทำในสิ่งที่ชอบและอยากทำ<br />
								นี่คือสรุปข้อมูลผลงานและรายละเอียดทั่วไปของผมตลอดแปดปีที่ผ่านมา ขอเชิญท่านเลื่อนลงด้านล่างหรือคลิกเลือกตามเมนูแล้วทัศนาได้เลยครับ<br />
							</h5>
							<div class="triangle-down-right"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="parallax">
				<img src="./img/section/main-section.jpg" alt="ภาพถ่ายหมู่เนื่องในโอกาสร่วมกิจกรรมค่าย สอวน. คอมพิวเตอร์ ณ มหาวิทยาลัยธรรมศาสตร์ วิทยาเขตรังสิต" data-translatex="45%">
			</div>
		</div>

		<!-- About-me -->
		<div id="about-me" class="z-depth-1">
			<div class="section">
				<div class="row">
					<h2 class="header center teal-text text-darken-2">ข้อมูลเบื้องต้น</h2>
				</div>
				<div class="row">
					<div class="col m4 attr-title"><i class="Small mdi-social-school"></i> ผมเป็นใคร?</div>
					<div class="col m8 attr-detail">
						ผมเป็น<span title="นักล่าปริญญา ใฝ่ฝันขึ้นไปเป็นใหญ่">นักศึกษา</span>ชั้นปีที่ 1 ภาควิชาวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี
					</div>
				</div>
				<div class="row">
					<div class="col m4 attr-title"><i class="Small mdi-maps-my-location"></i> ผมอยู่ที่ไหน</div>
					<div class="col m8 attr-detail">
						ทุ่งสง นครศรีธรรมราช
					</div>
				</div>
				<div class="row">
					<div class="col m4 attr-title"><i class="Small mdi-social-school"></i> ผมเรียนอะไรอยู่</div>
					<div class="col m8 attr-detail">
						วิศวกรรมคอมพิวเตอร์ (CPE#28) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี (KMUTT) ปีการศึกษา 2557<br />ก่อนหน้านี้เคยเรียนที่โรงเรียนจุฬาภรณราชวิทยาลัย นครศรีธรรมราช (PCCNST'15 &amp; '18)
					</div>
				</div>
				<div class="row">
					<div class="col m4 attr-title"><i class="Small mdi-av-my-library-books"></i> ผมชำนาญอะไรบ้าง</div>
					<div class="col m8 attr-detail">

						<ul>
							<li><strong>Excellent: </strong> PHP (Both procedural and OOP [Codeigniter, Lavarel]), HTML(5), CSS(3), Javascript (especially with jQuery)</li>
							<li><strong>Average: </strong> C, C++,Node.js, Java</li>
						</ul>
					
					</div>
				</div>	
			</div>
		</div>


		<div id="computer-archivement" class="parallax-container valign-wrapper">
			<div class="section no-pad-bot">
				<div class="align-right">
					<div class="row left">
						<div class="col l4 m6 slideshow-container" style="line-height: 1">
							<div class="slideshow magictime">
							</div>
						</div>
						<div class="col l8 m6 section-content-wrapper">
							<h1 class="header left teal-text text-darken-2">การแข่งขันด้านคอมพิวเตอร์</h1>					
							<h5 class="header light black-text">
								ผมชื่นชอบการแข่งขัน เพราะมันทำให้ผมเห็นว่ายังมีคนอื่นมากมายที่เก่งกว่าผม ที่สำคัญที่สุดคือทำให้ผมได้เปิดหูเปิดตาและมีแรงบันดาลใจในการพัฒนาตนเอง<br />
								นี่คือรายการกิจกรรมสำคัญที่ผมได้เข้าแข่งขันในด้านคอมพิวเตอร์
							</h5>
							<div class="popout-container">
								<ul class="collapsible" data-collapsible="accordion">
									<li data-reward="club-regis">
										<div class="collapsible-header"><img src="./assets/vector/logo_obec_color.svg" alt="สพฐ." height="32" style="height: 32px; width: auto; vertical-align: middle;">  รางวัลระดับเหรียญเงิน การประกวดโครงงานคอมพิวเตอร์ประเภทซอฟต์แวร์ ระดับชั้น ม.๔ - ม.๖ งานศิลปหัตถกรรมนักเรียนระดับชาติ ครั้งที่ 63</div>
										<div class="collapsible-body">
											<div class="attr-container">
												<div class="row">
													<div class="col m4 attr-title">ระดับสูงสุด</div>
													<div class="col m8 attr-detail">ระดับชาติ</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">หน่วยงาน</div>
													<div class="col m8 attr-detail">สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน (เลขที่ สพฐ. นร.ม.9641/2556)</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">โครงงาน</div>
													<div class="col m8 attr-detail">ระบบสมัครชุมนุมออนไลน์</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2557</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ระยะเวลาดำเนินการ</div>
													<div class="col m8 attr-detail">2 ปี (กันยายน 2555 - พฤษภาคม 2557)</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">สื่อ</div>
													<div class="col m8 attr-detail"><a href="./docs/project-club-brochure.pdf"><i class="icon icon-file-pdf"></i> แผ่นพับ</a> <a href="./docs/project-club-book.pdf"><i class="icon icon-file-pdf"></i> รูปเล่ม</a></div>
												</div>
											</div>
										</div>
									</li>
									<li data-reward="posn-computer">
										<div class="collapsible-header"><img src="./assets/vector/posn.svg" alt="สอวน." height="32" style="height: 32px; width: auto; vertical-align: middle;"> การแข่งขันคอมพิวเตอร์โอลิมปิกระดับชาติ ครั้งที่ 9 "The 9<sup>th</sup> Thailand Olympiad in Informatics" </div>
										<div class="collapsible-body">
											<div class="attr-container">
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2555</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ระดับสูงสุด</div>
													<div class="col m8 attr-detail">ระดับชาติ (ค่าย สอวน. 3)</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">หน่วยงาน</div>
													<div class="col m8 attr-detail">มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต และโรงเรียนสามเสนวิทยาลัย ร่วมกับ สอวน. และ สสวท.</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ตัวแทนศูนย์</div>
													<div class="col m8 attr-detail">มหาวิทยาลัยวลัยลักษณ์</div>
												</div>
											</div>
										</div>
									</li>
									<li data-reward="obec-cms">
										<div class="collapsible-header"><i class="icon icon-OBEC-Black-White"></i> รางวัลเกียรติบัตรเหรียญทอง กิจกรรมการสร้าง Webpage ประเภท CMS ระดับชั้น ม.1-6</div>
										<div class="collapsible-body">
											<div class="attr-container">
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2554</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ระดับสูงสุด</div>
													<div class="col m8 attr-detail">ระดับชาติ</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">หน่วยงาน</div>
													<div class="col m8 attr-detail">สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน (เลขที่ สพฐ. 05071-01592)</div>
												</div>
											</div>
										</div>
									</li>
									<li data-reward="psu-computer">
										<div class="collapsible-header"><img src="http://www.psu.ac.th/sites/default/files/p37_01.jpg" alt="มอ." height="32" style="height: 32px; width: auto; vertical-align: middle;"> &nbsp; รองชนะเลิศอันดับ 1 "ทักษะคอมพิวเตอร์ 14 จังหวัดภาคใต้"(SITC2011)</div>
										<div class="collapsible-body">
											<div class="attr-container">
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2554</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">หน่วยงาน</div>
													<div class="col m8 attr-detail">มหาวิทยาลัยสงขลานครินทร์ จังหวัดตรัง</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="triangle-down-left"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="./img/section/what-i-can-do.png?ver=1" alt="Computer-related competition certificate" data-translatex="68%"></div>
		</div>

		<div id="other-archivement" class="parallax-container valign-wrapper">
			<div class="section no-pad-bot">
				<div class="align-left">
					<div class="row left">
						<div class="col l8 m6 section-content-wrapper">
							<h1 class="header left teal-text text-darken-2">การแข่งขันอื่นๆ</h1>					
							<h5 class="header light black-text">
								นอกจากคอมพิวเตอร์ ผมยังมีประสบการณ์แข่งขันสอบด้านวิชาการอื่นๆ ด้วย <del>และนี่คือสิ่งที่ชายคนนี้ทำ</del>
							</h5>
							<div class="popout-container">
								<ul class="collapsible" data-collapsible="accordion">
									<li data-reward="psu-economic">
										<div class="collapsible-header"><img src="http://www.psu.ac.th/sites/default/files/p37_01.jpg" alt="มอ." height="32" style="height: 32px; width: auto; vertical-align: middle;">  &nbsp; การแข่งขันตอบปัญหาเศรษฐศาสตร์ ระดับมัธยมศึกษาตอนปลาย งาน ม.อ. วิชาการ</div>
										<div class="collapsible-body">
											<div class="attr-container">
												<div class="row">
													<div class="col m4 attr-title">หน่วยงาน</div>
													<div class="col m8 attr-detail">คณะเศรษฐศาสตร์ มหาวิทยาลัยสงขลานครินทร์</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2556</div>
												</div>
											</div>
											<div class="row img-gallery">
												<div class="col m3 s6">
													<img class="materialboxed" width="100%" src="./img/preview/psu-economic/cert.jpg" data-full="./img/full/psu-economic/cert.jpg" />
												</div>
											</div>
										</div>
									</li>
									<li data-reward="diamond-economic">
										<div class="collapsible-header"><i class="icon icon-OBEC-Black-White"></i> การแข่งขันเศรษฐศาสตร์เพชรยอดมงกุฎ</div>
										<div class="collapsible-body">
											<div class="attr-container">
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2554</div>
												</div>
												<div class="row" style="border-bottom: solid black 1px; margin-bottom: 20px; padding-bottom: 20px;">
													<div class="col m4 attr-title">รางวัล</div>
													<div class="col m8 attr-detail">ชมเชยระดับประเทศ</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">ปีที่เข้าร่วม</div>
													<div class="col m8 attr-detail">2553</div>
												</div>
												<div class="row">
													<div class="col m4 attr-title">รางวัล</div>
													<div class="col m8 attr-detail">เข้ารอบเจียระนัยเพชร</div>
												</div>
											</div>
											<div class="row img-gallery">
												<div class="col m3 s6">
													<img class="materialboxed" width="100%" src="./img/preview/diamond-economic/53-cert.jpg" data-full="./img/full/diamond-economic/53-cert.jpg" />
												</div>
												<div class="col m3 s6">
													<img class="materialboxed" width="100%" src="./img/preview/diamond-economic/54-cert.jpg" data-full="./img/full/diamond-economic/54-cert.jpg" />
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="triangle-down-right"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="./img/section/what-i-can-do-other.png?ver=1" data-translatex="68%"></div>
		</div>

		<div id="project" class="container">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send brown-text"></i></h3>
						<h4>โครงงานและ lab</h4>
						<p class="left-align light"></p>
					</div>
				</div>

				<div id="project-list" class="row">
					<div class="col s12 m4" data-project="cyberant">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="./img/project-lab/ca.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">นิตยสาร <i class="icon icon-Cyberant" aria-hidden="true" title="Cyberant"></i> <i class="material-icons right">more_vert</i></span>
								<p><a href="http://cpe.kmutt.ac.th/cyberant/"><i class="material-icons" style="vertical-align: middle;">web</i></a> | <a href="./docs/ca9.pdf">#9</a> | <a href="./docs/ca10-1.pdf">#10</a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">นิตยสาร <i class="icon icon-Cyberant" aria-hidden="true" title="Cyberant"></i> <i class="material-icons right">titleclose</i></span>
								<p>นิยสารภาษาอังกฤษประจำภาควิชาวิศวกรรมคอมพิวเตอร์ นำเสนอเรื่องราวทั้งในภาควิชาและสาระตามแนวคิดของแต่ละเล่ม แจกจ่ายให้แก่นักศึกษาและผู้สนใจโดยได้รับการสนับสนุนงบประมาณจากภาควิชาฯ เต็มจำนวน</p>
								<p>ผมได้ทำงานในฐานะผู้เขียนบทความสัมภาษณ์ และทำรูปเล่มนิตยสารในฉบับที่ 9 และ 10 ซึ่งจัดทำในปีการศึกษา 2557</p>
							</div>
						</div>
					</div>
					<div class="col s12 m4" data-project="comcamp">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="./img/project-lab/cc.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">ค่าย <i class="icon icon-Comcamp-Full-Logo" aria-hidden="true" title="Comcamp#27"></i> <i class="material-icons right">more_vert</i></span>
								<p><a href="http://27.comcamp.in.th/"><i class="material-icons" style="vertical-align: middle;">web</i></a> | <a href="https://github.com/itpcc/Comcamp27"><i class="icon icon-github2" aria-hidden="true" title="Source code"></i></a> | <a href="./docs/cc.pdf"><i class="icon icon-file-pdf" aria-hidden="true" title="Book"></i></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">ค่าย <i class="icon icon-Comcamp-Full-Logo" aria-hidden="true" title="Comcamp#27"></i> <i class="material-icons right">titleclose</i></span>
								<p>ค่ายฝึกอบรมเชิงปฏิบัติการคอมพิวเตอร์เบื้องต้นครั้งที่ 27 ภาควิชาวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</p>
								<p>
									ในงานนี้ผมได้ทำงานใน 2 ส่วน ได้แก่
									<ol>
										<li><strong>งาน Website</strong> ผมทำหน้าที่ดูแลการจัดการหน้าหลัก/javascript รวมถึงงาน backend JSON API สำหรับติดต่อกับ frontend ในหน้ารับสมัครโดยพัฒนาด้วย Codeigniter บนภาษา PHP</li>
										<li><strong>งานหนังสือเรียน</strong> ผมทำหน้าที่จัดรูปเล่มและวาง Layout หนังสือ</li>
									</ol>
								</p>
							</div>
						</div>
					</div>
					<div class="col s12 m4" data-project="pccnst-web">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="./img/project-lab/pccnst-web.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">เว็บไซต์  <i class="material-icons right">more_vert</i> pccnst.ac.th</span>
								<p></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">เว็บไซต์ pccnst.ac.th <i class="material-icons right">titleclose</i></span>
								<p>เว็บไซต์โรงเรียนจุฬาภรณราชาวิทยาลัย นครศรีธรรมราช</p>
								<p>ในระหว่างปีการศึกษา 2557 ผมได้ทำหน้าที่ติดตั้ง บริหารจัดการเว็บไซต์โดยใช้ Wordpress และสร้าง Theme จาก mockup ของนายบัณฑิต บุญฤทธิ์ รวมทั้งการโปรแกรมพิเศษเพิ่มเติมสำหรับแสดงผลบนเว็บไซต์ อาทิเช่นรายงานผลการแข่งขัน การรับสมัครเข้าศึกษาต่อ เป็นต้น</p>
								<div class="row">
									<div class="col m4 s6">
										<img class="materialboxed" width="100%" src="./img/preview/pccnst/pccnst-1.png" data-full="./img/full/pccnst/pccnst-1.png">
									</div>
									<div class="col m4 s6">
										<img class="materialboxed" width="100%" src="./img/preview/pccnst/pccnst-2.png" data-full="./img/full/pccnst/pccnst-2.png">
									</div>
									<div class="col m4 s6">
										<img class="materialboxed" width="100%" src="./img/preview/pccnst/pccnst-3.png" data-full="./img/full/pccnst/pccnst-3.png">
									</div>
									<div class="col m4 s6">
										<img class="materialboxed" width="100%" src="./img/preview/pccnst/pccnst-4.png" data-full="./img/full/pccnst/pccnst-4.png">
									</div>
									<div class="col m4 s6">
										<img class="materialboxed" width="100%" src="./img/preview/pccnst/pccnst-5.png" data-full="./img/full/pccnst/pccnst-5.png">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col s12 m4" data-project="pccnst-cover">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="./img/project-lab/pccnst-cover.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">PCCNST News cover<i class="material-icons right">more_vert</i> generator  </span>
								<p><a href="http://itpcc.net/project/cover_gen/"><i class="material-icons" style="vertical-align: middle;">web</i></a> | <a href="https://github.com/itpcc/PCCNST-news-cover-generator"><i class="icon icon-github2" aria-hidden="true" title="Source code"></i></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">PCCNST News cover <i class="material-icons right">titleclose</i> generator</span>
								<p>ระบบสร้างรูปปกบทความด้วย HTML5 Canvas เป็นโครงงานเล็กๆ ที่ผมใช้เวลาว่างๆ (และเซ็งเพราะโดนบอทตีตายตลอด) ลองเล่นกับ Canvas เพื่อสร้างรูปภาพปกบทความจาก footage ในเว็บ<a href="https://www.facebook.com/photo.php?fbid=10204327683805232&set=pb.1023475545.-2207520000.1435684720.&type=3&theater">และสามารถวางรูปโลโก้เพิ่มเติมได้</a>ตามวาระ </p>
								<p>เนื่องจากเป็นโครงงานเล็กยามว่างของผม จึงได้ทำทั้งหมดตั้งแต่หน้า UI และ logic โดยใช้ jQuery, jQueryUI และ Bootstrap เป็นฐานในการพัฒนาหลัก</p>
							</div>
						</div>
					</div>
					<div class="col s12 m4" data-project="pccnst-around-thai">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="./img/project-lab/pcc-around-thai.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">PCC <i class="material-icons right">more_vert</i> around Thailand  </span>
								<p><a href="https://github.com/itpcc/pcc-around-thai"><i class="icon icon-github2" aria-hidden="true" title="Source code"></i></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">PCC <i class="material-icons right">titleclose</i> around Thailand</span>
								<p>อีกหนึ่งในโครงงานเล็กที่ทำขึ้นเพื่อใช้ในเว็บไซต์โรงเรียนฯ เป็นระบบดึงข้อมูลข่าวสารที่เผยแพร่บนเว็บไซต์โรงเรียนจุฬาภรณราชวิทยาลัยอื่นๆ ทั้ง 11 แห่ง โดยการถอดรหัส HTML โดยตรง (เกือบทั้งหมดไม่มีบริการ RSS Feed) แล้วส่งข้อมูลผ่าน JSON API</p>
								<p>โครงงานเล็กนี้ผมพัฒนาหน้าบ้านด้วย Bootstrap และ jQuery หลังบ้านด้วยภาษา PHP แบบ Procedure</p>
							</div>
						</div>
					</div>

					<div class="col s12 m4" data-project="pccnst-around-thai">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="./img/project-lab/pcc-map.png">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">PCC <i class="material-icons right">more_vert</i> map  </span>
								<p><a href="http://demo.itpcc.net/pcc-map/"><i class="material-icons" style="vertical-align: middle;">web</i></a> | <a href="https://github.com/itpcc/pcc-map"><i class="icon icon-github2" aria-hidden="true" title="Source code"></i></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">PCC <i class="material-icons right">titleclose</i> map</span>
								<p>หนึ่งในโครงงานเล็กที่ทำขึ้นเพื่อใช้ในเว็บไซต์โรงเรียนฯ เป็นระบบแสดงตำแหน่งของเครือข่ายโรงเรียนจุฬาภรณราชวิทยาลัยทั้ง 12 แห่งโดยใช้ Google Map API และแสดงข้อมูลพื้นฐานของโรงเรียนแต่ละแห่งได้ทั้งการคลิกที่รายชื่อหรือ icon บนแผนที่</p>
								<p>โครงงานเล็กนี้ผมพัฒนาด้วย jQuery และ gmap.js ตัวช่วยติดต่อกับ Google Map API</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="parallax-container valign-wrapper" id="contact">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<h2 class="header col s12 light"><i class="material-icons">face</i> Talk with me, call me</h2>
					</div>
					<div class="row" id="contact-list">
						<div class="col s12 m6 offset-m3 contact-detail" id="contact-facebook">
							<a href="https://fb.com/itpcc"><i class="icon icon-facebook2"></i> fb.com/itpcc</a>
						</div>
						<div class="col s12 m6 offset-m3 contact-detail" id="contact-twitter">
							<a href="https://twitter.com/itpcc"><i class="icon icon-twitter2"></i> twitter.com/itpcc</a>
						</div>
						<div class="col s12 m6 offset-m3 contact-detail" id="contact-github">
							<a href="https://github.com/itpcc"><i class="icon icon-github2"></i> github.com/itpcc</a>
						</div>
						<div class="col s12 m6 offset-m3 contact-detail" id="contact-blog">
							<a href="https://itpcc.net"><span class="icon icon-ITPCC"><span class="path1"></span><span class="path2"></span></span> itpcc.net</a>
						</div>

					</div>
				</div>
			</div>
			<div class="parallax"><img src="./img/section/achievement.png" alt="Unsplashed background img 3" data-translatex="68%"></div>
		</div>

		<footer class="page-footer blue">
			<?php /*<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Company Bio</h5>
						<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Mo</h5>
						<ul>
							<li><a class="white-text" href="#!">Link 1</a></li>
							<li><a class="white-text" href="#!">Link 2</a></li>
							<li><a class="white-text" href="#!">Link 3</a></li>
							<li><a class="white-text" href="#!">Link 4</a></li>
						</ul>
					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Connect</h5>
						<ul>
							<li><a class="white-text" href="#!">Link 1</a></li>
							<li><a class="white-text" href="#!">Link 2</a></li>
							<li><a class="white-text" href="#!">Link 3</a></li>
							<li><a class="white-text" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div> */?>
			<div class="container">
				<div class="row">
					<p class="white-text">
						Made by <a class="blue-text text-lighten-3" href="http://materializecss.com/templates/parallax-template/preview.html">Parallax Template</a> based from <a class="blue-text text-lighten-3" href="http://materializecss.com">Materialize</a> with <a class="blue-text text-lighten-3" href="http://git.blivesta.com/animsition/">Animsition</a>, <a class="blue-text text-lighten-3" href="https://kenwheeler.github.io/slick/">Slick</a>, and <a class="blue-text text-lighten-3" href="http://daneden.me/animate/">Magic.css</a>. <br/>						
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					Source code at <a class="blue-text text-lighten-3" href="https://github.com/itpcc/lite-portfolio"><i class="icon icon-github2"></i> Github</a>. Code licensed under the MIT</p>
				</div>
			</div>
		</footer>
	</div>

	<div id="page-dimmer"><!-- For Project hilight --></div>


	<!--  Scripts-->
	<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
	<script src="./assets/js/jquery.js"></script>
	<script src="./assets/js/jquery.animsition.min.js"></script>
	<script src="./assets/js/materialize.js"></script>
	<script type="text/javascript" src="./assets/js/slick.min.js"></script>
	<script src="./assets/js/init.js"></script>
	<script>
		$(document).ready(function(){
			$(".animsition").animsition({ inClass: 'zoom-in' });
		});
	</script>

	</body>
</html>
