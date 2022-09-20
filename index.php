<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Sostituire nel paragrafo tutte le occorrenze della parola passata dall’utente con tre asterischi (***)
Stampare di nuovo il paragrafo censurato e la sua lunghezza. -->

<?php
$testo = 'Lorem, ipsum accipigna sit amet consectetur adipisicing accipigna. Unde libero minus fugit dolorem. Sunt ducimus, dicta eligendi consequuntur itaque porro?';
$parLength = strlen($testo);
$word = $_GET['word'];
var_dump($testo);
$newTesto = str_replace($word, '***', $testo);
?>
<pre><?php var_dump($word) ?></pre>
<p><?php echo $testo ?>  </p>
<p>Il testo è lungo <?php echo $parLength?> caratteri.</p>
<p>Hai scritto <?php echo $word ?></p>
<p><?php echo $newTesto ?>  </p>