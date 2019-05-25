<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');

    $kursuczestnikk = $this->get('data');
    $Idkursuu = $this->get('Idkursuu');
    $Iduczestnikaa = $this->get('Iduczestnikaa');
 ?>
<h1>Lista kursuczestnik</h1>
<ul>
	<?php
      if(isset($Idkursuu ) && isset($Iduczestnikaa) && isset($kursuczestnikk)) {
      foreach($kursuczestnikk as $kursuczestnik) {
  ?>
	<li>
      <?php
			   echo ('<a href="'.$url.'kursuczestnik/'.$kursuczestnik['id'].'">'.$kursuczestnik['id'].' '.$kursuczestnik['Oplacano'].'</a>');
         echo (' - ');
         //echo ('<a href="'.$url.'kursoferta/jezyk/'.$kursoferta['id'].'">'.$Idjezykaa[$kursoferta['id']]['NazwaJezyka'].'</a>');
        // echo ('<a href="'.$url.'kursoferta/'.$kursoferta['PoziomKursu'].'">'.$kursoferta['Cena'].'</a>');
      ?>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>kursuczestnik/formularz/">Dodaj kursuczestnik</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Lista kursuczestnik</a>
<a href="<?php echo($url); ?>kurs/">Lista kurs</a>
<a href="<?php echo($url); ?>jezyk/">Lista jezyków</a>
<a href="<?php echo($url); ?>lektor/">Tabela lektora</a><br/>
<a href="<?php echo($url); ?>uczestnik/">Tabela uczestnika</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Tabela kursoferta</a><br/>
<?php include './templates/footer.html.php'; ?>
