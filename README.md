# MyInfosBOT
La source code di @MYINFOSBOT!

Questa è la source ufficiale di MyInfosBOT.
Il bot è completamente open-source, infatti potrete modificare la source a vostro piacimento.
Il watermark si può eliminare senza problemi. Inoltre, per i principianti è tutto spiegato all'interno del file.

# Come settare il Webhook
Prima di settare il Webhook, dobbiamo caricare i file in un qualsiasi spazio web, che può essere anche Altervista.
Attenzione però! Bisogna prima attivare Database, Cloudflare e HTTPS nel proprio spazio web prima di settare il Webhook.

Una volta attivato tutto e caricato i file del bot nel proprio spazio web, apriamo il seguente link nel browser per settare il Webhook;

https://api.telegram.org/botAPIKEY/setWebhook?url=SITO.altervista.org/CARTELLA/index.php

Bisognerà modificare tutte le parti scritte in stampatello.
Ovvero:

APIKEY = metti il token del tuo bot che ti ha dato @botfather.
SITO = metti il nome del tuo sito altervista, se non usi altervista, metti il dominio del tuo sito.
CARTELLA = inserisci la cartella dove hai caricato i file del bot.

Una volta settato il Webhook, il nostro Bot dovrebbe essere pienamente funzionante!
