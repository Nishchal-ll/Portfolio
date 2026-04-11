package main

import (
	"backend/controllers"
	"backend/middleware"
	"fmt"
	"log"
	"os"

	"github.com/gofiber/fiber/v2"
	"github.com/gofiber/fiber/v2/middleware/cors"
	"github.com/joho/godotenv"
)

func main() {
	// Load .env file
	_ = godotenv.Load()

	app := fiber.New(fiber.Config{
		AppName: "Portfolio Admin Dashboard",
	})

	// CORS Middleware
	app.Use(cors.New(cors.Config{
		AllowOrigins:     "http://localhost:5173, http://localhost:3000, http://localhost:8080",
		AllowMethods:     "GET,POST,PUT,DELETE,OPTIONS",
		AllowCredentials: true,
	}))

	// Health check endpoint
	app.Get("/api/health", func(c *fiber.Ctx) error {
		return c.JSON(fiber.Map{"status": "ok"})
	})

	// Login page
	app.Get("/login", controllers.ShowLoginPage)

	// Protected dashboard page
	app.Get("/dashboard", middleware.SessionMiddleware, controllers.ShowDashboardPage)

	// Public Auth Routes (no session required)
	SetupAuthRoutes(app)

	// Protected Admin Dashboard Routes (session required)
	SetupAdminRoutes(app)

	port := os.Getenv("PORT")
	if port == "" {
		port = "8080"
	}

	fmt.Printf("🚀 Admin Dashboard running on http://localhost:%s\n", port)
	log.Fatal(app.Listen(":" + port))
}

func SetupAuthRoutes(app *fiber.App) {
	auth := app.Group("/api/auth")
	auth.Post("/register", controllers.RegisterUser)
	auth.Post("/login", controllers.LoginUser)
	auth.Post("/logout", controllers.LogoutUser)
}

func SetupAdminRoutes(app *fiber.App) {
	admin := app.Group("/api/admin")
	admin.Use(middleware.SessionMiddleware) // Protect all admin routes

	// Project Management
	admin.Get("/projects", controllers.AdminGetProjects)
	admin.Post("/projects", controllers.AdminCreateProject)
	admin.Put("/projects/:id", controllers.AdminUpdateProject)
	admin.Delete("/projects/:id", controllers.AdminDeleteProject)

	// Home Management
	admin.Get("/home", controllers.AdminGetHome)
	admin.Put("/home/:id", controllers.AdminUpdateHome)

	// Gallery Management
	admin.Get("/gallery", controllers.AdminGetGallery)
	admin.Post("/gallery", controllers.AdminCreateGallery)
	admin.Put("/gallery/:id", controllers.AdminUpdateGallery)
	admin.Delete("/gallery/:id", controllers.AdminDeleteGallery)

	// Contact Management
	admin.Get("/contact", controllers.AdminGetContact)
	admin.Put("/contact/:id", controllers.AdminUpdateContact)
}
