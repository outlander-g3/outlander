<?php
    // include_once('connectDb.php'); //連線
    // include_once('login.php'); //會員登入

    //要去抓選擇的開團資訊（圖,名稱,日期

    //抓
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>山行者 - PHP模板</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/vue.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="css/tech.css">
    <!-- css塞這 自己js塞屁股 -->
    
    
</head>

<body>

<!-- 插入header -->
    <?php
        include_once('header.php');
    ?>

<!-- ===========================各分頁內容開始======================= -->
<div id="scene_back" class="scene">
			<img id="banner_back" class="banner" src="img/banner_back.png">
			<img id="banner_front" class="banner" src="img/banner.png">
				<!-- <img id="pokemon7" class="" src="img/cloud-2.png"> -->
				<!-- <div id="title">登山小技巧</div> -->
		</div>
		
        <div id="wrapper">	
           
			<!-- <nav id="primary">
				<ul>
					<li>
						<h1>高山草原</h1>
						<a class="manned-flight" href="#manned-flight">View</a>
					</li>
					<li>
						<h1>溫帶針葉林</h1>
						<a class="frameless-parachute" href="#frameless-parachute">View</a>
					</li>
					<li>
						<h1>亞熱帶闊葉林</h1>
						<a class="english-channel" href="#english-channel">View</a>
					</li>
					<li>
						<h1>出發爬山吧!</h1>
						<a class="about" href="#about">View</a>
					</li>
				</ul>
			</nav> -->
			
			<div id="content">
				<article id="manned-flight">
					<header>
						<h1>高山草原</h1>
					</header>
					<p>海拔3,000公尺以上的高山地帶，由於表土層薄，水分保持不易，年均溫10度以下，樹木不易生長，因此遍布耐旱、耐寒的矮小植物。
					</p>
					<!-- <nav class="next-prev">
						<hr />
						<a class="next frameless-parachute" href="#frameless-parachute">Next</a>
					</nav> -->
				</article>
				
				<article id="frameless-parachute">
					<header>
						<h1>溫帶針葉林</h1>
					</header>
					<p>台灣海拔3,000～3,500公尺的生態帶是屬於溫帶針葉林，森林的組成與溫帶的北方針葉林（即俗稱的德國黑森林）相似，
                        也是全世界最南端的黑森林了。這種黑森林分布僅在北半球緯度50～70°之間，
                        在南半球，因為這個緯度的地區只有海洋，並無陸地和森林，因此被稱做北方針葉林。
                        因為台灣有如此高海拔的山地，再加上緯度正好位於溫帶和熱帶的交界，才能有此種針葉林帶的生存。
                    </p>
					<!-- <nav class="next-prev"> -->
						<!-- <a class="prev manned-flight" href="#manned-flight">Prev</a>
						<hr />
						<a class="next english-channel" href="#english-channel">Next</a> -->
					<!-- </nav> -->
				</article>
				
				<article id="english-channel">
					<header>
						<h1>亞熱帶闊葉林</h1>
					</header>
					<p>分布於海拔500公尺以下。植物以桑科（如榕樹）和樟科（如大葉楠、香楠）等為主，
                        森林底層則有許多蕈類生長。是人類活動較頻繁的區域。由於海拔低，開發早，原始林多已開發消失，
                        現多為次生林（如白匏仔、血桐、山黃麻等植物）與人工林（如相思樹、油桐、綠竹等植物）。
                        常見動物有麻雀、松鼠、蝙蝠以及各種鳥類、蛇、蜥蜴、昆蟲等。
                    </p>
					<!-- <nav class="next-prev">
						<a class="prev frameless-parachute" href="#frameless-parachute">Prev</a>
						<hr />
						<a class="next about" href="#about">Next</a>
					</nav> -->
				</article>
				
				<!-- <article id="about">
					<header>
						<h1>一起出發吧!</h1>
					</header>
					<a href="productsOverview.html"></a>
					<button>馬上查看行程</button> -->
							<!-- <div id="btn-main-1">馬上查看行程</div> -->
						
					<!-- <nav class="next-prev">
						<a class="prev english-channel" href="#english-channel">Prev</a>
						<hr/>
					</nav> -->
				<!-- </article> -->
			</div>
			
			<!-- Parallax foreground -->
			<div id="parallax-bg3">
				<div id="bg3-1">
					<img class="bg3-1" src="img/333.png" alt="grass"/>
				</div>
				<div id="bg3-2">
					<img class="bg3-1" src="img/444.png" alt="niddle"/>
				</div>
				<div id="bg3-3">
					<img  class="bg3-1" src="img/555.png" alt="tropical"/>
				</div>
				<!-- <img id="bg3-4" src="img/05-2.png" alt="song"/> -->
			</div>
			
			<!-- Parallax  midground clouds -->
			<div id="parallax-bg2">
				<!-- <img id="bg2-1" src="img/cloud-1.png" alt="cloud"/> -->
				<!-- <img id="bg2-2" src="http://jonathannicol.com/projects/parallax-scrolling/img/cloud-lg1.png" alt="cloud"/> -->
				<!-- <img id="bg2-3" src="img/cloud-2.png" alt="cloud"/> 
				<img id="bg2-4" src="img/cloud-4.png" alt="cloud"/> -->
				<!-- <img id="bg2-5" src="img/c-4-w.png"" alt="cloud"/>
			</div>
			
			<!-- Parallax  background clouds -->
			<div id="parallax-bg1">
				<!-- <img id="bg1-1" src="img/01-cloud.png"alt="cloud"/> -->
				<!-- <img id="bg1-2" src="img/cloud-3.png" alt="cloud"/> -->
				<!-- <img id="bg1-3" src="img/c-4-w.png" alt="cloud" width="1200px" /> -->
				<!-- <img id="bg1-4" src="img/c-5-w.png" alt="cloud"/> -->
			</div>
		
		</div>

    <?
        echo $_SESSION['memName'];
    ?>

