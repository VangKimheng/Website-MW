<?php include("header.php");?>

<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
    }

    html{
        scroll-behavior: smooth;
    }

    .partner {
        width: 95%;
        max-width: 1536px;
        margin-inline: auto;
        position: relative;
        height: 190px;
        overflow: hidden;
        mask-image: linear-gradient(
            to right,
            rgba(0,0,0,0),
            rgba(0,0,0,1) 15%,
            rgba(0,0,0,1) 85%,
            rgba(0,0,0,0)
        );
    }

    @keyframes scrollLeft {
        to{
            left: -350px;
        }
    }

    .item-p {
        position: absolute;
        left: calc(300px * 8);
        animation-name: scrollLeft;
        animation-duration: 30s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    @media screen and (max-width: 1024px) {
        .item-p{
            left: calc(250px * 8);
        }
    }

    @media screen and (max-width: 768px) {
        .item-p{
            left: calc(180px * 8);
        }
    }

    .item-p1 {
        animation-delay: calc(30s / 8 * (8 - 1.55) * -1);
    }
    .item-p2 {
        animation-delay: calc(30s / 8 * (8 - 2.2) * -1);
    }
    .item-p3 {
        animation-delay: calc(30s / 8 * (8 - 3.3) * -1);
    }
    .item-p4 {
        animation-delay: calc(30s / 8 * (8 - 4.4) * -1);
    }
    .item-p5 {
        animation-delay: calc(30s / 8 * (8 - 5.55) * -1);
    }
    .item-p6 {
        animation-delay: calc(30s / 8 * (8 - 6.2) * -1);
    }
    .item-p7 {
        animation-delay: calc(30s / 8 * (8 - 7.3) * -1);
    }
    .item-p8 {
        animation-delay: calc(30s / 8 * (8 - 8.4) * -1);
    }

    @media screen and (max-width: 425px) {
            .item-p1 {
            animation-delay: calc(30s / 8 * (8 - 1.55) * -1);
        }
        .item-p5 {
            animation-delay: calc(30s / 8 * (8 - 5.55) * -1);
        }
    }

    @media screen and (max-width: 425px) {
        .bg-campus {
            background-size: 580px;
        }
    }
    @media screen and (max-width: 376px) {
        .bg-campus {
            background-size: 550px;
        }
    }
    //Top the Top
    #progress{
        box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        display: none;
    } 

    #progress-value{
        display: flex;
        display: grid;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
</style>

<!----To The Top----->
<div id="progress" class="fixed bottom-10 right-10 h-[70px] w-[70px] place-items-center rounded-full cursor-pointer z-[20]">
    <span id="progress-value" class="rounded-full bg-white h-[calc(100%-15px)] w-[calc(100%-15px)] text-[35px] text-black grid place-items-center">
    <ion-icon name="arrow-up-outline" class="text-2xl"></ion-icon>
    </span>
</div>

<!---Main--->
<div class="">

<!-------------------------Header----------------------->
<section class="relative w-full h-[560px] max-ml:h-[560px] md:h-[480px] lg:h-[600px] dell:h-[700px] xl:h-[750px] transition-all duration-300 bg-cover bg-center md:bg-[url('img/bg-2.png')] max-ml:bg-white">

        <!-------------------------Video----------------------->
        <div class="absolute z-10 top-[50px] md:top-[130px] md:right-[40px] xl:top-[150px] lg:right-[80px] dell:right-[80px]">
            <video src="video/v1.mp4" class="w-full h-[80vw] md:w-[400px] md:h-[300px] lg:w-[500px] lg:h-[380px] dell:w-[600px] dell:h-[450px] xl:w-[650px] xl:h-[480px] object-cover" autoplay loop muted playsinline></video>
        </div>


    
            <!-------------------------Head-Line----------------------->
            <div class="chrome-margin absolute md:left-0 left-5 top-[300px] ml:top-[320px] md:top-[170px] pl-2 md:pl-[40px] lg:pl-[70px] lg:top-[190px] xl:top-[210px] z-[20]">
                <h1 class="text-2xl md:text-2xl lg:text-3xl dell:text-[2.8rem] xl:text-5xl font-normal text-white md:text-black">WELCOME TO</h1>
                <h1 class="text-2xl md:text-2xl lg:text-3xl dell:text-[2.8rem] xl:text-5xl font-normal text-white md:text-black lg:pt-1">MILKY WAY SCHOOL</h1>
            </div>
            <!----------------------Description-------------------------->
            <div class="absolute md:left-0 left-5 pt-[70px] pl-2 md:p-[40px] lg:pl-[70px] py-5 md:py-0 md:bottom-[170px] lg:top-[270px] xl:top-[350px]">
            <img src="img/Register-01.png" class="h-[20px] md:h-[20px] lg:h-[23px] dell:h-[30px]">

                <p class="text-black opacity-[80%] text-[0.90rem] pt-2 pr-11 md:pr-[500px] md:text-[0.80rem] lg:text-sm lg:pr-[620px] dell:pr-[800px] dell:text-lg xl:text-xl xl:pr-[970px]">Start on April 29, 2024 and have a special discount
                for this month's registration.</p>
            </div>
            <!----------------------Button-------------------------->
            <div class="absolute md:left-0 left-5 pl-2 top-[490px] ml:top-[500px] md:top-[340px] md:pl-[40px] lg:top-[380px] lg:pl-[70px] dell:top-[400px] xl:top-[490px]">
                <button class="bg-[#2B91C6] rounded-sm px-6 py-[12px] md:py-[13px] lg:px-[33px] lg:py-[18px] text-xs lg:text-[0.80rem] dell:text-[0.95rem] xl:text-[0.95rem] font-light  text-white hover:bg-[#2278a6] transition-all duration-200" >
                    Learn More
                </button>
            </div>
        </div>
    </section>
    <!-------------------------Header----------------------->


