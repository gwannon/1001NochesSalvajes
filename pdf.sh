#!/bin/bash

chromium --no-sandbox --headless --disable-gpu --no-pdf-header-footer --disable-back-forward-cache-for-cache-control-no-store-page --print-to-pdf=./temp.pdf https://1001ghules.gwannon.com/index.html

exiftool -overwrite_original -Title="Mil y Un Ghūles - Ambientación de Savage Worlds para poder jugar relatos de horror cósmico en las Mil y Una Noches. Versión 0.2" -Author="@Gwannon" -Subject="Mil y Un Ghūles es una ambientación de Savage Worlds Edición Aventura para poder jugar relatos de horror cósmico en las Mil y Una Noches. Versión 0.2" ./temp.pdf

php pdfIndexGenerator.php > pdf.info

pdftk 'temp.pdf' update_info_utf8 'pdf.info' output 'temp2.pdf'

rm temp.pdf
rm pdf.info

./pagination.sh temp2.pdf 1001Ghules.pdf

rm temp2.pdf
