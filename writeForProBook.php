<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 	<meta charset="UTF-8">
		    <link href="css/bootstrap.min.css" rel="stylesheet">
		    <link rel="stylesheet" href="css/reset.css">
		    <link rel="stylesheet" href="css/head.css">
		    <script src="js/jquery-1.11.1.min.js"></script>
		    <script src="js/bootstrap.min.js"></script>
		    <script src="js/jquery-1.11.1.min.js"></script>
		    <script src="js/bootstrap.min.js"></script>
		    <script src="js/head.js"></script>
	</head>
	<style>
	/*
		writer cjn;
	 */
       html, body, div, span, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, address, big, cite, code, del, em, img, ins, small, strong, var, b, u, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend {margin:0px; padding:0px;}
		body{
			background-image:url("images/backimg.jpg");
			background-repeat:no-repeat;  
			background-attachment:fixed;
			
		}
		*:focus{
			outline: none;
		}
		#cl{
			height: auto;
			background:rgba(255,255,255,0.4);
		}
		#dw{
			width: 300px;
			margin-left: 10%;
			border-bottom: #C7CEC2 1px solid;
			position: fixed;
			text-align: center;
			line-height: 2.4em;
			font-family: "微软雅黑";
		}
		#content{
			width: 800px;
			background-color: #efefef;
			margin:0 auto;
			margin-left: 35%;
		}
		.wd{
			width: 70%;
			height: auto;
			margin:0 auto;
		}
		#dw section:hover{
			cursor: pointer;
		}
		#dw label:hover{
			cursor:pointer;
		}
		#footer{
			height: 125px;
			background: rgba(39,40,34,0.7);
		}
		.hp{
			height: 0px;
			transition: height 0.15s;
		}
		.chp{
			height: 20px;
		}

		.shp{
			height: 40px;
			border-left: #C7CEC2 1px solid;
			border-right: #C7CEC2 1px solid;
			border-top: #C7CEC2 1px solid;
		}
		.cshp{
			border-bottom: #C7CEC2 1px solid;
			box-shadow: 5px 5px 2px #888888;
		}
		.cshp2{
			border-bottom: #C7CEC2 1px solid;
		}
		.field label{
			position: absolute;
			top: 0;
			left: 0;
			height:100%;
			width:100%;
			font-size: 24px;
			color:white;
			background-color:#313A3D;
			padding: 0px;
			text-align: center;
			line-height: 2em;
			vertical-align: middle;
			overflow: hidden;
			
			transition: all 0.45s ease;
		}
		.field:hover label
		{	
			width: 20%;
			font-size: 24px;
			//background-color:#FD9638;
		}
		
		.field input{
			font-size: 1.45em;
			font-family: 'Lato', sans-serif;
			font-weight:300;
			color: #B6B6B6;
			height: 100%;
			width: 80%;
			float: right;
			vertical-align: middle;
			border:none;
			background: white;
			//background: #E8E9EA;
		}
		.field textarea{
			font-size: 1.45em;
			font-family: 'Lato', sans-serif;
			font-weight:300;
			color: #B6B6B6;
			height: 98%;
			width: 79%;
			float: right;
			vertical-align: middle;
			border:none;
			resize: none;
			background: white;
			transition: 0.2s all ease;
		}

		.field textarea:focus + label,
		.field input:focus + label{
			width: 20%;
			font-size: 24px;
			background-color:#FD9638;
		}
		.eslabel{
			width: 20% !important;
			//font-size: 24px !important;
			background-color:#FD9638 !important;
		}

		.field{
			vertical-align: middle;
			position: relative;
			height: 50px;
			width : 100%;
			margin-bottom: 15px;			
		}

		.radioMain{
			height: 30px;
			margin-bottom: 15px;
		}
		.radioHolder{
			display: inline-block;
			background: #313A3D; 
			height: 30px;
			transition: .1s ease-out;
			cursor: pointer !important;
		}
		.radioHolder .holderSpan {
			display: inline-block;
			width: 29px;
			height: 100%;
			background-color: #39A9A4;
			background-image: none;
			vertical-align: middle;
			transition: 0.1s all ease-out;
		}
		.radioHolder .lbSpan{
			display: inline-block;
			height: 100%;
			vertical-align: middle;
			font-size: 24px;
			font-weight: 300;
			color: white;
			font-family: 'Lato', sans-serif;
			transition: .1 ease-out;
			cursor: pointer;
		}
		.hovfor1{
			background-color: #FD9638 !important; 
			background-image: url("images/test.jpg") !important;
		}
		input[type="button"]{
			border-radius: 5px;
			background-color: #313A3D;
			color: white;
			cursor: pointer;
		}

		
	</style>
