<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Jua');
	@import url('https://fonts.googleapis.com/css?family=Work+Sans');
	body{
		margin: 0 auto;
	}
	#bg{
		border: 0px solid red;
		margin: 0 auto;
		background-size: 100% auto;
		height: auto;
	}
	#myVideo{
		position: fixed;
    right: 0;
    bottom: 0;
    width: 100%;
		height: 100% auto;
	}
     .confirm1
    {
			float: left;
			padding: 20px 0px 20px 0px;
			text-decoration: none;
			font-size: 300%;
			border: none;
			width: 80%;
      font-family: 'Kanit', sans-serif;
      color: #000;
			background: rgba(0, 190, 112, 0.5);
  		transition: all ease-in-out 0.5s;
      background-color:#037099;
    }
    .confirm1:hover
    {
			font-size: 350%;
			cursor: pointer;
			color: rgb(3, 112, 153);
			background: rgba(0, 0, 0, 0.5);
    }
  .bt
    {
			padding: 20px 0px 20px 0px;
			text-decoration: none;
			font-size: 300%;
			border: none;
			width: 100%;
			margin: 10% 0% 0% 0%;
      font-family: 'Kanit', sans-serif;
      color: #000;
			background: rgba(0, 190, 112, 0.5);
  		transition: all ease-in-out 0.5s;
    }
    .bt:hover
    {
			font-size: 350%;
			cursor: pointer;
			color: rgb(0, 190, 112);
			background: rgba(0, 0, 0, 0.5);
    }
    input[type=text]
    {
      font-size:16pt;
      font-family: "JasmineUPC";
    }
    .main
    {
    	text-align: center;
    }
    .header
    {
    	background-color: #037099;
    	padding-bottom: 5px;
      padding-top: 5px;
    }
		.content {
			float: left;
			padding-bottom: 2%;
			padding-right: 2%;
			padding-left: 2%;
			margin: 0 auto;
	    position: relative;
	    background: rgba(0, 0, 0, 0.1);
	    color: #f1f1f1;
	    width: 45%;
			font-family: 'Jua', sans-serif;
			color: #000;
		}
		.content h1{
			opacity: 0.9;
			border: 0px solid blue;
			font-size: 55px;
		}

		.content #text1{
			padding: 0px 0px 0px 5%;
			text-align: left;
			box-shadow: 1px 2px 2px #000;
			margin-left: 5%;
			font-family: 'Kanit', sans-serif;
			color:#000;
			font-size: 30px;
			background-color: rgba(255, 203, 79, 0.3);
			font-weight: bold;
			width: 90%;
		}
		.content #text2{
			padding: 0px 0px 0px 5%;
			text-align: left;
			margin-top:10px;
			box-shadow: 1px 2px 2px #000;
			margin-left: 5%;
			font-family: 'Kanit', sans-serif;
			color:#000;
			font-size: 30px;
			background-color: rgba(41, 94, 164, 0.3);
			font-weight: bold;
			width: 70%;
		}
		.content #text3{
			text-align: right;
			padding-right: 3%;
			float: left;
			margin-top:10px;
			box-shadow: 1px 2px 2px #000;
			font-family: 'Kanit', sans-serif;
			color:#000;
			font-size: 22px;
			background-color: rgba(233, 233, 233, 0.3);
			width: 45%;
		}
		.content #text4{
			float: right;
			text-align: left;
			padding-left: 3%;
			margin-top:10px;
			box-shadow: 1px 2px 2px #000;
			font-family: 'Kanit', sans-serif;
			color:#000;
			font-size: 21px;
			background-color: rgba(233, 233, 233, 0.3);
			width: 45%;
		}
		.searchData #SearchIP{
			padding: 0px 0px 0px 10px;
			border: none;
			font-family: 'Kanit', sans-serif;
			font-size: 25px;
			width: 60%;
			float: left;
			background-color: rgba(255,255,255,0.3);
		}
		#containSearch{
			width: 100%;
		}
		.confirm
	    {
				float:left;
				margin-left: 3%;
				border: 1px solid red;
				text-decoration: none;
				font-size: 160%;
				border: none;
	      font-family: 'Kanit', sans-serif;
	      color: #000;
				background: rgba(250, 90, 90, 0.5);
	  		transition: all 0.5s;
	    }
	    .confirm:hover
	    {
				padding: 0px 40px 0px 40px;
				font-size: 160%;
				cursor: pointer;
				color: rgba(250, 90, 90);
				background: rgba(0, 0, 0, 0.5);
	    }

			/*----------------CONTENT2-----------------*/
			.content2 {
				background: rgba(0, 0, 0, 0.1);
				float: right;
				padding: 2%;
				margin-top: 3.7%;
		    position: relative;
		    color: #f1f1f1;
		    width: 45%;
				font-family: 'Jua', sans-serif;
				color: #000;
			}
			.content2 h1{
				font-family: 'Kanit', sans-serif;
				opacity: 0.9;
				border: 0px solid blue;
				font-size: 45px;
				box-shadow: 1px 2px 2px #000;
				background: rgba(255, 255, 255, 0.2);
			}
			#containRegis{
				font-family: 'Kanit', sans-serif;
				font-size: 26px;
				margin: 0 auto;
				background: rgba(255, 255, 255, 0.2);
				border-radius: 5px;
				padding: 3%;
			}
			#containRegis input[type="text"]{
				margin-left: 3%;
				float: left;
				padding: 0px 0px 0px 10px;
				border: none;
				font-family: 'Kanit', sans-serif;
				font-size: 25px;
				width: 90%;
				float: left;
				border-bottom: 2px solid #000;
				background: none;
				transition: all 0.8s;
			}
			#containRegis input[type="text"]:hover{
				background-color: rgba(255,255,255,0.3);
				border: none;
			}

			.containerRadio {
					margin-top: 5%;
					border: 0px solid red;
			    display: flex;
					padding-left: 15%;
			    position: relative;
			    margin-bottom: 12px;
			    cursor: pointer;
			    font-size: 22px;
			    -webkit-user-select: none;
			    -moz-user-select: none;
			    -ms-user-select: none;
			    user-select: none;
			}

			/* Hide the browser's default radio button */
			.containerRadio input[type="radio"] {
			    position: absolute;
			    opacity: 0;
			    cursor: pointer;
			}

			/* Create a custom radio button */
			.checkmark {
				transition: all 0.5s;
				border: 0px solid yellow;
			    position: absolute;
			    left: 0;
			    height: 25px;
			    width: 25px;
			    background-color: #eee;
			    border-radius: 50%;
			}

			/* On mouse-over, add a grey background color */
			.containerRadio:hover input ~ .checkmark {
			    background-color: #ccc;
			}

			/* When the radio button is checked, add a blue background */
			.containerRadio input:checked ~ .checkmark {
			    background-color: #2196F3;
			}

			/* Create the indicator (the dot/circle - hidden when not checked) */
			.checkmark:after {
			    content: "";
			    position: absolute;
			    display: none;
			}

			/* Show the indicator (dot/circle) when checked */
			.containerRadio input:checked ~ .checkmark:after {
			    display: block;
			}

			/* Style the indicator (dot/circle) */
			.containerRadio .checkmark:after {
			 	top: 9px;
				left: 9px;
				width: 8px;
				height: 8px;
				border-radius: 50%;
				background: white;
			}

			/*-------------------------------------------------IMG_MODEL-------------------------------*/
			#myImg {
					width: 19.5%;
					padding: 4.8% 0% 4.7% 0%;
					float: right;
					text-decoration: none;
					font-size: 210%;
					border: none;
		      font-family: 'Kanit', sans-serif;
		      color: #000;
		  		transition: all ease-in-out 0.5s;
		      background-color:#fa5a5a;
			    cursor: pointer;
			    transition: 0.3s;
			}

			#myImg:hover {
					padding: 0px 0px 5% 0px;
					cursor: pointer;
					color: #fa5a5a;
					background: rgba(0, 0, 0, 0.5);
			}

			/* The Modal (background) */
			.modal {
			    display: none; /* Hidden by default */
			    position: fixed; /* Stay in place */
			    z-index: 1; /* Sit on top */
			    padding-top: 100px; /* Location of the box */
			    left: 0;
			    top: 0;
			    width: 100%; /* Full width */
			    height: 100%; /* Full height */
			    overflow: auto; /* Enable scroll if needed */
			    background-color: rgb(0,0,0); /* Fallback color */
			    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
			}

			/* Modal Content (image) */
			.modal-content {
			    margin: auto;
			    display: block;
			    width: 30%;
			    max-width: 700px;
			}

			/* Caption of Modal Image */
			#caption {
			    margin: auto;
			    display: block;
			    width: 80%;
			    max-width: 700px;
			    text-align: center;
			    color: #ccc;
			    padding: 10px 0;
			    height: 150px;
			}

			/* Add Animation */
			.modal-content, #caption {
			    -webkit-animation-name: zoom;
			    -webkit-animation-duration: 0.6s;
			    animation-name: zoom;
			    animation-duration: 0.6s;
			}

			@-webkit-keyframes zoom {
			    from {-webkit-transform:scale(0)}
			    to {-webkit-transform:scale(1)}
			}

			@keyframes zoom {
			    from {transform:scale(0)}
			    to {transform:scale(1)}
			}

			/* The Close Button */
			.close {
			    position: absolute;
			    top: 15px;
			    right: 35px;
			    color: #f1f1f1;
			    font-size: 40px;
			    font-weight: bold;
			    transition: 0.3s;
			}

			.close:hover,
			.close:focus {
			    color: #bbb;
			    text-decoration: none;
			    cursor: pointer;
			}

			/* 100% Image Width on Smaller Screens */
			@media only screen and (max-width: 700px){
			    .modal-content {
			        width: 100%;
			    }
			}
			/*-------------------------------------------------IMG_MODEL[END]-------------------------------*/
