<?php  switch($_REQUEST['str']) {
    case 'one':
      echo "chocolate.jpg";
      break;
    case 'two':
      echo "strawberry.jpg";
      break;
    default:
      echo "peach.jpg";
      break;
  }
?>
