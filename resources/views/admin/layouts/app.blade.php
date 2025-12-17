<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Broadcast</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            min-height: 100vh;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        aside {
            width: 280px;
            background: #fff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            padding: 30px 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 0 25px 30px;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .sidebar-header h2 {
            font-size: 22px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        nav {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 25px;
            color: #555;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        nav a:hover, nav a.active {
            background: #f5f5f5;
            color: #667eea;
            border-left-color: #667eea;
        }

        nav i { width: 20px; }

        /* Main Content */
        main {
            flex: 1;
            margin-left: 280px;
            padding: 40px;
        }

        /* Header */
        .page-header {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-header h1 {
            font-size: 28px;
            color: #333;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: bold;
        }

        /* Alert */
        .alert {
            background: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            display: flex;
            align-items: flex-start;
            gap: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
        }

        .stat-card.blue { border-left: 5px solid #2196f3; }
        .stat-card.green { border-left: 5px solid #4caf50; }
        .stat-card.orange { border-left: 5px solid #ff9800; }
        .stat-card.red { border-left: 5px solid #f44336; }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #fff;
        }

        .stat-card.blue .stat-icon { background: linear-gradient(135deg, #2196f3 0%, #1976d2 100%); }
        .stat-card.green .stat-icon { background: linear-gradient(135deg, #4caf50 0%, #388e3c 100%); }
        .stat-card.orange .stat-icon { background: linear-gradient(135deg, #ff9800 0%, #f57c00 100%); }
        .stat-card.red .stat-icon { background: linear-gradient(135deg, #f44336 0%, #d32f2f 100%); }

        .stat-content h3 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-content p {
            color: #999;
            font-size: 14px;
        }

        /* Content Card */
        .content-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background: #f5f5f5;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: #555;
            border-bottom: 2px solid #e0e0e0;
        }

        table td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        table tr:hover {
            background: #fafafa;
        }

        /* Buttons */
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: #e0e0e0;
            color: #333;
        }

        .btn-danger {
            background: #f44336;
            color: #fff;
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 13px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            aside {
                width: 100%;
                height: auto;
                position: relative;
            }
            main {
                margin-left: 0;
                padding: 20px;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .page-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <aside>
            <div class="sidebar-header">
                <h2><i class="fas fa-broadcast-tower"></i> Admin</h2>
            </div>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="active">
                    <i class="fas fa-chart-line"></i> Dashboard
                </a>
                <a href="{{ route('admin.kegiatans.index') }}">
                    <i class="fas fa-calendar-alt"></i> Kegiatan
                </a>
                <a href="{{ route('admin.pengurus.index') }}">
                    <i class="fas fa-users"></i> Pengurus
                </a>
                <a href="{{ route('admin.highlights.index') }}">
                    <i class="fas fa-star"></i> Highlights
                </a>
            </nav>
        </aside>

        <main>
            <div class="page-header">
                <h1>{{ $pageTitle ?? 'Dashboard' }}</h1>
                <div class="user-info">
                    <div class="user-avatar">{{ substr(auth()->user()->name ?? 'A', 0, 1) }}</div>
                    <div>
                        <p style="font-size: 14px; color: #999;">Logged in as</p>
                        <p style="font-weight: 600;">{{ auth()->user()->name ?? 'Admin' }}</p>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-small">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>

            @if(session('status'))
                <div class="alert">
                    <i class="fas fa-check-circle"></i> {{ session('status') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
