<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ /sernap/index.php/$1 [L]
</IfModule>
<IfModule !mod_rewrite.c>
    ErrorDocument 404 /sernap/index.php
</IfModule>