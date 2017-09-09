<?php require_once APP_ROOT.'views/layouts/head.view.php'; ?>
<?php require_once APP_ROOT.'views/layouts/header.view.php'; ?>
<h1>yourstore.com</h1>	
   <table> 
   	<?php while ($row = mysqli_fetch_array($pants)):?>
   		<tr>
   			<!--<div class="tableborder">-->
   		    <td><?= $row['name'];?> </td>	
   		    <td>
   		    	<a href="<?= PUBLIC_PATH?>/pantalon/<?= $row['id'] ?>">
   		    		<img src="<?= PUBLIC_PATH?>/img/<?= $row['image']?>">
   		    	</a>
   		    </td>	
   		    <!--</div>-->
   		</tr>
   	<?php endwhile; ?>
   </table>
   <hr><hr>
   <table> 
      <?php while ($row = mysqli_fetch_array($shirts)):?>
         <tr>
            <!--<div class="tableborder">-->
             <td><?= $row['name'];?> </td>   
             <td>
               <a href="<?= PUBLIC_PATH?>/camisa/<?= $row['id'] ?>">
                  <img src="<?= PUBLIC_PATH?>/img/<?= $row['image']?>">
               </a>
             </td>   
             <!--</div>-->
         </tr>
      <?php endwhile; ?>
   </table>
  </body>
</html>
