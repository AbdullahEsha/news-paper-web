<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>About - Super Equestrian</title>
    <link rel="canonical" href="https://superequestrian.com/about" />
</head>

<body>

    <header class="border-b">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <!-- Left section with menu and date -->
            <div class="flex items-center">
                <button id="menuToggle" class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="text-sm">
                    <div>হোমবার, ১৪ মার্চ ২০২৫</div>
                    <div>৩০ ফাল্গুন ১৪৩১</div>
                </div>
            </div>

            <!-- Center logo -->
            <div class="logo text-center">
                <a href="/" class="text-black">আজবার্তা</a>
                <div class="text-xs text-center">দৈনন্দিন সংবাদ প্রকাশ অধিকারসহ</div>
            </div>

            <!-- Right search box -->
            <div class="relative">
                <input type="text" placeholder="অনুসন্ধান..." class="border rounded-full py-1 px-4 pr-10 text-sm w-48">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Navigation menu -->
    <nav class="border-b">
        <div class="container mx-auto px-4 py-2">
            <ul class="flex flex-wrap justify-center space-x-4 text-sm">
                <li><a href="#" class="hover:text-red-500">প্রথম পাতা</a></li>
                <li><a href="#" class="hover:text-red-500">বাংলাদেশ</a></li>
                <li><a href="#" class="hover:text-red-500">বৈদেশিক অর্থনীতি</a></li>
                <li><a href="#" class="hover:text-red-500">রাজনীতি</a></li>
                <li><a href="#" class="hover:text-red-500">সারাদেশ</a></li>
                <li><a href="#" class="hover:text-red-500">বিশ্ব</a></li>
                <li><a href="#" class="hover:text-red-500">আইন ও অধিকার</a></li>
                <li><a href="#" class="hover:text-red-500">বাণিজ্য</a></li>
                <li><a href="#" class="hover:text-red-500">মতামত</a></li>
                <li><a href="#" class="hover:text-red-500">আরও</a></li>
            </ul>
        </div>
    </nav>

    <!-- Mobile menu (hidden by default) -->
    <div id="mobileMenu" class="fixed inset-0 bg-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
        <div class="p-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">মেনু</h2>
                <button id="closeMenu" class="text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="space-y-4">
                <li><a href="#" class="block py-2 hover:text-red-500">প্রথম পাতা</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">বাংলাদেশ</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">বৈদেশিক অর্থনীতি</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">রাজনীতি</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">সারাদেশ</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">বিশ্ব</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">আইন ও অধিকার</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">বাণিজ্য</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">মতামত</a></li>
                <li><a href="#" class="block py-2 hover:text-red-500">আরও</a></li>
            </ul>
        </div>
    </div>
    <main class="max-w-6xl mx-auto bg-white">

        <!-- Breadcrumb -->
        <div class="container mx-auto px-4 py-4">
            <ul class="flex space-x-2">
                <li><a href="#" class="text-blue-600">হোম</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="text-blue-600">বাংলাদেশ</a></li>
                <li><span class="mx-2">/</span></li>
                <li><span>সেনাবাহিনী প্রধানের মুক্তো সফর</span></li>
            </ul>
        </div>

        <div class="flex flex-wrap">
            <!-- Main Content -->
            <div class="w-full lg:w-8/12 px-4">
                <!-- Main Article -->
                <div class="mb-8">
                    <!-- Article Title -->
                    <h1 class="text-3xl font-bold my-4">
                        শান্তিরক্ষা মিশন এলাকা সেন্ট্রাল আফ্রিকান রিপাবলিক পরিদর্শনে গেলেন সেনাবাহিনী প্রধান
                    </h1>

                    <!-- Date and Time -->
                    <div class="text-xs text-gray-600 py-2">
                        প্রকাশিত: ০৫ মার্চ ২০১৫ ১২:০১ মিনিট
                    </div>

                    <div class="text-center mb-2">
                        <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="সেনাবাহিনী প্রধান" class="mx-auto max-w-full h-auto">
                        <p class="text-sm text-gray-600 mt-1">ফাইল ছবি</p>
                    </div>

                    <!-- Social Share Buttons -->
                    <div class="flex space-x-2 py-2">
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-blue-600 text-white rounded">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-black text-white rounded">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-green-500 text-white rounded">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-blue-500 text-white rounded">
                            <i class="fab fa-facebook-messenger"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-green-600 text-white rounded">
                            <i class="fas fa-share-alt"></i>
                        </a>
                        <a href="#" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 rounded">
                            <i class="fas fa-print"></i>
                        </a>
                    </div>


                    <div class="mt-4">
                        <p class="text-base mb-4">
                            ঢাকা, ০৫ মার্চ ২০১৫ (সেনাবার্তা): সেনাবাহিনী প্রধান জেনারেল ওয়াকার-উজ-জামান, এসপিপি, এডব্লিউসি, পিএসসি, জি, বিএম নিম্নে সরকারি সফরে সেনাশ অধিকরন বিশ্ববিদ্যালয় এর উদ্বোধনে ঢাকা ত্যাগ করবেন।
                        </p>
                        <p class="text-base mb-4">
                            সম্প্রসারণে তিনি সেনাশ অধিকরন বিশ্ববিদ্যালয় ও বিদেশিক বাংলাদেশী কর্মকর্তাদের সঙ্গে বৈঠকে অংশগ্রহণ করবেন বলে জানা যায়। এছাড়াও, সেনাদের জনসাধারণের সেবার উদ্দেশ্যে বাংলাদেশ সেনাবাহিনী শক্তিশালী করতে নিবিড় একটি সহযোগিতা তুলনে সেনাবাহিনী প্রধান এর এই সফরটি গুরুত্ব পরিলক্ষিত হয়েছে।
                        </p>
                        <p class="text-base mb-4">
                            উল্লেখ্য, জেনারেল অধিকরন বিশ্ববিদ্যালয় ও বর্তমান বাংলাদেশ সেনাবাহিনীর ০৫ টি শক্তিশালী শাখাগুলি বিশাল নিয়োজিত রয়েছে। এছাড়া, ২০১৪ সাল হতে আজাবধি ১৬১২ জন সেনাদলের শান্তিরক্ষী হিসাবে দায়িত্ব পালন এবং অধিকতর সহযোগিতা ৫৮ দেশে শান্তিপূর্ণ কার্যক্রমে নিয়োজিত অবস্থায় ১৭ জন সেনাসদস্য জীবন উৎসর্গ করেছেন।
                        </p>
                        <p class="text-sm text-gray-600 mt-6">
                            সংবাদ বিজ্ঞপ্তি, বাংলাদেশ আর্মি
                        </p>
                    </div>

                    <!-- Tags -->
                    <div class="flex flex-wrap mt-6 space-x-2">
                        <a href="#" class="px-4 py-1 bg-blue-100 text-blue-800 rounded-md text-sm">শান্তিরক্ষা মিশন</a>
                        <a href="#" class="px-4 py-1 bg-blue-100 text-blue-800 rounded-md text-sm">বাংলাদেশ আর্মি</a>
                        <a href="#" class="px-4 py-1 bg-blue-100 text-blue-800 rounded-md text-sm">সেনাবাহিনী প্রধান</a>
                    </div>

                    <!-- Comments Section -->
                    <div class="mt-8 bg-gray-100 p-4 rounded-md">
                        <div class="border-b border-gray-300 pb-2 mb-4">
                            <h3 class="text-red-600 font-bold flex items-center">
                                <span class="bg-red-600 w-4 h-4 inline-block mr-2"></span>
                                মন্তব্য করুন:
                            </h3>
                        </div>

                        <div class="mb-4">
                            <p class="text-sm text-gray-600">0 comments</p>
                            <div class="text-right">
                                <span class="text-sm">Sort by: </span>
                                <select class="text-sm border border-gray-300 rounded px-2 py-1">
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex mt-4">
                            <div class="w-10 h-10 bg-gray-300 rounded-full mr-2"></div>
                            <input type="text" placeholder="Add a comment..." class="w-full border border-gray-300 rounded p-2">
                        </div>

                        <div class="mt-4">
                            <p class="text-sm text-blue-600">Facebook Comments plugin</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full lg:w-4/12 px-4">
                <div class="border border-gray-200 rounded-md overflow-hidden mb-6">
                    <h3 class="bg-red-600 text-white py-2 px-4 font-medium">সর্বশেষ</h3>

                    <div class="divide-y divide-gray-200 overflow-y-auto" style="max-height: 400px;">
                        @foreach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $index)
                        <div class="flex p-2 hover:bg-gray-100">
                            <div class="w-1/3 pr-2">
                                <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News thumbnail" class="w-full h-auto">
                            </div>
                            <div class="w-2/3">
                                <p class="text-sm font-medium">প্রধান টুর্না ৫ দিন সাবধানী দৃষ্টি</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- More News Section -->
                <div class="border border-gray-200 rounded-md overflow-hidden">
                    <h3 class="bg-red-600 text-white py-2 px-4 font-medium">সর্বাধিক</h3>

                    <div class="divide-y divide-gray-200 overflow-y-auto" style="max-height: 400px;">
                        @foreach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $index)
                        <div class="flex p-2 hover:bg-gray-100">
                            <div class="w-1/3 pr-2">
                                <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News thumbnail" class="w-full h-auto">
                            </div>
                            <div class="w-2/3">
                                <p class="text-sm font-medium">প্রধান টুর্না ৫ দিন সাবধানী দৃষ্টি</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Related News Section -->
        <div class="px-4 mt-8 mb-8">
            <h2 class="text-lg font-bold border-b border-gray-300 pb-2 mb-4">সম্পর্কিত খবর</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Related News 1 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">জনতার সুরক্ষা মাথায় রেখে মহড়ার সমাপ্তি ইউনাইটেড উইং্রিপিং হ...</h3>
                    </div>
                </div>

                <!-- Related News 2 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">সেনাবাহিনীর রেজিমেন্টে আর্টিলারিক্যাল হয়েছে সেনাভবন</h3>
                    </div>
                </div>

                <!-- Related News 3 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">সেনার চলমান পার্বত্যচুক্তি অতিরিক্ত বল প্রয়োগ না করার অনুরোধ স...</h3>
                    </div>
                </div>

                <!-- Related News 4 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">সেনাবাহিনী প্রধানের মুক্তো সফর</h3>
                    </div>
                </div>

                <!-- Related News 5 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">সেনাপ্রধানের এর সাথে যুক্তরাষ্ট্র রাষ্ট্র দূত আলোচনা এর...</h3>
                    </div>
                </div>

                <!-- Related News 6 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">ঢাকা আন্তর্জাতিক ম্যারাথন-২০২৪ অনুষ্ঠিত</h3>
                    </div>
                </div>

                <!-- Related News 7 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">শহীদ সেনাসদস্য তারিকুল হত্যা মামলার দুঃখ প্রকাশ করেছেন</h3>
                    </div>
                </div>

                <!-- Related News 8 -->
                <div class="border border-gray-200 rounded overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Related news" class="w-full h-auto">
                    <div class="p-2">
                        <h3 class="text-sm font-medium">যুদ্ধ পরিষদ সহ ৭৮জনের অভিযোগে সেনাবাহিনীর হাতে আটক ৮</h3>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 py-8 border-t mt-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Publisher Info -->
                <div class="mb-4 md:mb-0">
                    <p class="font-bold mb-2">প্রধান সম্পাদক ও প্রকাশক</p>
                    <h3 class="text-xl font-bold">মুহাম্মদ জাহিদ আলী চৌধুরী</h3>
                </div>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-4 md:mb-0">
                    <a href="#" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                        </svg>
                    </a>
                    <a href="#" class="bg-blue-400 text-white p-2 rounded-full hover:bg-blue-500">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                        </svg>
                    </a>
                    <a href="#" class="bg-red-600 text-white p-2 rounded-full hover:bg-red-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.2 7.6s-.2-1.5-.9-2.2c-.9-.9-1.9-.9-2.3-1C17.1 4 12 4 12 4s-5.1 0-8 .4c-.4.1-1.4.1-2.3 1-.7.7-.9 2.2-.9 2.2S.5 9.3.5 11v1.8c0 1.7.2 3.4.2 3.4s.2 1.5.9 2.2c.9.9 2 .9 2.5 1 1.8.2 7.9.2 7.9.2s5.1 0 8-.4c.4-.1 1.4-.1 2.3-1 .7-.7.9-2.2.9-2.2s.2-1.7.2-3.4V11c0-1.7-.2-3.4-.2-3.4z" />
                        </svg>
                    </a>
                    <a href="#" class="bg-pink-600 text-white p-2 rounded-full hover:bg-pink-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="bg-blue-800 text-white p-2 rounded-full hover:bg-blue-900">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                        </svg>
                    </a>
                </div>

                <!-- Contact Info -->
                <div class="text-center md:text-right">
                    <p>১৯ কর্নেল রোড, নেভি-৪, প্লট নম্বর সিটিং, সুত্রাপুর,</p>
                    <p>ঢাকা-১২১৪</p>
                    <p>ajbarta24@gmail.com</p>
                    <p>01911444228</p>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-8 text-sm text-gray-600">
                <p>কপিরাইট © ২০২৫ ajbarta.com। সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Handle social share buttons
            const shareButtons = document.querySelectorAll('.social-share');
            shareButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    // In a real implementation, this would open share dialogs
                    console.log('Share clicked:', this.dataset.platform);
                });
            });

            // Handle comment form
            const commentForm = document.querySelector('input[placeholder="Add a comment..."]');
            if (commentForm) {
                commentForm.addEventListener('focus', function() {
                    console.log('Comment form focused');
                });
            }

            // Handle pagination
            const paginationButtons = document.querySelectorAll('.pagination button');
            paginationButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('Pagination clicked');
                });
            });
        });
    </script>
    <script>
        // Mobile menu toggle functionality
        const menuToggle = document.getElementById('menuToggle');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.remove('-translate-x-full');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('-translate-x-full');
        });
    </script>

</body>
@include("components/bootstrapscript")

</html>