package controllers

import (
	"math/rand"
	"os"
	"path/filepath"
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
	pagePath, err := resolveViewPath("login.html")
	if err != nil {
		return c.Status(fiber.StatusInternalServerError).SendString("Login page not found")
	}

	c.Type("html", "utf-8")
	return c.SendFile(pagePath)
}

func ShowDashboardPage(c *fiber.Ctx) error {
	pagePath, err := resolveViewPath("dashboard.html")
	if err != nil {
		return c.Status(fiber.StatusInternalServerError).SendString("Dashboard page not found")
	}

	c.Type("html", "utf-8")
	return c.SendFile(pagePath)
}

func resolveViewPath(filename string) (string, error) {
	cwd, err := os.Getwd()
	if err != nil {
		return "", err
	}

	candidates := []string{
		filepath.Join(cwd, "views", filename),
		filepath.Join(cwd, "backend", "views", filename),
		filepath.Join(filepath.Dir(cwd), "views", filename),
		filepath.Join(filepath.Dir(cwd), "backend", "views", filename),
	}

	for _, candidate := range candidates {
		if _, err := os.Stat(candidate); err == nil {
			return candidate, nil
		}
	}

	return "", os.ErrNotExist
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
