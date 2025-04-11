<?php
/* Template Name: Service Page */

get_header(); ?>

<main>
<div class="flex justify-center items-center">
    <h1 class="font-[700] text-4xl gowun text-black">함께하는 일</h1>
    <h1 class="font-[700] text-4xl gowun text-gray">우리의 흔적</h1>
  </div>
  
  <div class="flex flex-col gap-5 md:p-30">
    <?php
    // Path to the JSON file in the 'utils' folder
    $json_file_path = get_template_directory() . '/utils/dataService.json'; // Adjust the file name if needed

    // Load and decode the JSON file
    $json_data = file_get_contents($json_file_path);
    $data = json_decode($json_data, true); // Decode as associative array

    if ($data && isset($data['services'], $data['service2'])) {
        // Merge the services and service2 arrays
        $interleaved = array_merge($data['services'], $data['service2']);
        
        // Loop through the merged array
        foreach ($interleaved as $index => $item) :
            $img = $item['image']; // Assuming 'image' is a key in the JSON
            $text = $item['text']; // Assuming 'text' is a key in the JSON
            $description = $item['description']; // Assuming 'description' is a key in the JSON
    ?>
            <div class="flex flex-col md:flex <?php echo $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse'; ?> items-center gap-6 p-4 rounded-lg">
                <img src="<?php echo get_template_directory_uri(); ?><?php echo esc_url($img); ?>" alt="<?php echo esc_attr($text); ?>" class="w-full max-w-md h-24" />
                <div>
                    <p class="text-gray break-words md:w-[70%]"><?php echo esc_html($description); ?></p>
                    <h2 class="text-xl font-semibold mt-2"><?php echo esc_html($text); ?></h2>
                </div>
            </div>
    <?php 
        endforeach;
    } else {
        echo '<p>No services available.</p>';
    }
    ?>
  </div>

  <div class="flex flex-col justify-center items-center bg-[#F8F4F3] h-72 pb-10 pt-10">
    <h1 class="font-[700] md:text-4xl text-xl gowun text-black">기부를 통해 따뜻한 마음을 보내고 싶다면,</h1>
    <p class="font-[700] md:text-xl gowun mt-5 text-gray">후원계좌 안내</p>
    <p class="font-[700] md:text-xl gowun mt-5 text-gray">국민 924501-01-351204 / 사단법인 사색의향기</p>
    <div class="flex mt-5 gap-5">
      <button class="flex border border-black rounded-full w-32 h-10 justify-center items-center gap-2 cursor-pointer">
        <img src="<?php echo get_template_directory_uri(); ?>/public/icon/heart-handshake.svg" alt="heartHandshakeIcon" />
        <p>정기 후원</p>
      </button>
      <button class="flex border border-black rounded-full w-32 h-10 justify-center items-center gap-2 cursor-pointer">일시 후원</button>
    </div>
  </div>

  <div class="flex flex-col md:flex-row md:p-30">
    <div class="p-4 md:p-0">
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/appicon.svg" alt="Image" class="w-20 h-20" />
      <h1 class="font-[700] text-4xl gowun text-black break-words md:w-[50%] mt-10 mb-10">더 나은 세상을 만들어 가기 위한 노력.</h1>
      <p class="font-[700] text-base gowun text-gray">바른 인성과 성품을 고양하며 함께 나누는 활동을 통해 세대와 나라를 초월한 커뮤니티를 만들어나가려고 노력하고 있습니다.</p>
      <p class="font-[700] text-base gowun text-gray">작은 담소와 삶의 지혜가 필요하신 모든 분들을 환영합니다.</p>
      <p class="font-[700] text-base gowun mt-5 text-gray">삶의 어려운 고충이 있으신 분들에게 작은 도움을 드립니다. 법률적이거나 개인적으로 해결하기 어려운 문제들이 있으시다면 소담 서포터즈에게 도움을 요청해주세요.</p>
      <div class="mt-10 flex gap-2 mb-10">
        <p class="font-[700] text-xl gowun text-black">2025. 6. 출시 예정</p>
        <p class="font-[700] text-xl gowun text-mocha">커뮤니티 APP ‘소소담담’</p>
      </div>
      <button class="flex border border-black rounded-full w-38 h-13 justify-center items-center gap-2 cursor-pointer">
        <p>앱 다운로드</p>
        <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector (Stroke) (4).svg" alt="Download Icon" />
      </button>
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/public/image/Now Section.svg" alt="Image" class="hidden md:block" />
    </div>
  </div>

  <div class="flex flex-col md:flex-row md:p-28 md:gap-2 h-56 p-4 gap-7">
    <div class="flex flex-col justify-center items-center gap-3">
      <h1 class="font-bold text-4xl gowun text-black leading-[150%]">함께하는 이들</h1>
      <div class="flex justify-center items-center gap-3 w-full -ml-3">
        <span class="bg-black w-7 h-7 flex justify-center items-center rounded-full">
          <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector (Stroke) (1).svg" class="w-4 h-4" />
        </span>
        <span class="bg-black w-7 h-7 flex justify-center items-center rounded-full">
          <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector (Stroke) (2).svg" class="w-4 h-4" />
        </span>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/public/image/image 272.svg" class="w-40 h-20" />
      <div class="flex flex-col justify-center items-center">
        <p class="font-[700] text-2xl gowun text-black">(주)행복한사람들</p>
        <p class="font-[700] text-lg gowun text-black text-center">행복한 날, 행복한 사람들과 함께하는 특별한 날을 선사합니다.</p>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/image 273.svg" class="w-40 h-20" />
      <div class="flex flex-col justify-center items-center">
        <p class="font-[700] text-2xl gowun text-black">바른댓글 실천연대</p>
        <p class="font-[700] text-lg gowun text-black text-center">바른댓글 정착으로 아름다운 사회를 만들어갑니다.</p>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/image 274.svg" class="w-40 h-20" />
      <div class="flex flex-col justify-center items-center">
        <p class="font-[700] text-2xl gowun text-black">아트리안</p>
        <p class="font-[700] text-lg gowun text-black text-center">생활미술시장의 뉴 패러다임을 제안하는 상설 아트갤러리 프로젝트.</p>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap5">
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/image 292.svg" class="w-40 h-20" />
      <div class="flex flex-col justify-center items-center">
        <p class="font-[700] text-xl gowun text-black">대한민국위멘위원회</p>
        <p class="font-[700] text-lg gowun text-black text-center">어린이를 위한 위대한 멘토, 위멘이 함께 합니다.</p>
      </div>
    </div>
  </div>
</main>






