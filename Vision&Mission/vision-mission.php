<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision and Vission</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="./icon/logo.ico" type="image/x-icon">
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

    .wrapper-slider1{
            position: relative;
        }

        .carousel1 .dragging {
            scroll-behavior: auto;
        }

         .wrapper-slider1 .carousel1 {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100%) - 7px);
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


</style>

<body>
    <?php include("./include/navbar.php") ?>

    <!--Header Section-->
    <div class="relative mt-[80px]">

        <!--Header Image-->
        <img src="./img/whymws.jpg" alt="" class="mb-[-70px] xl:h-[500px] brightness-75 lg:w-full lg:h-[400px] md:h-[450px] mm:w-full w-full sm:w-full md:w-full mm:h-auto object-cover"/>
        <!--Header text-->
        <div class="absolute font-[ramaraja] inset-0 flex justify-center items-center text-white bottom-[50px] sm:text-3xl text-3xl md:text-4xl lg:text-5xl xl:text-6xl">
            About Milky Way School
        </div>

        <!--Quotation-->
        <div class="flex justify-center mt-[20px] xl:mt-[-60px] ">

            <div class="bg-white z-[10] text-blue-800 xxl:px-[50px] p-5 m-6 shadow-lg text-center h-fit w-full 
            text-[0.95rem] md:w-[650px] md:h-[70px] md:text-sm md:p-4 lg:h-[120px] lg:w-[900px] lg:text-xl lg:p-9 xl:text-2xl xl:w-[1200px] xl:h-[150px] 
            xl:pt-11 font-[ramaraja] font-light xl:leading-9">
                "Milky Way School, a bridge between generations, preparing us for a
                future where the stars are no longer a distant dream, but a playground
                for the children of a thousand worlds."
            </div>

        </div>
        <!--End of Quotation-->

    </div>
    <!--End of Header Section-->

    <!--Body Section-->
    <div class="mm:px-[20px] flex mx-auto items-center justify-center mt-3 xl:mt-[100px] lg:mt-[50px] space-x-7">

      <!--Left Line-->
      <div class="bg-black opacity-35 w-[100px] h-[1px] sm:w-[110px] sm:h-[1px] md:w-[200px] lg:w-[300px] lg:h-[1px] xl:w-[450px]"></div>

      <!--Logo Image-->
      <img src="./img/MW Logo (Official).png" alt="MW Logo" class="w-[60px] h-70 px-2 md:w-[80px] md:h-70 lg:w-[100px] lg:h-[90px] xl:h-[110px] xl:w-[130px] shrink-0"/>
        
      <!--Right Line-->
      <div class="bg-black opacity-35 w-[100px] h-[1px] sm:w-[110px] sm:h[1px] md:w-[200px] lg:w-[300px] lg:h-[1px] xl:w-[450px]"></div>
    </div>

    <!--Our History-->
    <div class="mt-[20px] xl:mt-[50px] flex justify-center items-center mx-auto">
      <h1 class="text-lg text-blue-800 font-[ramaraja] sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl xl:mb-[30px]">
        Our History
      </h1>
    </div>

    <!--Paragraph about history-->
    <p class="lg:tracking-wide md:text-center lg:text-center text-justify mt-2 font-[poppins] text-[#525252] text-[12px] leading-relaxed md:text-xs md:px-16 lg:text-base lg:px-28 px-7 xl:text-lg">
      Founded in 1915 and guided by our Catholic heritage, Canterbury is a
      college preparatory, coeducational boarding and day school for students in
      grades 9-12. The School prides itself on creating a community based on its
      Five Values—Honesty, Respect, Compassion, Spirituality, and Self
      Reliance—in which students and faculty forge lasting bonds and every
      student experiences a broad and challenging program in a small school
      setting. The School's educational environment fosters academic rigor,
      athletic development, artistic enrichment, and spiritual growth, and
      strives to ensure a superior experience that prepares students for leading
      colleges and universities and for life.
    </p>

    <!--Second Paragraph-->
    <p class="lg:tracking-wide md:text-center lg:text-center text-justify mt-5 font-[poppins] text-[#525252] text-[12px] leading-relaxed md:text-xs md:px-16 lg:text-base lg:px-28 px-7 xl:text-lg">
      With its rigorous and humane approach to students, both in and out of the
      classroom, Canterbury's program inculcates vital intellectual and ethical
      habits of mind. The School sees all students as individuals, encourages
      them as necessary, challenges them as appropriate, and inspires them to
      become moral leaders in a complex, secular world.
    </p>
    <!--End Of Paragraph about history-->

    <!--Our Vision-->
    <div class="flex items-center justify-center mt-6 xl:mt-[80px] mm:flex-col flex-col sm:flex-col md:flex-row md:justify-between xl:justify-between xl:space-x-6 xl:px-16">

      <!--Text Descriptions-->
      <div class="px-7 xl:px-12">
        <h1 class="font-[ramaraja] text-center text-blue-800 text-lg md:text-2xl md:py-0 lg:text-4xl xl:text-4xl">
          Our Vision
        </h1>

        <p class="font-[poppins] mt-2 text-justify md:text-center text-[#525252] text-[12px] md:text-xs lg:text-base xl:text-lg">
          Students and adults at Canterbury live and learn as a close-knit
          community and together create a climate of acceptance, understanding,
          and belonging.
          Students and adults at Canterbury live and learn as a close-knit
          community and together create a climate of acceptance, understanding,
          and belonging.
        </p>

        <div class="flex md:hidden mt-7 flex-col md:gap-24 md:mb-[30px] md:pr-[40px] mr-14 mm:justify-items-center mm:flex-col mm:items-center mm:gap-5 mm:ml-[0px] mm:mr-[0px] xl:gap-16">
          <img src="./img/stu1.jpg" alt="" class="md:h-[200px] md:w-[700px] mm:h-[150px] mm:w-[250px] lg:h-[250px] xl:w-[1200px] xl:h-[350px] object-cover rounded-md"/>
        </div>
        <h1 class="font-[ramaraja] pt-5 text-center text-blue-800 text-lg md:text-2xl lg:text-4xl xl:text-4xl">
          Honesty
        </h1>

        <p class="font-[poppins] text-center text-[#525252] text-[12px] md:text-xs md:py-0 lg:text-lg">
          Building character and courage to stay true to ourselves and others
        </p>

        <h1 class="font-[ramaraja] text-center text-blue-800 text-lg py-3 md:text-2xl lg:text-4xl xl:text-4xl lg:py-4">
          Respect
        </h1>

        <p class="font-[poppins] text-center text-[#525252] text-[12px] md:text-xs md:py-0 lg:text-lg">
          Learning each other's stories and treating all with dignity
        </p>

        <h1 class="font-[ramaraja] text-center text-blue-800 text-lg py-3 md:text-2xl lg:text-4xl xl:text-4xl lg:py-4">
          Compassion
        </h1>

        <p class="font-[poppins] text-center text-[#525252] text-[12px] md:text-xs md:py-0 lg:text-lg">
          Being fully and humbly present so that we may empathize with others
        </p>
        <div class="flex md:hidden mt-7 flex-col md:gap-24 md:mb-[30px] md:pr-[40px] mr-14 mm:justify-items-center mm:flex-col mm:items-center mm:gap-5 mm:ml-[0px] mm:mr-[0px] xl:gap-16">
          <img src="./img/stu2.jpg" alt="" class="md:h-[200px] md:w-[700px] mm:h-[150px] mm:w-[250px] lg:h-[250px] xl:w-[1200px] xl:h-[350px] object-cover rounded-md"/>
        </div>
        <h1 class="font-[ramaraja] text-center text-blue-800 text-lg py-3 md:text-2xl lg:text-4xl lg:py-4">
          Spirituality
        </h1>

        <p class="font-[poppins] text-center text-[#525252] text-[12px] md:text-xs md:py-0 lg:text-lg">
          Being fully and humbly present so that we may empathize with others
        </p>

        <h1 class="font-[ramaraja] text-center text-blue-800 text-lg py-3 md:text-2xl lg:text-4xl xl:text-4xl lg:py-4">
          Self-Reliance
        </h1>

        <p class="font-[poppins] text-center text-[#525252] text-[12px] md:text-xs md:py-0 lg:text-lg">
          Developing strength and independence to become intellectual and ethical leaders in a complex world
        </p>

      </div>
      <!--End of Description-->

      <!--Image-->
      <div class="md:flex hidden flex-col md:gap-24 md:mb-[30px] md:pr-[40px] mr-14 mm:justify-items-center mm:flex-col mm:items-center mm:gap-5 mm:ml-[0px] mm:mr-[0px] xl:gap-16">
        <img src="./img/stu1.jpg" alt="" class="md:h-[200px] md:w-[700px] mm:h-[150px] mm:w-[250px] lg:h-[250px] xl:w-[1200px] xl:h-[350px] object-cover rounded-md"/>
        <img src="./img/stu2.jpg" alt="" class="md:h-[200px] md:w-[700px] mm:h-[150px] mm:w-[250px] lg:h-[250px] xl:w-[1200px] xl:h-[350px] object-cover rounded-md"/>
      </div>
      <!--End of Image-->

    </div>
    <!--End of Our Vision-->

    <!------------------------------Our Mission--------------------------------->
    <section class="bg-[#F6F6F6] mt-5 xl:h-[900px] py-10 h-[850px]">

      <div class="flex flex-col items-center justify-center px-0 md:px-16 xl:px-20">
        <h1 class="text-lg font-[ramaraja] text-blue-800 mm:mt-4 md:text-2xl lg:text-3xl xl:text-4xl">Our Mission</h1>

        <p class= "font-[poppins] text-[#525252] text-center mm:py-3 text-[12px] md:text-xs lg:text-base xl:text-lg px-10">
          Students and adults at Canterbury live and learn as a close-knit community and together create a climate of acceptance, understanding, and belonging.
          Students and adults at Canterbury live and learn as a close-knit community and together create a climate of acceptance, understanding, and belonging.
        </p>
    
        
        <div class="flex items-center justify-center">
          <div class="wrapper-slider1 top-7 xxl:max-w-[1100px] lg:max-w-[900px] xl:max-w-[1000px] xxl:w-[100%] lg:w-[100%] md:max-w-[640px] md:w-[100%] ml:max-w-[300px] max-w-[300px] w-[100%] mx-auto xxl:mx-0 md:mx-auto">

              <ion-icon id="Left1" name="chevron-back-outline" class="slide-btn1 absolute bg-white xxl:p-5 p-4 text-2xl text-center leading-[50px] cursor-pointer
              rounded-full xxl:left-[-80px] xxl:top-[150px] lg:left-[770px] lg:top-[-155px] xl:left-[860px] xl:top-[-150px] md:left-[505px] md:top-[-17%] left-[-70px] top-[30%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150" ></ion-icon>
              
              <ul class="carousel1 xxl:gap-[15px] lg:gap-[10px] gap-[5px] lg:mt-[-50px] xxl:mt-0">

              <!------------------------------------ Card 1 ------------------------------------->
                      <li class="card md:flex">
                          <img src="img/stu1.jpg" alt="" class="xxl:w-[1000px] xxl:h-[350px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                          <!------------------------Description-------------------------->
                          <div class="xxl:w-[1100px] lg:w-auto xxl:h-[350px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 xxl:py-10 py-[20px] xxl:px-10 ml:px-6 px-5">
                              <h1 class="xxl:text-3xl text-lg font-medium xxl:py-3 py-3 font-[ramaraja] text-blue-800">Academic Excellence</h1>
                              <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                              Challenging Curriculum: We offer a robust and challenging curriculum that stimulates curiosity and encourages a deep understanding of various subjects.
                              Innovative Teaching: Our educators use innovative teaching methods and state-of-the-art technology to enhance the learning experience.</p>
                          </div>
                      </li>

              <!------------------------------------ Card 2 ------------------------------------->
                      <li class="card md:flex">
                          <img src="img/stu1.jpg" alt="" class="xxl:w-[1000px] xxl:h-[350px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                          <!------------------------Description-------------------------->
                          <div class="xxl:w-[1100px] lg:w-auto xxl:h-[350px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 xxl:py-10 py-[20px] xxl:px-10 ml:px-6 px-5">
                              <h1 class="xxl:text-3xl text-lg font-medium xxl:py-3 py-3 font-[ramaraja] text-blue-800">Kindergarten</h1>
                              <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                              At Milky Way School, we value diversity and inclusivity. 
                              Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                          </div>
                      </li>

              <!------------------------------------ Card 3 ------------------------------------->
                      <li class="card md:flex">
                          <img src="img/stu1.jpg" alt="" class="xxl:w-[1000px] xxl:h-[350px] lg:w-[300px] lg:h-[170px] xl:w-[400px] md:w-[320px] md:h-[170px] w-[300px] h-[170px] object-cover" draggable="false">
                          <!------------------------Description-------------------------->
                          <div class="xxl:w-[1100px] lg:w-auto xxl:h-[350px] lg:min-h-[260px] md:w-auto md:min-h-[250px] w-[300px] bg-white border gap-5 xxl:py-10 py-[20px] xxl:px-10 ml:px-6 px-5">
                              <h1 class="xxl:text-3xl text-lg font-medium xxl:py-3 py-3 font-[ramaraja] text-blue-800">Kindergarten</h1>
                              <p class="xxl:text-[1rem] lg:text-[0.85rem] text-[0.85rem] font-normal text-gray-700 xxl:pb-4 pb-2">
                              At Milky Way School, we value diversity and inclusivity. 
                              Our school is a melting pot of cultures, where students from different backgrounds come to learn and grow.</p>
                          </div>
                      </li>

              
                  </ul>  

                      <!--------------------------- Indicators for PC ------------------>
                      <div class="indicators1 flex justify-center gap-2 pt-5 transition-all duration-300 xxl:mr-0 mx-auto">
                          <span class="indicator1 active"></span>
                          <span class="indicator1"></span>
                          <span class="indicator1"></span>
                          <span class="indicator1 lg:hidden"></span>
                          <span class="indicator1 md:hidden"></span>
                      </div>
                      
                  <ion-icon id="Right1" name="chevron-forward-outline" class="slide-btn1 absolute bg-white xxl:p-5 p-4 text-2xl text-center leading-[50px] cursor-pointer
                  rounded-full xxl:right-[-70px] xxl:top-[150px] lg:top-[-155px] xl:top-[-150px] md:right-[5px] md:top-[-17%] right-[-70px] top-[30%] transform-translate-y-(-50%) shadow active:bg-gray-100 active:translate-y-1 transition-all duration-150"></ion-icon>

              </div>
        </div>

      </div>

      </section>
    <!------------------------End of Our Mission------------------------------>

    <!------------------------Our Strategy Pillar----------------------------->
    <div class="py-10">

<div class="flex flex-col items-center justify-center px-10 md:px-16 xl:px-36">
  <h1 class="text-lg font-[ramaraja] text-blue-800 mm:mt-4 md:text-2xl lg:text-3xl xl:text-4xl">Our Strategy Pillar</h1>
  <p class= "font-[poppins] text-[#525252] text-center mm:py-3 text-[12px] md:text-xs md:py-6 lg:text-base xl:text-lg">
    At Milky Way School, our commitment to excellence and innovation is guided by a set of strategic pillars.
    These pillars represent the core areas where we focus our efforts to achieve our long-term vision and deliver value to our customers, employees, and stakeholders.
  </p>

</div>

<div class="flex mm:flex-row flex-row sm:flex-row md:hidden lg:hidden xl:hidden mm:px-10 px-10 sm:px-30">
 
  <!--------------------------Customer Experience---------------------------->
  <div class="flex flex-col items-center justify-center text-center">
    <img src="./img/student1.jpg" alt="" class="mm:h-[150px] mm:w-[250px] mr-[0px] ml-6 sm:ml-11">
    <h1 class="text-lg font-[ramaraja] text-blue-800 mm:mt-4">
      Customer Experience
    </h1>
    <p class= "font-[poppins] text-[#525252] text-center mm:py-3 text-[12px] py-2">
      We believe that exceptional customer service is the cornerstone of our success. 
      Our goal is to exceed customer expectations at every touch point by providing superior products and personalized experiences.
    </p>
  <!--------------------------Innovation---------------------------->
    <img src="./img/student2.jpg" alt="" class="mm:h-[150px] mm:w-[250px] mr-[0px] ml-6 sm:ml-11">
    <h1 class="text-lg font-[ramaraja] text-blue-800 mm:mt-4">
      Innovation
    </h1>
    <p class= "font-[poppins] text-[#525252] text-center mm:py-3 text-[12px] py-2">
      AtInnovation is at the heart of our strategy. We are committed to exploring new technologies, 
      developing cutting-edge solutions, and staying ahead of industry trends to ensure we meet the evolving needs of our customers.
    </p>
    <!----------------------------Operational Excellence------------------------------>
    <img src="./img/student3.png" alt="" class="mm:h-[150px] mm:w-[250px] mr-[0px] ml-6 sm:ml-11">
    <h1 class="text-lg font-[ramaraja] text-blue-800 mm:mt-4">
      Operational Excellence
    </h1>
    <p class= "font-[poppins] text-[#525252] text-center mm:py-3 text-[12px] py-2">
      Operational excellence means delivering our products and services with the highest level of efficiency and quality.
      We continuously optimize our processes to ensure we are operating at peak performance and delivering value.
    </p>
  </div>

</div>
<!-------------------------------md & Laptop------------------------------------------->
<div class="md:flex md:flex-row space-x-[60px] md:px-16 xl:px-36 mt-0 hidden">
  <!-----------------------------------Image---------------------------------------------------->
  <div class="flex items-start justify-start mt-6 md:flex-col md:gap-6">
  <img src="./img/student1.jpg" alt="#" class="md:w-[400px] md:h-[100px] lg:w-[600px] lg:h-[150px] xl:w-[600px] xl:h-[200px] object-cover">
  <img src="./img/student2.jpg" alt="#" class="md:w-[400px] md:h-[100px] lg:w-[600px] lg:h-[150px] xl:w-[600px] xl:h-[200px] object-cover">
  <img src="./img/student3.png" alt="#" class="md:w-[400px] md:h-[100px] lg:w-[600px] lg:h-[150px] xl:w-[600px] xl:h-[200px] object-cover">
  </div>
  
  <!------------------------------Description-------------------------------------------------------->
  <div class="flex md:flex-col md:gap-6 xl:gap-14 lg:gap-10 md:mt-6 justify-start items-start ml-[0px]">
    <h1 class="md:text-2xl font-[ramaraja] text-blue-800 lg:text-3xl xl:text-4xl lg:mt-2">
      Customer Experience
    </h1>
    <p class="md:text-xs font-[poppins] text-[#565656] md:-mt-[9px] lg:text-base xl:text-lg lg:-mt-6">
      We believe that exceptional customer service is the cornerstone of our success. 
      Our goal is to exceed customer expectations at every touch point by providing superior products and personalized experiences.
    </p>

    <h1 class="md:text-2xl font-[ramaraja] text-blue-800 lg:text-3xl xl:text-4xl lg:mt-2">
      Innovation
    </h1>
    <p class="md:text-xs font-[poppins] text-[#565656] md:-mt-[9px] lg:text-base xl:text-lg lg:-mt-6">
      AtInnovation is at the heart of our strategy. We are committed to exploring new technologies, 
      developing cutting-edge solutions, and staying ahead of industry trends to ensure we meet the evolving needs of our customers.
    </p>

    <h1 class="md:text-2xl font-[ramaraja] text-blue-800 lg:text-3xl xl:text-4xl lg:mt-2">
      Operational Excellence
    </h1>
    <p class="md:text-xs font-[poppins] text-[#565656] md:-mt-[9px] lg:text-base xl:text-lg lg:-mt-6">
      Operational excellence means delivering our products and services with the highest level of efficiency and quality.
      We continuously optimize our processes to ensure we are operating at peak performance and delivering value.
    </p>

  </div>

</div>

</div>
<!------------------------End of Our Strategy Pillar---------------------->

    <?php include("./include/footer.php") ?>

    <script src="scripts/navbar.js"></script>
    <script>const carousel1 = document.querySelector(".carousel1");
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
</script>
</body>

</html>
