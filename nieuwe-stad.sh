curl \
     -X POST \
     --trace-ascii - \
     --data "actie=nieuw&naam=$1&postcode=$2" \
	localhost/steden/rest-steden.php
