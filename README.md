# TripPlannera admin

### Install
1.install php 7.0
2.install composer
3.install mongodb
4.git clone https://hmayaktigranyan@bitbucket.org/hmayaktigranyan/crawler.git .
5.composer install
6.php bin/console assetic:dump && php bin/console assetic:watch


###if you are in ubuntu do this for fixing folder permissions:
 HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
 sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var/cache var/logs
 sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var/cache var/logs


###deploy to prod
1.cd /var/www/crawler
2.git pull
3.rm -rf app/cache/prod
4.composer install --no-dev --optimize-autoloader
5.composer dump-autoload --optimize --no-dev --classmap-authoritative
6.php bin/console assetic:dump --env=prod --no-debug


###Run phpunit tests
1.install phpunit
2. ./bin/simple-phpunit , on windows "bin/simple-phpunit"
3.execute tests: bin/phpunit ,on windows "bin/phpunit"

To generate coverage report run ' bin/phpunit --coverage-html coverage ',on windows ' "bin/phpunit" --coverage-html coverage '


###Upgrade to php 7.0
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.0
sudo a2dismod php5.6
sudo a2enmod php7.0
sudo apt-get install php7.0-curl php7.0-mongodb php7.0-xml php7.0-mbstring
update-alternatives --set php /usr/bin/php7.0

HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var/cache var/logs
sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var/cache var/logs
sudo service apache2 restart


##BEST PRACTICES

for batch operations use flush after update, and clear of doctrine and select from db by chunks,similar to this:

$i = 0;
$batchSize = 1000;
$dm = $this->get('doctrine_mongodb')
                  ->getManager();
while (true) {
    $i++;
    $start = ($i - 1) * $batchSize;
    $cursor = $this->createQueryBuilder('Location')
        ->immortal(true)
        ->limit($batchSize)
        ->skip($start)
        ->getQuery()->execute();
    if (!$cursor || !count($cursor) || !$cursor->hasNext()) {
        break;
    }
    foreach ($cursor as $location) {

        //do some update

        $dm->persist($location);
        //flush
        $dm->flush();

        //clear fetched data
        $dm->clear();
    }
    $dm->clear();
}