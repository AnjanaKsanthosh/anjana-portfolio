<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Home';

// Query featured projects from database with error handling
try {
    $projects = db()->query("SELECT * FROM projects WHERE is_featured = 1 ORDER BY sort_order ASC, created_at DESC LIMIT 3")->fetchAll();
} catch (Throwable $e) {
    $projects = [];
}

include __DIR__ . '/includes/header.php';
?>
<!-- HERO SECTION -->
<section class="hero section-wrap" id="top">
  <div class="hero-copy">
    <div class="hero-badge-pill">
      <span class="status-dot-pulse"></span>
      <span class="badge-text">OPEN TO OPPORTUNITIES</span>
      <span class="badge-divider">·</span>
      <span class="badge-location">📍 Kerala, India</span>
    </div>

    <p class="hero-kicker">Hello, I'm</p>
    <h1 class="hero-name">Anjana K<br><span class="gradient-text">Santhosh.</span></h1>

    <div class="role-line">
      <span class="role-prefix">I am a</span>
      <span class="typed-text" id="typedText">Computer Science Graduate</span>
      <span class="typing-cursor">|</span>
    </div>

    <p class="hero-description">
      Computer Science graduate and Network Engineering postgraduate scholar passionate about engineering practical, resilient web systems and exploring computer networks, cybersecurity, and modern full-stack development.
    </p>

    <div class="hero-actions">
      <a class="btn btn-primary" href="<?= e(url('projects.php')) ?>">
        <span>Explore My Work</span> <span class="btn-icon">↗</span>
      </a>
      <button type="button" class="btn btn-secondary" id="heroResumeTrigger">
        <span>View Resume</span> <span class="btn-icon">📄</span>
      </button>
      <a class="btn btn-ghost" href="<?= e(url('contact.php')) ?>">
        <span>Get In Touch</span>
      </a>
    </div>

    <div class="social-row">
      <a href="https://github.com/AnjanaKsanthosh" target="_blank" rel="noopener" class="social-link">
        <span class="s-icon">🐙</span> GitHub ↗
      </a>
      <a href="https://www.linkedin.com/in/anjana-k-santhosh" target="_blank" rel="noopener" class="social-link">
        <span class="s-icon">💼</span> LinkedIn ↗
      </a>
      <a href="mailto:<?= e(APP_EMAIL) ?>" class="social-link">
        <span class="s-icon">✉️</span> <?= e(APP_EMAIL) ?>
      </a>
      <span class="social-divider"></span>
      <span class="live-clock-tag">
        <span class="clock-icon">🕒</span> <span id="heroClock">Kolkata IST</span>
      </span>
    </div>
  </div>

  <div class="hero-visual">
    <!-- Ambient glowing backgrounds & orbits -->
    <div class="orbit orbit-one"></div>
    <div class="orbit orbit-two"></div>
    <div class="hero-glow-blob"></div>

    <!-- 3D Tilting Profile Card -->
    <div class="profile-card-3d" id="profile3dCard">
      <div class="profile-frame">
        <?php 
          $profilePhotoPath = __DIR__ . '/assets/images/profile.jpge';
          $profileSrc = file_exists($profilePhotoPath) 
            ? url('assets/images/profile.jpge') 
            : url('assets/images/profile-avatar.svg');
        ?>
        <img src="<?= e($profileSrc) ?>" alt="Anjana K Santhosh" class="profile-img" id="profileImg">
        <div class="profile-card-glare"></div>
      </div>

      <!-- Floating Tech Badge Top Right -->
      <div class="float-card float-card-top">
        <span class="float-icon">🎓</span>
        <div class="float-info">
          <b>M.Tech NetEng</b>
          <small>GEC Barton Hill</small>
        </div>
      </div>

      <!-- Floating Tech Badge Bottom Left -->
      <div class="float-card float-card-bottom">
        <span class="float-icon">🛡️</span>
        <div class="float-info">
          <b>SaferNet Shield</b>
          <small>Kerala Police Academy</small>
        </div>
      </div>

      <!-- Floating Tech Badge Center Left -->
      <div class="float-card float-card-mid">
        <span class="float-icon">⚡</span>
        <div class="float-info">
          <b>Full-Stack &amp; Net</b>
          <small>PHP · React · MySQL</small>
        </div>
      </div>
    </div>

    <div class="hero-meta-badge">
      <span class="badge-accent">01</span>
      <span>ENGINEER &amp; DEVELOPER</span>
    </div>
  </div>
