# Portfolio Database Setup

This folder contains all database migrations and initialization scripts for the Portfolio backend.

## Prerequisites

- PostgreSQL 12 or higher
- `psql` command-line tool installed

## Database Setup Instructions

### 1. Create the Database

```bash
# Using psql
createdb portfolio_db

# Or using SQL
psql -U postgres -c "CREATE DATABASE portfolio_db;"
```

### 2. Run Migrations

Run the initialization script to create all tables:

```bash
# From the backend directory
psql -U postgres -d portfolio_db < database/migrations/001_init.sql

# Or with password prompt
psql -U postgres -d portfolio_db -W < database/migrations/001_init.sql
```

### 3. Verify Setup

```bash
psql -U postgres -d portfolio_db -c "\dt"
```

This should list all the tables created.

## Database Schema

### Tables

#### `projects`
Stores portfolio projects with technologies and links.
- id, title, description, technologies (array), github_link, live_link, image_url

#### `about_me`
Personal information displayed on the home page.
- id, title, description, image_url

#### `social_links`
Social media profiles and contact links.
- id, platform (UNIQUE), url, icon_url

#### `gallery`
Portfolio gallery images organized by category.
- id, title, description, image_url, alt_text, category, display_order

#### `life`
Personal life content including images and videos.
- id, title, description, media_url, media_type (image/video), thumbnail_url, category, display_order

#### `contact_info`
Contact information and social links.
- id, email, phone, address, github_url, linkedin_url, instagram_url, twitter_url

## Environment Variables

Add these to your `.env` file:

```env
DB_HOST=localhost
DB_PORT=5432
DB_USER=postgres
DB_PASSWORD=your_password
DB_NAME=portfolio_db
DB_SSL_MODE=disable
```

## Example SQL Queries

### Insert a Project
```sql
INSERT INTO projects (title, description, technologies, github_link)
VALUES (
    'My Awesome Project',
    'A full-stack e-commerce platform',
    '{React, Node.js, PostgreSQL}',
    'https://github.com/user/project'
);
```

### Insert Life Content
```sql
INSERT INTO life (title, description, media_url, media_type, category)
VALUES (
    'Mountain Trip',
    'Amazing view from the mountain peak',
    'https://example.com/image.jpg',
    'image',
    'travel'
);
```

### Query Gallery by Category
```sql
SELECT * FROM gallery WHERE category = 'photography' ORDER BY display_order;
```

## Notes

- All timestamps are stored in UTC
- The `updated_at` field is separate from `created_at` for tracking modifications
- Arrays in PostgreSQL (like `technologies`) require array syntax: `'{React, Node.js}'`
- Display order can be used to control the order of gallery and life items on the frontend
