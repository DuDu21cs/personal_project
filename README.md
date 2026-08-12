# Empire Consultancy 🏢

A multi-page business consultancy website built with **HTML, CSS, and PHP**. Designed for a professional consultancy firm offering strategic business advisory, financial planning, startup support, and capacity-building services.

---

## 🚀 Features

- Multi-page layout (Home, About, Services, Industries, Case Studies, Blog, Contact)
- Hero section with image background and dark overlay
- Services showcase with card-based layout
- Alternating section backgrounds for visual depth
- Client testimonials section
- Business stats section (100+ businesses advised, 95% satisfaction)
- Functional contact form with **PHP & MySQL** backend
- Social media links in footer
- Mobile responsive layout with hamburger menu

---

## 🛠️ Tech Stack

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

---

## 📁 Project Structure

```
empire-consultancy/
├── config/
│   └── db.php              # Database connection
├── css/
│   └── style.css           # Main stylesheet (responsive)
├── images/
│   └── hero-bg.jpg         # Hero section background image
├── home.html               # Home page
├── about.html              # About page
├── services.html           # Services page
├── industries.html         # Industries page
├── case-studies.html       # Case Studies page
├── blog.html               # Blog page
└── contact.php             # Contact page with form submission
```

---

## ⚙️ Getting Started

1. Clone the repo:
   ```bash
   git clone https://github.com/DuDu21cs/personal_project.git
   ```
2. Move the project folder to your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\empire-consultancy\
   ```
3. Start **Apache** and **MySQL** in XAMPP
4. Open **phpMyAdmin** at `http://localhost/phpmyadmin` and create a database named `empire_consultancy`
5. Run this SQL to create the contacts table:
   ```sql
   CREATE TABLE contacts (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       subject VARCHAR(150),
       message TEXT NOT NULL,
       submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
6. Open your browser and go to:
   ```
   http://localhost/empire-consultancy/home.html
   ```

---

## 📫 Contact

**Duresa Chemeda**
- GitHub: [@DuDu21cs](https://github.com/DuDu21cs)
- Email: [duresachemedadudu@gmail.com](mailto:duresachemedadudu@gmail.com)
- LinkedIn: [Duresa Chemeda](https://www.linkedin.com/in/duresa-chemeda-66a28a411/)