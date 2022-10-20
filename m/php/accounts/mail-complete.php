<?php include_once '../_inc/_head.php'; ?>

        <!-- s: Header -->
    <header id="header">
        <?php include_once '../_inc/header/Stock.php'; ?>
        <?php include_once '../_inc/header/join_head.php'; ?>
    </header>
        <!-- e: Header -->

    <!-- s: Container -->
    <main id="container">
        <section class="contents account_page join_page">
            <div class="set_inner">
                <article class="account_sec">
                    <h1 class="page_ttl taC">인증 메일 발송 완료</h1>
                    <div class="account_wrap">
                        <div class="txt_wrap">
                            <p class="taC">입력하신 메일주소로 인증 메일이 발송 되었습니다. <br>
                                24시간이내에 인증을 완료해주세요.</p>
                        </div>
                        <dl class="tbl_list">
                            <dt><span>이메일 주소</span></dt>
                            <dd><b>won@naver.com</b></dd>
                        </dl>
                        <div class="btn_area grid grid_4">
                            <div class="col col_6"><a href="#" class="btn basic w_f h_xl">돌아가기</a></div>
                            <div class="col col_6"><a href="#" class="btn strong w_f h_xl">로그인</a></div>
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