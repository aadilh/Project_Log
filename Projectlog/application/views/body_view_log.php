<?php

    $date=0 ;
    $month = "";
    $m ;
    
    
    foreach($rows as $r){
        $date = $r->dated ;
        }

    if($date>10){
        
        $m = $date -  ($date%100);
        
    if($m == 100)
        {
            $month = 'MAY';

        }
    else if($m == 200)
        $month = 'JUNE';
    else ;

    $date = $date%100 ;
    

    echo '<div class="ui blue inverted center aligned segment">'.$date.' '.$month.' '.'2014</div>' ;

    $i=0;
    $color ; $name ;
    echo '<div class="ui segment"> ' ;
    
    foreach($rows as $r){
        
        if($i != $r->user)
        {
            $i=  $r->user ;
            if($i==1) { $color = "blue"; $name = "Aadil Hayat"   ; }
            else if($i==2){ $color = "red"; $name = "Kriti Joshi"   ; }
            else if($i==3){ $color = "green"; $name = "Siddharth Gupta"   ; }
            else if($i==4){ $color = "teal"; $name = "Vandana Gautam"   ; }
            else ;
            
            echo '<div class="ui '.$color.' ribbon label">'.$name.'</div>' ;
        }
        
        
        echo '<p>'.$r->logDetail.'</p>'  ;
    
    }

    echo '</div>' ;
    }

?>

    
        
      
    
    