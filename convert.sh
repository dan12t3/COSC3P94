dos2unix *.html *.php css/* js/*
find . -type d -exec chmod 701 {} \;
find . -type f -exec chmod 755 {} \;
chmod +x convert.sh
