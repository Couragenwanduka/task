<?php
  // If you need to load custom fields, use get_option() or Advanced Custom Fields (ACF) here
?>

<main class="flex justify-center items-center mt-20 flex-col gap-5">
  <div class="flex flex-col gap-5 justify-center items-center">
    <h1 class="md:text-4xl text-xl font-bold leading-[130%] gowun">
      <?php echo '새로운 문화 나눔을 만들어갑니다.'; // Static content ?>
    </h1>
    <div class="flex justify-center items-center">
      <h2 class="md:text-4xl text-xl font-bold leading-[130%] gowun">
        <?php echo '우리는'; // Static content ?>
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Culture%20Image%20Container.svg" class="md:w-48 w-28" alt="Culture Image" />
    </div>
    <h2 class="md:text-4xl text-xl font-bold leading-[130%] gowun">
      <?php echo '사색의향기입니다.'; // Static content ?>
    </h2>
  </div>

  <p class="md:text-[20px] font-[400] break-words w-[55%] text-center gowun">
    <?php echo '사색의향기는 문학인들의 커뮤니티로서 “행복한 문화 나눔"을 통한 사회 공헌과 선진적이고
    건전한 사회 문화를 만들어나가기 위해 노력하는 비영리 단체입니다.'; ?>
  </p>
</main>
