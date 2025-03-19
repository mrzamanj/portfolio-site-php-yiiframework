<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Zaman Joarddar \'s Portfolio';
?>
<div class="site-index">

    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Hello, I'm <strong>Zaman Joarddar </strong></h1>
            <p class="lead">Project Manager | Full-Stack Developer | Technology Enthusiast</p>
            <p><a href="#projects" class="btn btn-light btn-lg">See My Work</a></p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="h3">About Me</h2>
                    <p class="lead">I am a results-driven Project Manager with 9+ years of experience in full-stack development, team leadership, and project management. I am skilled in overseeing remote teams, managing project lifecycles, and delivering scalable, high-performance solutions using PHP, Node.js, Laravel, and React. I'm passionate about fostering collaboration, improving system architecture, and ensuring on-time, high-quality software delivery.</p>
                    <p>Currently, I am seeking a remote leadership role to drive innovation and deliver impactful technology solutions.</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/mrzmna" target="_blank">Zaman Joarddar </a></li>
                        <li class="list-inline-item"><strong>Phone:</strong> +88 01734446514</li>
                        <li class="list-inline-item"><strong>Email:</strong> <a href="mailto:mrazmna@gmail.com">mrazmna@gmail.com</a></li>
                        <li class="list-inline-item"><strong>GitHub:</strong> <a href="https://github.com/mrzmnaj" target="_blank">GitHub</a></li>
                        <li class="list-inline-item"><strong>Portfolio:</strong> <a href="https://portfolio-link.com" target="_blank">My Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 p-5">
                <img src="<?= Yii::getAlias('@web') ?>/uploads/images/profile.png" alt="Zaman Joarddar " class="img-fluid rounded-circle" />
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Skills & Competencies</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Project & Team Management</h4>
                    <ul>
                        <li>Agile (Scrum, Kanban), Sprint Planning, Remote Team Leadership</li>
                        <li>Jira, Asana, Trello, ClickUp, Resource & Time Tracking (Clockify, RescueTime)</li>
                        <li>Team Collaboration (Slack, Skype, Zoom), Risk & Workflow Optimization</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Technical Expertise & DevOps</h4>
                    <ul>
                        <li>System Architecture & Design (Monolithic, Microservices)</li>
                        <li>Cloud Services (AWS, DigitalOcean, GCP, VPS), Kubernetes, Terraform</li>
                        <li>DevOps & Deployment (Docker, Nginx, Apache, CI/CD: Jenkins, GitHub Actions, GitLab CI)</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Software Development</h4>
                    <ul>
                        <li><strong>Backend:</strong> PHP (Laravel, CodeIgniter), Node.js (Express, Fastify), Python (FastAPI, Flask)</li>
                        <li><strong>Frontend:</strong> JavaScript (React, jQuery), UI/UX (Figma, Tailwind, Bootstrap)</li>
                        <li><strong>Databases:</strong> MySQL, MongoDB, Redis, DynamoDB</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">My Recent Projects</h2>
        <div class="row">
            <!-- Project 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">HRM - Human Resource Management System</h5>
                        <p class="card-text">Built using Microservices architecture with Node.js, Go, Python, Kafka, and Docker.</p>
                        <p><strong>Skills:</strong> Microservices, API Development, Database Management</p>
                        <p><strong>Technologies:</strong> Node.js, Go, Python, Kafka, Docker</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">LMS - Learning Management System</h5>
                        <p class="card-text">A full-stack LMS developed using Laravel, jQuery, Bootstrap, and RESTful APIs.</p>
                        <p><strong>Skills:</strong> Full-Stack Development, UI/UX, API Integration</p>
                        <p><strong>Technologies:</strong> Laravel, jQuery, Bootstrap, RESTful APIs</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">Ecommerce - Online Marketplace with Multi-Vendor</h5>
                        <p class="card-text">Built with Next.js, Node.js, MongoDB, and Laravel.</p>
                        <p><strong>Skills:</strong> E-commerce, Database Design, Payment Gateway Integration</p>
                        <p><strong>Technologies:</strong> Next.js, Node.js, MongoDB, Laravel</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <!-- Additional 9 Projects -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">POS System</h5>
                        <p class="card-text">Point of Sale system for retail businesses.</p>
                        <p><strong>Skills:</strong> Inventory Management, POS Development</p>
                        <p><strong>Technologies:</strong> Laravel, Vue.js, MySQL</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">Real Estate Listing Platform</h5>
                        <p class="card-text">A property listing and management system.</p>
                        <p><strong>Skills:</strong> UI/UX, API Development</p>
                        <p><strong>Technologies:</strong> Next.js, Node.js, MongoDB</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">Blog & Content Management System</h5>
                        <p class="card-text">A blogging platform with SEO features.</p>
                        <p><strong>Skills:</strong> SEO, Content Management</p>
                        <p><strong>Technologies:</strong> Laravel, MySQL, Bootstrap</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">Healthcare Management System</h5>
                        <p class="card-text">A digital solution for hospitals and clinics.</p>
                        <p><strong>Skills:</strong> Healthcare Software, Database Management</p>
                        <p><strong>Technologies:</strong> Python, Django, PostgreSQL</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">Chat Application</h5>
                        <p class="card-text">A real-time messaging platform.</p>
                        <p><strong>Skills:</strong> WebSockets, Real-time Communication</p>
                        <p><strong>Technologies:</strong> Node.js, Socket.io, React</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body" style="min-height:250px">
                        <h5 class="card-title">Online Exam System</h5>
                        <p class="card-text">A web-based exam and grading system.</p>
                        <p><strong>Skills:</strong> Assessment Management, Security</p>
                        <p><strong>Technologies:</strong> Laravel, Vue.js, MySQL</p>
                        <!-- <a href="#" class="btn btn-primary">View Project</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Certifications Section -->
    <section id="certifications" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Certifications</h2>
            <ul class="list-group">
                <li class="list-group-item">Google Project Management Certificate – Completed (January 2025)</li>
                <li class="list-group-item">Agile Project Management – Coursera (University of Maryland) – Completed (December 2024)</li>
                <li class="list-group-item">Introduction to Project Management – Alison – Completed (November 2024)</li>
                <li class="list-group-item">Scrum Master Fundamentals – Scrum Training Series – Completed (October 2024)</li>
                <li class="list-group-item">Project Management Principles and Practices – Coursera (University of California, Irvine) – Completed (September 2024)</li>
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
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
