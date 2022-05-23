# Pic-website
1. **DB Structure**
   - Pics
     - id           |   bigint
     - image        |   string(250) |   nullable
     - price        |   int         |   nullable
     - post_title   |   string(100) |   nullable
     - pic_title    |   string(100) |   nullable
     - description  |   text        |   nullable
     - author       |   string(50)  |   nullable
     - state_place  |   string(150) |   nullable
     - shoot_place  |   string(150) |   nullable
     - pic_time     |   int         |   nullable
     - pic_date     |   date        |   nullable
     - size         |   mediumint
     - type         |   string(150)   
     - on_sale      |   boolean
     - vote         |   int
     - created_at   |   date        
     - modified_at  |   date        
2. **Create DB**
3. **.env file**
   - if .env exists: 
     - update the fields aboute the db
   - if .env dosn't exist:
     - copy the .env.example file in the same folder
     - rename it to .env
     - execute command: php artisan key:generate
     - update the fields about the db
4. **php artisan make:model --all Pic**
    **Model**
    - Pic
    **Controller**
    - PicController 
    **Migration**
    - create_pics_table
    **Seeder**
    - PicSeeder.php
    - **Views**
1. **php artisan: migrate**
    - 
