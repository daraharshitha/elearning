<?php
//downloading files from system
//downloading is not in our syllabus but uploading is there....
$files=scandir("uploads");
for($i=2;$i<count($files);$i++)
{
	?>
	<p><?php echo $files[$i]; ?>
	<a href="uploads/<?php echo $files[$i]; ?>" download="<?php echo $files[$i]; ?>">Download</a></p>
	<a href="delete.php?name=uploads/<?php echo $files[$i]; ?>" style="color:red;">Delete</a>
	<?php
}
?>