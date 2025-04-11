<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<main class="w-full md:p-8 p-4 h-20">
  <nav class="flex  w-full justify-between items-center">
    <div class="flex items-center text-[#4D342C] text-[20px] mt-3">
      <img src="<?php echo get_template_directory_uri(); ?>/public/icon/logo.svg" alt="Logo Image" class="w-6 h-6" />
      <h1>사색의형기</h1>
    </div>

    <div class="flex gap-6 items-center">
      <ul class="md:flex hidden items-center gap-6 text-[19px] font-[300] cursor-pointer">
        <li class="cursor-pointer text-mocha">소개</li>
        <li class="cursor-pointer text-black">소소담담 APP</li>
        <li class="cursor-pointer text-black">활동</li>
      </ul>
      <button class="flex justify-center items-center h-10 w-20 bg-[#4C4C4C] rounded-2xl gap-2 text-white">
        <p class="m-0">KOR</p>
        <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector (Stroke).svg" alt="Arrow Icon" />
      </button>
    </div>
  </nav>
</main>
