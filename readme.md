GSM SMS Sniffer
===========

GSMSniffer 借助 Osmocom-BB 平台,对2G网络短信嗅探抓取的一个Demo
实现自动载入系统/扫描基站与抓取短信并存入数据库的过程
项目公开代码为Python处理部分,完整框架演示可参考:

[http://le4f.net/post/post/gsm-sniffer-hacking-toolkits-demo](http://le4f.net/post/post/gsm-sniffer-hacking-toolkits-demo)

### 文件说明
=======
```
.
├── smshack.py(核心代码)
├── smssniff.mov(演示视频)
├── gsmhack
│   ├── scan.sh(调用OsmocomBB扫描基站)
│   ├── sniff.sh(调用OsmocomBB嗅探基站短信)
│   ├── start_osmbb.sh(调用OsmocomBB载入系统)
│   └── Demo
│          ├── sms.sql(导入Mysql数据库)
│          └── test.py(测试,发送短信数据包)
└── readme.md(项目说明)
```

### 工具使用

需求配置好Osmocom-BB环境的PC/C118嗅探手机/修改数据库连接信息,创建数据库并测试连接成功

```
1.插入C118手机数据线,连接至已配置好Osmocom-BB的PC
2.$ python smshack.py
3.按下C118挂机键，等待手机出现Osmocom-bb系统
4.载入系统成功，输入y回车
5.脚本自动扫描基站信息
6.从返回信息中选择信号较强的基站
7.Sniffer自动启动,此时如抓取到短信则显示并自动push到mysql中
```

### 演示视频
[https://github.com/le4f/gsmsniff/](https://github.com/le4f/gsmsniff/)

### 文章参考
[http://le4f.net/post/post/gsm-sniffer-hacking-toolkits-demo](http://le4f.net/post/post/gsm-sniffer-hacking-toolkits-demo)

[http://le4f.net/post/post/compile-osmocombb&problems-about-gsm-sniffer](http://le4f.net/post/post/compile-osmocombb&problems-about-gsm-sniffer)

### 更新

@2015.3.20 加入去年演示时的Web界面,调用Python ButterFly库,修改相应代码即可套用.

### Author
[le4f](http://le4f.net/)
