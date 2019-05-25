<div class="form-group has-feedback">
  <label for="Nazwisko">Nazwisko</label>
  <input class="form-control" id="Nazwisko" name="Nazwisko" value="{if isset($data['Nazwisko'])}{$data['Nazwisko']}{/if}"
    type="text"
    data-minlength="2"
    maxlength="100"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Imie">Imie</label>
  <input class="form-control" id="Imie" name="Imie" value="{if isset($data['Imie'])}{$data['Imie']}{/if}"
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
  <label for="Data_ur">Data_ur</label>
  <input class="form-control" id="Data_ur" name="Data_ur" value="{if isset($data['Telefon'])}{$data['Telefon']}{/if}"
  type="date"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="PESEL">PESEL</label>
  <input class="form-control" id="PESEL" name="PESEL" value="{if isset($data['PESEL'])}{$data['PESEL']}{/if}"
    type="text"
    data-minlength="11"
    maxlength="11"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 11 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Kod_pocztowy">Kod_pocztowy</label>
  <input class="form-control" id="Kod_pocztowy" name="Kod_pocztowy" value="{if isset($data['Kod_pocztowy'])}{$data['Kod_pocztowy']}{/if}"
    type="text"
    data-minlength="6"
    maxlength="6"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 6 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Miasto">Miasto</label>
  <input class="form-control" id="Miasto" name="Miasto" value="{if isset($data['Miasto'])}{$data['Miasto']}{/if}"
  type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 1 znak"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Ulica">Ulica</label>
  <input class="form-control" id="Ulica" name="Ulica" value="{if isset($data['Ulica'])}{$data['Ulica']}{/if}"
  type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 1 znak"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Numerlokalu">Numerlokalu</label>
  <input class="form-control" id="Numerlokalu" name="Numerlokalu" value="{if isset($data['Numerlokalu'])}{$data['Numerlokalu']}{/if}"
  type="text"
  data-minlength="1"
  maxlength="10"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 1 znak"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Telefon">Telefon</label>
  <input class="form-control" id="Telefon" name="Telefon" value="{if isset($data['Telefon'])}{$data['Telefon']}{/if}"
  type="text"
  data-minlength="12"
  maxlength="12"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 12 znaki"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Email">Email</label>
  <input class="form-control" id="Email" name="Email" value="{if isset($data['Email'])}{$data['Email']}{/if}"
  type="text"
  data-minlength="1"
  maxlength="50"
  data-required-error="Pole wymagane"
  data-minlength-error="Minimalna długość to 2 znaki"
  required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
