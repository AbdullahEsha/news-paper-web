<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আজবার্তা - Bengali News Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
        }

        .logo {
            font-weight: 700;
            font-size: 2.5rem;
        }
    </style>
</head>

<body>
    <!-- Top header with date and logo -->
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

    <!-- Main content area (placeholder) -->
    <main class="container mx-auto px-4 pb-8">
        <div class="bg-yellow-300 py-6">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <!-- Title -->
                    <h1 class="text-2xl font-bold text-center flex-1">
                        Reserved for Advertisements or Banner
                    </h1>
                </div>
            </div>
        </div>
        <!-- News Content -->
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 divide-x divide-gray-400 bg-yellow-50 py-6 px-4 border-b border-gray-400 mb-6">
                <!-- Main News -->
                <div class=" lg:col-span-2 overflow-hidden">
                    <div class="flex flex-col md:flex-row md:item-center gap-3">
                        <div class="md:w-3/5">
                            <h2 class="text-md font-bold mb-3 line-clamp-2">লাহ্যে রোহিঙ্গা নিয়ে ইউএনজি করবেন জাতিসংঘের মহাসচিব ও প্রধান উপদেষ্টা</h2>
                            <p class="text-gray-600 text-sm line-clamp-4">মাননীয়দের বহুপক্ষীয় (১৬ মার্চ) বিকেলে বাংলাদেশ সফরে আসছেন জাতিসংঘ মহাসচিব ও উপদেষ্টা। পরদিন প্রধান উপদেষ্টার চিঠি পরপরমালে সাক্ষাৎ। দুঃসময় রোহিঙ্গা ব্যাপক পরিবর্তন, মাননীয়দের বহুপক্ষীয় (১৬ মার্চ) বিকেলে বাংলাদেশ সফরে আসছেন জাতিসংঘ মহাসচিব ও উপদেষ্টা। পরদিন প্রধান উপদেষ্টার চিঠি পরপরমালে সাক্ষাৎ। দুঃসময় রোহিঙ্গা ব্যাপক পরিবর্তন</p>
                        </div>
                        <div class="md:w-2/5 overflow-hidden">
                            <img src="https://www.ajbarta.com/uploads/ab-bd-17-3-20250317163938.jpg" alt="UN Secretary General" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300 ease-in-out animate-zoomIn">
                        </div>
                    </div>
                </div>
                <!-- Right Side News -->
                <div class="space-y-4 pl-4">
                    @foreach([1, 2] as $index)
                    <div class=" flex space-x-4">
                        <div>
                            <h3 class="text-sm font-bold mb-2">বাংলাদেশের তথ্য বিষয়ক, আইনে পাওয়া যায় প্রধান উপদেষ্টা</h3>
                        </div>
                        <div class="w-14 h-14 flex-shrink-0 overflow-hidden">
                            <img src="https://www.ajbarta.com/uploads/ab-yunus-12-3-20250312165613.jpg" alt="News" class="w-14 h-14 object-cover hover:scale-110 transition-transform duration-300 ease-in-out animate-zoomIn">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="space-y-4 pl-4">
                    @foreach([1, 2] as $index)
                    <div class="flex space-x-4">
                        <div>
                            <h3 class="text-sm font-bold mb-2">বাংলাদেশের তথ্য বিষয়ক, আইনে পাওয়া যায় প্রধান উপদেষ্টা</h3>
                        </div>
                        <div class="w-14 h-14 flex-shrink-0 overflow-hidden">
                            <img src="https://www.ajbarta.com/uploads/ab-yunus-12-3-20250312165613.jpg" alt="News" class="w-14 h-14 object-cover hover:scale-110 transition-transform duration-300 ease-in-out animate-zoomIn">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Politics section -->
            <div class="col-span-1 border-r border-gray-400">
                <div class="bg-orange-500 text-white font-semibold py-2 px-4 mr-4 rounded-t-md">
                    রাজনীতি
                </div>
                <div class="divide-y divide-gray-400">
                    @foreach([1, 2, 3] as $index)
                    <div class="bg-white p-4">
                        <div class="flex flex-col space-y-3">
                            <div class="flex space-x-3">
                                <div class="flex-1">
                                    <h3 class="font-bold text-md line-clamp-2">সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু</h3>
                                    <p class="mt-1 text-xs line-clamp-3">সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু। সরকারি দলের মামলায় সেন্সুর করলেও গোপনীয়ে বিরোধীর মতপ্রকাশ গোপনীয়ভাবে তাকেই প্রহরণীয় সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু। সরকারি দলের মামলায় সেন্সুর করলেও গোপনীয়ে বিরোধীর মতপ্রকাশ গোপনীয়ভাবে তাকেই প্রহরণীয়</p>
                                </div>
                                <div class="w-24 h-24 flex-shrink-0 overflow-hidden">
                                    <img
                                        src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="News thumbnail"
                                        class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-110 animate-zoomIn">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Middle column - main news -->
            <div class="col-span-1 md:col-span-1">
                <!-- Main news item -->
                <div class="bg-white">
                    <!-- image -->
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="News thumbnail" class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-110 animate-zoomIn">
                        <div class="absolute bottom-0 left-0 bg-red-500 text-white px-2 py-1">
                            জাতীয় সংসদে নির্বাচন
                        </div>
                    </div>
                    <h2 class="font-bold text-xl my-2 line-clamp-2">গণজাগরণ মঞ্চের লাঠিকে শ্রেষ্ঠসহ শীট দাবিতে শাহবাগে ইনকিলাব মঞ্চ</h2>
                    <p class="text-sm line-clamp-4">গণজাগরণ মঞ্চের ভাষ্যমতে গণতান্ত্রিক শান্তি আন্দোলন ও ইনকিলাবের সোচ্চারে প্রতিষ্ঠা। উভয় মঞ্চের সমর্থকদের নিয়ে নিম্নোক্ত, মঞ্চের ভাষ্যমতে গণতান্ত্রিক শান্তি আন্দোলন ও ইনকিলাবের সোচ্চারে প্রতিষ্ঠা। উভয় মঞ্চের সমর্থকদের নিয়ে নিম্নোক্ত</p>
                </div>
            </div>

            <!-- Right column - Foreign Affairs -->
            <div class="col-span-1 border-l border-gray-400">
                <div class="bg-red-800 text-white font-semibold py-2 px-4 ml-4 rounded-t-md">
                    বৈদেশিক অর্থনীতি
                </div>
                <div class="divide-y divide-gray-400">
                    @foreach([1, 2, 3] as $index)
                    <div class="bg-white p-4">
                        <div class="flex flex-col space-y-3">
                            <div class="flex space-x-3">
                                <div class="flex-1">
                                    <h3 class="font-bold text-md line-clamp-2">সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু</h3>
                                    <p class="mt-1 text-xs line-clamp-3">সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু। সরকারি দলের মামলায় সেন্সুর করলেও গোপনীয়ে বিরোধীর মতপ্রকাশ গোপনীয়ভাবে তাকেই প্রহরণীয় সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু। সরকারি দলের মামলায় সেন্সুর করলেও গোপনীয়ে বিরোধীর মতপ্রকাশ গোপনীয়ভাবে তাকেই প্রহরণীয়</p>
                                </div>
                                <div class="w-24 h-24 flex-shrink-0 overflow-hidden">
                                    <img
                                        src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="News thumbnail"
                                        class="w-full h-full object-cover transition-transform duration-300 ease-in-out hover:scale-110 animate-zoomIn">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Four Column News Grid -->
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                <!-- Election news -->
                <div class="h-full w-full bg-yellow-300 p-4">
                    <h4 class="text-xl font-bold">
                        Banneer or Advertisement
                    </h4>
                </div>

                <!-- Oil news -->
                <div class="bg-white border border-gray-200">
                    <div class="flex flex-col p-4">
                        <div class="overflow-hidden mb-3">
                            <img
                                src="https://images.unsplash.com/photo-1532939163844-547f958e91b4?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3"
                                alt="Oil news image"
                                class="w-full h-32 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        </div>
                        <h3 class="font-bold text-lg">অস্ত্র তৈরি ও বক্তৃতাদিতে আবারও শীর্ষ যুক্তরাষ্ট্র</h3>
                    </div>
                </div>

                <!-- Sports news -->
                <div class="bg-white border border-gray-200">
                    <div class="flex flex-col p-4">
                        <div class="overflow-hidden mb-3">
                            <img
                                src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                                alt="Sports news image"
                                class="w-full h-32 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        </div>
                        <h3 class="font-bold text-lg">সকালে ছিলেন হাসপাতালে, রাতে সাপোর্টোনাল জয়ের নায়ক বার্সেলোনা</h3>
                    </div>
                </div>

                <!-- Train accident news -->
                <div class="bg-white border border-gray-200">
                    <div class="flex flex-col p-4">
                        <div class="overflow-hidden mb-3">
                            <img
                                src="https://images.unsplash.com/photo-1474487548417-781cb71495f3?q=80&w=1484&auto=format&fit=crop&ixlib=rb-4.0.3"
                                alt="Train accident image"
                                class="w-full h-32 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        </div>
                        <h3 class="font-bold text-lg">পাকিস্তানে ট্রেন জিপি: দেড় শতাধিক যাত্রী উদ্ধার, মিলল ২৭ ডিজিটাইজড</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bangladesh and Politics Section -->
        <div class="container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left and Middle Sections (span 2 columns) -->
                <div class="lg:col-span-2 space-y-6">

                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">বাংলাদেশ</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <!-- Main Featured Article -->
                    <div class="overflow-hidden">
                        <div class="overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1551817958-20204d6ab212?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                                alt="Military personnel"
                                class="w-full h-64 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        </div>
                        <div class="py-4">
                            <h1 class="text-2xl font-bold mb-2 line-clamp-2">সশস্ত্র বাহিনীর ম্যাজিস্ট্রেসি ক্ষমতা আরো দুই মাস বাড়াল সরকার সশস্ত্র বাহিনীর ম্যাজিস্ট্রেসি ক্ষমতা আরো দুই মাস বাড়াল সরকার</h1>
                            <p class="text-gray-600 line-clamp-3">
                                বাংলাদেশ সশস্ত্র বাহিনীতে কর্মরত সেনাসদস্যদের ম্যাজিস্ট্রেট ও ভ্রাম্যমাণ আদালতের ক্ষমতাপ্রাপ্ত কর্মকর্তাদের মেয়াদ আরও দুই মাস বাড়ানো
                                হয়েছে বাংলাদেশ সশস্ত্র বাহিনীতে কর্মরত সেনাসদস্যদের ম্যাজিস্ট্রেট ও ভ্রাম্যমাণ আদালতের ক্ষমতাপ্রাপ্ত কর্মকর্তাদের মেয়াদ আরও দুই মাস বাড়ানো হয়েছে
                            </p>
                        </div>
                    </div>

                    <!-- News Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach([1, 2, 3, 4] as $index)
                        <div class="">
                            <div class="overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="News Item 1"
                                    class="w-full h-32 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                            </div>
                            <div class="py-2">
                                <h3 class="font-bold text-sm line-clamp-3">বাংলাদেশ নিয়ে ভারত মন্ত্রীর বক্তব্য</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">রাজনীতি</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    @foreach([1, 2, 3, 4, 5, 6] as $index)
                    <div class="flex space-x-4">
                        <div class="w-20 h-20 flex-shrink-0 overflow-hidden rounded">
                            <img
                                src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Profile"
                                class="w-20 h-20 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        </div>
                        <div>
                            <h3 class="font-bold mb-1">সুন্দরের মাঝারে বেকসুর খালাসে পেলেন মিয়া নূর উদ্দিন সুজু</h3>
                            <p class="text-sm text-gray-600">সুন্দরের মাঝারে বেকসুর খালাসে পেলেন মিয়া নূর উদ্দিন সুজু...</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- World and Opinion Section -->
        <div class="container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column - Main Article -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <h2 class="text-xl font-bold">বিশ্ব</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1551817958-20204d6ab212?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Nuclear facility"
                            class="w-full h-64 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                    </div>
                    <div class="pt-4">
                        <h1 class="text-2xl font-bold mb-3 line-clamp-2">পারমাণবিক সংকট: আলোচনায় বসছে চীন, রাশিয়া ও ইরান পারমাণবিক সংকট: আলোচনায় বসছে চীন, রাশিয়া ও ইরান</h1>
                        <p class="text-gray-600 line-clamp-4">
                            পারমাণবিক সংকট নিয়ে বৈঠকে বসছে ইরান, রাশিয়া ও চীন। আলোচনায় ভবিষ্যৎ ১৫ মার্চ বৈঠকের পূর্বে অনুষ্ঠিত হবে। সেখানে ইরানের
                            কথা পারমাণবিক সংকট নিয়ে বৈঠকে বসছে ইরান, রাশিয়া ও চীন। আলোচনায় ভবিষ্যৎ ১৫ মার্চ বৈঠকের পূর্বে অনুষ্ঠিত হবে। সেখানে ইরানের
                            কথা
                        </p>
                    </div>
                </div>

                <!-- Right Column - News List -->
                <div class="border-l border-gray-400">
                    <div class="flex items-center space-x-2 px-4">
                        <h2 class="text-xl font-bold">মতামত</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="divide-y divide-gray-400">
                        @foreach([1, 2, 3, 4] as $index)
                        <div class="flex gap-4 justify-between p-4">
                            <div>
                                <h3 class="font-bold mb-2">মধ্য সমাধানে মতভেদটাই কারণ যে মর্মে নির্দেশে রাশিয়া মধ্য সমাধানে মতভেদটাই কারণ যে মর্মে নির্দেশে রাশিয়া</h3>
                                <p class="text-sm text-gray-600">রাশিয়ার প্রেসিডেন্ট ভ্লাদিমির পুতিন নতুন বিবৃতি দিয়েছেন রাশিয়ার প্রেসিডেন্ট ভ্লাদিমির পুতিন নতুন বিবৃতি দিয়েছেন</p>
                            </div>
                            <div class="w-24 h-24 flex-shrink-0 overflow-hidden rounded">
                                <img
                                    src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                                    alt="Putin"
                                    class="w-24 h-24 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Gallery Grid -->
        <div class="bg-gray-900 text-white py-8 px-4 md:px-8">
            <!-- Video Section Header -->
            <div class="flex items-center mb-4">
                <h2 class="text-xl font-bold mr-2">ভিডিও</h2>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <!-- Video Gallery Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <!-- Main Featured Video (Larger) -->
                <div class="relative group cursor-pointer overflow-hidden col-span-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1532939163844-547f958e91b4?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3" alt="আওয়ামীলীগের মন্ত্রি-এমপি" class="h-full w-full object-cover aspect-video">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full p-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Yellow Banner -->
                    <div class="absolute top-1/3 left-0 bg-yellow-500 text-black px-4 py-1 font-bold text-lg">
                        সব তুয়া মন্ত্রিযোদ্ধা
                    </div>

                    <!-- Title at Bottom -->
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-xl font-bold">আওয়ামীলীগের মন্ত্রি-এমপি সহ প্রায় নব্বই তুয়া মুক্তিযোদ্ধা</h3>
                    </div>
                </div>

                <!-- Right Side Videos (2x2 Grid) -->
                <div class="grid grid-cols-2 gap-4 col-span-2">
                    <!-- Video 1 -->
                    @foreach([1, 2, 3, 4] as $index)
                    <div class="relative group cursor-pointer overflow-hidden">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1521295121783-8a321d551ad2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="ঢাকায় গণতন্ত্র" class="w-full h-auto object-cover aspect-video">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full p-1 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="absolute top-2 right-2 bg-white text-black text-xs px-2 py-1 rounded">Exclusive</div>
                            <p class="text-sm absolute bottom-0 left-0 right-0 p-2 bg-black/70 text-white">
                                এবং টাকায় দখলের দখল করতে চেয়েছিল পার্টির ৭...
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Category News Sections -->
        <div class="container mx-auto px-4 py-6">

            <!-- News Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Defense News Section -->
                <div class="space-y-4">
                    <!-- Category Header -->
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">ডিফেন্স নিউজ</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>

                    <!-- Main News -->
                    <div class="overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1579912437766-7896df6d3cd3?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Defense News"
                            class="w-full h-48 object-cover hover:scale-110 transition-transform duration-300 ease-in-out bg-gray-200" />
                        <h3 class="font-normal text-sm absolute bottom-0 left-0 right-0 p-4 text-white">
                            ভারতের দুর্বলে মহড়ায় বিশ্ব মহলের প্রাধান্য তুলনীয় উন্নয়িত হচ্ছে: আইএনএসপি
                        </h3>
                    </div>

                    <!-- Secondary News Items -->
                    <div class="space-y-4">
                        @foreach([1, 2] as $index)
                        <div class="flex space-x-3">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1579912437766-7896df6d3cd3?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=1"
                                    alt="Military News"
                                    class="w-20 h-20 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                            </div>
                            <h4 class="font-bold text-sm flex-1">শান্তিরক্ষী মিশন এলাকায় সেনানী অভিযান নিরাপত্তায় পদক্ষেপ</h4>
                        </div>
                        @endforeach
                    </div>

                    <!-- More Link -->
                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">
                            আরও →
                        </a>
                    </div>
                </div>

                <!-- Business Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">বাণিজ্য</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>


                    <div class="overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Business News"
                            class="w-full h-48 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        <h3 class="font-normal text-sm absolute bottom-0 left-0 right-0 p-4 text-white">
                            পাকিস্তান-বাংলাদেশ ব্যবসায়িক সম্পর্ক জোরদার
                        </h3>
                    </div>

                    <div class="space-y-4">
                        @foreach([1, 2] as $index)
                        <div class="flex space-x-3">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=1"
                                    alt="Business News"
                                    class="w-20 h-20 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                            </div>
                            <h4 class="font-bold text-sm flex-1">চীন-রফতানি বাণিজ্যিকরণ সুবিধা পাচ্ছে বাংলাদেশ</h4>
                        </div>
                        @endforeach
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">
                            আরও →
                        </a>
                    </div>
                </div>

                <!-- Law & Rights Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">আইন ও অধিকার</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>

                    <div class="overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Law News"
                            class="w-full h-48 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        <h3 class="font-normal text-sm absolute bottom-0 left-0 right-0 p-4 text-white">
                            আইন মন্ত্রী ও হাইকমিশন বিচার ও নিলয় মধ্যে এক আইন ও দায়রা
                        </h3>
                    </div>

                    <div class="space-y-4">
                        @foreach([1, 2] as $index)
                        <div class="flex space-x-3">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=1"
                                    alt="Law News"
                                    class="w-20 h-20 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                            </div>
                            <h4 class="font-bold text-sm flex-1">হাসিনা-ইমরান এইচ সরকারসহ ৯ জনের বিরুদ্ধে গ্রেপ্তারি পরোয়ানা</h4>
                        </div>
                        @endforeach
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">
                            আরও →
                        </a>
                    </div>
                </div>

                <!-- Expatriate Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">প্রবাস</h2>
                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <div class="overflow-hidden relative">
                        <img
                            src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=1474&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Expatriate News"
                            class="w-full h-48 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                        <h3 class="font-normal text-sm absolute bottom-0 left-0 right-0 p-4 text-white">
                            ২৭১ অবৈধ বাংলাদেশি ফিরলেন সিরিয়া থেকে
                        </h3>
                    </div>

                    <div class="space-y-4">
                        @foreach([1, 2] as $index)
                        <div class="flex space-x-3">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden">
                                <img
                                    src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=1474&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=1"
                                    alt="Expatriate News"
                                    class="w-20 h-20 object-cover hover:scale-110 transition-transform duration-300 ease-in-out" />
                            </div>
                            <h4 class="font-bold text-sm flex-1">লন্ডনে ৬০ কোটি টাকা খরচ করে এলেন একজন বাংলাদেশি</h4>
                        </div>
                        @endforeach
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">
                            আরও →
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
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

</html>
