# Corso Cybersecurity
by Riccardo Zorn

## Lezione 11

Realizzazione di una app di login in PHP & MySQL

- Form in html
- Connessione al DB in php
- Interrogazione (Query)
- Stili essenziali

# Prerequisiti

Accesso ad uno spazio fornito durante il corso,
oppure, in alternativa, 
accesso a una macchina LAMP, preferibilmente con Virtualmin installato.

# Copia files

Copia tutto il contenuto di questa cartella nella root del tuo spazio web, es. /home/sql/public_html/<user>/

Meglio ancora, scarica il repository nella cartella.

# Configurazione

Copia il file config.dist.php su config.php
Aprilo, e correggi database, login e password

# Installazione DB

È necessario creare la tabella test_users usando il file database.sql.

## Con phpMyAdmin

Seleziona il database dove (o creane uno)
Tab Import, sfoglia, e carica il file database.sql

## A riga di comando

Detto che il tuo nome utente è "nomeutente", e il nome del database "nomedatabase":

```
mysql -u nomeutente -p nomedatabase < database.sql
```

## Foglio di stile

Crea un file custom.css per le tue regole personalizzate, verrà incluso automaticamente
