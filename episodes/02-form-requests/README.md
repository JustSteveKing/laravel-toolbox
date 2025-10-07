# Episode 02 – Form Requests

🎥 Watch the video: _YouTube Link_

---

## 🛠 What You'll Learn
- How to generate a Form Request in Laravel
- How to centralize validation and authorization logic.- How to handle single items vs. collections.
- How to keep controllers clean and focused.
- Common validation rules and patterns.
---

## 🚀 Try It Yourself
1. Generate a form request:
   ```bash
   php artisan make:request StoreUserRequest
   ```
2. Define validation rules inside the `rules()` method.
3. Use it in your controller action:

   ```php
   public function store(StoreUserRequest $request)
   {
    // $request->validated() returns validated data
   }
    ```
---

## 📚 Extra Reading

- [Laravel Docs – Form Requests](https://laravel.com/docs/12.x/validation#form-request-validation)

---

## 🔗 Series Index

Back to the [Laravel Toolbox main repo](https://github.com/juststeveking/laravel-toolbox).
