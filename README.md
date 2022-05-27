#### To setup the project please follow this instructions:

1. Clone this repo:

```
cd/destination_folder (on your local machine)
git clone {repo_rul}
```

2. Create a database on your local machine 

3. Generate key:

```
php artisan key:generate
```

4. Rename `.env.example` file to `.env`

5. Open `.env` file and setup the following variables:

```
DB_DATABASE= {your database name}
DB_USERNAME= {db username}
DB_PASSWORD= {db password}
```

6. Star application using this command:

```
php artisan serve
```

7. Follow the generated link and start using application
