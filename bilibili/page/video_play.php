<?php
		$video_id = $_COOKIE['video_id'];
		$pdo = new PDO("mysql:host=localhost;dbname=bilibili","admin","admin");
		$pdo->
setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$req_video_comment = $pdo->query("select * from video_comment where video_id ='{$video_id}'");

		$req_video_info = $pdo->query("select * from video_info where video_id ='{$video_id}'");
		$req_video_info_data = $req_video_info->fetch(PDO::FETCH_ASSOC);

		$req_video_danmu = $pdo->query("select * from video_danmu where video_id ='{$video_id}'");

		$req_video_danmu_num = $pdo->query("select count(*) from video_danmu where video_id ='{$video_id}'");

?>
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
						<div class="head_pic_banner">
							<div class="nav_user_info_board">
								<div class="nav_user_info"></div>
								<div class="nav_logout_button">退出</div>
							</div>
							<img class="head_pic" src=<?php 
							if (isset($_COOKIE["user_head_sub_url"])) {
								echo $_COOKIE["user_head_sub_url"];
							}else
							{
								echo "";
							};
							?>></div>
						<li>
							<a href="user_info.php">消息</a>
						</li>
						<li>
							<a href="user_info.php">动态</a>
						</li>
						<li>
							<a href="user_info.php">收藏夹</a>
						</li>
						<li>
							<a href="user_info.php">历史</a>
						</li>
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
						<a href="../index.php">首页</a>
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
			<div class="main_video_info">
				<div class="video_info">
					<p class="video_tittle">
						.
						<?php
											echo $req_video_info_data['video_tittle'];
											?></p>
					<p class="video_zone">
						主页 >
						<?php
											echo $req_video_info_data['video_zone'];
											?></p>
					<p class="video_date">2017-3-1 00:00</p>
					<br>
					<br>
					<ul class="video_play_info">
						<li>
							<img src="../img/play_times.png" style="float: left;margin-right: 10px;">8.3W</li>
						<li>
							<img src="../img/video_danmu.png" style="float: left;margin-right: 10px;">2987</li>
						<li style="width: 150px;border-right: 1px solid #e5e9ef;">
							<img src="../img/video_board.png" style="float: left;margin-right: 10px;">全站最高排名1</li>
						<li style="width: 120px;">
							<img src="../img/video_coin.png" style="float: left;margin-right: 10px;">
							硬币
							<?php
												echo $req_video_info_data['video_coin'];
											?></li>
						<li>
							<img src="../img/video_like.png" style="float: left;margin-right: 10px;">收藏1W</li>
					</ul>
				</div>
				<div class="user_info">
					<p class="user_name">韦德戈林</p>
					<p class="user_brief">网易云ID：Toch_Her , 我是一个用户demo , 23333333</p>
					<p class="video_count">投稿 : 1W</p>
					<p class="user_fan">粉丝 : 123456789</p>
					<div class="follow_button">+ 关注</div>
					<div class="charge_button">充电</div>
				</div>
				<div class="adv">
					<img src="../img/adv1.png"></div>
			</div>
		</div>
		<br>
		<br>
		<div class="main_video_play">
			<div class="main_video">
			<div class="danmu_view_banner" id="danmu_view_banner"></div>
			<div class="danmu_item"></div>
				<video width="860" height="647" style="background-color: black;" controls >
					<source src="../video/demo.mp4" type="video/mp4"></video>
			</div>
			<div class="main_danmu">
				<div class="main_danmu_info">
					<span style="font-size: 18px;color: black;font-weight: 700;">1</span>
					人正在看 ,
					<?php
									$row_num = $req_video_danmu_num->
					fetch();
									echo $row_num[0];
								?>条弹幕
				</div>
				<div class="main_danmu_content">
					<ul class="main_danmu_tittle">
						<li>
							<span class="time">时间</span>
							弹幕内容
						</li>
					</ul>
					<ul class="main_danmu_list">
						<?php
							while($row=$req_video_danmu->
						fetch()){
        						echo '
						<li>
							<' . 'span class="time">' . $row['danmu_date'] . '</' . 'span>
							' . $row['danmu_content'] . '
						</li>
						';
							}
  						?>
					</ul>
					<div class="main_danmu_history">历史弹幕</div>
				</div>
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
		<br>
		<br>
		<div class="main_function">
			<ul class="main_function_list">
				<li>
					<img src="../img/link.png">
					<p class="function_name">分享</p>
					<p class="function_data">593</p>
				</li>
				<li>
					<img src="../img/like_video.png">
					<p class="function_name">收藏</p>
					<p class="function_data">32347</p>
				</li>
				<li>
					<img src="../img/app.png">
					<p class="function_name">用手机看</p>
					<p class="function_data">离线看更方便</p>
				</li>
				<li>
					<img src="../img/icon.png">
					<p class="function_name">硬币</p>
					<p class="function_data">3609</p>
				</li>
			</ul>
			<img src="../img/charge.png" style="float: right;"></div>
		<br>
		<br></div>

	<div class="footer">
		<div class="footer_banner">
			<div class="footer_left_banner">
				<div class="footer_video_tag">
					<ul class="video_tag_list">
						<li>手机游戏</li>
						<li>命运冠位指定</li>
						<li>Fate⁄Grand Order</li>
						<li>攻略向视频</li>
						<li>震惊部门</li>
						<li>首次投稿</li>
						<li>有毒</li>
						<li>循环</li>
						<li>攻略</li>
						<li>动漫</li>
						<li class="add_tag"></li>
					</ul>
				</div>
				<div class="footer_video_brief">
					<p class="video_brief">
						网易云ID：Toch_Her
						<br>我是一个用户demo , 233333333333</p>
				</div>
				<div class="footer_video_comment">
					<img class="head_pic_comment" src=<?php 
							if (isset($_COOKIE["user_head_sub_url"])) {
								echo $_COOKIE["user_head_sub_url"];
							}else
							{
								echo "";
							};
							?>
					>
					<div class="comment_submit_button">发表评论</div>
					<textarea class="comment_input" type="text" name="comment_content" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。"></textarea>
					<div class="show_comment_content">
						<ul class="show_comment_content_list">
							<?php
							while($row=$req_video_comment->
							fetch()){
        						echo '
							<div class="comment_banner">
								<img class="head_pic_comment" src='.$row['user_head_sub_url'].'>
								<li>
									<p class="user_account">'.$row['user_account'].'</p>
									<br>
									<p class="comment_content">'.$row['comment_content'].'</p>
								</li>
							</div>
							';
							}
  						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer_right_banner">
				<span>大家围观的直播</span>
				<div class="small_adv_banner">
					<img src="../img/small_adv.png"></div>
			</div>
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
	<script src="../script/video_play_function.js"></script>
	<script src="../script/cookie_idus.js"></script>
</body>
</html>