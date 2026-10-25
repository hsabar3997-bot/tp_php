Partie 1 — Variables, constantes et types

Que se passe-t-il si vous affichez une constante non définie ? L'affichage d'une constante non définie provoque une erreur ou un avertissement selon le contexte et la version de PHP.
Quelle différence y a-t-il entre const et define() ? const déclare une constante directement dans le code, tandis que define() permet de la déclarer à l'exécution. Partie 2 — Structures de contrôle
Que se passe-t-il si vous oubliez un break dans un case ? L'exécution continue dans les case suivants jusqu'à rencontrer un break ou la fin du switch.
Quelle est la différence essentielle entre while et do-while ? while vérifie la condition avant d'exécuter le bloc, alors que do-while exécute le bloc au moins une fois avant de vérifier la condition. Partie 3 — Tableaux
Quelle fonction de tri utiliser sur un tableau indexé comme $modules ? On utilise sort() pour trier les valeurs par ordre croissant. La fonction réindexe le tableau numériquement.
Expliquez la différence entre $a + $b, $a == $b et $a === $b. $a + $b réalise l'union des deux tableaux en conservant les clés du premier tableau lorsqu'elles existent déjà. $a == $b vérifie si les tableaux possèdent les mêmes paires clé-valeur, sans tenir compte de leur ordre. $a === $b vérifie également l'ordre des éléments et l'identité de leurs types. Partie 4 — Formulaires et fichiers inclus
Quelle est la différence entre include et require ? include génère un avertissement si le fichier est absent et le script peut continuer. require provoque une erreur fatale et arrête normalement l'exécution.
Quelle est la différence entre include et include_once ? include peut inclure plusieurs fois le même fichier, tandis que include_once évite de l'inclure plusieurs fois au cours de la même exécution.
Pourquoi les données apparaissent-elles dans l'URL avec GET ? La méthode GET transmet les données du formulaire sous forme de paramètres dans l'URL.
Pourquoi préférer POST à GET pour un mot de passe ? POST n'affiche pas le mot de passe dans l'URL, contrairement à GET. Cependant, HTTPS reste nécessaire pour protéger les données pendant leur transmission.
Que contient $_REQUEST ? $_REQUEST peut contenir les données de $_GET, $_POST et $_COOKIE, selon la configuration de PHP. Partie 5 — CSV et JSON
Que se passerait-il avec le mode "w" au lieu de "a" ? Le mode "w" efface le contenu précédent du fichier lors de son ouverture, tandis que le mode "a" ajoute les nouvelles données à la fin.
Quels sont les avantages et inconvénients de fgetcsv() et de fgets() avec explode() ? fgetcsv() est conçu pour lire les fichiers CSV et gère correctement les champs entre guillemets. fgets() lit une ligne comme une chaîne et explode() la découpe selon un séparateur, mais cette méthode gère mal certains cas complexes du format CSV.
Quel format est directement exploitable par une application JavaScript ? Le format JSON est directement exploitable par JavaScript grâce à la fonction JSON.parse(). Partie 6 — Sessions, cookies et dates
Où est stockée une session ? Où est stocké un cookie ? Les données de session sont généralement stockées côté serveur, tandis qu'un cookie est stocké dans le navigateur du client.
Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ? Parce que ces fonctions envoient des en-têtes HTTP, qui doivent être envoyés avant le début de l'affichage du contenu.Partie 1 — Variables, constantes et types

