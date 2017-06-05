# 序言

## Laravel5.5 入门教程
本教程将介绍如何使用 `Laravel` 一步一步构建一个简单的问答应用，通过本教程，你将学到 `Laravel` 基础知识。不仅如此，本教程还会对这些基础知识点进行延伸扩展。

## Laravel 安装指南
> 本教程注重实战，开发环境根据自己的爱好去搭建。跟着本教程学习的小伙伴，默认您已了解 `Laravel` 的基本知识。所以开发环境搭建部分省略，如果这方面有疑问可以进群讨论交流。

## 服务器要求
Laravel 框架会有一些系统上的要求，你需要确保你的开发环境安装了下面的几个拓展：
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* **fileinfo**

## 安装 Laravel
Laravel 使用 `Composer` 来管理代码依赖。所以，在使用 `Laravel` 之前，请先确认你的电脑上安装了 `Composer`。
> 对于没有任何 `Composer` 基础的小伙伴建议看一下网上的教程，这里给大家建议一下：
*  [后盾网 Composer 教程](http://www.houdunren.com/houdunren18_49_.html)

### 通过 Laravel 安装工具
首先，使用 Composer 下载 Laravel 安装包：

```
composer global require "laravel/installer"
```

请确定你已将 `~/.composer/vendor/bin` 路径加到 `PATH`，只有这样系统才能找到 `laravel` 的执行文件。

一旦安装完成，就可以使用 `laravel new` 命令在指定目录创建一个新的 `Laravel` 项目。

### 通过 Composer Create-Project
除此之外，你也可以通过 `Composer` 在命令行运行 `create-project` 命令来安装 `Laravel`：
```
composer create-project --prefer-dist laravel/laravel blog
```

## 服务器配置
在安装 `Laravel` 之后，你需要配置你的 `Web` 服务器的根目录为 `public` 目录。 这个目录的 `index.php` 文件作为所有 `HTTP` 请求进入应用的前端处理器。

### Apache
Laravel 框架通过 `public/.htaccess` 文件来让 `URL` 不需要 `index.php` 即可访问。在 `Apache` 启用 `Laravel` 之前，请确认是否有开启 `mod_rewrite` 模块，以便 `.htaccess` 文件发挥作用。

如果 `Laravel` 附带的 `.htaccess` 文件在 `Apache` 中无法使用的话，请尝试下方的做法：

```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

### Nginx
如果你使用 `Nginx` ，在你的网站配置中加入下述代码将会转发所有的请求到 `index.php` 前端控制器。

```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## 目录权限
安装 `Laravel` 之后， `Linux` 和 `Mac` 系统需要配置一些权限 。 `storage` 和 `bootstrap/cache` 目录应该允许你的 `Web` 服务器写入，否则 `Laravel` 将无法写入。

## 后续教程
* 《Laravel 进阶教程》
* 《Laravel 扩展》
* 《Laravel Vue 实战》

## 版权声明
本教程归 [晚黎](http://iwanli.me) 所有
