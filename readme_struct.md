# 目录说明

~~~bash
.
├── apidoc.json 生成 api 文档的配置文件，工具文档 http://apidocjs.com/
├── app
│   ├── Caches
│   │   ├── BaseCache.php
│   │   └── MemorabiliaCache.php    缓存-大事记背景音乐
│   ├── Console
│   │   ├── Commands    各种脚本
│   │   └── Kernel.php  定时任务
│   ├── Exceptions
│   │   ├── ApiException.php 异常统一抛出封装的方法
│   │   ├── Consts.php       异常状态码对应的含义
│   │   └── Handler.php      处理异常：API统一异常输出格式、线上错误上报
│   ├── Helpers 云天河封装的工具库
│   │   ├── CommonTool.php       常用工具
│   │   ├── CurlRequest.php      cURL 封装
│   │   ├── DistributedLock.php  分布式事务锁
│   │   ├── ExpectValue.php      一元线性回归算法
│   │   ├── Location.php         获取客户端IP、对应地理位置
│   │   ├── Page.php             laypage 分页
│   │   ├── Response.php         API 业务类统一响应封装
│   │   └── Token.php            获取随机数
│   ├── helpers.php 全局函数封装，在 composer.json 中的 autoload 封装
│   ├── Http
│   │   ├── Controllers
│   │   ├── Kernel.php    中间件注入
│   │   ├── Middleware    书写的中间件
│   │   ├── Requests      - 暂未使用 -
│   │   └── Route         在 app/Providers/RouteServiceProvider.php 中注入的这些路由文件
│   ├── Jobs
│   │   ├── AnalysisVisitorJob.php    访问足迹采集服务
│   │   ├── EmailJob.php              邮件队列服务
│   │   ├── ... 
│   │   └── Job.php
│   ├── Libs
│   │   ├── HTMLPurifier    库：过滤 xss
│   │   ├── Michelf         库：markdown 转 html
│   │   ├── qcloudcos       库：腾讯COS对象存储
│   │   └── Smtp            库：发送邮件
│   ├── Models
│   │   ├── AdminAuth       管理员相关表
│   │   ├── Blog            博文相关表
│   │   ├── Logs            各种日志表
│   │   └── User.php        用户表
│   ├── Providers
│   │   ├── AppServiceProvider.php
│   │   ├── RouteServiceProvider.php
│   ├── Bussiness
│   │   ├── Admin      后台：各种仓储
│   │   ├── Article    前台：文章仓储
│   │   ├── Chat       前台：聊天仓储：在线客服（TODO）、图灵机器人聊天
│   │   ├── Comic      后台：漫画爬虫仓储
│   │   ├── Comment    前台：评论仓储
│   │   ├── Index      前台：首页仓储
│   │   ├── Log        前台：各种日志仓储
│   │   ├── OAuth2     前台：oauth2.0方式登录的方式
│   │   └── Wechat     前台：微信公众号系列仓储
│   ├── Services
│   │   ├── Api        模拟调用服务：快递100接口、酷狗音乐接口、百度翻译接口、图灵机器人
│   │   ├── Auth       权限服务：前台、后台通用
│   │   ├── Cdn        分布式内容分发服务：腾讯、七牛、sm.ms
│   │   ├── CommonService.php    公共静态信息存储服务
│   │   ├── Crypt      加密服务：RSA
│   │   ├── OAuth2     oauth2.0服务：github、qq、sina微博
│   │   ├── Tool       工具服务：导出（execl、csv）、数据过滤、彩色日志、发送邮件
│   │   └── Verify     验证码服务：滑动验证码
│   └── Traits 可复用模块
│       ├── AdminFooterMarkTrait.php   管理员足迹记录
│       ├── CheckUserTrait.php         验证用户是否处于登录状态
│       ├── LimitIpTrait.php           限制单个IP访问频率
│       ├── LogLocationTrait.php       用户详细地址
│       └── UserHitLogTrait.php        用户访问或者操作某些模块的日志
├── artisan
├── bootstrap
├── composer.json
├── config
│   ├── app.php
│   ├── cache.php
│   ├── compile.php
│   ├── database.php
│   ├── excel.php
│   ├── filesystems.php
│   ├── google.php        谷歌验证码配置：app/Services/CommonService.php 其中：`系统，登录信息`->login_type设置为google即可使用
│   ├── hlz_auth.php      权限配置，这里主要配置 超级管理员 ID
│   ├── image.php
│   ├── log_colored.php   带颜色的日志输出 LogService 属于该服务
│   ├── oauth.php         oauth2.0第三方登录相关配置
│   ├── queue.php
│   ├── sentry.php        Sentry 异常收集配置
│   ├── session.php
│   ├── static_source_cdn.php  前端静态资源 CDN 列表
│   ├── swoole.php        Swoole 初始化服务配置
│   └── view.php
├── database
├── gulpfile.js           前端自动化 Gulp 配置
├── package.json
├── phpspec.yml
├── phpunit               单元测试工具
├── phpunit.xml
├── public
│   ├── 404.html
│   ├── books           云天河 js 解析的`漫画台`动漫资源
│   ├── doc             apidoc 生成的接口文档     
│   ├── err             
│   ├── favicon.ico     站点 icon 小图标
│   ├── index.php
│   ├── Info
│   │   └── law.html    法律声明
│   ├── mobile
│   │   └── index.html  VUE 生成的静态页
│   ├── Others
│   │   ├── books
│   │   └── memorabilia  大事记
│   ├── robots.txt       搜索引擎蜘蛛爬取文件说明
│   ├── sitemap.xml
│   ├── static          VUE 生成的静态资源
│   │   ├── css
│   │   ├── img
│   │   └── js
│   ├── static_pc       PC端静态资源
│   │   ├── admin
│   │   ├── css
│   │   ├── img
│   │   ├── js
│   │   └── plugins     PC端前台JS插件，统一存储放到这里面
│   └── Umeditor
│       ├── dialogs
│       ├── lang
│       ├── themes
│       ├── third-party
│       ├── umeditor.config.js   富文本配置文件，主要是配置上传图片的路径
│       ├── umeditor.js
│       └── umeditor.min.js
├── readme.md
├── resources
│   ├── assets          自动化工具编译前源码
│   │   ├── js          ES6，通过 Gulp 转 ES5（TODO，应用于PC端）
│   │   ├── plugins     
│   │   ├── README.md
│   │   ├── scss        SCSS，通过 Gulp 转 css
│   │   └── vue         移动端 VUE 项目
│   ├── lang
│   └── views
│       ├── admin       后台模块视图
│       ├── auth
│       ├── key         
│       ├── login       后台登录模块视图
│       ├── module      前台模块视图
│       └── test        测试模块视图
├── server.php
├── storage
│   ├── app
│   ├── backups SQL备份目录
│   │   ├── yth_blog_avatar.template.sql   主业务库
│   │   └── yth_blog_ext.template.sql      日志库
│   ├── framework
│   ├── keys    密钥目录
│   │   ├── rsa_private_key.pem   RSA私钥，更换该密钥对后请执行 php artisan rsa_file 使得前端 RSA 加密功能能正常使用
│   │   └── rsa_public_key.pem    RSA公钥
│   ├── logs
│   ├── shell   
│   │   └── readme.md 站内shell说明
│   └── supervisor  监听服务
│       ├── analysis_visitor_job.conf
│       ├── email_job.conf
│       ├── readme.md                  该服务的详细使用，请查看这个
│       └── swoole_websocket.conf
├── tests    单元测试目录
└── vendor   composer 安装的包
~~~