Que se passe-t-il si vous affichez une constante non définie ? L'affichage d'une constante non définie provoque une erreur ou un avertissement selon le contexte et la version de PHP.
Quelle différence y a-t-il entre const et define() ? const déclare une constante directement dans le code, tandis que define() permet de la déclarer à l'exécution. Partie 2 — Structures de contrôle
Que se passe-t-il si vous oubliez un break dans un case ? L'exécution continue dans les case suivants jusqu'à rencontrer un break ou la fin du switch.
Quelle est la différence essentielle entre while et do-while ? while vérifie la condition avant d'exécuter le bloc, alors que do-while exécute le bloc au moins une fois avant de vérifier la condition. Partie 3 — Tableaux
Quelle fonction de tri utiliser sur un tableau indexé comme $modules ? On utilise sort() pour trier les valeurs par ordre croissant. La fonction réindexe le tableau numériquement.
Expliquez la différence entre $a + $b, $a == $b et $a === $b. $a + $b réalise l'union des deux tableaux en conservant les clés du premier tableau lorsqu'elles existent déjà. $a == $b vérifie si les tableaux possèdent les mêmes paires clé-valeur, sans tenir compte de leur ordre. $a === $b vérifie également l'ordre des éléments et l'identité de leurs types. Partie 4 — Formulaires et fichiers inclus
Quelle est la différence entre include et require ? include génère un avertissement si le fichier est absent et le script peut continuer. require provoque une erreur fatale et arrête normalement l'exécution.
Quelle est la différence entre include et include_once ? include peut inclure plusieurs fois le même fichier, tandis que include_once évite de l'inclure plusieurs fois au cours de la même exécution.
Pourquoi les données apparaissent-elles dans l'URL avec GET ? La méthode GET transmet les données du formulaire sous forme de paramètres dans l'URL.
Pourquoi préférer POST à GET pour un mot de passe ? POST n'affiche pas le mot de passe dans l'URL, contrairement à GET. Cependant, HTTPS reste nécessaire pour protéger les données pendant leur transmission.
Que contient $_REQUEST ? $_REQUEST peut contenir les données de $_GET, $_POST et $_COOKIE, selon la configuration de PHP. Partie 5 — CSV et JSON
Que se passerait-il avec le mode "w" au lieu de "a" ? Le mode "w" efface le contenu précédent du fichier lors de son ouverture, tandis que le mode "a" ajoute les nouvelles données à la fin.
Quels sont les avantages et inconvénients de fgetcsv() et de fgets() avec explode() ? fgetcsv() est conçu pour lire les fichiers CSV et gère correctement les champs entre guillemets. fgets() lit une ligne comme une chaîne et explode() la découpe selon un séparateur, mais cette méthode gère mal certains cas complexes du format CSV.
Quel format est directement exploitable par une application JavaScript ? Le format JSON est directement exploitable par JavaScript grâce à la fonction JSON.parse(). Partie 6 — Sessions, cookies et dates
Où est stockée une session ? Où est stocké un cookie ? Les données de session sont généralement stockées côté serveur, tandis qu'un cookie est stocké dans le navigateur du client.
Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ? Parce que ces fonctions envoient dPartie 1 — Variables, constantes et types

Que se passe-t-il si vous affichez une constante non définie ? L'affichage d'une constante non définie provoque une erreur ou un avertissement selon le contexte et la version de PHP.
Quelle différence y a-t-il entre const et define() ? const déclare une constante directement dans le code, tandis que define() permet de la déclarer à l'exécution. Partie 2 — Structures de contrôle
Que se passe-t-il si vous oubliez un break dans un case ? L'exécution continue dans les case suivants jusqu'à rencontrer un break ou la fin du switch.
Quelle est la différence essentielle entre while et do-while ? while vérifie la condition avant d'exécuter le bloc, alors que do-while exécute le bloc au moins une fois avant de vérifier la condition. Partie 3 — Tableaux
Quelle fonction de tri utiliser sur un tableau indexé comme $modules ? On utilise sort() pour trier les valeurs par ordre croissant. La fonction réindexe le tableau numériquement.
Expliquez la différence entre $a + $b, $a == $b et $a === $b. $a + $b réalise l'union des deux tableaux en conservant les clés du premier tableau lorsqu'elles existent déjà. $a == $b vérifie si les tableaux possèdent les mêmes paires clé-valeur, sans tenir compte de leur ordre. $a === $b vérifie également l'ordre des éléments et l'identité de leurs types. Partie 4 — Formulaires et fichiers inclus
Quelle est la différence entre include et require ? include génère un avertissement si le fichier est absent et le script peut continuer. require provoque une erreur fatale et arrête normalement l'exécution.
Quelle est la différence entre include et include_once ? include peut inclure plusieurs fois le même fichier, tandis que include_once évite de l'inclure plusieurs fois au cours de la même exécution.
Pourquoi les données apparaissent-elles dans l'URL avec GET ? La méthode GET transmet les données du formulaire sous forme de paramètres dans l'URL.
Pourquoi préférer POST à GET pour un mot de passe ? POST n'affiche pas le mot de passe dans l'URL, contrairement à GET. Cependant, HTTPS reste nécessaire pour protéger les données pendant leur transmission.
Que contient $_REQUEST ? $_REQUEST peut contenir les données de $_GET, $_POST et $_COOKIE, selon la configuration de PHP. Partie 5 — CSV et JSON
Que se passerait-il avec le mode "w" au lieu de "a" ? Le mode "w" efface le contenu précédent du fichier lors de son ouverture, tandis que le mode "a" ajoute les nouvelles données à la fin.
Quels sont les avantages et inconvénients de fgetcsv() et de fgets() avec explode() ? fgetcsv() est conçu pour lire les fichiers CSV et gère correctement les champs entre guillemets. fgets() lit une ligne comme une chaîne et explode() la découpe selon un séparateur, mais cette méthode gère mal certains cas complexes du format CSV.
Quel format est directement exploitable par une application JavaScript ? Le format JSON est directement exploitable par JavaScript grâce à la fonction JSON.parse(). Partie 6 — Sessions, cookies et dates
Où est stockée une session ? Où est stocké un cookie ? Les données de session sont généralement stockées côté serveur, tandis qu'un cookie est stocké dans le navigateur du client.
Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ? Parce que ces fonctions envoient des en-têtes HTTP, qui doivent être envoyés avant le début de l'affichage du contenu.Partie 1 — Variables, constantes et types

