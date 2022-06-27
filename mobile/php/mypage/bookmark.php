<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
    <?php include_once '../_inc/header/Stock.php'; ?>
    <?php include_once '../_inc/header/bookmark_head.php'; ?>
</header>
<!-- e: Header -->
    <!-- s: Container -->
    <main id="container">
        <section class="contents my_page bookmark_page">
            <div class="set_inner">
                <section class="news_sec">
                    <header class="sec_head">
                        <form action="" class="input_area search type_round">
                            <div class="input_box">
                                <input type="search" placeholder="기사를 검색해 보세요." spellcheck="false">
                                <button><i class="ic">검색</i></button>
                            </div>
                        </form>
                        <div class="manage_area">
                            <p class="length_info">총 <b class="c_point">10</b>개</p>
                            <button class="edit_bookmark">편집</button>
                        </div>
                        <div class="select_area is_active">
                            <div class="input_area check">
                                <div class="input_box">
                                    <label for="allSelect">
                                        <input id="allSelect" type="checkbox" name="agree"
                                               value="allSelect">
                                        <span>전체 선택</span>
                                    </label>
                                    <button class="delete_btn">삭제</button>
                                </div>
                            </div>
                        </div>
                        <div class="select_area">
                            <div class="input_area check">
                                <div class="input_box">
                                    <label for="selcectCencel">
                                        <input id="selcectCencel" type="checkbox" name="agree"
                                               value="selcectCencel">
                                        <span>선택해제</span>
                                    </label>
                                    <button class="delete_btn">삭제 <b class="c_point">2</b></button>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="sec_body">
                        <div class="latest_news_wrap">
                            <ul class="news_list latest_news_list">
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_01.png" alt="">
                                        </div>
                                        <div id="text1" class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">‘절대 안찍을 후보’ 조사
                                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                                윤석열 39.5% 득표… 이재명은‘절대 안찍을 후보’ 조사
                                                윤석열 39.5% 득표… 이재명은</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 25</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area" style="display: none;">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">한국 컬링, 일본에 10-5 완승 …3승 3패로 ‘4강 가능성 ↑’</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 25</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 25</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area" style="display: none;">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 25</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 25</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 25</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 3</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 3</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="news_node">
                                    <a href="#" class="news_item">
                                        <div class="input_area check">
                                            <div class="input_box">
                                                <label>
                                                    <input class="select" type="checkbox" name="agree" value="select">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="thumb_area">
                                            <img src="../../assets/images/img_highlight_02.png" alt="">
                                        </div>
                                        <div class="txt_area">
                                            <p class="cate">일반</p>
                                            <h3 class="news_ttl">中과 특수성 강조한 文
                                                “베이징올림픽 보이콧 검토안해”</h3>
                                            <div class="info_group">
                                                <p class="time_info">3분전</p>
                                                <p class="like_info">좋아요 3</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>