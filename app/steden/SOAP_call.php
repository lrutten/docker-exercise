<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SOAP-client</title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('soap.wsdl_cache_enabled',0); // Disable caching in PHP

        print("<h1>Functies</h1>\n");

/*
        $opt = array(
             'wsdl_cache' => 0,
             'trace'=>1,
             'encoding'=>'utf-8', 
             'exceptions' => 0);
 */
        $client = new SoapClient("http://127.0.0.1/steden/service_Steden.php?WSDL&readable");
        $functies = $client->__getFunctions();
        print("<ul>");
        foreach ($functies as $f) 
        {
            print("<li>$f</li>");
        }
        print("</ul>");


        print("<h1>Aantal steden</h1>\n");
        $aantal = $client->getAantal();
        print("<ul>");
        print("<p>aantal: $aantal</p>");


        print("<h1>Steden</h1>\n");
        $steden = $client->getSteden();
        print("<ul>");
        foreach ($steden as $stad) 
        {
            print("<li>$stad</li>");
        }
        print("</ul>");
        ?>
    </body>
</html>
