<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main class="relative">
    <div class="md:p-8 p-4 relative">
        <img src="<?php echo get_template_directory_uri(); ?>/public/image/Mask%20group.png" alt="Hero background Image"/>
    </div>
    <div class="absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center text-center text-white gap-5">
        <p class="md:text-3xl md:mb-2 gowun leading-[150%]">특별한 나눔</p>
        <p class="md:text-xl md:mb-4 font-extralight">\</p>
        <h2 class="md:text-4xl gowun leading-[150%] mb-2">함께하는 마음이 만드는 소중한 변화</h2>
        <p class="md:text-lg font-[400] gowun">즐거움과 나눔이 있는 감동의 순간</p>
    </div>
    <div class="absolute right-10 top-[86%] w-[17%] justify-between items-center gap-1 hidden md:flex">
        <div class="flex justify-center items-center gap-3">
            <p>1</p>
            <div class="flex">
                <span class="w-5 h-1 bg-[#4C4C4C]"></span>
                <span class="w-5 h-1 bg-[#111111]"></span>
                <span class="w-8 h-1 bg-[#EEEEEE]"></span>
            </div>
            <p>2</p>
        </div>
        <div class="flex justify-center items-center gap-1">
            <span class="h-10 w-10 bg-black rounded-full flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector%20(Stroke)%20(1).svg" class="w-4 h-4"/>
            </span>
            <span class="h-10 w-10 bg-black rounded-full flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector%20(Stroke)%20(2).svg" class="w-4 h-4"/>
            </span>
        </div>
    </div>
</main>
<?php wp_footer(); ?>
</body>
</html>
