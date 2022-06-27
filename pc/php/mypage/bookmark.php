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
		<h1 class="page_ttl is_blind">기사관리</h1>
		<section class="contents list_page bookmark_page my_page">
			<div class="mk_body_news_group">
				<div class="set_inner">
					<div class="grid grid_custom type_2">
						<div class="col sub_col">
							<aside class="snb">
								<nav class="snb_menu_wrap">
									<div class="snb_menu_group">
										<div class="group_ttl_area">
											<h4 class="ttl">기사 관리</h4>
										</div>
										<ul class="snb_menu_list">
											<li class="snb_menu_node is_active"><a href="" class="snb_menu_item"><span>북마크한 기사</span></a></li>
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>최근 본 기사</span></a></li>
										</ul>
									</div>
									<div class="snb_menu_group">
										<div class="group_ttl_area">
											<h4 class="ttl">내 정보관리</h4>
										</div>
										<ul class="snb_menu_list">
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>회원정보</span></a></li>
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>결제내역 / 환불</span></a></li>
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>고객센터 문의</span></a></li>
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>회원 탈퇴</span></a></li>
										</ul>
									</div>
									<div class="snb_menu_group">
										<div class="group_ttl_area">
											<h4 class="ttl">서비스 이용 안내</h4>
										</div>
										<ul class="snb_menu_list">
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>유료서비스안내</span></a></li>
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>신문구독신청</span></a></li>
											<li class="snb_menu_node"><a href="" class="snb_menu_item"><span>서비스 전화번호 안내</span></a></li>
										</ul>
									</div>
								</nav>
							</aside>
						</div>
						<div class="col main_col">
							<section class="news_sec latest_news_sec">
								<header class="sec_head">
									<div class="type_underline">
										<h2 class="sec_ttl">북마크한 기사</h2>
										<form action="" class="input_area search type_round">
											<div class="input_box">
												<input type="search" placeholder="기사를 검색해 보세요." spellcheck="false">
												<button><i class="ic ic_search_l">검색</i></button>
											</div>
										</form>
									</div>
									<div class="manage_area">
										<p class="length_info">총 <b class="c_point">10</b>개</p>
										<button class="edit_bookmark">편집</button>
									</div>
									<div class="select_area is_active">
										<div class="input_area check">
											<div class="input_box">
												<label for="allSelect">
													<input id="allSelect" type="checkbox" name="agree"
													       value="allSelect">
													<span>전체 선택</span>
												</label>
												<button class="delete_btn">삭제 <p class="length">2</p></button>
											</div>
										</div>
									</div>
									<div class="select_area">
										<div class="input_area check">
											<div class="input_box">
												<label for="selcectCencel">
													<input id="selcectCencel" type="checkbox" name="agree"
													       value="selcectCencel">
													<span>선택해제</span>
												</label>
												<button class="delete_btn">삭제 <b class="c_point">2</b></button>
											</div>
										</div>
									</div>
								</header>
								<div class="sec_body">
									<div class="sec_body">
										<div class="latest_news_wrap">
											<ul class="news_list latest_news_list">
												<li class="news_node">
                          <div class="news_item">
                            <!-- 편집모드일 경우  '.link'는 'display:none' -->
                            <a href="#" class="link" aria-describedby="text1"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 id="text1" class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select"><span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_01.png" alt="">
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
												</li>
												<li class="news_node">
                          <div class="news_item">
                            <a href="#" class="link"></a>
                            <div class="input_area check">
                              <div class="input_box">
                                <label>
                                  <input class="select" type="checkbox" name="agree" value="select">
                                  <span></span>
                                  <span class="is_blind">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</span>
                                </label>
                              </div>
                            </div>
                            <div class="txt_area">
                              <p class="cate">정치</p>
                              <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                윤석열 39.5% 득표… 이재명은</h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이
                                140억달러(16조7678억원)로 역대 최고치를 경신한 것으로 나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">좋아요 50</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12 <br>2022</span>
                            </div>
                          </div>
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
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- e: Container -->

<?php include_once '../_inc/_footer_no_snb.php'; ?>
	<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>