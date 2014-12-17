<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Linear Algebra</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="color.1.2.js"></script>
    <script src="linearalgebra-1.3.js"></script>
    <script src="jquery-linearalgebra-1.0.js"></script>
	<script type="text/javascript">
		var ctx, cStroke = new Color("#AAF");
        var ln = new Line(Point.ORIGIN,1,1);
        var ln2 = new Line(new Point(450,450),1,-1);
        var ln3 = new Line(new Point(450,450),1,0);
        var ln4 = new Line(new Point(450,450),0,1);
		function log(msg) {
			//$("#footer").append('<p>' + msg + '</p>');
		}
		$(window).load(function(){
			var wb = $('#whiteboard')[0];
			if (wb.getContext){
				ctx = wb.getContext('2d');
				$("#whiteboard").attr({
					width: 900,
					height: 900
				});
				laststyle = ctx.strokeStyle;
				ctx.strokeStyle = "#AAF";
				for(var i=0;i<900;i+=90) {
					ctx.beginPath();
					ctx.moveTo(i,0);
					ctx.lineTo(i,900);
					ctx.stroke();
					ctx.beginPath();
					ctx.moveTo(0,i);
					ctx.lineTo(900,i);
					ctx.stroke();
				}
				ctx.beginPath();
				ctx.moveTo(0,0);
				ctx.lineTo(900,900);
				ctx.stroke();
                
				ctx.beginPath();
				ctx.moveTo(0,900);
				ctx.lineTo(900,0);
				ctx.stroke();

                ctx.lineWidth = 5;
			}
			$("#overlay").mousemove(function(e){
				var ptPage = new Point(e.pageX,e.pageY);
                if(ptPage.inside($("#whiteboard").box())) {
                    var ptOffset = new Point($("#whiteboard").offset());
                    var vecOffset = new Vector(ptOffset);
                    var pt = ptPage.subtract(vecOffset);
                    cStroke = cStroke.spin(1);
                    ctx.strokeStyle = cStroke.toString();
                    drawDot(pt);
                    var pt2 = ln.reflect(pt);
                    drawDot(pt2);
                    drawDot(ln2.reflect(pt));
                    drawDot(ln2.reflect(pt2));
                    drawDot(ln3.reflect(pt));
                    drawDot(ln4.reflect(pt));
                    drawDot(ln3.reflect(pt2));
                    drawDot(ln4.reflect(pt2));
                    $("body").css("background",cStroke.fadeout(0.8));
                } else {
                    $("body").css("background","white");
                }
			});
		});
		
		function drawDot(x,y) {
            var pt = new Point(x,y); //Now we can also call drawDot(point) in addition to drawDot(x,y)
			ctx.beginPath();
			ctx.arc(pt.x,pt.y,10,0,2*Math.PI);
			ctx.stroke();
			ctx.fill();
		}
		
	</script>
</head>

<body>
    This experiment plays with the Color extension and the Linear Algebra extensions
	<canvas id="whiteboard"></canvas>
	<div id="overlay"></div>
</body>
</html>

