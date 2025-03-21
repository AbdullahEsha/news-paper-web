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
        <div class="bg-yellow-300 py-2">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <!-- Title -->
                    <h1 class="text-2xl font-bold text-center flex-1">অন্তর্বর্তী সরকারের কার্যক্রম</h1>
                </div>
            </div>
        </div>
        <!-- News Content -->
        <div class="container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Main News -->
                <div class="lg:col-span-2 bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row md:item-center">
                        <div class="p-4 md:w-3/5">
                            <h2 class="text-md font-bold mb-3">লাহ্যে রোহিঙ্গা নিয়ে ইউএনজি করবেন জাতিসংঘের মহাসচিব ও প্রধান উপদেষ্টা</h2>
                            <p class="text-gray-600 text-sm">মাননীয়দের বহুপক্ষীয় (১৬ মার্চ) বিকেলে বাংলাদেশ সফরে আসছেন জাতিসংঘ মহাসচিব ও উপদেষ্টা। পরদিন প্রধান উপদেষ্টার চিঠি পরপরমালে সাক্ষাৎ। দুঃসময় রোহিঙ্গা ব্যাপক পরিবর্তন</p>
                        </div>
                        <div class="md:w-2/5">
                            <img src="https://www.ajbarta.com/uploads/ab-bd-17-3-20250317163938.jpg" alt="UN Secretary General" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <!-- Right Side News -->
                <div class="space-y-4">
                    <!-- News Item 1 -->
                    <div class="bg-white p-3 shadow-md rounded-lg flex space-x-4">
                        <div>
                            <h3 class="text-xs font-bold mb-2">বাংলাদেশের তথ্য বিষয়ক, আইনে পাওয়া যায় প্রধান উপদেষ্টা</h3>
                        </div>
                        <img src="https://www.ajbarta.com/uploads/ab-yunus-12-3-20250312165613.jpg" alt="News" class="w-14 h-14 object-cover rounded">
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white p-3 shadow-md rounded-lg flex space-x-4">
                        <div>
                            <h3 class="text-xs font-bold mb-2">বাংলাদেশের তথ্য বিষয়ক, আইনে পাওয়া যায় প্রধান উপদেষ্টা</h3>
                        </div>
                        <img src="https://www.ajbarta.com/uploads/ab-yunus-12-3-20250312165613.jpg" alt="News" class="w-14 h-14 object-cover rounded">
                    </div>
                </div>
                <div class="space-y-4">
                    <!-- News Item 1 -->
                    <div class="bg-white p-3 shadow-md rounded-lg flex space-x-4">
                        <div>
                            <h3 class="text-xs font-bold mb-2">বাংলাদেশের তথ্য বিষয়ক, আইনে পাওয়া যায় প্রধান উপদেষ্টা</h3>
                        </div>
                        <img src="https://www.ajbarta.com/uploads/ab-yunus-12-3-20250312165613.jpg" alt="News" class="w-14 h-14 object-cover rounded">
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white p-3 shadow-md rounded-lg flex space-x-4">
                        <div>
                            <h3 class="text-xs font-bold mb-2">বাংলাদেশের তথ্য বিষয়ক, আইনে পাওয়া যায় প্রধান উপদেষ্টা</h3>
                        </div>
                        <img src="https://www.ajbarta.com/uploads/ab-yunus-12-3-20250312165613.jpg" alt="News" class="w-14 h-14 object-cover rounded">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Politics section -->
            <div class="col-span-1">
                <div class="bg-orange-500 text-white font-semibold py-2 px-4 rounded-t-md">
                    রাজনীতি
                </div>
                <div class="bg-white p-4 shadow-md mb-4">
                    <div class="flex flex-col space-y-3">
                        <div class="flex space-x-3">
                            <div class="flex-1">
                                <h3 class="font-bold text-md ">সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু</h3>
                                <p class="mt-1 text-xs">সুন্দরের মাঝারে বেকসুর আদালে পেলেন মিয়া নুর উদ্দিন সুজু। সরকারি দলের মামলায় সেন্সুর করলেও গোপনীয়ে বিরোধীর মতপ্রকাশ গোপনীয়ভাবে তাকেই প্রহরণীয়...</p>
                            </div>
                            <div class="w-24 h-24 flex-shrink-0">
                                <img src="https://www.ajbarta.com/uploads/ab-bnp-20-3-20250320173143.jpg" alt="News thumbnail" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second news item in politics -->
                <div class="bg-white p-4 shadow-md">
                    <div class="flex flex-col space-y-3">
                        <div class="flex space-x-3">
                            <div class="flex-1">
                                <h3 class="font-bold text-lg ">ওয়ারফন্ড কাপ্তেনের কমিটিতে নাফিকা-নেবীদের তালিকা ভাইরাল</h3>
                                <p class="text-sm mt-1 ">বাংলাদেশ ক্রিকেট বোর্ড-বিসিবি'র পক্ষ-বিপক্ষে বাংলাদেশের মূল পক্ষে যা বা প্রাপ্তি নিয়া সরকারের। সেই সঙ্গে পাকিস্তান পক্ষের কমিটি এবার ও সকল...</p>
                            </div>
                            <div class="w-24 h-24 flex-shrink-0">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="News thumbnail" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle column - main news -->
            <div class="col-span-1 md:col-span-1">
                <!-- Main news item -->
                <div class="bg-white p-4 shadow-md mb-4">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="Main news image" class="w-full h-48 object-cover mb-3">
                    <h2 class="font-bold text-xl mb-2">গণজাগরণ মঞ্চের লাঠিকে শ্রেষ্ঠসহ শীট দাবিতে শাহবাগে ইনকিলাব মঞ্চ</h2>
                    <p class="text-sm ">গণজাগরণ মঞ্চের ভাষ্যমতে গণতান্ত্রিক শান্তি আন্দোলন ও ইনকিলাবের সোচ্চারে প্রতিষ্ঠা। উভয় মঞ্চের সমর্থকদের নিয়ে নিম্নোক্ত...</p>
                </div>
            </div>

            <!-- Right column -->
            <div class="col-span-1">
                <!-- International news section -->
                <div class="bg-red-800 text-white font-semibold py-2 px-4 rounded-t-md">
                    বৈদেশিক অর্থনীতি
                </div>
                <div class="bg-white p-4 shadow-md mb-4">
                    <div class="flex space-x-3">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">ভোটারে মানুষকে লোভা রাখতেই শেষ হরিণা</h3>
                            <p class="text-sm mt-1 ">নতুন এবং পুরনো লাইনের মানুষদের শেষ হরিণা সবার দিকেই হাতিয়া না সবার। সিটিকার লাভে শেষ হরিণা ১৯৯১ সালে বসন্ত...</p>
                        </div>
                        <div class="w-24 h-24 flex-shrink-0">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="News thumbnail" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Political news -->
                <div class="bg-white p-4 shadow-md mb-4">
                    <div class="flex space-x-3">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">রাজনৈতিক ছত্রছায়া চৌধুরী নাসিম সুলায়মানের স্যাপাসিটি "দুর্নীতি"</h3>
                            <p class="text-sm mt-1 ">"এমন দশটি ওটি কোম্পানীতে তার বিনিয়োগের তথ্য পাওয়া গেছে। এছাড়া দেশ-বিদেশে তার কয়েক সম্পত্তির খোঁজ মিলেছে..."</p>
                        </div>
                        <div class="w-24 h-24 flex-shrink-0">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="News thumbnail" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Railway news -->
                <div class="bg-white p-4 shadow-md">
                    <div class="flex space-x-3">
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">তৃতীয় শ্রেণির কর্মচারীর চোখ বাঁধানো সম্পদ</h3>
                            <p class="text-sm mt-1 ">চিহ্নিত হওয়ায় কর্মচারীর ক্যাটাগরিতে ১৭ বছর আগেই এই পদে নিয়োগ পান। এর বর্তমান পদ পশ্চিমে নিয়োগ পাওয়া সেই কর্মচারীর পদ। র...</p>
                        </div>
                        <div class="w-24 h-24 flex-shrink-0">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="News thumbnail" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom news row -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
            <!-- Election news -->
            <div class="bg-white p-4 shadow-md">
                <div class="flex space-x-3">
                    <div class="flex-1">
                        <h3 class="font-bold text-lg">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি : ওয়াসুল আবেদিন ফারুক</h3>
                        <p class="text-sm mt-1 ">জাতীয় সংসদে নির্বাচন বিলয় করতে টেকনোক্র্যাটদের মূল রাজনৈতিক দলা জাতীয় নাগরিক পার্টি (এনসিপি) গোপাল করছে বলে...</p>
                    </div>
                    <div class="w-24 h-24 flex-shrink-0">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="News thumbnail" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Oil news -->
            <div class="bg-white p-4 shadow-md">
                <div class="flex flex-col">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="Oil news image" class="w-full h-32 object-cover mb-3">
                    <h3 class="font-bold text-lg">অস্ত্র তৈরি ও বক্তৃতাদিতে আবারও শীর্ষ যুক্তরাষ্ট্র</h3>
                </div>
            </div>

            <!-- Sports news -->
            <div class="bg-white p-4 shadow-md">
                <div class="flex flex-col">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="Sports news image" class="w-full h-32 object-cover mb-3">
                    <h3 class="font-bold text-lg">সকালে ছিলেন হাসপাতালে, রাতে সাপোর্টোনাল জয়ের নায়ক বার্সেলোনা</h3>
                </div>
            </div>

            <!-- Train accident news -->
            <div class="bg-white p-4 shadow-md">
                <div class="flex flex-col">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-Jm9LCQJ56J5Qxzf1AmwEDaDJ5ki77l.png" alt="Train accident image" class="w-full h-32 object-cover mb-3">
                    <h3 class="font-bold text-lg">পাকিস্তানে ট্রেন জিপি: দেড় শতাধিক যাত্রী উদ্ধার, মিলল ২৭ ডিজিটাইজড</h3>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left and Middle Sections (span 2 columns) -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Category Headers -->
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xl font-bold">বাংলাদেশ</h2>
                            <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xl font-bold">রাজনীতি</h2>
                            <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Main Featured Article -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Military personnel" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h1 class="text-2xl font-bold mb-2">সশস্ত্র বাহিনীর ম্যাজিস্ট্রেসি ক্ষমতা আরো দুই মাস বাড়াল সরকার</h1>
                            <p class="text-gray-600">বাংলাদেশ সশস্ত্র বাহিনীতে কর্মরত সেনাসদস্যদের ম্যাজিস্ট্রেট ও ভ্রাম্যমাণ আদালতের ক্ষমতাপ্রাপ্ত কর্মকর্তাদের মেয়াদ আরও দুই মাস বাড়ানো হয়েছে...</p>
                        </div>
                    </div>

                    <!-- News Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- News Item 1 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Foreign Ministry" class="w-full h-32 object-cover">
                            <div class="p-3">
                                <h3 class="font-bold text-sm ">বাংলাদেশ নিয়ে ভারত মন্ত্রীর বক্তব্য</h3>
                            </div>
                        </div>

                        <!-- News Item 2 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Bangladesh Flag" class="w-full h-32 object-cover">
                            <div class="p-3">
                                <h3 class="font-bold text-sm ">ঢাকা শহরে দ্রুত গতিতে হালকা বৃষ্টিপাত</h3>
                            </div>
                        </div>

                        <!-- News Item 3 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Crowd" class="w-full h-32 object-cover">
                            <div class="p-3">
                                <h3 class="font-bold text-sm ">গণভবনের মুখ্যের কার্যালয়ে প্রতিবাদকারী পাঁচ শত</h3>
                            </div>
                        </div>

                        <!-- News Item 4 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Political Leaders" class="w-full h-32 object-cover">
                            <div class="p-3">
                                <h3 class="font-bold text-sm ">লাহ্যে বৈঠকে নিয়ে ইউএস'র করণীয় জাতিসংঘ</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="space-y-4">
                    <!-- Sidebar News Item 1 -->
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Profile" class="w-20 h-20 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-1">সুন্দরের মাঝারে বেকসুর খালাসে পেলেন মিয়া নূর উদ্দিন সুজু</h3>
                                <p class="text-sm text-gray-600 ">সুন্দরের মাঝারে বেকসুর খালাসে পেলেন মিয়া নূর উদ্দিন সুজু...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar News Item 2 -->
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Profile" class="w-20 h-20 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-1">ওয়ারফন্ড কাপ্তেনের কমিটিতে নাফিকা-নেবীদের তালিকা ভাইরাল</h3>
                                <p class="text-sm text-gray-600 ">ওয়ারফন্ড কাপ্তেনের কমিটিতে নাফিকা-নেবীদের তালিকা ভাইরাল হয়েছে...</p>
                            </div>
                        </div>
                    </div>

                    <!-- More sidebar items... -->
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Profile" class="w-20 h-20 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-1">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি : ওয়াসুল আবেদিন ফারুক</h3>
                                <p class="text-sm text-gray-600 ">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি বলে জানালেন...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Profile" class="w-20 h-20 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-1">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি : ওয়াসুল আবেদিন ফারুক</h3>
                                <p class="text-sm text-gray-600 ">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি বলে জানালেন...</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ycVwx1963pcxBYdQGS8WGL0hHvM1S2.png" alt="Profile" class="w-20 h-20 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-1">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি : ওয়াসুল আবেদিন ফারুক</h3>
                                <p class="text-sm text-gray-600 ">নির্বাচন বিলয় করতে গোপাল করছে এনসিপি বলে জানালেন...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-6">
            <!-- Category Headers -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-2">
                    <h2 class="text-xl font-bold">বিশ্ব</h2>
                    <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
                <div class="flex items-center space-x-2">
                    <h2 class="text-xl font-bold">মতামত</h2>
                    <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column - Main Article -->
                <div>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7qZZEII4RJo0KykpNzxFwFiVwp13lh.png" alt="Nuclear facility" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h1 class="text-2xl font-bold mb-3">পারমাণবিক সংকট: আলোচনায় বসছে চীন, রাশিয়া ও ইরান</h1>
                            <p class="text-gray-600 ">পারমাণবিক সংকট নিয়ে বৈঠকে বসছে ইরান, রাশিয়া ও চীন। আলোচনায় ভবিষ্যৎ ১৫ মার্চ বৈঠকের পূর্বে অনুষ্ঠিত হবে। সেখানে ইরানের কথা...</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - News List -->
                <div class="space-y-4">
                    <!-- News Item 1 -->
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7qZZEII4RJo0KykpNzxFwFiVwp13lh.png" alt="Putin" class="w-24 h-24 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-2">মধ্য সমাধানে মতভেদটাই কারণ যে মর্মে নির্দেশে রাশিয়া</h3>
                                <p class="text-sm text-gray-600 ">রাশিয়ার প্রেসিডেন্ট ভ্লাদিমির পুতিন নতুন বিবৃতি দিয়েছেন...</p>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white p-4 shadow-md rounded-lg">
                        <div class="flex space-x-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7qZZEII4RJo0KykpNzxFwFiVwp13lh.png" alt="UK Parliament" class="w-24 h-24 object-cover rounded">
                            <div>
                                <h3 class="font-bold mb-2">যুক্তরাজ্য সরকার আমার নতুন ভিসায় গড় পরিবর্তন</h3>
                                <p class="text-sm text-gray-600 ">যুক্তরাজ্যের নতুন ভিসা নীতিমালা প্রকাশিত হয়েছে...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Opinion Section -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-bold text-lg mb-4">মতামত</h3>

                        <!-- Opinion Item 1 -->
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7qZZEII4RJo0KykpNzxFwFiVwp13lh.png" alt="Author" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold">হাসান মাহমুদ – একটি অসাধারণ সফল নির্বাচন, বেহায়া ও আপসহীন সত্য</h4>
                            </div>
                        </div>

                        <!-- Opinion Item 2 -->
                        <div class="flex items-center space-x-3 mb-4">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7qZZEII4RJo0KykpNzxFwFiVwp13lh.png" alt="Author" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold">ছাত্রলীগ নির্বাচন! এই ধারাবাহিকতায় নয়া সংঘর্ষ কী নিশ্চিত হতে পারে?</h4>
                            </div>
                        </div>

                        <!-- Opinion Item 3 -->
                        <div class="flex items-center space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-7qZZEII4RJo0KykpNzxFwFiVwp13lh.png" alt="Author" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold">পল্লী সমাজের নানা দিকে সুদূর সম্পদানা</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-6">
            <!-- News Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Defense News Section -->
                <div class="space-y-4">
                    <!-- Category Header -->
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">ডিফেন্স নিউজ</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <!-- Main News -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Defense News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">ভারতের দুর্বলে মহড়ায় বিশ্ব মহলের প্রাধান্য তুলনীয় উন্নয়িত হচ্ছে: আইএনএসপি</h3>
                        </div>
                    </div>

                    <!-- Secondary News Items -->
                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Military News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">শান্তিরক্ষী মিশন এলাকায় সেনানী অভিযান নিরাপত্তায় পদক্ষেপ</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Military News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">সেনাবাহিনীর বেতনভুক্ত অধিনায়ক হচ্ছেন সেনাপ্রধান</h4>
                        </div>
                    </div>

                    <!-- More Link -->
                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">আরও →</a>
                    </div>
                </div>

                <!-- Business Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">বাণিজ্য</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Business News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">পাকিস্তান-বাংলাদেশ ব্যবসায়িক সম্পর্ক জোরদার</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Business News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">চীন-রফতানি বাণিজ্যিকরণ সুবিধা পাচ্ছে বাংলাদেশ</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Business News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">এবার ইলন মাস্ক পাচ্ছে না নতুন টাকা</h4>
                        </div>
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">আরও →</a>
                    </div>
                </div>

                <!-- Law & Rights Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">আইন ও অধিকার</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Law News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">আইন মন্ত্রী ও হাইকমিশন বিচার ও নিলয় মধ্যে এক আইন ও দায়রা</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Law News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">হাসিনা-ইমরান এইচ সরকারসহ ৯ জনের বিরুদ্ধে গ্রেপ্তারি পরোয়ানা</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Law News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">শেষ হরিণা পরিবর্তনে প্রতি-মামলাসহ ১২৪ জামানত সদস্য জামিন</h4>
                        </div>
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">আরও →</a>
                    </div>
                </div>

                <!-- Expatriate Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">প্রবাস</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Expatriate News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">২৭১ অবৈধ বাংলাদেশি ফিরলেন সিরিয়া থেকে</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Expatriate News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">লন্ডনে ৬০ কোটি টাকা খরচ করে এলেন একজন বাংলাদেশি</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-0BwRHpRGRkdZBHYiftM7nk6cUbgWKE.png" alt="Expatriate News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">আমিরাতের সম্মেলন থেকেও সাংবাদিক এখন জিম্মি</h4>
                        </div>
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-red-500 hover:text-red-700 font-bold">আরও →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-6">
            <!-- News Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Region Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">অঞ্চল</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="Region News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">কুমিল্লা অনুষ্ঠান প্রথম বিরতি কন্যারা</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">বিবিসির ছত্রছায়ায় দশের অধিকতর ছয় বাংলাদেশের বিজয় বাবে</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">ছাত্রলীগের ছুটে স্যাপাসালে নির্বাচিত প্রার্থীদের কর্মকর্তা</h4>
                        </div>
                    </div>

                    <div class="bg-orange-500 text-white text-center py-2 rounded hover:bg-orange-600 cursor-pointer">
                        <a href="#" class="block">আরও →</a>
                    </div>
                </div>

                <!-- Science & Technology Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">বিজ্ঞান ও প্রযুক্তি</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="Tech News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">সামাজিক মাধ্যম এক্স ভ্যালুড সাইবার হামলা</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">চীনের রাস্তার পুলিশের গাড়িগুলি লাইভ ফোন আসে অপেক্ষা</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">বাংলাদেশের তুলনা প্রথম ও সাইবর বিষয়ক!</h4>
                        </div>
                    </div>

                    <div class="bg-orange-500 text-white text-center py-2 rounded hover:bg-orange-600 cursor-pointer">
                        <a href="#" class="block">আরও →</a>
                    </div>
                </div>

                <!-- Education Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">শিক্ষা</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="Education News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">ইউনিভার্সিটি পিটিএম ডিগ্রীধারী ছাত্রা নামের আগে নেই, ভর্তির নিকটে পারেন না: হাইকোর্টের রায়</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">ইসরা মাহমুদ নড় ও হ্যারিক কর্মসংস্থান ও ইউনিয়নের দুই শিক্ষার্থী</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">শিক্ষক নিয়োগের বার্তাহত চাপি শিক্ষার্থীদের ছাত্র-পরীক্ষা বর্ষণ</h4>
                        </div>
                    </div>

                    <div class="bg-orange-500 text-white text-center py-2 rounded hover:bg-orange-600 cursor-pointer">
                        <a href="#" class="block">আরও →</a>
                    </div>
                </div>

                <!-- Religion & Philosophy Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <h2 class="text-xl font-bold">ধর্ম ও দর্শন</h2>
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="Religion News" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg ">রামাদানের ১৫ দিন যে আমল গুরুত্বপূর্ণ</h3>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">ইতিহাসের প্রথম, কারিগর ও বিদান</h4>
                        </div>
                        <div class="bg-white p-3 shadow-md rounded-lg flex space-x-3">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-NvccCWTvLNlwUEQzlNCs3NNGZ1xaCW.png" alt="News" class="w-20 h-20 object-cover rounded">
                            <h4 class="font-bold text-sm flex-1">পবিত্র মক্কে মসজিদের ব্যাপক সাময়িক ইসলামিক ছত্রছায়াসমূহ প্রাপ্তি</h4>
                        </div>
                    </div>

                    <div class="bg-orange-500 text-white text-center py-2 rounded hover:bg-orange-600 cursor-pointer">
                        <a href="#" class="block">আরও →</a>
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
