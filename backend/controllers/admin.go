package controllers

import (
	"backend/database"
	"database/sql"
	"strconv"

	"github.com/gofiber/fiber/v2"
	"github.com/lib/pq"
)

// ==================== PROJECTS ====================

func AdminGetProjects(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	rows, err := db.Query(`
		SELECT id, title, description, technologies, github_link, live_link, image_url
		FROM projects
		ORDER BY created_at DESC
	`)
	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to fetch projects",
		})
	}
	defer rows.Close()

	var projects []fiber.Map
	for rows.Next() {
		var id int
		var title, description, githubLink, liveLink, imageUrl string
		var technologies pq.StringArray

		if err := rows.Scan(&id, &title, &description, &technologies, &githubLink, &liveLink, &imageUrl); err != nil {
			continue
		}

		projects = append(projects, fiber.Map{
			"id":           id,
			"title":        title,
			"description": description,
			"technologies": technologies,
			"githubLink":  githubLink,
			"liveLink":    liveLink,
			"imageUrl":    imageUrl,
		})
	}

	if projects == nil {
		projects = []fiber.Map{}
	}

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data":   projects,
	})
}

func AdminCreateProject(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	var project fiber.Map
	if err := c.BodyParser(&project); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	var id int
	err := db.QueryRow(`
		INSERT INTO projects (title, description, technologies, github_link, live_link, image_url)
		VALUES ($1, $2, $3, $4, $5, $6)
		RETURNING id
	`, project["title"], project["description"], pq.Array(project["technologies"]),
		project["githubLink"], project["liveLink"], project["imageUrl"]).Scan(&id)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to create project",
		})
	}

	project["id"] = id
	return c.Status(fiber.StatusCreated).JSON(fiber.Map{
		"status": "success",
		"message": "Project created successfully",
		"data":   project,
	})
}

func AdminUpdateProject(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	var project fiber.Map
	if err := c.BodyParser(&project); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	result, err := db.Exec(`
		UPDATE projects SET title=$1, description=$2, technologies=$3, github_link=$4, live_link=$5, image_url=$6, updated_at=CURRENT_TIMESTAMP
		WHERE id=$7
	`, project["title"], project["description"], pq.Array(project["technologies"]),
		project["githubLink"], project["liveLink"], project["imageUrl"], id)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to update project",
		})
	}

	rowsAffected, err := result.RowsAffected()
	if rowsAffected == 0 {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Project not found",
		})
	}

	project["id"] = id
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Project updated successfully",
		"data":   project,
	})
}

func AdminDeleteProject(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	result, err := db.Exec("DELETE FROM projects WHERE id=$1", id)
	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to delete project",
		})
	}

	rowsAffected, err := result.RowsAffected()
	if rowsAffected == 0 {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Project not found",
		})
	}

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Project deleted successfully",
	})
}

// ==================== HOME / ABOUT ME ====================

func AdminGetHome(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	var id int
	var title, description, imageUrl string

	err := db.QueryRow(`
		SELECT id, title, description, image_url FROM about_me LIMIT 1
	`).Scan(&id, &title, &description, &imageUrl)

	if err == sql.ErrNoRows {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Home content not found",
		})
	}

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to fetch home content",
		})
	}

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data": fiber.Map{
			"id":          id,
			"title":       title,
			"description": description,
			"imageUrl":    imageUrl,
		},
	})
}

func AdminUpdateHome(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	var data fiber.Map
	if err := c.BodyParser(&data); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	result, err := db.Exec(`
		UPDATE about_me SET title=$1, description=$2, image_url=$3, updated_at=CURRENT_TIMESTAMP WHERE id=$4
	`, data["title"], data["description"], data["imageUrl"], id)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to update home content",
		})
	}

	rowsAffected, err := result.RowsAffected()
	if rowsAffected == 0 {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Home content not found",
		})
	}

	data["id"] = id
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Home content updated successfully",
		"data":   data,
	})
}

// ==================== GALLERY ====================

