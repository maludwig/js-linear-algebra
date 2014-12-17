Linear Algebra - A set of mathematical operations for performing linear algebra
==================================================

Demo
--------------------------------------

Play with the demo on [my website](http://edgemontgeek.com/linearalgebra/).

Point
--------------------------------------

```js
var pt = new Point(0,0); //Create a new Point at the origin (x=0, y=0)
var pt2 = new Point($("#elem").offset()); //Create a new Point from an offset calculation
var pt3 = pt.midpoint(pt2); //Calculate the midpoint between pt and pt2
var vec = new Vector(40, 30); //Create a new Vector
var pt4 = pt.add(vec); //Add the Vector to the Point, returns a new Point offset by the Vector
var pt5 = pt.add(vec); //Subtract the Vector from the Point, returns a new Point offset by the Vector
var box = new Box(pt, pt2); //Create a new Box, the smallest Box that could contain pt and pt2.
if (pt3.inside(box)) { } //Check if pt3 is inside box

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


