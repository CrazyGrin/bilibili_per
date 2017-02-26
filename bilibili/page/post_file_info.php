<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>post_info</title>
	<link rel="stylesheet" type="text/css" href="../style/post.css"></head>
<body style="background: url(../img/post_back.jpg) no-repeat;">
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
				<ul class="nav_right_log_list">
					<li>
						<a href="login.php">登录</a>
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
	<div class="main">
		<div class="main_post">
<!-- 			<div class="main_chose_button_banner">
				<div class="main_chose_button">
					<img class="main_chose_button_img" src="../img/post.png">
					<div class="main_chose_button_word">
						<p class="change_word" style="padding: 0;margin: 0; color: #FFF;font-size: 22px;">选择视频</p>
						<p style="padding: 0;margin: 0;font-size: 10px;color: #b1e6f7;">请上传MP4或FLV</p>
					</div>
				</div>
			</div> -->
			<br><br><br><br><br><br><br>
			<div class="main_post_info">
				<span style="color: #aaa;font-size: 16px;">基本信息</span>
				<br>
				<hr>
				<div class="main_post_video_class">
					<br>
					<br>
					<div style="clear: both;">投稿类型</div>
					<div class="class_checkbox">
						<div class="checkbox_round" id="personal"></div>
						自制
					</div>
					<div class="class_checkbox">
						<div class="checkbox_round" id="notpersonal"></div>
						转载
					</div>
					<input class="notpersonal_decoration" type="text" name="class_decoration" placeholder="转载视频请注明来源，来源会显示在视频播放页的简介中(选填)"></div>
				<br>
				<br>
				<div class="main_post_video_zone">
					<div style="clear: both;">选择分区</div>
					<ul class="zone_list">
						<li class="zone_item">动画</li>
						<li class="zone_item">番剧</li>
						<li class="zone_item">音乐</li>
						<li class="zone_item">舞蹈</li>
						<li class="zone_item">游戏</li>
						<li class="zone_item">科技</li>
						<li class="zone_item">娱乐</li>
						<li class="zone_item">鬼畜</li>
						<li class="zone_item">电影</li>
						<li class="zone_item">电视剧</li>
						<li class="zone_item">时尚</li>
						<li class="zone_item">生活</li>
						<li class="zone_item">广告</li>
					</ul>
				</div>
				<br>
				<br>
				<div class="main_post_video_title">
					投稿标题
					<br>
					<br>
					<input type="text" class="video_title" name="video_title" placeholder="请输入稿件标题"></div>
				<br>
				<br>
				<div class="main_post_video_brief">
					视频简介
					<br>
					<br>
					<textarea type="text" name="video_brief" class="video_brief" placeholder="请输入视频简介"></textarea>
				</div>
				<br>
				<br>
				<div class="main_submit_button">提交稿件</div></div>
		</div>
		<div class="main_help"></div>
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
				<div class="bottom_info_block">
					<p>互联网ICP备案：沪ICP备13002172号-3</p>
					<p>沪ICP证：沪B2-20100043</p>
				</div>
				<div class="bottom_info_block" style="margin-left: 50px;">
					<p>违法不良信息举报邮箱：help@bilibili.com</p>
					<p>违法不良信息举报电话：4000233233 转 3</p>
					<p>
						<a href="http://www.shjbzx.cn/" style="font-size: 10px;">上海互联网举报中心</a>
					</p>
				</div>
			</div>
		</div>
	</div>
<!-- 	<form class="post_form" enctype="multipart/form-data" method="post" name="file_info" action="post_success.php">
		<input class="chose_file" accept="audio/mp4,video/mp4 " type="file" name="file">
		<input class="submit_file" type="submit" name="submit" style="display: none;"></form> -->
<!-- 	<script src="../script/post_page_function.js"></script> -->
</body>
</html>