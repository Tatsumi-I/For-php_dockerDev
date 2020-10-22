'use strict';

function setup(){
  createCanvas(280,280,WEBGL);
  colorMode(HSB,360,100,100,100);
  background(0);
}

x = x + random(-4, 4);
y = y + random(-4, 4);
r = 100;

var x = 100;
var y = 100;

function draw(){

  
  //球の描画
  sphere(130);
  sphereDatail(100);
  translate(+100,100);


  ellipse(x,y,r,r);
  pushMatrix();
  translate(0,0,-100);
  popMatrix();

  

}
