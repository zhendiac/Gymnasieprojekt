<!DOCTYPE html>
<html>
<head>
	<title>Matteprojekt</title>
</head>
<body>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/base.js"></script>
<script type="text/javascript" src="/js/rotate3di.js"></script>

<style type="text/css">

body {
	background-image: url(img/bg.jpg);
	background-size: cover;
	font-family: "Ubuntu", sans-serif;
}

.box1{
		height: 35px;
		width: 130px;
		background-color: #42f4ce;
		color:black;
		text-align: center;
		font-weight: bold;
		border-radius: 4px;
		margin-top: 120px;
		margin-left: 600px;
		font-size: 25px;
		padding: 5px;
}
.box2{
		height: 35px;
		width: 130px;
		background-color: #42f4ce;
		color:black;
		text-align: center;
		font-weight: bold;
		border-radius: 4px;
		float: left;
		margin-left: 200px;
		font-size: 25px;
		padding:5px;
}
.box3{
		height: 35px;
		width: 130px;
		background-color: #42f4ce;
		color:black;
		text-align: center;
		font-weight: bold;
		border-radius: 4px;
		float: right;
		margin-right: 200px;
		font-size: 25px;
		padding:5px;
}

#box {
	width:250px;
	height:250px;
	border:3px solid #000;
	background-color: yellow;
	display: none;
	
}
#back {
	width:250px;
	height:250px;
	border:3px solid #000;
	background-color: red;
	display: none;
	
}

#nav-list-example {
    height: 132px;
    width: 624px;
    margin: 48px 0;
}

#nav-list-example li {
    width: 132px;
    height: 132px;
    float: left;
    margin-right: 24px;
    position: relative;
}

#nav-list-example li div {
    width: 132px;
    height: 132px;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
}

#nav-list-example li div.back {
    left: -999em;
    background: #999;
}



</style>

<div class="box1">Algebra</div>
<div class="box2">Trigonometri</div>
<div class="box3">Geometri</div>







<script type="text/javascript">
	 $(document).ready(function () {
    $('#nav-list-example li div.back').hide().css('left', 0);
    
    function mySideChange(front) {
        if (front) {
            $(this).parent().find('div.box').show();
            $(this).parent().find('div.back').hide();
            
        } else {
            $(this).parent().find('div.box').hide();
            $(this).parent().find('div.back').show();
        }
    }
    
    $('#nav-list-example li').hover(
        function () {
            $(this).find('div').stop().rotate3Di('flip', 250, {direction: 'clockwise', sideChange: mySideChange});
        },
        function () {
            $(this).find('div').stop().rotate3Di('unflip', 500, {sideChange: mySideChange});
        }
    );
});
</script>

</body>
</html>