<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>แผนกวิชาเทคโนโลยีสารสนเทศ - วิทยาลัยเทคนิคนครนายก</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/ribbin.css" rel="stylesheet">
  <link href="css/ekko-lightbox.css" rel="stylesheet">
  <link href="css/ekko-lightbox.min.css" rel="stylesheet">
  

  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

  <script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
<!--function Alert Box-->

<script>
function myFunction2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}
</script>
<script>
function myFunction3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}
</script>
<script>
function myFunction4() {
    var popup = document.getElementById("myPopup4");
    popup.classList.toggle("show");
}
</script>

<script type="text/javascript">
//form tags to omit in NS6+:
//http://eking.in
var omitformtags=["input", "textarea", "select"]

omitformtags=omitformtags.join("|")

function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
return false
}

function reEnable(){
return true
}

if (typeof document.onselectstart!="undefined")
document.onselectstart=new Function ("return false")
else{
document.onmousedown=disableselect
document.onmouseup=reEnable
}

</script>
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  <style type="text/css">
td.padding1 {padding: 25px}
tr:nth-child(even){
}
th {
	background-color: #0099CC;
	color: white;
	text-align: center;
}
  </style>

<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
.popup1 {    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.popup2 {    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

</head><!--/head-->

<body>
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-bright" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/11.jpg)">
          <div class="caption">
           <h1 class="animated fadeInLeftBig">ยินดีต้อนรับเข้าสู่ </h1>
			<h1 class="animated fadeInLeftBig"><span>แผนกวิชาเทคโนโลยีสารสนเทศ</span></h1>
            <h2 style="color:#fff" class="animated fadeInRightBig">วิทยาลัยเทคนิคนครนายก </h2>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">เข้าสู่เว็บไซต์</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
           <h1 class="animated fadeInLeftBig">Welcome to </h1>
			<h1 class="animated fadeInLeftBig"><span>Information Technology</span></h1>
            <h3 style="color:#fff"class="animated fadeInRightBig">Nakhonnayok Technical College</h3>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/4.jpg)">
          <div class="caption">
             <p><h1 class="animated fadeInLeftBig">ยินดีต้อนรับเข้าสู่ </h1>
			<h1 class="animated fadeInLeftBig"><span>แผนกวิชาเทคโนโลยีสารสนเทศ</span></h1>
            <h2 style="color:#fff" class="animated fadeInRightBig">วิทยาลัยเทคนิคนครนายก </h2><p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">เข้าสู่เว็บไซต์</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/6.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to </h1>
			<h1 class="animated fadeInLeftBig"><span>Information Technology</span></h1>
            <h3 style="color:#fff"class="animated fadeInRightBig">Nakhonnayok Technical College</h3>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
	  <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
     
    </div>

  <!--.preloader-->
<div class="preloader"> <i class="fa fa-gear fa-spin"></i></div>
  <!--/.preloader--
           
            <iframe src="Imgesslide/demo/features.htm"wide=700 height="1000" style="border: 0px; width:100%;"></iframe>
    </div>
      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
          <left><h1><img class="img-responsive" src="images/logo2.png" alt="logo"></h1></left>
          </a>                    
        </div>
         <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                  
            <li class="scroll active"><a href="#home">หน้าแรก</a></li>
            <li class="scroll"><a href="#about-us">ประวัติ</a></li> 
			<li class="scroll"><a href="#rr">บุคลากร</a></li>
            <li class="scroll"><a href="#studen">นักเรียน</a></li> 
            <li class="scroll"><a href="#services">หลักสูตร</a></li> 
			<li class="scroll"><a href="#blog">ผลงาน</a></li>
            <li class="scroll"><a href="#portfolio">กิจกรรม</a></li>
			<li class="scroll"><a href="#project">โครงการ</a></li>
            <li class="scroll"><a href="#studen2">ผลงานนักเรียน</a></li>
            <li class="scroll"><a href="booking-re\index.php">ระบบสารแคร์</a></li>
            <li class="scroll"><a href="#contact">ประชาสัมพันธ์</a></li>
            <li class="scroll"><a href="#cc">ติดต่อ</a></li>        
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <table width="1138" border="0" background="images/bg.png" 
			style=" padding: 15px; 
					-moz-border-radius: 15px; 
					-khtml-border-radius: 15px; 
					-webkit-border-radius: 15px; 
					border-radius: 15px;">
              <tr>
                <td width="1015" class="padding1"><h2><img src="images/lg.png" alt="logo">ประวัติ</h2>
                  <p> แผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคนครนายก </p>
                  <p class="text-justify"> เมื่อปี พ.ศ.2548 โดยดำริของท่านเกรียงศักดิ์  เจริญวุฒิ  ผู้อำนวยการวิทยาลัยเทคนิคนครนายก โดยมอบหมายให้ อาจารย์สมโภช ตามสายลม และอาจารย์ไพรัช ปานดำ เป็นผู้เริ่มต้นก่อตั้งและเป็นอาจารย์ประจำแผนกวิชาฯในช่วงแรก โดยจัดการเรียนการสอนนักศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.) และเปิดรับนักศึกษารุ่นแรกจำนวน20คน จากนักเรียนระดับประกาศนียบัตรวิชาชีพ(ปวช.) และระดับมัธยมศึกษาตอนปลาย(ม.6) หรือเทียมเท่า ในเขตจังหวัดนครนายกและจังหวัดใกล้เคียง</p>
                  <p class="text-justify">ต่อมาในปี พ.ศ. 2557 โดยดำริของท่านผู้อำนวยการศิริ จันบำรุง ผู้อำนวยการวิทยาลัยเทคนิคนครนายก มีนโยบายให้แผนกวิชาเทคโนโลยีสารสนเทศ เปิดรับนักเรียนระดับประกาศนียบัตรวิชาชีพ(ปวช.)  โดยเร่งเห็นถึงความสำคัญของการจัดการเรียนการสอน วิวัฒนาการและความก้าวหน้าของเทคโนโลยีในปัจจุบัน ว่ามีความจำเป็นต่อการดำเนินชีวิตในสังคมปัจจุบันและอนาคต จึงให้มีการเปิดการเรียนการสอนครบทั้งระดับ คือ ประกาศนียบัตรวิชาชีพ(ปวช.) และระดับประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.) เพื่อรองรับนักเรียนนักศึกษาที่สนใจทางด้านเทคโนโลยีในด้านต่างๆ และมีความสนใจในความก้าวหน้าทางด้านเทคโนโลยีในปัจจุบันและในอนาคต</p></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!--/#about-us-->
  
  <div class="row">
    <section id="about-us2" class="parallax">
      <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <table width="1138" border="0" 
			style=" padding: 15px; 
					-moz-border-radius: 15px; 
					-khtml-border-radius: 15px; 
					-webkit-border-radius: 15px; 
					border-radius: 15px;">
                      <tr>
                        <td width="1015" class="padding1"><h2><img src="images/lg.png" alt="" ><span><font color="#000000"> เทคโนโลยีสารสนเทศ  คือ ?   </span></h2>
                          <p class="text-justify"><br><font color="#000000">