Que se passe-t-il si vous affichez une constante non définie ? L'affichage d'une constante non définie provoque une erreur ou un avertissement selon le contexte et la version de PHP.
Quelle différence y a-t-il entre const et define() ? const déclare une constante directement dans le code, tandis que define() permet de la déclarer à l'exécution. Partie 2 — Structures de contrôle
Que se passe-t-il si vous oubliez un break dans un case ? L'exécution continue dans les case suivants jusqu'à rencontrer un break ou la fin du switch.
Quelle est la différence essentielle entre while et do-while ? while vérifie la condition avant d'exécuter le bloc, alors que do-while exécute le bloc au moins une fois avant de vérifier la condition. Partie 3 — Tableaux
Quelle fonction de tri utiliser sur un tableau indexé comme $modules ? On utilise sort() pour trier les valeurs par ordre croissant. La fonction réindexe le tableau numériquement.
Expliquez la différence entre $a + $b, $a == $b et $a === $b. $a + $b réalise l'union des deux tableaux en conservant les clés du premier tableau lorsqu'elles existent déjà. $a == $b vérifie si les tableaux possèdent les mêmes paires clé-valeur, sans tenir compte de leur ordre. $a === $b vérifie également l'ordre des éléments et l'identité de leurs types. Partie 4 — Formulaires et fichiers inclus
Quelle est la différence entre include et require ? include génère un avertissement si le fichier est absent et le script peut continuer. require provoque une erreur fatale et arrête normalement l'exécution.
Quelle est la différence entre include et include_once ? include peut inclure plusieurs fois le même fichier, tandis que include_once évite de l'inclure plusieurs fois au cours de la même exécution.
Pourquoi les données apparaissent-elles dans l'URL avec GET ? La méthode GET transmet les données du formulaire sous forme de paramètres dans l'URL.
Pourquoi préférer POST à GET pour un mot de passe ? POST n'affiche pas le mot de passe dans l'URL, contrairement à GET. Cependant, HTTPS reste nécessaire pour protéger les données pendant leur transmission.
Que contient $_REQUEST ? $_REQUEST peut contenir les données de $_GET, $_POST et $_COOKIE, selon la configuration de PHP. Partie 5 — CSV et JSON
Que se passerait-il avec le mode "w" au lieu de "a" ? Le mode "w" efface le contenu précédent du fichier lors de son ouverture, tandis que le mode "a" ajoute les nouvelles données à la fin.
Quels sont les avantages et inconvénients de fgetcsv() et de fgets() avec explode() ? fgetcsv() est conçu pour lire les fichiers CSV et gère correctement les champs entre guillemets. fgets() lit une ligne comme une chaîne et explode() la découpe selon un séparateur, mais cette méthode gère mal certains cas complexes du format CSV.
Quel format est directement exploitable par une application JavaScript ? Le format JSON est directement exploitable par JavaScript grâce à la fonction JSON.parse(). Partie 6 — Sessions, cookies et dates
Où est stockée une session ? Où est stocké un cookie ? Les données de session sont généralement stockées côté serveur, tandis qu'un cookie est stocké dans le navigateur du client.
Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ? Parce que ces fonctions envoient des en-têtes HTTP, qui doivent être envoyés avant le début de l'affichage du contenu.Partie 1 — Variables, constantes et types

