<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="icon/logo.ico">	
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>



<style>

    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    * {
        margin: 0;
    }

    body {
        font-family: 'Poppins', 'Battambang', 'Sriracha' ,sans-serif;
        overflow-x: hidden; 
    }


    img {
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    html{
        scroll-behavior: smooth;
    }

    /************************************Slider1**********************************/
    .wrapper-slider1{
            position: relative;
        }

        .carousel1 .dragging {
            scroll-behavior: auto;
        }

         .wrapper-slider1 .carousel1 {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% / 3) - 10px);
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: 0;
        }

       .wrapper-slider1 .carousel1::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar in Firefox */
        .wrapper-slider1 .carousel1 {
            scrollbar-width: none; /* For Firefox */
        }

        /* For older versions of Firefox (optional) */
        @-moz-document url-prefix() {
        .wrapper-slider1 .carousel1 {
                scrollbar-width: none;
            }
        }
        .wrapper-slider1 .carousel1 .card {
            scroll-snap-align: start;
        }

        @media screen and (max-width: 1024px) {
            .wrapper-slider1 .carousel1 {
                grid-auto-columns: calc((100% / 3) - 5px);
            }
        }
        @media screen and (max-width: 1000px) {
            .wrapper-slider1 .carousel1 {
                grid-auto-columns: calc((100% / 2) - 5px);
            }
        }

        @media screen and (max-width: 710px) {
            .wrapper-slider1 .carousel1 {
                grid-auto-columns: 100%;
            }
        }

        .indicators1, .indicatorsMb1, .indicators-img {
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .indicator1, .indicatorMb1, .indicator-img {
            width: 12px;
            height: 12px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;    
        }

        .indicator1.active, .indicatorMb1.active, .indicator-img.active {
            background-color: #2B91C6;
        }


        @supports (-webkit-appearance: none) {
            .chrome-margin {
            margin-top: -30px;
            }
        }

        /************************************Slider2 ******************/
        .wrapper-slider2{
            position: relative;
        }

        .carousel2 .dragging {
            scroll-behavior: auto;
        }

         .wrapper-slider2 .carousel2 {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% / 3) - 12px);
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: 0;
        }

       .wrapper-slider2 .carousel2::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar in Firefox */
        .wrapper-slider2 .carousel2 {
            scrollbar-width: none; /* For Firefox */
        }

        /* For older versions of Firefox (optional) */
        @-moz-document url-prefix() {
        .wrapper-slider2 .carousel2 {
                scrollbar-width: none;
            }
        }
        .wrapper-slider2 .carousel2 .card {
            scroll-snap-align: start;
        }

        @media screen and (max-width: 1024px) {
            .wrapper-slider2 .carousel2 {
                grid-auto-columns: calc((100% / 3) - 9px);
            }
        }
        @media screen and (max-width: 999px) {
            .wrapper-slider2 .carousel2 {
                grid-auto-columns: calc((100% / 2) - 5px);
            }
        }

        @media screen and (max-width: 710px) {
            .wrapper-slider2 .carousel2 {
                grid-auto-columns: 100%;
            }
        }

        .indicators2 {
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .indicator2 {
            width: 12px;
            height: 12px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;    
        }

        .indicator2.active {
            background-color: #2B91C6;
        }


        @supports (-webkit-appearance: none) {
            .chrome-margin {
            margin-top: -30px;
            }
        }

        .img-wrapper {
            position: relative;
        } 

        .img-wrapper .carousel-img .img-card {
            scroll-snap-align: start;
        }

        @-moz-document url-prefix() {
        .img-wrapper .carousel-img {
                scrollbar-width: none;
            }
        }
        .carousel-img .dragging {
            scroll-behavior: auto;
        }

         .img-wrapper .carousel-img {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% / 3) - 10px);
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            scrollbar-width: 0;
        }

       .img-wrapper .carousel-img::-webkit-scrollbar {
            display: none;
        }

        @media screen and (max-width: 999px) {
            .img-wrapper .carousel-img {
                grid-auto-columns: calc((100% / 2) - 5px);
            }
        }
        @media screen and (max-width: 710px) {
            .img-wrapper .carousel-img {
                grid-auto-columns: 100%;
            }
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
<?php include("./include/navbar.php");?>
<!----To The Top----->
<div id="progress" class="fixed bottom-10 right-10 h-[70px] w-[70px] place-items-center rounded-full cursor-pointer z-[20]">
    <span id="progress-value" class="rounded-full bg-white h-[calc(100%-15px)] w-[calc(100%-15px)] text-[35px] text-black grid place-items-center">
    <ion-icon name="arrow-up-outline" class="text-2xl"></ion-icon>
    </span>
</div>

<!---Main--->
<div class="">

<!-------------------------Header----------------------->
<section class="relative w-full h-[560px] max-ml:h-[560px] md:h-[480px] lg:h-[600px] xl:h-[700px] xxl:h-[750px] bg-cover bg-center md:bg-[url('img/bg-2.png')] max-ml:bg-white">

        <!-------------------------Video----------------------->
        <div class="absolute z-10 top-[80px] md:top-[130px] md:right-[40px] xxl:top-[150px] lg:right-[80px] xl:right-[80px]">
            <video src="video/v1.mp4" class="w-screen h-[300px] sm:h-[300px] md:w-[400px] md:h-[300px] lg:w-[500px] lg:h-[380px] xl:w-[600px] xl:h-[450px] xxl:w-[650px] xxl:h-[480px] object-cover" autoplay loop muted playsinline></video>
        </div>


            <!-------------------------Head-Line----------------------->
            <div class="chrome-margin absolute md:left-0 left-5 top-[300px] ml:top-[320px] md:top-[170px] pl-2 md:pl-[40px] lg:pl-[70px] lg:top-[190px] xxl:top-[210px] z-[10]">
                <h1 class="text-2xl md:text-2xl lg:text-3xl xl:text-[2.8rem] xxl:text-5xl font-normal text-white md:text-black">WELCOME TO</h1>
                <h1 class="text-2xl md:text-2xl lg:text-3xl xl:text-[2.8rem] xxl:text-5xl font-normal text-white md:text-black lg:pt-1">MILKY WAY SCHOOL</h1>
            </div>
            <!----------------------Description-------------------------->
            <div class="absolute md:left-0 left-5 pt-[400px] pl-2 md:p-[40px] lg:pl-[70px] py-5 md:py-0 md:bottom-[170px] lg:top-[270px] xxl:top-[350px]">
            <img src="img/Register-01.png" class="h-[20px] md:h-[20px] lg:h-[23px] xl:h-[30px]">

                <p class="text-black opacity-[80%] text-[0.90rem] pt- pr-11 md:pr-[500px] md:text-[0.80rem] lg:text-sm lg:pr-[620px] xl:pr-[800px] xl:text-lg xxl:text-xl xxl:pr-[970px]">Start on April 29, 2024 and have a special discount
                for this month's registration.</p>
            </div>
            <!----------------------Button-------------------------->
            <div class="absolute md:left-0 left-5 pl-2 top-[490px] ml:top-[500px] md:top-[340px] md:pl-[40px] lg:top-[380px] lg:pl-[70px] xl:top-[400px] xxl:top-[490px]">
                <button class="bg-[#2B91C6] rounded-sm px-6 py-[12px] md:py-[13px] lg:px-[33px] lg:py-[18px] text-xs lg:text-[0.80rem] xl:text-[0.95rem] xxl:text-[0.95rem] font-light  text-white hover:bg-[#2278a6] transition-all duration-200" >
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
                    <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl xxl:text-4xl font-normal pt-1 text-nowrap text-black">Why Milky Way School?</h1>
                    <p class="text-[0.90rem] md:text-[0.80rem] lg:text-[0.95rem] xxl:text-lg font-normal pr-[30px] pt-1 xxl:pt-4 text-gray-700">At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures, where students from different backgrounds come together to learn and grow.  </p>
                </div>
                
        <div class="grid grid-cols-2 justify-center ml:px-10 px-5 md:px-[50px] lg:px-[70px] xl:px-[100px] xxl:px-[170px]">
            <img src="img/whymws.jpg" class="w-[150px] h-[150px] mt-5 md:mt-0 md:w-[300px] md:h-[300px] lg:w-[400px] lg:h-[388px] xl:w-[450px] xl:h-[400px] xxl:w-[500px] xxl:h-[420px] object-cover  xxl:rounded-bl-[100px] lg:rounded-bl-[80px] rounded-bl-[40px] rounded-br-[2px] rounded-tr-[2px] rounded-tl-[2px]" alt="students image">
            <!---------------------------Description------------------------->
            <div class="ml-[-20px] md:ml-[0px] relative">
                <div class="hidden md:block">
                    <img src="icon/Who we are.svg" class="h-[15px] lg:h-[22px] xxl:h-[25px]">
                    <h1 class="text-lg md:text-2xl lg:text-3xl xxl:text-4xl font-normal pt-1 text-nowrap text-black">Why Milky Way School?</h1>
                    <p class="text-[0.85rem] md:text-[0.80rem] lg:text-[0.95rem] xl:text-lg font-normal pt-2 xxl:pt-4 text-gray-700">At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures, where students from different backgrounds come together to learn and grow.    </p>
                </div>
            <!---------------------------Why MWS Table------------------------->
                <div class="pt-2 lg:pt-5 items-center mt-2 pl-2 md:pl-0 md:relative">
                    <ul class="grid md:grid-cols-2 grid-cols-1 text-wrap mm:text-nowrap">
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] xl:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">School Recognition</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] xl:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">High Quality of Education</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] xl:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">School Discipline</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] xl:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">Caring Service</p>
                        </li>
                        <li class="flex items-center w-[150px]">
                            <img src="icon/tick.png" class="h-[12px] lg:h-[15px] ">
                            <p class="text-[0.76rem] md:text-[0.75rem] lg:text-[0.95rem] xl:text-lg font-normal pt-2 text-gray-700 ml-2 mb-[5px]">Affordable Tuition and Fee</p>
                        </li>
                    </ul>
                
                    
                        <!----------------------Button-------------------------->
                        <div class="md:absolute md:flex hidden mt-8 md:bottom-[-55%] lg:bottom-[-70%] md:ml-[0px] xxl:bottom-[-70%]">
                            <button class="bg-[#2B91C6] rounded-sm px-6 py-[12px] md:py-[13px] lg:px-[33px] lg:py-[18px] text-xs lg:text-[0.80rem] xxl:text-[0.95rem] font-light  text-white hover:bg-[#2278a6] text-nowrap transition-all duration-200" >
                                Learn More
                            </button>
                        </div>
            </div>
            </div>
            
            </div> 
                      <!----------------------Button-------------------------->
                      <div class="md:hidden flex justify-center items-center mt-8 md:bottom-[-55%] lg:bottom-[-70%] md:ml-[0px] xxl:bottom-[-70%]">
                            <button class="bg-[#2B91C6] rounded-sm px-6 py-[12px] md:py-[13px] lg:px-[33px] lg:py-[18px] text-xs lg:text-[0.80rem] xxl:text-[0.95rem] font-light  text-white hover:bg-[#2278a6] text-nowrap transition-all duration-200" >
                                Learn More
                            </button>
                        </div>
        </div>
    </div>
