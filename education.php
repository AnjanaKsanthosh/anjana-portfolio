<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Education & Milestones';
include __DIR__ . '/includes/header.php';

$education = [
    [
        'period' => '2026 – Present',
        'degree' => 'M.Tech – Network Engineering',
        'institution' => 'Government Engineering College, Barton Hill, Thiruvananthapuram',
        'badge' => 'Postgraduate Study',
        'description' => 'Specialized research focusing on advanced computer network architectures, distributed protocols, dynamic routing systems, packet inspection, and modern cybersecurity strategies.',
        'highlights' => [
            'In-depth study of high-throughput routing protocols and network simulation.',
            'Research into packet-level security inspection and cyber threat mitigation.',
            'Collaborative lab experimentation in distributed server infrastructure.'
        ]
    ],
    [
        'period' => '2023 – 2026',
        'degree' => 'B.Tech – Computer Science and Engineering',
        'institution' => 'Rajiv Gandhi Institute of Technology (RIT), Kottayam',
        'badge' => 'Undergraduate Degree',
        'description' => 'Comprehensive four-year curriculum spanning fundamental computer science disciplines, software engineering methodologies, database modeling, and application design.',
        'highlights' => [
            'Core coursework: Operating Systems, Computer Networks, DBMS, Object-Oriented Programming, Theory of Computation.',
            'Engineered full-stack capstone projects using modern PHP, JavaScript, and relational databases.',
            'Active involvement in technical symposiums, coding competitions, and IEDC events.'
        ]
    ],
    [
        'period' => '2020 – 2023',
        'degree' => 'Diploma – Computer Science and Engineering',
        'institution' => 'State Board of Technical Education, Kerala',
        'badge' => 'CGPA 9.3 · Distinction',
        'description' => 'Rigorous three-year diploma program establishing rock-solid roots in computer programming, hardware basics, and software development practices.',
        'highlights' => [
            'Graduated with outstanding academic distinction (9.3 CGPA).',
            'Strong foundational training in C programming, Web Technologies, and Database Design.',
            'Ranked among the top performers of the department cohort.'
        ]
    ]
];

$experiences = [
    [
        'title' => 'Kerala Police Academy',
        'role' => 'Cybersecurity & Android Development Intern',
        'period' => 'Internship',
        'icon' => '🛡️',
        'summary' => 'Researched mobile phishing vectors and engineered SaferNet, an Android utility to detect deceptive SMS messages, evaluate scam URLs, and provide direct reporting conduits.'
    ],
    [
        'title' => 'Tink-Her-Hack (TinkerHub)',
        'role' => 'Hackathon Innovator & Project Lead',
        'period' => 'Hackathon',
        'icon' => '🌾',
        'summary' => 'Collaborated in an intensive hackathon sprint to architect FamConnect, a direct-to-consumer digital marketplace allowing rural farmers to sell produce without middlemen cuts.'
    ],
    [
        'title' => 'IEDC (Innovation & Entrepreneurship)',
        'role' => 'Executive Committee Member',
        'period' => 'Student Leadership',
        'icon' => '🚀',
        'summary' => 'Coordinated technology bootcamps, ideation pitch sessions, and guest speaker workshops to encourage software innovation and entrepreneurial ventures on campus.'
    ],
    [
        'title' => 'National Service Scheme (NSS)',
        'role' => 'Active Volunteer & Organizer',
        'period' => 'Community Service',
        'icon' => '🤝',
        'summary' => 'Participated in community health camps, digital literacy programs for senior citizens, environmental conservation drives, and relief assistance operations.'
    ]
];
?>
<section class="page-hero section-wrap">
  <div class="page-hero-badge">
    <span class="badge-dot"></span>
    <span>THE ACADEMIC JOURNEY</span>
  </div>
  <h1>Education, credentials<br><span class="gradient-text">&amp; milestones.</span></h1>
  <p class="page-lead">
    A progression marked by academic excellence, practical engineering projects, and leadership in technical communities.
  </p>
</section>

<!-- TIMELINE SECTION -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">ACADEMIC TIMELINE</p>
      <h2>Formal degrees &amp; <span class="gradient-text">qualifications.</span></h2>
    </div>
  </div>

  <div class="timeline-container">
    <?php foreach ($education as $item): ?>
      <article class="timeline-entry reveal">
        <div class="timeline-time-col">
          <span class="timeline-pill"><?= e($item['period']) ?></span>
        </div>
        <div class="timeline-node">
          <div class="timeline-dot-ring"></div>
        </div>
        <div class="timeline-content-card">
          <div class="card-header-flex">
            <div>
              <h3><?= e($item['degree']) ?></h3>
              <h4><?= e($item['institution']) ?></h4>
            </div>
            <span class="score-badge"><?= e($item['badge']) ?></span>
          </div>
          <p class="card-desc"><?= e($item['description']) ?></p>
          <ul class="highlights-list">
            <?php foreach ($item['highlights'] as $highlight): ?>
              <li><?= e($highlight) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- EXPERIENCES & INVOLVEMENT -->
<section class="section-wrap section-block">
  <div class="section-heading">
    <div>
      <p class="eyebrow">EXPERIENCES &amp; LEADERSHIP</p>
      <h2>Practical training &amp; <span class="gradient-text">impact.</span></h2>
    </div>
  </div>

  <div class="experience-matrix">
    <?php foreach ($experiences as $exp): ?>
      <article class="experience-box reveal">
        <div class="exp-icon-bubble"><?= $exp['icon'] ?></div>
        <div class="exp-topline">
          <span class="exp-period-tag"><?= e($exp['period']) ?></span>
        </div>
        <h3><?= e($exp['title']) ?></h3>
        <h4><?= e($exp['role']) ?></h4>
        <p><?= e($exp['summary']) ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- RESUME CALLOUT -->
<section class="section-wrap terminal-cta-banner reveal">
  <div class="term-cta-copy">
    <span class="terminal-badge">📄 FORMAL CURRICULUM VITAE</span>
    <h2>Need a printable copy of my resume?</h2>
    <p>View the complete formatted resume with contact details, academic achievements, and technical competencies.</p>
  </div>
  <button type="button" class="btn btn-primary" id="eduResumeTrigger">
    <span>View Curriculum Vitae</span> 📄
  </button>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
