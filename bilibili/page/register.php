<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="../style/register.css"></head>
<body>
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
						<a href="#">注册</a>
					</li>
				</ul>
			</div>
			<div class="nav_right_search nav_right">
				<input class="search" type="text" name="search" placeholder="搜索">
				<div class="nav_right_search_button"></div>
			</div>
		</div>
	</div>
	<div class="top">
		<div class="top_content"></div>
	</div>
	<div class="line">
		<div class="line_log_img"></div>
		<div class="vertical_line"></div>
	</div>
	<div class="main">
		<div class="main_function_banner">
			<div class="main_user_input">
				<input class="user_account user_input" type="text" name="user_account" placeholder="昵称 ( 6 - 20 个字符 , 例 : 哔哩哔哩 )">
				<div class="user_account_tip input_tip"></div>
			</div>
			<div class="main_password_input">
				<input class="user_password user_input" type="password" name="user_password" placeholder="密码 ( 6 - 20个字符 , 区分大小写 )">
				<div class="password_tip input_tip"></div>
			</div>
			<div class="main_phone_input">
				<input class="phone user_input" type="text" name="phone" placeholder="填写常用手机号">
				<div class="phone_tip input_tip"></div>
			</div>
			<input class="agreement" name="agreement" type="checkbox" value="" />
			我已同意
			<a href="#" class="agreement_a">《哔哩哔哩弹幕网用户使用协议》</a>
			和
			<a href="#" class="agreement_a">《哔哩哔哩弹幕网账号中心规范》</a>
			<div class="main_button_register">注册</div>
		</div>
	</div>
	<div class="bottom">
		<div class="bottom_wrap">
			<div class="bottom_link">
				<div class="bottom_link_left">
					<div class="bottom_link_left_title">Bilibili</div>
					<ul class="bottom_link_left_list">
						<li>
							<a href="">关于我们</a>
						</li>
						<li>
							<a href="">友情链接</a>
						</li>
						<li>
							<a href="">哔哩哔哩周边</a>
						</li>
						<li>
							<a href="">联系我们</a>
						</li>
						<li>
							<a href="">加入我们</a>
						</li>
						<li>
							<a href="">官方认证</a>
						</li>
					</ul>
				</div>
				<div class="bottom_link_mid">
					<div class="bottom_link_mid_title">传送门</div>
					<ul class="bottom_link_mid_list">
						<li>
							<a href="#">帮助中心</a>
						</li>
						<li>
							<a href="#">高级弹幕</a>
						</li>
						<li>
							<a href="#">活动专题页</a>
						</li>
						<li>
							<a href="#">侵权申诉</a>
						</li>
						<li>
							<a href="#">分院帽计划</a>
						</li>
						<li>
							<a href="#">活动中心</a>
						</li>
						<li>
							<a href="#">用户反馈论坛</a>
						</li>
						<li>
							<a href="#">壁纸站</a>
						</li>
						<li>
							<a href="#">名人堂</a>
						</li>
					</ul>
				</div>
				<div class="bottom_link_right">
					<div class="bottom_link_right_phone">
						<img src="../img/phone.png">
						<a href="#">APP下载</a>
					</div>
					<div class="bottom_link_right_blog">
						<img src="../img/blog.png">
						<a href="#">新浪微博</a>
					</div>
					<div class="bottom_link_right_wechat">
						<img src="../img/wechat.png">
						<a href="#">官方微信</a>
					</div>
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
	<script src="../script/register_page_function.js"></script>
</body>
</html>