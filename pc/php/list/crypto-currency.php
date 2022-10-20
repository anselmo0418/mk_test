<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
	<?php include_once '../_inc/header/Stock.php'; ?>
	<?php include_once '../_inc/header/_GNB.php'; ?>
	<?php include_once '../_inc/header/_LNB.php'; ?>
	<?php include_once '../_inc/header/_ANB.php'; ?>
	<?php include_once '../_inc/header/_SearchUi.php'; ?>
	<?php include_once '../_inc/header/SummaryNewsUi.php'; ?>
</header>
<div class="dim"></div>
<!-- e: Header -->
	<!-- s: Container -->
	<main id="container">
		<h1 class="page_ttl is_blind">암호화폐</h1>
		<section class="contents list_page crypto_page">
			<div class="mk_head_news_group">
				<div class="set_inner">
					<div class="grid grid_custom type_2">
						<div class="col main_col">
							<section class="news_sec price_sec">
								<header class="sec_head type_underline">
									<h2 class="sec_ttl">암호화폐 시세</h2>
										<ul class="offer_sec">
											<li>업비트</li>
											<li>빗썸</li>
											<li>코인원</li>
										</ul>
								</header>
<!--								<div class="sec_body">-->
<!--									<div class="tab_wrap">-->
<!--										<ul class="tab_list coin_list" role="tablist">-->
<!--											<li class="tab_node" role="presentation" >-->
<!--												<a href="#" id="BTC" class="tab_item coin_link" role="tab" aria-controls="BTC_cnt" aria-selected="true">-->
<!--													<span class="ic_area coin_icon"><img src="https://img.mk.co.kr/mtech/ico_btc_on.png" alt="비트코인 아이콘"></span>-->
<!--													<strong class="name coin_tit">비트코인</strong>-->
<!--												</a>-->
<!--											</li>-->
<!--											<li class="tab_node" role="presentation" >-->
<!--												<a href="#" id="ETH" class="tab_item coin_link" role="tab" aria-controls="ETH_cnt" tabindex="-1">-->
<!--													<span class="ic_area coin_icon"><img src="//img.mk.co.kr/mtech/ico_eth_off.png" alt="이더리움 아이콘"></span>-->
<!--													<strong class="name coin_tit">이더리움</strong>-->
<!--												</a>-->
<!--											</li>-->
<!--											<li class="tab_node" role="presentation" >-->
<!--												<a href="#" id="XRP" class="tab_item coin_link" role="tab" aria-controls="ETH_cnt" tabindex="-1">-->
<!--													<span class="ic_area coin_icon"><img src="//img.mk.co.kr/mtech/ico_xrp_off.png" alt="리플 아이콘"></span>-->
<!--													<strong class="name coin_tit">리플</strong>-->
<!--												</a>-->
<!--											</li>-->
<!--											<li class="tab_node" role="presentation" >-->
<!--												<a href="#" id="BCH" class="tab_item coin_link" role="tab" aria-controls="BCH_cnt" tabindex="-1">-->
<!--													<span class="ic_area coin_icon"><img src="//img.mk.co.kr/mtech/ico_bcc_off.png" alt="비트코인 캐시 아이콘"></span>-->
<!--													<strong class="name coin_tit">비트코인 캐시</strong>-->
<!--												</a>-->
<!--											</li>-->
<!--											<li class="tab_node" role="presentation" >-->
<!--												<a href="#" id="LTC" class="tab_item coin_link" role="tab" aria-controls="LTC_cnt" tabindex="-1">-->
<!--													<span class="ic_area coin_icon"><img src="//img.mk.co.kr/mtech/ico_ltc_off.png" alt="라이트코인 아이콘"></span>-->
<!--													<strong class="name coin_tit">라이트코인</strong>-->
<!--												</a>-->
<!--											</li>-->
<!--											<li class="tab_node" role="presentation" >-->
<!--												<a href="#" id="EOS" class="tab_item coin_link" role="tab" aria-controls="EOS_cnt" tabindex="-1">-->
<!--													<span class="ic_area coin_icon"><img src="//img.mk.co.kr/mtech/ico_eos_off.png" alt="이오스 아이콘"></span>-->
<!--													<strong class="name coin_tit">이오스</strong>-->
<!--												</a>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</div>-->
<!--									<div class="tbl_wrap" role="tabpanel" aria-labelledby="BTC">-->
<!--										<p class="unit taR">단위 : 원</p>-->
<!--										<table class="tbl tbl_coin" border="0" cellpadding="0" cellspacing="0">-->
<!--											<caption>거래소 시세정보</caption>-->
<!--											<colgroup>-->
<!--												<col>-->
<!--												<col>-->
<!--												<col>-->
<!--											</colgroup>-->
<!--											<thead>-->
<!--											<tr>-->
<!--												<th scope="col">거래소</th>-->
<!--												<th scope="col">현재시세</th>-->
<!--												<th scope="col">24시간 등락률</th>-->
<!--											</tr>-->
<!--											</thead>-->
<!--											<tbody>-->
<!--											<tr>-->
<!--												<td class="upbit">업비트 <span class="time_info">03.21 15:45</span></td>-->
<!--												<td class="price_fluc type_down">50,130,000</td>-->
<!--												<td class="rate_fluc type_down">-->
<!--													<div class="ratio state type_down" role="txt">-->
<!--														<span class="current">968,000 (-1.89%)</span>-->
<!--														<span class="state_txt is_blind">하락</span>-->
<!--													</div>-->
<!--													<button class="btn btn_ic btn_chart">-->
<!--														<span class="is_blind">업비트 차트 닫기</span>-->
<!--													</button>-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td colspan="3">-->
<!--													<div class="chart_area_wrap chart_area">-->
<!--														<div class="chart_info">-->
<!--															<ul>-->
<!--																<li>-->
<!--																	<span>고가 (24h)</span>-->
<!--																	<span class="price price_up">51,137,000</span>-->
<!--																</li>-->
<!--																<li>-->
<!--																	<span>저가 (24h)</span>-->
<!--																	<span class="price price_down">51,137,000</span>-->
<!--																</li>-->
<!--																<li>-->
<!--																	<span>거래량 (24h)</span>-->
<!--																	<span class="volume">4,338 BTC</span>-->
<!--																</li>-->
<!--															</ul>-->
<!--														</div>-->
<!--														<div class="chart_area">-->
<!--															<ul class="term tab_list" role="tablist">-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1일</a>-->
<!--																</li>-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1주</a>-->
<!--																</li>-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1개월</a>-->
<!--																</li>-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1년</a>-->
<!--																</li>-->
<!--															</ul>-->
<!--															<div class="chart_graph">-->
<!--																<img src="https://imagechart.upbit.com/d/BTC.png" alt="차트이미지" height="220">-->
<!--															</div>-->
<!--														</div>-->
<!--													</div>-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td class="bithumb">빗썸 <span class="time_info">03.21 15:45</span></td>-->
<!--												<td class="price_fluc type_down">50,039,000</td>-->
<!--												<td class="rate_fluc type_down">-->
<!--													<div class="ratio state " role="txt">-->
<!--														<span class="current">1,070,000 (-2.09%)</span>-->
<!--														<span class="state_txt is_blind">하락</span>-->
<!--													</div>-->
<!--													<button class="btn btn_ic btn_chart">-->
<!--														<span class="is_blind">빗썸 차트 열기</span>-->
<!--													</button>-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td colspan="3">-->
<!--													<div class="chart_area_wrap chart_area">-->
<!--														<div class="chart_info">-->
<!--															<ul>-->
<!--																<li>-->
<!--																	<span>고가 (24h)</span>-->
<!--																	<span class="price price_up">51,137,000</span>-->
<!--																</li>-->
<!--																<li>-->
<!--																	<span>저가 (24h)</span>-->
<!--																	<span class="price price_down">51,137,000</span>-->
<!--																</li>-->
<!--																<li>-->
<!--																	<span>거래량 (24h)</span>-->
<!--																	<span class="volume">4,338 BTC</span>-->
<!--																</li>-->
<!--															</ul>-->
<!--														</div>-->
<!--														<div class="chart_area">-->
<!--															<ul class="term tab_list" role="tablist">-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1일</a>-->
<!--																</li>-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1주</a>-->
<!--																</li>-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1개월</a>-->
<!--																</li>-->
<!--																<li class="tab_node" role="presentation" >-->
<!--																	<a href="javascript:;" class="tab_item" role="tab">1년</a>-->
<!--																</li>-->
<!--															</ul>-->
<!--															<div class="chart_graph">-->
<!--																<img src="https://imagechart.upbit.com/d/BTC.png" alt="차트이미지" height="220">-->
<!--															</div>-->
<!--														</div>-->
<!--													</div>-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td class="coinone">코인원 <span class="time_info">03.21 15:45</span></td>-->
<!--												<td class="price_fluc type_down">50,087,000.0</td>-->
<!--												<td class="rate_fluc type_down">-->
<!--													<div class="ratio state" role="txt">-->
<!--														<span class="current">989,000 (-1.94%</span>-->
<!--														<span class="state_txt is_blind">하락</span>-->
<!--													</div>-->
<!--													<button class="btn btn_ic btn_chart">-->
<!--														<span class="is_blind">코인원 차트 열기</span>-->
<!--													</button>-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td colspan="3">-->
<!--													<div class="chart_area_wrap2 chart_area">-->
<!--														<div class="chart_info">-->
<!--															<ul>-->
<!--																<li>-->
<!--																	<span>고가 (24h)</span>-->
<!--																	<span class="price price_up">51,137,000</span>-->
<!--																</li>-->
<!--																<li>-->
<!--																	<span>저가 (24h)</span>-->
<!--																	<span class="price price_down">51,137,000</span>-->
<!--																</li>-->
<!--																<li>-->
<!--																	<span>거래량 (24h)</span>-->
<!--																	<span class="volume">4,338 BTC</span>-->
<!--																</li>-->
<!--															</ul>-->
<!--														</div>-->
<!--													</div>-->
<!--												</td>-->
<!--											</tr>-->
<!--											</tbody>-->
<!--										</table>-->
<!--									</div>-->
<!--								</div>-->
								<img src="../../assets/images/img_crypto.png" alt="">
							</section>

							<section class="news_sec district_news_sec">
								<header class="sec_head type_underline">
									<h2 class="sec_ttl">디스트리트</h2>
									<a href="" class="btn btn_ic btn_more open_more">
										<i class="arw arw_line_l">더보기</i>
									</a>
								</header>
								<div class="sec_body">
									<div class="district_news_wrap">
										<ul class="grid news_list">
											<li class="col col_4 news_node">
												<div class="news_item type_thumb">
													<a href="#" class="link" aria-describedby="today_news"></a>
													<div class="thumb_area">
														<img src="../../assets/images/img_sub_news_01.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">38년간 레고로 놀며 ‘꿈의 자격증’ 딴 건축설계사</h3>
														<div class="info_group">
															<p class="time_info">3분 전</p>
															<p class="like_info">좋아요 <span>22</span></p>
														</div>
													</div>
												</div>
											</li>
											<li class="col col_4 news_node">
												<div class="news_item type_thumb">
													<a href="" class="link" aria-describedby="today_news"></a>
													<div class="thumb_area">
														<img src="../../assets/images/img_sub_news_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">소고기 실컷 먹을까… 투뿔 한우 최대 50%싸게 파는곳</h3>
														<div class="info_group">
															<p class="time_info">3분 전</p>
															<p class="like_info">좋아요 <span>5</span></p>
														</div>
													</div>
												</div>
											</li>
											<li class="col col_4 news_node">
												<div class="news_item type_thumb">
													<a href="" class="link" aria-describedby="today_news"></a>
													<div class="thumb_area">
														<img src="../../assets/images/img_sub_news_03.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">최재원, SK그룹 미래 먹거리 ‘전기차 배터리’ 사업 챙긴다</h3>
														<div class="info_group">
															<p class="time_info">3분 전</p>
															<p class="like_info">좋아요 <span>36</span></p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</section>
						</div>
						<div class="col sub_col">
							<section class="news_popularity_sec">
									<div class="sec_head type_underline">
										<h2 class="sec_ttl">인기뉴스</h2>
										<a href="" class="btn btn_ic btn_more open_more">
											<i class="arw arw_line_l">더보기</i>
										</a>
									</div>
									<div class="sec_body">
										<div class="popular_news_wrap">
											<ul class="news_list type_num">
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">1</span>
														<h3 class="news_ttl">“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">2</span>
														<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">3</span>
														<h3 class="news_ttl">“어디까지 오를까”…날아오르는 애플 주가에 국내 수…</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">4</span>
														<h3 class="news_ttl">“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">5</span>
														<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">6</span>
														<h3 class="news_ttl">“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">7</span>
														<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">8</span>
														<h3 class="news_ttl">“어디까지 오를까”…날아오르는 애플 주가에 국내 수…</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">9</span>
														<h3 class="news_ttl">“나만 재밌는거 아니었네”…엔씨, ‘리니지W’ 역대급</h3>
													</a>
												</li>
												<li class="news_node">
													<a href="" class="news_item">
														<span class="num c_point">10</span>
														<h3 class="news_ttl">출·카드발급 때 내는 국세증명, 따로 뽑을 필요 없어</h3>
													</a>
												</li>
											</ul>
										</div>
									</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="mk_body_news_group">
				<div class="set_inner">
					<div class="grid grid_custom type_2">
						<div class="col main_col">
							<section class="news_sec latest_news_sec">
								<header class="sec_head type_underline">
									<h2 class="sec_ttl">암호화폐 기사</h2>
								</header>
								<div class="sec_body">
									<div class="latest_news_wrap">
										<ul class="news_list latest_news_list">
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node ad_wrap">
												<a href="#" class="news_item">
													<img src="../../assets/images/img_latest_ad01.png" alt="">
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
											<li class="news_node ad_wrap">
												<a href="#" class="news_item">
													<img src="../../assets/images/img_latest_ad01.png" alt="">
												</a>
											</li>
											<li class="news_node">
												<a href="#" class="news_item">
													<div class="thumb_area">
														<img src="../../assets/images/img_highlight_02.png" alt="">
													</div>
													<div class="txt_area">
														<h3 class="news_ttl">中과 특수성 강조한 文
															“베이징올림픽 보이콧 검토안해”</h3>
														<p class="news_desc">
															코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</p>
														<div class="info_group">
															<p class="time_info">3분전</p>
															<p class="like_info">가장 많이 공유된 기사</p>
														</div>
													</div>
													<div class="time_area">
														<span>03.12 <br>2022</span>
													</div>
												</a>
											</li>
										</ul>
										<div class="btn_area">
											<button type="button" class="btn basic w_f drop_sub_news_btn h_s ic_before">
												<span>더보기</span>
											</button>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col sub_col">
							<div class="ad_wrap side_ad">
								<a href="">
									<img src="../../assets/images/img_side_ad_01.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- e: Container -->


<?php include_once '../_inc/_footer.php'; ?>
<?php include_once '../_inc/_foot.php'; ?>