</div>
<!--------------------------Why MWS------------------------->
<section>
    <div class="bg-[#F4F7F8] h-[420px] ml:h-auto md:h-[420px] lg:h-[610px] block w-full py-[30px] md:py-20 lg:py-[100px]">
            <!--------------------Why MWS Mobile------------------->
                <div class="block md:hidden ml:ml-10 ml-6">
                    <img src="icon/Who we are.svg" class="h-[20px]">
                    <h1 class="text-xl md:text-2xl lg:text-3xl dell:text-4xl xl:text-4xl font-normal pt-1 text-nowrap text-black">Why Milky Way School?</h1>
                    <p class="text-[0.90rem] md:text-[0.80rem] lg:text-[0.95rem] xl:text-lg font-normal pr-[30px] pt-1 xl:pt-4 text-gray-700">At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures, where students from different backgrounds come together to learn and grow.  </p>
                </div>
                
        <div class="grid grid-cols-2 justify-center ml:px-10 px-5 md:px-[50px] lg:px-[70px] dell:px-[100px] xl:px-[170px]">
            <img src="img/whymws.jpg" class="w-[150px] h-[150px] mt-5 md:mt-0 md:w-[300px] md:h-[300px] lg:w-[400px] lg:h-[388px] dell:w-[450px] dell:h-[400px] xl:w-[500px] xl:h-[420px] object-cover  xl:rounded-bl-[100px] lg:rounded-bl-[80px] rounded-bl-[40px] rounded-br-[2px] rounded-tr-[2px] rounded-tl-[2px]" alt="students image">
            <!---------------------------Description------------------------->
            <div class="ml-[-20px] md:ml-[0px] relative">
                <div class="hidden md:block">
                    <img src="icon/Who we are.svg" class="h-[15px] lg:h-[22px] xl:h-[25px]">
                    <h1 class="text-lg md:text-2xl lg:text-3xl xl:text-4xl font-normal pt-1 text-nowrap text-black">Why Milky Way School?</h1>
                    <p class="text-[0.85rem] md:text-[0.80rem] lg:text-[0.95rem] dell:text-lg font-normal pt-2 xl:pt-4 text-gray-700">At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures, where students from different backgrounds come together to learn and grow.    </p>
                </div>
            <!---------------------------Why MWS Table------------------------->
                <div class="pt-2 lg:pt-5 items-center mt-2 pl-2 md:pl-0 md:relative">
                    <ul class="grid md:grid-cols-2 grid-cols-1 text-nowrap">
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] dell:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">School Recognition</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] dell:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">High Quality of Education</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] dell:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">School Discipline</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] dell:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">Caring Service</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] dell:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">Affordable Tuition and Fee</p>
                        </li>
                    </ul>
                
                    
                        <!----------------------Button-------------------------->
                        <div class="md:absolute md:flex hidden mt-8 md:bottom-[-55%] lg:bottom-[-70%] md:ml-[0px] xl:bottom-[-70%]">
                            <button class="bg-[#2B91C6] rounded-sm px-6 py-[12px] md:py-[13px] lg:px-[33px] lg:py-[18px] text-xs lg:text-[0.80rem] xl:text-[0.95rem] font-light  text-white hover:bg-[#2278a6] text-nowrap transition-all duration-200" >
                                Learn More
                            </button>
                        </div>
            </div>
            </div>
            
            </div> 
                      <!----------------------Button-------------------------->
                      <div class="md:hidden flex justify-center items-center mt-8 md:bottom-[-55%] lg:bottom-[-70%] md:ml-[0px] xl:bottom-[-70%]">
                            <button class="bg-[#2B91C6] rounded-sm px-6 py-[12px] md:py-[13px] lg:px-[33px] lg:py-[18px] text-xs lg:text-[0.80rem] xl:text-[0.95rem] font-light  text-white hover:bg-[#2278a6] text-nowrap transition-all duration-200" >
                                Learn More
                            </button>
                        </div>
        </div>
    </div>