<body>
<div id="cl">
	<div style="height:50px;">
	<?php 
		require_once 'tou.php';
 	?>
	</div>
	<div id="dw">
		<nav>
			<section class="shp" id="shp1">
				<label id="toFirst">第一部分 </label>
			</section>

			<div class="hp" id="hp1"></div>
			
			<section class="shp" id="shp2">
				<label id="toSecond">第二部分 </label>
			</section>

			<div class="hp" id="hp2"></div>
			
			<section class="shp" id="shp3">
				<label id="toThird">第三部分 </label>
			</section>

			<div class="hp" id="hp3"></div>
			
			<section class="shp" id="shp4">
				<label id="toFourth">第四部分 </label>
			</section>

			<div class="hp" id="hp4"></div>
			
			<section class="shp" id="shp5">	
				<label id="toFifth">第五部分 </label>
			</section>

			<div class="hp" id="hp5"></div>
			
			<section class="shp" id="shp6">	
				<label id="toSixth">第六部分 </label>
			</section>

			<div class="hp" id="hp6"></div>
			
			<section class="shp" id="shp7">	
				<label id="toSeventh">第七部分 </label>
			</section>
		</nav>
	</div>
	<div id="content" style="overflow: hidden;">
		<form id="createWord" name="createWord">
			
			<div id="first" name="first" class="wd">
			<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
				<center><h1>1</h1></center>
			</div>
				<div class="field">
					<input type="text" id="recSchool" name="recSchool">
					<label for="recSchool">推荐学校</label>
				</div>

				<div class="field">
					<input type="text" id="proName" name="proName">
					<label for="proName">项目名称</label>
				</div>
				<div class="field">
					<input type="text" id="collegeIncharge" name="collegeIncharge">
					<label for="collegeIncharge">所属一级学科名称</label>
				</div>

				<div class="field">
					<input type="text" id="personIncharge" name="personIncharge">
					<label for="personIncharge">项目负责人</label>
				</div>

				<div class="field">
					<input type="text" id="personInchargeTel" name="personInchargeTel">
					<label for="personInchargeTel">联系电话</label>
				</div>

				<div class="field">
					<input type="text" id="pointerTeacher" name="pointerTeacher">
					<label for="pointerTeacher">指导老师</label>
				</div>

				<div class="field">
					<input type="text" id="pointerTeacherTel" name="pointerTeacherTel">
					<label for="pointerTeacherTel">联系电话</label>
				</div>

				<div class="field">
					<input type="text" id="applyDate" name="applyDate">
					<label for="applyDate">申请日期</label>
				</div>

				<div class="radioMain">
					<div class="radioHolder">
						<input type="radio" name="lei" id="type0" value="0" checked="checked">
						<input type="radio" name="lei" id="type1" value="1">
						<span class="holderSpan"></span>
						<span class="lbSpan">创新实践项目</span>
					</div>

					<div class="radioHolder">
						<input type="radio" name="lei" id="type2" value="2">
						<span class="holderSpan"></span>
						<span class="lbSpan">创业创新项目</span>						
					</div>

					<div class="radioHolder">
						<input type="radio" name="lei" id="type3" value="3">
						<span class="holderSpan"></span>
						<span class="lbSpan">创业实践项目</span>						
					</div>
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 23.888%; height: 100%;">
						<input type="text" id="yearB" name="yearB">
						<label for="yearB" style="font-size:15px;vertical-align:none;">申请年</label>
					</div>	

					<div class="field" style="display: inline-block;width: 23.888%; height: 100%;">
						<input type="text" id="monthB" name="monthB">
						<label for="monthB" style="font-size:15px;vertical-align:none;">申请月</label>
					</div>

					<div class="field" style="display: inline-block;width: 23.888%; height: 100%;">
						<input type="text" id="yearF" name="yearF">
						<label for="yearF" style="font-size:15px;vertical-align:none;">完成年</label>
					</div>

					<div class="field" style="display: inline-block;width: 23.888%; height: 100%;">
						<input type="text" id="monthF" name="monthF">
						<label for="monthF" style="font-size:15px;vertical-align:none;">完成月</label>
					</div>	
				</div>

				<div class="field" style="height: 300px;">
					<textarea type="textarea" id="proInFo" name="proInFo" style="height: 295px;"></textarea>
					<label for="proInFo" style="line-height: 13em;">项目简介</label>
				</div>

				<div class="field" style="margin-bottom: 0px;">
					<h2 style="text-align: center;font-family: 'Lato', sans-serif;">负责人信息</h2>
				</div>

				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostName1" name="hostName1">
						<label for="hostName1" style="font-size:15px;vertical-align:none;">姓名</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostLevel1" name="hostLevel1">
						<label for="hostLevel1" style="font-size:15px;vertical-align:none;">年级</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostNumber1" name="hostNumber1">
						<label for="hostNumber1" style="font-size:15px;vertical-align:none;">学号</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostColl1" name="hostColl1">
						<label for="hostColl1" style="font-size:15px;vertical-align:none;">所在院系/专业</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostTel1" name="hostTel1">
						<label for="hostTel1" style="font-size:15px;vertical-align:none;">联系电话</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostEmail1" name="hostEmail1">
						<label for="hostEmail1" style="font-size:15px;vertical-align:none;">电子邮箱</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostName2" name="hostName2">
						<label for="hostName2" style="font-size:15px;vertical-align:none;">姓名</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostLevel2" name="hostLevel2">
						<label for="hostLevel2" style="font-size:15px;vertical-align:none;">年级</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostNumber2" name="hostNumber2">
						<label for="hostNumber2" style="font-size:15px;vertical-align:none;">学号</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostColl2" name="hostColl2">
						<label for="hostColl2" style="font-size:15px;vertical-align:none;">所在院系/专业</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostTel2" name="hostTel2">
						<label for="hostTel2" style="font-size:15px;vertical-align:none;">联系电话</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="hostEmail2" name="hostEmail2">
						<label for="hostEmail2" style="font-size:15px;vertical-align:none;">电子邮箱</label>
					</div>			
				</div>

				<div class="field" style="margin-bottom: 0px;">
					<h2 style="text-align: center;font-family: 'Lato', sans-serif;">成员信息</h2>
				</div>

				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinName1" name="joinName1">
						<label for="joinName1" style="font-size:15px;vertical-align:none;">姓名</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinLevel1" name="joinLevel1">
						<label for="joinLevel1" style="font-size:15px;vertical-align:none;">年级</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinNumber1" name="joinNumber1">
						<label for="joinNumber1" style="font-size:15px;vertical-align:none;">学号</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinColl1" name="joinColl1">
						<label for="joinColl1" style="font-size:15px;vertical-align:none;">所在院系/专业</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinTel1" name="joinTel1">
						<label for="joinTel1" style="font-size:15px;vertical-align:none;">联系电话</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinEmail1" name="joinEmail1">
						<label for="joinEmail1" style="font-size:15px;vertical-align:none;">电子邮箱</label>
					</div>			
				</div>				
				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinName2" name="joinName2">
						<label for="joinName2" style="font-size:15px;vertical-align:none;">姓名</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinLevel2" name="joinLevel2">
						<label for="joinLevel2" style="font-size:15px;vertical-align:none;">年级</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinNumber2" name="joinNumber2">
						<label for="joinNumber2" style="font-size:15px;vertical-align:none;">学号</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinColl2" name="joinColl2">
						<label for="joinColl2" style="font-size:15px;vertical-align:none;">所在院系/专业</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinTel2" name="joinTel2">
						<label for="joinTel2" style="font-size:15px;vertical-align:none;">联系电话</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinEmail2" name="joinEmail2">
						<label for="joinEmail2" style="font-size:15px;vertical-align:none;">电子邮箱</label>
					</div>				
				</div>
				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinName3" name="joinName3">
						<label for="joinName3" style="font-size:15px;vertical-align:none;">姓名</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinLevel3" name="joinLevel3">
						<label for="joinLevel3" style="font-size:15px;vertical-align:none;">年级</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinNumber3" name="joinNumber3">
						<label for="joinNumber3" style="font-size:15px;vertical-align:none;">学号</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinColl3" name="joinColl3">
						<label for="joinColl3" style="font-size:15px;vertical-align:none;">所在院系/专业</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinTel3" name="joinTel3">
						<label for="joinTel3" style="font-size:15px;vertical-align:none;">联系电话</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinEmail3" name="joinEmail3">
						<label for="joinEmail3" style="font-size:15px;vertical-align:none;">电子邮箱</label>
					</div>			
				</div>										
				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinName4" name="joinName4">
						<label for="joinName4" style="font-size:15px;vertical-align:none;">姓名</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinLevel4" name="joinLevel4">
						<label for="joinLevel4" style="font-size:15px;vertical-align:none;">年级</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinNumber4" name="joinNumber4">
						<label for="joinNumber4" style="font-size:15px;vertical-align:none;">学号</label>
					</div>			
				</div>

				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinColl4" name="joinColl4">
						<label for="joinColl4" style="font-size:15px;vertical-align:none;">所在院系/专业</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinTel4" name="joinTel4">
						<label for="joinTel4" style="font-size:15px;vertical-align:none;">联系电话</label>
					</div>
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="joinEmail4" name="joinEmail4">
						<label for="joinEmail4" style="font-size:15px;vertical-align:none;">电子邮箱</label>
					</div>			
				</div>	
				<div class="field" style="margin-bottom: 0px;">
					<h2 style="text-align: center;font-family: 'Lato', sans-serif;">第一指导教师</h2>
				</div>
				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerName1" name="pointerName1">
						<label for="pointerName1" style="font-size:20px;vertical-align:none;">姓名</label>
					</div>
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerPart1" name="pointerPart1">
						<label for="pointerPart1" style="font-size:20px;vertical-align:none;">单位</label>
					</div>
				</div>
				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerAge1" name="pointerAge1">
						<label for="pointerAge1" style="font-size:20px;vertical-align:none;">年龄</label>
					</div>
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerJob1" name="pointerJob1">
						<label for="pointerJob1" style="font-size:20px;vertical-align:none;">专业技术职务</label>
					</div>
				</div>
				<div class="field" style="height: 200px;">
					<textarea type="textarea" id="pointerInFo1" name="pointerInFo1" style="height: 195px;"></textarea>
					<label for="pointerInFo1" style="line-height: 7em;">主要成果</label>
				</div>

				<div class="field" style="margin-bottom: 0px;">
					<h2 style="text-align: center;font-family: 'Lato', sans-serif;">第二指导教师</h2>
				</div>
				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerName2" name="pointerName2">
						<label for="pointerName2" style="font-size:20px;vertical-align:none;">姓名</label>
					</div>
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerPart2" name="pointerPart2">
						<label for="pointerPart2" style="font-size:20px;vertical-align:none;">单位</label>
					</div>
				</div>
				<div style="height:30px;margin-bottom: 15px;padding-right:0px;">
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerAge2" name="pointerAge2">
						<label for="pointerAge2" style="font-size:20px;vertical-align:none;">年龄</label>
					</div>
					<div class="field" style="display: inline-block;width: 49.255%; height: 100%;">
						<input type="text" id="pointerJob2" name="pointerJob2">
						<label for="pointerJob2" style="font-size:20px;vertical-align:none;">专业技术职务</label>
					</div>
				</div>
				<div class="field" style="height: 200px;">
					<textarea type="textarea" id="pointerInFo2" name="pointerInFo2" style="height: 195px;"></textarea>
					<label for="pointerInFo2" style="line-height: 7em;">主要成果</label>
				</div>

			</div>


			<div id="second" name="second" class="wd">
				<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
					<center><h1>2</h1></center>
				</div>
				<div class="field" style="height: 800px;">
					<textarea type="textarea" id="applyReason" name="applyReason" style="height: 795px; font-size: 15px;" 
						placeholder="(包括自身具备的知识条件、自己的特长、兴趣、已有的实践创新成果等)"></textarea>
					<label for="applyReason" style="line-height: 30em;">申请理由</label>
				</div>
			</div>

			<div id="third" name="third" class="wd">
				<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
					<center><h1>3</h1></center>
				</div>
				<div class="field" style="height: 800px;">
					<textarea type="textarea" id="finishWay" name="finishWay" style="height: 795px; font-size: 15px;"></textarea>
					<label for="finishWay" style="line-height: 30em;">项目方案</label>
				</div>
			</div>
			<div id="fourth" name="fourth" class="wd">
				<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
					<center><h1>4</h1></center>
				</div>
				<div class="field" style="height: 400px;">
					<textarea type="textarea" id="environmentSchool" name="environmentSchool" style="height: 395px; font-size: 15px;"placeholder="(包括项目开展所需的实验实训情况、配套经费、相关扶持政策等)"></textarea>
					<label for="environmentSchool" style="line-height: 17em;">学校提供条件</label>
				</div>
			</div>
			<div id="fifth" name="fifth" class="wd">
				<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
					<center><h1>5</h1></center>
				</div>
				<div class="field" style="height: 300px;">
					<textarea type="textarea" id="goal" name="goal" style="height: 295px; font-size: 15px;"></textarea>
					<label for="goal" style="line-height: 13em;">预期成果</label>
				</div>
			</div>
			<div id="sixth" name="sixth" class="wd">
				<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
					<center><h1>6</h1></center>
				</div>
				<div style="height:30px;margin-bottom: 5px;padding-right:0px;">
					
					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="totalMoney" name="totalMoney">
						<label for="totalMoney" style="font-size:15px;vertical-align:none;">总经费</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="governmentMoney" name="governmentMoney">
						<label for="governmentMoney" style="font-size:15px;vertical-align:none;">财政拨款</label>
					</div>

					<div class="field" style="display: inline-block;width: 32.3333%; height: 100%;">
						<input type="text" id="schoolMoney" name="schoolMoney">
						<label for="schoolMoney" style="font-size:15px;vertical-align:none;">学校拨款</label>
					</div>	
				</div>
				<div class="field" style="height: 300px;">
						<textarea type="textarea" id="includeDetail" name="includeDetail" style="height: 295px; font-size: 15px;"></textarea>
						<label for="includeDetail" style="line-height: 13em;">具体包括:</label>
				</div>			
			</div>
			<div id="seventh" name="seventh" class="wd">
				<div style="width: 35px;border-radius: 25px;background-color: green;margin:0 auto; margin-bottom: 15px;">
					<center><h1>7</h1></center>
				</div>
				<div class="field" style="height: 300px;">
					<textarea type="textarea" id="recommendReason" name="recommendReason" style="height: 295px; font-size: 15px;"></textarea>
					<label for="recommendReason" style="line-height: 13em;">导师推荐意见</label>
				</div>
			</div>

			<div class="wd" style="margin-bottom: 15px;margin-top: 15px;">
				<center><input type="button" style="height: 50px;width:150px;margin:0 auto;" id="createWordButton" value="提交"></center>
			</div>
		</form>

		<div id="success"></div>
	</div>
	<div id="footer">footer</div>
