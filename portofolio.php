<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>

html {
    scroll-behavior: smooth;
}
        body {
            font-family: "Work Sans", sans-serif;
            scroll-behavior: smooth;
        }

        .navbar-link:hover {
            transform: scale(1.1);
            transition: transform 0.2s;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn ease 2s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .progress-bar {
            width: 0;
            animation: loadProgress 2s forwards;
        }

        @keyframes loadProgress {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        /* Gaya untuk keseluruhan scrollbar */
::-webkit-scrollbar {
    width: 12px; /* Lebar scrollbar */
    background-color: white; /* Warna background scrollbar */
}

/* Gaya untuk tombol penggulung (thumb) */
::-webkit-scrollbar-thumb {
    background-color: #3490dc; /* Warna thumb scrollbar */
    border-radius: 10px; /* Membuat ujung thumb melengkung */
    border: 3px solid white; /* Membuat ruang antara thumb dan tepi scrollbar */
}

/* Gaya saat tombol penggulung di-hover */
::-webkit-scrollbar-thumb:hover {
    background-color: #2779bd; /* Warna thumb saat di-hover */
}

/* Gaya untuk track scrollbar */
::-webkit-scrollbar-track {
    background-color: transparent; /* Warna track scrollbar */
}

.ayam {
    background-color:#3490dc;
    color: white;
}


    </style>

</head>



<body class="bg-white-100 text-black-900">

    <!-- Navbar -->
    <nav class="bg-transparant">
        <div class="container max-w-6xl px-8 py-0.5 flex justify-between items-center">
            <div><img class="h-20 w-20" src="20240813_123300.png" alt="Logo"></div>
            <div class="space-x-10">
                <a href="#about" class="navbar-link text-black-600 hover:text-blue-500">Home</a>
                <a href="#about" class="navbar-link text-black-600 hover:text-blue-500">About</a>
                <a href="#skills" class="navbar-link text-black-600 hover:text-blue-500">Skills</a>
                <a href="#contact" class="navbar-link text-black-600 hover:text-blue-500">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="text-white-900 px-6 py-3 flex items-center justify-center text-center mt-20">
        <div class="fade-in">
            <h1 class="text-6xl font-semibold">HELLO WORLD!</h1>
            <h3 class="text-6xl mt-0.5">Welcome To <span class="text-blue-500 font-medium">Dzbnr</span></h3>
            <p class="text-2xl mt-6">Junior <span class="text-blue-500">Frontend</span> Developer</p>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 shadow-xl rounded-lg overflow-hidden">
                <div class="md:flex">
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-blue-500 font-semibold">Frontend Dev</div>
                        <h2 class="mt-2 text-2xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                            Dziban
                        </h2>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">
                            Hello World! I am a beginner frontend developer who has great curiosity and still developing my skills, I hope you enjoy working with me.
                        </p>
                        <div class="mt-6">
                            <div class="flex items-center">
                                <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-2 text-gray-600 dark:text-gray-300">Available for freelance work</span>
                            </div>
                            <div class="mt-2 flex items-center">
                                <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="ml-2 text-gray-600 dark:text-gray-300">Indonesia</span>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button id="resume-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full inline-block transition duration-300 ease-in-out">
                                Download Resume
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8">My Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">HTML</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">90%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">CSS</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">85%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">JavaScript</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">70%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Tailwind</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="contact" class=" bg-gray-100 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-8 text-center">Contact Me</h2>
    
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a5.025 5.025 0 007.123 0L21 14M3 16v5a2 2 0 002 2h16a2 2 0 002-2v-5" />
                        </svg>
                        <span class="ml-2 text-gray-600 dark:text-gray-300">dzbnrq@gmail.com</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7m-7-5h.01M12 5v.01" />
                        </svg>
                        <span class="ml-2 text-gray-600 dark:text-gray-300">+62 077 1997 3503</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.04 8.175c-.024.003-.047.007-.071.01m-4.567 7.544c-.034-.005-.068-.013-.103-.019-.137-.023-.274-.05-.409-.08m.926-1.459L15.12 11.2a.615.615 0 00.107-.617m-.568 4.164l-.723 1.21a.746.746 0 01-.602.367m-2.035-2.878L11.267 9.4m.185 7.321l1.667-2.518m-.073 2.334a.59.59 0 01-.279.484m-4.768 1.355a.617.617 0 01-.24-.52m3.074 1.575a.728.728 0 00.633.415m-.22-3.022a.621.621 0 00.511-.512m.184 2.1l-.55-.52a.619.619 0 01.04-.917m1.075 3.768c-.006.001-.012.002-.018.004m1.766-5.685L8.1 12.5m-.755 2.156a.62.62 0 01-.58-.44m1.333-2.05l-2.03 1.4m1.37-2.292c.043.007.084.022.125.04m-.795 2.554a.617.617 0 01-.595-.71m-1.276-.95l1.065-.753M4.2 13.44l1.86-2.032M11 2l.07 4.262M12.923 2.072a11.936 11.936 0 014.835 3.436l2.2 2.843A11.943 11.943 0 0121.866 14m-6.063-8.571a7.5 7.5 0 11-5.931 0" />
                        </svg>
                        <span class="ml-2 text-gray-600 dark:text-gray-300">Cirebon, Indonesia</span>
                    </div>
                </div>
    
                <!-- Contact Form -->
                <form action="contact.php" method="POST" class="space-y-4" id="contact">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full inline-block transition duration-300 ease-in-out w-full">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    

    <!-- Modal -->
    <div id="resume-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-8 max-w-sm w-full">
            <h3 class="text-xl font-semibold mb-4">Download Resume</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-6">Are you sure you want to download the resume?</p>
            <div class="flex justify-between">
                <button id="cancel-btn" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-full">
                    Cancel
                </button>
                <a href="resume.pdf" download class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full">
                    Download
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('resume-btn').addEventListener('click', function () {
            document.getElementById('resume-modal').classList.remove('hidden');
        });

        document.getElementById('cancel-btn').addEventListener('click', function () {
            document.getElementById('resume-modal').classList.add('hidden');
        });
    </script>

</body>

</html>
