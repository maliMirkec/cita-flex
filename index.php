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
  <!--[if lte IE 9]>
    <p>
      You are using outdated browser.
    </p>
  <![endif]-->
  <div class="flex-container flex-container--3 flex-container--full-page flex-container--fill flex-container--wrap">
    <div class="flex-box flex-center">1</div>
    <div class="flex-box flex-container flex-container--2 flex-container--fill flex-container--wrap">
		  <div class="flex-box flex-center">1</div>
		  <div class="flex-box flex-center">2</div>
		  <div class="flex-box flex-center">3</div>
		  <div class="flex-box flex-container flex-container--2 flex-container--fill flex-container--wrap">
				<div class="flex-box flex-center">1</div>
				<div class="flex-box flex-center">2</div>
				<div class="flex-box flex-center">3</div>
				<div class="flex-box flex-center">4</div>
				<div class="flex-box flex-box-no-grow flex-center">5</div>
		  </div>
		  <div class="flex-box flex-center">5</div>
		  <div class="flex-box flex-center">6</div>
    </div>
    <div class="flex-box flex-center">3</div>
    <div class="flex-box flex-center">4</div>
    <div class="flex-box flex-center">5</div>
    <div class="flex-box flex-center">6</div>
    <div class="flex-box flex-center">7</div>
    <div class="flex-box flex-center">8</div>
    <div class="flex-box flex-center">9</div>
    <div class="flex-box flex-center">10</div>
    <div class="flex-box flex-container flex-container--2 flex-container--fill flex-container--wrap">
			<div class="flex-box flex-center">1</div>
			<div class="flex-box flex-center">2</div>
			<div class="flex-box flex-center">3</div>
			<div class="flex-box flex-center">4</div>
			<div class="flex-box flex-center">5</div>
			<div class="flex-box flex-center">6</div>
    </div>
    <div class="flex-box flex-center">12</div>
  </div>
</body>
</html>
