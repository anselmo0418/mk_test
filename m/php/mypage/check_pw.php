<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
    <?php include_once '../_inc/header/Stock.php'; ?>
    <?php include_once '../_inc/header/resign_head.php'; ?>
</header>
<!-- e: Header -->

    <!-- s: Container -->
    <main id="container">
        <section class="contents myinfo_page check_pw_page my_page">
            <div class="set_inner">
             <article class="mypage_sec">
                <div class="sec_body">
                    <div class="info_wrap">
                        <div class="input_inner">
                            <div class="ttl_area">
                                <h3>비밀번호 재확인</h3>
                                <p>탈퇴 진행을 위해 비밀번호 재확인이 필요합니다.</p>
                            </div>
                            <div class="input_area">
                                <div class="input_box">
                                    <input type="email" id="email" placeholder="아이디">
                                </div>
                            </div>
                            <div class="input_area">
                                <div class="input_box">
                                    <input type="password" id="pw" placeholder="비밀번호">
                                </div>
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