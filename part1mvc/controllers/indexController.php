<?php
// On instancie l'objet clients
$clients = new clients();
// On appelle la méthode getClientsList
$clientsList = $clients->getClientsList();
// On appelle la méthode getTwentyClients
$clientsTwentyList = $clients->getTwentyClients();
?>