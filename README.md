# Insatll
Clone it and run `composer install`

# Config
Rename `app/config.php.example` and check the options there
```
cp app/config.php.example app/config.php
```

# Security !!
It's advisable that you set secure permissions to app and core folders

## Fix permissions
(Atention! if suExec is on, folders need 755 not 775)
```
find . -type d -exec chmod 775 {} +
find . -type f -exec chmod 664 {} +
chmod 660 app/config.php
chmod 644 .htaccess
```
## Add to main .htaccess
vim .htaccess
```
# Deny browser folder exploring
Options -Indexes
# Block composer.json snifing just in case
<Files composer.json>
order deny,allow
deny from all
</Files>
# Block main folders.
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^app/ - [F,L]
RewriteRule ^core/ - [F,L]
RewriteRule ^vendor/ - [F,L]
</IfModule>

```

## Protect .git and vendor folders
vim .git/.htaccess
vim vendor/.htaccess
```
deny from all
```

## Add SSL certif
Come on! Use letsencrypt... is free!