<!DOCTYPE html>
<html>
<head>
	<title>Matteprojekt</title>

<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/base.js"></script>
<script type="text/javascript" src="/js/rotate3di.js"></script>

</head>

<body>

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