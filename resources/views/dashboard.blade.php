<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>SMG · Dashboard | Sustainable Management Group</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at 10% 30%, rgba(5, 25, 35, 0.95), rgba(2, 15, 22, 0.98)), 
                        repeating-linear-gradient(45deg, rgba(0, 255, 150, 0.02) 0px, rgba(0, 255, 150, 0.02) 2px, transparent 2px, transparent 8px);
            position: relative;
            overflow-x: hidden;
            padding: 1.5rem;
        }

        /* animated floating orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            opacity: 0.35;
            z-index: 0;
            animation: floatOrb 18s infinite alternate ease-in-out;
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

        /* main glass card container */
        .dashboard-card {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 550px;
            background: rgba(18, 28, 34, 0.75);
            backdrop-filter: blur(16px);
            border-radius: 2.5rem;
            border: 1px solid rgba(80, 210, 150, 0.25);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(90, 230, 160, 0.1) inset;
            padding: 2rem 2rem 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: cardGlide 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            text-align: center;
        }

        .dashboard-card:hover {
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
            margin-bottom: 2rem;
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
            letter-spacing: -0.5px;
            background: linear-gradient(125deg, #FFFFFF, #B4FFE0);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            line-height: 1.2;
        }
        .logo-sub {
            font-size: 0.7rem;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: #9ce6c0;
            font-weight: 500;
            margin-top: 6px;
        }

        /* greeting */
        .welcome-message {
            margin: 1rem 0 1.5rem;
        }
        .welcome-message h1 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(to right, #f0f9ff, #d2f0e4);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }
        .welcome-message p {
            color: #b7dfce;
            font-size: 0.95rem;
        }

        /* stats / info cards */
        .stats {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            margin: 2rem 0 2rem;
        }
        .stat-card {
            background: rgba(10, 20, 28, 0.6);
            border-radius: 1.5rem;
            padding: 1rem;
            flex: 1;
            border: 1px solid rgba(80, 210, 150, 0.3);
            transition: 0.2s;
        }
        .stat-card i {
            font-size: 1.8rem;
            color: #2effbc;
            margin-bottom: 0.5rem;
            display: block;
        }
        .stat-card .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }
        .stat-card .stat-label {
            font-size: 0.7rem;
            color: #9ce6c0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* logout button */
        .btn-logout {
            width: 100%;
            background: linear-gradient(105deg, #1d7a54, #16a34a);
            border: none;
            padding: 0.9rem;
            border-radius: 3rem;
            font-weight: 700;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            color: white;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.25s;
            box-shadow: 0 6px 14px rgba(0, 30, 15, 0.4);
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-logout::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .btn-logout:hover::before {
            left: 100%;
        }
        .btn-logout:hover {
            transform: scale(1.02);
            background: linear-gradient(105deg, #269b6b, #1fbc63);
            box-shadow: 0 10px 20px -5px #16a34a80;
        }

        /* simple footer */
        .footer-note {
            margin-top: 1.5rem;
            font-size: 0.7rem;
            color: #6b947f;
        }

        @media (max-width: 500px) {
            .dashboard-card { padding: 1.5rem; }
            .stats { flex-direction: column; }
            .welcome-message h1 { font-size: 1.6rem; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>

<div class="dashboard-card">
    <div class="logo-area">
        <div class="logo-icon">
            <i class="fas fa-leaf"></i>
        </div>
        <div class="logo-text">SMG</div>
        <div class="logo-sub">Sustainable Management Group</div>
    </div>

    <div class="welcome-message">
        <h1>Welcome, {{ auth()->user()->name }} 👋</h1>
        <p>You are now logged into your sustainable dashboard.</p>
    </div>

    {{-- Example stats – you can replace with real data --}}
    <div class="stats">
        <div class="stat-card">
            <i class="fas fa-tree"></i>
<div class="stat-value">
    {{ $projects->count() }}
</div>
            <div class="stat-label">Projects</div>
        </div>
        <div class="stat-card">
            <i class="fas fa-globe-asia"></i>
            <div class="stat-value">245</div>
            <div class="stat-label">CO₂ saved (kg)</div>
        </div>
        <div class="stat-card">
            <i class="fas fa-users"></i>
            <div class="stat-value">1</div>
            <div class="stat-label">Team member</div>
        </div>
    </div>

    {{-- Logout form --}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn-logout">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>

    <div class="footer-note">
        <i class="fas fa-seedling"></i> Together for a greener future
    </div>
</div>

</body>
</html>