</section>

<!-- INFINITE MARQUEE STRIP -->
<section class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <div class="ticker-content">
      <span>COMPUTER NETWORKS</span><i>✳</i>
      <span>FULL-STACK WEB DEVELOPMENT</span><i>✳</i>
      <span>PHP 8 &amp; MYSQL</span><i>✳</i>
      <span>REACT &amp; TAILWIND</span><i>✳</i>
      <span>CYBER THREAT DEFENSE</span><i>✳</i>
      <span>POSTGRESQL &amp; PDO</span><i>✳</i>
      <span>DISTRIBUTED SYSTEMS</span><i>✳</i>
      <span>CONTINUOUS LEARNING</span><i>✳</i>
    </div>
    <div class="ticker-content" aria-hidden="true">
      <span>COMPUTER NETWORKS</span><i>✳</i>
      <span>FULL-STACK WEB DEVELOPMENT</span><i>✳</i>
      <span>PHP 8 &amp; MYSQL</span><i>✳</i>
      <span>REACT &amp; TAILWIND</span><i>✳</i>
      <span>CYBER THREAT DEFENSE</span><i>✳</i>
      <span>POSTGRESQL &amp; PDO</span><i>✳</i>
      <span>DISTRIBUTED SYSTEMS</span><i>✳</i>
      <span>CONTINUOUS LEARNING</span><i>✳</i>
    </div>
  </div>
</section>

