<?php

	/* <?php $§=(rawurldecode('%24__%3D%5B%22%3D%22%2C%22s%22%2C%22T%22%2C%22K%22%2C%22f%22%2C%22R%22%2C%22C%22%2C%22K%22%2C%22r%22%2C%225%22%2C%22W%22%2C%22a%22%2C%22s%22%2C%225%22%2C%22W%22%2C%22d%22%5D%3B'));assert($§);$_=__FILE__;assert(base64_decode(strrev(implode($__)))); */

	$§=(rawurldecode('%24__%3D%5B%22%3D%22%2C%22s%22%2C%22T%22%2C%22K%22%2C%22f%22%2C%22R%22%2C%22C%22%2C%22K%22%2C%22r%22%2C%225%22%2C%22W%22%2C%22a%22%2C%22s%22%2C%225%22%2C%22W%22%2C%22d%22%5D%3B'));

	/**
	 *	1. the $§ rawurldecode will generate this string
	 *	"$__=["=","s","T","K","f","R","C","K","r","5","W","a","s","5","W","d"];"
	 *	
	 *	2. the $§ string will be executed with an assert() (with will evaluate it
	 *  as an eval to test the string ); so we are declarating $__ as an array
	 *
	 *	3. then the $_ will be setted as the current file path using __FILE__
	 *
	 *	4. the $__ array (not the $_ file path) will be executed by another assert, 
	 *  but now passing through some functions	 
 	 *
 	 *  so lets assume that we have the $__ declared with assert() and lets proceed:
	 */
	$__ =["=","s","T","K","f","R","C","K","r","5","W","a","s","5","W","d"];

	/**
	 * the $__ array will be imploded. this will 
	 * generate the following string:
	 * =sTKfRCKr5Was5Wd
	 */
	$__ = implode($__);


	// but the string is reversed, so lets put it back
	// generating the following new string:
	// dW5saW5rKCRfKTs=
	$__ = strrev($__);


	// so we clearly have a base64 string now
	// lets decode it
	$__ = base64_decode($__);

	// and the code finally prints unlink($_);
	// as we know, $_ = __FILE__ which is the
	// current script path, so the script will
	// deteles itself on the assert()
	echo $__;
