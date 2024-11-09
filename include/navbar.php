<nav class="z-[20] absolute inset-0">
        <div class="container mx-auto xl:px-[60px] lg:px-[25px] md:px-[50px] px-[25px] flex justify-between items-center py-5 z-[30] bg-white shadow min-w-full fixed xl:h-[80px]">
            <!-- Left Side: Logo -->
            <div class="flex items-center">
                <a href="./index.php"><img src="img/logo.png" alt="School Logo" class="transition-all duration-300 xl:h-[45px] lg:h-[40px] md:h-[40px] h-[40px]"></a>
            </div>
    
            <!-- Center: Navigation Links -->
            <ul id="nav-links" class="hidden lg:flex items-center xl:space-x-6 space-x-4 xl:text-[1rem] lg:text-[14px] md:text-[0.6em] font-normal">
                <li><a href="./index.php" class=" hover:text-yellow-500">Home</a></li>
    
                <!-- About Us Dropdown -->
                <li class="relative">
                    <button id="about-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleDropdown('about-dropdown', 'about-arrow')">
                        <span class="">About Us</span>
                        <svg id="about-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="about-dropdown" class="absolute hidden bg-white border border-gray-200 w-[300px] mt-10 space-y-2 shadow py-5 px-1">
                        <li><a href="./visionandmission.php" class="block px-4 hover:text-yellow-500">Vision & Mission</a></li>
                        <li><a href="./messageFSP.php" class="block px-4 hover:text-yellow-500">Message From School President</a></li>
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
                                <li><a href="./kindergarten.php" class="block px-4 hover:text-yellow-500">Kindergarten</a></li>
                                <li><a href="./primaryeg.php" class="block px-4 pt-2 hover:text-yellow-500">Primary</a></li>
                                <li><a href="./lowersecondary.php" class="block px-4 pt-2 hover:text-yellow-500">Lower Secondary</a></li>
                                <li><a href="./secondaryschool.php" class="block px-4 pt-2 hover:text-yellow-500">Secondary</a></li>
                                <li><a href="./parttimeclass.php" class="block px-4 pt-2 hover:text-yellow-500">Part-Time Class</a></li>
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
                                <li><a href="./kindergartenkh.php" class="block px-4 hover:text-yellow-500">Kindergarten</a></li>
                                <li><a href="./primarykh.php" class="block px-4 pt-2 hover:text-yellow-500">Primary School</a></li>
                                <li><a href="./highschool.php" class="block px-4 pt-2 hover:text-yellow-500">High School</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

    
                <li><a href="./admission.php" class="hover:text-yellow-500">Admission</a></li>
                <li><a href="./campuses.php" class="hover:text-yellow-500">Campuses</a></li>
    
                <!-- News and Event Dropdown -->
                <li class="relative">
                    <button id="news-btn" class="flex items-center justify-between w-full text-left hover:text-yellow-500" onclick="toggleDropdown('news-dropdown', 'news-arrow')">
                        <span class="">News and Event</span>
                        <svg id="news-arrow" class="w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="news-dropdown" class="absolute hidden bg-white border border-gray-200 mt-10 w-[290px] space-y-2 shadow py-5 px-5">
                        <li><a href="./localnewsandevent.php" class="block hover:text-yellow-500">Local News and Events</a></li>
                        <li><a href="./internationalnewsandevent.php" class="block hover:text-yellow-500">International News and Events</a></li>
                    </ul>
                </li>
    
                <li><a href="./career.php" class="hover:text-yellow-500">Careers</a></li>
    
                <!-- Right Side: Language Dropdown and Search Icon -->
                <div class="flex items-center space-x-4">
                    <!-- Search Icon -->
                    <button class="transition-all duration-300 hover:scale-125">
                        <ion-icon class="mr-3 lg:h-5 lg:w-5 md:w-4 md:h-4" name="search-outline"></ion-icon>
                    </button>


                    <!-- Language Dropdown -->
                    <div class="hidden">
                        <button id="lang-btn" class="flex items-center p-1 space-x-1 text-sm text-gray-700 border border-gray-300 rounded hover:bg-gray-100">
                        <img src="img/en.png" alt="English" class="object-cover h-5 w-[30px]">
                        <span>EN</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        </button>
                        <ul id="lang-dropdown" class="absolute right-0 hidden w-20 mt-2 bg-white border border-gray-200 shadow">
                        <li class="flex items-center p-2 space-x-2 cursor-pointer hover:bg-gray-100" onclick="selectLanguage('KH', 'img/kh.png')">
                            <img src="img/kh.png" alt="Khmer" class="object-cover h-5 w-[30px]">
                            <span>KH</span>
                        </li>
                        <li class="flex items-center p-2 space-x-2 cursor-pointer hover:bg-gray-100" onclick="selectLanguage('EN', 'img/en.png')">
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
            <ul id="mobile-nav" class="fixed top-[-100%] z-[20] transition-all duration-500 ease-in-out space-y-4 bg-white shadow py-[60px] px-10 overflow-y-auto max-h-[90vh] w-full">
        
                <!-- Search Box -->
                <div class="relative flex items-center justify-center w-full mb-4">
                    <!-- Search Input -->
                    <input type="text" placeholder="Search..." 
                           class="w-full p-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-yellow-500">
                    
                    <!-- Search Icon inside the Input -->
                    <ion-icon class="absolute w-6 h-6 text-gray-500 cursor-pointer right-4" name="search-outline"></ion-icon>
                </div>
        
                <!-- Home -->
                <a href="./index.php" >
                <li class="py-2 w-full hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px]">Home</li>
                </a>
        
                <!-- About Us Dropdown in Mobile -->
                <li>
                    <button class="relative w-full items-center flex hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2" onclick="toggleMobileDropdown('about')">
                        <span>About Us</span>
                        <svg id="about-arrow" class="absolute right-0 w-4 h-4 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="mobile-dropdown-about" class="hidden pl-4 space-y-4">
                        <li><a href="./visionandmission.php" class="block pt-5 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Vision & Mission</a></li>
                        <li><a href="./messageFPS.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Message From President</a></li>
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
                            <ul id="mobile-dropdown-general-english" class="right-0 hidden pt-5 pl-6 space-y-4">
                                <li><a href="./kindergarten.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Kindergarten</a></li>
                                <li><a href="./primaryeg.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Primary</a></li>
                                <li><a href="./lowersecondary.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Lower Secondary</a></li>
                                <li><a href="./secondaryschool.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Secondary</a></li>
                                <li><a href="./parttimeclass.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Part-Time Class</a></li>
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
                            <ul id="mobile-dropdown-general-khmer" class="right-0 hidden pt-5 pl-6 space-y-4">
                                <li><a href="./kindergartenkh.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Kindergarten</a></li>
                                <li><a href="./primarykh.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Primary School</a></li>
                                <li><a href="./highschool.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">High School</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        
                <!-- Admission -->
                <a href="./admission.php" class="">
                <li class="pb-2 pt-6 border-b-[1px] w-full hover:text-yellow-500 hover:border-yellow-500">Admission</li>
                </a>
                
                <!-- Campuses -->
                <a href="./campuses.php">
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
                    <ul id="mobile-dropdown-news" class="hidden pt-5 pl-4 space-y-4">
                        <li><a href="./localnewsandevent.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Local News</a></li>
                        <li><a href="./internationalnewsandevent.php" class="block pt-2 hover:text-yellow-500 hover:border-yellow-500 decoration-black border-b-[1px] py-2 ml-5">Global News</a></li>
                    </ul>
                </li>
        
                <!-- Careers -->
                <a href="./career.php">
                <li class="pb-2 pt-6 border-b-[1px] w-full hover:text-yellow-500 hover:border-yellow-500">Careers</li>
                </a>
            </ul>
        </div>
        
    </nav>