<?php include './templates/header.html.php'; ?>
<?php
    $url = $this->get('protocol').$_SERVER['HTTP_HOST'].$this->get('subdir');
    $lektorzy = $this->get('data');
    $amount = $this->get('amount');
 ?>
<h1>Lista lektorów</h1>
<ul>
	<?php

      if(isset($lektorzy)) {
      foreach($lektorzy as $lektor) {
  ?>
	<li>
      <?php
      echo ('<a href="'.$url.'lektor/'.$lektor['id'].'">'.$lektor['Imie'].' '.$lektor['Nazwisko'].'</a>');
         //if(isset($amount[$lektor['Idlektora']])) echo (' - ' . $amount[$lektor['Idlektora']]);

         //echo ($lektor['Nazwisko'].' '.$lektor['Imie']);
      ?>
      <a href="<?php echo($url); ?>lektor/usun/<?php echo($lektor['id']) ?>">[usuń]</a><br/>
	</li>
	<?php
        }}
    ?>
</ul>
<br/><br/>
<a href="<?php echo($url); ?>lektor/formularz/">Dodaj lektor</a><br/>
<a href="<?php echo($url); ?>lektor/">Tabela lektora</a><br/>
<a href="<?php echo($url); ?>uczestnik/">Tabela uczestnika</a><br/>
<a href="<?php echo($url); ?>kursuczestnik/">Tabela kursuczestników</a><br/>
<a href="<?php echo($url); ?>kurs/">Tabela kurs</a><br/>
<a href="<?php echo($url); ?>jezyk/">Tabela jezyka</a><br/>
<a href="<?php echo($url); ?>kursoferta/">Tabela kursoferta</a><br/>
<?php include './templates/footer.html.php'; ?>
