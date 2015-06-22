<div class="row clearfix">
	<div class="col-md-9 column">
	<h3>提示</h3>
	<b>workerman只是一个代码包，如果php环境满足要求，下载后即可使用，实际上没有安装过程。
	<br>workerman对php环境的要求是：
	<br>1、php>=5.3.3，可以运行命令 php -v 查看版本
	<br>2、Linux系统要求php安装了posix和pcntl扩展，可以运行php -m 查看是否安装了这两个扩展
	<br>如果以上两个条件都满足，可以直接下载使用workerman
	</b>
	<h2>全新系统参考以下安装教程</h2>
	<h3>centos系统安装教程</h3>
	<h5>1、命令行运行<code>yum install php-cli php-process  git gcc  php-devel php-pear libevent-devel</code></h5>
	<h5>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code> 提示libevent installation [autodetect]: 时按回车</h5>
	<h5>3、命令行运行<code>echo extension=libevent.so > /etc/php.d/libevent.ini</code></h5>
	<h5>4、命令行运行<code>git clone https://github.com/walkor/workerman</code></h5>
	<h5>5、参考<a href="http://doc3.workerman.net/getting-started/simple-example.html" target="_blank">手册</a>写例子运行或者从主页下载<a href="/applications">demo</a>运行</h5>
	<br>
	<h3>debian/ubuntu系统安装教程(如果不是root用户请用sudo 后面加命令)</h3>
	<h5>1、命令行运行<code>apt-get install php5-cli git gcc php-pear php5-dev libevent-dev</code></h5>
	<h5>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code> 提示libevent installation [autodetect]: 时按回车</h5>
	<h5>3、命令行运行<code>echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini</code></h5>
	<h5>4、命令行运行<code>git clone https://github.com/walkor/workerman</code></h5>
	<h5>5、参考<a href="http://doc3.workerman.net/getting-started/simple-example.html" target="_blank">手册</a>写例子运行或者从主页下载<a href="/applications">demo</a>运行</h5>
	<br>
	<h3>说明</h3>
	<h5>1、第一步安装php相关环境，包括<a href="http://php.net/manual/zh/features.commandline.php" target="_blank">php cli</a>，workerman运行在php cli下，如果已经安装好php环境则不用安装；
	php-process（一般centos系统下需要安装）为进程控制相关扩展，
	包括<a href="http://php.net/manual/zh/book.posix.php" target="_blank">posix</a>和<a href="http://php.net/manual/zh/book.pcntl.php" target="_blank">pcntl</a>；
	git是一款免费、开源的分布式版本控制系统，用于下载或者更新workerman源代码（如果手动下载zip文件则可以不用安装git，并跳过安装步骤中的第4步）;
	gcc、php-devel、php-pear、libevent-devel用于安装php的<a href="http://php.net/manual/zh/book.libevent.php" target="_blank">libevent</a>扩展，如果不想安装libevent则可以省略并跳过安装步骤中的第2和第3步；</h5>
	<h5>2、第二步和第三步通过pecl安装libevent扩展，并配置扩展的ini文件（安装libevent扩展不是必须的，libevent扩展可以让php使用更高级的事件库，在并发量很高时发挥作用，如果并发量比较低，例如5000并发，可以不用安装）</h5>
	<h5>3、第四步是通过git下载workerman的应用程序，这里默认下载的是workerman的Demo程序，如果下载workerman的其他应用程序可以修改地址，例如下载workerman-chat则命令为git clone https://github.com/walkor/workerman-chat。
	如果手动下载过了想要的workerman应用程序，则此步骤可以省略。</h5>
	
	<h5><b>总结：如果已经安装了php环境，则可以尝试（跳过第一、二、三、四步）,直接下载workerman使用</b></h5>
	<h3>编译安装workerman的php环境(以centos为例)</h3>
<h5>1、 yum install wget gcc git php-devel php-pear libevent-devel libxml2-devel cmake</h5>
<h5>2、 wget  http://cn2.php.net/distributions/php-5.6.8.tar.gz              (下载php)</h5>
<h5>3、 tar zxvf php-5.6.8.tar.gz</h5>
<h5>4、 cd php-5.6.8</h5>
<h5>5、 ./configure --enable-posix --enable-pcntl</h5>
<h5>6、 make</h5>
<h5>7、 make install</h5>
<h5>8、 pecl install channel://pecl.php.net/libevent-0.1.0</h5>
<h5>9、 echo extension=libevent.so > /etc/phpd/libevent.ini</h5>
<h5>10、 git clone https://github.com/walkor/workerman</h5>
<h5>5、参考<a href="http://doc3.workerman.net/getting-started/simple-example.html" target="_blank">手册</a>写例子运行或者从主页下载<a href="/applications">demo</a>运行</h5>
	</div>
	<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
	<div class="col-md-3 column">
	
	</div>
</div>