<!-- ===========================各分頁內容結束======================= -->
<!-- 插入 footer 會員登入跟機器人 -->
<?php
    include_once('footer.php');
    // include_once('robot.php');
    include_once('memLogin.php');
?>
</body>
<script>
var sceneFront = document.getElementsByClassName('banner');
var bg31 = document.getElementById('bg3-1');
var bg32 = document.getElementById('bg3-2');
var bg33 = document.getElementById('bg3-3');
window.addEventListener('scroll',()=>{
	var originTop_G=700;
	var originTop_N=1000;
	var originTop_T=1900;
	var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	sceneFront[0].style.top = 0-(scrollTop*0.2) + "px";//banner 背面
	sceneFront[1].style.top = 0-(scrollTop*0.5) + "px";//banner 正面
	// bg3[0].style.top = originTop_G+( 0-(scrollTop*0.8)) + "px";//羊
	// bg3[1].style.top = originTop_N+(0-(scrollTop*0.5)) + "px";//針葉林
	// bg3[2].style.top = originTop_T+(0-(scrollTop*0.7)) + "px";//熱帶林
	// bg3[2].style.top =originTop_T+(0-(scrollTop*0.1))+ "px";//熱帶林
	bg31.style.top = originTop_G+( 0-(scrollTop*0.8)) + "px";//羊
	bg32.style.top = originTop_N+(0-(scrollTop*0.5)) + "px";//針葉林
	bg33.style.top = originTop_T+(0-(scrollTop*0.7)) + "px";//熱帶林
	

});
window.addEventListener('load',()=>{
	var originTop_G=700;
	var originTop_N=1000;
	var originTop_T=1900;
	var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	// sceneFront[0].style.top = 0-(scrollTop*0.2) + "px";//banner 背面
	// sceneFront[1].style.top = 0-(scrollTop*0.5) + "px";//banner 正面
	// // bg3[0].style.top = originTop_G+( 0-(scrollTop*0.8)) + "px";//羊
	// // bg3[1].style.top = originTop_N+(0-(scrollTop*0.5)) + "px";//針葉林
	// // bg3[2].style.top = originTop_T+(0-(scrollTop*0.7)) + "px";//熱帶林
	// // bg3[2].style.top =originTop_T+(0-(scrollTop*0.1))+ "px";//熱帶林
	bg31.style.top = originTop_G+( 0-(scrollTop*0.8)) + "px";//羊
	bg32.style.top = originTop_N+(0-(scrollTop*0.5)) + "px";//針葉林
	bg33.style.top = originTop_T+(0-(scrollTop*0.7)) + "px";//熱帶林
	

});
</script>
</html>


<script src="js/common.js"></script>
<script src="js/header.js"></script>
<!-- <script src="js/robot.js"></script> -->