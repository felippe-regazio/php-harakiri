# PHP HARA-KIRI

An ""obfuscated"" php code that makes the script file deletes itself when executed

When any script reach this code *(at index.php)*, the script file will delete itself.

## Thats for fun

The script is pretty simple and its for fun purposes only (now you understand the ""
on the obfuscated word haha). 

Try to guess what the code is doing before looking at decode.php, its not that hard. 
Anyway, to understand what the index.php is doing, see the decode.php file.

### Just try

To see the magic happening, just access the index file of this repository and see the
harakiri. Another simple way to test is: open a terminal and navigate to this repo directory.
Then run "php -S 0.0.0.0:9999" on your terminal. You now have a built in server running
this script, just go to the browser and access http://localhost:9999/.

If you already executed the index.php, heres a copy of the code.

```php
<?php $§=(rawurldecode('%24__%3D%5B%22%3D%22%2C%22s%22%2C%22T%22%2C%22K%22%2C%22f%22%2C%22R%22%2C%22C%22%2C%22K%22%2C%22r%22%2C%225%22%2C%22W%22%2C%22a%22%2C%22s%22%2C%225%22%2C%22W%22%2C%22d%22%5D%3B'));assert($§);$_=__FILE__;assert(base64_decode(strrev(implode($__))));
``` 

---

Php Harakiri written by Felippe Regazio in a boring night. 
