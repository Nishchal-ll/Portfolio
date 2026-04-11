-- Sample Data for Portfolio Database
-- Run this after 001_init.sql to populate the database with sample data

-- Insert About Me Information
INSERT INTO about_me (title, description, image_url) 
VALUES (
    'Full Stack Developer',
    'I craft modern web applications and robust backends. Passionate about creating seamless user experiences with cutting-edge technology.',
    '/images/me.jpg'
) ON CONFLICT DO NOTHING;

-- Insert Social Links
INSERT INTO social_links (platform, url, icon_url) 
VALUES 
    ('github', 'https://github.com/Nishchal-ll', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/svgs/brands/github.svg'),
    ('linkedin', 'https://linkedin.com/in/nishchal', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/svgs/brands/linkedin.svg'),
    ('instagram', 'https://instagram.com/nishchal', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/svgs/brands/instagram.svg'),
    ('twitter', 'https://twitter.com/nishchal', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/svgs/brands/twitter.svg')
ON CONFLICT (platform) DO NOTHING;

-- Insert Contact Information
INSERT INTO contact_info (email, phone, github_url, linkedin_url, instagram_url, twitter_url)
VALUES (
    'acharyanischal2004@gmail.com',
    '+977-9765341686',
    'https://github.com/Nishchal-ll',
    'https://linkedin.com/in/nishchal',
    'https://instagram.com/nishchal._.l',
    'https://twitter.com/nishchal'
) ON CONFLICT DO NOTHING;

-- Insert Sample Projects
INSERT INTO projects (title, description, technologies, github_link, live_link, image_url)
VALUES 
    (
        'Morse Code Generator - Swing',
        'A Java Swing application that converts text into Morse code with audio playback support.',
        '{Java, Swing, Audio}',
        'https://github.com/Nishchal-ll/MorseCodeGenerator-Swing',
        NULL,
        '/images/projects/morse-code.jpg'
    ),
    (
        'E-Commerce Platform',
        'A full-stack e-commerce platform for Hot Wheels cars built with React and Laravel, featuring product browsing, cart functionality, Stripe checkout, and an admin dashboard.',
        '{React, Laravel, MySQL, Stripe}',
        'https://github.com/Nishchal-ll/ecommerce-project',
        'https://hotwhees-store.example.com',
        '/images/projects/ecommerce.jpg'
    ),
    (
        'Portfolio Website',
        'A modern responsive portfolio website showcasing projects and skills with an admin dashboard for content management.',
        '{React, Go, PostgreSQL, Fiber}',
        'https://github.com/Nishchal-ll/Portfolio',
        'https://nishchal.example.com',
        '/images/projects/portfolio.jpg'
    )
ON CONFLICT DO NOTHING;

-- Insert Sample Gallery Images
INSERT INTO gallery (title, description, image_url, alt_text, category, display_order)
VALUES 
    (
        'Web Design Mockup',
        'Beautiful dashboard UI design for admin panel',
        '/gallery/design-1.jpg',
        'Dashboard Design',
        'design',
        1
    ),
    (
        'Development Setup',
        'My development workspace and setup',
        '/gallery/workspace.jpg',
        'Developer Workspace',
        'workspace',
        1
    ),
    (
        'Conference Speaking',
        'Speaking at a tech conference about web development',
        '/gallery/conference.jpg',
        'Tech Conference',
        'events',
        1
    )
ON CONFLICT DO NOTHING;

-- Insert Sample Life Content
INSERT INTO life (title, description, media_url, media_type, thumbnail_url, category, display_order)
VALUES 
    (
        'Mountain Adventure',
        'An amazing trek through the Himalayas with breathtaking views',
        '/life/mountain.jpg',
        'image',
        '/life/mountain-thumb.jpg',
        'travel',
        1
    ),
    (
        'Coding Session Vlog',
        'A day in the life of a developer - coding, debugging, and coffee breaks',
        '/life/coding-vlog.mp4',
        'video',
        '/life/coding-vlog-thumb.jpg',
        'vlog',
        1
    ),
    (
        'Tech Meetup Experience',
        'Networking and learning at the local tech meetup',
        '/life/meetup.jpg',
        'image',
        '/life/meetup-thumb.jpg',
        'events',
        2
    ),
    (
        'Weekend Hike',
        'Beautiful sunset during a weekend hike',
        '/life/hike-sunset.jpg',
        'image',
        '/life/hike-sunset-thumb.jpg',
        'lifestyle',
        1
    )
ON CONFLICT DO NOTHING;