เทคโนโลยีสารสนเทศ (Information Technology) คือ การนำเอาเทคโนโลยีมาใช้สร้างมูลค่าเพิ่มให้กับสารสนเทศ ทำให้สารสนเทศมีประโยชน์ และใช้งานได้กว้างขวางมากขึ้น เทคโนโลยีสารสนเทศรวมไปถึงการใช้เทคโนโลยีด้านต่าง ๆ ที่จะรวบรวม จัดเก็บ ใช้งาน ส่งต่อ หรือสื่อสารระหว่างกัน ในระบบสารสนเทศนั้นประกอบด้วย 5 ส่วนหลักๆ ได้แก่ บุคลากร ขั้นตอนการทำงาน ซอฟต์แวร์ ฮาร์ดแวร์ และข้อมูล ปัจจุบัน เทคโนโลยีสารสนเทศมีความสำคัญต่อวิถีชีวิตของประชาชน ทั้งด้านการติดต่อสื่อสาร การเป็นแหล่งข้อมูลความรู้ การดำเนินธุรกิจ และอื่นๆ อีกนับไม่ถ้วน</p>
            <p class="text-justify"><font color="#000000">เทคโนโลยีสารสนเทศ (Information Technology) มาจากคำว่า &ldquo;เทคโนโลยี&rdquo; รวมกับคำว่า &ldquo;สารสนเทศ&rdquo; &ldquo;เทคโนโลยี&rdquo; หมายถึง สิ่งที่มนุษย์พัฒนาขึ้น เพื่อช่วยในการทำงานหรือแก้ปัญหาต่าง ๆ เข่น อุปกรณ์   เครื่องมือ เครื่องจักรวัสดุ หรือ แม้กระทั่งสิ่งที่จับต้องไม่ได้ เช่น ระบบหรือกระบวนการต่าง ๆ เพื่อให้การดำรงชีวิตของมนุษย์ง่ายและสะดวกยิ่งขึ้น  &ldquo;สารสนเทศ&rdquo; หมายถึง ข้อมูล ข้อเท็จจริง ข่าวสาร ความรู้ ที่ได้มีการบันทึก ประมวลหรือดำเนินการด้วยวิธีใดๆไว้ และสามารถนำไปใช้ประโยชน์และเผยแพร่ทั้งส่วนบุคคลและสังคม  ดังนั้น จึงกล่าวได้ว่า เทคโนโลยีสารสนเทศ หมายถึง การนำเอาเทคโนโลยีมาใช้สร้างมูลค่าเพิ่มให้กับสารสนเทศ ทำให้สารสนเทศมีประโยชน์ และใช้งานได้กว้างขวางมากขึ้น เทคโนโลยีสารสนเทศรวมไปถึงการใช้เทคโนโลยีด้านต่าง ๆ ที่จะรวบรวม จัดเก็บ ใช้งาน ส่งต่อ หรือสื่อสารระหว่างกัน เทคโนโลยีสารสนเทศเกี่ยวข้องโดยตรงกับเครื่องมือเครื่องใช้ในการจัดการ สารสนเทศ ซึ่งได้แก่ เครื่องคอมพิวเตอร์ และอุปกรณ์รอบข้าง ขั้นตอน วิธีการดำเนินการ ซึ่งเกี่ยวข้องกับซอฟต์แวร์ เกี่ยวข้องกับตัวข้อมูล เกี่ยวข้องกับบุคลากร เกี่ยวข้องกับกรรมวิธีการดำเนินงานเพื่อให้ข้อมูลเกิดประโยชน์สูงสุด นอกจากนี้แล้วยังรวมไปถึง โทรทัศน์ วิทยุ โทรศัพท์ โทรสาร หนังสือพิมพ์ นิตยสารต่างๆ ฯลฯ</p>
			</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
    </div>
