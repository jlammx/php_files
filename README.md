# PHP | $_FILES Array (HTTP File Upload variables)
How does the PHP file handle know some basic information like file-name, file-size, type of the file and a few attributes about the file which has been selected to be uploaded? Let’s have a look at what is playing behind the scene. **$_FILES** is a two-dimensional associative global array of items which are being uploaded via the HTTP POST method and holds the attributes of files such as:



| Attribute | Description |
| --- 		| --- |
| [name] 	| Name of file which is uploading |
| [size] 	| Size of the file |
| [type] 	| Type of the file (like .pdf, .zip, .jpeg…..etc) |
| [tmp_name]| A temporary address where the file is located before processing the upload request |
| [error] 	| Types of error occurred when the file is uploading |


Now see How does the array look like??
```php
$_FILES[input-field-name][name]
$_FILES[input-field-name][tmp_name]
$_FILES[input-field-name][size]
$_FILES[input-field-name][type]
$_FILES[input-field-name][error]
```


### Examples
- [Show all attributes array $_FILES](https://pub.dartlang.org/packages/intl)  
Show all attributes of array $_FILES when uploading a file in the same page 

- [HTTP file upload variables](https://pub.dev/packages/http)  
Show all attributes of $_FILES when uploading a file on a different page (file upload manager)


### Screenshots


### Skills
<p align="left">
	<a href="https://dart.dev" target="_blank">
		<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="40" height="40"/>
	</a> 
	<a href="https://www.w3.org/html" target="_blank">
		<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="Html5" width="40" height="40"/>
	</a>
	<a href="https://www.w3.org/css3" target="_blank">
		<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="Css3" width="40" height="40"/>
	</a>
</p>

<br/>

<p align="center">
	<div align="center" inline>
		<span> <a href="https://www.linkedin.com/in/jlammx/" target="_blank">
			<img src="https://content.linkedin.com/content/dam/me/business/en-us/amp/brand-site/v2/bg/LI-Logo.svg.original.svg" alt="Jorge Aguirre" height="25"/></a>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
</p>

<p align="center"> Last updated at 28 Feb 2023</p>