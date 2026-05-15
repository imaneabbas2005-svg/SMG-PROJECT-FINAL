<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>SMG · Login | Sustainable Management Group</title>
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

    .auth-card {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 480px;
      background: rgba(18, 28, 34, 0.75);
      backdrop-filter: blur(16px);
      border-radius: 2.5rem;
      border: 1px solid rgba(80, 210, 150, 0.25);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(90, 230, 160, 0.1) inset;
      padding: 2rem 1.8rem 2.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: cardGlide 0.7s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }
    .auth-card:hover {
      box-shadow: 0 30px 55px -12px rgba(0, 0, 0, 0.6), 0 0 0 1px rgba(100, 255, 180, 0.4) inset;
      transform: translateY(-3px);
    }
    @keyframes cardGlide {
      0% { opacity: 0; transform: translateY(40px) scale(0.96); }
      100% { opacity: 1; transform: translateY(0) scale(1); }
    }

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

    .greeting {
      text-align: center;
      margin: 1.2rem 0 0.8rem;
    }
    .greeting h2 {
      font-size: 1.9rem;
      font-weight: 700;
      background: linear-gradient(to right, #f0f9ff, #d2f0e4);
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }
    .greeting p {
      color: #9aaebf;
      font-size: 0.85rem;
      margin-top: 0.4rem;
    }

    .input-group {
      margin-bottom: 1.3rem;
      position: relative;
    }
    .input-icon {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #50d696;
      font-size: 1.1rem;
      transition: color 0.2s;
      pointer-events: none;
    }
    .input-field {
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
    .input-field:focus {
      border-color: #2effbc;
      box-shadow: 0 0 0 3px rgba(46, 255, 188, 0.2);
      background: rgba(15, 30, 38, 0.9);
    }
    .input-field::placeholder {
      color: #6f8fa3;
      font-weight: 400;
      font-size: 0.85rem;
    }
    .password-wrapper {
      position: relative;
    }
    .toggle-pw {
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #7bcfa0;
      cursor: pointer;
      z-index: 5;
      background: transparent;
      font-size: 1rem;
      transition: color 0.2s;
    }
    .toggle-pw:hover {
      color: #2effbc;
    }

    .flex-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 0.8rem 0 1.6rem;
    }
    .checkbox-label {
      display: flex;
      align-items: center;
      gap: 0.45rem;
      color: #bdd4e2;
      font-size: 0.8rem;
      cursor: pointer;
    }
    .checkbox-label input {
      accent-color: #2effbc;
      width: 16px;
      height: 16px;
      margin: 0;
    }
    .forgot-link {
      font-size: 0.8rem;
      color: #86e0b0;
      text-decoration: none;
      font-weight: 500;
      transition: 0.2s;
    }
    .forgot-link:hover {
      color: #caffed;
      text-decoration: underline;
    }

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
      margin-top: 0.4rem;
      position: relative;
      overflow: hidden;
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

    .auth-switch {
      text-align: center;
      margin-top: 1.8rem;
      font-size: 0.85rem;
      color: #b7cddf;
    }
    .auth-switch a {
      color: #6effc2;
      text-decoration: none;
      font-weight: 700;
      margin-left: 0.3rem;
      transition: 0.2s;
      border-bottom: 1px dotted transparent;
    }
    .auth-switch a:hover {
      color: white;
      border-bottom-color: #6effc2;
    }

    .error-hint {
      font-size: 0.7rem;
      margin-top: 0.4rem;
      margin-left: 1rem;
      color: #ffb4a2;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    @media (max-width: 500px) {
      .auth-card { padding: 1.5rem; }
      .logo-text { font-size: 1.5rem; }
      .greeting h2 { font-size: 1.6rem; }
    }
  </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
<div class="orb orb-3"></div>

<div class="auth-card">
  <div class="logo-area">
    <div class="logo-icon">
      <i class="fas fa-leaf"></i>
    </div>
    <div class="logo-text">SMG</div>
    <div class="logo-sub">Sustainable Management Group</div>
  </div>

  <div class="greeting">
    <h2>Welcome back</h2>
    <p>sign in to continue your green journey</p>
  </div>

  {{-- Laravel login form --}}
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group">
      <i class="fas fa-envelope input-icon"></i>
      <input type="email" name="email" class="input-field" placeholder="Work email" value="{{ old('email') }}" required autocomplete="email">
    </div>

    <div class="input-group">
      <i class="fas fa-lock input-icon"></i>
      <div class="password-wrapper">
        <input type="password" id="password" name="password" class="input-field" placeholder="Password" required style="padding-right: 2.8rem;" autocomplete="current-password">
        <i class="fas fa-eye-slash toggle-pw"></i>
      </div>
    </div>

    <div class="flex-options">
      <label class="checkbox-label">
        <input type="checkbox" name="remember"> Remember me
      </label>
<a href="{{ route('password.request') }}" class="forgot-link">
    Forgot password?
</a>
    </div>

    {{-- Display general validation error --}}
    @error('email')
      <div class="error-hint"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
    @enderror

    <button type="submit" class="btn-submit">LOG IN <i class="fas fa-arrow-right" style="margin-left: 8px; font-size: 0.8rem;"></i></button>
  </form>

  <div class="auth-switch">
    Don't have an account?
    <a href="{{ route('register') }}">Create account →</a>
  </div>
</div>

<script>
  // Password toggle functionality (preserved from original design)
  document.querySelectorAll('.toggle-pw').forEach(icon => {
    icon.addEventListener('click', function(e) {
      e.preventDefault();
      const input = this.closest('.password-wrapper')?.querySelector('.input-field');
      if(input) {
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
        this.classList.toggle('fa-eye');
      }
    });
  });

  // Icon focus effect
  document.querySelectorAll('.input-field').forEach(inp => {
    inp.addEventListener('focus', () => {
      inp.closest('.input-group')?.querySelector('.input-icon')?.setAttribute('style', 'color: #2effbc; transform: translateY(-50%) scale(1.05);');
    });
    inp.addEventListener('blur', () => {
      inp.closest('.input-group')?.querySelector('.input-icon')?.setAttribute('style', 'color: #50d696;');
    });
  });
</script>
</body>
</html>