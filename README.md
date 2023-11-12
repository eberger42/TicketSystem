# TicketSystem
A Ticket System using Quasar/Laravel/MySQL

# Setup
When you first clone...
Run these commands. 
```
cd back-end
sudo apt-get install php8.1 php-xml php8.1-curl composer
composer install
```
Open ~/.bashrc and add the following line at the end. 
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

Restart your terminal. 
CD into the back-end directory. 
Execute the below to start the containers. 
```
sail up -d
```

Execute the below to migrate the database. 
```
sail php artisan migrate:fresh --seed
```