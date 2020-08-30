
function setup(){
  size(600,400);
  background(5);
  colorMode(HSB,360,100,100,100);
}

function draw(){
  background(frameCount % 360, 50,50,99);
  fill(255, 10);
noStroke();
rect(0, 0, 600, 400);
  strokeWeight(2);
  fill(random(360),random(100),100,0);
  noFill();
stroke(0, 0, 255);

var x=300;
var y=300;

  x = x + random(-4, 4);
  y = y + random(-4, 4);
  ellipse(x,y,100,100);
}
