Incipio
===
*« Incipio : Prendre en main, se mettre à entreprendre, commencer »*

## Bienvenue sur Incipio

> Incipio est un projet qui vise à bâtir un [ERP](http://fr.wikipedia.org/wiki/Progiciel_de_gestion_int%C3%A9gr%C3%A9) communautaire et libre pour l’ensemble des structures de type Junior-Entreprise, faisant partie ou non de la [CNJE](http://www.junior-entreprises.com/).

Cet [ERP](http://fr.wikipedia.org/wiki/Progiciel_de_gestion_int%C3%A9gr%C3%A9) est simple d’utilisation et de programmation pour vous permettre de le prendre en main rapidement et de l’adapter à vos besoins. Incipio n’a pas pour vocation de devenir une grosse machine de guerre impossible à maintenir par le mouvement ou par une structure.

Incipio est un [ERP](http://fr.wikipedia.org/wiki/Progiciel_de_gestion_int%C3%A9gr%C3%A9) évolutif. Pour cela, des structures sont chargées de maintenir le code existant, de répondre aux nouvelles exigences de la [CNJE](http://www.junior-entreprises.com/) pour toutes les Juniors. Cela concerne notamment les Juniors d’école de commerce ou toute autre structure ne disposant pas de ressource nécessaire pour faire évoluer son [ERP](http://fr.wikipedia.org/wiki/Progiciel_de_gestion_int%C3%A9gr%C3%A9).

Incipio a aussi un serveur web capable d’héberger des [ERP](http://fr.wikipedia.org/wiki/Progiciel_de_gestion_int%C3%A9gr%C3%A9) pour plusieurs structures afin de leur faciliter l’accès à cette ressource (solution clefs en main).

---

## Licence

Le projet est sous [licence libre AGPL3](http://www.gnu.org/licenses/agpl-3.0.html) (GNU AFFERO GENERAL PUBLIC LICENSE)


## Documentation

> Lire la [documentation](https://github.com/flef/Incipio/wiki)

## Contact

Florian Lefèvre 
florian.lefevre (@) cnje (.) org



# Development Environment

This branch is dedicated to the development environment of the project. All work to do on this point has to be merge on this branch first, before being merged on other branches.

The purpose of this environment is to ease the development process. We preconfigured a Virtual Machine just for you. The only thing you have to do is to install the requirements and the deployment will be done with only one command.

### Requirements

* [Vagrant](http://docs.vagrantup.com/)
* [Ansible](http://docs.ansible.com/)

# Getting started

## Install

* Install the requirements
* Install the Vagrant box: `vagrant box add jessie http://static.gender-api.com/debian-8-jessie-rc2-x64-slim.box --provider virtualbox`
* Start the Vagrant VM: `vagrant up`

If the provision fails, you can try to run ad hoc Ansible commands with a greater verbosity:

```
ansible-playbook -i .vagrant/machines/default/virtualbox/action_provision --private-key=~/.vagrant.d/insecure_private_key -u vagrant ansible/playbook.yml -vvvv
```

## Usage

* HTTP access: `localhost:8080`
* SSH access: `vagrant ssh`
* MySQL access:
    * user : `root`
    * no password
    * remote access: specify `127.0.0.1` as host (port `3307`) (requires MySQL client)
* redis access:
    * remote access allowed (requires redis client)
    * host: `127.0.0.1`
    * port: `6379`

If you wish to reload configuration: `vagrant provision`

If you need to execute a root command, you can either use `sudo` or login as root the root user with `su` (password:
`vagrant`).

If you wish to change the port used because they overlap with already used ports or whatever your reason is, check
the configuration in the `Vagrantfile`.

# Default configuration

The VM container is configured via Ansible:

* Latest version of [Jessie](https://www.debian.org/releases/jessie/index.en.html) (Debian 8)
* [Wget](http://www.gnu.org/software/wget/) & [cURL](http://curl.haxx.se/)
* [nginx](http://nginx.org/)
* [Git](http://git-scm.com/)

PHP Environment:
* [PHP5.6](http://php.net/)
* [PHP CLI](http://www.php-cli.com/)
* [PHP5 FPM](http://php-fpm.org/)
* [Pear](http://pear.php.net/)
* [Composer](https://getcomposer.org/)
* [Mcrypt](http://php.net/manual/fr/book.mcrypt.php)
* [Xdebug](http://xdebug.org/)
* [PsySH](http://psysh.org/)

Databases:
* [Redis](http://redis.io/)
* [MySQL](https://www.mysql.fr/)

Git:
* Aliases
* Default push method set to `current`
* Global gitignore preconfigured to ignore `linux`, `intelliJ`, `NetBeans` and `Eclipse` files
* For more: `git config --global --list`

Shell aliases: run `alias` to see the available aliases.

# TODO

* nginx
    * Configure nginx vhost for Symfony with HTTPS in dev mode and redirection of HTTPS to HTTP.

# Known bugs

It is possible that the update of the system and the composer install takes very long. For the later, you can drop the task and run it manually it usually takes less time and at least you have an idea of the progress. If you do so, you will have to run manually the tasks which have been configured after this command. Hopefully, it is just creating the database or updating it ;)
