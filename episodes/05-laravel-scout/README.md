# Episode 05 – Laravel Scout

🎥 Watch the video: _YouTube Link_

---

## 🛠 What You'll Learn

- How to add full-text search to your models.
- How to configure Laravel Scout with a driver (e.g. Meilisearch, Algolia).
- How to index, search, and paginate results.
- Trade-offs and best practices for search performance.

---

## 🚀 Try It Yourself
1. Install Scout:
   ```bash
   composer require laravel/scout
   ```
2. Add the Searchable trait to your model:
   ```php
   use Laravel\Scout\Searchable;

   class Post extends Model
   {
       use Searchable;
   }
   ```
3. Run a search:
   ```php
   $posts = Post::search('laravel')->get();
   ```

---

## 📚 Extra Reading

- [Laravel Docs – Scout](https://laravel.com/docs/12.x/scout)

---

## 🔗 Series Index

Back to the [Laravel Toolbox main repo](https://github.com/juststeveking/laravel-toolbox).
