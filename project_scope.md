# Caspian Furniture - Project Scope Document

## Overview
This document outlines the scope of work for the **Caspian Furniture** web application. This project is currently in **Phase 1 (v1)**. The primary focus of this phase is setting up the foundational architecture, user roles, and making key front-end sections dynamic via a Filament administration panel. Later phases will introduce additional dynamic sections and advanced features.

## Core Technologies
- **Framework:** Laravel 12 (PHP 8.2+)
- **Admin Panel:** Filament v5
- **Role Management:** Spatie Laravel Permission
- **Frontend Styling:** Tailwind CSS v4, Vite

## Client Requirements (Phase 1)

### 1. User Roles and Permissions
A robust multi-role system will be implemented to govern access and capabilities within the application:
- **Super Admin:** Full access to all system settings, user management, and content.
- **Admin:** Access to manage website content, categories, and reviews.
- **Employee:** Restricted access to handle specific operational tasks.
- **User (Customer):** Standard front-end user with access to shopping, reviews, and profile.

### 2. Filament Dashboard
An intuitive admin interface built with Filament to manage the dynamic content, users, and roles efficiently.

### 3. Dynamic Front-End Sections
Based on the current `index.blade.php`, the following sections will be made dynamic, allowing administrators to manage them directly from the dashboard:

#### Dynamic Banners
- Background Image
- Heading
- Subheading
- Button Text
- Button Icon
- Button Link

#### Dynamic Categories
- Category Name
- Category Image
- Category Link

#### Dynamic Customer Reviews
- Customer Name
- Star Rating (1-5)
- Review Content

### 4. Database Seeders
To ensure a smooth setup and testing process, seeders will be created for all corresponding tables:
- `RolesAndPermissionsSeeder` (Creating Super Admin, Admin, Employee, User roles)
- `UserSeeder` (Default test accounts with assigned roles)
- `BannerSeeder` (Sample banner data matching the initial design)
- `CategorySeeder` (Sample categories like Storage Solutions, Lighting, etc.)
- `ReviewSeeder` (Sample customer reviews)

## Future Roadmap (Post v1)
As the project grows, more sections of the application will be transitioned into dynamic components. Future phases will likely cover:
- Dynamic Product listings and detail pages
- Dynamic "About Us" and company statistics
- E-commerce functionality (Cart, Checkout, Orders)
- Advanced inventory management
