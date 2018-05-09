<?php
     require('./src/myHead.inc');
?>
<body>
    
    <?php
    //inclure le fichier
        require('./src/var.inc');
   
    ?>

    <h1><?php print myTitle.' '.phpVersion() ?></h1>
    <p>
        <?php
            echo $accroche.' '.$navigateur.' '.'cela contient '
            .strlen($accroche)." caractères.<br>Dernière connection le ".$date."<br>
            Le créateur de Php est : ";
           foreach(user as $key=>$index){
                print $index.' ';
           }
            
        ?>
    </p>
    <h2><?php  print subTitle ?></h2>
    <!--<pre>-->
    <ul>
        <?php
            //print_r($_SERVER);
            //print count($myLang).' '.$myLang[1];
            //print_r($myLang);
            foreach($myLang as $key=>$index){
                print "<li>".($key+1).' '.$index."</li>";
            }
        
        ?>
    </ul>
   <!-- </pre>-->
  <?php
    include_once('./src/footer.php');
  ?>
</body>
</html>