func AdminGetGallery(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	rows, err := db.Query(`
		SELECT id, title, description, image_url, alt_text, category, display_order
		FROM gallery
		ORDER BY display_order, created_at DESC
	`)
	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to fetch gallery",
		})
	}
	defer rows.Close()

	var items []fiber.Map
	for rows.Next() {
		var id, displayOrder int
		var title, description, imageUrl, altText, category string

		if err := rows.Scan(&id, &title, &description, &imageUrl, &altText, &category, &displayOrder); err != nil {
			continue
		}

		items = append(items, fiber.Map{
			"id":           id,
			"title":        title,
			"description": description,
			"url":         imageUrl,
			"altText":     altText,
			"category":    category,
			"displayOrder": displayOrder,
		})
	}

	if items == nil {
		items = []fiber.Map{}
	}

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data":   items,
	})
}

func AdminCreateGallery(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	var item fiber.Map
	if err := c.BodyParser(&item); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	var id int
	err := db.QueryRow(`
		INSERT INTO gallery (title, description, image_url, alt_text, category, display_order)
		VALUES ($1, $2, $3, $4, $5, $6)
		RETURNING id
	`, item["title"], item["description"], item["url"], item["altText"], item["category"], item["displayOrder"]).Scan(&id)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to create gallery item",
		})
	}

	item["id"] = id
	return c.Status(fiber.StatusCreated).JSON(fiber.Map{
		"status": "success",
		"message": "Gallery item created successfully",
		"data":   item,
	})
}

func AdminUpdateGallery(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	var item fiber.Map
	if err := c.BodyParser(&item); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	result, err := db.Exec(`
		UPDATE gallery SET title=$1, description=$2, image_url=$3, alt_text=$4, category=$5, display_order=$6, updated_at=CURRENT_TIMESTAMP
		WHERE id=$7
	`, item["title"], item["description"], item["url"], item["altText"], item["category"], item["displayOrder"], id)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to update gallery item",
		})
	}

	rowsAffected, err := result.RowsAffected()
	if rowsAffected == 0 {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Gallery item not found",
		})
	}

	item["id"] = id
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Gallery item updated successfully",
		"data":   item,
	})
}

func AdminDeleteGallery(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	result, err := db.Exec("DELETE FROM gallery WHERE id=$1", id)
	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to delete gallery item",
		})
	}

	rowsAffected, err := result.RowsAffected()
	if rowsAffected == 0 {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Gallery item not found",
		})
	}

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Gallery item deleted successfully",
	})
}

// ==================== CONTACT ====================

func AdminGetContact(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	var id int
	var email, phone, address, githubUrl, linkedinUrl, instagramUrl, twitterUrl string

	err := db.QueryRow(`
		SELECT id, email, phone, address, github_url, linkedin_url, instagram_url, twitter_url FROM contact_info LIMIT 1
	`).Scan(&id, &email, &phone, &address, &githubUrl, &linkedinUrl, &instagramUrl, &twitterUrl)

	if err == sql.ErrNoRows {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Contact info not found",
		})
	}

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to fetch contact info",
		})
	}

	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"data": fiber.Map{
			"id":        id,
			"email":    email,
			"phone":    phone,
			"address":  address,
			"github":   githubUrl,
			"linkedin": linkedinUrl,
			"instagram": instagramUrl,
			"twitter":  twitterUrl,
		},
	})
}

func AdminUpdateContact(c *fiber.Ctx) error {
	db := database.GetDB()
	if db == nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Database connection failed",
		})
	}

	id, err := strconv.Atoi(c.Params("id"))
	if err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid ID",
		})
	}

	var data fiber.Map
	if err := c.BodyParser(&data); err != nil {
		return c.Status(fiber.StatusBadRequest).JSON(fiber.Map{
			"error": "Invalid request body",
		})
	}

	result, err := db.Exec(`
		UPDATE contact_info SET email=$1, phone=$2, address=$3, github_url=$4, linkedin_url=$5, instagram_url=$6, twitter_url=$7, updated_at=CURRENT_TIMESTAMP WHERE id=$8
	`, data["email"], data["phone"], data["address"], data["github"], data["linkedin"], data["instagram"], data["twitter"], id)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"error": "Failed to update contact info",
		})
	}

	rowsAffected, err := result.RowsAffected()
	if rowsAffected == 0 {
		return c.Status(fiber.StatusNotFound).JSON(fiber.Map{
			"error": "Contact info not found",
		})
	}

	data["id"] = id
	return c.Status(fiber.StatusOK).JSON(fiber.Map{
		"status": "success",
		"message": "Contact information updated successfully",
		"data":   data,
	})
}
