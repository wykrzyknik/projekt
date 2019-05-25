<div class="form-group">
<label for="Idkursu">Kurs</label>
{if isset($data['Idkursu'])}
  {html_options name=Idkursu options=$kurs class="form-control" selected=$data['Idkursu']}
{else}
  {html_options name=Idkursu options=$kurs class="form-control"}
{/if}
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label for="Iduczestnika">Uczestnik</label>
{if isset($data['Iduczestnika'])}
  {html_options name=Iduczestnika options=$uczestnik class="form-control" selected=$data['Iduczestnika']}
{else}
  {html_options name=Iduczestnika options=$uczestnik class="form-control"}
{/if}
<div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Oplacano">Oplacano</label>
  <input class="form-control" id="Oplacano" name="Oplacano" value="{if isset($data['Oplacano'])}{$data['Oplacano']}{/if}"
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
  <label for="Opis">Opis</label>
  <input class="form-control" id="Opis" name="Opis" value="{if isset($data['Opis'])}{$data['Opis']}{/if}"
    type="text"
    maxlength="50">
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
