<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $kursuczestnikk = $this->get('data');
    $Idkursu = $this->get('Idkursuu');
 ?>
<h1>Lista kurs w kursoferta: <?php echo($Idkursuu[$this->get('selectedCategory')]['Maksymalna_liczba_os']) ?></h1>
<ul>
	<?php
      if(isset($Idkursuu) && isset($kursuczestnikk)) {
      foreach($kursuczestnikk as $kursuczestnik) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'produkt/'.$kursuczestnik['id'].'">'.$kursuczestnik['Opis'].'</a>');
         echo (' - ');
         echo ('<a href="'.$url.'produkt/kategoria/'.$kursuczestnik['Idkursu'].'">'.$Idkursuu[$kursuczestnik['Idkursu']]['Opis'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Lista kursuczestników</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/formularz/">Dodaj kursuczestników</a><br/>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a></br>
<a href="<?php echo($url); ?>uczestnik/">Lista uczestników</a>
<?php include './templates/footer.html.php'; ?>
