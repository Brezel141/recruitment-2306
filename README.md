# Project Setup Instructions

1. Create the project structure.
2. Create two .htaccess files:
   - One in the root to only display the `public` folder.
   - Another one in `public` to only load the `index`.
3. In composer, create an auto load (see file).
   - Run `composer update` in the terminal.
   - Run `composer dump-autoload` in the terminal. This will automatically create folders like `vendor`.
4. In public's index.php, import the vendor's autoloader that allows to load all the src automatically.
5. The src folder is named App in composer.json.
6. If you create functions/classes in the various src, you need to import them into index.php by assigning them a variable. Afterwards, you can call the function through this variable.

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