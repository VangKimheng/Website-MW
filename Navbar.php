<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    html {
        scroll-behavior: smooth;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', 'Battambang', 'Sriracha' ,sans-serif;
    }
    /* Add this to your CSS */
    .active-btn {
        color: #FFC107; /* Yellow color */
    }
    
 

</style>
<body class="bg-gray-100">
    <nav class="">
        <div class="container mx-auto xl:px-[60px] lg:px-[25px] md:px-[50px] px-[25px] flex justify-between items-center py-5 z-[20] bg-white shadow fixed min-w-full xl:h-[80px]">
            <!-- Left Side: Logo -->
            <div class="flex items-center">
                <img src="img/logo.png" alt="School Logo" class="transition-all duration-300 xl:h-[45px] lg:h-[40px] md:h-[40px] h-[40px]">
            </div>
    
            <!-- Center: Navigation Links -->
            <ul id="nav-links" class="hidden lg:flex items-center xl:space-x-6 space-x-4 xl:text-[1rem] lg:text-[14px] md:text-[0.6em] font-normal">
                <li><a href="#" class=" hover:text-yellow-500">Home</a></li>
    
                <!-- About Us Dropdown -->
                <li class="relative">
                    <button id="about-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleDropdown('about-dropdown', 'about-arrow')">
                        <span class="">About Us</span>
                        <svg id="about-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="about-dropdown" class="absolute hidden bg-white border border-gray-200 w-[300px] mt-10 space-y-2 shadow py-5 px-1">
                        <li><a href="#" class="block px-4 hover:text-yellow-500">Vision & Mission</a></li>
                        <li><a href="#" class="block px-4 hover:text-yellow-500">Message From School President</a></li>
                    </ul>
                </li>
    
                <!-- Academic Dropdown -->
                <li class="relative">
                    <button id="academic-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleDropdown('academic-dropdown', 'academic-arrow')">
                        <span class="">Academic</span>
                        <svg id="academic-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="academic-dropdown" class="absolute hidden bg-white border border-gray-200 mt-10 w-[280px] space-y-2 shadow py-5 px-5">
                        <li class="relative">
                            <button id="general-english-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleGeneralDropdown('general-english-dropdown', 'general-khmer-dropdown', 'general-english-arrow', 'general-khmer-arrow')">
                                <span>General English Program</span>
                                <svg id="general-english-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="general-english-dropdown" class="absolute hidden bg-white border border-gray-200 w-[180px] space-y-2 shadow py-3 left-[260px] top-[-0px]">
                                <li><a href="#" class="block px-4 hover:text-yellow-500">Kindergarten</a></li>
                                <li><a href="#" class="block px-4 pt-2 hover:text-yellow-500">Primary</a></li>
                                <li><a href="#" class="block px-4 pt-2 hover:text-yellow-500">Lower Secondary</a></li>
                                <li><a href="#" class="block px-4 pt-2 hover:text-yellow-500">Secondary</a></li>
                                <li><a href="#" class="block px-4 pt-2 hover:text-yellow-500">Part-Time Class</a></li>
                            </ul>
                        </li>
                        <li class="relative">
                            <button id="general-khmer-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleGeneralDropdown('general-khmer-dropdown', 'general-english-dropdown', 'general-khmer-arrow', 'general-english-arrow')">
                                <span class="">General Khmer Program</span>
                                <svg id="general-khmer-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="general-khmer-dropdown" class="absolute hidden bg-white border border-gray-200 left-[260px] top-[-4px] w-[180px] space-y-2 shadow py-3">
                                <li><a href="#" class="block px-4 hover:text-yellow-500">Kindergarten</a></li>
                                <li><a href="#" class="block px-4 pt-2 hover:text-yellow-500">Primary School</a></li>
                                <li><a href="#" class="block px-4 pt-2 hover:text-yellow-500">High School</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

    
                <li><a href="#" class="hover:text-yellow-500">Admission</a></li>
                <li><a href="#" class="hover:text-yellow-500">Campuses</a></li>
    
                <!-- News and Event Dropdown -->
                <li class="relative">
                    <button id="news-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleDropdown('news-dropdown', 'news-arrow')">
                        <span class="">News and Event</span>
                        <svg id="news-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="news-dropdown" class="absolute hidden bg-white border border-gray-200 mt-10 w-[290px] space-y-2 shadow py-5 px-5">
                        <li><a href="#" class="block hover:text-yellow-500">Local News and Events</a></li>
                        <li><a href="#" class="block hover:text-yellow-500">International News and Events</a></li>
                    </ul>
                </li>
    
                <li><a href="#" class="hover:text-yellow-500">Careers</a></li>
    
                <!-- Right Side: Language Dropdown and Search Icon -->
                <div class="flex items-center space-x-4">
                    <!-- Search Icon -->
                    <button class="hover:scale-125 transition-all duration-300">
                        <ion-icon class="lg:h-5 lg:w-5 mr-3 md:w-4 md:h-4" name="search-outline"></ion-icon>
                    </button>


                    <!-- Language Dropdown -->
                    <div class="hidden">
                        <button id="lang-btn" class="flex items-center space-x-1 text-sm text-gray-700 border border-gray-300 p-1 rounded hover:bg-gray-100">
                        <img src="img/en.png" alt="English" class="object-cover h-5 w-[30px]">
                        <span>EN</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        </button>
                        <ul id="lang-dropdown" class="absolute right-0 mt-2 w-20 bg-white border border-gray-200 shadow hidden">
                        <li class="flex items-center space-x-2 p-2 hover:bg-gray-100 cursor-pointer" onclick="selectLanguage('KH', 'img/kh.png')">
                            <img src="img/kh.png" alt="Khmer" class="object-cover h-5 w-[30px]">
                            <span>KH</span>
                        </li>
                        <li class="flex items-center space-x-2 p-2 hover:bg-gray-100 cursor-pointer" onclick="selectLanguage('EN', 'img/en.png')">
                            <img src="img/en.png" alt="English" class="object-cover h-5 w-[30px]">
                            <span>EN</span>
                        </li>
                        </ul>
                    </div>
                </div>
            </ul>

            
            <!-- Mobile Menu Icon -->
            <div class="lg:hidden">
                <button id="mobile-menu-btn" class="text-black transition-all duration-300 ease-in-out" onclick="toggleMobileMenu()">
                    <ion-icon id="menu-icon" name="menu" class="text-[2rem]"></ion-icon>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Links -->
        <div class="lg:hidden">
            <ul id="mobile-nav" class="absolute top-[-100%] z-[-2] transition-all duration-500 ease-in-out space-y-4 bg-white shadow py-[60px] px-10 overflow-y-auto max-h-[90vh] w-full">
        
                <!-- Search Box -->
                <div class="relative flex justify-center items-center mb-4 w-full">
                    <!-- Search Input -->
                    <input type="text" placeholder="Search..." 
                           class="w-full p-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-yellow-500">
                    
                    <!-- Search Icon inside the Input -->
                    <ion-icon class="absolute right-4 text-gray-500 w-6 h-6 cursor-pointer" name="search-outline"></ion-icon>
                </div>
        
                <!-- Home -->
                <a href="#" >
                <li class="py-2 w-full hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px]">Home</li>
                </a>
        
                <!-- About Us Dropdown in Mobile -->
                <li>
                    <button class="relative w-full items-center flex hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2" onclick="toggleMobileDropdown('about')">
                        <span>About Us</span>
                        <svg id="about-arrow" class="absolute w-4 h-4 transition-transform duration-200 right-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="mobile-dropdown-about" class="hidden pl-4 space-y-4">
                        <li><a href="#" class="block pt-5 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Vision & Mission</a></li>
                        <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Message From President</a></li>
                    </ul>
                </li>
        
                <!-- Academic Dropdown in Mobile -->
                <li>
                    <button class="relative w-full flex items-center hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2" onclick="toggleMobileDropdown('academic')">
                        <span>Academic</span>
                        <svg id="academic-arrow" class="absolute right-0 w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="mobile-dropdown-academic" class="hidden space-y-2 pl-7">
                        <!-- General English -->
                        <li class="relative">
                            <button class="flex  w-full pt-5 items-center hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2" onclick="toggleMobileDropdown('general-english')">
                                General English
                                <svg id="arrow-general-english" class="absolute right-0 w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="mobile-dropdown-general-english" class="hidden space-y-4 pl-6 pt-5 right-0">
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Kindergarten</a></li>
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Primary</a></li>
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Lower Secondary</a></li>
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Secondary</a></li>
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Part-Time Class</a></li>
                            </ul>
                        </li>
        
                        <!-- General Khmer -->
                        <li class="relative">
                            <button class="flex w-full items-center pt-5 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2" onclick="toggleMobileDropdown('general-khmer')">
                                General Khmer
                                <svg id="arrow-general-khmer" class="absolute right-0 w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="mobile-dropdown-general-khmer" class="hidden space-y-4 pt-5 pl-6 right-0">
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Kindergarten</a></li>
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Primary School</a></li>
                                <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">High School</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        
                <!-- Admission -->
                <a href="#" class="">
                <li class="pb-2 pt-6 border-b-[1px] w-full hover:text-yellow-500 hover:border-yellow-500">Admission</li>
                </a>
                
                <!-- Campuses -->
                <a href="#">
                <li class="pb-2 pt-6 border-b-[1px] w-full hover:text-yellow-500 hover:border-yellow-500">Campuses</li>
                </a>
        
                <!-- News and Event Dropdown in Mobile -->
                <li>
                    <button class="relative w-full flex items-center hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2" onclick="toggleMobileDropdown('news')">
                        <span>News and Event</span>
                        <svg id="arrow-news" class="absolute right-0 w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="mobile-dropdown-news" class="hidden space-y-4 pt-5 pl-4">
                        <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Local News</a></li>
                        <li><a href="#" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Global News</a></li>
                    </ul>
                </li>
        
                <!-- Careers -->
                <a href="#">
                <li class="pb-2 pt-6 border-b-[1px] w-full hover:text-yellow-500 hover:border-yellow-500">Careers</li>
                </a>
            </ul>
        </div>
        
    </nav>

    <script>

        /////////////////// Slide show in header start////////////////////////////
        // Toggle the mobile menu and change the icon from "menu" to "close"
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const mobileNav = document.getElementById('mobile-nav');
            const menuIcon = document.getElementById('menu-icon');

            // Toggle the mobile nav visibility
            mobileNav.classList.toggle('top-[8%]');
            

            // Toggle between "menu" and "close" icon
            if (menuIcon.name === "menu") {
                menuIcon.name = "close"; // Change to "close" icon
            } else {
                menuIcon.name = "menu"; // Change back to "menu" icon
            }
        });

        // Toggle dropdown in mobile menu
        function toggleMobileDropdown(section) {
            const dropdown = document.getElementById(`mobile-dropdown-${section}`);
            dropdown.classList.toggle('hidden');
        }

        // Toggle the language dropdown
        document.getElementById('lang-btn').addEventListener('click', function() {
            const langDropdown = document.getElementById('lang-dropdown');
            langDropdown.classList.toggle('hidden');
        });

        // Select Language
        function selectLanguage(language, flagSrc) {
            document.querySelector('#lang-btn img').src = flagSrc;
            document.querySelector('#lang-btn span').textContent = language;
        }

        // Toggle a dropdown and rotate the arrow icon
        function toggleDropdown(dropdownId, arrowId) {
            const dropdown = document.getElementById(dropdownId);
            const arrow = document.getElementById(arrowId);

            dropdown.classList.toggle('hidden');

            // Rotate arrow based on dropdown state
            if (dropdown.classList.contains('hidden')) {
                arrow.style.transform = 'rotate(0deg)';
            } else {
                arrow.style.transform = 'rotate(180deg)';
            }
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function (event) {
            const dropdowns = [document.getElementById('about-dropdown'), document.getElementById('academic-dropdown'), document.getElementById('news-dropdown')];
            const buttons = [document.getElementById('about-btn'), document.getElementById('academic-btn'), document.getElementById('news-btn')];

            dropdowns.forEach((dropdown, index) => {
                if (!buttons[index].contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                    document.querySelector(`#${buttons[index].id} svg`).style.transform = 'rotate(0deg)'; // Reset arrow rotation
                }
            });
        });

        // Toggle between dropdowns, ensuring one closes when the other opens
        function toggleGeneralDropdown(currentDropdownId, otherDropdownId, currentArrowId, otherArrowId) {
            const currentDropdown = document.getElementById(currentDropdownId);
            const otherDropdown = document.getElementById(otherDropdownId);
            const currentArrow = document.getElementById(currentArrowId);
            const otherArrow = document.getElementById(otherArrowId);

            // Toggle the current dropdown
            currentDropdown.classList.toggle('hidden');

            // Hide the other dropdown if it's visible
            if (!currentDropdown.classList.contains('hidden')) {
                otherDropdown.classList.add('hidden');
                otherArrow.style.transform = 'rotate(0deg)'; // Reset the other arrow
            }

            // Rotate the arrow for the current dropdown
            if (currentDropdown.classList.contains('hidden')) {
                currentArrow.style.transform = 'rotate(0deg)';
            } else {
                currentArrow.style.transform = 'rotate(180deg)';
            }
        }



      
/////////////////// Slide show in header End////////////////////////////
</script>
</body>
</html>
