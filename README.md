# PHP | $_FILES Array
How does the PHP file handle know some basic information like file-name, file-size, type of the file and a few attributes about the file which has been selected to be uploaded? Let’s have a look at what is playing behind the scene. **$_FILES** is a two-dimensional associative global array of items which are being uploaded via the HTTP POST method and holds the attributes of files such as:



| Attribute | Description |
| --- 		| --- |
| [name] 	| Name of file which is uploading |
| [size] 	| Size of the file |
| [type] 	| Type of the file (like .pdf, .zip, .jpeg…..etc) |
| [tmp_name]	| A temporary address where the file is located before processing the upload request |
| [error] 	| Types of error occurred when the file is uploading |


Now see How does the array look like??
```php
$_FILES[input-field-name][name]
$_FILES[input-field-name][tmp_name]
$_FILES[input-field-name][size]
$_FILES[input-field-name][type]
$_FILES[input-field-name][error]
```


### 👨‍💻 Examples
- [Array $_FILES](https://github.com/jlammx/php_files/blob/master/show_all_attributes_array_files/show_attributes.php)  
Show all attributes of array $_FILES when uploading a file in the same page 

- [HTTP file upload variables](http_file_upload_variables)  
Show all attributes of $_FILES when uploading a file on a different page (file upload manager)


### 📸 Screenshots
> Array $_FILES
<p align="left">
	<img src="./assets/screenshots/2023-02-28_1_SS.png" alt="Array $_FILES"/>
	<img src="assets/screenshots/2023-02-28_2_SS.png" alt="Array $_FILES"/>
</p>

> HTTP file upload variables
<p align="left">
	<img src="assets/screenshots/2023-02-28_3_SS.png" alt="HTTP file upload variables"/>
	<img src="assets/screenshots/2023-02-28_4_SS.png" alt="HTTP file upload variables"  width="500"/>
</p>

<a href=https://youtu.be/zp7G6uLlve8><img src="https://markdown-videos.deta.dev/youtube/zp7G6uLlve8"></a></img>

<!--
style="width:40%;"

[![](https://markdown-videos.deta.dev/youtube/zp7G6uLlve8)](https://youtu.be/zp7G6uLlve8)

<div align="left">
      <a href="https://www.youtube.com/embed/zp7G6uLlve8">
         <img src="https://img.youtube.com/vi/zp7G6uLlve8/0.jpg" alt="PHP $_FILES">
      </a>
</div>
-->


### 📈 Skills
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

<p align="center"> Last updated at 01 Mar 2023</p>
