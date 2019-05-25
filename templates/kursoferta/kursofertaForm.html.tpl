<div class="form-group">
<label for="Idjezyka">Jezyk</label>
{if isset($data['Idjezyka'])}
  {html_options name=Idjezyka options=$jezyk class="form-control" selected=$data['Idjezyka']}
{else}
  {html_options name=Idjezyka options=$jezyk class="form-control"}
{/if}
<div class="help-block with-errors"></div>
</div>

<div class="form-group has-feedback">
  <label for="Nazwaoferty">Nazwaoferty</label>
  <input class="form-control" id="Nazwaoferty" name="Nazwaoferty" value="{if isset($data['Nazwaoferty'])}{$data['Nazwaoferty']}{/if}"
    type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="PoziomKursu">PoziomKursu</label>
  <input class="form-control" id="PoziomKursu" name="PoziomKursu" value="{if isset($data['PoziomKursu'])}{$data['PoziomKursu']}{/if}"
    type="text"
    data-minlength="1"
    maxlength="50"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <div class="form-group has-feedback">
    <label for="Cena"">Cena"</label>
    <input class="form-control" id="Cena" name="Cena" value="{if isset($data['Cena'])}{$data['Cena']}{/if}"
    type="text"
    data-minlength="1"
    maxlength="10"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
  </div>
