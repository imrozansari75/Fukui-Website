<?php
// Include database connection
include './admin/db_connect.php';

// Fetch careers data from the database
$sql = "SELECT * FROM careers";
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind -->
    <link rel="stylesheet" href="output.css">
    <title>FAI</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="./index.php" class="nav__logo">
                    <img class="w-[8rem] sm:w-[9rem]" src="./assets/img/FATIPL Logo - Visheshh Jatiaa.png" alt="">
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-fill nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="./index.php" class="nav__link">Home</a></li>

                    <li><a href="#about-container" class="nav__link">About us</a></li>

                    <!--=============== DROPDOWN ===============-->
                    <li class="dropdown__item">
                        <!-- <a href="#services"> -->
                        <div class="nav__link">
                            Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <!-- </a> -->
                        <ul class="dropdown__menu sm:w-[12rem]">
                            <li class="dropdown__subitem ">
                                <a href="./accounting.html">
                                    <div class="dropdown__link">
                                        <img src="./assets/img/accounts.png" class="w-8 object-contain"
                                            alt="Accounting">
                                        Account and Finance
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown__subitem">
                                <a href="./supplychain.html">
                                    <div class="dropdown__link">
                                        <img src="./assets/img/supply-chain.png" class="w-8 object-contain"
                                            alt="Supply Chain Management Services">
                                        Supply Chain Management
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown__subitem">
                                <a href="./procurement.html">
                                    <div class="dropdown__link">
                                        <img src="./assets/img/procurement.png" class="w-8 object-contain"
                                            alt="Administrative Services">
                                        Procurement Solutions
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown__subitem">
                                <a href="./itanderp.html">
                                    <div class="dropdown__link">
                                        <img src="./assets/img/computer.png" class="w-8 object-contain"
                                            alt="IT Services">
                                        IT and ERP Services
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown__subitem">
                                <a href="./hr&admin.html">
                                    <div class="dropdown__link">
                                        <img src="./assets/img/organization-structure.png" class="w-8 object-contain"
                                            alt="Human Resource Management">
                                        HR and Administrative Services
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown__subitem">
                                <a href="./legalandcompliance.html">
                                    <div class="dropdown__link">
                                        <img src="./assets/img/legal-system.png" class="w-8 object-contain"
                                            alt="Compliance">
                                        Legal and Compliance Services
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--=============== DROPDOWN END ===============-->

                    <li class="dropdown__item">
                        <a href="#careers">
                            <div class="nav__link">
                                Careers
                            </div>
                        </a>
                    </li>

                    <li><a href="#cta" class="nav__link">Contact us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <!-- Hero -->
        <div id="hero" class="min-h-screen py-10">
            <section id="hero-container"
                class="max-w-6xl mx-auto px-6 pb-2 flex flex-col sm:items-center sm:text-center sm:py-24">
                <h1
                    class="text-3xl font-semibold leading-snug md:my-auto text-center sm:text-6xl sm:leading-tight text-black">
                    EMPOWERING YOU WITH COMPLETE BUSINESS SUPPORT SOLUTIONS
                </h1>
                <p class="text-xl mt-4 sm:px-8 sm:text-2xl text-center sm:mt-6 text-gray-800">At FAI Corporate Services Private Limited, we offer
                    comprehensive
                    business support services which enables you to focus entirely on your core business activities,
                    while you let us manage the other complexities of running a business in India.
                </p>
                <div id="button-container" class="mt-12 flex flex-1 flex-wrap gap-4 flex-col sm:flex-row">
                    <a href="#about-container" class="hero-btn">About us</a>
                    <a href="#services" class="hero-btn">Services</a>
                    <a href="#careers" class="hero-btn">Career</a>
                    <a href="#cta" class="hero-btn">Contact us</a>
                </div>
            </section>


            <!-- About -->
            <section id="about-container"
                class="mx-auto px-6 sm:px-16 sm:pt-10 sm:py-28 flex flex-col lg:flex-row sm:gap-20 justify-between items-center">
                <div class="lg:w-1/2 w-full py-16 sm:mb-10 lg:mb-0">
                    <h2 class="text-3xl sm:text-5xl text-left font-semibold pb-6 sm:pb-4">About us</h2>
                    <p class="text-xl sm:text-2xl text-left leading-relaxed sm:leading-snug">
                        FAI Corporate Services Private Limited offers extensive business support services
                        throughout India. Specializing in Accounts & Finance, HR & Administrative support, Procurement,
                        Supply Chain Management, IT & ERP services, and Legal & Compliance, collaborating with FAI
                        allows you to focus on your core business competencies. Our tagline, 'Empowering Growth,
                        Enabling Success: Innovate, Collaborate, Excel,' reflects our commitment to delivering tailored
                        solutions that optimize operations and ensure compliance. <br>
                        We are a part of the Black Rose group consisting of companies such as Black Rose Industries
                        Limited, Accent Industries Limited, Tozai Safety Private Limited and others.
                    </p>
                </div>
                <div class="max-w-[30rem]">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="./assets/img/home-about.jpg" alt="About Us" class="object-cover rounded-lg shadow-lg">
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section id="services" class="container mx-auto md:pt-14 items-center">
                <div class="text-center pt-20 sm:pt-10">
                    <h2 class="text-3xl sm:text-5xl font-semibold sm:pb-6">Our Services</h2>
                </div>

                <div class="flex flex-wrap sm:flex-row justify-center gap-4 p-3">
                    <!-- Card 1 -->
                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 duration-300 h-full flex flex-col">
                            <img src="./assets/img/accounts.png" class="w-full p-5 h-40 object-contain"
                                alt="Accounting">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <h5 class="text-xl font-semibold mb-2">Accounting and Finance</h5>
                                <p class="text-gray-700 truncate-text" id="accounting-text">We offer comprehensive
                                    accounting and finance services designed to meet the diverse needs of our clients
                                    and enhance their financial stability and growth. Our services are designed to
                                    provide robust financial reports enabling businesses to focus on their core
                                    operations while we manage their books of accounts and monitor the financials.</p>
                                <a href="./accounting.html" class="text-blue-500 hover:underline mt-4">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 duration-300 h-full flex flex-col">
                            <img src="./assets/img/supply-chain.png" class="w-full p-5 h-40 object-contain"
                                alt="Supply Chain Management Services">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <h5 class="text-xl font-semibold mb-2">Supply Chain Management</h5>
                                <p class="text-gray-700 truncate-text" id="scm-text">We optimize the entire supply chain
                                    process, from procurement and production to distribution and delivery. Our supply
                                    chain management services focus on improving efficiency, reducing costs, and
                                    ensuring the seamless flow of goods and information across the supply chain.</p>
                                <a href="./supplychain.html" class="text-blue-500 hover:underline mt-4">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 duration-300 h-full flex flex-col">
                            <img src="./assets/img/procurement.png" class="w-full p-5 h-40 object-contain"
                                alt="Procurement Services">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <h5 class="text-xl font-semibold mb-2">Procurement Solutions</h5>
                                <p class="text-gray-700 truncate-text" id="admin-text">Our Administrative Services are
                                    designed to streamline operations, optimize logistics, and provide comprehensive
                                    support, enabling businesses to focus on their core activities while we handle the
                                    essential administrative tasks. Our Administrative Services are designed to enhance
                                    operational efficiency and effectiveness, providing businesses with the support they
                                    need to thrive in a competitive environment.</p>
                                <a href="./procurement.html" class="text-blue-500 hover:underline mt-4">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 duration-300 h-full flex flex-col">
                            <img src="./assets/img/computer.png" class="w-full p-5 h-40 object-contain"
                                alt="IT Services">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <h5 class="text-xl font-semibold mb-2">IT and ERP Services</h5>
                                <p class="text-gray-700 truncate-text" id="it-text">Our IT and ERP services are designed
                                    to ensure that businesses have robust, efficient, and secure technology
                                    infrastructures. We offer comprehensive solutions that cover all aspects of IT and
                                    ERP management to support and enhance your business operations. Our IT and ERP
                                    services are designed to provide businesses with the technology support they need to
                                    thrive in a digital world. By managing your IT infrastructure and systems, we enable
                                    you to focus on your core business activities with confidence.</p>
                                <a href="./itanderp.html" class="text-blue-500 hover:underline mt-4">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 duration-300 h-full flex flex-col">
                            <img src="./assets/img/organization-structure.png" class="w-full p-5 h-40 object-contain"
                                alt="HR and Administrative Services">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <h5 class="text-xl font-semibold mb-2">HR and Administrative Services</h5>
                                <p class="text-gray-700 truncate-text" id="hrm-text">Our Human Resource Management
                                    services are tailored to help businesses cultivate a productive and motivated
                                    workforce, ensuring operational excellence and employee satisfaction. Our Human
                                    Resource Management services are aimed at enhancing workforce efficiency and
                                    satisfaction, allowing businesses to focus on their strategic goals while we manage
                                    their HR functions with professionalism and expertise.</p>
                                <a href="./hr&admin.html" class="text-blue-500 hover:underline mt-4">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden transition transform hover:scale-105 duration-300 h-full flex flex-col">
                            <img src="./assets/img/legal-system.png" class="w-full p-5 h-40 object-contain"
                                alt="Compliance">
                            <div class="p-4 flex-grow flex flex-col justify-between">
                                <h5 class="text-xl font-semibold mb-2">Legal and Compliance Services</h5>
                                <p class="text-gray-700 truncate-text" id="compliance-text">Our Legal and Compliance
                                    services are designed to help businesses navigate the complex regulatory landscape
                                    with confidence and ease. We provide comprehensive solutions to ensure your business
                                    meets all legal and compliance requirements, safeguarding your reputation and
                                    operations. Our Legal and Compliance services are designed to provide businesses
                                    with the expertise and support needed to operate within the legal framework and
                                    maintain a positive reputation. By managing your legal and compliance needs, we
                                    enable you to focus on your core business activities with peace of mind.</p>
                                <a href="./legalandcompliance.html" class="text-blue-500 hover:underline mt-4">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Career Section -->
            <section id="careers"
                class="container mx-auto p-4 md:pt-14 flex flex-wrap justify-center items-start space-x-4">
                <div class="text-center pt-12">
                    <h2 class="text-3xl sm:text-5xl font-semibold">Career Opportunities</h2>
                    <p class="text-xl sm:text-2xl text-left py-5 sm:px-36 sm:py-8">Discover great career opportunities
                        at
                        FAI! We're seeking talented, honest, and ambitious individuals to join our brilliant team and
                        drive innovation. Contact us at <b class="text-blue-900">talent@texbrex.com </b> to apply</p>
                </div>

                <!-- php code for career section -->
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="career-card-container">
                    <div class="career-card" onclick="toggleCard(this)">
                        <div class="career-card__header">
                            <div class="career-card__icon text-blue-500">
                                <i class="fas fa-<?php echo htmlspecialchars($row['icon_class']); ?> fa-2x"></i>

                            </div>
                            <h2 class="career-card__title text-lg font-bold"><?php echo htmlspecialchars($row['title']); ?></h2>
                        </div>
                    </div>
                    <div class="career-card__content">
                                        <h3 class="text-lg font-bold">Key Requirements</h3>
                                        <ul class="list-disc list-inside">
                                            <?php foreach (explode("\n", htmlspecialchars($row['requirements'])) as $requirement): ?>
                                                <li><?php echo trim($requirement); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <h3 class="text-lg font-bold mt-4">Qualifications</h3>
                                        <p><?php echo htmlspecialchars($row['qualifications']); ?></p>
                                        <h3 class="text-lg font-bold mt-4">Location</h3>
                                        <p><?php echo htmlspecialchars($row['location']); ?></p>
                                        <button onclick="sendEmail()"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-2 mt-2 rounded">Apply Now</button>
                                    </div>
                </div>
                <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-center">No career opportunities available at the moment.</p>
                    <?php endif; ?>

            </section>

            <!-- Call to action -->
            <section id="cta" class="px-10 pt-16 sm:pt-10 mx-auto items-center">

                <div class="flex flex-col md:pt-14 sm:space-y-2 lg:px-10">
                    <h2 class="font-semibold text-3xl sm:text-5xl text-center">Contact us</h2>
                    <div class="pt-3 sm:text-lg">
                        <p class="text-xl sm:text-2xl text-left py-5 sm:px-36 sm:py-8">
                            We're here to help! Whether you have questions about our services, need support,
                            or want to discuss how we can assist your business, feel free to reach out to
                            us.
                        </p>
                    </div>

                    <div class="flex flex-col mx-auto space-y-4">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-location-dot text-2xl"></i>
                            <div class="flex flex-col space-y-1">
                                <span>Corporate Office: 144A, Mittal Tower, Nariman Point, Mumbai 400021</span>
                                <span>Registered Address: 430-B, Kewal Industrial Estate, Senapati Bapat Marg, Mumbai
                                    400013</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-phone text-2xl"></i>
                            <span>+91 22 43337200</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-envelope text-2xl"></i>
                            <a href="mailto:fukui@texbrex.com">
                                <span>fukui@texbrex.com</span>
                            </a>
                        </div>

                        <div class="flex items-center space-x-2">
                            <a href="https://www.linkedin.com/company/fukui-accent-trading-india-private-limited/"
                                target="_blank" class="flex items-center space-x-2">
                                <i class="fa-brands fa-linkedin text-2xl"></i>
                                <span>LinkedIn</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Clients -->
            <section class="px-10 pt-16 sm:pt-10 mx-auto items-center">
                <div class="mb-4">
                    <h2 class="text-3xl text-center sm:text-5xl font-semibold">Our Clients</h2>
                    <p class="text-xl sm:text-2xl text-left py-5 sm:px-36 sm:py-8">Our clients' satisfaction is our top
                        most priority, and we are proud to have built their trust in us. Below are some of our esteemed
                        clients.</p>
                </div>

                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                    <div class="w-40 text-center">
                        <img src="./assets/img/Atlas Protective Products.jpeg" alt="Atlas Protective Products Logo"
                            class="object-cover">
                        <h3>Atlas Protective Products</h3>
                    </div>

                    <div class="w-40 text-center">
                        <img src="./assets/img/Tozai Safety.png" alt="Tozai Safety Logo" class="object-cover">
                        <h3>Tozai Safety Private Limited</h3>
                    </div>

                    <div class="w-[13rem] text-center">
                        <img src="./assets/img/Black Rose.png" alt="Black Rose Logo" class="object-contain">
                        <h3>Black Rose Industries Limited</h3>
                    </div>
                </div>
            </section>
    </main>

    <!------Footer Section------->
    <footer
        class="bg-gradient-to-r from-blue-800 via-blue-900 to-blue-800 text-white py-10 px-6 lg:px-0 mt-10 border-t border-gray-600">
        <div class="container mx-auto flex flex-col lg:flex-row text-left lg:items-start justify-between">

            <!-- Services Section -->
            <div class="flex flex-col mb-6 lg:mb-0 lg:text-left">
                <h3 class="text-white text-2xl font-semibold pb-4">Services</h3>
                <a href="./accounting.html"
                    class="text-gray-300 hover:text-white mb-2 transition-colors duration-300">Accounting &
                    Finance</a>
                <a href="./supplychain.html"
                    class="text-gray-300 hover:text-white mb-2 transition-colors duration-300">Supply Chain
                    Management</a>
                <a href="./procurement.html"
                    class="text-gray-300 hover:text-white mb-2 transition-colors duration-300">Procurement
                    Solutions</a>
                <a href="./itanderp.html" class="text-gray-300 hover:text-white mb-2 transition-colors duration-300">IT
                    & ERP
                    Services</a>
                <a href="./hr&admin.html" class="text-gray-300 hover:text-white mb-2 transition-colors duration-300">HR
                    Administrative Services</a>
                <a href="./legalandcompliance.html"
                    class="text-gray-300 hover:text-white mb-2 transition-colors duration-300">Legal &
                    Compliance
                    Services</a>

            </div>

            <!-- Contact Us Section -->
            <div class="flex flex-col mb-6 lg:mb-0 text-left">
                <a href="#careers"
                    class="text-2xl font-display font-semibold pb-4 text-white transition-colors duration-300">Careers</a>
                <h3 class="text-white text-2xl font-semibold pb-4">Contact Us</h3>
                <div class="flex flex-col text-left lg:items-start mb-4">
                    <div class="flex items-center space-x-2 footer-btn">
                        <i class="fa-solid fa-location-dot text-2xl"></i>
                        <a href="#"
                            class="flex flex-col text-gray-300 hover:text-white transition-colors duration-300 ease-in-out">
                            <span>Corporate Office: 144A, Mittal Tower, Nariman Point, Mumbai 400021</span>
                            <span>Registered Address: 430-B, Kewal Industrial Estate, Senapati Bapat Marg, Mumbai
                                400013</span>
                        </a>
                    </div>
                    <div class="flex items-center footer-btn">
                        <i class="fa-solid fa-phone text-xl"></i>
                        <span class="pl-2">+91 22 43337200</span>
                    </div>
                    <div class="flex items-center footer-btn">
                        <a href="mailto:fukui@texbrex.com"
                            class="flex items-center text-gray-300 hover:text-white transition-colors duration-300 ease-in-out">
                            <i class="fa-solid fa-envelope text-xl"></i>
                            <span class="pl-2">fukui@texbrex.com</span>
                        </a>
                    </div>
                    <div class="flex items-center footer-btn">
                        <a href="https://www.linkedin.com/company/fukui-accent-trading-india-private-limited/"
                            target="_blank"
                            class="flex items-center text-gray-300 hover:text-white transition-colors duration-300 ease-in-out">
                            <i class="fa-brands fa-linkedin text-xl"></i>
                            <span class="pl-2">LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Script -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>