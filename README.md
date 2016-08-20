# NeverCodeAlone Workshop - Codeception

## Setup
### Inital
```bash
composer init
composer require --dev codeception/base
composer require --dev facebook/webdriver
composer require --dev sgc-fireball/selenium-server-standalone-installer
php vendor/bin/codecept bootstrap
```

### Bestehendes auschecken
```bash
git clone ...
composer install
```

## Konfiguration
tests/acceptance.suite.yml
```yaml
class_name: AcceptanceTester
modules:
    enabled:
        - WebDriver
        - \Helper\Acceptance
        - Asserts
    config:
        WebDriver:
          url: 'http://www.zalando.de'
          browser: phantomjs
          window_size: 1024x800
```

## Cache leeren
```bash
php vendor/bin/codecept build
```

## Tests
### Startseiten Banner Test erstellen
```bash
php vendor/bin/codecept generate:cest acceptance start/banner
```

Anschließend die Datei ```tests/acceptance/start/bannerCest.php``` öffnen.
In der Datei gibt es drei Funktionen.

* ```_before``` Diese Funktion dient für eine Vorbereitung auf den
  eigenlichen Test. Beispielsweise für einen Login.
* ```tryToTest``` Dies ist die eigentliche Test Funktion. Test
  Funktionen müssen auf den Namen ```Test``` enden.
* ```_after``` Ähnlich wie die ```_before``` dient, diese Funktion
  lediglich zum Aufräumen nach einem Test. Beispielsweise Logout.
 
```bash
php vendor/bin/codecept run acceptance start/bannerCest --steps
```

### Login Form Tester
```bash
php vendor/bin/codecept generate:cest acceptance checkout/login
```
Siehe: ```tests/acceptance/checkout/loginCest.php```

### ADS Warenkorb Button Test
```bash
php vendor/bin/codecept generate:cest acceptance product/size
```
Siehe: ```tests/acceptance/product/sizeCest.php```

### Ausführen
#### Alles Test
```bash
php vendor/bin/codecept run acceptance
```

#### Alles Test (Steps anzeigen)
```bash
php vendor/bin/codecept run acceptance --steps
```

#### Einzelnen Test ausführen
```bash
php vendor/bin/codecept run acceptance checkout/loginCest --steps
```

### Via Composer
Da uns der Befehl auf dauer zu lang ist, legen wir in ```composer.json```
einen einen Block ```scripts``` mit dem Befehl ```test``` an.
Anschließend können wir einfach ```composer test``` ausführen,
der all unsere Test-Befehle ausführt. Sei es ```phpcs``` oder ```phpmpd```
oder ähnliche Test-Befehle.
