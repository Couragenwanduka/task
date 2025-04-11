<?php
/* Template Name: Footer */

get_footer();
?>

<main class="bg-[#222222] flex flex-col md:flex-row md:p-20 p-4 gowun md:mt-10 mt-[150%] justify-center items-center">
  <div class="md:w-[70%]">
    <div class="flex flex-col md:flex-row items-center text-[#919191] text-[30px] mt-3 mb-20 ">
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/logo2.svg" alt="Logo Image" loading="eager" class="w-10 h-10" />
      <h1 class="gowun">사색의형기</h1>
    </div>
    <div class="flex gowun w-full gap-2">
      <h1 class="text-[19px] text-white">개인정보 처리방침</h1>
      <h1 class="text-[19px] text-white">이용약관</h1>
      <h1 class="text-[19px] text-gray">고객센터 평일 08:00~19:00 (주말 및 공휴일 휴무)</h1>
    </div>
    <div class="flex mt-5 gap-5">
      <p class="text-[#919191] ">사단법인 사색의향기</p>
      <span class="flex">
        <p class="text-gray">이사장</p>
        <p class="text-[#919191]">오덕균</p>
      </span>
      <span class="flex">
        <p class="text-gray">고유번호</p>
        <p class="text-[#919191]">355-82-00129</p>
      </span>
    </div>
    <div class="flex text-[13px] mt-5 gap-1">
      <span class="flex">
        <p class="text-gray">주소</p>
        <p class="text-[#919191]">서울시 강남구 테헤란로 19길 28 이림빌딩3층(역삼동)</p>
      </span>
      <span class="flex">
        <p class="text-gray">전화</p>
        <p class="text-[#919191]">02-539-5101</p>
      </span>
      <span class="flex">
        <p class="text-gray">팩스</p>
        <p class="text-[#919191]">070-8668-5091</p>
      </span>
      <span class="flex">
        <p class="text-gray">이메일</p>
        <p class="text-[#919191]">culppy@culppy.com</p>
      </span>
    </div>
    <div>
      <p class="text-[#919191] text-[13px] mt-4">Copyright ⓒ 2025 사색의향기. All Rights Reserved</p>
    </div> 
  </div>
  <div class="md:w-[30%] flex flex-col gap-4">
    <h1 class="text-white">뉴스레터 구독하기</h1>
    <p class="text-white">이메일 구독을 통해 사색의향기의 최신 소식과 교육 및 이벤트 소식을
    빠르게 받아보실 수 있습니다.</p>
    <div class="flex w-40 h-12 border rounded-full justify-center items-center text-white gowun ">
      <p>이메일 구독신청</p>
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/arrow-right.svg" alt="arrow"/>
    </div>
  </div>
</main>
