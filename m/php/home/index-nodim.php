<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
	<?php include_once '../_inc/header/Stock.php'; ?>
	<?php include_once '../_inc/header/_GNB.php'; ?>
	<?php include_once '../_inc/header/_ANB.php'; ?>
</header>
<!-- e: Header -->
<?php include_once '../_inc/header/_SummaryNewsUi.php'; ?>
	<!-- s: Container -->
	<main id="container">
		<h1 class="page_ttl is_blind">뉴스홈</h1>
		<section class="contents news_home">
			<div class="mk_head_news_group">
				<section class="news_sec headline_news_sec">
					<header class="sec_head">
						<h2 class="sec_ttl is_blind">Headline News</h2>
					</header>
					<div class="sec_body">
						<ul class="grid news_list headline_news_list">
							<!-- Dev: 뉴스 썸네일 이미지는 background-image로 -->
							<li class="col col_12 news_node headline_news_node">

								<!-- Dev:
                     - 딤처리 된 상태 : default
                     - 딤처리 된 상태에서 연관뉴스 있을 경우 : has_related 클래스 추가
                     - 딤처리 없는 경우 : no_dim 클래스 추가
                     - 딤처리 없는 상태에서 연관뉴스 있을 경우 : no_dim 클래스만 추가(has_related 클래스 추가하지 않음)
                -->
								<div class="news_item headline_news_item type_headline no_dim">
								<a href="#" class="link" aria-describedby="headline_1"></a>
									<!-- Dev: 뉴스 썸네일 이미지는 background-image로 -->
									<div class="thumb_area" style="background-image: url('../../assets/images/img_headline_01.png')"></div>
									<div id="headline_1" class="txt_area">
										<span class="cate c_point" aria-hidden="true">Headline News</span>
										<h3 class="news_ttl">오미크론 확진 12명 늘어
											총 36명... 서울서 첫 확진자 3명</h3>
									</div>
								</div>
							</li>
							<li class="col col_12 news_node headline_news_node">
								<div class="news_item headline_news_item">
									<a href="#" class="link" aria-describedby="headline_2"></a>
									<div id="headline_2" class="txt_area">
										<h3 class="news_ttl"><span class="badge">긴급</span>"잠깐 스쳤을 뿐인데, 오미크론 걸렸다"... "공기전파 가능성 주시"</h3>
										<div class="info_group">
											<p class="time_info">3분 전</p>
											<p class="like_info">좋아요 <span>25</span></p>
										</div>
									</div>
								</div>
							</li>
							<li class="col col_6 news_node headline_news_node">
								<div class="news_item headline_news_item">
									<a href="#" class="link" aria-describedby="headline_3"></a>
									<div id="headline_3" class="txt_area">
										<h3 class="news_ttl">김총리 "오늘 코로나19 확진자 첫 7000명 돌파"</h3>
										<div class="info_group">
											<p class="time_info">10분 전</p>
											<p class="like_info">좋아요 <span>25</span></p>
										</div>
									</div>
								</div>
							</li>
							<li class="col col_6 news_node headline_news_node">
								<!--Dev
								- 썸네일 사용되는 news 리스트에는 type_bg 클래스 추가
								- 뉴스 썸네일은 backgorund-image로 -->
								<div id="headline_4" class="news_item headline_news_item type_bg"
								     style="background-image: url('../../assets/images/img_headline_02.png');">
									<a href="#" class="link" aria-describedby="headline_4"></a>
									<div class="txt_area">
										<h3 class="news_ttl"><span class="badge">긴급</span>"돌파감염자 수퍼 항체 생겼다... 2차 접종 후 2주 돌파감염자 수퍼 항체 생겼다..."</h3>
									</div>
								</div>
							</li>
							<li class="col col_12 news_node headline_news_node">
								<!--Dev: 텍스트만 보여지는 news 리스트에는 type_small 클래스 추가-->
								<div class="news_item headline_news_item type_small">
									<a href="#" class="link" aria-describedby="headline_5"></a>
									<div class="txt_area">
										<h3 class="news_ttl"><span class="badge">단독</span> “1975년생 직장인 여성
											5명중 1명은 무자녀”</h3>
										<div class="info_group">
											<p class="time_info">30분 전</p>
											<p class="like_info">좋아요 <span>63</span></p>
										</div>
									</div>
								</div>
							</li>
							<li class="col col_12 news_node headline_news_node">
								<!--Dev: 텍스트만 보여지는 news 리스트에는 type_small 클래스 추가-->
								<div class="news_item headline_news_item type_small">
									<a href="#" class="link" aria-describedby="headline_6"></a>
									<div class="txt_area">
										<h3 class="news_ttl"><span class="badge">긴급</span>오늘부터 요소수 '온라인판매' 돌입... 한 아이디 오늘부터 요소수 '온라인판매' 돌입... 한
											아이디</h3>
										<div class="info_group">
											<p class="time_info">30분 전</p>
											<p class="like_info">좋아요 <span>15</span></p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<section class="news_sec top_news_sec is_active" data-news-idx="0">
					<div class="set_inner">
						<header class="sec_head">
							<div class="btn_area mode_change_area">
								<button class="btn_mode_change" onclick="toggleTopNewsSection(this, 1)">
									<b class="c_point ko">오미크론</b>
									<p>타임라인 보기</p><span class="state type_circle">ON</span>
								</button>
							</div>
							<div class="ttl_area">
								<h2 class="sec_ttl" role="text"><b>Top 10</b> <em>News.</em></h2>
								<p class="time_info">2021-12-16 09:00 기준</p>
							</div>
						</header>
						<div class="sec_body">
							<div class="top_news_wrap">
								<div class="top_news_frame swiper-container">
									<div class="swiper-wrapper">
										<!--Dev s: top 1-5 그룹-->
										<ul class="top_news_list swiper-slide">
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item state_up">
													<em class="">1</em>
													<div class="txt_area">
														<h3 class="news_ttl"><span class="badge">긴급</span>서울 6호선 기관사 확진 승객 전원 하차 소동</h3>
													</div>
													<span class="state is_plus">1</span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">2</em>
													<div class="txt_area">
														<h3 class="news_ttl">신규확진 7513명…
															일주일 사이 2배로 급증</h3>
													</div>
													<span class="state is_new"></span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">3</em>
													<div class="txt_area">
														<h3 class="news_ttl">수도권 병상 꽉 찼는데…
															국립의료원 여전히 ‘뒷짐’</h3>
													</div>
													<span class="state"></span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">4</em>
													<div class="txt_area">
														<h3 class="news_ttl">쏘렌토 독일에서 사고쳤다</h3>
													</div>
													<span class="state"></span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item state_up">
													<em class="num">5</em>
													<div class="txt_area">
														<h3 class="news_ttl">서울 대학가 오미크론 비상</h3>
													</div>
													<span class="state is_plus">3</span>
												</a>
											</li>
										</ul>
										<!--Dev e: top 1-5 그룹-->
										<!--Dev s: top 6-10 그룹-->
										<ul class="top_news_list swiper-slide">
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item state_down">
													<em class="num">6</em>
													<div class="txt_area">
														<h3 class="news_ttl">“오미크론 오면 더는 못 버텨요”…공포감 확산 전주 선…</h3>
													</div>
													<span class="state is_minus">2</span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">7</em>
													<div class="txt_area">
														<h3 class="news_ttl">랜선여행, 어디까지 가봤니?… 역대급 스폿 ‘온에어’</h3>
													</div>
													<span class="state"></span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">8</em>
													<div class="txt_area">
														<h3 class="news_ttl">일본식 선술집서 4만7000원 먹튀한 커플 점주 “치밀한…</h3>
													</div>
													<span class="state"></span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">9</em>
													<div class="txt_area">
														<h3 class="news_ttl">열 나야만 확진?…
															오미크론 대표 증상은 ‘이것’</h3>
													</div>
													<span class="state"></span>
												</a>
											</li>
											<li class="news_node top_news_node">
												<a href="#" class="news_item top_news_item">
													<em class="num">10</em>
													<div class="txt_area">
														<h3 class="news_ttl">“스쳤을 뿐인데 오미크론”
															공기전파 가능성</h3>
													</div>
													<span class="state"></span>
												</a>
											</li>
										</ul>
										<!--Dev e: top 6-10 그룹-->
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec top_news_sec" data-news-idx="1">
					<div class="set_inner">
						<header class="sec_head">
							<div class="btn_area mode_change_area">
								<button class="btn_mode_change short" onclick="toggleTopNewsSection(this, 0)">
									<b class="c_point">Top10</b>
									<p>뉴스보기</p> <span class="state type_circle">ON</span>
								</button>
							</div>
							<div class="ttl_area">
								<h2 class="sec_ttl" role="text"><b>Timeline</b> <em>News.</em></h2>
								<p class="time_info">2021-12-16 09:00 기준</p>
							</div>
						</header>
						<div class="sec_body">
							<div class="timeline_news_wrap">
								<h3 class="timeline_ttl"><span class="badge">긴급</span>오미크론, 그게 대체 뭔데? <img
										src="../../assets/images/img_emotion.png" alt=""></h3>
								<ul class="news_list timeline_news_list">
									<li class="news_node timeline_news_node">
										<a href="#" class="news_item timeline_news_item">
											<div class="time_area">
												<b class="time">11월 11일 발생</b>
											</div>
											<div class="txt_area">
												<h4 class="news_ttl">‘오미크론’ 첫 발생 5일 만에
													아프리카→일본서 발견</h4>
											</div>
											<div class="info_group">
												<p class="like_info">좋아요 <span>25</span></p>
											</div>
										</a>
									</li>
									<li class="news_node timeline_news_node">
										<a href="#" class="news_item timeline_news_item">
											<div class="time_area">
												<b class="time">11월 25일 국내 확진자 발생</b>
											</div>
											<div class="txt_area">
												<h4 class="news_ttl">국내 ‘오미크론 의심’ 확진자 발생… 나이지리아 방문</h4>
											</div>
											<div class="info_group">
												<p class="like_info">좋아요 <span>21</span></p>
											</div>
										</a>
									</li>
									<li class="news_node timeline_news_node">
										<a href="#" class="news_item timeline_news_item">
											<div class="time_area">
												<b class="time">12월 05일 집단 확진자 발생</b>
											</div>
											<div class="txt_area">
												<h4 class="news_ttl">오미크론, 밀접 접촉자 719명
													지역사회 ‘n차 감염’ 우려</h4>
											</div>
											<div class="info_group">
												<p class="like_info">좋아요 <span>15</span></p>
											</div>
										</a>
									</li>
									<li class="news_node timeline_news_node">
										<a href="#" class="news_item timeline_news_item">
											<div class="time_area">
												<b class="time">12월 11일 집단감염 추가 발생 발생가능발</b>
											</div>
											<div class="txt_area">
												<h4 class="news_ttl">오미크론 집단감염 또 나오나…
													전북서 ‘5차감염’ 가능성</h4>
											</div>
											<div class="info_group">
												<p class="like_info">좋아요 <span>30</span></p>
											</div>
										</a>
									</li>
									<li class="news_node timeline_news_node">
										<a href="#" class="news_item timeline_news_item">
											<div class="time_area">
												<b class="time">12월 13일 속보</b>
											</div>
											<div class="txt_area">
												<h4 class="news_ttl">코로나19 위험도 전국
													‘매우 높음’</h4>
											</div>
											<div class="info_group">
												<p class="like_info">좋아요 <span>12</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="mk_body_news_group">
				<div class="ad_wrap">
					<div class="ad_box">
						<img src="../../assets/images/img_ad_banner03.png" alt="Sotheby's">
					</div>
				</div>
				<section class="news_sec highlight_news_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">Highlight News</h2>
						</header>
						<div class="sec_body">
							<div class="highlight_news_wrap">
								<ul class="news_list highlight_news_list">
									<li class="news_node highlight_news_node">
										<div class="news_item highlight_news_item type_thumb2">
											<a href="#" aria-describedby="text" class="link"><span
													class="is_blind">기사링크</span></a>
											<!--Dev: 썸네일 이미지는 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_highlight_01.png" alt="">
											</div>
											<div id="text" class="txt_area">
												<span class="cate">정치</span>
												<h3 class="news_ttl"><span class="badge">긴급</span>‘절대 안찍을 후보’ 조사
													윤석열 39.5% 득표… 이재명은 ‘절대 안찍을 후보’ 조사
													윤석열 39.5% 득표… 이재명은</h3>
												<div class="info_group">
													<p class="time_info">3분전</p>
													<p class="like_info">가장 댓글이 활발한 기사</p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node highlight_news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_04.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">삼성전자 D램 점유율 1위…반도체 전망도 밝다</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_05.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">4000만원대 패밀리 슈퍼카, 수입차 ‘판매신화’</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_06.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">임신부, 자율주행 중인 차 앞좌석서 출산…미국 `테슬라 베이비` 탄생</h3>
												<div class="info_group">
													<p class="time_info">25분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_07.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl"><span class="badge">긴급</span>매경·NH證 `착한기업` 지수 추종…초과수익까지 노린다</h3>
												<div class="info_group">
													<p class="time_info">1시간 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_08.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">“대선 의식했나”…내년 1분기까지 전기요금 동결</h3>
												<div class="info_group">
													<p class="time_info">2시간 전</p>
													<p class="like_info">좋아요 <span>98</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_09.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">대학 정시모집 원서접수 30일 시작…지원 전략 상담하는 수험생</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="highlight_news_wrap">
								<ul class="news_list highlight_news_list">
									<li class="news_node highlight_news_node">
										<div class="news_item highlight_news_item type_thumb2">
											<a href="#" aria-describedby="text" class="link"><span
													class="is_blind">기사링크</span></a>
											<!--Dev: 썸네일 이미지는 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_highlight_02.png" alt="">
											</div>
											<div class="txt_area">
												<span class="cate">경제</span>
												<h3 class="news_ttl"><span class="badge">긴급</span>中과 특수성 강조한 文
													“베이징올림픽 보이콧 검토안해”</h3>
												<div class="info_group">
													<p class="time_info">3분전</p>
													<p class="like_info">가장 많이 공유된 기사</p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_10.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">“화면 핥았을 뿐인데”…음식 맛볼 수 있는 TV 일본서 등장, 가격
													103만원</h3>
												<div class="info_group">
													<p class="time_info">48분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_11.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">골든크로스? 자만경계령 내린 민주…국힘 보란듯이 ‘원팀 행보’ </h3>
												<div class="info_group">
													<p class="time_info">32분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_12.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">“더 늦기 전에 살껄”…LG이노텍 언제까지 질주할까</h3>
												<div class="info_group">
													<p class="time_info">1시간 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_13.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">내년 46만 가구 공급한다는데…재건축 없이 어떻게?</h3>
												<div class="info_group">
													<p class="time_info">2시간 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_14.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">샤오미, 애플 대놓고 저격 “아이폰 그립감 별로, 우리가 낫다” </h3>
												<div class="info_group">
													<p class="time_info">2분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item highlight_news_item">
											<a href="" class="link" aria-describedby="today_news"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_sub_news_15.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">문재인 정부 육해공 참모총장, 윤석열 선대위 합류</h3>
												<div class="info_group">
													<p class="time_info">44분 전</p>
													<p class="like_info">좋아요 <span>22</span></p>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<div class="btn_area">
									<button type="button" class="btn basic w_f h_m drop_sub_news_btn">
										<span>더보기</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec opinion_news_sec">
					<div class="set_inner">
						<header class="sec_head type_underline has_more_btn">
							<h2 class="sec_ttl">오피니언</h2>
							<a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line right">더보기</i></a>
						</header>
						<div class="sec_body">
							<div class="news_wrap opinion_news_wrap">
								<ul class="news_list opinion_news_list">
									<li class="news_node">
										<a href="#" class="news_item">
											<div class="txt_area">
												<span class="cate">사설</span>
												<h3 class="news_ttl"><span class="badge">긴급</span>코로나19 위험도 전국·수도권·비수도권 모두 ‘매우 높음’</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<div class="txt_area">
												<span class="cate">사설</span>
												<h3 class="news_ttl">오늘부터 거리두기 다시 강화, 정부 방역실패 더는 용납안된다</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<!--Dev: 이미지는 backgorund-image로 처리-->
											<div class="thumb_area type_circle">
												<img src="../../assets/images/img_opinion_01.png" alt="">
											</div>
											<div class="txt_area">
												<span class="cate">사설</span>
												<h3 class="news_ttl">코로나19 위험도 전국·수도권·비수도권 모두 ‘매우 높음’</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<!--Dev: 이미지는 backgorund-image로 처리-->
											<div class="thumb_area type_circle">
												<img src="../../assets/images/img_opinion_02.png" alt="">
											</div>
											<div class="txt_area">
												<span class="cate">매경포럼</span>
												<h3 class="news_ttl">중도 좌파와 우파가 함께 살린 ‘병자 독일’</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<div class="txt_area">
												<span class="cate">매경데스크</span>
												<h3 class="news_ttl">뭉치든 흩어지든, 핵심은 ‘감동’</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<!--Dev: 이미지는 backgorund-image로 처리-->
											<div class="thumb_area type_circle">
												<img src="../../assets/images/img_opinion_03.png" alt="">
											</div>
											<div class="txt_area">
												<span class="cate">매경데스크</span>
												<h3 class="news_ttl">소액주주 1000만명이 대선때 움직인다면</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<div class="txt_area">
												<span class="cate">허연의 책과 지성</span>
												<h3 class="news_ttl">하룻밤 새 40년을 늙어버린 사나이</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<!--Dev: 이미지는 backgorund-image로 처리-->
											<div class="thumb_area type_circle">
												<img src="../../assets/images/img_opinion_04.png" alt="">
											</div>
											<div class="txt_area">
												<span class="cate">글로벌포커스</span>
												<h3 class="news_ttl">경제안보전략 큰 그림이 안 보인다</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="#" class="news_item">
											<div class="txt_area">
												<span class="cate">매경춘추</span>
												<h3 class="news_ttl">특허 전쟁</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<div class="news_item type_thumb">
											<div class="opinion_news_frame swiper-container">
												<ul class="news_card_group swiper-wrapper">
													<li class="news_card swiper-slide">
														<a href="#">
															<div class="thumb_area">
																<img src="../../assets/images/img_opinion_gallery_1.png"
																     alt="윤상환 기자">
															</div>
															<div class="txt_area">
																<span class="cate">포토에세이</span>
																<h3 class="news_ttl">넌 어디서 왔니</h3>
															</div>
														</a>
													</li>
													<li class="news_card swiper-slide">
														<a href="#">
															<div class="thumb_area">
																<img src="../../assets/images/img_opinion_gallery_2.png"
																     alt="윤상환 기자">
															</div>
															<div class="txt_area">
																<span class="cate">사진은 말한다</span>
																<h3 class="news_ttl">하룻밤 새 40년을 늙어버린 사나이</h3>
															</div>
														</a>
													</li>
													<li class="news_card swiper-slide">
														<a href="#">
															<div class="thumb_area">
																<img src="../../assets/images/img_opinion_gallery_3.png"
																     alt="윤상환 기자">
															</div>
															<div class="txt_area">
																<span class="cate">시가 있는 월요일</span>
																<h3 class="news_ttl">그래도 살아봐야겠다</h3>
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec series_news_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">기획 / 연재</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="series_wrap">
								<div class="series_news_frame swiper-container">
									<ul class="news_list series_list type_card swiper-wrapper">
										<li class="news_node swiper-slide">
											<div class="news_item">
												<a href="" class="link" aria-describedby="today_news"></a>
												<!--Dev: 썸네일 이미지는 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_series_01.png" alt="">
												</div>
												<div class="txt_area">
													<a href="" class="cate_link">
														<span>2022 부동산 전망</span>
													</a>
													<h3 class="news_ttl">집값 더 떨어지나… 전문가
														40% “지금이 고점”</h3>
													<div class="info_group">
														<p class="time_info">28분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</div>
										</li>
										<li class="news_node swiper-slide">
											<div class="news_item">
												<a href="" class="link" aria-describedby="today_news"></a>
												<!--Dev: 썸네일 이미지는 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_series_02.png" alt="">
												</div>
												<div class="txt_area">
													<a href="" class="cate_link">
														<span>내년 608조 슈퍼예산</span>
													</a>
													<h3 class="news_ttl">내년 세금 4조7000억 더
														걷는다…종부세는 11%나 …</h3>
													<div class="info_group">
														<p class="time_info">24분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</div>
										</li>
										<li class="news_node swiper-slide">
											<div class="news_item">
												<a href="" class="link" aria-describedby="today_news"></a>
												<!--Dev: 썸네일 이미지는 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_series_03.png" alt="">
												</div>
												<div class="txt_area">
													<a href="" class="cate_link">
														<span>스물스물</span>
													</a>
													<h3 class="news_ttl">‘줌팅’·’아바타소개팅’까지…
														코로나가 바꾼 대학가 연애…</h3>
													<div class="info_group">
														<p class="time_info">32분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</div>
										</li>
										<li class="news_node swiper-slide">
											<div class="news_item">
												<a href="" class="link" aria-describedby="today_news"></a>
												<!--Dev: 썸네일 이미지는 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_series_04.png" alt="">
												</div>
												<div class="txt_area">
													<a href="" class="cate_link">
														<span>아이티라떼</span>
													</a>
													<h3 class="news_ttl">수묵화 NFT 200점 단
														몇초만에 완판 </h3>
													<div class="info_group">
														<p class="time_info">1시간 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec se_news_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">Special Edition</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="news_wrap se_mews_wrap">
								<ul class="grid grid_4 news_list se_news_list">
									<li class="col col_6 news_node">
										<!--Dev: 썸네일 이미지는 backgroudn-image로-->
										<a href="#" class="news_item"
										   style="background-image: url('../../assets/images/img_life_01.png');">
											<span class="cate">Tripplus</span>
											<h3 class="news_ttl">제주 도민들만 아는 <br><b>찐 맛집 Top 7</b></h3>
										</a>
									</li>
									<li class="col col_6 news_node">
										<!--Dev: 썸네일 이미지는 backgroudn-image로-->
										<a href="#" class="news_item"
										   style="background-image: url('../../assets/images/img_life_02.png');">
											<span class="cate">Economy</span>
											<h3 class="news_ttl">경제기자가<br> 추천하는<br> <b>2030을 위한<br> 신용카드</b>
											</h3>
										</a>
									</li>
									<li class="col col_6 news_node">
										<!--Dev: 썸네일 이미지는 backgroudn-image로-->
										<a href="#" class="news_item"
										   style="background-image: url('../../assets/images/img_life_03.png');">
											<span class="cate">Culture</span>
											<h3 class="news_ttl">MBTI 유형별<br> <b>대표 연예인</b><br> 모아봄!</h3>
										</a>
									</li>
									<li class="col col_6 news_node">
										<!--Dev: 썸네일 이미지는 backgroudn-image로-->
										<a href="#" class="news_item"
										   style="background-image: url('../../assets/images/img_life_04.png');">
											<span class="cate">Culture</span>
											<h3 class="news_ttl">'차박'에 딱인<br> <b>특급 소형 SUV</b></h3>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec newsletter_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">뉴스레터</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="newsletter_wrap">
								<div class="newsletter_frame swiper-container">
									<ul class="news_list type_thumb2 newsletter_list swiper-wrapper">
										<li class="news_node swiper-slide">
											<a href="" class="news_item">
												<!--Dev: 썸네일 이미지 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_newsletter_01.png" alt="">
												</div>
												<div class="txt_area">
													<h3 class="news_ttl">미라클레터</h3>
													<p class="news_desc">테크 트렌드, 글로벌 트렌드, 실리콘밸리의 현장 소식을 주3회 발송합니다.</p>
												</div>
											</a>
										</li>
										<li class="news_node swiper-slide">
											<a href="" class="news_item">
												<!--Dev: 썸네일 이미지 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_newsletter_02.png" alt="">
												</div>
												<div class="txt_area">
													<h3 class="news_ttl">자이앤트레터</h3>
													<p class="news_desc">‘글로벌 증시 여행자’를 위한 해외 주식 뉴스레터입니다. </p>
												</div>
											</a>
										</li>
										<li class="news_node swiper-slide">
											<a href="" class="news_item">
												<!--Dev: 썸네일 이미지 background-image로-->
												<div class="thumb_area">
													<img src="../../assets/images/img_newsletter_03.png" alt="">
												</div>
												<div class="txt_area">
													<h3 class="news_ttl">THE FLEX</h3>
													<p class="news_desc">매주 목요일,  스마트 컨슈머를 위한 <span class="is_nowrap">‘상위 1%의 라이프스타일’</span>로 소통합니다.</p>
												</div>
											</a>
										</li>
									</ul>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="news_sec_group">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">증권</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<section class="news_sec stock_news_sec">
								<div class="stock_news_wrap">
									<ul class="news_list stock_news_list">
										<li class="news_node">
											<div class="news_item  type_thumb2">
												<a href="#" class="link" aria-describedby="news1"></a>
												<div class="thumb_area">
													<img src="../../assets/images/img_stock_01.png" alt="">
												</div>
												<div class="txt_area">
													<h3 id="news1" class="news_ttl"><span class="badge">긴급</span>“삼성과 격차 더 커졌다”…진격의 TSMC, 전세계 파운드리 `절반`
														독식</h3>
													<div class="info_group">
														<p class="time_info">3분 전</p>
														<p class="like_info">가장 댓글이 활발한 기사</p>
													</div>
												</div>
											</div>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl"><span class="badge">긴급</span>“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급 “나만 재밌는거 아니었네”…엔씨,
													‘리니지W’ 역대급</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어 출·카드발급 때 내는 국세증명, 따로
													뽑을 필요 없어</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">“어디까지 오를까”…날아오르는 애플 주가에 국내 어디까지 오를까”…날아오르는 애플 주가에
													국내수…</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급 “나만 재밌는거 아니었네”…엔씨,
													‘리니지W’ 역대급</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어 출·카드발급 때 내는 국세증명, 따로
													뽑을 필요 없어</h3>
											</a>
										</li>
										<li class="news_node">
											<div class="news_item  type_thumb2">
												<a href="#" class="link" aria-describedby="news2"></a>
												<div class="thumb_area">
													<img src="../../assets/images/img_stock_02.png" alt="">
												</div>
												<div class="txt_area">
													<h3 id="news2" class="news_ttl">넉달 동안 -40%…
														SK바사에 1000억원 공매도 폭탄</h3>
													<div class="info_group">
														<p class="time_info">48분 전</p>
														<p class="like_info">가장 댓글이 활발한 기사</p>
													</div>
												</div>
											</div>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">“어디까지 오를까”…날아오르는 애플 주가에 국내 어디까지 오를까”…날아오르는 애플 주가에
													국내</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어 출·카드발급 때 내는 국세증명, 따로
													뽑을 필요 없어</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급 “나만 재밌는거 아니었네”…엔씨,
													‘리니지W’ 역대급</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어 출·카드발급 때 내는 국세증명, 따로
													뽑을 필요 없어</h3>
											</a>
										</li>
										<li class="news_node">
											<a href="" class="news_item type_txt">
												<h3 class="news_ttl">“어디까지 오를까”…날아오르는 애플 주가에 국내 어디까지 오를까”…날아오르는 애플 주가에
													국내수…</h3>
											</a>
										</li>
									</ul>
								</div>
							</section>
							<section class="news_sec popular_stock_sec">
								<header class="sec_head">
									<h3 class="sec_ttl">지금 이 종목.</h3>
									<p><span>12월 22일</span> - <span>12월 28일</span> 기준 <br/>검색 많은 종목을 알려드립니다.</p>
								</header>
								<div class="popular_stock_wrap">
									<ul class="box_list popular_stock_list">
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">SK 바이오사이언스</h4>
												<p class="stock_info_group" aria-label="2,968.33, 0.78% 증가">
													<b class="stock" aria-hidden="true">2,968.33</b>
													<span class="is_plus" aria-hidden="true">+0.78%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">기아</h4>
												<p class="stock_info_group" aria-label="84,500, 1.12% 감소">
													<b class="stock" aria-hidden="true">84,500</b>
													<span class="is_minus" aria-hidden="true">- 1.12%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">삼성전자</h4>
												<p class="stock_info_group" aria-label="80,300, 1.67% 증가">
													<b class="stock" aria-hidden="true">80,300</b>
													<span class="is_plus" aria-hidden="true">+1.67%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">LG화학</h4>
												<p class="stock_info_group" aria-label="632,000, 0.64% 증가">
													<b class="stock" aria-hidden="true">632,000</b>
													<span class="is_plus" aria-hidden="true">+0.64%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">KCC</h4>
												<p class="stock_info_group" aria-label="312,000, 0.95% 감소">
													<b class="stock" aria-hidden="true">312,000</b>
													<span class="is_minus" aria-hidden="true">-0.95%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">SK 바이오사이언스</h4>
												<p class="stock_info_group" aria-label="2,968.33, 0.78% 증가">
													<b class="stock" aria-hidden="true">2,968.33</b>
													<span class="is_plus" aria-hidden="true">+ 0.78%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">기아</h4>
												<p class="stock_info_group" aria-label="84,500, 1.12% 감소">
													<b class="stock" aria-hidden="true">84,500</b>
													<span class="is_minus" aria-hidden="true">- 1.12%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">삼성전자</h4>
												<p class="stock_info_group" aria-label="80,300, 1.67% 증가">
													<b class="stock" aria-hidden="true">80,300</b>
													<span class="is_plus" aria-hidden="true">+1.67%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">LG화학</h4>
												<p class="stock_info_group" aria-label="632,000, 0.64% 증가">
													<b class="stock" aria-hidden="true">632,000</b>
													<span class="is_plus" aria-hidden="true">+0.64%</span>
												</p>
											</div>
										</li>
										<li class="box_node">
											<div class="box_item stock_item">
												<h4 class="stock_name">KCC</h4>
												<p class="stock_info_group" aria-label="312,000, 0.95% 감소">
													<b class="stock" aria-hidden="true">312,000</b>
													<span class="is_minus" aria-hidden="true">-0.95%</span>
												</p>
											</div>
										</li>
									</ul>
								</div>
							</section>
						</div>
					</div>
				</div>
				<section class="news_sec economy_news_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">경제</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="economy_news_wrap">
								<ul class="news_list economy_news_list">
									<li class="news_node">
										<div class="news_item type_thumb2">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_00.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">NH투자증권 “내년 세계 증시 화두는 인플레·경기회복”</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_01.png" alt="">
											</div>
											<div class="txt_area">
												<h3 id="news1" class="news_ttl">“삼성과 격차 더 커졌다”…진격의 TSMC, 전세계 파운드리 `절반` 독식</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_02.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_03.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_04.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_05.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_06.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_07.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
									<li class="news_node">
										<div class="news_item">
											<a href="#" class="link" aria-describedby="news1"></a>
											<div class="thumb_area">
												<img src="../../assets/images/img_economy_08.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">넉달 동안 -40%… SK바사에 1000억원 공매도 폭탄</h3>
												<div class="info_group">
													<p class="time_info">3분 전</p>
													<p class="like_info">좋아요 <span>12</span></p>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec photo_news_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">포토</h2>
							<a href="#" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="photo_news_wrap swiper-container">
								<div class="photo_list swiper-wrapper">
									<div class="photo_node swiper-slide">
										<a href="#" class="photo_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area"
											     style="background-image: url(../../assets/images/img_photo_01.png)"></div>
											<div class="txt_area">
												<em>인기포토N</em>
												<h3 class="photo_ttl">
													박신혜, 세젤예 예비신부
												</h3>
											</div>
										</a>
									</div>
									<div class="photo_node swiper-slide">
										<a href="" class="photo_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area"
											     style="background-image: url(../../assets/images/img_photo_01.png)"></div>
											<div class="txt_area">
												<em>인기포토N</em>
												<h3 class="photo_ttl">
													박신혜, 세젤예 예비신부
												</h3>
											</div>
										</a>
									</div>
									<div class="photo_node swiper-slide">
										<a href="" class="photo_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area"
											     style="background-image: url(../../assets/images/img_photo_01.png)"></div>
											<div class="txt_area">
												<em>인기포토N</em>
												<h3 class="photo_ttl">
													박신혜, 세젤예 예비신부
												</h3>
											</div>
										</a>
									</div>
								</div>
								<div class="news_photo_pagination"></div>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec ent_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">연예</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="news_wrap ent_news_wrap">
								<ul class="grid grid_4 type_v2 news_list ent_news_list type_thumb">
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_ent_01.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">재벌가 前며느리 최정윤, 생활고 고백 “알바도 나이제한에…</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_ent_02.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">재벌가 前며느리 최정윤, 생활고 고백 “알바도 나이제한에…</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_ent_03.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">재벌가 前며느리 최정윤, 생활고 고백 “알바도 나이제한에…</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_ent_04.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">재벌가 前며느리 최정윤, 생활고 고백 “알바도 나이제한에…</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_ent_05.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">재벌가 前며느리 최정윤, 생활고 고백 “알바도 나이제한에…</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_ent_06.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">재벌가 前며느리 최정윤, 생활고 고백 “알바도 나이제한에…</h3>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec ent_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">스포츠</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="news_wrap">
								<ul class="grid grid_4 type_v2 news_list ent_news_list type_thumb">
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_sport_01.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">심석희, 공정위 출석 "사실대로 성실히..." 심석희, 공정위 출석 "사실대로
													성실히..."</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_sport_02.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">심석희, 공정위 출석 "사실대로 성실히..." 심석희, 공정위 출석 "사실대로
													성실히..."</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_sport_03.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">심석희, 공정위 출석 "사실대로 성실히..." 심석희, 공정위 출석 "사실대로
													성실히..."</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_sport_04.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">심석희, 공정위 출석 "사실대로 성실히..." 심석희, 공정위 출석 "사실대로
													성실히..."</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_sport_05.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">심석희, 공정위 출석 "사실대로 성실히..." 심석희, 공정위 출석 "사실대로
													성실히..."</h3>
											</div>
										</a>
									</li>
									<li class="col col_6 news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_sport_06.png" alt="">
											</div>
											<div class="txt_area">
												<h3 class="news_ttl">심석희, 공정위 출석 "사실대로 성실히..." 심석희, 공정위 출석 "사실대로
													성실히..."</h3>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="news_sec moment_sec">
					<div class="set_inner">
						<header class="sec_head type_underline">
							<h2 class="sec_ttl">MK Moment</h2>
							<a href="" class="btn btn_ic btn_more open_more">
								<i class="arw arw_line right">더보기</i>
							</a>
						</header>
						<div class="sec_body">
							<div class="news_wrap">
								<ul class="news_list type_thumb">
									<li class="news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_moment_01.png" alt="">
												<span class="play_time ic_before ic_play">01:56</span>
											</div>
											<div class="txt_area">
												<span class="cate">MBN</span>
												<h3 class="news_ttl">다은을 아끼는 친구의 물음</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_moment_02.png" alt="">
												<span class="play_time ic_before ic_play">01:56</span>
											</div>
											<div class="txt_area">
												<span class="cate">M PLAY</span>
												<h3 class="news_ttl">신박하고 너무 좋은뎈ㅋㅋㅋㅋㅋ제발 그만..💩</h3>
											</div>
										</a>
									</li>
									<li class="news_node">
										<a href="" class="news_item">
											<!--Dev: 썸네일 이미지 background-image로-->
											<div class="thumb_area">
												<img src="../../assets/images/img_moment_03.png" alt="">
												<span class="play_time ic_before ic_play">01:56</span>
											</div>
											<div class="txt_area">
												<!--Dev: youtube일 경우 youtube 클래스 추가-->
												<span class="cate youtube">Youtube</span>
												<h3 class="news_ttl">두 딸 S대 보낸 경험을 토대로 얘기합니다.</h3>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</main>
	<!-- e: Container -->

	<?php include_once '../_inc/_footer_fix.php'; ?>
	<?php include_once '../_inc/_footer.php'; ?>
	<script src="../../assets/js/common.js"></script>
	<script src="../../assets/js/main.js"></script>
	<?php include_once '../_inc/_foot.php'; ?>