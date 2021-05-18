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
* `my.cnf`：自定义配置文件
* `privileges.sql`：设置数据库用户权限
* `schema.sql`：创建数据库表单等
* `nginx.conf`：nginx自定义配置
* `index.php`：站点首页
* `config.php`：站点配置信息



#### 常见问题

* 数据库启动失败：
  * 新版`mysql8`不允许高权限的用户配置文件，检查`my.cnf`文件权，过高则将其设置为`644`
  * 不要在`Windows`目录下通过`WSL/WSL2`启动本项目......`Windows`目录下文件权限默认为`777`，会导致上述权限过高而无法启动`MySQL`的问题。正确的做法应该为在`WSL`的家目录中操作。

