<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>SMG · Create Project | Sustainable Management Group</title>
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

        /* glass card */
        .form-card {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 600px;
            background: rgba(18, 28, 34, 0.75);
            backdrop-filter: blur(16px);
            border-radius: 2.5rem;
            border: 1px solid rgba(80, 210, 150, 0.25);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(90, 230, 160, 0.1) inset;
            padding: 2rem 2rem 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: cardGlide 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .form-card:hover {
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
            margin-bottom: 1.8rem;
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
            margin-bottom: 1.8rem;
        }
        .page-heading h2 {
            font-size: 1.9rem;
            font-weight: 700;
            background: linear-gradient(to right, #f0f9ff, #d2f0e4);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .page-heading p {
            color: #9aaebf;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        /* form groups */
        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 16px;
            top: 18px;
            color: #50d696;
            font-size: 1.1rem;
            transition: color 0.2s;
            pointer-events: none;
            z-index: 2;
        }
        .input-field, .input-textarea {
            width: 100%;
            background: rgba(10, 20, 28, 0.7);
            border: 1px solid rgba(80, 210, 150, 0.4);
            border-radius: 2rem;
            padding: 0.9rem 1rem 0.9rem 2.8rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: #eef5ff;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s ease;
            outline: none;
        }
        .input-textarea {
            border-radius: 1.5rem;
            resize: vertical;
            min-height: 100px;
            padding-top: 1rem;
        }
        .input-field:focus, .input-textarea:focus {
            border-color: #2effbc;
            box-shadow: 0 0 0 3px rgba(46, 255, 188, 0.2);
            background: rgba(15, 30, 38, 0.9);
        }
        .input-field::placeholder, .input-textarea::placeholder {
            color: #6f8fa3;
            font-weight: 400;
            font-size: 0.85rem;
        }

        /* submit button */
        .btn-submit {
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
            margin-top: 0.5rem;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .btn-submit:hover::before {
            left: 100%;
        }
        .btn-submit:hover {
            transform: scale(1.02);
            background: linear-gradient(105deg, #269b6b, #1fbc63);
            box-shadow: 0 10px 20px -5px #16a34a80;
        }
        .btn-submit:active {
            transform: scale(0.98);
        }

        /* back link */
        .back-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.85rem;
        }
        .back-link a {
            color: #6effc2;
            text-decoration: none;
            font-weight: 500;
            transition: 0.2s;
        }
        .back-link a:hover {
            color: white;
            text-decoration: underline;
        }

        /* error messages */
        .error-hint {
            font-size: 0.7rem;
            margin-top: 0.4rem;
            margin-left: 1rem;
            color: #ffb4a2;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        @media (max-width: 550px) {
            .form-card { padding: 1.5rem; }
            .page-heading h2 { font-size: 1.6rem; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>

<div class="form-card">
    <div class="logo-area">
        <div class="logo-icon">
            <i class="fas fa-leaf"></i>
        </div>
        <div class="logo-text">SMG</div>
        <div class="logo-sub">Sustainable Management Group</div>
    </div>

    <div class="page-heading">
        <h2><i class="fas fa-folder-plus"></i> Create New Project</h2>
        <p>Start a sustainable initiative that makes an impact</p>
    </div>

    <form method="POST" action="{{ route('resources.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="input-group">
        <i class="fas fa-heading input-icon"></i>
        <input type="text" name="title" class="input-field" placeholder="Resource title" required>
    </div>

    <div class="input-group">
        <i class="fas fa-list input-icon"></i>
        <select name="type" class="input-field" required>
            <option value="url">URL</option>
            <option value="pdf">PDF</option>
        </select>
    </div>

    <div class="input-group">
        <i class="fas fa-link input-icon"></i>
        <input type="text" name="link" class="input-field" placeholder="URL (if any)">
    </div>

    <div class="input-group">
        <i class="fas fa-file-pdf input-icon"></i>
        <input type="file" name="file" class="input-field">
    </div>

    <div class="input-group">
        <i class="fas fa-folder input-icon"></i>
<div class="input-group">
    <i class="fas fa-list input-icon"></i>

    <select name="category_id" class="input-field" required>
        <option value="">Select Category</option>
        <option value="1">Programming</option>
        <option value="2">Design</option>
        <option value="3">Business</option>
    </select>
</div>
    </div>

    <button type="submit" class="btn-submit">
        <i class="fas fa-save"></i> Submit Resource
    </button>
</form>

    <div class="back-link">
        <a href="{{ route('dashboard') }}"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
    </div>
</div>

<script>
    // Interactive icon highlight on focus
    document.querySelectorAll('.input-field, .input-textarea').forEach(input => {
        input.addEventListener('focus', function() {
            const parent = this.closest('.input-group');
            if(parent) {
                const icon = parent.querySelector('.input-icon');
                if(icon) icon.style.color = '#a0ffd0';
            }
        });
        input.addEventListener('blur', function() {
            const parent = this.closest('.input-group');
            if(parent) {
                const icon = parent.querySelector('.input-icon');
                if(icon) icon.style.color = '#50d696';
            }
        });
    });
</script>

</body>
</html>