<div class="form-group has-feedback">
  <label for="NazwaJezyka">NazwaJezyka</label>
  <input class="form-control" id="NazwaJezyka" name="NazwaJezyka" value="{if isset($data['NazwaJezyka'])}{$data['NazwaJezyka']}{/if}"
    type="text"
    data-minlength="2"
    maxlength="10"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 10 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
