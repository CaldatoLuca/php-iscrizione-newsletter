# PHP Newsletter

Creare una pagina index.php con un form (che richiama la stessa pagina) per l'inserimento di un indirizzo email.

Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.

Usare un alert di Bootstrap per mostrare il messaggio di errore.

In caso di esito positivo effettuare un redirect ad una thankyou page.

## Svolgimento

Creo una pagina con un form e un bottone (index.php).

In un file diverso (functions.php) controllo se la mail inserita contiene la '@' e il '.'

```php
//uso str_contains per verificare la presenza dei caratteri nella mail

function checkEmail($email)
{
    return str_contains($email, '.') && str_contains($email, '@');
}
```

Per poter includere questa funzione nel file 'index.php' uso il seguente comando

```php
require_once __DIR__ . '/functions.php';
```

A seconda del risulato della funzione stampo il messaggio di errore o riamando a 'thankyou.php'

```php
//verifico se esiste il parametro email e se ha contenuto

if (!empty($_POST['email'])) {

    $email = $_POST['email'];

    //verifico se email ha un . e una @
    if (checkEmail($email)) {
        $_SESSION['email'] = $email;
        header('Location: thankyou.php');
        die;
    } else {
        $error = true;
        $error_class = 'danger';
        $error_text = 'la mail NON valida!';
    }
}
```

Per poter visualizzare la mail anche nella thankyou page è necessarrio avviare una sessione che collega 'index.php' e 'thankyou.php'.

Inserisco il seguente comando all' inizio dei file

```php
session_start();
```

Questo ci permette di ususfruire di un array a cui dare le chiavi che vogliamo siano passate tra file

```php
$_SESSION['email'] = $email;
```

In questo modo posso stampare la mail inserita in 'index.php' anche in 'thankyou.php'

```html
<p>
  La tua email è
  <?php echo $_SESSION['email']; ?>
</p>
```
