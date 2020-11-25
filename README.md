Módulo rewrite

Se non está feito, executar php:

        apt install php7.0 libapache2-mod-php7.0


1. Habilitar o módulo

		a2enmod rewrite

2. Crear un ficheiro .htaccess en /var/www/servidor escribindo unha regla de URL amigable

        Options FollowSymLinks
        RewriteEngine On
        RewriteBase /
        RewriteRule ^([a-z]+)/([0-9]+)/([0-9]+)$ operacion.php?op=$1&op1=$2&op2=$3

5. Accedemos a

        http://www.servidor.com/suma/8/6
		
		

6. Contenidos según idioma seleccionado na url, p.ex. http://www.servidor.com/index.php?lang=en

7. Queremos cambiar a url para que sirva os contidos por idiomas cunha url amigable como http://www.servidor.com/en

	7.1. Cear un direcorio `es` e `gal` con sendos index traducidos
	7.2.Engadimos no .htaccess as seguintes reglas:

        RewriteCond %{QUERY_STRING} lang=(.*)
        RewriteRule ^index.php$ /%1/$1

    7.3. Xa non necesitamos o index.php
	
Lembra que tras crear ou facer cambios no .htaccess NON hai que reiniciar o servidor (non somos admin)