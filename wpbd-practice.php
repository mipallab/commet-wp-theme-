<?php
	/*
		template name: wpdb tem
	*/



		



?>

<form action="" method="POST">
	<input type="text" name="name" placeholder="Your name">
	<input type="number" name="roll" placeholder="roll">
	<input type="submit" value="submit" name="submit">
</form>



<br><br>
<hr>

<p></p>
 
<?php 

	global $wpdb;


	$tablename = $wpdb->prefix.'pallab';
	$infos = $wpdb-> get_results("SELECT * FROM $tablename");


	foreach($infos as $info) {
		$id = $info->id;
		$editlink = '?edit='.$id;
		$deletelink = '?delete='.$id;

		echo $info->name . ' ' . '<a href="'. $editlink . '"> edit </a>' . ' ' . '<a href="'. $deletelink . '"> delete </a>'."</br>";
	}

?>



<br><br>
<hr>


<?php if( isset($_GET['edit']) ):


$id = $_GET['edit'];

$updatevalue = $wpdb->get_var("SELECT name FROM $tablename WHERE id = $id");
	?>

	<form action="" method="POST">
		<input type="text" name="name" placeholder="Your name" value="<?php echo $updatevalue;?>">
		<input type="submit" value="submit" name="updatesubmit">
	</form>

<?php endif;?>


<?php
	$deleteid = isset($_GET['delete']) ? $_GET['delete'] : '';

	if(!empty($deleteid)){
		$wpdb -> delete($tablename,
			array(
				'id'	=> $deleteid
			)
		);

		global $post;
		$id = $post->ID;
		wp_redirect(get_page_link($id));
		exit;
	}
?>


