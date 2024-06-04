<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Carousel -->
<div id="demo1" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo1" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo1" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo1" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bootstrap\img\src1.jpg" alt="Los Angeles" class="d-block" style="width:100%;height:500px">
    </div>
    <div class="carousel-item">
      <img src="bootstrap\img\src2.jpg" alt="Chicago" class="d-block" style="width:100%;height:500px">
    </div>
    <div class="carousel-item">
      <img src="bootstrap\img\src3.jpg" alt="New York" class="d-block" style="width:100%;height:500px">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</body>
</html>