</section>

<!-------------------------General Program----------------------->

<section class="xxl:h-fit lg:h-fit h-fit bg-[#F6F6F6] py-20">  
    <!---------------------------Line--------------------------> 
    <div class="h-[70px] xxl:h-[100px] bg-[#036E98] px-10 py-1 lg:px-14 xl:pl-16 xxl:py-4 xxl:px-16">
        <p class="text-[0.75rem] xxl:text-[0.90rem] text-yellow-400 left-0 pt-2">Milky Way School</p>
        <h3 class="text-white font-normal text-lg xxl:text-xl">GENERAL PROGRAM</h3>
    </div>

    <!---------------------------General English Program--------------------------->
    <div class="px-7 xxl:px-[160px] lg:px-[50px] xl:px-[175px] py-12 xl:pt-[70px] xxl:pb-[0px] flex flex-row-2 gap-4">
        <div class="bg-yellow-500 h-[105px] lg:h-[62px] xxl:h-[80px] mt-1 w-[6px] xxl:w-[7px] md:h-[68px]">
        </div>
        <div class="text-xl xxl:text-3xl font-medium">GENERAL ENGLISH PROGRAM</div>
        <p class="absolute xl:pr-[500px] lg:pr-[300px] md:pr-[80px] md:text-[0.90rem] pr-[35px] text-[0.85rem] lg:text-[0.85rem] xxl:text-[1rem] 
            font-normal pt-3 xxl:pt-4 text-gray-700 mt-[20px] ml-[20px] xxl:ml-[20px]">
            At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures,
             where students from different backgrounds come together to learn and grow.</p>
    </div>



    <!---------------------------Slider 1---------------------------> 
    <div class="flex items-center justify-center">
        <div class="wrapper-slider1 top-16 xxl:max-w-[1200px] lg:max-w-[900px] xl:max-w-[1000px] xxl:w-[100%] lg:w-[100%] md:max-w-[640px] md:w-[100%] ml:max-w-[300px] max-w-[300px] w-[100%] mx-auto xxl:mx-0 md:mx-auto">

            <ion-icon id="Left1" name="chevron-back-outline" class="slide-btn1 absolute bg-white xxl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
             rounded-md xxl:left-[-80px] xxl:top-[200px] lg:left-[770px] lg:top-[-155px] xl:left-[860px] xl:top-[-150px] md:left-[505px] md:top-[-17%] left-[170px] top-[-17%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>
             
            <ul class="carousel1 xxl:gap-[15px] lg:gap-[10px] gap-[5px] lg:mt-[-50px] xxl:mt-0">

            <!------------------------------------ Card 1 ------------------------------------->
                    <li class="card">
                        <img src="img/stu1.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Kindergarten</h1>
                            <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 2 ------------------------------------->
                    <li class="card">
                        <img src="img/student1.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Primary School</h1>
                            <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 3 ------------------------------------->
                    <li class="card">
                        <img src="img/stu2.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Lower Secondary School</h1>
                            <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 4 ------------------------------------->
                    <li class="card">
                        <img src="img/stu3.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Secondary School</h1>
                            <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
            <!------------------------------------ Card 5 ------------------------------------->
                    <li class="card">
                        <img src="img/stu1.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                        <!------------------------Description-------------------------->
                        <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                            <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">English Program</div>
                            <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Kindergarten</h1>
                            <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                            At Milky Way School, we value diversity and inclusivity. 
                            Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                            <a href="#" class="relative inline-flex items-center space-x-1 group">
                                <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                    <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                </span>
                            </a>
                        </div>
                    </li>
                </ul>  

                    <!--------------------------- Indicators for PC ------------------>
                    <div class="indicators1 flex justify-center gap-2 pt-3 transition-all duration-300 xxl:mr-0 mx-auto">
                        <span class="indicator1 active"></span>
                        <span class="indicator1"></span>
                        <span class="indicator1"></span>
                        <span class="indicator1 lg:hidden"></span>
                        <span class="indicator1 md:hidden"></span>
                    </div>
                    
                <ion-icon id="Right1" name="chevron-forward-outline" class="slide-btn1 absolute bg-white xxl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                rounded-md xxl:right-[-80px] xxl:top-[200px] lg:top-[-155px] xl:top-[-150px] md:right-[5px] md:top-[-17%] right-[0px] top-[-17%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

            </div>
        </div>


    <!---------------------------General Khmer Program--------------------------->
    <div class="px-7 py-[110px] xxl:px-[160px] lg:mt-[100px] lg:px-[50px] lg:py-[50px] xl:px-[175px] md:py-[120px] xxl:pt-[100px] xxl:pb-[70px] flex flex-row-2 gap-4 ">
        <div class="bg-yellow-500 h-[105px] lg:h-[62px] xxl:h-[80px] mt-1 w-[6px] xxl:w-[7px] md:h-[68px]">
        </div>
        <div class="text-xl xxl:text-3xl font-medium">GENERAL KHMER PROGRAM</div>
        <p class="absolute xl:pr-[500px] lg:pr-[300px] md:pr-[80px] md:text-[0.90rem] pr-[35px] text-[0.85rem] lg:text-[0.85rem] xxl:text-[1rem] 
            font-normal pt-3 xxl:pt-4 text-gray-700 mt-[20px] ml-[20px] xxl:ml-[20px]"> 
            At Milky Way School, we value diversity and inclusivity. Our school is a melting pot of cultures,
            where students from different backgrounds come together to learn and grow.</p>
    </div>

         <!---------------------------Slider 2--------------------------->
        <div class="flex items-center justify-center">
            <div class="wrapper-slider2 xxl:max-w-[1200px] lg:max-w-[900px] xxl:w-[100%] lg:w-[100%] xl:max-w-[1000px] md:max-w-[640px] md:w-[100%] max-w-[300px] w-[100%] mx-auto xxl:mx-0 md:mx-auto">

                <ion-icon id="Left2" name="chevron-back-outline" class="slide-btn2 absolute lg:hidden bg-white xxl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
             rounded-md xxl:left-[-80px] md:left-[509px] left-[170px] top-[-16%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>

                <ul class="carousel2 xxl:gap-[15px] lg:gap-[10px] gap-[5px]">

                <!------------------------------------ Card 1 ------------------------------------->
                        <li class="card">
                            <img src="img/stu1.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                            <!------------------------Description-------------------------->
                            <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                                <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">Khmer Program</div>
                                <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Kindergarten</h1>
                                <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                                At Milky Way School, we value diversity and inclusivity. 
                                Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                                <a href="#" class="relative inline-flex items-center space-x-1 group">
                                    <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                        <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                    </span>
                                </a>
                            </div>
                        </li>
                <!------------------------------------ Card 2 ------------------------------------->
                        <li class="card">
                            <img src="img/stu3.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                            <!------------------------Description-------------------------->
                            <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                                <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">Khmer Program</div>
                                <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">Primary School</h1>
                                <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                                At Milky Way School, we value diversity and inclusivity. 
                                Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                                <a href="#" class="relative inline-flex items-center space-x-1 group">
                                    <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                        <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                    </span>
                                </a>
                            </div>
                        </li>
                <!------------------------------------ Card 3 ------------------------------------->
                        <li class="card">
                            <img src="img/student1.jpg" alt="" class="xxl:w-[600px] xxl:h-[209px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                            <!------------------------Description-------------------------->
                            <div class="xxl:w-auto lg:w-auto xxl:h-[250px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 py-[20px] ml:px-6 px-5">
                                <div class="xxl:text-[0.75rem] text-[0.70rem] font-normal text-gray-700 bg-gray-100 w-fit xxl:px-3 xxl:py-1 py-1 px-[10px] rounded">Khmer Program</div>
                                <h1 class="xxl:text-xl text-lg font-medium xxl:py-3 py-3">High School</h1>
                                <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                                At Milky Way School, we value diversity and inclusivity. 
                                Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                                <a href="#" class="relative inline-flex items-center space-x-1 group">
                                    <span class="xxl:text-[1rem] text-[0.90rem] xxl:font-normal font-medium text-yellow-500 group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
                                    tranisform transition-transform duration-300 ease-in-out">Read More</span>
                                    <span class="transform transition-transform duration-300 ease-in-out group-hover:translate-x-[3px] mt-[5px]">
                                        <ion-icon name="arrow-forward-outline" class="text-yellow-500"></ion-icon>
                                    </span>
                                </a>
                            </div>
                        </li>

                    </ul>  

                        <!--------------------------- Indicators ------------------>
                        <div class="indicators2 lg:hidden flex justify-center gap-2 mt-1 transition-all duration-300 xxl:mr-0 mx-auto">
                            <span class="indicator2 active"></span>
                            <span class="indicator2"></span>
                            <span class="indicator2"></span>
                        </div>
                        
                    <ion-icon id="Right2" name="chevron-forward-outline" class="slide-btn2 absolute lg:hidden bg-white xxl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                rounded-md xxl:right-[-80px] md:right-[0px] right-[0px] top-[-16%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

                </div>
            </div>

        
</section>

<!---------------------------Quote------------------------->
<section class="relative w-full xxl:h-[700px] lg:h-[600px] md:h-[500px] h-[350px] bg-white py-[100px] z-[-1]">
        <div class="">
            <img src="img/quote.png" alt="" class="lg:h-[700px] md:h-[500px] ml:h-[320px] h-[280px] md:opacity-100 opacity-70 w-auto object-top-left">
        </div>
        <div class="absolute md:top-[120px] ml:top-[100px] top-[120px] left-[-10px] xxl:left-[300px] xl:left-[200px] lg:left-[100px] md:left-[70px] px-10">
            <img src="img/teacher.png" alt="" class="xxl:h-[600px] lg:h-[500px] md:h-[400px] ml:h-[250px] h-[230px] w-auto transform scale-x-[-1]">
        </div>
    <div class="absolute lg:top-[120px] md:top-[80px] top-[40px] xl:right-[150px] lg:right-[100px] ml:right-[10px] right-[5px]">
    <img src="img/q-frame.png" alt="" class="xl:h-[400px] lg:h-[310px] md:h-[280px] md:w-auto h-[210px] ml:w-[270px] w-[250px]">
    <pre class="xl:text-2xl lg:text-lg md:text-[1.05rem] text-[0.90rem] font-thin font-['Kalam'] text-gray-700 xl:mt-[-250px] xxl:ml-[80px] lg:ml-[60px] lg:mt-[-200px] md:mt-[-180px] md:ml-[48px]
    mt-[-140px] ml:ml-[40px] ml-[25px]">“ The Capacity to learn is a gift, 
    the ability to learn is a skill,
the willingness to learn is a choice” </pre>    
</div>
</section>


<!--------------Student Activty----------------->
<section class="w-full overflow-y-hidden xxl:h-[700px] lg:h-[630px] md:h-[700px] bg-gray-100 xxl:px-[120px] lg:px-[50px] md:px-[50px] pl-[40px] pr-[10px] md:py-20 py-10 items-center justify-center">
    <div> 
        <div class="grid md:grid-cols-2 grid-col-1 xxl:gap-[500px] lg:gap-[300px] md:gap-[100px] ">
            <div>
                <h3 class="text-yellow-400 font-medium lg:text-[0.95rem] md:text-[0.80rem] text-[0.80rem]">Student Activities</h3>
                <h1 class="xxl:text-2xl lg:text-lg md:text-md text-xl md:pr-0 pr-10">Student Activities help students connect and grow.</h1>
            </div>
            <div class="lg:mt-[30px] mt-3">
                <p class="xxl:text-[1.05rem] lg:text-[0.80rem] md:text-[0.85rem] text-[0.90rem] font-normal text-gray-700">Our school is a melting pot of cultures, where students from different backgrounds come.</p>
            </div>


    <!-------------------------Image Card-------------------------->
    </div>
            <div class="mt-12 hidden xxl:grid grid-cols-4 xxl:max-w-[1300px] lg:max-w-[1300px] w-[100%] gap-3 items-center mx-auto">   
                <div class="relative group">
                    <img src="Img/stu1.jpg" alt="" class="xxl:h-[270px] xxl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="Img/stu2.jpg" alt="" class="xxl:h-[270px] xxl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="Img/stu3.jpg" alt="" class="xxl:h-[270px] xxl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
                <div class="relative group">
                    <img src="Img/student1.jpg" alt="" class="xxl:h-[270px] xxl:w-[400px] lg:h-[200px] lg:w-[300px] group-hover:brightness-[0.30] transition-color duration-200 object-cover cursor-pointer">
                    <div class="absolute top-0 p-10 w-auto h-[250px] opacity-0 group-hover:opacity-100 flex-row justify-center items-center">
                        <h1 class="text-white opacity-100 text-center text-xl font-medium">Student Activities</h1>
                        <p class="text-white group-hover:opacity-100 text-center pt-5 font-[300] opacity-0 translate-y-[100px] group-hover:translate-y-0 transition-all duration-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ducimus sed odio, omnis tempore minus quidem!</p>
                    </div>
                </div>
            </div>



        <!-----------------------Image Card Mobile------------------------------>
        <div class="xxl:hidden flex items-center justify-center lg:mt-[100px] mt-[120px] ">
            <div class="img-wrapper max-w-[320px] w-[100%] lg:max-w-[900px] md:max-w-[600px] md:mx-auto mr-8">

                <ion-icon id="Leftimg" name="chevron-back-outline" class="img-btn absolute xxl:hidden bg-white xxl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                rounded-md lg:left-[770px] sm:left-[200px] right-[70px] md:left-[480px] top-[-27%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>

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
                    <div class="indicators-img lg:hidden flex justify-center gap-2 md:mt-5 mt-2 transition-all duration-300 xxl:mr-0 mx-auto">
                        <span class="indicator-img active"></span>
                        <span class="indicator-img"></span>
                        <span class="indicator-img"></span>
                        <span class="indicator-img md:hidden"></span>
                    </div>

                        
                    <ion-icon id="Rightimg" name="chevron-forward-outline" class="img-btn absolute xxl:hidden bg-white xxl:p-4 p-4 text-2xl text-center leading-[50px] cursor-pointer
                    rounded-md xxl:right-[-80px] md:right-[0px] right-[0px] top-[-27%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

            </div>
        </div>
    </div>

</section>


<!-----------------------------------Visit Campus ------------------------->
<section>
    <div class="h-[280px] md:h-[280px] xl:h-[450px] lg:h-[350px] text-end overflow-hidden w-full relative">
            <div class="bg-campus relative h-full bg-[url('./img/SP.png')] bg-cover bg-center bg-no-repeat p-10">
                <div class="right-[30px] md:right-[100px] xl:right-[120px] lg:top-[80px] lg:right-[100px] absolute">
                    <h1 class="text-2xl xxl:text-5xl lg:text-3xl font-semibold text-white">Take the Next Step</h1>
                    <p class="py-5 text-[0.90rem] pl-[200px] lg:pl-[900px] md:text-[0.90rem] text-white xxl:text-xl">At Milky Way School, we value diversity and inclusivity.
                        Our school is a melting pot of cultures.</p>
                    <button class="text-white text-xs xl:text-[1.05rem] lg:text-[0.90rem] font-light bg-yellow-500 md:ml-0 ml-[90px] px-6 py-[12px] lg:px-[30px] lg:py-[15px] rounded-sm mt-[15px] md:mt-[10px]">
                        Visit Campus</button>
                </div>
            </div>
        </div>
</section>

<!-----------------------------------Partnership---------------------------->
<section>
    <div class="xxl:h-[300px] lg:h-[200px] bg-white">
        <div class="partner xxl:mt-[5rem] lg:mt-[3rem] mt-[3rem]">
                <img src="img/khmer-edu.png" alt="EMDYS SVG" class="item-p item-p1 xxl:h-[150px] lg:h-[120px] md:h-[110px] h-[100px]">
                <img src="img/macmillan.png" alt="macmillan SVG" class="item-p item-p2 xxl:mt-[50px] lg:mt-[40px] mt-[25px] xxl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/oxford.png" alt="oxford SVG" class="item-p item-p3 xxl:mt-[60px] lg:mt-[50px] mt-[35px] xxl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/cambridge.png" alt="cambridge SVG" class="item-p item-p4 xxl:mt-[50px] lg:mt-[40px] mt-[25px] xxl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/khmer-edu.png" alt="EMDYS png" class="item-p item-p5 xxl:h-[150px] lg:h-[120px] md:h-[110px] h-[100px]">
                <img src="img/macmillan.png" alt="macmillan png" class="item-p item-p6 xxl:mt-[50px] lg:mt-[40px] mt-[25px] xxl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/oxford.png" alt="oxford png" class="item-p item-p7 xxl:mt-[60px] lg:mt-[50px] mt-[35px] xxl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
                <img src="img/cambridge.png" alt="cambridge SVG" class="item-p item-p8 xxl:mt-[50px] lg:mt-[40px] mt-[25px] xxl:w-[300px] lg:w-[250px] md:w-[200px] w-[210px]">
        </div>
    </div>
</section>

<!-------------------------------------Campus Map------------------------------->
<section class="grid lg:grid-cols-2 grid-cols-1 lg:h-fit md:h-[150vh] ">
    <div class="relative">
        <div>
            <img src="img/bg-map.jpg" class="xxl:h-[600px] xxl:w-[1000px] lg:h-[500px] lg:w-[100%] md:h-[900px] w-full mm:h-[350px] h-[400px]" alt="">
        </div>
            <div class="absolute xxl:top-[16rem] lg:top-[14rem] xxl:left-[20rem] lg:left-[15rem] md:left-[5rem] md:top-[3rem] sm:top-[50px] top-[20px] left-[0px] transform sm:px-10 px-2 lg:-translate-x-1/2 lg:-translate-y-1/2">
                <div class="mm:text-nowrap">
                    <h1 class="xxl:text-4xl text-2xl text-white font-medium">Ours 50 campuses</h1>
                    <h1 class="xxl:text-4xl text-2xl text-white font-medium md:pt-2">Around Phnom Penh City.</h1>
                </div>
            <div>
                <p class="text-white xxl:text-[1.2rem] lg:text-[1rem] text-[1rem] font-light xxl:mt-10 lg:mt-8 md:mt-5 mt-3 leading-relaxed lg:pr-0 md:pr-[100px] pr-[10px]">Lorem ipsum dolor sit amet consectetur. Aliquet pellentesque platea velit nisl pretium. Quis habitant ullamcorper erat aliquam viverra vestibulum. 
                    Turpis ante neque vitae viverra morbi at elementum lacus </p>
            </div>
            <div class="lg:mt-10 mt-5">
                <a href="#" class="relative inline-flex items-center space-x-1 group">
                    <span class="xxl:text-[1.2rem] lg:text-[1rem] md:text-[1rem] text-white xxl:font-normal font-medium group-hover:underline-offset-2 group-hover:underline decoration-yellow-500
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
<section class="xxl:h-[150vh] bg-white">
    <div class="xl:flex xl:flex-col-2 flex-row lg:py-[100px] md:py-[50px] py-[50px] xxl:px-[80px] lg:px-[100px] md:px-[50px] px-[50px] justify-center xl:space-x-[2rem] md:space-y-0 space-y-[2rem]">
        <div class="text-nowrap leading-tight ml-[-50px]">
            <h1 class="xxl:text-[2.8rem] lg:text-[2.1rem] md:text-[1.9rem] text-[2rem] text-black">News and Events</h1>
            <span class="text-yellow-400 xxl:text-[1.2rem] lg:text-[0.90rem] md:text-[0.85rem] text-[0.90rem]">News and events inform and entertain</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 xxl:gap-5 lg:gap-8 md:gap-5 xl:pt-0 md:pt-10">
            <div class="xxl:max-w-[400px] lg:max-w-[250px] max-w-[300px]">
                <img src="img/brainstorm.png" class="xxl:w-[400px] xxl:h-[300px] lg:w-[250px] lg:h-[200px] h-[200px] w-[300px] object-cover" alt="">
                <h1 class="xxl:text-2xl lg:text-xl md:text-[1rem] text-[1.2rem] font-medium pt-5">Brainstorming Activity</h1>
                <div class="mt-3 lg:w-[200px] w-[150px] h-[4px] bg-yellow-400"></div>
                <p class="mt-3 xxl:text-[1rem] lg:text-[0.85rem] text-[0.90rem] font-light leading-relaxed">Brainstorming is one of the most effective activities for skill development, as it can help develop a variety of skills in students.</p>
            </div>
            <div class="xxl:max-w-[400px] lg:max-w-[250px] max-w-[300px] md:pt-0 pt-[3rem]">
                <img src="img/drawing.png" class="xxl:w-[400px] xxl:h-[300px] lg:w-[250px] lg:h-[200px] h-[200px] w-[300px] object-cover" alt="">
                <h1 class="xxl:text-2xl lg:text-xl md:text-[1rem] text-[1.2rem] font-medium pt-5">Drawing Activity</h1>
                <div class="mt-3 lg:w-[200px] w-[150px] h-[4px] bg-red-500"></div>
                <p class="mt-3 xxl:text-[1rem] lg:text-[0.85rem] text-[0.90rem] font-light leading-relaxed">Using drawing as an instructional tool in the classroom can positively impact student learning.</p>
            </div>
            <div class="xxl:max-w-[400px] lg:max-w-[250px] max-w-[300px] md:pt-0 pt-[3rem]">
                <img src="img/skype.png" class="xxl:w-[400px] xxl:h-[300px] lg:w-[250px] lg:h-[200px] h-[200px] w-[300px] object-cover" alt="">
                <h1 class="xxl:text-2xl lg:text-xl md:text-[1rem] text-[1.2rem] font-medium pt-5">Skype Debates</h1>
                <div class="mt-3 lg:w-[200px] w-[150px] h-[4px] bg-green-500"></div>
                <p class="mt-3 xxl:text-[1rem] lg:text-[0.85rem] text-[0.90rem] font-light leading-relaxed">Skype debates are a fun way to boost your students’ communication, research, and critical thinking skills.</p>
            </div>
        </div>
    </div>

    <?php include("include/footer.php");?>

</section>

<script>
   const carousel1 = document.querySelector(".carousel1");
    const arrowBtns1 = document.querySelectorAll(".wrapper-slider1 .slide-btn1");
    const firstCardWidth1 = carousel1.querySelector(".card").offsetWidth; 
    const indicators1 = document.querySelectorAll('.indicator1');
    
    let currentIndex1 = 0;
    let isAutoScrolling1 = false; // Prevents unnecessary updates during smooth scroll

    const updateIndicators1 = () => {
        indicators1.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex1);
        });
    }

    const updateCurrentIndexBasedOnScroll = () => {
        if (!isAutoScrolling1) {
            currentIndex1 = Math.round(carousel1.scrollLeft / firstCardWidth1);
            updateIndicators1();
        }
    };

    arrowBtns1.forEach(btn => {
        btn.addEventListener("click", () => {
            isAutoScrolling1 = true;
            if (btn.id === "Left1") {
                currentIndex1 = (currentIndex1 - 1 + indicators1.length) % indicators1.length;
            } else {
                currentIndex1 = (currentIndex1 + 1) % indicators1.length;
            }

            carousel1.scrollTo({
                left: firstCardWidth1 * currentIndex1,
                behavior: "smooth"
            });

            updateIndicators1();
            setTimeout(() => { isAutoScrolling1 = false; }, 300); // Reset after scroll animation
        });
    });

    indicators1.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            isAutoScrolling1 = true;
            currentIndex1 = index;
            carousel1.scrollTo({
                left: firstCardWidth1 * currentIndex1,
                behavior: "smooth"
            });
            updateIndicators1();
            setTimeout(() => { isAutoScrolling1 = false; }, 300);
        });
    });

    // Update index on manual scroll
    carousel1.addEventListener('scroll', updateCurrentIndexBasedOnScroll);

    // Second slider functionality with smooth scrolling and synchronized indicators
    const carousel2 = document.querySelector(".carousel2");
    const arrowBtns2 = document.querySelectorAll(".wrapper-slider2 .slide-btn2");
    const firstCardWidth2 = carousel2.querySelector(".card").offsetWidth; 
    const indicators2 = document.querySelectorAll('.indicator2');

    let currentIndex2 = 0;
    let isAutoScrolling2 = false; // Prevents unnecessary updates during smooth scroll

    const updateIndicators2 = () => {
        indicators2.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex2);
        });
    };

    const updateCurrentIndexBasedOnScroll2 = () => {
        if (!isAutoScrolling2) {
            currentIndex2 = Math.round(carousel2.scrollLeft / firstCardWidth2);
            updateIndicators2();
        }
    };

    // Arrow button functionality with smooth scroll
    arrowBtns2.forEach(btn => {
        btn.addEventListener("click", () => {
            isAutoScrolling2 = true;
            if (btn.id === "Left2") {
                currentIndex2 = (currentIndex2 - 1 + indicators2.length) % indicators2.length;
            } else {
                currentIndex2 = (currentIndex2 + 1) % indicators2.length;
            }

            carousel2.scrollTo({
                left: firstCardWidth2 * currentIndex2,
                behavior: "smooth"
            });

            updateIndicators2();
            setTimeout(() => { isAutoScrolling2 = false; }, 300); // Reset after scroll animation
        });
    });

    // Indicator click functionality with smooth scroll
    indicators2.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            isAutoScrolling2 = true;
            currentIndex2 = index;
            carousel2.scrollTo({
                left: firstCardWidth2 * currentIndex2,
                behavior: "smooth"
            });
            updateIndicators2();
            setTimeout(() => { isAutoScrolling2 = false; }, 300);
        });
    });

    // Update index based on manual scroll
    carousel2.addEventListener('scroll', updateCurrentIndexBasedOnScroll2);





   // Image slider functionality with looping and synchronized indicators
    const carouselImg = document.querySelector(".carousel-img");
    const arrowBtnimg = document.querySelectorAll(".img-wrapper .img-btn");
    const firstCardWidth3 = carouselImg.querySelector(".img-card").offsetWidth;
    const indicators3 = document.querySelectorAll('.indicator-img');

    let currentIndexImg = 0;
    let autoSlideInterval;
    let isAutoScrollingImg = false; // Prevents indicator updates during smooth scrolling

    // Function to update active indicator dots
    const updateIndicators3 = () => {
        indicators3.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndexImg);
        });
    };

    // Function to slide the carousel with looping functionality
    const slideCarouselImg = (direction) => {
        isAutoScrollingImg = true;
        
        if (direction === 'next') {
            currentIndexImg = (currentIndexImg + 1) % indicators3.length;
        } else {
            currentIndexImg = (currentIndexImg - 1 + indicators3.length) % indicators3.length;
        }
        
        carouselImg.scrollTo({
            left: firstCardWidth3 * currentIndexImg,
            behavior: "smooth"
        });
        
        updateIndicators3();
        setTimeout(() => { isAutoScrollingImg = false; }, 300); // Allow smooth scroll to finish
    };

    // Auto-slide functionality
    const startAutoSlide = () => {
        autoSlideInterval = setInterval(() => {
            slideCarouselImg('next');
        }, 3000); // Slide every 3 seconds
    };

    // Reset auto-slide on manual interaction
    const resetAutoSlide = () => {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    };

    // Event listeners for arrow buttons with auto-slide reset
    arrowBtnimg.forEach(btn => {
        btn.addEventListener("click", () => {
            const direction = btn.id === "Leftimg" ? 'prev' : 'next';
            slideCarouselImg(direction);
            resetAutoSlide();
        });
    });

    // Event listeners for indicator dots
    indicators3.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndexImg = index;
            carouselImg.scrollTo({
                left: firstCardWidth3 * currentIndexImg,
                behavior: "smooth"
            });
            updateIndicators3();
            resetAutoSlide();
        });
    });

    // Start the auto-slide
    startAutoSlide();


</script>
<script src="to_the_top.js"></script>

</body>

</html>
