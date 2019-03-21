<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## O nas
	Projekt Zaliczeniowy
	Tematem projektu jest sklep komputerowy. Projekt bedzie napisany w Laravelu z bootstrapem oraz sqlite.
	Coś by tu wypadało dodać cnie.
<!-- bla -->

# LapTech

Prosty sklep komputerowy.

Technologie wykorzystane w projekcie: PHP, framework Laravel 5.4, sqlite3.

### Strona główna
[![](docs/images/glowna.png)]

### Widok klienta po zalogowaniu
[![](docs/images/produkty.png)]

### Składanie zamówień po stronie klienta
[![](docs/images/dodawanie.png)]

### Historia zamówień po stronie klienta

### Widok po stronie administratora
![](docs/images/admin.png)

### Zarządzanie zamówieniami po stronie administratora


### Zarządzanie produktami po stronie administratora
[![](docs/images/edycja.png)]



# Funkcjonalności
+ Użytkownik może założyć konto w systemie i się na nie zalogować.
+ Użytkownik może złożyć zamówienie i przeglądać historię swoich transakcji

+ Administrator może zarządzać kontami użytkowników
+ Administrator może dodawać, usuwać, edytować produkty
+ Administrator może podglądać bieżące zamówienia

## Wymagania
* PHP >= 7.1,
* Sqlite3,
* (https://laravel.com/docs/5.4/installation) framework Laravel.

## Instalacja
1. Sklonowanie repozytorium przez wydanie polecenia:
```bash
$ git clone https://github.com/Szmotz/laravel_projekt.git
```
2. Przejście do katalogu z projektem, skopiowanie i modyfikacja pliku .env (połączenie z odpowiednią bazą danych).
Należy wyedytować następujące stałe: DB_DATABASE, DB_USERNAME, DB_PASSWORD

3. Instalacja zależności poprzez wydanie polecenia w katalogu z projektem:
```bash
$ composer install 
```
4. Uruchomienie wbudowanego serwera przez wydanie polecenia w katalogu z projektem:
```bash
$ php artisan serve
```
4. Aplikacja jest dostępna pod: localhost:8000 [127.0.0.1:8000](http://127.0.0.1:8000).

# Zewnętrzne biblioteki
* Koszyk [Crinsane/LaravelShoppingcart](https://github.com/Crinsane/LaravelShoppingcart)

# Jak używać?
+ [Rejestracja użytkownika](#rejestracja-użytkownika)
+ [Składanie zamówień](#składanie-zamówień) 
+ [Panel administratora](#panel-administratora)
+ [Zarządzanie produktami](#zarządzanie-produktami)
+ [Zarządzanie użytkownikami](#zarządzanie-użytkownikami)
+ [Obsługa zamówień](#obsługa-zamówień)


## Rejestracja użytkownika
Użytkownik rejestruje się poprzez wypełnienie formularza rejestracyjnego 
dostępnego z poziomu strony głównej, bądź menu. Jeśli wszystkie dane się
zgadzają po udanej rejestracji użytkownik zostanie przekierowany
do listy produktów. W przeciwnym wypadku otrzyma stosowny komunikat
jakie dane należy poprawić.

[![](docs/images/img/rejestracja.png)]


## Składanie zamówień
Klikając przycisk "Dodaj do koszyka" w panelu klienta, zostaniemy przeniesieni
do widoku z koszykiem oraz listą produktów które zostały wybrane. W tym miejscu można
wybrać ilość danego produktu, usunąć dany produkt z koszyka czy też przeglądać historię złożonych zamówień.

[![](docs/images/dodawanie.png)]

Po wszystkim należy nacisnąć przycisk "Złóż zamówienie". Zostaniemy poinformowanie o złożeniu zamówienia. 

<!-- tu zdjęcie -->

## Panel administratora
Z poziomu panelu administratora mamy możliwość zarządzania produktami,
użytkownikami, oraz zamówieniami.


[![](docs/images/img/zamowienie.png)]

## Zarządzanie produktami
W widoku zarządzania produktami administrator ma możliwość dodawania, edycji
oraz ustawiania widoku produktów. 

[![](docs/images/img/dodawanieproduktu.png)]

## Zarządzanie użytkownikami
W widoku zarządzania użytkownikami administrator może edytować dane użytkownika.

[![](docs/images/img/uzytkownicy.png)]
<!-- jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj jesteś tutaj  -->
## Obsługa zamówień
W widoku obsługi zamówień administrator może zarządzać zamówieniami. Może podejrzeć
szczegóły zamówienia klikając przycisk "Zobacz" w kolumnie "Szczegóły zamówienia".
Poprzez kliknięcie na ikonę koła zębatego można zmienić status zamówienia.
Status może przyjmować wartości: "Oczekiwanie na potwierdzenie", "Odrzucone",
"Odmówione", "Gotowe", "Zrealizowane". Odpowiednio oznacza to, że zamówienie:
Oczekuję na potwierdzenie ze strony administratora, Administrator odrzucił
zamówienie, Zamówienie zostało odmówione przez klienta (Np. przy odbiorze),
Zamówienie jest gotowe i wysłane do klienta ale jeszcze nie dotarło, Zamówienie zostało
wysłane, a klient je przyjął i za nie zapłacił.

<!-- [![](docs/images/usage/ss10.png)](https://raw.githubusercontent.com/iamkiwi/la_cazzinara/master/docs/images/usage/ss10.png) -->

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
