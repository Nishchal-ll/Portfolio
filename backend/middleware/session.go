package middleware

import (
	"backend/controllers"

	"github.com/gofiber/fiber/v2"
)

// SessionMiddleware checks if user has a valid session
func SessionMiddleware(c *fiber.Ctx) error {
	sessionID := c.Cookies("session_id")

	if sessionID == "" {
		return c.Status(fiber.StatusUnauthorized).JSON(fiber.Map{
			"error": "Unauthorized - please login",
		})
	}

	// Check if session exists
	session, exists := controllers.GetSession(sessionID)
	if !exists {
		return c.Status(fiber.StatusUnauthorized).JSON(fiber.Map{
			"error": "Session expired - please login again",
		})
	}

	// Store session data in context for later use
	c.Locals("userID", session["userID"])
	c.Locals("email", session["email"])
	c.Locals("sessionID", sessionID)

	return c.Next()
}