</div>
<div>
<section id="rr">
  <div class="container">
    <div class="row">
      <h2>
      
        <center>
          <h2>&nbsp;</h2>
          <h2><img src="images/lg.png" alt="logo">บุคลากร</h2>
        </center>
      </h2>
    </div>
  </div>
  <div class="team-members">
    <div class="row">
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image"> <img src="images/team/2.jpg" alt="" width="270" height="310" class="img-rounded"></div>
          <div class="member-info">
            <h3>นายธิติ แท่นยั้ง</h3>
            <h4>หัวหน้าแผนกวิชาเทคโนโลยีสารสนเทศ</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://web.facebook.com/ThiTi.ThaenYoung?ref=br_rs" target = "_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="mailto:t.thiti2012@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
            </ul>
            <ul>
              <div class="popup"><span class="popuptext" id="myPopup">092-521-9624</span>
                <li><a class="dribbble" onclick="myFunction()"><i class="fa fa-mobile"></i></a></li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image"> <img src="images/team/3.jpg" alt="" width="270" height="310" class="img-rounded"></div>
          <div class="member-info">
            <h3>นางสาววิภารัตน์ คูณวัตร</h3>
            <h4>ครูประจำ</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://web.facebook.com/profile.php?id=1796978179&ref=br_rs" target = "_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="mailto:sunnine_1@hotmail.com"><i class="fa fa-envelope-o"></i></a></li>
              <div class="popup"><span class="popuptext" id="myPopup2">081-761-4353</span>
                <li><a class="dribbble" onclick="myFunction2()"><i class="fa fa-mobile"></i></a></li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image"> <img src="images/team/4.jpg" alt="" width="270" height="310" class="img-rounded"></div>
          <div class="member-info">
            <h3>นางสาวมยุรี อารีรอบ</h3>
            <h4>ครูประจำ</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://www.facebook.com/kwang.areerob?ref=br_rs" target = "_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="mailto:arai043@hotmail.com"><i class="fa fa-envelope-o"></i></a></li>
              <div class="popup"><span class="popuptext" id="myPopup3">081-004-1676</span>
                <li><a class="dribbble" onclick="myFunction3()"><i class="fa fa-mobile"></i></a></li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image"> <img src="images/team/5.jpg" alt="" width="270" height="310" class="img-rounded"></div>
          <div class="member-info">
            <h3>นางสาวประนอม กรองสี</h3>
            <h4>ครูประจำ</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://www.facebook.com/pranom.krongsee" target = "_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="mailto:Pranom_krongsee@hotmail.com"><i class="fa fa-envelope-o"></i></a></li>
              <div class="popup"><span class="popuptext" id="myPopup4">087-131-9137</span>
                <li><a class="dribbble" onclick="myFunction4()"><i class="fa fa-mobile"></i></a></li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image"> <img src="images/team/6.jpg" alt="" width="270" height="310" class="img-rounded"></div>
          <div class="member-info">
            <h3>นางสาวนริทร์ทิพย์ เบ้าลี</h3>
            <h4 align="center">ครูประจำ</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://www.facebook.com/somo.narintip" target = "_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="mailto:narintip@ivec3.com"><i class="fa fa-envelope-o"></i></a></li>
              <div class="popup"><span class="popuptext" id="myPopup5">089-261-7583</span>
                <li><a class="dribbble" onclick="myFunction5()"><i class="fa fa-mobile"></i></a></li>
              </div>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="member-image"> <img src="images/team/10.jpg" alt="" width="270" height="310" class="img-rounded"></div>
          <div class="member-info">
            <h3>นางสาววารินทร์ ทองเตี้ย</h3>
            <h4>ครูประจำ</h4>
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://www.facebook.com/warin.tongtea.1" target = "_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="mailto:kruelect@windowslive.com"><i class="fa fa-envelope-o"></i></a></li>
              <div class="popup"><span class="popuptext" id="myPopup4">081-755-6726</span>
                <li><a class="dribbble" onclick="myFunction6()"><i class="fa fa-mobile"></i></a></li>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="studen">
