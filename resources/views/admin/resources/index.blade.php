<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>SMG · Admin Panel | Resources</title>
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

        /* main container */
        .admin-container {
            position: relative;
            z-index: 10;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* glass card */
        .admin-card {
            background: rgba(18, 28, 34, 0.75);
            backdrop-filter: blur(16px);
            border-radius: 2.5rem;
            border: 1px solid rgba(80, 210, 150, 0.25);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(90, 230, 160, 0.1) inset;
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: cardGlide 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .admin-card:hover {
            box-shadow: 0 30px 55px -12px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(100, 255, 180, 0.4) inset;
            transform: translateY(-3px);
        }
        @keyframes cardGlide {
            0% { opacity: 0; transform: translateY(40px) scale(0.96); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* logo + header */
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

        .page-title {
            text-align: center;
            margin: 1rem 0 2rem;
        }
        .page-title h1 {
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
        .page-title h1 i {
            font-size: 2rem;
            color: #2effbc;
            background: none;
            background-clip: unset;
            -webkit-background-clip: unset;
        }

        /* table styles */
        .resources-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 1.5rem;
            overflow: hidden;
        }
        .resources-table th {
            background: rgba(10, 30, 36, 0.8);
            color: #e2f3e8;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 1rem 1rem;
            text-align: left;
            border-bottom: 1px solid rgba(80, 210, 150, 0.3);
        }
        .resources-table td {
            padding: 1rem;
            color: #d4e8e0;
            border-bottom: 1px solid rgba(80, 210, 150, 0.15);
            background: rgba(12, 25, 30, 0.5);
            vertical-align: middle;
        }
        .resources-table tr:hover td {
            background: rgba(30, 55, 60, 0.7);
            transition: 0.2s;
        }

        /* status badges */
        .badge {
            display: inline-block;
            padding: 0.3rem 1rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-align: center;
        }
        .badge-approved {
            background: rgba(46, 255, 188, 0.2);
            color: #2effbc;
            border: 1px solid rgba(46, 255, 188, 0.5);
        }
        .badge-pending {
            background: rgba(255, 180, 70, 0.2);
            color: #ffb446;
            border: 1px solid rgba(255, 180, 70, 0.5);
        }

        /* action buttons */
        .action-buttons {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        .btn-approve, .btn-delete {
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-weight: 600;
            font-size: 0.75rem;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-family: 'Inter', sans-serif;
        }
        .btn-approve {
            background: linear-gradient(105deg, #198f5e, #11a84f);
            color: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        .btn-approve:hover {
            transform: scale(1.02);
            background: linear-gradient(105deg, #29b175, #1fc96a);
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .btn-delete {
            background: rgba(200, 70, 70, 0.8);
            color: white;
        }
        .btn-delete:hover {
            background: #c0392b;
            transform: scale(1.02);
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

        /* responsive */
        @media (max-width: 768px) {
            .admin-card { padding: 1rem; }
            .resources-table th, .resources-table td { padding: 0.75rem; }
            .action-buttons { flex-direction: column; gap: 0.5rem; }
            .btn-approve, .btn-delete { justify-content: center; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>

<div class="admin-container">
    <div class="admin-card">
        <div class="logo-area">
            <div class="logo-icon">
                <i class="fas fa-leaf"></i>
            </div>
            <div class="logo-text">SMG</div>
            <div class="logo-sub">Sustainable Management Group</div>
        </div>

        <div class="page-title">
            <h1><i class="fas fa-database"></i> Resources Admin Panel</h1>
        </div>

        @if($resources->count())
            <div style="overflow-x: auto;">
                <table class="resources-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resources as $resource)
                        <tr>
                            <td>{{ $resource->title }}</td>
                            <td>{{ $resource->type }}</td>
                            <td>
                                @if($resource->is_approved)
                                    <span class="badge badge-approved"><i class="fas fa-check-circle"></i> Approved</span>
                                @else
                                    <span class="badge badge-pending"><i class="fas fa-clock"></i> Pending</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    @if(!$resource->is_approved)
                                        <form method="POST" action="{{ route('admin.resources.approve', $resource->id) }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn-approve"><i class="fas fa-thumbs-up"></i> Approve</button>
                                        </form>
                                    @endif
                                    <form method="POST" action="{{ route('admin.resources.reject', $resource->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this resource?')"><i class="fas fa-trash-alt"></i> Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-folder-open"></i>
                <p>No resources found.</p>
            </div>
        @endif

        <div class="back-link">
            <a href="{{ route('dashboard') }}"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
        </div>
    </div>
</div>

</body>
</html>