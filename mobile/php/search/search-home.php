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
		<h1>
			<div class="set_inner"><span class="is_blind">통합검색</span></div>
		</h1>
		<section class="contents list_page search_list search_page">
			<div class="page_head">
				<div class="set_inner">
					<div class="search_result_head">
						<div class="input_area search">
							<div class="input_box">
								<input type="text" value="방역패스">
							</div>
							<div class="btn_box">
								<button type="button" class="search_btn">
									<i class="ic ic_search"></i>
									<span class="is_blind">검색</span>
								</button>
							</div>
						</div>
						<div class="related_search">
							<ul>
								<li>연관 검색어</li>
								<li><a href="javascript:;">코로나</a></li>
								<li><a href="javascript:;">백신</a></li>
								<li><a href="javascript:;">Covid19</a></li>
							</ul>
							<button class="btn btn_ic toggle_view">
								<i class="arw arw_l bottom"></i>
							</button>
						</div>
					</div>
					<div class="tab_wrap col_x3">
						<ul class="nav tab_nav tab_list" role="tablist">
							<li class="nav_item tab_node" role="presentation">
								<a href="#" id="searchAll" class="nav_link tab_item" role="tab" aria-controls="search_result"
								   aria-selected="true">전체</a>
							</li>
							<li class="nav_item tab_node" role="presentation">
								<a href="#" id="searchNews" class="nav_link tab_item w_l" role="tab"
								   aria-controls="economy_cnt" tabindex="-1">뉴스</a>
							</li>
							<li class="nav_item tab_node" role="presentation">
								<a href="#" id="searchKeyword" class="nav_link tab_item" role="tab"
								   aria-controls="politics_cnt" tabindex="-1">경제용어</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
      <div class="page_body tab_content">
			  <div id="search_result" class="tab_pane active" role="tabpanel" aria-labelledby="searchAll" >
				<div class="mk_body_news_group">
					<section class="news_sec search_result_sec">
						<div class="set_inner">
							<header class="sec_head">
								<div class="sec_ttl">
									<p>뉴스 <em class="c_point">825</em></p>
									<button type="button" class="filter_btn">
										<i class="ic ic_filter"></i>
										<span class="is_blind">필터</span>
									</button>
								</div>
								<div class="filter_wrap">
									<ul class="filter_group">
										<li class="filter_node">
											<button type="button" class="filter_item" data-filter="1">정렬순서 <i
														class="ic_check_filter"></i></button>
										</li>
										<li class="filter_node">
											<button type="button" class="filter_item" data-filter="2">기간 <i
														class="ic_check_filter"></i></button>
										</li>
										<li class="filter_node">
											<button type="button" class="filter_item" data-filter="3">카테고리 <i
														class="ic_check_filter"></i></button>
										</li>
										<li class="filter_node">
											<button type="button" class="filter_item" data-filter="4">타입 <i
														class="ic_check_filter"></i></button>
										</li>
										<li class="filter_node">
											<button type="button" class="filter_item" data-filter="5">매체 <i
														class="ic_check_filter"></i></button>
										</li>
										<li class="filter_node">
											<button type="button" class="filter_item" data-filter="6">검색범위 <i
														class="ic_check_filter"></i></button>
										</li>
									</ul>
									<div class="filter_dropdown_wrap">
										<div class="drop_down_wrap" data-filter="1">
											<ul class="dropdown_list radio">
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterOrder" checked value="최신기사">
														<span>최신기사</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterOrder" value="오래된기사">
														<span>오래된기사</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterOrder" value="정확도">
														<span>정확도</span>
													</label>
												</li>
											</ul>
											<div class="btn_area">
												<button type="button" class="confirm_filter_btn">확인</button>
											</div>
										</div>
										<div class="drop_down_wrap period" data-filter="2">
											<div class="dropdown_area">
												<ul class="dropdown_list radio">
													<li class="dropdown_node">
														<label class="dropdown_item">
															<input type="radio" name="filterTerm" checked value="전체">
															<span>전체</span>
														</label>
													</li>
													<li class="dropdown_node">
														<label class="dropdown_item">
															<input type="radio" name="filterTerm" value="1주">
															<span>1주</span>
														</label>
													</li>
													<li class="dropdown_node">
														<label class="dropdown_item">
															<input type="radio" name="filterTerm" value="1개월">
															<span>1개월</span>
														</label>
													</li>
													<li class="dropdown_node">
														<label class="dropdown_item">
															<input type="radio" name="filterTerm" value="1년">
															<span>1년</span>
														</label>
													</li>
													<li class="dropdown_node has_datepicker">
														<label class="dropdown_item">
															<input type="radio" name="filterTerm" value="직접입력">
															<span>직접입력</span>
														</label>
													</li>
												</ul>
												<div class="datepicker_filter">
                          <input type="hidden" id="start_date">
                          <input type="hidden" id="end_date">
                        </div>
											</div>
											<div class="btn_area">
												<button type="button" class="confirm_filter_btn">확인</button>
											</div>
										</div>
										<div class="drop_down_wrap" data-filter="3">
											<ul class="dropdown_list checkbox">
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="전체">
														<span>전체</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="경제">
														<span>경제</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="기업">
														<span>기업</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="사회">
														<span>사회</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="국제">
														<span>국제</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="부동산">
														<span>부동산</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="증권">
														<span>증권</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="정치">
														<span>정치</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="IT·과학">
														<span>IT&middot;과학</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="문화">
														<span>문화</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="연예">
														<span>연예</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="스포츠">
														<span>스포츠</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterCate" value="인기뉴스">
														<span>인기뉴스</span>
													</label>
												</li>
											</ul>
											<div class="btn_area">
												<button type="button" class="confirm_filter_btn">확인</button>
											</div>
										</div>
										<div class="drop_down_wrap" data-filter="4">
											<ul class="dropdown_list radio">
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterType" name="filterCate" value="전체">
														<span>전체</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterType" value="포토">
														<span>포토</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterType" value="영상">
														<span>영상</span>
													</label>
												</li>
											</ul>
											<div class="btn_area">
												<button type="button" class="confirm_filter_btn">확인</button>
											</div>
										</div>
										<div class="drop_down_wrap" data-filter="5">
											<ul class="dropdown_list checkbox">
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterMedia" value="전체">
														<span>전체</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterMedia" value="매일경제">
														<span>매일경제</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterMedia" value="매경이코노미">
														<span>매경이코노미</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="checkbox" name="filterMedia" value="럭스맨">
														<span>럭스맨</span>
													</label>
												</li>
											</ul>
											<div class="btn_area">
												<button type="button" class="confirm_filter_btn">확인</button>
											</div>
										</div>
										<div class="drop_down_wrap" data-filter="6">
											<ul class="dropdown_list radio">
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterRange" value="제목+본문">
														<span>제목+본문</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterRange" value="제목만">
														<span>제목만</span>
													</label>
												</li>
												<li class="dropdown_node">
													<label class="dropdown_item">
														<input type="radio" name="filterRange" value="본문만">
														<span>본문만</span>
													</label>
												</li>
											</ul>
											<div class="btn_area">
												<button type="button" class="confirm_filter_btn">확인</button>
											</div>
										</div>
									</div>
								</div>
								<div class="filter_info_wrap">
									<div class="filter_info">
										<dl>
											<div>
												<dt>기간</dt>
												<dd><span>2022.03.22</span><span>2022.03.25</span>
													<button type="button" class="delete_filter_btn"
													        onclick="deleteThisFilter(this)"></button>
												</dd>
											</div>
											<div>
												<dt>카테고리</dt>
												<dd><p>정치</p>
													<button type="button" class="delete_filter_btn"
													        onclick="deleteThisFilter(this)"></button>
												</dd>
												<dd><p>정치</p>
													<button type="button" class="delete_filter_btn"
													        onclick="deleteThisFilter(this)"></button>
												</dd>
											</div>
										</dl>
									</div>
								</div>
							</header>
							<div class="sec_body">
								<div class="search_result_wrap">
									<ul class="news_list search_result_list">
										<li class="news_node">
											<a href="#" class="news_item">
												<div class="txt_area">
													<p class="cate">사회</p>
													<h3 class="news_ttl">[속보] "임신부는 <b>방역패스</b> 적용 예외자로 인정하기 어려울 듯"
													</h3>
													<div class="info_group">
														<p class="time_info">3분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="#" class="news_item">
												<div class="thumb_area">
													<img src="../../assets/images/img_sub_news_05.png" alt="">
												</div>
												<div class="txt_area">
													<p class="cate">사회</p>
													<h3 class="news_ttl"><b>방역패스</b> 안내문 교체하는 영화관 </h3>
													<div class="info_group">
														<p class="time_info">3분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="#" class="news_item">
												<div class="txt_area">
													<p class="cate">사회</p>
													<h3 class="news_ttl">정부 "<b>방역패스</b> 예외 사유 확대 방안 이번 주 발표..."</h3>
													<div class="info_group">
														<p class="time_info">25분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="#" class="news_item">
												<div class="thumb_area">
													<img src="../../assets/images/img_sub_news_07.png" alt="">
												</div>
												<div class="txt_area">
													<p class="cate">사회</p>
													<h3 class="news_ttl">'<b>방역패스</b> 실랑이' 사라졌지만... "자꾸 바뀌니 헷갈려"</h3>
													<div class="info_group">
														<p class="time_info">25분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="#" class="news_item">
												<div class="thumb_area">
													<img src="../../assets/images/img_sub_news_08.png" alt="">
												</div>
												<div class="txt_area">
													<p class="cate">사회</p>
													<h3 class="news_ttl">방역당국 "서울 청소년 <b>방역패스</b> 효력정지, 서울시와 즉시항고"</h3>
													<div class="info_group">
														<p class="time_info">25분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="#" class="news_item">
												<div class="thumb_area">
													<img src="../../assets/images/img_sub_news_04.png" alt="">
												</div>
												<div class="txt_area">
													<p class="cate">사회</p>
													<h3 class="news_ttl">백신 피해자&middot;학부모단체 "식당&middot;카페서도 <b>방역패스</b>
														중단하라"</h3>
													<div class="info_group">
														<p class="time_info">3분 전</p>
														<p class="like_info">좋아요 <span>22</span></p>
													</div>
												</div>
											</a>
										</li>
									</ul>
									<div class="btn_area">
										<button type="button" class="btn basic w_f h_m drop_sub_news_btn">
											<span>뉴스 더보기</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="news_sec economic_term_sec">
						<div class="set_inner">
							<header class="sec_head type_underline no_mb">
								<h2 class="sec_ttl ttl_sub">경제용어</h2>
								<a href="" class="btn btn_ic btn_more open_more">
									<i class="arw arw_line right">더보기</i>
								</a>
							</header>
							<div class="sec_body">
								<div class="news_wrap economic_term_wrap">
									<ul class="news_list">
										<li class="news_node">
											<a href="javascript:;" class="news_item">
												<div class="txt_area">
													<h3 class="news_ttl">팬데믹(세계적유행)</h3>
													<p class="news_desc">전 세계적으로 전염병이 확산된 상태를 의미하는 말로, 세계보건기구(WHO)의 전염병
														경보 단계 중 최고 위험 등급에
														해당한다.</p>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="javascript:;" class="news_item">
												<div class="txt_area">
													<h3 class="news_ttl">코호트격리</h3>
													<p class="news_desc">코호트격리는 특정 질병 발병 환자와 의료진 모두를
														'동일 집단'(코호트)으로 묶어 통째로 전원 격리해
														확산 위험을 줄이는 조치를 말한다..</p>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
					<section class="news_sec person_info_sec">
						<div class="set_inner">
							<header class="sec_head type_underline no_mb">
								<h2 class="sec_ttl ttl_sub">인물정보</h2>
								<a href="" class="btn btn_ic btn_more open_more">
									<i class="arw arw_line right">더보기</i>
								</a>
							</header>
							<div class="sec_body">
								<div class="news_wrap person_info_wrap">
									<ul class="news_list">
										<li class="news_node">
											<a href="javascript:;" class="news_item">
												<div class="thumb_area">
													<img src="../../assets/images/img_person_info_01.png"
													     alt="정은경 질병관리청 청장">
												</div>
												<div class="txt_area">
													<h3 class="name">정은경</h3>
													<dl class="dl_info">
														<div>
															<dt>출생</dt>
															<dd>1965</dd>
														</div>
														<div>
															<dt>소속</dt>
															<dd>질병관리청(청장)</dd>
														</div>
														<div>
															<dt>학력</dt>
															<dd>서울대 예방의학 박사</dd>
														</div>
													</dl>
												</div>
											</a>
										</li>
										<li class="news_node">
											<a href="javascript:;" class="news_item">
												<div class="thumb_area">
													<img src="../../assets/images/img_person_info_02.png"
													     alt="권덕철 보건복지부 장관">
												</div>
												<div class="txt_area">
													<h3 class="name">권덕철</h3>
													<dl class="dl_info">
														<div>
															<dt>출생</dt>
															<dd>1961</dd>
														</div>
														<div>
															<dt>소속</dt>
															<dd>보건복지부(장관)</dd>
														</div>
														<div>
															<dt>학력</dt>
															<dd>독일슈파이어대학교 <br>행정대학원 박사</dd>
														</div>
													</dl>
												</div>
											</a>
										</li>
										<p class="txt_info">정보제공 연합뉴스</p>
									</ul>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
      </div>
		</section>
	</main>
	<!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
<?php include_once '../_inc/_footer.php'; ?>
	<script src="../../assets/js/common.js"></script>
	<script src="../../assets/js/search.js"></script>
<?php include_once '../_inc/_foot.php'; ?>