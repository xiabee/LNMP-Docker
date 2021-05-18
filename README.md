# LNMP-Docker

#### 项目描述

* LNMP：Linux, nignx, mysql php 服务器
* 主要用于一键式部署**WEB环境**，如**PHP靶机**等



#### 站点根目录

* 宿主机`./www`映射到容器`/var/www/html`



#### 更新说明

* 由于`libssl`官方源进行了一次大更新，最新版本的`libssl`会产生兼容性问题，无法编译PHP的`Dockerfile`，故在Dockerfile中手动安装了旧版本的`libssl`

* 调整了目录结构，更新了数据库配置

  



#### 使用方法

* 将项目克隆到本地
* 进入`www`文件夹，添加或修改内部的`.php`文件
* 修改`docker-compose.yml`自定义文件映射和端口映射
* 运行容器



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
├── FLAG
├── mysql
│   ├── init
│   │   ├── privileges.sql
│   │   └── schema.sql
│   └── my.cnf
├── nginx
│   └── nginx.conf
├── php
│   ├── Dockerfile
│   ├── php-fpm.conf
│   └── php.ini
├── README.md
└── www
    ├── config.php
    └── index.php

5 directories, 12 files
```



#### 文件说明

* `docker-compose.yml`：项目编排文件
* `mysql`：数据库相关
  * `mysql.cnf`：



