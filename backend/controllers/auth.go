package controllers

import (
	"math/rand"
	"time"

	"github.com/gofiber/fiber/v2"
)

type UserRequest struct {
	Email    string `form:"email" json:"email"`
	Password string `form:"password" json:"password"`
}

// Hardcoded admin user (replace with database)
const (
	AdminEmail    = "admin@portfolio.com"
	AdminPassword = "admin123"
)

func ShowLoginPage(c *fiber.Ctx) error {
	return c.SendString(loginPageHTML)
}

func LoginUser(c *fiber.Ctx) error {
	var req UserRequest

	// Try to parse as form data first (from HTML form)
	if err := c.BodyParser(&req); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request",
		})
	}

	if req.Email == "" || req.Password == "" {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Email and password are required",
		})
	}

	// Validate credentials
	if req.Email != AdminEmail || req.Password != AdminPassword {
		return c.Status(fiber.StatusUnauthorized).JSON(fiber.Map{
			"error": "Invalid email or password",
		})
	}

	// Generate new session ID
	sessionID := generateSessionID()

	// Set session cookie
	c.Cookie(&fiber.Cookie{
		Name:     "session_id",
		Value:    sessionID,
		Path:     "/",
		MaxAge:   86400 * 7, // 7 days
		HTTPOnly: true,
		Secure:   false, // Set to true in production with HTTPS
		SameSite: "Lax",
	})

	// Store session data
	StoreSession(sessionID, fiber.Map{
		"userID": 1,
		"email":  req.Email,
	})

	return c.JSON(fiber.Map{
		"message": "Login successful",
		"user": fiber.Map{
			"id":    1,
			"email": req.Email,
		},
	})
}

func LogoutUser(c *fiber.Ctx) error {
	sessionID := c.Cookies("session_id")
	if sessionID != "" {
		ClearSession(sessionID)
	}

	// Clear the cookie
	c.Cookie(&fiber.Cookie{
		Name:     "session_id",
		Value:    "",
		Path:     "/",
		MaxAge:   -1,
		HTTPOnly: true,
	})

	return c.JSON(fiber.Map{
		"message": "Logged out successfully",
	})
}

func RegisterUser(c *fiber.Ctx) error {
	// For now, registration is disabled
	return c.Status(fiber.StatusForbidden).JSON(fiber.Map{
		"error": "Registration is disabled",
	})
}

// Helper functions
var sessions = make(map[string]fiber.Map)

func StoreSession(sessionID string, data fiber.Map) {
	sessions[sessionID] = data
}

func GetSession(sessionID string) (fiber.Map, bool) {
	data, exists := sessions[sessionID]
	return data, exists
}

func ClearSession(sessionID string) {
	delete(sessions, sessionID)
}

func generateSessionID() string {
	const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
	b := make([]byte, 32)
	rand.Seed(time.Now().UnixNano())
	for i := range b {
		b[i] = charset[rand.Intn(len(charset))]
	}
	return string(b)
}

const loginPageHTML = `<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .logo p {
            color: #666;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #333;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #667eea;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            font-family: inherit;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        .error-message {
            display: none;
            color: #e74c3c;
            font-size: 14px;
            margin-top: 10px;
            padding: 10px;
            background: #fadbd8;
            border-radius: 5px;
            border-left: 4px solid #e74c3c;
        }

        .success-message {
            display: none;
            color: #27ae60;
            font-size: 14px;
            margin-top: 10px;
            padding: 10px;
            background: #d5f4e6;
            border-radius: 5px;
            border-left: 4px solid #27ae60;
        }

        .loading {
            display: none;
        }

        .spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #667eea;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .demo-credentials {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            color: #666;
            font-size: 12px;
        }

        .demo-credentials strong {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>Portfolio Admin</h1>
            <p>Login to manage your portfolio</p>
        </div>

        <form id="loginForm" onsubmit="handleLogin(event)">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="admin@portfolio.com"
                    required
                    autocomplete="email"
                />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="••••••••"
                    required
                    autocomplete="current-password"
                />
            </div>

            <button type="submit" id="loginBtn">
                <span class="button-text">Login</span>
                <div class="loading spinner"></div>
            </button>

            <div id="errorMessage" class="error-message"></div>
            <div id="successMessage" class="success-message"></div>
        </form>

        <div class="demo-credentials">
            <strong>Demo Credentials:</strong>
            Email: admin@portfolio.com<br>
            Password: admin123
        </div>
    </div>

    <script>
        async function handleLogin(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorDiv = document.getElementById('errorMessage');
            const successDiv = document.getElementById('successMessage');
            const loginBtn = document.getElementById('loginBtn');
            const buttonText = loginBtn.querySelector('.button-text');
            const loading = loginBtn.querySelector('.loading');

            // Clear messages
            errorDiv.style.display = 'none';
            successDiv.style.display = 'none';

            // Show loading
            loginBtn.disabled = true;
            buttonText.style.display = 'none';
            loading.style.display = 'block';

            try {
                const response = await fetch('/api/auth/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ email, password }),
                });

                const data = await response.json();

                if (response.ok) {
                    successDiv.textContent = '✓ ' + data.message;
                    successDiv.style.display = 'block';
                    // Redirect to dashboard after 1 second
                    setTimeout(() => {
                        window.location.href = '/dashboard';
                    }, 1000);
                } else {
                    errorDiv.textContent = '✗ ' + (data.error || 'Login failed');
                    errorDiv.style.display = 'block';
                }
            } catch (error) {
                errorDiv.textContent = '✗ Connection error: ' + error.message;
                errorDiv.style.display = 'block';
            } finally {
                loginBtn.disabled = false;
                buttonText.style.display = 'inline';
                loading.style.display = 'none';
            }
        }
    </script>
</body>
</html>`
