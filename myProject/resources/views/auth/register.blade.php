<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Campus SIS') }} | Create Your Account</title>

        @fonts

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                --sis-danger: #B3432B;
                --sis-danger-tint: #FBEEEA;
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

            .auth-header {
                background: var(--sis-primary);
                color: #fff;
                padding: 2rem 2rem 1.5rem;
                text-align: center;
            }

            .auth-icon {
                width: 56px;
                height: 56px;
                border-radius: 50%;
                background: rgba(255,255,255,.14);
                border: 1px solid rgba(255,255,255,.25);
                display: inline-flex;
                align-items: center;
                justify-content: center;
                margin-bottom: .85rem;
            }

            .auth-header h1 {
                font-family: 'Fraunces', serif;
                font-weight: 600;
                font-size: 1.35rem;
                margin-bottom: .25rem;
            }

            .auth-header p {
                color: #D6E2EB;
                font-size: .85rem;
                margin: 0;
            }

            .auth-body {
                padding: 2rem;
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

            .form-control.is-invalid {
                border-color: var(--sis-danger);
                background-image: none;
            }

            .invalid-feedback {
                color: var(--sis-danger);
                font-size: .8rem;
            }

            .btn-sis-solid {
                background-color: var(--sis-primary);
                border-color: var(--sis-primary);
                color: #fff;
                font-weight: 600;
                border-radius: 8px;
                padding: .55rem 1.4rem;
            }
            .btn-sis-solid:hover {
                background-color: var(--sis-primary-deep);
                border-color: var(--sis-primary-deep);
                color: #fff;
            }

            .auth-link {
                color: var(--sis-primary-deep);
                text-decoration: underline;
                text-decoration-color: var(--sis-accent);
                text-underline-offset: 3px;
                font-size: .85rem;
                font-weight: 500;
            }
            .auth-link:hover { color: var(--sis-accent); }
        </style>
    </head>
    <body class="antialiased">

        <main class="container min-vh-100 d-flex align-items-center justify-content-center py-4">
            <div class="row justify-content-center w-100">
                <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="auth-card">

                        <div class="auth-header">
                            <span class="auth-icon">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 3L2 8L12 13L20 9.09V15H22V8L12 3Z" fill="#ffffff"/>
                                    <path d="M6 10.18V14.5C6 16.43 8.69 18 12 18C15.31 18 18 16.43 18 14.5V10.18L12 13.18L6 10.18Z" fill="#ffffff"/>
                                </svg>
                            </span>
                            <h1>Student Information System</h1>
                            <p>Create your account</p>
                        </div>

                        <div class="auth-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input id="name" type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name') }}"
                                           required autofocus autocomplete="name">
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email Address -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}"
                                           required autocomplete="username">
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           required autocomplete="new-password">
                                    @error('password')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           required autocomplete="new-password">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <a class="auth-link" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <button type="submit" class="btn btn-sis-solid">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>