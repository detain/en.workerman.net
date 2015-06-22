<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		Json Rpc远程调用框架
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-json-rpc
			</h2>
			<p class="f16">
				JSON  (JavaScript Object Notation)是一种用于在组件间交互信息的数据交换格式，其是以JavaScript 为基础的数据表示语言。既方便于人的读写习惯，又有利于计算机的解析和生成。
				</p>
				<p class="f16">
				RPC（Remote Procedure Call）是远程调用，既客户端通过某种协议向服务器发起请求并获得结果。RPC使得开发分布式网络程序非常方便，并且能极大限度的将网络系统的各个部分解耦，方便后续开发、维护。
				</p>
				<p class="f16">
				workerman-json-rpc是一个以workerman作为服务器容器，使用Json作为协议简单高效的RPC远程调用框架。
				</p>
			<h3>
				特性
			</h3>
			<ul>
			<li>使用PHP开发</li>
			<li>PHP多进程</li>
			<li>支持libevent事件轮询库，支持高并发</li>
			<li>支持服务平滑重启</li>
			<li>支持PHP文件更新检测及自动加载</li>
			<li>使用json作为协议，开发调试非常高效</li>
			<li>集成统计监控模块，方便查看服务调用量、成功率、耗时等情况</li>
			<li>自带PHP客户端，支持异步并发调用，实现并行计算</li>
			</ul>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-vmstat">vmstat服务器状态监控服务</a>
				<a class="list-group-item" href="/web-sender">WEB消息推送框架</a>
				<a class="list-group-item" href="/browserquest">BrowserQuest PHP版本</a>
				<a class="list-group-item" href="/camera">摄像头视频直播</a>
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<div class="list-group-item active">
					Json RPC远程调用框架
				</div>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
			</div>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载Json RPC远程调用框架</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-jsonrpc&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-jsonrpc&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-jsonrpc" target="_blank"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/jsonrpczip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $jsonrpc_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				服务端开发示例
			</h3>
			<h4>创建文件./applications/JsonRpc/Services/User.php</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">User<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;....<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span></span></code></pre>
			<h4>启动服务如图：</h4>
			<p><code>php start.php start -d</code></p>
			<img src="/img/workerman-jsonrpc-start.png" alt="php json rpc 启动界面"/>
			<br/>
			<h3>客户端使用示例</h3>
			客户端文件位置Applications/JsonRpc/Clients/RpcClient.php，拷贝到项目任意位置即可使用
			<h4>客户端同步调用</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include_once&nbsp;</span><span style="color: #DD0000">'yourClientDir/RpcClient.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$address_array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;配置服务端列表<br /></span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">config</span><span style="color: #007700">(</span><span style="color: #0000BB">$address_array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$uid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">567</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;User对应applications/JsonRpc/Services/User.php&nbsp;中的User类<br /></span><span style="color: #0000BB">$user_client&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #DD0000">'User'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;getInfoByUid对应User类中的getInfoByUid方法<br /></span><span style="color: #0000BB">$ret_sync&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /></span></span></code></pre>
			<h4>客户端异步调用</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include_once&nbsp;</span><span style="color: #DD0000">'yourClientDir/RpcClient.php'</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;服务端列表<br /></span><span style="color: #0000BB">$address_array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'</span><span style="color: #007700">,<br />&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'<br />&nbsp;&nbsp;</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;配置服务端列表<br /></span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">config</span><span style="color: #007700">(</span><span style="color: #0000BB">$address_array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$uid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">567</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user_client&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #DD0000">'User'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;异步调用User::getInfoByUid方法<br /></span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asend_getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;异步调用User::getEmail方法<br /></span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asend_getEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">这里是其它的业务代码<br /></span><span style="color: #007700">....................<br />....................<br /><br /></span><span style="color: #FF8000">//&nbsp;需要数据的时候异步接收数据<br /></span><span style="color: #0000BB">$ret_async1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arecv_getEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret_async2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arecv_getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">这里是其他业务逻辑<br /></span></span></code></pre>
			<h3>初始化（端口及进程数）</h3>
			<p>初始化文件位置 ./Applications/JsonRpc/start.php</p>
			<h3>workerman-json-rpc集成了统计监控模块，界面如下（地址：http://ip:55757 <a href="http://monitor.workerman.net/" target="_blank">demo</a>）</h3>
			<img src="/img/statistics.png" alt="json rpc统计监控系统界面"/>
		</div>
	</div>