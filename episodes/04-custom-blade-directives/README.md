# Episode 04 – Custom Blade Directives

🎥 Watch the video: _YouTube Link_

---

## 🛠 What You'll Learn

- How to register your own Blade directives.
- How to simplify repetitive template code.
- How to write safe, maintainable directives.
- Examples of real-world directives.

---

## 🚀 Try It Yourself
1. Register a directive in `AppServiceProvider`:
   ```php
   Blade::directive('datetime', function ($expression) {
       return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
   });
   ```
2. Use it in a Blade view:
   ```php
   @datetime($user->created_at)
   ```

---

## 📚 Extra Reading

- [Laravel Docs – Extending Blade](https://laravel.com/docs/12.x/blade#extending-blade)

---

## 🔗 Series Index

Back to the [Laravel Toolbox main repo](https://github.com/juststeveking/laravel-toolbox).
