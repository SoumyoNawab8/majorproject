<!-- <style type="text/css">
	div{display: none;}
</style> -->
<script type="text/javascript">
	scrllNav('login');
</script>
<?php

  // $this->load->view('pages/export_product/simple_html_dom');
  $link="https://www.amazon.in/s/ref=sr_nr_n_1?fst=as%3Aoff&rh=n%3A976419031%2Cn%3A%21976420031%2Cn%3A1389401031%2Cp_89%3ASamsung%2Cn%3A1389432031&bbn=1389401031&ie=UTF8&qid=1524766969&rnid=1389401031";

$html= file_get_contents($link);
// $term='<ul id="s-results-list-atf" class="s-result-list s-col-3 s-result-list-hgrid s-height-equalized s-grid-view s-text-condensed" data-columns="{&quot;0&quot;:1,&quot;522&quot;:3,&quot;348&quot;:2}">';
 $product_list=explode('<ul class="a-unordered-list a-vertical">',$html);
 $pl=implode(" ",$product_list);
 $pn_list=explode("<li",$pl);
 $pn=(string)$pn_list[9];
 $pn1=explode('<h2 data-attribute="',$pn);
// preg_match('/<h2>([^<]+)<\/h2>/i', $resp, $matches);
 $title = $html->find('title', 0);
$image = $html->find('img', 0);

 // for($i=8;$i<31;$i++){
 // 	 $pn=(string)$pn_list[$i];
	//  $pn1=explode('<h2 data-attribute="',$pn);
	//  $pn1_1=(string)$pn1[1];
	//  $product_name=explode('"',$pn1_1);
 //     $temp=substr($product_name[0],0,2);
 //     // if($temp=='Sa'){
     // 	$shw=$i-7;
     //  echo $shw." <b>Mobile Name:</b> ";print_r($product_name[0]); echo "<br>";
     // }
     // print_r($product_name);echo $j."<br>";
 //    for($j=0;$j<10;$j++){
 //    	print_r($pn1[1]);echo $j."<br>";
     
 // }
    // }
 echo $image->src;
 // echo $pl;
?>
