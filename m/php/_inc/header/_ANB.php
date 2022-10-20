
<!--Dev: 로그인 전일 경우 is_logout 클래스 추가-->
<aside class="anb is_logout">
	<div class="set_inner">
		<div class="anb_menu_head">
			<div class="anb_top_wrap">
				<h2 class="logo_area anb_logo">
					<span class="is_blind">매일 경제</span>
					<svg version="1.1" id="mkLogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="100" h="24" viewBox="0 0 130 30" xml:space="preserve">
						<g style="fill:#000;" >
							<path d="M121 1.2c0 .2.1.3.3.3.7 0 1.3.6 1.4 1.4V29h1.9c1.5-.1 2.6-1.3 2.6-2.8V.8h-5.8c-.3 0-.4.2-.4.4M26.1 1.2c0 .2.1.3.3.3.7 0 1.3.6 1.3 1.4v4.8h-2.8V.8h-5.7c-.2 0-.3.2-.3.3 0 .2.1.3.3.3.7 0 1.3.6 1.3 1.4V29h1.9c1.4-.1 2.5-1.3 2.4-2.7V10.9h2.8V29h2.2c1.4 0 2.3-1.2 2.3-2.8V.8h-5.8c-.1 0-.2.2-.2.4M114.4.8c-.2 0-.3.2-.3.3 0 .2.1.3.3.3.7 0 1.3.6 1.3 1.3v6h-4.5c-.7 0-.7.3-.5.7l1.4 2.2h3.6V29h2c1.4-.1 2.5-1.3 2.4-2.7V.8h-5.7zM88.4.9c-.2 0-.3.2-.3.3 0 .2.1.3.3.3.8 0 1.4.6 1.4 1.4v1.5h-5c-.7 0-.7.3-.5.7l1.2 2h4.3v2.1h-5c-.7 0-.7.3-.5.7l1.2 2h4.3v3.3h1.9c1.6-.1 2.8-1.4 2.7-3V.9h-6zM82.3.8h-14c-.7 0-.7.3-.5.7l1.4 2.3H78c-1.1 5.6-6.3 9.7-10.4 10.9-.3 0-.4.3-.4.5s.4.4.6.4c5.8.2 14-3.9 15.8-12.7.3-1.3-.5-2.1-1.3-2.1"/>
							<path d="M106.7 13.9c.4.7 4.3 6.2 5.1 7.1s1.3 1.2 1.5.2v-4.5c.1-.3-.1-.6-.4-.7-1.8-1.1-3.5-2.5-5-4 1.4-2.1 3.9-7.5 3.9-9.6.1-.8-.6-1.5-1.4-1.6h-11c-.7 0-.7.3-.5.7l1.5 2.4h5.7c-.5 5.9-4.3 13.5-8.1 16.5-.3.2-.4.4-.3.7.1.2.4.2.8.1 1.1-.3 4.9-2.8 8.2-7.3M9 3.9h4v13.7H9V3.9zM2.9 1.2c0 .2.1.3.3.3.7 0 1.3.6 1.4 1.4v14.6c-.1 1.7 1.3 3.2 3 3.3h6.8c1.7 0 3-1.4 3-3V.8H3.2c-.2 0-.3.2-.3.4M83.2 26.8c-3.4 0-6.6-2.2-6.6-4.7s3.2-4.4 6.6-4.4 6.6 2 6.6 4.4-3.2 4.7-6.6 4.7m0-12c-6.7 0-11.1 3.3-11.1 7.4s4.4 7.6 11.1 7.6 11.1-3.6 11.1-7.6-4.4-7.4-11.1-7.4M57 1.1c0 .2.1.3.3.3.7 0 1.4.6 1.4 1.3V14h2.2c1.6-.1 2.8-1.4 2.7-3V.8h-6.3c-.2 0-.3.1-.3.3M44.9 11.3c-2.4.1-4.4-1.8-4.5-4.1.2-2.5 2.4-4.3 4.9-4.1 2.2.2 3.9 1.9 4.1 4.1-.1 2.3-2.1 4.2-4.5 4.1m0-11.1c-5.7 0-9.1 3.1-9.1 6.9s3.4 6.9 9.1 6.9S54 11 54 7.2s-3.4-7-9.1-7M64 25.9H46.6v-2.2h14.3c1.6-.1 2.8-1.4 2.7-3v-5.1H40.9c-.5 0-.6.3-.4.7l1.4 2.3h17v2.2H40.5c-.2 0-.3.1-.3.3 0 .2.1.3.3.3.8 0 1.4.6 1.4 1.4V26c0 1.7 1.3 3 2.9 3.1H64v-3.2z"/>
						</g>
					</svg>
				</h2>
				<button type="button" class="btn anb_close">
					<i class="ic ic_close"></i>
					<span class="is_blind">전체메뉴 닫기</span>
				</button>
			</div>
			<!--Dev s: 로그인 전-->
			<div class="login_info_wrap before_login">
				<ul>
					<li>
						<button type="button">로그인</button>
					</li>
					<li>
						<button type="button">회원가입</button>
					</li>
				</ul>
			</div>
			<!--Dev e: 로그인 전-->
			<!--Dev s: 로그인 후
			<div class="login_info_wrap after_login">
					<p><span>User_mk01</span>님 안녕하세요!</p>
					<ul>
							<li>
									<button type="button">북마크</button>
							</li>
							<li>
									<button type="button">정보관리</button>
							</li>
					</ul>
			</div>
			Dev e: 로그인 후-->
		</div>
		<div class="anb_menu_body">
			<div class="summary_news_wrap">
				<div class="summary_news">
					<h3 class="sec_ttl">요약 뉴스</h3>
					
					<!--Dev: 썸네일 이미지는 background-image로-->
					<div class="summary_news_area"
					     style="background-image: url(../../assets/images/img_summary_news01.png)">
						<a href="javascript:;" class="go_summary">
							<div class="txt_area">
								<h3 class="news_ttl">“무서워 못살겠다”<br>
									아이파크 전세매물 큰 폭 증가</h3>
								<span class="btn go_summary">전체보기</span>
							</div>
						</a>
					</div>
				</div>
			</div>
			<nav class="anb_menu_wrap">
				<div class="menu_group">
					<h3 class="list_ttl">뉴스</h3>
					<ul class="menu_list nav">
						<li class="menu_node nav_item">
							<a href="" class="nav_link">인기뉴스</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">경제</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">기업</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">사회</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">국제</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">부동산</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">증권</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">정치</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">IT&middot;과학</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">문화</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">스포츠</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">기획&middot;연재</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">Special Edition</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">오피니언</a>
						</li>
					</ul>
				</div>
				<div class="menu_group">
					<h3 class="list_ttl">전문뉴스</h3>
					<ul class="menu_list nav">
						<li class="menu_node nav_item">
							<a href="" class="nav_link">스타투데이</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매경게임진</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">Pulse</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">MK빌리어드뉴스</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">미라클어헤드</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">디스트리트</a>
						</li>
					</ul>
				</div>
				<div class="menu_group">
					<h3 class="list_ttl">프리미엄 콘텐츠</h3>
					<ul class="menu_list nav">
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매경프리미엄</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">레이더P</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">들려주는 뉴스</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">MK빌리어드뉴스</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">뉴스레터</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">디스트리트</a>
						</li>
					
					</ul>
				</div>
				<div class="menu_group">
					<h3 class="list_ttl">매경미디어그룹</h3>
					<ul class="menu_list nav">
						<li class="menu_node nav_item">
							<a href="" class="nav_link">MBN</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매일경제TV</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매경이코노미</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매경 LUXMEN</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">시티라이프</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">골프포위민</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">세계지식포럼</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">M-Print</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">KDX한국데이터거래소</a>
						</li>
					</ul>
				</div>
				<div class="menu_group">
					<h3 class="list_ttl">더보기</h3>
					<ul class="menu_list nav">
						<li class="menu_node nav_item">
							<a href="" class="nav_link">경제용어사전</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">우버인사이트</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매경TEST</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">M PLAY</a>
						</li>
						<li class="menu_node nav_item">
							<a href="" class="nav_link">매달상점</a>
						</li>
					</ul>
				</div>
			</nav>
			<!--Dev: 로그인 후일 경우에만 노출-->
			<div class="btn_area logout">
				<button type="button" class="btn btn_logout">로그아웃</button>
			</div>
			<!--Dev: 로그인 전일 경우에만 노출-->
			<div class="floating_area">
				<a href="#">
					<p><b>로그인</b>하고 새로워진 <br>매일경제를 경험해보세요.</p>
					<i class="ic_arw_anb"></i>
				</a>
			</div>
		</div>
	</div>

</aside>