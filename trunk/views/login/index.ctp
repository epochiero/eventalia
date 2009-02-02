	<select name="country">
	<?php foreach ($paises as $pais): ?> 
	  <option><?php echo $pais['Pais']['printable_name']; ?></option>
	<?php endforeach; ?>
    </select>
