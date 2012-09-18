<?php
$this->extend('/Common/AdminAdd');
$this->assign('LeftProduct','LeftMenuActions');
$this->assign('LeftCustomer','');
$this->assign('LeftNews','');
$this->assign('LeftEvent','');
$this->start('manageRightMenu');
?>
<div class="manageRightMenu" >
     <ul>
        <li><?php echo $this->Html->link(__('Tour'), array('controller' => 'tours', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Product'), array('controller' => 'products', 'action' => 'index')); ?></li>
        <li class='active '><?php echo $this->Html->link(__('Cooking Class'), array('action' => 'index')); ?> </li>
    </ul>
</div>
<div class="mangeRightSubMenu"> 
    <div class="unselected"><?php echo $this->Html->link(__('Cooking Classes List'), array('action' => 'index')); ?></div>
    <div class="selected"><?php echo $this->Html->link(__('Add Cooking Classes'), array('action' => 'add')); ?></div>
</div>
<?php
$this->end();

$this->start('manageRightContent');
?>
<div class="Cooking Classes form">
    <?php echo $this->Form->create('Cookingclass'); ?>
    <fieldset>
		<?php
		echo $this->Form->input('cooking_class_name');
		echo $this->Form->input('cooking_class_description', array('id' => 'cooking_class_description', 'class' => 'ckeditor'));
		echo $this->Form->input('cooking_class_price');
		echo $this->Form->input('cooking_class_location');
		echo $this->Form->input('cooking_class_thumbnail', array('id' => 'xFilePath', 'class' => 'ckeditor', 'style' => 'width:500px'));
        echo $this->Form->button('Browse Server', array('onclick' => 'BrowseServer()', 'type' => 'button', 'style' => 'padding:5px;margin-top:-55px; margin-left:530px;float:left'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<script type="text/javascript">
    var ck_newsContent = CKEDITOR.replace( 'cooking_class_description',{
        filebrowserBrowseUrl : '/js/ckfinder/ckfinder.html',
        filebrowserWindowWidth : '600',
        filebrowserWindowHeight : '300'
    } ); 
   CKFinder.SetupCKEditor( ck_newsContent, 'ckfinder/') ;
   function BrowseServer()
    {
        var finder = new CKFinder();
        finder.basePath = '../';	
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }
    function SetFileField( fileUrl )
    {
        document.getElementById( 'xFilePath' ).value = fileUrl;
    }
</script>
<?php $this->end(); ?>