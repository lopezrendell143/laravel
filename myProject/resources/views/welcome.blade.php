<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Campus SIS') }} | Student Information System</title>

        @fonts

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">

        <style>
            :root {
                /* Softer, easy-on-the-eyes palette */
                --sis-primary: #3A6B8A;   /* muted steel blue, not harsh navy */
                --sis-primary-deep: #2C5470;
                --sis-tint: #EEF3F6;      /* soft blue-gray tint */
                --sis-accent: #C98A3A;    /* muted amber, not neon gold */
                --sis-bg: #FAFAF8;        /* warm off-white, low glare */
                --sis-ink: #2E3338;       /* soft charcoal, not pure black */
                --sis-slate: #767F89;
                --sis-line: #E4E4E0;
            }

            body {
                background-color: var(--sis-bg);
                color: var(--sis-ink);
                font-family: 'IBM Plex Sans', system-ui, sans-serif;
            }

            .font-display { font-family: 'Fraunces', Georgia, serif; }
            .font-mono { font-family: 'IBM Plex Mono', monospace; }

            .sis-topbar {
                background-color: #ffffff;
                border-bottom: 1px solid var(--sis-line);
            }

            .brand-mark {
                width: 34px;
                height: 34px;
                border-radius: 8px;
                background: var(--sis-tint);
                color: var(--sis-primary);
                font-family: 'Fraunces', serif;
                font-weight: 700;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 1.05rem;
                border: 1px solid var(--sis-line);
            }

            .brand-text { color: var(--sis-ink); }
            .brand-text small {
                display: block;
                color: var(--sis-slate);
                font-size: .68rem;
                letter-spacing: .1em;
                text-transform: uppercase;
            }

            .btn-sis-outline {
                border: 1px solid var(--sis-line);
                color: var(--sis-ink);
                background: #fff;
            }
            .btn-sis-outline:hover {
                border-color: var(--sis-primary);
                color: var(--sis-primary);
                background: var(--sis-tint);
            }

            .btn-sis-solid {
                background-color: var(--sis-primary);
                border-color: var(--sis-primary);
                color: #fff;
                font-weight: 600;
            }
            .btn-sis-solid:hover {
                background-color: var(--sis-primary-deep);
                border-color: var(--sis-primary-deep);
                color: #fff;
            }

            /* Card shell, close to the original two-panel layout */
            .sis-card {
                background: #ffffff;
                border: 1px solid var(--sis-line);
                border-radius: 16px;
                overflow: hidden;
            }

            .sis-eyebrow {
                font-family: 'IBM Plex Mono', monospace;
                font-size: .7rem;
                letter-spacing: .14em;
                text-transform: uppercase;
                color: var(--sis-accent);
            }

            /* Step list, same idea as Laravel's original "Let's get started" */
            .step-item {
                display: flex;
                align-items: flex-start;
                gap: 1rem;
                padding: .85rem 0;
                position: relative;
            }
            .step-item + .step-item {
                border-top: 1px solid var(--sis-line);
            }
            .step-num {
                width: 26px;
                height: 26px;
                border-radius: 50%;
                background: var(--sis-tint);
                color: var(--sis-primary);
                border: 1px solid var(--sis-line);
                font-family: 'IBM Plex Mono', monospace;
                font-size: .75rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                margin-top: .1rem;
            }
            .step-item a {
                color: var(--sis-primary-deep);
                text-decoration: none;
                font-weight: 600;
            }
            .step-item a:hover { color: var(--sis-accent); }
            .step-item p {
                color: var(--sis-slate);
                font-size: .88rem;
                margin: .15rem 0 0;
            }

            /* Right visual panel — soft tint instead of dark navy */
            .sis-visual-panel {
                background: var(--sis-tint);
            }

            .id-card {
                background: #ffffff;
                border-radius: 14px;
                border: 1px solid var(--sis-line);
                box-shadow: 0 12px 28px -18px rgba(46,51,56,.25);
                overflow: hidden;
            }

            .id-card-header {
                background: var(--sis-primary);
                color: #fff;
                padding: .9rem 1.1rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .id-card-header .title {
                font-family: 'Fraunces', serif;
                font-size: .95rem;
            }

            .status-chip {
                background: rgba(255,255,255,.16);
                color: #fff;
                border: 1px solid rgba(255,255,255,.4);
                font-size: .65rem;
                letter-spacing: .07em;
                text-transform: uppercase;
                padding: .18rem .5rem;
                border-radius: 999px;
            }

            .id-photo {
                width: 56px;
                height: 56px;
                border-radius: 10px;
                background: var(--sis-tint);
                color: var(--sis-primary);
                font-family: 'Fraunces', serif;
                font-weight: 600;
                font-size: 1.2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                border: 1px solid var(--sis-line);
            }

            .id-field-label {
                font-size: .64rem;
                letter-spacing: .08em;
                text-transform: uppercase;
                color: var(--sis-slate);
                margin-bottom: .1rem;
            }
            .id-field-value {
                font-weight: 600;
                color: var(--sis-ink);
                font-size: .9rem;
            }

            .id-barcode {
                height: 28px;
                background: repeating-linear-gradient(
                    90deg,
                    var(--sis-ink) 0px, var(--sis-ink) 2px,
                    transparent 2px, transparent 5px,
                    var(--sis-ink) 5px, var(--sis-ink) 6px,
                    transparent 6px, transparent 10px
                );
                opacity: .55;
                border-radius: 3px;
            }

            .sis-footer {
                color: var(--sis-slate);
                font-family: 'IBM Plex Mono', monospace;
                font-size: .76rem;
            }
            .sis-footer a {
                color: var(--sis-primary-deep);
                text-decoration: underline;
                text-decoration-color: var(--sis-accent);
                text-underline-offset: 3px;
            }
        </style>
    </head>
    <body class="antialiased">

        @if (Route::has('login'))
            <nav class="navbar sis-topbar py-3">
                <div class="container">
                    <div class="d-flex align-items-center gap-2">
                        <span class="brand-mark">S</span>
                        <span class="brand-text font-display fs-5">
                            {{ config('app.name', 'Campus SIS') }}
                            <small>Student Information System</small>
                        </span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-sis-solid px-3">
                                Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-sm btn-sis-outline px-3">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-sm btn-sis-solid px-3">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </nav>
        @endif

        <main class="container py-4 py-lg-5 min-vh-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center w-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="sis-card row g-0">

                        <!-- Left: "Let's get started" checklist, same idea as the Laravel default -->
                        <div class="col-12 p-4 p-lg-5">
                            <div class="sis-eyebrow mb-2">Student Information System</div>
                            <h1 class="font-display mb-2" style="font-weight:600;">Let's get started</h1>
                            <p class="mb-4" style="color: var(--sis-slate); max-width: 32rem;">
                                With so many modules available to you, we suggest you start with
                                the following:
                            </p>

                            <div class="mb-4">
                                <div class="step-item">
                                    <span class="step-num">1</span>
                                    <div>
                                        <a href="https://laravel.com/docs" target="_blank">Read the Documentation</a>
                                        <p>Set up modules like enrollment, grading, and records.</p>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <span class="step-num">2</span>
                                    <div>
                                        <a href="https://laracasts.com" target="_blank">Watch video tutorials on Laracasts</a>
                                        <p>Walkthroughs for admins, faculty, and registrar staff.</p>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <span class="step-num">3</span>
                                    <div>
                                        @auth
                                            <a href="{{ url('/dashboard') }}">Open your dashboard</a>
                                            <p>Pick up where you left off with your records.</p>
                                        @else
                                            <a href="{{ route('login') }}">Log in to your account</a>
                                            <p>Access enrollment, grades, and schedules.</p>
                                        @endauth
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('register') }}" target="_blank" class="btn btn-sis-solid px-4 py-2">
                                Lets get Started
                            </a>

                        </div>

                        
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>