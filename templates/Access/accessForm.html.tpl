
<div class="form-group has-feedback">
  <label for="name">Imie</label>
  <input class="form-control" id="name" name="name" value="{if isset($data['name'])}{$data['name']}{/if}"
    type="text"
    data-minlength="2"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="surname">Nazwisko</label>
  <input class="form-control" id="surname" name="surname" value="{if isset($data['surname'])}{$data['surname']}{/if}"
    type="text"
    data-minlength="2"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="password">Hasło</label>
  <input class="form-control" id="password" name="password" value="{if isset($data['password'])}{$data['password']}{/if}"
  type="text"
  data-minlength="2"
  maxlength="32"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 32 znaki"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
