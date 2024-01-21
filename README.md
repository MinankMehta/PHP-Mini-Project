# Online Book Management System

## Overview

The Online Book Management System is a web-based application designed to facilitate the administration and user interaction with a digital library. The system distinguishes between administrators and regular users, offering a range of features for efficient book management and user experience.

## Features

### Admin Panel

1. **User Management:**
   - Admins can log in to access the user update page.
   - Add, delete, and modify user details.
   - Change user privileges.

2. **Main Page Navigation:**
   - Admins can navigate to the main page for user interaction.

### Main Page (For Non-Admin Users)

1. **Book Display:**
   - Book containers showcase book covers, names, author names, and ratings out of 5.

2. **User Interaction:**
   - Users can rate books.
   - Rating is calculated as the total ratings sum divided by 5.
   - Users can click to download books.

3. **Search Options:**
   - Basic Search: Search for books by titles.
   - Advanced Search: Search using specific author, genre, rating, or any combination of two.

4. **Privilege-Based Features:**
   - **Privileged Users:**
     - Can add new books to the system.
     - Can delete their own uploaded books.
   - **Non-Privileged Users:**
     - Cannot add or delete books.

## Getting Started

Follow these steps to run the Online Book Management System on your local machine:

1. Clone the repository:
   ```bash
   git clone https://github.com/MinankMehta/PHP-Mini-Project.git
