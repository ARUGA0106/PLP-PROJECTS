<style type="text/css">
	*
	{
		margin: 0;
		padding:0;
	}
	body
	{
		background-color: #7e683e;
	}
	.catHold
	{
		position: absolute; 
		margin: auto;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 92%;
		height: 39%;
		display: flex;
		flex-flow: row;
		z-index: 10000;
		border-radius: 0.7vw;
	}
	.catHead
	{
		position: absolute;
		margin: auto;
		width: 100%;
		font-family: calibri;
		font-size: 2.4vw;
		text-align: center;
		color: #151515;
		top: -7vw;
		text-decoration: underline;
	}
	.pCont
	{
		width: 100%;
		height: 100%;
		position: absolute;
		border-radius: 0.3vw;
		overflow: hidden;
		z-index: 10000;
		margin: 0;
		padding: 0;
	}
	.iPerson
	{
		width: 24vw;
		margin-left: 7%;
		margin-right: 7%;
		border-radius: 0.3vw;
		position: relative;
		z-index: 100000;
		transform: scale(0.9);
		cursor: pointer;
		background-color: rgba(100,100,100,0.3);
		box-shadow: 0 0 0 0.3vw rgba(0,0,0,0.7);
		transition: 0.27s;
	}
	.iPerson:hover
	{
		transform: scale(1);
		background-color: rgba(255,255,255,0.7);
		box-shadow: 0 0 0 0.5vw rgba(120,120,120,0.9);
	}
	.iPerson:hover .cTitle
	{
		color: #3c3c3c;
		background-color: rgba(255,255,255,0.7);
		box-shadow: 0 0 0 0.5vw rgba(120,120,120,0.9);
	}
	.iPerson:active 
	{
		transform: scale(0.95);
		background-color: rgba(180,180,180,0.7);
		box-shadow: 0 0 0 0.3vw rgba(30,30,30,0.9);
	}
	.iPerson:active .cTitle
	{
		color: rgba(30,30,30,1);
		background-color: rgba(180,180,180,0.7);
		box-shadow: 0 0 0 0.3vw rgba(30,30,30,0.9);
	}
	.cTitle
	{
		font-family: calibri;
		font-size: 1.5vw;
		text-align: center;
		color: #151515;
		border-radius: 0.5vw;
		width: 100%;
		box-sizing: border-box;
		position: absolute;
		margin: auto;
		left: 0;
		right: 0;
		bottom: -7vw;
		padding: 0.3vw;
		z-index: 10000;
		box-shadow: 0 0 0 0.3vw rgba(0,0,0,0.7); 
		background-color: rgba(100,100,100,0.3);
		transition: 0.27s;
	}
	#TEACHER .child1,#TEACHER .child2,#TEACHER .child3
	{
		transform: scale(0.5);
		top: 1.8vw;
	}
	.noshow
	{
		display: none;
	}
	#contactBox
	{
		width: 42vw;
		height: 24vw;
		position: absolute;
		margin: auto;
		top: -45vw;
		cursor: pointer;
		border-radius: 0.74vw;
		bottom: 0;
		left: 0;
		right: 0;
		border: 0.5vw solid #042012;
		background-color: #042012;
		z-index: 100000;
		animation: popForm 0.35s ease 0s 1 forwards; 
	}
	#contactBox>table
	{
		font-family: calibri;
		font-size: 2.4vw;
		width: 100%;
		height: 75%;
		padding: 1vw;
		font-weight: bold;
		background-color: #8ab4a1;
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
	}
	#contactBox>h1
	{
		font-family: calibri;
		font-size: 2.1vw;
		width: 100%;
		color: #317657;
		text-align:center;
		font-weight: bold;
		position: absolute;
		margin: auto;
	}
	#contCover
	{
		position: absolute;
		width: 100%;
		display: none;
		height: 100%;
		z-index: 100000;
		background-color: rgba(255,255,255,0.7);
	}
	.userLb
	{
		color: #1f3c2d;
	}
	.userInfo
	{
		border-radius: 0.35vw;
		color: #042012;
		background-color: rgba(255,255,255,0.3)
	}
	@keyframes popForm
	{
		0%
		{
			top: -45vw;
		}
		100%
		{
			top: 0;
		}
	}
	#regBox
	{
		position: absolute;
		width: 55%;
		height: 30vw;
		border-radius: 1.5vw;
		background-color: rgb(189, 189, 189);
	    margin: auto;
	    border: 0.3vw solid rgb(123, 123, 123);
	    box-shadow: 0 0 5vw 1vw rgb(150, 150, 150);
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		z-index: 10000;
		display: none;
	}
	#unBox
	{
		position: absolute;
		width: 39%;
		height: 24vw;
		display: none;
		border-radius: 1.5vw;
		background-color: rgb(189, 189, 189);
	    margin: auto;
	    border: 0.3vw solid rgb(123, 123, 123);
	    box-shadow: 0 0 5vw 1vw rgb(150, 150, 150);
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		z-index: 10000;
	}
	#unBox table
	{
		margin: 1vw auto;
		font-family: calibri;
		font-size: 1.3vw;
		width: 92%;
	}
	.cusBtn
	{
		display: block;
		position: relative;
		margin: auto;
		width:12vw;
		font-family: calibri;
		font-size: 1.5vw;
		padding: 0.5vw;
		cursor: pointer;
		outline: none;
	    border-radius: 0.38vw;
	    color: rgb(101, 101, 101);
	    background-color: rgb(156, 156, 156);
	    border: 0.1vw solid rgb(64, 64, 64);
		transition: all 0.15s;
	}
	.cusBtn:hover
	{    
		color: rgb(169, 169, 169);
	    background-color: rgb(206, 206, 206);
	    border: 0.1vw solid rgb(212, 212, 212);
	}
	.cusBtn:active
	{
	    color: rgb(23, 23, 23);
	    background-color: rgb(93, 93, 93);
	    border: 0.1vw solid rgb(35, 35, 35);
	}
	.container
	{
		position: fixed;
		width: 100%;
		height: 100%;
		z-index: 1;
		background: linear-gradient(#142208,#27411e,#042f04);
		display: none;
	}
	.contents
	{
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		z-index: 10;
		background-color: rgba(0,0,0,0.35);
	}
	#bg
	{
		width: 100%;
		height: 100%;
		z-index: 0;
		position: absolute;
	}
	#grid
	{
		width: 100%;
		height: 70%;
		position: absolute;
		bottom: -1vw;
		opacity: 0.3;
		transition: 0.85s all;
	}
	#logo
	{
		position: absolute;
		margin:3vw auto;
		left: 0;
		right: 0;
		padding: 1vw;
		box-sizing: border-box;
		border: 2vw solid #001307;
		background-color: rgba(255,255,255,0.1);
		border-radius: 3vw;
		width: 50%;
		z-index: 10;
	}
	#userBtn
	{
		position: absolute;
		margin:auto;
		bottom: 0%;
		left: 0;
		right: 0;
		width: 100%;
		height: 50%;
		z-index: 10;
	}
	.slBtn
	{
		position: absolute;
		margin: auto;
		font-size: 36px;
		padding: 7px;
		width: 180px;
		text-align: center;
		font-family: calibri;
		display: inline-block;
		cursor: pointer;
		z-index: 10;
		transform: scale(1);
		border-radius: 0.7vw;
		color: #014225;
		outline: none;
		border: 0.12vw solid #115436;
		background: linear-gradient(#014225,#588654,#014225);
	}
	.slBtn:hover
	{
		color: #014225;
		border: 0.12vw solid #206446;
    	background: linear-gradient(#0a5936,#6da169,#0a5936);
	}
	.slBtn:active
	{
	    color: #0e2b18;
	    border: 0.12vw solid #061b0e;
	    background: linear-gradient(#072316,#2e4e2b,#112e1b);
	}
	#userBtn:hover #grid
	{
		opacity: 1;
	}
	#logIn
	{
		top: 3vw;
		right: 27%;
	}
	#signUp
	{
		top: 3vw;
		left: 27%;
	}
	#back
	{
		font-size: 32px;
		padding: 3.6px;
		padding-left: 12px;
		padding-right: 12px;
		text-align: center;
		font-family: calibri;
		position: absolute;
		margin: auto;
		display: inline-block;
		cursor: pointer;
		z-index: 10;
		transform: scale(1);
		border-radius: 12px 0 0 0;
		color: #09290a;
		outline: none;
		position: fixed;
		bottom: 0;
		right: 0;
		font-weight: bold;
	    border: none;
	    background: rgb(156, 220, 188);
		transition: 0.3s all;
	}
	#back:hover
	{
		color: #207723;
	}
	#back:active
	{
	    color: #070c08;
	}
	@media screen and (max-width: 1000px)
	{
		
	}
	#assist
	{
		position: absolute;
		margin: auto;
		right: 1vw;
		margin-top: 1vw;
		z-index: 1000;
	}
	#assist li
	{
		float: left;
		list-style: none;
		margin-left: 2vw;
	}
	#assist li a
	{
		color: rgb(64, 147, 98);
		text-decoration: none;
		font-weight: bold;
		font-family: calibri;
		font-size: 1.5vw;
	}
	#signCont
	{
		position: absolute;
		width: 100%;
		height: 100%;
		z-index: 1;
	}
	.mathSign
	{
		position: absolute;
		width: 9vw;
		top:-30%;
		font-family: calibri;
		font-weight: bold;
		font-size: 7vw;
		color: white;
		opacity: 0.5;
		z-index: 15;
	}
	.mathShape
	{
		position: absolute;
		width: 9vw;
		top:-70%;
		opacity: 0.7;
		z-index: 10;
	}
	#plus
	{
  		color: #846197;
		animation: plusAnime 120s cubic-bezier(0,0,0,0) 0s infinite alternate forwards;
	}
	#minus
	{
		color: #977c61;
		animation: minusAnime 120s cubic-bezier(0,0,0,0) 1s infinite alternate forwards;
	}
	#times
	{
		color: #a8094c;
		animation: timesAnime 120s cubic-bezier(0,0,0,0) 3s infinite alternate forwards;
	}
	#divide
	{
		color: #8368f0;
		animation: divideAnime 120s cubic-bezier(0,0,0,0) 7s infinite alternate forwards;
	}
	#equal
	{

		color:#402ede;
		animation: plusAnime 120s cubic-bezier(0,0,0,0) 12s infinite alternate forwards;
	}
	#one
	{

		color: #40ff00;
		animation: minusAnime 120s cubic-bezier(0,0,0,0) 25s infinite alternate forwards;
	}
	#two
	{

		color: #588d1d;
		animation: timesAnime 120s cubic-bezier(0,0,0,0) 30s infinite alternate forwards;
	}
	#three
	{

		color: #ea44de;
		animation: divideAnime 120s cubic-bezier(0,0,0,0) 37s infinite alternate forwards;
	}
	#four
	{

		color: #44ea50;
		animation: timesAnime 120s cubic-bezier(0,0,0,0) 45s infinite alternate forwards;
	}
	#five
	{

		color: #ece210;
		animation: minusAnime 120s cubic-bezier(0,0,0,0) 50s infinite alternate forwards;
	}
	#six
	{

		color: #10e5ec;
		animation: plusAnime 130s cubic-bezier(0,0,0,0) 58s infinite alternate forwards;
	}
	#seven
	{

		color: #4310ec;
		animation: divideAnime 120s cubic-bezier(0,0,0,0) 72s infinite alternate forwards;
	}
	#eight
	{

		color: #977c61;
		animation: timesAnime 120s cubic-bezier(0,0,0,0) 80s infinite alternate forwards;
	}
	#nine
	{

		color: #5cf408;
		animation: plusAnime 120s cubic-bezier(0,0,0,0) 95s infinite alternate forwards;
	}
	#zero
	{

		color: #f4f408;
		animation: minusAnime 350s cubic-bezier(0,0,0,0) 120s infinite alternate forwards;
	}
	#triangle
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 130s infinite alternate forwards;
	}
	#circle
	{

		color: #977c61;
		animation: shape2Anime 350s cubic-bezier(0,0,0,0) 141s infinite alternate forwards;
	}
	#circleangle
	{

		color: #977c61;
		animation: shape4Anime 320s cubic-bezier(0,0,0,0) 147s infinite alternate forwards;
	}
	#qtr
	{

		color: #977c61;
		animation: shape3Anime 350s cubic-bezier(0,0,0,0) 153s infinite alternate forwards;
	}
	#rtriangle
	{

		color: #977c61;
		animation: shape4Anime 350s cubic-bezier(0,0,0,0) 167s infinite alternate forwards;
	}
	#triangle2
	{

		color: #977c61;
		animation: shape2Anime 380s cubic-bezier(0,0,0,0) 178s infinite alternate forwards;
	}
	#cube
	{

		color: #977c61;
		animation: shape3Anime 350s cubic-bezier(0,0,0,0) 185s infinite alternate forwards;
	}
	#cone
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 200s infinite alternate forwards;
	}
	#rectangle
	{

		color: #977c61;
		animation: shape4Anime 350s cubic-bezier(0,0,0,0) 217s infinite alternate forwards;
	}
	#parallelogram
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 228s infinite alternate forwards;
	}
	#trapezium
	{

		color: #977c61;
		animation: shape2Anime 350s cubic-bezier(0,0,0,0) 240s infinite alternate forwards;
	}
	#cylinder
	{

		color: #977c61;
		animation: shape4Anime 350s cubic-bezier(0,0,0,0) 258s infinite alternate forwards;
	}
	#coordinate
	{

		color: #977c61;
		animation: shape3Anime 450s cubic-bezier(0,0,0,0) 272s infinite alternate forwards;
		width: 24vw;
	}
	#areaC
	{

		color: #977c61;
		animation: shape2Anime 350s cubic-bezier(0,0,0,0) 280s infinite alternate forwards;
	}
	#perimater
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 295s infinite alternate forwards;
	}
	#volumeC
	{

		color: #977c61;
		animation: shape4Anime 350s cubic-bezier(0,0,0,0) 310s infinite alternate forwards;
	}
	#pytheorem
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 320s infinite alternate forwards;
	}
	#pytheoremC
	{

		color: #977c61;
		animation: shape2Anime 350s cubic-bezier(0,0,0,0) 331s infinite alternate forwards;
	}
	#genFormula
	{

		color: #977c61;
		animation: shape3Anime 390s cubic-bezier(0,0,0,0) 338s infinite alternate forwards;
	}
	#ab_sqr
	{

		color: #977c61;
		animation: shape4Anime 350s cubic-bezier(0,0,0,0) 343s infinite alternate forwards;
	}
	#xy
	{

		color: #977c61;
		animation: shape3Anime 250s cubic-bezier(0,0,0,0) 349s infinite alternate forwards;
	}
	#abc
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 357s infinite alternate forwards;
	}
	#a_b
	{

		color: #977c61;
		animation: shape2Anime 350s cubic-bezier(0,0,0,0) 372s infinite alternate forwards;
	}
	#a_bp
	{

		color: #977c61;
		animation: shape4Anime 250s cubic-bezier(0,0,0,0) 385s infinite alternate forwards;
	}
	#a_bm
	{

		color: #977c61;
		animation: shape3Anime 350s cubic-bezier(0,0,0,0) 395s infinite alternate forwards;
	}
	#a_bt
	{

		color: #977c61;
		animation: shape1Anime 350s cubic-bezier(0,0,0,0) 407s infinite alternate forwards;
	}
	#a_bd
	{

		color: #977c61;
		animation: shape2Anime 350s cubic-bezier(0,0,0,0) 425s infinite alternate forwards;
	}
	#areatri
	{

		color: #977c61;
		animation: shape4Anime 350s cubic-bezier(0,0,0,0) 435s infinite alternate forwards;
	}
	#percent
	{

		color: #977c61;
		animation: shape3Anime 250s cubic-bezier(0,0,0,0) 338s infinite alternate forwards;
	}
	#brackets
	{

		color: #977c61;
		animation: shape2Anime 250s cubic-bezier(0,0,0,0) 345s infinite alternate forwards;
	}
	@keyframes plusAnime
	{
		0%
		{
			transform: rotate(0deg) scale(0.7);
			top:-30%;
			left: -10%;
		}
		10%
		{
			transform: rotate(36deg) scale(1);
			top: 130%;
			left: 20%;
		}
		20%
		{
			transform: rotate(72deg) scale(1);
			top:-30%;
			left: 40%;
		}
		30%
		{
			transform: rotate(108deg) scale(1);
			top: 130%;
			left: 60%;
		}
		40%
		{
			transform: rotate(144deg) scale(1);
			top:-30%;
			left: 80%;
		}
		50%
		{
			transform: rotate(180deg) scale(1);
			top: 130%;
			left: 100%;
		}
		60%
		{
			transform: rotate(216deg) scale(1);
			top:-30%;
			left: 80%;
		}
		70%
		{
			transform: rotate(252deg) scale(1);
			top: 130%;
			left: 60%;
		}
		80%
		{
			transform: rotate(288deg) scale(1);
			top:-30%;
			left: 40%;
		}
		90%
		{
			transform: rotate(324deg) scale(1);
			top: 130%;
			left: 20%;
		}
		100%
		{
			transform: rotate(360deg) scale(1);
			top:-30%;
			left: -10%;
		}
	}
	@keyframes minusAnime
	{
		0%
		{
			transform: rotate(-0deg) scale(0.7);
			top:-30%;
			right: -10%;
		}
		10%
		{
			transform: rotate(-36deg) scale(1);
			top: 130%;
			right: 20%;
		}
		20%
		{
			transform: rotate(-72deg) scale(1);
			top:-30%;
			right: 40%;
		}
		30%
		{
			transform: rotate(-108deg) scale(1);
			top: 130%;
			right: 60%;
		}
		40%
		{
			transform: rotate(-144deg) scale(1);
			top:-30%;
			right: 80%;
		}
		50%
		{
			transform: rotate(-180deg) scale(1);
			top: 130%;
			right: 100%;
		}
		60%
		{
			transform: rotate(-216deg) scale(1);
			top:-30%;
			right: 80%;
		}
		70%
		{
			transform: rotate(-252deg) scale(1);
			top: 130%;
			right: 60%;
		}
		80%
		{
			transform: rotate(-288deg) scale(1);
			top:-30%;
			right: 40%;
		}
		90%
		{
			transform: rotate(-324deg) scale(1);
			top: 130%;
			right: 20%;
		}
		100%
		{
			transform: rotate(-360deg) scale(1);
			top:-30%;
			right: -10%;
		}
	}
	@keyframes timesAnime
	{
		50%
		{
			transform: rotate(0deg) scale(0.7);
			top:-30%;
			left: -10%;
		}
		40%
		{
			transform: rotate(36deg) scale(1);
			top: 130%;
			left: 20%;
		}
		30%
		{
			transform: rotate(72deg) scale(1);
			top:-30%;
			left: 40%;
		}
		20%
		{
			transform: rotate(108deg) scale(1);
			top: 130%;
			left: 60%;
		}
		10%
		{
			transform: rotate(144deg) scale(1);
			top:-30%;
			left: 80%;
		}
		0%
		{
			transform: rotate(180deg) scale(1);
			top: 130%;
			left: 100%;
		}
		100%
		{
			transform: rotate(216deg) scale(1);
			top:-30%;
			left: 80%;
		}
		90%
		{
			transform: rotate(252deg) scale(1);
			top: 130%;
			left: 60%;
		}
		80%
		{
			transform: rotate(288deg) scale(1);
			top:-30%;
			left: 40%;
		}
		70%
		{
			transform: rotate(324deg) scale(1);
			top: 130%;
			left: 20%;
		}
		60%
		{
			transform: rotate(360deg) scale(1);
			top:-30%;
			left: -10%;
		}
	}
	@keyframes divideAnime
	{
		100%
		{
			transform: rotate(0deg) scale(0.7);
			top:-30%;
			left: -10%;
		}
		90%
		{
			transform: rotate(36deg) scale(1);
			top: 130%;
			left: 20%;
		}
		80%
		{
			transform: rotate(72deg) scale(1);
			top:-30%;
			left: 40%;
		}
		70%
		{
			transform: rotate(108deg) scale(1);
			top: 130%;
			left: 60%;
		}
		60%
		{
			transform: rotate(144deg) scale(1);
			top:-30%;
			left: 80%;
		}
		50%
		{
			transform: rotate(180deg) scale(1);
			top: 130%;
			left: 100%;
		}
		40%
		{
			transform: rotate(216deg) scale(1);
			top:-30%;
			left: 80%;
		}
		30%
		{
			transform: rotate(252deg) scale(1);
			top: 130%;
			left: 60%;
		}
		20%
		{
			transform: rotate(288deg) scale(1);
			top:-30%;
			left: 40%;
		}
		10%
		{
			transform: rotate(324deg) scale(1);
			top: 130%;
			left: 20%;
		}
		0%
		{
			transform: rotate(360deg) scale(1);
			top:-30%;
			left: -10%;
		}
	}
	@keyframes shape1Anime
	{
		0%
		{
			transform: rotate(0deg) scale(0.7);
			top:-70%;
			left: -10%;
		}
		10%
		{
			transform: rotate(36deg) scale(1);
			top: 130%;
			left: 20%;
		}
		20%
		{
			transform: rotate(72deg) scale(1);
			top:-70%;
			left: 40%;
		}
		30%
		{
			transform: rotate(108deg) scale(1);
			top: 130%;
			left: 60%;
		}
		40%
		{
			transform: rotate(144deg) scale(1);
			top:-70%;
			left: 80%;
		}
		50%
		{
			transform: rotate(180deg) scale(1);
			top: 130%;
			left: 100%;
		}
		60%
		{
			transform: rotate(216deg) scale(1);
			top:-70%;
			left: 80%;
		}
		70%
		{
			transform: rotate(252deg) scale(1);
			top: 130%;
			left: 60%;
		}
		80%
		{
			transform: rotate(288deg) scale(1);
			top:-70%;
			left: 40%;
		}
		90%
		{
			transform: rotate(324deg) scale(1);
			top: 130%;
			left: 20%;
		}
		100%
		{
			transform: rotate(360deg) scale(1);
			top:-70%;
			left: -10%;
		}
	}
	@keyframes shape2Anime
	{
		0%
		{
			transform: rotate(-0deg) scale(0.7);
			top:-70%;
			right: -10%;
		}
		10%
		{
			transform: rotate(-36deg) scale(1);
			top: 130%;
			right: 20%;
		}
		20%
		{
			transform: rotate(-72deg) scale(1);
			top:-70%;
			right: 40%;
		}
		30%
		{
			transform: rotate(-108deg) scale(1);
			top: 130%;
			right: 60%;
		}
		40%
		{
			transform: rotate(-144deg) scale(1);
			top:-70%;
			right: 80%;
		}
		50%
		{
			transform: rotate(-180deg) scale(1);
			top: 130%;
			right: 100%;
		}
		60%
		{
			transform: rotate(-216deg) scale(1);
			top:-70%;
			right: 80%;
		}
		70%
		{
			transform: rotate(-252deg) scale(1);
			top: 130%;
			right: 60%;
		}
		80%
		{
			transform: rotate(-288deg) scale(1);
			top:-70%;
			right: 40%;
		}
		90%
		{
			transform: rotate(-324deg) scale(1);
			top: 130%;
			right: 20%;
		}
		100%
		{
			transform: rotate(-360deg) scale(1);
			top:-70%;
			right: -10%;
		}
	}
	@keyframes shape3Anime
	{
		50%
		{
			transform: rotate(0deg) scale(0.7);
			top:-70%;
			left: -10%;
		}
		40%
		{
			transform: rotate(36deg) scale(1);
			top: 130%;
			left: 20%;
		}
		30%
		{
			transform: rotate(72deg) scale(1);
			top:-70%;
			left: 40%;
		}
		20%
		{
			transform: rotate(108deg) scale(1);
			top: 130%;
			left: 60%;
		}
		10%
		{
			transform: rotate(144deg) scale(1);
			top:-70%;
			left: 80%;
		}
		0%
		{
			transform: rotate(180deg) scale(1);
			top: 130%;
			left: 100%;
		}
		100%
		{
			transform: rotate(216deg) scale(1);
			top:-70%;
			left: 80%;
		}
		90%
		{
			transform: rotate(252deg) scale(1);
			top: 130%;
			left: 60%;
		}
		80%
		{
			transform: rotate(288deg) scale(1);
			top:-70%;
			left: 40%;
		}
		70%
		{
			transform: rotate(324deg) scale(1);
			top: 130%;
			left: 20%;
		}
		60%
		{
			transform: rotate(360deg) scale(1);
			top:-70%;
			left: -10%;
		}
	}
	@keyframes shape4Anime
	{
		0%
		{
			transform: rotate(0deg) scale(0.7);
			top:-70%;
			left: -10%;
		}
		10%
		{
			transform: rotate(36deg) scale(1);
			top: 130%;
			left: 20%;
		}
		20%
		{
			transform: rotate(72deg) scale(1);
			top:-70%;
			left: 40%;
		}
		30%
		{
			transform: rotate(108deg) scale(1);
			top: 130%;
			left: 60%;
		}
		40%
		{
			transform: rotate(144deg) scale(1);
			top:-70%;
			left: 80%;
		}
		50%
		{
			transform: rotate(180deg) scale(1);
			top: 130%;
			left: 100%;
		}
		60%
		{
			transform: rotate(216deg) scale(1);
			top:-70%;
			left: 80%;
		}
		70%
		{
			transform: rotate(252deg) scale(1);
			top: 130%;
			left: 60%;
		}
		80%
		{
			transform: rotate(288deg) scale(1);
			top:-70%;
			left: 40%;
		}
		90%
		{
			transform: rotate(324deg) scale(1);
			top: 130%;
			left: 20%;
		}
		100%
		{
			transform: rotate(360deg) scale(1);
			top:-70%;
			left: -10%;
		}
	}
	.registration
	{
		width: 100%;
		height: 100%;
		position: fixed;
		z-index: 1000;
		display: none;
		background-color: rgba(0,0,0,0.7);
	}
	#regCont
	{
		width: 84%;
		height: 48vw;
		border-radius: 0.7vw;
		background-color: rgb(255,255,255);
		position: absolute;
		margin: auto;
		display: none;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
	}
	#formCont
	{
		width: 100%;
		height: 87%;
		box-sizing: border-box;
		padding-top: 2vw;
		background-color: rgba(140, 140, 140, 0.5);
		position: absolute;
		margin: auto;
		top: 0;
		bottom: 0;
		overflow: auto;
	}
	#formCont::-webkit-scrollbar
	{
		width:1.2%;
	}
	#formCont::-webkit-scrollbar-thumb
	{
		background-color: rgb(100, 140, 118);
		border-radius:15px;
	}
	#fbtnCont
	{
		position: absolute;
		width: 92%;
		margin: auto;
		bottom: 0.5vw;
		right: 0;
		left: 0;
	}
	.formBtn
	{
		width:7vw;
		font-size: 1.2vw;
		padding: 0.35vw;
		cursor: pointer;
		outline: none;
		color: rgb(70, 70, 70);
		border-radius: 0.38vw;
		background-color: rgb(204, 204, 204);
		border: 1px solid rgb(177, 177, 177);
		transition: all 0.15s;
	}
	.formBtn:hover
	{
		background-color: rgb(223, 223, 223);
		color: rgb(180, 180, 180);
	}
	.formBtn:active
	{
		background-color: rgb(139, 139, 139);
		color: rgb(25, 25, 25);
	}
	#reset
	{
		float: left;
	}
	#jstBtn
	{
		position: absolute;
		margin: auto;
		display: none;
		right: 9vw;
	}
	#submit
	{
		display: none;
		position: absolute;
		margin: auto;
		right: 9vw;
	}
	#backBtn
	{
		float: right;
		display: none;
	}
	#tell
	{
		font-size: 1.8vw;
		font-family: calibri;
		font-weight: bold;
		text-align: center;
		color: #151515;
		display: none;
	}
	#regTable
	{
		width: 85%;
		display: none;
		margin: auto;
		box-sizing: border-box;
	}
	.userInput
	{
		padding: 0.3vw;
		font-family: calibri;
		color: rgb(31, 76, 57);
		width: 24vw;
		outline: none;
		text-align: center;
		box-sizing: border-box;
		border-radius: 0.5vw;
		border:0.15vw solid rgb(177, 177, 177);
		font-size: 1.8vw;
	}
	.pwdI
	{
		width: 42%;
	}
	.input_2
	{
		margin: 1vw;
	}
	.dateInput
	{
		padding: 0.5vw;
		font-family: calibri;
		color: rgb(31, 76, 57);
		width: 15%;
		outline: none;
		text-align-last: center;
		box-sizing: border-box;
		border-radius: 0.5vw;
		border:0.15vw solid rgb(177, 177, 177);
		font-size: 1.8vw;
		text-align-last: center;
	}
	#month
	{
		width: 24%;
		margin: 0 5vw 0 5vw;
	}
	.label
	{
		display: inline-block;
		padding: 0.5vw;
		text-align: left;
		font-family: calibri;
		color:rgb(69, 69, 69);
		font-size: 1.4vw;
		font-weight: bold;
		width: 100%;
	}
	.pwd
	{
		text-align: center;
		width: 100%;
	}
	.genderBtn
	{
		display: inline-block;
		position: absolute;
		margin: auto;
		top: 0;
		left: 1vw;
		bottom: 0;
		width: 1.2vw;
		height: 1.2vw;
		cursor: pointer;
		outline: inherit;
	}
	
	.mBtn,.fBtn
	{
		position: relative;
		display: inline-block;
		width: 12vw;
		margin: 1vw;
		height: 3vw;
		line-height: 3vw;
	}
	.labelG
	{
		background-color: rgba(255,255,255,0.7);
		border:0.15vw solid rgb(177, 177, 177);
		display: block;
		border-radius: 0.5vw;
		font-family: calibri;
		font-size: 21px;
		width: 100%;
		height: 100%;
		cursor: pointer;
	}
	.sid
	{
		font-size: 3vw;
		color: rgb(19, 76, 46);
		padding: 1vw;
		margin: 1vw;
		border-radius: 1vw;
		font-family: calibri;
		font-weight: bold;
		text-align: center;
		background-color: rgba(255,255,255,0.5);
	}
	.fdbck
	{
		font-size:2vw;
		color: rgb(26, 82, 58);
		padding: 1vw;
		margin: 1vw;
		font-weight: bolder;
		border-radius: 1vw;
		font-family: calibri;
		text-align: center;
		background-color: rgba(124, 151, 140, 0.29);
	}
	#ps,#pmatch
	{
		color: rgb(234, 83, 49);
		font-weight: bolder;
	}
	@keyframes return
	{
		100%
		{
			transform: scale(1);
			opacity: 1;
			top: 0;
		}
		0%
		{
			transform: scale(10);
			opacity: 0;
			top: -50%;
		}
	}
	#loginCont
	{
		width: 100%;
		height: 100%;
		position: absolute;
		z-index: 10;
		display: none;
	}
	#signBox
	{
		position: absolute;
		margin: auto;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		box-shadow:0vw 0vw 1vw 0.1vw rgb(85, 210, 147);
		border: 0.3vw solid rgb(45, 157, 112);
		width: 45vw;
		height: 45vw;
		border-radius: 50%;
		background-color: rgba(92, 126, 127, 0.76);
	}
	@keyframes wrongPwd
	{
		0%
		{
			left: 0;
		}
		15%
		{
			left: 2.5vw;
		}
		35%
		{
			left: -2vw;
		}
		50%
		{
			left: 1.5vw;
		}
		65%
		{
			left: -1vw;
		}
		80%
		{
			left: 1vw;
		}
		90%
		{
			left: -0.7vw;
		}
		100%
		{
			left: 0;
		}
	}
	@keyframes rightPwd
	{
		0%
		{
			box-shadow:0vw 0vw 3vw 0.5vw rgb(85, 210, 147);
		}
		100%
		{
			box-shadow:0vw 0vw 5vw 1vw rgb(85, 210, 147);
		}
	}
	@keyframes emptyFields
	{
		0%
		{
			transform: scale(1);
		}
		35%
		{
			transform: scale(1.1);
		}
		75%
		{
			transform: scale(0.9);
		}
		100%
		{
			transform: scale(1);
		}
	}
	@keyframes verifying
	{
		0%
		{
			transform: scale(1);
			box-shadow:0vw 0vw 0 0vw rgb(85, 210, 147);
		}
		50%
		{
			transform: scale(1.02);
			box-shadow:0vw 0vw 3vw 0.3vw rgb(85, 210, 147);
		}
		100%
		{
			transform: scale(1);
			box-shadow:0vw 0vw 0 0vw rgb(85, 210, 147);
		}
	}
	@keyframes appear
	{
		0%
		{
			top:100%; 
			transform: scale(0);
			box-shadow:0vw 0vw 35vw 3vw rgb(85, 210, 147);
		}
		50%
		{
			top:-50%; 
		}
		100%
		{
			top:0%; 
			transform: scale(1);
			box-shadow:0vw 0vw 1vw 0.1vw rgb(85, 210, 147);
		}
	}
	@keyframes disappear
	{
		100%
		{
			transform: scale(0);
			box-shadow:0vw 0vw 35vw 3vw rgb(85, 210, 147);
		}
		0%
		{
			transform: scale(1);
			box-shadow:0vw 0vw 1vw 0.1vw rgb(85, 210, 147);
		}
	}
	#userSign
	{
		position: absolute;
		margin: auto;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		width: 90%;
		height: 90%;
		border-radius: 50%;
		border: 0.5vw solid rgba(21, 73, 49, 0.82);
		background-color: rgba(105, 188, 140, 0.74);
	}
	#sBox
	{
		width: 75%;
		height: 55%;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		margin: auto;
		padding: 1vw;
		box-sizing: border-box;
		z-index: 1;
	}
	.txtInput
	{
		display: block;
		margin:auto;
		margin-bottom: 1.5vw;
		padding: 0.7vw;
		background-color: rgba(255,255,255,0.5);
		font-family: calibri;
		color: rgb(31, 76, 57);
		width: 85%;
		outline: none;
		text-align: center;
		box-sizing: border-box;
		border-radius: 0.5vw;
		border:0.15vw solid rgb(34, 90, 63);
		font-size: 1.8vw;
		transition: 0.3s all;
	}
	.txtInput:focus
	{
		background-color: rgba(255,255,255,0.7);
		border:0.15vw solid rgb(68, 166, 119);
	}
	.signLabels
	{
		display: block;
		margin:auto;
		font-family: calibri;
		color: rgb(31, 76, 57);
		text-align: center;
		box-sizing: border-box;
		border-radius: 0.5vw;
		font-size: 1.5vw;
	}
	#mmtLogo
	{
		position: absolute;
		margin: auto;
		top: 1vw;
		left: 0;
		right: 0;
		width: 21%;
		opacity: 0.7;
	}
	#msg
	{
		position: absolute;
		margin:auto;
		left: 0;
		right: 0;
		margin-top: 5.8vw;
		padding: 0.3vw;
		background-color: rgba(255,255,255,0.5);
		font-family: calibri;
		color: rgb(31, 76, 57);
		width: 50%;
		outline: none;
		text-align: center;
		box-sizing: border-box;
		border-radius: 0.5vw;
		border:0.1vw solid rgb(34, 90, 63);
		font-size: 1.5vw;
		z-index: 10;
		display: none;
	}
	#createName
	{
		left: 0;
		bottom: 3vw;
		right: 0;
		height: 5vw;
		width: 27vw;
		margin: auto;
		font-size: 3vw;
		/*display: none;*/
	}
	#okReg
	{
		left: 0;
		bottom: 3vw;
		right: 0;
		height: 5vw;
		width: 15vw;
		margin: auto;
		font-size: 3vw;
		display: none;
	}
	.regBtn
	{
		display: block;
		position: absolute;
		margin: auto;
		bottom: 1vw;
		width:7vw;
		font-family: calibri;
		font-size: 1.2vw;
		padding: 0.5vw;
		cursor: pointer;
		outline: none;
	    border-radius: 0.38vw;
	    color: rgb(101, 101, 101);
	    background-color: rgb(156, 156, 156);
	    border: 0.1vw solid rgb(64, 64, 64);
		transition: all 0.15s;
	}
	.regBtn:hover
	{    
		color: rgb(169, 169, 169);
	    background-color: rgb(206, 206, 206);
	    border: 0.1vw solid rgb(212, 212, 212);
	}
	.regBtn:active
	{
	    color: rgb(23, 23, 23);
	    background-color: rgb(93, 93, 93);
	    border: 0.1vw solid rgb(35, 35, 35);
	}
	.signBtn
	{
		display: block;
		position: absolute;
		margin: auto;
		bottom: 1vw;
		width:7vw;
		font-family: calibri;
		font-size: 1.2vw;
		padding: 0.5vw;
		cursor: pointer;
		outline: none;
	    border-radius: 0.38vw;
	    color: rgb(34, 92, 64);
	    background-color: rgb(120, 197, 153);
	    border: 0.1vw solid rgb(34, 92, 64);
		transition: all 0.15s;
	}
	.signBtn:hover
	{    
	    color: rgb(85, 162, 125);
	    background-color: rgb(159, 236, 192);
	    border: 0.1vw solid rgb(202, 255, 229);
	}
	.signBtn:active
	{
		color: rgb(0, 47, 25);
	    background-color: rgb(19, 144, 73);
	    border: 0.1vw solid rgb(0, 64, 32);
	}
	.cBtn
	{
		display: block;
		position: absolute;
		margin: auto;
		bottom: 0.1vw;
		left: 0;
		right: 0;
		width:7vw;
		font-weight: bold;
		font-family: calibri;
		font-size: 1.5vw;
		padding: 0.3vw;
		cursor: pointer;
		outline: none;
		color: #042012;
		border-radius: 0.38vw;
		background-color: rgb(82, 170, 120);
    	border: 0.1vw solid rgb(35, 92, 65);
		transition: all 0.15s;
	}
	.cBtn:hover
	{
		color: rgb(35, 167, 105);
	    background-color: rgb(137, 228, 176);
	    border: 0.1vw solid rgb(155, 218, 188);
	}
	.cBtn:active
	{
	    color: rgb(0, 5, 3);
	    background-color: rgb(58, 135, 91);
	    border: 0.1vw solid rgb(4, 51, 29);
	}
	#logBtn
	{
		right: 4vw;
	}
	#logCBtn
	{
		left: 4vw;
	}
	@keyframes msgAppear
	{
		0%
		{
			transform: rotateX(270deg);
			opacity: 0;
		}
		100%
		{
			transform: rotateX(360deg);
			opacity: 1;
		}
	}
	@keyframes msgNotify
	{
		0%
		{
			color: rgb(31, 76, 57);
			background-color: rgba(255,255,255,0.5);
			border:0.1vw solid rgb(34, 90, 63);
			transform: rotateX(270deg);
		}
		100%
		{
			transform: rotateX(360deg);
			color: rgb(65, 61, 6);
			background-color: rgba(252, 251, 108, 0.5);
			border: 0.1vw solid rgb(124, 114, 11);
		}
	}
	@keyframes msgWelcome
	{
		0%
		{
			color: rgb(31, 76, 57);
			background-color: rgba(255,255,255,0.5);
			border:0.1vw solid rgb(34, 90, 63);
			transform: rotateX(270deg);
		}
		100%
		{
			transform: rotateX(360deg);
			color: rgb(0, 104, 7);
			background-color: rgba(102, 237, 81, 0.82);
			border: 0.1vw solid rgb(3, 78, 0);
		}
	}
	@keyframes msgWrongPwd
	{
		0%
		{
			color: rgb(31, 76, 57);
			background-color: rgba(255,255,255,0.5);
			border:0.1vw solid rgb(34, 90, 63);
			transform: rotateX(270deg);
		}
		100%
		{
			transform: rotateX(360deg);
			color: rgb(173, 0, 0);
			background-color: rgba(237, 81, 81, 0.3);
			border: 0.1vw solid rgb(128, 0, 0);
		}
	}
	@keyframes msgVerifying
	{
		0%
		{
			background-color: rgba(255,255,255,0.3);
			border:0.1vw solid rgba(34, 90, 63,0.3);
			color: rgba(31, 76, 57,0.5);
		}
		100%
		{
			background-color: rgba(255,255,255,0.5);
			border:0.1vw solid rgba(34, 90, 63,0.5);
			color: rgba(31, 76, 57,0.8);
		}
	}
	@keyframes default
	{
		0%
		{}
		100%
		{}
	}
	#region
	{
		text-align-last: center;
	}
</style>