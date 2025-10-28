# 📚 Library Management System

## Description / Overview
A complete Laravel web application for managing library operations with books and authors.

## 🎯 Objectives
- Implement full CRUD operations
- Use Laravel MVC architecture
- Establish database relationships
- Create responsive web interfaces

## ✨ Features
- Author management (Add, View, Edit, Delete)
- Book inventory with author relationships
- Responsive Bootstrap design
- Form validation and error handling

## 👥 Contributors

- **[midosakr10](https://github.com/midosakr10)** - Project development & documentation
- **[simo123123](https://github.com/simo123123)** - Collaboration & testing


## 🚀 Installation
```bash
git clone https://github.com/midosakr10/library-system.git
cd library-system
composer install
php artisan migrate
php artisan serve


### **2. Database Migration Code:**
```markdown
```php
Schema::create('books', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->foreignId('author_id')->constrained();
    $table->string('isbn')->unique();
    $table->timestamps();
});

### **3. Eloquent Relationship Code:**
```markdown
```php
class Author extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