<!-- INTRODUCTION & STATS -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">A BRIEF INTRODUCTION</p>
      <h2>Curiosity is my compass.<br><span class="gradient-text">Impact is my objective.</span></h2>
    </div>
    <a class="text-link" href="<?= e(url('about.php')) ?>">
      <span>Learn more about my background</span> ↗
    </a>
  </div>

  <div class="about-preview-grid">
    <div class="about-copy-col">
      <p class="large-lead">
        I am fascinated by how data moves across networks and how intuitive software can bridge complex real-world gaps. From helping rural farmers bypass intermediaries to alerting citizens about scam SMS threats, I build practical software grounded in solid fundamentals.
      </p>
      <div class="about-highlights-row">
        <div class="highlight-item">
          <span class="h-icon">🌐</span>
          <div>
            <strong>Network Engineering</strong>
            <p>Postgraduate research in protocols, security &amp; architectures.</p>
          </div>
        </div>
        <div class="highlight-item">
          <span class="h-icon">💻</span>
          <div>
            <strong>Web Applications</strong>
            <p>Database-backed systems with clean responsive user interfaces.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Stats Cards -->
    <div class="stats-card-matrix">
      <div class="stat-matrix-cell">
        <strong class="stat-num" data-count="6">06+</strong>
        <span class="stat-label">Production &amp; Academic Projects</span>
      </div>
      <div class="stat-matrix-cell">
        <strong class="stat-num">9.3</strong>
        <span class="stat-label">Diploma CGPA with Distinction</span>
      </div>
      <div class="stat-matrix-cell">
        <strong class="stat-num">02</strong>
        <span class="stat-label">Specialized Tech Degrees (B.Tech &amp; M.Tech)</span>
      </div>
      <div class="stat-matrix-cell">
        <strong class="stat-num">100%</strong>
        <span class="stat-label">Commitment to Continuous Growth</span>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED PROJECTS -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">SELECTED HIGHLIGHTS</p>
      <h2>Work that makes a <span class="gradient-text">difference.</span></h2>
    </div>
    <div class="heading-actions">
      <a class="btn btn-sm btn-ghost" href="<?= e(url('projects.php')) ?>">
        <span>View all projects</span> ↗
      </a>
    </div>
  </div>

  <div class="project-grid">
    <?php if (!empty($projects)): ?>
      <?php foreach ($projects as $project): ?>
        <?php include __DIR__ . '/includes/project-card.php'; ?>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="empty-state">
        <p>No featured projects found. Visit the admin dashboard to add and feature projects.</p>
        <a href="<?= e(url('admin/login.php')) ?>" class="btn btn-sm btn-primary">Go to Admin</a>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- CORE PILLARS & EXPERTISE -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">CORE COMPETENCIES</p>
      <h2>What I bring to <span class="gradient-text">the table.</span></h2>
    </div>
    <a class="text-link" href="<?= e(url('skills.php')) ?>">
      <span>Explore technical toolkit</span> ↗
    </a>
  </div>

  <div class="pillar-grid">
    <div class="pillar-card reveal">
      <div class="pillar-header">
        <span class="pillar-index">01</span>
        <span class="pillar-glyph">🌐</span>
      </div>
      <h3>Computer Networks &amp; Security</h3>
      <p>Knowledge of network architecture, routing protocols, packet inspection, socket programming, and cyber threat identification strategies.</p>
      <div class="pillar-tags">
        <span>TCP/IP</span>
        <span>Routing Protocols</span>
        <span>Network Security</span>
        <span>Wireshark</span>
      </div>
    </div>

    <div class="pillar-card reveal">
      <div class="pillar-header">
        <span class="pillar-index">02</span>
        <span class="pillar-glyph">⚙️</span>
      </div>
      <h3>Backend &amp; Database Architecture</h3>
      <p>Building secure APIs and data models using PHP, MySQL, and PostgreSQL with PDO prepared statements and robust business logic.</p>
      <div class="pillar-tags">
        <span>PHP 8</span>
        <span>MySQL</span>
        <span>PostgreSQL</span>
        <span>REST APIs</span>
      </div>
    </div>

    <div class="pillar-card reveal">
      <div class="pillar-header">
        <span class="pillar-index">03</span>
        <span class="pillar-glyph">🎨</span>
      </div>
      <h3>Frontend &amp; User Experience</h3>
      <p>Crafting accessible, responsive web interfaces with semantic HTML5, modern CSS3 animations, React.js components, and Tailwind styling.</p>
      <div class="pillar-tags">
        <span>React.js</span>
        <span>JavaScript ES6+</span>
        <span>Tailwind CSS</span>
        <span>Responsive UI</span>
      </div>
    </div>
  </div>
</section>

<!-- INTERACTIVE CALLOUT / QUICK TERMINAL PREVIEW -->
<section class="section-wrap terminal-cta-banner reveal">
  <div class="term-cta-copy">
    <span class="terminal-badge">&gt;_ DEVELOPER CONSOLE</span>
    <h2>Prefer the command line?</h2>
    <p>Explore my skills, educational background, and project details via an interactive terminal directly in your browser.</p>
  </div>
  <button type="button" class="btn btn-primary" id="launchTermBtn">
    <span>Launch Terminal</span> ⚡
  </button>
</section>

<!-- CALL TO ACTION -->
<section class="section-wrap cta-section reveal">
  <div class="cta-content">
    <p class="eyebrow">LET'S COLLABORATE</p>
    <h2>Have a project or opportunity?<br><span class="gradient-text">Let's create something great.</span></h2>
    <p class="cta-subtext">I am always open to discussing new roles, research ideas, or engineering collaborations.</p>
  </div>
  <div class="cta-actions">
    <a class="btn btn-primary btn-lg" href="<?= e(url('contact.php')) ?>">
      <span>Start A Conversation</span> <span>↗</span>
    </a>
    <a class="btn btn-ghost" href="mailto:<?= e(APP_EMAIL) ?>">
      <span>Direct Email</span>
    </a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
