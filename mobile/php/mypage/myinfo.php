<?php include_once '../_inc/_head.php'; ?>
	
	<!-- s: Header -->
	<header id="header">
		<?php include_once '../_inc/header/Stock.php'; ?>
		<?php include_once '../_inc/header/myinfo_head.php'; ?>
	</header>
	<!-- e: Header -->

	<!-- s: Container -->
	<main id="container">
		<h1 class="page_ttl is_blind">내정보관리</h1>
		<div class="set_inner">
			<section class="contents myinfo_page my_page">
				<article class="mypage_sec">
					<div class="sec_body">
						<div class="info_wrap basic_info_wrap">
							<div class="info_wrap_head">
								<h3 class="ttl is_blind">기본정보</h3>
							</div>
							<div class="info_wrap_body">
								<dl class="label_list email">
									<dt><label for="email">이메일</label></dt>
									<dd>
										<div class="input_area type_hrz">
											<div class="input_box">
												<input type="text" id="email" value="sosu6270@naver.com"
												       readonly>
											</div>
											<button class="btn basic h_xl w_l email_change">변경</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list certify">
									<dt><label for="email">인증할 이메일 주소</label></dt>
									<dd>
										<div class="input_area type_hrz">
											<div class="input_box">
												<input type="text" id="email_certify">
											</div>
											<button class="btn strong h_xl w_l">인증 메일 받기</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt><span class="label">회원 구분</span></dt>
									<dd>
										<span>개인회원</span>
									</dd>
								</dl>
								<dl class="label_list">
									<dt><label for="nick"></label>별명</dt>
									<dd>
										<div class="input_area type_hrz">
											<div class="input_box">
												<input type="text" id="nick" value="sosu6270" readonly>
											</div>
											<button class="btn basic h_xl w_l">변경</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list radio">
									<dt><span class="label">광고 메일 수신 동의</span></dt>
									<dd>
										<div class="input_area radio type_hrz">
											<div class="input_box">
												<label>
													<input type="radio" name="ad_agree" value="Y">
													<span>수신 동의</span>
												</label>
											</div>
											<div class="input_box">
												<label>
													<input type="radio" name="ad_agree" value="N">
													<span>수신 거부</span>
												</label>
											</div>
										</div>
									</dd>
								</dl>
							</div>
						</div>
						
						<div class="info_wrap pw_info_wrap">
							<div class="info_wrap_head type_underline">
								<h3 class="ttl">비밀번호 변경</h3>
							</div>
							<div class="info_wrap_body">
								<dl class="label_list">
									<dt><label for="nowPw">현재 비밀번호</label></dt>
									<dd>
										<div class="input_area">
											<div class="input_box">
												<input type="password" id="nowPw"/>
											</div>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt><label for="newPw">현재 비밀번호</label></dt>
									<dd>
										<div class="input_area">
											<div class="input_box">
												<input type="password" id="newPw"/>
											</div>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt><label for="confirmPw">새 비밀번호 확인</label></dt>
									<dd>
										<div class="input_area">
											<div class="input_box">
												<input type="password" id="confirmPw"/>
											</div>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt></dt>
									<dd>
										<div class="btn_area">
											<button class="btn strong w_f h_xl">비밀번호 변경</button>
										</div>
									</dd>
								</dl>
							</div>
						</div>
						<div class="info_wrap sns_info_wrap">
							<div class="info_wrap_head type_underline">
								<h3 class="ttl">계정 연결</h3>
							</div>
							<div class="info_wrap_body">
								<dl class="label_list">
									<dt>
										<i class="ic sns_s ic_email"></i>
										<span class="label">이메일로 로그인</span>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s email_join_btn">계정연결</button>
										</div>
									</dd>
								</dl>
								<div class="email_join_group">
									<div class="ttl_area">
										<h4 class="ttl">이메일 회원가입</h4>
									</div>
									<form action="" class="join_form">
										<div class="input_area type_hrz">
											<label for="join_email">이메일</label>
											<div class="input_box">
												<input type="email" id="join_email">
											</div>
										</div>
										<div class="input_area type_hrz">
											<label for="join_pw">비밀번호</label>
											<div class="input_box">
												<input type="password" id="join_pw">
											</div>
										</div>
										<div class="input_area type_hrz">
											<label for="join_confirmPw">비밀번호 확인</label>
											<div class="input_box">
												<input type="password" id="join_confirmPw">
											</div>
										</div>
										<button class="btn w_f strong h_xl">이메일 회원가입</button>
									</form>
								</div>
								<dl class="label_list">
									<dt>
										<i class="ic sns_s ic_naver"></i>
										<span class="label">네이버로 로그인</span>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">계정연결</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<i class="ic sns_s ic_kakao"></i>
										<span class="label">카카오로 로그인</span>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">계정연결</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<i class="ic sns_s ic_facebook"></i>
										<span class="label">페이스북으로 로그인</span>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s is_linked">연결해제</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<i class="ic sns_s ic_google"></i>
										<span class="label">구글로 로그인</span>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">계정연결</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<i class="ic sns_s ic_apple"></i>
										<span class="label">애플로 로그인</span>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">계정연결</button>
										</div>
									</dd>
								</dl>
							</div>
						</div>
						<div class="info_wrap identity_info_wrap">
							<div class="info_wrap_head type_underline">
								<h3 class="ttl">본인 확인</h3>
							</div>
							<div class="info_wrap_body">
								<dl class="label_list is_check">
									<dt>본인 확인을 진행하지 않으셨습니다. <br><strong>본인 확인</strong>을 진행해 주세요.</dt>
									<dd>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">재인증</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list is_check">
									<dt>주소를 등록하지 않으셨습니다. <br>주소를 등록해 주세요.</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">재인증</button>
										</div>
									</dd>
								</dl>
							</div>
						</div>
						
						<div class="info_wrap subscribe_info_wrap">
							<div class="info_wrap_head type_underline">
								<h3 class="ttl">구독 인증</h3>
							</div>
							<div class="info_wrap_body">
								<dl class="label_list">
									<dt>
										<p class="label">멤버쉽</p>
										<p class="data">미인증</p>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">인증신청</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<p class="label">매일경제신문</p>
										<p class="data">미인증</p>
									</dt>
									<dd>
										<div class="btn_area">
											<button class="btn basic w_l h_s">인증신청</button>
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<p class="label">매경e신문</p>
										<p class="data on">구독중</p>
									</dt>
									<dd>
										<div class="btn_area">
										
										</div>
									</dd>
								</dl>
								<dl class="label_list">
									<dt>
										<p class="label">매경이코노미</p>
										<p class="data on">구독중</p>
									</dt>
									<dd>
										<div class="btn_area">
										</div>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</article>
			</section>
		</div>
	</main>
	<!-- e: Container -->


<?php include_once '../_inc/_footer_fix.php'; ?>
	<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>