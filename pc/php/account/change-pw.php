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
        <section class="contents account_page change_pw_page">
            <div class="min_inner">
                <article class="account_sec">
                    <h1 class="page_ttl">비밀번호 변경</h1>
                    <form action="" class="account_wrap account_form">
                        <p class="taC">새로운 비밀번호를 입력해 주세요.</p>
                        <div class="input_area is_error">
                            <label for="newPw">새 비밀번호</label>
                            <div class="input_box">
                                <input id="newPw" type="text" placeholder="새로운 비밀번호를 입력하세요.">
                                <button type="button" class="btn btn_ic remove_val">
                                    <i class="ic ic_close_m"></i>
                                    <span class="is_blind">지우기</span>
                                </button>
                            </div>
                            <p class="state_txt">비밀번호는 영문+숫자 조합 8~20자 이내로 입력해 주세요.</p>
                        </div>
                        <div class="input_area is_error">
                            <label for="pwConfirm">새 비밀번호 확인</label>
                            <div class="input_box">
                                <input id="pwConfirm" type="text" placeholder="비밀번호를 다시 한번 입력하세요.">
                                <button type="button" class="btn btn_ic remove_val">
                                    <i class="ic ic_close_m"></i>
                                    <span class="is_blind">지우기</span>
                                </button>
                            </div>
                            <p class="state_txt">비밀번호가 일치하지 않습니다.</p>
                        </div>
                        <div class="btn_area">
                            <a href="#" class="btn strong w_f h_l">비밀번호 설정</a>
                        </div>
                    </form>
                </article>
            </div>
            <div class="ad_wrap">
                <a href="" class="ad_box">
                    <img src="../../assets/images/img_ad_banner01.png" alt="">
                </a>
            </div>
        </section>
    </main>
    <!-- e: Container -->

    <?php include_once '../_inc/_footer_no_snb.php'; ?>
    <?php include_once '../_inc/_foot.php'; ?>