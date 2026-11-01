ANJANA K SANTHOSH — INTERACTIVE PHP PORTFOLIO
=============================================

STATUS: FULLY CONFIGURED & OPERATIONAL ✓

HOW TO VIEW THE PORTFOLIO RIGHT NOW
-----------------------------------
1. Make sure Apache and MySQL are running in your XAMPP Control Panel.
2. Open your web browser and visit either:
   • http://localhost/anjana-portfolio/
   • http://localhost/anjana-portfolio-xampp/

ADMIN PORTAL
------------
• URL: http://localhost/anjana-portfolio/admin/login.php
• Default Username: admin
• Default Password: Admin@2026!
(You can change your password anytime after signing in.)

WHAT WAS FIXED
--------------
1. Fatal Database Error Resolved:
   - Previously, PHP crashed with "Unknown database 'anjana_portfolio'" because MySQL was missing the database and tables.
   - We imported the complete schema and added automatic self-healing to config/config.php:
     If MySQL database or tables are missing, it auto-creates them on first run.
     If MySQL is ever stopped or offline, it seamlessly falls back to a local SQLite database (database/portfolio.sqlite) so the site NEVER crashes with a white screen.
2. XAMPP Directory Integration:
   - Linked the project folder into your active XAMPP web root (C:\users\windows 11\desktop\xaamp\htdocs\anjana-portfolio).
   - Added automatic dynamic BASE_URL detection so styles, scripts, and links work whether served from root, subdirectories, or PHP built-in servers (php -S localhost:8000).
3. Image Display & Placeholders Fixed:
   - Created beautiful, modern custom SVG illustrations for all 6 projects (FamConnect, Placement Management System, SaferNet, Employee Management, Student Marks, Career Map).
   - Created a custom vector avatar (assets/images/profile-avatar.svg) so the hero never shows a blank placeholder.
   - If you want to use your real photo, simply copy your picture to assets/images/profile.jpg!

NEW UNIQUE & ATTRACTIVE FEATURES ADDED
--------------------------------------
1. 4-Theme Interactive Engine:
   - Obsidian Violet (Luxury Dark - Default)
   - Cyber Neon (Electric Cyan & Hot Pink)
   - Midnight Emerald (Matrix Mint & Gold)
   - Studio Light (Clean Executive Daylight)
   (Saved in localStorage and accessible from the palette button in the top navigation.)
2. Interactive Ambient Constellation Canvas:
   - Real-time particle physics mesh connecting stars that react smoothly to cursor movement.
3. Sound Effects Engine (Web Audio API):
   - Interactive audio feedback on clicks, terminal commands, and form submission (toggleable via the speaker icon in the header).
4. Interactive 3D Hero Profile Card:
   - Card tilts in real 3D perspective as your mouse hovers over it with dynamic glare highlights.
5. Interactive In-Browser Bash Terminal:
   - Click "Open Interactive Terminal" or type commands like:
     help, whoami, skills, projects, education, contact, matrix, clear
6. Printable Interactive Resume Modal:
   - Click "Resume" anywhere in the navbar or hero to open a print-ready CV with a one-click PDF print button.
7. Project Quick-View Modal:
   - Click on any project card to open a detailed preview with tech stack badges, architecture highlights, live demo, and source code links.
8. Real-time IST Live Clock:
   - Displays real-time local time in Kerala, India (IST UTC+5:30) in the hero and footer.
9. Interactive Contact Form with AJAX:
   - Instant async submission with loading spinner, validation, anti-spam honeypot, and celebration feedback toast.
   - Quick Topic suggestion pills (Job Opportunity, Project Collaboration, Network Inquiry, Say Hello).
   - 1-Click Copy Email button with visual "Copied! ✓" confirmation.
10. Enhanced Admin Dashboard:
    - Direct image file uploads for projects (.jpg, .png, .webp, .svg).
    - Message inbox manager with read/unread toggle, delete confirmation, and 1-click email reply links.
