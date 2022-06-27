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
	<section class="contents resign_page my_page">
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
					            <h3>탈퇴 사유 선택</h3>
				            </div>
				            <div class="input_area radio">
					            <div class="radio_group">
						            <div class="input_box">
							            <label>
											<input type="radio" name="resign">
								            <span>새 계정을 만들고 싶어요.</span>
							            </label>
						            </div>
						            <div class="input_box">
							            <label>
								            <input type="radio" name="resign">
								            <span>사이트 이용이 불편해요</span>
							            </label>
						            </div>
						            <div class="input_box">
							            <label>
								            <input type="radio" name="resign">
								            <span>입력한 개인정보를 삭제하고 싶어요</span>
							            </label>
						            </div>
						            <div class="input_box">
							            <label>
								            <input type="radio" name="resign">
								            <span>기타</span>
							            </label>
						            </div>
					            </div>
					            <div class="input_box txtarea">
						            <textarea placeholder="회원탈퇴 사유를 자유롭게 입력해주세요. (1,000자 내외)"></textarea>
					            </div>
				            </div>
				            <div class="input_area check">
					            <div class="input_box">
						            <label>
							            <input type="checkbox">
							            <span>안내사항을 모두 확인하였으며, 이에 동의합니다.</span>
						            </label>
					            </div>
					            <ul class="dot_list">
						            <li>회원탈퇴 후 현재 아이디로 7일동안 재가입이 불가능 합니다.</li>
							          <li>탈퇴 시 작성하신 게시물과 댓글은 자동 삭제되지 않습니다.</li>
							          <li>작성하신 게시물과 댓글은 탈퇴 후 삭제 할 수 없습니다.</li>
					            </ul>
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