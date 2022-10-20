<?php include_once '../_inc/_head.php'; ?>

  <!-- s: Header -->
  <header id="header">
    <?php include_once '../_inc/header/Stock.php'; ?>
    <?php include_once '../_inc/header/join_head.php'; ?>
  </header>
  <!-- e: Header -->
  <!-- s: Container -->
  <main id="container">
    <section class="contents account_page join_form_page is_fix">
      <div class="set_inner">
        <article class="account_sec join_sec">
          <form action="" class="account_form account_wrap join_wrap">
            <div class="input_area is_error">
              <label for="mail">이메일 <i class="require">필수</i></label>
              <div class="input_box">
                <input id="mail" type="text" placeholder="아이디">

              </div>
              <p class="state_txt">이미 가입된 이메일 주소입니다.</p>
            </div>
            <div class="input_area">
              <label for="pw">비밀번호 <i class="require">필수</i></label>
              <span class="input_info">영문+숫자 조합 8-20자 이내 </span>
              <div class="input_box">
                <input type="password" id="pw" placeholder="비밀번호를 입력해주세요.">

              </div>
            </div>
            <div class="input_area">
              <label for="pw">비밀번호 재확인 <i class="require">필수</i></label>
              <div class="input_box">
                <input type="password" id="pwConfirm" placeholder="비밀번호를 다시 한번 입력하세요.">
              </div>
            </div>
            <div class="input_group age_group line">
              <div class="input_area radio type_hor">
                <div class="input_box">
                  <input id="over14" type="radio" name="age" value="Y">
                  <label for="over14">만 14세 이상입니다.</label>
                </div>
                <div class="input_box">
                  <input id="nuder14" type="radio" name="age" value="N">
                  <label for="nuder14">만 14세 미만입니다.</label>
                </div>
              </div>
              <div class="btn_area">
                <button class="btn basic w_f h_m type_round"><span>법정대리인 본인 확인</span></button>
                <button class="btn basic w_f h_m type_round is_success"><i
                      class="ic checked"></i><span>법정대리인 인증 완료</span>
                </button>
              </div>
            </div>
            <div class="input_group agree_group">
              <div class="input_area check is_all">
                <div class="input_box">
                  <label for="allAgree">
                    <input id="allAgree" type="radio" name="allAgree" value="Y">
                    <span><b>전체 약관 동의</b></span>
                  </label>
                </div>
                <hr class="line">
                <div class="input_box">
                  <label for="useAgree">
                    <input id="useAgree" type="radio" name="agree" value="use">
                    <span>[필수] 이용약관 동의</span>
                  </label>
                  <button class="btn btn_txt has_underL" id="openTerms">보기</button>
                </div>
                <div class="input_box">
                  <label for="privacyAgree">
                    <input id="privacyAgree" type="radio" name="agree" value="privacy">
                    <span>[필수] 개인정보 수집 및 이용 동의</span>
                  </label>
                  <button class="btn btn_txt has_underL" id="openPrivacy">보기</button>
                </div>
                <div class="input_box">
                  <label for="marketingAgree">
                    <input id="marketingAgree" type="radio" name="agree" value="marketing">
                    <span>[선택] 광고성 메일 수신 동의</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="btn_area">
              <button class="btn w_f h_xl strong">회원가입</button>
            </div>
          </form>
        </article>
      </div>
      <div class="ad_wrap">
        <a href="" class="ad_box">
          <img src="../../assets/images/img_ad_banner01.png" alt="">
        </a>
      </div>
      <div class="terms_modal_wrap terms_use">
        <div class="terms_modal_inner">
          <h2 class="modal_ttl taC">이용약관 동의</h2>
          <button class="btn close_btn">
            <i class="ic">닫기</i>

          </button>
          <div class="terms_txt">
            <h3>이용약관 동의</h3>
            <p><b>제 1장 총칙</b></p><br>
            <p>제 1조 (목적)</p>
            <p>이 약관은 매경미디어그룹의 통합사이트 운영사인 ㈜매경닷컴과 관계사인 ㈜매일경제신문, ㈜매경비즈(이하”당사”라고 함)가 제공하는 인터넷 서비스(이하 서비스라 함)의
              이용조건 및 절차에 관한
              사항을 규정함을 목적으로 합니다.</p><br>
            <p>제 2조 (용어의 정의)</p><br><br>
            <p>1. 회원: 서비스를 제공받기 위하여 이 약관을 통하여 회사와 이용계약을 체결한 자</p><br>
            <p>2. 아이디(ID): 회원 식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 부여하는 문자와 숫자의 조합</p><br>
            <p>3. 이용계약: 서비스를 제공받기 위하여 이 약관으로 회사와 회원 간에 체결하는 계약</p><br>
            <p>4. 비밀번호: 회원의 비밀 보호를 위해 회원 자신이 설정한 문자와 숫자의 조합</p><br>
            <p>5. 이 약관에서 사용하는 용어의 정의는 전항에서 정한 것을 제외하고는 거래관행 및 관계법령에 따릅니다</p><br>
            <p>[부칙]</p>
            <p>본 약관은 2020년 2월 24일부터 적용됩니다. 단, 본 약관의 공지 이후 시행일 이전에 본 약관에 동의한 경우에는 동의 시부터 본 약관이 적용됩니다.</p><br>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>[부칙]</p>
            <p>본 약관은 2020년 2월 24일부터 적용됩니다. 단, 본 약관의 공지 이후 시행일 이전에 본 약관에 동의한 경우에는 동의 시부터 본 약관이 적용됩니다.</p><br>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>[부칙]</p>
            <p>본 약관은 2020년 2월 24일부터 적용됩니다. 단, 본 약관의 공지 이후 시행일 이전에 본 약관에 동의한 경우에는 동의 시부터 본 약관이 적용됩니다.</p><br>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
          </div>
        </div>
      </div>
      <div class="terms_modal_wrap privacy">
        <div class="terms_modal_inner">
          <h2 class="modal_ttl taC">매일경제 이용약관</h2>
          <button class="btn close_btn">
            <i class="ic">닫기</i>

          </button>
          <div class="terms_txt">
            <h3>이용약관 동의</h3>
            <p><b>제 1장 총칙</b></p><br>
            <p>제 1조 (목적)</p>
            <p>이 약관은 매경미디어그룹의 통합사이트 운영사인 ㈜매경닷컴과 관계사인 ㈜매일경제신문, ㈜매경비즈(이하”당사”라고 함)가 제공하는 인터넷 서비스(이하 서비스라 함)의
              이용조건 및 절차에 관한
              사항을 규정함을 목적으로 합니다.</p><br>
            <p>제 2조 (용어의 정의)</p><br><br>
            <p>1. 회원: 서비스를 제공받기 위하여 이 약관을 통하여 회사와 이용계약을 체결한 자</p><br>
            <p>2. 아이디(ID): 회원 식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 부여하는 문자와 숫자의 조합</p><br>
            <p>3. 이용계약: 서비스를 제공받기 위하여 이 약관으로 회사와 회원 간에 체결하는 계약</p><br>
            <p>4. 비밀번호: 회원의 비밀 보호를 위해 회원 자신이 설정한 문자와 숫자의 조합</p><br>
            <p>5. 이 약관에서 사용하는 용어의 정의는 전항에서 정한 것을 제외하고는 거래관행 및 관계법령에 따릅니다</p><br>
            <p>[부칙]</p>
            <p>본 약관은 2020년 2월 24일부터 적용됩니다. 단, 본 약관의 공지 이후 시행일 이전에 본 약관에 동의한 경우에는 동의 시부터 본 약관이 적용됩니다.</p><br>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>[부칙]</p>
            <p>본 약관은 2020년 2월 24일부터 적용됩니다. 단, 본 약관의 공지 이후 시행일 이전에 본 약관에 동의한 경우에는 동의 시부터 본 약관이 적용됩니다.</p><br>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>[부칙]</p>
            <p>본 약관은 2020년 2월 24일부터 적용됩니다. 단, 본 약관의 공지 이후 시행일 이전에 본 약관에 동의한 경우에는 동의 시부터 본 약관이 적용됩니다.</p><br>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
            <p>.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
  <script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>