# Episode 01 – API Resources

🎥 Watch the video: _YouTube Link_

---

## 🛠 What You'll Learn
- How to generate a Laravel API Resource.
- How to transform Eloquent models into clean JSON.
- How to handle single items vs. collections.
- Best practices and gotchas to avoid.

---

## 🚀 Try It Yourself
1. Generate a resource:
   ```bash
   php artisan make:resource UserResource
   ```
2.	Add fields to toArray().
3.	Return it in your controller with:

    ```php
    return new UserResource($user);
    ```
---

## 📚 Extra Reading

- [Laravel Docs – API Resources](https://laravel.com/docs/12.x/eloquent-resources)

---

## 🔗 Series Index

Back to the [Laravel Toolbox main repo](https://github.com/juststeveking/laravel-toolbox).
