<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Testimonial;
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

        $testimonials = [
            [
                'client_name' => 'Rahul Desai',
                'company' => 'TechStart Solutions',
                'role' => 'Project Manager',
                'content' => 'Jaymin exceeded our expectations. He delivered a clean, fast and well-structured application ahead of schedule, and communication throughout was excellent.',
                'rating' => 5,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Priya Shah',
                'company' => 'PixelLabs Agency',
                'role' => 'Product Owner',
                'content' => 'Working with Jaymin was a pleasure. He understood our requirements quickly and translated them into a beautiful, performant product. Highly recommended.',
                'rating' => 5,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Amit Verma',
                'company' => 'CloudPeak',
                'role' => 'CTO',
                'content' => 'His Laravel expertise is solid. Jaymin handled complex API integrations and database optimizations with ease, and always communicated clearly about progress and trade-offs.',
                'rating' => 4,
                'sort_order' => 3,
            ],
            [
                'client_name' => 'Sneha Patel',
                'company' => 'BrightCode Studio',
                'role' => 'Founder',
                'content' => 'Jaymin rebuilt our entire website and the difference is night and day. Faster, cleaner and easier to manage. He is responsive, detail-oriented and a pleasure to work with.',
                'rating' => 5,
                'sort_order' => 4,
            ],
            [
                'client_name' => 'Vikas Gupta',
                'company' => 'FinTrack Solutions',
                'role' => 'Engineering Manager',
                'content' => 'We needed a reliable developer for our dashboard product and Jaymin delivered. High-quality code, minimal hand-holding, and realistic estimates from day one.',
                'rating' => 5,
                'sort_order' => 5,
            ],
            [
                'client_name' => 'Neha Joshi',
                'company' => 'TravelKart',
                'role' => 'Product Lead',
                'content' => 'Jaymin took our vague idea and shaped it into a polished product. The iteration speed was impressive and he always prioritized what mattered most for users.',
                'rating' => 4,
                'sort_order' => 6,
            ],
            [
                'client_name' => 'Rohan Kulkarni',
                'company' => 'BuildDesk',
                'role' => 'Technical Co-founder',
                'content' => 'Communication was the standout. Jaymin kept us updated at every step, explained technical decisions in plain language, and shipped a rock-solid application on time.',
                'rating' => 5,
                'sort_order' => 7,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::firstOrCreate(['client_name' => $testimonial['client_name']], $testimonial);
        }

        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'I offer custom web application development, website development, REST API development, database design and optimization, UI implementation, and ongoing maintenance and support.',
                'sort_order' => 1,
            ],
            [
                'question' => 'Which technologies do you work with?',
                'answer' => 'I specialize in Laravel and PHP for backend development, along with MySQL for databases, and JavaScript, Vue.js and Tailwind CSS for the frontend.',
                'sort_order' => 2,
            ],
            [
                'question' => 'How long does a typical project take?',
                'answer' => 'It depends on the scope. A simple website can take 1-2 weeks, while a full custom web application typically takes 4-8 weeks. I will give you a clear timeline after understanding your requirements.',
                'sort_order' => 3,
            ],
            [
                'question' => 'Do you provide support after the project is complete?',
                'answer' => 'Yes, I offer maintenance and support packages to keep your application running smoothly, including bug fixes, feature additions and regular updates.',
                'sort_order' => 4,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::firstOrCreate(['question' => $faq['question']], $faq);
        }

        $posts = [
            [
                'title' => 'Getting Started with Laravel',
                'slug' => 'getting-started-with-laravel',
                'excerpt' => 'A beginner-friendly introduction to building modern web applications with Laravel, from installation to your first routes.',
                'content' => "Laravel is one of the most popular PHP frameworks, and for good reason. It comes with an expressive syntax, a rich ecosystem, and tools that make developer experience genuinely enjoyable.\n\nIn this guide, I will walk you through the basics:\n\n1. Installing Laravel with Composer.\n2. Understanding the folder structure.\n3. Creating your first routes and views.\n4. Working with Eloquent models.\n5. Using Blade templates to build dynamic pages.\n\nOnce you have these fundamentals down, you can start exploring features like authentication, queues, and testing.\n\nStay tuned for more tutorials on building real-world applications with Laravel.",
                'is_published' => true,
                'published_at' => now()->subDays(3)->toDateTimeString(),
            ],
            [
                'title' => 'Building Clean REST APIs',
                'slug' => 'building-clean-rest-apis',
                'excerpt' => 'Learn how to design and build well-structured REST APIs in Laravel with validation, resources, and consistent responses.',
                'content' => "A good API is consistent, predictable, and easy to maintain. In Laravel, you can achieve this by:\n\n- Using resource controllers to keep routing organized.\n- Leveraging Form Requests for clean validation.\n- Returning responses through API Resources.\n- Handling errors with structured exception responses.\n\nConsistency matters most. Define conventions for your endpoints, payloads, and error format early, and every future endpoint will follow the same predictable pattern.",
                'is_published' => true,
                'published_at' => now()->subWeeks(1)->toDateTimeString(),
            ],
            [
                'title' => 'Why Tailwind CSS Speeds Up Frontend Work',
                'slug' => 'why-tailwind-css-speeds-up-frontend-work',
                'excerpt' => 'Utility-first styling lets you move fast without leaving your HTML. Here is why I use Tailwind CSS on nearly every project.',
                'content' => "Tailwind CSS changed how I think about frontend styling. Instead of jumping between CSS files and HTML, utility classes live right where you need them.\n\nThe main benefits:\n\n- Faster iteration because there is no context switching.\n- Consistent spacing, colors, and typography out of the box.\n- A config file that keeps your design tokens in one place.\n- Small production CSS thanks to automatic purging.\n\nCombined with component-oriented frameworks like Laravel Blade, Tailwind lets you build polished interfaces quickly while keeping the codebase maintainable.",
                'is_published' => true,
                'published_at' => now()->subWeeks(2)->toDateTimeString(),
            ],
        ];

        foreach ($posts as $post) {
            Post::firstOrCreate(['slug' => $post['slug']], $post);
        }

        $pages = [
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms',
                'content' => "Welcome to my portfolio website. By accessing this site, you agree to the following terms.\n\nAll content, including text, images, and code samples, is the property of the site owner unless otherwise stated. You may view and share content for personal, non-commercial purposes, provided you credit the source.\n\nThe services described on this site are provided on an 'as is' basis. While I strive to keep information accurate and up to date, I make no guarantees about completeness or availability.\n\nIf you have any questions about these terms, feel free to reach out through the contact page.",
                'is_published' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::firstOrCreate(['slug' => $page['slug']], $page);
        }
    }
}
