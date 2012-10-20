<h1 class="tourHeader">Frequently Asked Questions</h1>
<h2 class="tourParticipantGuide">Question and Answer</h2>
<p><?php foreach ($faqs as $faq): ?>
            <tr>
				<td><?php echo $faq['Faq']['question']; ?> -
				"<?php echo $faq['Faq']['answer']; ?>"<p /></td>
			</tr>
<?php endforeach; ?></p>


    <?php echo $this->Form->create('Faq'); ?>
    <fieldset>
		<?php
		echo $this->Form->input('question', array('id' => 'question', 'class' => 'ckeditor'));
        ?>
		<?php echo $this->Form->end(__('Submit')); ?>
    </fieldset>
</div>

<script type="text/javascript">
    var ck_newsContent = CKEDITOR.replace( 'question',{
        filebrowserBrowseUrl : '/js/ckfinder/ckfinder.html',
        filebrowserWindowWidth : '600',
        filebrowserWindowHeight : '300'
    } ); 
   CKFinder.SetupCKEditor( ck_newsContent, 'ckfinder/') ;

</script>
<?php $this->end(); ?>