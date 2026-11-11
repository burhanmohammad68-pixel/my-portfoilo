
CREATE DATABASE IF NOT EXISTS portfolio_db;

USE portfolio_db;

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    technologies VARCHAR(255),
    image VARCHAR(255),
    github_link VARCHAR(255),
    demo_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100) NOT NULL,
    proficiency INT NOT NULL,
    category VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    degree VARCHAR(150) NOT NULL,
    institution VARCHAR(150) NOT NULL,
    start_year YEAR,
    end_year YEAR,
    description TEXT
);

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO skills (skill_name, proficiency, category)
VALUES
('HTML', 90, 'Frontend'),
('CSS', 85, 'Frontend'),
('JavaScript', 75, 'Programming'),
('PHP', 70, 'Backend'),
('MySQL', 80, 'Database'),
('Java', 75, 'Programming'),
('C++', 70, 'Programming');

INSERT INTO education
(degree, institution, start_year, end_year, description)
VALUES
(
    'BS Computer System Engineering',
    'Mehran University of Engineering and Technology',
    2024,
    2028,
    'Studying computer systems, programming and software development.'
);

INSERT INTO projects
(title, description, technologies, github_link)
VALUES
(
    'Face Recognition Attendance System',
    'An attendance system using ESP32-CAM for face recognition.',
    'ESP32-CAM, PHP, HTML, CSS',
    '#'
),
(
    'Personal Portfolio Website',
    'A dynamic portfolio website using PHP and MySQL.',
    'PHP, MySQL, Bootstrap, JavaScript',
    '#'
),
(
    'WIFI CSI Motion Detection',
    'An embedded project using two ESP32-S3 boards to detect movement beneath rubble by analyzing Wi-Fi Channel State Information (CSI).',
    'ESP32 cams, Python , LM2596 buck converter',
    '#'
);
