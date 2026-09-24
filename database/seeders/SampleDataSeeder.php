<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Expense;
use App\Models\Meeting;
use App\Models\Message;
use App\Models\NewsletterSubscriber;
use App\Models\Page;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SampleDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedSettings();
        $this->seedClients();
        $this->seedMeetings();
        $this->seedExpenses();
        $this->seedMessages();
        $this->seedNewsletterSubscribers();
        $this->seedExtraProjects();
        $this->seedPrivacyPage();
    }

    private function seedSettings(): void
    {
        $settings = [
            'hero_words' => 'Web Applications, Modern Websites, APIs & Systems, Mobile Solutions',
        ];

        foreach ($settings as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }
    }

    private function seedClients(): void
    {
        $clients = [
            ['name' => 'Rahul Desai', 'company' => 'TechStart Solutions', 'email' => 'rahul@techstart.in', 'phone' => '+919876543210', 'project_type' => 'Web Application Development', 'status' => 'active', 'notes' => 'Long-term client, recurring work.'],
            ['name' => 'Priya Shah', 'company' => 'PixelLabs Agency', 'email' => 'priya@pixellabs.in', 'phone' => '+919812345670', 'project_type' => 'Website Redesign', 'status' => 'active', 'notes' => null],
            ['name' => 'Amit Verma', 'company' => 'CloudPeak', 'email' => 'amit@cloudpeak.io', 'phone' => '+919900112233', 'project_type' => 'API & Backend Development', 'status' => 'active', 'notes' => null],
            ['name' => 'Sneha Patel', 'company' => 'BrightCode Studio', 'email' => 'sneha@brightcode.in', 'phone' => '+919876512340', 'project_type' => 'UI/UX Implementation', 'status' => 'active', 'notes' => null],
            ['name' => 'Vikas Gupta', 'company' => 'FinTrack Solutions', 'email' => 'vikas@fintrack.in', 'phone' => '+919823456789', 'project_type' => 'Dashboard & Analytics', 'status' => 'active', 'notes' => 'Needs monthly maintenance.'],
            ['name' => 'Neha Joshi', 'company' => 'TravelKart', 'email' => 'neha@travelkart.in', 'phone' => '+919871234567', 'project_type' => 'E-commerce Website', 'status' => 'active', 'notes' => null],
            ['name' => 'Rohan Kulkarni', 'company' => 'BuildDesk', 'email' => 'rohan@builddesk.in', 'phone' => '+919834567890', 'project_type' => 'Web Application Development', 'status' => 'active', 'notes' => null],
            ['name' => 'Kavya Iyer', 'company' => 'MediCare Systems', 'email' => 'kavya@medicare.in', 'phone' => '+919845678901', 'project_type' => 'Healthcare Portal', 'status' => 'active', 'notes' => 'NDA signed.'],
            ['name' => 'Sameer Khan', 'company' => 'LogiTrack', 'email' => 'sameer@logitrack.in', 'phone' => '+919856789012', 'project_type' => 'Logistics Dashboard', 'status' => 'completed', 'notes' => null],
            ['name' => 'Divya Nair', 'company' => 'EventsHub', 'email' => 'divya@eventshub.in', 'phone' => '+919867890123', 'project_type' => 'Booking Platform', 'status' => 'completed', 'notes' => null],
            ['name' => 'Meera Pillai', 'company' => 'EdLearn Academy', 'email' => 'meera@edlearn.in', 'phone' => '+919878901234', 'project_type' => 'Learning Management System', 'status' => 'active', 'notes' => null],
            ['name' => 'Arjun Malhotra', 'company' => 'Shopora Retail', 'email' => 'arjun@shopora.in', 'phone' => '+919889012345', 'project_type' => 'E-commerce Store', 'status' => 'lead', 'notes' => 'Quotation shared.'],
            ['name' => 'Karan Mehta', 'company' => 'Streamline Media', 'email' => 'karan@streamlinemedia.in', 'phone' => '+919890123456', 'project_type' => 'Portfolio Website', 'status' => 'inactive', 'notes' => null],
        ];

        foreach ($clients as $client) {
            Client::firstOrCreate(['email' => $client['email']], $client);
        }
    }

    private function seedMeetings(): void
    {
        if (Meeting::count() > 0) {
            return;
        }

        $meetings = [
            [
                'name' => 'Ankit Joshi', 'email' => 'ankit@smartbiz.in', 'phone' => '+919876543210',
                'company' => 'SmartBiz', 'meeting_date' => now()->addDays(2)->toDateString(), 'meeting_time' => '11:00',
                'duration' => 45, 'topic' => 'Web Development', 'notes' => 'Wants a quote for an e-commerce build.', 'status' => 'pending', 'source' => 'public',
            ],
            [
                'name' => 'Ritika Sharma', 'email' => 'ritika@brandnest.co', 'phone' => '+919812345670',
                'company' => 'BrandNest', 'meeting_date' => now()->addDays(3)->toDateString(), 'meeting_time' => '15:30',
                'duration' => 30, 'topic' => 'Consulting', 'notes' => 'Tech stack review.', 'status' => 'confirmed', 'source' => 'public',
            ],
            [
                'name' => 'Mohit Jain', 'email' => 'mohit@startupx.in', 'phone' => '+919900112233',
                'company' => 'StartupX', 'meeting_date' => now()->addDays(5)->toDateString(), 'meeting_time' => '10:00',
                'duration' => 60, 'topic' => 'Project Discussion', 'notes' => null, 'status' => 'pending', 'source' => 'public',
            ],
            [
                'name' => 'Ishita Rao', 'email' => 'ishita@designwave.in', 'phone' => '+919876512340',
                'company' => 'DesignWave', 'meeting_date' => now()->subDays(4)->toDateString(), 'meeting_time' => '12:00',
                'duration' => 30, 'topic' => 'Collaboration', 'notes' => 'Discussed a joint venture.', 'status' => 'completed', 'source' => 'public',
            ],
            [
                'name' => 'Farhan Shaikh', 'email' => 'farhan@datacore.in', 'phone' => '+919823456789',
                'company' => 'DataCore', 'meeting_date' => now()->addDays(7)->toDateString(), 'meeting_time' => '16:00',
                'duration' => 45, 'topic' => 'Mobile App Development', 'notes' => 'Prefers a video call.', 'status' => 'pending', 'source' => 'admin',
            ],
            [
                'name' => 'Pooja Bhatt', 'email' => 'pooja@wellnessone.in', 'phone' => '+919871234567',
                'company' => 'WellnessOne', 'meeting_date' => now()->addDays(10)->toDateString(), 'meeting_time' => '09:30',
                'duration' => 30, 'topic' => 'Website Design', 'notes' => null, 'status' => 'cancelled', 'source' => 'public',
            ],
        ];

        foreach ($meetings as $meeting) {
            Meeting::create($meeting);
        }
    }

    private function seedExpenses(): void
    {
        if (Expense::count() > 0) {
            return;
        }

        $expenses = [
            ['title' => 'Domain renewal', 'amount' => 899.00, 'category' => 'Hosting', 'expense_date' => now()->subDays(2)->toDateString(), 'notes' => 'portfolio site domain'],
            ['title' => 'Shared hosting plan', 'amount' => 3499.00, 'category' => 'Hosting', 'expense_date' => now()->subDays(10)->toDateString(), 'notes' => null],
            ['title' => 'JetBrains license', 'amount' => 7800.00, 'category' => 'Software', 'expense_date' => now()->subDays(15)->toDateString(), 'notes' => 'PhpStorm annual'],
            ['title' => 'Cloud server', 'amount' => 2450.00, 'category' => 'Hosting', 'expense_date' => now()->subDays(20)->toDateString(), 'notes' => null],
            ['title' => 'Google Ads campaign', 'amount' => 3000.00, 'category' => 'Marketing', 'expense_date' => now()->subDays(6)->toDateString(), 'notes' => 'One-week trial'],
            ['title' => 'Coworking desk', 'amount' => 5000.00, 'category' => 'Office', 'expense_date' => now()->subDays(12)->toDateString(), 'notes' => null],
            ['title' => 'Mechanical keyboard', 'amount' => 4200.00, 'category' => 'Equipment', 'expense_date' => now()->subDays(25)->toDateString(), 'notes' => null],
            ['title' => 'Client meetup travel', 'amount' => 1350.00, 'category' => 'Travel', 'expense_date' => now()->subDays(4)->toDateString(), 'notes' => 'Ahmedabad client visit'],
            ['title' => 'Team lunch', 'amount' => 1200.00, 'category' => 'Food', 'expense_date' => now()->subDays(8)->toDateString(), 'notes' => null],
        ];

        foreach ($expenses as $expense) {
            Expense::create($expense);
        }
    }

    private function seedMessages(): void
    {
        if (Message::count() > 0) {
            return;
        }

        $messages = [
            [
                'name' => 'Harsh Vora', 'email' => 'harsh@mobilespace.in', 'subject' => 'Website enquiry',
                'message' => 'Hi Jaymin, need a business website for my mobile repair shop. Approximately how much would it cost?',
                'is_read' => false,
            ],
            [
                'name' => 'Tanvi Shah', 'email' => 'tanvi.shah@gmail.com', 'subject' => 'Freelance collaboration',
                'message' => 'We are a small design studio looking for a Laravel developer for a 2-month project. Are you available in March?',
                'is_read' => false,
            ],
            [
                'name' => 'Nikhil Bansal', 'email' => 'nikhil.bansal@hrmatrix.in', 'subject' => 'API integration help',
                'message' => 'Our team is stuck on a payment gateway integration. Do you offer paid consultation sessions?',
                'is_read' => true,
            ],
            [
                'name' => 'Sonal Mehta', 'email' => 'sonal@cafehouse.in', 'subject' => 'Thanks!',
                'message' => 'Just wanted to say the website you built for us is working great. Appreciate the support!',
                'is_read' => true,
            ],
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }
    }

    private function seedNewsletterSubscribers(): void
    {
        if (NewsletterSubscriber::count() > 0) {
            return;
        }

        $subscribers = [
            ['email' => 'dev.amit99@gmail.com', 'name' => 'Amit Sharma', 'is_active' => true],
            ['email' => 'pooja.xavier@outlook.com', 'name' => 'Pooja Xavier', 'is_active' => true],
            ['email' => 'ravi.kumar@yopmail.com', 'name' => 'Ravi Kumar', 'is_active' => false],
            ['email' => 'ishaan.verma@gmail.com', 'name' => 'Ishaan Verma', 'is_active' => true],
        ];

        foreach ($subscribers as $subscriber) {
            NewsletterSubscriber::firstOrCreate(['email' => $subscriber['email']], $subscriber);
        }
    }

    private function seedExtraProjects(): void
    {
        $projects = [
            [
                'title' => 'Restaurant Management System',
                'slug' => 'restaurant-management-system',
                'description' => 'A complete POS and management platform for restaurants with online ordering and staff roles.',
                'long_description' => 'Built a restaurant management platform covering table booking, an online ordering storefront, kitchen display system, and a staff role-based panel. Includes daily reports and inventory tracking with sales analytics.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => false,
                'sort_order' => 5,
            ],
            [
                'title' => 'HR & Payroll Dashboard',
                'slug' => 'hr-payroll-dashboard',
                'description' => 'An internal HR tool for leave management, attendance, payroll summaries and employee profiles.',
                'long_description' => 'Developed an internal HR dashboard with leave approval workflows, attendance tracking, payroll export and employee self-service profiles. Integrated role-based access for HR, managers and employees.',
                'technologies' => ['Laravel', 'JavaScript', 'MySQL', 'Alpine.js'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => false,
                'sort_order' => 6,
            ],
            [
                'title' => 'Inventory Management App',
                'slug' => 'inventory-management-app',
                'description' => 'Stock management with barcode scanning, low-stock alerts and purchase order tracking.',
                'long_description' => 'Created an inventory solution with barcode-based stock entry, automatic low-stock notifications, purchase order tracking and multi-warehouse support, backed by a dashboard of key metrics.',
                'technologies' => ['Laravel', 'JavaScript', 'MySQL', 'Bootstrap'],
                'live_url' => null,
                'github_url' => 'https://github.com/JAYMIN4200',
                'is_featured' => false,
                'sort_order' => 7,
            ],
        ];

        foreach ($projects as $project) {
            Project::firstOrCreate(['slug' => $project['slug']], $project);
        }
    }

    private function seedPrivacyPage(): void
    {
        Page::firstOrCreate(
            ['slug' => 'privacy'],
            [
                'title' => 'Privacy Policy',
                'content' => "This page explains how information collected through this website is handled.\n\nInformation I collect: contact form submissions (name, email and your message), newsletter subscriptions (email address), and anonymous site analytics such as visited pages.\n\nHow I use it: to respond to enquiries, send newsletter updates you have opted into, and improve the content and experience of this site.\n\nCookies: this site uses local storage to remember your theme preference. No tracking cookies are used.\n\nContact: if you have any questions about this policy, reach out through the contact page.",
                'is_published' => true,
            ]
        );
    }
}