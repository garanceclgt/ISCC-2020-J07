<?php
$produits = array( 
array("Produit"=>"T-shirt rouge", "Prix"=>15.50),
 array("produit"=>"T-shirt vert", "prix"=>15.50),
 array("produit"=>"t-shirt argent", "prix"=>16.50),
 array('produit' =>'Short bleu','prix' => 19.99),
 array('produit' =>'Short vert','prix' => 19.99),
 array('produit' =>'Veste argent','prix' => 35),
 ); 
?>
<?php
 if (count($produits) > 0): 
 ?>
<table>
 <thead>
 <tr>
 <th>
 <?php 
 echo implode('</th><th>', array_keys(current($produits))); 
 ?>
 </th>
 </tr>
 </thead>
 <tbody>
<?php 
foreach ($produits as $prod): array_map('htmlentities', $prod);
 ?>
 <tr>
 <td>
 <?php
 echo implode('</td> <td>', $prod); 
  ?>
  </td>
 </tr>
<?php 
endforeach; 
?>
 </tbody>
</table>
<?php 
endif; 
?>