Komunikacja człowiek komputer

Tematyka projektu:

Tematem projekt jest aplikacja komisu samochodowego, użytkownik nie zalogowany może przeglądać samochody dostępne w komisie. Użytkownik zalogowany może przeglądać samochody dostępne w komisie, złożyć na niezamówienie (uprzednio uzupełniając swój profil aby dostarczyć wszystkie dane potrzebne do realizacji zamówienia), przeglądać swoje zamówienia

Wykorzystane technologie:
-	Laravel 9.17.0 (https://laravel.com/docs/4.2)
-	Bootstrap v5.1.3 (https://getbootstrap.com/)
-	Composer v2.3.5 (https://getcomposer.org/Composer-Setup.exe)
-	PHP 8.1.5 (https://www.php.net/downloads.php)
-	MySQL 10.4.24-MariaDB (https://mariadb.com/kb/en/mariadb-10424-release-notes/)
-	starter kit Breeze (https://laravel.com/docs/9.x/starter-kits#laravel-breeze) - javascript 1.5


Wykorzystane narzędzia:
-	PHP Strorm 2022.1.2 – (https://www.jetbrains.com/phpstorm/download/#section=windows)
     Licencja edukacyjna
-	Xampp v3.3.0 (https://www.apachefriends.org/pl/download.html) Licencja GNU



Uruchomienie aplikacji:


Do uruchomienia aplikacji potrzebujemy przede wszystkim środowisko programistyczne, może nim być PHP Storm lub Visual Studio Code. Po zainstalowaniu środowiska należy wypakować folder „Komis.rar” i otworzyć projekt wybierając ten folder jako ścieżkę.
Następnie potrzebować będziemy composer czyli narzędzie do zarządzania zależnościami w naszym projekcie. Dodajemy go używając komendy: composer install.
Aby mieć możliwość działania na bazie danych należy zainstalować Xampp Control Panel, po zainstalowaniu otwieramy program i uruchamiamy moduł Apache oraz MySQL.

Następnie klikamy opcję „Admin” aby wyświetlić nasz serwer bazy danych w którym tworzymy bazę o nazwie „komis” wybierając charset  „utf8mb4_polish_ci”


W pliku .env w naszym projekcie ustawiamy DB_DATABASE na komis.

Po wykonaniu powyższych kroków wpisujemy w terminalu:
-	php artisan firstconfig     -     w celu wykonania pierwszej konfiguracji
-	nmp install   -  w celu zainstalowania zależności
-	php artisan serve      -    w celu uruchomienia serwera aplikacji

Do aplikacji logujemy się danymi administratora zawartymi w seedzie,  
Email: admin@example.com
Hasło: admin 
