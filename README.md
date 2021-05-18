# docker-nginx_php_mysql
#### 主要功能

自定义、一键式部署WEB环境，主要用于部署**PHP靶机**



#### 使用方法

* 将项目克隆到本地
* 进入`www`文件夹，添加或修改内部的`.php`文件
* 修改`www/include`文件夹内的`flag`文件（非CTF靶场环境可以直接删掉`flag`文件）
* 修改`docker-compose.yml`自定义文件映射和端口映射



#### 容器使用相关：

```
docker-compose up -d # 创建并开启容器项目
docker-compose down  # 删除容器项目
docker-compose ps    # 查看当前项目
docker-compose stop  # 停止运行
docker-compose start # 开始运行
docker-compose restart # 重启
docker-compose rm    # 删除容器项目
```





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

