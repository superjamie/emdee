# emdee

A dynamic Markdown renderer

## Description

Live rendering of [GitHub Flavored Markdown](https://help.github.com/articles/github-flavored-markdown/) using [Parsedown](https://github.com/erusev/parsedown) with [Solarized CSS](http://thomasf.github.io/solarized-css/).

## Requirements

Apache `httpd` with `mod_rewrite` and Overrides:

~~~
<Directory "/var/www/html">
    AllowOverride All
    Require all granted
</Directory>
~~~

Should be trivial to get working with `lighttpd` or `nginx`. Feel free to send a pull request to this `README` documenting the steps.

## Usage

Clone this into the `/md/` directory on your webserver.

Put Markdown documents in the same place, like so:

~~~
index.php
Parsedown.php
solarized-light.css
myfilename.md
~~~

Make sure the webserver has access to read all the files.

Visit `/md/myfilename` to see rendered HTML.

You may optionally create a file `index.md` to display if no `filename` parameter is passed.

## License

GNU Affero GPL v3

## Authors

Jamie Bainbridge (jamie.bainbridge@gmail.com)
