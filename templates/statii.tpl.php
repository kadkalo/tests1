 

  <?php foreach ($stat as $stati)  :?>
            
         <div class="statii">
                <div class="img">
                    <a href="/Tests1/statii.php?id=<?php echo $stati['id'] ?>">
                    <img style = "width: 200px" src="img/<?php echo $stati['img_src'] ?>" />
                    </a>
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