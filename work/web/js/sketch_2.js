let radius = 150;

let step = 20;

function setup() {
  createCanvas(300, 300 ,WEBGL);
  // translate(0, 0, 0);
  // noStroke();
  frameRate(30);
  colorMode(HSB, 360, 100, 100, 100);
  // noLoop();


}


function draw() { 
 
  background(0);
  rotateY(frameCount * 0.01);
  rotateX(frameCount * 0.02);
  // rotateZ(frameCount * 0.002);


push();
translate(20, 20, 10);
  for (lon = 0; lon <= 360; lon += step) {
    for (lat = 0; lat <= 180; lat += step) {
      radLat = radians(lat) * 1;
      radLon = radians(lon) * 1;

        x = radius * cos(radLon) * sin(radLat);
        y = radius * sin(radLon) * sin(radLat);
        z = radius * cos(radLat);
        
        // strokeWeight(random(10));
        stroke(random(210,270),100,100);
        // stroke(300,100,100);
        fill(0);
        rotateY(frameCount / 5000);
        rotateZ(frameCount / 5000);
        box(x, y, z);
        // point(x, y, z);
    }
  }
pop();
}
