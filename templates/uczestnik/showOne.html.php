<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $uczestnik = $this->get('data');

 ?>
<h1>uczestnik</h1>
<div>
	<?php
      if(isset($uczestnik)) {
  ?>
  <?php
  echo ('Nazwisko: '.$uczestnik['Nazwisko'].'<br/>');
  echo ('Imie: '.$uczestnik['Imie'].'<br/>');
  echo ('Data_ur: '.$uczestnik['Data_ur'].'<br/>');
  echo ('PESEL: '.$uczestnik['PESEL'].'<br/>');
  echo ('Kod_pocztowy: '.$uczestnik['Kod_pocztowy'].'<br/>');
 echo ('Miasto: '.$uczestnik['Miasto'].'<br/>');
 echo ('Numerlokalu: '.$uczestnik['Numerlokalu'].'<br/>');
 echo ('Telefon: '.$uczestnik['Telefon'].'<br/>');
 echo ('Email: '.$uczestnik['Email'].'<br/>');
  ?>
  <br/><a href="<?php echo($url); ?>uczestnik/usun/<?php echo($uczestnik['id']) ?>">[usuń uczestnik]</a><br/>
	<?php
      }
  ?>
</div>
<br/><br/>
<a href="<?php echo($url); ?>uczestnik/">Lista uczestnik</a><br/>
<a href="<?php echo($url); ?>uczestnik/formularz/">Dodaj uczestnik</a><br/>
<?php include './templates/footer.html.php'; ?>
