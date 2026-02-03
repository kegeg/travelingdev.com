<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveling Dev | Fractional CTO & COO Services</title>
    <meta name="description" content="On-demand executive leadership for AI implementation, process optimization, and tech setup improvements. Flexible fractional CTO & COO services for small-to-medium businesses.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#0f766e',
                        dark: '#1f2937',
                        light: '#f9fafb'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #1e40af;
            transition: width 0.2s ease;
        }
        .nav-link:hover::after { width: 100%; }
    </style>
</head>
<body class="font-sans text-dark bg-white antialiased">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-sm border-b border-gray-100 z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="index.html" class="flex items-center gap-2 text-primary font-bold text-xl tracking-tight">
                <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 003 12c0-1.605.42-3.113 1.157-4.418"/>
                </svg>
                Traveling Dev
            </a>
            
            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center gap-8">
                <a href="index.html" class="nav-link text-dark font-medium text-sm">Home</a>
                <a href="privacy-policy.html" class="nav-link text-gray-600 font-medium text-sm hover:text-dark">Privacy Policy</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 text-dark" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white">
            <div class="px-6 py-4 space-y-3">
                <a href="index.html" class="block text-dark font-medium">Home</a>
                <a href="privacy-policy.html" class="block text-gray-600 font-medium">Privacy Policy</a>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="pt-32 pb-20 md:pt-40 md:pb-28 px-6">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl md:text-5xl font-bold text-primary leading-tight mb-6">
                    Fractional CTO & COO Services
                </h1>
                <h2 class="text-lg md:text-xl text-dark font-medium mb-4 leading-relaxed">
                    On-Demand Executive Leadership to Implement AI, Optimize Processes, and Scale Your Tech – Without Full-Time Overhead
                </h2>
                <p class="text-gray-600 italic mb-10 text-base md:text-lg">
                    Flexible Expertise from a Seasoned Entrepreneur & Digital Nomad Who's Built Successful Tech Products and Visited Over 100 Countries
                </p>
                <a href="mailto:kevin@travelingdev.com?subject=Inquiry%20about%20Fractional%20CTO/COO%20Services" 
                   class="inline-block bg-primary text-white font-semibold px-8 py-4 rounded-lg hover:bg-blue-800 transition-colors duration-200 shadow-sm">
                    Email Me to Discuss Your Project
                </a>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-16 md:py-20 px-6 bg-light">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-6">About Kevin Gagnon</h2>
                <p class="text-dark leading-relaxed text-base md:text-lg">
                    With 10 years of experience running my own startup, Flytrippers—a successful travel website attracting hundreds of thousands of monthly visitors—I served as the lead technical engineer building most features. Before that, I worked as a construction project manager and structural engineer, giving me strong skills in technical execution, processes, and problem-solving. As a digital nomad who's traveled to over 100 countries (with plans to visit them all), I bring a global, adaptable perspective to help businesses scale efficiently.
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-16 md:py-20 px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-10 text-center">What I Offer</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-6 border border-gray-200 rounded-lg hover:border-secondary/40 transition-colors">
                        <h3 class="font-semibold text-dark text-lg mb-3">AI Implementation</h3>
                        <p class="text-gray-600 leading-relaxed">Help small-to-medium businesses integrate AI tools and workflows effectively.</p>
                    </div>
                    <div class="p-6 border border-gray-200 rounded-lg hover:border-secondary/40 transition-colors">
                        <h3 class="font-semibold text-dark text-lg mb-3">Internal Process Audit & Optimization</h3>
                        <p class="text-gray-600 leading-relaxed">Audit and improve operations, scaling processes for growth.</p>
                    </div>
                    <div class="p-6 border border-gray-200 rounded-lg hover:border-secondary/40 transition-colors">
                        <h3 class="font-semibold text-dark text-lg mb-3">Tech Stack Optimization</h3>
                        <p class="text-gray-600 leading-relaxed">Review and enhance your current setup for efficiency and performance.</p>
                    </div>
                    <div class="p-6 border border-gray-200 rounded-lg hover:border-secondary/40 transition-colors">
                        <h3 class="font-semibold text-dark text-lg mb-3">Fractional Leadership for Small Teams</h3>
                        <p class="text-gray-600 leading-relaxed">Hands-on guidance using tools like WordPress, Python, and more.</p>
                    </div>
                </div>
                <p class="text-center text-gray-500 mt-8 text-sm">
                    Flexible monthly retainers. Contact for custom pricing and details.
                </p>
            </div>
        </section>

        <!-- Why Choose Me Section -->
        <section class="py-16 md:py-20 px-6 bg-light">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-8">Why Work With Traveling Dev</h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full mt-2.5 flex-shrink-0"></span>
                        <span class="text-dark leading-relaxed">Proven track record building and scaling tech products at Flytrippers.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full mt-2.5 flex-shrink-0"></span>
                        <span class="text-dark leading-relaxed">Deep experience in engineering, project management, and operations.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full mt-2.5 flex-shrink-0"></span>
                        <span class="text-dark leading-relaxed">No full-time hire costs or overhead—pay only for the expertise you need.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full mt-2.5 flex-shrink-0"></span>
                        <span class="text-dark leading-relaxed">Global mindset from extensive travel and remote work.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-secondary rounded-full mt-2.5 flex-shrink-0"></span>
                        <span class="text-dark leading-relaxed">Problem-solving focus tailored to SMBs ready for AI and process improvements.</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="py-16 md:py-20 px-6">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-10 text-center">Simple Process</h2>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <span class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold text-sm flex-shrink-0">1</span>
                        <p class="text-dark pt-1">Email me your project overview.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold text-sm flex-shrink-0">2</span>
                        <p class="text-dark pt-1">Quick discovery call to understand needs.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold text-sm flex-shrink-0">3</span>
                        <p class="text-dark pt-1">Customized proposal and flexible retainer agreement.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-semibold text-sm flex-shrink-0">4</span>
                        <p class="text-dark pt-1">Ongoing support to deliver results.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-16 md:py-24 px-6 bg-primary">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-8">Ready to Scale Smarter?</h2>
                <a href="mailto:kevin@travelingdev.com?subject=Inquiry%20about%20Fractional%20CTO/COO%20Services" 
                   class="inline-block bg-white text-primary font-semibold px-8 py-4 rounded-lg hover:bg-gray-100 transition-colors duration-200 shadow-sm mb-6">
                    Email Me to Discuss Your Project
                </a>
                <p class="text-blue-100">
                    <a href="mailto:kevin@travelingdev.com" class="hover:text-white transition-colors">kevin@travelingdev.com</a> – Let's chat about how I can help your business.
                </p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-8 px-6 border-t border-gray-100">
        <div class="max-w-5xl mx-auto text-center">
            <p class="text-gray-500 text-sm">
                © 2026 GGDA Holdings LLC • <a href="mailto:kevin@travelingdev.com" class="hover:text-dark transition-colors">kevin@travelingdev.com</a> • All rights reserved. • <a href="privacy-policy.html" class="hover:text-dark transition-colors">Privacy Policy</a>
            </p>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>