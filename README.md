# Litwit
Litwit &#151; это плагин для CMS LiveStreet, который выводит последний твит из выбранного аккаунта в сайдбар.

####Установка
```sh
$ git clone https://github.com/CubexX/litwit.git
$ cp -a litwit/ /var/www/site.com/plugins
```
В `sidebar.tpl` вашего шаблона перед строкой (или после, смотря где вам нужно разместить блок с твитом):
```smarty
{include file='blocks.tpl' group='right'}
```
разместите эту строку:
```smarty
{hook run='litwit_post'}
```
Далее в админ-панели включите сам плагин.
