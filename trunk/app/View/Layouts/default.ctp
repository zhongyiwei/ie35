<?php
//print_r($tourData)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <?php
            echo $this->Html->css('reset');
            echo $this->Html->css('cake.generic.css');
            echo $this->Html->css('index');
            echo $this->Html->css('craftyslide');

            echo $this->Html->script('jquery-1.6.3.min.js');
            echo $this->Html->script('craftyslide.js');
            echo $this->Html->script('jquery.roundabout.js');
            ?>
            <title><?php echo $this->fetch('title'); ?></title>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <?php
                echo $this->Html->image("LOGO.jpg", array("alt" => "Foodie Trails Logo", 'name' => "Foodie Trails Logo", 'height' => "90", 'style' => "background: #FFF; display:block; float:left", 'url' => array('controller' => 'Home', 'action' => 'display')));
                ?>
                <div class="headerRight">
                    <p class="headerRightText">Contact Us: 0452660748<br/>
                        Taste the blend of flavours, Experience the culture, Explore the regions</p>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="active"><?php echo $this->Html->link(__('Home'), array('controller' => 'Home', 'action' => 'display')); ?></li>
                    <li class='has-sub'><a>Tours</a>
                        <ul>
                            <?php for ($i = 0; $i < count($menu); $i++) { ?>
                                <li> <?php $tourName = $menu[$i]['Tour']['tour_name'];
                            echo $this->Html->link(__($tourName), array('controller' => 'Tours', 'action' => 'tourDetail', $menu[$i]['Tour']['id']));
                                ?></li>
<?php } ?>
                        </ul>
                    </li>
                    <li class='has-sub'><a>Events</a>
                        <ul>
                            <li><a href='#'><span>Coming Soon...</span></a></li>
                        </ul>
                    </li>
                    <li><a>Product</a></li>
                    <li><a>Media</a></li>
                    <li><a>Cooking Classes</a></li>
                    <li class='has-sub'><a>About Us</a>
                        <ul>
<!--                            <li><a href='#'><span>FAQ</span></a></li>
                            <li><a href='#'><span>Feedbacks</span></a></li>-->
                            <li><?php echo $this->Html->link(__('Contact Us'), array('controller' => 'About', 'action' => 'contactUs')); ?></li>
                            <li><a href="http://foodietrails.com.au/blogweb/index.php">Blogs</a></li>
                            <li><?php echo $this->Html->link(__('About Foodie Trails Inc.'), array('controller' => 'About', 'action' => 'aboutCompany')); ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="content">
<?php echo $this->fetch('content'); ?>
            </div>
            <div class="footer">
                <table width="920" border="0">
                    <tr>
                        <td style="vertical-align:middle" ><span class="footerRow"><?php echo $this->Html->link(__('About Foodie Trails Inc.'), array('controller' => 'About', 'action' => 'aboutCompany')); ?></span>
                            <span>Tours</span>
                            <span>Media</span>
                            <span>Deals</span>
                            <span>Events</span></td>
                        <td style="vertical-align:middle" align="right">
                            <a href="http://beaconholidays.com.au/"><?php
echo $this->Html->image("BH.png", array("alt" => "Beacon Holiday", 'name' => "Beacon Holiday Logo", 'width' => "60"));
?></a>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>