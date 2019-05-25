<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kursuczestnikk= $this->get('data');
    $Iduczestnikaa = $this->get('Iduczestnikaa');
 ?>
<h1>Lista kurs w kursoferta: <?php echo($Iduczestnikaa[$this->get('selectedCategory')]['Nazwisko'],['Imie']) ?></h1>
<ul>
	<?php
      if(isset($Iduczestnikaa) && isset($kursuczestnikk)) {
      foreach($kursuczestnikk as $kursuczestnik) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'produkt/'.$kursuczestnik['id'].'">'.$kursuczestnik['Opis'].'</a>');
         echo (' - ');
         echo ('<a href="'.$url.'produkt/kategoria/'.$kursuczestnik['Iduczestnika'].'">'.$Iduczestnikaa[$kursuczestnik['Iduczestnika']]['Opis'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Lista kursuczestnik</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/formularz/">Dodaj kursuczestnika</a><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a>
<a href="<?php echo($url); ?>uczestnik/">Lista uczestnik</a>
<?php include './templates/footer.html.php'; ?>
