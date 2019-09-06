<html>
<head>
<title>Статьи</title>
 <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="heder">
            <h1>
                Статьи Кадькало Константина
            </h1>
        </div>
        
        <div class="content">
              <?php foreach ($stat as $stati)  :?>
        <div class="statii">
                <div class="img">
                   
                   
                    <img style = "width: 200px" src="img/<?php echo $stati['img_src'] ?>" />
                   
                </div>
                <div class="titleZagolovok">
                    <h3>
                        <?php echo $stati['title'] ?>
                    </h3>
                </div>
                <div class="textZagolovok">
                    <p><?php echo $stati['discription'] ?></p>
                </div>
            
            </div> 
              <?php endforeach;  ?>
        </div>
        
        
          
    </div>
</body>
</html>
