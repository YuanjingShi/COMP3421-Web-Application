<?php

echo "<table><tr><th>Name</th><th>Dept</th></tr>";
switch($_REQUEST['str']) {
    case 'one':
      echo "<tr><td>John</td><td>COMP</td></tr>";
      break;
    case 'two':
      echo "<tr><td>Peter</td><td>COMP</td></tr>";
      break;
    default:
      echo "<tr><td>Mary</td><td>SD</td></tr>";
      break;
  }
echo "</table>";


?>