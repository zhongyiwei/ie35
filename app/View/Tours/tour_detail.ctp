<?php
//print_r($tour);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1 class="tourHeader"><?php echo $tour['Tour']['tour_name']?></h1>
<table width="200px" border="1" style="width:250px; ">
  <tr>
    <td style="vertical-align:middle;">Price Per Person</td>
    <td><div class="tourPrice"><?php echo $tour['Tour']['tour_price_per_certificate']; ?></div></td>
  </tr>
</table>
<div class="tourBook"><?php
                echo $this->Html->image("Book.png", array("alt" => "Book", 'name' => "Book", 'height' => "200", 'url' => array('controller' => '#', 'action' => '')));
                ?></div>
<?php echo $tour['Tour']['tour_description']; ?>
<h2 class="tourParticipantGuide">Participant Guidelines</h2>
<p><?php echo $tour['Tour']['tour_paricipant_guidlines'];?></p>
<h2 class="tourParticipantGuide">Location</h2>
<p><?php echo $tour['Tour']['tour_location'];?></p>
<h2 class="tourParticipantGuide">Duration</h2>
<p><?php echo $tour['Tour']['tour_duration'];?></p>
<h2 class="tourParticipantGuide">Weather Requirements</h2>
<p><?php echo $tour['Tour']['tour_weather'];?></p>
<h2 class="tourParticipantGuide">People Limit</h2>
<p><?php echo $tour['Tour']['tour_max_num_on_day'];?></p>
