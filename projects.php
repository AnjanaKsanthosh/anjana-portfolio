<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Projects Portfolio';

try {
    $projects = db()->query("SELECT * FROM projects ORDER BY sort_order ASC, created_at DESC")->fetchAll();
} catch (Throwable $e) {
    $projects = [];
}

$categories = array_values(array_unique(array_filter(array_column($projects, 'category'))));
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-wrap">
  <div class="page-hero-badge">
    <span class="badge-dot"></span>
    <span>CURATED ARCHIVE</span>
  </div>
  <h1>Things I've conceived,<br><span class="gradient-text">engineered &amp; built.</span></h1>
  <p class="page-lead">
    A comprehensive showcase spanning web platforms, database applications, and mobile scam awareness prototypes.
  </p>
</section>

<section class="section-wrap section-block">
  <!-- Controls toolbar: Search & Category Filter -->
  <div class="projects-toolbar">
    <div class="search-input-box">
      <span class="search-icon">🔍</span>
      <input type="text" id="projectSearchInput" placeholder="Search by name, technology, keyword (e.g., PHP, React, Security)..." autocomplete="off">
      <button type="button" id="clearSearchBtn" class="clear-btn" aria-label="Clear search" hidden>✕</button>
    </div>

    <div class="filter-row" role="tablist">
      <button class="filter-btn active" data-filter="all" role="tab" aria-selected="true">
        All Projects <span class="filter-count">(<?= count($projects) ?>)</span>
      </button>
      <?php foreach ($categories as $cat): ?>
        <?php 
          $countForCat = count(array_filter($projects, fn($p) => strtolower($p['category'] ?? '') === strtolower($cat)));
        ?>
        <button class="filter-btn" data-filter="<?= e(strtolower($cat)) ?>" role="tab" aria-selected="false">
          <?= e($cat) ?> <span class="filter-count">(<?= $countForCat ?>)</span>
        </button>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Projects Grid -->
  <div class="project-grid" id="projectGrid">
    <?php if (!empty($projects)): ?>
      <?php foreach ($projects as $project): ?>
        <div class="filter-item" 
             data-category="<?= e(strtolower($project['category'] ?? 'other')) ?>"
             data-search-terms="<?= e(strtolower($project['title'] . ' ' . $project['description'] . ' ' . $project['technologies'] . ' ' . ($project['category'] ?? ''))) ?>">
          <?php include __DIR__ . '/includes/project-card.php'; ?>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="empty-state">
        <h3>No projects registered yet</h3>
        <p>You can add your projects via the admin dashboard.</p>
        <a href="<?= e(url('admin/login.php')) ?>" class="btn btn-primary btn-sm">Sign in to Admin</a>
      </div>
    <?php endif; ?>
    
    <!-- Dynamic JS Search/Filter Empty State -->
    <div class="empty-state" id="noFilterResults" hidden>
      <h3>No matching projects found</h3>
      <p>Try searching with another keyword or resetting the category filter.</p>
      <button type="button" class="btn btn-ghost btn-sm" id="resetFiltersBtn">Reset Filters</button>
    </div>
  </div>
</section>

<!-- PROJECT HIGHLIGHT BANNER -->
<section class="section-wrap terminal-cta-banner reveal">
  <div class="term-cta-copy">
    <span class="terminal-badge">✦ FUTURE ROADMAP</span>
    <h2>Interested in my upcoming research projects?</h2>
    <p>I am currently exploring network telemetry, automated routing diagnostics, and security auditing prototypes as part of my M.Tech curriculum.</p>
  </div>
  <a class="btn btn-primary" href="<?= e(url('contact.php')) ?>">Discuss Research ↗</a>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
