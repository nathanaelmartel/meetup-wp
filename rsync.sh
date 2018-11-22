
#ssh root@51.15.20.32 -t 'cd /data/websites/; ls -la;/etc/init.d/apache2 restart; bash -l'

rsync -ave ssh /home/nat/Téléchargements/2018.nice.wordcamp.local/www/ root@51.15.20.32:/data/websites/meetup-wp-prod.simplement-web.com --exclude 'wp-config-local.php'

