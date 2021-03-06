# frd.mn

[![Current tag](http://img.shields.io/github/tag/frdmn/frd.mn.svg)](https://github.com/frdmn/frd.mn/tags) [![Repository issues](http://issuestats.com/github/frdmn/frd.mn/badge/issue)](http://issuestats.com/github/frdmn/frd.mn) [![Flattr this repository](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=frdmn&url=https://github.com/frdmn/frd.mn)

![](http://up.frd.mn/YJvV8.png)

Repository of my personal website / project portfolio.

## Installation

1. Make sure you've installed all requirements
2. Clone this repository:  
  `git clone https://github.com/frdmn/frd.mn`  
  `cd frd.mn`  
3. Install all dependencies and libraries:  
  `npm install`  
  `bower install`  
  `composer install`
4. Copy the default `.env` and insert your GitHub API token:  
  `cp .env.default .env`
5. Run Grunt tasks:  
  `grunt`  
  `grunt parse`  
  `grunt responsive_images`  
  `grunt imagemin`  

## Usage

### How to install composer

```sh
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```

### Pretty URLs / rewrites

The project contains a `.htaccess` file in case you run Apache with enabled `AllowOverride`. In case you run Nginx you can use the following rewrite directive for your server block configuration:

```
location / {
   try_files $uri $uri/ /index.php?$args;
}
```

## Requirements / Dependencies

* NodeJS / `npm`
* Grunt
* Bower
* Composer

## Credits

* Marian Friedmann ([rnarian](https://github.com/rnarian))

## Version

0.0.1

## License

[MIT](LICENSE)
