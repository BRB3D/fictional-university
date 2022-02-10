<?php 
  $count = 0;
  $names = array("Brad", 'John', 'Jane');

  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
  }

?>

<p>Hi, my name is <?php echo $names[0] ?> </p>

