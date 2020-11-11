# docker-nginx_php_mysql
自定义WEB环境

#### 目录结构

```
.
├── docker-compose.yml
├── flag
├── mysql
│   ├── init
│   │   ├── privileges.sql
│   │   └── schema.sql
│   └── mysql.cnf
├── nginx
│   └── nginx.conf
├── php
│   ├── Dockerfile
│   ├── php-fpm.conf
│   └── php.ini
├── README.md
└── www
    ├── include
    │   └── flag
    └── index.php

6 directories, 12 files
```



#### 站点目录:

`./www`

