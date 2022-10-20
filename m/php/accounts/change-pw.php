<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
	<header id="header">
    <?php include_once '../_inc/header/Stock.php'; ?>
    <?php include_once '../_inc/header/change_pw_head.php'; ?>
</header>
<!-- e: Header -->
    <!-- s: Container -->
    <main id="container">
        <section class="contents account_page change_pw_page is_fix">
            <div class="set_inner">
                <article class="account_sec">
                    <form action="" class="account_wrap account_form">
                        <p class="taL">새로운 비밀번호를 입력해 주세요.</p>
                        <div class="input_area is_error">
                            <label for="newPw">신규 비밀번호</label>
                            <div class="input_box">
                                <input id="newPw" type="text" placeholder="새로운 비밀번호를 입력하세요.">

                            </div>
                            <p class="state_txt">비밀번호는 영문+숫자 조합 8~20자 이내로 입력해 주세요.</p>
                        </div>
                        <div class="input_area is_error">
                            <label for="pwConfirm">비밀번호 확인</label>
                            <div class="input_box">
                                <input id="pwConfirm" type="text" placeholder="비밀번호를 다시 한번 입력하세요.">

                            </div>
                            <p class="state_txt">비밀번호가 일치하지 않습니다.</p>
                        </div>
                        <div class="btn_area">
                            <a href="#" class="btn strong w_f h_xl">비밀번호 설정</a>
                        </div>
                    </form>
                </article>
            </div>
        </section>
    </main>
    <!-- e: Container -->


<?php include_once '../_inc/_footer_fix.php'; ?>
<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>