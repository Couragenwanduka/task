
const Feature = () => {
  return (
   <main className='flex justify-center items-center mt-20 flex-col gap-5'>
     <div className='flex flex-col gap-5 justify-center items-center'>
        <h1 className='md:text-4xl text-xl font-bold leading-[130%] gowun '>새로운 문화 나눔을 만들어갑니다.</h1>
        <div className='flex justify-center items-center'>
            <h2 className='md:text-4xl text-xl font-bold leading-[130%] gowun '>우리는</h2>
            <img src='/icon/Culture Image Container.svg' className='md:w-48 w-28' />
        </div>
        <h2 className='md:text-4xl text-xl font-bold leading-[130%] gowun '>사색의향기입니다.</h2>
     </div>
      <p className='md:text-[20px] font-[400] break-words w-[55%] text-center gowun '>사색의향기는 문학인들의 커뮤니티로서 “행복한 문화 나눔"을 통한 사회 공헌과 선진적이고
      건전한 사회 문화를 만들어나가기 위해 노력하는 비영리 단체입니다.</p>
   </main>
  )
}

export default Feature
