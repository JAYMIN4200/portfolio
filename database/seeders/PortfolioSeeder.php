<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'site_title' => 'Jaymin Panchal',
            'site_tagline' => 'Full-Stack Web Developer',
            'site_description' => 'Full-Stack Web Developer with 2.5+ years of experience building modern, performant web applications using Laravel and modern JavaScript frameworks.',
            'footer_text' => 'All rights reserved.',
            'meta_keywords' => 'Jaymin Panchal, web developer, full-stack developer, portfolio, laravel, javascript, php, Ahmedabad',
            'meta_description' => 'Portfolio of Jaymin Panchal, a Full-Stack Web Developer specializing in Laravel, PHP, and modern web technologies. Based in Ahmedabad, Gujarat.',
            'contact_email' => 'jayminpanchal9037@gmail.com',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $user = User::firstOrCreate(
            ['email' => 'jayminpanchal9037@gmail.com'],
            [
                'name' => 'Jaymin Panchal',
                'password' => bcrypt('Jaymin@4200'),
                'is_admin' => true,
            ]
        );

        Profile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'title' => 'Full-Stack Web Developer',
                'bio' => 'I am a Full-Stack Web Developer with 2.5+ years of experience building modern web applications. I specialize in Laravel, PHP, JavaScript, and love crafting clean, scalable solutions. Based in Ahmedabad, Gujarat.',
                'phone' => '+91 9558166838',
                'location' => 'Naroda, Ahmedabad, Gujarat 382330, India',
                'github' => 'https://github.com/JAYMIN4200',
                'linkedin' => 'https://linkedin.com/in/jaymin4200',
                'twitter' => null,
                'website' => null,
            ]
        );

        $skills = [
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 92, 'sort_order' => 1],
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 90, 'sort_order' => 2],
            ['name' => 'MySQL', 'category' => 'Backend', 'proficiency' => 85, 'sort_order' => 3],
            ['name' => 'REST APIs', 'category' => 'Backend', 'proficiency' => 88, 'sort_order' => 4],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 85, 'sort_order' => 1],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'proficiency' => 80, 'sort_order' => 2],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'proficiency' => 90, 'sort_order' => 3],
            ['name' => 'HTML5', 'category' => 'Frontend', 'proficiency' => 95, 'sort_order' => 4],
            ['name' => 'CSS3', 'category' => 'Frontend', 'proficiency' => 88, 'sort_order' => 5],
            ['name' => 'Git', 'category' => 'Tools', 'proficiency' => 85, 'sort_order' => 1],
            ['name' => 'Docker', 'category' => 'Tools', 'proficiency' => 65, 'sort_order' => 2],
        ];

        foreach ($skills as $skill) {
            Skill::firstOrCreate(
                ['name' => $skill['name'], 'category' => $skill['category']],
                $skill
            );
        }

        $experiences = [
            [
                'company' => 'Web Development Company',
                'position' => 'Full-Stack Developer',
                'description' => 'Building and maintaining web applications using Laravel, PHP, and JavaScript. Developing RESTful APIs, managing MySQL databases, and collaborating with cross-functional teams to deliver high-quality software.',
                'start_date' => '2024-03-01',
                'end_date' => null,
                'is_current' => true,
                'location' => 'Ahmedabad, Gujarat',
                'sort_order' => 1,
            ],
            [
                'company' => 'Software Agency',
                'position' => 'Junior Web Developer',
                'description' => 'Developed client websites and web applications using Laravel and Vue.js. Gained hands-on experience with database design, API integration, and responsive UI development.',
                'start_date' => '2023-09-01',
                'end_date' => '2024-02-28',
                'is_current' => false,
                'location' => 'Ahmedabad, Gujarat',
                'sort_order' => 2,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::firstOrCreate(
                ['company' => $experience['company'], 'position' => $experience['position']],
                $experience
            );
        }

        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'description' => 'A full-featured e-commerce platform with product management, cart, checkout and admin panel.',
                'long_description' => 'Built a complete e-commerce solution using Laravel and Vue.js. Includes product catalog, shopping cart, checkout integration, order management, and a full admin dashboard. Features include search with filters, inventory management, and email notifications.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Task Management App',
                'slug' => 'task-management-app',
                'description' => 'A collaborative task management application with real-time updates and team workspaces.',
                'long_description' => 'Developed a real-time task management application using Laravel, JavaScript, and modern web technologies. Features include drag-and-drop kanban boards, team workspaces, file attachments, and activity feeds.',
                'technologies' => ['Laravel', 'JavaScript', 'MySQL', 'Tailwind CSS'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Blog Platform',
                'slug' => 'blog-platform',
                'description' => 'A modern blogging platform with rich text editing, categories, and SEO optimization.',
                'long_description' => 'Created a blogging platform with Laravel. Features include rich text editing, category management, full-text search, automatic sitemap generation, and social media card support.',
                'technologies' => ['Laravel', 'JavaScript', 'MySQL', 'Tailwind CSS'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => false,
                'sort_order' => 3,
            ],
            [
                'title' => 'Portfolio Website',
                'slug' => 'portfolio-website',
                'description' => 'A modern developer portfolio built with Laravel and Tailwind CSS with a full admin backend.',
                'long_description' => 'Designed and built a professional portfolio website featuring a modern dark-themed frontend, responsive design, and a secure admin panel for managing content. Includes project showcase, skills management, contact form, and SEO optimization.',
                'technologies' => ['Laravel', 'Tailwind CSS', 'MySQL', 'Blade'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::firstOrCreate(['slug' => $project['slug']], $project);
        }

        $services = [
            ['title' => 'Web Application Development', 'description' => 'Custom web applications built with Laravel and modern JavaScript frameworks, tailored to your specific business needs.', 'sort_order' => 1],
            ['title' => 'Website Development', 'description' => 'Responsive, fast and SEO-optimized websites that make your brand stand out and convert visitors into customers.', 'sort_order' => 2],
            ['title' => 'API Development', 'description' => 'RESTful APIs designed with security, scalability and performance in mind, ready to power your next application.', 'sort_order' => 3],
            ['title' => 'Database Design & Optimization', 'description' => 'Efficient database schemas, query optimization and performance tuning to keep your application fast as it grows.', 'sort_order' => 4],
            ['title' => 'UI/UX Implementation', 'description' => 'Pixel-perfect implementations of designs, with a focus on accessibility, responsiveness and smooth interactions.', 'sort_order' => 5],
            ['title' => 'Maintenance & Support', 'description' => 'Ongoing maintenance, bug fixes, feature additions and technical support to keep your application running smoothly.', 'sort_order' => 6],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['title' => $service['title']], $service);
        }
    }
}
