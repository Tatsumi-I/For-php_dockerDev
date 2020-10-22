// let num = 3000;

function setup() {
  createCanvas(300, 300 ,WEBGL);
  // translate(0, 0, 0);
  // noStroke();
  // fill(0);
  frameRate(15);
  colorMode(HSB, 360, 100, 100);
  background(50);
  // noLoop();

}


function draw() {
 
  background(0);
  rotateY(frameCount * 0.02);
  rotateX(frameCount * 0.009);
  rotateZ(frameCount * 0.04);
  
 
  radius = 100;
  step = 6;


  for (lon = 0; lon <= 360; lon += step) {
    for (lat = 0; lat <= 180; lat += step) {
      radLat = radians(lat) * random(-20,-1);
      radLon = radians(lon) * random(-20,-1);
      
      x = radius * cos(radLon) * sin(radLat);
      y = radius * sin(radLon) * sin(radLat);
      z = radius * cos(radLat);

        stroke(random(190,250));
        strokeWeight(random(0,2));
        point(x, y, z);
        // fill(200, 90, 100);
        // stroke(0);
        // box(x, y, z);
    }
  }
}
