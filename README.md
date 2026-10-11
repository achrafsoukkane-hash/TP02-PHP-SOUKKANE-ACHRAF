# TP 02 PHP — Programmation Web 2

Année universitaire : 2026/2027

- Nom : SOUKKANE
- Prénom : ACHRAF
- Groupe : 1

## Exécution

Dans le terminal PowerShell, depuis le dossier du projet :

```powershell
& "C:\xampp\php\php.exe" -S localhost:8000
```

Ouvrir http://localhost:8000/index.php dans le navigateur.
Arrêter le serveur avec Ctrl + C.

## Liste des exercices

1. Affichage HTML/PHP et commentaires — ex01.php
2. Variables et concaténation — ex02.php
3. Constantes et calculs — ex03.php
4. Types et conversions — ex04.php
5. Conditions et mentions — ex05.php
6. switch et mois courant — ex06.php
7. Boucles for — ex07.php
8. while, do-while, continue et break — ex08.php
9. Tableau associatif et notes — ex09.php
10. Formulaires GET et POST — ex10_get.html, ex10_get.php, ex10_post.html, ex10_post.php

## Réponses et vérifications

### Exercice 2 — Variables

PHP distingue les majuscules et les minuscules :
`$note` et `$Note` sont deux variables différentes.

Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
Noms invalides : `$a!` et `$1a`.

Un nom de variable commence par une lettre ou `_`,
puis peut contenir des lettres, des chiffres et `_`.