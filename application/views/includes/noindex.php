<?php
    
    $page_url=$_SERVER['REQUEST_URI'];
    if(
        $page_url=="/sepet/" ||
        $page_url=="/odeme/" ||
        $page_url=="/urunler/" ||
        $page_url=="/siparisi-tamamla/"
    )
    {  
    echo '<meta name="robots" content="noindex" />';
    }
    elseif(
    $page_url=="/iletisim/" 
    )
    {
         echo '<meta name="robots" content="nofollow" />';
         
    }
    else{ 
       echo'<meta name="robots" content="all">';
        // echo'<meta name="robots" content="noindex">';
    }
    ?>