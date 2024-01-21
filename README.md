# Online Book Management System

## Overview

The Online Book Management System is a web-based application designed to manage a digital library of books. The system provides functionalities for both administrators and regular users. Administrators can add, delete, modify user details, change privileges, and manage books. Regular users can access the main page, view book information, rate books, and download them. The system also includes search options for finding books based on titles, authors, genres, and ratings.

## Features

### Admin Panel

- **User Management:**
  - Add, delete, and modify user details.
  - Change user privileges.

- **Main Page Access:**
  - Admins can navigate to the main page or perform user management tasks.

### Main Page (For Non-Admin Users)

- **Book Containers:**
  - Display book covers along with book name, author name, and ratings out of 5.

- **Rating System:**
  - Users can rate books.
  - The rating is calculated as the total ratings sum divided by 5.

- **Download Option:**
  - Users can click to download books.

- **Search Options:**
  - Basic Search: Search for books by titles.
  - Advanced Search: Search using specific author, genre, rating, or any combination of two.

### User Privileges

- **Privileged Users:**
  - Can add new books to the system.
  - Can delete their own uploaded books.

- **Non-Privileged Users:**
  - Cannot add or delete books.

## Getting Started

Follow these steps to run the Online Book Management System on your local machine:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/book-management-system.git

