<?php
include_once('./_common.php');

// 페이지 제목 (웹접근성 관련)
$g5['title'] = '포럼';
// 현재 페이지만 디자인이 다를 경우 아래 css 추가 
// add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

<!-- 컨텐츠 시작 { -->
 
    <!-- forum / notice -->
    <div class="forum-notice-wrap">
      <div class="forum-notice">
        <!-- 공지사항 -->
        <div class="forum-notice-bbs">
          <div class="forum-notice-bbs-tit">
            <a class="forum-notice-bbs-tit__link" href="#">
              <span class="forum-notice-bbs-tit__bbs">공지사항</span>
              <span class="forum-notice-bbs-tit__more">더보기</span>
            </a>
          </div>
          <div class="forum-notice-bbs-lst">
            <ul class="forum-notice-bbs-lst-g">
              <li class="forum-notice-bbs-lst-cont">
                <a class="forum-notice-bbs-lst-cont__link" href="#">
                  <span class="forum-notice-bbs-lst-cont__tit">08월 07일~ 08월 11일 베스트댓글상 / 인플루언서상 대상자</span>
                  <span class="forum-notice-bbs-lst-cont__date">2023.08.14</span>
                </a>
              </li>
              <li class="forum-notice-bbs-lst-cont">
                <a class="forum-notice-bbs-lst-cont__link" href="#">
                  <span class="forum-notice-bbs-lst-cont__tit">[굿데이 NFT 캠페인 퀴즈 이벤트 2-인터넷신문의 날] 당첨자</span>
                  <span class="forum-notice-bbs-lst-cont__date">2023.07.31</span>
                </a>
              </li>
              <li class="forum-notice-bbs-lst-cont">
                <a class="forum-notice-bbs-lst-cont__link" href="#">
                  <span class="forum-notice-bbs-lst-cont__tit">[굿데이 NFT 캠페인] '6.25전쟁 제73주년 기념 NFT' 발송</span>
                  <span class="forum-notice-bbs-lst-cont__date">2023.06.26</span>
                </a>
              </li>
              <li class="forum-notice-bbs-lst-cont">
                <a class="forum-notice-bbs-lst-cont__link" href="#">
                  <span class="forum-notice-bbs-lst-cont__tit">토큰포스트 에어드랍 페이지 오픈!</span>
                  <span class="forum-notice-bbs-lst-cont__date">2023.04.27</span>
                </a>
              </li>
              <li class="forum-notice-bbs-lst-cont">
                <a class="forum-notice-bbs-lst-cont__link" href="#">
                  <span class="forum-notice-bbs-lst-cont__tit">토큰포스트 지갑 등록 및 NFT 확인 방법 안내</span>
                  <span class="forum-notice-bbs-lst-cont__date">2023.02.13</span>
                </a>
              </li>
              <li class="forum-notice-bbs-lst-cont">
                <a class="forum-notice-bbs-lst-cont__link" href="#">
                  <span class="forum-notice-bbs-lst-cont__tit">[필독] 토큰포스트 활동보상 안내 (22.07.11 update)</span>
                  <span class="forum-notice-bbs-lst-cont__date">2022.07.11</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- 많이 본 게시물 -->
        <div class="forum-notice-mostviewed">
          <div class="forum-notice-mostviewed-tit">
            <a class="forum-notice-mostviewed-tit__link" href="#">
              <span class="forum-notice-mostviewed__bbs">많이 본 게시글</span>
              <span class="forum-notice-mostviewed__more">더보기</span>
            </a>
          </div>
          <div class="forum-notice-mostviewed-lst">
            <ul class="forum-notice-mostviewed-lst-g">
              <li class="forum-notice-mostviewed-lst-cont">
                <a class="forum-notice-mostviewed-lst-cont__link" href="#">
                  <span class="forum-notice-mostviewed-lst-cont__tag">차트분석</span>
                  <span class="forum-notice-mostviewed-lst-cont__tit">23. 08. 17 비트코인 분석(에이엠매니지먼트) - KO</span>
                  <span class="forum-notice-mostviewed-lst-cont__date">2023.08.17</span>
                </a>
              </li>
              <li class="forum-notice-mostviewed-lst-cont">
                <a class="forum-notice-mostviewed-lst-cont__link" href="#">
                  <span class="forum-notice-mostviewed-lst-cont__tag">자유게시판</span>
                  <span class="forum-notice-mostviewed-lst-cont__tit">새롭게 변화한 코인베스터, 어떤 점이 달라졌을까? 🧐</span>
                  <span class="forum-notice-mostviewed-lst-cont__date">2023.08.17</span>
                </a>
              </li>
              <li class="forum-notice-mostviewed-lst-cont">
                <a class="forum-notice-mostviewed-lst-cont__link" href="#">
                  <span class="forum-notice-mostviewed-lst-cont__tag">자유게시판</span>
                  <span class="forum-notice-mostviewed-lst-cont__tit">작은 차이가 큰 차이를 만들어 낸다</span>
                  <span class="forum-notice-mostviewed-lst-cont__date">2023.08.17</span>
                </a>
              </li>
              <li class="forum-notice-mostviewed-lst-cont">
                <a class="forum-notice-mostviewed-lst-cont__link" href="#">
                  <span class="forum-notice-mostviewed-lst-cont__tag">자유게시판</span>
                  <span class="forum-notice-mostviewed-lst-cont__tit">*** 오늘의 명언 ***</span>
                  <span class="forum-notice-mostviewed-lst-cont__date">2023.08.17</span>
                </a>
              </li>
              <li class="forum-notice-mostviewed-lst-cont">
                <a class="forum-notice-mostviewed-lst-cont__link" href="#">
                  <span class="forum-notice-mostviewed-lst-cont__tag">자유게시판</span>
                  <span class="forum-notice-mostviewed-lst-cont__tit">코인베스터, AI 기반 신규 퀀트 전략 상품 트레이딩 시작</span>
                  <span class="forum-notice-mostviewed-lst-cont__date">2023.08.16</span>
                </a>
              </li>
              <li class="forum-notice-mostviewed-lst-cont">
                <a class="forum-notice-mostviewed-lst-cont__link" href="#">
                  <span class="forum-notice-mostviewed-lst-cont__tag">자유게시판</span>
                  <span class="forum-notice-mostviewed-lst-cont__tit">새롭게 변화한 코인베스터, 어떤 점이 달라졌을까? 🧐
                  </span>
                  <span class="forum-notice-mostviewed-lst-cont__date">2023.08.16</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- 검색 -->
      <div class="forum-notice-searchbar">
        <span class="forum-notice-searchbar__txt">관심있는 키워드를 검색해주세요.</span>
      </div>
    </div>

    <!-- forum / category -->
    <div class="forum-category">
      <div class="forum-category-tit">
        <h2 class="forum-category-tit__strong">다양한 이야기 나누기</h2>
      </div>
      <div class="forum-category-btn-g">
        <div class="forum-category-btn">
          <a class="forum-category-btn__link" href="#">
            <div class="forum-category-btn-icon fcbi01_image">
              <span class="blind">암호화폐 게시판 바로가기 아이콘</span>
            </div>
            <div class="forum-category-btn-cont">
              <strong class="forum-category-btn-cont__tit">암호화폐</strong>
              <span class="forum-category-btn-cont__subtit">코인 정보 공유하기</span>
              <span class="forum-category-btn-cont__link">자세히보기</span>
            </div>
          </a>
        </div> 
        <div class="forum-category-btn">
          <a class="forum-category-btn__link" href="#">   
            <div class="forum-category-btn-icon fcbi02_image">
              <span class="blind">손익인증 게시판 바로가기 아이콘</span>
            </div>
            <div class="forum-category-btn-cont">
              <strong class="forum-category-btn-cont__tit">손익인증</strong>
              <span class="forum-category-btn-cont__subtit">투자 내역 공유하기</span>
              <span class="forum-category-btn-cont__link">자세히보기</span>
            </div>
          </a>
        </div> 
        <div class="forum-category-btn">
          <a class="forum-category-btn__link" href="#">
            <div class="forum-category-btn-icon fcbi03_image">
              <span class="blind">차트분석 게시판 바로가기 아이콘</span>
            </div>
            <div class="forum-category-btn-cont">
              <strong class="forum-category-btn-cont__tit">차트분석</strong>
              <span class="forum-category-btn-cont__subtit">코인 전략 나누기</span>
              <span class="forum-category-btn-cont__link">자세히보기</span>
            </div>
          </a>
        </div> 
        <div class="forum-category-btn">
          <a class="forum-category-btn__link" href="#">
            <div class="forum-category-btn-icon fcbi04_image">
              <span class="blind">자유게시판 게시판 바로가기 아이콘</span>
            </div>
            <div class="forum-category-btn-cont">
              <strong class="forum-category-btn-cont__tit">자유게시판</strong>
              <span class="forum-category-btn-cont__subtit">자유롭게 소통하기</span>
              <span class="forum-category-btn-cont__link">자세히보기</span>
            </div>
          </a>
        </div> 
        <div class="forum-category-btn">
          <a class="forum-category-btn__link" href="#">
            <div class="forum-category-btn-icon fcbi05_image">
              <span class="blind">질문게시판 게시판 바로가기 아이콘</span>
            </div>
            <div class="forum-category-btn-cont">
              <strong class="forum-category-btn-cont__tit">질문게시판</strong>
              <span class="forum-category-btn-cont__subtit">궁금증 해결하기</span>
              <span class="forum-category-btn-cont__link">자세히보기</span>
            </div>
          </a>
        </div> 
        <div class="forum-category-btn">
          <a class="forum-category-btn__link" href="#">
            <div class="forum-category-btn-icon fcbi06_image">
              <span class="blind">출석게시판 게시판 바로가기 아이콘</span>
            </div>
            <div class="forum-category-btn-cont">
              <strong class="forum-category-btn-cont__tit">출석게시판</strong>
              <span class="forum-category-btn-cont__subtit">오늘도 출석하기</span>
              <span class="forum-category-btn-cont__link">자세히보기</span>
            </div>
          </a>
        </div> 
      </div>
    </div>

    <!-- forum / profit-certification -->
    <div class="forum-profit-certification">
      <!-- title -->
      <div class="forum-profit-certification-tit">
        <h2 class="forum-profit-certification-tit__strong">손익인증</h2>
        <span class="forum-category-tit__more">더보기</span>
      </div>
      <div class="forum-profit-review-card-g">
        <!-- forum-profit-review-card01 -->
        <div class="forum-profit-review-card">
          <img class="forum-profit-review__icon" src="./images/forum-thumbsdown.png" alt="시세하락 아이콘">
          <div class="forum-profit-review-txt-g">
            <strong class="forum-profit-review__tit">이틀 동안 10%가 빠졌네요</strong>
            <div class="forum-profit-review__user">
              <span class="forum-profit-review__writer">젤로는 천사</span>
              <span class="forum-profit-review__date">2023.08.18</span>
            </div>
          </div>
          <div class="forum-profit-review-chart">
            <a class="forum-profit-review-chart__link" href="#">
              <img class="forum-profit-review-chart__img fprc01_image" src="./images/chart1.png" alt="젤로는 천사님의 손익인증 이미지">
            </a>
          </div>
        </div>
        <!-- forum-profit-review-card02 -->
        <div class="forum-profit-review-card">
          <img class="forum-profit-review__icon" src="./images/forum-thumbsdown.png" alt="시세하락 아이콘">
          <div class="forum-profit-review-txt-g">
            <strong class="forum-profit-review__tit">다시 마이너스로</strong>
            <div class="forum-profit-review__user">
              <span class="forum-profit-review__writer">젤로는 천사</span>
              <span class="forum-profit-review__date">2023.08.17</span>
            </div>
          </div>
          <div class="forum-profit-review-chart">
            <a class="forum-profit-review-chart__link" href="#">
              <img class="forum-profit-review-chart__img fprc02_image" src="./images/chart2.png" alt="젤로는 천사님의 손익인증 이미지">
            </a>
          </div>
        </div>
        <!-- forum-profit-review-card03 -->
        <div class="forum-profit-review-card">
          <img class="forum-profit-review__icon" src="./images/forum-thumbsup.png" alt="시세하락 아이콘">
          <div class="forum-profit-review-txt-g">
            <strong class="forum-profit-review__tit">먼일 이래요?</strong>
            <div class="forum-profit-review__user">
              <span class="forum-profit-review__writer">젤로는 천사</span>
              <span class="forum-profit-review__date">2023.08.16</span>
            </div>
          </div>
          <div class="forum-profit-review-chart">
            <a class="forum-profit-review-chart__link" href="#">
              <img class="forum-profit-review-chart__img fprc03_image" src="./images/chart3.png" alt="젤로는 천사님의 손익인증 이미지">
            </a>
          </div>
        </div>
        <!-- forum-profit-review-card04 -->
        <div class="forum-profit-review-card">
          <img class="forum-profit-review__icon" src="./images/forum-thumbsdown.png" alt="시세하락 아이콘">
          <div class="forum-profit-review-txt-g">
            <strong class="forum-profit-review__tit">인증</strong>
            <div class="forum-profit-review__user">
              <span class="forum-profit-review__writer">tpwn</span>
              <span class="forum-profit-review__date">2023.08.15</span>
            </div>
          </div>
          <div class="forum-profit-review-chart">
            <a class="forum-profit-review-chart__link" href="#">
              <img class="forum-profit-review-chart__img fprc04_image" src="./images/chart4.png" alt="젤로는 천사님의 손익인증 이미지">
            </a>
          </div>
        </div>
        <!-- forum-profit-review-card04 -->
        <div class="forum-profit-review-card">
          <img class="forum-profit-review__icon" src="./images/forum-thumbsup.png" alt="시세하락 아이콘">
          <div class="forum-profit-review-txt-g">
            <strong class="forum-profit-review__tit">오늘은 쫌 올랐네요</strong>
            <div class="forum-profit-review__user">
              <span class="forum-profit-review__writer">젤로는 천사</span>
              <span class="forum-profit-review__date">2023.08.15</span>
            </div>
          </div>
          <div class="forum-profit-review-chart">
            <a class="forum-profit-review-chart__link" href="#">
              <img class="forum-profit-review-chart__img fprc05_image" src="./images/chart5.png" alt="젤로는 천사님의 손익인증 이미지">
            </a>
          </div>
        </div>
      </div>
    </div> 

    <!-- forum / chart -->
    <div class="forum-chart">
      <div class="forum-chart-tit">
        <h2 class="forum-chart-tit__strong">차트분석</h2>
        <span class="forum-chart-tit__more">더보기</span>
      </div>
      <div class="forum-chart-wrap">
        <div class="forum-chart-box">
          <div class="forum-chart-box-cover">
            <img class="forum-chart-box__image" src="./images/coinreportcover1.jpg" alt="비트코인 분석 표지">
            <strong class="forum-chart-box__date">2023.08.18</strong>
          </div>
          <div class="forum-chart-box-report">
            <img class="forum-chart-box-report__image" src="./images/coinreport1.jpg" alt="비트코인 분석차트">
          </div>
        </div>
        <div class="forum-chart-box">
          <div class="forum-chart-box-cover">
            <img class="forum-chart-box__image" src="./images/coinreportcover1.jpg" alt="비트코인 분석 표지">
            <strong class="forum-chart-box__date">2023.08.17</strong>
          </div>
          <div class="forum-chart-box-report">
            <img class="forum-chart-box-report__image" src="./images/coinreport2.jpg" alt="비트코인 분석차트">
          </div>
        </div>
        <div class="forum-chart-box">
          <div class="forum-chart-box-cover">
            <img class="forum-chart-box__image" src="./images/coinreportcover1.jpg" alt="비트코인 분석 표지">
            <strong class="forum-chart-box__date">2023.08.16</strong>
          </div>
          <div class="forum-chart-box-report">
            <img class="forum-chart-box-report__image" src="./images/coinreport3.jpg" alt="비트코인 분석차트">
          </div>
        </div>
      </div>
    </div>


      
    <!-- forum / event -->
    <div class="forum-event-wrap">
      <!-- airdrop -->
      <div class="forum-airdrop">
        <div class="forum-airdrop-tit">
          <h2 class="forum-airdrop-tit__top">에어드랍</h2>
          <span class="forum-airdrop-tit__more">더보기</span>
        </div>
        <div class="forum-airdrop-lst-g">
          <div class="forum-airdrop-lst">
            <a class="forum-airdrop-lst__link" href="#">
              <div class="forum-airdrop-lst-tit">
                <strong class="forum-airdrop-lst-tit__top">텔레그램 입장하고, ZIK 에어드랍 받자!</strong>
                <span class="forum-airdrop-lst-tit__sub">추첨을 통해 1만원 상당의<br>ZIK토큰 에어드랍! (200명)</span>
                <div class="forum-airdrop-lst-tags">
                  <span class="forum-airdrop-lst__tag">폴리곤(MATIC)</span>
                  <span class="forum-airdrop-lst__tag">일반</span>
                  <span class="forum-airdrop-lst__tag">진행중</span>
                </div>
              </div>
              <div class="forum-airdrop-lst-img">
                <img class="forum-airdrop-lst__icon" src="./images/airdrop1.jpg" alt="에어드랍 이벤트">
              </div>
            </a>
          </div>
          <div class="forum-airdrop-lst">
            <a class="forum-airdrop-lst__link" href="#">
              <div class="forum-airdrop-lst-tit">
                <strong class="forum-airdrop-lst-tit__top">텔레그램 입장하고, ZIK 에어드랍 받자!</strong>
                <span class="forum-airdrop-lst-tit__sub">추첨을 통해 1만원 상당의<br>ZIK토큰 에어드랍! (200명)</span>
                <div class="forum-airdrop-lst-tags">
                  <span class="forum-airdrop-lst__tag">넥시온(Naxion)</span>
                  <span class="forum-airdrop-lst__tag">일반</span>
                  <span class="forum-airdrop-lst__tag">진행중</span>
                </div>
              </div>
              <div class="forum-airdrop-lst-img">
                <img class="forum-airdrop-lst__icon" src="./images/airdrop2.jpg" alt="에어드랍 이벤트">
              </div>
            </a>
          </div>
          <div class="forum-airdrop-lst">
            <a class="forum-airdrop-lst__link" href="#">
              <div class="forum-airdrop-lst-tit">
                <strong class="forum-airdrop-lst-tit__top">텔레그램 입장하고, ZIK 에어드랍 받자!</strong>
                <span class="forum-airdrop-lst-tit__sub">추첨을 통해 1만원 상당의<br>ZIK토큰 에어드랍! (200명)</span>
                <div class="forum-airdrop-lst-tags">
                  <span class="forum-airdrop-lst__tag">폴리곤(MATIC)</span>
                  <span class="forum-airdrop-lst__tag">일반</span>
                  <span class="forum-airdrop-lst__tag">마감</span>
                </div>
              </div>
              <div class="forum-airdrop-lst-img">
                <img class="forum-airdrop-lst__icon" src="./images/airdrop3.jpg" alt="에어드랍 이벤트">
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- quiz -->
      <div class="forum-quiz">
        <div class="forum-quiz-tit">
          <h2 class="forum-quiz-tit__top">퀴즈</h2>
          <span class="forum-quiz-tit__more">더보기</span>
        </div>
        <div class="forum-quiz-lst-g">
          <div class="forum-quiz-lst">
            <a class="forum-quiz-lst__link" href="#">
              <div class="forum-quiz-lst-tit">
                <strong class="forum-quiz-lst-tit__top">텔레그램 입장하고, ZIK 에어드랍 받자!</strong>
                <span class="forum-quiz-lst-tit__sub">추첨을 통해 1만원 상당의<br>ZIK토큰 에어드랍! (200명)</span>
                <div class="forum-quiz-lst-tags">
                  <span class="forum-quiz-lst__tag">폴리곤(MATIC)</span>
                  <span class="forum-quiz-lst__tag">일반</span>
                  <span class="forum-quiz-lst__tag">진행중</span>
                </div>
              </div>
              <div class="forum-airdrop-lst-img">
                <img class="forum-airdrop-lst__icon" src="./images/quiz1.jpg" alt="에어드랍 이벤트">
              </div>
            </a>
          </div>
          <div class="forum-quiz-lst">
            <a class="forum-quiz-lst__link" href="#">
              <div class="forum-quiz-lst-tit">
                <strong class="forum-quiz-lst-tit__top">텔레그램 입장하고, ZIK 에어드랍 받자!</strong>
                <span class="forum-quiz-lst-tit__sub">추첨을 통해 1만원 상당의<br>ZIK토큰 에어드랍! (200명)</span>
                <div class="forum-quiz-lst-tags">
                  <span class="forum-quiz-lst__tag">폴리곤(MATIC)</span>
                  <span class="forum-quiz-lst__tag">일반</span>
                  <span class="forum-quiz-lst__tag">진행중</span>
                </div>
              </div>
              <div class="forum-airdrop-lst-img">
                <img class="forum-airdrop-lst__icon" src="./images/quiz2.jpg" alt="에어드랍 이벤트">
              </div>
            </a>
          </div>
          <div class="forum-quiz-lst">
            <a class="forum-quiz-lst__link" href="#">
              <div class="forum-quiz-lst-tit">
                <strong class="forum-quiz-lst-tit__top">텔레그램 입장하고, ZIK 에어드랍 받자!</strong>
                <span class="forum-quiz-lst-tit__sub">추첨을 통해 1만원 상당의<br>ZIK토큰 에어드랍! (200명)</span>
                <div class="forum-quiz-lst-tags">
                  <span class="forum-quiz-lst__tag">폴리곤(MATIC)</span>
                  <span class="forum-quiz-lst__tag">일반</span>
                  <span class="forum-quiz-lst__tag">진행중</span>
                </div>
              </div>
              <div class="forum-airdrop-lst-img">
                <img class="forum-airdrop-lst__icon" src="./images/quiz3.jpg" alt="에어드랍 이벤트">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    
  <!-- } 컨텐츠 끝  -->

<?php
include_once(G5_PATH.'/tail.php');
?>
