<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h3>
    Para rodar o projeto, primeiramente deve-se instalado devidamente o Laravel juntamente ao Composer e o NodeJs para administração de dependências.Além disso é necessário ter instalado o XAMPP para conexão com o banco de dados mysql.
</h3>
<h3>
    Em seguida deve-se iniciar o servidor Apache e o MySql para criar um databaseatravés do PhpMyAdmin, como informado no arquivo .env , o database é oficina_2.0. Isso é demonstrado  na imagem a seguir
    ![image](https://user-images.githubusercontent.com/78800416/229521606-7344eddd-1133-45e9-94d7-515154173d20.png), além disso deve-se mudar a porta de 3306 para 3307 no XAMP
<h3/>
<h3>
    Após criar o database, basta executar o comando via terminal : php artisan migrate:fresh e, dessa forma, a tabela de orçamentos é criada no banco de dados oficina_2.0.Por fim, basta executar o comando php artisan serve para inicializar o servidor e poder acessar o site através da URL: http://localhost:8000/orçamentos
</h3>
<h3>
    Em seguida, basta aproveitar das funcionalidades do site, o banco pode ser populado adicionado novos orçamentos como indicado na página princiapal, como é possível também, editar, excluir e obter informações detalhadas sobre cada orçamento além de poder filtar os dados na tela principal
</h3>

