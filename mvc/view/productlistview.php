<?php foreach ($productlist as $key => $value) { ?>
  <a href="index.php?id=<?php echo $key;?>"><?php echo $value['name']; ?></a><br>
<?php } ?>
