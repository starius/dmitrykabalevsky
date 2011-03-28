COOKIES='/tmp/dm.cookies'
CURL="curl -b $COOKIES -c $COOKIES --insecure -H 'Expect:' > /dev/null 2> /dev/null "

read -s -p "Web interface password: " web_password
FILES=`echo *.php *.html *.txt | sed 's/config.php//'`
echo $FILES
zip 1.zip $FILES

touch $COOKIES
chmod 600 $COOKIES


eval "$CURL http://dmitrykabalevsky.ru/.filemanager/?login=w_dmitrykabale-ru_1c7bb3f6\&password=$web_password"
eval "$CURL -F fichier=@1.zip -F Directory=. -F action=upload -F sort=NomASC http://dmitrykabalevsky.ru/.filemanager/index.php"

for i in $FILES; do
    eval "$CURL -d \"fichier=$i&action=deleterimerFichier&Directory=.&rep=&sort=NomASC\" http://dmitrykabalevsky.ru/.filemanager/index.php"
done
eval "$CURL 'http://dmitrykabalevsky.ru/.filemanager/unpack.php?fichier=1.zip&Directory=.&sort=NomASC'"
eval "$CURL -d 'fichier=1.zip&action=deleterimerFichier&Directory=.&rep=&sort=NomASC' http://dmitrykabalevsky.ru/.filemanager/index.php"

rm $COOKIES
rm 1.zip


