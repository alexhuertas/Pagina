<!doctype html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Index</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link href="css/toaster.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </div>
    <toaster-container toaster-options="{'time-out': 4000}"></toaster-container>
    <!-- JavaScripts -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/toaster.js"></script>
    <script src="files/angularjs/myapp.js"></script>
    <script src="files/angularjs/input.js"></script>
    <script src="files/angularjs/mydirectives.js"></script>
    <script src="files/angularjs/controls.js"></script>
</body>
</html>