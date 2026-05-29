<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WMS APPLICATION</title>
</head>
<body>
    <!-- ======== LOGIN PAGE ======== -->
    <div class="login-wrap">
        <div class="login-bg">
            <div class="login-grid"></div>
        </div>
        <div class="login-box">
            <div class="login-brand">
            <span class="brand-text">WMS <em>LSN</em></span>
            </div>
            <p class="login-sub">Warehouse Management System</p>
            <form id="loginForm" autocomplete="off">
            <div class="field-group">
                <label class="field-label">User ID</label>
                <input type="text" id="loginUserid" class="field-input" placeholder="Masukkan User ID" autocomplete="username">
            </div>
            <div class="field-group">
                <label class="field-label">Password</label>
                <div class="input-wrap">
                <input type="password" id="loginPassword" class="field-input" placeholder="••••••••" autocomplete="current-password">
                <button type="button" class="input-icon-btn" id="togglePwd" tabindex="-1">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </button>
                </div>
            </div>
            <div id="loginError" class="form-error hidden"></div>
            <button type="submit" class="btn btn-primary btn-block" id="loginBtn">
                <span>Masuk</span>
            </button>
            </form>
        </div>
    </div>
</body>
</html>