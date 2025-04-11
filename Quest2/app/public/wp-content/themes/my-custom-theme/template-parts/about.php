<?php
  // If you want dynamic content, you can use ACF or get_option here for custom fields.
?>

<main>
    <section class="flex flex-col md:flex-row justify-end items-center mt-20 gap-10 ms:gap-0">
        <div class="md:w-[70%] md:pl-24 pl-4">
            <h1 class="text-3xl gowun">
                <?php echo '이사장 인사말.'; // Static content ?>
            </h1>
            <div class="mt-5">
                <p class="text-[15px] text-gray gowun">
                    <?php echo '안녕하세요, 사색의향기 이사장 오덕균 입니다.'; // Static content ?>
                </p>
                <p class="text-[15px] text-gray break-words w-[80%] gowun">
                    <?php echo '사색의향기는 ‘행복한 문화 나눔’을 통해 더 나은 사회를 만들어가고자 노력해왔습니다. 앞으로도 문학과 인문학의 가치를 공유하며, 열린 커뮤니티로서 함께 성장하겠습니다.'; ?>
                </p>
                <p class="text-[15px] text-gray gowun">
                    <?php echo '많은 관심과 응원 부탁드립니다. 감사합니다.'; ?>
                </p>
            </div>
            <div class="flex flex-row items-center mt-5">
                <p class="text-[15px] text-black gowun">
                    <?php echo '사단법인 사색의향기 이사장 오덕균'; ?>
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/public/icon/image%20353.svg" alt="signature Image" class="w-20 md:w"/>
            </div>
            <div class="flex gap-5">  
                <p class="text-[20px] text-gray gowun">
                    <?php echo '인터뷰 더 보기'; ?>
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Vector%20(Stroke)%20(3).svg" alt="Arrow"/>
            </div> 
        </div>
        <div class="relative w-[50%] h-[300px] bg-[#d0def0] rounded-l-full hidden md:block">
            <img src="<?php echo get_template_directory_uri(); ?>/public/icon/Mask%20group.svg" alt="About Image" class="absolute -top-[5.2rem] left-1/2 transform -translate-x-1/2 w-80 h-auto"/>
        </div>
    </section>

    <section class="flex justify-between md:mt-10 md:p-22 p-4 gap-5 md:gap-0">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/public/image/Frame%201597884723%20(1).svg" alt="Image" class="w-72 h-72"/>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/public/image/Frame%201597884724.svg" alt="Image" class="w-72 h-72"/>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/public/image/Frame%201597884725.svg" alt="Image" class="w-72 h-72"/>
        </div>
    </section>
</main>
