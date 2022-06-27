<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
	<?php include_once '../_inc/header/Stock.php'; ?>
	<?php include_once '../_inc/header/_GNB.php'; ?>
	<?php include_once '../_inc/header/_SearchUi.php'; ?>
</header>
<div class="dim"></div>
<!-- e: Header -->


<!-- s: Container -->
	<main id="container">
		<section class="contents account_page complete_page">
			<div class="min_inner">
				<article class="account_sec">
					<h1 class="page_ttl">인증 메일 발송 완료</h1>
					<div class="account_wrap">
						<p class="taC">입력하신 메일주소로 인증 메일이 발송 되었습니다. <br>
							24시간이내에 인증을 완료해주세요.</p>
						<dl class="tbl_list">
							<dt><span>이메일 주소</span></dt>
							<dd><b>won@naver.com</b></dd>
						</dl>
						<div class="btn_area grid grid_4">
							<div class="col col_6"><a href="#" class="btn basic w_f h_l">돌아가기</a></div>
							<div class="col col_6"><a href="#" class="btn strong w_f h_l">로그인</a></div>
						</div>
					</div>
				</article>
			</div>
		</section>
	</main>
	<!-- e: Container -->

<?php include_once '../_inc/_footer_no_snb.php'; ?>
<?php include_once '../_inc/_foot.php'; ?>