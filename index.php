<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>
<body>
    <header>
        <a href="#" onclick="toggleSection('scroll')">Carousel</a>
        <a href="#" onclick="toggleSection('opacity')">Slider</a>
    </header>
    <section id="scroll">
        <h1>Carousel | Scroll</h1>
        <div id="items-wrapper">
            <div id="items">
                <?php 
                $path = "assets/images/";
                $directory = dir($path);
                while($file = $directory->read()){
                    if($file != "." && $file != ".."){
                ?>
                <div class="item"><img src="<?php echo $path.$file; ?>"/></div>
                <?php } } ?>
            </div>
        </div>
    </section>
    <section id="opacity" style="display:none">
        <h1>Slider | Opacity</h1>
        <div id="slider">
            <?php 
            $path = "assets/images/";
            $directory = dir($path);
            $firstImage = true;
            while($file = $directory->read()){
                if($file != "." && $file != ".."){
            ?>
            <img src="<?php echo $path.$file; ?>" class="<?php if($firstImage){ 
                echo "selected"; 
                $firstImage = false; 
            } ?>"/>
            <?php } } ?>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>