</style>
</head>
<body>
	  <div class="App">
	  	<div class="main">
				<div id="bg">
					<video autoplay muted loop id="myVideo">
					  <source src="Border-Collie.mp4" type="video/mp4">
					</video>

					<div class="content">
					  <h1><font color="#00be70">K</font>MUTNB<br><font color="#ffcb4f">W</font>alk <font color="#fa5a5a">a</font>nd <font color="#295ea4">R</font>un
							<font color="#295ea4">2</font><font color="#fa5a5a">0</font><font color="#ffcb4f">1</font><font color="#00be70">8</font></h1>
						<div id=text1>
								วันอาทิตย์ที่ 6 พฤษภาคม 2561
						</div>
						<div id=text2>
								ณ คณะอุตสาหกรรมเกษตร
						</div>
						<div id=text3>
								ระยะวิ่ง : 5 กิโลเมตร<br>
								<font style="font-size:15px;color:#fa5a5a;">(ปล่อยนักวิ่ง 6:30 น.)</font><br>
								ระยะวิ่ง : 10 กิโลเมตร<br>
								<font style="font-size:15px;color:#fa5a5a;">(ปล่อยนักวิ่ง 6:00 น.)</font>
						</div>
						<div id=text4>
								ลงทะเบียนเวลา : <font style="font-size:26px;color:#fa5a5a;">05:00</font> น.<br>
								ค่าลงทะเบียน : <font style="font-size:26px;color:#fa5a5a;">50</font> บาท<br>
								พร้อมรับ Wristband และ เหรียญรางวัล<br>

						</div>

						<input type="submit" class="bt" name="bt" value="ตรวจสอบผลการลงทะเบียน"/>
					  <div class="searchData" style="float:left;margin-top:10px;">
					      <div>
					          <input id="SearchIP" srtle="margin:0;" type='text' name='namelname' size='40' maxlength="13" placeholder='กรุณากรอกรหัสประจำตัวประชาชน'/>
					          <input type='submit' class='confirm' name='check' value="ตรวจสอบ" />
					     </div>
						 </div>
					</div>

					<!--+++++++++++++++++++++++++++++++++++++-CONTENT2++++++++++++++++++++++++++++++++++++++++++-->
					<div class="content2">
						<h1>ลงทะเบียน "<font color="#ffcb4f">W</font>alk <font color="#fa5a5a">a</font>nd <font color="#295ea4">R</font>un
							<font color="#295ea4">2</font><font color="#fa5a5a">0</font><font color="#ffcb4f">1</font><font color="#00be70">8</font>"</h1>
			      <br/>
			      <br/>
						<form id="validates">
			      <table id="containRegis" border="0px">
			        <tr>
			          <td align="right">รหัสบัตรประชาชน :</td>
			          <td><input type="text" name="id" maxlength="13" required/></td>
			        </tr>
			        <tr>
			          <td align="right">ชื่อ :</td>
			          <td><input type="text" name="name" required/></td>
			        </tr>
			         <tr>
			          <td align="right">นามสกุล :</td>
			          <td><input type="text" name="lname" required/></td>
			        </tr>
			         <tr>
			          <td align="right">ประเภทการวิ่ง :</td>
			          <td>
									<label class="containerRadio">5 กิโลเมตร
									  <input type="radio" checked="checked" name="runType" value="5" />
									  <span class="checkmark"></span>
									</label>

									<label class="containerRadio">10 กิโลเมตร
									  <input type="radio" name="runType" value="10" />
									  <span class="checkmark"></span>
									</label>
								</td>
			        </tr>
			        <tr>
			          <td align="right">Facebook :</td>
			          <td><input type="text" name="facebook" required/></td>
			        </tr>
			      </table>
			      <br/>
			      <input type='submit' class="confirm1" name="register" value="ลงทะเบียน" onClick=>

						<button type="button" name="button" id="myImg" alt="Trolltunga, Norway" src="QR.PNG">ชำระเงิน</button>

						<!-- The Modal -->
						<div id="myModal" class="modal">
						  <span class="close">&times;</span>
						  <img class="modal-content" id="img01">
						  <div id="caption"></div>
						</div>
					</div>
				</form>

				</div>

      </div>
      </div>
			<script type="text/javascript">

						// Get the modal
						var modal = document.getElementById('myModal');

						// Get the image and insert it inside the modal - use its "alt" text as a caption
						var img = document.getElementById('myImg');
						var modalImg = document.getElementById("img01");
						var captionText = document.getElementById("caption");
						img.onclick = function(){
						    modal.style.display = "block";
						    modalImg.src = "QR.PNG";
						    captionText.innerHTML = "ชำระค่าลงทะเบียนได้ตาม QR CODE นี้<br>หรือ PromptPay ได้ที่เบอร์ 0841410563<br>ชื่อบัญชี <font size=6>Saiwarun yenjitpissamai</font><br>หลังจากโอนแล้ว ให้ส่งหลักฐานการโอนมาที่<br><font size=6>https://www.facebook.com/kmutnbwalkrun/</font> ";
						}

						// Get the <span> element that closes the modal
						var span = document.getElementsByClassName("close")[0];

						// When the user clicks on <span> (x), close the modal
						span.onclick = function() {
						    modal.style.display = "none";
						}
						
			$(document).ready(function(){
				$(".searchData").hide();
				$(".bt").click(function(){
					$(".searchData").show();
				});
				$('#validates').validate({ // initialize the plugin
						rules: {
								id: {
										required: true
								},
								name: {
										required: true
								},
								lname: {
										required: true
								},
								facebook: {
										required: true
								}
						},
						submitHandler: function(form) {
							$.ajax({
									 type: "POST",
									 url: "insert_user.php",
									 cache: false,
									 data: $(form).serialize(),
									 success: function(a)
									 {
											if(a.trim() == '1')
											{
													swal({
															title: '<i>ลงทะเบียนสำเร็จแล้ว</i>',
															type: 'success'
													});
											}
											else
											{
													swal({
															title: '<i>ระบบไม่สามารถบันทึกข้อมูลได้</i>',
															type: 'error',
															html: "ขออภัยในความไม่สะดวก"
													});
											}
									 }
							 });
						}
				});
				$(".confirm").click(function(){
							var name = $("input[name='namelname']").val();
							$.ajax({
								   type: "POST",
								   url: "query_user.php",
								   cache: false,
								   data: "id="+name,
								   success: function(msg){
										 swal({
												 title: '<i>ผลการลงทะเบียน</i>',
												 type: 'success',
												 html: msg
									   });

							   	}
							 });
					});
				});
			</script>
</body>
</html>