Que se passe-t-il si vous affichez une constante non définie ? L'affichage d'une constante non définie provoque une erreur ou un avertissement selon le contexte et la version de PHP.
Quelle différence y a-t-il entre const et define() ? const déclare une constante directement dans le code, tandis que define() permet de la déclarer à l'exécution. Partie 2 — Structures de contrôle
Que se passe-t-il si vous oubliez un break dans un case ? L'exécution continue dans les case suivants jusqu'à rencontrer un break ou la fin du switch.
Quelle est la différence essentielle entre while et do-while ? while vérifie la condition avant d'exécuter le bloc, alors que do-while exécute le bloc au moins une fois avant de vérifier la condition. Partie 3 — Tableaux
Quelle fonction de tri utiliser sur un tableau indexé comme $modules ? On utilise sort() pour trier les valeurs par ordre croissant. La fonction réindexe le tableau numériquement.
Expliquez la différence entre $a + $b, $a == $b et $a === $b. $a + $b réalise l'union des deux tableaux en conservant les clés du premier tableau lorsqu'elles existent déjà. $a == $b vérifie si les tableaux possèdent les mêmes paires clé-valeur, sans tenir compte de leur ordre. $a === $b vérifie également l'ordre des éléments et l'identité de leurs types. Partie 4 — Formulaires et fichiers inclus
Quelle est la différence entre include et require ? include génère un avertissement si le fichier est absent et le script peut continuer. require provoque une erreur fatale et arrête normalement l'exécution.
Quelle est la différence entre include et include_once ? include peut inclure plusieurs fois le même fichier, tandis que include_once évite de l'inclure plusieurs fois au cours de la même exécution.
Pourquoi les données apparaissent-elles dans l'URL avec GET ? La méthode GET transmet les données du formulaire sous forme de paramètres dans l'URL.
Pourquoi préférer POST à GET pour un mot de passe ? POST n'affiche pas le mot de passe dans l'URL, contrairement à GET. Cependant, HTTPS reste nécessaire pour protéger les données pendant leur transmission.
Que contient $_REQUEST ? $_REQUEST peut contenir les données de $_GET, $_POST et $_COOKIE, selon la configuration de PHP. Partie 5 — CSV et JSON
Que se passerait-il avec le mode "w" au lieu de "a" ? Le mode "w" efface le contenu précédent du fichier lors de son ouverture, tandis que le mode "a" ajoute les nouvelles données à la fin.
Quels sont les avantages et inconvénients de fgetcsv() et de fgets() avec explode() ? fgetcsv() est conçu pour lire les fichiers CSV et gère correctement les champs entre guillemets. fgets() lit une ligne comme une chaîne et explode() la découpe selon un séparateur, mais cette méthode gère mal certains cas complexes du format CSV.
Quel format est directement exploitable par une application JavaScript ? Le format JSON est directement exploitable par JavaScript grâce à la fonction JSON.parse(). Partie 6 — Sessions, cookies et dates
Où est stockée une session ? Où est stocké un cookie ? Les données de session sont généralement stockées côté serveur, tandis qu'un cookie est stocké dans le navigateur du client.
Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ? Parce que ces fonctions envoient des en-têtes HTTP, qui doivent être envoyés avant le début de l'affichage du contenu.es en-têtes HTTP, qui doivent être envoyés avant le début de l'affichage du contenu.