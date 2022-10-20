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
  <h1 class="page_ttl is_blind">내정보관리</h1>
  <section class="contents list_page myinfo_page my_page">
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
                    <li class="snb_menu_node"><a href="" class="snb_menu_item"><span>북마크한 기사</span></a></li>
                    <li class="snb_menu_node"><a href="" class="snb_menu_item"><span>최근 본 기사</span></a></li>
                  </ul>
                </div>
                <div class="snb_menu_group">
                  <div class="group_ttl_area">
                    <h4 class="ttl">내 정보관리</h4>
                  </div>
                  <ul class="snb_menu_list">
                    <li class="snb_menu_node is_active"><a href="" class="snb_menu_item"><span>회원정보</span></a></li>
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
            <article class="account_sec">
              <header class="sec_head type_underline">
                <h2 class="sec_ttl">회원정보</h2>
              </header>
              <div class="sec_body">
                <div class="info_wrap basic_info_wrap">
                  <div class="info_wrap_head">
                    <h3 class="ttl is_blind">기본정보</h3>
                  </div>
                  <div class="info_wrap_body">
                    <dl class="label_list">
                      <dt><label for="email">이메일</label></dt>
                      <dd>
                        <div class="input_area type_hrz">
                          <div class="input_box">
                            <input type="text" id="email" value="sosu6270@naver.com" readonly>
<!--                            <input type="text" id="email" value="sosu6270@naver.com">-->
                          </div>
                          <!--  변경 / 확인 toggle -->
                          <button class="btn basic h_l w_s">변경</button>
<!--                          <button class="btn strong h_l w_s">확인</button>-->
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
<!--                            <input type="text" id="nick" value="sosu6270">-->
                          </div>
                          <button class="btn basic h_l w_s">변경</button>
<!--                          <button class="btn strong h_l w_s">확인</button>-->
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list">
                      <dt><span class="label">광고 메일 수신 동의</span></dt>
                      <dd>
                        <div class="input_area radio type_hrz">
                          <div class="input_box">
                            <label>
                            <input  type="radio" name="ad_agree" value="Y">
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
                        <div class="input_area type_hrz">
                          <div class="input_box">
                            <input type="password" id="nowPw"/>
                          </div>
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list">
                      <dt><label for="newPw">현재 비밀번호</label></dt>
                      <dd>
                        <div class="input_area type_hrz">
                          <div class="input_box">
                            <input type="password" id="newPw"/>
                          </div>
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list">
                      <dt><label for="confirmPw">새 비밀번호 확인</label></dt>
                      <dd>
                        <div class="input_area type_hrz">
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
                          <button class="btn strong w_m h_l">비밀번호 변경하기</button>
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
                          <button class="btn basic w_s h_s email_join_btn">계정연결</button>
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
                        <div class="btn_area taR">
                          <button class="btn strong h_l">이메일 회원가입</button>
                        </div>
                      </form>
                    </div>
                    <dl class="label_list">
                      <dt>
                        <i class="ic sns_s ic_naver"></i>
                        <span class="label">네이버로 로그인</span>
                      </dt>
                      <dd>
                        <div class="btn_area">
                          <button class="btn basic w_s h_s">계정연결</button>
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
                          <button class="btn basic w_s h_s">계정연결</button>
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
                          <button class="btn basic w_s h_s is_linked">연결해제</button>
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
                          <button class="btn basic w_s h_s">계정연결</button>
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
                          <button class="btn basic w_s h_s">계정연결</button>
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
                      <dt>본인 확인을 진행하지 않으셨습니다. <br>아래 버튼을 클릭하여 <strong>본인 확인</strong>을 진행해 주세요.</dt>
                      <dd>
                        <div class="btn_area">
                          <button class="btn basic w_s h_s">본인 확인</button>
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list is_check">
                      <dt>주소를 등록하지 않으셨습니다. <br>주소를 등록해 주세요.</dt>
                      <dd>
                        <div class="btn_area">
                          <button class="btn basic w_s h_s">주소 등록</button>
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
                        <span class="label">멤버십</span>
                      </dt>
                      <dd>
                        <div class="state_area">
                          <span>미인증</span>
                        </div>
                        <div class="btn_area">
                          <button class="btn basic w_s h_s">계정연결</button>
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list">
                      <dt>
                        <span class="label">매일경제신문</span>
                      </dt>
                      <dd>
                        <div class="state_area">
                          <span>미인증</span>
                        </div>
                        <div class="btn_area">
                          <button class="btn basic w_s h_s">계정연결</button>
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list">
                      <dt>
                        <span class="label">매경e신문</span>
                      </dt>
                      <dd>
                        <div class="state_area">
                          <strong>구독 중</strong>
                        </div>
                      </dd>
                    </dl>
                    <dl class="label_list">
                      <dt>
                        <span class="label">매경이코노미</span>
                      </dt>
                      <dd>
                        <div class="state_area">
                          <strong>구독 중</strong>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </article>
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