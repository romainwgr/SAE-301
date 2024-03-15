<?php require "view_begin.php"; ?>

<div class="need">

<h1>Besoins</h1>
<div class="content">
<table>
  <tr>
    <th>Discipline</th>
    <th>Besoin en heure</th>
  </tr>
  <?php
  foreach ($data as $value) { ?>
  <tr class="alternate-row">
    
    <td><?php echo $value['libelledisc']; ?></td>
    <td><?php echo $value['besoin_heure']; ?></td>

  </tr>
  <?php
  }
  ?>
</table>
</div>


</div>



<?php require "view_end.php"; ?>