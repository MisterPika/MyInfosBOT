<?php

	$botToken = ""; // In mezzo a "" scrivi il Token che ti ha dato @botfather
	$website = "https://api.telegram.org/bot".$botToken; // Non toccare
	$update = file_get_contents('php://input'); // Non toccare
	$update = json_decode($update, TRUE); // Non toccare

	$chatId = $update['message']['chat']['id']; // Non toccare
	$nome = $update['message']['from']['first_name']; // Variabile nome, che permetterà al bot di conoscere il nostro nome di telegram.
	$cognome = $update['message']['from']['last_name']; // Variabile cognome, che permetterà al bot di conoscere il nostro cognome di telegram.
	$username = $update['message']['from']['username']; // Variabile username, che permetterà al bot di conoscere il nostro username di telegram.
	$id = $update['message']['from']['id']; // Variabile id, che permetterà al bot di conoscere il nostro id numerico di telegram.
	$lingua = $update['message']['from']['language_code']; // Variabile lingua, che permetterà al bot di conoscere la nostra lingua di telegram.
	$text = $update['message']['text']; // Non toccare
	
	
	switch($text)
	{
		case "💡 Codice sorgente 💡":
			sendMessage($chatId,"Per ottenere il codice sorgente, visita il profilo GitHub del Developer.
			
			https://github.com/misterpika/MyInfosBOT/");
			break;
		default:
	$tastieraavvio = '["💡 Codice sorgente 💡"]'; // Tastiera che apparirà non appena si cliccherà /start.
	sendMessage($chatId, "Benvenuto <b>$nome</b> nel <b>MyInfosBOT</b>!
	
	Grazie a questo Bot, puoi ottenere tutte le info del tuo account!
	
	<b>Nome</b>: $nome
	<b>Cognome</b>: $cognome
	<b>Username</b>: @$username
	<b>ID Numerico</b>: $id
	<b>Lingua</b>: $lingua",$tastieraavvio);
			break;
	}
	
	
	
	
	
	
	
	$tastieraavvio = '["💡 Codice sorgente 💡"]'; // Tastiera che apparirà non appena si cliccherà /start.
	sendMessage($chatId, "Benvenuto <b>$nome</b> nel <b>MyInfosBOT</b>!
	
	Grazie a questo Bot, puoi ottenere tutte le info del tuo account!
	
	<b>Nome</b>: $nome
	<b>Cognome</b>: $cognome
	<b>Username</b>: @$username
	<b>ID Numerico</b>: $id
	<b>Lingua</b>: $lingua",$tastieraavvio); // Il messaggio che il bot risponderà quando si invierà un comando al Bot.
	
	
	
	function sendMessage($chatId,$text,$tastiera) // Inizio funzione sendMessage che permetterà al Bot di inviare un messaggio.
	{
		if(isset($tastiera))
		{
			$tastierino = '&reply_markup={"keyboard":['.$tastiera.'],"resize_keyboard":true}'; 
		}
		$url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&parse_mode=HTML&text=".urlencode($text);
		file_get_contents($url);
	} // Fine funzione sendMessage.
	
?>
