<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Zaman Joarddar \'s Portfolio';
?>
<div class="site-index">
<!-- Hero Section -->
<section class="hero d-flex align-items-center justify-content-center text-white text-center py-5" style="background: linear-gradient(135deg, #1d3557, #457b9d); min-height: 30vh;">
    <div class="container">
        <h1 class="display-3 fw-bold">Hello, I'm <strong>Zaman Joarddar</strong></h1>
        <p class="lead fs-4 mt-3">Project Manager | Full-Stack Developer | Technology Enthusiast</p>
        <p class="mt-4">
            <a href="#projects" class="btn btn-outline-light btn-lg px-4 shadow-lg">See My Work</a>
        </p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="h2 fw-bold text-primary">About Me</h2>
                <p class="lead text-muted">I am a results-driven Project Manager with 9+ years of experience in full-stack development, team leadership, and project management. Skilled in overseeing remote teams, managing project lifecycles, and delivering scalable, high-performance solutions using PHP, Node.js, Laravel, and React. Passionate about fostering collaboration, improving system architecture, and ensuring on-time, high-quality software delivery.</p>
                <p class="text-muted">Currently, I am seeking a remote leadership role to drive innovation and deliver impactful technology solutions.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="https://www.linkedin.com/in/mrzmna" target="_blank" class="btn btn-outline-primary">LinkedIn</a>
                    <a href="mailto:mrazmna@gmail.com" class="btn btn-outline-secondary">Email Me</a>
                    <a href="https://github.com/mrzmnaj" target="_blank" class="btn btn-outline-dark">GitHub</a>
                    <a href="https://portfolio-link.com" target="_blank" class="btn btn-outline-success">Portfolio</a>
                </div>
                
                <!-- Programming Technologies -->
                <h3 class="h4 mt-4 text-primary">Technical Expertise</h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><strong>Backend:</strong> PHP (Laravel, CodeIgniter), Node.js (Express, Fastify), Python (FastAPI, Flask)</li>
                            <li><strong>Frontend:</strong> JavaScript (React, jQuery), HTML, CSS, SASS, Tailwind, Bootstrap</li>
                            <li><strong>Databases:</strong> MySQL, NoSQL (MongoDB, Firebase), PostgreSQL</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><strong>DevOps & Cloud:</strong> Docker, Apache, Nginx, CI/CD, AWS, DigitalOcean, VPS</li>
                            <li><strong>API Management:</strong> RESTful APIs, GraphQL</li>
                            <li><strong>Messaging & Workflow:</strong> RabbitMQ, Kafka</li>
                            <li><strong>Project Management:</strong> Agile, Jira, Asana, Trello, ClickUp</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="<?= Yii::getAlias('@web') ?>/uploads/images/profile.png" alt="Zaman Joarddar " class="img-fluid rounded-circle shadow-lg" style="max-width: 80%; border: 5px solid #fff;" />
            </div>
        </div>
    </div>
</section>


