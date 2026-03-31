package controllers

import (
	"strconv"

	"github.com/gofiber/fiber/v2"
)

// In-memory storage (replace with database later)
var projects = []fiber.Map{
	{
		"id":           1,
		"title":        "Morse Code Generator-Swing",
		"description": "A Java Swing application that converts text into Morse code.",
		"technologies": []string{"Java", "Swing"},
		"githubLink":  "https://github.com/Nishchal-ll/MorseCodeGenerator-Swing",
	},
}

var homeData = fiber.Map{
	"id":          1,
	"title":       "Full Stack Developer",
	"description": "I craft modern web applications and robust backends.",
	"image":       "/me1.png",
	"github":     "https://github.com/Nishchal-ll",
	"instagram":  "https://instagram.com/nishchal",
	"linkedin":   "https://linkedin.com/in/nishchal",
}

var gallery = []fiber.Map{
	{
		"id":          1,
		"title":       "Gallery Item 1",
		"description": "Project screenshot",
		"url":        "/gallery/1.jpg",
		"altText":   "Gallery 1",
	},
}

var contactData = fiber.Map{
	"id":        1,
	"email":    "email@example.com",
	"github":   "https://github.com/Nishchal-ll",
	"linkedin": "https://linkedin.com/in/nishchal",
	"instagram": "https://instagram.com/nishchal",
}

// ==================== PROJECTS ====================

func AdminGetProjects(c *fiber.Ctx) error {
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data":   projects,
	})
}

func AdminCreateProject(c *fiber.Ctx) error {
	var project fiber.Map
	if err := c.BodyParser(&project); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	// Generate ID
	newID := len(projects) + 1
	project["id"] = newID

	projects = append(projects, project)

	return c.Status(fiber.StatusCreated).JSON(fiber.Map{
		"status": "success",
		"message": "Project created successfully",
		"data":   project,
	})
}

func AdminUpdateProject(c *fiber.Ctx) error {
	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	var updatedProject fiber.Map
	if err := c.BodyParser(&updatedProject); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	for i, project := range projects {
		if int(project["id"].(float64)) == id {
			updatedProject["id"] = id
			projects[i] = updatedProject
			return c.Status(fiber.StatusOK).JSON(fiber.Map{
				"status": "success",
				"message": "Project updated successfully",
				"data":   updatedProject,
			})
		}
	}

	return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
		"error": "Project not found",
	})
}

func AdminDeleteProject(c *fiber.Ctx) error {
	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	for i, project := range projects {
		if int(project["id"].(float64)) == id {
			projects = append(projects[:i], projects[i+1:]...)
			return c.Status(fiber.StatusOK).JSON(fiber.Map{
				"status": "success",
				"message": "Project deleted successfully",
			})
		}
	}

	return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
		"error": "Project not found",
	})
}

// ==================== HOME ====================

func AdminGetHome(c *fiber.Ctx) error {
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data":   homeData,
	})
}

func AdminUpdateHome(c *fiber.Ctx) error {
	var updated fiber.Map
	if err := c.BodyParser(&updated); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	// Preserve ID
	updated["id"] = 1

	homeData = updated

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Home data updated successfully",
		"data":   homeData,
	})
}

// ==================== GALLERY ====================

func AdminGetGallery(c *fiber.Ctx) error {
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data":   gallery,
	})
}

func AdminCreateGallery(c *fiber.Ctx) error {
	var item fiber.Map
	if err := c.BodyParser(&item); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	newID := len(gallery) + 1
	item["id"] = newID

	gallery = append(gallery, item)

	return c.Status(fiber.StatusCreated).JSON(fiber.Map{
		"status": "success",
		"message": "Gallery item created successfully",
		"data":   item,
	})
}

func AdminUpdateGallery(c *fiber.Ctx) error {
	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	var updated fiber.Map
	if err := c.BodyParser(&updated); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	for i, item := range gallery {
		if int(item["id"].(float64)) == id {
			updated["id"] = id
			gallery[i] = updated
			return c.Status(fiber.StatusOK).JSON(fiber.Map{
				"status": "success",
				"message": "Gallery item updated successfully",
				"data":   updated,
			})
		}
	}

	return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
		"error": "Gallery item not found",
	})
}

func AdminDeleteGallery(c *fiber.Ctx) error {
	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	for i, item := range gallery {
		if int(item["id"].(float64)) == id {
			gallery = append(gallery[:i], gallery[i+1:]...)
			return c.Status(fiber.StatusOK).JSON(fiber.Map{
				"status": "success",
				"message": "Gallery item deleted successfully",
			})
		}
	}

	return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
		"error": "Gallery item not found",
	})
}

// ==================== CONTACT ====================

func AdminGetContact(c *fiber.Ctx) error {
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data":   contactData,
	})
}

func AdminUpdateContact(c *fiber.Ctx) error {
	var updated fiber.Map
	if err := c.BodyParser(&updated); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	updated["id"] = 1
	contactData = updated

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Contact data updated successfully",
		"data":   contactData,
	})
}
