const About = () => {
  return (
    <main>
        <section className='flex flex-col md:flex-row justify-end items-center mt-20 gap-10 ms:gap-0'>
            <div className='md:w-[70%] md:pl-24 pl-4'>
                <h1 className='text-3xl gowun '>이사장 인사말.</h1>
                <div className='mt-5'>
                    <p className='text-[15px] text-gray gowun '>안녕하세요, 사색의향기 이사장 오덕균 입니다.</p>
                    <p className='text-[15px] text-gray break-words w-[80%] gowun '>사색의향기는 ‘행복한 문화 나눔’을 통해 더 나은 사회를 만들어가고자
                    노력해왔습니다. 앞으로도 문학과 인문학의 가치를 공유하며, 열린 커뮤니티로서 함께 성장하겠습니다.</p>
                    <p className='text-[15px] text-gray gowun '>많은 관심과 응원 부탁드립니다. 감사합니다.</p>
                </div>
                <div className='flex flex-row items-center mt-5'>
                    <p className='text-[15px] text-black gowun '>사단법인 사색의향기  이사장 오덕균</p>
                    <img src='/icon/image 353.svg' alt="signature Image" className="w-20 md:w"/>
                </div>
            <div className='flex gap-5'>  
                <p className='text-[20px] text-gray gowun '>인터뷰 더 보기</p>
                <img src='public/icon/Vector (Stroke) (3).svg' alt='Arrow'/>
            </div> 
            </div>
            <div className="relative w-[50%] h-[300px] bg-[#d0def0] rounded-l-full hidden md:block">
                <img
                    src="/icon/Mask group.svg"
                    alt="About Image"
                    className="absolute -top-[5.2rem] left-1/2 transform -translate-x-1/2 w-80 h-auto"
                />
            </div>
        </section>

        <section className='flex justify-between md:mt-10 md:p-22 p-4 gap-5 md:gap-0'>
            <div>
                <img src='/image/Frame 1597884723 (1).svg' alt='Image' className='w-72 h-72'/>
            </div>
            <div>
                <img src='/image/Frame 1597884724.svg' alt='Image' className='w-72 h-72'/>
            </div>
            <div>
                <img src='/image/Frame 1597884725.svg' alt='Image' className='w-72 h-72'/>
            </div>
        </section>
    </main>
  )
}

export default About
