# Episode 03 – Eloquent Accessors & Mutators

🎥 Watch the video: _YouTube Link_

---

## 🛠 What You'll Learn

- How to define accessors to transform model attributes.
- How to define mutators to clean or format data before saving.
- When to use cast vs. accessor/mutator.
- Best practices for keeping models maintainable.

---

## 🚀 Try It Yourself

1. Add an accessor to a model:
   ```php
   protected function fullName(): Attribute
   {
       return Attribute::make(
           get: fn ($value, $attributes) => $attributes['first_name'].' '.$attributes['last_name'],
       );
   }
2. Add a mutator to transform input:
   ```php
   protected function password(): Attribute
   {
       return Attribute::make(
           set: fn ($value) => bcrypt($value),
       );
   }
   ```

---

## 📚 Extra Reading

- [Laravel Docs – Eloquent Mutators](https://laravel.com/docs/12.x/eloquent-mutators)

---

## 🔗 Series Index

Back to the [Laravel Toolbox main repo](https://github.com/juststeveking/laravel-toolbox).
