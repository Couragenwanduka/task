const Hero = () => {
  return (
    <main className='relative'>
        <div className='md:p-8 p-4 relative'>
            <img src='/image/Mask group.png' alt='Hero background Image'/>
        </div>
        <div className='absolute top-0 left-0 right-0 bottom-0 flex flex-col justify-center items-center text-center text-white gap-5'>
            <p className="md:text-3xl md:mb-2 gowun leading-[150%]">특별한 나눔</p>
            <p className="md:text-xl md:mb-4 font-extralight">\</p>
            <h2 className="md:text-4xl gowun  leading-[150%] mb-2">함께하는 마음이 만드는 소중한 변화</h2>
            <p className="md:text-lg font-[400] gowun ">즐거움과 나눔이 있는 감동의 순간</p>
        </div>
        <div className='absolute right-10 top-[86%]  w-[17%] justify-between items-center gap-3 hidden md:flex'>
            <div className='flex justify-center items-center gap-3'>
                <p>1</p>
                <div className='flex'>
                    <span className='w-6 h-1 bg-[#4C4C4C]'></span>
                    <span className='w-6 h-1 bg-[#111111]'></span>
                    <span className='w-9 h-1 bg-[#EEEEEE]'></span>
                </div>
                <p>2</p>
            </div>
            <div className='flex justify-center items-center gap-3'>
                <span className='h-10 w-10 bg-black rounded-full flex justify-center items-center'>
                    <img src='/icon/Vector (Stroke) (1).svg' className='w-4 h-4'/>
                </span>
                <span className='h-10 w-10 bg-black rounded-full flex justify-center items-center'>
                    <img src='/icon/Vector (Stroke) (2).svg' className='w-4 h-4'/>
                </span>
            </div>
        </div>
    </main>
  )
}

export default Hero
