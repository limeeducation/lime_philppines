<?
include_once($_SERVER['DOCUMENT_ROOT']."/static/etc/old/common.php");
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta property="og:image" content="./img/og_main.jpg" />

  <title>라임에듀</title>
  <link href="/static/css/style.css" rel="stylesheet" >
  <link href="/static/css/sub_ca.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  



</head>


<body>
<div id="wrap">

<div id="headerin">
<header>
	<h1 class="logo"><a href="/"><img src="/img/logo_lime.png" title="미국 캐나다 영국 전문가 라임에듀" alt="미국 캐나다 영국 전문가 라임에듀"></a></h1>

	<div class="top_call">
		<div class="his"><a href=""><i class="far fa-building"></i><span>회사소개</span></a></div>
		<div class="call"><a href=""><i class="fas fa-phone"></i><span>대표전화 02-2135-7699</span></a></div>
	</div>

	<div class="openSide"><a href="#"></a></div>

	 <div class="side">
		<div class="closeSide"><p><i class="fas fa-times"></i>닫기</p></div>  
        <nav class="gnb ">
            <ul>
                <li class="mn_c">
                    <a href="#" class="<?if($me=='1'){echo 'on';}?> class=" cate">캐나다 관리형유학</a>
                    <div class="sub">
                        <ul>
                            <li class="side_dmn"><a href="/mng/bc.php" class=""><span>BC주 관리형 유학</span></a></li>
                            <li class="side_dmn"><a href="/mng/ab.php" class=""><span>AB주 관리형 유학</span></a></li>
                          <!--   <li class="side_dmn"><a href="/mng/on.php" class=""><span>ON주 관리형 유학</span></a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="mn_c">
                    <a href="#" class="<?if($me=='2'){echo 'on';}?> cate">국제 사립학교</a>
                    <div class="sub">
                        <ul>
                            <li class="side_dmn"><a href="/intl/bicc.php" class=""><span>BICC</span></a></li>
                            <li class="side_dmn"><a href="/intl/tale.php" class=""><span>TAIE</span></a></li>
                            <li class="side_dmn"><a href="/intl/umc.php" class=""><span>UMC High School</span></a></li>
                           <!-- <li class="side_dmn"><a href="/intl/sgb.php" class=""><span>SGA</span></a></li>-->
                        </ul>
                    </div>
                </li>
				
				<li class="mn_c">
                    <a href="#" class="<?if($me=='3'){echo 'on';}?> cate">명문보딩스쿨</a>
                    <div class="sub">
                        <ul>
                            <li class="side_dmn"><a href="/bod/sch1.php" class=""><span>Lakefield College School</span></a></li>
                            <li class="side_dmn"><a href="/bod/sch2.php" class=""><span>Ridely College</span></a></li>
                            <li class="side_dmn"><a href="/bod/sch3.php" class=""><span>Pickering College</span></a></li>
                            <!--<li class="side_dmn"><a href="/bod/sch4.php" class=""><span>St. Johns Academy</span></a></li>-->
                            <li class="side_dmn"><a href="/bod/sch5.php" class=""><span>Bodwell High School</span></a></li>
                        </ul>
                    </div>
                </li>

				
                <li class="mn_c">
                    <a href="#" class="<?if($me=='4'){echo 'on';}?> cate">아이 혼자 공립학교</a>
                    <div class="sub">
                        <ul>
                            <li class="side_dmn"><a href="/publ/on.php" class=""><span>요크가톨릭 교육청</span></a></li>
                            <li class="side_dmn"><a href="/publ/on2.php" class=""><span>요크 교육청</span></a></li>
							<li class="side_dmn"><a href="/publ/on3.php" class=""><span>토론토 가톨릭 교육청</span></a></li>
							<li class="side_dmn"><a href="/publ/on4.php" class=""><span>토론토 교육청</span></a></li>
							<li class="side_dmn"><a href="/publ/on5.php" class=""><span>노스밴쿠버 교육청</span></a></li>
                            <li class="side_dmn"><a href="/publ/on6.php" class=""><span>랭리 교육청</span></a></li>
							<li class="side_dmn"><a href="/publ/on7.php" class=""><span>밴쿠버 교육청</span></a></li>
							<li class="side_dmn"><a href="/publ/on8.php" class=""><span>버나비 교육청</span></a></li>
							<li class="side_dmn"><a href="/publ/on9.php" class=""><span>코퀴틀람 교육청</span></a></li>
							<!--<li class="side_dmn"><a href="/publ/bc.php" class=""><span>코퀴틀람 교육청</span></a></li>-->
                        </ul>
                    </div>
                </li>

				
                <li class="mn_c">
                    <a href="/gdn/gdn.php" class="<?if($me=='5'){echo 'on';}?>">프리미엄 가디언 서비스</a>
                </li>
				
                <li class="mn_c">
                    <a href="/fm/family.php" class="<?if($me=='6'){echo 'on';}?> ">캐나다 명문대 편입</a>

                </li>
				
   
				
                <li class="mn_c">
                    <a href="#" class="<?if($me=='7'){echo 'on';}?> cate">컬리지</a>
					<div class="sub">
                        <ul>
                            <li class="side_dmn"><a href="/col/major.php" class=""><span>전공별 컬리지</span></a></li>
                            <li class="side_dmn"><a href="/col/area.php" class=""><span>지역별 컬리리</span></a></li>
                        </ul>
					</div>
                </li>
				
                <li class="mn_c">
                    <a href="#" class="<?if($me=='8'){echo 'on';}?> cate">교육제도 및 비자</a>
                    <div class="sub">
                        <ul>
                            <li class="side_dmn"><a href="/visa/edu.php" class=""><span>캐나다 교육제도</span></a></li>
                            <li class="side_dmn"><a href="/visa/ca_visa.php" class=""><span>캐나다 비자</span></a></li>
                        </ul>
                    </div>
                </li>
				

            </ul>
		</nav>
	 </div><!--side-->

</header>
</div><!--headerin-->

