<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Visual Aspects -->
        <title><?php echo isset($title) ? htmlspecialchars($title, ENT_QUOTES, 'UTF-8') : 'Eastall Software Systems | Management Redefined.';?></title> <!-- Sets the title seen in the tab -->
        <link rel="stylesheet" href="https://eastallss.com/assets/css/eastall.home.css"> <!-- Sets all page styles -->
        <link rel="icon" href="https://eastall.software/assets/img/brand/ESS_Big.png"> <!-- Sets the icon seen in the tab -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/> <!-- Adds Google's Material Icons -->

        <!-- Meta Tags -->
        <meta name="title" content="Eastall Software Systems | Management Redefined.">
        <meta name="description" content="Server Hosting, Server Management Software, Business/Company Management Software, and heaps more! At Eastall Software Systems, it's about our family❤️">
        <meta name="keywords" content="Eastall, Eastall Software, Eastall Systems, Eastall Software Systems, Servers, Server Hosting, Servers Hosting, Kaedyn Eastall, Management, Business Management, Management Panel, Manager, Server Manager, Server Management, Server Host">
        <meta name="author" content="Kaedyn Eastall / Eastall Software Systems">
        <link rel="canonical" href="https://eastallss.com">
        <meta property="og:title" content="Eastall Software Systems | Management Redefined.">
        <meta property="og:description" content="Server Hosting, Server Management Software, Business/Company Management Software, and heaps more! At Eastall Software Systems, it's about our family❤️">
        <meta property="og:url" content="https://eastallss.com">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Eastall Software Systems | Management Redefined.">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Eastall Software Systems | Management Redefined.">
        <meta name="twitter:description" content="Server Hosting, Server Management Software, Business/Company Management Software, and heaps more! At Eastall Software Systems, it's about our family❤️">
        <meta name="twitter:site" content="@EastallSoftware">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
    </head>
<body>
    <header id="header">
        <nav>
            <div class="nav-container">
                <a href="https://eastallss.com" class="logo">Eastall Software Systems</a> 
                
                <ul class="nav-links">
                    <li><a href="https://eastallss.com">Home</a></li>
                    <li><a href="https://eastallss.com/services/cloud">Cloud</a></li>
                    <li><a href="https://eastallss.com/services/panel">Panel</a></li>
                    <li><a href="https://eastallss.com/services/api">API</a></li>
                    <li class="nav-dropdown">
                        <a class="dropdown-toggle">
                            More 
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-content">
                                <div class="dropdown-column">
                                    <h3>Navigation</h3>
                                    <button class="dropdown-btn" onclick="window.location.href='https\://eastallss.com/about'">About</button>
                                    <button class="dropdown-btn" onclick="window.location.href='https\://eastallss.com/contact'">Contact</button>
                                    <button class="dropdown-btn" onclick="window.location.href='https\://billing.stripe.com/p/login/7sIfZyanQ74m4AUeUU'">Billing Portal</button>
                                </div>

                                <div class="dropdown-column">
                                    <h3>Account</h3>
                                    <button class="dropdown-btn" onclick="window.location.href='https\://my.eastall.software/me'">Profile</button>
                                    <button class="dropdown-btn" onclick="window.location.href='https\://my.eastall.software/me/settings'">Settings</button>
                                    <button class="dropdown-btn" onclick="window.location.href='https\://eastallss.com/documentation'">Support</button>
                                </div>

                                <div class="dropdown-column">
                                    <h3>Quick Actions</h3>
                                    <div class="mode-toggles">
                                        <div class="mode-toggle" title="Light Mode">
                                            <span class="material-symbols-outlined">light_mode</span>
                                        </div>
                                        <div class="mode-toggle" title="Dark Mode">
                                            <span class="material-symbols-outlined">dark_mode</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <div class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>