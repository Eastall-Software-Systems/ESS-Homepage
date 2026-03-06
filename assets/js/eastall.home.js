// =========================
// Cookie Helpers
// =========================

function getCookie(name) {
    const cookieName = name + "=";
    const cookies = document.cookie.split(";");

    for (let c of cookies) {
        c = c.trim();
        if (c.indexOf(cookieName) === 0) {
            return c.substring(cookieName.length);
        }
    }
    return null;
}

function setCookie(name, value, days = 365) {
    const date = new Date();
    date.setTime(date.getTime() + (24 * days * 60 * 60 * 1000));
    document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
}

// Close cookie popup
function closeCookies(accepted) {
    const popup = document.getElementById("cookiePopup");

    popup.classList.add("fade-out");

    setTimeout(() => {
        popup.classList.remove("show");
        popup.classList.remove("fade-out");
    }, 300);

    if (accepted) {
        setCookie("cookies_accepted", "true");
    } else {
        document.cookie = "cookies_accepted=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
    }
}

// Back button
function backButton() {
    window.history.back();
}

// =========================
// Header scroll effect
// =========================

window.addEventListener("scroll", function () {
    const header = document.getElementById("header");

    if (window.scrollY > 50) {
        header.classList.add("header-scrolled");
    } else {
        header.classList.remove("header-scrolled");
    }
});

// =========================
// MODE TOGGLE — LIGHT / DARK BUTTONS
// =========================

document.querySelectorAll(".mode-toggle").forEach((btn) => {
    btn.addEventListener("click", function () {

        const mode = this.getAttribute("title"); 
        // "Light Mode" or "Dark Mode"

        if (mode === "Light Mode") {
            document.body.classList.add("light-mode");
        } else if (mode === "Dark Mode") {
            document.body.classList.remove("light-mode");
        }

        // Save theme if cookies were accepted
        if (getCookie("cookies_accepted")) {
            if (document.body.classList.contains("light-mode")) {
                setCookie("theme", "light");
                console.log("Switched to Light Mode");
            } else {
                setCookie("theme", "dark");
                console.log("Switched to Dark Mode");
            }
        } else {
            console.log("Cookies not accepted — theme not saved.");
        }
    });
});

// =========================
// Load saved theme + show cookie popup
// =========================

window.addEventListener("DOMContentLoaded", () => {
    const cookiesAccepted = getCookie("cookies_accepted");

    if (cookiesAccepted) {
        if (getCookie("theme") === "light") {
            document.body.classList.add("light-mode");
        }
    } else {
        document.getElementById("cookiePopup").classList.add("show");
    }
});

// =========================
// Mobile nav toggle
// =========================

const mobileToggle = document.querySelector(".mobile-toggle");
const navLinks = document.querySelector(".nav-links");

if (mobileToggle && navLinks) {
    mobileToggle.addEventListener("click", () => {
        mobileToggle.classList.toggle("active");
        navLinks.classList.toggle("show");
    });
}

/**
 * Eastall Software Systems – DevTools Self-XSS Warning
 * Clean, readable version.
 */

function ESS_DevtoolsWarning(step = 0) {
    const Messages = {
        HEADER: "STOP!",
        LINE_1: "This console is a powerful tool intended for developers.",
        LINE_2: "If someone told you to paste something here, you're being scammed.",
        LINE_3: "Pasting code here can give attackers full access to your ESS account, servers, and data.",
        LINE_4: "If you're interested in development, check out opportunities at: {url}",
    };

    const CareersURL = `${location.protocol}//eastall.software/careers`;

    // Big header
    console.log(
        `%c${Messages.HEADER}`,
        "color: #ff0000; -webkit-text-stroke: 2px black; font-size: 72px; font-weight: bold;"
    );

    // Standard warnings
    console.log(`%c${Messages.LINE_1}`, "font-size: 16px;");
    console.log(`%c${Messages.LINE_2}`, "font-size: 18px; font-weight: bold; color: red;");

    // After 4 runs, show the additional info
    if (step >= 4) {
        console.log(`%c${Messages.LINE_3}`, "font-size: 16px;");

        const formattedLine4 = Messages.LINE_4.replace("{url}", CareersURL);
        console.log(`%c${formattedLine4}`, "font-size: 16px;");

    } else {
        // Keep looping once per second
        setTimeout(() => ESS_DevtoolsWarning(step + 1), 1000);
    }
}

// Start automatically when devtools is opened
ESS_DevtoolsWarning();