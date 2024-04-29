<!DOCTYPE html>
<html lang="en">

<style>
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: "Montserrat", sans-serif;
	background: #e9e9e9;
	width: 100%;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	overflow: hidden;
}

h1 {
	font-size: 40px;
  text-align: center;
}

.container{
	cursor: pointer;
	position: absolute;
	top: 5%;
	right: 5%;
	width: 30px;
	height: 20px;
}

.bars{
	width: 30px;
	height: 4px;
	background: #000;
}

.bars::before,
.bars::after{
	content: '';
	position: absolute;
	width: 30px;
	height: 4px;
	background: #000;
}

.bars::before{
	margin-top: 9px;
}

.bars::after{
	margin-top: 18px;
}

nav{
	position: absolute;
	width: 100%;
	height: 30px;
	background: #000;
	display: flex;
	justify-content: center;
	align-items: center;
	right: -200vw;
}

nav ul {
	list-style: none;
}

nav ul li{
	margin: 50px 0;
}

nav ul li a{
	color: #fafafa;
	font-size: 2em;
	text-decoration: none;
	font-weight: 500;
	position: relative;
	opacity: 0;
	pointer-events: none;
}

nav ul li a:after{
	content: '';
	width: 100%;
	position: absolute;
	height: 3px;
	border-radius: 5px;
	background: #fff;
	bottom: -10px;
	left: 0;
	transform-origin: left;
	transition: transform .5s ease;
	transform: scaleX(0);
}


nav ul li a:hover:after{
	transform: scaleX(1);
}
.full-page
{
    height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./images/1561819162721.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
nav .close {
	width: 30px;
	height: 30px;
	position: absolute;
	top: 6%;
	right: 5%;
	cursor: pointer;
	opacity: 0;
	pointer-events: none;
}

nav h2{
	position: absolute;
	top:5%;
	left: 5%;
	opacity: 0;
	pointer-events: none;
	color: #fff;
	font-size: 2em;
}

nav .close div::before,
nav .close div::after{
	content: '';
	position: absolute;
	width: 30px;
	height: 4px;
	background: #fff;
	transition: background .5s ease;
}
nav .close div::before{
	transform: rotate(-45deg);
}

nav .close div::after{
	transform: rotate(45deg);
}

nav .close:hover div::before,
nav .close:hover div::after{
	background: rgb(209, 3, 3);
}

@media (max-width: 992px){
  h1{
    font-size: 25px;
  }
}

</style>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="student-html.css">
	<title>GCTC-STUDENT</title>
</head>



<body >
    <div class="full-page">
	<div class="container">
		<div class="bars"></div>
	</div>
	<nav>
        <h2 style="font-family: Old English Text MT; font-size:42px; color: antiquewhite;"> <strong> Geethanjali College of Engineering and Technology<br><div style="font-family: Brush Script MT; ; font-size:30px; color: antiquewhite;" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. . . Striving Towards Perfection</div></strong></h2><br>
        <h4 class="text-right" style="font-family: Brush Script MT; ; font-size:30px; color: antiquewhite;"> <strong></strong></h4>
		<div class="close">
			<div></div>
		</div>
		<ul>
			<li><a href="attendance.php">Attendance</a></li>
			<li><a href="https://www.gctcportal.in/p/results.html">Results</a></li>
			<li><a href="login.php">Request for GATE PASS</a></li>
		</ul>
	</nav>
</div>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
	<script>
		const open = document.querySelector('.container');
		const close = document.querySelector('.close');
		var tl = gsap.timeline({ defaults: { duration: 1, ease: 'expo.inOut' } });
		open.addEventListener('click', () => {
			if (tl.reversed()) {
				tl.play();
			} else {
				tl.to('nav', { right: 0 })
					.to('nav', { height: '100vh' }, '-=.1')
					.to('nav ul li a', { opacity: 1, pointerEvents: 'all', stagger: .2 }, '-=.8')
					.to('.close', { opacity: 1, pointerEvents: 'all' }, "-=.8")
					.to('nav h2', { opacity: 1 }, '-=1');
			}
		});

		close.addEventListener('click', () => {
			tl.reverse();
		});
	</script>
</body>

</html>