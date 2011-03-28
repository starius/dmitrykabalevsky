COOKIES='/tmp/dm.cookies'
CURL="curl -b $COOKIES -c $COOKIES --insecure -H 'Expect:' "

read -s -p "Web interface password: " web_password
zip 1.zip * --exclude config.php

touch $COOKIES
chmod 600 $COOKIES


$CURL http://dmitrykabalevsky.ru/.filemanager/?login=w_dmitrykabale-ru_1c7bb3f6\&password=$web_password
$CURL -F 'fichier=@1.zip' -F Directory=. -F action=upload -F sort=NomASC http://dmitrykabalevsky.ru/.filemanager/index.php 
for i in *.php *.txt *.html; do
    $CURL -d "fichier=$i&action=deleterimerFichier&Directory=.&rep=&sort=NomASC" http://dmitrykabalevsky.ru/.filemanager/index.php
done
$CURL 'http://dmitrykabalevsky.ru/.filemanager/unpack.php?fichier=1.zip&Directory=.&sort=NomASC'
$CURL -d 'fichier=1.zip&action=deleterimerFichier&Directory=.&rep=&sort=NomASC' http://dmitrykabalevsky.ru/.filemanager/index.php

rm $COOKIES
rm 1.zip


