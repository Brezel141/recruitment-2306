-Prima creare la struttura del progetto
-create le .htaccess una nella root per far visualizzare solo la cartella public e un altro .htaccess nel public per far caricare soltanto il index
-nel composer creare un auto load vedi file poi nel terminal " composer update " e poi " composer dump-autoload" e cosi vengono create automaticamente catrelle tipo vendor
-nel index.php di public importare il autoloader del vendor che permette di caricare tutti i src automaticamente
-la cartella src viene nominata App nel composer.json
-se si creano funzioni/classi nelle varie src bisogna importarle nel index.php e dandole una variabile e poi si puo richamare la funzione 

# Istruzioni per la configurazione del progetto

1. Creare la struttura del progetto.
2. Creare due file `.htaccess`:
   - Uno nella root per far visualizzare solo la cartella `public`.
   - Un altro nel `public` per far caricare soltanto il `index`.
3. Nel `composer`, creare un auto load (vedi file).
   - Eseguire nel terminale `composer update`.
   - Eseguire nel terminale `composer dump-autoload`. Questo creerà automaticamente cartelle tipo `vendor`.
4. Nel `index.php` di `public`, importare l'autoloader del `vendor` che permette di caricare tutti i `src` automaticamente.
5. La cartella `src` viene nominata `App` nel `composer.json`.
6. Se si creano funzioni/classi nelle varie `src`, bisogna importarle nel `index.php` assegnandole una variabile. In seguito, si può richiamare la funzione tramite questa variabile.