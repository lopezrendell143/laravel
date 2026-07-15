<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Student Information System') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">

    <style>
        :root {
            --sis-primary: #3A6B8A;
            --sis-primary-deep: #2C5470;
            --sis-tint: #EEF3F6;
            --sis-accent: #C98A3A;
            --sis-bg: #FAFAF8;
            --sis-ink: #2E3338;
            --sis-slate: #767F89;
            --sis-line: #E4E4E0;
        }

        body {
            background-color: var(--sis-bg);
            color: var(--sis-ink);
            font-family: 'IBM Plex Sans', system-ui, sans-serif;
        }

        .font-display { font-family: 'Fraunces', Georgia, serif; }

        .auth-card {
            background: #ffffff;
            border: 1px solid var(--sis-line);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 45px -28px rgba(46,51,56,.28);
        }

        .sis-header {
            background: var(--sis-primary);
            color: #fff;
            padding: 2rem 2rem 1.5rem;
            text-align: center;
            position: relative;
        }

        .sis-back-btn {
            position: absolute;
            top: 1rem;
            left: 1rem;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255,255,255,.14);
            border: 1px solid rgba(255,255,255,.3);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: .95rem;
            transition: background .15s ease;
        }
        .sis-back-btn:hover {
            background: rgba(255,255,255,.28);
            color: #fff;
        }

        .sis-icon-circle {
            width: 56px; height: 56px; border-radius: 50%;
            background: rgba(255,255,255,.14);
            border: 1px solid rgba(255,255,255,.25);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto .85rem;
        }

        .sis-header h5 {
            font-family: 'Fraunces', serif;
            font-weight: 600;
        }

        .sis-header small {
            color: #D6E2EB;
        }

        .form-label {
            font-weight: 600;
            font-size: .85rem;
            color: var(--sis-ink);
        }

        .form-control {
            border: 1px solid var(--sis-line);
            border-radius: 8px;
            padding: .55rem .75rem;
            font-size: .92rem;
        }
        .form-control:focus {
            border-color: var(--sis-primary);
            box-shadow: 0 0 0 .2rem rgba(58,107,138,.15);
        }

        .btn-sis {
            background-color: var(--sis-primary);
            border-color: var(--sis-primary);
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
        }
        .btn-sis:hover {
            background-color: var(--sis-primary-deep);
            border-color: var(--sis-primary-deep);
            color: #fff;
        }

        .text-decoration-underline {
            color: var(--sis-primary-deep) !important;
            text-decoration-color: var(--sis-accent) !important;
        }
        .text-decoration-underline:hover {
            color: var(--sis-accent) !important;
        }
    </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="auth-card" style="width: 100%; max-width: 400px;">
            <div class="sis-header">
                <a href="{{ url('/') }}" class="sis-back-btn" title="Back">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <div class="sis-icon-circle">
                    <i class="bi bi-mortarboard-fill fs-4"></i>
                </div>
                <h5 class="mb-0">Student Information System</h5>
                <small>Sign in to your portal</small>
            </div>
            <div class="card-body p-4">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>