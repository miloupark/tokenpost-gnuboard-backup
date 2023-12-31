<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<!-- 토큰포스트 코드 start -->
<!-- tokenpost main / header -->
<header data-include-path="./outline/header.html"></header>
  <!-- tokenpost main / main -->
<main id="main" class="main">
  <!-- tokenpost main / main news slider / mySwiper1-->
  <div class="mainnews-slider">
    <h2 class="blind">오늘의 대표 뉴스 슬라이더</h2>
    <!-- Swiper -->
    <div class="swiper mySwiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide type1">
          <a class="mySwiper1-link" href="#">
            <div class="mySwiper1-txt">
              <strong class="swiper-slide-tit">전 SEC 관계자 "비트코인 현물 ETF 승인 확률 희박"</strong>
              <p class="swiper-slide-cont">미국 증권거래위원회(SEC)의 전직 인사가 비트코인 현물 상장지수펀드(ETF) 승인 가능성에 대해 회의적인 견해를 밝혔다.</p>
            </div>
            <div class="mySwiper1-thumb">
              <img class="mySwiper1-thumb-img" src="./images/news1.jpg" alt="전 SEC 관계자 비트코인 현물 ETF 승인 확률 희박">
            </div>
          </a>
        </div>
        <div class="swiper-slide type2">
          <a class="mySwiper1-link" href="#">
            <div class="mySwiper1-txt">
              <strong class="swiper-slide-tit">오디널스, 비트코인 일간 트랜잭션 85% 차지</strong>
              <p class="swiper-slide-cont">오디널스 인스크립션(비트코인 기반 토큰 발행) 활동이 비트코인 네트워크 전체 활동의 80% 이상을 차지한 것으로 나타났다.</p>
            </div>
            <div class="mySwiper1-thumb">
              <img class="mySwiper1-thumb-img" src="./images/news2.jpg" alt="오디널스, 비트코인 일간 트랜잭션 85% 차지">
            </div>
          </a>
        </div>
        <div class="swiper-slide type3">
          <a class="mySwiper1-link" href="#">
            <div class="mySwiper1-txt">
              <strong class="swiper-slide-tit">"토네이도캐시 제재 조치 유효, 사용자 해제 요구 기각"</strong>
              <p class="swiper-slide-cont">암호화폐 믹싱 서비스 '토네이도캐시'에 대한 미국 재무부의 제재 조치를 
                철회해달라는 사용자 항소가 기각됐다.</p>
            </div>
            <div class="mySwiper1-thumb">
              <img class="mySwiper1-thumb-img" src="./images/news3.jpg" alt="美 법원 토네이도캐시 제재 조치 유효... 사용자 해제 요구 기각">
            </div>
          </a>
        </div>
      </div>
      <div class="swiper-button-next mySwiper1-next"></div>
      <div class="swiper-button-prev mySwiper1-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- tokenpost main / news category buttons -->
  <div class="news-category-btn">
  <h2 class="blind">뉴스 카테고리</h2>
    <ul class="news-category-btn-lst">
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-blockchain.png" alt="블록체인 3d 아이콘">
          <span class="news-category-btn-txt">블록체인</span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-finacial.png" alt="금융 3d 아이콘">
          <span class="news-category-btn-txt">금융</span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-industry.png" alt="산업 3d 아이콘">
          <span class="news-category-btn-txt">산업</span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-social.png" alt="정치사회 3d 아이콘">
          <span class="news-category-btn-txt">정치사회</span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-national.png" alt="국제 3d 아이콘">
          <span class="news-category-btn-txt">국제  </span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-opinion.png" alt="오피니언 3d 아이콘">
          <span class="news-category-btn-txt">오피니언</span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-general.png" alt="일반 3d 아이콘">
          <span class="news-category-btn-txt">일반</span>
        </a>
      </li>
      <li class="news-category-btn-box">
        <a class="news-category-btn-box-link" href="#">
          <img class="news-category-btn-icons" src="./images/3dicon-coinness.png" alt="코인니스 3d 아이콘">
          <span class="news-category-btn-txt">코인니스</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- tokenpost main / newscards slider / mySwiper2 -->
  <div class="newscards-slider">
    <h2 class="blind">카테고리 별 뉴스카드 슬라이더</h2>
    <div class="newscards-swiper mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard1.jpg" alt="홍콩 “라이선스 신청 거래소에 기본 은행 서비스 보장”">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">국제</span>
              <p class="swiper-slide-txtcont__tit">홍콩 “라이선스 신청 거래소에 기본 은행 서비스 보장”</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard2.jpg" alt="월드코인 영지식증명으로 공개키와 생체 데이터 보호 강조">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">금융</span>
              <p class="swiper-slide-txtcont__tit">월드코인 "영지식증명으로 공개키와 생체 데이터 보호" 강조</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard3.jpg" alt="대만 금융감독위, 가상자산 규제 초안에 '스테이블코인 발행' 금지 포함">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">금융</span>
              <p class="swiper-slide-txtcont__tit">대만 금융감독위, 가상자산 규제 초안에 '스테이블코인 발행' 금지 포함</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard4.jpg" alt="비트코인 현물 ETF, 신규 자본·비트코인 변동성 유발 가능성↑">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <p class="swiper-slide-txtcont__tit">비트코인 현물 ETF, 신규 자본·비트코인 변동성 유발 가능성↑</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard5.jpg" alt="친 리플 美 변호사 SEC 중간 판결, 커뮤니티가 결정적 역할">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">국제</span>
              <p class="swiper-slide-txtcont__tit">친 리플 美 변호사 "SEC 중간 판결, 커뮤니티가 결정적 역할"</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard6.jpg" alt="애널리스트 비트코인, 2만2000달러까지 단기하락 나올 수 있어">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">금융</span>
              <p class="swiper-slide-txtcont__tit">애널리스트 "비트코인, 2만2000달러까지 단기하락 나올 수 있어"</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard7.jpg" alt="日 SBI 그룹, 리플 기반 국제 송금 솔루션 동남아에 확장 추진">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <p class="swiper-slide-txtcont__tit">日 SBI 그룹, 리플 기반 국제 송금 솔루션 동남아에 확장 추진</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard8.jpg" alt="바이낸스, 러시아 최고 경영진 사임...현지 사업 정리하나">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">국제</span>
              <p class="swiper-slide-txtcont__tit">바이낸스, 러시아 최고 경영진 사임...현지 사업 정리하나</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard9.jpg" alt="러시아 금융당국 블록체인 기술과 CBDC로 은행 역할 줄어들 것">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <p class="swiper-slide-txtcont__tit">러시아 금융당국 "블록체인 기술과 CBDC로 은행 역할 줄어들 것"</p>
            </div>
          </a>
        </div>
        <div class="swiper-slide newscards-wrap">
          <a href="#">
            <img class="swiper-slide-image" src="./images/newscard10.jpg" alt="번스타인 다가오는 암호화폐 강세 사이클, 기관이 주도할 것">
            <div class="swiper-slide-txtcont">
              <span class="swiper-slide-txtcont__keyword">블록체인</span>
              <span class="swiper-slide-txtcont__keyword">국제</span>
              <p class="swiper-slide-txtcont__tit">번스타인 "다가오는 암호화폐 강세 사이클, 기관이 주도할 것"</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- tokenpost main / keyword newscards slider / mySwiper3 -->
  <div class="swiper mySwiper3">
    <h2 class="blind">뉴스 타이틀로 한 눈에 보기</h2>
    <strong class="keyword-newscards-tit">오늘의 뉴스 타이틀 한 눈에 보기</strong>
    <div class="swiper-wrapper">
      <!-- 1 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
        <!-- 1 keyword newscards front -->
        <div class="keyword-newscard-front">
            <a class="keyword-newscard-front__box" href="#">
              <div class="keyword-newscard-front-icon">
                <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-blockchain.png" alt="블록체인 아이콘">
              </div>
              <div class="keyword-newscard-front-info">
                <strong class="keyword-newscards-front-tit">블록체인</strong>
                <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
              </div>
            </a>
        </div>
        <!-- 1 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">블록체인</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 뉴욕 브리핑] “BTC, 엘살바도르 부패 불러올 것” 미 상원의원, 뇌물수수 혐의로 기소 外 
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  영국 철수 안한다던 바이비트, 금융당국 경고 따라 서비스 중단                    </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 美 증시 소폭 반등...이더리움 1600달러 목전
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  홍콩, JPEX 사태로 암호화폐 거래소 규제 강화 전망
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  NFT 시장 침체·로열티 정책 변경에 오픈씨 크리에이터 이탈 가속화
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  美 SEC, 이더리움 선물 ETF 검토 착수...긍정적 가격 전망 이어져
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 2 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
        <!-- 2 keyword newscards front -->
        <div class="keyword-newscard-front">
            <a href="#">
              <div class="keyword-newscard-front-icon">
                <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-finacial.png" alt="금융 아이콘">
              </div>
                <div class="keyword-newscard-front-info">
                <strong class="keyword-newscards-front-tit key-newscards-fr-tit-2">금융</strong>
                <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
              </div>
            </a>
        </div>
        <!-- 2 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">금융</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 美 증시 소폭 반등...이더리움 1600달러 목전
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 美 금리 인상 우려에 나스닥 1% 넘게 내려...비트코인 2만6000달러대
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  한투증권, 업계 최초 토큰증권 분산원장 인프라 구축 완료
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 美 금리동결 기대감에 증시 오름세...비트코인 매집세는 아직
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 美 증시 관망세 짙어...암호화폐는 박스권 내 혼조세
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 테슬라, 엔비디아 등 약세...비트코인 2만7000달러선 회복
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 3 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
        <!-- 3 keyword newscards front -->
        <div class="keyword-newscard-front">
          <a href="#">
            <div class="keyword-newscard-front-icon">
              <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-industry.png" alt="산업 아이콘">
            </div>
            <div class="keyword-newscard-front-info">
              <strong class="keyword-newscards-front-tit key-newscards-fr-tit-2">산업</strong>
              <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
            </div>
          </a>
        </div>
          <!-- 3 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">산업</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  KT-신한은행 공인전자문서센터 도입 완료...'디지털문서 시장 혁신에 함께 나선다'
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  코빗, 신한카드·굿네이버스와 '기부증서 NFT' 캠페인..."캄보디아에 오토릭샤 후원"
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  한투증권, 업계 최초 토큰증권 분산원장 인프라 구축 완료
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  롯데정보통신 코튼시드, 제로소주 '새로 NFT' 발행
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  SK㈜ C&C, ‘니어 프로토콜’과 융합형 웹3.0 블록체인 서비스 시장 확대 맞손
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  ‘FC 온라인’ 한국 국가대표팀, 국제 스포츠대회 최초 e스포츠 금메달 노린다
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 4 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
      <!-- 4 keyword newscards front -->
        <div class="keyword-newscard-front">
          <a href="#">
            <div class="keyword-newscard-front-icon">
              <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-social.png" alt="정치사회 아이콘">
            </div>
            <div class="keyword-newscard-front-info">
              <strong class="keyword-newscards-front-tit">정치사회</strong>
              <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
            </div>
          </a>
        </div>
        <!-- 4 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">정치사회</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  알라딘 전자책 해킹해 유포 협박...억대 코인 요구한 10대 구속
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  부산시, '부산 디지털자산거래소' 추진 방안 발표...연내 '4세대 블록체인 거래소' 법인 출범
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  부산시, 블록체인X커피물류 플랫폼 구축한다 
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  금융위, 금융산업 글로벌화 전문가 간담회 개최 
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  국세청 "해외 가상자산 최초 신고액 '131조원'...70% 비중 차지"
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  제7회 「찾아가는 금융규제 샌드박스」간담회 개최
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 5 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
      <!-- 5 keyword newscards front -->
        <div class="keyword-newscard-front">
          <a href="#">
            <div class="keyword-newscard-front-icon">
              <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-national.png" alt="국제 아이콘">
            </div>
            <div class="keyword-newscard-front-info">
              <strong class="keyword-newscards-front-tit key-newscards-fr-tit-2">국제</strong>
              <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
            </div>
          </a>
        </div>
        <!-- 5 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">국제</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  영국 철수 안한다던 바이비트, 금융당국 경고 따라 서비스 중단
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [뉴욕 시세브리핑] 美 증시 소폭 반등...이더리움 1600달러 목전
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  홍콩, JPEX 사태로 암호화폐 거래소 규제 강화 전망
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  美 SEC, 이더리움 선물 ETF 검토 착수...긍정적 가격 전망 이어져
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  "다음 강세장, 극적 반등 없을 것"...시기·양상 두고 전문가 의견 분분 
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  비트메인, 파산 채굴업체 '코어사이언티픽'에 720억원 투자
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 6 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
        <!-- 6 keyword newscards front -->
          <div class="keyword-newscard-front">
            <a href="#">
              <div class="keyword-newscard-front-icon">
                <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-opinion.png" alt="오피니언 아이콘">
              </div>
              <div class="keyword-newscard-front-info">
                <strong class="keyword-newscards-front-tit">오피니언</strong>
                <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
              </div>
            </a>
          </div>
        <!-- 6 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">오피니언</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 칼럼] 제1호 투자계약증권 증권신고서의 접수 및 투자계약증권의 현황
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 칼럼] 영국령 버진 아일랜드 ICO의 장점과 혜택 
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 칼럼] 토큰 증권 법제화를 위한 자본시장법, 전자증권법 개정안 분석
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 칼럼] 챗GPT는 어떻게 이전 대화를 기억하고 잘 어울리는 답변을 할 수 있을까
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 인터뷰] 무한 확장·무한 가능성 아발란체 "모두의 손에 탈중앙 가치를"
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  [토큰포스트 칼럼] 국제 사이버 범죄를 막기 위한 제안
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 7 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
        <!-- 7 keyword newscards front -->
          <div class="keyword-newscard-front">
            <a href="#">
              <div class="keyword-newscard-front-icon">
                <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-general.png" alt="일반 아이콘">
              </div>
              <div class="keyword-newscard-front-info">
                <strong class="keyword-newscards-front-tit key-newscards-fr-tit-2">일반</strong>
                <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
              </div>
            </a>
          </div>
        <!-- 7 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">일반</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  LBank(엘뱅크) 첫 번째 런치패드 성황리 종료, 두 번째 $UMM도 완판 신화 가능한가? 
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  Memeinator는 지금 구매해야 할 최고의 암호화폐인가? 암호화폐 포트폴리오에 추가해야 할 3가지 이유
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  갤럭시아메타버스, 식스네트워크와 웹3.0 글로벌 사업 협력을 위한 MOU 체결
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  갤럭시아메타버스, '갤럭시아(GXA) 래플 서비스' 출시 기념 이벤트 오픈
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  썬더코어, 더욱 강력한 웹3 생태계 구축을 위한 다양한 블록체인 이벤트 참여
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  블록체인의 글로벌 거래: 무한한 가능성, 도전과제, 그리고 리스크
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- 8 keyword newscards -->
      <div class="swiper-slide keyword-newscard">
        <!-- 8 keyword newscards front -->
        <div class="keyword-newscard-front">
          <a href="#">
            <div class="keyword-newscard-front-icon">
              <img class="keyword-newscard-front__image" src="./images/keyword-news-3dicon-coinness.png" alt="코인니스 아이콘">
            </div>
            <div class="keyword-newscard-front-info">
              <strong class="keyword-newscards-front-tit">코인니스</strong>
              <p class="keyword-newscard-front__subtit">바쁜 현대인을 위한,<br>주제별 뉴스 한 눈에 보기</p>
            </div>
          </a>
        </div>
        <!-- 8 keyword newscards back -->
        <div class="keyword-newscard-back">
          <strong class="keyword-newscard-back__tit">코인니스</strong>
          <ul class="keyword-newscard-back-cont">
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  업비트 가짜 앱토스 입금 논란...여파 작지 않을듯
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  코인니스 뉴스 제공 시간 안내
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  OKX BTC 선물 롱 포지션 평균 청산 금액 19개월 來 최고
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  익명 고래, 한시간 전 거래소서 4120 ETH 출금..한달 간 2.4만 ETH 저가매수
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  분석 "BTC 단기 홀더 물량 2011년 1월 이후 가장 적어"
                </span>
              </a>
            </li>
            <li class="keyword-newscard-back-cont-lst">
              <a href="#">
                <span class="keyword-newscard-back-cont-lst__tit">
                  엘프, 메인넷 스왑 3.9억 ERC-20 ELF 토큰 소각
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next btnnext-keyword-card"></div>
    <div class="swiper-button-prev btnprev-keyword-card"></div>
  </div>

  <!-- tokenpost main / crypto market -->
  <div class="cypto-market-price-wrap">
    <h2 class="cypto-market-price-wrap-tit">가상자산 시세</h2>
    <div class="cypto-market-cards-wrap">
      <!-- crypto market / card S -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">S</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#">
              <img class="cypto-card-tit-image__link" src="./images/coinvalue1.png" alt="PUBLISH 코인 로고 이미지">
            </a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#">
              <span class="cypto-card-tit-txt__top">(NEWS)</span>
              <strong class="cypto-card-tit-txt__bottom">PUBLISH</strong>
            </a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#">
            <img class="crypto-card-graph__img" src="./images/chart1.png" alt="가상자산시세 그래프">
          </a>
        </div>
        <div class="crypto-card-percent-red">
          <a href="#">
            <span class="crypto-card-percent-red__txt">+4.85%</span>
          </a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 1.82</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
      
      <!-- tokenpost main / crypto market / card 1 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">1</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#">
              <img class="cypto-card-tit-image__link" src="./images/coinvalue2.png" alt="Bitcoin 코인 로고 이미지">
            </a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#">
              <span class="cypto-card-tit-txt__top">(BTC)</span>
              <strong class="cypto-card-tit-txt__bottom">Bitcoin</strong>
            </a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#">
            <img class="crypto-card-graph__img" src="./images/chart2.png" alt="가상자산시세 그래프">
          </a>
        </div>
        <div class="crypto-card-percent-blue">
          <a href="#">
            <span class="crypto-card-percent-blue__txt">-1.71%</span>
          </a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 38,456,357.75</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>

      <!-- tokenpost main / crypto market / card 2 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">2</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#"><img class="cypto-card-tit-image__link" src="./images/coinvalue3.png" alt="Ethereum 코인 로고 이미지"></a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#"><span class="cypto-card-tit-txt__top">(ETH)</span>
            <strong class="cypto-card-tit-txt__bottom">Ethereum</strong></a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#"><img class="crypto-card-graph__img" src="./images/chart3.png" alt="가상자산시세 그래프"></a>
        </div>
        <div class="crypto-card-percent-blue">
          <a href="#"><span class="crypto-card-percent-blue__txt">-1.27%</span></a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 2,415,872</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
      
      
      <!-- tokenpost main / crypto market / card 3 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">3</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#"><img class="cypto-card-tit-image__link" src="./images/coinvalue4.png" alt="Tether USDt 코인 로고 이미지"></a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#"><span class="cypto-card-tit-txt__top">(USDT)</span>
            <strong class="cypto-card-tit-txt__bottom">Tether USDt</strong></a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#"><img class="crypto-card-graph__img" src="./images/chart4.png" alt="가상자산시세 그래프"></a>
        </div>
        <div class="crypto-card-percent-red">
          <a href="#"><span class="crypto-card-percent-red__txt">+0.01%</span></a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 2,415,872</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
      
      <!-- tokenpost main / crypto market / card 4 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">4</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#"><img class="cypto-card-tit-image__link" src="./images/coinvalue5.png" alt="Tether USDt 코인 로고 이미지"></a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#"><span class="cypto-card-tit-txt__top">(USDT)</span>
            <strong class="cypto-card-tit-txt__bottom">Tether USDt</strong></a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#"><img class="crypto-card-graph__img" src="./images/chart5.png" alt="가상자산시세 그래프"></a>
        </div>
        <div class="crypto-card-percent-red">
          <a href="#"><span class="crypto-card-percent-red__txt">+0.01%</span></a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 2,415,872</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
      
      <!-- tokenpost main / crypto market / card 5 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">5</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#"><img class="cypto-card-tit-image__link" src="./images/coinvalue6.png" alt="Tether USDt 코인 로고 이미지"></a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#"><span class="cypto-card-tit-txt__top">(BNB)</span>
            <strong class="cypto-card-tit-txt__bottom">BNB</strong></a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#"><img class="crypto-card-graph__img" src="./images/chart6.png" alt="가상자산시세 그래프"></a>
        </div>
        <div class="crypto-card-percent-blue">
          <a href="#"><span class="crypto-card-percent-blue__txt">-1.53%</span></a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 310,619.10</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
      
      <!-- tokenpost main / crypto market / card 6 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">6</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#"><img class="cypto-card-tit-image__link" src="./images/coinvalue7.png" alt="Tether USDt 코인 로고 이미지"></a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#"><span class="cypto-card-tit-txt__top">(XRP)</span>
            <strong class="cypto-card-tit-txt__bottom">XRP</strong></a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#"><img class="crypto-card-graph__img" src="./images/chart7.png" alt="가상자산시세 그래프"></a>
        </div>
        <div class="crypto-card-percent-blue">
          <a href="#"><span class="crypto-card-percent-blue__txt">-2.63%</span></a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 1791.93</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
      
      <!-- tokenpost main / crypto market / card 7 -->
      <div class="cypto-market-card">
        <div class="cypto-card-rank">
          <span class="cypto-card-rank__num">7</span>
        </div>
        <div class="cypto-card-tit">
          <div class="cypto-card-tit-image">
            <a href="#">
              <img class="cypto-card-tit-image__link" src="./images/coinvalue8.png" alt="Tether USDt 코인 로고 이미지"></a>
          </div>
          <div class="cypto-card-tit-txt">
            <a href="#"><span class="cypto-card-tit-txt__top">(USDC)</span>
            <strong class="cypto-card-tit-txt__bottom">USD Coin</strong></a>
          </div>
        </div>
        <div class="crypto-card-graph">
          <a href="#"><img class="crypto-card-graph__img" src="./images/chart8.png" alt="가상자산시세 그래프"></a>
        </div>
        <div class="crypto-card-percent-red">
          <a href="#"><span class="crypto-card-percent-red__txt">+0.00%</span></a>
        </div>
        <div class="crypto-card-price">
          <span class="crypto-card-price__txt">원화환산</span>
          <span class="crypto-card-price__txt">￦ 1,343.10</span>
        </div>
        <div class="crypto-card-date">
          <span class="crypto-card-date__txt">기준일</span>
          <span class="crypto-card-date__txt">2023.08.17</span>
        </div>
      </div>
  </div>
