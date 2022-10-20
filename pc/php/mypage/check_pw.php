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
	<section class="contents resign_page check_page my_page">
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
						          <li class="snb_menu_node"><a href="" class="snb_menu_item"><span>회원정보</span></a></li>
						          <li class="snb_menu_node"><a href="" class="snb_menu_item"><span>결제내역 / 환불</span></a></li>
						          <li class="snb_menu_node"><a href="" class="snb_menu_item"><span>고객센터 문의</span></a></li>
						          <li class="snb_menu_node is_active"><a href="" class="snb_menu_item"><span>회원 탈퇴</span></a></li>
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
		            <h2 class="sec_ttl">회원 탈퇴</h2>
	            </header>
	            <div class="sec_body">
		            <div class="info_wrap">
			            <div class="input_inner">
				            <div class="ttl_area">
					            <h3>비밀번호 재확인</h3>
					            <p>탈퇴 진행을 위해 비밀번호 재확인이 필요합니다.</p>
				            </div>
				            <div class="input_area type_hrz">
					            <label for="email">아이디</label>
					            <div class="input_box">
						            <input type="email" id="email" placeholder="아이디를 입력하세요.">
					            </div>
				            </div>
				            <div class="input_area type_hrz">
					            <label for="pw">비밀번호</label>
					            <div class="input_box">
						            <input type="password" id="pw" placeholder="비밀번호를 입력하세요.">
					            </div>
				            </div>
			            </div>
			            <div class="btn_area taC">
				            <button class="btn strong w_l h_l">확인</button>
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