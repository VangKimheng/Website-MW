<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kindergarten</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="shortcut icon" href="./icon/logo.ico" type="image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-gray-100">
    <?php include("./include/navbar.php") ?>

    <section class="px-5 pt-12 md:px-10 xl:px-20 lg:px-16">
        <div class="bg-[#ffffff] py-4 justify-center items-center rounded-[10px] border-[2px] xl:py-6 lg:py-5 md:py-4 ml:py-3 mt-20">
            <h1 class="text-center font-[poppins] text-[#083449] py-4 ml:p-2 text-[20px] md:text-[26px] xl:text-[36px] font-medium">
              Kindergarten English
            </h1>
        </div>
    </section>
    <div class="p-5 mx-auto mt-5 text-center md:px-10 xl:p-20 lg:px-16 lg:py-10 md:text-start">
        <!-- Main layout container -->
        <div class="flex flex-col items-start gap-7 lg:flex-row">
          <!-- Image Section -->
          <div class="w-full lg:w-2/3">
            <img src="./img/P1.jpg" alt="Kindergarten English Program" class="w-full h-auto rounded-md shadow-md" />
            <p class="mt-10 text-xl text-gray-600">
              Our Kindergarten English Program is designed to provide young learners with a solid foundation in the English language through engaging and age-appropriate activities. The program emphasizes the development of essential language skills, including listening, speaking, reading, and writing, in a fun and supportive environment.
            </p>
            <!--SCHEDULE-->
      <h1 class="mt-8 text-2xl font-semibold text-blue-800">
        Study from Monday to Friday
    </h1>

    <ul class="text-lg text-left text-[#525252] mx-[30px] mt-3 pl-5 list-disc">
        <li>Morning 8:00 AM to 10:30 AM</li>
        <li class="mt-2">Afternoon 1:30 PM to 4:30 PM</li>
    </ul>

    <h1 class="mt-8 text-2xl font-semibold text-blue-800">
      Level to Study
    </h1>
    <!--LEVEL TO STUDY-->
    <div>
      <table class=" border border-[#525252] mt-6 ">
        <thead>
          <tr class="tex6-[0.80rem] md:text-[1rem] xl:text-[1.4rem] text-white bg-[#2C8CC0] h-[60px] md:h-[60px] xl:h-[90px]">
            <th class="border border-[#525252] w-[130px] md:w-[200px] lg:w-[300px] xl:w-[450px]">LEVEL</th>
            <th class="border border-[#525252] w-[130px] md:w-[280px] lg:w-[300px] xl:w-[450px]">TEXTBOOK</th>
            <th class="border border-[#525252] w-[130px] md:w-[280px] lg:w-[300px] xl:w-[450px]">COURSE LENGHT</th>
          </tr>
        </thead>
        <tbody>
          <tr class="tex6-[0.80rem] md:text-[1rem] xl:text-[1.2rem] text-[#525252] text-center h-[60px] md:h-[60px] xl:h-[90px] ">
            <td class="border border-[#525252]">KEA</td>
            <td class="border border-[#525252]">Hats on Top 1</td>
            <td class="border border-[#525252]">9 Months</td>
          </tr>
          <tr class="tex6-[0.80rem] md:text-[1rem] xl:text-[1.2rem] text-[#525252] text-center h-[60px] md:h-[60px] xl:h-[90px] ">
            <td class="border border-[#525252]">KEB</td>
            <td class="border border-[#525252]">Hats on Top 2</td>
            <td class="border border-[#525252]">9 Months</td>
          </tr>
          <tr class="tex6-[0.80rem] md:text-[1rem] xl:text-[1.2rem] text-[#525252] text-center h-[60px] md:h-[60px] xl:h-[90px]">
            <td class="border border-[#525252]">KEC</td>
            <td class="border border-[#525252]">Hats on Top 3</td>
            <td class="border border-[#525252]">9 Months</td>
          </tr>
        </tbody>
    </table>
    </div>
          </div>
      
          <!-- Program Menu Section -->
          <div class="w-full text-center lg:w-1/3 lg:text-start">
            <div class="rounded-md shadow-md">
              <h2 class="p-4 mb-4 text-xl font-semibold text-center text-white bg-gradient-to-r from-sky-700 to-sky-500">General English Program</h2>
              <ul class="text-gray-700">
                <li class="px-8 py-4 "><a href="#" class="text-lg text-gray-800 transition-all duration-200 hover:text-yellow-500 hover:text-xl hover:underline">Kindergarten</a></li>
                <li class="px-8 py-4 bg-gray-100"><a href="#" class="text-lg text-gray-800 transition-all duration-200 hover:text-yellow-500 hover:text-xl hover:underline">Primary School</a></li>
                <li class="px-8 py-4 "><a href="#" class="text-lg text-gray-800 transition-all duration-200 hover:text-yellow-500 hover:text-xl hover:underline">Lower Secondary School</a></li>
                <li class="px-8 py-4 bg-gray-100"><a href="#" class="text-lg text-gray-800 transition-all duration-200 hover:text-yellow-500 hover:text-xl hover:underline">Secondary School</a></li>
                <li class="px-8 py-4"><a href="#" class="text-lg text-gray-800 transition-all duration-200 hover:text-yellow-500 hover:text-xl hover:underline">Part Time Class</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>

    <?php include("./include/footer.php") ?>
    <script src="scripts/navbar.js"></script>
    <script src="scripts/to_the_top.js"></script>
</body>
</html>
