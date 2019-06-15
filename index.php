<?php

	$botToken = ""; // In mezzo a "" scrivi il Token che ti ha dato @botfather
	$website = "https://api.telegram.org/bot".$botToken; // Non toccare
	
	
	$update = fopen($url, "r"); // Non toccare
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
    	case "/help":
        	sendMessage($chatId,"<b>Comandi del bot:</b>
            
/start - Avvia il Bot
/help - Visualizza questo messaggio
/dona - Dona per il Bot.");
            break;
    	case "/dona":
        	sendMessage($chatId,"<b>Dona per il Bot</b>
            
Hey! Vuoi supportare il Bot? Innanzitutto grazie per il pensiero,
se vuoi supportare il Bot, manda i soldi alla nostra email PayPal ufficiale:
            
dhaab9653@gmail.com
            
Non c'è una somma minima da pagare, si accetta quasiasi somma!");
            break;
    	default:
			sendMessage($chatId, "Benvenuto <b>$nome</b> nel <b>MyInfosBOT</b>!
	
			Grazie a questo Bot, puoi ottenere tutte le info del tuo account!
	
			<b>Nome</b>: $nome
			<b>Cognome</b>: $cognome
			<b>Username</b>: @$username
			<b>ID Numerico</b>: $id
			<b>Lingua</b>: $lingua

 								<b>Codice sorgente</b>: https://github.com/misterpika/MyInfosBOT");
            break;  
    }
	
	function sendMessage($chatId,$text) // Inizio funzione sendMessage che permetterà al Bot di inviare un messaggio.
	{
		$url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&parse_mode=HTML&text=".urlencode($text);
		file_get_contents($url);
	} // Fine funzione sendMessage.
	
    function MenuPrincipale($chatId,$text)
    {
	sendMessage($chatId, "Benvenuto <b>$nome</b> nel <b>MyInfosBOT</b>!
	
	Grazie a questo Bot, puoi ottenere tutte le info del tuo account!
	
	<b>Nome</b>: $nome
	<b>Cognome</b>: $cognome
	<b>Username</b>: @$username
	<b>ID Numerico</b>: $id
	<b>Lingua</b>: $lingua

 <b>Codice sorgente</b>: https://github.com/misterpika/MyInfosBOT");
    }
    
?>
