<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>video_play</title>
	<link rel="stylesheet" type="text/css" href="../style/video_play.css"></head>
</head>
<body>
	<div class="top">
		<div class="blur">
			<img src="../img/top_banner.png" style="filter: blur(3px);top: 0;z-index: 0;"></div>
		<div class="nav_banner">
			<div class="nav">
				<ul class="nav_left_menu">
					<li>
						<div class="icon"></div>
						<a class="nav_a" href="../index.php">主站</a>
					</li>
					<li>
						<a href="#">画友</a>
					</li>
					<li>
						<a href="#">游戏中心</a>
					</li>
					<li>
						<a href="#">直播</a>
					</li>
					<li>
						<a href="#">周边</a>
					</li>
				</ul>
				<div class="nav_right_submit nav_right">投 稿</div>
				<div class="nav_right_log nav_right">
				<ul class="nav_right_user_list">
					<div class="head_pic_banner"><img class="head_pic" src=<?php echo $_COOKIE["user_head_sub_url"] ?>>
					</div>
					<li><a href="">消息</a></li>
					<li><a href="">动态</a></li>
					<li><a href="">收藏夹</a></li>
					<li><a href="">历史</a></li>
				</ul>
					<ul class="nav_right_log_list">
						<li>
							<a class="login_link" href="login.php">登录</a>
						</li>
						<li>
							<a href="register.php">注册</a>
						</li>
					</ul>
				</div>
				<div class="nav_right_search nav_right">
					<input class="search" type="text" name="search" placeholder="搜索">
					<div class="nav_right_search_button"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
	<div class="main_nav_banner">
		<div class="main_nav">
			<ul class="main_nav_list">
				<li>
					<a href="">首页</a>
				</li>
				<li>
					<a href="">动画</a>
				</li>
				<li>
					<a href="">番剧</a>
				</li>
				<li>
					<a href="">音乐</a>
				</li>
				<li>
					<a href="">舞蹈</a>
				</li>
				<li>
					<a href="">游戏</a>
				</li>
				<li>
					<a href="">科技</a>
				</li>
				<li>
					<a href="">生活</a>
				</li>
				<li>
					<a href="">鬼畜</a>
				</li>
				<li>
					<a href="">时尚</a>
				</li>
				<li>
					<a href="">广告</a>
				</li>
				<li>
					<a href="">娱乐</a>
				</li>
				<li>
					<a href="">影视</a>
				</li>
			</ul>
		</div>
		</div>
		<div class="main_video_info_banner">
			<div class="main_video_info"></div>
		</div>
		<br><br>
		<div class="main_video_play">
			<div class="main_video">
				<video width="860" height="647" style="background-color: black;" controls>
  					<source src="../video/demo.mp4" type="video/mp4">
				</video>
			</div>
			<div class="main_danmu">
				<div class="main_danmu_info">
					<span style="font-size: 18px;color: black;font-weight: 700;">1</span>人正在看 , 条弹幕
				</div>
				<div class="main_danmu_content"></div>
			</div>
			<div class="main_send_danmu">
				<div class="main_danmu_send_setting">
					<ul class="danmu_send_setting_list">
						<li style="border-left: 1px solid #e5e9ef;"></li>
						<li style="border-right: 1px solid #e5e9ef;"></li>
					</ul>
				</div>
				<div class="main_danmu_send_input">
					<input class="danmu_input" type="text" name="danmu" placeholder="请在这里输入弹幕">
					<div class="send_danmu_button">发送</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="main_function"></div>
		<br><br>
	</div>
	
	<div class="footer">
	<div class="footer_banner">
	<div class="footer_video_tag"></div>
	<div class="footer_video_adv"></div>
	<div class="footer_video_info"></div>
	<div class="footer_video_coment"></div>
	</div>
	</div>


	<div class="bottom">
		<div class="bottom_wrap">
			<div class="bottom_link">
				<div class="bottom_link_left">
					<div class="bottom_link_left_title">Bilibili</div>
					<ul class="bottom_link_left_list">
						<li>关于我们</li>
						<li>友情链接</li>
						<li>哔哩哔哩周边</li>
						<li>联系我们</li>
						<li>加入我们</li>
						<li>官方认证</li>
					</ul>
				</div>
				<div class="bottom_link_mid">
					<div class="bottom_link_mid_title">传送门</div>
					<ul class="bottom_link_mid_list">
						<li>帮助中心</li>
						<li>高级弹幕</li>
						<li>活动专题页</li>
						<li>侵权申诉</li>
						<li>分院帽计划</li>
						<li>活动中心</li>
						<li>用户反馈论坛</li>
						<li>壁纸站</li>
						<li>名人堂</li>
					</ul>
				</div>
				<div class="bottom_link_right">
					<div class="bottom_link_right_phone">
						<img src="../img/phone.png">APP下载</div>
					<div class="bottom_link_right_blog">
						<img src="../img/blog.png">新浪微博</div>
					<div class="bottom_link_right_wechat">
						<img src="../img/wechat.png">官方微信</div>
				</div>
			</div>
			<div class="bottom_info">
				<div class="bottom_info_block">
					<img src="../img/cooperation.png"></div>
				<div class="bottom_info_block">
					<p>广播电视节目制作经营许可证：（沪）字第1248号</p>
					<p>网络文化经营许可证：沪网文[2013]0480-056号</p>
					<p>信息网络传播视听节目许可证：0910417</p>
				</div>
				<div class="bottom_info_block"><p>互联网ICP备案：沪ICP备13002172号-3</p>
				<p>沪ICP证：沪B2-20100043</p></div>
				<div class="bottom_info_block" style="margin-left: 50px;">
					<p>违法不良信息举报邮箱：help@bilibili.com</p>
					<p>违法不良信息举报电话：4000233233 转 3</p>
					<p><a href="http://www.shjbzx.cn/" style="font-size: 10px;">上海互联网举报中心</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="../script/video_play_function.js"></script>
</body>
</html>