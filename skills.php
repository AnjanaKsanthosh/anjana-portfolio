<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Technical Skills & Toolkit';
include __DIR__ . '/includes/header.php';

$skillCategories = [
    [
        'category' => 'Computer Networks & Security',
        'icon' => '🌐',
        'description' => 'Core postgraduate specialization and practical defensive utility engineering.',
        'skills' => [
            ['name' => 'TCP/IP Architecture & Protocols', 'level' => 90, 'desc' => 'Addressing, subnetting, TCP/UDP transport, DNS, DHCP, HTTP/HTTPS.'],
            ['name' => 'Network Security & Scam Defense', 'level' => 88, 'desc' => 'Phishing detection heuristics, secure communications, threat prevention.'],
            ['name' => 'Routing & Switching Fundamentals', 'level' => 85, 'desc' => 'Static & dynamic routing, VLANs, network topologies.'],
            ['name' => 'Network Analysis (Wireshark)', 'level' => 82, 'desc' => 'Packet capture, protocol dissection, latency & troubleshooting.']
        ]
    ],
    [
        'category' => 'Backend & Server-Side Engineering',
        'icon' => '⚙️',
        'description' => 'Scalable server-side logic, secure database querying, and API endpoints.',
        'skills' => [
            ['name' => 'PHP 8 (Modern Object-Oriented)', 'level' => 92, 'desc' => 'Session auth, PDO prepared statements, CSRF protection, clean MVC patterns.'],
            ['name' => 'Node.js & Express.js', 'level' => 84, 'desc' => 'Asynchronous API servers, JSON endpoints, middleware pipelines.'],
            ['name' => 'RESTful API Architecture', 'level' => 88, 'desc' => 'Stateless HTTP design, request validation, proper status codes & headers.'],
            ['name' => 'Secure Authentication & RBAC', 'level' => 86, 'desc' => 'Password hashing (bcrypt), role-based permission trees, security tokens.']
        ]
    ],
    [
        'category' => 'Database Management Systems',
        'icon' => '🗄️',
        'description' => 'Relational database schema design, queries, optimization, and normalization.',
        'skills' => [
            ['name' => 'MySQL & MariaDB', 'level' => 92, 'desc' => 'Normalized schemas, foreign keys, indexing, complex JOIN queries.'],
            ['name' => 'PostgreSQL', 'level' => 85, 'desc' => 'Advanced relational queries, constraints, ACID transactions.'],
            ['name' => 'SQLite', 'level' => 88, 'desc' => 'Zero-config embedded storage, lightweight file-backed applications.'],
            ['name' => 'Data Modeling & ER Diagrams', 'level' => 90, 'desc' => 'Entity relationship diagrams, 3NF normalization, transactional integrity.']
        ]
    ],
    [
        'category' => 'Frontend & Web Interface Design',
        'icon' => '🎨',
        'description' => 'Responsive, performant, and accessible user interfaces.',
        'skills' => [
            ['name' => 'HTML5 & Semantic Web', 'level' => 95, 'desc' => 'Clean semantics, accessibility standards (ARIA), SEO best practices.'],
            ['name' => 'Modern CSS3 & Animations', 'level' => 92, 'desc' => 'Flexbox, CSS Grid, custom properties, keyframe animations, glassmorphism.'],
            ['name' => 'JavaScript (ES6+)', 'level' => 88, 'desc' => 'DOM manipulation, async/await, Fetch API, closures, modular patterns.'],
            ['name' => 'React.js & Tailwind CSS', 'level' => 85, 'desc' => 'Functional components, hooks, state management, utility-first styling.']
        ]
    ],
    [
        'category' => 'Developer Tools & Workflows',
        'icon' => '🛠️',
        'description' => 'Modern tooling for disciplined, version-controlled software development.',
        'skills' => [
            ['name' => 'Git & GitHub Collaboration', 'level' => 90, 'desc' => 'Branching, PRs, version control, conflict resolution, GitHub Pages.'],
            ['name' => 'VS Code & Development Tooling', 'level' => 95, 'desc' => 'Linting, debugging, extensions, productivity shortcuts.'],
            ['name' => 'Postman & API Testing', 'level' => 88, 'desc' => 'Endpoint regression testing, parameter mocking, payload inspection.'],
            ['name' => 'XAMPP & Apache Environment', 'level' => 92, 'desc' => 'Local web server administration, virtual hosts, php.ini configuration.']
        ]
    ]
];
?>
<section class="page-hero section-wrap">
  <div class="page-hero-badge">
    <span class="badge-dot"></span>
    <span>TECHNICAL CAPABILITIES</span>
  </div>
  <h1>Skills I've honed.<br><span class="gradient-text">Technologies I leverage.</span></h1>
  <p class="page-lead">
    A balanced blend of network fundamentals, server-side development, database architecture, and modern front-end craftsmanship.
  </p>
</section>

<section class="section-wrap section-block">
  <div class="skills-categories-grid">
    <?php foreach ($skillCategories as $catIdx => $cat): ?>
      <div class="skill-category-box reveal">
        <div class="category-header">
          <span class="cat-icon"><?= $cat['icon'] ?></span>
          <div>
            <h3><?= e($cat['category']) ?></h3>
            <p><?= e($cat['description']) ?></p>
          </div>
        </div>

        <div class="category-skill-items">
          <?php foreach ($cat['skills'] as $skill): ?>
            <div class="skill-bar-card">
              <div class="skill-bar-top">
                <span class="skill-title"><?= e($skill['name']) ?></span>
                <span class="skill-pct"><?= (int)$skill['level'] ?>%</span>
              </div>
              <div class="skill-track">
                <div class="skill-fill" style="width: <?= (int)$skill['level'] ?>%"></div>
              </div>
              <p class="skill-detail-text"><?= e($skill['desc']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- TECH STACK LOGOS / PILLS -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">QUICK GLANCE MATRIX</p>
      <h2>Tools at a <span class="gradient-text">glance.</span></h2>
    </div>
  </div>

  <div class="tools-cloud reveal">
    <span class="tool-tag">PHP 8</span>
    <span class="tool-tag">MySQL</span>
    <span class="tool-tag">React.js</span>
    <span class="tool-tag">JavaScript ES6+</span>
    <span class="tool-tag">Tailwind CSS</span>
    <span class="tool-tag">PostgreSQL</span>
    <span class="tool-tag">Computer Networks</span>
    <span class="tool-tag">Node.js</span>
    <span class="tool-tag">Express.js</span>
    <span class="tool-tag">HTML5 / CSS3</span>
    <span class="tool-tag">Wireshark</span>
    <span class="tool-tag">Git &amp; GitHub</span>
    <span class="tool-tag">Postman</span>
    <span class="tool-tag">Apache / XAMPP</span>
    <span class="tool-tag">REST APIs</span>
    <span class="tool-tag">Android Basics</span>
    <span class="tool-tag">Cyber Defense</span>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="section-wrap cta-section reveal">
  <div>
    <p class="eyebrow">NEED SPECIFIC TECHNICAL EXPERTISE?</p>
    <h2>Let's discuss how my skills align with <span class="gradient-text">your goals.</span></h2>
  </div>
  <a class="btn btn-primary" href="<?= e(url('contact.php')) ?>">Start A Conversation ↗</a>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
