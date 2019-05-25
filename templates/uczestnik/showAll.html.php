<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $uczestnicy = $this->get('data');
    $amount = $this->get('amount');
 ?>
<h1>Lista uczestników</h1>
<ul>
	<?php

      if(isset($uczestnicy)) {
      foreach($uczestnicy as $uczestnik) {
  ?>
	<li>
    <?php
    echo ('<a href="'.$url.'uczestnik/'.$uczestnik['id'].'">'.$uczestnik['Imie'].' '.$uczestnik['Nazwisko'].'</a>');
       //if(isset($amount[$lektor['Idlektora']])) echo (' - ' . $amount[$lektor['Idlektora']]);

       //echo ($lektor['Nazwisko'].' '.$lektor['Imie']);
    ?>
    <a href="<?php echo($url); ?>uczestnik/usun/<?php echo($uczestnik['id']) ?>">[usuń]</a><br/>
</li>
<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>uczestnik/formularz/">Dodaj uczestnika</a><br/>
<a href="<?php echo($url); ?>lektor/">Tabela lektora</a><br/>
<a href="<?php echo($url); ?>uczestnik/">Tabela uczestnika</a><br/>
<a href="<?php echo($url); ?>kurs/">Tabela kurs</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Lista kursuczestników</a><br/>
<a href="<?php echo($url); ?>jezyk/">Tabela jezyka</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Tabela kursoferta</a><br/>
<?php include './templates/footer.html.php'; ?>
