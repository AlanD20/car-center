# Car Center

- a single landing page to showcase the company's information in 3 different languages

    - Includes an admin panel that gives you full control over the entire website and to Create, Edit, and Delete slide shows, services, team members, and partners. including the about section.
    - The website is fully responsive for both desktop & mobile with PWA (Progressive Web App) enabled. Allowing visitors to install the website as an application on their smartphone.
    - I have done a full server setup including setting up the Laravel project to be deployed through cPanel without having SSH access.
    - SEO-friendly and Google indexing.


## **[Project Live Preview](https://car-center.aland20.com/)**

---

## Deployment

- **The project configured for CPANEL installation, you do not have to worry about changing file paths. Also, you can serve it through Artisan command.**

### Deploying through SSH access:

- You can follow this guide to learn more about how to deploy Laravel project through SSH access.

[Click here for the guide](https://devmarketer.io/learn/deploy-laravel-5-app-lemp-stack-ubuntu-nginx/)

### Local Development:

- **Don't forget to change the current working directory to** `Laravel`.
    ```bash
    cd Laravel
    ```
1. Install and update required dependencies on your local machine.
    ```bash
    composer install --no-dev -o
    ```
2. Install npm packages using yarn.
    ```bash
    yarn
    ```
3. Clear cache and dump autoload.
    ```bash
    
    yarn cache:clear
    composer dump-autoload -o
    ```
4. Cache the application and generate new app key.
    ```bash
    composer run deploy
    ```
5. Do not forget to edit `.env` file with your information.
6. Migrate and seed the database.
    ```bash
    php artisan migrate --seed
    ```
7. Run Vite server and serve the laravel application. (requires two terminal)
    ```bash
    yarn dev
    php artisan serve
    ```

### Deploying on CPANEL:
1. Compress the project including both `Laravel` and `public_html` directory then upload it to CPANEL.
2. Change permissions for the following folders.
    ```bash
    sudo chmod 775 -R Laravel/storage
    sudo chmod 775 -R Laravel/bootstrap/cache
    ```
3. Visit the following path on your website to clear out the application cache. **(You can change header authorization key in .env file)**
`https://website.com/config/cache`
4. At config page, you can migrate and config your application.
   `https://website.com/config`
5. The site should work with no problem!

## Contribution

Feel free to contribute to the project. Make sure to credit me :)

## License

[GNU GENERAL PUBLIC LICENSE](LICENSE)