<div class="container">
  <div class="row">
    <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
      <h2>&nbsp;</h2>
      <h2><img src="images/lg.png" alt="logo">จำนวนนักเรียน</h2>
    </div>
  </div>
  <center>
  <table width="1063" height="419" class="table-bordered">
    <tr style="font-weight: bold">
      <th width="54" height="62"><h3>ลำดับ</h3></th>
      <th width="354"><h3>ระดับชั้น</h3></th>
      <th width="96"><h3>ชาย</h3></th>
      <th width="95"><h3>หญิง</h3></th>
      <th width="83"><h3>รวม</h3></th>
    </tr>
    <tr style="font-weight: bold">
      <td style="text-align:center">1</td>
      <td><left><h3>ประกาศนียบัตรวิชาชีพ (ปวช.)</h3></left></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><h3>ปวช.1</h3></td>
      <td style="text-align:center"><h3>13</h3></td>
      <td style="text-align:center"><h3>26</h3></td>
      <td style="text-align:center"><h3>39</h3></td>
    </tr>
    <tr>
      <td></td>
      <td><h3>ปวช.2</h3></td>
      <td style="text-align:center"><h3>4</h3></td>
      <td style="text-align:center"><h3>13</h3></td>
      <td style="text-align:center"><h3>17</h3></td>
    </tr>
    <tr>
      <td style="text-align:center">&nbsp;</td>
      <td><h3>ปวช.3</h3></td>
      <td style="text-align:center"><h3>12</h3></td>
      <td style="text-align:center"><h3>8</h3></td>
      <td style="text-align:center"><h3>20</h3></td>
    </tr>
    <tr>
      <td style="text-align:center">&nbsp;</td>
      <td><h3 align="center"><strong>รวมระดับชั้น ปวช.</strong></h3></td>
      <td style="text-align:center"><h3><strong>29</strong></h3></td>
      <td style="text-align:center"><h3><strong>47</strong></h3></td>
      <td style="text-align:center"><h3><strong>76</strong></h3></td>
    </tr>
    <tr>
      <td style="text-align:center"><strong>2</strong></td>
      <td style="font-weight: bold"><h3>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><h3>ปวส.1</h3></td>
      <td style="text-align:center"><h3>7</h3></td>
      <td style="text-align:center"><h3>4</h3></td>
      <td style="text-align:center"><h3>11</h3></td>
    </tr>
    <tr>
      <td></td>
      <td><h3>ปวส.2</h3></td>
      <td style="text-align:center"><h3>5</h3></td>
      <td style="text-align:center"><h3>13</h3></td>
      <td style="text-align:center"><h3>18</h3></td>
    </tr>
    <tr>
      <td></td>
      <td><h3 align="center"><strong>รวมระดับชั้น ปวส.</strong></h3></td>
      <td style="text-align:center"><h3><strong>12</strong></h3></td>
      <td style="text-align:center"><h3><strong>17</strong></h3></td>
      <td style="text-align:center"><h3><strong>29</strong></h3></td>
    </tr>
    <tr style="font-weight: bold">
      <th></th>
      <th style="text-align:center"><h3><strong>รวมสุทธิ</strong></h3></th>
      <th style="text-align:center"><h3><strong>41</strong></h3></th>
      <th style="text-align:center"><h3><strong>64</strong></h3></th>
      <th style="text-align:center"><h3><strong>105</strong></h3></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form name="form1" method="post" action=""><background-color: #FF0000;>
      <h1>
        <div align="center"><background-color: #d24dff;><a href="system/The map system ..html" title="ระบบแผนที่ระบุตำแหน่ง" target="_blank"><strong>MSDIT</strong></a></div></h1>
  </form>
  <p>&nbsp;</p>
