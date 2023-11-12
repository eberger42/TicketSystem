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
You can skip this step, but then in place of the commands just using "sail", you would need to specify "vendor/bin/sail" every time. 
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

Run this command to remove all containers/images when bringing down docker. This is useful when you need to re-create your images. 
```
sail down --rmi all -v
```

You can also use this to force-rebuild your images without using cache. 
```
sail build --no-cache
```