<?php
$data = file_get_contents('https://cat-fact.herokuapp.com/facts/random?amount=2');
$cat_facts = json_decode($data, TRUE);

foreach ($cat_facts as $cat_fact) {
  print "<h3>".$cat_fact['text']."</h3>";
}
