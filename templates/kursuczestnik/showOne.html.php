<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kursuczestnik = $this->get('data');
    $Idkursuu = $this->get('Idkursuu');
    $Iduczestnikaa = $this->get('Iduczestnikaa');
 ?>
<h1>Kursuczestnik</h1>
<div>
	<?php
      if(isset($Iduczestnikaa) && isset($kursuczestnik) && isset($Idkursuu)) {
  ?>
  <?php

  //echo ('Kurs: <a href="'.$url.'kursuczestnik/kurs/'.$kursuczestnik['Idkursu'].'">'.$Idkursuu[$kursuczestnik['Idkursu']]['Maksymalna_liczba_os'].'</a><br/>');
echo ('Kurs: <a href="'.$url.'kursuczestnik/kurs/'.$kursuczestnik['Idkursu'].'">'.$Idkursuu[$kursuczestnik['Idkursu']]['Maksymalna_liczba_os'].'</a><br/>');
  echo ('Uczestnik: <a href="'.$url.'kursuczestnik/uczestnik/'.$kursuczestnik['Iduczestnika'].'">'.$Iduczestnikaa[$kursuczestnik['Iduczestnika']]['Nazwisko'].'</a><br/>');
echo ('Oplacano: '.sprintf('%.2f zł', $kursuczestnik['Oplacano']).'<br/>');

    //echo ('Opłacano: '.$kursuczestnik['Opłacano'].'<br/>');
     echo ('Opis: '.$kursuczestnik['Opis'].'<br/>');


  ?>
  <br/><a href="<?php echo($url); ?>kursuczestnik/usun/<?php echo($kursuczestnik['id']) ?>">[usuń kursuczestnika]</a><br/>
	<?php
      }
  ?>
</div>
<br/><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Lista kursuczestników</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/formularz/">Dodaj kursuczestnik</a><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a></br>
<a href="<?php echo($url); ?>uczestnik/">Lista uczestnik</a>
<?php include './templates/footer.html.php'; ?>
