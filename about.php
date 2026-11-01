<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'About Me';
include __DIR__ . '/includes/header.php';

$profilePhotoPath = __DIR__ . '/assets/images/profile.jpg';
$profileSrc = file_exists($profilePhotoPath) 
  ? url('assets/images/profile.jpg') 
  : url('assets/images/profile-avatar.svg');
?>
<section class="page-hero section-wrap">
  <div class="page-hero-badge">
    <span class="badge-dot"></span>
    <span>DISCOVER MY STORY</span>
  </div>
  <h1>Engineering with curiosity.<br><span class="gradient-text">Building for purpose.</span></h1>
  <p class="page-lead">
    A Computer Science graduate and Network Engineering postgraduate scholar who combines technical depth with a drive to create helpful digital experiences.
  </p>
</section>

<section class="section-wrap content-two-col">
  <div class="about-photo-wrapper">
    <div class="about-photo-card">
      <img src="<?= e($profileSrc) ?>" alt="Anjana K Santhosh" class="about-real-img">
      <div class="about-photo-overlay">
        <span class="photo-badge">Kerala, India · Open for Roles</span>
      </div>
    </div>
    <div class="photo-meta-card">
      <div class="meta-item">
        <span class="meta-label">CURRENT PURSUIT</span>
        <strong class="meta-val">M.Tech Network Engineering</strong>
      </div>
      <div class="meta-item">
        <span class="meta-label">ALMA MATER</span>
        <strong class="meta-val">RIT Kottayam (B.Tech CSE)</strong>
      </div>
      <div class="meta-item">
        <span class="meta-label">SPECIALTY</span>
        <strong class="meta-val">Web &amp; Distributed Networks</strong>
      </div>
    </div>
  </div>

  <div class="prose-container">
    <p class="eyebrow">HELLO &amp; WELCOME!</p>
    <h2>Connecting the dots between <span class="gradient-text">code &amp; networks.</span></h2>
    
    <p>
      My journey in technology began with a fundamental curiosity: understanding how simple keystrokes transform into software systems that connect people across the world. After graduating with a Diploma in Computer Science &amp; Engineering with a <strong>9.3 CGPA distinction</strong>, I completed my <strong>B.Tech in Computer Science and Engineering</strong> at Rajiv Gandhi Institute of Technology (RIT), Kottayam.
    </p>

    <p>
      Currently, I am pursuing my <strong>M.Tech in Network Engineering</strong> at Government Engineering College, Barton Hill. My academic work delves into network topologies, routing algorithms, traffic analysis, and cybersecurity protocols.
    </p>

    <p>
      Beyond theoretical foundations, I thrive on hands-on building:
    </p>

    <ul class="about-bullet-points">
      <li>
        <strong>Citizen Security:</strong> During my internship with the <em>Kerala Police Academy</em>, I worked on <strong>SaferNet</strong>, an Android application engineered to help citizens detect scam SMS messages, analyze dubious hyperlinks, and safely report cyber threats.
      </li>
      <li>
        <strong>Grassroots Impact:</strong> At the <em>Tink-Her-Hack</em> hackathon hosted by TinkerHub, I co-developed <strong>FamConnect</strong>, an online platform designed to empower local farmers by bridging them directly with consumers.
      </li>
      <li>
        <strong>Institutional Tools:</strong> I have designed and deployed web portals including an automated <strong>Placement Management System</strong>, an <strong>Employee Management Suite</strong>, and an academic <strong>Student Mark Entry &amp; Analytics System</strong>.
      </li>
    </ul>

    <div class="about-actions-row">
      <a class="btn btn-primary" href="<?= e(url('contact.php')) ?>">
        <span>Let's Connect</span> <span>↗</span>
      </a>
      <a class="btn btn-ghost" href="<?= e(url('projects.php')) ?>">
        <span>View My Projects</span>
      </a>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">GUIDING PRINCIPLES</p>
      <h2>What fuels my <span class="gradient-text">everyday work.</span></h2>
    </div>
  </div>

  <div class="value-grid">
    <article class="value-card reveal">
      <span class="val-num">✦ 01</span>
      <h3>Unquenchable Curiosity</h3>
      <p>I never settle for surface-level answers. Whether inspecting network packets or debugging complex SQL queries, I delve into how systems operate under the hood.</p>
    </article>

    <article class="value-card reveal">
      <span class="val-num">✦ 02</span>
      <h3>Practical Human Utility</h3>
      <p>The best code is software that makes someone's day easier, safer, or more productive. I design systems with end users, accessibility, and clear interfaces at the core.</p>
    </article>

    <article class="value-card reveal">
      <span class="val-num">✦ 03</span>
      <h3>Security &amp; Integrity</h3>
      <p>From parameterized database queries to rigorous data validation and defensive network protocols, I treat privacy and application security as fundamental pillars.</p>
    </article>

    <article class="value-card reveal">
      <span class="val-num">✦ 04</span>
      <h3>Consistent Growth</h3>
      <p>Technology evolves constantly, and so do I. I view every bug as a lesson, every project as a stepping stone, and every collaboration as an opportunity to learn.</p>
    </article>

    <article class="value-card reveal">
      <span class="val-num">✦ 05</span>
      <h3>Community Engagement</h3>
      <p>Active participation in tech communities, student leadership (IEDC), and service organizations (NSS, Scouts &amp; Guides) keeps my perspective grounded and collaborative.</p>
    </article>

    <article class="value-card reveal">
      <span class="val-num">✦ 06</span>
      <h3>Clarity &amp; Simplicity</h3>
      <p>Clean code, understandable architectures, and structured documentation trump unnecessary complexity every single time.</p>
    </article>
  </div>
</section>

<!-- BEYOND CODING -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">COMMUNITY &amp; LEADERSHIP</p>
      <h2>Beyond the <span class="gradient-text">terminal.</span></h2>
    </div>
  </div>

  <div class="community-grid">
    <div class="community-card reveal">
      <div class="c-badge">COMMUNITY SERVICE</div>
      <h3>National Service Scheme (NSS)</h3>
      <p>Dedicated volunteer participating in community outreach, literacy initiatives, environmental drives, and social welfare camps throughout Kerala.</p>
    </div>

    <div class="community-card reveal">
      <div class="c-badge">INNOVATION</div>
      <h3>IEDC Executive Member</h3>
      <p>Helped organize workshops, ideation hackathons, and technical bootcamps to foster an entrepreneurial mindset among fellow engineering students.</p>
    </div>

    <div class="community-card reveal">
      <div class="c-badge">DISCIPLINE &amp; LEADERSHIP</div>
      <h3>The Bharat Scouts &amp; Guides</h3>
      <p>Engaged in leadership training, outdoor preparedness camps, disaster response drills, and youth leadership conventions.</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section-wrap cta-section reveal">
  <div>
    <p class="eyebrow">WANT TO KNOW MORE?</p>
    <h2>Let's build something meaningful <span class="gradient-text">together.</span></h2>
  </div>
  <a class="btn btn-primary" href="<?= e(url('contact.php')) ?>">Get In Touch ↗</a>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
