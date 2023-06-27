
FROM php:8.0-apache

# apt updateは、UbuntuなどのDebian系のLinuxディストリビューションで使用されるコマンドです。これは、ローカルシステムのパッケージリストを最新に更新するするコマンド。
# apt updateコマンドはパッケージリストを更新するだけで、インストールされているパッケージ自体は更新しません。実際にパッケージを最新版に更新するには、apt upgradeコマンドを実行する必要があります。


# docker-php-ext-install pdo_mysqlはPHPのPDO拡張機能のMySQLドライバをインストールするコマンド。
# pdo_mysqlはPHPでデータベースに対する一連の操作を提供するインターフェースを提供する拡張機能です。

RUN apt update \
    && docker-php-ext-install pdo_mysql
