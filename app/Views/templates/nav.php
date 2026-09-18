<!-- Google Fonts & Bootstrap -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #0b0f19 !important;
        color: #e5e7eb !important;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .httyd-font {
        font-family: 'Cinzel', serif;
        letter-spacing: 1px;
    }
    .httyd-nav {
        background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
        border-bottom: 3px solid #f59e0b;
        box-shadow: 0 4px 20px rgba(245, 158, 11, 0.15);
    }
    .httyd-brand {
        color: #f59e0b !important;
        text-shadow: 0 0 8px rgba(245, 158, 11, 0.4);
    }
    .nav-link {
        color: #d1d5db !important;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    .nav-link:hover {
        color: #f59e0b !important;
        transform: translateY(-1px);
    }
    .httyd-card {
        background: #111827;
        border: 2px solid #374151;
        border-top: 4px solid #ef4444; /* Toothless Tail Red Accent */
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    }
</style>

<nav class="navbar navbar-expand-lg httyd-nav rounded-3 my-3 px-4">
    <a class="navbar-brand httyd-font httyd-brand fs-4" href="<?= base_url('/') ?>">
        Four-Pages
    </a>
    <div class="navbar-nav ms-auto">
        <a class="nav-link px-3" href="<?= site_url('/') ?>">Home</a>
        <a class="nav-link px-3" href="<?= site_url('about') ?>">About</a>
        <a class="nav-link px-3" href="<?= site_url('customers') ?>">Customers</a>
        <a class="nav-link px-3" href="<?= site_url('users') ?>">Users</a>
    </div>
</nav>