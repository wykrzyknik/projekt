<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $lektor = $this->get('data');

 ?>
<h1>Lektor</h1>
<div>
	<?php
      if(isset($lektor)) {
  ?>
  <?php
	   echo ('Nazwisko: '.$lektor['Nazwisko'].'<br/>');
     echo ('Imie: '.$lektor['Imie'].'<br/>');
    echo ('Telefon: '.$lektor['Telefon'].'<br/>');
    echo ('Email: '.$lektor['Email'].'<br/>');
    echo ('Miasto: '.$lektor['Miasto'].'<br/>');
    echo ('Numerdomu: '.$lektor['Numerdomu'].'<br/>');
    echo ('Numerlokalu: '.$lektor['Numerlokalu'].'<br/>');
  ?>
  <br/><a href="<?php echo($url); ?>lektor/usun/<?php echo($lektor['id']) ?>">[usuń produkt]</a><br/>
	<?php
      }
  ?>
</div>
<br/><br/>
<a href="<?php echo($url); ?>lektor/">Lista lektorów</a><br/>
<a href="<?php echo($url); ?>lektor/formularz/">Dodaj lektora</a><br/>
<?php include './templates/footer.html.php'; ?>
