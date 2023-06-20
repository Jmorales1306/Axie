<div class="border-b border-white-2 border-opacity-40 sticky top-0 bg-main-color z-[2]">
    <nav {{$attributes->class(["flex ps-[255px] pt-4"])}}>
        {{-- Logo --}}
        <a href="{{ action([\App\Http\Controllers\NftController::class, 'index']) }}" class="flex gap-[10px]">
            <svg width="30" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.75 0C10.2255 5.0344 11.25 19.2187 11.25 19.2187C11.25 19.2187 7.5 17.9375 7.5 12.1719C3.02601 14.831 0 19.9421 0 25.625C0 34.1164 6.71572 41 15 41C23.2843 41 30 34.1164 30 25.625C29.9999 13.1328 18.75 10.5703 18.75 0V0ZM16.3176 35.7023C13.3034 36.4725 10.2505 34.5924 9.49887 31.5027C8.74736 28.4131 10.5816 25.2838 13.596 24.5135C20.8732 22.6538 21.7852 18.4592 21.7852 18.4592C21.7852 18.4592 25.4141 33.3775 16.3176 35.7023Z" fill="url(#paint0_linear_201_1188)"/>
                <defs>
                <linearGradient id="paint0_linear_201_1188" x1="26.25" y1="-1.74884e-06" x2="-5.52352" y2="31.3469" gradientUnits="userSpaceOnUse">
                <stop stop-color="#E250E5"/>
                <stop offset="1" stop-color="#4B50E6"/>
                </linearGradient>
                </defs>
            </svg>
                
            <h1 class="text-white text-36px leading-[56px] font-bold">Axies</h1>
        </a>
        {{-- List --}}
        <ul class="flex items-center ms-[239px] mb-[11px] gap-10">
            <li class="text-white text-18px font-bold">
                <a href="{{ action([\App\Http\Controllers\NftController::class, 'index']) }}" class="leading-[26px]" >Home</a>
            </li>
            <li class="text-white text-18px font-bold leading-[26px]">
                <a href="{{ action([\App\Http\Controllers\NftExploreController::class, 'index']) }}" class="flex items-center gap-[6px] Leading-[26px]">Explore 
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                    </svg>
                </a>
            </li>
            <li class="text-white text-18px font-bold leading-[26px]">
                <a href="#" class="flex items-center gap-[6px] Leading-[26px]">Activity
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                    </svg>
                        
                </a>
            </li>
            <li class="text-white text-18px font-bold leading-[26px]">
                <a href="#" class="flex items-center gap-[6px] Leading-[26px]">Community
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                    </svg>
                        
                </a>
            </li>
            <li class="text-white text-18px font-bold leading-[26px]">
                <a href="#" class="flex items-center gap-[6px] Leading-[26px]">Pages
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                    </svg>
                        
                </a>
            </li>
            <li class="text-white text-18px font-bold leading-[26px]">
                <a href="#" class="flex items-center gap-[6px]">Contact
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.99997 5.85012C4.82075 5.85012 4.64155 5.78169 4.50492 5.64512L0.205141 1.3453C-0.0683805 1.07178 -0.0683805 0.628311 0.205141 0.3549C0.478553 0.0814885 0.921933 0.0814885 1.19548 0.3549L4.99997 4.15962L8.80449 0.355033C9.07801 0.0816214 9.52135 0.0816214 9.79474 0.355033C10.0684 0.628444 10.0684 1.07191 9.79474 1.34543L5.49503 5.64525C5.35832 5.78185 5.17913 5.85012 4.99997 5.85012Z" fill="white"/>
                    </svg>
                        
                </a>
            </li>
        </ul>
        {{-- Button search and Wallet --}}
        <div class="flex items-center ms-[125px] gap-8">
            <button class="mb-[14px]">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_201_1166" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="18" height="17">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6665 1.66666H17.6857V17.3322H1.6665V1.66666Z" fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask0_201_1166)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.67662 2.87312C5.94011 2.87312 2.90023 5.84505 2.90023 9.49903C2.90023 13.153 5.94011 16.1257 9.67662 16.1257C13.4123 16.1257 16.4522 13.153 16.4522 9.49903C16.4522 5.84505 13.4123 2.87312 9.67662 2.87312ZM9.6766 17.3322C5.2599 17.3322 1.6665 13.8182 1.6665 9.49902C1.6665 5.17988 5.2599 1.66666 9.6766 1.66666C14.0933 1.66666 17.6859 5.17988 17.6859 9.49902C17.6859 13.8182 14.0933 17.3322 9.6766 17.3322Z" fill="white"/>
                    <path d="M9.67662 2.37312C5.67463 2.37312 2.40023 5.55836 2.40023 9.49903H3.40023C3.40023 6.13174 6.20558 3.37312 9.67662 3.37312V2.37312ZM2.40023 9.49903C2.40023 13.4396 5.67455 16.6257 9.67662 16.6257V15.6257C6.20566 15.6257 3.40023 12.8664 3.40023 9.49903H2.40023ZM9.67662 16.6257C13.6779 16.6257 16.9522 13.4396 16.9522 9.49903H15.9522C15.9522 12.8664 13.1467 15.6257 9.67662 15.6257V16.6257ZM16.9522 9.49903C16.9522 5.5584 13.6778 2.37312 9.67662 2.37312V3.37312C13.1468 3.37312 15.9522 6.1317 15.9522 9.49903H16.9522ZM9.6766 16.8322C5.52546 16.8322 2.1665 13.5316 2.1665 9.49902H1.1665C1.1665 14.1048 4.99435 17.8322 9.6766 17.8322V16.8322ZM2.1665 9.49902C2.1665 5.46656 5.52539 2.16666 9.6766 2.16666V1.16666C4.99442 1.16666 1.1665 4.8932 1.1665 9.49902H2.1665ZM9.6766 2.16666C13.8277 2.16666 17.1859 5.46649 17.1859 9.49902H18.1859C18.1859 4.89327 14.3589 1.16666 9.6766 1.16666V2.16666ZM17.1859 9.49902C17.1859 13.5316 13.8277 16.8322 9.6766 16.8322V17.8322C14.3589 17.8322 18.1859 14.1047 18.1859 9.49902H17.1859Z" fill="white"/>
                    </g>
                    <mask id="mask1_201_1166" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="13" y="13" width="6" height="6">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2012 14.2999H18.3333V18.3333H14.2012V14.2999Z" fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask1_201_1166)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7166 18.3333C17.5596 18.3333 17.4016 18.2746 17.2807 18.1572L14.3823 15.3308C14.1413 15.0952 14.1405 14.7131 14.3815 14.4774C14.6217 14.2402 15.0123 14.2418 15.2541 14.4758L18.1526 17.303C18.3935 17.5387 18.3944 17.9199 18.1534 18.1556C18.0333 18.2746 17.8746 18.3333 17.7166 18.3333Z" fill="white"/>
                    <path d="M17.7166 18.3333C17.5595 18.3333 17.4016 18.2746 17.2807 18.1572L14.3823 15.3308C14.1413 15.0952 14.1405 14.7131 14.3815 14.4774C14.6217 14.2402 15.0123 14.2418 15.2541 14.4758L18.1526 17.303C18.3935 17.5387 18.3944 17.9199 18.1534 18.1556C18.0333 18.2746 17.8746 18.3333 17.7166 18.3333" stroke="white"/>
                    </g>
                </svg>
            </button>
            <button class="flex items-center py-[14px] gap-2 border border-[#5142FC] rounded-3xl pl-[33px] pr-[35px] mb-4">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8072 6.98483H18.3332C18.3332 4.15383 16.6369 2.5 13.7628 2.5H6.23688C3.3628 2.5 1.6665 4.15383 1.6665 6.94872V13.0513C1.6665 15.8462 3.3628 17.5 6.23688 17.5H13.7628C16.6369 17.5 18.3332 15.8462 18.3332 13.0513V12.7913H14.8072C13.1708 12.7913 11.8443 11.4979 11.8443 9.9025C11.8443 8.30707 13.1708 7.01372 14.8072 7.01372V6.98483ZM14.8072 8.22701H17.711C18.0546 8.22701 18.3332 8.49861 18.3332 8.83365V10.9425C18.3292 11.2759 18.0529 11.5452 17.711 11.5491H14.8739C14.0455 11.56 13.3211 11.007 13.1332 10.2203C13.0391 9.73191 13.1712 9.22797 13.4941 8.84351C13.817 8.45906 14.2976 8.2334 14.8072 8.22701ZM14.9332 10.4441H15.2072C15.5591 10.4441 15.8443 10.1661 15.8443 9.82306C15.8443 9.48004 15.5591 9.20197 15.2072 9.20197H14.9332C14.7649 9.20004 14.6028 9.26387 14.4832 9.3792C14.3635 9.49453 14.2961 9.65177 14.2961 9.81584C14.2961 10.16 14.5802 10.4402 14.9332 10.4441ZM5.61465 6.98483H10.3183C10.6702 6.98483 10.9554 6.70676 10.9554 6.36375C10.9554 6.02073 10.6702 5.74266 10.3183 5.74266H5.61465C5.26569 5.74263 4.98167 6.01633 4.97761 6.35652C4.97759 6.70073 5.26163 6.98088 5.61465 6.98483Z" fill="white"/>
                </svg>                            
                <p class="text-white font-bold text-15px">Wallet connect</p>
            </button>
        </div>
        {{-- login --}}
        <div class="ms-4 mt-4">
            @if (Route::has('login'))
                    <div class="flex items-center justify-between">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </nav>
</div>