<?php 
$arrayUsers=$params['arrayUsers'];

// echo "<pre>";
// print_r($arrayUsers);
// echo "</pre>";
?>

<a href="?controller=users&action=insert">Agregar</a>
<table border=1>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>description</th>
		<th>photo</th>
		<th>code</th>		
		<th>city</th>
		<th>pet</th>
		<th>language</th>		
		<th>options</th>
	</tr>
	<?php 
	foreach($arrayUsers as $user):	
	?>
	<tr>
		<?php foreach($user as $key => $value):?>
		<td>
			<?=$value;?>
		</td>
		<?php endforeach; ?>
		<td>
		<a href="?action=update&id=<?=$user['idusers'];?>">Edit</a>
		<a href="?action=delete&id=<?=$user['idusers'];?>">Delete</a>	
		</td>
	</tr>
	<?php endforeach; ?>
</table>