</div>

  <!-- tokenpost main / event bnr -->
  <div class="main-event-bnr">
    <h2 class="blind">이벤트 배너</h2>
    <a href="#">
      <img class="main-event-bnr__img" src="./images/main-banner.jpg" alt="이벤트 배너 텔레그램 입장하고 ZIK에어드랍 받자!">
      <span class="blind">이벤트 배너 텔레그램 입장하고 ZIK에어드랍 받자!</span>
    </a>
  </div>
  
  <!-- tokenpost main / dailyinfo -->
  <div class="main-dailyinfo">
    <!-- tokenpost main / calendar -->
    <div class="dailyinfo-calendar">
      <h2 class="blind">캘린더 한 눈에 보기</h2>
      <div class="dailyinfo-calendar-tit">
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded"></span>
          <span id="next" class="material-symbols-rounded"></span>
        </div>
      </div>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>

  <!-- tokenpost main / dailyinfo today list-->
  <div class="dailyinfo-today-info">
    <h2 class="blind">오늘의 이슈 리스트</h2>
    <span class="dailyinfo-today-info-tit">9월 10일 목</span>
    <div class="dailyinfo-today-list-cont-wrap">
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-1.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[Coinvestor] 글로벌 투자자를 위한 퀀트 전략 상품 트레이딩 시작</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.03 - 2023.09.20</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-2.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[ICP.Hub Korea] The 1st ICP Meetup in Korea</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.05 - 2023.09.16</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-3.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">블록체인 좀! 아는 친구</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.05 - 2023.09.24</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-4.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[CoinCatch] 트레이딩 대회</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.08 - 2023.09.24</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-5.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[a:rz META] 아즈패스와 함께하는 퀴즈 이벤트</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.08 - 2023.09.24</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-6.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[YFUND] 아트테크 하고, 에어드랍 받자!</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.08 - 2023.09.28</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-5.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[a:rz META] KTMF PASS NFT 에어드랍 이벤트</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.08 - 2023.09.28</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
      <div class="dailyinfo-today-list-cont">
        <div class="dailyinfo-today-list-cont-logo">
          <a href="#">
            <img class="dailyinfo-today-list-cont-logo-img" src="./images/today-lst-6.png" alt="코인베스터 아이콘 이미지">
          </a>
        </div>
        <div class="dailyinfo-today-list-cont-txt">
          <a href="#">
            <strong class="dailyinfo-today-list-cont__tit">[YFUND] 와이펀드와 함께하는 퀴즈 이벤트</strong>
            <span class="dailyinfo-today-list-cont__date">2023.09.08 - 2023.09.30</span>
            <span class="dailyinfo-today-list-cont__tag">공개/출시</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- tokenpost main / dailyinfo event -->
  <div class="dailyinfo-event">
    <h2 class="blind">이벤트</h2>
    <ul class="dailyinfo-event-lst">
      <!-- airdrop -->
      <li class="dailyinfo-event-airdrop">
        <h3 class="blind">에어드랍</h3>
        <a href="#">
          <strong class="dailyinfo-event-airdrop__tit">에어드랍</strong>
          <p class="dailyinfo-event-airdrop__subtit">간편하게<br>참여해보세요!</p>
        </a>
        <div class="dailyinfo-event-airdrop__hover">
          <span class="blind">텔레그램 입장하고, ZIK 에어드랍 받자! 추첨을 통해 1만원 상당의 
            ZIK토큰 에어드랍! (200명)</span>
        </div>
      </li>
      <!-- quiz -->
      <li class="dailyinfo-event-quiz">
        <h3 class="blind">퀴즈</h3>
        <a href="#">
          <strong class="dailyinfo-event-quiz__tit">퀴즈</strong>
          <p class="dailyinfo-event-quiz__subtit">오늘의 퀴즈<br>꼭 확인하세요!</p>
        </a>
        <div class="dailyinfo-event-quiz__hover">
          <span class="blind">와이펀드와 함께하는 퀴즈 이벤트 진행중 추첨을 통해 10만원 상당의 상품권 제공</span>
        </div>
      </li>
    </ul>
  </div>
