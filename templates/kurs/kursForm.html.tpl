<div class="form-group">
<label for="Idkursuoferta">KursOferta</label>
{if isset($data['Idkursoferta'])}
  {html_options name=Idkursuoferta options=$kursoferta class="form-control" selected=$data['Idkursuoferta']}
{else}
  {html_options name=Idkursuoferta options=$kursoferta class="form-control"}
{/if}
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label for="Idlektora">Lektor</label>
{if isset($data['Idlektora'])}
  {html_options name=Idlektora options=$lektor class="form-control" selected=$data['Idlektora']}
{else}
  {html_options name=Idlektora options=$lektor class="form-control"}
{/if}
<div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Maksymalna_liczba_os">Maksymalna_liczba_os</label>
  <input class="form-control" id="Maksymalna_liczba_os" name="Maksymalna_liczba_os" value="{if isset($data['Maksymalna_liczba_os'])}{$data['Maksymalna_liczba_os']}{/if}"
    type="text"
    data-minlength="1"
    maxlength="2"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="Nrsali">Nrsali</label>
  <input class="form-control" id="Nrsali" name="Nrsali" value="{if isset($data['Nrsali'])}{$data['Nrsali']}{/if}"
    type="text"
    data-minlength="1"
    maxlength="3"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <div class="form-group has-feedback">
    <label for="data_rozpoczecia">data_rozpoczecia</label>
    <input class="form-control" id="data_rozpoczecia" name="data_rozpoczecia" value="{if isset($data['data_rozpoczecia'])}{$data['data_rozpoczecia']}{/if}"
      type="date"
      data-required-error="Pole wymagane"
      required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group has-feedback">
    <div class="form-group has-feedback">
      <div class="form-group has-feedback">
        <label for="data_zakonczenia">data_zakonczenia</label>
        <input class="form-control" id="data_zakonczenia" name="data_zakonczenia" value="{if isset($data['data_zakonczenia'])}{$data['data_zakonczenia']}{/if}"
          type="date"
          data-required-error="Pole wymagane"
          required>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group has-feedback">
