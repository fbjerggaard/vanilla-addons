<h1><?php echo T('Age Gate Settings'); ?></h1>
<?php
echo $this->Form->Open();
echo $this->Form->Errors();
?>

<div class="Info">
    This plugin adds 'Date of Birth' to the registration forms. Users must be at least the age below to complete the
    registration process. Alternatively, you can allow underage users to register with a confirmation of consent.
</div>

<ul>
    <li>
        <?php echo $this->Form->Label('Minimum Age', 'MinimumAge');  ?>
        <?php echo $this->Form->TextBox('MinimumAge', array('Class' => 'SmallInput')); ?>
    </li>
    <li>
        <?php echo $this->Form->CheckBox('AddConfirmation', 'Allow underage users to register with a confirmation of consent.');  ?>
    </li>
</ul>


<?php echo $this->Form->Close('Save', '', array('class' => 'Button BigButton'));