</div>

<script>
jQuery(document).ready(function($){
	$('#shp1').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#first').offset().top}, 800);
		$('#hp1').addClass("chp");
		$('#shp1').addClass("cshp");
	});


	$('#shp2').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#second').offset().top}, 800);
		$('#hp1').addClass("chp");
		$('#shp1').addClass("cshp2");
		$('#hp2').addClass("chp");
		$('#shp2').addClass("cshp");
	}); 



	$('#shp3').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#third').offset().top}, 800);
		$('#hp2').addClass("chp");
		$('#shp2').addClass("cshp2");
		$('#hp3').addClass("chp");
		$('#shp3').addClass("cshp");
	}); 
	$('#shp4').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#fourth').offset().top}, 800);
		$('#hp3').addClass("chp");
		$('#shp3').addClass("cshp2");
		$('#hp4').addClass("chp");
		$('#shp4').addClass("cshp");
	}); 
	$('#shp5').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#fifth').offset().top}, 800);
		$('#hp4').addClass("chp");
		$('#shp4').addClass("cshp2");
		$('#hp5').addClass("chp");
		$('#shp5').addClass("cshp");
	});

	$('#shp6').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#sixth').offset().top}, 800);
		$('#hp5').addClass("chp");
		$('#shp5').addClass("cshp2");
		$('#hp6').addClass("chp");
		$('#shp6').addClass("cshp");
	});

	$('#shp7').click(function(){
		initStyle();
		$('html,body').animate({scrollTop:$('#seventh').offset().top}, 800);
		$('#hp6').addClass("chp");
		$('#shp6').addClass("cshp2");
		$('#shp7').addClass("cshp");
	});

	function initStyle(){
		var list = document.getElementsByClassName('hp');
 		var i;
 		for(i = 0 ; i <list.length ; i++){
 			if ($(list[i]).hasClass("chp")) {
 				$(list[i]).removeClass("chp");
 			}
 		}
 		var list = document.getElementsByClassName('shp');
 		for(i = 0 ; i <list.length ; i++){
 			if ($(list[i]).hasClass("cshp")) {
 				$(list[i]).removeClass("cshp");
 			}
 			if ($(list[i]).hasClass("cshp2")) {
 				$(list[i]).removeClass("cshp2");
 			}
 				
 		}
	}

	$('input[type="text"]').blur(function(){
		$this = $(this);
		if(this.value != ""){
			$('label[for="'+ this.id +'"]').addClass("eslabel");			
		}else if(this.value == "" && $('label[for="'+ this.id +'"]').hasClass("eslabel")){
			$('label[for="'+ this.id +'"]').removeClass("eslabel");
		}
	})

	$('textarea').blur(function(){
		$this = $(this);
		if(this.value != ""){
			$('label[for="'+ this.id +'"]').addClass("eslabel");	
		}else if(this.value == "" && $('label[for="'+ this.id +'"]').hasClass("eslabel")){
			$('label[for="'+ this.id +'"]').removeClass("eslabel");
		}
	})





	$('input[type="radio"]').hide();

	$(".radioHolder").click(function(){
		var list = document.getElementsByClassName('holderSpan');
		for (var i = list.length - 1; i >= 0; i--) {
			if($(list[i]).hasClass("hovfor1")){
				$(list[i]).removeClass("hovfor1");
			}
		}
		if($(this).children(".holderSpan").hasClass("hovfor1")){
			$(this).children(".holderSpan").removeClass("hovfor1");
		}else{
			$(this).children("input").attr("checked","checked");
			$(this).children(".holderSpan").addClass("hovfor1");
		}
	})


    $('#createWordButton').click(function() {
        $.ajax({
            url: 'Template.php',
            type: 'post',
            dataType:'json',
            data: $('#createWord').serialize(),
            success: function(msg) {
            	alert(msg);
               document.getElementById("success").innerHTML = msg;
            },
         error: function(XMLHttpRequest, textStatus, errorThrown) {
                   alert(XMLHttpRequest.status);
                   alert(XMLHttpRequest.readyState);
                   alert(textStatus);     
             }
        });
    });



})
</script>
</body>
</html>