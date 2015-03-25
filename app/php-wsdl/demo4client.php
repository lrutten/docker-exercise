<html>
  <body>
    <h1>Demo4 Client</h1>

<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * @service SoapDemoSoapClient
 */
class SoapDemoSoapClient{
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	public static $_WsdlUri='http://127.0.0.1/php-wsdl/demo4.php?WSDL';
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;

	/**
	 * Send a SOAP request to the server
	 *
	 * @param string $method The method name
	 * @param array $param The parameters
	 * @return mixed The server response
	 */
	public static function _Call($method,$param){
		if(is_null(self::$_Server))
			self::$_Server=new SoapClient(self::$_WsdlUri);
		return self::$_Server->__soapCall($method,$param);
	}

	/**
	 * Say hello to...
	 *
	 * @param string $name A name
	 * @return string Response
	 */
	public function SayHello($name){
		return self::_Call('SayHello',Array(
			$name
		));
	}
}

    $client = new SoapDemoSoapClient();
    print("<p>client gemaakt</p>\n");
    $antwoord = $client->SayHello('iedereen');
    print("<p>antwoord: $antwoord</p>\n");
?>

  </body>
</html>
