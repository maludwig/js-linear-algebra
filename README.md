Linear Algebra - A set of mathematical operations integrated with jQuery
==================================================

Point
--------------------------------------

```js
var pt = new Point(0,0); //Create a new Point at the origin (x=0, y=0)
var pt2 = new Point($("#elem").offset()); //Create a new Point from an offset calculation
```

Vector
--------------------------------------

```js
var v = new Vector(pt, pt2); //Create a new Vector with a magnitude and angle defined by the Vector pointing from pt to pt2
```

Line
--------------------------------------

```js
var ln = new Line(pt,1,1); //Create a new Line, intersecting pt, directed diagonally
```

Box
--------------------------------------

```js
//Get the Box of the selected element:
var box = $("#elem").box(); 
```


