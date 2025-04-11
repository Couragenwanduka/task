import { useState } from "react";

const NavBar = () => {
    const [active, setActive] = useState(0); // Track active index

    const handleClick = (index:number) => {
        setActive(index); // Set the active list item
    };

    return (
      <main className="w-full md:p-8 p-4 h-20">
        <nav className="flex bg-white w-full justify-between items-center">
          <div className="flex items-center text-mocha text-[20px] mt-3 ">
            <img src="/icon/logo.svg" alt="Logo Image" loading="eager" className="w-6 h-6" />
            <h1>사색의형기</h1>
          </div>

          <div className="flex gap-6 items-center">
            <ul className="md:flex hidden items-center gap-6 text-[19px] font-[300] cursor-pointer">
              {/* List items with active class toggle */}
              <li
                className={`cursor-pointer ${active === 0 ? 'text-mocha' : 'text-black'}`}
                onClick={() => handleClick(0)}
              >
                소개
              </li>
              <li
                className={`cursor-pointer ${active === 1 ? 'text-mocha' : 'text-black'}`}
                onClick={() => handleClick(1)}
              >
                소소담담 APP
              </li>
              <li
                className={`cursor-pointer ${active === 2 ? 'text-mocha' : 'text-black'}`}
                onClick={() => handleClick(2)}
              >
                활동
              </li>
            </ul>
            <button className="flex justify-center items-center h-10 w-20 bg-gray rounded-2xl gap-2 text-white">
                <p className="m-0">KOR</p>
                <img src="/icon/Vector (Stroke).svg" alt="Downward facing Arrow"/>
            </button>
          </div>
        </nav>
      </main>
    );
};

export default NavBar;