</section>

<!-------------------------General Program----------------------->

<section class="xl:h-fit lg:h-fit h-fit bg-[#F6F6F6] py-10">  
    <!---------------------------Line--------------------------> 
    <div class="h-[70px] xl:h-[100px] bg-[#036E98] px-10 py-1 lg:px-14 dell:pl-16 xl:py-4 xl:px-16">
        <p class="text-[0.75rem] xl:text-[0.90rem] text-yellow-400 left-0 pt-2">Milky Way School</p>
        <h3 class="text-white font-normal text-lg xl:text-xl">GENERAL PROGRAM</h3>
    </div>

    <!---------------------------General English Program--------------------------->
    <div class="px-7 xl:px-[160px] lg:px-[50px] dell:px-[175px] py-12 dell:pt-[70px] xl:pb-[0px] flex flex-row-2 gap-4">
        <div class="bg-yellow-500 h-[105px] lg:h-[62px] xl:h-[80px] mt-1 w-[6px] xl:w-[7px] md:h-[68px]">
        </div>
        <div class="text-xl xl:text-3xl font-medium">GENERAL ENGLISH PROGRAM</div>
        <p class="absolute dell:pr-[500px] lg:pr-[300px] md:pr-[80px] md:text-[0.90rem] pr-[35px] text-[0.85rem] lg:text-[0.85rem] xl:text-[1.10rem] 
            font-normal pt-3 xl:pt-4 text-gray-700 mt-[20px] ml-[20px] xl:ml-[20px]">
            At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures,
             where students from different backgrounds come together to learn and grow.</p>
    </div>



    <!---------------------------Slider 1--------------------------->
    <div class="flex items-center justify-center">
        <div class="wrapper-slider1 top-16 xl:max-w-[1200px] lg:max-w-[900px] dell:max-w-[1000px] xl:w-[100%] lg:w-[100%] md:max-w-[640px] md:w-[100%] ml:max-w-[300px] max-w-[300px] w-[100%] mx-auto xl:mx-0 md:mx-auto">

            <ion-icon id="Left1" name="chevron-back-outline" class="slide-btn1 absolute bg-white xl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
             rounded-md xl:left-[-80px] xl:top-[200px] lg:left-[770px] lg:top-[-155px] dell:left-[860px] dell:top-[-150px] md:left-[505px] md:top-[-17%] left-[170px] top-[-17%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>
             
            <ul class="carousel1 xl:gap-[15px] lg:gap-[10px] gap-[5px] lg:mt-[-50px] xl:mt-0">

            <!------------------------------------ Card 1 ------------------------------------->
                    <li class="card">
                        <img src="img/stu1.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Kindergarten</h1>
                            <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 2 ------------------------------------->
                    <li class="card">
                        <img src="img/student1.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Primary School</h1>
                            <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 3 ------------------------------------->
                    <li class="card">
                        <img src="img/stu2.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Lower Secondary School</h1>
                            <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 4 ------------------------------------->
                    <li class="card">
                        <img src="img/stu3.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Secondary School</h1>
                            <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 5 ------------------------------------->
                    <li class="card">
                        <img src="img/stu1.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Kindergarten</h1>
                            <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>

                </ul>  

                    <!--------------------------- Indicators for PC ------------------>
                    <div class="indicators1 flex justify-center gap-2 pt-3 transition-all duration-300 xl:mr-0 mx-auto">
                        <span class="indicator1 active"></span>
                        <span class="indicator1"></span>
                        <span class="indicator1"></span>
                        <span class="indicator1 lg:hidden"></span>
                        <span class="indicator1 md:hidden"></span>
                    </div>
                    
                <ion-icon id="Right1" name="chevron-forward-outline" class="slide-btn1 absolute bg-white xl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                rounded-md xl:right-[-80px] xl:top-[200px] lg:top-[-155px] dell:top-[-150px] md:right-[5px] md:top-[-17%] right-[0px] top-[-17%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

            </div>
        </div>


    <!---------------------------General Khmer Program--------------------------->
    <div class="px-7 py-[110px] xl:px-[160px] lg:mt-[100px] lg:px-[50px] lg:py-[50px] dell:px-[175px] md:py-[120px] xl:pt-[100px] xl:pb-[70px] flex flex-row-2 gap-4 ">
        <div class="bg-yellow-500 h-[105px] lg:h-[62px] xl:h-[80px] mt-1 w-[6px] xl:w-[7px] md:h-[68px]">
        </div>
        <div class="text-xl xl:text-3xl font-medium">GENERAL KHMER PROGRAM</div>
        <p class="absolute dell:pr-[500px] lg:pr-[300px] md:pr-[80px] md:text-[0.90rem] pr-[35px] text-[0.85rem] lg:text-[0.85rem] xl:text-[1.10rem] 
            font-normal pt-3 xl:pt-4 text-gray-700 mt-[20px] ml-[20px] xl:ml-[20px]"> 
            At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures,
            where students from different backgrounds come together to learn and grow.</p>
    </div>

         <!---------------------------Slider 2--------------------------->
        <div class="flex items-center justify-center">
            <div class="wrapper-slider2 xl:max-w-[1200px] lg:max-w-[900px] xl:w-[100%] lg:w-[100%] dell:max-w-[1000px] md:max-w-[640px] md:w-[100%] max-w-[300px] w-[100%] mx-auto xl:mx-0 md:mx-auto">

                <ion-icon id="Left2" name="chevron-back-outline" class="slide-btn2 absolute lg:hidden bg-white xl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
             rounded-md xl:left-[-80px] md:left-[509px] left-[170px] top-[-16%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>

                <ul class="carousel2 xl:gap-[15px] lg:gap-[10px] gap-[5px]">

                <!------------------------------------ Card 1 ------------------------------------->
                        <li class="card">
                            <img src="img/stu1.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                            <!------------------------Description-------------------------->
                            <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                                <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">Khmer Program</div>
                                <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Kindergarten</h1>
                                <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                                At Milky Way School, we value diversity and inclusivity. 
                                Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                                <a href="#" class="relative inline-flex items-center space-x-1 group">
                                    <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                        <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                    </span>
                                </a>
                            </div>
                        </li>
                <!------------------------------------ Card 2 ------------------------------------->
                        <li class="card">
                            <img src="img/stu3.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                            <!------------------------Description-------------------------->
                            <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                                <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">Khmer Program</div>
                                <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">Primary School</h1>
                                <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                                At Milky Way School, we value diversity and inclusivity. 
                                Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                                <a href="#" class="relative inline-flex items-center space-x-1 group">
                                    <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                        <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                    </span>
                                </a>
                            </div>
                        </li>
                <!------------------------------------ Card 3 ------------------------------------->
                        <li class="card">
                            <img src="img/student1.jpg" alt="" class="xl:w-[600px] xl:h-[209px] lg:w-[300px] lg:h-[170px] dell:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                            <!------------------------Description-------------------------->
                            <div class="xl:w-auto lg:w-auto xl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                                <div class="xl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xl:px-3 xl:py-1 py-1 px-[10px] rounded">Khmer Program</div>
                                <h1 class="xl:text-xl text-lg font-medium xl:py-3 py-3">High School</h1>
                                <p class="xl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xl:pb-4 pb-2">
                                At Milky Way School, we value diversity and inclusivity. 
                                Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                                <a href="#" class="relative inline-flex items-center space-x-1 group">
                                    <span class="xl:text-[1.1rem] text-[0.90rem] xl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                        <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                    </span>
                                </a>
                            </div>
                        </li>

                    </ul>  

                        <!--------------------------- Indicators ------------------>
                        <div class="indicators2 lg:hidden flex justify-center gap-2 mt-1 transition-all duration-300 xl:mr-0 mx-auto">
                            <span class="indicator2 active"></span>
                            <span class="indicator2"></span>
                            <span class="indicator2"></span>
                        </div>
                        
                    <ion-icon id="Right2" name="chevron-forward-outline" class="slide-btn2 absolute lg:hidden bg-white xl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                rounded-md xl:right-[-80px] md:right-[0px] right-[0px] top-[-16%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

                </div>
            </div>

        
</section>

<!---------------------------Quote------------------------->
<section class="relative w-full xl:h-[700px] lg:h-[600px] md:h-[500px] h-[350px] bg-white py-[100px] z-[-1]">
        <div class="">
            <img src="img/quote.png" alt="" class="lg:h-[700px] md:h-[500px] ml:h-[320px] h-[280px] md:opacity-100 opacity-70 w-auto object-top-left">
        </div>
        <div class="absolute md:top-[120px] ml:top-[100px] top-[120px] left-[-10px] xl:left-[300px] dell:left-[200px] lg:left-[100px] md:left-[70px] px-10">
            <img src="img/teacher.png" alt="" class="xl:h-[600px] lg:h-[500px] md:h-[400px] ml:h-[250px] h-[230px] w-auto transform scale-x-[-1]">
        </div>
    <div class="absolute lg:top-[120px] md:top-[80px] top-[40px] dell:right-[150px] lg:right-[100px] ml:right-[10px] right-[5px]">
    <img src="img/q-frame.png" alt="" class="dell:h-[400px] lg:h-[310px] md:h-[280px] md:w-auto h-[210px] ml:w-[270px] w-[250px]">
    <pre class="dell:text-2xl lg:text-lg md:text-[1.05rem] text-[0.90rem] font-thin font-['Kalam'] text-gray-700 dell:mt-[-250px] xl:ml-[80px] lg:ml-[60px] lg:mt-[-200px] md:mt-[-180px] md:ml-[48px]
    mt-[-140px] ml:ml-[40px] ml-[25px]">“ The Capacity to learn is a gift, 
    the ability to learn is a skill,
the willingness to learn is a choice” </pre>    
</div>
</section>


<!--------------Student Activty----------------->
<section class="w-full overflow-y-hidden xl:h-[700px] lg:h-[630px] md:h-[700px] bg-gray-100 xl:px-[120px] lg:px-[50px] md:px-[50px] pl-[40px] pr-[10px] md:py-20 py-10 items-center justify-center">
    <div> 
        <div class="grid md:grid-cols-2 grid-col-1 xl:gap-[500px] lg:gap-[300px] md:gap-[100px] ">
            <div>
                <h3 class="text-yellow-400 font-medium lg:text-[0.95rem] md:text-[0.80rem] text-[0.80rem]">Student Activities</h3>
                <h1 class="xl:text-2xl lg:text-lg md:text-md text-xl md:pr-0 pr-10">Student Activities help students connect and grow.</h1>
            </div>
            <div class="lg:mt-[30px] mt-3">
                <p class="xl:text-[1.05rem] lg:text-[0.80rem] md:text-[0.85rem] text-[0.90rem] font-normal text-gray-700">Our school is a melting pot of cultures, where students from different backgrounds come.</p>
            </div>


    <!-------------------------Image Card-------------------------->
    </div>
            <div class="mt-12 hidden xl:grid grid-cols-4 xl:max-w-[1300px] lg:max-w-[1300px] w-[100%] gap-3 items-center mx-auto">   
                <div class="relative group">
                    <img src="Img/stu1.jpg" alt="" class="xl:h-[270px] xl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="Img/stu2.jpg" alt="" class="xl:h-[270px] xl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="Img/stu3.jpg" alt="" class="xl:h-[270px] xl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="Img/student1.jpg" alt="" class="xl:h-[270px] xl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
            </div>



        <!-----------------------Image Card Mobile------------------------------>
        <div class="xl:hidden flex items-center justify-center lg:mt-[100px] mt-[120px] ">
            <div class="img-wrapper max-w-[320px] w-[100%] lg:max-w-[900px] md:max-w-[600px] md:mx-auto mr-8">

                <ion-icon id="Leftimg" name="chevron-back-outline" class="img-btn absolute xl:hidden bg-white xl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                rounded-md lg:left-[770px] left-[200px] md:left-[480px] top-[-27%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>

                <ul class="carousel-img gap-[5px] md:gap-[12px]">

                <!------------------------------------ Image 1 ------------------------------------->
                    <li class="img-card">
                            <div class="relative group">
                                <img src="Img/stu1.jpg" alt="" class="h-[250px] w-[450px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                                <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                                <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                                <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                                </div>
                            </div>
                    </li>
                <!------------------------------------ Image 2 ------------------------------------->
                        <li class="img-card">
                            <div class="relative group">
                                <img src="Img/stu2.jpg" alt="" class="h-[250px] w-[450px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                                <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                                <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                                <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                                </div>
                            </div>
                        </li>
                <!------------------------------------ Image 3 ------------------------------------->
                        <li class="img-card">
                            <div class="relative group">
                                    <img src="Img/stu3.jpg" alt="" class="h-[250px] w-[400px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                                    <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                                    <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                                    </div>
                            </div>
                        </li>
                <!------------------------------------ Image 4 ------------------------------------->
                        <li class="img-card">
                            <div class="relative group">
                                    <img src="Img/student1.jpg" alt="" class="h-[250px] w-[400px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                                    <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                                    <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                                    </div>
                            </div>
                        </li>

                    </ul>  

                    <!--------------------------- Indicators --------------------------->
                    <div class="indicators-img lg:hidden flex justify-center gap-2 md:mt-5 mt-2 transition-all duration-300 xl:mr-0 mx-auto">
                        <span class="indicator-img active"></span>
                        <span class="indicator-img"></span>
                        <span class="indicator-img"></span>
                        <span class="indicator-img md:hidden"></span>
                    </div>

                        
                    <ion-icon id="Rightimg" name="chevron-forward-outline" class="img-btn absolute xl:hidden bg-white xl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                    rounded-md xl:right-[-80px] md:right-[0px] right-[0px] top-[-27%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

            </div>
        </div>
    </div>

</section>


<!-----------------------------------Visit Campus ------------------------->
<section>
    <div class="h-[280px] ml:h-[280px] xl:h-[600px] lg:h-[400px] overflow-hidden w-full">
            <div class="bg-campus relative h-full bg-[url('img/student-cp.jpg')] bg-cover bg-center bg-no-repeat p-10">
            <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/10 to-transparent"></div>
                <div class="left-[160px] xl:left-[800px] xl:top-[100px] lg:left-[570px] absolute">
                    <h1 class="text-2xl xl:text-5xl lg:text-3xl font-semibold text-white">Take the Next Step</h1>
                    <p class="py-5 text-[0.90rem] pr-3 md:pr-0 md:text-[0.90rem] text-white xl:text-xl">At Milky Way School, we value diversity and inclusivity.
                        <br>Our school is a melting pot of cultures.</p>
                    <button class="text-white text-xs xl:text-[1.05rem] lg:text-[0.90rem] font-light bg-yellow-500 md:ml-0 ml-[90px] px-6 py-[12px] lg:px-[30px] lg:py-[15px] rounded-sm mt-[15px] md:mt-[20px]">
                        Visit Campus</button>
                </div>
            </div>
        </div>
</section>

<!-----------------------------------Partnership---------------------------->
<section>
    <div class="xl:h-[300px] lg:h-[200px] bg-white">
        <div class="partner xl:mt-[5rem] lg:mt-[3rem] mt-[3rem]">
                <img src="img/khmer-edu.png" alt="EMDYS SVG" class="item-p item-p1 xl:h-[150px] lg:h-[120px] md:h-[110px] h-[100px]">
                <img src="img/macmillan.png" alt="macmillan SVG" class="item-p item-p2 xl:mt-[50px] lg:mt-[40px] mt-[25px] xl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/oxford.png" alt="oxford SVG" class="item-p item-p3 xl:mt-[60px] lg:mt-[50px] mt-[35px] xl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/cambridge.png" alt="cambridge SVG" class="item-p item-p4 xl:mt-[50px] lg:mt-[40px] mt-[25px] xl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/khmer-edu.png" alt="EMDYS png" class="item-p item-p5 xl:h-[150px] lg:h-[120px] md:h-[110px] h-[100px]">
                <img src="img/macmillan.png" alt="macmillan png" class="item-p item-p6 xl:mt-[50px] lg:mt-[40px] mt-[25px] xl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/oxford.png" alt="oxford png" class="item-p item-p7 xl:mt-[60px] lg:mt-[50px] mt-[35px] xl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/cambridge.png" alt="cambridge SVG" class="item-p item-p8 xl:mt-[50px] lg:mt-[40px] mt-[25px] xl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
        </div>
    </div>
</section>

<!-------------------------------------Campus Map------------------------------->
<section class="grid lg:grid-cols-2 grid-cols-1 lg:h-fit md:h-[150vh]">
    <div class="relative">
        <div>
            <img src="img/bg-map.jpg" class="xl:h-[600px] xl:w-[1000px] lg:h-[500px] lg:w-[100%] md:h-[900px] w-[100%] h-[350px]" alt="">
        </div>
            <div class="absolute xl:top-[16rem] lg:top-[14rem] xl:left-[20rem] lg:left-[15rem] md:left-[5rem] md:top-[3rem] top-[50px] left-[30px] transform lg:-translate-x-1/2 lg:-translate-y-1/2">
                <div class="text-nowrap">
                    <h1 class="xl:text-4xl text-2xl text-white font-medium">Ours 50 campuses</h1>
                    <h1 class="xl:text-4xl text-2xl text-white font-medium md:pt-2">Around Phnom Penh City.</h1>
                </div>
            <div>
                <p class="text-white xl:text-[1.2rem] lg:text-[1rem] text-[1rem] font-light xl:mt-10 lg:mt-8 md:mt-5 mt-3 leading-relaxed lg:pr-0 md:pr-[100px] pr-[10px]">Lorem ipsum dolor sit amet consectetur. Aliquet pellentesque platea velit nisl pretium. Quis habitant ullamcorper erat aliquam viverra vestibulum. 
                    Turpis ante neque vitae viverra morbi at elementum lacus </p>
            </div>
            <div class="lg:mt-10 mt-5">
                <a href="#" class="relative inline-flex items-center space-x-1 group">
                    <span class="xl:text-[1.2rem] lg:text-[1rem] md:text-[1rem] text-white xl:font-normal font-medium group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                    tranisform transition-transform duration-300 ease-in-out">Visit Campus</span>
                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                        <ion-icon name="arrow-forward-outline" class="text-yellow-500 text-[1.2rem]"></ion-icon>
                    </span>
                </a>
            </div>
        </div>
    <!-- Google Map Tablet --> 
        <div class="md:h-[500px] md:w-[600px] ml:h-[500px] md:mt-[-580px] ml:mt-[10rem] inset-0 m-auto md:flex justify-center hidden lg:hidden">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1U3zFFZd4XwY0V5ugUavNJJmsJOKQLLw&ehbc=2E312F" width="100%" height="100%" async></iframe>
        </div>
    </div>

    <!-- Google Map Mobile -->
        <div class="block md:hidden h-[400px]">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1U3zFFZd4XwY0V5ugUavNJJmsJOKQLLw&ehbc=2E312F" width="100%" height="100%" async></iframe>
        </div>

    <!-- Google Map PC -->
        <div class="hidden lg:block">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1U3zFFZd4XwY0V5ugUavNJJmsJOKQLLw&ehbc=2E312F" width="100%" height="100%" async></iframe>
        </div>

</section>

<!-----------------------------------News and Event------------------------------------->
<section class="xl:h-[150vh] bg-white">
    <div class="dell:flex dell:flex-col-2 flex-row lg:py-[100px] md:py-[50px] py-[50px] xl:px-[80px] lg:px-[100px] md:px-[50px] px-[50px] justify-center dell:space-x-[2rem] md:space-y-0 space-y-[2rem]">
        <div class="text-nowrap leading-tight">
            <h1 class="xl:text-[2.8rem] lg:text-[2.1rem] md:text-[1.9rem] text-[2rem] text-black">News and Events</h1>
            <span class="text-yellow-400 xl:text-[1.2rem] lg:text-[0.90rem] md:text-[0.85rem] text-[0.90rem]">News and events inform and entertain</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 xl:gap-5 lg:gap-8 md:gap-5 dell:pt-0 md:pt-10">
            <div class="xl:max-w-[400px] lg:max-w-[250px] max-w-[300px]">
                <img src="img/brainstorm.png" class="xl:w-[400px] xl:h-[300px] lg:w-[250px] lg:h-[200px] h-[200px] w-[300px] object-cover" alt="">
                <h1 class="xl:text-2xl lg:text-xl md:text-[1rem] text-[1.2rem] font-medium pt-5">Brainstorming Activity</h1>
                <div class="mt-3 lg:w-[200px] w-[150px] h-[4px] bg-yellow-400"></div>
                <p class="mt-3 xl:text-[1rem] lg:text-[0.85rem] text-[0.90rem] font-light leading-relaxed">Brainstorming is one of the most effective activities for skill development, as it can help develop a variety of skills in students.</p>
            </div>
            <div class="xl:max-w-[400px] lg:max-w-[250px] max-w-[300px] md:pt-0 pt-[3rem]">
                <img src="img/drawing.png" class="xl:w-[400px] xl:h-[300px] lg:w-[250px] lg:h-[200px] h-[200px] w-[300px] object-cover" alt="">
                <h1 class="xl:text-2xl lg:text-xl md:text-[1rem] text-[1.2rem] font-medium pt-5">Drawing Activity</h1>
                <div class="mt-3 lg:w-[200px] w-[150px] h-[4px] bg-red-500"></div>
                <p class="mt-3 xl:text-[1rem] lg:text-[0.85rem] text-[0.90rem] font-light leading-relaxed">Using drawing as an instructional tool in the classroom can positively impact student learning.</p>
            </div>
            <div class="xl:max-w-[400px] lg:max-w-[250px] max-w-[300px] md:pt-0 pt-[3rem]">
                <img src="img/skype.png" class="xl:w-[400px] xl:h-[300px] lg:w-[250px] lg:h-[200px] h-[200px] w-[300px] object-cover" alt="">
                <h1 class="xl:text-2xl lg:text-xl md:text-[1rem] text-[1.2rem] font-medium pt-5">Skype Debates</h1>
                <div class="mt-3 lg:w-[200px] w-[150px] h-[4px] bg-green-500"></div>
                <p class="mt-3 xl:text-[1rem] lg:text-[0.85rem] text-[0.90rem] font-light leading-relaxed">Skype debates are a fun way to boost your students’ communication, research, and critical thinking skills.</p>
            </div>
        </div>
    </div>

    <?php include("page_footer.php");?>

</section>

<script>
    // First slider functionality
    const carousel1 = document.querySelector(".carousel1");
    const arrowBtns1 = document.querySelectorAll(".wrapper-slider1 .slide-btn1");
    const firstCardWidth1 = carousel1.querySelector(".card").offsetWidth; 
    const indicators1 = document.querySelectorAll('.indicator1');
    const indicatorsMb1 = document.querySelectorAll('.indicator-mb1');

    let currentIndex1 = 0;

    const updateIndicators1 = () => {
        indicators1.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex1);
        });
    }

    arrowBtns1.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel1.scrollLeft += btn.id === "Left1" ? -firstCardWidth1 : firstCardWidth1;
            
            if (btn.id === "Left1") {
                currentIndex1 = Math.max(currentIndex1 - 1, 0);
            } else {
                currentIndex1 = Math.min(currentIndex1 + 1, indicators1.length - 1);
            }

            updateIndicators1();
        });
    });

    indicators1.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex1 = index;
            carousel1.scrollLeft = firstCardWidth1 * currentIndex1;
            updateIndicators1();
        });
    });

    // Second slider functionality
    const carousel2 = document.querySelector(".carousel2");
    const arrowBtns2 = document.querySelectorAll(".wrapper-slider2 .slide-btn2");
    const firstCardWidth2 = carousel2.querySelector(".card").offsetWidth; 
    const indicators2 = document.querySelectorAll('.indicator2');

    let currentIndex3 = 0;

    const updateIndicators2 = () => {
        indicators2.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex3);
        });
    }

    arrowBtns2.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel2.scrollLeft += btn.id === "Left2" ? -firstCardWidth2 : firstCardWidth2;
            
            if (btn.id === "Left2") {
                currentIndex3 = Math.max(currentIndex3 - 1, 0);
            } else {
                currentIndex3 = Math.min(currentIndex3 + 1, indicators2.length - 1);
            }

            updateIndicators2();
        });
    });

    indicators2.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex3 = index;
            carousel2.scrollLeft = firstCardWidth2 * currentIndex3;
            updateIndicators2();
        });
    });


   // Image slider functionality
    const carouselImg = document.querySelector(".carousel-img");
    const arrowBtnimg = document.querySelectorAll(".img-wrapper .img-btn");
    const firstCardWidth3 = carouselImg.querySelector(".img-card").offsetWidth;
    const indicators3 = document.querySelectorAll('.indicator-img');

    let currentIndexImg = 0;
    let autoSlideInterval;

    // Function to update active indicator dots
    const updateIndicators3 = () => {
        indicators3.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndexImg);
        });
    }

    // Function to slide the carousel
    const slideCarouselImg = (direction) => {
        if (direction === 'next') {
            currentIndexImg = Math.min(currentIndexImg + 1, indicators3.length - 1);
        } else {
            currentIndexImg = Math.max(currentIndexImg - 1, 0);
        }
        carouselImg.scrollLeft = firstCardWidth3 * currentIndexImg;
        updateIndicators3();
    }

    // Auto-slide functionality
    const startAutoSlide = () => {
        autoSlideInterval = setInterval(() => {
            if (currentIndexImg < indicators3.length - 1) {
                slideCarouselImg('next');
            } else {
                currentIndexImg = -1; // Reset to start
            }
        }, 3000); // Slide every 3 seconds
    }

    const resetAutoSlide = () => {
        clearInterval(autoSlideInterval); // Stop the current interval
        startAutoSlide(); // Start a new one
    }

    // Event listeners for arrow buttons
    arrowBtnimg.forEach(btn => {
        btn.addEventListener("click", () => {
            const direction = btn.id === "Leftimg" ? 'prev' : 'next';
            slideCarouselImg(direction);
            resetAutoSlide(); // Reset auto-slide when user manually clicks
        });
    });

    // Event listeners for indicator dots
    indicators3.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndexImg = index;
            carouselImg.scrollLeft = firstCardWidth3 * currentIndexImg;
            updateIndicators3();
            resetAutoSlide(); // Reset auto-slide when user manually clicks a dot
        });
    });

    // Start the auto-slide
    startAutoSlide();

</script>
<script src="to_the_top.js"></script>


<?php include("footer.php");?>
