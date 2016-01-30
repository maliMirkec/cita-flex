<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/dist/normalize.min.css?<?php echo uniqid(); ?>">
  <link rel="stylesheet" href="/css/dist/cita-flex.min.css?<?php echo uniqid(); ?>">
  <title>CiTA FLeX</title>
  <style media="screen">
    .flex-box {
      background: linear-gradient(to bottom left, #ffffff 25%, DodgerBlue 100%);
    }
  </style>
</head>
<body>
  <div class="flex-container flex-container-3 flex-full-page flex-fill flex-wrap">
    <div class="flex-box flex-box-center">1</div>
    <div class="flex-box flex-container flex-container-2 flex-fill flex-wrap">
		  <div class="flex-box flex-box-center">1</div>
		  <div class="flex-box flex-box-center">2</div>
		  <div class="flex-box flex-box-center">3</div>
		  <div class="flex-box flex-container flex-container-2 flex-fill flex-wrap">
				<div class="flex-box flex-box-center">1</div>
				<div class="flex-box flex-box-center">2</div>
				<div class="flex-box flex-box-center">3</div>
				<div class="flex-box flex-box-center">4</div>
				<div class="flex-box flex-box-no-grow flex-box-center">5</div>
		  </div>
		  <div class="flex-box flex-box-center">5</div>
		  <div class="flex-box flex-box-center">6</div>
    </div>
    <div class="flex-box flex-box-center">3</div>
    <div class="flex-box flex-box-center">4</div>
    <div class="flex-box flex-box-center">5</div>
    <div class="flex-box flex-box-center">6</div>
    <div class="flex-box flex-box-center">7</div>
    <div class="flex-box flex-box-center">8</div>
    <div class="flex-box flex-box-center">9</div>
    <div class="flex-box flex-box-center">10</div>
    <div class="flex-box flex-container flex-container-2 flex-fill flex-wrap">
			<div class="flex-box flex-box-center">1</div>
			<div class="flex-box flex-box-center">2</div>
			<div class="flex-box flex-box-center">3</div>
			<div class="flex-box flex-box-center">4</div>
			<div class="flex-box flex-box-center">5</div>
			<div class="flex-box flex-box-center">6</div>
    </div>
    <div class="flex-box flex-box-center">12</div>
  </div>
</body>
</html>
