The following has been tested on a fresh installation of Ubuntu.

# Installing Dependencies


```bash
sudo apt update
sudo apt install php-common php7.3 php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline php-xml php-sqlite3 php-zip php-mbstring composer python3 python3-pip git
```
Install Nodejs

```bash
curl -fsSL https://deb.nodesource.com/setup_current.x | sudo -E bash -
sudo apt-get install -y nodejs
```

Then, download the code by running:

```bash
git clone https://github.com/arevindh/homelab-tracker.git
```

Install the composer and npm dependencies:

```bash
composer install
npm install && npm run production
```

# Setting up the database

Run the following to set your database variables:

```bash
cp .env.example .env
```

Then update the `DB_DATABASE` value with the absolute path of your install, followed by `/storage/database/homelab.sqlite`.

Finally, run the following to setup the tables in the database:

```bash
php artisan key:generate
php artisan migrate
```

Now you need to download Ookla's speedtest binary for your system from [here](https://www.speedtest.net/apps/cli). For a x86_64 system:

```bash
speedtest:install
```

Now you need to accept Ookla's EULA by running:

```bash
php artisan speedtest:eula
```

Now run the following to make sure everything has been setup properly (it should output a speedtest result):

```bash
php artisan speedtest:run
```

# Scheduling Setup

To get speed test results every hour, you need to add a cronjob, run `sudo crontab -e` and add an entry with the following (with the path you your install):

```bash
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

# Queue Setup


```bash
sudo vim /etc/systemd/system/homelab.service
```

Add the following, updating the `command` and user `values`:

```bash
[Unit]
Description=Runs and keeps alive the artisan queue:work process
OnFailure=failure-notify@%n.service

[Service]
User=root
Restart=always
WorkingDirectory=/var/www/homelab-tracker
ExecStart=/usr/bin/php artisan queue:work

[Install]
WantedBy=default.target
```

Then run:

```bash
sudo systemctl daemon-reload
sudo systemctl enable homelab.service
sudo systemctl start homelab.service
```
