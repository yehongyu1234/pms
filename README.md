# pms
工程项目管理系统
基于laravel 5.5.*
<br>
后台基于voyager
采用nwidart进行模块化开发
<br>
安装
composer install
<br>
安装voyager
php artisan voyager:install --with-dummy
可能会出现长度错误
可以参考
https://laravel-news.com/laravel-5-4-key-too-long-error

默认账户密码：
email: admin@admin.com
password: password
如果没有账户密码可以自己添加
php artisan voyager:admin your@email.com --create

<br>
获取本地Key
<br>
php artisan key:generate
