<p align="center">
  <a href="https://asteriosphp.de">
    <img src="https://asteriosphp.de/assets/media/images/asteriosphp%20logo.png" width="100" />
  </a>
</p>

<h1 align="center">AsteriosPHP scaffold</h1>

<div align="center">
  This repository contains the default scaffold for AsteriosPHP.
  <br />
  The source code for the framework itself can be found at 
  <code><a href="https://github.com/asteriosframework/core">asteriosframework/core</a></code>.
  <br /><br />

  <pre><div align="center">composer create-project asterios/app</div></pre>
</div>

---

# 🚀 Getting Started

```bash
composer create-project asterios/app my-asterios-app
cd my-asterios-app
php -S localhost:8000
```

👉 That's it.  
All frontend assets (Tailwind CSS) are automatically installed and built during `composer install`.

---

# ⚙️ Environment Configuration

On first install, Asterios automatically creates a `.env` file.

```
.env
.env.example
```

- `.env.example` → template committed to the repository
- `.env` → your local configuration (generated automatically)

👉 The `.env` file is created during:

```bash
php asterios install
```

You can safely modify your `.env` file for:

- database credentials
- app environment
- custom configuration

---

# 📁 Project Structure

```text
app/                     # Application logic (Controllers, Services, etc.)
assets/css/              # Tailwind source files
cache/                   # Cache directory
config/                  # Configuration files
database/                # Migrations and seeders
logs/                    # Log files
public/                  # Public files
templates/               # Email templates
views/                   # Twig templates
```

---

# 🧠 App Layer

```text
app/
├── Contracts/          
├── Controller/         
├── Data/               
├── Enums/              
├── Exceptions/         
├── Middleware/         
├── Models/             
├── Repositories/       
├── Service/            
├── Support/            
├── Traits/             
```

---

# 🧰 Asterios CLI

AsteriosPHP ships with a built-in CLI tool.

From the project root, you can run commands directly.

Make sure the file is executable:

```bash
chmod +x asterios
```

Run commands via:

```bash
asterios <command>
```

No php prefix is required.

## 📊 System

```bash
asterios about
asterios list
```

## 🗄 Database

```bash
asterios migrate
asterios migrate:status
asterios db:seed
```

## 🧪 Test Data

```bash
asterios fake:bank
asterios fake:uuid
```

## ⚙️ Setup

```bash
asterios install
```

## 🏗 Code Generation

```bash
asterios make:model
asterios make:migration
asterios make:seeder
```

## 🖼 View / Twig

```bash
php asterios view:cache
php asterios view:clear
```

---

# 🎨 Frontend (Tailwind CSS)

This project uses **Tailwind CSS only**.

## 📁 Structure

```text
assets/css/asterios-app.css
public/assets/css/asterios-app.css
tailwind.config.js
```

---

## ⚙️ Build Commands

### Development (watch mode)

```bash
npm run dev
```

### Production build

```bash
npm run build
```

---

## 🔁 Via Composer

```bash
composer dev-assets
composer build-assets
```

---

## 🤖 Automatic Setup

On install/update:

- npm install
- npm run build

---

# 🧱 Twig Components

```
views/components/
```

Example:

```twig
{% include "components/button.twig" with { label: "Click me" } %}
```

---

# 🎨 Design System

Defined in:

```
assets/css/asterios-app.css
```

Example:

```css
@layer components {
  .btn-primary {
    @apply inline-block px-8 py-3 rounded-full font-medium text-white 
           bg-gradient-to-br from-primary to-secondary 
           hover:opacity-90 transition;
  }
}
```

---

# ⚙️ Tailwind Config

```
tailwind.config.js
```

Example:

```js
extend: {
  colors: {
    primary: "#0d6efd",
    secondary: "#20c997"
  }
}
```

---

# 💡 Customize

Edit:

```
tailwind.config.js
assets/css/asterios-app.css
```

Add components:

```
views/components/*.twig
```

---

# 🧠 Philosophy

- No Bootstrap
- Tailwind only
- Twig components
- Clean architecture
- Built-in CLI
- Environment-based configuration
- Zero-config setup via Composer

---

# 📦 Requirements

- PHP 8.3+
- Node.js

---

# ❤️ AsteriosPHP

https://asteriosphp.de
