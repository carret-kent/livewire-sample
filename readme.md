# This project is learn Livewire

## local development set up
### git clone laradoc 
 project  
 -- This Repository(current)  
 └ Laradoc
 ```
 cd project
 git clone https://github.com/laradock/laradock.git
 ```
### set up laradoc
 ```
 cd project/laradoc
 cp env-example .env
 cd project/laradock/nginx/sites
 cp default.conf default.conf.bak
 cp laravel.conf.example default.conf
 
 vi default.conf
 ---
 change this code
 - root /var/www/laravel/public;
 + root /var/www/livewire-sample/public;
 ---
 ```
### docker start
 ```
 cd project/laradoc
 docker-compose up -d nginx mysql
 docker-compose exec workspace bash  #into workspace
  
 cd livewire-sample
 composer install
 cp .env.example .env
 php artisan key:generate
 php artisan migrate --seed
 ```
 acsess [here. (localhost)](http://localhost/)
 

## refer    
 1. [livewire](https://livewire-framework.com/)
 1. [laradoc](http://laradock.io/)
 1. [jp setup sample by qiita(Docker環境でLaravelを構築するまで、わずか15分。)](https://qiita.com/hosono/items/dd404f3f074722ef989d)
