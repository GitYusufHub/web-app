<div class="col-12">
<div class="comments-form" >											
<style type="text/css">

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  }   
.success{
    color: white;
    padding: 8px;
    height: auto;
    border-radius: 4px;
    background-color: #58b958c4;
    font-size: 16px;
 
}
.error{
    color: white;
    padding: 8px;
    height: auto;
    border-radius: 4px;
    background-color: #ea5e5ec4;
    font-size: 16px;

}
</style>
<h6>Bu yazıya puan vermek istermisiniz ?</h6>

<?php

if(!empty($star)){
$oysayisi=count($star);
echo $oysayisi." Oy Kullanıldı: Yazı Puanı ";
$puan=0;
foreach($star as $stars){
 $puan=$puan+$stars->star;    
}
$ortalama=$puan/$oysayisi;
echo round($ortalama, 1);
}else{
    echo "Bu yazıya henüz puan verilmemiş. Puan vermek istemezmisiniz ?";
}
?>
<form action="<?php echo base_url("home/puan"); ?>" method="post">
    <fieldset class="rating">
        <input type="radio" id="star5" name="rating" value="5" checked/>
        <label class = "full" for="star5" title="Harika 5 Yıldız" ></label>
        <input type="radio" id="star4half" name="rating" value="4,5" />
        <label class="half" for="star4half" title="4,5 Yıldız"></label>
        <input type="radio" id="star4" name="rating" value="4" />
        <label class = "full" for="star4" title="4 Yıldız"></label>
        <input type="radio" id="star3half" name="rating" value="3,5" />
        <label class="half" for="star3half" title="3,5 Yıldız"></label>
        <input type="radio" id="star3" name="rating" value="3" />
        <label class = "full" for="star3" title="3 Yıldız"></label>
        <input type="radio" id="star2half" name="rating" value="2,5" />
        <label class="half" for="star2half" title="2.5 Yıldız"></label>
        <input type="radio" id="star2" name="rating" value="2" />
        <label class = "full" for="star2" title="2 Yıldız"></label>
        <input type="radio" id="star1half" name="rating" value="1,5" />
        <label class="half" for="star1half" title="1.5 Yıldız"></label>
        <input type="radio" id="star1" name="rating" value="1" />
        <label class = "full" for="star1" title="1 Yıldız"></label>
        <input type="radio" id="starhalf" name="rating" value="0,5" />
        <label class="half" for="starhalf" title="0.5 yıldız"></label>
       
    </fieldset>
    <input type="hidden" name="news_id" value="<?php echo $news->id; ?>">
    <input type="hidden" name="" value="<?php echo $this->security->get_csrf_hash(); ?>">
   <input type="submit" class="btn btn-xs btn-info" style="color:white; background-color:black; right:20px;" value="Oyla"/>
    
</form>
</div>
</div>