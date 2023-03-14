# Projet RTAI Agen Habitat en chantier...

## Installation

(Laravel est passé en version 10 il faut une version PHP >= 8.1)

Ouvrir une invite de commande dans la racine du serveur.

Cloner le projet :

```
git clone https://github.com/arpicode/agen-habitat.git
```

Aller dans le dossier du projet :

```
cd agen-habitat
```

Installer les dépendances :

```
composer update
```

Créer la base de donnée vide (par exemple `agenhabitat`).

Copier le fichier `.env.exemple` et renommer la copie en `.env`

Editer le fichier `.env` avec le nom et les options de connection à la base de donnée.

Générer la clé de l'application :

```
php artisan key:generate --ansi
```

Lancer la migration :

```
php artisan migrate:fresh --seed
```

Créer le `VirtualHost` qui pointe vers le dossier `/public` du projet.

```apache
# Exemple
<VirtualHost *:80>
	ServerName agenhabitat
	DocumentRoot "c:/www/agen-habitat/public"
	<Directory "c:/www/agen-habitat/public">
            Options +Indexes +Includes +FollowSymLinks +MultiViews
            AllowOverride All
            Require local
     </Directory>
</VirtualHost>
```

Penser à mettre à jour le fichier host:

```
# Exemple

127.0.0.1   agenhabitat
```

Fin.

(Le mot de passe de tous les utilisateurs : `$123`)
