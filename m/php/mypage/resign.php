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
		<section class="contents resign_page my_page">
			<div class="set_inner">
				<article class="mypage_sec">
					<header class="sec_head">
						<h2 class="sec_ttl is_blind">회원 탈퇴</h2>
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
								<button class="btn strong w_f h_xl">확인</button>
							</div>
						</div>
					</div>
				</article>
			</div>
		</section>
	</main>
	<!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
	<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>