-- Portfolio Database Schema

-- Projects Table
CREATE TABLE IF NOT EXISTS projects (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    technologies TEXT[] DEFAULT '{}',
    github_link VARCHAR(500),
    live_link VARCHAR(500),
    image_url VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- About Me Table (Home Content)
CREATE TABLE IF NOT EXISTS about_me (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Social Links Table
CREATE TABLE IF NOT EXISTS social_links (
    id SERIAL PRIMARY KEY,
    platform VARCHAR(100) NOT NULL UNIQUE,
    url VARCHAR(500) NOT NULL,
    icon_url VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Gallery/Images Table
CREATE TABLE IF NOT EXISTS gallery (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image_url VARCHAR(500) NOT NULL,
    alt_text VARCHAR(255),
    category VARCHAR(100),
    display_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Life Table (Images and Videos)
CREATE TABLE IF NOT EXISTS life (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    media_url VARCHAR(500) NOT NULL,
    media_type VARCHAR(50) NOT NULL CHECK (media_type IN ('image', 'video')),
    thumbnail_url VARCHAR(500),
    category VARCHAR(100),
    display_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact Information Table
CREATE TABLE IF NOT EXISTS contact_info (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    github_url VARCHAR(500),
    linkedin_url VARCHAR(500),
    instagram_url VARCHAR(500),
    twitter_url VARCHAR(500),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create indexes for better query performance
CREATE INDEX IF NOT EXISTS idx_projects_created_at ON projects(created_at DESC);
CREATE INDEX IF NOT EXISTS idx_gallery_category ON gallery(category);
CREATE INDEX IF NOT EXISTS idx_gallery_display_order ON gallery(display_order);
CREATE INDEX IF NOT EXISTS idx_life_category ON life(category);
CREATE INDEX IF NOT EXISTS idx_life_media_type ON life(media_type);
CREATE INDEX IF NOT EXISTS idx_life_display_order ON life(display_order);
CREATE INDEX IF NOT EXISTS idx_social_links_platform ON social_links(platform);
