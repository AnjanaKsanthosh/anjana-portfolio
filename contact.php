<?php
require_once __DIR__ . '/config/config.php';
$pageTitle = 'Contact Me';
$errors = [];
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') 
          || (!empty($_POST['is_ajax']) && $_POST['is_ajax'] === '1');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot check for bots
    if (!empty($_POST['website_url'])) {
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => 'Message received.']);
            exit;
        }
        header('Location: ' . url('contact.php'));
        exit;
    }

    verify_csrf();
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || mb_strlen($name) > 100) {
        $errors[] = 'Please enter your name (up to 100 characters).';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($subject === '' || mb_strlen($subject) > 160) {
        $errors[] = 'Please enter a subject (up to 160 characters).';
    }
    if ($message === '' || mb_strlen($message) > 5000) {
        $errors[] = 'Please enter a message (up to 5000 characters).';
    }

    if (!$errors) {
        try {
            $stmt = db()->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $subject, $message]);

            if ($isAjax) {
                header('Content-Type: application/json');
                echo json_encode([
                    'success' => true,
                    'message' => 'Thank you, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '! Your message has been sent successfully. I will get back to you shortly.'
                ]);
                exit;
            }

            flash('success', 'Thank you! Your message has been received.');
            header('Location: ' . url('contact.php'));
            exit;
        } catch (Throwable $e) {
            $errors[] = 'Unable to save your message right now. Please email directly at ' . APP_EMAIL;
        }
    }

    if ($isAjax) {
        header('Content-Type: application/json');
        http_response_code(422);
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
}

$success = flash('success');
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero section-wrap">
  <div class="page-hero-badge">
    <span class="badge-dot"></span>
    <span>COMMUNICATIONS</span>
  </div>
  <h1>Let's start a<br><span class="gradient-text">meaningful dialogue.</span></h1>
  <p class="page-lead">
    Whether you have an exciting technical opportunity, an open-source project collaboration, or just want to say hi, my inbox is always open.
  </p>
</section>

<section class="section-wrap contact-layout">
  <!-- Contact Information Sidebar -->
  <aside class="contact-aside">
    <div class="aside-header-box">
      <span class="aside-eyebrow">DIRECT CONTACT</span>
      <h2>Get in touch directly.</h2>
      <p class="muted">
        Feel free to reach out via email, connect on LinkedIn, or inspect my repositories on GitHub.
      </p>
    </div>

    <!-- Direct Email Card with 1-click Copy -->
    <div class="contact-channel-card">
      <div class="channel-icon">✉️</div>
      <div class="channel-info">
        <span class="channel-label">EMAIL ADDRESS</span>
        <a href="mailto:<?= e(APP_EMAIL) ?>" class="channel-main-link"><?= e(APP_EMAIL) ?></a>
      </div>
      <button type="button" class="copy-email-btn" id="copyEmailBtn" data-email="<?= e(APP_EMAIL) ?>" title="Copy email address">
        <span>Copy</span> 📋
      </button>
    </div>

    <!-- Location Card -->
    <div class="contact-channel-card">
      <div class="channel-icon">📍</div>
      <div class="channel-info">
        <span class="channel-label">LOCATION &amp; TIMEZONE</span>
        <p class="channel-text">Kerala, India (IST · UTC +5:30)</p>
      </div>
    </div>

    <!-- Professional Profiles -->
    <div class="contact-channel-card">
      <div class="channel-icon">🌐</div>
      <div class="channel-info">
        <span class="channel-label">PROFESSIONAL NETWORKS</span>
        <div class="social-pills-row">
          <a href="https://github.com/" target="_blank" rel="noopener" class="mini-social-pill">
            GitHub ↗
          </a>
          <a href="https://www.linkedin.com/" target="_blank" rel="noopener" class="mini-social-pill">
            LinkedIn ↗
          </a>
        </div>
      </div>
    </div>

    <!-- Status Callout -->
    <div class="contact-availability-box">
      <div class="avail-indicator">
        <span class="pulsing-led"></span>
        <strong>Currently Available</strong>
      </div>
      <p>Open for full-time software engineering roles, network engineering internships, and research projects.</p>
    </div>
  </aside>

  <!-- Interactive Contact Form -->
  <div class="contact-form-container">
    <form class="contact-form" id="contactForm" method="post" action="<?= e(url('contact.php')) ?>">
      <!-- Alerts container for PHP and AJAX feedback -->
      <div id="formAlertBox">
        <?php if ($success): ?>
          <div class="alert success" role="alert"><?= e($success) ?></div>
        <?php endif; ?>
        <?php foreach ($errors as $error): ?>
          <div class="alert error" role="alert"><?= e($error) ?></div>
        <?php endforeach; ?>
      </div>

      <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
      <input type="hidden" name="is_ajax" value="1">
      <!-- Honeypot anti-spam field -->
      <div style="display:none;" aria-hidden="true">
        <input type="text" name="website_url" tabindex="-1" autocomplete="off">
      </div>

      <!-- Quick Subject Suggestions -->
      <div class="topic-chips-wrapper">
        <span class="chips-title">Quick Topic:</span>
        <div class="chips-row">
          <button type="button" class="topic-chip" data-subject="💼 Job Opportunity / Full-time Role">💼 Job Opportunity</button>
          <button type="button" class="topic-chip" data-subject="🚀 Project Collaboration">🚀 Project Collaboration</button>
          <button type="button" class="topic-chip" data-subject="🌐 Network Engineering Query">🌐 Network Engineering</button>
          <button type="button" class="topic-chip" data-subject="👋 Just saying hello!">👋 Say Hello</button>
        </div>
      </div>

      <div class="form-row-two">
        <label class="form-field">
          <span class="field-label">Your Name <span class="req-star">*</span></span>
          <input type="text" name="name" id="contactName" maxlength="100" required 
                 value="<?= e($_POST['name'] ?? '') ?>" placeholder="e.g. Maya Nair" autocomplete="name">
        </label>

        <label class="form-field">
          <span class="field-label">Email Address <span class="req-star">*</span></span>
          <input type="email" name="email" id="contactEmail" maxlength="190" required 
                 value="<?= e($_POST['email'] ?? '') ?>" placeholder="name@company.com" autocomplete="email">
        </label>
      </div>

      <label class="form-field">
        <span class="field-label">Subject <span class="req-star">*</span></span>
        <input type="text" name="subject" id="contactSubject" maxlength="160" required 
               value="<?= e($_POST['subject'] ?? '') ?>" placeholder="What is this inquiry regarding?">
      </label>

      <label class="form-field">
        <div class="textarea-header">
          <span class="field-label">Your Message <span class="req-star">*</span></span>
          <span class="char-counter" id="charCounter">0 / 5000</span>
        </div>
        <textarea name="message" id="contactMessage" rows="6" maxlength="5000" required 
                  placeholder="Share details about your project, idea, or role..."><?= e($_POST['message'] ?? '') ?></textarea>
      </label>

      <div class="form-submit-row">
        <button class="btn btn-primary btn-lg" type="submit" id="submitContactBtn">
          <span class="btn-text">Send Message</span>
          <span class="btn-spinner" style="display:none;">⏳ Sending...</span>
          <span class="btn-icon">↗</span>
        </button>
        <span class="privacy-note">🔒 Your information is transmitted securely and never shared.</span>
      </div>
    </form>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