</div>

  <section id="services">
    <div class="container">
	  <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
	    <h2>&nbsp;</h2>
	    <h2><img src="images/lg.png" alt="logo">หลักสูตร</h2>
		<div class="text-left col-sm-8 col-sm-offset-2">
			<a href="course.voc1.html">
			<button type="button" class="btn btn-info btn-lg btn-block">หลักสูตรประกาศนียบัตรวิชาชีพ (ปวช.)</button>
			</a><br>
			<a href="course.dip1.html">
			<button type="button" class="btn btn-primary btn-lg btn-block">หลักสูตรประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</button>
			</a>
        </div>
        </div> 
      </div>
    </div>
      <div class="text-center our-services">
		<h2><img src="images/lg.png" alt="logo">เทคโนโลยีสารสนเทศ เรียนอะไรบ้าง ?</h2>
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-database"></i>
            </div>
            <div class="service-info">
              <h3>การจัดการฐานข้อมูล (Database)</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>สร้างเว็บไซต์ (Web Design)</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-qrcode"></i>
            </div>
            <div class="service-info">
              <h3>สร้างแอพพลิเคชั่น (Application)</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-code"></i>
            </div>
            <div class="service-info">
              <h3>เขียนโปรแกรม (Programming)</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-server"></i>
            </div>
            <div class="service-info">
              <h3>ระบบเครือข่าย (Network System)</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-child"></i>
            </div>
            <div class="service-info">
              <h3>สร้างแอนิเมชั่น (Animation)</h3>
            </div>
          </div>
		  <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="950ms">
            <div class="service-icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="service-info">
              <h3>ตัดต่อภาพ (Graphic Design)</h3>
            </div>
          </div>
		  <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1050ms">
            <div class="service-icon">
              <i class="fa fa-film"></i>
            </div>
            <div class="service-info">
              <h3>ตัดต่อวิดีโอ (Video Editing)</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><!--/#services-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>&nbsp;</h2>
          <h2><img src="images/lg.png" alt="logo">ผลงาน</h2>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
			  <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
                  <div class="item active">
              <a><img class="img-responsive" src="images/blog/1.jpg" alt=""></a> 
				  </div>
				<div class="item">
                    <a><img class="img-responsive" src="images/blog/2.jpg" alt=""></a>
                  </div>
				</div>
			   </div>
              <div class="post-meta">
              </div>
            </div>
            <div class="entry-header">
              <h2><a>รางวัลชนะเลิศ</a></h2>
              <h3 class="date">ระหว่างวันที่ 6-10 ธันวาคม 2558</h3>
			  <span class="cetagory"></span>
            </div>
            <div class="entry-content">
              <h3>การประกวดสุดยอดนวัตกรรมอาชีวศึกษา ประเภทที่ 10 สิ่งประดิษฐ์ด้านนวัตกรรมซอฟต์แวร์</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
               <iframe width="362" height="242" src="https://www.youtube.com/embed/kmE8Ub2K8uU" allowfullscreen></iframe>
              <div class="post-meta">
              </div>
            </div>
            <div class="entry-header">
              <h2><a>รางวัลชนะเลิศ</a></h2>
              <h3 class="date">ระหว่างวันที่ 16-17 พฤศจิกายน 2559</h3>
              <span class="cetagory"></span>
            </div>
            <div class="entry-content">
              <h3>การแข่งขันทักษะวิชาชีพ การแข่งขันทักษะการประกวด 3D Animation</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <iframe width="362" height="242" src="https://www.youtube.com/embed/g9Ump6n-wLc" allowfullscreen></iframe>
			  <img class="img-responsive" alt=""></a>
              <div class="post-meta">
              </div>
            </div>
            <div class="entry-header">
              <h2><a>ระดับเหรียญทองแดง</a></h2>
              <h3 class="date">ระหว่างวันที่ 28-2 ธันวาคม 2559</h3>
			  <span class="cetagory"></span>
            </div>
            <div class="entry-content">
              <h3>การแข่งขันทักษะวิชาชีพ การแข่งขันทักษะการประกวด 3D Animation</h3>
            </div>
          </div>                    
        </div>
      </div>
    </div>
  </section><!--/#blog-->

   <section id="portfolio">
     <div class="row">
       <div class="container">
          <div class="row">
              <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2><img src="images/lg.png" alt="logo">กิจกรรม</h2>
              </div>
            </div>
          </div>
          <div>
          <iframe src="Imgesslide/demo/features.html"wide=800 height="1000" style="border: 0px; width:100%;"></iframe>
          </div>
          <div class="container-fluid">
            <div class="row"></div>
          </div>
    </div>
          <div id="portfolio-single-wrap2">
            <div id="portfolio-single2"></div>
          </div>
          <!-- /#portfolio-single-wrap -->
