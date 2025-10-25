# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

This is a Laravel 12-based personal portfolio application with a CMS-style admin panel. The application features:

- **Frontend**: Dynamic portfolio website with modular sections (About, Services, Skills, Portfolio, Blog, etc.)
- **Backend**: Admin dashboard for content management
- **Authentication**: Laravel Jetstream with Sanctum API tokens and two-factor authentication
- **Frontend Components**: Livewire components for reactive UI without JavaScript complexity
- **Styling**: TailwindCSS with custom SCSS and Laravel Mix for asset compilation

## Architecture

### Core Structure
- **Models**: User-centric design where all portfolio data relates to a single user (User ID 1)
- **Livewire Components**: Located in `app/Livewire/` - handle dynamic frontend sections and admin CRUD operations
- **Views**: 
  - Portfolio frontend: `resources/views/portfolio/`
  - Admin dashboard: `resources/views/dashboard/`
  - Livewire views: `resources/views/livewire/`
- **Database**: MySQL with comprehensive migrations for portfolio entities (skills, projects, education, etc.)

### Key Models and Relationships
- **User**: Central model with relationships to all portfolio content
- **Section**: Controls which portfolio sections are active/visible
- **Portfolio**: Project items with categories and images
- **Post**: Blog functionality with categories and images
- **Education/WorkExperience**: Professional background data
- **Services**: Service offerings with descriptions
- **Skills**: Both professional and technical skills
- **ClientReview**: Testimonials and reviews

### Frontend Architecture
The main portfolio page (`/`) dynamically renders sections based on:
- User data and relationships loaded with eager loading
- Section activation status (controlled via admin panel)
- Livewire components for each major section

## Development Commands

### Setup & Installation
```bash
# Initial setup
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed

# Start development servers
php artisan serve
npm run dev
```

### Asset Management
```bash
# Development build
npm run dev

# Watch for changes
npm run watch

# Production build
npm run production

# Hot reload development
npm run hot
```

### Testing
```bash
# Run all tests
php artisan test
# or
./vendor/bin/phpunit

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run tests with coverage
php artisan test --coverage
```

### Code Quality
```bash
# Format code with Laravel Pint
composer run format
# or
./vendor/bin/pint

# Run static analysis with PHPStan/Larastan  
composer run analyse
# or
./vendor/bin/phpstan analyse

# Check formatting without fixing
./vendor/bin/pint --test
```

### Database Operations
```bash
# Fresh migration with seeding
php artisan migrate:fresh --seed

# Run specific seeder
php artisan db:seed --class=DatabaseSeeder

# Create new migration
php artisan make:migration create_example_table

# Create model with migration and factory
php artisan make:model Example -mf
```

### Livewire Development
```bash
# Create new Livewire component
php artisan make:livewire ExampleComponent

# Create Livewire component with inline view
php artisan make:livewire ExampleComponent --inline
```

## Important Configuration

### Environment Setup
- Default database: `portfolio_livewire` (MySQL)
- Session driver: `database` (requires sessions table migration)
- Mail testing: Configured for MailHog on port 1025

### Code Standards
- **Strict Types**: All PHP files use `declare(strict_types=1);`
- **PSR-4 Autoloading**: App namespace follows Laravel conventions
- **Laravel Pint**: Uses Laravel preset with custom rules for class attribute separation

### Asset Pipeline
- **Laravel Mix**: Compiles JS/SCSS assets
- **Main Files**: 
  - JS: `resources/js/app.js` and `resources/js/main.js`
  - SCSS: `resources/sass/app.scss` with TailwindCSS integration
- **Dependencies**: Bootstrap 5, Alpine.js, TailwindCSS, Axios

## Development Patterns

### Livewire Components Pattern
Most dynamic functionality uses Livewire components that:
- Fetch data in the `render()` method
- Return views with compact data
- Handle user interactions without page refreshes
- Are organized by functionality (e.g., `HomeSection`, `ServiceSection`, `CrudPortfolioItem`)

### Database Relationships Pattern
The User model serves as the central hub with `hasMany` relationships to all portfolio content, enabling easy eager loading:
```php
$user = User::find(1)->with([
    'professional_skills', 'technical_skills', 'services', 
    'featuredProjects', 'education', 'experiences', 
    'portfolios', 'posts', 'reviews', 'social_medias', 'sections'
])->first();
```

### Admin Panel Pattern
- Protected by `auth:sanctum` and `verified` middleware
- Each content type has dedicated CRUD routes and controllers
- Uses Laravel resource controllers for standard CRUD operations
- Livewire components handle interactive admin interfaces

### Frontend Rendering Pattern
The main portfolio page uses conditional rendering based on section activation:
```php
@foreach ($sections as $section)
    @if ($section->id === X && $section->isActive)
        {{-- Section content --}}
    @endif
@endforeach
```