# testoro
Script scritto in PHP
Splitta il codice html di www.italpreziosi.it prendendosi la quotazione dell'oro
Immette nella variabile "$html" tutto l'html della seguente pagina https://www.italpreziosi.it/it/quotazioni-e-grafici-oro
Splitta la varibile "$html" tramite la funzione explode nella variabile "$quotazione" passandogli come filtro value "ask_XAU_EUR_gr"
Ricava dallo split il valore dell'oro tramite la funzione "substring" sovrascrivento il contenuto della variabile "$quotazione" con il costo dell'oro

