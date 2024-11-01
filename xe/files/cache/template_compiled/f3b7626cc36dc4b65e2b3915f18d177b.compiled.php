<?php if(!defined("__XE__"))exit;?><header id="gnb">
        <div id="navi_wrap" class="row_c">
            <div id="logo"><a href="http://ihwork.dothome.co.kr/backsansu/main.html"><img src= "http://ihwork.dothome.co.kr/backsansu/img/main/logo.png" alt="천지차이백산수"></a>
            </div><!-- logo -->
            <!-- 모바일 헤더의 로그인, 모바일 메뉴 아이콘 -->
            <div id="mb_menu">
                <div id="mb_btn">
                    <span class="material-symbols-outlined">menu</span>
                </div><!-- mb_btn -->
                <!-- mb_btn -->
            </div>
            <!-- 모바일 네비게이션 어두운 배경, 닫기버튼 -->
            <div id="mb_navi_bg">
                <div class="mb_close">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <!-- 모바일 네비게이션 복사 영역 -->
            <div id="mb_navi">
                <nav class="mb_navi_wrap">
                    <!-- pc:#navi = mobile navi copy : .mb_navi_wrap 안의 ul -->
                </nav>
            </div>
            <div class="login_box">
                <div class="login">
                    <a href="http://ihwork.dothome.co.kr/backsansu/login.html">로그인</a>
                </div>
                <div class="join">
                    <a href="#">회원가입</a>
                </div>
            </div>
            <!-- pc 네비게이션 -->
            <nav id="navi">
                <ul class="main_navi">
                    <li><!-- 1 -->
                        <a href="#"><span>브랜드스토리</span></a>
                        <nav class="sub_navi">
                            <ul>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub01_01.html">브랜드스토리</a></li>
                                <!-- <li><a href="http://ihwork.dothome.co.kr/backsansu/#">건강한백산수</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/#">안전한백산수</a></li> -->
                            </ul>
                        </nav>
                    </li>
                    <li><!-- 2 -->
                        <a href="#"><span>제품</span></a>
                        <nav class="sub_navi">
                            <ul>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub02_01.html">백산수용량</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub02_02.html">백산수무라벨</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub02_03.html">소아환아희망라벨</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub02_04.html">제품주문</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><!-- 3 -->
                        <a href="#"><span>라이프스타일</span></a>
                        <nav class="sub_navi">
                            <ul>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub03_01.html">태생부터천지차이</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub03_01.html">커피와함께백산수</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub03_01.html">백산수사용카페</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><!-- 4 -->
                        <a href="#"><span>홍보</span></a>
                        <nav class="sub_navi">
                            <ul>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub04_01.html">TV - CF</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub04_02.html">SNS</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/backsansu/sub04_02.html">해피해피캠페인</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><!-- 5 -->
                        <a href="#"><span>커뮤니티</span></a>
                        <nav class="sub_navi">
                            <ul>
                                <li><a href="http://ihwork.dothome.co.kr/xe/sub05_01_notice">공지사항</a></li>
                                <li><a href="http://ihwork.dothome.co.kr/xe/sub05_01_notice">자주하는질문</a></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </nav>
        </div><!-- navi_wrap -->
        <!-- 배경 -->
        <div id="navi_bg"></div>
    </header>
    <div id="sub_menu" class="row_c">
        <dl>
            <dt><a href="#">커뮤니티</a></dt>
            <dd><a href="http://ihwork.dothome.co.kr/xe/sub05_01_notice">공지사항</a></dd>
            <dd><a href="http://ihwork.dothome.co.kr/xe/sub05_01_notice">자주하는질문</a></dd>
        </dl>
    </div>
    <div id="notice">
        <div class="row_c">
            <div class="notice_wrap">
                <p>
                    <span><img src= "http://ihwork.dothome.co.kr/backsansu/img/sub02_04/home.png" alt="홈"></span>
                    <span>   >  공지사항 > 자주하는질문</span>
                </p>
                <h2>공지사항</h2>
                <div class="notice_list"><?php echo $__Context->content ?></div>
                
            </div><!-- notice_wrap -->
        </div><!-- row_c -->
    </div> <!--notice  -->
    <!-- footer///////////////////////////// -->
    <footer>
        <div class="row_c">
            <div class="foot_logo">
                <img src= "http://ihwork.dothome.co.kr/backsansu/img/main/foot_logo.png" alt="푸터로고">
                <span>농심</span>
            </div>
            <ul class="foot_text">
                <li>개인정보처리방침 ㅣ 이메일주소무단수집거부</li>
                <li>서울특별시 동작구 여의대방로 112 (신대방동) TEL : 080-023-5181 COPYRIGHTⓒNONGSHIM.CO.LTD All Rights Reserved </li>
                <li>사업자등록번호 : 118-81-03914 ㅣ 통신판매업 신고번호 : 04-680-429 ㅣ 대표이사 : 이병학 </li>
            </ul>
            <div class="foot_pro">
                <img src= "http://ihwork.dothome.co.kr/backsansu/img/main/foot_pro.png" alt="백산수생수">
            </div>
        </div>
    </footer>