</section>
      </div> 
    </div>
    <div class="container-fluid">
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->
<!--PROJECT-->
 <section id="project">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2><img src="images/lg.png" alt="logo">โครงการ</h2>
            <h4>Project</h4>
            <p>ศึกษาและปฏิบัติเกี่ยวกับ การบูรณาการความรู้และทักษะในระดับเทคนิคที่สอดคล้องกับสาขาวิชาชีพที่ศึกษาเพื่อสร้างและพัฒนางานด้วยกระบวนการทดลอง สำรวจ ประดิษฐ์คิดค้น หรือการปฏิบัติงานเชิงระบบ การเลือกหัวข้อโครงการ การศึกษาค้นคว้าข้อมูลและเอกสารอ้างอิง การเขียนโครงการ การดำเนินงานโครงการ การเก็บรวบรวมข้อมูล วิเคราะห์และแปลผล การสรุปจัดทำรายงาน การนำเสนอผลงานโครงการดำเนินการเป็นรายบุคคลหรือกลุ่มตามลักษณะของงานให้แล้วเสร็จในระยะเวลาที่กำหนด</p>
            <span><table width="110%" height="1065" class="table table-bordered">
              <thead>
                <tr>
                  <th align="center"><span><h3>ปีการศึกษา</h3></span></th>
                  <th align="center"><h3>ระดับชั้น</h3></th>
                  <th align="center"><h3>หมายเหตุ</h3></th>
                </tr>
                <tr>
                  <td valign="middle"rowspan="2"><h3>2559</h3></td>
                  <td align="left"><a href="project/59vc.html"><h3><sapn><font color="#0099FF">ประกาศนียบัตรวิชาชีพ (ปวช.)</font></span></h3></a></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td align="left">
                  <h3><a href="project/59d.html"><sapn>
                  <font color="#0099FF">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</font></span></a></h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td rowspan="2"><h3>2560</h3></td>
                  <td align="left"><a href="project/60vc.html"><h3><sapn><font color="#0099FF">ประกาศนียบัตรวิชาชีพ (ปวช.)</font></span></h3></a></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3></td>
                  <td align="left"><h3 align="center">ไม่มีผู้สำเร็จการศึกษา</h3></td>
                </tr>
                <tr>
                  <td rowspan="2"><h3>2561</h3></td>
                  <td align="left"><a href="project/61vc.html"><h3><sapn><font color="#0099FF">ประกาศนียบัตรวิชาชีพ (ปวช.)</font></span></h3></a></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td align="left">
                  <h3><a href="project/61d.html"><sapn>
                  <font color="#0099FF">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</font></span></a></h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td rowspan="2"><h3>2562</h3></td>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพ (ปวช.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                 <td align="left"><h3>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td rowspan="2"><h3>2563</h3></td>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพ (ปวช.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td rowspan="2"><h3>2564</h3></td>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพ (ปวช.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td rowspan="2"><h3>2565</h3></td>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพ (ปวช.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
                <tr>
                  <td align="left"><h3>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h3></td>
                  <td align="left"><h3></h3></td>
                </tr>
              </thead>
            </table></span>
          </div>
        </div> 
      </div>
	 </div>
 </section>
<!--/#PROJECT-->
<section id="studen2">
  <center><h2><img src="images/lg.png" alt="logo">ผลงานนักเรียน</h2></center>
  <div class="text-left col-sm-8 col-sm-offset-2">
    <button type="button" class="btn btn-info btn-lg btn-block">ผลงานนักเรียนประกาศนียบัตรวิชาชีพ (ปวช.)</button>
    </a><br>
    <a href="portfolio.html">
      <button type="button" class="btn btn-primary btn-lg btn-block">ผลงานนักเรียนประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</button>
    </a> </div>
</div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<section id="aa">
  <center><h2><img src="images/lg.png" alt="logo">ผลงานนักเรียน</h2></center>
  <div class="text-left col-sm-8 col-sm-offset-2">
    <button type="button" class="btn btn-info btn-lg btn-block">ผลงานนักเรียนประกาศนียบัตรวิชาชีพ (ปวช.)</button>
    </a><br>
    <a href="portfolio.html">
      <button type="button" class="btn btn-primary btn-lg btn-block">ผลงานนักเรียนประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</button>
    </a> </div>
</div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<section id="contact">
 <div id="contact-us" class="parallax">
		 <center><img src="images/11.jpg"><img src="images/22.jpg">
        </center>
	  <div class="container">
      		
	<section id="cc">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>ติดต่อเรา</h2>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="700" data-wow-delay="600ms">
          <div class="row">
            
            <div class="col-sm-12">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li style="font-size: 20px"><i class="fa fa-map-marker"></i> <span> ที่อยู่ :</span> วิทยาลัยเทคนิคนครนายกเลขที่ 116 หมู่ 1 ถนนรังสิต–นครนายก ตำบลท่าช้าง อำเภอเมือง จังหวัดนครนายก 26000</li>
               
                  
                  <li style="font-size: 20px"><i class="fa fa-phone"></i> <span> เบอร์โทร :</span> 092-251-9624 (อ.ธิติ)  </li> 
                  <li style="font-size: 20px"><i class="fa fa-envelope"></i> <span> อีเมลล์ :</span><a href="mailto:t.thiti2012@gmail.com"> t.thiti2012@gmail.com</a></li>
                  <li style="font-size: 20px"><i class="fa fa-globe"></i> <span> เว็บไซต์ :</span> <a href="http://www.nayoktech.ac.th/webnew" target="_blank">http://www.nayoktech.ac.th/~ntc001/</a></li> <img src="images/3.png">
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section>
  
  
  <div id="google-map" class="wow fadeIn" data-latitude="14.2040299" data-longitude="101.2064265" data-wow-duration="500ms" data-wow-delay="300ms"></div>

</div>
<!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 Information Technology - Nakhonnayok Technical College</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right"> Create by ChaloermWan Nimitmala</p>
            
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/ekko-lightbox.js"></script>
  <script type="text/javascript" src="js/ekko-lightbox.min.js"></script>

</body>
</html>