'use strict';

function setup(){
  createCanvas(280,280,WEBGL);
  colorMode(HSB,360,100,100,100);
  background(0);
}

function draw(){
  // boxの描画
  fill(0,0);
  background(0);
  stroke(frameCount % 360, 100,100);
  // fill(frameCount % 360, 100,100);
  strokeWeight(2);
  // rotateX(frameCount * 0.01);
  // push();
  // pop();
  rotateY(frameCount * 0.01);
  rotateZ(frameCount * 0.01);
  box(100,100,100);

  
  // 球の描画
  // sphere(130);
  // sphereDatail(100);
  // translate(+100,100);

// var x=100;
// var y=100;

//   x = x + random(-4, 4);
//   y = y + random(-4, 4);
//   r = 100;
  // ellipse(x,y,r,r);
  // pushMatrix();
  // translate(0,0,-100);
  // popMatrix();

  

}
