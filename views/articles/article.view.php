<?php require_once APP_ROOT.'views/layouts/head.view.php'; ?>
<?php require_once APP_ROOT.'views/layouts/header.view.php'; ?>
<h1>yourstore.com</h1>	
   <table>  
   		<tr>
   			<th align="left">título:</th>
   		    <td><?= $article['name'];?> </td>
   		</tr>
   		<tr>
   			<th align="left">imagen:</th>
   		    <td>   		    	
   		    		<img src="<?= PUBLIC_PATH?>/img/<?= $article['image']?>">
   		    </td>
   		</tr>
   		<tr> 
   			<th align="left">Descripción:</th>   
   		    <td><?= $article['description'] ?></td>	
   		</tr>
		<tr>
			<th align="left">Precio:</th>
   		    <td>$ <?= $article['price'] ?></td>	
   		</tr>
   </table>
   </body>
</html>

