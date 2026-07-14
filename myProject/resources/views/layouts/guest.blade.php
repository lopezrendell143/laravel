<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Student Information System') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #f1f3f6; }
        .sis-header { background: #0c2d55; }
        .sis-icon-circle {
            width: 56px; height: 56px; border-radius: 50%;
            background: rgba(255,255,255,.15);
            display: flex; align-items: center; justify-content: center;
        }
        .btn-sis { background: #0c2d55; color: #fff; }
        .btn-sis:hover { background: #123a6e; color: #fff; }
    </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-sm border-0" style="width: 100%; max-width: 400px;">
            <div class="sis-header text-white text-center py-4 rounded-top">
                <div class="sis-icon-circle mx-auto mb-2">
                    <i class="bi bi-mortarboard-fill fs-4"></i>
                </div>
                <h5 class="mb-0">Student Information System</h5>
                <small class="text-white-50">Sign in to your portal</small>
            </div>
            <div class="card-body p-4">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>