<!-- Skills Section -->
<section id="skills" class="py-5 bg-light mt-3">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">Skills & Competencies</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-white shadow-sm rounded">
                    <h4 class="text-secondary fw-bold">Project & Team Management</h4>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-check-circle-fill text-success"></i> Agile (Scrum, Kanban), Sprint Planning, Remote Team Leadership</li>
                        <li><i class="bi bi-check-circle-fill text-success"></i> Jira, Asana, Trello, ClickUp, Resource & Time Tracking (Clockify, RescueTime)</li>
                        <li><i class="bi bi-check-circle-fill text-success"></i> Team Collaboration (Slack, Skype, Zoom), Risk & Workflow Optimization</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-white shadow-sm rounded">
                    <h4 class="text-secondary fw-bold">Technical Expertise & DevOps</h4>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-check-circle-fill text-success"></i> System Architecture & Design (Monolithic, Microservices)</li>
                        <li><i class="bi bi-check-circle-fill text-success"></i> Cloud Services (AWS, DigitalOcean, GCP, VPS), Kubernetes, Terraform</li>
                        <li><i class="bi bi-check-circle-fill text-success"></i> DevOps & Deployment (Docker, Nginx, Apache, CI/CD: Jenkins, GitHub Actions, GitLab CI)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-4 bg-white shadow-sm rounded">
                    <h4 class="text-secondary fw-bold">Software Development</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-code-slash text-info"></i> <strong>Backend:</strong> PHP (Laravel, CodeIgniter), Node.js (Express, Fastify), Python (FastAPI, Flask)</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-palette-fill text-warning"></i> <strong>Frontend:</strong> JavaScript (React, jQuery), UI/UX (Figma, Tailwind, Bootstrap)</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled mt-3">
                                <li><i class="bi bi-database-fill text-danger"></i> <strong>Databases:</strong> MySQL, MongoDB, Redis, DynamoDB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-light  mt-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-primary">My Recent Projects</h2>
        <div class="row g-4">
            <!-- Project Card Template -->
            <?php 
                $projects = [
                    ["title" => "HRM - Human Resource Management System", "desc" => "Built using Microservices architecture with Node.js, Go, Python, Kafka, and Docker.", "skills" => "Microservices, API Development, Database Management", "tech" => "Node.js, Go, Python, Kafka, Docker"],
                    ["title" => "LMS - Learning Management System", "desc" => "A full-stack LMS developed using Laravel, jQuery, Bootstrap, and RESTful APIs.", "skills" => "Full-Stack Development, UI/UX, API Integration", "tech" => "Laravel, jQuery, Bootstrap, RESTful APIs"],
                    ["title" => "Ecommerce - Online Marketplace with Multi-Vendor", "desc" => "Built with Next.js, Node.js, MongoDB, and Laravel.", "skills" => "E-commerce, Database Design, Payment Gateway Integration", "tech" => "Next.js, Node.js, MongoDB, Laravel"],
                    ["title" => "POS System", "desc" => "Point of Sale system for retail businesses.", "skills" => "Inventory Management, POS Development", "tech" => "Laravel, Vue.js, MySQL"],
                    ["title" => "Real Estate Listing Platform", "desc" => "A property listing and management system.", "skills" => "UI/UX, API Development", "tech" => "Next.js, Node.js, MongoDB"],
                    ["title" => "Blog & Content Management System", "desc" => "A blogging platform with SEO features.", "skills" => "SEO, Content Management", "tech" => "Laravel, MySQL, Bootstrap"],
                    ["title" => "Healthcare Management System", "desc" => "A digital solution for hospitals and clinics.", "skills" => "Healthcare Software, Database Management", "tech" => "Python, Django, PostgreSQL"],
                    ["title" => "Chat Application", "desc" => "A real-time messaging platform.", "skills" => "WebSockets, Real-time Communication", "tech" => "Node.js, Socket.io, React"],
                    ["title" => "Online Exam System", "desc" => "A web-based exam and grading system.", "skills" => "Assessment Management, Security", "tech" => "Laravel, Vue.js, MySQL"]
                ];
            ?>
            
            <?php foreach ($projects as $project): ?>
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg rounded-lg overflow-hidden ">
                        <div class="card-body p-4">
                            <h5 class="card-title text-primary fw-bold"> <?= $project['title'] ?> </h5>
                            <p class="card-text text-muted"> <?= $project['desc'] ?> </p>
                            <p><strong>Skills:</strong> <?= $project['skills'] ?> </p>
                            <p><strong>Technologies:</strong> <?= $project['tech'] ?> </p>
                            <!-- <a href="#" class="btn btn-outline-primary w-100">View Project</a> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- Certifications Section -->
<section id="certifications" class="py-5 bg-light mt-5">
    <div class="container">
        <h2 class="text-center mb-5 text-primary font-weight-bold">Certifications</h2>
        <div class="row">
            <!-- Certification 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Google Project Management Certificate</h5>
                        <p class="card-text text-muted">Completed: January 2025</p>
                        <p class="card-text">A comprehensive program to learn project management principles and tools. Perfect for aspiring managers.</p>
                    </div>
                </div>
            </div>

            <!-- Certification 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Agile Project Management</h5>
                        <p class="card-text text-muted">Completed: December 2024</p>
                        <p class="card-text">Offered by Coursera (University of Maryland), this course covers the fundamentals of Agile methodology.</p>
                    </div>
                </div>
            </div>

            <!-- Certification 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Introduction to Project Management</h5>
                        <p class="card-text text-muted">Completed: November 2024</p>
                        <p class="card-text">An introductory course from Alison that provides a solid foundation in project management concepts and best practices.</p>
                    </div>
                </div>
            </div>

            <!-- Certification 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Scrum Master Fundamentals</h5>
                        <p class="card-text text-muted">Completed: October 2024</p>
                        <p class="card-text">This course by Scrum Training Series introduces Scrum methodology and equips you with the tools to manage Scrum teams effectively.</p>
                    </div>
                </div>
            </div>

            <!-- Certification 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Project Management Principles and Practices</h5>
                        <p class="card-text text-muted">Completed: September 2024</p>
                        <p class="card-text">Offered by Coursera (University of California, Irvine), this course delves into the foundational practices that drive successful projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light mt-5">
        <div class="container">
            <h2 class="text-center mb-5">Contact Me</h2>
            <form action="your-contact-form-handler-url" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; <?= date('Y') ?> Zaman Joarddar . All Rights Reserved.</p>
        </div>
    </footer>
</div>