</div>

<!-- tokenpost main / link button -->
<div class="main-footer-btn">
  <h2 class="blind">바로가기</h2>
  <ul class="main-footer-btn-lst">
    <li class="main-footer-btn-g">
      <div class="main-footer-btn-g-txt">
        <a href="#">
          <span class="main-footer-btn-g__subtit">더 많은 소통을 원한다면</span>
          <strong class="main-footer-btn-g__tit">커뮤니티 바로가기</strong>
        </a>
      </div>
    </li>
    <li class="main-footer-btn-g">
      <div class="main-footer-btn-g-txt">
        <a href="#">
          <span class="main-footer-btn-g__subtit">가장 빠른 시세확인은</span>
          <strong class="main-footer-btn-g__tit">가상자산시세 바로가기</strong>
        </a>
      </div>
    </li>
    <li class="main-footer-btn-g">
      <div class="main-footer-btn-g-txt">
        <a href="#">
          <span class="main-footer-btn-g__subtit">다양한 의견을 기다리는</span>
          <strong class="main-footer-btn-g__tit">고객센터 바로가기</strong>
        </a>
      </div>
    </li>
  </ul>
</div>
</main>
<!-- tokenpost main / footer -->
<footer data-include-path="./outline/footer.html"></footer>
</div>


<!-- 게시판 -->
<!-- 1단 게시판 -->
<!-- <div class="latest_top_wr">
    <div class="container">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('pic_block', 'gallery', 4, 23);     // 최소설치시 자동생성되는 공지사항게시판
        echo latest('basic', 'notice', 5, 23);
        ?>
    </div>
</div> -->
<!-- 3단 게시판 -->
<!-- <div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    // echo latest('pic_list', 'free', 4, 23);         
    // 최소설치시 자동생성되는 자유게시판
    // echo latest('pic_list', 'qa', 4, 23);           
    // 최소설치시 자동생성되는 질문답변게시판
    // echo latest('pic_list', 'notice', 4, 23);       
    // 최소설치시 자동생성되는 공지사항게시판
    ?>
</div> -->
<!-- //토큰포스트 코드 end -->

<!-- footer -->
<?php
include_once(G5_PATH.'/tail.php');