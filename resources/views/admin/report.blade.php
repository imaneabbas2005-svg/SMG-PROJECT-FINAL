<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>SMG · Resources Report | Sustainable Management Group</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: radial-gradient(circle at 10% 30%, rgba(5, 25, 35, 0.95), rgba(2, 15, 22, 0.98)), 
                        repeating-linear-gradient(45deg, rgba(0, 255, 150, 0.02) 0px, rgba(0, 255, 150, 0.02) 2px, transparent 2px, transparent 8px);
            position: relative;
            overflow-x: auto;
            padding: 2rem 1.5rem;
        }

        /* animated floating orbs */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(70px);
            opacity: 0.35;
            z-index: 0;
            animation: floatOrb 18s infinite alternate ease-in-out;
            pointer-events: none;
        }
        .orb-1 {
            width: 320px;
            height: 320px;
            background: #2affb6;
            top: -100px;
            left: -80px;
            animation-duration: 22s;
        }
        .orb-2 {
            width: 400px;
            height: 400px;
            background: #4a7cff;
            bottom: -120px;
            right: -100px;
            animation-duration: 25s;
            animation-delay: -5s;
        }
        .orb-3 {
            width: 260px;
            height: 260px;
            background: #d96cff;
            top: 40%;
            right: 5%;
            animation-duration: 19s;
            animation-delay: -2s;
        }
        @keyframes floatOrb {
            0% { transform: translate(0, 0) scale(1); opacity: 0.25; }
            100% { transform: translate(40px, 60px) scale(1.2); opacity: 0.45; }
        }

        /* glass container */
        .report-container {
            position: relative;
            z-index: 10;
            max-width: 1100px;
            margin: 0 auto;
        }

        .glass-card {
            background: rgba(18, 28, 34, 0.75);
            backdrop-filter: blur(16px);
            border-radius: 2.5rem;
            border: 1px solid rgba(80, 210, 150, 0.25);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(90, 230, 160, 0.1) inset;
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: cardGlide 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .glass-card:hover {
            box-shadow: 0 30px 55px -12px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(100, 255, 180, 0.4) inset;
            transform: translateY(-3px);
        }
        @keyframes cardGlide {
            0% { opacity: 0; transform: translateY(40px) scale(0.96); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* logo area */
        .logo-area {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .logo-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2effbc, #1b8c5a);
            width: 70px;
            height: 70px;
            border-radius: 28px;
            margin-bottom: 1rem;
            box-shadow: 0 10px 20px -5px rgba(0, 200, 120, 0.4);
            animation: softPulse 2.5s infinite;
        }
        .logo-icon i {
            font-size: 2.6rem;
            color: #0a141c;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }
        @keyframes softPulse {
            0% { box-shadow: 0 8px 18px -3px rgba(46, 255, 188, 0.3); transform: scale(1);}
            50% { box-shadow: 0 12px 28px -2px rgba(46, 255, 188, 0.6); transform: scale(1.02);}
            100% { box-shadow: 0 8px 18px -3px rgba(46, 255, 188, 0.3); transform: scale(1);}
        }
        .logo-text {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(125deg, #FFFFFF, #B4FFE0);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .logo-sub {
            font-size: 0.7rem;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: #9ce6c0;
            font-weight: 500;
            margin-top: 6px;
        }

        /* heading */
        .page-heading {
            text-align: center;
            margin: 1rem 0 2rem;
        }
        .page-heading h1 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(to right, #f0f9ff, #d2f0e4);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }
        .page-heading h1 i {
            color: #2effbc;
            background: none;
            font-size: 2rem;
        }

        /* table styles */
        .report-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 1.5rem;
            overflow: hidden;
            margin: 1rem 0;
        }
        .report-table th {
            background: rgba(10, 30, 36, 0.8);
            color: #e2f3e8;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 1rem 1rem;
            text-align: center;
            border-bottom: 1px solid rgba(80, 210, 150, 0.3);
        }
        .report-table td {
            padding: 1rem;
            color: #d4e8e0;
            text-align: center;
            border-bottom: 1px solid rgba(80, 210, 150, 0.15);
            background: rgba(12, 25, 30, 0.5);
            font-weight: 500;
        }
        .report-table tr:hover td {
            background: rgba(30, 55, 60, 0.7);
            transition: 0.2s;
        }

        /* numeric values */
        .stat-number {
            font-weight: 700;
            font-size: 1.1rem;
            color: #2effbc;
        }

        /* back link */
        .back-link {
            text-align: center;
            margin-top: 2rem;
        }
        .back-link a {
            color: #6effc2;
            text-decoration: none;
            font-weight: 500;
            transition: 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .back-link a:hover {
            color: white;
            text-decoration: underline;
        }

        /* empty state */
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #9aaebf;
        }
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        /* responsive */
        @media (max-width: 700px) {
            .glass-card { padding: 1.5rem; }
            .report-table th, .report-table td { padding: 0.75rem 0.5rem; font-size: 0.8rem; }
            .page-heading h1 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>

<div class="report-container">
    <div class="glass-card">
        <div class="logo-area">
            <div class="logo-icon">
                <i class="fas fa-leaf"></i>
            </div>
            <div class="logo-text">SMG</div>
            <div class="logo-sub">Sustainable Management Group</div>
        </div>

        <div class="page-heading">
            <h1><i class="fas fa-chart-pie"></i> Resources Report</h1>
        </div>

        @if(count($data) > 0)
            <div style="overflow-x: auto;">
                <table class="report-table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-tag"></i> Category</th>
                            <th><i class="fas fa-database"></i> Total Resources</th>
                            <th><i class="fas fa-file-pdf"></i> Total PDFs</th>
                            <th><i class="fas fa-link"></i> Total Links</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td><strong>{{ $row['category'] }}</strong></td>
                            <td><span class="stat-number">{{ $row['total_resources'] }}</span></td>
                            <td><span class="stat-number">{{ $row['total_pdfs'] }}</span></td>
                            <td><span class="stat-number">{{ $row['total_links'] }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
/* overall totals */
            @php
                $totalResources = array_sum(array_column($data, 'total_resources'));
                $totalPdfs = array_sum(array_column($data, 'total_pdfs'));
                $totalLinks = array_sum(array_column($data, 'total_links'));
            @endphp
            <div style="margin-top: 1.5rem; padding: 1rem; background: rgba(10,30,36,0.5); border-radius: 1.5rem; text-align: center;">
                <span style="color:#9ce6c0;"><i class="fas fa-chart-line"></i> Overall totals:</span>
                <strong style="margin-left: 1rem;">📦 {{ $totalResources }} resources</strong>
                <strong style="margin-left: 1rem;">📄 {{ $totalPdfs }} PDFs</strong>
                <strong style="margin-left: 1rem;">🔗 {{ $totalLinks }} links</strong>
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-chart-simple"></i>
                <p>No report data available.</p>
            </div>
        @endif

        <div class="back-link">
            <a href="{{ route('dashboard') }}"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>