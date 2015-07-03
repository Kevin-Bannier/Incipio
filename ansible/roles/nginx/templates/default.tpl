upstream phpfpm {
    #server 127.0.0.1:9000;
    server unix:/var/run/php5-fpm.sock;
}

server {
    listen 80;
    server_name localhost;
    root {{ doc_root }};

    error_log   /var/log/nginx/error.log;
    access_log  /var/log/nginx/access.log;

    rewrite     ^/(app|app_dev)\.php/?(.*)$ /$1 permanent;

    location / {
        index       app_dev.php;
        try_files   $uri @rewriteapp;
        add_header  Cache-Control private; # Disable cache
    }

    location @rewriteapp {
        rewrite     ^(.*)$ /app_dev.php/$1 last;
    }

    location ~ ^/(app|app_dev|config)\.php(/|$) {
        fastcgi_pass            phpfpm;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include                 fastcgi_params;
        fastcgi_param           SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param           HTTPS           off;
    }
}
