<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
$this->form->reset( true ); // to reset the form xml loaded by the view
$this->form->loadFile( dirname(__FILE__) . DS . "registration.xml"); // to load in our own version of login.xml


?>
<div class="registration<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		
			<h1 class="page-title"><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		
	<?php endif; ?>

	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
		<?php // Iterate through the form fieldsets and display each one. ?>
		<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			<?php $fields = $this->form->getFieldset($fieldset->name);?>
			<?php if (count($fields)):?>
				<fieldset>
				<?php // If the fieldset has a label set, display it as the legend. ?>
				
				<?php // Iterate through the fields in the set and display them. ?>
                <?php $i=0; ?>
				<?php foreach ($fields as $field) : ?>
					<?php // If the field is hidden, just display the input. ?>
					<?php if ($field->hidden): ?>
						<?php echo $field->input;?>
					<?php else:?>
                    <?php  if($i%2 == 0){?>
						<div class="row">
					  <?php	} ?>
                   
						<div class="control-group col-md-6">
							<div class="control-label">
							<?php echo $field->label; ?>
							<?php if (!$field->required && $field->type != 'Spacer') : ?>
								<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
							<?php endif; ?>
							</div>
							<div class="controls">
								<?php echo $field->input;?>
							</div>
						</div>
                        
                        
					<?php endif;?>
                    
                     <?php  if($i%2 == 0){} else {?>
						</div>
					  <?php	} ?>
                    <?php $i++; ?>
				<?php endforeach;?>
				</fieldset>
			<?php endif;?>
		<?php endforeach;?>
		<div class="control-group">
			<div class="controls pull-right">
				<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
				<a class="btn cancel" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div>
		<?php echo JHtml::_('form.token');?>
	</form>
</div>
