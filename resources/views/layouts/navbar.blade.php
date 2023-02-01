<div>
    <nav>
        <div class="fixed flex items-center justify-between bg-white top-0 left-0 h-12 w-full shadow-md px-3">
            {{-- logo --}}
            <div>
                <img class="w-24" src="img/logo/logo.png" alt="...">
            </div>
            {{-- logo tulisan mobile only --}}
            <div class="lg:hidden">
                <a class="font-bold pr-7 text-lg underline decoration-wavy decoration-green-500" href="#">POS <span
                        class="text-green-500">AKI</span></a>
            </div>
            {{-- primary navbar --}}
            <div class="hidden lg:flex justify-center gap-x-4">
                <a class="text-slate-700 hover:text-slate-500 hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Home</a>
                {{-- dropdown profile --}}
                <div class="group text-slate-700 rounded-md hover:bg-gray-100/100 hover:text-slate-500">
                    <button class="flex items-center space-x-1">
                        <a class="flex" href="#">Profile <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 scale-75">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span></a>
                    </button>
                    <div class="fixed z-10 hidden group-hover:block">
                        <div class="-ml-12 rounded-md bg-slate-50 px-3 pt-3 pb-4 w-36 shadow-md">
                            <div class="flex flex-col text-center gap-4">
                                <a class="hover:bg-gray-100/100 hover:text-slate-500" href="#">Profile</a>
                                <a class="hover:bg-gray-100/100 hover:text-slate-500" href="#">Visi misi</a>
                                <a class="hover:bg-gray-100/100 hover:text-slate-500" href="#">Karyawan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="text-slate-700 hover:text-slate-500 hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Galery</a>
                <a class="text-slate-700 hover:text-slate-500 hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Pelayanan</a>
                <a class="text-slate-700 hover:text-slate-500 hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Mitra</a>
                {{-- dropdown medsos --}}
                <div class="group text-slate-700 hover:bg-gray-100/100 rounded-md hover:text-slate-500">
                    <button class="flex items-center space-x-1">
                        <a class="flex" href="#">Media Sosial<span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 scale-75">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span></a>
                    </button>
                    <div class="fixed z-10  hidden group-hover:block">
                        <div class="-ml-7 rounded-md bg-slate-50 px-3 pt-3 pb-4 w-36 shadow-md">
                            <div class="flex flex-col text-center text-slate-700 gap-4">
                                <div class="flex hover:text-slate-500 hover:bg-gray-100/100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px"
                                        height="24px">
                                        <path
                                            d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z" />
                                    </svg>
                                    <a class="pl-1" href="#">Instagram</a>
                                </div>
                                <div class="flex hover:text-slate-500 hover:bg-gray-100/100">
                                    <svg width="24px" height="24px" viewBox="0 0 64 64"
                                        xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#000000"
                                        fill="none">
                                        <path
                                            d="M26.5,39.88V24.12a.37.37,0,0,1,.56-.31l12.4,7.88a.36.36,0,0,1,0,.62l-12.4,7.88A.37.37,0,0,1,26.5,39.88Z" />
                                        <rect x="6.46" y="14.42" width="51.09" height="35.16"
                                            rx="9.06" />
                                    </svg>
                                    <a class="pl-1" href="#">Youtube</a>
                                </div>
                                <div class="flex hover:text-slate-500 hover:bg-gray-100/100">
                                    <svg width="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g data-name="&lt;Group&gt;">
                                            <path fill="none" stroke="#303c42" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M21 1.5H3A1.5 1.5 0 0 0 1.5 3v18A1.5 1.5 0 0 0 3 22.5h8.5v-8h-2v-3h2v-2a4 4 0 0 1 4-4h3v3h-3a1 1 0 0 0-1 1v2h4l-.5 3h-3.5v8H21a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 21 1.5Z"
                                                data-name="&lt;Path&gt;" />
                                        </g>
                                        {{-- svg by Those icons --}}
                                    </svg>
                                    <a class="pl-1" href="#">Facebook</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-x-1">
                {{-- profile icon --}}
                <button class="pt-2 lg:mr-3 lg:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                {{-- tombol menu --}}
                <button class="pt-1 scale-110 menuToggle lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </button>
            </div>
        </div>
        {{-- mobile nav --}}
        <div class="mobileMenu hidden">
            <div
                class="flex flex-col fixed md:w-80 lg:hidden shadow-md mx-10 h-auto w-60 px-10 py-3 rounded-bl-md right-0 top-12 bg-slate-50 gap-y-3">
                <a class="text-slate-700 hover:text-slate-500 w-full hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Home</a>
                <div class="flex text-left border-b-2">
                    <a class="text-slate-700 hover:text-slate-500 w-full hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                        href="#">Profile</a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div>
                    <div class="flex flex-col ml-1 bg-slate-100 py-3 px-3 rounded-md space-y-3">
                        <a class="hover:bg-slate-100 text-slate-700 w-full px-1 py-1 rounded-md"
                            href="#">Profile</a>
                        <a class="hover:bg-slate-100 text-slate-700 w-full px-1 py-1 rounded-md" href="#">Visi
                            misi</a>
                        <a class="hover:bg-slate-100 text-slate-700 w-full px-1 py-1 rounded-md"
                            href="#">Karyawan</a>
                    </div>
                </div>
                <a class="text-slate-700 hover:text-slate-500 w-full hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Galery</a>
                <a class="text-slate-700 hover:text-slate-500 w-full hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Pelayanan</a>
                <a class="text-slate-700 hover:text-slate-500 w-full hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                    href="#">Mitra</a>
                <div class="flex text-left border-b-2">
                    <a class="text-slate-700 hover:text-slate-500 w-full hover:bg-gray-100/100 rounded-md px-1 hover:shadow-sm transition duration-200"
                        href="#">Media Sosial</a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="ml-1 bg-slate-100 py-3 px-3 rounded-md space-y-3">
                    <div class="flex hover:text-slate-500 hover:bg-gray-100/100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                            <path
                                d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z" />
                        </svg>
                        <a class="pl-1" href="#">Instagram</a>
                    </div>
                    <div class="flex hover:text-slate-500 hover:bg-gray-100/100">
                        <svg width="24px" height="24px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                            stroke-width="3" stroke="#000000" fill="none">
                            <path
                                d="M26.5,39.88V24.12a.37.37,0,0,1,.56-.31l12.4,7.88a.36.36,0,0,1,0,.62l-12.4,7.88A.37.37,0,0,1,26.5,39.88Z" />
                            <rect x="6.46" y="14.42" width="51.09" height="35.16" rx="9.06" />
                        </svg>
                        <a class="pl-1" href="#">Youtube</a>
                    </div>
                    <div class="flex hover:text-slate-500 hover:bg-gray-100/100">
                        <svg width="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g data-name="&lt;Group&gt;">
                                <path fill="none" stroke="#303c42" stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 1.5H3A1.5 1.5 0 0 0 1.5 3v18A1.5 1.5 0 0 0 3 22.5h8.5v-8h-2v-3h2v-2a4 4 0 0 1 4-4h3v3h-3a1 1 0 0 0-1 1v2h4l-.5 3h-3.5v8H21a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 21 1.5Z"
                                    data-name="&lt;Path&gt;" />
                            </g>
                            {{-- svg by Those icons --}}
                        </svg>
                        <a class="pl-1" href="#">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<script src="/js/fungsi.js"></script>
