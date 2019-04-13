<?php
echo '
<div class="form-group m-form__group row">
<label class="form-control-label">'. htmlspecialchars($labelValue) . '</label>
<input class="form-control disabled m-input" type="text" name="'. htmlspecialchars($inputName) . '" maxlength="500" value="<?php echo $tabU['$value']; ?>">
</div>
';
?>
